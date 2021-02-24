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

/* exercice/show.html.twig */
class __TwigTemplate_ffe1168de619b1e38630b9cb3844eeff158c62ce2e728fee011fdac17ac94caf extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "exercice/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "exercice/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "exercice/show.html.twig", 1);
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
        echo "    <div class=\"container-fluid\">
        <div class=\"row row-show-exercice\">
            <div class=\"col-md-3\">
                <img src=\"/uploads/";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["exercice"]) || array_key_exists("exercice", $context) ? $context["exercice"] : (function () { throw new RuntimeError('Variable "exercice" does not exist.', 9, $this->source); })()), "illustration", [], "any", false, false, false, 9), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["exercice"]) || array_key_exists("exercice", $context) ? $context["exercice"] : (function () { throw new RuntimeError('Variable "exercice" does not exist.', 9, $this->source); })()), "name", [], "any", false, false, false, 9), "html", null, true);
        echo "\" class=\"img-fluid\">
            </div>
            <div class=\"col-md-3\">
                <h3 class=\"show-exercice-name\">";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["exercice"]) || array_key_exists("exercice", $context) ? $context["exercice"] : (function () { throw new RuntimeError('Variable "exercice" does not exist.', 12, $this->source); })()), "name", [], "any", false, false, false, 12), "html", null, true);
        echo "</h3>
                <p class=\"show-exercice-subtitle\">";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["exercice"]) || array_key_exists("exercice", $context) ? $context["exercice"] : (function () { throw new RuntimeError('Variable "exercice" does not exist.', 13, $this->source); })()), "subtitle", [], "any", false, false, false, 13), "html", null, true);
        echo "</p>
                <hr>
                <p>";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["exercice"]) || array_key_exists("exercice", $context) ? $context["exercice"] : (function () { throw new RuntimeError('Variable "exercice" does not exist.', 15, $this->source); })()), "description", [], "any", false, false, false, 15), "html", null, true);
        echo "</p>
            </div>
        </div>
    </div>
        ";
        // line 19
        if ((isset($context["notification"]) || array_key_exists("notification", $context) ? $context["notification"] : (function () { throw new RuntimeError('Variable "notification" does not exist.', 19, $this->source); })())) {
            // line 20
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 20, $this->source); })()), "user", [], "any", false, false, false, 20)) {
                // line 21
                echo "                <div class=\"row\">
                    <div class=\"offset-md-2\">
                        <div class=\"notif-style\" style=\"text-align: center\">";
                // line 23
                echo twig_escape_filter($this->env, (isset($context["notification"]) || array_key_exists("notification", $context) ? $context["notification"] : (function () { throw new RuntimeError('Variable "notification" does not exist.', 23, $this->source); })()), "html", null, true);
                echo "</div>
                    </div>
                </div>
            ";
            }
            // line 27
            echo "        ";
        }
        // line 28
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 28, $this->source); })()), "user", [], "any", false, false, false, 28)) {
            // line 29
            echo "            <div class=\"container-fluid\">
                <div class=\"row row-form-show-exercice\">
                    <div class=\"col-md-2 offset-md-2\">
                        ";
            // line 32
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), 'form_start');
            echo "
                            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "date", [], "any", false, false, false, 33), 'row');
            echo "
                            ";
            // line 34
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "weight", [], "any", false, false, false, 34), 'row');
            echo "
                            ";
            // line 35
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "repetition", [], "any", false, false, false, 35), 'row');
            echo "
                        <button type=\"submit\" class=\"btn btn-success btn-valid-show\">Valider</button>
                        ";
            // line 37
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), 'form_end');
            echo "
                    </div>
                    <div class=\"col-md-5 contain-table table-responsive \">
                        <table class=\"table table-hover text-center\" id=\"myTable\">
                            <input type=\"text\" id=\"myInput\" onkeyup=\"myFunction()\" placeholder=\"Recherche par date\" title=\"Type in a name\">
                            <thead>
                            <tr class=\"tr-title\">
                                <th scope=\"col\">Poids</th>
                                <th scope=\"col\">Répétitions</th>
                                <th scope=\"col\">Charge Max</th>
                                <th scope=\"col\">Date</th>
                                <th scope=\"col\">Modifier Suprimer</th>
                            </tr>
                            </thead>
                            <tbody>
                                ";
            // line 52
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["exercice"]) || array_key_exists("exercice", $context) ? $context["exercice"] : (function () { throw new RuntimeError('Variable "exercice" does not exist.', 52, $this->source); })()), "performances", [], "any", false, false, false, 52));
            foreach ($context['_seq'] as $context["_key"] => $context["experf"]) {
                // line 53
                echo "                                    ";
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["experf"], "user", [], "any", false, false, false, 53), "id", [], "any", false, false, false, 53), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 53, $this->source); })()), "user", [], "any", false, false, false, 53), "id", [], "any", false, false, false, 53)))) {
                    // line 54
                    echo "                                        <tr class=\"tr-result\">
                                            <td scope=\"col\">";
                    // line 55
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["experf"], "weight", [], "any", false, false, false, 55), "html", null, true);
                    echo " KG</td>
                                            <td scope=\"col\">x";
                    // line 56
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["experf"], "repetition", [], "any", false, false, false, 56), "html", null, true);
                    echo "</td>
                                            <td scope=\"col\">";
                    // line 57
                    echo twig_escape_filter($this->env, (twig_round(((0.0333 * twig_get_attribute($this->env, $this->source, $context["experf"], "repetition", [], "any", false, false, false, 57)) + 1), 2, "floor") * twig_get_attribute($this->env, $this->source, $context["experf"], "weight", [], "any", false, false, false, 57)), "html", null, true);
                    echo " KG</td>
                                            <td scope=\"col\">";
                    // line 58
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["experf"], "date", [], "any", false, false, false, 58), "d/m/Y"), "html", null, true);
                    echo "</td>
                                            <td>
                                                <button class=\"btn btn-outline-light btn-modify\" type=\"submit\">
                                                    <a href=\"";
                    // line 61
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_performance", ["id" => twig_get_attribute($this->env, $this->source, $context["experf"], "id", [], "any", false, false, false, 61)]), "html", null, true);
                    echo "\">modifier</a>
                                                </button>
                                                <button class=\"btn btn-outline-dark btn-delete\" type=\"submit\">
                                                    <a href=\"";
                    // line 64
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_performance", ["id" => twig_get_attribute($this->env, $this->source, $context["experf"], "id", [], "any", false, false, false, 64)]), "html", null, true);
                    echo "\">Suprimer</a>
                                                </button>
                                            </td>
                                        </tr>
                                    ";
                }
                // line 69
                echo "                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['experf'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 70
            echo "                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        ";
        } else {
            // line 76
            echo "            <div class=\"alert alert-info\">Connectez vous pour pouvoir inserez vos performances</div>
        ";
        }
        // line 78
        echo "    <script>
        function myFunction() {
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById(\"myInput\");
            filter = input.value.toUpperCase();
            table = document.getElementById(\"myTable\");
            tr = table.getElementsByTagName(\"tr\");
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName(\"td\")[3];
                if (td) {
                    txtValue = td.textContent || td.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = \"\";
                    } else {
                        tr[i].style.display = \"none\";
                    }
                }
            }
        }
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "exercice/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  240 => 78,  236 => 76,  228 => 70,  222 => 69,  214 => 64,  208 => 61,  202 => 58,  198 => 57,  194 => 56,  190 => 55,  187 => 54,  184 => 53,  180 => 52,  162 => 37,  157 => 35,  153 => 34,  149 => 33,  145 => 32,  140 => 29,  137 => 28,  134 => 27,  127 => 23,  123 => 21,  120 => 20,  118 => 19,  111 => 15,  106 => 13,  102 => 12,  94 => 9,  89 => 6,  79 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ exercice.name }} - MY PROGRESS{% endblock %}

{% block content %}
    <div class=\"container-fluid\">
        <div class=\"row row-show-exercice\">
            <div class=\"col-md-3\">
                <img src=\"/uploads/{{ exercice.illustration }}\" alt=\"{{ exercice.name }}\" class=\"img-fluid\">
            </div>
            <div class=\"col-md-3\">
                <h3 class=\"show-exercice-name\">{{ exercice.name }}</h3>
                <p class=\"show-exercice-subtitle\">{{ exercice.subtitle }}</p>
                <hr>
                <p>{{ exercice.description }}</p>
            </div>
        </div>
    </div>
        {% if notification %}
            {% if app.user %}
                <div class=\"row\">
                    <div class=\"offset-md-2\">
                        <div class=\"notif-style\" style=\"text-align: center\">{{ notification }}</div>
                    </div>
                </div>
            {% endif %}
        {% endif %}
        {% if app.user%}
            <div class=\"container-fluid\">
                <div class=\"row row-form-show-exercice\">
                    <div class=\"col-md-2 offset-md-2\">
                        {{ form_start(form) }}
                            {{ form_row(form.date) }}
                            {{ form_row(form.weight) }}
                            {{ form_row(form.repetition) }}
                        <button type=\"submit\" class=\"btn btn-success btn-valid-show\">Valider</button>
                        {{ form_end(form) }}
                    </div>
                    <div class=\"col-md-5 contain-table table-responsive \">
                        <table class=\"table table-hover text-center\" id=\"myTable\">
                            <input type=\"text\" id=\"myInput\" onkeyup=\"myFunction()\" placeholder=\"Recherche par date\" title=\"Type in a name\">
                            <thead>
                            <tr class=\"tr-title\">
                                <th scope=\"col\">Poids</th>
                                <th scope=\"col\">Répétitions</th>
                                <th scope=\"col\">Charge Max</th>
                                <th scope=\"col\">Date</th>
                                <th scope=\"col\">Modifier Suprimer</th>
                            </tr>
                            </thead>
                            <tbody>
                                {% for experf in exercice.performances %}
                                    {% if experf.user.id == app.user.id %}
                                        <tr class=\"tr-result\">
                                            <td scope=\"col\">{{ experf.weight}} KG</td>
                                            <td scope=\"col\">x{{ experf.repetition}}</td>
                                            <td scope=\"col\">{{ ((0.0333 * experf.repetition)+1)|round(2, 'floor') * experf.weight}} KG</td>
                                            <td scope=\"col\">{{ experf.date|date(\"d/m/Y\") }}</td>
                                            <td>
                                                <button class=\"btn btn-outline-light btn-modify\" type=\"submit\">
                                                    <a href=\"{{ path('edit_performance', {'id' : experf.id}) }}\">modifier</a>
                                                </button>
                                                <button class=\"btn btn-outline-dark btn-delete\" type=\"submit\">
                                                    <a href=\"{{ path('delete_performance', {'id' : experf.id}) }}\">Suprimer</a>
                                                </button>
                                            </td>
                                        </tr>
                                    {% endif %}
                                {% endfor %}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        {% else %}
            <div class=\"alert alert-info\">Connectez vous pour pouvoir inserez vos performances</div>
        {% endif %}
    <script>
        function myFunction() {
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById(\"myInput\");
            filter = input.value.toUpperCase();
            table = document.getElementById(\"myTable\");
            tr = table.getElementsByTagName(\"tr\");
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName(\"td\")[3];
                if (td) {
                    txtValue = td.textContent || td.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = \"\";
                    } else {
                        tr[i].style.display = \"none\";
                    }
                }
            }
        }
    </script>
{% endblock %}", "exercice/show.html.twig", "C:\\wamp64\\www\\studi-exercices\\myprogress\\templates\\exercice\\show.html.twig");
    }
}
