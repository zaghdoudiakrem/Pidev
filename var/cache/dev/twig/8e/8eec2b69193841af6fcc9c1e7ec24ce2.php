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

/* offre/index2.html.twig */
class __TwigTemplate_c105c6c15652b3a241c77459f66adc1c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "offre/index2.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "offre/index2.html.twig"));

        $this->parent = $this->loadTemplate("base2.html.twig", "offre/index2.html.twig", 1);
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
      <h1>Modifier|Supprimer Une Offre</h1>
      <nav>
        <ol class=\"breadcrumb\">
          <li class=\"breadcrumb-item\">Accueil </li>
          <li class=\"breadcrumb-item\">Offres</li>
          <li class=\"breadcrumb-item active\">Modifier|Supprimer Offre</li>
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

        <thead class=\"thead-dark\">
            <tr>
                <th >Id</th>
                <th >Titre</th>
                <th >Description</th>
                <th >Prix</th>
                <th >Validité</th>
                <th >Actions</th>
                <th ></th>
            
        </thead>
        <tbody>
        ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["offres"]) || array_key_exists("offres", $context) ? $context["offres"] : (function () { throw new RuntimeError('Variable "offres" does not exist.', 43, $this->source); })()));
        $context['_iterated'] = false;
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["offre"]) {
            // line 44
            echo "            <tr>
            
                <th scope=\"row\">";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offre"], "id", [], "any", false, false, false, 46), "html", null, true);
            echo "</th>
                <td>";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offre"], "titre", [], "any", false, false, false, 47), "html", null, true);
            echo "</td>
                <td>";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offre"], "description", [], "any", false, false, false, 48), "html", null, true);
            echo "</td>
                <td>";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offre"], "prix", [], "any", false, false, false, 49), "html", null, true);
            echo "</td>
                <td>";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offre"], "ValiditeOffre", [], "any", false, false, false, 50), "html", null, true);
            echo "</td>
                <td>
                    
                    <a  class=\"btn btn-primary mr-2\" href=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_offre_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["offre"], "id", [], "any", false, false, false, 53)]), "html", null, true);
            echo "\">Modifier</a> 
                </td>
                <td>
                    ";
            // line 56
            echo twig_include($this->env, $context, "offre/_delete_form.html.twig");
            echo "
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 60
            echo "            <tr>
                <td colspan=\"6\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['offre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "        </tbody>
        </span>
    </table>

    ";
        // line 69
        echo "
    ";
        // line 71
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
        return "offre/index2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  213 => 71,  210 => 69,  204 => 64,  195 => 60,  178 => 56,  172 => 53,  166 => 50,  162 => 49,  158 => 48,  154 => 47,  150 => 46,  146 => 44,  128 => 43,  111 => 28,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base2.html.twig' %}

{% block title %}New Offre{% endblock %}

{% block body %}
   <main id=\"main\" class=\"main\">

    <div class=\"pagetitle\">
      <h1>Modifier|Supprimer Une Offre</h1>
      <nav>
        <ol class=\"breadcrumb\">
          <li class=\"breadcrumb-item\">Accueil </li>
          <li class=\"breadcrumb-item\">Offres</li>
          <li class=\"breadcrumb-item active\">Modifier|Supprimer Offre</li>
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

        <thead class=\"thead-dark\">
            <tr>
                <th >Id</th>
                <th >Titre</th>
                <th >Description</th>
                <th >Prix</th>
                <th >Validité</th>
                <th >Actions</th>
                <th ></th>
            
        </thead>
        <tbody>
        {% for offre in offres %}
            <tr>
            
                <th scope=\"row\">{{ offre.id }}</th>
                <td>{{ offre.titre }}</td>
                <td>{{ offre.description }}</td>
                <td>{{ offre.prix }}</td>
                <td>{{ offre.ValiditeOffre }}</td>
                <td>
                    
                    <a  class=\"btn btn-primary mr-2\" href=\"{{ path('app_offre_edit', {'id': offre.id}) }}\">Modifier</a> 
                </td>
                <td>
                    {{ include('offre/_delete_form.html.twig') }}
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"6\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
        </span>
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


", "offre/index2.html.twig", "C:\\xampp\\htdocs\\PiDEV_V06\\PiDEV_V06\\templates\\offre\\index2.html.twig");
    }
}
