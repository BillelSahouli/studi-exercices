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

/* @EasyAdmin/crud/paginator.html.twig */
class __TwigTemplate_b56cfe12c305d9ca62fa255fa92f361a925db1ad4865e6d03fdee4e2e9b2d5ef extends Template
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
        echo "
<div class=\"list-pagination\">
    <div class=\"list-pagination-counter\">
        ";
        // line 7
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("paginator.results", ["%count%" => twig_get_attribute($this->env, $this->source, ($context["paginator"] ?? null), "numResults", [], "any", false, false, false, 7)], "EasyAdminBundle");
        echo "
    </div>

    <nav class=\"pager list-pagination-paginator ";
        // line 10
        echo (( !twig_get_attribute($this->env, $this->source, ($context["paginator"] ?? null), "hasPreviousPage", [], "any", false, false, false, 10)) ? ("first-page") : (""));
        echo " ";
        echo (( !twig_get_attribute($this->env, $this->source, ($context["paginator"] ?? null), "hasNextPage", [], "any", false, false, false, 10)) ? ("last-page") : (""));
        echo "\">
        <ul class=\"pagination\">
            <li class=\"page-item ";
        // line 12
        echo (( !twig_get_attribute($this->env, $this->source, ($context["paginator"] ?? null), "hasPreviousPage", [], "any", false, false, false, 12)) ? ("disabled") : (""));
        echo "\">
                <a class=\"page-link\" href=\"";
        // line 13
        (( !twig_get_attribute($this->env, $this->source, ($context["paginator"] ?? null), "hasPreviousPage", [], "any", false, false, false, 13)) ? (print ("#")) : (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["paginator"] ?? null), "generateUrlForPage", [0 => twig_get_attribute($this->env, $this->source, ($context["paginator"] ?? null), "previousPage", [], "any", false, false, false, 13)], "method", false, false, false, 13), "html", null, true))));
        echo "\">
                    <i class=\"fa fa-angle-left mx-1\"></i> <span class=\"btn-label\">";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("paginator.previous", [], "EasyAdminBundle"), "html", null, true);
        echo "</span>
                </a>
            </li>

            <li class=\"page-item ";
        // line 18
        echo (( !twig_get_attribute($this->env, $this->source, ($context["paginator"] ?? null), "hasNextPage", [], "any", false, false, false, 18)) ? ("disabled") : (""));
        echo "\">
                <a class=\"page-link\" href=\"";
        // line 19
        (( !twig_get_attribute($this->env, $this->source, ($context["paginator"] ?? null), "hasNextPage", [], "any", false, false, false, 19)) ? (print ("#")) : (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["paginator"] ?? null), "generateUrlForPage", [0 => twig_get_attribute($this->env, $this->source, ($context["paginator"] ?? null), "nextPage", [], "any", false, false, false, 19)], "method", false, false, false, 19), "html", null, true))));
        echo "\">
                    <span class=\"btn-label\">";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("paginator.next", [], "EasyAdminBundle"), "html", null, true);
        echo "</span> <i class=\"fa fa-angle-right mx-1\"></i>
                </a>
            </li>
        </ul>
    </nav>
</div>
";
    }

    public function getTemplateName()
    {
        return "@EasyAdmin/crud/paginator.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 20,  74 => 19,  70 => 18,  63 => 14,  59 => 13,  55 => 12,  48 => 10,  42 => 7,  37 => 4,);
    }

    public function getSourceContext()
    {
        return new Source("", "@EasyAdmin/crud/paginator.html.twig", "C:\\wamp64\\www\\studi-exercices\\myprogress\\vendor\\easycorp\\easyadmin-bundle\\src\\Resources\\views\\crud\\paginator.html.twig");
    }
}
