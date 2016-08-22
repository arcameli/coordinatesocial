var dark = dark || {};
dark.profile = dark.profile || {
    idToken: null,
    clientID: null,
    created_at: "",
    email: "",
    email_verified: false,
    family_name: "",
    gender: "",
    given_name: "",
    global_client_id: null,
    identities: [],
    locale: "en",
    name: "",
    nickname: "",
    picture: "",
    updated_at: "",
    user_id: null
};
dark.syncProfile = function(callback) {
    this.log("syncProfile");
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "/?action=dark.profile", true);
    xhr.setRequestHeader('Content-Type', 'application/json; charset=UTF-8');
    xhr.send(JSON.stringify(dark.profile));
        if(typeof(callback) == 'function')
            callback();
};
dark.logout = function(callback) {
    localStorage.clear();
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "/?action=dark.logout", true);
    xhr.send();
    document.location = '/';
}
dark.login = function(callback) {
    dark.log("auth", "login");
    /* Force Login */
    dark.lock = dark.lock || new Auth0Lock('R9BWEKmvbdPR5Uf9KNyFdibFCNXxpLrQ', 'arcameli.auth0.com', {
        auth: {
            params: {
                scope: 'openid profile read:user_idp_tokens'
            }
        },
        theme: {
            labeledSubmitButton: false,
            logo: "https://dark.somethingbinary.com/img/logo.png",
            primaryColor: "black"
        }
    });
    dark.lock.on("authenticated", function(authResult) {
        lock.getProfile(authResult.idToken, function(error, profile) {
            if (error)
                return;
            localStorage.setItem("idToken", authResult.idToken);
            localStorage.setItem("profile", JSON.stringify(profile));
            dark.syncProfile(callback);
        });
    });
    dark.lock.show();
}
dark.log = function(a,b,c) { 
    console.log("dark.log: ", a, b, c);
}
dark.loadPage = function(page, callback) {
    if(typeof(page) == 'undefined') {
        if(document.location.hash.length > 2 && document.location.hash.length < 10)
            return dark.loadPage(document.location.hash.substr(1), callback);
        else
            return dark.loadPage("home", callback);
    }
    this.log("loadPage", page);
    var items = document.querySelectorAll('li[data-page]:not([data-page='+page+'])');
    for (var i = 0; i < items.length; i++) {
        items[i].classList.remove('dark-theme-d4');
    }
    items = document.querySelector('li[data-page='+page+']');
    if(items) items.classList.add('dark-theme-d4');
    if(document.querySelector('#dark-page').innerHTML.indexOf("logo_spinner") == -1) {
        var html = "<br /><br /><div class='dark-row'><div class='dark-col s1 m3'>&nbsp;</div>";
        html += "<div class='dark-col s10 m6 dark-padding-large dark-center dark-spin'><img src='/img/logo_spinner.png' style='max-width: 200px; opacity: 0.1' />";
        html += "</div><div class='dark-col s1 m3'>&nbsp;</div></div></div>";
        document.querySelector('#dark-page').innerHTML = html;
    }
    setTimeout(function() {
        var cacheBusters = new Headers();
        cacheBusters.append('pragma', 'no-cache');
        cacheBusters.append('cache-control', 'no-cache');
        fetch('/pages/' + page + ".php", {
            headers: cacheBusters,
            credentials: 'same-origin'
        }).then(function(response) {
            if(response.status == 200)
                return response.text();
            else if(response.status == 401) {
                setTimeout(function() { dark.login(function() {
                    dark.loadPage(page, callback);
                }); });
                return null;
            }
            else {
                setTimeout(function() { dark.loadPage('error-404'); });
                return null;
            }
        }).then(function(body) {
            if(body == null || body.length == 0) return;
            document.querySelector('#dark-page').innerHTML = body;
            var stateObj = { page: page };
            history.replaceState(stateObj, "dark [" + page + "]", "/#"+page);
            if(typeof(callback) == 'function')
                callback();
            document.dispatchEvent(new Event('dark.pageLoaded'));
        });
    }, 250);
};
dark.openNav = function() {
    this.log("openNav");
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("dark-show") == -1) {
        x.className += " dark-show";
    } else {
        x.className = x.className.replace(" dark-show", "");
    }
};
if(localStorage.getItem("idToken") != null)
{
    dark.profile["idToken"] = localStorage.getItem("idToken");
    var profile = JSON.parse(localStorage.getItem("profile"));
    for (var k in Object.getOwnPropertyNames(profile)) {
        propName = Object.getOwnPropertyNames(profile)[k];
        if(dark.profile.hasOwnProperty(propName))
            dark.profile[propName] = profile[propName];
    }
}