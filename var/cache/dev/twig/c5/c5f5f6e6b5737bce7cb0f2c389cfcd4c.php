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

/* offre/panier.html.twig */
class __TwigTemplate_2243e0e71244c303bbebf69a71dd7deb extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "offre/panier.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "offre/panier.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "offre/panier.html.twig", 1);
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
        echo "<main id=\"main\" class=\"main\">
      <section class=\"section container\">
   <div class=\"d-flex center\">
    <div class=\"row\">
        <div class=\"col-lg-13\">

          <div class=\"card\">
            <div class=\"card-body\">
              <h5 class=\"alert alert-warning alert-dismissible fade show\">Bienvenue à votre panier</h5>
    <table class=\"table table-striped\">
        <thead>
            <tr>
                <th>Offre</th>
                <th>Prix</th>
                <th>Supprimer</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["dataPanier"]) || array_key_exists("dataPanier", $context) ? $context["dataPanier"] : (function () { throw new RuntimeError('Variable "dataPanier" does not exist.', 24, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["offre"]) {
            // line 25
            echo "                <tr>
                    <th>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["offre"], "produit", [], "any", false, false, false, 26), "titre", [], "any", false, false, false, 26), "html", null, true);
            echo "</th>
                    <td class=\"text-end\">";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["offre"], "produit", [], "any", false, false, false, 27), "prix", [], "any", false, false, false, 27), "html", null, true);
            echo " DT</td>
                    <td>
                        <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_remove", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["offre"], "produit", [], "any", false, false, false, 29), "id", [], "any", false, false, false, 29)]), "html", null, true);
            echo "\" class=\"btn btn-danger\">
                            <i class=\"bi bi-cart-dash\"></i>
                    </td>
                </tr>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 34
            echo "                <tr>
                    <td colspan=\"5\" class=\"text-center\">Votre panier est vide</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['offre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "        </tbody>
        <tfoot>
            <tr>
                <td colspan=\"3\">Total</td>
                <td class=\"text-end\">";
        // line 42
        echo twig_escape_filter($this->env, (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 42, $this->source); })()), "html", null, true);
        echo " DT</td>
                <td>
                    <a href=\"";
        // line 44
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_delete_all");
        echo "\" class=\"btn btn-danger\">
                        <i class=\"bi bi-cart-x\"></i>
                    </a>
                </td>
            </tr>
        </tfoot>
    </table>
    <a  class=\"btn btn-primary mr-2\" href=\"";
        // line 51
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_offrefront_index");
        echo "\">Choisir Des Offres</a>
    <a  class=\"btn btn-primary mr-2\" href=\"#\">Passer au Contrat</a>
            </div>
          </div>

        </div>

        
      </div>
    </section>
    </div>
   </main> 
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "offre/panier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 51,  155 => 44,  150 => 42,  144 => 38,  135 => 34,  125 => 29,  120 => 27,  116 => 26,  113 => 25,  108 => 24,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Votre panier{% endblock %}

{% block contenu %}
<main id=\"main\" class=\"main\">
      <section class=\"section container\">
   <div class=\"d-flex center\">
    <div class=\"row\">
        <div class=\"col-lg-13\">

          <div class=\"card\">
            <div class=\"card-body\">
              <h5 class=\"alert alert-warning alert-dismissible fade show\">Bienvenue à votre panier</h5>
    <table class=\"table table-striped\">
        <thead>
            <tr>
                <th>Offre</th>
                <th>Prix</th>
                <th>Supprimer</th>
            </tr>
        </thead>
        <tbody>
            {% for offre in dataPanier %}
                <tr>
                    <th>{{ offre.produit.titre }}</th>
                    <td class=\"text-end\">{{ offre.produit.prix }} DT</td>
                    <td>
                        <a href=\"{{path(\"cart_remove\", {id: offre.produit.id})}}\" class=\"btn btn-danger\">
                            <i class=\"bi bi-cart-dash\"></i>
                    </td>
                </tr>
            {% else %}
                <tr>
                    <td colspan=\"5\" class=\"text-center\">Votre panier est vide</td>
                </tr>
            {% endfor %}
        </tbody>
        <tfoot>
            <tr>
                <td colspan=\"3\">Total</td>
                <td class=\"text-end\">{{ total }} DT</td>
                <td>
                    <a href=\"{{path(\"cart_delete_all\")}}\" class=\"btn btn-danger\">
                        <i class=\"bi bi-cart-x\"></i>
                    </a>
                </td>
            </tr>
        </tfoot>
    </table>
    <a  class=\"btn btn-primary mr-2\" href=\"{{ path('app_offrefront_index') }}\">Choisir Des Offres</a>
    <a  class=\"btn btn-primary mr-2\" href=\"#\">Passer au Contrat</a>
            </div>
          </div>

        </div>

        
      </div>
    </section>
    </div>
   </main> 
{% endblock %}
", "offre/panier.html.twig", "C:\\xampp\\htdocs\\PiDEV_V06\\PiDEV_V06\\templates\\offre\\panier.html.twig");
    }
}
