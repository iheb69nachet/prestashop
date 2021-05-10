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

/* @PrestaShop/Admin/Configure/AdvancedParameters/Employee/Blocks/form.html.twig */
class __TwigTemplate_832477deab5d1aeba74a67dfcc7204a2d0b91b1ce44fb572515be6878120b2c8 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'employee_addons_connect' => [$this, 'block_employee_addons_connect'],
            'employee_form' => [$this, 'block_employee_form'],
            'employee_form_rest' => [$this, 'block_employee_form_rest'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 25
        echo "
";
        // line 26
        $context["ps"] = $this->loadTemplate("@PrestaShop/Admin/macros.html.twig", "@PrestaShop/Admin/Configure/AdvancedParameters/Employee/Blocks/form.html.twig", 26);
        // line 28
        echo "
";
        // line 29
        $this->displayBlock('employee_addons_connect', $context, $blocks);
        // line 32
        echo "
";
        // line 33
        $this->displayBlock('employee_form', $context, $blocks);
    }

    // line 29
    public function block_employee_addons_connect($context, array $blocks = [])
    {
        // line 30
        echo "  ";
        $this->loadTemplate("@PrestaShop/Admin/Module/Includes/modal_addons_connect.html.twig", "@PrestaShop/Admin/Configure/AdvancedParameters/Employee/Blocks/form.html.twig", 30)->display(twig_array_merge($context, ["level" => ($context["level"] ?? null), "errorMessage" => ($context["errorMessage"] ?? null)]));
    }

    // line 33
    public function block_employee_form($context, array $blocks = [])
    {
        // line 34
        echo "  ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["employeeForm"] ?? null), 'form_start');
        echo "
  <div class=\"card\">
    <h3 class=\"card-header\">
      ";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Employees", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "
    </h3>
    <div class=\"card-block row\">
      <div class=\"card-text\">
        ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["employeeForm"] ?? null), 'errors');
        echo "

        ";
        // line 43
        echo $context["ps"]->getform_group_row($this->getAttribute(($context["employeeForm"] ?? null), "firstname", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("First name", [], "Admin.Global")]);
        // line 45
        echo "

        ";
        // line 47
        echo $context["ps"]->getform_group_row($this->getAttribute(($context["employeeForm"] ?? null), "lastname", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Last name", [], "Admin.Global")]);
        // line 49
        echo "

        <div class=\"form-group row\">
          <label class=\"form-control-label\"></label>
          <div class=\"col-sm\">
            <a href=\"https://www.prestashop.com/forums/\" target=\"_blank\">
              <img class=\"img-thumbnail clickable-avatar\" src=\"";
        // line 55
        echo twig_escape_filter($this->env, ($context["avatarUrl"] ?? null), "html", null, true);
        echo "\" alt=\"\">
            </a>
          </div>
        </div>

        <div class=\"form-group row\">
          <label class=\"form-control-label\"></label>
          <div class=\"col-sm\">
            <div class=\"alert alert-info\" role=\"alert\">
              <p class=\"alert-text\">
                ";
        // line 65
        echo twig_replace_filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Your avatar in PrestaShop 1.7.x is your profile picture on %url%. To change your avatar, log in to PrestaShop.com with your email %email% and follow the on-screen instructions.", [], "Admin.Advparameters.Help"), ["%url%" => "<a href=\"https://www.prestashop.com/forums/\" class=\"alert-link\" target=\"_blank\">PrestaShop.com</a>", "%email%" => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 68
($context["employeeForm"] ?? null), "email", []), "vars", []), "value", [])]);
        // line 70
        echo "
              </p>
            </div>
          </div>
        </div>

        ";
        // line 76
        echo $context["ps"]->getform_group_row($this->getAttribute(($context["employeeForm"] ?? null), "email", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Email address", [], "Admin.Global")]);
        // line 78
        echo "

        ";
        // line 80
        $context["passwordHelpMessage"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Password should be at least %num% characters long.", ["%num%" => 8], "Admin.Advparameters.Help");
        // line 81
        echo "
        ";
        // line 82
        if (($context["isRestrictedAccess"] ?? null)) {
            // line 83
            echo "            ";
            $context["oldPasswordVars"] = twig_array_merge($this->getAttribute($this->getAttribute($this->getAttribute(($context["employeeForm"] ?? null), "change_password", []), "old_password", []), "vars", []), (((isset($context["old_password"]) || array_key_exists("old_password", $context))) ? (_twig_default_filter(($context["old_password"] ?? null), [])) : ([])));
            // line 84
            echo "            ";
            $context["newPasswordFirstVars"] = twig_array_merge($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["employeeForm"] ?? null), "change_password", []), "new_password", []), "children", []), "first", []), "vars", []), (($this->getAttribute(($context["new_password"] ?? null), "first_options", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["new_password"] ?? null), "first_options", []), [])) : ([])));
            // line 85
            echo "            ";
            $context["newPasswordSecondVars"] = twig_array_merge($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["employeeForm"] ?? null), "change_password", []), "new_password", []), "children", []), "second", []), "vars", []), (($this->getAttribute(($context["new_password"] ?? null), "second_options", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["new_password"] ?? null), "second_options", []), [])) : ([])));
            // line 86
            echo "
            <div class=\"form-group row\">
              <label class=\"form-control-label\">
                ";
            // line 89
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Password", [], "Admin.Global"), "html", null, true);
            echo "
              </label>
              <div class=\"col-sm\">
                ";
            // line 93
            echo "                ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["employeeForm"] ?? null), "change_password", []), "change_password_button", []), 'widget', ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Change password...", [], "messages"), "attr" => ["class" => "btn-outline-secondary js-change-password"]]);
            // line 98
            echo "

                <div class=\"card card-body js-change-password-block d-none\">
                  ";
            // line 102
            echo "                  ";
            echo $context["ps"]->getform_group_row($this->getAttribute($this->getAttribute(($context["employeeForm"] ?? null), "change_password", []), "old_password", []), ($context["oldPasswordVars"] ?? null), ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Current password", [], "messages"), "required" => true]);
            // line 105
            echo "

                  ";
            // line 108
            echo "                  <div class=\"form-group row\">
                      ";
            // line 109
            echo $context["ps"]->getlabel_with_help($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("New password", [], "messages"), ($context["passwordHelpMessage"] ?? null), "", $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["employeeForm"] ?? null), "change_password", []), "new_password", []), "children", []), "first", []), "vars", []), "id", []), true);
            echo "
                    <div class=\"col-sm\">
                      ";
            // line 111
            echo $context["ps"]->getform_widget_with_error($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["employeeForm"] ?? null), "change_password", []), "new_password", []), "children", []), "first", []), $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["employeeForm"] ?? null), "change_password", []), "new_password", []), "children", []), "first", []), "vars", []));
            echo "
                    </div>
                  </div>

                  ";
            // line 116
            echo "                  ";
            // line 117
            echo "                  ";
            echo $context["ps"]->getform_group_row($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["employeeForm"] ?? null), "change_password", []), "new_password", []), "children", []), "second", []), ($context["newPasswordSecondVars"] ?? null), ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Confirm password", [], "messages"), "help" => "", "required" => true]);
            // line 121
            echo "

                  <div class=\"form-group row\">
                    <label class=\"form-control-label\"></label>
                    <div class=\"col-sm\">
                      ";
            // line 126
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["employeeForm"] ?? null), "change_password", []), "generated_password", []), 'widget');
            echo "
                    </div>
                    <div class=\"col-sm\">
                      ";
            // line 129
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["employeeForm"] ?? null), "change_password", []), "generate_password_button", []), 'widget', ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Generate password", [], "messages"), "attr" => ["class" => "btn-outline-secondary"]]);
            // line 134
            echo "
                    </div>
                  </div>

                  ";
            // line 138
            echo $context["ps"]->getform_group_row($this->getAttribute($this->getAttribute(($context["employeeForm"] ?? null), "change_password", []), "cancel_button", []), ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Cancel", [], "Admin.Actions"), "attr" => ["class" => "btn-outline-secondary js-change-password-cancel"]]);
            // line 143
            echo "

                  ";
            // line 146
            echo "                  <div class=\"js-password-strength-feedback d-none\">
                    <span class=\"strength-low\">";
            // line 147
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Invalid", [], "messages"), "html", null, true);
            echo "</span>
                    <span class=\"strength-medium\">";
            // line 148
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Okay", [], "messages"), "html", null, true);
            echo "</span>
                    <span class=\"strength-high\">";
            // line 149
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Good", [], "messages"), "html", null, true);
            echo "</span>
                    <span class=\"strength-extreme\">";
            // line 150
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Fabulous", [], "messages"), "html", null, true);
            echo "</span>
                  </div>
                </div>
              </div>
            </div>
        ";
        } else {
            // line 156
            echo "          ";
            echo $context["ps"]->getform_group_row($this->getAttribute(($context["employeeForm"] ?? null), "password", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Password", [], "Admin.Global"), "help" =>             // line 158
($context["passwordHelpMessage"] ?? null)]);
            // line 159
            echo "
        ";
        }
        // line 161
        echo "
        ";
        // line 162
        if ((($context["isRestrictedAccess"] ?? null) && ($context["showAddonsConnectButton"] ?? null))) {
            // line 163
            echo "          <div class=\"form-group row\">
            <label class=\"form-control-label\">
              PrestaShop Addons
            </label>
            <div class=\"col-sm\">
              ";
            // line 168
            if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["employeeForm"] ?? null), "prestashop_addons", []), "vars", []), "is_addons_connected", [])) {
                // line 169
                echo "                <p>
                  <i class=\"material-icons\">account_circle</i>
                  ";
                // line 171
                echo twig_escape_filter($this->env, twig_replace_filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("You are currently connected as %username%", [], "Admin.Advparameters.Feature"), ["%username%" => $this->getAttribute($this->getAttribute($this->getAttribute(                // line 173
($context["employeeForm"] ?? null), "prestashop_addons", []), "vars", []), "addons_username", [])]), "html", null, true);
                // line 174
                echo "
                </p>
              ";
            }
            // line 177
            echo "
              <div>
                ";
            // line 179
            if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["employeeForm"] ?? null), "prestashop_addons", []), "vars", []), "is_addons_connected", [])) {
                // line 180
                echo "                  ";
                list($context["label"], $context["target"]) =                 [$this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Sign out from PrestaShop Addons", [], "Admin.Advparameters.Feature"), "#module-modal-addons-logout"];
                // line 184
                echo "                ";
            } else {
                // line 185
                echo "                  ";
                list($context["label"], $context["target"]) =                 [$this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Sign in", [], "Admin.Advparameters.Feature"), "#module-modal-addons-connect"];
                // line 189
                echo "                ";
            }
            // line 190
            echo "
                ";
            // line 191
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["employeeForm"] ?? null), "prestashop_addons", []), 'widget', ["attr" => ["class" => "btn-outline-secondary", "data-toggle" => "modal", "data-target" =>             // line 195
($context["target"] ?? null)], "label" =>             // line 197
($context["label"] ?? null)]);
            // line 198
            echo "
              </div>
            </div>
          </div>
        ";
        }
        // line 203
        echo "
        ";
        // line 204
        echo $context["ps"]->getform_group_row($this->getAttribute(($context["employeeForm"] ?? null), "optin", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Subscribe to PrestaShop newsletter", [], "Admin.Advparameters.Feature"), "help" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("PrestaShop can provide you with guidance on a regular basis by sending you tips on how to optimize the management of your store which will help you grow your business. If you do not wish to receive these tips, you can disable this option.", [], "Admin.Advparameters.Help")]);
        // line 207
        echo "

        ";
        // line 209
        echo $context["ps"]->getform_group_row($this->getAttribute(($context["employeeForm"] ?? null), "default_page", []), ["attr" => ["data-minimumResultsForSearch" => "7", "data-toggle" => "select2"]], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Default page", [], "Admin.Advparameters.Feature"), "help" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("This page will be displayed just after login.", [], "Admin.Advparameters.Help")]);
        // line 212
        echo "

        ";
        // line 214
        echo $context["ps"]->getform_group_row($this->getAttribute(($context["employeeForm"] ?? null), "language", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Language", [], "Admin.Global")]);
        // line 216
        echo "

        ";
        // line 218
        if ( !($context["isRestrictedAccess"] ?? null)) {
            // line 219
            echo "          ";
            echo $context["ps"]->getform_group_row($this->getAttribute(($context["employeeForm"] ?? null), "active", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Active", [], "Admin.Global"), "help" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Allow or disallow this employee to log in to the Admin panel.", [], "Admin.Advparameters.Help")]);
            // line 222
            echo "

          ";
            // line 224
            echo $context["ps"]->getform_group_row($this->getAttribute(($context["employeeForm"] ?? null), "profile", []), ["attr" => ["data-admin-profile" =>             // line 226
($context["superAdminProfileId"] ?? null), "data-get-tabs-url" =>             // line 227
($context["getTabsUrl"] ?? null)]], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Permission profile", [], "Admin.Advparameters.Feature")]);
            // line 231
            echo "

          ";
            // line 233
            if ($this->getAttribute(($context["employeeForm"] ?? null), "shop_association", [], "any", true, true)) {
                // line 234
                echo "            ";
                echo $context["ps"]->getform_group_row($this->getAttribute(($context["employeeForm"] ?? null), "shop_association", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Shop association", [], "Admin.Global"), "help" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Select the shops the employee is allowed to access.", [], "Admin.Advparameters.Help")]);
                // line 237
                echo "
          ";
            }
            // line 239
            echo "        ";
        }
        // line 240
        echo "
        ";
        // line 241
        $this->displayBlock('employee_form_rest', $context, $blocks);
        // line 244
        echo "      </div>
    </div>
    <div class=\"card-footer\">
      <a href=\"";
        // line 247
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_employees_index");
        echo "\" class=\"btn btn-outline-secondary\">
        ";
        // line 248
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Cancel", [], "Admin.Actions"), "html", null, true);
        echo "
      </a>
      <button class=\"btn btn-primary float-right\">
        ";
        // line 251
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save", [], "Admin.Actions"), "html", null, true);
        echo "
      </button>
    </div>
  </div>
  ";
        // line 255
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["employeeForm"] ?? null), 'form_end');
        echo "
";
    }

    // line 241
    public function block_employee_form_rest($context, array $blocks = [])
    {
        // line 242
        echo "          ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["employeeForm"] ?? null), 'rest');
        echo "
        ";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Configure/AdvancedParameters/Employee/Blocks/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  391 => 242,  388 => 241,  382 => 255,  375 => 251,  369 => 248,  365 => 247,  360 => 244,  358 => 241,  355 => 240,  352 => 239,  348 => 237,  345 => 234,  343 => 233,  339 => 231,  337 => 227,  336 => 226,  335 => 224,  331 => 222,  328 => 219,  326 => 218,  322 => 216,  320 => 214,  316 => 212,  314 => 209,  310 => 207,  308 => 204,  305 => 203,  298 => 198,  296 => 197,  295 => 195,  294 => 191,  291 => 190,  288 => 189,  285 => 185,  282 => 184,  279 => 180,  277 => 179,  273 => 177,  268 => 174,  266 => 173,  265 => 171,  261 => 169,  259 => 168,  252 => 163,  250 => 162,  247 => 161,  243 => 159,  241 => 158,  239 => 156,  230 => 150,  226 => 149,  222 => 148,  218 => 147,  215 => 146,  211 => 143,  209 => 138,  203 => 134,  201 => 129,  195 => 126,  188 => 121,  185 => 117,  183 => 116,  176 => 111,  171 => 109,  168 => 108,  164 => 105,  161 => 102,  156 => 98,  153 => 93,  147 => 89,  142 => 86,  139 => 85,  136 => 84,  133 => 83,  131 => 82,  128 => 81,  126 => 80,  122 => 78,  120 => 76,  112 => 70,  110 => 68,  109 => 65,  96 => 55,  88 => 49,  86 => 47,  82 => 45,  80 => 43,  75 => 41,  68 => 37,  61 => 34,  58 => 33,  53 => 30,  50 => 29,  46 => 33,  43 => 32,  41 => 29,  38 => 28,  36 => 26,  33 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Configure/AdvancedParameters/Employee/Blocks/form.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Configure/AdvancedParameters/Employee/Blocks/form.html.twig");
    }
}
