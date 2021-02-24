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

/* exercice/index.html.twig */
class __TwigTemplate_99084ba9bac81d20770b4a4439d245cfcab8ba586f1aebbcb4a44bff5f8525e4 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "exercice/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Les exercices - MY PROGRESS";
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

            <h3>Les exercices</h3>

            <div class=\"row\">
                ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["exercices"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["exercice"]) {
            // line 17
            echo "                    <div class=\"col-md-4\">
                        <div class=\"exercice-item\">
                            <a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("exercice", ["id" => twig_get_attribute($this->env, $this->source, $context["exercice"], "id", [], "any", false, false, false, 19)]), "html", null, true);
            echo "\"><img src=\"/uploads/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["exercice"], "illustration", [], "any", false, false, false, 19), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["exercice"], "name", [], "any", false, false, false, 19), "html", null, true);
            echo "\" class=\"img-fluid\"></a>
                            <h5>";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["exercice"], "name", [], "any", false, false, false, 20), "html", null, true);
            echo "</h5>
                            <span>";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["exercice"], "subtitle", [], "any", false, false, false, 21), "html", null, true);
            echo "</span>
                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['exercice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "exercice/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 25,  93 => 21,  89 => 20,  81 => 19,  77 => 17,  73 => 16,  63 => 9,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "exercice/index.html.twig", "C:\\wamp64\\www\\studi-exercices\\myprogress\\templates\\exercice\\index.html.twig");
    }
}
