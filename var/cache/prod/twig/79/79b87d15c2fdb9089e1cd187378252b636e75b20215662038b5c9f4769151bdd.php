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

/* @PrestaShop/Admin/Configure/AdvancedParameters/RequestSql/Blocks/form.html.twig */
class __TwigTemplate_b58136c28549700986fdb0c7cf2eebf368a51de44d7dfdf771605d60ab13c552 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'sql_request_form' => [$this, 'block_sql_request_form'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 25
        echo "
";
        // line 26
        $context["ps"] = $this->loadTemplate("@PrestaShop/Admin/macros.html.twig", "@PrestaShop/Admin/Configure/AdvancedParameters/RequestSql/Blocks/form.html.twig", 26);
        // line 27
        echo "
";
        // line 29
        echo "
";
        // line 30
        $this->displayBlock('sql_request_form', $context, $blocks);
    }

    public function block_sql_request_form($context, array $blocks = [])
    {
        // line 31
        echo "  ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["requestSqlForm"] ?? null), 'form_start');
        echo "
    <div class=\"card\">
      <h3 class=\"card-header\">
        ";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("SQL query", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "
      </h3>
      <div class=\"card-block row\">
        <div class=\"card-text\">
          ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["requestSqlForm"] ?? null), 'errors');
        echo "

          <div class=\"form-group row\">
            <label for=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["requestSqlForm"] ?? null), "name", []), "vars", []), "id", []), "html", null, true);
        echo "\" class=\"form-control-label\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("SQL query name", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "</label>

            <div class=\"col-sm\">
              ";
        // line 44
        echo $context["ps"]->getform_widget_with_error($this->getAttribute(($context["requestSqlForm"] ?? null), "name", []));
        echo "
            </div>
          </div>

          <div class=\"form-group row\">
            <label for=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["requestSqlForm"] ?? null), "sql", []), "vars", []), "id", []), "html", null, true);
        echo "\" class=\"form-control-label\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("SQL query", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "</label>

            <div class=\"col-sm\">
              ";
        // line 52
        echo $context["ps"]->getform_widget_with_error($this->getAttribute(($context["requestSqlForm"] ?? null), "sql", []), ["attr" => ["rows" => 10]]);
        echo "
            </div>
          </div>
        </div>

        ";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["requestSqlForm"] ?? null), 'rest');
        echo "
      </div>
      <div class=\"card-footer\">
        <a href=\"";
        // line 60
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_sql_requests_index");
        echo "\" class=\"btn btn-outline-secondary\">
          ";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Cancel", [], "Admin.Actions"), "html", null, true);
        echo "
        </a>
        <button class=\"btn btn-primary float-right\">
          ";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save", [], "Admin.Actions"), "html", null, true);
        echo "
        </button>
      </div>
    </div>
  ";
        // line 68
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["requestSqlForm"] ?? null), 'form_end');
        echo "
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Configure/AdvancedParameters/RequestSql/Blocks/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 68,  116 => 64,  110 => 61,  106 => 60,  100 => 57,  92 => 52,  84 => 49,  76 => 44,  68 => 41,  62 => 38,  55 => 34,  48 => 31,  42 => 30,  39 => 29,  36 => 27,  34 => 26,  31 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Configure/AdvancedParameters/RequestSql/Blocks/form.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Configure/AdvancedParameters/RequestSql/Blocks/form.html.twig");
    }
}
