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
class __TwigTemplate_1517b94f28b139c843bac7f56d8b6a7c6a0762d24b612cc51d63f6089c23f666 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Partials/_header.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Partials/_header.html.twig"));

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
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 28, $this->source); })()), "user", [], "any", false, false, false, 28)) {
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
            ";
            // line 35
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 36
                echo "            <li><a class=\"dropdown-item\" href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin");
                echo "\">Admin</a></li>
            ";
            }
            // line 38
            echo "          </ul>
        </li>
      
        <li class=\"nav-item\">
        <a class=\"nav-link fw-bold\" href=\"";
            // line 42
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Me déconnecter</a>
        </li>
        ";
        } else {
            // line 45
            echo "        <li class=\"nav-item\">
        <a class=\"nav-link fw-bold\" href=\"";
            // line 46
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            echo "\">M'inscrire</a>
        </li>
         <li class=\"nav-item\">
        <a class=\"nav-link fw-bold\" href=\"";
            // line 49
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">Me connecter</a>
        </li>
        </ul>
        ";
        }
        // line 53
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
    <p class=\"lead fw-bold text-white\">Vous trouverez des articles pour le développement web</p>
  
 </div>
 </div>
  
  
    
 
  
 <script src=\"https://kit.fontawesome.com/c18b1bb06b.js\" crossorigin=\"anonymous\"></script>
 
     ";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  133 => 53,  126 => 49,  120 => 46,  117 => 45,  111 => 42,  105 => 38,  99 => 36,  97 => 35,  93 => 34,  86 => 29,  84 => 28,  69 => 16,  63 => 13,  57 => 10,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"navbar navbar-expand-lg position-absolute \">
  <div class=\"container-fluid\">
    <a class=\"navbar-brand\" href=\"{{path('home')}}\">CodeInfo</a>
    <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNavDropdown\" aria-controls=\"navbarNavDropdown\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
      <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarNavDropdown\">
      <ul class=\"navbar-nav\">
        <li class=\"nav-item\">
          <a class=\"nav-link active\" aria-current=\"page\" href=\"{{path('home')}}\">Accueil</a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"{{path('post')}}\">Posts</a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"{{path('tag')}}\">Tags</a>
        </li>
       
      </ul>
      
    
    
  </div>
  <div class=\"justify-content-right float-md-end d-flex\">
        
        <ul class=\"navbar nav ms-auto mb-2 mb-lg-0\">
        <!-- Si je suis connecter je peux afficher mon profil et me deconnecter -->
        {% if app.user %}
         <li class=\"nav-item dropdown\">
          <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownMenuLink\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
            Mon compte
          </a>
          <ul class=\"dropdown-menu bg-black\" aria-labelledby=\"navbarDropdownMenuLink\">
            <li><a class=\"dropdown-item\" href=\"{{path('user')}}\">Voir mon compte</a></li>
            {% if is_granted ('ROLE_ADMIN') %}
            <li><a class=\"dropdown-item\" href=\"{{path('admin')}}\">Admin</a></li>
            {% endif %}
          </ul>
        </li>
      
        <li class=\"nav-item\">
        <a class=\"nav-link fw-bold\" href=\"{{path('app_logout')}}\">Me déconnecter</a>
        </li>
        {% else %}
        <li class=\"nav-item\">
        <a class=\"nav-link fw-bold\" href=\"{{path('app_register')}}\">M'inscrire</a>
        </li>
         <li class=\"nav-item\">
        <a class=\"nav-link fw-bold\" href=\"{{path('app_login')}}\">Me connecter</a>
        </li>
        </ul>
        {% endif %}

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
    <p class=\"lead fw-bold text-white\">Vous trouverez des articles pour le développement web</p>
  
 </div>
 </div>
  
  
    
 
  
 <script src=\"https://kit.fontawesome.com/c18b1bb06b.js\" crossorigin=\"anonymous\"></script>
 
     ", "Partials/_header.html.twig", "/Users/admin/Desktop/codeinfo/templates/Partials/_header.html.twig");
    }
}
