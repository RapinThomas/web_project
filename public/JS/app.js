(function ($) {
    $('.addPanier').click(function (event) {
        event.preventDefault();
        $.get($(this).attr('href'), {}, function (data) {
            if (data.error) {
                alert(data.message);
            } else {
                //propose de rediriger vers le panier
                if (confirm(data.message + 'Voulez vous aller sur le panier ?')) {
                    location.href = 'panier.php';
                } else {

                }
            }
        }, 'json');
        return false;
    })

})(jQuery);