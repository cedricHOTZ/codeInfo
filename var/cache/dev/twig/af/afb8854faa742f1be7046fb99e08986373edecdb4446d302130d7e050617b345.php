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

/* fragments/modal_form.html.twig */
class __TwigTemplate_dea9d2bf4e252d4235f5ea9765c00ba56fe56e6fa4724379190fd4f9c3d408f9 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "fragments/modal_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "fragments/modal_form.html.twig"));

        // line 1
        echo "
 
 <script>
var myModal = document.getElementById('myModal')
var myInput = document.getElementById('myInput')
var modal = new bootstrap.Modal('#myModal')
var dropdown = new bootstrap.Dropdown('[data-bs-toggle=\"dropdown\"]')

</script>        
           <!-- Button trigger modal -->
<p class=\"lead text-center p-3\">
           <!-- Button trigger modal -->
<button type=\"button\" class=\"boutton-header\" id=\"partagePost\" data-bs-toggle=\"modal\" data-bs-target=\"#staticBackdrop\">
 Partager un articlessss
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
</div> ";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "fragments/modal_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 44,  96 => 40,  90 => 37,  83 => 33,  77 => 30,  71 => 27,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
 
 <script>
var myModal = document.getElementById('myModal')
var myInput = document.getElementById('myInput')
var modal = new bootstrap.Modal('#myModal')
var dropdown = new bootstrap.Dropdown('[data-bs-toggle=\"dropdown\"]')

</script>        
           <!-- Button trigger modal -->
<p class=\"lead text-center p-3\">
           <!-- Button trigger modal -->
<button type=\"button\" class=\"boutton-header\" id=\"partagePost\" data-bs-toggle=\"modal\" data-bs-target=\"#staticBackdrop\">
 Partager un articlessss
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
</div> ", "fragments/modal_form.html.twig", "/Users/admin/Desktop/codeinfo/templates/fragments/modal_form.html.twig");
    }
}
