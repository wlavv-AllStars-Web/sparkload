<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* __string_template__8ddeca946e9754e707758f9177675b01 */
class __TwigTemplate_7c175a6f74490d014ea9e4dbc31296cf extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

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
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"gb\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/img/app_icon.png\" />

<title>Pages • Eculimit</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminCmsContent';
    var iso_user = 'gb';
    var lang_is_rtl = '0';
    var full_language_code = 'en-gb';
    var full_cldr_language_code = 'en-GB';
    var country_iso_code = 'ES';
    var _PS_VERSION_ = '8.1.2';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'A new order has been placed on your store.';
    var order_number_msg = 'Order number: ';
    var total_msg = 'Total ';
    var from_msg = 'From: ';
    var see_order_msg = 'View this order';
    var new_customer_msg = 'A new customer registered on your store.';
    var customer_name_msg = 'Customer name: ';
    var new_msg = 'A new message was posted on your store.';
    var see_msg = 'Read this message';
    var token = '49dec092cb8bec0583bdc679c29dd646';
    var currentIndex = 'index.php?controller=AdminCmsContent';
    var employee_token = '9e62ddeb74be43382cd82ff7efc1237e';
    var choose_language_translate = 'Choose language:';
    var default_language = '2';
    var admin_modules_link = '/adminsparkload/index.php/improve/modules/manage?_token=52nqWVNBl6nVmF6PhaT5KfGkSwksYW65mcdK7EDJ0wY';
    var admin_notification_get_link = '/adminsparkload/index.php/common/notifications?_token=52nqWVNBl6nVmF6PhaT5KfGkSwksYW65mcdK7EDJ0wY';
    var admin_notification_push_link = adminNotificationPushLink = '/adminsparkload/index.php/common/notifications/ack?_token=52nqWVNBl6nVmF6PhaT5KfGkSwksYW65mcdK7EDJ0wY';
    var tab_modules_list = '';
    var update_success_msg = 'Update successful';
    var search_product_msg = 'Search for a pr";
        // line 43
        echo "oduct';
  </script>



<link
      rel=\"preload\"
      href=\"/adminsparkload/themes/new-theme/public/2d8017489da689caedc1.preload..woff2\"
      as=\"font\"
      crossorigin
    >
      <link href=\"/adminsparkload/themes/new-theme/public/create_product_default_theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/adminsparkload/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/blockwishlist/public/backoffice.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/adminsparkload/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/adminsparkload\\/\";
var baseDir = \"\\/\";
var changeFormLanguageUrl = \"\\/adminsparkload\\/index.php\\/configure\\/advanced\\/employees\\/change-form-language?_token=52nqWVNBl6nVmF6PhaT5KfGkSwksYW65mcdK7EDJ0wY\";
var currency = {\"iso_code\":\"EUR\",\"sign\":\"\\u20ac\",\"name\":\"Euro\",\"format\":null};
var currency_specifications = {\"symbol\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"currencyCode\":\"EUR\",\"currencySymbol\":\"\\u20ac\",\"numberSymbols\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"\\u00a4#,##0.00\",\"negativePattern\":\"-\\u00a4#,##0.00\",\"maxFractionDigits\":2,\"minFractionDigits\":2,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var number_specifications = {\"symbol\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"numberSymbols\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.###\",\"negativePattern\":\"-#,##0.###\",\"maxFractionDigits\":3,\"minFractionDigits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var prestashop = {\"debug\":false};
var show_new_customers = \"1\";
var show_new_message";
        // line 70
        echo "s = \"1\";
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/adminsparkload/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/js/admin.js?v=8.1.2\"></script>
<script type=\"text/javascript\" src=\"/adminsparkload/themes/new-theme/public/cldr.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/tools.js?v=8.1.2\"></script>
<script type=\"text/javascript\" src=\"/adminsparkload/themes/new-theme/public/create_product.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/modules/blockwishlist/public/vendors.js\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_emailalerts/js/admin/ps_emailalerts.js\"></script>
<script type=\"text/javascript\" src=\"/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/adminsparkload/themes/default/js/vendor/nv.d3.min.js\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_faviconnotificationbo/views/js/favico.js\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_faviconnotificationbo/views/js/ps_faviconnotificationbo.js\"></script>

  <script>
  if (undefined !== ps_faviconnotificationbo) {
    ps_faviconnotificationbo.initialize({
      backgroundColor: '#DF0067',
      textColor: '#FFFFFF',
      notificationGetUrl: '/adminsparkload/index.php/common/notifications?_token=52nqWVNBl6nVmF6PhaT5KfGkSwksYW65mcdK7EDJ0wY',
      CHECKBOX_ORDER: 1,
      CHECKBOX_CUSTOMER: 1,
      CHECKBOX_MESSAGE: 1,
      timer: 120000, // Refresh every 2 minutes
    });
  }
</script>


";
        // line 102
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>";
        echo "

<body
  class=\"lang-gb admincmscontent\"
  data-base-url=\"/adminsparkload/index.php\"  data-token=\"52nqWVNBl6nVmF6PhaT5KfGkSwksYW65mcdK7EDJ0wY\">

  <header id=\"header\" class=\"d-print-none\">

    <nav id=\"header_infos\" class=\"main-header\">
      <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

            <i class=\"material-icons js-mobile-menu\">menu</i>
      <a id=\"header_logo\" class=\"logo float-left\" href=\"http://127.0.0.5/adminsparkload/index.php?controller=HOME&amp;token=e0eb92979b0997d4cc3685042144eeda\"></a>
      <span id=\"shop_version\">8.1.2</span>

      <div class=\"component\" id=\"quick-access-container\">
        <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Quick Access
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://127.0.0.5/adminsparkload/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=7bb06b92b3a593981113481735c3bfbd\"
                 data-item=\"Catalog evaluation\"
      >Catalog evaluation</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://127.0.0.5/adminsparkload/index.php/improve/modules/manage?token=733926701291fd992a462b6931fa3898\"
                 data-item=\"Installed modules\"
      >Installed modules</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://127.0.0.5/adminsparkload/index.php/sell/catalog/categories/new?token=733926701291fd992a462b6931fa3898\"
                 data-item=\"New category\"
      >New category</a>
          <a class=\"dropdown-item quick-row-link new-product-button\"
         href=\"http://127.0.0.5/adminsparkload/index.php/sell/catalog/products-v2/create?token=733926701291fd992a462b6931fa3898\"
                 data-item=\"New product\"
      >New product</a>
          <a class=\"dropdown-item quick-row-link \"
      ";
        // line 140
        echo "   href=\"http://127.0.0.5/adminsparkload/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=e92312975d6e60642684e4b879596ea1\"
                 data-item=\"New voucher\"
      >New voucher</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://127.0.0.5/adminsparkload/index.php/sell/orders?token=733926701291fd992a462b6931fa3898\"
                 data-item=\"Orders\"
      >Orders</a>
        <div class=\"dropdown-divider\"></div>
          <a id=\"quick-add-link\"
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-rand=\"16\"
        data-icon=\"icon-AdminParentThemes\"
        data-method=\"add\"
        data-url=\"index.php/improve/design/cms-pages\"
        data-post-link=\"http://127.0.0.5/adminsparkload/index.php?controller=AdminQuickAccesses&token=95309b415cff6867121ddfe946e7264e\"
        data-prompt-text=\"Please name this shortcut:\"
        data-link=\"Pages - List\"
      >
        <i class=\"material-icons\">add_circle</i>
        Add current page to Quick Access
      </a>
        <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"http://127.0.0.5/adminsparkload/index.php?controller=AdminQuickAccesses&token=95309b415cff6867121ddfe946e7264e\">
      <i class=\"material-icons\">settings</i>
      Manage your quick accesses
    </a>
  </div>
</div>
      </div>
      <div class=\"component component-search\" id=\"header-search-container\">
        <div class=\"component-search-body\">
          <div class=\"component-search-top\">
            <form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form collapsed\"
      method=\"post\"
      action=\"/adminsparkload/index.php?controller=AdminSearch&amp;token=49a6056b71ba3a5f13860d1f6dc2138f\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"\" placeholder=\"Search (e.g.: product re";
        // line 179
        echo "ference, customer name…)\" aria-label=\"Searchbar\">
    <div class=\"input-group-append\">
      <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        Everywhere
      </button>
      <div class=\"dropdown-menu js-items-list\">
        <a class=\"dropdown-item\" data-item=\"Everywhere\" href=\"#\" data-value=\"0\" data-placeholder=\"What are you looking for?\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> Everywhere</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"Catalog\" href=\"#\" data-value=\"1\" data-placeholder=\"Product name, reference, etc.\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> Catalog</a>
        <a class=\"dropdown-item\" data-item=\"Customers by name\" href=\"#\" data-value=\"2\" data-placeholder=\"Name\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> Customers by name</a>
        <a class=\"dropdown-item\" data-item=\"Customers by IP address\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_mac</i> Customers by IP address</a>
        <a class=\"dropdown-item\" data-item=\"Orders\" href=\"#\" data-value=\"3\" data-placeholder=\"Order ID\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_basket</i> Orders</a>
        <a class=\"dropdown-item\" data-item=\"Invoices\" href=\"#\" data-value=\"4\" data-placeholder=\"Invoice number\" data-icon=\"icon-book\"><i class=\"material-icons\">book</i> Invoices</a>
        <a class=\"dropdown-item\" data-item=\"Carts\" href=\"#\" data-value=\"5\" data-placeholder=\"Cart ID\" data-icon=\"icon-shopping-cart\"><i class=\"material-icons\">shopping_cart</i> Carts</a>
        <a class=\"dropdown-item\" data-item=\"Modules\" href=\"#\" data-value=\"7\" data-placeholder=\"Module name\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> Modules</a>
      </div>
      <button class=\"btn btn-prim";
        // line 195
        echo "ary\" type=\"submit\"><span class=\"d-none\">SEARCH</span><i class=\"material-icons\">search</i></button>
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
            <button class=\"component-search-cancel d-none\">Cancel</button>
          </div>

          <div class=\"component-search-quickaccess d-none\">
  <p class=\"component-search-title\">Quick Access</p>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://127.0.0.5/adminsparkload/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=7bb06b92b3a593981113481735c3bfbd\"
             data-item=\"Catalog evaluation\"
    >Catalog evaluation</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://127.0.0.5/adminsparkload/index.php/improve/modules/manage?token=733926701291fd992a462b6931fa3898\"
             data-item=\"Installed modules\"
    >Installed modules</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://127.0.0.5/adminsparkload/index.php/sell/catalog/categories/new?token=733926701291fd992a462b6931fa3898\"
             data-item=\"New category\"
    >New category</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://127.0.0.5/adminsparkload/index.php/sell/catalog/products-v2/create?token=733926701291fd992a462b6931fa3898\"
             data-item=\"New product\"
    >New product</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://127.0.0.5/adminsparkload/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=e92312975d6e60642684e4b879596ea1\"
             data-item=\"New voucher\"
    >New voucher</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://127.0.0.5/adminsparkload/index.php/sell/orders?token=733926701291fd992a462b6931fa3898\"
             data-item=\"Orders\"
    >Orders</a>
    <div class=\"dropdown-divider\"></div>
      <a id=\"quick-add-link\"
      clas";
        // line 238
        echo "s=\"dropdown-item js-quick-link\"
      href=\"#\"
      data-rand=\"178\"
      data-icon=\"icon-AdminParentThemes\"
      data-method=\"add\"
      data-url=\"index.php/improve/design/cms-pages\"
      data-post-link=\"http://127.0.0.5/adminsparkload/index.php?controller=AdminQuickAccesses&token=95309b415cff6867121ddfe946e7264e\"
      data-prompt-text=\"Please name this shortcut:\"
      data-link=\"Pages - List\"
    >
      <i class=\"material-icons\">add_circle</i>
      Add current page to Quick Access
    </a>
    <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"http://127.0.0.5/adminsparkload/index.php?controller=AdminQuickAccesses&token=95309b415cff6867121ddfe946e7264e\">
    <i class=\"material-icons\">settings</i>
    Manage your quick accesses
  </a>
</div>
        </div>

        <div class=\"component-search-background d-none\"></div>
      </div>

      
      
      <div class=\"header-right\">
                  <div class=\"component\" id=\"header-shop-list-container\">
              <div class=\"shop-list\">
    <a class=\"link\" id=\"header_shopname\" href=\"http://127.0.0.5/\" target= \"_blank\">
      <i class=\"material-icons\">visibility</i>
      <span>View my store</span>
    </a>
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
              href=\"#orders-no";
        // line 287
        echo "tifications\"
              role=\"tab\"
            >
              Orders<span id=\"_nb_new_orders_\"></span>
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
              Customers<span id=\"_nb_new_customers_\"></span>
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
              No new order for now :(<br>
              Have you checked your <strong><a href=\"http://127.0.0.5/adminsparkload/index.php?controller=AdminCarts&action=filterOnlyAbandonedCarts&token=78aae0d2d13c979d9a87aae9ac9e1cc4\">abandoned carts</a></strong>?<br>Your next order could be hiding there!
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No new customer for now :(<br>
              Are you active on social media these days?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p";
        // line 336
        echo " class=\"no-notification\">
              No new message for now.<br>
              Seems like all your customers are happy :)
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
      from <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"float-sm-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href='customer_url'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - registered <strong>_date_add_</strong>
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
      <div class=\"employee-top\">
        <span class=\"employee-avatar\"><img class=\"avatar rounded-circle\" src=\"http://127.0.0.5/img/pr/default.jpg\" alt=\"Paulo\" /></span>
        <span class=\"employee_profile\">Welcome back Paulo</span>
      </div>

      <a class=\"dropdown-item employee-link profile-link\" href=\"/adminsparkload/index.php/configure/advanced/employees/1/edit?_token=52nqWVNBl6nVmF6PhaT5KfGkSwksYW65mcdK7EDJ0wY\">
      <i class=\"material-icons\">edit</i>
      <span>Your profile</span>
    </a>
";
        // line 387
        echo "    </div>

    <p class=\"divider\"></p>

    
    <a class=\"dropdown-item employee-link text-center\" id=\"header_logout\" href=\"http://127.0.0.5/adminsparkload/index.php?controller=AdminLogin&amp;logout=1&amp;token=c5451d655017a0904cc9044a4802c4e8\">
      <i class=\"material-icons d-lg-none\">power_settings_new</i>
      <span>Sign out</span>
    </a>
  </div>
</div>
        </div>
              </div>
    </nav>
  </header>

  <nav class=\"nav-bar d-none d-print-none d-md-block\">
  <span class=\"menu-collapse\" data-toggle-url=\"/adminsparkload/index.php/configure/advanced/employees/toggle-navigation?_token=52nqWVNBl6nVmF6PhaT5KfGkSwksYW65mcdK7EDJ0wY\">
    <i class=\"material-icons rtl-flip\">chevron_left</i>
    <i class=\"material-icons rtl-flip\">chevron_left</i>
  </span>

  <div class=\"nav-bar-overflow\">
      <div class=\"logo-container\">
          <a id=\"header_logo\" class=\"logo float-left\" href=\"http://127.0.0.5/adminsparkload/index.php?controller=HOME&amp;token=e0eb92979b0997d4cc3685042144eeda\"></a>
          <span id=\"shop_version\" class=\"header-version\">8.1.2</span>
      </div>

      <ul class=\"main-menu\">
              
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"131\" id=\"tab-HOME\">
                <span class=\"title\">Welcome</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"1\" id=\"subtab-AdminDashboard\">
                    <a href=\"http://127.0.0.5/adminsparkload/index.php?controller=AdminDashboard&amp;token=8370c21f5d2944a3b55c8a8a536554be\" class=\"link\">
                      <i class=\"material-icons mi-trending_up\">trending_up</i>
                      <span>
                      Dashboard
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
          ";
        // line 435
        echo "                                                          keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"2\" id=\"tab-SELL\">
                <span class=\"title\">Sell</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                    <a href=\"/adminsparkload/index.php/sell/orders/?_token=52nqWVNBl6nVmF6PhaT5KfGkSwksYW65mcdK7EDJ0wY\" class=\"link\">
                      <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                      <span>
                      Orders
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                                <a href=\"/adminsparkload/index.php/sell/orders/?_token=52nqWVNBl6nVmF6PhaT5KfGkSwksYW65mcdK7EDJ0wY\" class=\"link\"> Orders
                                </a>
                              </li>

                                                                                 ";
        // line 472
        echo " 
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                                <a href=\"/adminsparkload/index.php/sell/orders/invoices/?_token=52nqWVNBl6nVmF6PhaT5KfGkSwksYW65mcdK7EDJ0wY\" class=\"link\"> Invoices
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                                <a href=\"/adminsparkload/index.php/sell/orders/credit-slips/?_token=52nqWVNBl6nVmF6PhaT5KfGkSwksYW65mcdK7EDJ0wY\" class=\"link\"> Credit Notes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                                <a href=\"/adminsparkload/index.php/sell/orders/delivery-slips/?_token=52nqWVNBl6nVmF6PhaT5KfGkSwksYW65mcdK7EDJ0wY\" class=\"link\"> Delivery Slips
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                                <a href=\"http://127.0.0.5/adminsparkload/index.php?controller=AdminCarts&amp;token=78aae0d2d13c979d9a87aae9ac9e1cc4\" class=\"link\"> Shopping Carts
                                </a>
                              </li>";
        // line 502
        echo "

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                    <a href=\"/adminsparkload/index.php/sell/catalog/products?_token=52nqWVNBl6nVmF6PhaT5KfGkSwksYW65mcdK7EDJ0wY\" class=\"link\">
                      <i class=\"material-icons mi-store\">store</i>
                      <span>
                      Catalog
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                                <a href=\"/adminsparkload/index.php/sell/catalog/products?_token=52nqWVNBl6nVmF6PhaT5KfGkSwksYW65mcdK7EDJ0wY\" class=\"link\"> Products
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                                <a href=\"/adminsparkload/index.php/sell/catalog/categories?_token=52nqWVNBl6nVmF6PhaT5KfGkSwksYW65mcdK7EDJ0wY\" class=\"link\"> Categories
    ";
        // line 534
        echo "                            </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                                <a href=\"/adminsparkload/index.php/sell/catalog/monitoring/?_token=52nqWVNBl6nVmF6PhaT5KfGkSwksYW65mcdK7EDJ0wY\" class=\"link\"> Monitoring
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                                <a href=\"http://127.0.0.5/adminsparkload/index.php?controller=AdminAttributesGroups&amp;token=493fb3d74489e165c35982aca68947c5\" class=\"link\"> Attributes &amp; Features
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                                <a href=\"/adminsparkload/index.php/sell/catalog/brands/?_token=52nqWVNBl6nVmF6PhaT5KfGkSwksYW65mcdK7EDJ0wY\" class=\"link\"> Brands &amp; Suppliers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                              ";
        // line 565
        echo "  <a href=\"/adminsparkload/index.php/sell/attachments/?_token=52nqWVNBl6nVmF6PhaT5KfGkSwksYW65mcdK7EDJ0wY\" class=\"link\"> Files
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                                <a href=\"http://127.0.0.5/adminsparkload/index.php?controller=AdminCartRules&amp;token=e92312975d6e60642684e4b879596ea1\" class=\"link\"> Discounts
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                                <a href=\"/adminsparkload/index.php/sell/stocks/?_token=52nqWVNBl6nVmF6PhaT5KfGkSwksYW65mcdK7EDJ0wY\" class=\"link\"> Stock
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                    <a href=\"/adminsparkload/index.php/sell/customers/?_token=52nqWVNBl6nVmF6PhaT5KfGkSwksYW65mcdK7EDJ0wY\" class=\"link\">
                      <i class=\"material-icons mi-account_circle\">account_circle</i>
                      <span>
                      Customers
                      </span>
                                                    <i class=\"mate";
        // line 597
        echo "rial-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                                <a href=\"/adminsparkload/index.php/sell/customers/?_token=52nqWVNBl6nVmF6PhaT5KfGkSwksYW65mcdK7EDJ0wY\" class=\"link\"> Customers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                                <a href=\"/adminsparkload/index.php/sell/addresses/?_token=52nqWVNBl6nVmF6PhaT5KfGkSwksYW65mcdK7EDJ0wY\" class=\"link\"> Addresses
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                    <a href=\"http://127.0.0.5/adminsparkload/index.php?controller=AdminCustomerThreads&amp;token=6afcd3fa23b21b7a07a1d7294a7b6552\" class=\"link\">
                      <i class=\"material-icons mi-chat\">chat</i>
               ";
        // line 627
        echo "       <span>
                      Customer Service
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                                <a href=\"http://127.0.0.5/adminsparkload/index.php?controller=AdminCustomerThreads&amp;token=6afcd3fa23b21b7a07a1d7294a7b6552\" class=\"link\"> Customer Service
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                                <a href=\"/adminsparkload/index.php/sell/customer-service/order-messages/?_token=52nqWVNBl6nVmF6PhaT5KfGkSwksYW65mcdK7EDJ0wY\" class=\"link\"> Order Messages
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                                <a href=\"http://127.0.0.5/adminsparkload/index.php?controller=AdminReturn&amp;token=71cee284c9c49c1d4c73ae4ed6c72973\" class=\"link\"> Merchandise Returns
     ";
        // line 656
        echo "                           </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                    <a href=\"http://127.0.0.5/adminsparkload/index.php?controller=AdminMetricsLegacyStatsController&amp;token=c9f42ab806ac829417adef5bf87a890d\" class=\"link\">
                      <i class=\"material-icons mi-assessment\">assessment</i>
                      <span>
                      Stats
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-32\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"150\" id=\"subtab-AdminMetricsLegacyStatsController\">
                                <a href=\"http://127.0.0.5/adminsparkload/index.php?controller=AdminMetricsLegacyStatsController&amp;token=c9f42ab806ac829417adef5bf87a890d\" class=\"link\"> Stats
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"151\" id=\"subtab-AdminMetricsController\">
         ";
        // line 688
        echo "                       <a href=\"http://127.0.0.5/adminsparkload/index.php?controller=AdminMetricsController&amp;token=7c52935ab96464913e6f9167543c9a66\" class=\"link\"> PrestaShop Metrics
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title link-active\" data-submenu=\"37\" id=\"tab-IMPROVE\">
                <span class=\"title\">Improve</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"38\" id=\"subtab-AdminParentModulesSf\">
                    <a href=\"http://127.0.0.5/adminsparkload/index.php?controller=AdminPsMboModule&amp;token=1cf0beec74986ae9368a23d126f54c88\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Modules
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-38\" class=\"submenu panel-collapse\">
                                                                                                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"135\" id=\"subtab-AdminPsMboModuleParent\">
";
        // line 723
        echo "                                <a href=\"http://127.0.0.5/adminsparkload/index.php?controller=AdminPsMboModule&amp;token=1cf0beec74986ae9368a23d126f54c88\" class=\"link\"> Marketplace
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"39\" id=\"subtab-AdminModulesSf\">
                                <a href=\"/adminsparkload/index.php/improve/modules/manage?_token=52nqWVNBl6nVmF6PhaT5KfGkSwksYW65mcdK7EDJ0wY\" class=\"link\"> Module Manager
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                                                          
                  <li class=\"link-levelone has_submenu link-active open ul-open\" data-submenu=\"43\" id=\"subtab-AdminParentThemes\">
                    <a href=\"/adminsparkload/index.php/improve/design/themes/?_token=52nqWVNBl6nVmF6PhaT5KfGkSwksYW65mcdK7EDJ0wY\" class=\"link\">
                      <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                      <span>
                      Design
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_up
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                         ";
        // line 752
        echo "                             
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"153\" id=\"subtab-AdminThemesParent\">
                                <a href=\"/adminsparkload/index.php/improve/design/themes/?_token=52nqWVNBl6nVmF6PhaT5KfGkSwksYW65mcdK7EDJ0wY\" class=\"link\"> Theme &amp; Logo
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"139\" id=\"subtab-AdminPsMboTheme\">
                                <a href=\"http://127.0.0.5/adminsparkload/index.php?controller=AdminPsMboTheme&amp;token=85c662b286b4972da39c82ed107d5e2d\" class=\"link\"> Themes Catalog
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"45\" id=\"subtab-AdminParentMailTheme\">
                                <a href=\"/adminsparkload/index.php/improve/design/mail_theme/?_token=52nqWVNBl6nVmF6PhaT5KfGkSwksYW65mcdK7EDJ0wY\" class=\"link\"> Email Theme
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo link-active\" data-submenu=\"47\" id=\"subtab-AdminCmsContent\">
                                <a href=\"/adminsparkload/index.php/improve/design/cms-pages/?_token=52nqWVNBl6nVmF6PhaT5KfGkSwksYW65mcdK7EDJ0wY\" class=\"link\"> Pages
     ";
        // line 781
        echo "                           </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"48\" id=\"subtab-AdminModulesPositions\">
                                <a href=\"/adminsparkload/index.php/improve/design/modules/positions/?_token=52nqWVNBl6nVmF6PhaT5KfGkSwksYW65mcdK7EDJ0wY\" class=\"link\"> Positions
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"49\" id=\"subtab-AdminImages\">
                                <a href=\"http://127.0.0.5/adminsparkload/index.php?controller=AdminImages&amp;token=cffdce9d9c55bbd20ca0047186c7fc2c\" class=\"link\"> Image Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"118\" id=\"subtab-AdminLinkWidget\">
                                <a href=\"/adminsparkload/index.php/modules/link-widget/list?_token=52nqWVNBl6nVmF6PhaT5KfGkSwksYW65mcdK7EDJ0wY\" class=\"link\"> Link List
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"50\" id=\"";
        // line 814
        echo "subtab-AdminParentShipping\">
                    <a href=\"http://127.0.0.5/adminsparkload/index.php?controller=AdminCarriers&amp;token=7af403e520c675da0e1d518a9a46b8f9\" class=\"link\">
                      <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                      <span>
                      Shipping
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-50\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"51\" id=\"subtab-AdminCarriers\">
                                <a href=\"http://127.0.0.5/adminsparkload/index.php?controller=AdminCarriers&amp;token=7af403e520c675da0e1d518a9a46b8f9\" class=\"link\"> Carriers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"52\" id=\"subtab-AdminShipping\">
                                <a href=\"/adminsparkload/index.php/improve/shipping/preferences/?_token=52nqWVNBl6nVmF6PhaT5KfGkSwksYW65mcdK7EDJ0wY\" class=\"link\"> Preferences
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                             ";
        // line 845
        echo "                         
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"53\" id=\"subtab-AdminParentPayment\">
                    <a href=\"/adminsparkload/index.php/improve/payment/payment_methods?_token=52nqWVNBl6nVmF6PhaT5KfGkSwksYW65mcdK7EDJ0wY\" class=\"link\">
                      <i class=\"material-icons mi-payment\">payment</i>
                      <span>
                      Payment
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-53\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"54\" id=\"subtab-AdminPayment\">
                                <a href=\"/adminsparkload/index.php/improve/payment/payment_methods?_token=52nqWVNBl6nVmF6PhaT5KfGkSwksYW65mcdK7EDJ0wY\" class=\"link\"> Payment Methods
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"55\" id=\"subtab-AdminPaymentPreferences\">
                                <a href=\"/adminsparkload/index.php/improve/payment/preferences?_token=52nqWVNBl6nVmF6PhaT5KfGkSwksYW65mcdK7EDJ0wY\" class=\"link\"> Preferences
                                </a>
                              </li>

                                                                              </ul>
                      ";
        // line 875
        echo "                  </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"56\" id=\"subtab-AdminInternational\">
                    <a href=\"/adminsparkload/index.php/improve/international/localization/?_token=52nqWVNBl6nVmF6PhaT5KfGkSwksYW65mcdK7EDJ0wY\" class=\"link\">
                      <i class=\"material-icons mi-language\">language</i>
                      <span>
                      International
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-56\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"57\" id=\"subtab-AdminParentLocalization\">
                                <a href=\"/adminsparkload/index.php/improve/international/localization/?_token=52nqWVNBl6nVmF6PhaT5KfGkSwksYW65mcdK7EDJ0wY\" class=\"link\"> Localization
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"62\" id=\"subtab-AdminParentCountries\">
                                <a href=\"/adminsparkload/index.php/improve/international/zones/?_token=52nqWVNBl6nVmF6PhaT5KfGkSwksYW65mcdK7EDJ0wY\" class=\"link\"> Locations
                                </a>
    ";
        // line 905
        echo "                          </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"66\" id=\"subtab-AdminParentTaxes\">
                                <a href=\"/adminsparkload/index.php/improve/international/taxes/?_token=52nqWVNBl6nVmF6PhaT5KfGkSwksYW65mcdK7EDJ0wY\" class=\"link\"> VAT
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"69\" id=\"subtab-AdminTranslations\">
                                <a href=\"/adminsparkload/index.php/improve/international/translations/settings?_token=52nqWVNBl6nVmF6PhaT5KfGkSwksYW65mcdK7EDJ0wY\" class=\"link\"> Translations
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"144\" id=\"subtab-Marketing\">
                    <a href=\"http://127.0.0.5/adminsparkload/index.php?controller=AdminPsxMktgWithGoogleModule&amp;token=727bc83b834646d211a0e1e45101ecb6\" class=\"link\">
                      <i class=\"material-icons mi-campaign\">campaign</i>
                      <span>
                      Marketing
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                     ";
        // line 937
        echo "                                       </i>
                                            </a>
                                              <ul id=\"collapse-144\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"145\" id=\"subtab-AdminPsxMktgWithGoogleModule\">
                                <a href=\"http://127.0.0.5/adminsparkload/index.php?controller=AdminPsxMktgWithGoogleModule&amp;token=727bc83b834646d211a0e1e45101ecb6\" class=\"link\"> Google
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"147\" id=\"subtab-AdminPsfacebookModule\">
                                <a href=\"http://127.0.0.5/adminsparkload/index.php?controller=AdminPsfacebookModule&amp;token=62978b39bd234094d4472d409dc21b63\" class=\"link\"> Facebook &amp; Instagram
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"70\" id=\"tab-CONFIGURE\">
                <span class=\"title\">Configure</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"71\" id=\"subtab-ShopParameters\">
                    <a href=\"/adminsparkload/index.php/configure/shop/preferen";
        // line 973
        echo "ces/preferences?_token=52nqWVNBl6nVmF6PhaT5KfGkSwksYW65mcdK7EDJ0wY\" class=\"link\">
                      <i class=\"material-icons mi-settings\">settings</i>
                      <span>
                      Shop Parameters
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-71\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"72\" id=\"subtab-AdminParentPreferences\">
                                <a href=\"/adminsparkload/index.php/configure/shop/preferences/preferences?_token=52nqWVNBl6nVmF6PhaT5KfGkSwksYW65mcdK7EDJ0wY\" class=\"link\"> General
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"75\" id=\"subtab-AdminParentOrderPreferences\">
                                <a href=\"/adminsparkload/index.php/configure/shop/order-preferences/?_token=52nqWVNBl6nVmF6PhaT5KfGkSwksYW65mcdK7EDJ0wY\" class=\"link\"> Order Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"78\" id=\"subtab-AdminPPreferences\">
                ";
        // line 1003
        echo "                <a href=\"/adminsparkload/index.php/configure/shop/product-preferences/?_token=52nqWVNBl6nVmF6PhaT5KfGkSwksYW65mcdK7EDJ0wY\" class=\"link\"> Product Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"79\" id=\"subtab-AdminParentCustomerPreferences\">
                                <a href=\"/adminsparkload/index.php/configure/shop/customer-preferences/?_token=52nqWVNBl6nVmF6PhaT5KfGkSwksYW65mcdK7EDJ0wY\" class=\"link\"> Customer Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"83\" id=\"subtab-AdminParentStores\">
                                <a href=\"/adminsparkload/index.php/configure/shop/contacts/?_token=52nqWVNBl6nVmF6PhaT5KfGkSwksYW65mcdK7EDJ0wY\" class=\"link\"> CMS page
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"86\" id=\"subtab-AdminParentMeta\">
                                <a href=\"/adminsparkload/index.php/configure/shop/seo-urls/?_token=52nqWVNBl6nVmF6PhaT5KfGkSwksYW65mcdK7EDJ0wY\" class=\"link\"> Traffic &amp; SEO
                                </a>
                              </li>

                                                                                  
                              
                                      ";
        // line 1033
        echo "                      
                              <li class=\"link-leveltwo\" data-submenu=\"89\" id=\"subtab-AdminParentSearchConf\">
                                <a href=\"http://127.0.0.5/adminsparkload/index.php?controller=AdminSearchConf&amp;token=7e19c6c52c856965c4c9de17ddd936e5\" class=\"link\"> Search
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"92\" id=\"subtab-AdminAdvancedParameters\">
                    <a href=\"/adminsparkload/index.php/configure/advanced/system-information/?_token=52nqWVNBl6nVmF6PhaT5KfGkSwksYW65mcdK7EDJ0wY\" class=\"link\">
                      <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                      <span>
                      Advanced Parameters
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-92\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"93\" id=\"subtab-AdminInformation\">
                                <a href=\"/adminsparkload/index.php/configure/advanced/system-information/?_token=52nqWVNBl6nVmF6PhaT5KfGkSwksYW65mcdK7EDJ0wY\" class=\"link\"> Information
                                </a>
           ";
        // line 1062
        echo "                   </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"94\" id=\"subtab-AdminPerformance\">
                                <a href=\"/adminsparkload/index.php/configure/advanced/performance/?_token=52nqWVNBl6nVmF6PhaT5KfGkSwksYW65mcdK7EDJ0wY\" class=\"link\"> Performance
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"95\" id=\"subtab-AdminAdminPreferences\">
                                <a href=\"/adminsparkload/index.php/configure/advanced/administration/?_token=52nqWVNBl6nVmF6PhaT5KfGkSwksYW65mcdK7EDJ0wY\" class=\"link\"> Administration
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"96\" id=\"subtab-AdminEmails\">
                                <a href=\"/adminsparkload/index.php/configure/advanced/emails/?_token=52nqWVNBl6nVmF6PhaT5KfGkSwksYW65mcdK7EDJ0wY\" class=\"link\"> E-mail
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"97\" id=\"subtab-AdminImport\">
                                <a href=\"/adminsparkload/index.php/configure/advanced/import/?_token=52nqWVNBl6nVm";
        // line 1092
        echo "F6PhaT5KfGkSwksYW65mcdK7EDJ0wY\" class=\"link\"> Import
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"98\" id=\"subtab-AdminParentEmployees\">
                                <a href=\"/adminsparkload/index.php/configure/advanced/employees/?_token=52nqWVNBl6nVmF6PhaT5KfGkSwksYW65mcdK7EDJ0wY\" class=\"link\"> Team
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"102\" id=\"subtab-AdminParentRequestSql\">
                                <a href=\"/adminsparkload/index.php/configure/advanced/sql-requests/?_token=52nqWVNBl6nVmF6PhaT5KfGkSwksYW65mcdK7EDJ0wY\" class=\"link\"> Database
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"105\" id=\"subtab-AdminLogs\">
                                <a href=\"/adminsparkload/index.php/configure/advanced/logs/?_token=52nqWVNBl6nVmF6PhaT5KfGkSwksYW65mcdK7EDJ0wY\" class=\"link\"> Logs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"106\" id=\"subtab-AdminWebservice\">
                         ";
        // line 1124
        echo "       <a href=\"/adminsparkload/index.php/configure/advanced/webservice-keys/?_token=52nqWVNBl6nVmF6PhaT5KfGkSwksYW65mcdK7EDJ0wY\" class=\"link\"> Webservice
                                </a>
                              </li>

                                                                                                                                                                                                                                                    
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"110\" id=\"subtab-AdminFeatureFlag\">
                                <a href=\"/adminsparkload/index.php/configure/advanced/feature-flags/?_token=52nqWVNBl6nVmF6PhaT5KfGkSwksYW65mcdK7EDJ0wY\" class=\"link\"> New &amp; Experimental Features
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"111\" id=\"subtab-AdminParentSecurity\">
                                <a href=\"/adminsparkload/index.php/configure/advanced/security/?_token=52nqWVNBl6nVmF6PhaT5KfGkSwksYW65mcdK7EDJ0wY\" class=\"link\"> Security
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"149\" id=\"subtab-AdminKlaviyoPsConfig\">
                    <a href=\"http://127.0.0.5/adminsparkload/index.php?controller=AdminKlaviyoPsConfig&amp;token=388274205eefdc4916e1f72ad65361b9\" class=\"link\">
";
        // line 1152
        echo "                      <i class=\"material-icons mi-trending_up\">trending_up</i>
                      <span>
                      Klaviyo
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"116\" id=\"tab-DEFAULT\">
                <span class=\"title\">More</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"156\" id=\"subtab-AdminSelfUpgrade\">
                    <a href=\"http://127.0.0.5/adminsparkload/index.php?controller=AdminSelfUpgrade&amp;token=8f9ee6c5ce53a439f721269530fc282f\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      1-Click Upgrade
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                              
          
                  </ul>
  </div>
  
</nav>


<div class=\"header-toolbar d-print-none\">
    
  <div class=\"container-fluid\">

    
      <nav aria-label=\"Breadcrumb\">
        <ol class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\">Design</li>
          
      ";
        // line 1203
        echo "                <li class=\"breadcrumb-item active\">
              <a href=\"/adminsparkload/index.php/improve/design/cms-pages/?_token=52nqWVNBl6nVmF6PhaT5KfGkSwksYW65mcdK7EDJ0wY\" aria-current=\"page\">Pages</a>
            </li>
                  </ol>
      </nav>
    

    <div class=\"title-row\">
      
          <h1 class=\"title\">
            Pages          </h1>
      

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
            
                                                          <a
                  class=\"btn btn-primary pointer\"                  id=\"page-header-desc-configuration-add_cms_category\"
                  href=\"/adminsparkload/index.php/improve/design/cms-pages/category/new?_token=52nqWVNBl6nVmF6PhaT5KfGkSwksYW65mcdK7EDJ0wY\"                  title=\"Add new page category\"                                  >
                  <i class=\"material-icons\">add_circle_outline</i>                  Add new page category
                </a>
                                                                        <a
                  class=\"btn btn-primary pointer\"                  id=\"page-header-desc-configuration-add_cms_page\"
                  href=\"/adminsparkload/index.php/improve/design/cms-pages/new?_token=52nqWVNBl6nVmF6PhaT5KfGkSwksYW65mcdK7EDJ0wY\"                  title=\"Add new page\"                                  >
                  <i class=\"material-icons\">add_circle_outline</i>                  Add new page
                </a>
                                      
            
                              <a class=\"btn btn-outline-secondary btn-help btn-sidebar\" href=\"#\"
                   title=\"Help\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
                   data-url=\"/adminsparkload/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop-project.org%252Fgb%252Fdoc%252FAdminCmsContent%253Fversion%253D8.1.2%2526country%253Dgb/Help?_token=52nqWVNBl6nVmF6Pha";
        // line 1236
        echo "T5KfGkSwksYW65mcdK7EDJ0wY\"
                   id=\"product_form_open_help\"
                >
                  Help
                </a>
                                    </div>
        </div>

      
    </div>
  </div>

  
  
  <div class=\"btn-floating\">
    <button class=\"btn btn-primary collapsed\" data-toggle=\"collapse\" data-target=\".btn-floating-container\" aria-expanded=\"false\">
      <i class=\"material-icons\">add</i>
    </button>
    <div class=\"btn-floating-container collapse\">
      <div class=\"btn-floating-menu\">
        
                              <a
              class=\"btn btn-floating-item   pointer\"              id=\"page-header-desc-floating-configuration-add_cms_category\"
              href=\"/adminsparkload/index.php/improve/design/cms-pages/category/new?_token=52nqWVNBl6nVmF6PhaT5KfGkSwksYW65mcdK7EDJ0wY\"              title=\"Add new page category\"            >
              Add new page category
              <i class=\"material-icons\">add_circle_outline</i>            </a>
                                        <a
              class=\"btn btn-floating-item   pointer\"              id=\"page-header-desc-floating-configuration-add_cms_page\"
              href=\"/adminsparkload/index.php/improve/design/cms-pages/new?_token=52nqWVNBl6nVmF6PhaT5KfGkSwksYW65mcdK7EDJ0wY\"              title=\"Add new page\"            >
              Add new page
              <i class=\"material-icons\">add_circle_outline</i>            </a>
                  
                              <a class=\"btn btn-floating-item btn-help btn-sidebar\" href=\"#\"
               title=\"Help\"
               data-toggle=\"sidebar\"
               data-target=\"#right-sidebar\"
               data-url=\"/adminsparkload/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop-project.org%252Fgb%252Fdoc%252FAdminCmsContent%253Fversion%253D8.1.2%2526country%253Dgb/Help?_token=52nqWVNBl6nVmF6PhaT5KfGkSwksYW65mcdK7EDJ0wY\"
            >
              Help
            </a>
                        </";
        // line 1276
        echo "div>
    </div>
  </div>
  
</div>

<div id=\"main-div\">
          
      <div class=\"content-div  \">

        

                                                        
        <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>
<div id=\"content-message-box\"></div>


  ";
        // line 1293
        $this->displayBlock('content_header', $context, $blocks);
        $this->displayBlock('content', $context, $blocks);
        $this->displayBlock('content_footer', $context, $blocks);
        $this->displayBlock('sidebar_right', $context, $blocks);
        echo "

        

      </div>
    </div>

  <div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>Oh no!</h1>
  <p class=\"mt-3\">
    The mobile version of this page is not available yet.
  </p>
  <p class=\"mt-2\">
    Please use a desktop computer to access this page, until is adapted to mobile.
  </p>
  <p class=\"mt-2\">
    Thank you.
  </p>
  <a href=\"http://127.0.0.5/adminsparkload/index.php?controller=HOME&amp;token=e0eb92979b0997d4cc3685042144eeda\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons rtl-flip\">arrow_back</i>
    Back
  </a>
</div>
  <div class=\"mobile-layer\"></div>

      <div id=\"footer\" class=\"bootstrap\">
    
</div>
  

      <div class=\"bootstrap\">
      
    </div>
  
";
        // line 1327
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>";
        echo "
</html>";
    }

    // line 102
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_extra_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 1293
    public function block_content_header($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_content_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_sidebar_right($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 1327
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_extra_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_translate_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "__string_template__8ddeca946e9754e707758f9177675b01";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1498 => 1327,  1477 => 1293,  1466 => 102,  1457 => 1327,  1417 => 1293,  1398 => 1276,  1356 => 1236,  1321 => 1203,  1268 => 1152,  1238 => 1124,  1204 => 1092,  1172 => 1062,  1141 => 1033,  1109 => 1003,  1077 => 973,  1039 => 937,  1005 => 905,  973 => 875,  941 => 845,  908 => 814,  873 => 781,  842 => 752,  811 => 723,  774 => 688,  740 => 656,  709 => 627,  677 => 597,  643 => 565,  610 => 534,  576 => 502,  544 => 472,  505 => 435,  455 => 387,  402 => 336,  351 => 287,  300 => 238,  255 => 195,  237 => 179,  196 => 140,  153 => 102,  119 => 70,  90 => 43,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__8ddeca946e9754e707758f9177675b01", "");
    }
}
