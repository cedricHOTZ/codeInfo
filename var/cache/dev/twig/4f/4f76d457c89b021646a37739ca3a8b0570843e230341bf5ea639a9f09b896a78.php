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
        echo "
<div class=\"container\">

<div class=\"jumbotron\">
  <h1 class=\"display-6 text-white p-2\"></h1>
  <p class=\"lead text-white p-2 text-center\">Vous pouvez Partager une ressource et en faire profiter les autres</p>
  <hr class=\"my-4\">
";
        // line 12
        echo twig_include($this->env, $context, "fragments/modal_form.html.twig");
        echo "
  
</div>
   </div>
<h2 class=\"text-white mt-5 text-center\">Les derniers posts</h2>
<div class=\"album py-5\">
  
      <div class=\"row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3\">
    ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new RuntimeError('Variable "posts" does not exist.', 20, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 21
            echo "        <div class=\"col-md-2 \">
          
          <div class=\"card shadow-sm neonText\">
           
            <img src=\"";
            // line 25
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["post"], "image", [], "any", false, false, false, 25)) ? ($this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter($this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset($context["post"], "imageFile"), "square_thumbnail_medium")) : ($this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/images/posts/header.jpg"), "square_thumbnail_medium"))), "html", null, true);
            echo "\" class=\"card-img-top\" alt=\"\">
            ";
            // line 27
            echo "
            <div class=\"card-body \">
             <p class=\"card-text\">";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "titre", [], "any", false, false, false, 29), "html", null, true);
            echo "</p>
              <p class=\"card-text\">";
            // line 30
            echo twig_get_attribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(twig_striptags(twig_get_attribute($this->env, $this->source, $context["post"], "description", [], "any", false, false, false, 30))), "truncate", [0 => 10, 1 => "....", 2 => true], "method", false, false, false, 30);
            echo "</p>
              <div class=\"d-flex justify-content-between align-items-center\">
                <div class=\"btn-group rel\">
                 ";
            // line 33
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["post"], "getTags", [], "method", false, false, false, 33));
            foreach ($context['_seq'] as $context["_key"] => $context["tags"]) {
                // line 34
                echo "                  <a>
                  <span class=\"badge bg-light text-dark tagCarte\">";
                // line 35
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tags"], "nom", [], "any", false, false, false, 35), "html", null, true);
                echo "</span>
                  </a>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tags'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "                  
                  <a href=\"";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, false, 39), "html", null, true);
            echo " \"target=\"_blank\">
                 <span class=\"badge rounded-pill bg-dark\">Voir plus</span>
                  </a>
                </div>
                ";
            // line 44
            echo "              </div>
            </div>
              
          </div>
       
        </div>
         ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "         
        </div>
         <a href=\"";
        // line 53
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("post");
        echo "\" class=\"float-start text-white mt-4\">Voir tous les posts</a>
        </div>
<h2 class=\"text-white text-center\">PHP</h2>
        <div class=\"row\">
 
  <section class=\"col-sm-10 col-md-10\">
  <div class=\"album py-5\">
  

      <div class=\"row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3\">
      
         ";
        // line 64
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listPost"]) || array_key_exists("listPost", $context) ? $context["listPost"] : (function () { throw new RuntimeError('Variable "listPost" does not exist.', 64, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["postphp"]) {
            echo " 
        
           
        <div class=\"col-md-2\">
          
          <div class=\"card shadow-sm\">
           
             <img src=\"";
            // line 71
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["postphp"], "image", [], "any", false, false, false, 71)) ? ($this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter($this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset((isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 71, $this->source); })()), "imageFile"), "square_thumbnail_medium")) : ($this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/images/posts/header.jpg"), "square_thumbnail_medium"))), "html", null, true);
            echo "\" class=\"card-img-top\" alt=\"\">
            ";
            // line 73
            echo "
            <div class=\"card-body\">
                <p class=\"card-text\">";
            // line 75
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["postphp"], "titre", [], "any", false, false, false, 75), "html", null, true);
            echo "</p>
           <p class=\"card-text\">";
            // line 76
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["postphp"], "description", [], "any", false, false, false, 76), "html", null, true);
            echo "</p>   
              <div class=\"d-flex justify-content-between align-items-center\">
                <div class=\"btn-group\">
                    ";
            // line 79
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["postphp"], "getTags", [], "method", false, false, false, 79));
            foreach ($context['_seq'] as $context["_key"] => $context["tags"]) {
                echo "   
                  <span class=\"badge bg-light text-dark tagCarte\">";
                // line 80
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tags"], "nom", [], "any", false, false, false, 80), "html", null, true);
                echo "</span>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tags'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 81
            echo "   
                    <a href=\"";
            // line 82
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["postphp"], "url", [], "any", false, false, false, 82), "html", null, true);
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
        // line 93
        echo "  
        
          
        </div>
         <a href=\"\" class=\"float-start text-white mt-4\">Voir tous les posts</a>

  </section>
  <div class=\"col-md-2 w-10\">
  <h4 class=\"text-white\">Categories</h2>\t
    <div class=\"row\">
    <ul>
    ";
        // line 104
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tag"]) || array_key_exists("tag", $context) ? $context["tag"] : (function () { throw new RuntimeError('Variable "tag" does not exist.', 104, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["tags"]) {
            // line 105
            echo "    <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("tag_show", ["slug" => twig_get_attribute($this->env, $this->source, $context["tags"], "slug", [], "any", false, false, false, 105)]), "html", null, true);
            echo "\"> <span class=\"badge bg-info text-dark\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tags"], "nom", [], "any", false, false, false, 105), "html", null, true);
            echo "</span> </a>
   
    ";
            // line 108
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tags'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 109
        echo "      </ul>
    </div>
    <div class=\"row\">
   
     <h4 class=\"text-white mt-2\">Les plus pertinents</h4>\t
     ";
        // line 114
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["postPertinent"]) || array_key_exists("postPertinent", $context) ? $context["postPertinent"] : (function () { throw new RuntimeError('Variable "postPertinent" does not exist.', 114, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["postPertinents"]) {
            // line 115
            echo "     
     <div class=\"card mt-2\">


      
    <div class=\"card-body\">
    <h5 class=\"card-title\">";
            // line 121
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["postPertinents"], "titre", [], "any", false, false, false, 121), "html", null, true);
            echo "</h5>
     <h5 class=\"card-text\">";
            // line 122
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["postPertinents"], "description", [], "any", false, false, false, 122), "html", null, true);
            echo "</h5>
     <a href=\"";
            // line 123
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["postPertinents"], "url", [], "any", false, false, false, 123), "html", null, true);
            echo "\" class=\"badge rounded-pill bg-dark text-white\">Voir plus</a>
    </div>
    </div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['postPertinents'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 127
        echo "    </div>
     
  </div>
 
<h2 class=\"text-white text-center\">FLUTTER</h2>
        <div class=\"row\">
 
  <section class=\"col-sm-10 col-md-10\">
  <div class=\"album py-5\">
  

      <div class=\"row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3\">
   ";
        // line 139
        if ((0 === twig_compare(twig_length_filter($this->env, (isset($context["postflutter"]) || array_key_exists("postflutter", $context) ? $context["postflutter"] : (function () { throw new RuntimeError('Variable "postflutter" does not exist.', 139, $this->source); })())), 0))) {
            echo "{
    <h2 class=\"text-white text-center\">Aucun post</h2>
    
   }
   ";
        } else {
            // line 144
            echo "         ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["postflutter"]) || array_key_exists("postflutter", $context) ? $context["postflutter"] : (function () { throw new RuntimeError('Variable "postflutter" does not exist.', 144, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["postflutters"]) {
                // line 145
                echo "         
       
        <div class=\"col-md-2\">
          
          <div class=\"card shadow-sm\">
           
             <img src=\"";
                // line 151
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["postflutters"], "image", [], "any", false, false, false, 151)) ? ($this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter($this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset((isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 151, $this->source); })()), "imageFile"), "square_thumbnail_medium")) : ($this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/images/posts/header.jpg"), "square_thumbnail_medium"))), "html", null, true);
                echo "\" class=\"card-img-top\" alt=\"\">
            ";
                // line 153
                echo "
            <div class=\"card-body\">
                <p class=\"card-text\">";
                // line 155
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["postflutters"], "titre", [], "any", false, false, false, 155), "html", null, true);
                echo "</p>
           <p class=\"card-text\">";
                // line 156
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["postflutters"], "description", [], "any", false, false, false, 156), "html", null, true);
                echo "</p>   
              <div class=\"d-flex justify-content-between align-items-center\">
                <div class=\"btn-group\">
                    ";
                // line 159
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["postflutters"], "getTags", [], "method", false, false, false, 159));
                foreach ($context['_seq'] as $context["_key"] => $context["tags"]) {
                    echo "   
                  <span class=\"badge bg-light text-dark tagCarte\">";
                    // line 160
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tags"], "nom", [], "any", false, false, false, 160), "html", null, true);
                    echo "</span>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tags'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 161
                echo "   
                    <a href=\"";
                // line 162
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["postflutters"], "url", [], "any", false, false, false, 162), "html", null, true);
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
            // line 174
            echo "  
              ";
        }
        // line 176
        echo "        
          
        </div>
        ";
        // line 179
        if ((0 === twig_compare(twig_length_filter($this->env, (isset($context["postflutter"]) || array_key_exists("postflutter", $context) ? $context["postflutter"] : (function () { throw new RuntimeError('Variable "postflutter" does not exist.', 179, $this->source); })())), 0))) {
            // line 180
            echo "        <p></p>
        ";
        } else {
            // line 182
            echo "         <a href=\"\" class=\"float-start text-white mt-4 text-white\">Voir tous les posts</a>
";
        }
        // line 184
        echo "</div> \t
</div>
 <!-- Create your own class for the containing div -->
";
        // line 206
        echo "
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
        return array (  438 => 206,  433 => 184,  429 => 182,  425 => 180,  423 => 179,  418 => 176,  414 => 174,  395 => 162,  392 => 161,  384 => 160,  378 => 159,  372 => 156,  368 => 155,  364 => 153,  360 => 151,  352 => 145,  347 => 144,  339 => 139,  325 => 127,  315 => 123,  311 => 122,  307 => 121,  299 => 115,  295 => 114,  288 => 109,  282 => 108,  274 => 105,  270 => 104,  257 => 93,  239 => 82,  236 => 81,  228 => 80,  222 => 79,  216 => 76,  212 => 75,  208 => 73,  204 => 71,  192 => 64,  178 => 53,  174 => 51,  162 => 44,  155 => 39,  152 => 38,  143 => 35,  140 => 34,  136 => 33,  130 => 30,  126 => 29,  122 => 27,  118 => 25,  112 => 21,  108 => 20,  97 => 12,  88 => 5,  78 => 4,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}CodeInfo{% endblock %}

{% block body %}

<div class=\"container\">

<div class=\"jumbotron\">
  <h1 class=\"display-6 text-white p-2\"></h1>
  <p class=\"lead text-white p-2 text-center\">Vous pouvez Partager une ressource et en faire profiter les autres</p>
  <hr class=\"my-4\">
{{include('fragments/modal_form.html.twig') }}
  
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
{# <div class=\"slickcarousel\">
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
</div> #}

<!-- jQuery CDN -->
<script src=\"//code.jquery.com/jquery-1.11.0.min.js\"></script>
<script src=\"//code.jquery.com/jquery-migrate-1.2.1.min.js\"></script>
<!-- slick Carousel CDN -->
<script type=\"text/javascript\" src=\"//cdn.jsdelivr.net/jquery.slick/1.5.7/slick.min.js\"></script>
{% endblock %}
", "home/index.html.twig", "/Users/admin/Desktop/codeinfo/templates/home/index.html.twig");
    }
}
