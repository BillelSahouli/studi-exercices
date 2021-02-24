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
class __TwigTemplate_7291284a63c9d7bf999d9afecd7a51e73bd9b6b732bcd76adeb9ba89e7894aa7 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "my_performance/showPerform.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "my_performance/showPerform.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "my_performance/showPerform.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["exercice"]) || array_key_exists("exercice", $context) ? $context["exercice"] : (function () { throw new RuntimeError('Variable "exercice" does not exist.', 3, $this->source); })()), "name", [], "any", false, false, false, 3), "html", null, true);
        echo " - MY PROGRESS";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "    <div class=\"row\">
        <div class=\"col-md-5\">
            <img src=\"/uploads/";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["exercice"]) || array_key_exists("exercice", $context) ? $context["exercice"] : (function () { throw new RuntimeError('Variable "exercice" does not exist.', 8, $this->source); })()), "illustration", [], "any", false, false, false, 8), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["exercice"]) || array_key_exists("exercice", $context) ? $context["exercice"] : (function () { throw new RuntimeError('Variable "exercice" does not exist.', 8, $this->source); })()), "name", [], "any", false, false, false, 8), "html", null, true);
        echo "\" class=\"img-fluid\">
        </div>
        <div class=\"col-md-7 my-auto\">
            <h3>";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["exercice"]) || array_key_exists("exercice", $context) ? $context["exercice"] : (function () { throw new RuntimeError('Variable "exercice" does not exist.', 11, $this->source); })()), "name", [], "any", false, false, false, 11), "html", null, true);
        echo "</h3>
            <p>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["exercice"]) || array_key_exists("exercice", $context) ? $context["exercice"] : (function () { throw new RuntimeError('Variable "exercice" does not exist.', 12, $this->source); })()), "subtitle", [], "any", false, false, false, 12), "html", null, true);
        echo "</p>
            <hr>
            <p>";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["exercice"]) || array_key_exists("exercice", $context) ? $context["exercice"] : (function () { throw new RuntimeError('Variable "exercice" does not exist.', 14, $this->source); })()), "description", [], "any", false, false, false, 14), "html", null, true);
        echo "</p>
        </div>
    </div>
    <hr style=\"background-color: white\">
    <table class=\"table table-light table-sm\">
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
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 29, $this->source); })()), "user", [], "any", false, false, false, 29), "performance", [], "any", false, false, false, 29));
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  162 => 38,  151 => 35,  147 => 34,  143 => 33,  139 => 32,  135 => 31,  132 => 30,  128 => 29,  110 => 14,  105 => 12,  101 => 11,  93 => 8,  89 => 6,  79 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ exercice.name }} - MY PROGRESS{% endblock %}

{% block content %}
    <div class=\"row\">
        <div class=\"col-md-5\">
            <img src=\"/uploads/{{ exercice.illustration }}\" alt=\"{{ exercice.name }}\" class=\"img-fluid\">
        </div>
        <div class=\"col-md-7 my-auto\">
            <h3>{{ exercice.name }}</h3>
            <p>{{ exercice.subtitle }}</p>
            <hr>
            <p>{{ exercice.description }}</p>
        </div>
    </div>
    <hr style=\"background-color: white\">
    <table class=\"table table-light table-sm\">
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
        {% for exPerfs in app.user.performance %}
            <tr>
                <th scope=\"col\">{{ exPerfs.weight}} KG</th>
                <th scope=\"col\">x{{ exPerfs.repetition}}</th>
                <th scope=\"col\">{{ ((0.0333 * exPerfs.repetition)+1) * exPerfs.weight}} KG</th>
                <th scope=\"col\">{{ exPerfs.date|date(\"d/m/Y\") }}</th>
                <th><a href=\"{{ path('edit_performance', {'id' : exPerfs.id}) }}\" class=\"btn btn-primary btn-sm mr-1\" role=\"button\">modifier</a><a href=\"{{ path('delete_performance', {'id' : exPerfs.id}) }}\" class=\"btn btn-primary btn-sm\" role=\"button\">Suprimer</a></th>
            </tr>
        {% endfor %}
        </tbody>
    </table>
{% endblock %}
", "my_performance/showPerform.html.twig", "C:\\wamp64\\www\\studi-exercices\\myprogress\\templates\\my_performance\\showPerform.html.twig");
    }
}
