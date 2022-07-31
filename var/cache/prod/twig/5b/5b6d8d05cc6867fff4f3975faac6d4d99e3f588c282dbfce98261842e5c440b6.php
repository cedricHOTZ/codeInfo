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

/* post/list.html.twig */
class __TwigTemplate_aa4b7db534b31f7d75309546c897bb66a3a1b5f0b713a0e839148ac5e5fe94fd extends Template
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
<div class=\"album py-5\">
  

      <div class=\"row  g-3 bgFond\">
    ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 7
            echo "    ";
            // line 8
            echo "        <div class=\"col-md-3 col-xs-6 col-lg-2\">
          
          <div class=\"card shadow-sm\">
           
            <img src=\"";
            // line 12
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["post"], "image", [], "any", false, false, false, 12)) ? ($this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter($this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset($context["post"], "imageFile"), "square_thumbnail_medium")) : ($this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/images/posts/header.jpg"), "square_thumbnail_medium"))), "html", null, true);
            echo "\" class=\"card-img-top\" alt=\"\">
            ";
            // line 14
            echo "
            <div class=\"card-body\">
             <p class=\"card-text\">";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "titre", [], "any", false, false, false, 16), "html", null, true);
            echo "</p>
              <p class=\"card-text\">";
            // line 17
            echo twig_get_attribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(twig_striptags(twig_get_attribute($this->env, $this->source, $context["post"], "description", [], "any", false, false, false, 17))), "truncate", [0 => 10, 1 => "....", 2 => true], "method", false, false, false, 17);
            echo "</p>
              <div class=\"d-flex justify-content-between align-items-center\">
                <div class=\"btn-group\">
                 ";
            // line 23
            echo "                  <a href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, false, 23), "html", null, true);
            echo " \"target=\"_blank\">
                  <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">Voir plus</button>
                  </a>
                </div>
                <small class=\"text-muted\">";
            // line 27
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "date", [], "any", false, false, false, 27), "d-m-Y"), "html", null, true);
            echo "</small>
              </div>
            </div>
              
          </div>
       
        </div>
         ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "         
        </div>
       
        </div>

";
    }

    public function getTemplateName()
    {
        return "post/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 35,  82 => 27,  74 => 23,  68 => 17,  64 => 16,  60 => 14,  56 => 12,  50 => 8,  48 => 7,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "post/list.html.twig", "/Users/admin/Desktop/codeinfo/templates/post/list.html.twig");
    }
}
