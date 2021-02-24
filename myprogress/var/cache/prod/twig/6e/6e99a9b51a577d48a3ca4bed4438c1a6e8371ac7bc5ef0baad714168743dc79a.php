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

/* @EasyAdmin/crud/field/url.html.twig */
class __TwigTemplate_ffb9041242c767778d664336d50784069a3c5ed12d97319770e51eb85ae4eea6 extends Template
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
        // line 6
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 6), "currentAction", [], "any", false, false, false, 6), "detail"))) {
            // line 7
            echo "    <a target=\"_blank\" rel=\"noopener\" href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "value", [], "any", false, false, false, 7), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "value", [], "any", false, false, false, 7), "html", null, true);
            echo "</a>
";
        } else {
            // line 9
            echo "    <a target=\"_blank\" rel=\"noopener\" href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "value", [], "any", false, false, false, 9), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "formattedValue", [], "any", false, false, false, 9), "html", null, true);
            echo "</a>
";
        }
    }

    public function getTemplateName()
    {
        return "@EasyAdmin/crud/field/url.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 9,  39 => 7,  37 => 6,);
    }

    public function getSourceContext()
    {
        return new Source("", "@EasyAdmin/crud/field/url.html.twig", "C:\\wamp64\\www\\studi-exercices\\myprogress\\vendor\\easycorp\\easyadmin-bundle\\src\\Resources\\views\\crud\\field\\url.html.twig");
    }
}
