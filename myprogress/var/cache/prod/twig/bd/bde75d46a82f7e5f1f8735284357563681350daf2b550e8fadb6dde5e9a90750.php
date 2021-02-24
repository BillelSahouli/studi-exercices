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

/* my_performance/showPerform.html.twig */
class __TwigTemplate_ff3801c83f1a463045044d10b46ce8571473ff6bae167a5b677bf00781344a14 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base.html.twig", "my_performance/showPerform.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["exercice"] ?? null), "name", [], "any", false, false, false, 3), "html", null, true);
        echo " - MY PROGRESS";
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    <div class=\"row\">
        <div class=\"col-md-5\">
            <img src=\"/uploads/";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["exercice"] ?? null), "illustration", [], "any", false, false, false, 8), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["exercice"] ?? null), "name", [], "any", false, false, false, 8), "html", null, true);
        echo "\" class=\"img-fluid\">
        </div>
        <div class=\"col-md-7 my-auto\">
            <h3>";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["exercice"] ?? null), "name", [], "any", false, false, false, 11), "html", null, true);
        echo "</h3>
            <p>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["exercice"] ?? null), "subtitle", [], "any", false, false, false, 12), "html", null, true);
        echo "</p>
            <hr>
            <p>";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["exercice"] ?? null), "description", [], "any", false, false, false, 14), "html", null, true);
        echo "</p>
        </div>
    </div>
    <hr style=\"background-color: white\">
    <table class=\"table table-dark table-sm\">
        <thead>
            <tr>
                <th scope=\"col\">Poids</th>
                <th scope=\"col\">Répétitions</th>
                <th scope=\"col\">Charge Max</th>
                <th scope=\"col\">Date</th>
                <th scope=\"col\">Modifier | Suprimer</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 29), "performance", [], "any", false, false, false, 29));
        foreach ($context['_seq'] as $context["_key"] => $context["exPerfs"]) {
            // line 30
            echo "            <tr>
                <th scope=\"col\">";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["exPerfs"], "weight", [], "any", false, false, false, 31), "html", null, true);
            echo " KG</th>
                <th scope=\"col\">x";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["exPerfs"], "repetition", [], "any", false, false, false, 32), "html", null, true);
            echo "</th>
                <th scope=\"col\">";
            // line 33
            echo twig_escape_filter($this->env, (((0.0333 * twig_get_attribute($this->env, $this->source, $context["exPerfs"], "repetition", [], "any", false, false, false, 33)) + 1) * twig_get_attribute($this->env, $this->source, $context["exPerfs"], "weight", [], "any", false, false, false, 33)), "html", null, true);
            echo " KG</th>
                <th scope=\"col\">";
            // line 34
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["exPerfs"], "date", [], "any", false, false, false, 34), "d/m/Y"), "html", null, true);
            echo "</th>
                <th><a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_performance", ["id" => twig_get_attribute($this->env, $this->source, $context["exPerfs"], "id", [], "any", false, false, false, 35)]), "html", null, true);
            echo "\" class=\"btn btn-primary btn-sm mr-1\" role=\"button\">modifier</a><a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_performance", ["id" => twig_get_attribute($this->env, $this->source, $context["exPerfs"], "id", [], "any", false, false, false, 35)]), "html", null, true);
            echo "\" class=\"btn btn-primary btn-sm\" role=\"button\">Suprimer</a></th>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['exPerfs'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "        </tbody>
    </table>
";
    }

    public function getTemplateName()
    {
        return "my_performance/showPerform.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 38,  121 => 35,  117 => 34,  113 => 33,  109 => 32,  105 => 31,  102 => 30,  98 => 29,  80 => 14,  75 => 12,  71 => 11,  63 => 8,  59 => 6,  55 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "my_performance/showPerform.html.twig", "C:\\wamp64\\www\\studi-exercices\\myprogress\\templates\\my_performance\\showPerform.html.twig");
    }
}
