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
class __TwigTemplate_352a463e5a5caaa3dfccc8b5389d0f70fcc6324bcd219c00e6baad938073fc6c extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "post/item.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "post/item.html.twig"));

        // line 1
        echo " 

<div class=\"album py-5 bg-light\">
  

      <div class=\"row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3\">
    
        <div class=\"col-md-2\">
          
          <div class=\"card shadow-sm\">
           
            <img src=\"";
        // line 12
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, (isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new RuntimeError('Variable "posts" does not exist.', 12, $this->source); })()), "image", [], "any", false, false, false, 12)) ? ($this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter($this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset((isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new RuntimeError('Variable "posts" does not exist.', 12, $this->source); })()), "imageFile"), "square_thumbnail_medium")) : ($this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/images/posts/header.jpg"), "square_thumbnail_medium"))), "html", null, true);
        echo "\" class=\"card-img-top\" alt=\"\">
            ";
        // line 14
        echo "
            <div class=\"card-body\">
             <p class=\"card-text\">";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new RuntimeError('Variable "posts" does not exist.', 16, $this->source); })()), "titre", [], "any", false, false, false, 16), "html", null, true);
        echo "</p>
              <p class=\"card-text\">";
        // line 17
        echo twig_get_attribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(twig_striptags(twig_get_attribute($this->env, $this->source, (isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new RuntimeError('Variable "posts" does not exist.', 17, $this->source); })()), "description", [], "any", false, false, false, 17))), "truncate", [0 => 10, 1 => "....", 2 => true], "method", false, false, false, 17);
        echo "</p>
              <div class=\"d-flex justify-content-between align-items-center\">
                <div class=\"btn-group\">
                 ";
        // line 23
        echo "                  <a href=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new RuntimeError('Variable "posts" does not exist.', 23, $this->source); })()), "url", [], "any", false, false, false, 23), "html", null, true);
        echo "\">Voir plus </a>
                </div>
                <small class=\"text-muted\">";
        // line 25
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new RuntimeError('Variable "posts" does not exist.', 25, $this->source); })()), "date", [], "any", false, false, false, 25), "d-m-Y"), "html", null, true);
        echo "</small>
              </div>
            </div>
              
          </div>
       
        </div>
   
         
        </div>
        
        </div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  80 => 25,  74 => 23,  68 => 17,  64 => 16,  60 => 14,  56 => 12,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source(" 

<div class=\"album py-5 bg-light\">
  

      <div class=\"row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3\">
    
        <div class=\"col-md-2\">
          
          <div class=\"card shadow-sm\">
           
            <img src=\"{{ (posts.image ? vich_uploader_asset(posts,'imageFile')|imagine_filter('square_thumbnail_medium') : asset('/images/posts/header.jpg')|imagine_filter('square_thumbnail_medium'))}}\" class=\"card-img-top\" alt=\"\">
            {# <svg class=\"bd-placeholder-img card-img-top\" width=\"100%\" height=\"225\" xmlns=\"http://www.w3.org/2000/svg\" role=\"img\"  preserveAspectRatio=\"xMidYMid slice\" focusable=\"false\"><title>{post.titre}</title><rect width=\"100%\" height=\"100%\" fill=\"#55595c\"/><text x=\"50%\" y=\"50%\" fill=\"#eceeef\" dy=\".3em\">fgfdgfgkgfdikgd</text></svg> #}

            <div class=\"card-body\">
             <p class=\"card-text\">{{posts.titre}}</p>
              <p class=\"card-text\">{{posts.description|striptags|u.truncate(10,'....',true)|raw }}</p>
              <div class=\"d-flex justify-content-between align-items-center\">
                <div class=\"btn-group\">
                 {# {% for tags in post.getTags() %}
                  <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">{{tags.nom}}</button>
                  {% endfor %} #}
                  <a href=\"{{posts.url }}\">Voir plus </a>
                </div>
                <small class=\"text-muted\">{{posts.date|date('d-m-Y')}}</small>
              </div>
            </div>
              
          </div>
       
        </div>
   
         
        </div>
        
        </div>
", "post/item.html.twig", "/Users/admin/Desktop/codeinfo/templates/post/item.html.twig");
    }
}
