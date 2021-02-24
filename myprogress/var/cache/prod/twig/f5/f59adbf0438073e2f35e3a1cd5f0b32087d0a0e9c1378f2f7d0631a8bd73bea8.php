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

/* @EasyAdmin/layout.html.twig */
class __TwigTemplate_d4ab0c8c9d0a83eaaec5a3b043040ba54b23a6fd44f21aaf7578df91405aec1a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'head_metas' => [$this, 'block_head_metas'],
            'page_title' => [$this, 'block_page_title'],
            'head_stylesheets' => [$this, 'block_head_stylesheets'],
            'configured_stylesheets' => [$this, 'block_configured_stylesheets'],
            'head_favicon' => [$this, 'block_head_favicon'],
            'head_javascript' => [$this, 'block_head_javascript'],
            'configured_head_contents' => [$this, 'block_configured_head_contents'],
            'body' => [$this, 'block_body'],
            'body_id' => [$this, 'block_body_id'],
            'body_class' => [$this, 'block_body_class'],
            'javascript_page_layout' => [$this, 'block_javascript_page_layout'],
            'wrapper_wrapper' => [$this, 'block_wrapper_wrapper'],
            'flash_messages' => [$this, 'block_flash_messages'],
            'wrapper' => [$this, 'block_wrapper'],
            'header' => [$this, 'block_header'],
            'header_navbar' => [$this, 'block_header_navbar'],
            'header_logo' => [$this, 'block_header_logo'],
            'user_menu' => [$this, 'block_user_menu'],
            'header_custom_menu' => [$this, 'block_header_custom_menu'],
            'sidebar' => [$this, 'block_sidebar'],
            'main_menu_wrapper' => [$this, 'block_main_menu_wrapper'],
            'content' => [$this, 'block_content'],
            'content_header_wrapper' => [$this, 'block_content_header_wrapper'],
            'content_header' => [$this, 'block_content_header'],
            'content_title' => [$this, 'block_content_title'],
            'content_help' => [$this, 'block_content_help'],
            'page_actions_wrapper' => [$this, 'block_page_actions_wrapper'],
            'page_actions' => [$this, 'block_page_actions'],
            'main' => [$this, 'block_main'],
            'content_footer_wrapper' => [$this, 'block_content_footer_wrapper'],
            'body_javascript' => [$this, 'block_body_javascript'],
            'configured_javascripts' => [$this, 'block_configured_javascripts'],
            'configured_body_contents' => [$this, 'block_configured_body_contents'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        $context["__internal_6e1bb01e9fe088e378bd86eec0418966c827dd358e52294ce79755488b699ba0"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 2), "translationDomain", [], "any", false, false, false, 2);
        // line 3
        echo "
<!DOCTYPE html>
<html lang=\"";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 5), "htmlLocale", [], "any", false, false, false, 5), "html", null, true);
        echo "\" dir=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 5), "textDirection", [], "any", false, false, false, 5), "html", null, true);
        echo "\">
<head>
    ";
        // line 7
        $this->displayBlock('head_metas', $context, $blocks);
        // line 14
        echo "
    <title>";
        // line 15
        $this->displayBlock('page_title', $context, $blocks);
        echo "</title>

    ";
        // line 17
        $this->displayBlock('head_stylesheets', $context, $blocks);
        // line 20
        echo "
    ";
        // line 21
        $this->displayBlock('configured_stylesheets', $context, $blocks);
        // line 26
        echo "
    ";
        // line 27
        $this->displayBlock('head_favicon', $context, $blocks);
        // line 30
        echo "
    ";
        // line 31
        $this->displayBlock('head_javascript', $context, $blocks);
        // line 34
        echo "
    ";
        // line 35
        if ((0 === twig_compare("rtl", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 35), "textDirection", [], "any", false, false, false, 35)))) {
            // line 36
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/easyadmin/app.rtl.css"), "html", null, true);
            echo "\">
        <link rel=\"stylesheet\" href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/easyadmin/app-custom-rtl.css"), "html", null, true);
            echo "\">
    ";
        }
        // line 39
        echo "
    ";
        // line 40
        $this->displayBlock('configured_head_contents', $context, $blocks);
        // line 45
        echo "</head>

";
        // line 47
        $this->displayBlock('body', $context, $blocks);
        // line 209
        echo "</html>
";
    }

    // line 7
    public function block_head_metas($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"robots\" content=\"noindex, nofollow, noarchive, nosnippet, noodp, noimageindex, notranslate, nocache\" />
        <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
        <meta name=\"generator\" content=\"EasyAdmin\" />
    ";
    }

    // line 15
    public function block_page_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo strip_tags(        $this->renderBlock("content_title", $context, $blocks));
    }

    // line 17
    public function block_head_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 18
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/easyadmin/app.css"), "html", null, true);
        echo "\">
    ";
    }

    // line 21
    public function block_configured_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 22
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 22), "cssFiles", [], "any", true, true, false, 22) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 22), "cssFiles", [], "any", false, false, false, 22)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 22), "cssFiles", [], "any", false, false, false, 22)) : ([])));
        foreach ($context['_seq'] as $context["_key"] => $context["css_asset"]) {
            // line 23
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($context["css_asset"]), "html", null, true);
            echo "\">
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['css_asset'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "    ";
    }

    // line 27
    public function block_head_favicon($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        echo "        <link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardFaviconPath", [], "any", false, false, false, 28)), "html", null, true);
        echo "\">
    ";
    }

    // line 31
    public function block_head_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 32
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/easyadmin/app.js"), "html", null, true);
        echo "\"></script>
    ";
    }

    // line 40
    public function block_configured_head_contents($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 41
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 41), "headContents", [], "any", true, true, false, 41) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 41), "headContents", [], "any", false, false, false, 41)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 41), "headContents", [], "any", false, false, false, 41)) : ([])));
        foreach ($context['_seq'] as $context["_key"] => $context["htmlContent"]) {
            // line 42
            echo "            ";
            echo $context["htmlContent"];
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['htmlContent'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "    ";
    }

    // line 47
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 48
        echo "    <body id=\"";
        $this->displayBlock('body_id', $context, $blocks);
        echo "\" class=\"ea ";
        $this->displayBlock('body_class', $context, $blocks);
        echo "\">
    ";
        // line 49
        $this->displayBlock('javascript_page_layout', $context, $blocks);
        // line 57
        echo "
    ";
        // line 58
        $this->displayBlock('wrapper_wrapper', $context, $blocks);
        // line 193
        echo "
    ";
        // line 194
        $this->displayBlock('body_javascript', $context, $blocks);
        // line 195
        echo "
    ";
        // line 196
        $this->displayBlock('configured_javascripts', $context, $blocks);
        // line 201
        echo "
    ";
        // line 202
        $this->displayBlock('configured_body_contents', $context, $blocks);
        // line 207
        echo "    </body>
";
    }

    // line 48
    public function block_body_id($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_body_class($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 49
    public function block_javascript_page_layout($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 50
        echo "        <script>
            document.body.classList.add(
                'ea-content-width-' + (localStorage.getItem('ea/content/width') || '";
        // line 52
        echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, true, false, 52), "contentWidth", [], "any", true, true, false, 52) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, true, false, 52), "contentWidth", [], "any", false, false, false, 52)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, true, false, 52), "contentWidth", [], "any", false, false, false, 52)) : ((((twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardContentWidth", [], "any", true, true, false, 52) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardContentWidth", [], "any", false, false, false, 52)))) ? (twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardContentWidth", [], "any", false, false, false, 52)) : ("normal")))), "html", null, true);
        echo "'),
                'ea-sidebar-width-' + (localStorage.getItem('ea/sidebar/width') || '";
        // line 53
        echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, true, false, 53), "sidebarWidth", [], "any", true, true, false, 53) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, true, false, 53), "sidebarWidth", [], "any", false, false, false, 53)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, true, false, 53), "sidebarWidth", [], "any", false, false, false, 53)) : ((((twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardSidebarWidth", [], "any", true, true, false, 53) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardSidebarWidth", [], "any", false, false, false, 53)))) ? (twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardSidebarWidth", [], "any", false, false, false, 53)) : ("normal")))), "html", null, true);
        echo "')
            );
        </script>
    ";
    }

    // line 58
    public function block_wrapper_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 59
        echo "        ";
        $this->displayBlock('flash_messages', $context, $blocks);
        // line 62
        echo "
        <div class=\"wrapper\">
            ";
        // line 64
        $this->displayBlock('wrapper', $context, $blocks);
        // line 191
        echo "        </div>
    ";
    }

    // line 59
    public function block_flash_messages($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 60
        echo "            ";
        echo twig_include($this->env, $context, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "templatePath", [0 => "flash_messages"], "method", false, false, false, 60));
        echo "
        ";
    }

    // line 64
    public function block_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 65
        echo "                <header class=\"main-header\">
                    ";
        // line 66
        $this->displayBlock('header', $context, $blocks);
        // line 128
        echo "                </header>

                <aside class=\"main-sidebar\">
                    ";
        // line 131
        $this->displayBlock('sidebar', $context, $blocks);
        // line 139
        echo "                </aside>

                <div class=\"content-wrapper\">
                    <div id=\"sidebar-resizer-handler\" class=\"resizer-handler resizer-handler-left\"></div>

                    ";
        // line 144
        $this->displayBlock('content', $context, $blocks);
        // line 187
        echo "
                    <div id=\"content-resizer-handler\" class=\"resizer-handler resizer-handler-right\"></div>
                </div>
            ";
    }

    // line 66
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 67
        echo "                        <nav class=\"navbar\" role=\"navigation\">
                            ";
        // line 68
        $this->displayBlock('header_navbar', $context, $blocks);
        // line 81
        echo "                        </nav>

                        ";
        // line 83
        ob_start(function () { return ''; });
        // line 84
        echo "                            <div class=\"popover-content-section user-details ";
        echo (((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "userMenu", [], "any", false, false, false, 84), "items", [], "any", false, false, false, 84)), 0))) ? ("user-has-actions") : (""));
        echo "\">
                                <p class=\"small text-muted mb-0\">";
        // line 85
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("user.logged_in_as", array(), "EasyAdminBundle"), "html", null, true);
        echo "</p>
                                <p class=\"user-details-name\">
                                    ";
        // line 87
        echo twig_escape_filter($this->env, (((null === twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "user", [], "any", false, false, false, 87))) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("user.anonymous", array(), "EasyAdminBundle")) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "userMenu", [], "any", false, false, false, 87), "name", [], "any", false, false, false, 87))), "html", null, true);
        echo "
                                </p>
                            </div>

                            ";
        // line 91
        $this->displayBlock('user_menu', $context, $blocks);
        // line 103
        echo "                        ";
        $context["_user_menu_content"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 104
        echo "
                        <div class=\"content-top navbar-custom-menu\">
                            ";
        // line 106
        $this->displayBlock('header_custom_menu', $context, $blocks);
        // line 126
        echo "                        </div>
                    ";
    }

    // line 68
    public function block_header_navbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 69
        echo "                                <button id=\"navigation-toggler\" type=\"button\" aria-label=\"Toggle navigation\">
                                    <i class=\"fa fa-fw fa-bars\"></i>
                                </button>

                                <div id=\"header-logo\">
                                    ";
        // line 74
        $this->displayBlock('header_logo', $context, $blocks);
        // line 79
        echo "                                </div>
                            ";
    }

    // line 74
    public function block_header_logo($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 75
        echo "                                        <a class=\"logo ";
        echo (((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardTitle", [], "any", false, false, false, 75)), 14))) ? ("logo-long") : (""));
        echo "\" title=\"";
        echo twig_escape_filter($this->env, strip_tags(twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardTitle", [], "any", false, false, false, 75)), "html", null, true);
        echo "\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardRouteName", [], "any", false, false, false, 75));
        echo "\">
                                            ";
        // line 76
        echo twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardTitle", [], "any", false, false, false, 76);
        echo "
                                        </a>
                                    ";
    }

    // line 91
    public function block_user_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 92
        echo "                                ";
        if ((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "userMenu", [], "any", false, false, false, 92), "items", [], "any", false, false, false, 92)), 0))) {
            // line 93
            echo "                                    <div class=\"popover-content-section user-menu\">
                                        ";
            // line 94
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "userMenu", [], "any", false, false, false, 94), "items", [], "any", false, false, false, 94));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 95
                echo "                                            <a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "linkUrl", [], "any", false, false, false, 95), "html", null, true);
                echo "\" class=\"user-action ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "cssClass", [], "any", false, false, false, 95), "html", null, true);
                echo "\" target=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "linkTarget", [], "any", false, false, false, 95), "html", null, true);
                echo "\" rel=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "linkRel", [], "any", false, false, false, 95), "html", null, true);
                echo "\" referrerpolicy=\"origin-when-cross-origin\">
                                                ";
                // line 96
                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["item"], "icon", [], "any", false, false, false, 96))) {
                    echo "<i class=\"fa fa-fw ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "icon", [], "any", false, false, false, 96), "html", null, true);
                    echo "\"></i>";
                }
                // line 97
                echo "                                                <span>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "label", [], "any", false, false, false, 97), "html", null, true);
                echo "</span>
                                            </a>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 100
            echo "                                    </div>
                                ";
        }
        // line 102
        echo "                            ";
    }

    // line 106
    public function block_header_custom_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 107
        echo "                                ";
        if (twig_constant_is_defined("Symfony\\Component\\Security\\Core\\Authorization\\Voter\\AuthenticatedVoter::IS_IMPERSONATOR")) {
            // line 108
            echo "                                    ";
            $context["impersonator_permission"] = "IS_IMPERSONATOR";
            // line 109
            echo "                                ";
        } else {
            // line 110
            echo "                                    ";
            $context["impersonator_permission"] = "ROLE_PREVIOUS_ADMIN";
            // line 111
            echo "                                ";
        }
        // line 112
        echo "
                                <div class=\"user user-menu-wrapper ";
        // line 113
        echo (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted(($context["impersonator_permission"] ?? null))) ? ("user-is-impersonated") : (""));
        echo "\" data-toggle=\"popover\" data-placement=\"bottom\" data-container=\".user-menu-wrapper\" data-content=\"";
        echo twig_escape_filter($this->env, ($context["_user_menu_content"] ?? null), "html_attr");
        echo "\" data-html=\"true\">
                                    ";
        // line 114
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "userMenu", [], "any", false, false, false, 114), "isAvatarDisplayed", [], "any", false, false, false, 114)) {
            // line 115
            echo "                                        ";
            if ((0 === twig_compare(null, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "userMenu", [], "any", false, false, false, 115), "avatarUrl", [], "any", false, false, false, 115)))) {
                // line 116
                echo "                                            <i class=\"fa fa-fw ";
                echo (( !(null === twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "user", [], "any", false, false, false, 116))) ? ("fa-user-circle") : ("fa-user-times"));
                echo " user-avatar\"></i>
                                        ";
            } else {
                // line 118
                echo "                                            <img class=\"user-avatar\" src=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "userMenu", [], "any", false, false, false, 118), "avatarUrl", [], "any", false, false, false, 118), "html", null, true);
                echo "\" />
                                        ";
            }
            // line 120
            echo "                                    ";
        }
        // line 121
        echo "                                    ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "userMenu", [], "any", false, false, false, 121), "isNameDisplayed", [], "any", false, false, false, 121)) {
            // line 122
            echo "                                        <span class=\"user-name\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "userMenu", [], "any", false, false, false, 122), "name", [], "any", false, false, false, 122), "html", null, true);
            echo "</span>
                                    ";
        }
        // line 124
        echo "                                </div>
                            ";
    }

    // line 131
    public function block_sidebar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 132
        echo "                        <section class=\"sidebar\">
                            ";
        // line 133
        $this->displayBlock('main_menu_wrapper', $context, $blocks);
        // line 136
        echo "                        </section>

                    ";
    }

    // line 133
    public function block_main_menu_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 134
        echo "                                ";
        echo twig_include($this->env, $context, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "templatePath", [0 => "main_menu"], "method", false, false, false, 134));
        echo "
                            ";
    }

    // line 144
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 145
        echo "                        <div class=\"content\">
                            ";
        // line 146
        $this->displayBlock('content_header_wrapper', $context, $blocks);
        // line 172
        echo "
                            <section id=\"main\" class=\"content-body\">
                                ";
        // line 174
        $this->displayBlock('main', $context, $blocks);
        // line 175
        echo "                            </section>

                            ";
        // line 177
        $this->displayBlock('content_footer_wrapper', $context, $blocks);
        // line 185
        echo "                        </div>
                    ";
    }

    // line 146
    public function block_content_header_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 147
        echo "                                ";
        $context["has_help_message"] =  !twig_test_empty((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, true, false, 147), "helpMessage", [], "any", true, true, false, 147) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, true, false, 147), "helpMessage", [], "any", false, false, false, 147)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, true, false, 147), "helpMessage", [], "any", false, false, false, 147)) : ("")));
        // line 148
        echo "                                <section class=\"content-header\">
                                    ";
        // line 149
        $this->displayBlock('content_header', $context, $blocks);
        // line 170
        echo "                                </section>
                            ";
    }

    // line 149
    public function block_content_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 150
        echo "                                        <div class=\"d-flex flex-row justify-content-between align-content-center w-100\">
                                            <div class=\"content-header-title\">
                                                <h1 class=\"title\">
                                                    ";
        // line 153
        $this->displayBlock('content_title', $context, $blocks);
        // line 154
        echo "
                                                    ";
        // line 155
        $this->displayBlock('content_help', $context, $blocks);
        // line 162
        echo "                                                </h1>
                                            </div>

                                            ";
        // line 165
        $this->displayBlock('page_actions_wrapper', $context, $blocks);
        // line 168
        echo "                                        </div>
                                    ";
    }

    // line 153
    public function block_content_title($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 155
    public function block_content_help($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 156
        echo "                                                        ";
        if (($context["has_help_message"] ?? null)) {
            // line 157
            echo "                                                            <span class=\"content-header-help\">
                                                                <i class=\"far fa-question-circle\" data-toggle=\"tooltip\" title=\"";
            // line 158
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 158), "helpMessage", [], "any", false, false, false, 158), "html_attr");
            echo "\"></i>
                                                            </span>
                                                        ";
        }
        // line 161
        echo "                                                    ";
    }

    // line 165
    public function block_page_actions_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 166
        echo "                                                <div class=\"page-actions\">";
        $this->displayBlock('page_actions', $context, $blocks);
        echo "</div>
                                            ";
    }

    public function block_page_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 174
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 177
    public function block_content_footer_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 178
        echo "                                ";
        $context["content_footer"] = ((        $this->hasBlock("content_footer", $context, $blocks)) ? (        $this->renderBlock("content_footer", $context, $blocks)) : (""));
        // line 179
        echo "                                ";
        if ( !twig_test_empty(($context["content_footer"] ?? null))) {
            // line 180
            echo "                                    <section class=\"content-footer\">
                                        ";
            // line 181
            echo twig_escape_filter($this->env, ($context["content_footer"] ?? null), "html", null, true);
            echo "
                                    </section>
                                ";
        }
        // line 184
        echo "                            ";
    }

    // line 194
    public function block_body_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 196
    public function block_configured_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 197
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 197), "jsFiles", [], "any", true, true, false, 197) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 197), "jsFiles", [], "any", false, false, false, 197)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 197), "jsFiles", [], "any", false, false, false, 197)) : ([])));
        foreach ($context['_seq'] as $context["_key"] => $context["js_asset"]) {
            // line 198
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($context["js_asset"]), "html", null, true);
            echo "\"></script>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['js_asset'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 200
        echo "    ";
    }

    // line 202
    public function block_configured_body_contents($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 203
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 203), "bodyContents", [], "any", true, true, false, 203) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 203), "bodyContents", [], "any", false, false, false, 203)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "assets", [], "any", false, true, false, 203), "bodyContents", [], "any", false, false, false, 203)) : ([])));
        foreach ($context['_seq'] as $context["_key"] => $context["htmlContent"]) {
            // line 204
            echo "            ";
            echo $context["htmlContent"];
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['htmlContent'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 206
        echo "    ";
    }

    public function getTemplateName()
    {
        return "@EasyAdmin/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  779 => 206,  770 => 204,  765 => 203,  761 => 202,  757 => 200,  748 => 198,  743 => 197,  739 => 196,  733 => 194,  729 => 184,  723 => 181,  720 => 180,  717 => 179,  714 => 178,  710 => 177,  704 => 174,  692 => 166,  688 => 165,  684 => 161,  678 => 158,  675 => 157,  672 => 156,  668 => 155,  662 => 153,  657 => 168,  655 => 165,  650 => 162,  648 => 155,  645 => 154,  643 => 153,  638 => 150,  634 => 149,  629 => 170,  627 => 149,  624 => 148,  621 => 147,  617 => 146,  612 => 185,  610 => 177,  606 => 175,  604 => 174,  600 => 172,  598 => 146,  595 => 145,  591 => 144,  584 => 134,  580 => 133,  574 => 136,  572 => 133,  569 => 132,  565 => 131,  560 => 124,  554 => 122,  551 => 121,  548 => 120,  542 => 118,  536 => 116,  533 => 115,  531 => 114,  525 => 113,  522 => 112,  519 => 111,  516 => 110,  513 => 109,  510 => 108,  507 => 107,  503 => 106,  499 => 102,  495 => 100,  485 => 97,  479 => 96,  468 => 95,  464 => 94,  461 => 93,  458 => 92,  454 => 91,  447 => 76,  438 => 75,  434 => 74,  429 => 79,  427 => 74,  420 => 69,  416 => 68,  411 => 126,  409 => 106,  405 => 104,  402 => 103,  400 => 91,  393 => 87,  388 => 85,  383 => 84,  381 => 83,  377 => 81,  375 => 68,  372 => 67,  368 => 66,  361 => 187,  359 => 144,  352 => 139,  350 => 131,  345 => 128,  343 => 66,  340 => 65,  336 => 64,  329 => 60,  325 => 59,  320 => 191,  318 => 64,  314 => 62,  311 => 59,  307 => 58,  299 => 53,  295 => 52,  291 => 50,  287 => 49,  276 => 48,  271 => 207,  269 => 202,  266 => 201,  264 => 196,  261 => 195,  259 => 194,  256 => 193,  254 => 58,  251 => 57,  249 => 49,  242 => 48,  238 => 47,  234 => 44,  225 => 42,  220 => 41,  216 => 40,  209 => 32,  205 => 31,  198 => 28,  194 => 27,  190 => 25,  181 => 23,  176 => 22,  172 => 21,  165 => 18,  161 => 17,  154 => 15,  145 => 8,  141 => 7,  136 => 209,  134 => 47,  130 => 45,  128 => 40,  125 => 39,  120 => 37,  115 => 36,  113 => 35,  110 => 34,  108 => 31,  105 => 30,  103 => 27,  100 => 26,  98 => 21,  95 => 20,  93 => 17,  88 => 15,  85 => 14,  83 => 7,  76 => 5,  72 => 3,  70 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "@EasyAdmin/layout.html.twig", "C:\\wamp64\\www\\studi-exercices\\myprogress\\vendor\\easycorp\\easyadmin-bundle\\src\\Resources\\views\\layout.html.twig");
    }
}
