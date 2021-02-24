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

/* @EasyAdmin/crud/action.html.twig */
class __TwigTemplate_f2128b837cdb43ed09b16fdb958f0c7909016ee6862ecbe6e809c5b33a996b38 extends Template
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
        // line 4
        if ((0 === twig_compare("a", twig_get_attribute($this->env, $this->source, ($context["action"] ?? null), "htmlElement", [], "any", false, false, false, 4)))) {
            // line 5
            echo "    <a class=\"";
            echo ((((array_key_exists("isIncludedInDropdown", $context)) ? (_twig_default_filter(($context["isIncludedInDropdown"] ?? null), false)) : (false))) ? ("dropdown-item") : (""));
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["action"] ?? null), "cssClass", [], "any", false, false, false, 5), "html", null, true);
            echo "\"
       href=\"";
            // line 6
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["action"] ?? null), "linkUrl", [], "any", false, false, false, 6), "html", null, true);
            echo "\"
       ";
            // line 7
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["action"] ?? null), "htmlAttributes", [], "any", false, false, false, 7));
            foreach ($context['_seq'] as $context["name"] => $context["value"]) {
                echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["value"], "html_attr");
                echo "\" ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            // line 8
            if (twig_get_attribute($this->env, $this->source, ($context["action"] ?? null), "icon", [], "any", false, false, false, 8)) {
                echo "<i class=\"action-icon ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["action"] ?? null), "icon", [], "any", false, false, false, 8), "html", null, true);
                echo "\"></i> ";
            }
            // line 9
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["action"] ?? null), "label", [], "any", false, false, false, 9))) {
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["action"] ?? null), "label", [], "any", false, false, false, 9), "html", null, true);
            }
            // line 10
            echo "</a>
";
        } elseif ((0 === twig_compare("button", twig_get_attribute($this->env, $this->source,         // line 11
($context["action"] ?? null), "htmlElement", [], "any", false, false, false, 11)))) {
            // line 12
            echo "    <button class=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["action"] ?? null), "cssClass", [], "any", false, false, false, 12), "html", null, true);
            echo "\" ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["action"] ?? null), "htmlAttributes", [], "any", false, false, false, 12));
            foreach ($context['_seq'] as $context["name"] => $context["value"]) {
                echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["value"], "html_attr");
                echo "\" ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">
        <span class=\"btn-label\">";
            // line 14
            if (twig_get_attribute($this->env, $this->source, ($context["action"] ?? null), "icon", [], "any", false, false, false, 14)) {
                echo "<i class=\"action-icon ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["action"] ?? null), "icon", [], "any", false, false, false, 14), "html", null, true);
                echo "\"></i> ";
            }
            // line 15
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["action"] ?? null), "label", [], "any", false, false, false, 15))) {
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["action"] ?? null), "label", [], "any", false, false, false, 15), "html", null, true);
            }
            // line 16
            echo "</span>
    </button>
";
        }
    }

    public function getTemplateName()
    {
        return "@EasyAdmin/crud/action.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 16,  101 => 15,  95 => 14,  78 => 12,  76 => 11,  73 => 10,  69 => 9,  63 => 8,  50 => 7,  46 => 6,  39 => 5,  37 => 4,);
    }

    public function getSourceContext()
    {
        return new Source("", "@EasyAdmin/crud/action.html.twig", "C:\\wamp64\\www\\studi-exercices\\myprogress\\vendor\\easycorp\\easyadmin-bundle\\src\\Resources\\views\\crud\\action.html.twig");
    }
}
