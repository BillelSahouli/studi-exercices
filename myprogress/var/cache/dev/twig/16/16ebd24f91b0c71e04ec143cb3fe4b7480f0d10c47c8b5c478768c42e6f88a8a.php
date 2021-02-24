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

/* my_performance/index.html.twig */
class __TwigTemplate_674b6b95e617fa0a898704776b66536be0832898fabcb3151e1f8698355c991f extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "my_performance/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "my_performance/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "my_performance/index.html.twig", 1);
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

        echo "Mes Performances";
        
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
        <div class=\"col-md-3\">
            <h3>FILTRER</h3>
            ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), 'form');
        echo "
        </div>
        <div class=\"col-md-9\">

            <h3>Mes performances</h3>
            <p><small>Retrouvez vos performances</small></p>
            <div class=\"row\">
                ";
        // line 16
        if ((0 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 16, $this->source); })()), "user", [], "any", false, false, false, 16), "performance", [], "any", false, false, false, 16)), 0))) {
            // line 17
            echo "                    <p>Vous n'avez pas de performances</p>
                    ";
        } else {
            // line 19
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["exercices"]) || array_key_exists("exercices", $context) ? $context["exercices"] : (function () { throw new RuntimeError('Variable "exercices" does not exist.', 19, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["exercice"]) {
                // line 20
                echo "                            ";
                if ((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["exercice"], "performances", [], "any", false, false, false, 20)), 0))) {
                    // line 21
                    echo "                                <div class=\"col-md-4\">
                                    <div class=\"exercice-item\">
                                        <a href=\"";
                    // line 23
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("performance", ["id" => twig_get_attribute($this->env, $this->source, $context["exercice"], "id", [], "any", false, false, false, 23)]), "html", null, true);
                    echo "\"><img src=\"/uploads/";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["exercice"], "illustration", [], "any", false, false, false, 23), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["exercice"], "name", [], "any", false, false, false, 23), "html", null, true);
                    echo "\" class=\"img-fluid\"></a>
                                        <h5>";
                    // line 24
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["exercice"], "name", [], "any", false, false, false, 24), "html", null, true);
                    echo "</h5>
                                        <span>";
                    // line 25
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["exercice"], "subtitle", [], "any", false, false, false, 25), "html", null, true);
                    echo "</span>
                                    </div>
                                </div>
                            ";
                }
                // line 29
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['exercice'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "                ";
        }
        // line 31
        echo "            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "my_performance/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 31,  146 => 30,  140 => 29,  133 => 25,  129 => 24,  121 => 23,  117 => 21,  114 => 20,  109 => 19,  105 => 17,  103 => 16,  93 => 9,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Mes Performances{% endblock %}

{% block content %}
    <div class=\"row\">
        <div class=\"col-md-3\">
            <h3>FILTRER</h3>
            {{ form(form) }}
        </div>
        <div class=\"col-md-9\">

            <h3>Mes performances</h3>
            <p><small>Retrouvez vos performances</small></p>
            <div class=\"row\">
                {% if app.user.performance|length == 0 %}
                    <p>Vous n'avez pas de performances</p>
                    {% else %}
                        {% for exercice in exercices %}
                            {% if exercice.performances|length > 0 %}
                                <div class=\"col-md-4\">
                                    <div class=\"exercice-item\">
                                        <a href=\"{{ path('performance', {'id' : exercice.id}) }}\"><img src=\"/uploads/{{ exercice.illustration }}\" alt=\"{{ exercice.name }}\" class=\"img-fluid\"></a>
                                        <h5>{{ exercice.name }}</h5>
                                        <span>{{ exercice.subtitle }}</span>
                                    </div>
                                </div>
                            {% endif %}
                        {% endfor %}
                {% endif %}
            </div>
        </div>
    </div>
{% endblock %}
", "my_performance/index.html.twig", "C:\\wamp64\\www\\studi-exercices\\myprogress\\templates\\my_performance\\index.html.twig");
    }
}
