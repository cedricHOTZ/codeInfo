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
class __TwigTemplate_5a5ead2f442aed4b0567f33f27b31078b671ee6730e6020a5eb8b391ea4f9bee extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "CodeInfo";
    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        echo "
       <div class=\"row\">
         <div class=\"col\">
          ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "pseudo", [], "any", false, false, false, 30), 'widget');
        echo "
         </div>
        <div class=\"col\">
          ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "email", [], "any", false, false, false, 33), 'widget');
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Fermer</button> 
       <input type=\"hidden\" name=\"_token\" value=\"";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "_token", [], "any", false, false, false, 44), "vars", [], "any", false, false, false, 44), "value", [], "any", false, false, false, 44), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
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
        $context['_seq'] = twig_ensure_traversable(($context["listPost"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["postphp"]) {
            echo " 
        
           
        <div class=\"col-md-2\">
          
          <div class=\"card shadow-sm\">
           
             <img src=\"";
            // line 107
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["postphp"], "image", [], "any", false, false, false, 107)) ? ($this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter($this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset(($context["post"] ?? null), "imageFile"), "square_thumbnail_medium")) : ($this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/images/posts/header.jpg"), "square_thumbnail_medium"))), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable(($context["tag"] ?? null));
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
        $context['_seq'] = twig_ensure_traversable(($context["postPertinent"] ?? null));
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
        if ((0 === twig_compare(twig_length_filter($this->env, ($context["postflutter"] ?? null)), 0))) {
            echo "{
    <h2 class=\"text-white text-center\">Aucun post</h2>
    
   }
   ";
        } else {
            // line 177
            echo "         ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["postflutter"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["postflutters"]) {
                // line 178
                echo "         
       
        <div class=\"col-md-2\">
          
          <div class=\"card shadow-sm\">
           
             <img src=\"";
                // line 184
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["postflutters"], "image", [], "any", false, false, false, 184)) ? ($this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter($this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset(($context["post"] ?? null), "imageFile"), "square_thumbnail_medium")) : ($this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/images/posts/header.jpg"), "square_thumbnail_medium"))), "html", null, true);
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
        if ((0 === twig_compare(twig_length_filter($this->env, ($context["postflutter"] ?? null)), 0))) {
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
        return array (  451 => 217,  447 => 215,  443 => 213,  441 => 212,  436 => 209,  432 => 207,  413 => 195,  410 => 194,  402 => 193,  396 => 192,  390 => 189,  386 => 188,  382 => 186,  378 => 184,  370 => 178,  365 => 177,  357 => 172,  343 => 160,  333 => 156,  329 => 155,  325 => 154,  320 => 151,  316 => 150,  309 => 145,  303 => 144,  295 => 141,  291 => 140,  278 => 129,  260 => 118,  257 => 117,  249 => 116,  243 => 115,  237 => 112,  233 => 111,  229 => 109,  225 => 107,  213 => 100,  199 => 89,  195 => 87,  183 => 80,  176 => 75,  173 => 74,  164 => 71,  161 => 70,  157 => 69,  151 => 66,  147 => 65,  143 => 63,  139 => 61,  133 => 57,  129 => 56,  114 => 44,  107 => 40,  101 => 37,  94 => 33,  88 => 30,  82 => 27,  58 => 5,  54 => 4,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "home/index.html.twig", "/Users/admin/Desktop/codeinfo/templates/home/index.html.twig");
    }
}
