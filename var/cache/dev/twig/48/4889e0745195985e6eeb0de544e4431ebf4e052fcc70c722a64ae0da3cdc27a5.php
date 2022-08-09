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

/* @Recaptcha/form/recaptcha.html.twig */
class __TwigTemplate_df30111fd4bf3576c4fe713e7163a621e32e8c31308302d30cad5330c05b8132 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'recaptcha_widget' => [$this, 'block_recaptcha_widget'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Recaptcha/form/recaptcha.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Recaptcha/form/recaptcha.html.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('recaptcha_widget', $context, $blocks);
        // line 59
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_recaptcha_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "recaptcha_widget"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "recaptcha_widget"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        <div id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 5, $this->source); })()), "html", null, true);
        echo "\" data-toggle=\"recaptcha\" data-type=\"";
        echo twig_escape_filter($this->env, (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 5, $this->source); })()), "html", null, true);
        echo "\">  
        </div>
        <script type=\"text/javascript\">
        /**
         * The callback function executed
         * once all the Google dependencies have loaded
         */
        function onGoogleReCaptchaApiLoad() {
            var widgets = document.querySelectorAll('[data-toggle=\"recaptcha\"]');
            for (var i = 0; i < widgets.length; i++) {
                renderReCaptcha(widgets[i]);
            }
        }
        function renderReCaptcha(widget) {
            var form = widget.closest('form');
            var widgetType = widget.getAttribute('data-type');
            var widgetParameters = {
                'sitekey': '";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["google_site_key"]) || array_key_exists("google_site_key", $context) ? $context["google_site_key"] : (function () { throw new RuntimeError('Variable "google_site_key" does not exist.', 22, $this->source); })()), "html", null, true);
        echo "'
            };
            if (widgetType == 'invisible') {
                widgetParameters['callback'] = function () {
                    form.submit()
                };
                widgetParameters['size'] = \"invisible\";
            }
            var widgetId = grecaptcha.render(widget, widgetParameters);
            if (widgetType == 'invisible') {
                bindChallengeToSubmitButtons(form, widgetId);
            }
        }
        function bindChallengeToSubmitButtons(form, reCaptchaId) {
            getSubmitButtons(form).forEach(function (button) {
                button.addEventListener('click', function (e) {
                    e.preventDefault();
                    grecaptcha.execute(reCaptchaId);
                });
            });
        }
        function getSubmitButtons(form) {
            var buttons = form.querySelectorAll('button, input');
            var submitButtons = [];
            for (var i= 0; i < buttons.length; i++) {
                var button = buttons[i];
                if (button.getAttribute('type') == 'submit') {
                    submitButtons.push(button);
                }
            }
            return submitButtons;
        }
    </script>
    <script type=\"text/javascript\" src=\"https://www.google.com/recaptcha/api.js?onload=onGoogleReCaptchaApiLoad&render=explicit&hl=";
        // line 55
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 55, $this->source); })()), "request", [], "any", false, false, false, 55), "locale", [], "any", false, false, false, 55), "html", null, true);
        echo "\" async defer></script>

    ";
        $___internal_parse_0_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 4
        echo twig_spaceless($___internal_parse_0_);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Recaptcha/form/recaptcha.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  138 => 4,  132 => 55,  96 => 22,  73 => 5,  70 => 4,  60 => 3,  49 => 59,  47 => 3,  44 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# @Recaptcha/form/recaptcha.html.twig #}

{% block recaptcha_widget %}
    {% apply spaceless %}
        <div id=\"{{ id }}\" data-toggle=\"recaptcha\" data-type=\"{{ type }}\">  
        </div>
        <script type=\"text/javascript\">
        /**
         * The callback function executed
         * once all the Google dependencies have loaded
         */
        function onGoogleReCaptchaApiLoad() {
            var widgets = document.querySelectorAll('[data-toggle=\"recaptcha\"]');
            for (var i = 0; i < widgets.length; i++) {
                renderReCaptcha(widgets[i]);
            }
        }
        function renderReCaptcha(widget) {
            var form = widget.closest('form');
            var widgetType = widget.getAttribute('data-type');
            var widgetParameters = {
                'sitekey': '{{ google_site_key }}'
            };
            if (widgetType == 'invisible') {
                widgetParameters['callback'] = function () {
                    form.submit()
                };
                widgetParameters['size'] = \"invisible\";
            }
            var widgetId = grecaptcha.render(widget, widgetParameters);
            if (widgetType == 'invisible') {
                bindChallengeToSubmitButtons(form, widgetId);
            }
        }
        function bindChallengeToSubmitButtons(form, reCaptchaId) {
            getSubmitButtons(form).forEach(function (button) {
                button.addEventListener('click', function (e) {
                    e.preventDefault();
                    grecaptcha.execute(reCaptchaId);
                });
            });
        }
        function getSubmitButtons(form) {
            var buttons = form.querySelectorAll('button, input');
            var submitButtons = [];
            for (var i= 0; i < buttons.length; i++) {
                var button = buttons[i];
                if (button.getAttribute('type') == 'submit') {
                    submitButtons.push(button);
                }
            }
            return submitButtons;
        }
    </script>
    <script type=\"text/javascript\" src=\"https://www.google.com/recaptcha/api.js?onload=onGoogleReCaptchaApiLoad&render=explicit&hl={{app.request.locale}}\" async defer></script>

    {% endapply %}
{% endblock %}

", "@Recaptcha/form/recaptcha.html.twig", "/Users/admin/Desktop/codeinfo/vendor/victor-prdh/recaptcha-bundle/src/Resources/views/form/recaptcha.html.twig");
    }
}
