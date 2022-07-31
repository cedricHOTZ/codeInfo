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
class __TwigTemplate_d1e6a5b510822418d442dd9096a440806b17c558e0e8f5f3543317af84ea1357 extends Template
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
            'filters' => [$this, 'block_filters'],
            'global_actions' => [$this, 'block_global_actions'],
            'batch_actions' => [$this, 'block_batch_actions'],
            'main' => [$this, 'block_main'],
            'table_head' => [$this, 'block_table_head'],
            'table_body' => [$this, 'block_table_body'],
            'entity_actions' => [$this, 'block_entity_actions'],
            'table_body_empty' => [$this, 'block_table_body_empty'],
            'table_footer' => [$this, 'block_table_footer'],
            'paginator' => [$this, 'block_paginator'],
            'delete_form' => [$this, 'block_delete_form'],
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
        $context["__internal_5d4fbf18a3390d31c2f1dfd6289f3ce2eda85006185628a168eef743c8d82998"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 5), "translationDomain", [], "any", false, false, false, 5);
        // line 19
        $context["has_batch_actions"] = (1 === twig_compare(twig_length_filter($this->env, ($context["batch_actions"] ?? null)), 0));
        // line 4
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_body_id($context, array $blocks = [])
    {
        $macros = $this->macros;
        (((1 === twig_compare(twig_length_filter($this->env, ($context["entities"] ?? null)), 0))) ? (print (twig_escape_filter($this->env, ("ea-index-" . twig_get_attribute($this->env, $this->source, twig_first($this->env, ($context["entities"] ?? null)), "name", [], "any", false, false, false, 7)), "html", null, true))) : (print ("")));
    }

    // line 8
    public function block_body_class($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, ("ea-index" . (((1 === twig_compare(twig_length_filter($this->env, ($context["entities"] ?? null)), 0))) ? ((" ea-index-" . twig_get_attribute($this->env, $this->source, twig_first($this->env, ($context["entities"] ?? null)), "name", [], "any", false, false, false, 8))) : (""))), "html", null, true);
    }

    // line 10
    public function block_content_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        ob_start(function () { return ''; });
        // line 12
        $context["custom_page_title"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 12), "customPageTitle", [0 => "index"], "method", false, false, false, 12);
        // line 13
        echo "        ";
        echo (((null === ($context["custom_page_title"] ?? null))) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 14
($context["ea"] ?? null), "crud", [], "any", false, false, false, 14), "defaultPageTitle", [0 => "index"], "method", false, false, false, 14), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 14), "translationParameters", [], "any", false, false, false, 14), "EasyAdminBundle")) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(        // line 15
($context["custom_page_title"] ?? null), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 15), "translationParameters", [], "any", false, false, false, 15),         // line 5
($context["__internal_5d4fbf18a3390d31c2f1dfd6289f3ce2eda85006185628a168eef743c8d82998"] ?? null))));
        $___internal_parse_2_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 11
        echo twig_spaceless($___internal_parse_2_);
    }

    // line 20
    public function block_page_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "flashes", [0 => "success"], "method", false, false, false, 21));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 22
            echo "    <div id=\"notyf-message\" class=\"success\">";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "    ";
        if ((1 === twig_compare(twig_length_filter($this->env, ($context["filters"] ?? null)), 0))) {
            // line 25
            echo "        <div class=\"datagrid-filters\">
            ";
            // line 26
            $this->displayBlock('filters', $context, $blocks);
            // line 39
            echo "        </div>
    ";
        }
        // line 41
        echo twig_include($this->env, $context, "composant/flash_messages.html.twig");
        echo "
    ";
        // line 42
        $this->displayBlock('global_actions', $context, $blocks);
        // line 49
        echo "    ";
        $this->displayBlock('batch_actions', $context, $blocks);
    }

    // line 26
    public function block_filters($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 27
        echo "                ";
        $context["applied_filters"] = twig_get_array_keys_filter(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "request", [], "any", false, true, false, 27), "query", [], "any", false, true, false, 27), "all", [], "any", false, true, false, 27), "filters", [], "array", true, true, false, 27)) ? (_twig_default_filter((($__internal_compile_0 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "request", [], "any", false, true, false, 27), "query", [], "any", false, true, false, 27), "all", [], "any", false, true, false, 27)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["filters"] ?? null) : null), [])) : ([])));
        // line 28
        echo "                <div class=\"btn-group action-filters\">
                    <a href=\"#\" data-href=\"";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getAdminUrlGenerator(), "setAction", [0 => "renderFilters"], "method", false, false, false, 29), "includeReferrer", [], "method", false, false, false, 29), "html", null, true);
        echo "\" class=\"btn btn-secondary btn-labeled btn-labeled-right action-filters-button disabled ";
        echo ((($context["applied_filters"] ?? null)) ? ("action-filters-applied") : (""));
        echo "\" data-bs-toggle=\"modal\" data-bs-target=\"#modal-filters\">
                        <i class=\"fa fa-filter fa-fw\"></i> ";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("filter.title", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 30), "translationParameters", [], "any", false, false, false, 30), "EasyAdminBundle"), "html", null, true);
        if (($context["applied_filters"] ?? null)) {
            echo " <span class=\"text-primary\">(";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["applied_filters"] ?? null)), "html", null, true);
            echo ")</span>";
        }
        // line 31
        echo "                    </a>
                    ";
        // line 32
        if (($context["applied_filters"] ?? null)) {
            // line 33
            echo "                        <a href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getAdminUrlGenerator(), "unset", [0 => "filters"], "method", false, false, false, 33), "html", null, true);
            echo "\" class=\"btn btn-secondary action-filters-reset\">
                            <i class=\"fa fa-close\"></i>
                        </a>
                    ";
        }
        // line 37
        echo "                </div>
            ";
    }

    // line 42
    public function block_global_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 43
        echo "        <div class=\"global-actions\">
            ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["global_actions"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
            // line 45
            echo "                ";
            echo twig_include($this->env, $context, twig_get_attribute($this->env, $this->source, $context["action"], "templatePath", [], "any", false, false, false, 45), ["action" => $context["action"]], false);
            echo "
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "        </div>
    ";
    }

    // line 49
    public function block_batch_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 50
        echo "        ";
        if (($context["has_batch_actions"] ?? null)) {
            // line 51
            echo "            <div class=\"batch-actions\" style=\"display: none\">
                ";
            // line 52
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["batch_actions"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                // line 53
                echo "                    ";
                echo twig_include($this->env, $context, twig_get_attribute($this->env, $this->source, $context["action"], "templatePath", [], "any", false, false, false, 53), ["action" => $context["action"]], false);
                echo "
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 55
            echo "            </div>
        ";
        }
        // line 57
        echo "    ";
    }

    // line 60
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 61
        echo "
    ";
        // line 63
        echo "    ";
        $context["sort_field_name"] = twig_first($this->env, twig_get_array_keys_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 63), "get", [0 => "sort"], "method", false, false, false, 63)));
        // line 64
        echo "    ";
        $context["sort_order"] = twig_first($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 64), "get", [0 => "sort"], "method", false, false, false, 64));
        // line 65
        echo "    ";
        $context["some_results_are_hidden"] = false;
        // line 66
        echo "    ";
        $context["has_footer"] = (0 !== twig_compare(twig_length_filter($this->env, ($context["entities"] ?? null)), 0));
        // line 67
        echo "    ";
        $context["has_search"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 67), "isSearchEnabled", [], "any", false, false, false, 67);
        // line 68
        echo "    ";
        $context["has_filters"] = (1 === twig_compare(twig_length_filter($this->env, ($context["filters"] ?? null)), 0));
        // line 69
        echo "    ";
        $context["num_results"] = twig_length_filter($this->env, ($context["entities"] ?? null));
        // line 70
        echo "
    <table class=\"table datagrid ";
        // line 71
        echo ((twig_test_empty(($context["entities"] ?? null))) ? ("datagrid-empty") : (""));
        echo "\">
        ";
        // line 72
        if ((1 === twig_compare(($context["num_results"] ?? null), 0))) {
            // line 73
            echo "            <thead>
            ";
            // line 74
            $this->displayBlock('table_head', $context, $blocks);
            // line 107
            echo "            </thead>
        ";
        }
        // line 109
        echo "
        <tbody>
        ";
        // line 111
        $this->displayBlock('table_body', $context, $blocks);
        // line 194
        echo "        </tbody>

        <tfoot>
        ";
        // line 197
        $this->displayBlock('table_footer', $context, $blocks);
        // line 199
        echo "        </tfoot>
    </table>

    ";
        // line 202
        if ((1 === twig_compare(twig_length_filter($this->env, ($context["entities"] ?? null)), 0))) {
            // line 203
            echo "        <div class=\"content-panel-footer without-padding without-border\">
            ";
            // line 204
            $this->displayBlock('paginator', $context, $blocks);
            // line 207
            echo "        </div>
    ";
        }
        // line 209
        echo "
    ";
        // line 210
        $this->displayBlock('delete_form', $context, $blocks);
        // line 213
        echo "
    ";
        // line 214
        if (($context["has_filters"] ?? null)) {
            // line 215
            echo "        ";
            echo twig_include($this->env, $context, "@EasyAdmin/crud/includes/_filters_modal.html.twig");
            echo "
    ";
        }
        // line 217
        echo "
    ";
        // line 218
        if (($context["has_batch_actions"] ?? null)) {
            // line 219
            echo "        ";
            echo twig_include($this->env, $context, "@EasyAdmin/crud/includes/_batch_action_modal.html.twig", [], false);
            echo "
    ";
        }
        // line 221
        echo "    ";
        echo twig_include($this->env, $context, "_notyf.html.twig");
        echo "
";
    }

    // line 74
    public function block_table_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 75
        echo "                <tr>
                    ";
        // line 76
        if (($context["has_batch_actions"] ?? null)) {
            // line 77
            echo "                        <th>
                            <div class=\"form-check\">
                                <span><input type=\"checkbox\" class=\"form-check-input form-batch-checkbox-all\"></span>
                            </div>
                        </th>
                    ";
        }
        // line 83
        echo "
                    ";
        // line 84
        $context["ea_sort_asc"] = twig_constant("EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Option\\SortOrder::ASC");
        // line 85
        echo "                    ";
        $context["ea_sort_desc"] = twig_constant("EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Option\\SortOrder::DESC");
        // line 86
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((((twig_get_attribute($this->env, $this->source, twig_first($this->env, ($context["entities"] ?? null)), "fields", [], "any", true, true, false, 86) &&  !(null === twig_get_attribute($this->env, $this->source, twig_first($this->env, ($context["entities"] ?? null)), "fields", [], "any", false, false, false, 86)))) ? (twig_get_attribute($this->env, $this->source, twig_first($this->env, ($context["entities"] ?? null)), "fields", [], "any", false, false, false, 86)) : ([])));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 87
            echo "                        ";
            $context["is_sorting_field"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "search", [], "any", false, false, false, 87), "isSortingField", [0 => twig_get_attribute($this->env, $this->source, $context["field"], "property", [], "any", false, false, false, 87)], "method", false, false, false, 87);
            // line 88
            echo "                        ";
            $context["next_sort_direction"] = ((($context["is_sorting_field"] ?? null)) ? ((((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "search", [], "any", false, false, false, 88), "sortDirection", [0 => twig_get_attribute($this->env, $this->source, $context["field"], "property", [], "any", false, false, false, 88)], "method", false, false, false, 88), ($context["ea_sort_desc"] ?? null)))) ? (($context["ea_sort_asc"] ?? null)) : (($context["ea_sort_desc"] ?? null)))) : (($context["ea_sort_desc"] ?? null)));
            // line 89
            echo "                        ";
            $context["column_icon"] = ((($context["is_sorting_field"] ?? null)) ? ((((0 === twig_compare(($context["next_sort_direction"] ?? null), ($context["ea_sort_desc"] ?? null)))) ? ("fa-arrow-up") : ("fa-arrow-down"))) : ("fa-sort"));
            // line 90
            echo "
                        <th class=\"";
            // line 91
            echo ((($context["is_sorting_field"] ?? null)) ? ("sorted") : (""));
            echo " ";
            echo ((twig_get_attribute($this->env, $this->source, $context["field"], "isVirtual", [], "any", false, false, false, 91)) ? ("field-virtual") : (""));
            echo " header-for-";
            echo twig_escape_filter($this->env, twig_join_filter(twig_array_filter($this->env, twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "cssClass", [], "any", false, false, false, 91), " "), function ($__class__) use ($context, $macros) { $context["class"] = $__class__; return (is_string($__internal_compile_1 = ($context["class"] ?? null)) && is_string($__internal_compile_2 = "field-") && ('' === $__internal_compile_2 || 0 === strpos($__internal_compile_1, $__internal_compile_2))); }), ""), "html", null, true);
            echo " text-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "textAlign", [], "any", false, false, false, 91), "html", null, true);
            echo "\" dir=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 91), "textDirection", [], "any", false, false, false, 91), "html", null, true);
            echo "\">
                            ";
            // line 92
            if (twig_get_attribute($this->env, $this->source, $context["field"], "isSortable", [], "any", false, false, false, 92)) {
                // line 93
                echo "                                <a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getAdminUrlGenerator(["page" => 1, "sort" => [twig_get_attribute($this->env, $this->source, $context["field"], "property", [], "any", false, false, false, 93) => ($context["next_sort_direction"] ?? null)]]), "includeReferrer", [], "method", false, false, false, 93), "html", null, true);
                echo "\">
                                    ";
                // line 94
                echo twig_get_attribute($this->env, $this->source, $context["field"], "label", [], "any", false, false, false, 94);
                echo " <i class=\"fa fa-fw ";
                echo twig_escape_filter($this->env, ($context["column_icon"] ?? null), "html", null, true);
                echo "\"></i>
                                </a>
                            ";
            } else {
                // line 97
                echo "                                <span>";
                echo twig_get_attribute($this->env, $this->source, $context["field"], "label", [], "any", false, false, false, 97);
                echo "</span>
                            ";
            }
            // line 99
            echo "                        </th>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 101
        echo "
                    <th ";
        // line 102
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 102), "showEntityActionsAsDropdown", [], "any", false, false, false, 102)) {
            echo "width=\"10px\"";
        }
        echo " dir=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 102), "textDirection", [], "any", false, false, false, 102), "html", null, true);
        echo "\">
                        <span class=\"sr-only\">";
        // line 103
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.entity_actions", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 103), "translationParameters", [], "any", false, false, false, 103), "EasyAdminBundle"), "html", null, true);
        echo "</span>
                    </th>
                </tr>
            ";
    }

    // line 111
    public function block_table_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 112
        echo "            ";
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
            // line 113
            echo "                ";
            if ( !twig_get_attribute($this->env, $this->source, $context["entity"], "isAccessible", [], "any", false, false, false, 113)) {
                // line 114
                echo "                    ";
                $context["some_results_are_hidden"] = true;
                // line 115
                echo "                ";
            } else {
                // line 116
                echo "                    <tr data-id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entity"], "primaryKeyValueAsString", [], "any", false, false, false, 116), "html", null, true);
                echo "\">
                        ";
                // line 117
                if (($context["has_batch_actions"] ?? null)) {
                    // line 118
                    echo "                            <td class=\"batch-actions-selector\">
                                <div class=\"form-check\">
                                    <input type=\"checkbox\" class=\"form-check-input form-batch-checkbox\" value=\"";
                    // line 120
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entity"], "primaryKeyValue", [], "any", false, false, false, 120), "html", null, true);
                    echo "\">
                                </div>
                            </td>
                        ";
                }
                // line 124
                echo "
                        ";
                // line 125
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["entity"], "fields", [], "any", false, false, false, 125));
                foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                    // line 126
                    echo "                            <td data-label=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "label", [], "any", false, false, false, 126), "html_attr");
                    echo "\" class=\"";
                    echo (((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["field"], "property", [], "any", false, false, false, 126), ($context["sort_field_name"] ?? null)))) ? ("sorted") : (""));
                    echo " text-";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "textAlign", [], "any", false, false, false, 126), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "cssClass", [], "any", false, false, false, 126), "html", null, true);
                    echo "\" dir=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 126), "textDirection", [], "any", false, false, false, 126), "html", null, true);
                    echo "\">
                                ";
                    // line 127
                    echo twig_include($this->env, $context, twig_get_attribute($this->env, $this->source, $context["field"], "templatePath", [], "any", false, false, false, 127), ["field" => $context["field"], "entity" => $context["entity"]], false);
                    echo "
                            </td>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 130
                echo "
                        ";
                // line 131
                $this->displayBlock('entity_actions', $context, $blocks);
                // line 160
                echo "                    </tr>

                ";
            }
            // line 163
            echo "            ";
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
            // line 164
            echo "                ";
            $this->displayBlock('table_body_empty', $context, $blocks);
            // line 184
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 185
        echo "
            ";
        // line 186
        if (($context["some_results_are_hidden"] ?? null)) {
            // line 187
            echo "                <tr class=\"datagrid-row-empty\">
                    <td class=\"text-center\" colspan=\"";
            // line 188
            echo twig_escape_filter($this->env, (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_first($this->env, ($context["entities"] ?? null)), "fields", [], "any", false, false, false, 188)) + 1), "html", null, true);
            echo "\">
                        <span class=\"datagrid-row-empty-message\"><i class=\"fa fa-lock mr-1\"></i> ";
            // line 189
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("datagrid.hidden_results", [], "EasyAdminBundle"), "html", null, true);
            echo "</span>
                    </td>
                </tr>
            ";
        }
        // line 193
        echo "        ";
    }

    // line 131
    public function block_entity_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 132
        echo "                            <td class=\"actions ";
        echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 132), "showEntityActionsAsDropdown", [], "any", false, false, false, 132)) ? ("actions-as-dropdown") : (""));
        echo "\">
                                ";
        // line 133
        if ((1 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "actions", [], "any", false, false, false, 133), "count", [], "any", false, false, false, 133), 0))) {
            // line 134
            echo "                                    ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 134), "showEntityActionsAsDropdown", [], "any", false, false, false, 134)) {
                // line 135
                echo "                                        <div class=\"dropdown dropdown-actions\">
                                           
                                                ";
                // line 138
                echo "                                                ";
                // line 139
                echo "                                                ";
                // line 142
                echo "                                          ";
                // line 143
                echo "                                                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "actions", [], "any", false, false, false, 143));
                foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                    // line 144
                    echo "                                                    ";
                    echo twig_include($this->env, $context, twig_get_attribute($this->env, $this->source, $context["action"], "templatePath", [], "any", false, false, false, 144), ["action" => $context["action"], "entity" => ($context["entity"] ?? null), "isIncludedInDropdown" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 144), "showEntityActionsAsDropdown", [], "any", false, false, false, 144)], false);
                    echo "
                                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 146
                echo "                                            ";
                // line 151
                echo "                                        </div>
                                    ";
            } else {
                // line 153
                echo "                                        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "actions", [], "any", false, false, false, 153));
                foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                    // line 154
                    echo "                                            ";
                    echo twig_include($this->env, $context, twig_get_attribute($this->env, $this->source, $context["action"], "templatePath", [], "any", false, false, false, 154), ["action" => $context["action"], "entity" => ($context["entity"] ?? null), "isIncludedInDropdown" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "crud", [], "any", false, false, false, 154), "showEntityActionsAsDropdown", [], "any", false, false, false, 154)], false);
                    echo "
                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 156
                echo "                                    ";
            }
            // line 157
            echo "                                ";
        }
        // line 158
        echo "                            </td>
                        ";
    }

    // line 164
    public function block_table_body_empty($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 165
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 14));
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
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 166
            echo "                        <tr class=\"empty-row\">
                            <td><span></span></td>
                            <td><span></span></td>
                            <td><span></span></td>
                            <td><span></span></td>
                            <td><span></span></td>
                            <td><span></span></td>
                        </tr>

                        ";
            // line 175
            if ((0 === twig_compare(3, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 175)))) {
                // line 176
                echo "                            <tr class=\"no-results\">
                                <td colspan=\"100\">
                                    ";
                // line 178
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("datagrid.no_results", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 178), "translationParameters", [], "any", false, false, false, 178), "EasyAdminBundle"), "html", null, true);
                echo "
                                </td>
                            </tr>
                        ";
            }
            // line 182
            echo "                    ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 183
        echo "                ";
    }

    // line 197
    public function block_table_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 198
        echo "        ";
    }

    // line 204
    public function block_paginator($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 205
        echo "                ";
        echo twig_include($this->env, $context, twig_get_attribute($this->env, $this->source, ($context["ea"] ?? null), "templatePath", [0 => "crud/paginator"], "method", false, false, false, 205), ["render_detailed_pagination" =>  !($context["some_results_are_hidden"] ?? null)]);
        echo "
            ";
    }

    // line 210
    public function block_delete_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 211
        echo "        ";
        echo twig_include($this->env, $context, "@EasyAdmin/crud/includes/_delete_form.html.twig", array(), false);
        echo "
    ";
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
        return array (  734 => 211,  730 => 210,  723 => 205,  719 => 204,  715 => 198,  711 => 197,  707 => 183,  693 => 182,  686 => 178,  682 => 176,  680 => 175,  669 => 166,  651 => 165,  647 => 164,  642 => 158,  639 => 157,  636 => 156,  627 => 154,  622 => 153,  618 => 151,  616 => 146,  607 => 144,  602 => 143,  600 => 142,  598 => 139,  596 => 138,  592 => 135,  589 => 134,  587 => 133,  582 => 132,  578 => 131,  574 => 193,  567 => 189,  563 => 188,  560 => 187,  558 => 186,  555 => 185,  549 => 184,  546 => 164,  533 => 163,  528 => 160,  526 => 131,  523 => 130,  514 => 127,  501 => 126,  497 => 125,  494 => 124,  487 => 120,  483 => 118,  481 => 117,  476 => 116,  473 => 115,  470 => 114,  467 => 113,  448 => 112,  444 => 111,  436 => 103,  428 => 102,  425 => 101,  418 => 99,  412 => 97,  404 => 94,  399 => 93,  397 => 92,  385 => 91,  382 => 90,  379 => 89,  376 => 88,  373 => 87,  368 => 86,  365 => 85,  363 => 84,  360 => 83,  352 => 77,  350 => 76,  347 => 75,  343 => 74,  336 => 221,  330 => 219,  328 => 218,  325 => 217,  319 => 215,  317 => 214,  314 => 213,  312 => 210,  309 => 209,  305 => 207,  303 => 204,  300 => 203,  298 => 202,  293 => 199,  291 => 197,  286 => 194,  284 => 111,  280 => 109,  276 => 107,  274 => 74,  271 => 73,  269 => 72,  265 => 71,  262 => 70,  259 => 69,  256 => 68,  253 => 67,  250 => 66,  247 => 65,  244 => 64,  241 => 63,  238 => 61,  234 => 60,  230 => 57,  226 => 55,  217 => 53,  213 => 52,  210 => 51,  207 => 50,  203 => 49,  198 => 47,  189 => 45,  185 => 44,  182 => 43,  178 => 42,  173 => 37,  165 => 33,  163 => 32,  160 => 31,  153 => 30,  147 => 29,  144 => 28,  141 => 27,  137 => 26,  132 => 49,  130 => 42,  126 => 41,  122 => 39,  120 => 26,  117 => 25,  114 => 24,  105 => 22,  101 => 21,  97 => 20,  93 => 11,  90 => 5,  89 => 15,  88 => 14,  86 => 13,  84 => 12,  82 => 11,  78 => 10,  71 => 8,  64 => 7,  60 => 4,  58 => 19,  56 => 5,  49 => 4,);
    }

    public function getSourceContext()
    {
        return new Source("", "@EasyAdmin/crud/index.html.twig", "/Users/admin/Desktop/codeinfo/templates/bundles/EasyAdminBundle/crud/index.html.twig");
    }
}
