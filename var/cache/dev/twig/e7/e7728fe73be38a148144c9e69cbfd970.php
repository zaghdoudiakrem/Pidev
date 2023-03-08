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

/* offre/show.html.twig */
class __TwigTemplate_396a54bac2f8e0f4febc5937a0ba9e16 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "offre/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "offre/show.html.twig"));

        $this->parent = $this->loadTemplate("base2.html.twig", "offre/show.html.twig", 1);
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
      <h1>Afficher Offre</h1>
      <nav>
        <ol class=\"breadcrumb\">
          <li class=\"breadcrumb-item\">Accueil</li>
          <li class=\"breadcrumb-item\">Tables</li>
          <li class=\"breadcrumb-item active\">Table Des Offres</li>
           <li class=\"breadcrumb-item active\">Afficher Offre</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class=\"section\">
      <div class=\"row\">
        <div class=\"col-lg-6\">

          <div class=\"card\">
            <div class=\"card-body\">
              <h5 class=\"card-title\">Bienvenue</h5>

            ";
        // line 29
        echo "
     <table class=\"table table-striped\">
        <tbody>
            <tr>
                <th>Id </th>
                <td>";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["offre"]) || array_key_exists("offre", $context) ? $context["offre"] : (function () { throw new RuntimeError('Variable "offre" does not exist.', 34, $this->source); })()), "id", [], "any", false, false, false, 34), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Titre</th>
                <td>";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["offre"]) || array_key_exists("offre", $context) ? $context["offre"] : (function () { throw new RuntimeError('Variable "offre" does not exist.', 38, $this->source); })()), "titre", [], "any", false, false, false, 38), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["offre"]) || array_key_exists("offre", $context) ? $context["offre"] : (function () { throw new RuntimeError('Variable "offre" does not exist.', 42, $this->source); })()), "description", [], "any", false, false, false, 42), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Prix</th>
                <td>";
        // line 46
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["offre"]) || array_key_exists("offre", $context) ? $context["offre"] : (function () { throw new RuntimeError('Variable "offre" does not exist.', 46, $this->source); })()), "prix", [], "any", false, false, false, 46), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Validite Offre</th>
                <td>";
        // line 50
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["offre"]) || array_key_exists("offre", $context) ? $context["offre"] : (function () { throw new RuntimeError('Variable "offre" does not exist.', 50, $this->source); })()), "ValiditeOffre", [], "any", false, false, false, 50), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Image D'offre</th>
                <td></br><img src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, (isset($context["offre"]) || array_key_exists("offre", $context) ? $context["offre"] : (function () { throw new RuntimeError('Variable "offre" does not exist.', 54, $this->source); })()), "ImageOffre", [], "any", false, false, false, 54)), "html", null, true);
        echo "\" width=\"300\" height=\"150\"></td>
                
            </tr>
        </tbody>
    </table>

    ";
        // line 61
        echo "    </br>
    <a class=\"btn btn-primary mr-2\" href=\"";
        // line 62
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_offre_index");
        echo "\">Retour</a>
  
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
        return "offre/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 62,  163 => 61,  154 => 54,  147 => 50,  140 => 46,  133 => 42,  126 => 38,  119 => 34,  112 => 29,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base2.html.twig' %}

{% block title %}New Offre{% endblock %}

{% block body %}
   <main id=\"main\" class=\"main\">

    <div class=\"pagetitle\">
      <h1>Afficher Offre</h1>
      <nav>
        <ol class=\"breadcrumb\">
          <li class=\"breadcrumb-item\">Accueil</li>
          <li class=\"breadcrumb-item\">Tables</li>
          <li class=\"breadcrumb-item active\">Table Des Offres</li>
           <li class=\"breadcrumb-item active\">Afficher Offre</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class=\"section\">
      <div class=\"row\">
        <div class=\"col-lg-6\">

          <div class=\"card\">
            <div class=\"card-body\">
              <h5 class=\"card-title\">Bienvenue</h5>

            {# <h1>Table Des Offres</h1> #}

     <table class=\"table table-striped\">
        <tbody>
            <tr>
                <th>Id </th>
                <td>{{ offre.id }}</td>
            </tr>
            <tr>
                <th>Titre</th>
                <td>{{ offre.titre }}</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>{{ offre.description }}</td>
            </tr>
            <tr>
                <th>Prix</th>
                <td>{{ offre.prix }}</td>
            </tr>
            <tr>
                <th>Validite Offre</th>
                <td>{{ offre.ValiditeOffre }}</td>
            </tr>
            <tr>
                <th>Image D'offre</th>
                <td></br><img src=\"{{ asset(offre.ImageOffre) }}\" width=\"300\" height=\"150\"></td>
                
            </tr>
        </tbody>
    </table>

    {# <a href=\"{{ path('app_offre_new') }}\">Create new</a> #}
    </br>
    <a class=\"btn btn-primary mr-2\" href=\"{{ path('app_offre_index') }}\">Retour</a>
  
            </div>
          </div>

        </div>

        
      </div>
    </section>

  </main>
{% endblock %}


", "offre/show.html.twig", "C:\\xampp\\htdocs\\PiDEV_V06\\PiDEV_V06\\templates\\offre\\show.html.twig");
    }
}
