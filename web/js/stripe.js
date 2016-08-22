dark.stripe = dark.stripe || [];
dark.stripe.bindEvents = function() {

    dark.stripe.checkout = dark.stripe.checkout || StripeCheckout.configure({
        key: 'pk_test_6pRNASCoBOKtIshFeQd4XMUh',
        image: '/img/documentation/checkout/marketplace.png',
        locale: 'auto',
        token: function(token) {
            var xhr = new XMLHttpRequest();
            xhr.open("POST", "/?action=dark.stripe.payment", true);
            xhr.setRequestHeader('Content-Type', 'application/json; charset=UTF-8');
            xhr.send(JSON.stringify(token));
            dark.log("Stripe", "Payment Processing", token.id);
        }
    });

    var stripe_forms = document.querySelectorAll('form.stripe-form[data-name][data-desc][data-price]');
    for (var i = 0; i < stripe_forms.length; i++) {
        var form = stripe_forms[i];
        form.addEventListener('submit', function(event) {
            event.preventDefault();
            event.stopPropagation();
        });
        [].forEach.call(form.childNodes, function (item) {
            if(item.nodeType == 1) /* Element, Should be a button */
                item.addEventListener('click', function(event)
                {
                    event.preventDefault();
                    dark.stripe.checkout.open({
                        name: form.dataset.name,
                        description: form.dataset.desc,
                        amount: parseFloat(form.dataset.price)
                    });
                });
        });
    }
};

document.addEventListener("DOMContentLoaded", function(event) { 
    dark.stripe.bindEvents();
});

document.addEventListener("dark.pageLoaded", function(event) {
    dark.stripe.bindEvents();
});

// Close Checkout on page navigation:
window.onpopstate = function(event) {
    if(dark.stripe)
        dark.stripe.close();
};