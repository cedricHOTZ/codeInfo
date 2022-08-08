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
class __TwigTemplate_21fa9ca7d98889ba8e7ac6f6f9751fc6ffead19af3148fa904e245357dd2ce3b extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "post/list.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "post/list.html.twig"));

        // line 1
        echo "
<div class=\"album py-5\">
  

      <div class=\"row  g-3 bgFond\">
    ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new RuntimeError('Variable "posts" does not exist.', 6, $this->source); })()));
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
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  102 => 35,  88 => 27,  80 => 23,  74 => 17,  70 => 16,  66 => 14,  62 => 12,  56 => 8,  54 => 7,  50 => 6,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<div class=\"album py-5\">
  

      <div class=\"row  g-3 bgFond\">
    {% for post in posts %}
    {# <h1 class=\"text-center\"> Tout les articles {{post.nom.getTags()}}</h1> #}
        <div class=\"col-md-3 col-xs-6 col-lg-2\">
          
          <div class=\"card shadow-sm\">
           
            <img src=\"{{ (post.image ? vich_uploader_asset(post,'imageFile')|imagine_filter('square_thumbnail_medium') : asset('/images/posts/header.jpg')|imagine_filter('square_thumbnail_medium'))}}\" class=\"card-img-top\" alt=\"\">
            {# <svg class=\"bd-placeholder-img card-img-top\" width=\"100%\" height=\"225\" xmlns=\"http://www.w3.org/2000/svg\" role=\"img\"  preserveAspectRatio=\"xMidYMid slice\" focusable=\"false\"><title>{post.titre}</title><rect width=\"100%\" height=\"100%\" fill=\"#55595c\"/><text x=\"50%\" y=\"50%\" fill=\"#eceeef\" dy=\".3em\">fgfdgfgkgfdikgd</text></svg> #}

            <div class=\"card-body\">
             <p class=\"card-text\">{{post.titre}}</p>
              <p class=\"card-text\">{{post.description|striptags|u.truncate(10,'....',true)|raw }}</p>
              <div class=\"d-flex justify-content-between align-items-center\">
                <div class=\"btn-group\">
                 {# {% for tags in post.getTags() %}
              <a href=\"{{path('tag_show', {slug: tags.slug})}}\"  class=\"btn btn-sm btn-outline-secondary\">{{tags.nom}}</a>
                  {% endfor %} #}
                  <a href=\"{{post.url}} \"target=\"_blank\">
                  <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">Voir plus</button>
                  </a>
                </div>
                <small class=\"text-muted\">{{post.date|date('d-m-Y')}}</small>
              </div>
            </div>
              
          </div>
       
        </div>
         {% endfor %}
         
        </div>
       
        </div>

", "post/list.html.twig", "/Users/admin/Desktop/codeinfo/templates/post/list.html.twig");
    }
}
