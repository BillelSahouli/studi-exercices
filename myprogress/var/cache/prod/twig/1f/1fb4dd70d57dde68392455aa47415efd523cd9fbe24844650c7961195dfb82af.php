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

/* @EasyAdmin/crud/field/boolean.html.twig */
class __TwigTemplate_6bd8401ec2efae2aa8d61b20f8ef473b5f83155cb89f95f8486918ddc7f910c1 extends Template
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
        // line 5
        echo "
";
        // line 6
        if (((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 6), "currentAction", [], "any", false, false, false, 6), "detail")) ||  !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "customOptions", [], "any", false, false, false, 6), "get", [0 => "renderAsSwitch"], "method", false, false, false, 6))) {
            // line 7
            echo "    <span class=\"badge ";
            echo (((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "value", [], "any", false, false, false, 7), true))) ? ("badge-boolean-true") : ("badge-boolean-false"));
            echo "\">
        ";
            // line 8
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "value", [], "any", false, false, false, 8), true))) ? ("label.true") : ("label.false")), [], "EasyAdminBundle"), "html", null, true);
            echo "
    </span>
";
        } else {
            // line 11
            echo "    <div class=\"custom-control custom-switch custom-switch-lg\">
        <input type=\"checkbox\" class=\"custom-control-input\" id=\"";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "uniqueId", [], "any", false, false, false, 12), "html", null, true);
            echo "\" ";
            echo (((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "value", [], "any", false, false, false, 12), true))) ? ("checked") : (""));
            echo "
            data-toggle-url=\"";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "customOptions", [], "any", false, false, false, 13), "get", [0 => "toggleUrl"], "method", false, false, false, 13), "html", null, true);
            echo "\"
            ";
            // line 14
            echo (((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "formTypeOption", [0 => "disabled"], "method", false, false, false, 14), true))) ? ("disabled") : (""));
            echo " autocomplete=\"off\">
        <label class=\"custom-control-label\" for=\"";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "uniqueId", [], "any", false, false, false, 15), "html", null, true);
            echo "\"></label>
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "@EasyAdmin/crud/field/boolean.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 15,  66 => 14,  62 => 13,  56 => 12,  53 => 11,  47 => 8,  42 => 7,  40 => 6,  37 => 5,);
    }

    public function getSourceContext()
    {
        return new Source("", "@EasyAdmin/crud/field/boolean.html.twig", "C:\\wamp64\\www\\studi-exercices\\myprogress\\vendor\\easycorp\\easyadmin-bundle\\src\\Resources\\views\\crud\\field\\boolean.html.twig");
    }
}
