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

/* user/index.html.twig */
class __TwigTemplate_8c72c3f7f579e8a2c493dbff536c724c8c7f5e0c41e236c94c0e160be70f436c extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "user/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Mon profil";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "
    <div class=\"container page\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"panel panel-default\">
                    <div class=\"panel-heading\">
                        <h3 class=\"panel-title\">
                            <span class=\"glyphicon glyphicon-bookmark\"></span>
                            <span>Mon profil</span>
                        </h3>
                    </div>
                    <div class=\"panel-body\">
                        <table class=\"table table-bordered table-striped table-hover table-condensed\">
                            <thead>
                            <tr>
                                
                                <th>nom</th>
                               
                                <th>prénom</th>
                                 <th>Email</th>
                                
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                          
                                <tr>
                                  
                                    <td>";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 34), "nom", [], "any", false, false, false, 34), "html", null, true);
        echo "</td>
                                       <td>";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 35), "prenom", [], "any", false, false, false, 35), "html", null, true);
        echo "</td>
                                   
                                    <td>";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 37), "email", [], "any", false, false, false, 37), "html", null, true);
        echo "</td>
                                    ";
        // line 39
        echo "                                    <td>
                                         <a href=\"";
        // line 40
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_password_edit");
        echo "\" class=\"btn btn-primary\">Modifier le mot de passe</a>
                                        <a href=\"";
        // line 41
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_profil_edit");
        echo "\" class=\"btn btn-primary\">Modifier le profil</a> 
                                    </td>
                                </tr>
                           
                            </tbody>
                        </table>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "user/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 41,  104 => 40,  101 => 39,  97 => 37,  92 => 35,  88 => 34,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "user/index.html.twig", "/Users/admin/Desktop/codeinfo/templates/user/index.html.twig");
    }
}
