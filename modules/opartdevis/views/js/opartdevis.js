/**
 * Prestashop module : OpartDevis
 *
 * @author Olivier CLEMENCE <manit4c@gmail.com>
 * @copyright  Op'art
 * @license Tous droits réservés / Le droit d'auteur s'applique (All rights reserved / French copyright law applies)
 */

$(document).ready(function () {
    // Update "Order" button on payment page
    var payment_button = $("#payment-confirmation button").html();

    $("#checkout-payment-step input").click(function (e) {
        setTimeout(function() {
            if ($("#opart-devis-payment").parent().css('display') == "block"){
                $("#payment-confirmation button").html(order_button_content);
            } else {
                $("#payment-confirmation button").html(payment_button);
            }
        }, 100);
    });

    // Override ps_shopping_cart JS modal
    prestashop.blockcart = prestashop.blockcart || {};

    // save classic modal
    var blockCartModal = prestashop.blockcart.showModal;

    // custom function for opartdevis-modal
    prestashop.blockcart.showModal = function opartShowModal(modalHTML) {
        var $body = $('body');
        var $modal = $('#opartdevis-modal');
        var $backDrop = $('.modal-backdrop');

        $body.append(modalHTML);
        $backDrop.fadeTo('200', .4);
        $modal.fadeIn();

        $body.one('click', '#opartdevis-modal', function (event) {
            $modal.remove();
            $backDrop.remove();
        });
    };

    $(document).ready(function () {
        prestashop.on(
            'updateCart',
            function (event) {
                // if freezed cart, display custom modal
                if (event.resp) {
                    if (event.resp.hasError && event.resp.modal) {
                        prestashop.blockcart.showModal(event.resp.modal);

                        return;
                    }
                }

                var refreshURL = $('.blockcart').data('refresh-url');
                var requestData = {};
    
                if (event && event.reason) {
                    requestData = {
                        id_product_attribute: event.reason.idProductAttribute,
                        id_product: event.reason.idProduct,
                        action: event.reason.linkAction
                    };
                }
    
                $.post(refreshURL, requestData).then(function (resp) {
                    $('.blockcart').replaceWith($(resp.preview).find('.blockcart'));
                    if (resp.modal) {
                        blockCartModal(resp.modal);
                    }
                }).fail(function (resp) {
                    prestashop.emit('handleError', {eventType: 'updateShoppingCart', resp: resp});
                });
            }
        );
    });
});
