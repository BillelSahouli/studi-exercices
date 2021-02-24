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
class __TwigTemplate_c207e93f7c991d07e673ad086b13787e255abc23075ff1f9c925b0ac7265abd7 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "my_performance/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Mes Performances";
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    <div class=\"row\">
        <div class=\"col-md-3\">
            <h3>FILTRER</h3>
            ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form');
        echo "
        </div>
        <div class=\"col-md-9\">

            <h3>Mes performances</h3>
            <p><small>Retrouvez vos performances</small></p>
            <div class=\"row\">
                ";
        // line 16
        if ((0 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 16), "performance", [], "any", false, false, false, 16)), 0))) {
            // line 17
            echo "                    <p>Vous n'avez pas de performances</p>
                    ";
        } else {
            // line 19
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["exercices"] ?? null));
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
        return array (  119 => 31,  116 => 30,  110 => 29,  103 => 25,  99 => 24,  91 => 23,  87 => 21,  84 => 20,  79 => 19,  75 => 17,  73 => 16,  63 => 9,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "my_performance/index.html.twig", "C:\\wamp64\\www\\studi-exercices\\myprogress\\templates\\my_performance\\index.html.twig");
    }
}
