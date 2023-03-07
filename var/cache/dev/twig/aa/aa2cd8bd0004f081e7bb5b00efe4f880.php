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

/* contrat/index.html.twig */
class __TwigTemplate_4c9f26390aaa663d782c59d7b49f26d5 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contrat/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contrat/index.html.twig"));

        $this->parent = $this->loadTemplate("base2.html.twig", "contrat/index.html.twig", 1);
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
      <h1>Table Des Contrats</h1>
      <nav>
        <ol class=\"breadcrumb\">
          <li class=\"breadcrumb-item\">Accueil</li>
          <li class=\"breadcrumb-item\">Tables</li>
          <li class=\"breadcrumb-item active\">Table Des Contrats</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class=\"section\">
      <div class=\"row\">
        <div class=\"col-lg-10\">

          <div class=\"card\">
            <div class=\"card-body\">
              <h5 class=\"card-title\">Bienvenue</h5>

            ";
        // line 28
        echo "
    <table class=\"table table-striped\">
        <thead class=\"\"thead-dark\"\">
            <tr>
                 <th>Id</th>
                <th>Validitedu</th>
                <th>Validiteau</th>
                <th>Photo_cin</th>
                <th>Offres Choisis</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["contrats"]) || array_key_exists("contrats", $context) ? $context["contrats"] : (function () { throw new RuntimeError('Variable "contrats" does not exist.', 41, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["contrat"]) {
            // line 42
            echo "            <tr>
                <th>";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contrat"], "id", [], "any", false, false, false, 43), "html", null, true);
            echo "</th>
                <td>";
            // line 44
            ((twig_get_attribute($this->env, $this->source, $context["contrat"], "validitedu", [], "any", false, false, false, 44)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contrat"], "validitedu", [], "any", false, false, false, 44), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
                <td>";
            // line 45
            ((twig_get_attribute($this->env, $this->source, $context["contrat"], "validiteau", [], "any", false, false, false, 45)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contrat"], "validiteau", [], "any", false, false, false, 45), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
                <td>";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contrat"], "photoCin", [], "any", false, false, false, 46), "html", null, true);
            echo "</td>
                <td>";
            // line 47
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["contrat"], "getIdOffre", [], "method", false, false, false, 47));
            foreach ($context['_seq'] as $context["_key"] => $context["offre"]) {
                // line 48
                echo "                ";
                echo twig_escape_filter($this->env, $context["offre"], "html", null, true);
                echo "
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['offre'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo "                </td>
                <td>
                     <a class=\"btn btn-primary mr-8\" href=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contrat_show", ["id" => twig_get_attribute($this->env, $this->source, $context["contrat"], "id", [], "any", false, false, false, 52)]), "html", null, true);
            echo "\">Afficher</a>
                    ";
            // line 53
            echo " 
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 57
            echo "            <tr>
                <td colspan=\"6\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contrat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "        </tbody>
    </table>

    ";
        // line 65
        echo "
    ";
        // line 67
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
        return "contrat/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  196 => 67,  193 => 65,  188 => 61,  179 => 57,  171 => 53,  167 => 52,  163 => 50,  154 => 48,  150 => 47,  146 => 46,  142 => 45,  138 => 44,  134 => 43,  131 => 42,  126 => 41,  111 => 28,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base2.html.twig' %}

{% block title %}New Offre{% endblock %}

{% block body %}
   <main id=\"main\" class=\"main\">

    <div class=\"pagetitle\">
      <h1>Table Des Contrats</h1>
      <nav>
        <ol class=\"breadcrumb\">
          <li class=\"breadcrumb-item\">Accueil</li>
          <li class=\"breadcrumb-item\">Tables</li>
          <li class=\"breadcrumb-item active\">Table Des Contrats</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class=\"section\">
      <div class=\"row\">
        <div class=\"col-lg-10\">

          <div class=\"card\">
            <div class=\"card-body\">
              <h5 class=\"card-title\">Bienvenue</h5>

            {# <h1>Table Des Offres</h1> #}

    <table class=\"table table-striped\">
        <thead class=\"\"thead-dark\"\">
            <tr>
                 <th>Id</th>
                <th>Validitedu</th>
                <th>Validiteau</th>
                <th>Photo_cin</th>
                <th>Offres Choisis</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        {% for contrat in contrats %}
            <tr>
                <th>{{ contrat.id }}</th>
                <td>{{ contrat.validitedu ? contrat.validitedu|date('Y-m-d') : '' }}</td>
                <td>{{ contrat.validiteau ? contrat.validiteau|date('Y-m-d') : '' }}</td>
                <td>{{ contrat.photoCin }}</td>
                <td>{% for offre in contrat.getIdOffre() %}
                {{offre}}
                {% endfor %}
                </td>
                <td>
                     <a class=\"btn btn-primary mr-8\" href=\"{{ path('app_contrat_show', {'id': contrat.id}) }}\">Afficher</a>
                    {# <a href=\"{{ path('app_offre_edit', {'id': offre.id}) }}\">edit</a> #} 
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"6\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    {# <a href=\"{{ path('app_offre_new') }}\">Create new</a> #}

    {# <a href=\"{{ path('app_offre_index') }}\"></a> #}
  
            </div>
          </div>

        </div>

        
      </div>
    </section>

  </main>
{% endblock %}
", "contrat/index.html.twig", "C:\\xampp\\htdocs\\PiDEV_V06\\PiDEV_V06\\templates\\contrat\\index.html.twig");
    }
}
