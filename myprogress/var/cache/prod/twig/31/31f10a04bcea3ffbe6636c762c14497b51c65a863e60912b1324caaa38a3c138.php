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

/* @EasyAdmin/menu.html.twig */
class __TwigTemplate_7cc97cbdacd9acdc3a3c357e45a58c2de028031856714c2992795db09b9d4f39 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'main_menu_before' => [$this, 'block_main_menu_before'],
            'main_menu' => [$this, 'block_main_menu'],
            'menu_item' => [$this, 'block_menu_item'],
            'menu_subitem' => [$this, 'block_menu_subitem'],
            'main_menu_after' => [$this, 'block_main_menu_after'],
        ];
        $macros["_self"] = $this->macros["_self"] = $this;
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        echo "
";
        // line 15
        $this->displayBlock('main_menu_before', $context, $blocks);
        // line 16
        echo "
<ul class=\"sidebar-menu\" data-widget=\"tree\" data-animation-speed=\"250\">
    ";
        // line 18
        $this->displayBlock('main_menu', $context, $blocks);
        // line 39
        echo "</ul>

";
        // line 41
        $this->displayBlock('main_menu_after', $context, $blocks);
    }

    // line 15
    public function block_main_menu_before($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 18
    public function block_main_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 19
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "mainMenu", [], "any", false, false, false, 19), "items", [], "any", false, false, false, 19));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["menuItem"]) {
            // line 20
            echo "            ";
            $this->displayBlock('menu_item', $context, $blocks);
            // line 37
            echo "        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menuItem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "    ";
    }

    // line 20
    public function block_menu_item($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 21
        echo "                <li class=\"";
        echo ((twig_get_attribute($this->env, $this->source, ($context["menuItem"] ?? null), "isMenuSection", [], "any", false, false, false, 21)) ? ("header") : (""));
        echo " ";
        echo ((twig_get_attribute($this->env, $this->source, ($context["menuItem"] ?? null), "hasSubItems", [], "any", false, false, false, 21)) ? ("treeview") : (""));
        echo " ";
        echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "mainMenu", [], "any", false, false, false, 21), "isSelected", [0 => ($context["menuItem"] ?? null)], "method", false, false, false, 21)) ? ("active") : (""));
        echo " ";
        echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "mainMenu", [], "any", false, false, false, 21), "isExpanded", [0 => ($context["menuItem"] ?? null)], "method", false, false, false, 21)) ? ("active submenu-active") : (""));
        echo "\">
                    ";
        // line 22
        echo twig_call_macro($macros["_self"], "macro_render_menu_item", [($context["menuItem"] ?? null)], 22, $context, $this->getSourceContext());
        echo "

                    ";
        // line 24
        if (twig_get_attribute($this->env, $this->source, ($context["menuItem"] ?? null), "hasSubItems", [], "any", false, false, false, 24)) {
            // line 25
            echo "                        <ul class=\"treeview-menu\">
                            ";
            // line 26
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["menuItem"] ?? null), "subItems", [], "any", false, false, false, 26));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["menuSubItem"]) {
                // line 27
                echo "                                ";
                $this->displayBlock('menu_subitem', $context, $blocks);
                // line 32
                echo "                            ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menuSubItem'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "                        </ul>
                    ";
        }
        // line 35
        echo "                </li>
            ";
    }

    // line 27
    public function block_menu_subitem($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        echo "                                    <li class=\"";
        echo ((twig_get_attribute($this->env, $this->source, ($context["menuSubItem"] ?? null), "isMenuSection", [], "any", false, false, false, 28)) ? ("header") : (""));
        echo " ";
        echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "mainMenu", [], "any", false, false, false, 28), "isSelected", [0 => ($context["menuSubItem"] ?? null)], "method", false, false, false, 28)) ? ("active") : (""));
        echo "\">
                                        ";
        // line 29
        echo twig_call_macro($macros["_self"], "macro_render_menu_item", [($context["menuSubItem"] ?? null)], 29, $context, $this->getSourceContext());
        echo "
                                    </li>
                                ";
    }

    // line 41
    public function block_main_menu_after($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 2
    public function macro_render_menu_item($__item__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "item" => $__item__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 3
            echo "    ";
            if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isMenuSection", [], "any", false, false, false, 3)) {
                // line 4
                echo "        ";
                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "icon", [], "any", false, false, false, 4))) {
                    echo "<i class=\"menu-icon fa-fw ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "icon", [], "any", false, false, false, 4), "html", null, true);
                    echo "\"></i>";
                }
                // line 5
                echo "        <span class=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "cssClass", [], "any", false, false, false, 5), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "label", [], "any", false, false, false, 5), "html", null, true);
                echo "</span>
    ";
            } else {
                // line 7
                echo "        <a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "linkUrl", [], "any", false, false, false, 7), "html", null, true);
                echo "\" class=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "cssClass", [], "any", false, false, false, 7), "html", null, true);
                echo "\" target=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "linkTarget", [], "any", false, false, false, 7), "html", null, true);
                echo "\" rel=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "linkRel", [], "any", false, false, false, 7), "html", null, true);
                echo "\" referrerpolicy=\"origin-when-cross-origin\">
            ";
                // line 8
                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "icon", [], "any", false, false, false, 8))) {
                    echo "<i class=\"menu-icon fa-fw ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "icon", [], "any", false, false, false, 8), "html", null, true);
                    echo "\"></i>";
                }
                // line 9
                echo "            <span>";
                echo twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "label", [], "any", false, false, false, 9);
                echo "</span>
            ";
                // line 10
                if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "hasSubItems", [], "any", false, false, false, 10)) {
                    echo "<i class=\"fa fa-fw fa-angle-right treeview-icon\"></i>";
                }
                // line 11
                echo "        </a>
    ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "@EasyAdmin/menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  260 => 11,  256 => 10,  251 => 9,  245 => 8,  234 => 7,  226 => 5,  219 => 4,  216 => 3,  203 => 2,  197 => 41,  190 => 29,  183 => 28,  179 => 27,  174 => 35,  170 => 33,  156 => 32,  153 => 27,  136 => 26,  133 => 25,  131 => 24,  126 => 22,  115 => 21,  111 => 20,  107 => 38,  93 => 37,  90 => 20,  72 => 19,  68 => 18,  62 => 15,  58 => 41,  54 => 39,  52 => 18,  48 => 16,  46 => 15,  43 => 14,);
    }

    public function getSourceContext()
    {
        return new Source("", "@EasyAdmin/menu.html.twig", "C:\\wamp64\\www\\studi-exercices\\myprogress\\vendor\\easycorp\\easyadmin-bundle\\src\\Resources\\views\\menu.html.twig");
    }
}
