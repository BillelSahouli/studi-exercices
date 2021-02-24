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
class __TwigTemplate_9d30622b61a524d2944e3a9a33cb8ea860c5c441e4737141967686b66527ceba extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "exercice/show.html.twig", 1);
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
    ";
        // line 17
        if (($context["notification"] ?? null)) {
            // line 18
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 18)) {
                // line 19
                echo "        <div class=\"alert alert-info\">";
                echo twig_escape_filter($this->env, ($context["notification"] ?? null), "html", null, true);
                echo "</div>
            ";
            }
            // line 21
            echo "    ";
        }
        // line 22
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 22)) {
            // line 23
            echo "        ";
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form');
            echo "
        ";
        } else {
            // line 25
            echo "            <div class=\"alert alert-info\">Connectez vous pour pouvoir inserez vos performances</div>
    ";
        }
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
        return array (  109 => 25,  103 => 23,  100 => 22,  97 => 21,  91 => 19,  88 => 18,  86 => 17,  80 => 14,  75 => 12,  71 => 11,  63 => 8,  59 => 6,  55 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "exercice/show.html.twig", "C:\\wamp64\\www\\studi-exercices\\myprogress\\templates\\exercice\\show.html.twig");
    }
}
