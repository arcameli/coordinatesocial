if(document.location.hash.indexOf("access_token") >= 0) {
    dark.log("auth", "access_token");
    /* Register Authentication Attempt */
    dark['auth0'] = new Auth0({
        domain:                 'arcameli.auth0.com',
        clientID:               'R9BWEKmvbdPR5Uf9KNyFdibFCNXxpLrQ',
        callbackURL:            '/',
        callbackOnLocationHash: true
    });
    var result = dark.auth0.parseHash(window.location.hash);
    if (result && result.id_token) {
      dark.auth0.getProfile(result.id_token, function (err, profile) {
        localStorage.setItem("idToken", result.id_token);
        profile['idToken'] = result.id_token;
        localStorage.setItem("profile", JSON.stringify(profile));
        var xhr = new XMLHttpRequest();
        xhr.open("POST", "/?action=dark.profile", true);
        xhr.setRequestHeader('Content-Type', 'application/json; charset=UTF-8');
        xhr.send(JSON.stringify(profile));
        document.location = '/';
      });
      // If offline_access was a requested scope
      // You can grab the result.refresh_token here
    } else if (result && result.error) {
      alert('error: ' + result.error);
    }
}
else if(localStorage.getItem("idToken") != null) {
    dark.log("auth", "localStorage");
    /* Register Authentication Attempt */
    dark['auth0'] = new Auth0({
        domain:                 'arcameli.auth0.com',
        clientID:               'R9BWEKmvbdPR5Uf9KNyFdibFCNXxpLrQ',
        callbackURL:            '/',
        callbackOnLocationHash: true
    });
    if(!dark.serverSynced) {
        /* Server Session Needs An Update */
        dark.syncProfile(function() { document.location.reload(); });
    }
    else
        dark.loadPage();
}
else {
    dark.loadPage('intro');
    /* Do nothing */
}