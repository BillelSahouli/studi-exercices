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

/* home/index.html.twig */
class __TwigTemplate_164b8834e3a334a2e2c1bc115fc0fe2fa437351a3d0be9bcb17ed7bafecb6cc9 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <div class=\"img-muscu\" id=\"id-img-muscu\" data-char=\"myprogress\">
        <h1 class=\"h1-home\">MYPROGRESS</h1>
        <p class=\"p-home\">La plateforme qui suit ta progression</p>
    </div>
    <blockquote class=\"blockquote\">
        <div class=\"card-home \">
            <div class=\"card text-center\" style=\"width:1143px;\">
                <div class=\"card-body\">
                    <h3 class=\"card-title h3-home-card\">Pourquoi noté ses performances ?</h3>
                    <p class=\"card-text\" > La progression en musculation est complexe, tant bien mentalement que physiquement.<br>
                        Est si je vous disait que vous pouvez progréssez encore plus vite ?
                        Ont ne v'as pas parler de dopage ici, je vais vous parler de noter toutes vos performances
                        en musculation. Noté ses performances vous indiqueront la charge que vous avez poussez ou tiré lors
                        de votre scéance, en effet, qui ce souvient des charges que l'on a poussé dans tel ou tel exercice
                        et ainsi pouvoir mettre un peu plus a chaques sceance ? Trés peu le peuvent.. Hors faire comme cela nous freines, car nous
                        avons tendances a nous sur-évaluer. <br>
                        <strong>
                            Donc noter vos performances vous indiqueras : <br>
                            1 - La charge poussez ou tirez a la précédante scéance. <br>
                            2 - Chargez un petit peu plus et pas excessivement. <br>
                            3 - Relir vos précédante performances vous permettron de voir si vous progressée comme vous le voudrés.
                        </strong>
                    </p>
                </div>
            </div>
        </div>
    </blockquote>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block content %}
    <div class=\"img-muscu\" id=\"id-img-muscu\" data-char=\"myprogress\">
        <h1 class=\"h1-home\">MYPROGRESS</h1>
        <p class=\"p-home\">La plateforme qui suit ta progression</p>
    </div>
    <blockquote class=\"blockquote\">
        <div class=\"card-home \">
            <div class=\"card text-center\" style=\"width:1143px;\">
                <div class=\"card-body\">
                    <h3 class=\"card-title h3-home-card\">Pourquoi noté ses performances ?</h3>
                    <p class=\"card-text\" > La progression en musculation est complexe, tant bien mentalement que physiquement.<br>
                        Est si je vous disait que vous pouvez progréssez encore plus vite ?
                        Ont ne v'as pas parler de dopage ici, je vais vous parler de noter toutes vos performances
                        en musculation. Noté ses performances vous indiqueront la charge que vous avez poussez ou tiré lors
                        de votre scéance, en effet, qui ce souvient des charges que l'on a poussé dans tel ou tel exercice
                        et ainsi pouvoir mettre un peu plus a chaques sceance ? Trés peu le peuvent.. Hors faire comme cela nous freines, car nous
                        avons tendances a nous sur-évaluer. <br>
                        <strong>
                            Donc noter vos performances vous indiqueras : <br>
                            1 - La charge poussez ou tirez a la précédante scéance. <br>
                            2 - Chargez un petit peu plus et pas excessivement. <br>
                            3 - Relir vos précédante performances vous permettron de voir si vous progressée comme vous le voudrés.
                        </strong>
                    </p>
                </div>
            </div>
        </div>
    </blockquote>
{% endblock %}
", "home/index.html.twig", "C:\\wamp64\\www\\studi-exercices\\myprogress\\templates\\home\\index.html.twig");
    }
}
