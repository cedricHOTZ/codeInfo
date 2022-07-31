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

/* tag/show.html.twig */
class __TwigTemplate_18bdd8e0a7bb1e78de3f728394a5816d514047d335d958b65ebc54d72b7bdea2 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
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
        $this->parent = $this->loadTemplate("base.html.twig", "tag/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["tag"] ?? null), "nom", [], "any", false, false, false, 3), "html", null, true);
        echo " ";
    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "
  <div class=\"row\">
  <div class=\"col\">
 ";
        // line 8
        $this->loadTemplate("post/list.html.twig", "tag/show.html.twig", 8)->display(twig_array_merge($context, ["posts" => twig_get_attribute($this->env, $this->source, ($context["tag"] ?? null), "posts", [], "any", false, false, false, 8)]));
        // line 9
        echo "  <div>
  
  </div>
  </div>
  </div>
  
  
  
  
  ";
    }

    public function getTemplateName()
    {
        return "tag/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 9,  64 => 8,  59 => 5,  55 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "tag/show.html.twig", "/Users/admin/Desktop/codeinfo/templates/tag/show.html.twig");
    }
}
