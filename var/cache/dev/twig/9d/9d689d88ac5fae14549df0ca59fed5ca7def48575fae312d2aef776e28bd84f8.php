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

/* Partials/_footer.html.twig */
class __TwigTemplate_482d3076e7e45f6135d460444178e9b74a900eab057d54ed60ce3b7f15d13032 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Partials/_footer.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Partials/_footer.html.twig"));

        // line 1
        echo "
 
 <footer class=\"d-flex text-center link-light align-items-center py-3  \">
    <p class=\"col-md-8 mb-0  link-light light\">\t&copy;
\t\t";
        // line 5
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo "
\t\tCodeInfo</p>

    ";
        // line 14
        echo "
    <ul class=\"nav col-md-4 justify-content-end link-light\">
      <li class=\"nav-item \"><a href=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\" class=\"nav-link px-2  link-light \">Accueil</a></li>
      <li class=\"nav-item\"><a href=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        echo "\" class=\"nav-link px-2 link-light\">Contact</a></li>
      <li class=\"nav-item\"><a href=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mentions");
        echo "\" class=\"nav-link px-2 link-light\">Mentions légales</a></li>
      <li class=\"nav-item\"><a href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("post");
        echo "\" class=\"nav-link px-2 link-light\">Posts</a></li>
      
    </ul>
  </footer>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Partials/_footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 19,  67 => 18,  63 => 17,  59 => 16,  55 => 14,  49 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
 
 <footer class=\"d-flex text-center link-light align-items-center py-3  \">
    <p class=\"col-md-8 mb-0  link-light light\">\t&copy;
\t\t{{'now'|date('Y') }}
\t\tCodeInfo</p>

    {# <ul class=\"list-unstyled d-flex  link-light\">
        <li class=\"ms-3\"><a><i class=\"bi bi-instagram  link-light\"></i></a></li>
         <li class=\"ms-3\"><a><i class=\"bi bi-facebook  link-light\"></i></a></li>
          <li class=\"ms-3\"><a><i class=\"bi bi-twitter  link-light\"></i></a></li>
        
      </ul> #}

    <ul class=\"nav col-md-4 justify-content-end link-light\">
      <li class=\"nav-item \"><a href=\"{{path('home')}}\" class=\"nav-link px-2  link-light \">Accueil</a></li>
      <li class=\"nav-item\"><a href=\"{{path('contact')}}\" class=\"nav-link px-2 link-light\">Contact</a></li>
      <li class=\"nav-item\"><a href=\"{{path('mentions')}}\" class=\"nav-link px-2 link-light\">Mentions légales</a></li>
      <li class=\"nav-item\"><a href=\"{{path('post')}}\" class=\"nav-link px-2 link-light\">Posts</a></li>
      
    </ul>
  </footer>
", "Partials/_footer.html.twig", "/Users/admin/Desktop/codeinfo/templates/Partials/_footer.html.twig");
    }
}
