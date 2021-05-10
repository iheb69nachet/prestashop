<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* __string_template__daff2b061e6cdff4e869113954abb1ef828f529cf04270b73bb4d5c2ec1a15d7 */
class __TwigTemplate_f35295a522e7195b4b5ec2afc4d1087a616062a7fb52d61a486118eb690ef0d1 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'extra_stylesheets' => [$this, 'block_extra_stylesheets'],
            'content_header' => [$this, 'block_content_header'],
            'content' => [$this, 'block_content'],
            'content_footer' => [$this, 'block_content_footer'],
            'sidebar_right' => [$this, 'block_sidebar_right'],
            'javascripts' => [$this, 'block_javascripts'],
            'extra_javascripts' => [$this, 'block_extra_javascripts'],
            'translate_javascripts' => [$this, 'block_translate_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=0.75\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/img/app_icon.png\" />

<title>Produit • Bureaux Deco</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminProducts';
    var iso_user = 'fr';
    var lang_is_rtl = '0';
    var full_language_code = 'fr';
    var full_cldr_language_code = 'fr-FR';
    var country_iso_code = 'FR';
    var _PS_VERSION_ = '1.7.6.3';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'Une nouvelle commande a été passée sur votre boutique.';
    var order_number_msg = 'Numéro de commande : ';
    var total_msg = 'Total : ';
    var from_msg = 'Du ';
    var see_order_msg = 'Afficher cette commande';
    var new_customer_msg = 'Un nouveau client s\\\\\\'est inscrit sur votre boutique';
    var customer_name_msg = 'Nom du client : ';
    var new_msg = 'Un nouveau message a été posté sur votre boutique.';
    var see_msg = 'Lire le message';
    var token = '8e707dc333af245fe798dfcd1e800c34';
    var token_admin_orders = '6a34c0c2b4853b23f7cdda249f896a46';
    var token_admin_customers = '752b687b5717bf46911325f69e8d5ef5';
    var token_admin_customer_threads = 'b67b2008ac1ff2d57587f4d73f1c60d2';
    var currentIndex = 'index.php?controller=AdminProducts';
    var employee_token = '2c65c89bf6f1c279965880270f4a792b';
    var choose_language_translate = 'Choisissez la langue';
    var default_language = '1';
    var admin_modules_link = '/bo/index.php/improve/modules/catalog/recommended?_token=DhYLCbDHqbTRecRWyl6bq-pGDfk1j-YWLTsfwwUMzOQ';
    var admin_notification_get_link = '/bo/index.php/common/notifications?_token=DhYLCbDHqbTRecRWyl6bq-pGDfk1j-YWLTsfwwUMzOQ';
    var admin_notification_push_link = '/bo/index.php/common/notifications/ack?_token=DhYLCbDHqbTRecRWyl6bq-pGDfk1j-YWLTsfwwUMzOQ';
    var tab_modules_list = 'prestagiftvouchers,dmuassocprodcat,etranslation,apiway,prestashoptoquickbooks';
    var update_success_msg = 'Mise à jour réussie';
    var errorLogin = 'PrestaShop n\\\\\\'a pas pu se connecter à Addons. Veuillez vérifier vos identifiants et votre connexion Internet.';
    var search_product_msg = 'Rechercher un produit';
  </script>

      <link href=\"/modules/emarketing/views/css/menuTabIcon.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/bo/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/psblog/views/css/admin/blogmenu.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/psproductcountdown/views/css/admin.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/ui/themes/base/jquery.ui.core.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/ui/themes/base/jquery.ui.datepicker.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/ui/themes/base/jquery.ui.theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/bo/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/gamification/views/css/gamification.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"https://presta-protect.ns8.com/css/admin.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/ns8csp/views/css/container.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/ns8csp/views/css/toastr.min.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/bo\\/\";
var baseDir = \"\\/\";
var changeFormLanguageUrl = \"\\/bo\\/index.php\\/configure\\/advanced\\/employees\\/change-form-language?_token=DhYLCbDHqbTRecRWyl6bq-pGDfk1j-YWLTsfwwUMzOQ\";
var currency = {\"iso_code\":\"EUR\",\"sign\":\"\\u20ac\",\"name\":\"Euro\",\"format\":null};
var currency_specifications = {\"symbol\":[\",\",\"\\u00a0\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"currencyCode\":\"EUR\",\"currencySymbol\":\"\\u20ac\",\"positivePattern\":\"#,##0.00\\u00a0\\u00a4\",\"negativePattern\":\"-#,##0.00\\u00a0\\u00a4\",\"maxFractionDigits\":2,\"minFractionDigits\":2,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var host_mode = false;
var number_specifications = {\"symbol\":[\",\",\"\\u00a0\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.###\",\"negativePattern\":\"-#,##0.###\",\"maxFractionDigits\":3,\"minFractionDigits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var show_new_customers = \"1\";
var show_new_messages = false;
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/js/jquery/ui/jquery.ui.core.min.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/ui/jquery.ui.datepicker.min.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/ui/i18n/jquery.ui.datepicker-fr.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/timepicker/jquery-ui-timepicker-addon.js\"></script>
<script type=\"text/javascript\" src=\"/modules/psproductcountdown/views/js/admin_product.js\"></script>
<script type=\"text/javascript\" src=\"/bo/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/js/admin.js?v=1.7.6.3\"></script>
<script type=\"text/javascript\" src=\"/bo/themes/new-theme/public/cldr.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/tools.js?v=1.7.6.3\"></script>
<script type=\"text/javascript\" src=\"/bo/public/bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/bo/themes/default/js/vendor/nv.d3.min.js\"></script>
<script type=\"text/javascript\" src=\"/modules/gamification/views/js/gamification_bt.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/modules/ns8csp/views/js/admin.js\"></script>
<script type=\"text/javascript\" src=\"/modules/ns8csp/views/js/page.js\"></script>
<script type=\"text/javascript\" src=\"/modules/ns8csp/views/js/toastr.min.js\"></script>

  <script>
            var admin_gamification_ajax_url = \"http:\\/\\/bureauxdeco.com\\/bo\\/index.php?controller=AdminGamification&token=27f827940e9482c8195c8c41b08c5d61\";
            var current_id_tab = 10;
        </script><script type=\"text/javascript\">
    var pspc_psv = 1.7;
</script>

";
        // line 103
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>

<body class=\"lang-fr adminproducts\">

  <header id=\"header\">

    <nav id=\"header_infos\" class=\"main-header\">
      <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

            <i class=\"material-icons js-mobile-menu\">menu</i>
      <a id=\"header_logo\" class=\"logo float-left\" href=\"http://bureauxdeco.com/bo/index.php?controller=AdminDashboard&amp;token=6d9c7a5f5b95cc100790c115d2d3f5d2\"></a>
      <span id=\"shop_version\">1.7.6.3</span>

      <div class=\"component\" id=\"quick-access-container\">
        <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Accès rapide
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item\"
         href=\"http://bureauxdeco.com/bo/index.php?controller=AdminOrders&amp;token=6a34c0c2b4853b23f7cdda249f896a46\"
                 data-item=\"Commandes\"
      >Commandes</a>
          <a class=\"dropdown-item\"
         href=\"http://bureauxdeco.com/bo/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=ba4419678954766d30a8be16bc3730ba\"
                 data-item=\"Évaluation du catalogue\"
      >Évaluation du catalogue</a>
          <a class=\"dropdown-item\"
         href=\"http://bureauxdeco.com/bo/index.php/improve/modules/manage?token=a8d7e76fb2d4e4e56893f0c22cabd6e6\"
                 data-item=\"Modules installés\"
      >Modules installés</a>
          <a class=\"dropdown-item\"
         href=\"http://bureauxdeco.com/bo/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=f2fcc16ad8445aa57788207983a64bab\"
                 data-item=\"Nouveau bon de réduction\"
      >Nouveau bon de réduction</a>
          <a class=\"dropdown-item\"
         href=\"http://bureauxdeco.com/bo/index.php/sell/catalog/products/new?token=a8d7e76fb2d4e4e56893f0c22cabd6e6\"
                 data-item=\"Nouveau produit\"
      >Nouveau produit</a>
          <a class=\"dropdown-item\"
         href=\"http://bureauxdeco.com/bo/index.php?controller=AdminCategories&amp;addcategory&amp;token=fc431e31a7c75e370423589f46c0d45c\"
                 data-item=\"Nouvelle catégorie\"
      >Nouvelle catégorie</a>
        <div class=\"dropdown-divider\"></div>
          <a
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-rand=\"94\"
        data-icon=\"icon-AdminCatalog\"
        data-method=\"add\"
        data-url=\"index.php/sell/catalog/products/518?-pGDfk1j-YWLTsfwwUMzOQ\"
        data-post-link=\"http://bureauxdeco.com/bo/index.php?controller=AdminQuickAccesses&token=433b83726d469ee5884ea839b958ec22\"
        data-prompt-text=\"Veuillez nommer ce raccourci :\"
        data-link=\"Produits - Liste\"
      >
        <i class=\"material-icons\">add_circle</i>
        Ajouter cette page à l'Accès Rapide
      </a>
        <a class=\"dropdown-item\" href=\"http://bureauxdeco.com/bo/index.php?controller=AdminQuickAccesses&token=433b83726d469ee5884ea839b958ec22\">
      <i class=\"material-icons\">settings</i>
      Gérer les accès rapides
    </a>
  </div>
</div>
      </div>
      <div class=\"component\" id=\"header-search-container\">
        <form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form collapsed\"
      method=\"post\"
      action=\"/bo/index.php?controller=AdminSearch&amp;token=dee148082480faa72d15d2e835e4d82b\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"\" placeholder=\"Rechercher (ex. : référence produit, nom du client, etc.)\">
    <div class=\"input-group-append\">
      <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        Partout
      </button>
      <div class=\"dropdown-menu js-items-list\">
        <a class=\"dropdown-item\" data-item=\"Partout\" href=\"#\" data-value=\"0\" data-placeholder=\"Que souhaitez-vous trouver ?\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> Partout</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"Catalogue\" href=\"#\" data-value=\"1\" data-placeholder=\"Nom du produit, unité de gestion des stocks (SKU), référence...\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> Catalogue</a>
        <a class=\"dropdown-item\" data-item=\"Clients par nom\" href=\"#\" data-value=\"2\" data-placeholder=\"E-mail, nom...\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> Clients par nom</a>
        <a class=\"dropdown-item\" data-item=\"Clients par adresse IP\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_mac</i> Clients par adresse IP</a>
        <a class=\"dropdown-item\" data-item=\"Commandes\" href=\"#\" data-value=\"3\" data-placeholder=\"ID commande\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_basket</i> Commandes</a>
        <a class=\"dropdown-item\" data-item=\"Factures\" href=\"#\" data-value=\"4\" data-placeholder=\"Numéro de facture\" data-icon=\"icon-book\"><i class=\"material-icons\">book</i> Factures</a>
        <a class=\"dropdown-item\" data-item=\"Paniers\" href=\"#\" data-value=\"5\" data-placeholder=\"ID panier\" data-icon=\"icon-shopping-cart\"><i class=\"material-icons\">shopping_cart</i> Paniers</a>
        <a class=\"dropdown-item\" data-item=\"Modules\" href=\"#\" data-value=\"7\" data-placeholder=\"Nom du module\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> Modules</a>
      </div>
      <button class=\"btn btn-primary\" type=\"submit\"><span class=\"d-none\">RECHERCHE</span><i class=\"material-icons\">search</i></button>
    </div>
  </div>
</form>

<script type=\"text/javascript\">
 \$(document).ready(function(){
    \$('#bo_query').one('click', function() {
    \$(this).closest('form').removeClass('collapsed');
  });
});
</script>
      </div>

      
      
      <div class=\"component\" id=\"header-shop-list-container\">
          <div id=\"shop-list\" class=\"shop-list dropdown ps-dropdown stores\">
    <button class=\"btn btn-link\" type=\"button\" data-toggle=\"dropdown\">
      <span class=\"selected-item\">
        <i class=\"material-icons visibility\">visibility</i>
                  Bureaux Deco France
                <i class=\"material-icons arrow-down\">arrow_drop_down</i>
      </span>
    </button>
    <div class=\"dropdown-menu dropdown-menu-right ps-dropdown-menu\">
      <ul class=\"items-list\"><li><a class=\"dropdown-item\" href=\"/bo/index.php/sell/catalog/products/518?_token=DhYLCbDHqbTRecRWyl6bq-pGDfk1j-YWLTsfwwUMzOQ&amp;setShopContext=\">Toutes les boutiques</a></li><li class=\"group\"><a class=\"dropdown-item\" href=\"/bo/index.php/sell/catalog/products/518?_token=DhYLCbDHqbTRecRWyl6bq-pGDfk1j-YWLTsfwwUMzOQ&amp;setShopContext=g-1\">groupe Groupe1</a></li><li class=\"shop active\"><a class=\"dropdown-item \" href=\"/bo/index.php/sell/catalog/products/518?_token=DhYLCbDHqbTRecRWyl6bq-pGDfk1j-YWLTsfwwUMzOQ&amp;setShopContext=s-1\">Bureaux Deco France</a><a class=\"link-shop\" href=\"http://bureauxdeco.com/\" target=\"_blank\"><i class=\"material-icons\">&#xE8F4;</i></a></li><li class=\"shop\"><a class=\"dropdown-item \" href=\"/bo/index.php/sell/catalog/products/518?_token=DhYLCbDHqbTRecRWyl6bq-pGDfk1j-YWLTsfwwUMzOQ&amp;setShopContext=s-2\">Bureaux Deco Tunisie</a><a class=\"link-shop\" href=\"http://new.bureaux-deco.com/\" target=\"_blank\"><i class=\"material-icons\">&#xE8F4;</i></a></li></ul>

    </div>
  </div>
      </div>

              <div class=\"component header-right-component\" id=\"header-notifications-container\">
          <div id=\"notif\" class=\"notification-center dropdown dropdown-clickable\">
  <button class=\"btn notification js-notification dropdown-toggle\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">notifications_none</i>
    <span id=\"notifications-total\" class=\"count hide\">0</span>
  </button>
  <div class=\"dropdown-menu dropdown-menu-right js-notifs_dropdown\">
    <div class=\"notifications\">
      <ul class=\"nav nav-tabs\" role=\"tablist\">
                          <li class=\"nav-item\">
            <a
              class=\"nav-link active\"
              id=\"orders-tab\"
              data-toggle=\"tab\"
              data-type=\"order\"
              href=\"#orders-notifications\"
              role=\"tab\"
            >
              Commandes<span id=\"_nb_new_orders_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"customers-tab\"
              data-toggle=\"tab\"
              data-type=\"customer\"
              href=\"#customers-notifications\"
              role=\"tab\"
            >
              Clients<span id=\"_nb_new_customers_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"messages-tab\"
              data-toggle=\"tab\"
              data-type=\"customer_message\"
              href=\"#messages-notifications\"
              role=\"tab\"
            >
              Messages<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Pas de nouvelle commande pour le moment :(<br>
              Et pourquoi pas lancer des promotions de saison ?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Aucun nouveau client pour l'instant :(<br>
              Êtes-vous actifs sur les réseaux sociaux en ce moment ?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Pas de nouveau message pour l'instant.<br>
              Pas de nouvelle, bonne nouvelle, n'est-ce pas ?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                        </div>
    </div>
  </div>
</div>

  <script type=\"text/html\" id=\"order-notification-template\">
    <a class=\"notif\" href='order_url'>
      #_id_order_ -
      de <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"float-sm-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href='customer_url'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - enregistré le <strong>_date_add_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"message-notification-template\">
    <a class=\"notif\" href='message_url'>
    <span class=\"message-notification-status _status_\">
      <i class=\"material-icons\">fiber_manual_record</i> _status_
    </span>
      - <strong>_customer_name_</strong> (_company_) - <i class=\"material-icons\">access_time</i> _date_add_
    </a>
  </script>
        </div>
      
      <div class=\"component\" id=\"header-employee-container\">
        <div class=\"dropdown employee-dropdown\">
  <div class=\"rounded-circle person\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">account_circle</i>
  </div>
  <div class=\"dropdown-menu dropdown-menu-right\">
    <div class=\"employee-wrapper-avatar\">
      
      <span class=\"employee_avatar\"><img class=\"avatar rounded-circle\" src=\"https://profile.prestashop.com/bureaudeco2019%40gmail.com.jpg\" /></span>
      <span class=\"employee_profile\">Ravi de vous revoir Bureaux</span>
      <a class=\"dropdown-item employee-link profile-link\" href=\"/bo/index.php/configure/advanced/employees/1/edit?_token=DhYLCbDHqbTRecRWyl6bq-pGDfk1j-YWLTsfwwUMzOQ\">
      <i class=\"material-icons\">settings</i>
      Votre profil
    </a>
    </div>
    
    <p class=\"divider\"></p>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/fr/ressources/documentation?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=resources-fr&amp;utm_content=download17\" target=\"_blank\"><i class=\"material-icons\">book</i> Documentation</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/fr/formation?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=resources-fr&amp;utm_content=download17\" target=\"_blank\"><i class=\"material-icons\">school</i> Formation</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/fr/experts?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=resources-fr&amp;utm_content=download17\" target=\"_blank\"><i class=\"material-icons\">person_pin_circle</i> Trouver un expert</a>
    <a class=\"dropdown-item\" href=\"https://addons.prestashop.com/fr/?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=addons-fr&amp;utm_content=download17\" target=\"_blank\"><i class=\"material-icons\">extension</i> Place de marché de PrestaShop</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/fr/contact?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=resources-fr&amp;utm_content=download17\" target=\"_blank\"><i class=\"material-icons\">help</i> Centre d'assistance</a>
    <p class=\"divider\"></p>
    <a class=\"dropdown-item employee-link text-center\" id=\"header_logout\" href=\"http://bureauxdeco.com/bo/index.php?controller=AdminLogin&amp;logout=1&amp;token=a95c65db93314a6003f55e2aea5c8cd1\">
      <i class=\"material-icons d-lg-none\">power_settings_new</i>
      <span>Déconnexion</span>
    </a>
  </div>
</div>
      </div>
    </nav>

      </header>

  <nav class=\"nav-bar d-none d-md-block\">
  <span class=\"menu-collapse\" data-toggle-url=\"/bo/index.php/configure/advanced/employees/toggle-navigation?_token=DhYLCbDHqbTRecRWyl6bq-pGDfk1j-YWLTsfwwUMzOQ\">
    <i class=\"material-icons\">chevron_left</i>
    <i class=\"material-icons\">chevron_left</i>
  </span>

  <ul class=\"main-menu\">

          
                
                
        
          <li class=\"link-levelone \" data-submenu=\"1\" id=\"tab-AdminDashboard\">
            <a href=\"http://bureauxdeco.com/bo/index.php?controller=AdminDashboard&amp;token=6d9c7a5f5b95cc100790c115d2d3f5d2\" class=\"link\" >
              <i class=\"material-icons\">trending_up</i> <span>Tableau de bord</span>
            </a>
          </li>

        
                
                                  
                
        
          <li class=\"category-title -active\" data-submenu=\"2\" id=\"tab-SELL\">
              <span class=\"title\">Vendre</span>
          </li>

                          
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                  <a href=\"http://bureauxdeco.com/bo/index.php?controller=AdminOrders&amp;token=6a34c0c2b4853b23f7cdda249f896a46\" class=\"link\">
                    <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                    <span>
                    Commandes
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                              <a href=\"http://bureauxdeco.com/bo/index.php?controller=AdminOrders&amp;token=6a34c0c2b4853b23f7cdda249f896a46\" class=\"link\"> Commandes
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                              <a href=\"/bo/index.php/sell/orders/invoices/?_token=DhYLCbDHqbTRecRWyl6bq-pGDfk1j-YWLTsfwwUMzOQ\" class=\"link\"> Factures
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                              <a href=\"http://bureauxdeco.com/bo/index.php?controller=AdminSlip&amp;token=d83ab9476f187092cb801c87a1ce1ef2\" class=\"link\"> Avoirs
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                              <a href=\"/bo/index.php/sell/orders/delivery-slips/?_token=DhYLCbDHqbTRecRWyl6bq-pGDfk1j-YWLTsfwwUMzOQ\" class=\"link\"> Bons de livraison
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                              <a href=\"http://bureauxdeco.com/bo/index.php?controller=AdminCarts&amp;token=1e9073ff3ab9dc17786476ae67406ac4\" class=\"link\"> Paniers
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"188\" id=\"subtab-AdminOpartdevis\">
                              <a href=\"http://bureauxdeco.com/bo/index.php?controller=AdminOpartdevis&amp;token=b6174edea15c529cab0b6dc67169037b\" class=\"link\"> Devis
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                                                    
                <li class=\"link-levelone has_submenu -active open ul-open\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                  <a href=\"/bo/index.php/sell/catalog/products?_token=DhYLCbDHqbTRecRWyl6bq-pGDfk1j-YWLTsfwwUMzOQ\" class=\"link\">
                    <i class=\"material-icons mi-store\">store</i>
                    <span>
                    Catalogue
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_up
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo -active\" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                              <a href=\"/bo/index.php/sell/catalog/products?_token=DhYLCbDHqbTRecRWyl6bq-pGDfk1j-YWLTsfwwUMzOQ\" class=\"link\"> Produits
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                              <a href=\"/bo/index.php/sell/catalog/categories?_token=DhYLCbDHqbTRecRWyl6bq-pGDfk1j-YWLTsfwwUMzOQ\" class=\"link\"> Catégories
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                              <a href=\"http://bureauxdeco.com/bo/index.php?controller=AdminTracking&amp;token=81139f0973b2bba75b9747c2ad5b7f24\" class=\"link\"> Suivi
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                              <a href=\"http://bureauxdeco.com/bo/index.php?controller=AdminAttributesGroups&amp;token=23d7bc9ded150a891f7cceac8ebeb569\" class=\"link\"> Attributs &amp; caractéristiques
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                              <a href=\"/bo/index.php/sell/catalog/brands/?_token=DhYLCbDHqbTRecRWyl6bq-pGDfk1j-YWLTsfwwUMzOQ\" class=\"link\"> Marques et fournisseurs
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                              <a href=\"http://bureauxdeco.com/bo/index.php?controller=AdminAttachments&amp;token=2d2eb7d988ed5407061fb1e284ab8fe0\" class=\"link\"> Fichiers
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                              <a href=\"http://bureauxdeco.com/bo/index.php?controller=AdminCartRules&amp;token=f2fcc16ad8445aa57788207983a64bab\" class=\"link\"> Promotions
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                              <a href=\"/bo/index.php/sell/stocks/?_token=DhYLCbDHqbTRecRWyl6bq-pGDfk1j-YWLTsfwwUMzOQ\" class=\"link\"> Stocks
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                  <a href=\"/bo/index.php/sell/customers/?_token=DhYLCbDHqbTRecRWyl6bq-pGDfk1j-YWLTsfwwUMzOQ\" class=\"link\">
                    <i class=\"material-icons mi-account_circle\">account_circle</i>
                    <span>
                    Clients
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                              <a href=\"/bo/index.php/sell/customers/?_token=DhYLCbDHqbTRecRWyl6bq-pGDfk1j-YWLTsfwwUMzOQ\" class=\"link\"> Clients
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                              <a href=\"http://bureauxdeco.com/bo/index.php?controller=AdminAddresses&amp;token=b90c04e4d5888e7f5dbf9c8e249e6402\" class=\"link\"> Adresses
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"27\" id=\"subtab-AdminOutstanding\">
                              <a href=\"http://bureauxdeco.com/bo/index.php?controller=AdminOutstanding&amp;token=0a70eeb97e38a48822ac05ce6f9141f8\" class=\"link\"> Encours autorisés
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                  <a href=\"http://bureauxdeco.com/bo/index.php?controller=AdminCustomerThreads&amp;token=b67b2008ac1ff2d57587f4d73f1c60d2\" class=\"link\">
                    <i class=\"material-icons mi-chat\">chat</i>
                    <span>
                    SAV
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                              <a href=\"http://bureauxdeco.com/bo/index.php?controller=AdminCustomerThreads&amp;token=b67b2008ac1ff2d57587f4d73f1c60d2\" class=\"link\"> SAV
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                              <a href=\"http://bureauxdeco.com/bo/index.php?controller=AdminOrderMessage&amp;token=1e06a65cfdedfa4e7b0c757679eb1f4b\" class=\"link\"> Messages prédéfinis
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                              <a href=\"http://bureauxdeco.com/bo/index.php?controller=AdminReturn&amp;token=72ee047004704157773804948cf3c060\" class=\"link\"> Retours produits
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                  <a href=\"http://bureauxdeco.com/bo/index.php?controller=AdminStats&amp;token=ba4419678954766d30a8be16bc3730ba\" class=\"link\">
                    <i class=\"material-icons mi-assessment\">assessment</i>
                    <span>
                    Statistiques
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                    </li>
                          
        
                
                                  
                
        
          <li class=\"category-title \" data-submenu=\"42\" id=\"tab-IMPROVE\">
              <span class=\"title\">Personnaliser</span>
          </li>

                          
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"43\" id=\"subtab-AdminParentModulesSf\">
                  <a href=\"/bo/index.php/improve/modules/manage?_token=DhYLCbDHqbTRecRWyl6bq-pGDfk1j-YWLTsfwwUMzOQ\" class=\"link\">
                    <i class=\"material-icons mi-extension\">extension</i>
                    <span>
                    Modules
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"44\" id=\"subtab-AdminModulesSf\">
                              <a href=\"/bo/index.php/improve/modules/manage?_token=DhYLCbDHqbTRecRWyl6bq-pGDfk1j-YWLTsfwwUMzOQ\" class=\"link\"> Gestionnaire de modules
                              </a>
                            </li>

                                                                                                                              
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"176\" id=\"subtab-AdminParentModulesCatalog\">
                              <a href=\"/bo/index.php/improve/modules/catalog?_token=DhYLCbDHqbTRecRWyl6bq-pGDfk1j-YWLTsfwwUMzOQ\" class=\"link\"> Catalogue de modules
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"47\" id=\"subtab-AdminParentThemes\">
                  <a href=\"/bo/index.php/improve/design/themes/?_token=DhYLCbDHqbTRecRWyl6bq-pGDfk1j-YWLTsfwwUMzOQ\" class=\"link\">
                    <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                    <span>
                    Apparence
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-47\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"157\" id=\"subtab-AdminThemesParent\">
                              <a href=\"/bo/index.php/improve/design/themes/?_token=DhYLCbDHqbTRecRWyl6bq-pGDfk1j-YWLTsfwwUMzOQ\" class=\"link\"> Thème et logo
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"49\" id=\"subtab-AdminThemesCatalog\">
                              <a href=\"/bo/index.php/improve/design/themes-catalog/?_token=DhYLCbDHqbTRecRWyl6bq-pGDfk1j-YWLTsfwwUMzOQ\" class=\"link\"> Catalogue de thèmes
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"179\" id=\"subtab-AdminParentMailTheme\">
                              <a href=\"/bo/index.php/improve/design/mail_theme/?_token=DhYLCbDHqbTRecRWyl6bq-pGDfk1j-YWLTsfwwUMzOQ\" class=\"link\"> Email Themes
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"50\" id=\"subtab-AdminCmsContent\">
                              <a href=\"/bo/index.php/improve/design/cms-pages/?_token=DhYLCbDHqbTRecRWyl6bq-pGDfk1j-YWLTsfwwUMzOQ\" class=\"link\"> Pages
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"51\" id=\"subtab-AdminModulesPositions\">
                              <a href=\"/bo/index.php/improve/design/modules/positions/?_token=DhYLCbDHqbTRecRWyl6bq-pGDfk1j-YWLTsfwwUMzOQ\" class=\"link\"> Positions
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"52\" id=\"subtab-AdminImages\">
                              <a href=\"http://bureauxdeco.com/bo/index.php?controller=AdminImages&amp;token=19b505f5146859b91b52824998d21747\" class=\"link\"> Images
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"169\" id=\"subtab-AdminLinkWidget\">
                              <a href=\"/bo/index.php/modules/link-widget/list?_token=DhYLCbDHqbTRecRWyl6bq-pGDfk1j-YWLTsfwwUMzOQ\" class=\"link\"> Link Widget
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"53\" id=\"subtab-AdminParentShipping\">
                  <a href=\"http://bureauxdeco.com/bo/index.php?controller=AdminCarriers&amp;token=deb8977ae07c68307a9954e0258539b6\" class=\"link\">
                    <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                    <span>
                    Livraison
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-53\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"54\" id=\"subtab-AdminCarriers\">
                              <a href=\"http://bureauxdeco.com/bo/index.php?controller=AdminCarriers&amp;token=deb8977ae07c68307a9954e0258539b6\" class=\"link\"> Transporteurs
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"55\" id=\"subtab-AdminShipping\">
                              <a href=\"/bo/index.php/improve/shipping/preferences?_token=DhYLCbDHqbTRecRWyl6bq-pGDfk1j-YWLTsfwwUMzOQ\" class=\"link\"> Préférences
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"56\" id=\"subtab-AdminParentPayment\">
                  <a href=\"/bo/index.php/improve/payment/payment_methods?_token=DhYLCbDHqbTRecRWyl6bq-pGDfk1j-YWLTsfwwUMzOQ\" class=\"link\">
                    <i class=\"material-icons mi-payment\">payment</i>
                    <span>
                    Paiement
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-56\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"57\" id=\"subtab-AdminPayment\">
                              <a href=\"/bo/index.php/improve/payment/payment_methods?_token=DhYLCbDHqbTRecRWyl6bq-pGDfk1j-YWLTsfwwUMzOQ\" class=\"link\"> Modes de paiement
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"58\" id=\"subtab-AdminPaymentPreferences\">
                              <a href=\"/bo/index.php/improve/payment/preferences?_token=DhYLCbDHqbTRecRWyl6bq-pGDfk1j-YWLTsfwwUMzOQ\" class=\"link\"> Préférences
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"59\" id=\"subtab-AdminInternational\">
                  <a href=\"/bo/index.php/improve/international/localization/?_token=DhYLCbDHqbTRecRWyl6bq-pGDfk1j-YWLTsfwwUMzOQ\" class=\"link\">
                    <i class=\"material-icons mi-language\">language</i>
                    <span>
                    International
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-59\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"60\" id=\"subtab-AdminParentLocalization\">
                              <a href=\"/bo/index.php/improve/international/localization/?_token=DhYLCbDHqbTRecRWyl6bq-pGDfk1j-YWLTsfwwUMzOQ\" class=\"link\"> Localisation
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"65\" id=\"subtab-AdminParentCountries\">
                              <a href=\"http://bureauxdeco.com/bo/index.php?controller=AdminZones&amp;token=285fd0686b0f96186197beab01ee41d9\" class=\"link\"> Zones géographiques
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"69\" id=\"subtab-AdminParentTaxes\">
                              <a href=\"/bo/index.php/improve/international/taxes/?_token=DhYLCbDHqbTRecRWyl6bq-pGDfk1j-YWLTsfwwUMzOQ\" class=\"link\"> Taxes
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"72\" id=\"subtab-AdminTranslations\">
                              <a href=\"/bo/index.php/improve/international/translations/settings?_token=DhYLCbDHqbTRecRWyl6bq-pGDfk1j-YWLTsfwwUMzOQ\" class=\"link\"> Traductions
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone\" data-submenu=\"120\" id=\"subtab-AdminEmarketing\">
                  <a href=\"http://bureauxdeco.com/bo/index.php?controller=AdminEmarketing&amp;token=31f6e7d05d90f5680138a518c35599d6\" class=\"link\">
                    <i class=\"material-icons mi-track_changes\">track_changes</i>
                    <span>
                    Advertising
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"180\" id=\"subtab-AdminPsblogManagement\">
                  <a href=\"http://bureauxdeco.com/bo/index.php?controller=AdminPsblogDashboard&amp;token=29c737ffba253146ddea739e354c11ba\" class=\"link\">
                    <i class=\"material-icons mi-\"></i>
                    <span>
                    Ps Blog Management
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-180\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"181\" id=\"subtab-AdminPsblogDashboard\">
                              <a href=\"http://bureauxdeco.com/bo/index.php?controller=AdminPsblogDashboard&amp;token=29c737ffba253146ddea739e354c11ba\" class=\"link\"> Blog Dashboard
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"182\" id=\"subtab-AdminPsblogCategories\">
                              <a href=\"http://bureauxdeco.com/bo/index.php?controller=AdminPsblogCategories&amp;token=5f1eb4d8509e87f9e7f67ae5a1f9bd0c\" class=\"link\"> Categories Management
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"183\" id=\"subtab-AdminPsblogBlogs\">
                              <a href=\"http://bureauxdeco.com/bo/index.php?controller=AdminPsblogBlogs&amp;token=9f8015b32c6ba018146f127483021abd\" class=\"link\"> Blogs Management
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"184\" id=\"subtab-AdminPsblogComments\">
                              <a href=\"http://bureauxdeco.com/bo/index.php?controller=AdminPsblogComments&amp;token=fe49fc73a3c071dec40bd3be577c5994\" class=\"link\"> Comment Management
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"185\" id=\"subtab-AdminPsblogModule\">
                              <a href=\"http://bureauxdeco.com/bo/index.php?controller=AdminPsblogModule&amp;token=cda35d8231d0d0716bad0813597040fb\" class=\"link\"> Ps Blog Configuration
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                          
        
                
                                  
                
        
          <li class=\"category-title \" data-submenu=\"73\" id=\"tab-CONFIGURE\">
              <span class=\"title\">Configurer</span>
          </li>

                          
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"74\" id=\"subtab-ShopParameters\">
                  <a href=\"/bo/index.php/configure/shop/preferences/preferences?_token=DhYLCbDHqbTRecRWyl6bq-pGDfk1j-YWLTsfwwUMzOQ\" class=\"link\">
                    <i class=\"material-icons mi-settings\">settings</i>
                    <span>
                    Paramètres de la boutique
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-74\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"75\" id=\"subtab-AdminParentPreferences\">
                              <a href=\"/bo/index.php/configure/shop/preferences/preferences?_token=DhYLCbDHqbTRecRWyl6bq-pGDfk1j-YWLTsfwwUMzOQ\" class=\"link\"> Paramètres généraux
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"78\" id=\"subtab-AdminParentOrderPreferences\">
                              <a href=\"/bo/index.php/configure/shop/order-preferences/?_token=DhYLCbDHqbTRecRWyl6bq-pGDfk1j-YWLTsfwwUMzOQ\" class=\"link\"> Commandes
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"81\" id=\"subtab-AdminPPreferences\">
                              <a href=\"/bo/index.php/configure/shop/product-preferences/?_token=DhYLCbDHqbTRecRWyl6bq-pGDfk1j-YWLTsfwwUMzOQ\" class=\"link\"> Produits
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"82\" id=\"subtab-AdminParentCustomerPreferences\">
                              <a href=\"/bo/index.php/configure/shop/customer-preferences/?_token=DhYLCbDHqbTRecRWyl6bq-pGDfk1j-YWLTsfwwUMzOQ\" class=\"link\"> Clients
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"86\" id=\"subtab-AdminParentStores\">
                              <a href=\"/bo/index.php/configure/shop/contacts/?_token=DhYLCbDHqbTRecRWyl6bq-pGDfk1j-YWLTsfwwUMzOQ\" class=\"link\"> Contact
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"89\" id=\"subtab-AdminParentMeta\">
                              <a href=\"/bo/index.php/configure/shop/seo-urls/?_token=DhYLCbDHqbTRecRWyl6bq-pGDfk1j-YWLTsfwwUMzOQ\" class=\"link\"> Trafic et SEO
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"93\" id=\"subtab-AdminParentSearchConf\">
                              <a href=\"http://bureauxdeco.com/bo/index.php?controller=AdminSearchConf&amp;token=26e0f04f6403424ed316c4e74c3f3af2\" class=\"link\"> Rechercher
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"119\" id=\"subtab-AdminGamification\">
                              <a href=\"http://bureauxdeco.com/bo/index.php?controller=AdminGamification&amp;token=27f827940e9482c8195c8c41b08c5d61\" class=\"link\"> Merchant Expertise
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"96\" id=\"subtab-AdminAdvancedParameters\">
                  <a href=\"/bo/index.php/configure/advanced/system-information/?_token=DhYLCbDHqbTRecRWyl6bq-pGDfk1j-YWLTsfwwUMzOQ\" class=\"link\">
                    <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                    <span>
                    Paramètres avancés
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-96\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"97\" id=\"subtab-AdminInformation\">
                              <a href=\"/bo/index.php/configure/advanced/system-information/?_token=DhYLCbDHqbTRecRWyl6bq-pGDfk1j-YWLTsfwwUMzOQ\" class=\"link\"> Informations
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"98\" id=\"subtab-AdminPerformance\">
                              <a href=\"/bo/index.php/configure/advanced/performance/?_token=DhYLCbDHqbTRecRWyl6bq-pGDfk1j-YWLTsfwwUMzOQ\" class=\"link\"> Performances
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"99\" id=\"subtab-AdminAdminPreferences\">
                              <a href=\"/bo/index.php/configure/advanced/administration/?_token=DhYLCbDHqbTRecRWyl6bq-pGDfk1j-YWLTsfwwUMzOQ\" class=\"link\"> Administration
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"100\" id=\"subtab-AdminEmails\">
                              <a href=\"/bo/index.php/configure/advanced/emails/?_token=DhYLCbDHqbTRecRWyl6bq-pGDfk1j-YWLTsfwwUMzOQ\" class=\"link\"> Email
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"101\" id=\"subtab-AdminImport\">
                              <a href=\"/bo/index.php/configure/advanced/import/?_token=DhYLCbDHqbTRecRWyl6bq-pGDfk1j-YWLTsfwwUMzOQ\" class=\"link\"> Importer
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"102\" id=\"subtab-AdminParentEmployees\">
                              <a href=\"/bo/index.php/configure/advanced/employees/?_token=DhYLCbDHqbTRecRWyl6bq-pGDfk1j-YWLTsfwwUMzOQ\" class=\"link\"> Équipe
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"106\" id=\"subtab-AdminParentRequestSql\">
                              <a href=\"/bo/index.php/configure/advanced/sql-requests/?_token=DhYLCbDHqbTRecRWyl6bq-pGDfk1j-YWLTsfwwUMzOQ\" class=\"link\"> Base de données
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"109\" id=\"subtab-AdminLogs\">
                              <a href=\"/bo/index.php/configure/advanced/logs/?_token=DhYLCbDHqbTRecRWyl6bq-pGDfk1j-YWLTsfwwUMzOQ\" class=\"link\"> Logs
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"110\" id=\"subtab-AdminWebservice\">
                              <a href=\"/bo/index.php/configure/advanced/webservice-keys/?_token=DhYLCbDHqbTRecRWyl6bq-pGDfk1j-YWLTsfwwUMzOQ\" class=\"link\"> Webservice
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"111\" id=\"subtab-AdminShopGroup\">
                              <a href=\"http://bureauxdeco.com/bo/index.php?controller=AdminShopGroup&amp;token=e8ceded171adce6a094b774057a2ccae\" class=\"link\"> Multiboutique
                              </a>
                            </li>

                                                                                                                          </ul>
                                    </li>
                          
        
                
                                  
                
        
          <li class=\"category-title \" data-submenu=\"114\" id=\"tab-DEFAULT\">
              <span class=\"title\">Détails</span>
          </li>

                          
                
                                                
                
                <li class=\"link-levelone\" data-submenu=\"129\" id=\"subtab-AdminNS8CSP\">
                  <a href=\"http://bureauxdeco.com/bo/index.php?controller=AdminNS8CSP&amp;token=6ccb405f4e357e30483120559033fa47\" class=\"link\">
                    <i class=\"material-icons mi-security\">security</i>
                    <span>
                    NS8 Protect
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone\" data-submenu=\"171\" id=\"subtab-AdminSelfUpgrade\">
                  <a href=\"http://bureauxdeco.com/bo/index.php?controller=AdminSelfUpgrade&amp;token=87a6939d02938fb80bbbccb0231b8934\" class=\"link\">
                    <i class=\"material-icons mi-extension\">extension</i>
                    <span>
                    1-Click Upgrade
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone\" data-submenu=\"192\" id=\"subtab-AdminSfkdbmanage\">
                  <a href=\"http://bureauxdeco.com/bo/index.php?controller=AdminSfkdbmanage&amp;token=f0a29ba49cdef3a0a3f401e88ba500f6\" class=\"link\">
                    <i class=\"material-icons mi-extension\">extension</i>
                    <span>
                    Database Management Tool
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                    </li>
                          
        
                
                                  
                
        
          <li class=\"category-title \" data-submenu=\"160\" id=\"tab-AdminPayPlug\">
              <span class=\"title\">PayPlug</span>
          </li>

                          
                
                                                
                
                <li class=\"link-levelone\" data-submenu=\"161\" id=\"subtab-AdminPayPlugInstallment\">
                  <a href=\"http://bureauxdeco.com/bo/index.php?controller=AdminPayPlugInstallment&amp;token=f21fb053a18ffb570df182a7cecbf19b\" class=\"link\">
                    <i class=\"material-icons mi-extension\">extension</i>
                    <span>
                    Paiements en plusieurs fois
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                    </li>
                          
        
            </ul>
  
</nav>

<div id=\"main-div\">
                
      <div class=\"content-div -notoolbar \">

        

                                                        
        <div class=\"row \">
          <div class=\"col-sm-12\">
            <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>


  ";
        // line 1216
        $this->displayBlock('content_header', $context, $blocks);
        // line 1217
        echo "                 ";
        $this->displayBlock('content', $context, $blocks);
        // line 1218
        echo "                 ";
        $this->displayBlock('content_footer', $context, $blocks);
        // line 1219
        echo "                 ";
        $this->displayBlock('sidebar_right', $context, $blocks);
        // line 1220
        echo "
            
          </div>
        </div>

      </div>
    </div>

  <div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>Oh non !</h1>
  <p class=\"mt-3\">
    La version mobile de cette page n'est pas encore disponible.
  </p>
  <p class=\"mt-2\">
    En attendant que cette page soit adaptée au mobile, vous êtes invité à la consulter sur ordinateur.
  </p>
  <p class=\"mt-2\">
    Merci.
  </p>
  <a href=\"http://bureauxdeco.com/bo/index.php?controller=AdminDashboard&amp;token=6d9c7a5f5b95cc100790c115d2d3f5d2\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons\">arrow_back</i>
    Précédent
  </a>
</div>
  <div class=\"mobile-layer\"></div>

      <div id=\"footer\" class=\"bootstrap\">
    
</div>
  

      <div class=\"bootstrap\">
      <div class=\"modal fade\" id=\"modal_addons_connect\" tabindex=\"-1\">
\t<div class=\"modal-dialog modal-md\">
\t\t<div class=\"modal-content\">
\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t<h4 class=\"modal-title\"><i class=\"icon-puzzle-piece\"></i> <a target=\"_blank\" href=\"https://addons.prestashop.com/?utm_source=back-office&utm_medium=modules&utm_campaign=back-office-FR&utm_content=download\">PrestaShop Addons</a></h4>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t<!--start addons login-->
\t\t\t<form id=\"addons_login_form\" method=\"post\" >
\t\t\t\t<div>
\t\t\t\t\t<a href=\"https://addons.prestashop.com/fr/login?email=bureaudeco2019%40gmail.com&amp;firstname=Bureaux&amp;lastname=-D%C3%A9co&amp;website=http%3A%2F%2Fbureauxdeco.com%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-FR&amp;utm_content=download#createnow\"><img class=\"img-responsive center-block\" src=\"/bo/themes/default/img/prestashop-addons-logo.png\" alt=\"Logo PrestaShop Addons\"/></a>
\t\t\t\t\t<h3 class=\"text-center\">Connectez-vous à la place de marché de PrestaShop afin d'importer automatiquement tous vos achats.</h3>
\t\t\t\t\t<hr />
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Vous n'avez pas de compte ?</h4>
\t\t\t\t\t\t<p class='text-justify'>Les clés pour réussir votre boutique sont sur PrestaShop Addons ! Découvrez sur la place de marché officielle de PrestaShop plus de 3 500 modules et thèmes pour augmenter votre trafic, optimiser vos conversions, fidéliser vos clients et vous faciliter l’e-commerce.</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Connectez-vous à PrestaShop Addons</h4>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\"><i class=\"icon-user\"></i></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input id=\"username_addons\" name=\"username_addons\" type=\"text\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\"><i class=\"icon-key\"></i></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input id=\"password_addons\" name=\"password_addons\" type=\"password\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a class=\"btn btn-link float-right _blank\" href=\"//addons.prestashop.com/fr/forgot-your-password\">Mot de passe oublié</a>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"row row-padding-top\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<a class=\"btn btn-default btn-block btn-lg _blank\" href=\"https://addons.prestashop.com/fr/login?email=bureaudeco2019%40gmail.com&amp;firstname=Bureaux&amp;lastname=-D%C3%A9co&amp;website=http%3A%2F%2Fbureauxdeco.com%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-FR&amp;utm_content=download#createnow\">
\t\t\t\t\t\t\t\tCréer un compte
\t\t\t\t\t\t\t\t<i class=\"icon-external-link\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<button id=\"addons_login_button\" class=\"btn btn-primary btn-block btn-lg\" type=\"submit\">
\t\t\t\t\t\t\t\t<i class=\"icon-unlock\"></i> Connexion
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div id=\"addons_loading\" class=\"help-block\"></div>

\t\t\t</form>
\t\t\t<!--end addons login-->
\t\t\t</div>


\t\t\t\t\t</div>
\t</div>
</div>

    </div>
  
";
        // line 1327
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>
</html>";
    }

    // line 103
    public function block_stylesheets($context, array $blocks = [])
    {
    }

    public function block_extra_stylesheets($context, array $blocks = [])
    {
    }

    // line 1216
    public function block_content_header($context, array $blocks = [])
    {
    }

    // line 1217
    public function block_content($context, array $blocks = [])
    {
    }

    // line 1218
    public function block_content_footer($context, array $blocks = [])
    {
    }

    // line 1219
    public function block_sidebar_right($context, array $blocks = [])
    {
    }

    // line 1327
    public function block_javascripts($context, array $blocks = [])
    {
    }

    public function block_extra_javascripts($context, array $blocks = [])
    {
    }

    public function block_translate_javascripts($context, array $blocks = [])
    {
    }

    public function getTemplateName()
    {
        return "__string_template__daff2b061e6cdff4e869113954abb1ef828f529cf04270b73bb4d5c2ec1a15d7";
    }

    public function getDebugInfo()
    {
        return array (  1417 => 1327,  1412 => 1219,  1407 => 1218,  1402 => 1217,  1397 => 1216,  1388 => 103,  1380 => 1327,  1271 => 1220,  1268 => 1219,  1265 => 1218,  1262 => 1217,  1260 => 1216,  143 => 103,  39 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__daff2b061e6cdff4e869113954abb1ef828f529cf04270b73bb4d5c2ec1a15d7", "");
    }
}
