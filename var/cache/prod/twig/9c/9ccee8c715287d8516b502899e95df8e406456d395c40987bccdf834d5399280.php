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

/* post/show.html.twig */
class __TwigTemplate_66ffcdfa93a342046d56b8d5c50c54ab9d6f6f386381f1f5639fcd9b6bb96460 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $this->parent = $this->loadTemplate("base.html.twig", "post/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "<div class=\"album py-5 bg-light\">
  

      <div class=\"row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3\">
    
        <div class=\"col-md-2\">
          
          <div class=\"card shadow-sm\">
           
            <img src=\"";
        // line 14
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "image", [], "any", false, false, false, 14)) ? ($this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter($this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset(($context["post"] ?? null), "imageFile"), "square_thumbnail_medium")) : ($this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/images/posts/header.jpg"), "square_thumbnail_medium"))), "html", null, true);
        echo "\" class=\"card-img-top\" alt=\"\">
            ";
        // line 16
        echo "
            <div class=\"card-body\">
             <p class=\"card-text\">";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "titre", [], "any", false, false, false, 18), "html", null, true);
        echo "</p>
              <p class=\"card-text\">";
        // line 19
        echo twig_get_attribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(twig_striptags(twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "description", [], "any", false, false, false, 19))), "truncate", [0 => 10, 1 => "....", 2 => true], "method", false, false, false, 19);
        echo "</p>
              <div class=\"d-flex justify-content-between align-items-center\">
                <div class=\"btn-group\">
                 ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "getTags", [], "method", false, false, false, 22));
        foreach ($context['_seq'] as $context["_key"] => $context["tags"]) {
            // line 23
            echo "                  <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tags"], "nom", [], "any", false, false, false, 23), "html", null, true);
            echo "</button>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tags'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "                  <a href=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "url", [], "any", false, false, false, 25), "html", null, true);
        echo " \"target=\"_blank\">
                  <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">Voir plus</button>
                  </a>
                </div>
                <small class=\"text-muted\">";
        // line 29
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "date", [], "any", false, false, false, 29), "d-m-Y"), "html", null, true);
        echo "</small>
              </div>
            </div>
              
          </div>
       
        </div>

         
        </div>
         <a href=\"\" class=\"float-end\">Voir tous les posts</a>
        </div>

";
    }

    public function getTemplateName()
    {
        return "post/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 29,  92 => 25,  83 => 23,  79 => 22,  73 => 19,  69 => 18,  65 => 16,  61 => 14,  50 => 5,  46 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "post/show.html.twig", "/Users/admin/Desktop/codeinfo/templates/post/show.html.twig");
    }
}
