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
class __TwigTemplate_5310f1fc72c47c6ed20929430f89445c0a098ed36f5f632e2d150033d707c3aa extends Template
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
        return array (  65 => 19,  61 => 18,  57 => 17,  53 => 16,  49 => 14,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Partials/_footer.html.twig", "/Users/admin/Desktop/codeinfo/templates/Partials/_footer.html.twig");
    }
}
