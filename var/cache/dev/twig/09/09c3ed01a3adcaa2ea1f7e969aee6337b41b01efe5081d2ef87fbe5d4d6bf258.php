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
class __TwigTemplate_1fd297ee951a4b9bcaeb143a199f2c4ed4cc4e337e5025e87387d115172d1f09 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "composant/flash_messages.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "composant/flash_messages.html.twig"));

        // line 1
        echo "
<div class=\"col-12\">
";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 3, $this->source); })()), "session", [], "any", false, false, false, 3), "flashBag", [], "any", false, false, false, 3), "get", [0 => "success"], "method", false, false, false, 3));
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
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 9, $this->source); })()), "session", [], "any", false, false, false, 9), "flashBag", [], "any", false, false, false, 9), "get", [0 => "error"], "method", false, false, false, 9));
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
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  82 => 14,  73 => 11,  70 => 10,  66 => 9,  63 => 8,  54 => 5,  51 => 4,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<div class=\"col-12\">
{% for flashMessages in app.session.flashBag.get('success') %}
<div class=\"alert alert-success\" role=\"alert\">
 <i class=\"fa fa-clipboard-check\" style=\"\">{{ flashMessages }}</i>
</div>
{% endfor %}

{% for flashMessages in app.session.flashBag.get('error') %}
<div class=\"alert alert-danger\" role=\"alert\">
 <i class=\"fa fa-clipboard-check\" style=\"\">{{ flashMessages }}</i>
 </div>
 {% endfor %}
 </div>", "composant/flash_messages.html.twig", "/Users/admin/Desktop/codeinfo/templates/composant/flash_messages.html.twig");
    }
}
