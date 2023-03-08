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

/* contrat/_form.html.twig */
class __TwigTemplate_89bdc5f9be50c38203f3bc2047eae29b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'css' => [$this, 'block_css'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contrat/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contrat/_form.html.twig"));

        // line 6
        echo " <!-- General Form Elements -->
              <!DOCTYPE html>
<html lang=\"fr\">
 ";
        // line 9
        $this->displayBlock('css', $context, $blocks);
        // line 13
        echo "               ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
                <div class=\"row mb-3\">
                  <label for=\"inputDate\" class=\"col-sm-2 col-form-label\">Validité du</label>
                  <div class=\"col-sm-10\">
                     ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "validitedu", [], "any", false, false, false, 17), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                    ";
        // line 18
        if ( !twig_test_empty($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "validitedu", [], "any", false, false, false, 18), 'errors'))) {
            // line 19
            echo "                        <p type=\"date\" class=\"form-text text-muted\">";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "validitedu", [], "any", false, false, false, 19), 'errors');
            echo "</p>
                    ";
        }
        // line 21
        echo "                  </div>
             </div> 
             <div class=\"row mb-3\">
                  <label for=\"inputDate\" class=\"col-sm-2 col-form-label\">Validité au</label>
                  <div class=\"col-sm-10\">
                     ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "validiteau", [], "any", false, false, false, 26), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                    ";
        // line 27
        if ( !twig_test_empty($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "validiteau", [], "any", false, false, false, 27), 'errors'))) {
            // line 28
            echo "                        <p type=\"date\" class=\"form-text text-muted\">";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "validiteau", [], "any", false, false, false, 28), 'errors');
            echo "</p>
                    ";
        }
        // line 30
        echo "                  </div>
             </div> 
             <div class=\"row mb-3\">
                  <label for=\"inputDate\" class=\"col-sm-2 col-form-label\">Photo Cin</label>
                  <div class=\"col-sm-10\">
                     ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "photo_cin", [], "any", false, false, false, 35), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                    ";
        // line 36
        if ( !twig_test_empty($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "photo_cin", [], "any", false, false, false, 36), 'errors'))) {
            // line 37
            echo "                        <p type=\"date\" class=\"form-text text-muted\">";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "photo_cin", [], "any", false, false, false, 37), 'errors');
            echo "</p>
                    ";
        }
        // line 39
        echo "                  </div>
             </div> 
             <div class=\"row mb-3\">
                  <label for=\"inputDate\" class=\"col-sm-2 col-form-label\">Id Client</label>
                  <div class=\"col-sm-10\">
                     ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "id_client", [], "any", false, false, false, 44), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                    ";
        // line 45
        if ( !twig_test_empty($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "id_client", [], "any", false, false, false, 45), 'errors'))) {
            // line 46
            echo "                        <p type=\"date\" class=\"form-text text-muted\">";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "id_client", [], "any", false, false, false, 46), 'errors');
            echo "</p>
                    ";
        }
        // line 48
        echo "                  </div>
             </div> 
             <div class=\"row mb-3\">
                  <label for=\"inputDate\" class=\"col-sm-2 col-form-label\">Id Vehicule</label>
                  <div class=\"col-sm-10\">
                     ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "id_vehicule", [], "any", false, false, false, 53), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                    ";
        // line 54
        if ( !twig_test_empty($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "id_vehicule", [], "any", false, false, false, 54), 'errors'))) {
            // line 55
            echo "                        <p type=\"date\" class=\"form-text text-muted\">";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "id_vehicule", [], "any", false, false, false, 55), 'errors');
            echo "</p>
                    ";
        }
        // line 57
        echo "                  </div>
             </div> 
             <div class=\"row mb-3\">
                  <label for=\"inputDate\" class=\"col-sm-2 col-form-label\">Nom Offre</label>
                  <div class=\"col-sm-10\">
                     ";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "id_offre", [], "any", false, false, false, 62), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                    ";
        // line 63
        if ( !twig_test_empty($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "id_offre", [], "any", false, false, false, 63), 'errors'))) {
            // line 64
            echo "                        <p type=\"date\" class=\"form-text text-muted\">";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), "id_offre", [], "any", false, false, false, 64), 'errors');
            echo "</p>
                    ";
        }
        // line 66
        echo "                  </div>
             </div> 
                 <div class=\"col-sm-10\">
                  <button class=\"btn btn-primary\">";
        // line 69
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 69, $this->source); })()), "Save")) : ("Save")), "html", null, true);
        echo "</button>
                    ";
        // line 71
        echo "                    ";
        // line 72
        echo "                     ";
        // line 73
        echo "                  </div>
                </div>

              ";
        // line 76
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 76, $this->source); })()), 'form_end');
        echo "
              <!-- End General Form Elements -->
              </html>
              ";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 9
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        // line 10
        echo "  <!-- bouton CSS  -->
  <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/css/btn.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "contrat/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  211 => 11,  208 => 10,  198 => 9,  184 => 76,  179 => 73,  177 => 72,  175 => 71,  171 => 69,  166 => 66,  160 => 64,  158 => 63,  154 => 62,  147 => 57,  141 => 55,  139 => 54,  135 => 53,  128 => 48,  122 => 46,  120 => 45,  116 => 44,  109 => 39,  103 => 37,  101 => 36,  97 => 35,  90 => 30,  84 => 28,  82 => 27,  78 => 26,  71 => 21,  65 => 19,  63 => 18,  59 => 17,  51 => 13,  49 => 9,  44 => 6,);
    }

    public function getSourceContext()
    {
        return new Source("{# {{ form_start(form) }}
    {{ form_widget(form) }}
    <button class=\"btn\">{{ button_label|default('Save') }}</button>
{{ form_end(form) }} #}
{# ////////////////////////////////////////////////////////// #}
 <!-- General Form Elements -->
              <!DOCTYPE html>
<html lang=\"fr\">
 {% block css %}
  <!-- bouton CSS  -->
  <link href=\"{{ asset ('assets2/css/btn.css') }}\" rel=\"stylesheet\">
  {% endblock %}
               {{ form_start(form,{'attr': {'novalidate': 'novalidate'}} ) }}
                <div class=\"row mb-3\">
                  <label for=\"inputDate\" class=\"col-sm-2 col-form-label\">Validité du</label>
                  <div class=\"col-sm-10\">
                     {{form_widget(form.validitedu,{'attr':{'class':'form-control'}})}}
                    {% if form_errors(form.validitedu) is not empty %}
                        <p type=\"date\" class=\"form-text text-muted\">{{ form_errors(form.validitedu) }}</p>
                    {% endif %}
                  </div>
             </div> 
             <div class=\"row mb-3\">
                  <label for=\"inputDate\" class=\"col-sm-2 col-form-label\">Validité au</label>
                  <div class=\"col-sm-10\">
                     {{form_widget(form.validiteau,{'attr':{'class':'form-control'}})}}
                    {% if form_errors(form.validiteau) is not empty %}
                        <p type=\"date\" class=\"form-text text-muted\">{{ form_errors(form.validiteau) }}</p>
                    {% endif %}
                  </div>
             </div> 
             <div class=\"row mb-3\">
                  <label for=\"inputDate\" class=\"col-sm-2 col-form-label\">Photo Cin</label>
                  <div class=\"col-sm-10\">
                     {{form_widget(form.photo_cin,{'attr':{'class':'form-control'}})}}
                    {% if form_errors(form.photo_cin) is not empty %}
                        <p type=\"date\" class=\"form-text text-muted\">{{ form_errors(form.photo_cin) }}</p>
                    {% endif %}
                  </div>
             </div> 
             <div class=\"row mb-3\">
                  <label for=\"inputDate\" class=\"col-sm-2 col-form-label\">Id Client</label>
                  <div class=\"col-sm-10\">
                     {{form_widget(form.id_client,{'attr':{'class':'form-control'}})}}
                    {% if form_errors(form.id_client) is not empty %}
                        <p type=\"date\" class=\"form-text text-muted\">{{ form_errors(form.id_client) }}</p>
                    {% endif %}
                  </div>
             </div> 
             <div class=\"row mb-3\">
                  <label for=\"inputDate\" class=\"col-sm-2 col-form-label\">Id Vehicule</label>
                  <div class=\"col-sm-10\">
                     {{form_widget(form.id_vehicule,{'attr':{'class':'form-control'}})}}
                    {% if form_errors(form.id_vehicule) is not empty %}
                        <p type=\"date\" class=\"form-text text-muted\">{{ form_errors(form.id_vehicule) }}</p>
                    {% endif %}
                  </div>
             </div> 
             <div class=\"row mb-3\">
                  <label for=\"inputDate\" class=\"col-sm-2 col-form-label\">Nom Offre</label>
                  <div class=\"col-sm-10\">
                     {{form_widget(form.id_offre,{'attr':{'class':'form-control'}})}}
                    {% if form_errors(form.id_offre) is not empty %}
                        <p type=\"date\" class=\"form-text text-muted\">{{ form_errors(form.id_offre) }}</p>
                    {% endif %}
                  </div>
             </div> 
                 <div class=\"col-sm-10\">
                  <button class=\"btn btn-primary\">{{ button_label|default('Save') }}</button>
                    {# <button class=\"btn btn-primary mr-2\">{{ button_label|default('Save') }}</button> #}
                    {# <button type=\"submit\" class=\"btn btn-primary\">Sauvgarder</button> #}
                     {# <button class=\"btn btn-primary mr-2\"><a href=\"{{ path('app_offre_index') }}\">Retour</a></button> #}
                  </div>
                </div>

              {{ form_end(form) }}
              <!-- End General Form Elements -->
              </html>
              ", "contrat/_form.html.twig", "C:\\xampp\\htdocs\\PiDEV_V06\\PiDEV_V06\\templates\\contrat\\_form.html.twig");
    }
}
