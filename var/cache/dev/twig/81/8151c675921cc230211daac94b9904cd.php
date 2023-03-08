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

/* offre/pagination.html.twig */
class __TwigTemplate_5bf6eee8bef9c7902f0bc05727bb3eff extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "offre/pagination.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "offre/pagination.html.twig"));

        // line 22
        echo "
";
        // line 23
        if (((isset($context["pageCount"]) || array_key_exists("pageCount", $context) ? $context["pageCount"] : (function () { throw new RuntimeError('Variable "pageCount" does not exist.', 23, $this->source); })()) > 1)) {
            // line 24
            echo "
    <nav>

        ";
            // line 27
            $context["classAlign"] = (( !array_key_exists("align", $context)) ? ("") : (((((isset($context["align"]) || array_key_exists("align", $context) ? $context["align"] : (function () { throw new RuntimeError('Variable "align" does not exist.', 27, $this->source); })()) == "center")) ? (" justify-content-center") : (((((isset($context["align"]) || array_key_exists("align", $context) ? $context["align"] : (function () { throw new RuntimeError('Variable "align" does not exist.', 27, $this->source); })()) == "right")) ? (" justify-content-end") : (""))))));
            // line 28
            echo "
        ";
            // line 29
            $context["classSize"] = (( !array_key_exists("size", $context)) ? ("") : (((((isset($context["size"]) || array_key_exists("size", $context) ? $context["size"] : (function () { throw new RuntimeError('Variable "size" does not exist.', 29, $this->source); })()) == "large")) ? (" pagination-lg") : (((((isset($context["size"]) || array_key_exists("size", $context) ? $context["size"] : (function () { throw new RuntimeError('Variable "size" does not exist.', 29, $this->source); })()) == "small")) ? (" pagination-sm") : (""))))));
            // line 30
            echo "
        <ul class=\"pagination";
            // line 31
            echo twig_escape_filter($this->env, (isset($context["classAlign"]) || array_key_exists("classAlign", $context) ? $context["classAlign"] : (function () { throw new RuntimeError('Variable "classAlign" does not exist.', 31, $this->source); })()), "html", null, true);
            echo twig_escape_filter($this->env, (isset($context["classSize"]) || array_key_exists("classSize", $context) ? $context["classSize"] : (function () { throw new RuntimeError('Variable "classSize" does not exist.', 31, $this->source); })()), "html", null, true);
            echo "\">

 

            ";
            // line 35
            if (array_key_exists("previous", $context)) {
                // line 36
                echo "
                <li class=\"page-item\">

                    <a class=\"page-link\" rel=\"prev\" href=\"";
                // line 39
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 39, $this->source); })()), twig_array_merge((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 39, $this->source); })()), [(isset($context["pageParameterName"]) || array_key_exists("pageParameterName", $context) ? $context["pageParameterName"] : (function () { throw new RuntimeError('Variable "pageParameterName" does not exist.', 39, $this->source); })()) => (isset($context["previous"]) || array_key_exists("previous", $context) ? $context["previous"] : (function () { throw new RuntimeError('Variable "previous" does not exist.', 39, $this->source); })())])), "html", null, true);
                echo "\">&laquo;&nbsp;";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label_previous", [], "KnpPaginatorBundle"), "html", null, true);
                echo "</a>

                </li>

            ";
            } else {
                // line 44
                echo "
                <li class=\"page-item disabled\">

                    <span style=\"color:#ff5821;\" class=\"page-link\">&laquo;&nbsp;";
                // line 47
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label_previous", [], "KnpPaginatorBundle"), "html", null, true);
                echo "</span>

                </li>

            ";
            }
            // line 52
            echo "
 

            ";
            // line 55
            if (((isset($context["startPage"]) || array_key_exists("startPage", $context) ? $context["startPage"] : (function () { throw new RuntimeError('Variable "startPage" does not exist.', 55, $this->source); })()) > 1)) {
                // line 56
                echo "
                <li class=\"page-item\">

                    <a style=\"color:#ff5821;\" class=\"page-link\" href=\"";
                // line 59
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 59, $this->source); })()), twig_array_merge((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 59, $this->source); })()), [(isset($context["pageParameterName"]) || array_key_exists("pageParameterName", $context) ? $context["pageParameterName"] : (function () { throw new RuntimeError('Variable "pageParameterName" does not exist.', 59, $this->source); })()) => 1])), "html", null, true);
                echo "\">1</a>

                </li>

                ";
                // line 63
                if (((isset($context["startPage"]) || array_key_exists("startPage", $context) ? $context["startPage"] : (function () { throw new RuntimeError('Variable "startPage" does not exist.', 63, $this->source); })()) == 3)) {
                    // line 64
                    echo "
                    <li class=\"page-item\">

                        <a style=\"color:#ff5821;\" class=\"page-link\" href=\"";
                    // line 67
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 67, $this->source); })()), twig_array_merge((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 67, $this->source); })()), [(isset($context["pageParameterName"]) || array_key_exists("pageParameterName", $context) ? $context["pageParameterName"] : (function () { throw new RuntimeError('Variable "pageParameterName" does not exist.', 67, $this->source); })()) => 2])), "html", null, true);
                    echo "\">2</a>

                    </li>

                ";
                } elseif ((                // line 71
(isset($context["startPage"]) || array_key_exists("startPage", $context) ? $context["startPage"] : (function () { throw new RuntimeError('Variable "startPage" does not exist.', 71, $this->source); })()) != 2)) {
                    // line 72
                    echo "
                    <li class=\"page-item disabled\">

                        <span class=\"page-link\">&hellip;</span>

                    </li>

                ";
                }
                // line 80
                echo "
            ";
            }
            // line 82
            echo "
 

            ";
            // line 85
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pagesInRange"]) || array_key_exists("pagesInRange", $context) ? $context["pagesInRange"] : (function () { throw new RuntimeError('Variable "pagesInRange" does not exist.', 85, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 86
                echo "
                ";
                // line 87
                if (($context["page"] != (isset($context["current"]) || array_key_exists("current", $context) ? $context["current"] : (function () { throw new RuntimeError('Variable "current" does not exist.', 87, $this->source); })()))) {
                    // line 88
                    echo "
                    <li class=\"page-item\">

                        <a style=\"color:#ff5821;\"class=\"page-link\" href=\"";
                    // line 91
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 91, $this->source); })()), twig_array_merge((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 91, $this->source); })()), [(isset($context["pageParameterName"]) || array_key_exists("pageParameterName", $context) ? $context["pageParameterName"] : (function () { throw new RuntimeError('Variable "pageParameterName" does not exist.', 91, $this->source); })()) => $context["page"]])), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo "</a>

                    </li>

                ";
                } else {
                    // line 96
                    echo "
                    <li class=\"page-item active\">

                        <span style=\"color:#ff5821;\" class=\"page-link\">";
                    // line 99
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo "</span>

                    </li>

                ";
                }
                // line 104
                echo "
 

            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 108
            echo "
 

            ";
            // line 111
            if (((isset($context["pageCount"]) || array_key_exists("pageCount", $context) ? $context["pageCount"] : (function () { throw new RuntimeError('Variable "pageCount" does not exist.', 111, $this->source); })()) > (isset($context["endPage"]) || array_key_exists("endPage", $context) ? $context["endPage"] : (function () { throw new RuntimeError('Variable "endPage" does not exist.', 111, $this->source); })()))) {
                // line 112
                echo "
                ";
                // line 113
                if (((isset($context["pageCount"]) || array_key_exists("pageCount", $context) ? $context["pageCount"] : (function () { throw new RuntimeError('Variable "pageCount" does not exist.', 113, $this->source); })()) > ((isset($context["endPage"]) || array_key_exists("endPage", $context) ? $context["endPage"] : (function () { throw new RuntimeError('Variable "endPage" does not exist.', 113, $this->source); })()) + 1))) {
                    // line 114
                    echo "
                    ";
                    // line 115
                    if (((isset($context["pageCount"]) || array_key_exists("pageCount", $context) ? $context["pageCount"] : (function () { throw new RuntimeError('Variable "pageCount" does not exist.', 115, $this->source); })()) > ((isset($context["endPage"]) || array_key_exists("endPage", $context) ? $context["endPage"] : (function () { throw new RuntimeError('Variable "endPage" does not exist.', 115, $this->source); })()) + 2))) {
                        // line 116
                        echo "
                        <li style=\"color:#ff5821;\"class=\"page-item disabled\">

                            <span style=\"color:#ff5821;\" class=\"page-link\">&hellip;</span>

                        </li>

                    ";
                    } else {
                        // line 124
                        echo "
                        <li style=\"color:#ff5821;\" class=\"page-item\">

                            <a style=\"color:#ff5821;\" class=\"page-link\" href=\"";
                        // line 127
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 127, $this->source); })()), twig_array_merge((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 127, $this->source); })()), [(isset($context["pageParameterName"]) || array_key_exists("pageParameterName", $context) ? $context["pageParameterName"] : (function () { throw new RuntimeError('Variable "pageParameterName" does not exist.', 127, $this->source); })()) => ((isset($context["pageCount"]) || array_key_exists("pageCount", $context) ? $context["pageCount"] : (function () { throw new RuntimeError('Variable "pageCount" does not exist.', 127, $this->source); })()) - 1)])), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, ((isset($context["pageCount"]) || array_key_exists("pageCount", $context) ? $context["pageCount"] : (function () { throw new RuntimeError('Variable "pageCount" does not exist.', 127, $this->source); })()) - 1), "html", null, true);
                        echo "</a>

                        </li>

                    ";
                    }
                    // line 132
                    echo "
                ";
                }
                // line 134
                echo "
                <li style=\"color:#ff5821;\" class=\"page-item\">

                    <a style=\"color:#ff5821;\" class=\"page-link\" href=\"";
                // line 137
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 137, $this->source); })()), twig_array_merge((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 137, $this->source); })()), [(isset($context["pageParameterName"]) || array_key_exists("pageParameterName", $context) ? $context["pageParameterName"] : (function () { throw new RuntimeError('Variable "pageParameterName" does not exist.', 137, $this->source); })()) => (isset($context["pageCount"]) || array_key_exists("pageCount", $context) ? $context["pageCount"] : (function () { throw new RuntimeError('Variable "pageCount" does not exist.', 137, $this->source); })())])), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, (isset($context["pageCount"]) || array_key_exists("pageCount", $context) ? $context["pageCount"] : (function () { throw new RuntimeError('Variable "pageCount" does not exist.', 137, $this->source); })()), "html", null, true);
                echo "</a>

                </li>

            ";
            }
            // line 142
            echo "
";
            // line 143
            if (array_key_exists("next", $context)) {
                // line 144
                echo " 
                <li style=\"color:#ff5821;\" class=\"page-item\">

                    <a class=\"page-link\" style=\"color:#ff5821;\" rel=\"next\" href=\"";
                // line 147
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 147, $this->source); })()), twig_array_merge((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 147, $this->source); })()), [(isset($context["pageParameterName"]) || array_key_exists("pageParameterName", $context) ? $context["pageParameterName"] : (function () { throw new RuntimeError('Variable "pageParameterName" does not exist.', 147, $this->source); })()) => (isset($context["next"]) || array_key_exists("next", $context) ? $context["next"] : (function () { throw new RuntimeError('Variable "next" does not exist.', 147, $this->source); })())])), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label_next", [], "KnpPaginatorBundle"), "html", null, true);
                echo "&nbsp;&raquo;</a>

                </li>

            ";
            } else {
                // line 152
                echo "
                <li style=\"color:#ff5821;\" class=\"page-item disabled\">

                    <span style=\"color:#ff5821;\" class=\"page-link\">";
                // line 155
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label_next", [], "KnpPaginatorBundle"), "html", null, true);
                echo "&nbsp;&raquo;</span>

                </li>

            ";
            }
            // line 160
            echo "
        </ul>

    </nav>

";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "offre/pagination.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  295 => 160,  287 => 155,  282 => 152,  272 => 147,  267 => 144,  265 => 143,  262 => 142,  252 => 137,  247 => 134,  243 => 132,  233 => 127,  228 => 124,  218 => 116,  216 => 115,  213 => 114,  211 => 113,  208 => 112,  206 => 111,  201 => 108,  192 => 104,  184 => 99,  179 => 96,  169 => 91,  164 => 88,  162 => 87,  159 => 86,  155 => 85,  150 => 82,  146 => 80,  136 => 72,  134 => 71,  127 => 67,  122 => 64,  120 => 63,  113 => 59,  108 => 56,  106 => 55,  101 => 52,  93 => 47,  88 => 44,  78 => 39,  73 => 36,  71 => 35,  63 => 31,  60 => 30,  58 => 29,  55 => 28,  53 => 27,  48 => 24,  46 => 23,  43 => 22,);
    }

    public function getSourceContext()
    {
        return new Source("{#

/**

 * @file

 * Twitter Bootstrap v4 Sliding pagination control implementation.

 *

 * View that can be used with the pagination module

 * from the Twitter Bootstrap CSS Toolkit

 * https://getbootstrap.com/docs/4.5/components/pagination/

 *

 */

#}

{% if pageCount > 1 %}

    <nav>

        {% set classAlign = (align is not defined) ? '' : align=='center' ? ' justify-content-center' : (align=='right' ? ' justify-content-end' : '') %}

        {% set classSize = (size is not defined) ? '' : size=='large' ? ' pagination-lg' : (size=='small' ? ' pagination-sm' : '') %}

        <ul class=\"pagination{{ classAlign }}{{ classSize }}\">

 

            {% if previous is defined %}

                <li class=\"page-item\">

                    <a class=\"page-link\" rel=\"prev\" href=\"{{ path(route, query|merge({(pageParameterName): previous})) }}\">&laquo;&nbsp;{{ 'label_previous'|trans({}, 'KnpPaginatorBundle') }}</a>

                </li>

            {% else %}

                <li class=\"page-item disabled\">

                    <span style=\"color:#ff5821;\" class=\"page-link\">&laquo;&nbsp;{{ 'label_previous'|trans({}, 'KnpPaginatorBundle') }}</span>

                </li>

            {% endif %}

 

            {% if startPage > 1 %}

                <li class=\"page-item\">

                    <a style=\"color:#ff5821;\" class=\"page-link\" href=\"{{ path(route, query|merge({(pageParameterName): 1})) }}\">1</a>

                </li>

                {% if startPage == 3 %}

                    <li class=\"page-item\">

                        <a style=\"color:#ff5821;\" class=\"page-link\" href=\"{{ path(route, query|merge({(pageParameterName): 2})) }}\">2</a>

                    </li>

                {% elseif startPage != 2 %}

                    <li class=\"page-item disabled\">

                        <span class=\"page-link\">&hellip;</span>

                    </li>

                {% endif %}

            {% endif %}

 

            {% for page in pagesInRange %}

                {% if page != current %}

                    <li class=\"page-item\">

                        <a style=\"color:#ff5821;\"class=\"page-link\" href=\"{{ path(route, query|merge({(pageParameterName): page})) }}\">{{ page }}</a>

                    </li>

                {% else %}

                    <li class=\"page-item active\">

                        <span style=\"color:#ff5821;\" class=\"page-link\">{{ page }}</span>

                    </li>

                {% endif %}

 

            {% endfor %}

 

            {% if pageCount > endPage %}

                {% if pageCount > (endPage + 1) %}

                    {% if pageCount > (endPage + 2) %}

                        <li style=\"color:#ff5821;\"class=\"page-item disabled\">

                            <span style=\"color:#ff5821;\" class=\"page-link\">&hellip;</span>

                        </li>

                    {% else %}

                        <li style=\"color:#ff5821;\" class=\"page-item\">

                            <a style=\"color:#ff5821;\" class=\"page-link\" href=\"{{ path(route, query|merge({(pageParameterName): (pageCount - 1)})) }}\">{{ pageCount -1 }}</a>

                        </li>

                    {% endif %}

                {% endif %}

                <li style=\"color:#ff5821;\" class=\"page-item\">

                    <a style=\"color:#ff5821;\" class=\"page-link\" href=\"{{ path(route, query|merge({(pageParameterName): pageCount})) }}\">{{ pageCount }}</a>

                </li>

            {% endif %}

{% if next is defined %}
 
                <li style=\"color:#ff5821;\" class=\"page-item\">

                    <a class=\"page-link\" style=\"color:#ff5821;\" rel=\"next\" href=\"{{ path(route, query|merge({(pageParameterName): next})) }}\">{{ 'label_next'|trans({}, 'KnpPaginatorBundle') }}&nbsp;&raquo;</a>

                </li>

            {% else %}

                <li style=\"color:#ff5821;\" class=\"page-item disabled\">

                    <span style=\"color:#ff5821;\" class=\"page-link\">{{ 'label_next'|trans({}, 'KnpPaginatorBundle') }}&nbsp;&raquo;</span>

                </li>

            {% endif %}

        </ul>

    </nav>

{% endif %}", "offre/pagination.html.twig", "C:\\xampp\\htdocs\\PiDEV_V12\\PiDEV_V06\\PiDEV_V06\\templates\\offre\\pagination.html.twig");
    }
}
