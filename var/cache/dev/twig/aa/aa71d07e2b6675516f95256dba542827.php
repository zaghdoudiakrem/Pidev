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

/* stripe/index.html.twig */
class __TwigTemplate_fd99d1f716be9b6fe39b98bab6322238 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'contenu' => [$this, 'block_contenu'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "stripe/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "stripe/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "stripe/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Votre panier";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_contenu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contenu"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contenu"));

        // line 6
        echo "<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>Stripe Payment Gateway</title>
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC\" crossorigin=\"anonymous\">
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM\" crossorigin=\"anonymous\"></script>
</head>
<body>
    <div class=\"container\">
        <div class=\"row justify-content-center\">
            <div class=\"col-4\">
                <div class=\"card\">
                    <div class=\"card-body\">
                        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 19, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 19));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 20
            echo "                            <div 
                                style=\"color: green;
                                    border: 2px green solid;
                                    text-align: center;
                                    padding: 5px;margin-bottom: 10px;\">
                                ";
            // line 25
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "  
                        <form id='checkout-form' method='post' action=\"";
        // line 29
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_stripe_charge");
        echo "\">             
                            <input type='hidden' name='stripeToken' id='stripe-token-id'>                              
                            <label for=\"card-element\" class=\"mb-5\">Checkout Forms</label>
                            <br>
                            <div id=\"card-element\" class=\"form-control\" ></div>
                            <button 
                                id='pay-btn'
                                class=\"btn btn-success mt-3\"
                                type=\"button\"
                                style=\"margin-top: 20px; width: 100%;padding: 7px;\"
                                onclick=\"createToken()\">Payer
                            </button>
                        <form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src=\"https://js.stripe.com/v3/\" ></script>
    <script>
        var stripe = Stripe(\"";
        // line 50
        echo twig_escape_filter($this->env, (isset($context["stripe_key"]) || array_key_exists("stripe_key", $context) ? $context["stripe_key"] : (function () { throw new RuntimeError('Variable "stripe_key" does not exist.', 50, $this->source); })()), "html", null, true);
        echo "\");
        var elements = stripe.elements();
        var cardElement = elements.create('card');
        cardElement.mount('#card-element');
     
        function createToken() {
            document.getElementById(\"pay-btn\").disabled = true;
            stripe.createToken(cardElement).then(function(result) {
     
                     
                if(typeof result.error != 'undefined') {
                    document.getElementById(\"pay-btn\").disabled = false;
                    alert(result.error.message);
                }
     
                // creating token success
                if(typeof result.token != 'undefined') {
                    document.getElementById(\"stripe-token-id\").value = result.token.id;
                    document.getElementById('checkout-form').submit();
                }
            });
        }
    </script>
</body>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "stripe/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 50,  126 => 29,  123 => 28,  114 => 25,  107 => 20,  103 => 19,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Votre panier{% endblock %}

{% block contenu %}
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>Stripe Payment Gateway</title>
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC\" crossorigin=\"anonymous\">
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM\" crossorigin=\"anonymous\"></script>
</head>
<body>
    <div class=\"container\">
        <div class=\"row justify-content-center\">
            <div class=\"col-4\">
                <div class=\"card\">
                    <div class=\"card-body\">
                        {% for message in app.flashes('success') %}
                            <div 
                                style=\"color: green;
                                    border: 2px green solid;
                                    text-align: center;
                                    padding: 5px;margin-bottom: 10px;\">
                                {{ message }}
                            </div>
                        {% endfor %}
  
                        <form id='checkout-form' method='post' action=\"{{ path('app_stripe_charge') }}\">             
                            <input type='hidden' name='stripeToken' id='stripe-token-id'>                              
                            <label for=\"card-element\" class=\"mb-5\">Checkout Forms</label>
                            <br>
                            <div id=\"card-element\" class=\"form-control\" ></div>
                            <button 
                                id='pay-btn'
                                class=\"btn btn-success mt-3\"
                                type=\"button\"
                                style=\"margin-top: 20px; width: 100%;padding: 7px;\"
                                onclick=\"createToken()\">Payer
                            </button>
                        <form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src=\"https://js.stripe.com/v3/\" ></script>
    <script>
        var stripe = Stripe(\"{{stripe_key}}\");
        var elements = stripe.elements();
        var cardElement = elements.create('card');
        cardElement.mount('#card-element');
     
        function createToken() {
            document.getElementById(\"pay-btn\").disabled = true;
            stripe.createToken(cardElement).then(function(result) {
     
                     
                if(typeof result.error != 'undefined') {
                    document.getElementById(\"pay-btn\").disabled = false;
                    alert(result.error.message);
                }
     
                // creating token success
                if(typeof result.token != 'undefined') {
                    document.getElementById(\"stripe-token-id\").value = result.token.id;
                    document.getElementById('checkout-form').submit();
                }
            });
        }
    </script>
</body>

{% endblock %}", "stripe/index.html.twig", "C:\\xampp\\htdocs\\PiDEV_V06\\PiDEV_V06\\templates\\stripe\\index.html.twig");
    }
}
