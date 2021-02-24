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

/* @EasyAdmin/crud/edit.html.twig */
class __TwigTemplate_f902b7e9cbf6d174994f51399cbbdbf56781acc348aa0ebcce192504e422397c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body_id' => [$this, 'block_body_id'],
            'body_class' => [$this, 'block_body_class'],
            'configured_head_contents' => [$this, 'block_configured_head_contents'],
            'configured_body_contents' => [$this, 'block_configured_body_contents'],
            'configured_stylesheets' => [$this, 'block_configured_stylesheets'],
            'configured_javascripts' => [$this, 'block_configured_javascripts'],
            'content_title' => [$this, 'block_content_title'],
            'page_actions' => [$this, 'block_page_actions'],
            'main' => [$this, 'block_main'],
            'edit_form' => [$this, 'block_edit_form'],
            'delete_form' => [$this, 'block_delete_form'],
            'body_javascript' => [$this, 'block_body_javascript'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 3
        return $this->loadTemplate(twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "templatePath", [0 => "layout"], "method", false, false, false, 3), "@EasyAdmin/crud/edit.html.twig", 3);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["edit_form"] ?? null), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 4), "formThemes", [], "any", false, false, false, 4), false);
        // line 6
        $context["__internal_3fea546a9e359547d590e5f33bacc8d0f7242a6eca9fe3890acada10c5656819"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 6), "translationDomain", [], "any", false, false, false, 6);
        // line 3
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_body_id($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, ((("ea-edit-" . twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "name", [], "any", false, false, false, 8)) . "-") . twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "primaryKeyValue", [], "any", false, false, false, 8)), "html", null, true);
    }

    // line 9
    public function block_body_class($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, ("ea-edit ea-edit-" . twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "name", [], "any", false, false, false, 9)), "html", null, true);
    }

    // line 11
    public function block_configured_head_contents($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        echo "    ";
        $this->displayParentBlock("configured_head_contents", $context, $blocks);
        echo "
    ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit_form"] ?? null), "vars", [], "any", false, false, false, 13), "ea_crud_form", [], "any", false, false, false, 13), "assets", [], "any", false, false, false, 13), "headContents", [], "any", false, false, false, 13));
        foreach ($context['_seq'] as $context["_key"] => $context["htmlContent"]) {
            // line 14
            echo "        ";
            echo $context["htmlContent"];
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['htmlContent'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 18
    public function block_configured_body_contents($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 19
        echo "    ";
        $this->displayParentBlock("configured_body_contents", $context, $blocks);
        echo "
    ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit_form"] ?? null), "vars", [], "any", false, false, false, 20), "ea_crud_form", [], "any", false, false, false, 20), "assets", [], "any", false, false, false, 20), "bodyContents", [], "any", false, false, false, 20));
        foreach ($context['_seq'] as $context["_key"] => $context["htmlContent"]) {
            // line 21
            echo "        ";
            echo $context["htmlContent"];
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['htmlContent'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 25
    public function block_configured_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 26
        echo "    ";
        $this->displayParentBlock("configured_stylesheets", $context, $blocks);
        echo "
    ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit_form"] ?? null), "vars", [], "any", false, false, false, 27), "ea_crud_form", [], "any", false, false, false, 27), "assets", [], "any", false, false, false, 27), "cssFiles", [], "any", false, false, false, 27));
        foreach ($context['_seq'] as $context["_key"] => $context["css_asset"]) {
            // line 28
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($context["css_asset"]), "html", null, true);
            echo "\">
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['css_asset'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 32
    public function block_configured_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 33
        echo "    ";
        $this->displayParentBlock("configured_javascripts", $context, $blocks);
        echo "
    ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit_form"] ?? null), "vars", [], "any", false, false, false, 34), "ea_crud_form", [], "any", false, false, false, 34), "assets", [], "any", false, false, false, 34), "jsFiles", [], "any", false, false, false, 34));
        foreach ($context['_seq'] as $context["_key"] => $context["js_asset"]) {
            // line 35
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($context["js_asset"]), "html", null, true);
            echo "\"></script>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['js_asset'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 39
    public function block_content_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 40
        ob_start(function () { return ''; });
        // line 41
        $context["default_title"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 41), "defaultPageTitle", [0 => "edit", 1 => twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "instance", [], "any", false, false, false, 41)], "method", false, false, false, 41), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 41), "translationParameters", [], "any", false, false, false, 41), "EasyAdminBundle");
        // line 42
        echo "        ";
        $context["custom_title"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 42), "customPageTitle", [0 => "edit", 1 => twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "instance", [], "any", false, false, false, 42)], "method", false, false, false, 42);
        // line 43
        echo "        ";
        echo (((null === ($context["custom_title"] ?? null))) ? (($context["default_title"] ?? null)) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["custom_title"] ?? null), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 43), "translationParameters", [], "any", false, false, false, 43),         // line 6
($context["__internal_3fea546a9e359547d590e5f33bacc8d0f7242a6eca9fe3890acada10c5656819"] ?? null))));
        $___internal_39cf877e83e772b93682917839968444758a584fe608f79e228916cede6ecd49_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 40
        echo twig_spaceless($___internal_39cf877e83e772b93682917839968444758a584fe608f79e228916cede6ecd49_);
    }

    // line 47
    public function block_page_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 48
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "actions", [], "any", false, false, false, 48));
        foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
            // line 49
            echo "        ";
            echo twig_include($this->env, $context, twig_get_attribute($this->env, $this->source, $context["action"], "templatePath", [], "any", false, false, false, 49), ["action" => $context["action"]], false);
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 53
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 54
        echo "    ";
        $this->displayBlock('edit_form', $context, $blocks);
        // line 57
        echo "
    ";
        // line 58
        $this->displayBlock('delete_form', $context, $blocks);
    }

    // line 54
    public function block_edit_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 55
        echo "        ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["edit_form"] ?? null), 'form');
        echo "
    ";
    }

    // line 58
    public function block_delete_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 59
        echo "        ";
        echo twig_include($this->env, $context, "@EasyAdmin/crud/includes/_delete_form.html.twig", ["entity_id" => twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "primaryKeyValue", [], "any", false, false, false, 59)], false);
        echo "
    ";
    }

    // line 63
    public function block_body_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 64
        echo "    ";
        $this->displayParentBlock("body_javascript", $context, $blocks);
        echo "

    <script type=\"text/javascript\">
        \$(function() {
            \$('.ea-edit-form').areYouSure({ 'message': '";
        // line 68
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("form.are_you_sure", [], "EasyAdminBundle"), "js"), "html", null, true);
        echo "' });

            const entityForm = document.querySelector('form.ea-edit-form');
            const inputFieldsSelector = 'input,select,textarea';

            // Adding visual feedback for invalid fields: any \".form-group\" with invalid fields
            // receives \"has-error\" class. The class is removed on click on the \".form-group\"
            // itself to support custom/complex fields.
            entityForm.addEventListener('submit', function(submitEvent) {
                entityForm.querySelectorAll(inputFieldsSelector).forEach(function (input) {
                    if (!input.validity.valid) {
                        const formGroup = input.closest('div.form-group');

                        formGroup.classList.add('has-error');

                        formGroup.addEventListener('click', function onFormGroupClick() {
                            formGroup.classList.remove('has-error');
                            formGroup.removeEventListener('click', onFormGroupClick);
                        });
                    }
                });

                const eaEvent = new CustomEvent('ea.form.submit', {
                    cancelable: true,
                    detail: { page: 'edit', form: entityForm }
                });
                const eaEventResult = document.dispatchEvent(eaEvent);
                if (false === eaEventResult) {
                    submitEvent.preventDefault();
                    submitEvent.stopPropagation();
                }
            });

            // forms with tabs require some special treatment for errors. The problem
            // is when the field with errors is included in a tab not currently visible.
            // Browser shows this error \"An invalid form control with name='...' is not focusable.\"
            // So, the user clicks on Submit button, the form is not submitted and the error
            // is not displayed. This JavaScript code ensures that each tab shows a badge with
            // the number of errors in it.
            entityForm.addEventListener('submit', function() {
                const formTabPanes = entityForm.querySelectorAll('.tab-pane');
                if (0 === formTabPanes.length) {
                    return;
                }

                let firstNavTabItemWithError = null;

                formTabPanes.forEach(function (tabPane) {
                    let tabPaneNumErrors = 0;
                    tabPane.querySelectorAll(inputFieldsSelector).forEach(function (input) {
                        if (!input.validity.valid) {
                            tabPaneNumErrors++;
                        }
                    });

                    let navTabItem = entityForm.querySelector('.nav-item a[href=\"#' + tabPane.id + '\"]');
                    let existingErrorBadge = navTabItem.querySelector('span.badge.badge-danger');
                    if (null !== existingErrorBadge) {
                        navTabItem.removeChild(existingErrorBadge);
                    }

                    if (tabPaneNumErrors > 0) {
                        let newErrorBadge = document.createElement('span');
                        newErrorBadge.classList.add('badge', 'badge-danger');
                        newErrorBadge.title = 'form.tab.error_badge_title';
                        newErrorBadge.textContent = tabPaneNumErrors;

                        navTabItem.appendChild(newErrorBadge);

                        if (null === firstNavTabItemWithError) {
                            firstNavTabItemWithError = navTabItem;
                        }
                    }
                });

                if (firstNavTabItemWithError) {
                    firstNavTabItemWithError.click();
                }
            });

            \$('.action-delete').on('click', function(e) {
                e.preventDefault();
                const formAction = \$(this).attr('formaction');

                \$('#modal-delete').modal({ backdrop: true, keyboard: true })
                    .off('click', '#modal-delete-button')
                    .on('click', '#modal-delete-button', function () {
                        \$('#delete-form').attr('action', formAction).trigger('submit');
                    });
            });
        });
    </script>

    ";
        // line 161
        echo twig_include($this->env, $context, "@EasyAdmin/crud/includes/_select2_widget.html.twig");
        echo "
";
    }

    public function getTemplateName()
    {
        return "@EasyAdmin/crud/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  355 => 161,  259 => 68,  251 => 64,  247 => 63,  240 => 59,  236 => 58,  229 => 55,  225 => 54,  221 => 58,  218 => 57,  215 => 54,  211 => 53,  200 => 49,  195 => 48,  191 => 47,  187 => 40,  184 => 6,  182 => 43,  179 => 42,  177 => 41,  175 => 40,  171 => 39,  160 => 35,  156 => 34,  151 => 33,  147 => 32,  136 => 28,  132 => 27,  127 => 26,  123 => 25,  112 => 21,  108 => 20,  103 => 19,  99 => 18,  88 => 14,  84 => 13,  79 => 12,  75 => 11,  68 => 9,  61 => 8,  57 => 3,  55 => 6,  53 => 4,  46 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("", "@EasyAdmin/crud/edit.html.twig", "C:\\wamp64\\www\\studi-exercices\\myprogress\\vendor\\easycorp\\easyadmin-bundle\\src\\Resources\\views\\crud\\edit.html.twig");
    }
}
