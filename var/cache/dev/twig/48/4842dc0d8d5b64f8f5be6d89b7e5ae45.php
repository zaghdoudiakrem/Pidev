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

/* contrat/pdf.html.twig */
class __TwigTemplate_01aaae5c97ae0fb638e1cc6fdb18ca2a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contrat/pdf.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contrat/pdf.html.twig"));

        // line 1
        echo "<style>
    body {
        background-color: #FFFFFF;
        margin: 50px;
        font-family: Arial, sans-serif;
    }
    h1 {
        color: #ff5821;
        font-style: italic normal;
        text-align: center;
    }
    header {
        padding: 10px;
        background-color: #ff5821;
        color: #FFFFFF;
        text-align: center;
        font-size: 24px;
        font-weight: bold;
    }
    footer {
        position: fixed;
        bottom: 0;
        width: 100%;
        padding: 10px;
        background-color: #f2f2f2;
        font-size: 12px;
        text-align: center;
        border-top: 1px solid #ddd;
    }
    table {
        border-collapse: collapse;
        width: 100%;
        max-width: 800px;
        margin: auto;
    }
    th, td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: left;
    }
    th {
        background-color: #ff5821;
        color: white;
        text-align: center;
    }
    thead th {
        vertical-align: bottom;
        border-bottom: 2px solid #dee2e6;
    }
    .table-striped tbody tr:nth-of-type(odd) {
        background-color: rgba(0, 0, 0, 0.05);
    }
    .text-right {
        text-align: center!important;
    }
    .font-weight-bold {
        font-weight: bold!important;
    }
    .info{
        text-align:center;
    }
</style>

<h1 class=\"display-4\"  style=\"color:#ff5821\">ATTESTAION D'ASSURANCE</h1>
<img src=\"C:/xampp/htdocs/PiDEV_V12/PiDEV_V06/PiDEV_V06/public/assets2/img/logo.PNG\" type=\"image/png\" width=\"100\" height=\"100\">
<p><strong>4RouesAssurances</strong> </p>
<p>Aveune Habib Bourguiba 2083 Cité </p>
<p> El GHazala - Ariana </p>
<p>  +216 70 300 300 </p>
<p>  4rouesassurances@gmail.com </p>
</br>
</br>
</br>
</br>
</br>

  <p class=\"info\" ><strong>ID De Contrat:</strong> ";
        // line 77
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contrat"]) || array_key_exists("contrat", $context) ? $context["contrat"] : (function () { throw new RuntimeError('Variable "contrat" does not exist.', 77, $this->source); })()), "id", [], "any", false, false, false, 77), "html", null, true);
        echo "</p>
  <p class=\"info\" ><strong>Client:</strong> ";
        // line 78
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, (isset($context["contrat"]) || array_key_exists("contrat", $context) ? $context["contrat"] : (function () { throw new RuntimeError('Variable "contrat" does not exist.', 78, $this->source); })()), "nom_client", [], "any", false, false, false, 78) . " ") . twig_get_attribute($this->env, $this->source, (isset($context["contrat"]) || array_key_exists("contrat", $context) ? $context["contrat"] : (function () { throw new RuntimeError('Variable "contrat" does not exist.', 78, $this->source); })()), "prenom_client", [], "any", false, false, false, 78)), "html", null, true);
        echo "</p>
<p class=\"info\" ><strong>Matricule De Voiture:</strong> ";
        // line 79
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, (isset($context["contrat"]) || array_key_exists("contrat", $context) ? $context["contrat"] : (function () { throw new RuntimeError('Variable "contrat" does not exist.', 79, $this->source); })()), "matricule_vehicule", [], "any", false, false, false, 79) . " ") . twig_get_attribute($this->env, $this->source, (isset($context["contrat"]) || array_key_exists("contrat", $context) ? $context["contrat"] : (function () { throw new RuntimeError('Variable "contrat" does not exist.', 79, $this->source); })()), "type_vehicule", [], "any", false, false, false, 79)), "html", null, true);
        echo "</p>
<p class=\"info\" ><strong>Matricule De Voiture:</strong> ";
        // line 80
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contrat"]) || array_key_exists("contrat", $context) ? $context["contrat"] : (function () { throw new RuntimeError('Variable "contrat" does not exist.', 80, $this->source); })()), "cin_client", [], "any", false, false, false, 80), "html", null, true);
        echo "</p>
  <table class=\"info\"  border=\"1\" >
    <thead>
      <tr>
        <th>Offre</th>
        <th>Prix</th>
         
      </tr>
    </thead>
    <tbody>
        <tr>
          <td>";
        // line 91
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, (isset($context["contrat"]) || array_key_exists("contrat", $context) ? $context["contrat"] : (function () { throw new RuntimeError('Variable "contrat" does not exist.', 91, $this->source); })()), "nom_client", [], "any", false, false, false, 91) . " ") . twig_get_attribute($this->env, $this->source, (isset($context["contrat"]) || array_key_exists("contrat", $context) ? $context["contrat"] : (function () { throw new RuntimeError('Variable "contrat" does not exist.', 91, $this->source); })()), "prenom_client", [], "any", false, false, false, 91)), "html", null, true);
        echo "</td>
        </tr>
    </tbody>
  </table>
  ";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "contrat/pdf.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 91,  133 => 80,  129 => 79,  125 => 78,  121 => 77,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<style>
    body {
        background-color: #FFFFFF;
        margin: 50px;
        font-family: Arial, sans-serif;
    }
    h1 {
        color: #ff5821;
        font-style: italic normal;
        text-align: center;
    }
    header {
        padding: 10px;
        background-color: #ff5821;
        color: #FFFFFF;
        text-align: center;
        font-size: 24px;
        font-weight: bold;
    }
    footer {
        position: fixed;
        bottom: 0;
        width: 100%;
        padding: 10px;
        background-color: #f2f2f2;
        font-size: 12px;
        text-align: center;
        border-top: 1px solid #ddd;
    }
    table {
        border-collapse: collapse;
        width: 100%;
        max-width: 800px;
        margin: auto;
    }
    th, td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: left;
    }
    th {
        background-color: #ff5821;
        color: white;
        text-align: center;
    }
    thead th {
        vertical-align: bottom;
        border-bottom: 2px solid #dee2e6;
    }
    .table-striped tbody tr:nth-of-type(odd) {
        background-color: rgba(0, 0, 0, 0.05);
    }
    .text-right {
        text-align: center!important;
    }
    .font-weight-bold {
        font-weight: bold!important;
    }
    .info{
        text-align:center;
    }
</style>

<h1 class=\"display-4\"  style=\"color:#ff5821\">ATTESTAION D'ASSURANCE</h1>
<img src=\"C:/xampp/htdocs/PiDEV_V12/PiDEV_V06/PiDEV_V06/public/assets2/img/logo.PNG\" type=\"image/png\" width=\"100\" height=\"100\">
<p><strong>4RouesAssurances</strong> </p>
<p>Aveune Habib Bourguiba 2083 Cité </p>
<p> El GHazala - Ariana </p>
<p>  +216 70 300 300 </p>
<p>  4rouesassurances@gmail.com </p>
</br>
</br>
</br>
</br>
</br>

  <p class=\"info\" ><strong>ID De Contrat:</strong> {{ contrat.id }}</p>
  <p class=\"info\" ><strong>Client:</strong> {{ contrat.nom_client ~ \" \" ~ contrat.prenom_client }}</p>
<p class=\"info\" ><strong>Matricule De Voiture:</strong> {{ contrat.matricule_vehicule ~ \" \" ~ contrat.type_vehicule }}</p>
<p class=\"info\" ><strong>Matricule De Voiture:</strong> {{ contrat.cin_client }}</p>
  <table class=\"info\"  border=\"1\" >
    <thead>
      <tr>
        <th>Offre</th>
        <th>Prix</th>
         
      </tr>
    </thead>
    <tbody>
        <tr>
          <td>{{ contrat.nom_client ~ \" \" ~ contrat.prenom_client }}</td>
        </tr>
    </tbody>
  </table>
  ", "contrat/pdf.html.twig", "C:\\xampp\\htdocs\\PiDEV_V12\\PiDEV_V06\\PiDEV_V06\\templates\\contrat\\pdf.html.twig");
    }
}
