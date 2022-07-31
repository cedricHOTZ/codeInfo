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

/* post/item.html.twig */
class __TwigTemplate_635a089b5c63151b264af77b35e1e3e75ea98a0ee15ab4b659c96c3b6415c5a7 extends Template
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

<div class=\"album py-5 bg-light\">
  

      <div class=\"row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3\">
    
        <div class=\"col-md-2\">
          
          <div class=\"card shadow-sm\">
           
            <img src=\"";
        // line 12
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "image", [], "any", false, false, false, 12)) ? ($this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter($this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset(($context["posts"] ?? null), "imageFile"), "square_thumbnail_medium")) : ($this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/images/posts/header.jpg"), "square_thumbnail_medium"))), "html", null, true);
        echo "\" class=\"card-img-top\" alt=\"\">
            ";
        // line 14
        echo "
            <div class=\"card-body\">
             <p class=\"card-text\">";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "titre", [], "any", false, false, false, 16), "html", null, true);
        echo "</p>
              <p class=\"card-text\">";
        // line 17
        echo twig_get_attribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(twig_striptags(twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "description", [], "any", false, false, false, 17))), "truncate", [0 => 10, 1 => "....", 2 => true], "method", false, false, false, 17);
        echo "</p>
              <div class=\"d-flex justify-content-between align-items-center\">
                <div class=\"btn-group\">
                 ";
        // line 23
        echo "                  <a href=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "url", [], "any", false, false, false, 23), "html", null, true);
        echo "\">Voir plus </a>
                </div>
                <small class=\"text-muted\">";
        // line 25
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "date", [], "any", false, false, false, 25), "d-m-Y"), "html", null, true);
        echo "</small>
              </div>
            </div>
              
          </div>
       
        </div>
   
         
        </div>
        
        </div>
";
    }

    public function getTemplateName()
    {
        return "post/item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 25,  68 => 23,  62 => 17,  58 => 16,  54 => 14,  50 => 12,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "post/item.html.twig", "/Users/admin/Desktop/codeinfo/templates/post/item.html.twig");
    }
}
