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

/* home/mentions.html.twig */
class __TwigTemplate_02b9e4868ebcea659434006c8dc9113c6bc8a9c3afc6932262b89269df91369e extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "home/mentions.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "<div class=\"container\">
<h1 class=\"text-center mb-5 mt-5\">Mentions légales</h1>
<p class=\"text-white\">Conformément aux dispositions des Articles 6-III et 19 de la Loi n°2004-575 du 21 juin 2004 pour la
Confiance dans l’économie numérique, dite L.C.E.N., il est porté à la connaissance des utilisateurs et
visiteurs, ci-après l\"\"Utilisateur\", du site codeinfo.fr , ci-après le \"Site\", les présentes mentions
légales.</p>
<p class=\"text-white\">
La connexion et la navigation sur le Site par l’Utilisateur implique acceptation intégrale et sans réserve
des présentes mentions légales.
Ces dernières sont accessibles sur le Site à la rubrique « Mentions légales ».</p>

<h2 style=\"color:#1A2832\">ARTICLE 1 - L'EDITEUR</h2>
<p class=\"text-white\">
L’édition et la direction de la publication du Site est assurée par fr, domiciliée 2 rue de l'eglise, dont le
numéro de téléphone est 0682352171, et l'adresse e-mail bob@gmail.com.
ci-après l'\"Editeur\".</p>

<h2 style=\"color:#1A2832\">ARTICLE 2 - L'HEBERGEUR</h2>
<p class=\"text-white\">
L'hébergeur du Site est la société ovh, dont le siège social est situé au 2 ru de roubais , avec le
numéro de téléphone : 056566566 + adresse mail de contact</p>

<h2 style=\"color:#1A2832\">ARTICLE 3 - ACCES AU SITE</h2>
<p class=\"text-white\">
Le Site est accessible en tout endroit, 7j/7, 24h/24 sauf cas de force majeure, interruption
programmée ou non et pouvant découlant d’une nécessité de maintenance.
En cas de modification, interruption ou suspension du Site, l'Editeur ne saurait être tenu responsable.</p>
<h2 style=\"color:#1A2832\">ARTICLE 4 - COLLECTE DES DONNEES</h2>
<p class=\"text-white\">
Le Site assure à l'Utilisateur une collecte et un traitement d'informations personnelles dans le respect
de la vie privée conformément à la loi n°78-17 du 6 janvier 1978 relative à l'informatique, aux fichiers
et aux libertés.
En vertu de la loi Informatique et Libertés, en date du 6 janvier 1978, l'Utilisateur dispose d'un droit
d'accès, de rectification, de suppression et d'opposition de ses données personnelles. L'Utilisateur
exerce ce droit :
· par mail à l'adresse email bob@gmail.com
· via son espace personnel ;
</p>
<p class=\"text-white\">
Toute utilisation, reproduction, diffusion, commercialisation, modification de toute ou partie du Site,
sans autorisation de l’Editeur est prohibée et pourra entraînée des actions et poursuites judiciaires
telles que notamment prévues par le Code de la propriété intellectuelle et le Code civil</p>

</div>
";
    }

    public function getTemplateName()
    {
        return "home/mentions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 6,  53 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "home/mentions.html.twig", "/Users/admin/Desktop/codeinfo/templates/home/mentions.html.twig");
    }
}
