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
class __TwigTemplate_1067e507709cc8df5fee9c45e11b0f28 extends Template
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
            'contenu' => [$this, 'block_contenu'],
            'js' => [$this, 'block_js'],
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
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/knppaginatorbundle/css/pagination.css"), "html", null, true);
        echo "\" />
    <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/css/btn.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 20
    public function block_contenu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contenu"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contenu"));

        // line 21
        echo "</br>
    <main id=\"main\" class=\"main\">
       <div class=\"pagetitle text-center\">
            <h1 class=\"font-weight-bold\" style=\"font-size: 80px;color: #ff5821;\">Nos Offres </h1>
        </div><!-- End Page Title -->

   <div class=\"mt-5\">
    
        <div class=\"input-group\">
            <input id=\"search\" type=\"text\" placeholder=\"Rechercher votre offre par titre\"  class=\"form-control\" name=\"search-input\"  style=\"left:110px; max-width: 625px;\">

            ";
        // line 35
        echo "       </div>
    
</div>



        <section class=\"section container\">
   <div class=\"d-flex justify-content-end\">
    <a class=\"btn btn-primary mb-4 mr-2\" href=\"";
        // line 43
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_index");
        echo "\">Panier <i class=\"bi bi-cart-x\"></i></a>
</div>
            <div class=\"row\" id=\"offres-container\">
                ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["offres"]) || array_key_exists("offres", $context) ? $context["offres"] : (function () { throw new RuntimeError('Variable "offres" does not exist.', 46, $this->source); })()));
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
            // line 47
            echo "                    <div class=\"col mb-4\">
                        <div class=\"card\">
                            <div class=\"card-body\" style=\"min-width: 350px;min-height: 320px;background-repeat: no-repeat;background-size: cover;background-position: center; background-image: url('";
            // line 49
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["offre"], "ImageOffre", [], "any", false, false, false, 49)), "html", null, true);
            echo "');\">
                               <div class=\"portfolio-info\" style=\"position:absolute;left:20px;right:20px;transition:all ease-in-out 0.3s;background:rgba(255, 255, 255, 0.9);margin-top: 85px;width: 370px;height: 210px;\">
  <div class=\"card-body\">
    <h5 class=\"card-title \" style=\"color:#ff5821\">";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offre"], "titre", [], "any", false, false, false, 52), "html", null, true);
            echo " <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_add", ["id" => twig_get_attribute($this->env, $this->source, $context["offre"], "id", [], "any", false, false, false, 52)]), "html", null, true);
            echo "\" data-gallery=\"portfolioGallery\" class=\"portfolio-lightbox preview-link\" title=\"Ajouter au panier\" ><i class=\"bx bx-plus\" class=\"float-left\"></i></a></i></h5> 
   
    <p class=\"card-text\">";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offre"], "description", [], "any", false, false, false, 54), "html", null, true);
            echo "</p>
            <div class=\"card-text d-flex align-items-center\" style=\"margin-bottom: 200px;\">
    <div class=\"float-left\">";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offre"], "ValiditeOffre", [], "any", false, false, false, 56), "html", null, true);
            echo "</div>
    <div class=\"float-right\" style=\"margin-left: auto;\">";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offre"], "prix", [], "any", false, false, false, 57), "html", null, true);
            echo "DT</div>
    
</div>
<div>
    ";
            // line 64
            echo "  </div>
  </div>
</div>
                            </div>
                        </div>
                    </div>
                    ";
            // line 70
            if (((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 70) % 3) == 0)) {
                // line 71
                echo "                        </div><div class=\"row\">
                    ";
            }
            // line 73
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
        // line 74
        echo "
                ";
        // line 75
        if (((twig_length_filter($this->env, (isset($context["offres"]) || array_key_exists("offres", $context) ? $context["offres"] : (function () { throw new RuntimeError('Variable "offres" does not exist.', 75, $this->source); })())) % 3) != 0)) {
            // line 76
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, (2 - (twig_length_filter($this->env, (isset($context["offres"]) || array_key_exists("offres", $context) ? $context["offres"] : (function () { throw new RuntimeError('Variable "offres" does not exist.', 76, $this->source); })())) % 3))));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 77
                echo "                        <div class=\"col mb-3\"></div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 79
            echo "                ";
        }
        // line 80
        echo "
            </div>
        </section>

    </main>
    </div>";
        // line 88
        echo "<div class=\"row \" id=\"searchDivMain\" style=\"display:none\">
        </div>";
        // line 91
        echo "</div>
    <div class=\"d-flex justify-content-center\">
  ";
        // line 93
        twig_get_attribute($this->env, $this->source, (isset($context["offres"]) || array_key_exists("offres", $context) ? $context["offres"] : (function () { throw new RuntimeError('Variable "offres" does not exist.', 93, $this->source); })()), "SetPageRange", [0 => 2], "method", false, false, false, 93);
        // line 94
        echo "  ";
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["offres"]) || array_key_exists("offres", $context) ? $context["offres"] : (function () { throw new RuntimeError('Variable "offres" does not exist.', 94, $this->source); })()), "offre/pagination.html.twig");
        echo "
</div>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 98
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        // line 99
        echo "    
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js\"></script>
    <script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>

    <script>
    
    \$(document).ready(function(){
        \$(\"#search\").keyup(function(e){
            var value = \$(this).val();
            console.log(value);

            \$.ajax({
                type: \"GET\",
                url: \"";
        // line 112
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("searchOffre");
        echo "\",
                data: {
                    'searchValue' : value
                },

                success: function(retour){
                    console.log(value)
                    if(retour){
                        console.log(retour);

                        \$(\".row\").empty();
                        \$(\".row\").hide();
                        \$(\"#searchDivMain\").empty();
                        \$(\"#searchDivMain\").show();

                        \$.each(JSON.parse(retour), function (i, offre) {
                            console.log(offre);

                            var \$newDiv1 = \$(\"<div></div>\").addClass(\"col mb-4\");
                            var \$newDiv2 = \$(\"<div></div>\").addClass(\"card \");
                            var \$newDiv3 = \$(\"<div></div>\").addClass(\"card-body\");
                            var \$newDiv4 = \$(\"<div></div>\").addClass(\"section container\");

                            var \$newH5 = \$(\"<div>\"+offre.titre+\"</div>\").addClass(\"card-title\");
                            var \$newH3 = \$(\"<div>\"+offre.description+\"</div>\").addClass(\"card-text\");
                            var \$newH4 = \$(\"<div>\"+offre.Validite_offre+\"</div>\").addClass(\"float-left\");
                            var \$newH6 = \$(\"<div>\"+offre.prix+\"</div>\").addClass(\"float-right\");
                            var \$newH7 = \$(\"<div>\"+offre.image_offre+\"</div>\").addClass(\"card-body\");
                            

                           

                            

                            

                            \$(\"#searchDivMain\").append(\$newDiv1);
                            \$newDiv1.append(\$newDiv2);
                            \$newDiv2.append(\$newDiv3);
                            \$newDiv3.append(\$newDiv3);
                            \$newDiv3.append(\$newH5);
                            \$newDiv3.append(\$newH4)
                            \$newDiv3.append(\$newH6);
                            \$newDiv3.append(\$newH3);
                            \$newDiv3.append(\$newH7);

                            

                            
                            


                        });
                    }
                },

                error: function (xhr, status, error) {
                    console.log(\"Error: \" + error);
                },
            });
        });
    });
    
    </script>

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
        return array (  303 => 112,  288 => 99,  278 => 98,  264 => 94,  262 => 93,  258 => 91,  255 => 88,  248 => 80,  245 => 79,  238 => 77,  233 => 76,  231 => 75,  228 => 74,  214 => 73,  210 => 71,  208 => 70,  200 => 64,  193 => 57,  189 => 56,  184 => 54,  177 => 52,  171 => 49,  167 => 47,  150 => 46,  144 => 43,  134 => 35,  121 => 21,  111 => 20,  99 => 8,  95 => 7,  90 => 6,  80 => 5,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}New Offre{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/knppaginatorbundle/css/pagination.css') }}\" />
    <link href=\"{{ asset ('assets2/css/btn.css') }}\" rel=\"stylesheet\">
{% endblock %}

{# {% block javascripts %}
    {{ parent() }}
    <script src=\"{{ asset('bundles/knppaginatorbundle/js/pagination.js') }}\"></script>
{% endblock %} #}
{# {% block css %}
  <!-- bouton CSS  -->
  
  {% endblock %} #}

{% block contenu %}
</br>
    <main id=\"main\" class=\"main\">
       <div class=\"pagetitle text-center\">
            <h1 class=\"font-weight-bold\" style=\"font-size: 80px;color: #ff5821;\">Nos Offres </h1>
        </div><!-- End Page Title -->

   <div class=\"mt-5\">
    
        <div class=\"input-group\">
            <input id=\"search\" type=\"text\" placeholder=\"Rechercher votre offre par titre\"  class=\"form-control\" name=\"search-input\"  style=\"left:110px; max-width: 625px;\">

            {# <div class=\"input-group-append\">
                <div class=\"btn btn-primary\" style=\"left:110px;\"><i class=\"fa fa-search\"></i></div>
            </div> #}
       </div>
    
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
   
    <p class=\"card-text\">{{ offre.description }}</p>
            <div class=\"card-text d-flex align-items-center\" style=\"margin-bottom: 200px;\">
    <div class=\"float-left\">{{ offre.ValiditeOffre }}</div>
    <div class=\"float-right\" style=\"margin-left: auto;\">{{ offre.prix }}DT</div>
    
</div>
<div>
    {# <a href=\"{{path(\"cart_add\", {id: offre.id})}}\" class=\"btn btn-success\">
                            <i class=\"bi bi-cart-plus\"></i> Ajouter
                        </a> #}
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
    </div>

        {#------search div----------#}
        <div class=\"row \" id=\"searchDivMain\" style=\"display:none\">
        </div>
        {#------end search div-------#}
    </div>
    <div class=\"d-flex justify-content-center\">
  {% do offres.SetPageRange(2) %}
  {{ knp_pagination_render(offres, \"offre/pagination.html.twig\") }}
</div>
    {% endblock %}

    {% block js %}
    
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js\"></script>
    <script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>

    <script>
    
    \$(document).ready(function(){
        \$(\"#search\").keyup(function(e){
            var value = \$(this).val();
            console.log(value);

            \$.ajax({
                type: \"GET\",
                url: \"{{path('searchOffre')}}\",
                data: {
                    'searchValue' : value
                },

                success: function(retour){
                    console.log(value)
                    if(retour){
                        console.log(retour);

                        \$(\".row\").empty();
                        \$(\".row\").hide();
                        \$(\"#searchDivMain\").empty();
                        \$(\"#searchDivMain\").show();

                        \$.each(JSON.parse(retour), function (i, offre) {
                            console.log(offre);

                            var \$newDiv1 = \$(\"<div></div>\").addClass(\"col mb-4\");
                            var \$newDiv2 = \$(\"<div></div>\").addClass(\"card \");
                            var \$newDiv3 = \$(\"<div></div>\").addClass(\"card-body\");
                            var \$newDiv4 = \$(\"<div></div>\").addClass(\"section container\");

                            var \$newH5 = \$(\"<div>\"+offre.titre+\"</div>\").addClass(\"card-title\");
                            var \$newH3 = \$(\"<div>\"+offre.description+\"</div>\").addClass(\"card-text\");
                            var \$newH4 = \$(\"<div>\"+offre.Validite_offre+\"</div>\").addClass(\"float-left\");
                            var \$newH6 = \$(\"<div>\"+offre.prix+\"</div>\").addClass(\"float-right\");
                            var \$newH7 = \$(\"<div>\"+offre.image_offre+\"</div>\").addClass(\"card-body\");
                            

                           

                            

                            

                            \$(\"#searchDivMain\").append(\$newDiv1);
                            \$newDiv1.append(\$newDiv2);
                            \$newDiv2.append(\$newDiv3);
                            \$newDiv3.append(\$newDiv3);
                            \$newDiv3.append(\$newH5);
                            \$newDiv3.append(\$newH4)
                            \$newDiv3.append(\$newH6);
                            \$newDiv3.append(\$newH3);
                            \$newDiv3.append(\$newH7);

                            

                            
                            


                        });
                    }
                },

                error: function (xhr, status, error) {
                    console.log(\"Error: \" + error);
                },
            });
        });
    });
    
    </script>

{% endblock %}
   

", "offre/index4.html.twig", "C:\\xampp\\htdocs\\PiDEV_V06\\PiDEV_V06\\templates\\offre\\index4.html.twig");
    }
}
