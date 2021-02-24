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

/* @EasyAdmin/crud/includes/_select2_widget.html.twig */
class __TwigTemplate_77242f5fbd86d172df3b75a7595b1d44e228528ef9ca1293724240fcc1c803d8 extends Template
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
        $context["ea_select2_locales"] = [0 => "af", 1 => "ar", 2 => "az", 3 => "bg", 4 => "bn", 5 => "bs", 6 => "ca", 7 => "cs", 8 => "da", 9 => "de", 10 => "dsb", 11 => "el", 12 => "en", 13 => "es", 14 => "et", 15 => "eu", 16 => "fa", 17 => "fi", 18 => "fr", 19 => "gl", 20 => "he", 21 => "hi", 22 => "hr", 23 => "hsb", 24 => "hu", 25 => "hy", 26 => "id", 27 => "is", 28 => "it", 29 => "ja", 30 => "ka", 31 => "km", 32 => "ko", 33 => "lt", 34 => "lv", 35 => "mk", 36 => "ms", 37 => "nb", 38 => "ne", 39 => "nl", 40 => "pl", 41 => "ps", 42 => "pt", 43 => "pt-BR", 44 => "ro", 45 => "ru", 46 => "sk", 47 => "sl", 48 => "sq", 49 => "sr", 50 => "sr-Cyrl", 51 => "sv", 52 => "th", 53 => "tk", 54 => "tr", 55 => "uk", 56 => "vi", 57 => "zh-CN", 58 => "zh-TW"];
        // line 3
        echo "
";
        // line 4
        $context["ea_select2_locale"] = ((twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 4), "htmlLocale", [], "any", false, false, false, 4), ($context["ea_select2_locales"] ?? null))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 5
($context["ea"] ?? null), "i18n", [], "any", false, false, false, 5), "htmlLocale", [], "any", false, false, false, 5)) : (((twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 6
($context["ea"] ?? null), "i18n", [], "any", false, false, false, 6), "language", [], "any", false, false, false, 6), ($context["ea_select2_locales"] ?? null))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 6), "language", [], "any", false, false, false, 6)) : ("en"))));
        // line 8
        echo "
";
        // line 9
        if ((0 !== twig_compare(($context["ea_select2_locale"] ?? null), "en"))) {
            // line 10
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((("bundles/easyadmin/select2/i18n/" . ($context["ea_select2_locale"] ?? null)) . ".js")), "html", null, true);
            echo "\"></script>
";
        }
    }

    public function getTemplateName()
    {
        return "@EasyAdmin/crud/includes/_select2_widget.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 10,  49 => 9,  46 => 8,  44 => 6,  43 => 5,  42 => 4,  39 => 3,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "@EasyAdmin/crud/includes/_select2_widget.html.twig", "C:\\wamp64\\www\\studi-exercices\\myprogress\\vendor\\easycorp\\easyadmin-bundle\\src\\Resources\\views\\crud\\includes\\_select2_widget.html.twig");
    }
}
