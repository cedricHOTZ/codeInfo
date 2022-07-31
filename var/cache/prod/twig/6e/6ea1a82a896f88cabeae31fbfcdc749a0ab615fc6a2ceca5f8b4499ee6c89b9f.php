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

/* tag/index.html.twig */
class __TwigTemplate_0205a8a4585bc3f7c858d394c0bf4d86a0ad3dacccdb61d8b703f9182442d725 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "tag/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Tout les tags";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "
<div class=\"example-wrapper\">
    <h1 class=\"text-white text-center mt-5 mb-5\">Tout les tags</h1>

   
    <ul>
    ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tag"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["tags"]) {
            // line 13
            echo "   
        ";
            // line 15
            echo "  <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("tag_show", ["slug" => twig_get_attribute($this->env, $this->source, $context["tags"], "slug", [], "any", false, false, false, 15)]), "html", null, true);
            echo "\" ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tags"], "nom", [], "any", false, false, false, 15), "html", null, true);
            echo "<button type=\"button\" class=\"btn btn-outline-primary\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tags"], "nom", [], "any", false, false, false, 15), "html", null, true);
            echo "</button> </a>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tags'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "    </ul>
</div>
";
    }

    public function getTemplateName()
    {
        return "tag/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 17,  73 => 15,  70 => 13,  66 => 12,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "tag/index.html.twig", "/Users/admin/Desktop/codeinfo/templates/tag/index.html.twig");
    }
}
