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

/* offre/index4.html.twig */
class __TwigTemplate_330c414e7f7c55a2d000836f2211f47d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'css' => [$this, 'block_css'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "offre/index4.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "offre/index4.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "offre/index4.html.twig", 1);
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
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <style>
        
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 11
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        // line 12
        echo "  <!-- bouton CSS  -->
  <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/css/btn.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 16
    public function block_contenu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contenu"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contenu"));

        // line 17
        echo "</br>
    <main id=\"main\" class=\"main\">
       <div class=\"pagetitle text-center\">
            <h1 class=\"font-weight-bold\" style=\"font-size: 80px;color: #ff5821;\">Nos Offres </h1>
        </div><!-- End Page Title -->

   <div class=\"mt-5\">
    <form id=\"search-form\" class=\"form-inline\">
        <div class=\"input-group\">
            <input type=\"text\" class=\"form-control\" id=\"search-input\" name=\"search-input\" placeholder=\"Rechercher votre offre par titre\" style=\"left:110px; max-width: 625px;\">
            <div class=\"input-group-append\">
                <button type=\"submit\" class=\"btn btn-primary\" style=\"left:110px;\"><i class=\"fa fa-search\"></i></button>
            </div>
        </div>
    </form>
</div>



        <section class=\"section container\">
   <div class=\"d-flex justify-content-end\">
    <a class=\"btn btn-primary mb-4 mr-2\" href=\"";
        // line 38
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_index");
        echo "\">Panier <i class=\"bi bi-cart-x\"></i></a>
</div>
            <div class=\"row\" id=\"offres-container\">
                ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["offres"]) || array_key_exists("offres", $context) ? $context["offres"] : (function () { throw new RuntimeError('Variable "offres" does not exist.', 41, $this->source); })()));
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
            // line 42
            echo "                    <div class=\"col mb-4\">
                        <div class=\"card\">
                            <div class=\"card-body\" style=\"min-width: 350px;min-height: 320px;background-repeat: no-repeat;background-size: cover;background-position: center; background-image: url('";
            // line 44
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["offre"], "ImageOffre", [], "any", false, false, false, 44)), "html", null, true);
            echo "');\">
                               <div class=\"portfolio-info\" style=\"position:absolute;left:20px;right:20px;transition:all ease-in-out 0.3s;background:rgba(255, 255, 255, 0.9);margin-top: 85px;width: 370px;height: 210px;\">
  <div class=\"card-body\">
    <h5 class=\"card-title \" style=\"color:#ff5821\">";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offre"], "titre", [], "any", false, false, false, 47), "html", null, true);
            echo " <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_add", ["id" => twig_get_attribute($this->env, $this->source, $context["offre"], "id", [], "any", false, false, false, 47)]), "html", null, true);
            echo "\" data-gallery=\"portfolioGallery\" class=\"portfolio-lightbox preview-link\" title=\"Ajouter au panier\" ><i class=\"bx bx-plus\" class=\"float-left\"></i></a></i></h5> 
    <div class=\"portfolio-info\">
              
              
            </div>
    <p class=\"card-text\">";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offre"], "description", [], "any", false, false, false, 52), "html", null, true);
            echo "</p>
            <div class=\"card-text d-flex align-items-center\" style=\"margin-bottom: 200px;\">
    <div class=\"float-left\">";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offre"], "ValiditeOffre", [], "any", false, false, false, 54), "html", null, true);
            echo "</div>
    <div class=\"float-right\" style=\"margin-left: auto;\">";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offre"], "prix", [], "any", false, false, false, 55), "html", null, true);
            echo "DT</div>
    
</div>
<div>
<a href=\"";
            // line 59
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_add", ["id" => twig_get_attribute($this->env, $this->source, $context["offre"], "id", [], "any", false, false, false, 59)]), "html", null, true);
            echo "\" class=\"btn btn-success\">
                        <i class=\"bi bi-cart-plus\"></i> Ajouter
                    </a>
  </div>
  </div>
</div>
                            </div>
                        </div>
                    </div>
                    ";
            // line 68
            if (((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 68) % 3) == 0)) {
                // line 69
                echo "                        </div><div class=\"row\">
                    ";
            }
            // line 71
            echo "                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['offre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "
                ";
        // line 73
        if (((twig_length_filter($this->env, (isset($context["offres"]) || array_key_exists("offres", $context) ? $context["offres"] : (function () { throw new RuntimeError('Variable "offres" does not exist.', 73, $this->source); })())) % 3) != 0)) {
            // line 74
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, (2 - (twig_length_filter($this->env, (isset($context["offres"]) || array_key_exists("offres", $context) ? $context["offres"] : (function () { throw new RuntimeError('Variable "offres" does not exist.', 74, $this->source); })())) % 3))));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 75
                echo "                        <div class=\"col mb-3\"></div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 77
            echo "                ";
        }
        // line 78
        echo "
            </div>
        </section>

    </main>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "offre/index4.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  275 => 78,  272 => 77,  265 => 75,  260 => 74,  258 => 73,  255 => 72,  241 => 71,  237 => 69,  235 => 68,  223 => 59,  216 => 55,  212 => 54,  207 => 52,  197 => 47,  191 => 44,  187 => 42,  170 => 41,  164 => 38,  141 => 17,  131 => 16,  119 => 13,  116 => 12,  106 => 11,  90 => 6,  80 => 5,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}New Offre{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <style>
        
    </style>
{% endblock %}
{% block css %}
  <!-- bouton CSS  -->
  <link href=\"{{ asset ('assets2/css/btn.css') }}\" rel=\"stylesheet\">
  {% endblock %}

{% block contenu %}
</br>
    <main id=\"main\" class=\"main\">
       <div class=\"pagetitle text-center\">
            <h1 class=\"font-weight-bold\" style=\"font-size: 80px;color: #ff5821;\">Nos Offres </h1>
        </div><!-- End Page Title -->

   <div class=\"mt-5\">
    <form id=\"search-form\" class=\"form-inline\">
        <div class=\"input-group\">
            <input type=\"text\" class=\"form-control\" id=\"search-input\" name=\"search-input\" placeholder=\"Rechercher votre offre par titre\" style=\"left:110px; max-width: 625px;\">
            <div class=\"input-group-append\">
                <button type=\"submit\" class=\"btn btn-primary\" style=\"left:110px;\"><i class=\"fa fa-search\"></i></button>
            </div>
        </div>
    </form>
</div>



        <section class=\"section container\">
   <div class=\"d-flex justify-content-end\">
    <a class=\"btn btn-primary mb-4 mr-2\" href=\"{{ path('cart_index') }}\">Panier <i class=\"bi bi-cart-x\"></i></a>
</div>
            <div class=\"row\" id=\"offres-container\">
                {% for offre in offres %}
                    <div class=\"col mb-4\">
                        <div class=\"card\">
                            <div class=\"card-body\" style=\"min-width: 350px;min-height: 320px;background-repeat: no-repeat;background-size: cover;background-position: center; background-image: url('{{ asset(offre.ImageOffre) }}');\">
                               <div class=\"portfolio-info\" style=\"position:absolute;left:20px;right:20px;transition:all ease-in-out 0.3s;background:rgba(255, 255, 255, 0.9);margin-top: 85px;width: 370px;height: 210px;\">
  <div class=\"card-body\">
    <h5 class=\"card-title \" style=\"color:#ff5821\">{{ offre.titre }} <a href=\"{{path(\"cart_add\", {id: offre.id})}}\" data-gallery=\"portfolioGallery\" class=\"portfolio-lightbox preview-link\" title=\"Ajouter au panier\" ><i class=\"bx bx-plus\" class=\"float-left\"></i></a></i></h5> 
    <div class=\"portfolio-info\">
              
              
            </div>
    <p class=\"card-text\">{{ offre.description }}</p>
            <div class=\"card-text d-flex align-items-center\" style=\"margin-bottom: 200px;\">
    <div class=\"float-left\">{{ offre.ValiditeOffre }}</div>
    <div class=\"float-right\" style=\"margin-left: auto;\">{{ offre.prix }}DT</div>
    
</div>
<div>
<a href=\"{{path(\"cart_add\", {id: offre.id})}}\" class=\"btn btn-success\">
                        <i class=\"bi bi-cart-plus\"></i> Ajouter
                    </a>
  </div>
  </div>
</div>
                            </div>
                        </div>
                    </div>
                    {% if loop.index % 3 == 0 %}
                        </div><div class=\"row\">
                    {% endif %}
                {% endfor %}

                {% if offres|length % 3 != 0 %}
                    {% for i in 0..2-(offres|length % 3) %}
                        <div class=\"col mb-3\"></div>
                    {% endfor %}
                {% endif %}

            </div>
        </section>

    </main>
    {% endblock %}
   

", "offre/index4.html.twig", "C:\\xampp\\htdocs\\PiDEV_V06\\PiDEV_V06\\templates\\offre\\index4.html.twig");
    }
}
