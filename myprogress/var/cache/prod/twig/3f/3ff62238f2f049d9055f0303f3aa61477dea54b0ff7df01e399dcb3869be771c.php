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

/* base.html.twig */
class __TwigTemplate_30341487fdfb8388aa602ed9b9b5797d26dafabd28ef6964080b3deefc876ed5 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!doctype html>
<html lang=\"en\" class=\"h-100\">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"My Progress c'est le site qui va te permettre de note, mesuré tes performances en musculation.\">
    <meta name=\"author\" content=\"Billel Sahouli\">
    <meta name=\"generator\" content=\"Hugo 0.79.0\">
    <title>";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <link rel=\"canonical\" href=\"https://getbootstrap.com/docs/5.0/examples/cover/\">
    <!-- Bootstrap core CSS -->
    <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
    <!-- Custom styles for this template -->
    <link href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/cover.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/myprogress.css"), "html", null, true);
        echo "\">
</head>
<body class=\"d-flex h-100 text-center text-white bg-dark\">
<div class=\"cover-container d-flex w-100 h-100 p-3 mx-auto flex-column\">
    <header class=\"mb-auto\">
        <div>
            <h3 class=\"float-md-start mb-0\">MY PROGRESS</h3>
            <nav class=\"nav nav-masthead justify-content-center float-md-end\">
                <div class=\"navbar-item-custom mb-5 mt-5\">
                    <a href=\"";
        // line 39
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">Accueil</a>
                    <a href=\"";
        // line 40
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("exercices");
        echo "\">Exercices</a>
                ";
        // line 41
        if (twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 41)) {
            // line 42
            echo "                    <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("exercice_performance");
            echo "\">Mes performances</a>
                    <a href=\"";
            // line 43
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account");
            echo "\">Mon profil <small>(";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 43), "firstname", [], "any", false, false, false, 43), "html", null, true);
            echo ")</small></a>
                    <a href=\"";
            // line 44
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Deconnexion</a>
                    ";
            // line 45
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 46
                echo "                        <a href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin");
                echo "\">ADMIN</a>
                    ";
            }
            // line 48
            echo "                ";
        } else {
            // line 49
            echo "                    <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">Connexion</a>
                    <a href=\"";
            // line 50
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("register");
            echo "\">Inscription</a>
                ";
        }
        // line 52
        echo "                </div>
            </nav>
            ";
        // line 54
        $this->displayBlock('content', $context, $blocks);
        // line 56
        echo "        </div>
    </header>
    <footer class=\"mt-auto text-white-50\">
        <p>Cover template for <a href=\"https://getbootstrap.com/\" class=\"text-white\">Bootstrap</a>, by <a href=\"https://twitter.com/mdo\" class=\"text-white\">@mdo</a>.</p>
    </footer>
</div>
</body>
</html>
";
    }

    // line 9
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "MYPROGRESS - FRANCE";
    }

    // line 54
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 55
        echo "            ";
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 55,  162 => 54,  155 => 9,  143 => 56,  141 => 54,  137 => 52,  132 => 50,  127 => 49,  124 => 48,  118 => 46,  116 => 45,  112 => 44,  106 => 43,  101 => 42,  99 => 41,  95 => 40,  91 => 39,  79 => 30,  75 => 29,  55 => 12,  49 => 9,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "base.html.twig", "C:\\wamp64\\www\\studi-exercices\\myprogress\\templates\\base.html.twig");
    }
}
