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

/* @EasyAdmin/crud/includes/_delete_form.html.twig */
class __TwigTemplate_f794f728bfe8a4956e2c4ece4007f234d14ae1221cb4d1e6489fb7ff782b130c extends Template
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
        // line 2
        echo "<form method=\"post\" id=\"delete-form\" style=\"display: none\">
    <input type=\"hidden\" name=\"token\" value=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("ea-delete"), "html", null, true);
        echo "\" />
</form>

<div id=\"modal-delete\" class=\"modal fade\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-body\">
                <h4>";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("delete_modal.title", [], "EasyAdminBundle"), "html", null, true);
        echo "</h4>
                <p>";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("delete_modal.content", [], "EasyAdminBundle"), "html", null, true);
        echo "</p>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" data-dismiss=\"modal\" class=\"btn btn-secondary\">
                    <span class=\"btn-label\">";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.cancel", [], "EasyAdminBundle"), "html", null, true);
        echo "</span>
                </button>

                <button type=\"button\" data-dismiss=\"modal\" class=\"btn btn-danger\" id=\"modal-delete-button\" form=\"delete-form\">
                    <span class=\"btn-label\">";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.delete", [], "EasyAdminBundle"), "html", null, true);
        echo "</span>
                </button>
            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@EasyAdmin/crud/includes/_delete_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 19,  61 => 15,  54 => 11,  50 => 10,  40 => 3,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "@EasyAdmin/crud/includes/_delete_form.html.twig", "C:\\wamp64\\www\\studi-exercices\\myprogress\\vendor\\easycorp\\easyadmin-bundle\\src\\Resources\\views\\crud\\includes\\_delete_form.html.twig");
    }
}
