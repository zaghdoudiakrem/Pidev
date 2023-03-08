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

/* offre/_form.html.twig */
class __TwigTemplate_c2f83b5861ceb352b796f4dce3bd5e70 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "offre/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "offre/_form.html.twig"));

        // line 6
        echo " <!-- General Form Elements -->
              <!DOCTYPE html>
<html lang=\"fr\">
 ";
        // line 9
        $this->displayBlock('css', $context, $blocks);
        // line 13
        echo "              ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
                <div class=\"row mb-3\">
                  <label  class=\"col-sm-2 col-form-label\">Titre</label>
                  <div class=\"col-sm-10\">
                     ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "titre", [], "any", false, false, false, 17), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                    ";
        // line 18
        if ( !twig_test_empty($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "titre", [], "any", false, false, false, 18), 'errors'))) {
            // line 19
            echo "                        <p class=\"form-text text-muted\">";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "titre", [], "any", false, false, false, 19), 'errors');
            echo "</p>
                    ";
        }
        // line 21
        echo "                  </div>
                </div>
                  <div class=\"row mb-3\">
                  <label for=\"inputPassword\" class=\"col-sm-2 col-form-label\">Description</label>
                  <div class=\"col-sm-10\">
                  
                  ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "description", [], "any", false, false, false, 27), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                    ";
        // line 28
        if ( !twig_test_empty($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "description", [], "any", false, false, false, 28), 'errors'))) {
            // line 29
            echo "                        ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "description", [], "any", false, false, false, 29), 'errors');
            echo "
                    ";
        }
        // line 31
        echo "                    
                  </div>
                </div>
                 <div class=\"row mb-3\">
                  <label for=\"inputNumber\" class=\"col-sm-2 col-form-label\">Prix</label>
                  <div class=\"col-sm-10\">
                    ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "prix", [], "any", false, false, false, 37), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                    ";
        // line 38
        if ( !twig_test_empty($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "prix", [], "any", false, false, false, 38), 'errors'))) {
            // line 39
            echo "                        <p class=\"form-text text-muted\">";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "prix", [], "any", false, false, false, 39), 'errors');
            echo "</p>
                    ";
        }
        // line 41
        echo "                  </div>
                </div>
                <div class=\"row mb-3\">
                 <label for=\"inputNumber\" class=\"col-sm-2 col-form-label\">Validite Offre</label>
                  <div class=\"col-sm-10\">
                     ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "validiteOffre", [], "any", false, false, false, 46), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                    ";
        // line 47
        if ( !twig_test_empty($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "validiteOffre", [], "any", false, false, false, 47), 'errors'))) {
            // line 48
            echo "                        <p class=\"form-text text-muted\">";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "validiteOffre", [], "any", false, false, false, 48), 'errors');
            echo "</p>
                    ";
        }
        // line 50
        echo "                  </div>
                </div>
                
                <div class=\"row mb-3\">
                  <label for=\"inputNumber\" class=\"col-sm-2 col-form-label\">Image</label>
                  <div class=\"col-sm-10\">
                    
                     ";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "image_offre", [], "any", false, false, false, 57), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                    ";
        // line 58
        if ( !twig_test_empty($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), "image_offre", [], "any", false, false, false, 58), 'errors'))) {
            // line 59
            echo "                        ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "image_offre", [], "any", false, false, false, 59), 'errors');
            echo "
                    ";
        }
        // line 61
        echo "                  </div>
                </div>
                <div class=\"row mb-3\">
                  
                  <div class=\"col-sm-10\">
                  <button class=\"btn btn-primary\">";
        // line 66
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 66, $this->source); })()), "Save")) : ("Save")), "html", null, true);
        echo "</button>
                    ";
        // line 68
        echo "                    ";
        // line 69
        echo "                     ";
        // line 70
        echo "                  </div>
                </div>

              ";
        // line 73
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), 'form_end');
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
        return "offre/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  198 => 11,  195 => 10,  185 => 9,  171 => 73,  166 => 70,  164 => 69,  162 => 68,  158 => 66,  151 => 61,  145 => 59,  143 => 58,  139 => 57,  130 => 50,  124 => 48,  122 => 47,  118 => 46,  111 => 41,  105 => 39,  103 => 38,  99 => 37,  91 => 31,  85 => 29,  83 => 28,  79 => 27,  71 => 21,  65 => 19,  63 => 18,  59 => 17,  51 => 13,  49 => 9,  44 => 6,);
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
                  <label  class=\"col-sm-2 col-form-label\">Titre</label>
                  <div class=\"col-sm-10\">
                     {{form_widget(form.titre,{'attr':{'class':'form-control'}})}}
                    {% if form_errors(form.titre) is not empty %}
                        <p class=\"form-text text-muted\">{{ form_errors(form.titre) }}</p>
                    {% endif %}
                  </div>
                </div>
                  <div class=\"row mb-3\">
                  <label for=\"inputPassword\" class=\"col-sm-2 col-form-label\">Description</label>
                  <div class=\"col-sm-10\">
                  
                  {{form_widget(form.description,{'attr':{'class':'form-control'}})}}
                    {% if form_errors(form.description) is not empty %}
                        {{ form_errors(form.description) }}
                    {% endif %}
                    
                  </div>
                </div>
                 <div class=\"row mb-3\">
                  <label for=\"inputNumber\" class=\"col-sm-2 col-form-label\">Prix</label>
                  <div class=\"col-sm-10\">
                    {{form_widget(form.prix,{'attr':{'class':'form-control'}})}}
                    {% if form_errors(form.prix) is not empty %}
                        <p class=\"form-text text-muted\">{{ form_errors(form.prix) }}</p>
                    {% endif %}
                  </div>
                </div>
                <div class=\"row mb-3\">
                 <label for=\"inputNumber\" class=\"col-sm-2 col-form-label\">Validite Offre</label>
                  <div class=\"col-sm-10\">
                     {{form_widget(form.validiteOffre,{'attr':{'class':'form-control'}})}}
                    {% if form_errors(form.validiteOffre) is not empty %}
                        <p class=\"form-text text-muted\">{{ form_errors(form.validiteOffre) }}</p>
                    {% endif %}
                  </div>
                </div>
                
                <div class=\"row mb-3\">
                  <label for=\"inputNumber\" class=\"col-sm-2 col-form-label\">Image</label>
                  <div class=\"col-sm-10\">
                    
                     {{form_widget(form.image_offre,{'attr':{'class':'form-control'}})}}
                    {% if form_errors(form.image_offre) is not empty %}
                        {{ form_errors(form.image_offre) }}
                    {% endif %}
                  </div>
                </div>
                <div class=\"row mb-3\">
                  
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
              ", "offre/_form.html.twig", "C:\\xampp\\htdocs\\PiDEV_V06\\PiDEV_V06\\templates\\offre\\_form.html.twig");
    }
}
