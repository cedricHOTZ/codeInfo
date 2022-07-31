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

/* @EasyAdmin/welcome.html.twig */
class __TwigTemplate_9fce536ba2d8ea9da39673a6044e3b735f29ad01ff0cce4de195608f2ef3639c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content_title' => [$this, 'block_content_title'],
            'main' => [$this, 'block_main'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "@EasyAdmin/page/content.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/welcome.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/welcome.html.twig"));

        $this->parent = $this->loadTemplate("@EasyAdmin/page/content.html.twig", "@EasyAdmin/welcome.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_content_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_title"));

        echo "Welcome to EasyAdmin 3";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 7
        echo "    <style>
        p { max-width: 600px; }
    </style>

   <div class=\"container\">
<div class=\"row\">
<div class=\"col-3  alert-warning\">
<span class=\"display-3\">";
        // line 14
        echo twig_escape_filter($this->env, twig_striptags(twig_get_attribute($this->env, $this->source, (isset($context["countPost"]) || array_key_exists("countPost", $context) ? $context["countPost"] : (function () { throw new RuntimeError('Variable "countPost" does not exist.', 14, $this->source); })()), "value", [], "array", false, false, false, 14)), "html", null, true);
        echo "</span> ";
        if ((1 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["countPost"]) || array_key_exists("countPost", $context) ? $context["countPost"] : (function () { throw new RuntimeError('Variable "countPost" does not exist.', 14, $this->source); })()), "value", [], "array", false, false, false, 14), 1))) {
            echo " Posts ";
        } else {
            echo " Post ";
        }
        // line 15
        echo "</div>
<div class=\"col-3   alert-info\">
<span  class=\"display-3\">";
        // line 17
        echo twig_escape_filter($this->env, twig_striptags(twig_get_attribute($this->env, $this->source, (isset($context["countTag"]) || array_key_exists("countTag", $context) ? $context["countTag"] : (function () { throw new RuntimeError('Variable "countTag" does not exist.', 17, $this->source); })()), "value", [], "array", false, false, false, 17)), "html", null, true);
        echo "</span>";
        if ((1 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["countTag"]) || array_key_exists("countTag", $context) ? $context["countTag"] : (function () { throw new RuntimeError('Variable "countTag" does not exist.', 17, $this->source); })()), "value", [], "array", false, false, false, 17), 1))) {
            echo " Tags ";
        } else {
            echo " Tag ";
        }
        // line 18
        echo "</div>
<div class=\"col-3   alert-danger\">
<span  class=\"display-3\">";
        // line 20
        echo twig_escape_filter($this->env, twig_striptags(twig_get_attribute($this->env, $this->source, (isset($context["countUser"]) || array_key_exists("countUser", $context) ? $context["countUser"] : (function () { throw new RuntimeError('Variable "countUser" does not exist.', 20, $this->source); })()), "value", [], "array", false, false, false, 20)), "html", null, true);
        echo "</span>";
        if ((1 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["countUser"]) || array_key_exists("countUser", $context) ? $context["countUser"] : (function () { throw new RuntimeError('Variable "countUser" does not exist.', 20, $this->source); })()), "value", [], "array", false, false, false, 20), 1))) {
            echo " Utilisateurs ";
        } else {
            echo " Utilisateur ";
        }
        // line 21
        echo "</div>
</div>
   </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/welcome.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 21,  121 => 20,  117 => 18,  109 => 17,  105 => 15,  97 => 14,  88 => 7,  78 => 6,  59 => 4,  36 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# @var ea \\EasyCorp\\Bundle\\EasyAdminBundle\\Context\\AdminContext #}
{% extends '@EasyAdmin/page/content.html.twig' %}

{% block content_title 'Welcome to EasyAdmin 3' %}

{% block main %}
    <style>
        p { max-width: 600px; }
    </style>

   <div class=\"container\">
<div class=\"row\">
<div class=\"col-3  alert-warning\">
<span class=\"display-3\">{{countPost['value']|striptags}}</span> {% if countPost['value'] > 1 %} Posts {% else %} Post {% endif %}
</div>
<div class=\"col-3   alert-info\">
<span  class=\"display-3\">{{countTag['value']|striptags}}</span>{% if countTag['value'] > 1 %} Tags {% else %} Tag {% endif %}
</div>
<div class=\"col-3   alert-danger\">
<span  class=\"display-3\">{{countUser['value']|striptags}}</span>{% if countUser['value'] > 1 %} Utilisateurs {% else %} Utilisateur {% endif %}
</div>
</div>
   </div>
{% endblock %}
", "@EasyAdmin/welcome.html.twig", "/Users/admin/Desktop/codeinfo/templates/bundles/EasyAdminBundle/welcome.html.twig");
    }
}
