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

/* Partials/_header.html.twig */
class __TwigTemplate_d3fb7dc4718427463aed402cfe6bfeb8efa4a36b26f3567b332e0f0b3ae4d7a9 extends Template
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
        echo "<nav class=\"navbar navbar-expand-lg position-absolute \">
  <div class=\"container-fluid\">
    <a class=\"navbar-brand\" href=\"";
        // line 3
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">CodeInfo</a>
    <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNavDropdown\" aria-controls=\"navbarNavDropdown\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
      <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarNavDropdown\">
      <ul class=\"navbar-nav\">
        <li class=\"nav-item\">
          <a class=\"nav-link active\" aria-current=\"page\" href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">Accueil</a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("post");
        echo "\">Posts</a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("tag");
        echo "\">Tags</a>
        </li>
       
      </ul>
      
    
    
  </div>
  <div class=\"justify-content-right float-md-end d-flex\">
        
        <ul class=\"navbar nav ms-auto mb-2 mb-lg-0\">
        <!-- Si je suis connecter je peux afficher mon profil et me deconnecter -->
        ";
        // line 28
        if (twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 28)) {
            // line 29
            echo "         <li class=\"nav-item dropdown\">
          <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownMenuLink\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
            Mon compte
          </a>
          <ul class=\"dropdown-menu bg-black\" aria-labelledby=\"navbarDropdownMenuLink\">
            <li><a class=\"dropdown-item\" href=\"";
            // line 34
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user");
            echo "\">Voir mon compte</a></li>
            <li><a class=\"dropdown-item\" href=\"#\">Another action</a></li>
            <li><a class=\"dropdown-item\" href=\"#\">Something else here</a></li>
          </ul>
        </li>
      
        <li class=\"nav-item\">
        <a class=\"nav-link fw-bold\" href=\"";
            // line 41
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Me déconnecter</a>
        </li>
        ";
        } else {
            // line 44
            echo "        <li class=\"nav-item\">
        <a class=\"nav-link fw-bold\" href=\"";
            // line 45
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            echo "\">M'inscrire</a>
        </li>
         <li class=\"nav-item\">
        <a class=\"nav-link fw-bold\" href=\"";
            // line 48
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">Me connecter</a>
        </li>
        </ul>
        ";
        }
        // line 52
        echo "
      </div>
  </div>
</nav>

<div class=\"d-flex h-50 text-center text-white cont\">
<div class=\"cover-container d-flex w-100 h-100 p-3 mx-auto flex-column\">
  <header class=\"mb-auto\">
    <div>
      
      
    </div>
  </header>

  <div class=\"px3\">
    <h1 class=\"fw-bold text-white\">Code info</h1>
    <p class=\"lead fw-bold text-white\">Vous trouverez des articles sur symfony et flutter</p>
  
 </div>
 </div>
  
  
    
 
  
 <script src=\"https://kit.fontawesome.com/c18b1bb06b.js\" crossorigin=\"anonymous\"></script>
 
     ";
    }

    public function getTemplateName()
    {
        return "Partials/_header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 52,  112 => 48,  106 => 45,  103 => 44,  97 => 41,  87 => 34,  80 => 29,  78 => 28,  63 => 16,  57 => 13,  51 => 10,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Partials/_header.html.twig", "/Users/admin/Desktop/codeinfo/templates/Partials/_header.html.twig");
    }
}
