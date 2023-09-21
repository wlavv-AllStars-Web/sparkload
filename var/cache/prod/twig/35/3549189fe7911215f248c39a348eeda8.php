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

/* __string_template__11c725767dd9971e56760bc348a41b04 */
class __TwigTemplate_1d8960a271c39d92b476a725bdea6ffc extends Template
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
<html lang=\"pt\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/img/app_icon.png\" />

<title>Home • sparkload</title>

  <script type=\"text/javascript\">
    var help_class_name = 'HOME';
    var iso_user = 'pt';
    var lang_is_rtl = '0';
    var full_language_code = 'pt-pt';
    var full_cldr_language_code = 'pt-PT';
    var country_iso_code = 'PT';
    var _PS_VERSION_ = '8.1.1';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'Foi efectuada uma nova encomenda na sua loja.';
    var order_number_msg = 'Número da encomenda: ';
    var total_msg = 'Total: ';
    var from_msg = 'De: ';
    var see_order_msg = 'Ver esta encomenda';
    var new_customer_msg = 'Um novo cliente registou-se na sua loja.';
    var customer_name_msg = 'Nome do cliente: ';
    var new_msg = 'Foi publicada uma nova mensagem na sua loja.';
    var see_msg = 'Ler esta mensagem';
    var token = 'e0eb92979b0997d4cc3685042144eeda';
    var currentIndex = 'index.php?controller=HOME';
    var employee_token = '9e62ddeb74be43382cd82ff7efc1237e';
    var choose_language_translate = 'Escolher idioma:';
    var default_language = '1';
    var admin_modules_link = '/adminsparkload/index.php/improve/modules/manage?_token=zTb6UsDmVzUI_0f9w2kxHdlBgmTOdEMRlKXt-vEYMvY';
    var admin_notification_get_link = '/adminsparkload/index.php/common/notifications?_token=zTb6UsDmVzUI_0f9w2kxHdlBgmTOdEMRlKXt-vEYMvY';
    var admin_notification_push_link = adminNotificationPushLink = '/adminsparkload/index.php/common/notifications/ack?_token=zTb6UsDmVzUI_0f9w2kxHdlBgmTOdEMRlKXt-vEYMvY';
    var tab_modules_list = '';
    var update_success_msg = 'Atualizado com sucesso';
    var search_product_msg = 'Pesquisar um";
        // line 43
        echo " produto';
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
      <link href=\"/modules/klaviyopsautomation/dist/css/klaviyops-admin-global.0dd51c02.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"https://unpkg.com/@prestashopcorp/edition-reskin/dist/back.min.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/psxmarketingwithgoogle/views/css/admin/menu.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/ps_facebook/views/css/admin/menu.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/adminsparkload\\/\";
var baseDir = \"\\/\";
var changeFormLanguageUrl = \"\\/adminsparkload\\/index.php\\/configure\\/advanced\\/employees\\/change-form-language?_token=zTb6UsDmVzUI_0f9w2kxHdlBgmTOdEMRlKXt-vEYMvY\";
var currency = {\"iso_code\":\"EUR\",\"sign\":\"\\u20ac\",\"name\":\"Euro\",\"format\":null};
var currency_specifications = {\"symbol\":[\",\",\"\\u00a0\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"currencyCode\":\"EUR\",\"currencySymbol\":\"\\u20ac\",\"numberSymbols\":[\",\",\"\\u00a0\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.00\\u00a0\\u00a4\",\"negativePattern\":\"-#,##0.00\\u00a0\\u00a4\",\"maxFractionDigits\":2,\"minFractionDigits\":2,\"groupingUsed\":t";
        // line 70
        echo "rue,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var number_specifications = {\"symbol\":[\",\",\"\\u00a0\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"numberSymbols\":[\",\",\"\\u00a0\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.###\",\"negativePattern\":\"-#,##0.###\",\"maxFractionDigits\":3,\"minFractionDigits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var prestashop = {\"debug\":false};
var show_new_customers = \"1\";
var show_new_messages = \"1\";
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/adminsparkload/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/js/admin.js?v=8.1.1\"></script>
<script type=\"text/javascript\" src=\"/adminsparkload/themes/new-theme/public/cldr.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/tools.js?v=8.1.1\"></script>
<script type=\"text/javascript\" src=\"/adminsparkload/themes/new-theme/public/create_product.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/modules/blockwishlist/public/vendors.js\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_emailalerts/js/admin/ps_emailalerts.js\"></script>
<script type=\"text/javascript\" src=\"/modules/gamification/views/js/gamification_bt.js\"></script>
<script type=\"text/javascript\" src=\"/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/adminsparkload/themes/default/js/vendor/nv.d3.min.js\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_mbo/views/js/recommended-modules.js?v=4.5.1\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_faviconnotificationbo/views/js/favico.js\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_faviconnotificationbo/views/js/ps_faviconnotificationbo.js\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_editio";
        // line 92
        echo "n_basic/views/js/favicon.js\"></script>

  <script>
            var admin_gamification_ajax_url = \"http:\\/\\/192.168.1.64:86\\/adminsparkload\\/index.php?controller=AdminGamification&token=2c229fa598aa5efcd3269b284ac89e3f\";
            var current_id_tab = 131;
        </script><script>
  if (undefined !== ps_faviconnotificationbo) {
    ps_faviconnotificationbo.initialize({
      backgroundColor: '#DF0067',
      textColor: '#FFFFFF',
      notificationGetUrl: '/adminsparkload/index.php/common/notifications?_token=zTb6UsDmVzUI_0f9w2kxHdlBgmTOdEMRlKXt-vEYMvY',
      CHECKBOX_ORDER: 1,
      CHECKBOX_CUSTOMER: 1,
      CHECKBOX_MESSAGE: 1,
      timer: 120000, // Refresh every 2 minutes
    });
  }
</script>
    <script>
        window.userLocale  = 'pt';
        window.userflow_id = 'ct_55jfryadgneorc45cjqxpbf6o4';
    </script>
    <script type=\"module\" src=\"https://unpkg.com/@prestashopcorp/smb-edition-homepage/dist/assets/index.js\"></script>

";
        // line 116
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>";
        echo "

<body
  class=\"lang-pt home\"
  data-base-url=\"/adminsparkload/index.php\"  data-token=\"zTb6UsDmVzUI_0f9w2kxHdlBgmTOdEMRlKXt-vEYMvY\">

  <header id=\"header\" class=\"d-print-none\">

    <nav id=\"header_infos\" class=\"main-header\">
      <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

            <i class=\"material-icons js-mobile-menu\">menu</i>
      <a id=\"header_logo\" class=\"logo float-left\" href=\"/adminsparkload/index.php/modules/pseditionbasic/homepage?_token=zTb6UsDmVzUI_0f9w2kxHdlBgmTOdEMRlKXt-vEYMvY\"></a>
      <span id=\"shop_version\">8.1.1</span>

      <div class=\"component\" id=\"quick-access-container\">
        <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Acesso Rápido
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://192.168.1.64:86/adminsparkload/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=7bb06b92b3a593981113481735c3bfbd\"
                 data-item=\"Avaliação do catálogo\"
      >Avaliação do catálogo</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://192.168.1.64:86/adminsparkload/index.php/sell/orders?token=733926701291fd992a462b6931fa3898\"
                 data-item=\"Encomendas\"
      >Encomendas</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://192.168.1.64:86/adminsparkload/index.php/improve/modules/manage?token=733926701291fd992a462b6931fa3898\"
                 data-item=\"Módulos instalados\"
      >Módulos instalados</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://192.168.1.64:86/adminsparkload/index.php/sell/catalog/categories/new?token=733926701291fd992a462b6931fa3898\"
                 data-item=\"Nova Categoria\"
      >Nova Categoria</a>
          <a class=\"dropdown-item quick-row-link new-p";
        // line 153
        echo "roduct-button\"
         href=\"http://192.168.1.64:86/adminsparkload/index.php/sell/catalog/products-v2/create?token=733926701291fd992a462b6931fa3898\"
                 data-item=\"Novo produto\"
      >Novo produto</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://192.168.1.64:86/adminsparkload/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=e92312975d6e60642684e4b879596ea1\"
                 data-item=\"Novo Voucher\"
      >Novo Voucher</a>
        <div class=\"dropdown-divider\"></div>
          <a id=\"quick-add-link\"
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-rand=\"4\"
        data-icon=\"\"
        data-method=\"add\"
        data-url=\"index.php/modules/pseditionbasic/homepage?-vEYMvY\"
        data-post-link=\"http://192.168.1.64:86/adminsparkload/index.php?controller=AdminQuickAccesses&token=95309b415cff6867121ddfe946e7264e\"
        data-prompt-text=\"Atribua um nome a este atalho:\"
        data-link=\"Welcome - Lista\"
      >
        <i class=\"material-icons\">add_circle</i>
        Adicionar página atual ao «Acesso Rápido»
      </a>
        <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"http://192.168.1.64:86/adminsparkload/index.php?controller=AdminQuickAccesses&token=95309b415cff6867121ddfe946e7264e\">
      <i class=\"material-icons\">settings</i>
      Gerir os seus acessos rápidos
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
    <input type=\"text\" class=\"form-contr";
        // line 193
        echo "ol js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"\" placeholder=\"Pesquisar (por ex.: referência do produto, nome do cliente…)\" aria-label=\"Barra de pesquisa\">
    <div class=\"input-group-append\">
      <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        Em todo o lado
      </button>
      <div class=\"dropdown-menu js-items-list\">
        <a class=\"dropdown-item\" data-item=\"Em todo o lado\" href=\"#\" data-value=\"0\" data-placeholder=\"O que procura?\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> Em todo o lado</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"Catálogo\" href=\"#\" data-value=\"1\" data-placeholder=\"Nome do produto, referência, etc.\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> Catálogo</a>
        <a class=\"dropdown-item\" data-item=\"Clientes por nome\" href=\"#\" data-value=\"2\" data-placeholder=\"Nome\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> Clientes por nome</a>
        <a class=\"dropdown-item\" data-item=\"Clientes por endereço IP\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_mac</i> Clientes por endereço IP</a>
        <a class=\"dropdown-item\" data-item=\"Encomendas\" href=\"#\" data-value=\"3\" data-placeholder=\"Nº da Encomenda\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_basket</i> Encomendas</a>
        <a class=\"dropdown-item\" data-item=\"Faturas\" href=\"#\" data-value=\"4\" data-placeholder=\"Número da fatura\" data-icon=\"icon-book\"><i class=\"material-icons\">book</i> Faturas</a>
        <a class=\"dropdown-item\" data-item=\"Carrinhos\" href=\"#\" data-value=\"5\" data-placeholder=\"ID do Carrinho\" data-icon=\"icon-shopping-cart\"><i class=\"material-icons\">shopping_cart</i> Carrinhos</a>
        <a class=\"dropdown-item\" data-item=\"Módulos\" href=\"#\" data-value=";
        // line 207
        echo "\"7\" data-placeholder=\"Nome do Módulo\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> Módulos</a>
      </div>
      <button class=\"btn btn-primary\" type=\"submit\"><span class=\"d-none\">PESQUISAR</span><i class=\"material-icons\">search</i></button>
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
            <button class=\"component-search-cancel d-none\">Cancelar</button>
          </div>

          <div class=\"component-search-quickaccess d-none\">
  <p class=\"component-search-title\">Acesso Rápido</p>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://192.168.1.64:86/adminsparkload/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=7bb06b92b3a593981113481735c3bfbd\"
             data-item=\"Avaliação do catálogo\"
    >Avaliação do catálogo</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://192.168.1.64:86/adminsparkload/index.php/sell/orders?token=733926701291fd992a462b6931fa3898\"
             data-item=\"Encomendas\"
    >Encomendas</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://192.168.1.64:86/adminsparkload/index.php/improve/modules/manage?token=733926701291fd992a462b6931fa3898\"
             data-item=\"Módulos instalados\"
    >Módulos instalados</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://192.168.1.64:86/adminsparkload/index.php/sell/catalog/categories/new?token=733926701291fd992a462b6931fa3898\"
             data-item=\"Nova Categoria\"
    >Nova Categoria</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://192.168.1.64:86/adminsparkload/index.php/sell/catalog/products-v2/create?token=733926701291fd992a462b6931fa3898\"
             data-item=\"Novo produto\"
    >Novo produto</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://192.168.1.64:86/adminspar";
        // line 247
        echo "kload/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=e92312975d6e60642684e4b879596ea1\"
             data-item=\"Novo Voucher\"
    >Novo Voucher</a>
    <div class=\"dropdown-divider\"></div>
      <a id=\"quick-add-link\"
      class=\"dropdown-item js-quick-link\"
      href=\"#\"
      data-rand=\"36\"
      data-icon=\"\"
      data-method=\"add\"
      data-url=\"index.php/modules/pseditionbasic/homepage?-vEYMvY\"
      data-post-link=\"http://192.168.1.64:86/adminsparkload/index.php?controller=AdminQuickAccesses&token=95309b415cff6867121ddfe946e7264e\"
      data-prompt-text=\"Atribua um nome a este atalho:\"
      data-link=\"Welcome - Lista\"
    >
      <i class=\"material-icons\">add_circle</i>
      Adicionar página atual ao «Acesso Rápido»
    </a>
    <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"http://192.168.1.64:86/adminsparkload/index.php?controller=AdminQuickAccesses&token=95309b415cff6867121ddfe946e7264e\">
    <i class=\"material-icons\">settings</i>
    Gerir os seus acessos rápidos
  </a>
</div>
        </div>

        <div class=\"component-search-background d-none\"></div>
      </div>

      
                      <div class=\"component hide-mobile-sm\" id=\"header-maintenance-mode-container\">
          <a class=\"link shop-state\"
             id=\"maintenance-mode\"
             data-toggle=\"pstooltip\"
             data-placement=\"bottom\"
             data-html=\"true\"
             title=\"          &lt;p class=&quot;text-left text-nowrap&quot;&gt;
            &lt;strong&gt;A sua loja está em modo de manutenção.&lt;/strong&gt;
          &lt;/p&gt;
          &lt;p class=&quot;text-left&quot;&gt;
              Os seus visitantes e clientes não podem aceder à sua loja quando esta se encontra em modo de manutenção.
          &lt;/p&gt;
          &lt;p class=&quot;text-left&quot;&gt;
              Para gerir as definições de manutenção, vá a Parâmetros da loja &amp;gt; Geral &amp;gt; separador Manutenção.
          &lt;/p&gt;
             ";
        // line 291
        echo "         &lt;p class=&quot;text-left&quot;&gt;
              Os administradores podem aceder ao escritório da loja sem guardar o seu IP.
            &lt;/p&gt;
                  \"
             href=\"/adminsparkload/index.php/configure/shop/maintenance/?_token=zTb6UsDmVzUI_0f9w2kxHdlBgmTOdEMRlKXt-vEYMvY\"
          >
            <i class=\"material-icons\"
              style=\"color: var(--green);\"
            >build</i>
            <span>Modo de manutenção</span>
          </a>
        </div>
      
      <div class=\"header-right\">
                  <div class=\"component\" id=\"header-shop-list-container\">
              <div class=\"shop-list\">
    <a class=\"link\" id=\"header_shopname\" href=\"http://192.168.1.64:86/\" target= \"_blank\">
      <i class=\"material-icons\">visibility</i>
      <span>Ver a minha loja</span>
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
              href=\"#orders-notifications\"
              role=\"tab\"
            >
              Encomendas<span id=\"_nb_new_orders_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"customers-tab\"
              data-toggle=\"tab\"
              data-type=\"customer\"
       ";
        // line 340
        echo "       href=\"#customers-notifications\"
              role=\"tab\"
            >
              Clientes<span id=\"_nb_new_customers_\"></span>
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
              Mensagens<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Nenhuma nova encomenda por enquanto :(<br>
              Verificou os seus <strong><a href=\"http://192.168.1.64:86/adminsparkload/index.php?controller=AdminCarts&action=filterOnlyAbandonedCarts&token=78aae0d2d13c979d9a87aae9ac9e1cc4\">carrinhos abandonados</a></strong>?<br>A sua próxima encomenda poderá estar escondida aí!
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Nenhum novo cliente por enquanto :(<br>
              Tem estado ativo nas redes sociais estes últimos dias?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Sem nova mensagem por enquanto.<br>
              Ao que parece, todos os seus clientes estão satisfeitos :)
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                        </div>
    </div>
  </div>
</d";
        // line 386
        echo "iv>

  <script type=\"text/html\" id=\"order-notification-template\">
    <a class=\"notif\" href='order_url'>
      #_id_order_ -
      de <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"float-sm-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href='customer_url'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - registado <strong>_date_add_</strong>
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
        <span class=\"employee-avatar\"><img class=\"avatar rounded-circle\" src=\"http://192.168.1.64:86/img/pr/default.jpg\" alt=\"Paulo\" /></span>
        <span class=\"employee_profile\">Bem-vindo de volta Paulo</span>
      </div>

      <a class=\"dropdown-item employee-link profile-link\" href=\"/adminsparkload/index.php/configure/advanced/employees/1/edit?_token=zTb6UsDmVzUI_0f9w2kxHdlBgmTOdEMRlKXt-vEYMvY\">
      <i class=\"material-icons\">edit</i>
      <span>O seu perfil</span>
    </a>
    </div>

    <p class=\"divider\"></p>

                  <a class=\"dropdown-item \" href=\"https://accounts.distribution.prestashop.net?utm_source=192.168.1.64%3A86&utm_medium=back-office&utm_campaign=ps_accounts&utm_content=headeremployeedropdownlink\" targe";
        // line 432
        echo "t=\"_blank\" rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">open_in_new</i> Gerir a sua conta PrestaShop
        </a>
                          <a class=\"dropdown-item ps_mbo\" href=\"https://www.prestashop.com/en/training?utm_source=back-office&utm_medium=menu&utm_content=download8_1&utm_campaign=training-pt&utm_mbo_source=menu-user-back-office\" target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">school</i> Treinamento
        </a>
                          <a class=\"dropdown-item ps_mbo\" href=\"https://www.prestashop.com/pt/experts?utm_source=back-office&utm_medium=menu&utm_content=download8_1&utm_campaign=expert-pt&utm_mbo_source=menu-user-back-office\" target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">person_pin_circle</i> Encontre um especialista
        </a>
                          <a class=\"dropdown-item ps_mbo\" href=\"https://addons.prestashop.com/pt/?utm_source=back-office&utm_medium=menu&utm_content=download8_1&utm_campaign=addons-pt&utm_mbo_source=menu-user-back-office\" target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">extension</i> PrestaShop Marketplace
        </a>
                          <a class=\"dropdown-item ps_mbo\" href=\"https://help-center.prestashop.com/en?utm_source=back-office&utm_medium=menu&utm_content=download8_1&utm_campaign=help-center-pt&utm_mbo_source=menu-user-back-office\" target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">help</i> Central de Ajuda
        </a>
                  <p class=\"divider\"></p>
            
    <a class=\"dropdown-item employee-link text-center\" id=\"header_logout\" href=\"http://192.168.1.64:86/adminsparkload/index.php?controller=AdminLogin&amp;logout=1&amp;token=c5451d655017a0904cc9044a4802c4e8\">
      <i class=\"material-icons d-lg-none\">power_settings_new</i>
      <span>Fechar sessão</span>
    </a>
  </div>
</div>
        </div>
  ";
        // line 456
        echo "            </div>
    </nav>
  </header>

  <nav class=\"nav-bar d-none d-print-none d-md-block\">
  <span class=\"menu-collapse\" data-toggle-url=\"/adminsparkload/index.php/configure/advanced/employees/toggle-navigation?_token=zTb6UsDmVzUI_0f9w2kxHdlBgmTOdEMRlKXt-vEYMvY\">
    <i class=\"material-icons rtl-flip\">chevron_left</i>
    <i class=\"material-icons rtl-flip\">chevron_left</i>
  </span>

  <div class=\"nav-bar-overflow\">
      <div class=\"logo-container\">
          <a id=\"header_logo\" class=\"logo float-left\" href=\"/adminsparkload/index.php/modules/pseditionbasic/homepage?_token=zTb6UsDmVzUI_0f9w2kxHdlBgmTOdEMRlKXt-vEYMvY\"></a>
          <span id=\"shop_version\" class=\"header-version\">8.1.1</span>
      </div>

      <ul class=\"main-menu\">
              
                                          
                    
          
            <li class=\"category-title link-active\" data-submenu=\"131\" id=\"tab-HOME\">
                <span class=\"title\">Welcome</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"132\" id=\"subtab-AdminPsEditionBasicHomepageController\">
                    <a href=\"/adminsparkload/index.php/modules/pseditionbasic/homepage?_token=zTb6UsDmVzUI_0f9w2kxHdlBgmTOdEMRlKXt-vEYMvY\" class=\"link\">
                      <i class=\"material-icons mi-home\">home</i>
                      <span>
                      Home
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                                              
                  
                                                      
";
        // line 499
        echo "                  
                  <li class=\"link-levelone\" data-submenu=\"1\" id=\"subtab-AdminDashboard\">
                    <a href=\"http://192.168.1.64:86/adminsparkload/index.php?controller=AdminDashboard&amp;token=8370c21f5d2944a3b55c8a8a536554be\" class=\"link\">
                      <i class=\"material-icons mi-trending_up\">trending_up</i>
                      <span>
                      Painel de controlo
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"2\" id=\"tab-SELL\">
                <span class=\"title\">Vender</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                    <a href=\"/adminsparkload/index.php/sell/orders/?_token=zTb6UsDmVzUI_0f9w2kxHdlBgmTOdEMRlKXt-vEYMvY\" class=\"link\">
                      <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                      <span>
                      Encomendas
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-3\" class=\"submenu panel-collap";
        // line 535
        echo "se\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                                <a href=\"/adminsparkload/index.php/sell/orders/?_token=zTb6UsDmVzUI_0f9w2kxHdlBgmTOdEMRlKXt-vEYMvY\" class=\"link\"> Encomendas
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                                <a href=\"/adminsparkload/index.php/sell/orders/invoices/?_token=zTb6UsDmVzUI_0f9w2kxHdlBgmTOdEMRlKXt-vEYMvY\" class=\"link\"> Faturas
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                                <a href=\"/adminsparkload/index.php/sell/orders/credit-slips/?_token=zTb6UsDmVzUI_0f9w2kxHdlBgmTOdEMRlKXt-vEYMvY\" class=\"link\"> Notas de Crédito
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                                <a href=\"/adminsparkload/index.php/sell/orders/delivery-slips/?_token=zTb6UsDmVzUI_0f9w2kxHdlBgmTOdEMRlKXt-vEYMvY\" class=\"link\"> Notas de Entrega
                            ";
        // line 565
        echo "    </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                                <a href=\"http://192.168.1.64:86/adminsparkload/index.php?controller=AdminCarts&amp;token=78aae0d2d13c979d9a87aae9ac9e1cc4\" class=\"link\"> Carrinhos de Compras
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                    <a href=\"/adminsparkload/index.php/sell/catalog/products?_token=zTb6UsDmVzUI_0f9w2kxHdlBgmTOdEMRlKXt-vEYMvY\" class=\"link\">
                      <i class=\"material-icons mi-store\">store</i>
                      <span>
                      Catálogo
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                                <a href=\"/adminsparkload/index.php/sell/catalog/products?_token=zTb6UsDmVz";
        // line 597
        echo "UI_0f9w2kxHdlBgmTOdEMRlKXt-vEYMvY\" class=\"link\"> Produtos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                                <a href=\"/adminsparkload/index.php/sell/catalog/categories?_token=zTb6UsDmVzUI_0f9w2kxHdlBgmTOdEMRlKXt-vEYMvY\" class=\"link\"> Categorias
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                                <a href=\"/adminsparkload/index.php/sell/catalog/monitoring/?_token=zTb6UsDmVzUI_0f9w2kxHdlBgmTOdEMRlKXt-vEYMvY\" class=\"link\"> Monitorização
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                                <a href=\"http://192.168.1.64:86/adminsparkload/index.php?controller=AdminAttributesGroups&amp;token=493fb3d74489e165c35982aca68947c5\" class=\"link\"> Atributos e Características
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"16\" id";
        // line 628
        echo "=\"subtab-AdminParentManufacturers\">
                                <a href=\"/adminsparkload/index.php/sell/catalog/brands/?_token=zTb6UsDmVzUI_0f9w2kxHdlBgmTOdEMRlKXt-vEYMvY\" class=\"link\"> Marcas e Fornecedores
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                                <a href=\"/adminsparkload/index.php/sell/attachments/?_token=zTb6UsDmVzUI_0f9w2kxHdlBgmTOdEMRlKXt-vEYMvY\" class=\"link\"> Ficheiros
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                                <a href=\"http://192.168.1.64:86/adminsparkload/index.php?controller=AdminCartRules&amp;token=e92312975d6e60642684e4b879596ea1\" class=\"link\"> Descontos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                                <a href=\"/adminsparkload/index.php/sell/stocks/?_token=zTb6UsDmVzUI_0f9w2kxHdlBgmTOdEMRlKXt-vEYMvY\" class=\"link\"> Inventário
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
               ";
        // line 659
        echo "                               
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                    <a href=\"/adminsparkload/index.php/sell/customers/?_token=zTb6UsDmVzUI_0f9w2kxHdlBgmTOdEMRlKXt-vEYMvY\" class=\"link\">
                      <i class=\"material-icons mi-account_circle\">account_circle</i>
                      <span>
                      Clientes
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                                <a href=\"/adminsparkload/index.php/sell/customers/?_token=zTb6UsDmVzUI_0f9w2kxHdlBgmTOdEMRlKXt-vEYMvY\" class=\"link\"> Clientes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                                <a href=\"/adminsparkload/index.php/sell/addresses/?_token=zTb6UsDmVzUI_0f9w2kxHdlBgmTOdEMRlKXt-vEYMvY\" class=\"link\"> Endereços
                                </a>
                              </li>

                                                                     ";
        // line 690
        echo "                                                               </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                    <a href=\"http://192.168.1.64:86/adminsparkload/index.php?controller=AdminCustomerThreads&amp;token=6afcd3fa23b21b7a07a1d7294a7b6552\" class=\"link\">
                      <i class=\"material-icons mi-chat\">chat</i>
                      <span>
                      Apoio ao Cliente
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                                <a href=\"http://192.168.1.64:86/adminsparkload/index.php?controller=AdminCustomerThreads&amp;token=6afcd3fa23b21b7a07a1d7294a7b6552\" class=\"link\"> Apoio ao Cliente
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                                <a href=\"/adminsparkload/index.php/sell/customer-service/order-messag";
        // line 719
        echo "es/?_token=zTb6UsDmVzUI_0f9w2kxHdlBgmTOdEMRlKXt-vEYMvY\" class=\"link\"> Mensagens de Encomendas
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                                <a href=\"http://192.168.1.64:86/adminsparkload/index.php?controller=AdminReturn&amp;token=71cee284c9c49c1d4c73ae4ed6c72973\" class=\"link\"> Mercadorias Devolvidas
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                    <a href=\"/adminsparkload/index.php/modules/metrics/legacy/stats?_token=zTb6UsDmVzUI_0f9w2kxHdlBgmTOdEMRlKXt-vEYMvY\" class=\"link\">
                      <i class=\"material-icons mi-assessment\">assessment</i>
                      <span>
                      Estatísticas
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-32\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" dat";
        // line 751
        echo "a-submenu=\"150\" id=\"subtab-AdminMetricsLegacyStatsController\">
                                <a href=\"/adminsparkload/index.php/modules/metrics/legacy/stats?_token=zTb6UsDmVzUI_0f9w2kxHdlBgmTOdEMRlKXt-vEYMvY\" class=\"link\"> Estatísticas
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"151\" id=\"subtab-AdminMetricsController\">
                                <a href=\"/adminsparkload/index.php/modules/metrics?_token=zTb6UsDmVzUI_0f9w2kxHdlBgmTOdEMRlKXt-vEYMvY\" class=\"link\"> PrestaShop Metrics
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"37\" id=\"tab-IMPROVE\">
                <span class=\"title\">Melhorar</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"38\" id=\"subtab-AdminParentModulesSf\">
                    <a href=\"/adminsparkload/index.php/modules/mbo/modules/catalog/?_token=zTb6UsDmVzUI_0f9w2kxHdlBgmTOdEMRlKXt-vEYMvY\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Módulos
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
              ";
        // line 788
        echo "                                              </i>
                                            </a>
                                              <ul id=\"collapse-38\" class=\"submenu panel-collapse\">
                                                                                                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"135\" id=\"subtab-AdminPsMboModuleParent\">
                                <a href=\"/adminsparkload/index.php/modules/mbo/modules/catalog/?_token=zTb6UsDmVzUI_0f9w2kxHdlBgmTOdEMRlKXt-vEYMvY\" class=\"link\"> Marketplace
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"39\" id=\"subtab-AdminModulesSf\">
                                <a href=\"/adminsparkload/index.php/improve/modules/manage?_token=zTb6UsDmVzUI_0f9w2kxHdlBgmTOdEMRlKXt-vEYMvY\" class=\"link\"> Gestor de módulos
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"43\" id=\"subtab-AdminParentThemes\">
                    <a href=\"/adminsparkload/index.php/improve/design/themes/?_token=zTb6UsDmVzUI_0f9w2kxHdlBgmTOdEMRlKXt-vEYMvY\" class=\"link\">
                      <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
         ";
        // line 816
        echo "             <span>
                      Design
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"153\" id=\"subtab-AdminThemesParent\">
                                <a href=\"/adminsparkload/index.php/improve/design/themes/?_token=zTb6UsDmVzUI_0f9w2kxHdlBgmTOdEMRlKXt-vEYMvY\" class=\"link\"> Tema Gráfico e Logótipo
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"139\" id=\"subtab-AdminPsMboTheme\">
                                <a href=\"/adminsparkload/index.php/modules/mbo/themes/catalog/?_token=zTb6UsDmVzUI_0f9w2kxHdlBgmTOdEMRlKXt-vEYMvY\" class=\"link\"> Themes Catalog
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"45\" id=\"subtab-AdminParentMailTheme\">
                                <a href=\"/adminsparkload/index.php/improve/design/mail_theme/?_token=zTb6UsDmVzUI_0f9w2kxHdlBgmTOdEMRlKXt-vEYMvY\" class=\"link\"> Template de e-mail
                          ";
        // line 845
        echo "      </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"47\" id=\"subtab-AdminCmsContent\">
                                <a href=\"/adminsparkload/index.php/improve/design/cms-pages/?_token=zTb6UsDmVzUI_0f9w2kxHdlBgmTOdEMRlKXt-vEYMvY\" class=\"link\"> Páginas
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"48\" id=\"subtab-AdminModulesPositions\">
                                <a href=\"/adminsparkload/index.php/improve/design/modules/positions/?_token=zTb6UsDmVzUI_0f9w2kxHdlBgmTOdEMRlKXt-vEYMvY\" class=\"link\"> Posições
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"49\" id=\"subtab-AdminImages\">
                                <a href=\"http://192.168.1.64:86/adminsparkload/index.php?controller=AdminImages&amp;token=cffdce9d9c55bbd20ca0047186c7fc2c\" class=\"link\"> Definições de Imagem
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"118\" id=\"subtab-AdminLinkWidget\">
                                <a href=\"/adminsparkload/index.php/modules/l";
        // line 876
        echo "ink-widget/list?_token=zTb6UsDmVzUI_0f9w2kxHdlBgmTOdEMRlKXt-vEYMvY\" class=\"link\"> Lista de ligações
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"50\" id=\"subtab-AdminParentShipping\">
                    <a href=\"http://192.168.1.64:86/adminsparkload/index.php?controller=AdminCarriers&amp;token=7af403e520c675da0e1d518a9a46b8f9\" class=\"link\">
                      <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                      <span>
                      Envio
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-50\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"51\" id=\"subtab-AdminCarriers\">
                                <a href=\"http://192.168.1.64:86/adminsparkload/index.php?controller=AdminCarriers&amp;token=7af403e520c675da0e1d518a9a46b8f9\" class=\"link\"> Transportadoras
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li c";
        // line 908
        echo "lass=\"link-leveltwo\" data-submenu=\"52\" id=\"subtab-AdminShipping\">
                                <a href=\"/adminsparkload/index.php/improve/shipping/preferences/?_token=zTb6UsDmVzUI_0f9w2kxHdlBgmTOdEMRlKXt-vEYMvY\" class=\"link\"> Preferências
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"53\" id=\"subtab-AdminParentPayment\">
                    <a href=\"/adminsparkload/index.php/improve/payment/payment_methods?_token=zTb6UsDmVzUI_0f9w2kxHdlBgmTOdEMRlKXt-vEYMvY\" class=\"link\">
                      <i class=\"material-icons mi-payment\">payment</i>
                      <span>
                      Pagamento
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-53\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"54\" id=\"subtab-AdminPayment\">
                                <a href=\"/adminsparkload/index.php/improve/payment/payment_methods?_token=zTb6UsDmVzUI_0f9w2kxHdlBgmTOdEMRlKXt-vEYMvY\" class=\"link\"> Métodos de Pagamento
                                </a>
                              </li>

                                                                                  
      ";
        // line 939
        echo "                        
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"55\" id=\"subtab-AdminPaymentPreferences\">
                                <a href=\"/adminsparkload/index.php/improve/payment/preferences?_token=zTb6UsDmVzUI_0f9w2kxHdlBgmTOdEMRlKXt-vEYMvY\" class=\"link\"> Preferências
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"56\" id=\"subtab-AdminInternational\">
                    <a href=\"/adminsparkload/index.php/improve/international/localization/?_token=zTb6UsDmVzUI_0f9w2kxHdlBgmTOdEMRlKXt-vEYMvY\" class=\"link\">
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
                                <a href=\"/adminsparkload/index.php/improve/international/localization/?_token=zTb6UsDmVzUI_0f9w2kxHdlBgmTOdEMRlKXt-vEYMvY\" class=\"link\"> Localização
                 ";
        // line 968
        echo "               </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"62\" id=\"subtab-AdminParentCountries\">
                                <a href=\"/adminsparkload/index.php/improve/international/zones/?_token=zTb6UsDmVzUI_0f9w2kxHdlBgmTOdEMRlKXt-vEYMvY\" class=\"link\"> Localizações
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"66\" id=\"subtab-AdminParentTaxes\">
                                <a href=\"/adminsparkload/index.php/improve/international/taxes/?_token=zTb6UsDmVzUI_0f9w2kxHdlBgmTOdEMRlKXt-vEYMvY\" class=\"link\"> IVA
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"69\" id=\"subtab-AdminTranslations\">
                                <a href=\"/adminsparkload/index.php/improve/international/translations/settings?_token=zTb6UsDmVzUI_0f9w2kxHdlBgmTOdEMRlKXt-vEYMvY\" class=\"link\"> Traduções
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"144\" id";
        // line 1001
        echo "=\"subtab-Marketing\">
                    <a href=\"http://192.168.1.64:86/adminsparkload/index.php?controller=AdminPsxMktgWithGoogleModule&amp;token=727bc83b834646d211a0e1e45101ecb6\" class=\"link\">
                      <i class=\"material-icons mi-campaign\">campaign</i>
                      <span>
                      Marketing
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-144\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"145\" id=\"subtab-AdminPsxMktgWithGoogleModule\">
                                <a href=\"http://192.168.1.64:86/adminsparkload/index.php?controller=AdminPsxMktgWithGoogleModule&amp;token=727bc83b834646d211a0e1e45101ecb6\" class=\"link\"> Google
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"147\" id=\"subtab-AdminPsfacebookModule\">
                                <a href=\"http://192.168.1.64:86/adminsparkload/index.php?controller=AdminPsfacebookModule&amp;token=62978b39bd234094d4472d409dc21b63\" class=\"link\"> Facebook &amp; Instagram
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                  ";
        // line 1030
        echo "            
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"70\" id=\"tab-CONFIGURE\">
                <span class=\"title\">Configurar</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"133\" id=\"subtab-AdminPsEditionBasicSettingsController\">
                    <a href=\"/adminsparkload/index.php/modules/pseditionbasic/settings?_token=zTb6UsDmVzUI_0f9w2kxHdlBgmTOdEMRlKXt-vEYMvY\" class=\"link\">
                      <i class=\"material-icons mi-settings\">settings</i>
                      <span>
                      Settings
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"71\" id=\"subtab-ShopParameters\">
                    <a href=\"/adminsparkload/index.php/configure/shop/preferences/preferences?_token=zTb6UsDmVzUI_0f9w2kxHdlBgmTOdEMRlKXt-vEYMvY\" class=\"link\">
                      <i class=\"material-icons mi-settings\">settings</i>
                      <span>
                      Parâmetros da Loja
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
         ";
        // line 1068
        echo "                                   </a>
                                              <ul id=\"collapse-71\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"72\" id=\"subtab-AdminParentPreferences\">
                                <a href=\"/adminsparkload/index.php/configure/shop/preferences/preferences?_token=zTb6UsDmVzUI_0f9w2kxHdlBgmTOdEMRlKXt-vEYMvY\" class=\"link\"> Geral
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"75\" id=\"subtab-AdminParentOrderPreferences\">
                                <a href=\"/adminsparkload/index.php/configure/shop/order-preferences/?_token=zTb6UsDmVzUI_0f9w2kxHdlBgmTOdEMRlKXt-vEYMvY\" class=\"link\"> Definições da Encomenda
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"78\" id=\"subtab-AdminPPreferences\">
                                <a href=\"/adminsparkload/index.php/configure/shop/product-preferences/?_token=zTb6UsDmVzUI_0f9w2kxHdlBgmTOdEMRlKXt-vEYMvY\" class=\"link\"> Produtos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"79\" id=\"subtab-Adm";
        // line 1097
        echo "inParentCustomerPreferences\">
                                <a href=\"/adminsparkload/index.php/configure/shop/customer-preferences/?_token=zTb6UsDmVzUI_0f9w2kxHdlBgmTOdEMRlKXt-vEYMvY\" class=\"link\"> Definições do cliente
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"83\" id=\"subtab-AdminParentStores\">
                                <a href=\"/adminsparkload/index.php/configure/shop/contacts/?_token=zTb6UsDmVzUI_0f9w2kxHdlBgmTOdEMRlKXt-vEYMvY\" class=\"link\"> Contacto
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"86\" id=\"subtab-AdminParentMeta\">
                                <a href=\"/adminsparkload/index.php/configure/shop/seo-urls/?_token=zTb6UsDmVzUI_0f9w2kxHdlBgmTOdEMRlKXt-vEYMvY\" class=\"link\"> Tráfego e SEO
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"89\" id=\"subtab-AdminParentSearchConf\">
                                <a href=\"http://192.168.1.64:86/adminsparkload/index.php?controller=AdminSearchConf&amp;token=7e19c6c52c856965c4c9de17ddd936e5\" class=\"link\"> Pesquisar
                                </a>
                              </li>

                                                                              </ul>
                              ";
        // line 1127
        echo "          </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"92\" id=\"subtab-AdminAdvancedParameters\">
                    <a href=\"/adminsparkload/index.php/configure/advanced/system-information/?_token=zTb6UsDmVzUI_0f9w2kxHdlBgmTOdEMRlKXt-vEYMvY\" class=\"link\">
                      <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                      <span>
                      Parâmetros Avançados
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-92\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"93\" id=\"subtab-AdminInformation\">
                                <a href=\"/adminsparkload/index.php/configure/advanced/system-information/?_token=zTb6UsDmVzUI_0f9w2kxHdlBgmTOdEMRlKXt-vEYMvY\" class=\"link\"> Informação
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"94\" id=\"subtab-AdminPerformance\">
                                <a href=\"/adminsparkload/index.php/configure/advanced/performance/?_token=zTb6UsDmVzUI_0f9w2kxHdlBgmTOdEMRlKXt-vEYMvY\" class=\"link\"> Desempenho
          ";
        // line 1156
        echo "                      </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"95\" id=\"subtab-AdminAdminPreferences\">
                                <a href=\"/adminsparkload/index.php/configure/advanced/administration/?_token=zTb6UsDmVzUI_0f9w2kxHdlBgmTOdEMRlKXt-vEYMvY\" class=\"link\"> Administração
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"96\" id=\"subtab-AdminEmails\">
                                <a href=\"/adminsparkload/index.php/configure/advanced/emails/?_token=zTb6UsDmVzUI_0f9w2kxHdlBgmTOdEMRlKXt-vEYMvY\" class=\"link\"> E-mail
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"97\" id=\"subtab-AdminImport\">
                                <a href=\"/adminsparkload/index.php/configure/advanced/import/?_token=zTb6UsDmVzUI_0f9w2kxHdlBgmTOdEMRlKXt-vEYMvY\" class=\"link\"> Importar
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"98\" id=\"subtab-AdminParentEmployees\">
                                <a href=\"/adminsparkload/index.php/configure/ad";
        // line 1187
        echo "vanced/employees/?_token=zTb6UsDmVzUI_0f9w2kxHdlBgmTOdEMRlKXt-vEYMvY\" class=\"link\"> Empregados
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"102\" id=\"subtab-AdminParentRequestSql\">
                                <a href=\"/adminsparkload/index.php/configure/advanced/sql-requests/?_token=zTb6UsDmVzUI_0f9w2kxHdlBgmTOdEMRlKXt-vEYMvY\" class=\"link\"> Base de dados
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"105\" id=\"subtab-AdminLogs\">
                                <a href=\"/adminsparkload/index.php/configure/advanced/logs/?_token=zTb6UsDmVzUI_0f9w2kxHdlBgmTOdEMRlKXt-vEYMvY\" class=\"link\"> Registos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"106\" id=\"subtab-AdminWebservice\">
                                <a href=\"/adminsparkload/index.php/configure/advanced/webservice-keys/?_token=zTb6UsDmVzUI_0f9w2kxHdlBgmTOdEMRlKXt-vEYMvY\" class=\"link\"> Webservice
                                </a>
                              </li>

                                                                                                                                                                                                                                                    
";
        // line 1216
        echo "                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"110\" id=\"subtab-AdminFeatureFlag\">
                                <a href=\"/adminsparkload/index.php/configure/advanced/feature-flags/?_token=zTb6UsDmVzUI_0f9w2kxHdlBgmTOdEMRlKXt-vEYMvY\" class=\"link\"> Características novas e experimentais
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"111\" id=\"subtab-AdminParentSecurity\">
                                <a href=\"/adminsparkload/index.php/configure/advanced/security/?_token=zTb6UsDmVzUI_0f9w2kxHdlBgmTOdEMRlKXt-vEYMvY\" class=\"link\"> Segurança
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"149\" id=\"subtab-AdminKlaviyoPsConfig\">
                    <a href=\"http://192.168.1.64:86/adminsparkload/index.php?controller=AdminKlaviyoPsConfig&amp;token=388274205eefdc4916e1f72ad65361b9\" class=\"link\">
                      <i class=\"material-icons mi-trending_up\">trending_up</i>
                      <span>
                      Klaviyo
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            ";
        // line 1246
        echo "</a>
                                        </li>
                              
          
                  </ul>
  </div>
  
</nav>


<div class=\"header-toolbar d-print-none\">
    
  <div class=\"container-fluid\">

    
      <nav aria-label=\"Breadcrumb\">
        <ol class=\"breadcrumb\">
          
                      <li class=\"breadcrumb-item active\">
              <a href=\"/adminsparkload/index.php/modules/pseditionbasic/homepage?_token=zTb6UsDmVzUI_0f9w2kxHdlBgmTOdEMRlKXt-vEYMvY\" aria-current=\"page\">Welcome</a>
            </li>
                  </ol>
      </nav>
    

    <div class=\"title-row\">
      
          <h1 class=\"title\">
            Home          </h1>
      

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
            
                        
            
                              <a class=\"btn btn-outline-secondary btn-help btn-sidebar\" href=\"#\"
                   title=\"Ajuda\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
                   data-url=\"https://help.prestashop-project.org/pt/doc/HOME?version=8.1.1&amp;country=pt\"
                   id=\"product_form_open_help\"
                >
                  Ajuda
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
        
        
                              <a class=\"btn btn-floating-item btn-help btn-sidebar\" href=\"#\"
               title=\"Ajuda\"
               data-toggle=\"sidebar\"
               data-target=\"#right-sidebar\"
               data-url=\"https://help.prestashop-project.org/pt/doc/HOME?version=8.1.1&amp;country=pt\"
            >
              Aj";
        // line 1315
        echo "uda
            </a>
                        </div>
    </div>
  </div>
  
</div>

<div id=\"main-div\">
          
      <div class=\"content-div  \">

        

                                                        
        <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>
<div id=\"content-message-box\"></div>


  ";
        // line 1334
        $this->displayBlock('content_header', $context, $blocks);
        $this->displayBlock('content', $context, $blocks);
        $this->displayBlock('content_footer', $context, $blocks);
        $this->displayBlock('sidebar_right', $context, $blocks);
        echo "

        

      </div>
    </div>

  <div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>Oh, não!</h1>
  <p class=\"mt-3\">
    A versão móvel desta página ainda não está disponível.
  </p>
  <p class=\"mt-2\">
    Utilize um computador para obter acesso a esta página, até ser adaptada para um telemóvel.
  </p>
  <p class=\"mt-2\">
    Obrigado.
  </p>
  <a href=\"/adminsparkload/index.php/modules/pseditionbasic/homepage?_token=zTb6UsDmVzUI_0f9w2kxHdlBgmTOdEMRlKXt-vEYMvY\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons rtl-flip\">arrow_back</i>
    Voltar
  </a>
</div>
  <div class=\"mobile-layer\"></div>

      <div id=\"footer\" class=\"bootstrap\">
    <div id=\"module-modal-addons-connect\" class=\"modal  modal-vcenter fade\" role=\"dialog\" tabindex=\"-1\" aria-labelledby=\"module-modal-title\" aria-hidden=\"true\">
  <div class=\"modal-dialog\">
    <!-- Modal content-->
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h4 class=\"modal-title module-modal-title\">Ligar com o Addons Marketplace</h4>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
      </div>
      <div class=\"modal-body\">
                  <div class=\"row\">
              <div class=\"col-md-12\">
                  <p>
                      Ligue a sua loja à sua conta Addons para receber automaticamente actualizações importantes para os módulos que adquiriu. Ainda não tem uma conta?
                      <a href=\"https://authv2.prestashop.com/register?_ga=2.183749797.2029715227.1645605306-2047387021.1643627469&amp;_gac=1.81371877.1644238612.CjwKCAiAo4OQBhBBEiwA5KWu_5UzrywbBPo4PKIYESy7K-noavdo7Z4riOZMJEoM9mE1IE3gks0thxoCZOwQAvD_BwE\" target=\"_blank\">Inscreva-se agora</a>
                  </p>
                  <p>
                      Se criou a sua conta utilizando o Google, por favor siga o procedimento de esquecimento de palavra-passe do Addons Marketplace para criar a sua palavra-passe : 
                      <a href=\"https:";
        // line 1377
        echo "//authv2.prestashop.com/password/request \" target=\"_blank\">Redefinir a sua palavra-passe</a>
                  </p>
                  <form id=\"addons-connect-form\"
                        action=\"/adminsparkload/index.php/modules/mbo/addons/login?_token=zTb6UsDmVzUI_0f9w2kxHdlBgmTOdEMRlKXt-vEYMvY\"
                        method=\"POST\"
                        data-error-message=\"An error occurred while processing your request.\"
                  >
                  <div class=\"form-group\">
                    <label for=\"module-addons-connect-email\">Endereço de email</label>
                    <input name=\"username_addons\" type=\"email\" class=\"form-control\" id=\"module-addons-connect-email\" placeholder=\"Email\">
                  </div>
                  <div class=\"form-group\">
                    <label for=\"module-addons-connect-password\">Palavra-passe</label>
                    <input name=\"password_addons\" type=\"password\" class=\"form-control\" id=\"module-addons-connect-password\" placeholder=\"Password\">
                  </div>
                  <div class=\"md-checkbox md-checkbox-inline\">
                    <label>
                      <input type=\"checkbox\" name=\"addons_remember_me\">
                      <i class=\"md-checkbox-control\"></i>
                        Lembrar-me
                    </label>
                  </div>
                  <div class=\"text-center\">
                      <button type=\"submit\" class=\"btn btn-primary\">Continuar!</button>
                    <div id=\"addons_login_btn\" class=\"spinner\" style=\"display:none;\"></div>
                  </div>
                </form>
                <p class=\"text-center py-3\">
                    <a href=\"https://authv2.prestashop.com/password/request \" target=\"_blank\">Esqueceu-se da sua palavra-passe?</a>
                </p>
              </div>
          </div>
              </div>
    </div>
  </div>
</div>
<div id=\"module-modal-addons-logout\" class=\"modal  modal-vcenter fade\" role=\"dialog\">
";
        // line 1414
        echo "  <div class=\"modal-dialog\">
    <!-- Modal content-->
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h4 class=\"modal-title module-modal-title\">Confirmar encerramento de sessão</h4>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
      </div>
      <div class=\"modal-body\">
          <div class=\"row\">
              <div class=\"col-md-12\">
                  <p>
                    Está prestes a encerrar sessão na sua conta Addons. Pode perder atualizações importantes de Addons que comprou.
                  </p>
              </div>
          </div>
      </div>
      <div class=\"modal-footer\">
          <input type=\"button\" class=\"btn btn-default uppercase\" data-dismiss=\"modal\" value=\"Cancelar\">
          <a class=\"btn btn-primary uppercase\" href=\"/adminsparkload/index.php/modules/mbo/addons/logout?_token=zTb6UsDmVzUI_0f9w2kxHdlBgmTOdEMRlKXt-vEYMvY\" id=\"module-modal-addons-logout-ack\">Sim, encerrar sessão</a>
      </div>

        </div>
    </div>
</div>

</div>
  

      <div class=\"bootstrap\">
      
    </div>
  
";
        // line 1446
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>";
        echo "
</html>";
    }

    // line 116
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_extra_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 1334
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

    // line 1446
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
        return "__string_template__11c725767dd9971e56760bc348a41b04";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1625 => 1446,  1604 => 1334,  1593 => 116,  1584 => 1446,  1550 => 1414,  1511 => 1377,  1462 => 1334,  1441 => 1315,  1370 => 1246,  1338 => 1216,  1307 => 1187,  1274 => 1156,  1243 => 1127,  1211 => 1097,  1180 => 1068,  1140 => 1030,  1109 => 1001,  1074 => 968,  1043 => 939,  1010 => 908,  976 => 876,  943 => 845,  912 => 816,  882 => 788,  843 => 751,  809 => 719,  778 => 690,  745 => 659,  712 => 628,  679 => 597,  645 => 565,  613 => 535,  575 => 499,  530 => 456,  504 => 432,  456 => 386,  408 => 340,  357 => 291,  311 => 247,  269 => 207,  253 => 193,  211 => 153,  169 => 116,  143 => 92,  119 => 70,  90 => 43,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__11c725767dd9971e56760bc348a41b04", "");
    }
}
