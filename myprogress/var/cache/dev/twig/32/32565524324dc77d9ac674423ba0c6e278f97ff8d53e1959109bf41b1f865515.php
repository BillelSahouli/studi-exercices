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
class __TwigTemplate_6ba5cadb19e05dbee14f4d55f8d7dde0b71a289d1d82e67c64eadcb3ef1096e7 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!doctype html>
<html lang=\"fr\">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"Mark Otto, Jacob Thornton, and Bootstrap contributors\">
    <title>";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <!-- Custom styles for this template -->
    <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/carousel.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/login.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/profil.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/modifyInfoProfil.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/modifyPassword.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/exercices.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/show.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/editForm.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/body.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/main.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/footer.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!-- Bootstrap core CSS -->
    <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

</head>
<body>
<header>
    <nav class=\"navbar navbar-expand-md navbar-dark fixed-top bg-dark\">
        <div class=\"container-fluid\">
            <a class=\"navbar-brand\" href=\"#\">MYPROGRESS</a>
            <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarCollapse\" aria-controls=\"navbarCollapse\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>
            <div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
                <ul class=\"navbar-nav me-auto mb-2 mb-md-0\">
                    <li class=\"nav-item active\">
                        <a class=\"nav-link\" aria-current=\"page\" href=\"";
        // line 36
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">ACCEUIL</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
        // line 39
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("exercices");
        echo "\">EXERCICES</a>
                    </li>
                    ";
        // line 41
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 41, $this->source); })()), "user", [], "any", false, false, false, 41)) {
            // line 42
            echo "                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"";
            // line 43
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account");
            echo "\">PROFIL <small>(";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 43, $this->source); })()), "user", [], "any", false, false, false, 43), "firstname", [], "any", false, false, false, 43), "html", null, true);
            echo ")</small></a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"";
            // line 46
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">DECONNEXION</a>
                        </li>
                        ";
            // line 48
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 49
                echo "                            <li class=\"nav-item\">
                                <a class=\"nav-link\" href=\"";
                // line 50
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin");
                echo "\">ADMIN</a>
                            </li>
                        ";
            }
            // line 53
            echo "                    ";
        } else {
            // line 54
            echo "                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"";
            // line 55
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">CONNEXION</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"";
            // line 58
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("register");
            echo "\">INSCRIPTION</a>
                        </li>
                    ";
        }
        // line 61
        echo "                </ul>
            </div>
        </div>
    </nav>
</header>
";
        // line 66
        $this->displayBlock('content', $context, $blocks);
        // line 68
        echo "<!-- FOOTER -->
<footer class=\" text-center\">
    <p class=\"float-end\"><a href=\"#\">Back to top</a></p>
    <p> MYPROGRESS, 2021 . Create by Sahouli Billel</p>
</footer>
<script src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 8
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "MYPROGRESS - FRANCE";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 66
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  228 => 66,  209 => 8,  195 => 73,  188 => 68,  186 => 66,  179 => 61,  173 => 58,  167 => 55,  164 => 54,  161 => 53,  155 => 50,  152 => 49,  150 => 48,  145 => 46,  137 => 43,  134 => 42,  132 => 41,  127 => 39,  121 => 36,  104 => 22,  99 => 20,  95 => 19,  91 => 18,  87 => 17,  83 => 16,  79 => 15,  75 => 14,  71 => 13,  67 => 12,  63 => 11,  59 => 10,  54 => 8,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html lang=\"fr\">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"Mark Otto, Jacob Thornton, and Bootstrap contributors\">
    <title>{% block title %}MYPROGRESS - FRANCE{% endblock %}</title>
    <!-- Custom styles for this template -->
    <link href=\"{{ asset('assets/css/carousel.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('assets/css/login.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('assets/css/profil.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('assets/css/modifyInfoProfil.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('assets/css/modifyPassword.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('assets/css/exercices.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('assets/css/show.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('assets/css/editForm.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('assets/css/body.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('assets/css/main.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('assets/css/footer.css') }}\" rel=\"stylesheet\">
    <!-- Bootstrap core CSS -->
    <link href=\"{{ asset('assets/css/bootstrap.min.css') }}\" rel=\"stylesheet\">

</head>
<body>
<header>
    <nav class=\"navbar navbar-expand-md navbar-dark fixed-top bg-dark\">
        <div class=\"container-fluid\">
            <a class=\"navbar-brand\" href=\"#\">MYPROGRESS</a>
            <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarCollapse\" aria-controls=\"navbarCollapse\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>
            <div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
                <ul class=\"navbar-nav me-auto mb-2 mb-md-0\">
                    <li class=\"nav-item active\">
                        <a class=\"nav-link\" aria-current=\"page\" href=\"{{ path('home') }}\">ACCEUIL</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"{{ path('exercices') }}\">EXERCICES</a>
                    </li>
                    {% if app.user %}
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"{{ path('account') }}\">PROFIL <small>({{ app.user.firstname }})</small></a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"{{ path('app_logout') }}\">DECONNEXION</a>
                        </li>
                        {% if is_granted(\"ROLE_ADMIN\") %}
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" href=\"{{ path('admin') }}\">ADMIN</a>
                            </li>
                        {% endif %}
                    {% else %}
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"{{ path('app_login') }}\">CONNEXION</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"{{ path('register') }}\">INSCRIPTION</a>
                        </li>
                    {% endif %}
                </ul>
            </div>
        </div>
    </nav>
</header>
{% block content %}
{% endblock %}
<!-- FOOTER -->
<footer class=\" text-center\">
    <p class=\"float-end\"><a href=\"#\">Back to top</a></p>
    <p> MYPROGRESS, 2021 . Create by Sahouli Billel</p>
</footer>
<script src=\"{{ asset('assets/js/bootstrap.bundle.min.js') }}\"></script>
</body>
</html>
", "base.html.twig", "C:\\wamp64\\www\\studi-exercices\\myprogress\\templates\\base.html.twig");
    }
}
