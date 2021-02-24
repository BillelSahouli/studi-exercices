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

/* @EasyAdmin/label/inaccessible.html.twig */
class __TwigTemplate_01543eecae113ec0d7f7d0f60aed67a7effaacc60d4dac633a5a7ac91b3d579a extends Template
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
        // line 2
        echo "
<span class=\"badge badge-danger\" title=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.inaccessible.explanation", [], "EasyAdminBundle"), "html", null, true);
        echo "\">
    ";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.inaccessible", [], "EasyAdminBundle"), "html", null, true);
        echo "
</span>
";
    }

    public function getTemplateName()
    {
        return "@EasyAdmin/label/inaccessible.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 4,  40 => 3,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "@EasyAdmin/label/inaccessible.html.twig", "C:\\wamp64\\www\\studi-exercices\\myprogress\\vendor\\easycorp\\easyadmin-bundle\\src\\Resources\\views\\label\\inaccessible.html.twig");
    }
}
