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

/* @EasyAdmin/crud/index.html.twig */
class __TwigTemplate_9514fa301099123b778d6762d033047c107f54ca6d407f78ef9460f43e89f34e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body_id' => [$this, 'block_body_id'],
            'body_class' => [$this, 'block_body_class'],
            'content_title' => [$this, 'block_content_title'],
            'page_actions' => [$this, 'block_page_actions'],
            'global_actions' => [$this, 'block_global_actions'],
            'content_header' => [$this, 'block_content_header'],
            'main' => [$this, 'block_main'],
            'search' => [$this, 'block_search'],
            'search_form' => [$this, 'block_search_form'],
            'filters' => [$this, 'block_filters'],
            'table_head' => [$this, 'block_table_head'],
            'table_body' => [$this, 'block_table_body'],
            'entity_actions' => [$this, 'block_entity_actions'],
            'paginator' => [$this, 'block_paginator'],
            'delete_form' => [$this, 'block_delete_form'],
            'body_javascript' => [$this, 'block_body_javascript'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 4
        return $this->loadTemplate(twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "templatePath", [0 => "layout"], "method", false, false, false, 4), "@EasyAdmin/crud/index.html.twig", 4);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        $context["__internal_5cab762b383d6922b6c8ab1b7df36684894576c1967aa7d332bdc183dc261d19"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 5), "translationDomain", [], "any", false, false, false, 5);
        // line 8
        $context["has_batch_actions"] = ((false && array_key_exists("batch_form", $context)) && (1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 8), "actions", [], "any", false, false, false, 8), "batchActions", [], "any", false, false, false, 8)), 0)));
        // line 4
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 10
    public function block_body_id($context, array $blocks = [])
    {
        $macros = $this->macros;
        (((1 === twig_compare(twig_length_filter($this->env, ($context["entities"] ?? null)), 0))) ? (print (twig_escape_filter($this->env, ("ea-index-" . twig_get_attribute($this->env, $this->source, twig_first($this->env, ($context["entities"] ?? null)), "name", [], "any", false, false, false, 10)), "html", null, true))) : (print ("")));
    }

    // line 11
    public function block_body_class($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, ("index" . (((1 === twig_compare(twig_length_filter($this->env, ($context["entities"] ?? null)), 0))) ? ((" index-" . twig_get_attribute($this->env, $this->source, twig_first($this->env, ($context["entities"] ?? null)), "name", [], "any", false, false, false, 11))) : (""))), "html", null, true);
    }

    // line 13
    public function block_content_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        ob_start(function () { return ''; });
        // line 15
        $context["default_title"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 15), "defaultPageTitle", [0 => "index"], "method", false, false, false, 15), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 15), "translationParameters", [], "any", false, false, false, 15), "EasyAdminBundle");
        // line 16
        echo "        ";
        echo (((null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 16), "customPageTitle", [], "any", false, false, false, 16))) ? (($context["default_title"] ?? null)) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 16), "customPageTitle", [0 => "index"], "method", false, false, false, 16), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 16), "translationParameters", [], "any", false, false, false, 16),         // line 5
($context["__internal_5cab762b383d6922b6c8ab1b7df36684894576c1967aa7d332bdc183dc261d19"] ?? null))));
        $___internal_18dce35d2490b852ba05fb2eac964fb521699414c1802840fc51d5fb5a4db508_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 14
        echo twig_spaceless($___internal_18dce35d2490b852ba05fb2eac964fb521699414c1802840fc51d5fb5a4db508_);
    }

    // line 20
    public function block_page_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 21
        echo "    ";
        $this->displayBlock('global_actions', $context, $blocks);
    }

    public function block_global_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 22
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["global_actions"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
            // line 23
            echo "            ";
            echo twig_include($this->env, $context, twig_get_attribute($this->env, $this->source, $context["action"], "templatePath", [], "any", false, false, false, 23), ["action" => $context["action"]], false);
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "    ";
    }

    // line 28
    public function block_content_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 29
        echo "    ";
        $this->displayParentBlock("content_header", $context, $blocks);
        echo "

    ";
    }

    // line 42
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 43
        echo "    ";
        // line 44
        echo "    ";
        $context["sort_field_name"] = twig_first($this->env, twig_get_array_keys_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 44), "get", [0 => "sort"], "method", false, false, false, 44)));
        // line 45
        echo "    ";
        $context["sort_order"] = twig_first($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 45), "get", [0 => "sort"], "method", false, false, false, 45));
        // line 46
        echo "    ";
        $context["some_results_are_hidden"] = false;
        // line 47
        echo "    ";
        $context["has_footer"] = (0 !== twig_compare(twig_length_filter($this->env, ($context["entities"] ?? null)), 0));
        // line 48
        echo "    ";
        $context["has_search"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 48), "isSearchEnabled", [], "any", false, false, false, 48);
        // line 49
        echo "    ";
        $context["has_filters"] = (1 === twig_compare(twig_length_filter($this->env, ($context["filters"] ?? null)), 0));
        // line 50
        echo "    ";
        $context["has_datagrid_tools"] = (($context["has_search"] ?? null) || ($context["has_filters"] ?? null));
        // line 51
        echo "
    ";
        // line 52
        if (($context["has_datagrid_tools"] ?? null)) {
            // line 53
            echo "        <div class=\"datagrid-header-tools\">
            <div class=\"datagrid-search\">
                ";
            // line 55
            $this->displayBlock('search', $context, $blocks);
            // line 87
            echo "            </div>

            <div class=\"datagrid-filters\">
                ";
            // line 90
            $this->displayBlock('filters', $context, $blocks);
            // line 105
            echo "            </div>
        </div>
    ";
        }
        // line 108
        echo "
    <div class=\"content-panel\">
        <div class=\"content-panel-body with-rounded-top with-min-h-250 without-padding ";
        // line 110
        echo (( !($context["has_footer"] ?? null)) ? ("without-footer") : (""));
        echo "\">
            <table class=\"table datagrid with-rounded-top ";
        // line 111
        echo (( !($context["has_footer"] ?? null)) ? ("with-rounded-bottom") : (""));
        echo "\">
                <thead>
                ";
        // line 113
        $this->displayBlock('table_head', $context, $blocks);
        // line 142
        echo "                </thead>

                <tbody>
                ";
        // line 145
        $this->displayBlock('table_body', $context, $blocks);
        // line 201
        echo "                </tbody>
            </table>
        </div>

        ";
        // line 205
        if ((1 === twig_compare(twig_length_filter($this->env, ($context["entities"] ?? null)), 0))) {
            // line 206
            echo "            <div class=\"content-panel-footer without-padding without-border\">
                ";
            // line 207
            $this->displayBlock('paginator', $context, $blocks);
            // line 210
            echo "            </div>
        ";
        }
        // line 212
        echo "    </div>

    ";
        // line 214
        $this->displayBlock('delete_form', $context, $blocks);
        // line 217
        echo "
    ";
        // line 218
        if ((1 === twig_compare(twig_length_filter($this->env, ($context["filters"] ?? null)), 0))) {
            // line 219
            echo "        ";
            echo twig_include($this->env, $context, "@EasyAdmin/crud/includes/_filters_modal.html.twig");
            echo "
    ";
        }
    }

    // line 55
    public function block_search($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 56
        echo "                    ";
        if (($context["has_search"] ?? null)) {
            // line 57
            echo "                        <div class=\"form-action form-action-search\">
                            <form method=\"get\">
                                ";
            // line 59
            $this->displayBlock('search_form', $context, $blocks);
            // line 83
            echo "                            </form>
                        </div>
                    ";
        }
        // line 86
        echo "                ";
    }

    // line 59
    public function block_search_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 60
        echo "                                    ";
        // line 61
        echo "                                    ";
        $context["query_parameters"] = twig_array_merge(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "request", [], "any", false, false, false, 61), "query", [], "any", false, false, false, 61), "all", [], "any", false, false, false, 61), ["referrer" => null, "page" => 1]);
        // line 64
        echo "
                                    ";
        // line 67
        echo "                                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->flattenArray(($context["query_parameters"] ?? null)));
        foreach ($context['_seq'] as $context["paramName"] => $context["paramValue"]) {
            // line 68
            echo "                                        <input type=\"hidden\" name=\"";
            echo twig_escape_filter($this->env, $context["paramName"], "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $context["paramValue"], "html", null, true);
            echo "\">
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['paramName'], $context['paramValue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "
                                    <div class=\"form-group\">
                                        <div class=\"form-widget\">
                                            <input class=\"form-control\" type=\"search\" name=\"query\" value=\"";
        // line 73
        (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, true, false, 73), "get", [0 => "query"], "method", true, true, false, 73) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, true, false, 73), "get", [0 => "query"], "method", false, false, false, 73)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, true, false, 73), "get", [0 => "query"], "method", false, false, false, 73), "html", null, true))) : (print ("")));
        echo "\" placeholder=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.search", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 73), "translationParameters", [], "any", false, false, false, 73), "EasyAdminBundle"), "html", null, true);
        echo "\">

                                            ";
        // line 75
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 75), "get", [0 => "query"], "method", false, false, false, 75)) {
            // line 76
            echo "                                                <a href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getAdminUrlGenerator(), "unset", [0 => "query"], "method", false, false, false, 76), "html", null, true);
            echo "\" class=\"action-search-reset\">
                                                    <i class=\"fas fa-times-circle\"></i>
                                                </a>
                                            ";
        }
        // line 80
        echo "                                        </div>
                                    </div>
                                ";
    }

    // line 90
    public function block_filters($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 91
        echo "                    ";
        if ((1 === twig_compare(twig_length_filter($this->env, ($context["filters"] ?? null)), 0))) {
            // line 92
            echo "                        ";
            $context["applied_filters"] = twig_get_array_keys_filter(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "request", [], "any", false, true, false, 92), "query", [], "any", false, true, false, 92), "all", [], "any", false, true, false, 92), "filters", [], "array", true, true, false, 92)) ? (_twig_default_filter((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "request", [], "any", false, true, false, 92), "query", [], "any", false, true, false, 92), "all", [], "any", false, true, false, 92)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["filters"] ?? null) : null), [])) : ([])));
            // line 93
            echo "                        <div class=\"btn-group action-filters\">
                            <a href=\"";
            // line 94
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getAdminUrlGenerator(), "setAction", [0 => "renderFilters"], "method", false, false, false, 94), "includeReferrer", [], "method", false, false, false, 94), "html", null, true);
            echo "\" class=\"btn btn-secondary btn-labeled btn-labeled-right action-filters-button ";
            echo ((($context["applied_filters"] ?? null)) ? ("action-filters-applied") : (""));
            echo "\" data-modal=\"#modal-filters\">
                                <i class=\"fa fa-filter fa-fw\"></i> ";
            // line 95
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("filter.title", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 95), "translationParameters", [], "any", false, false, false, 95), "EasyAdminBundle"), "html", null, true);
            if (($context["applied_filters"] ?? null)) {
                echo " <span class=\"text-primary\">(";
                echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["applied_filters"] ?? null)), "html", null, true);
                echo ")</span>";
            }
            // line 96
            echo "                            </a>
                            ";
            // line 97
            if (($context["applied_filters"] ?? null)) {
                // line 98
                echo "                                <a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getAdminUrlGenerator(), "unset", [0 => "filters"], "method", false, false, false, 98), "html", null, true);
                echo "\" class=\"btn btn-secondary action-filters-reset\">
                                    <i class=\"fa fa-close\"></i>
                                </a>
                            ";
            }
            // line 102
            echo "                        </div>
                    ";
        }
        // line 104
        echo "                ";
    }

    // line 113
    public function block_table_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 114
        echo "                    <tr>
                        ";
        // line 115
        if (($context["has_batch_actions"] ?? null)) {
            // line 116
            echo "                            <th width=\"1px\"><span><input type=\"checkbox\" class=\"form-batch-checkbox-all\"></span></th>
                        ";
        }
        // line 118
        echo "
                        ";
        // line 119
        $context["ea_sort_asc"] = twig_constant("EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Option\\SortOrder::ASC");
        // line 120
        echo "                        ";
        $context["ea_sort_desc"] = twig_constant("EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Option\\SortOrder::DESC");
        // line 121
        echo "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((((twig_get_attribute($this->env, $this->source, twig_first($this->env, ($context["entities"] ?? null)), "fields", [], "any", true, true, false, 121) &&  !(null === twig_get_attribute($this->env, $this->source, twig_first($this->env, ($context["entities"] ?? null)), "fields", [], "any", false, false, false, 121)))) ? (twig_get_attribute($this->env, $this->source, twig_first($this->env, ($context["entities"] ?? null)), "fields", [], "any", false, false, false, 121)) : ([])));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 122
            echo "                            ";
            $context["is_sorting_field"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "search", [], "any", false, false, false, 122), "isSortingField", [0 => twig_get_attribute($this->env, $this->source, $context["field"], "property", [], "any", false, false, false, 122)], "method", false, false, false, 122);
            // line 123
            echo "                            ";
            $context["next_sort_direction"] = ((($context["is_sorting_field"] ?? null)) ? ((((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "search", [], "any", false, false, false, 123), "sortDirection", [0 => twig_get_attribute($this->env, $this->source, $context["field"], "property", [], "any", false, false, false, 123)], "method", false, false, false, 123), ($context["ea_sort_desc"] ?? null)))) ? (($context["ea_sort_asc"] ?? null)) : (($context["ea_sort_desc"] ?? null)))) : (($context["ea_sort_desc"] ?? null)));
            // line 124
            echo "                            ";
            $context["column_icon"] = ((($context["is_sorting_field"] ?? null)) ? ((((0 === twig_compare(($context["next_sort_direction"] ?? null), ($context["ea_sort_desc"] ?? null)))) ? ("fa-arrow-up") : ("fa-arrow-down"))) : ("fa-sort"));
            // line 125
            echo "
                            <th class=\"";
            // line 126
            echo ((($context["is_sorting_field"] ?? null)) ? ("sorted") : (""));
            echo " ";
            echo ((twig_get_attribute($this->env, $this->source, $context["field"], "isVirtual", [], "any", false, false, false, 126)) ? ("field-virtual") : (""));
            echo " text-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "textAlign", [], "any", false, false, false, 126), "html", null, true);
            echo "\" dir=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 126), "textDirection", [], "any", false, false, false, 126), "html", null, true);
            echo "\">
                                ";
            // line 127
            if (twig_get_attribute($this->env, $this->source, $context["field"], "isSortable", [], "any", false, false, false, 127)) {
                // line 128
                echo "                                    <a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getAdminUrlGenerator(["page" => 1, "sort" => [twig_get_attribute($this->env, $this->source, $context["field"], "property", [], "any", false, false, false, 128) => ($context["next_sort_direction"] ?? null)]]), "includeReferrer", [], "method", false, false, false, 128), "html", null, true);
                echo "\">
                                        ";
                // line 129
                echo twig_get_attribute($this->env, $this->source, $context["field"], "label", [], "any", false, false, false, 129);
                echo " <i class=\"fa fa-fw ";
                echo twig_escape_filter($this->env, ($context["column_icon"] ?? null), "html", null, true);
                echo "\"></i>
                                    </a>
                                ";
            } else {
                // line 132
                echo "                                    <span>";
                echo twig_get_attribute($this->env, $this->source, $context["field"], "label", [], "any", false, false, false, 132);
                echo "</span>
                                ";
            }
            // line 134
            echo "                            </th>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 136
        echo "
                        <th ";
        // line 137
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 137), "showEntityActionsAsDropdown", [], "any", false, false, false, 137)) {
            echo "width=\"10px\"";
        }
        echo " dir=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 137), "textDirection", [], "any", false, false, false, 137), "html", null, true);
        echo "\">
                            <span class=\"sr-only\">";
        // line 138
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.entity_actions", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 138), "translationParameters", [], "any", false, false, false, 138), "EasyAdminBundle"), "html", null, true);
        echo "</span>
                        </th>
                    </tr>
                ";
    }

    // line 145
    public function block_table_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 146
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["entities"] ?? null));
        $context['_iterated'] = false;
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
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 147
            echo "                        ";
            if ( !twig_get_attribute($this->env, $this->source, $context["entity"], "isAccessible", [], "any", false, false, false, 147)) {
                // line 148
                echo "                            ";
                $context["some_results_are_hidden"] = true;
                // line 149
                echo "                        ";
            } else {
                // line 150
                echo "                            <tr data-id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entity"], "primaryKeyValueAsString", [], "any", false, false, false, 150), "html", null, true);
                echo "\">
                                ";
                // line 151
                if (($context["has_batch_actions"] ?? null)) {
                    // line 152
                    echo "                                    <td><input type=\"checkbox\" class=\"form-batch-checkbox\" value=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entity"], "primaryKeyValue", [], "any", false, false, false, 152), "html", null, true);
                    echo "\"></td>
                                ";
                }
                // line 154
                echo "
                                ";
                // line 155
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["entity"], "fields", [], "any", false, false, false, 155));
                foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                    // line 156
                    echo "                                    <td class=\"";
                    echo (((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["field"], "property", [], "any", false, false, false, 156), ($context["sort_field_name"] ?? null)))) ? ("sorted") : (""));
                    echo " text-";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "textAlign", [], "any", false, false, false, 156), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "cssClass", [], "any", false, false, false, 156), "html", null, true);
                    echo "\" dir=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 156), "textDirection", [], "any", false, false, false, 156), "html", null, true);
                    echo "\">
                                        ";
                    // line 157
                    echo twig_include($this->env, $context, twig_get_attribute($this->env, $this->source, $context["field"], "templatePath", [], "any", false, false, false, 157), ["field" => $context["field"], "entity" => $context["entity"]], false);
                    echo "
                                    </td>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 160
                echo "
                                ";
                // line 161
                $this->displayBlock('entity_actions', $context, $blocks);
                // line 182
                echo "                            </tr>

                        ";
            }
            // line 185
            echo "                    ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 186
            echo "                        <tr>
                            <td class=\"no-results\" colspan=\"100\">
                                ";
            // line 188
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("datagrid.no_results", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 188), "translationParameters", [], "any", false, false, false, 188), "EasyAdminBundle"), "html", null, true);
            echo "
                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 192
        echo "
                    ";
        // line 193
        if (($context["some_results_are_hidden"] ?? null)) {
            // line 194
            echo "                        <tr class=\"datagrid-row-empty\">
                            <td class=\"text-center\" colspan=\"";
            // line 195
            echo twig_escape_filter($this->env, (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_first($this->env, ($context["entities"] ?? null)), "fields", [], "any", false, false, false, 195)) + 1), "html", null, true);
            echo "\">
                                <span class=\"datagrid-row-empty-message\"><i class=\"fa fa-lock mr-1\"></i> ";
            // line 196
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("datagrid.hidden_results", [], "EasyAdminBundle"), "html", null, true);
            echo "</span>
                            </td>
                        </tr>
                    ";
        }
        // line 200
        echo "                ";
    }

    // line 161
    public function block_entity_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 162
        echo "                                    <td class=\"actions\">
                                        ";
        // line 163
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 163), "showEntityActionsAsDropdown", [], "any", false, false, false, 163)) {
            // line 164
            echo "                                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "actions", [], "any", false, false, false, 164));
            foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                // line 165
                echo "                                                ";
                echo twig_include($this->env, $context, twig_get_attribute($this->env, $this->source, $context["action"], "templatePath", [], "any", false, false, false, 165), ["action" => $context["action"], "entity" => ($context["entity"] ?? null), "isIncludedInDropdown" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 165), "showEntityActionsAsDropdown", [], "any", false, false, false, 165)], false);
                echo "
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 167
            echo "                                        ";
        } else {
            // line 168
            echo "                                            <div class=\"dropdown dropdown-actions\">
                                                <a class=\"dropdown-toggle btn btn-secondary btn-sm\" href=\"#\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                                    <i class=\"fa fa-fw fa-ellipsis-h\"></i>
                                                </a>

                                                <div class=\"dropdown-menu dropdown-menu-right\">
                                                    ";
            // line 174
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "actions", [], "any", false, false, false, 174));
            foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                // line 175
                echo "                                                        ";
                echo twig_include($this->env, $context, twig_get_attribute($this->env, $this->source, $context["action"], "templatePath", [], "any", false, false, false, 175), ["action" => $context["action"], "isIncludedInDropdown" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 175), "showEntityActionsAsDropdown", [], "any", false, false, false, 175)], false);
                echo "
                                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 177
            echo "                                                </div>
                                            </div>
                                        ";
        }
        // line 180
        echo "                                    </td>
                                ";
    }

    // line 207
    public function block_paginator($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 208
        echo "                    ";
        echo twig_include($this->env, $context, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "templatePath", [0 => "crud/paginator"], "method", false, false, false, 208));
        echo "
                ";
    }

    // line 214
    public function block_delete_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 215
        echo "        ";
        echo twig_include($this->env, $context, "@EasyAdmin/crud/includes/_delete_form.html.twig", array(), false);
        echo "
    ";
    }

    // line 223
    public function block_body_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 224
        echo "    ";
        $this->displayParentBlock("body_javascript", $context, $blocks);
        echo "

    <script type=\"text/javascript\">
        \$(function() {
            const customSwitches = document.querySelectorAll('td.field-boolean .custom-control.custom-switch input[type=\"checkbox\"]');
            for (i = 0; i < customSwitches.length; i++) {
                customSwitches[i].addEventListener('change', function () {
                    const customSwitch = this;
                    const newValue = this.checked;
                    const oldValue = !newValue;

                    const toggleUrl = this.getAttribute('data-toggle-url') + \"&newValue=\" + newValue.toString();
                    let toggleRequest = \$.ajax({ type: \"GET\", url: toggleUrl, data: {} });

                    toggleRequest.done(function(result) {});

                    toggleRequest.fail(function() {
                        // in case of error, restore the original value and disable the toggle
                        customSwitch.checked = oldValue;
                        customSwitch.disabled = true;
                        customSwitch.closest('.custom-switch').classList.add('disabled');
                    });
                });
            }

            \$('.action-delete').on('click', function(e) {
                e.preventDefault();
                const formAction = \$(this).attr('formaction');

                \$('#modal-delete').modal({ backdrop: true, keyboard: true })
                    .off('click', '#modal-delete-button')
                    .on('click', '#modal-delete-button', function () {
                        let deleteForm = \$('#delete-form');
                        deleteForm.attr('action', formAction);
                        deleteForm.submit();
                    });
            });

            ";
        // line 262
        if ((1 === twig_compare(twig_length_filter($this->env, ($context["filters"] ?? null)), 0))) {
            // line 263
            echo "            // HTML5 specifies that a <script> tag inserted with innerHTML should not execute
            // https://developer.mozilla.org/en-US/docs/Web/API/Element/innerHTML#Security_considerations
            // That's why we can't use just 'innerHTML'. See https://stackoverflow.com/a/47614491/2804294
            let setInnerHTML = function(element, htmlContent) {
                element.innerHTML = htmlContent;
                Array.from(element.querySelectorAll('script')).forEach(oldScript => {
                    const newScript = document.createElement('script');
                    Array.from(oldScript.attributes)
                        .forEach(attr => newScript.setAttribute(attr.name, attr.value));
                    newScript.appendChild(document.createTextNode(oldScript.innerHTML));
                    oldScript.parentNode.replaceChild(newScript, oldScript);
                });
            };

            document.querySelector('.action-filters-button').addEventListener('click', function(event) {
                let filterButton = event.currentTarget;
                let filterModal = document.querySelector(filterButton.dataset.modal);
                let filterModalBody = filterModal.querySelector('.modal-body');

                \$(filterModal).modal({ backdrop: true, keyboard: true });
                filterModalBody.innerHTML = '<div class=\"fa-3x px-3 py-3 text-muted text-center\"><i class=\"fas fa-circle-notch fa-spin\"></i></div>';

                \$.get(filterButton.getAttribute('href'), function (response) {
                    setInnerHTML(filterModalBody, response);
                });

                event.preventDefault();
                event.stopPropagation();
            });
            ";
        }
        // line 293
        echo "

            ";
        // line 295
        if (($context["has_batch_actions"] ?? null)) {
            // line 296
            echo "            const titleContent = \$('.content-header-title > .title').html();
            \$(document).on('click', '.deselect-batch-button', function () {
                \$(this).closest('.content').find(':checkbox.form-batch-checkbox-all').prop('checked', false).trigger('change');
            });
            \$(document).on('change', '.form-batch-checkbox-all', function () {
                \$(this).closest('.content').find(':checkbox.form-batch-checkbox').prop('checked', \$(this).prop('checked')).trigger('change');
            });
            \$(document).on('change', '.form-batch-checkbox', function () {
                const \$content = \$(this).closest('.content');
                let \$input = \$content.find(':hidden#batch_form_ids');
                let ids = \$input.val() ? \$input.val().split(',') : [];
                const id = \$(this).val();

                if (\$(this).prop('checked')) {
                    if (-1 === ids.indexOf(id)) {
                        ids.push(id);
                    }
                } else {
                    ids = ids.filter(function(value) { return value !== id });
                    \$content.find(':checkbox.form-batch-checkbox-all').prop('checked', false);
                }

                if (0 === ids.length) {
                    \$content.find('.global-actions').show();
                    \$content.find('.batch-actions').hide();
                    \$content.find('table').removeClass('table-batch');
                } else {
                    \$content.find('.batch-actions').show();
                    \$content.find('.global-actions').hide();
                    \$content.find('table').addClass('table-batch');
                }

                \$input.val(ids.join(','));
                \$content.find('.content-header-title > .title').html(0 === ids.length ? titleContent : '');
            });

            \$('button[name=\"batch_form[name]\"].ask-confirm-batch-button').on('click', function (event) {
                event.preventDefault();
                event.stopPropagation();
                let \$button = \$(this);

                \$('#modal-batch-action').modal({ backdrop : true, keyboard : true })
                    .off('click', '#modal-batch-action-button')
                    .on('click', '#modal-batch-action-button', function () {
                        \$button.unbind('click');
                        \$button.trigger('click');
                    });
            });
            ";
        }
        // line 345
        echo "        });
    </script>

    ";
        // line 348
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 348), "get", [0 => "query"], "method", false, false, false, 348))) {
            // line 349
            echo "        <script type=\"text/javascript\">
            const search_query = \"";
            // line 350
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "search", [], "any", false, true, false, 350), "query", [], "any", true, true, false, 350)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "search", [], "any", false, true, false, 350), "query", [], "any", false, false, false, 350), "")) : ("")), "js"), "html", null, true);
            echo "\";
            // the original query is prepended to allow matching exact phrases in addition to single words
            \$('#main').find('table tbody td:not(.actions)').highlight(\$.merge([search_query], search_query.split(' ')));
        </script>
    ";
        }
    }

    public function getTemplateName()
    {
        return "@EasyAdmin/crud/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  824 => 350,  821 => 349,  819 => 348,  814 => 345,  763 => 296,  761 => 295,  757 => 293,  725 => 263,  723 => 262,  681 => 224,  677 => 223,  670 => 215,  666 => 214,  659 => 208,  655 => 207,  650 => 180,  645 => 177,  636 => 175,  632 => 174,  624 => 168,  621 => 167,  612 => 165,  607 => 164,  605 => 163,  602 => 162,  598 => 161,  594 => 200,  587 => 196,  583 => 195,  580 => 194,  578 => 193,  575 => 192,  565 => 188,  561 => 186,  548 => 185,  543 => 182,  541 => 161,  538 => 160,  529 => 157,  518 => 156,  514 => 155,  511 => 154,  505 => 152,  503 => 151,  498 => 150,  495 => 149,  492 => 148,  489 => 147,  470 => 146,  466 => 145,  458 => 138,  450 => 137,  447 => 136,  440 => 134,  434 => 132,  426 => 129,  421 => 128,  419 => 127,  409 => 126,  406 => 125,  403 => 124,  400 => 123,  397 => 122,  392 => 121,  389 => 120,  387 => 119,  384 => 118,  380 => 116,  378 => 115,  375 => 114,  371 => 113,  367 => 104,  363 => 102,  355 => 98,  353 => 97,  350 => 96,  343 => 95,  337 => 94,  334 => 93,  331 => 92,  328 => 91,  324 => 90,  318 => 80,  310 => 76,  308 => 75,  301 => 73,  296 => 70,  285 => 68,  280 => 67,  277 => 64,  274 => 61,  272 => 60,  268 => 59,  264 => 86,  259 => 83,  257 => 59,  253 => 57,  250 => 56,  246 => 55,  238 => 219,  236 => 218,  233 => 217,  231 => 214,  227 => 212,  223 => 210,  221 => 207,  218 => 206,  216 => 205,  210 => 201,  208 => 145,  203 => 142,  201 => 113,  196 => 111,  192 => 110,  188 => 108,  183 => 105,  181 => 90,  176 => 87,  174 => 55,  170 => 53,  168 => 52,  165 => 51,  162 => 50,  159 => 49,  156 => 48,  153 => 47,  150 => 46,  147 => 45,  144 => 44,  142 => 43,  138 => 42,  130 => 29,  126 => 28,  122 => 25,  113 => 23,  108 => 22,  100 => 21,  96 => 20,  92 => 14,  89 => 5,  87 => 16,  85 => 15,  83 => 14,  79 => 13,  72 => 11,  65 => 10,  61 => 4,  59 => 8,  57 => 5,  50 => 4,);
    }

    public function getSourceContext()
    {
        return new Source("", "@EasyAdmin/crud/index.html.twig", "C:\\wamp64\\www\\studi-exercices\\myprogress\\vendor\\easycorp\\easyadmin-bundle\\src\\Resources\\views\\crud\\index.html.twig");
    }
}
