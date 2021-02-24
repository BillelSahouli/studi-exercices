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

/* @EasyAdmin/crud/includes/_filters_modal.html.twig */
class __TwigTemplate_e0ce313ca8ad36c1695dd37e3eaacd7db892fc07a78cdc85ac89f1f4788ca1c4 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'javascript_filter_modal' => [$this, 'block_javascript_filter_modal'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<div id=\"modal-filters\" class=\"modal fade\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" data-dismiss=\"modal\" class=\"btn btn-sm btn-secondary\" id=\"modal-clear-button\" formtarget=\"_self\">
                    <i class=\"fa fa-close\"></i> ";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("filter.button.clear", array(), "EasyAdminBundle"), "html", null, true);
        echo "
                </button>
                <h5 class=\"modal-title\">
                    <i class=\"fa fa-filter fa-fw\"></i> ";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("filter.title", array(), "EasyAdminBundle"), "html", null, true);
        echo "
                </h5>
                <button type=\"button\" data-dismiss=\"modal\" class=\"btn btn-sm btn-primary\" id=\"modal-apply-button\" formtarget=\"_self\">
                    <i class=\"fa fa-check\"></i> ";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("filter.button.apply", array(), "EasyAdminBundle"), "html", null, true);
        echo "
                </button>
            </div>
            <div class=\"modal-body p-0\">
                ";
        // line 17
        echo "                ";
        // line 18
        echo "            </div>
        </div>
    </div>
</div>

";
        // line 23
        $this->displayBlock('javascript_filter_modal', $context, $blocks);
    }

    public function block_javascript_filter_modal($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 24
        echo "    <script>
        const filterModal = document.querySelector('#modal-filters');

        const removeFilter = function(field) {
            field.closest('form').querySelectorAll('input[name^=\"filters['+field.dataset.filterProperty+']\"]').forEach(hidden => {
                hidden.remove();
            });
            field.remove();
        }

        document.querySelector('#modal-clear-button').addEventListener('click', function() {
            filterModal.querySelectorAll('.filter-field').forEach(filterField => {
                removeFilter(filterField);
            });

            filterModal.querySelector('form').submit();
        });

        document.querySelector('#modal-apply-button').addEventListener('click', function() {
            filterModal.querySelectorAll('.filter-checkbox:not(:checked)').forEach(notAppliedFilter => {
                removeFilter(notAppliedFilter.closest('.filter-field'));
            });
            filterModal.querySelector('form').submit();
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "@EasyAdmin/crud/includes/_filters_modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 24,  73 => 23,  66 => 18,  64 => 17,  57 => 12,  51 => 9,  45 => 6,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@EasyAdmin/crud/includes/_filters_modal.html.twig", "C:\\wamp64\\www\\studi-exercices\\myprogress\\vendor\\easycorp\\easyadmin-bundle\\src\\Resources\\views\\crud\\includes\\_filters_modal.html.twig");
    }
}
