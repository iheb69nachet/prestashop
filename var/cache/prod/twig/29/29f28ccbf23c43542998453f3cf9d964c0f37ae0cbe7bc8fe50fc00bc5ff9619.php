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

/* @PrestaShop/Admin/Module/tab-modules-list.html.twig */
class __TwigTemplate_42d98536174ecda858ac7df4de48db86e8891394f68075df05193a1b9fb4f472 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 25
        $context["modulesListShouldBeDisplayed"] = ((isset($context["modulesList"]) || array_key_exists("modulesList", $context)) &&  !twig_test_empty(($context["modulesList"] ?? null)));
        // line 26
        if ((($context["modulesListShouldBeDisplayed"] ?? null) == true)) {
            // line 27
            echo "  <div class=\"row row-margin-bottom\">
  <div class=\"col-lg-12\">
    <ul class=\"nav nav-pills\">
      ";
            // line 30
            if ((twig_length_filter($this->env, $this->getAttribute(($context["modulesList"] ?? null), "notInstalled", [])) > 0)) {
                // line 31
                echo "      <li class=\"active\">
        <a href=\"#tab_modules_list_not_installed\" data-toggle=\"tab\">
          ";
                // line 33
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Not Installed", []), "html", null, true);
                echo "
        </a>
      </li>
      ";
            }
            // line 37
            echo "
      ";
            // line 38
            if ((twig_length_filter($this->env, $this->getAttribute(($context["modulesList"] ?? null), "installed", [])) > 0)) {
                // line 39
                echo "        <li ";
                if ((twig_length_filter($this->env, $this->getAttribute(($context["modulesList"] ?? null), "notInstalled", [])) == 0)) {
                    echo "class=\"active\"";
                }
                echo ">
        <a href=\"#tab_modules_list_installed\" data-toggle=\"tab\">
          ";
                // line 41
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Installed", []), "html", null, true);
                echo "
        </a>
        </li>
      ";
            }
            // line 45
            echo "    </ul>
  </div>
</div>
<div id=\"modules_list_container_content\" class=\"tab-content modal-content-overflow\">
  ";
            // line 49
            if (($this->getAttribute(($context["modulesList"] ?? null), "notInstalled", [], "any", true, true) &&  !twig_test_empty($this->getAttribute(($context["modulesList"] ?? null), "notInstalled", [])))) {
                // line 50
                echo "  <div class=\"tab-pane active\" id=\"tab_modules_list_not_installed\">
    <table id=\"tab_modules_list_not_installed\" class=\"table\">
      ";
                // line 52
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["modulesList"] ?? null), "notInstalled", []));
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                    // line 53
                    echo "        ";
                    echo twig_include($this->env, $context, "@PrestaShop/Admin/Module/Includes/tab-module-line.html.twig", ["module" => $context["module"]]);
                    echo "
      ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 55
                echo "    </table>
  </div>
  ";
            }
            // line 58
            echo "  ";
            if ((twig_length_filter($this->env, $this->getAttribute(($context["modulesList"] ?? null), "installed", [])) > 0)) {
                // line 59
                echo "  <div class=\"tab-pane ";
                if ((twig_length_filter($this->env, $this->getAttribute(($context["modulesList"] ?? null), "notInstalled", [])) == 0)) {
                    echo "active";
                }
                echo "\" id=\"tab_modules_list_installed\">
    <table id=\"tab_modules_list_installed\" class=\"table\">
      ";
                // line 61
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["modulesList"] ?? null), "installed", []));
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                    // line 62
                    echo "        ";
                    echo twig_include($this->env, $context, "@PrestaShop/Admin/Module/Includes/tab-module-line.html.twig", ["module" => $context["module"]]);
                    echo "
      ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 64
                echo "    </table>
  </div>
  ";
            }
            // line 67
            echo "</div>
";
        }
        // line 69
        echo "<div class=\"alert alert-addons row-margin-top\" role=\"alert\">
  <p class=\"alert-text\">
    <a href=\"https://addons.prestashop.com/?utm_source=back-office&amp;utm_medium=dispatch&amp;utm_campaign=back-office-";
        // line 71
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", []), "locale", []), "html", null, true);
        echo "&amp;utm_content=download";
        if ((isset($context["adminListFromSource"]) || array_key_exists("adminListFromSource", $context))) {
            echo "&amp;utm_term=";
            echo twig_escape_filter($this->env, ($context["adminListFromSource"] ?? null), "html", null, true);
        }
        echo "\" onclick=\"return !window.open(this.href);\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("More modules on addons.prestashop.com", []), "html", null, true);
        echo "</a>
  </p>
</div>

";
        // line 75
        if ((($context["modulesListShouldBeDisplayed"] ?? null) == true)) {
            // line 76
            echo "  <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/new-theme/public/module_card.bundle.js"), "html", null, true);
            echo "\"></script>
";
        }
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Module/tab-modules-list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 76,  195 => 75,  181 => 71,  177 => 69,  173 => 67,  168 => 64,  151 => 62,  134 => 61,  126 => 59,  123 => 58,  118 => 55,  101 => 53,  84 => 52,  80 => 50,  78 => 49,  72 => 45,  65 => 41,  57 => 39,  55 => 38,  52 => 37,  45 => 33,  41 => 31,  39 => 30,  34 => 27,  32 => 26,  30 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Module/tab-modules-list.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Module/tab-modules-list.html.twig");
    }
}
