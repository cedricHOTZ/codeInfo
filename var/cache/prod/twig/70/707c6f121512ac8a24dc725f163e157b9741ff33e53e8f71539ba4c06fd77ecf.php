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

/* composant/flash_messages.html.twig */
class __TwigTemplate_d797fbf1ce63ac8e8a02b3fc82a1b58a276e8d4a2372e7da18e9b1dff66a6e26 extends Template
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
        // line 1
        echo "
<div class=\"col-12\">
";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 3), "flashBag", [], "any", false, false, false, 3), "get", [0 => "success"], "method", false, false, false, 3));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessages"]) {
            // line 4
            echo "<div class=\"alert alert-success\" role=\"alert\">
 <i class=\"fa fa-clipboard-check\" style=\"\">";
            // line 5
            echo twig_escape_filter($this->env, $context["flashMessages"], "html", null, true);
            echo "</i>
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "
";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 9), "flashBag", [], "any", false, false, false, 9), "get", [0 => "error"], "method", false, false, false, 9));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessages"]) {
            // line 10
            echo "<div class=\"alert alert-danger\" role=\"alert\">
 <i class=\"fa fa-clipboard-check\" style=\"\">";
            // line 11
            echo twig_escape_filter($this->env, $context["flashMessages"], "html", null, true);
            echo "</i>
 </div>
 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo " </div>";
    }

    public function getTemplateName()
    {
        return "composant/flash_messages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 14,  67 => 11,  64 => 10,  60 => 9,  57 => 8,  48 => 5,  45 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "composant/flash_messages.html.twig", "/Users/admin/Desktop/codeinfo/templates/composant/flash_messages.html.twig");
    }
}
