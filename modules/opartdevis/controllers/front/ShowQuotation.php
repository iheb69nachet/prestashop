<?php
/**
 * Prestashop module : OpartDevis
 *
 * @author Olivier CLEMENCE <manit4c@gmail.com>
 * @copyright  Op'art
 * @license Tous droits réservés / Le droit d'auteur s'applique (All rights reserved / French copyright law applies)
 */

require_once _PS_MODULE_DIR_.'opartdevis/models/OpartQuotation.php';

class OpartDevisShowQuotationModuleFrontController extends ModuleFrontController
{
    public function init()
    {
        $this->display_column_left = false;

        parent::init();
    }

    public function initContent()
    {
        if (Tools::getValue('id_cart')) {
            $opart_quotation = OpartQuotation::getByCartId((int)Tools::getValue('id_cart'));
        }

        if (Tools::getValue('id_opartdevis')) {
            $opart_quotation = new OpartQuotation((int)Tools::getValue('id_opartdevis'));
        }

        if ($opart_quotation == false) {
            die('no quotation found');
        }
                
        if (!$opart_quotation->isAllowed()) {
            return false;
        }

        $opart_quotation->renderPdf(true);
    }
}
