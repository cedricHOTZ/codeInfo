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
class __TwigTemplate_b7fe28bec94662f8741851fbaacc284c364b3b0953b3f32d2344068af3ce711b extends Template
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
        $this->parent = $this->loadTemplate("@EasyAdmin/page/content.html.twig", "@EasyAdmin/welcome.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_content_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Welcome to EasyAdmin 3";
    }

    // line 6
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "    <style>
        p { max-width: 600px; }
    </style>

   <div class=\"container\">
<div class=\"row\">
<div class=\"col-3  alert-warning\">
<span class=\"display-3\">";
        // line 14
        echo twig_escape_filter($this->env, twig_striptags((($__internal_compile_0 = ($context["countPost"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["value"] ?? null) : null)), "html", null, true);
        echo "</span> ";
        if ((1 === twig_compare((($__internal_compile_1 = ($context["countPost"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["value"] ?? null) : null), 1))) {
            echo " Posts ";
        } else {
            echo " Post ";
        }
        // line 15
        echo "</div>
<div class=\"col-3   alert-info\">
<span  class=\"display-3\">";
        // line 17
        echo twig_escape_filter($this->env, twig_striptags((($__internal_compile_2 = ($context["countTag"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["value"] ?? null) : null)), "html", null, true);
        echo "</span>";
        if ((1 === twig_compare((($__internal_compile_3 = ($context["countTag"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["value"] ?? null) : null), 1))) {
            echo " Tags ";
        } else {
            echo " Tag ";
        }
        // line 18
        echo "</div>
<div class=\"col-3   alert-danger\">
<span  class=\"display-3\">";
        // line 20
        echo twig_escape_filter($this->env, twig_striptags((($__internal_compile_4 = ($context["countUser"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["value"] ?? null) : null)), "html", null, true);
        echo "</span>";
        if ((1 === twig_compare((($__internal_compile_5 = ($context["countUser"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["value"] ?? null) : null), 1))) {
            echo " Utilisateurs ";
        } else {
            echo " Utilisateur ";
        }
        // line 21
        echo "</div>
</div>
   </div>
";
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
        return array (  99 => 21,  91 => 20,  87 => 18,  79 => 17,  75 => 15,  67 => 14,  58 => 7,  54 => 6,  47 => 4,  36 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "@EasyAdmin/welcome.html.twig", "/Users/admin/Desktop/codeinfo/templates/bundles/EasyAdminBundle/welcome.html.twig");
    }
}
