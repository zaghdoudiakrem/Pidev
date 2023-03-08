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

/* contrat/index3.html.twig */
class __TwigTemplate_607c899062f874a52b4b78553df3dbed extends Template
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
        return "base2.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contrat/index3.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contrat/index3.html.twig"));

        $this->parent = $this->loadTemplate("base2.html.twig", "contrat/index3.html.twig", 1);
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

        echo "New Offre";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "   <main id=\"main\" class=\"main\">

    <div class=\"pagetitle\">
      <h1>Ajouter Un Contrat</h1>
      <nav>
        <ol class=\"breadcrumb\">
          <li class=\"breadcrumb-item\">Accueil </li>
          <li class=\"breadcrumb-item\">Contrats</li>
          <li class=\"breadcrumb-item active\">Ajouter Contrat</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class=\"section\">
      <div class=\"row\">
        <div class=\"col-lg-7\">

          <div class=\"card\">
            <div class=\"card-body\">
            </br>
             <div class=\"alert alert-success \" role=\"alert\">
                <h4 class=\"alert-heading\">Formulaire Envoyé</h4>
                <p>Cher client, votre contrat a été envoyé avec succès. Il sera traité prochainement.</p>
                <hr>
                <p class=\"mb-0\">Merci pour choisir 4Roues Assurance</p>
                ";
        // line 32
        echo "              </div>
              ";
        // line 34
        echo "            ";
        // line 35
        echo "           
            
                  <a class=\"btn btn-primary  rounded-pill\" href=\"";
        // line 37
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contrat_index");
        echo "\">
                  Terminer  <i class=\"bi bi-check-circle\"></i>
                  </a>

    ";
        // line 42
        echo "
    ";
        // line 44
        echo "  
            </div>
          </div>

        </div>

        
      </div>
    </section>

  </main>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "contrat/index3.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 44,  131 => 42,  124 => 37,  120 => 35,  118 => 34,  115 => 32,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base2.html.twig' %}

{% block title %}New Offre{% endblock %}

{% block body %}
   <main id=\"main\" class=\"main\">

    <div class=\"pagetitle\">
      <h1>Ajouter Un Contrat</h1>
      <nav>
        <ol class=\"breadcrumb\">
          <li class=\"breadcrumb-item\">Accueil </li>
          <li class=\"breadcrumb-item\">Contrats</li>
          <li class=\"breadcrumb-item active\">Ajouter Contrat</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class=\"section\">
      <div class=\"row\">
        <div class=\"col-lg-7\">

          <div class=\"card\">
            <div class=\"card-body\">
            </br>
             <div class=\"alert alert-success \" role=\"alert\">
                <h4 class=\"alert-heading\">Formulaire Envoyé</h4>
                <p>Cher client, votre contrat a été envoyé avec succès. Il sera traité prochainement.</p>
                <hr>
                <p class=\"mb-0\">Merci pour choisir 4Roues Assurance</p>
                {# <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button> #}
              </div>
              {# <img src=\"{{asset ('assets/img/clients/client-9.png')}}\" class=\"img-fluid\" alt=\"\"> #}
            {# <h1>Table Des Offres</h1> #}
           
            
                  <a class=\"btn btn-primary  rounded-pill\" href=\"{{ path('app_contrat_index') }}\">
                  Terminer  <i class=\"bi bi-check-circle\"></i>
                  </a>

    {# <a href=\"{{ path('app_offre_new') }}\">Create new</a> #}

    {# <a href=\"{{ path('app_offre_index') }}\"></a> #}
  
            </div>
          </div>

        </div>

        
      </div>
    </section>

  </main>
{% endblock %}
", "contrat/index3.html.twig", "C:\\xampp\\htdocs\\PiDEV_V06\\PiDEV_V06\\templates\\contrat\\index3.html.twig");
    }
}
