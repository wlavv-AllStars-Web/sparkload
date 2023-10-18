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

/* @Modules/ps_mbo/views/templates/hook/twig/module_manager_additional_description.html.twig */
class __TwigTemplate_fd7000550c0e8ecdf0a385e15331cda8 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/ps_mbo/views/templates/hook/twig/module_manager_additional_description.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/ps_mbo/views/templates/hook/twig/module_manager_additional_description.html.twig"));

        // line 19
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 19, $this->source); })()), "attributes", [], "any", false, false, false, 19), "id", [], "any", false, false, false, 19) != "0")) {
            // line 20
            echo "  <span class=\"mbo-module-read-more-grid\">
          <a class=\"mbo-module-read-more-list-btn url\"
             id=\"see-more-";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 22, $this->source); })()), "attributes", [], "any", false, false, false, 22), "name", [], "any", false, false, false, 22), "html", null, true);
            echo "\"
             href=\"javascript:void(0)\"
          >";
            // line 24
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Read More", [], "Modules.Mbo.Modulescatalog"), "html", null, true);
            echo "</a>
  </span>
  <script type=\"application/javascript\">
    \$('a#see-more-";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 27, $this->source); })()), "attributes", [], "any", false, false, false, 27), "name", [], "any", false, false, false, 27), "html", null, true);
            echo "').on('click', function (event) {
      \$.get('";
            // line 28
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_mbo_module_see_more", ["moduleId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 28, $this->source); })()), "attributes", [], "any", false, false, false, 28), "id", [], "any", false, false, false, 28)]), "html", null, true);
            echo "', (data) => {
        \$(\"#module-read-more\").html(data);
      }).then(() => {
        if (!window.renderModal && window.mboCdc) {
          window.renderModal = window.mboCdc.renderModal;
        }
        if (window.renderModal && window.shopContext) {
          window.renderModal(window.shopContext, null, ";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 35, $this->source); })()), "attributes", [], "any", false, false, false, 35), "id", [], "any", false, false, false, 35), "html", null, true);
            echo ")
        }
      });
    })
  </script>
  <span id=\"module-read-more\"></span>
";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@Modules/ps_mbo/views/templates/hook/twig/module_manager_additional_description.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 35,  64 => 28,  60 => 27,  54 => 24,  49 => 22,  45 => 20,  43 => 19,);
    }

    public function getSourceContext()
    {
        return new Source("{#**
 * Copyright since 2007 PrestaShop SA and Contributors
 * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License version 3.0
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/AFL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * @author    PrestaShop SA and Contributors <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License version 3.0
 *#}
{% if module.attributes.id != \"0\" %}
  <span class=\"mbo-module-read-more-grid\">
          <a class=\"mbo-module-read-more-list-btn url\"
             id=\"see-more-{{ module.attributes.name }}\"
             href=\"javascript:void(0)\"
          >{{ 'Read More'|trans({}, 'Modules.Mbo.Modulescatalog') }}</a>
  </span>
  <script type=\"application/javascript\">
    \$('a#see-more-{{ module.attributes.name }}').on('click', function (event) {
      \$.get('{{ path('admin_mbo_module_see_more', {\"moduleId\": module.attributes.id }) }}', (data) => {
        \$(\"#module-read-more\").html(data);
      }).then(() => {
        if (!window.renderModal && window.mboCdc) {
          window.renderModal = window.mboCdc.renderModal;
        }
        if (window.renderModal && window.shopContext) {
          window.renderModal(window.shopContext, null, {{ module.attributes.id }})
        }
      });
    })
  </script>
  <span id=\"module-read-more\"></span>
{% endif %}
", "@Modules/ps_mbo/views/templates/hook/twig/module_manager_additional_description.html.twig", "/opt/lampp/htdocs/sparkload/modules/ps_mbo/views/templates/hook/twig/module_manager_additional_description.html.twig");
    }
}
