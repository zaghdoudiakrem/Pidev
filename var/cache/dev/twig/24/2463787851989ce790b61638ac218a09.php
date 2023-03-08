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

/* contrat/show.html.twig */
class __TwigTemplate_c9118854dd51733e5b14cbeb9940a987 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contrat/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contrat/show.html.twig"));

        $this->parent = $this->loadTemplate("base2.html.twig", "contrat/show.html.twig", 1);
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

        echo "Contrat";
        
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
        echo "    <main id=\"main\" class=\"main\">

    <div class=\"pagetitle\">
      <h1>Afficher Contrat</h1>
      <nav>
        <ol class=\"breadcrumb\">
          <li class=\"breadcrumb-item\">Accueil</li>
          <li class=\"breadcrumb-item\">Tables</li>
          <li class=\"breadcrumb-item active\">Table Des Contrats</li>
           <li class=\"breadcrumb-item active\">Afficher Contrat</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class=\"section\">
      <div class=\"row\">
        <div class=\"col-lg-6\">

          <div class=\"card\">
            <div     id=\"element_a_imprimer\" class=\"card-body\">
              <h5 class=\"card-title\">Bienvenue</h5>

            ";
        // line 29
        echo "     <table class=\"table table-striped\">

        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contrat"]) || array_key_exists("contrat", $context) ? $context["contrat"] : (function () { throw new RuntimeError('Variable "contrat" does not exist.', 34, $this->source); })()), "id", [], "any", false, false, false, 34), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Validitedu</th>
                <td>";
        // line 38
        ((twig_get_attribute($this->env, $this->source, (isset($context["contrat"]) || array_key_exists("contrat", $context) ? $context["contrat"] : (function () { throw new RuntimeError('Variable "contrat" does not exist.', 38, $this->source); })()), "validitedu", [], "any", false, false, false, 38)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contrat"]) || array_key_exists("contrat", $context) ? $context["contrat"] : (function () { throw new RuntimeError('Variable "contrat" does not exist.', 38, $this->source); })()), "validitedu", [], "any", false, false, false, 38), "Y-m-d"), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
            <tr>
                <th>Validiteau</th>
                <td>";
        // line 42
        ((twig_get_attribute($this->env, $this->source, (isset($context["contrat"]) || array_key_exists("contrat", $context) ? $context["contrat"] : (function () { throw new RuntimeError('Variable "contrat" does not exist.', 42, $this->source); })()), "validiteau", [], "any", false, false, false, 42)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contrat"]) || array_key_exists("contrat", $context) ? $context["contrat"] : (function () { throw new RuntimeError('Variable "contrat" does not exist.', 42, $this->source); })()), "validiteau", [], "any", false, false, false, 42), "Y-m-d"), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
            <tr>
                <th>Photo_cin</th>
                <td></br><img src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, (isset($context["contrat"]) || array_key_exists("contrat", $context) ? $context["contrat"] : (function () { throw new RuntimeError('Variable "contrat" does not exist.', 46, $this->source); })()), "photoCin", [], "any", false, false, false, 46)), "html", null, true);
        echo "\" width=\"300\" height=\"150\"></td>
            </tr>
        </tbody>
    </table>

     ";
        // line 52
        echo "    </br>

    
     <script type=\"text/javascript\">
                        function imprimer_page(){
                             var element_a_imprimer = document.getElementById(\"partie-a-imprimer\");
                             window.print(element_a_imprimer);
                        }
                    </script>
                
                </br>
 <table class\"table table-striped\" >
<tbody >
            <tr>
                <td><a  class=\"btn btn-primary mr-2\" href=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contrat_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["contrat"]) || array_key_exists("contrat", $context) ? $context["contrat"] : (function () { throw new RuntimeError('Variable "contrat" does not exist.', 66, $this->source); })()), "id", [], "any", false, false, false, 66)]), "html", null, true);
        echo "\">Modifier</a></td>
                 
                 <td><form>
                    
                    <a href=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contratpdf", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["contrat"]) || array_key_exists("contrat", $context) ? $context["contrat"] : (function () { throw new RuntimeError('Variable "contrat" does not exist.', 70, $this->source); })()), "id", [], "any", false, false, false, 70)]), "html", null, true);
        echo "\" class=\"btn btn-primary mr-2\" target=\"_blank\">Imprimer</a>
                </form></td>
                <td><a class=\"btn btn-primary mr-2\" href=\"";
        // line 72
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contrat_index");
        echo "\">Retour</a></td>
            </tr>
        </tbody>
    </table>

    
     
  
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
        return "contrat/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 72,  171 => 70,  164 => 66,  148 => 52,  140 => 46,  133 => 42,  126 => 38,  119 => 34,  112 => 29,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base2.html.twig' %}

{% block title %}Contrat{% endblock %}

{% block body %}
    <main id=\"main\" class=\"main\">

    <div class=\"pagetitle\">
      <h1>Afficher Contrat</h1>
      <nav>
        <ol class=\"breadcrumb\">
          <li class=\"breadcrumb-item\">Accueil</li>
          <li class=\"breadcrumb-item\">Tables</li>
          <li class=\"breadcrumb-item active\">Table Des Contrats</li>
           <li class=\"breadcrumb-item active\">Afficher Contrat</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class=\"section\">
      <div class=\"row\">
        <div class=\"col-lg-6\">

          <div class=\"card\">
            <div     id=\"element_a_imprimer\" class=\"card-body\">
              <h5 class=\"card-title\">Bienvenue</h5>

            {# <h1>Table Des Offres</h1> #}
     <table class=\"table table-striped\">

        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ contrat.id }}</td>
            </tr>
            <tr>
                <th>Validitedu</th>
                <td>{{ contrat.validitedu ? contrat.validitedu|date('Y-m-d') : '' }}</td>
            </tr>
            <tr>
                <th>Validiteau</th>
                <td>{{ contrat.validiteau ? contrat.validiteau|date('Y-m-d') : '' }}</td>
            </tr>
            <tr>
                <th>Photo_cin</th>
                <td></br><img src=\"{{ asset(contrat.photoCin) }}\" width=\"300\" height=\"150\"></td>
            </tr>
        </tbody>
    </table>

     {# <a href=\"{{ path('app_offre_new') }}\">Create new</a> #}
    </br>

    
     <script type=\"text/javascript\">
                        function imprimer_page(){
                             var element_a_imprimer = document.getElementById(\"partie-a-imprimer\");
                             window.print(element_a_imprimer);
                        }
                    </script>
                
                </br>
 <table class\"table table-striped\" >
<tbody >
            <tr>
                <td><a  class=\"btn btn-primary mr-2\" href=\"{{ path('app_contrat_edit', {'id': contrat.id}) }}\">Modifier</a></td>
                 
                 <td><form>
                    
                    <a href=\"{{ path('app_contratpdf', {'id': contrat.id}) }}\" class=\"btn btn-primary mr-2\" target=\"_blank\">Imprimer</a>
                </form></td>
                <td><a class=\"btn btn-primary mr-2\" href=\"{{ path('app_contrat_index') }}\">Retour</a></td>
            </tr>
        </tbody>
    </table>

    
     
  
            </div>
          </div>

        </div>

        
      </div>
    </section>

  </main>
{% endblock %}
", "contrat/show.html.twig", "C:\\xampp\\htdocs\\PiDEV_V12\\PiDEV_V06\\PiDEV_V06\\templates\\contrat\\show.html.twig");
    }
}
