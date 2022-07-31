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

/* home/index.html.twig */
class __TwigTemplate_e7043563b564f927062d55f0e86eb49db2b66cebb639713a28dc4a3f9b0db209 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "CodeInfo";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "<div class=\"container\">
<div class=\"jumbotron\">
  <h1 class=\"display-6 text-white p-2\"></h1>
  <p class=\"lead text-white p-2 text-center\">Vous pouvez Partager une ressource et en daire profiter les autres</p>
  <hr class=\"my-4\">

  <p class=\"lead text-center p-3\">
           <!-- Button trigger modal -->
<button type=\"button\" class=\"boutton-header\" id=\"partagePost\" data-bs-toggle=\"modal\" data-bs-target=\"#staticBackdrop\">
 Partager un article
</button>
</p>
 
<!-- Modal -->
<div class=\"modal fade bd-example-modal-lg\" id=\"staticBackdrop\" data-backdrop=\"static\" data-toggle=\"modal\" data-bs-keyboard=\"false\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"staticBackdropLabel\">Partagez un article</h5>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
      </div>
      <div class=\"modal-body\">
      ";
        // line 27
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), 'form_start');
        echo "
       <div class=\"row\">
         <div class=\"col\">
          ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "pseudo", [], "any", false, false, false, 30), 'widget');
        echo "
         </div>
        <div class=\"col\">
          ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "email", [], "any", false, false, false, 33), 'widget');
        echo "
        </div>
        
        <div class=\"col\">
        <input type=\"hidden\" name=\"token\" value=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("delete-item"), "html", null, true);
        echo "\"/>
        </div
      </div> 
   ";
        // line 40
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), 'form_end');
        echo "
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Fermer</button> 
       <input type=\"hidden\" name=\"_token\" value=\"";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "_token", [], "any", false, false, false, 44), "vars", [], "any", false, false, false, 44), "value", [], "any", false, false, false, 44), "html", null, true);
        echo "\">
      </div>
    </div>
  </div>
</div>
</div>
</div>
   </div>
<h2 class=\"text-white mt-5 text-center\">Les derniers posts</h2>
<div class=\"album py-5\">
  
      <div class=\"row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3\">
    ";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new RuntimeError('Variable "posts" does not exist.', 56, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 57
            echo "        <div class=\"col-md-2 \">
          
          <div class=\"card shadow-sm neonText\">
           
            <img src=\"";
            // line 61
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["post"], "image", [], "any", false, false, false, 61)) ? ($this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter($this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset($context["post"], "imageFile"), "square_thumbnail_medium")) : ($this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/images/posts/header.jpg"), "square_thumbnail_medium"))), "html", null, true);
            echo "\" class=\"card-img-top\" alt=\"\">
            ";
            // line 63
            echo "
            <div class=\"card-body \">
             <p class=\"card-text\">";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "titre", [], "any", false, false, false, 65), "html", null, true);
            echo "</p>
              <p class=\"card-text\">";
            // line 66
            echo twig_get_attribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(twig_striptags(twig_get_attribute($this->env, $this->source, $context["post"], "description", [], "any", false, false, false, 66))), "truncate", [0 => 10, 1 => "....", 2 => true], "method", false, false, false, 66);
            echo "</p>
              <div class=\"d-flex justify-content-between align-items-center\">
                <div class=\"btn-group rel\">
                 ";
            // line 69
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["post"], "getTags", [], "method", false, false, false, 69));
            foreach ($context['_seq'] as $context["_key"] => $context["tags"]) {
                // line 70
                echo "                  <a>
                  <span class=\"badge bg-light text-dark tagCarte\">";
                // line 71
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tags"], "nom", [], "any", false, false, false, 71), "html", null, true);
                echo "</span>
                  </a>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tags'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 74
            echo "                  
                  <a href=\"";
            // line 75
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, false, 75), "html", null, true);
            echo " \"target=\"_blank\">
                 <span class=\"badge rounded-pill bg-dark\">Voir plus</span>
                  </a>
                </div>
                ";
            // line 80
            echo "              </div>
            </div>
              
          </div>
       
        </div>
         ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 87
        echo "         
        </div>
         <a href=\"";
        // line 89
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("post");
        echo "\" class=\"float-start text-white mt-4\">Voir tous les posts</a>
        </div>
<h2 class=\"text-white text-center\">PHP</h2>
        <div class=\"row\">
 
  <section class=\"col-sm-10 col-md-10\">
  <div class=\"album py-5\">
  

      <div class=\"row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3\">
      
         ";
        // line 100
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listPost"]) || array_key_exists("listPost", $context) ? $context["listPost"] : (function () { throw new RuntimeError('Variable "listPost" does not exist.', 100, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["postphp"]) {
            echo " 
        
           
        <div class=\"col-md-2\">
          
          <div class=\"card shadow-sm\">
           
             <img src=\"";
            // line 107
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["postphp"], "image", [], "any", false, false, false, 107)) ? ($this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter($this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset((isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 107, $this->source); })()), "imageFile"), "square_thumbnail_medium")) : ($this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/images/posts/header.jpg"), "square_thumbnail_medium"))), "html", null, true);
            echo "\" class=\"card-img-top\" alt=\"\">
            ";
            // line 109
            echo "
            <div class=\"card-body\">
                <p class=\"card-text\">";
            // line 111
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["postphp"], "titre", [], "any", false, false, false, 111), "html", null, true);
            echo "</p>
           <p class=\"card-text\">";
            // line 112
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["postphp"], "description", [], "any", false, false, false, 112), "html", null, true);
            echo "</p>   
              <div class=\"d-flex justify-content-between align-items-center\">
                <div class=\"btn-group\">
                    ";
            // line 115
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["postphp"], "getTags", [], "method", false, false, false, 115));
            foreach ($context['_seq'] as $context["_key"] => $context["tags"]) {
                echo "   
                  <span class=\"badge bg-light text-dark tagCarte\">";
                // line 116
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tags"], "nom", [], "any", false, false, false, 116), "html", null, true);
                echo "</span>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tags'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 117
            echo "   
                    <a href=\"";
            // line 118
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["postphp"], "url", [], "any", false, false, false, 118), "html", null, true);
            echo " \"target=\"_blank\">
                 <span class=\"badge rounded-pill bg-dark text-white\">Voir plus</span>
                  </a>
                </div>
                <small class=\"text-muted\"></small>
              </div>
            </div>
              
          </div>
       
        </div>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['postphp'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 129
        echo "  
        
          
        </div>
         <a href=\"\" class=\"float-start text-white mt-4\">Voir tous les posts</a>

  </section>
  <div class=\"col-md-2 w-10\">
  <h4 class=\"text-white\">Categories</h2>\t
    <div class=\"row\">
    <ul>
    ";
        // line 140
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tag"]) || array_key_exists("tag", $context) ? $context["tag"] : (function () { throw new RuntimeError('Variable "tag" does not exist.', 140, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["tags"]) {
            // line 141
            echo "    <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("tag_show", ["slug" => twig_get_attribute($this->env, $this->source, $context["tags"], "slug", [], "any", false, false, false, 141)]), "html", null, true);
            echo "\"> <span class=\"badge bg-info text-dark\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tags"], "nom", [], "any", false, false, false, 141), "html", null, true);
            echo "</span> </a>
   
    ";
            // line 144
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tags'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 145
        echo "      </ul>
    </div>
    <div class=\"row\">
   
     <h4 class=\"text-white mt-2\">Les plus pertinents</h4>\t
     ";
        // line 150
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["postPertinent"]) || array_key_exists("postPertinent", $context) ? $context["postPertinent"] : (function () { throw new RuntimeError('Variable "postPertinent" does not exist.', 150, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["postPertinents"]) {
            // line 151
            echo "     <div class=\"card mt-2\">
      
    <div class=\"card-body\">
    <h5 class=\"card-title\">";
            // line 154
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["postPertinents"], "titre", [], "any", false, false, false, 154), "html", null, true);
            echo "</h5>
     <h5 class=\"card-text\">";
            // line 155
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["postPertinents"], "description", [], "any", false, false, false, 155), "html", null, true);
            echo "</h5>
     <a href=\"";
            // line 156
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["postPertinents"], "url", [], "any", false, false, false, 156), "html", null, true);
            echo "\" class=\"badge rounded-pill bg-dark text-white\">Voir plus</a>
    </div>
    </div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['postPertinents'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 160
        echo "    </div>
     
  </div>
 
<h2 class=\"text-white text-center\">FLUTTER</h2>
        <div class=\"row\">
 
  <section class=\"col-sm-10 col-md-10\">
  <div class=\"album py-5\">
  

      <div class=\"row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3\">
   ";
        // line 172
        if ((0 === twig_compare(twig_length_filter($this->env, (isset($context["postflutter"]) || array_key_exists("postflutter", $context) ? $context["postflutter"] : (function () { throw new RuntimeError('Variable "postflutter" does not exist.', 172, $this->source); })())), 0))) {
            echo "{
    <h2 class=\"text-white text-center\">Aucun post</h2>
    
   }
   ";
        } else {
            // line 177
            echo "         ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["postflutter"]) || array_key_exists("postflutter", $context) ? $context["postflutter"] : (function () { throw new RuntimeError('Variable "postflutter" does not exist.', 177, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["postflutters"]) {
                // line 178
                echo "         
       
        <div class=\"col-md-2\">
          
          <div class=\"card shadow-sm\">
           
             <img src=\"";
                // line 184
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["postflutters"], "image", [], "any", false, false, false, 184)) ? ($this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter($this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset((isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 184, $this->source); })()), "imageFile"), "square_thumbnail_medium")) : ($this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/images/posts/header.jpg"), "square_thumbnail_medium"))), "html", null, true);
                echo "\" class=\"card-img-top\" alt=\"\">
            ";
                // line 186
                echo "
            <div class=\"card-body\">
                <p class=\"card-text\">";
                // line 188
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["postflutters"], "titre", [], "any", false, false, false, 188), "html", null, true);
                echo "</p>
           <p class=\"card-text\">";
                // line 189
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["postflutters"], "description", [], "any", false, false, false, 189), "html", null, true);
                echo "</p>   
              <div class=\"d-flex justify-content-between align-items-center\">
                <div class=\"btn-group\">
                    ";
                // line 192
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["postflutters"], "getTags", [], "method", false, false, false, 192));
                foreach ($context['_seq'] as $context["_key"] => $context["tags"]) {
                    echo "   
                  <span class=\"badge bg-light text-dark tagCarte\">";
                    // line 193
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tags"], "nom", [], "any", false, false, false, 193), "html", null, true);
                    echo "</span>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tags'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 194
                echo "   
                    <a href=\"";
                // line 195
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["postflutters"], "url", [], "any", false, false, false, 195), "html", null, true);
                echo " \"target=\"_blank\">
                 <span class=\"badge rounded-pill bg-dark text-white\">Voir plus</span>
                  </a>
                </div>
                <small class=\"text-muted\"></small>
              </div>
            </div>
              
          </div>
       
        </div>
        
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['postflutters'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 207
            echo "  
              ";
        }
        // line 209
        echo "        
          
        </div>
        ";
        // line 212
        if ((0 === twig_compare(twig_length_filter($this->env, (isset($context["postflutter"]) || array_key_exists("postflutter", $context) ? $context["postflutter"] : (function () { throw new RuntimeError('Variable "postflutter" does not exist.', 212, $this->source); })())), 0))) {
            // line 213
            echo "        <p></p>
        ";
        } else {
            // line 215
            echo "         <a href=\"\" class=\"float-start text-white mt-4 text-white\">Voir tous les posts</a>
";
        }
        // line 217
        echo "</div> \t
</div>
 <!-- Create your own class for the containing div -->
<div class=\"slickcarousel\">
  <!-- Inside the containing div, add one div for each slide -->
  <div>
    <!-- You can put an image or text inside each slide div -->
    <img src=\"http://placekitten.com/g/320/240\">
  </div>
  <div>
    <img src=\"http://placekitten.com/g/320/240\">
  </div>
  <div>
    <img src=\"http://placekitten.com/g/320/240\">
  </div>
  <div>
    <img src=\"http://placekitten.com/g/320/240\">
  </div>
  <div>
    <img src=\"http://placekitten.com/g/320/240\">
  </div>
</div>

<!-- jQuery CDN -->
<script src=\"//code.jquery.com/jquery-1.11.0.min.js\"></script>
<script src=\"//code.jquery.com/jquery-migrate-1.2.1.min.js\"></script>
<!-- slick Carousel CDN -->
<script type=\"text/javascript\" src=\"//cdn.jsdelivr.net/jquery.slick/1.5.7/slick.min.js\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  481 => 217,  477 => 215,  473 => 213,  471 => 212,  466 => 209,  462 => 207,  443 => 195,  440 => 194,  432 => 193,  426 => 192,  420 => 189,  416 => 188,  412 => 186,  408 => 184,  400 => 178,  395 => 177,  387 => 172,  373 => 160,  363 => 156,  359 => 155,  355 => 154,  350 => 151,  346 => 150,  339 => 145,  333 => 144,  325 => 141,  321 => 140,  308 => 129,  290 => 118,  287 => 117,  279 => 116,  273 => 115,  267 => 112,  263 => 111,  259 => 109,  255 => 107,  243 => 100,  229 => 89,  225 => 87,  213 => 80,  206 => 75,  203 => 74,  194 => 71,  191 => 70,  187 => 69,  181 => 66,  177 => 65,  173 => 63,  169 => 61,  163 => 57,  159 => 56,  144 => 44,  137 => 40,  131 => 37,  124 => 33,  118 => 30,  112 => 27,  88 => 5,  78 => 4,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}CodeInfo{% endblock %}

{% block body %}
<div class=\"container\">
<div class=\"jumbotron\">
  <h1 class=\"display-6 text-white p-2\"></h1>
  <p class=\"lead text-white p-2 text-center\">Vous pouvez Partager une ressource et en daire profiter les autres</p>
  <hr class=\"my-4\">

  <p class=\"lead text-center p-3\">
           <!-- Button trigger modal -->
<button type=\"button\" class=\"boutton-header\" id=\"partagePost\" data-bs-toggle=\"modal\" data-bs-target=\"#staticBackdrop\">
 Partager un article
</button>
</p>
 
<!-- Modal -->
<div class=\"modal fade bd-example-modal-lg\" id=\"staticBackdrop\" data-backdrop=\"static\" data-toggle=\"modal\" data-bs-keyboard=\"false\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"staticBackdropLabel\">Partagez un article</h5>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
      </div>
      <div class=\"modal-body\">
      {{form_start(form)}}
       <div class=\"row\">
         <div class=\"col\">
          {{form_widget(form.pseudo)}}
         </div>
        <div class=\"col\">
          {{form_widget(form.email)}}
        </div>
        
        <div class=\"col\">
        <input type=\"hidden\" name=\"token\" value=\"{{ csrf_token('delete-item') }}\"/>
        </div
      </div> 
   {{form_end(form)}}
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Fermer</button> 
       <input type=\"hidden\" name=\"_token\" value=\"{{ form._token.vars.value }}\">
      </div>
    </div>
  </div>
</div>
</div>
</div>
   </div>
<h2 class=\"text-white mt-5 text-center\">Les derniers posts</h2>
<div class=\"album py-5\">
  
      <div class=\"row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3\">
    {% for post in posts %}
        <div class=\"col-md-2 \">
          
          <div class=\"card shadow-sm neonText\">
           
            <img src=\"{{ (post.image ? vich_uploader_asset(post,'imageFile')|imagine_filter('square_thumbnail_medium') : asset('/images/posts/header.jpg')|imagine_filter('square_thumbnail_medium'))}}\" class=\"card-img-top\" alt=\"\">
            {# <svg class=\"bd-placeholder-img card-img-top\" width=\"100%\" height=\"225\" xmlns=\"http://www.w3.org/2000/svg\" role=\"img\"  preserveAspectRatio=\"xMidYMid slice\" focusable=\"false\"><title>{post.titre}</title><rect width=\"100%\" height=\"100%\" fill=\"#55595c\"/><text x=\"50%\" y=\"50%\" fill=\"#eceeef\" dy=\".3em\">fgfdgfgkgfdikgd</text></svg> #}

            <div class=\"card-body \">
             <p class=\"card-text\">{{post.titre}}</p>
              <p class=\"card-text\">{{post.description|striptags|u.truncate(10,'....',true)|raw }}</p>
              <div class=\"d-flex justify-content-between align-items-center\">
                <div class=\"btn-group rel\">
                 {% for tags in post.getTags() %}
                  <a>
                  <span class=\"badge bg-light text-dark tagCarte\">{{tags.nom}}</span>
                  </a>
                  {% endfor %}
                  
                  <a href=\"{{post.url}} \"target=\"_blank\">
                 <span class=\"badge rounded-pill bg-dark\">Voir plus</span>
                  </a>
                </div>
                {# <small class=\"text-muted\">{{post.date|date('d-m-Y')}}</small> #}
              </div>
            </div>
              
          </div>
       
        </div>
         {% endfor %}
         
        </div>
         <a href=\"{{path('post')}}\" class=\"float-start text-white mt-4\">Voir tous les posts</a>
        </div>
<h2 class=\"text-white text-center\">PHP</h2>
        <div class=\"row\">
 
  <section class=\"col-sm-10 col-md-10\">
  <div class=\"album py-5\">
  

      <div class=\"row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3\">
      
         {% for postphp in listPost %} 
        
           
        <div class=\"col-md-2\">
          
          <div class=\"card shadow-sm\">
           
             <img src=\"{{ (postphp.image ? vich_uploader_asset(post,'imageFile')|imagine_filter('square_thumbnail_medium') : asset('/images/posts/header.jpg')|imagine_filter('square_thumbnail_medium'))}}\" class=\"card-img-top\" alt=\"\">
            {# <svg class=\"bd-placeholder-img card-img-top\" width=\"100%\" height=\"225\" xmlns=\"http://www.w3.org/2000/svg\" role=\"img\"  preserveAspectRatio=\"xMidYMid slice\" focusable=\"false\"><title>{post.titre}</title><rect width=\"100%\" height=\"100%\" fill=\"#55595c\"/><text x=\"50%\" y=\"50%\" fill=\"#eceeef\" dy=\".3em\">fgfdgfgkgfdikgd</text></svg> #}

            <div class=\"card-body\">
                <p class=\"card-text\">{{postphp.titre}}</p>
           <p class=\"card-text\">{{postphp.description}}</p>   
              <div class=\"d-flex justify-content-between align-items-center\">
                <div class=\"btn-group\">
                    {% for tags in postphp.getTags() %}   
                  <span class=\"badge bg-light text-dark tagCarte\">{{tags.nom}}</span>
                    {% endfor %}   
                    <a href=\"{{postphp.url}} \"target=\"_blank\">
                 <span class=\"badge rounded-pill bg-dark text-white\">Voir plus</span>
                  </a>
                </div>
                <small class=\"text-muted\"></small>
              </div>
            </div>
              
          </div>
       
        </div>
              {% endfor %}  
        
          
        </div>
         <a href=\"\" class=\"float-start text-white mt-4\">Voir tous les posts</a>

  </section>
  <div class=\"col-md-2 w-10\">
  <h4 class=\"text-white\">Categories</h2>\t
    <div class=\"row\">
    <ul>
    {% for tags in tag %}
    <a href=\"{{path('tag_show', {slug: tags.slug})}}\"> <span class=\"badge bg-info text-dark\">{{tags.nom}}</span> </a>
   
    {# <a href=\"#\" class=\"badge badge-dark\">{{tags.nom}}</a> #}
    {% endfor %}
      </ul>
    </div>
    <div class=\"row\">
   
     <h4 class=\"text-white mt-2\">Les plus pertinents</h4>\t
     {% for postPertinents in postPertinent %}
     <div class=\"card mt-2\">
      
    <div class=\"card-body\">
    <h5 class=\"card-title\">{{postPertinents.titre}}</h5>
     <h5 class=\"card-text\">{{postPertinents.description}}</h5>
     <a href=\"{{postPertinents.url}}\" class=\"badge rounded-pill bg-dark text-white\">Voir plus</a>
    </div>
    </div>
      {% endfor %}
    </div>
     
  </div>
 
<h2 class=\"text-white text-center\">FLUTTER</h2>
        <div class=\"row\">
 
  <section class=\"col-sm-10 col-md-10\">
  <div class=\"album py-5\">
  

      <div class=\"row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3\">
   {% if postflutter|length == 0 %}{
    <h2 class=\"text-white text-center\">Aucun post</h2>
    
   }
   {% else %}
         {% for postflutters in postflutter %}
         
       
        <div class=\"col-md-2\">
          
          <div class=\"card shadow-sm\">
           
             <img src=\"{{ (postflutters.image ? vich_uploader_asset(post,'imageFile')|imagine_filter('square_thumbnail_medium') : asset('/images/posts/header.jpg')|imagine_filter('square_thumbnail_medium'))}}\" class=\"card-img-top\" alt=\"\">
            {# <svg class=\"bd-placeholder-img card-img-top\" width=\"100%\" height=\"225\" xmlns=\"http://www.w3.org/2000/svg\" role=\"img\"  preserveAspectRatio=\"xMidYMid slice\" focusable=\"false\"><title>{post.titre}</title><rect width=\"100%\" height=\"100%\" fill=\"#55595c\"/><text x=\"50%\" y=\"50%\" fill=\"#eceeef\" dy=\".3em\">fgfdgfgkgfdikgd</text></svg> #}

            <div class=\"card-body\">
                <p class=\"card-text\">{{postflutters.titre}}</p>
           <p class=\"card-text\">{{postflutters.description}}</p>   
              <div class=\"d-flex justify-content-between align-items-center\">
                <div class=\"btn-group\">
                    {% for tags in postflutters.getTags() %}   
                  <span class=\"badge bg-light text-dark tagCarte\">{{tags.nom}}</span>
                    {% endfor %}   
                    <a href=\"{{postflutters.url}} \"target=\"_blank\">
                 <span class=\"badge rounded-pill bg-dark text-white\">Voir plus</span>
                  </a>
                </div>
                <small class=\"text-muted\"></small>
              </div>
            </div>
              
          </div>
       
        </div>
        
              {% endfor %}  
              {% endif %}
        
          
        </div>
        {% if postflutter|length == 0 %}
        <p></p>
        {% else %}
         <a href=\"\" class=\"float-start text-white mt-4 text-white\">Voir tous les posts</a>
{% endif %}
</div> \t
</div>
 <!-- Create your own class for the containing div -->
<div class=\"slickcarousel\">
  <!-- Inside the containing div, add one div for each slide -->
  <div>
    <!-- You can put an image or text inside each slide div -->
    <img src=\"http://placekitten.com/g/320/240\">
  </div>
  <div>
    <img src=\"http://placekitten.com/g/320/240\">
  </div>
  <div>
    <img src=\"http://placekitten.com/g/320/240\">
  </div>
  <div>
    <img src=\"http://placekitten.com/g/320/240\">
  </div>
  <div>
    <img src=\"http://placekitten.com/g/320/240\">
  </div>
</div>

<!-- jQuery CDN -->
<script src=\"//code.jquery.com/jquery-1.11.0.min.js\"></script>
<script src=\"//code.jquery.com/jquery-migrate-1.2.1.min.js\"></script>
<!-- slick Carousel CDN -->
<script type=\"text/javascript\" src=\"//cdn.jsdelivr.net/jquery.slick/1.5.7/slick.min.js\"></script>
{% endblock %}
", "home/index.html.twig", "/Users/admin/Desktop/codeinfo/templates/home/index.html.twig");
    }
}
