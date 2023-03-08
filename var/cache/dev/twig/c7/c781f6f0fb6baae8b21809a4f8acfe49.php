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

/* base.html.twig */
class __TwigTemplate_516b4c9b2ce075831c0e077d83043f27 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'titre' => [$this, 'block_titre'],
            'header' => [$this, 'block_header'],
            'contenu' => [$this, 'block_contenu'],
            'footer' => [$this, 'block_footer'],
            'js' => [$this, 'block_js'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
  <meta charset=\"utf-8\">
  <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">

  <link href=\"assets/img/testimonials/logo.png\" rel=\"icon\">
  <link href=\"assets/img/testimonials/logo.png\" rel=\"apple-touch-icon\">
  ";
        // line 10
        $this->displayBlock('titre', $context, $blocks);
        // line 11
        echo "  <meta content=\"\" name=\"description\">
  <meta content=\"\" name=\"keywords\">

  <!-- Google Fonts -->
  <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i\" rel=\"stylesheet\">

  <!-- Vendor CSS Files -->
  
  <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/aos/aos.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/bootstrap-icons/bootstrap-icons.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/boxicons/css/boxicons.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/glightbox/css/glightbox.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/swiper/swiper-bundle.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

  <!-- Template Main CSS File -->
  <link href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  

  
 <link href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t\t<link href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/vendor/bootstrap-icons/bootstrap-icons.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t\t<link href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/vendor/boxicons/css/boxicons.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t\t<link href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/vendor/quill/quill.snow.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t\t<link href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/vendor/quill/quill.bubble.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t\t<link href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/vendor/remixicon/remixicon.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t\t<link
\t\t\thref=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/vendor/simple-datatables/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

  <!-- Template Main CSS File -->
 

   <!-- bouton CSS  -->
 <link href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/css/btn.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
 <link rel=\"stylesheet\" href=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/fontawesome.min.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/solid.min.css"), "html", null, true);
        echo "\">

  <!-- =======================================================
  * Template Name: Flexor - v4.10.0
  * Template URL: https://bootstrapmade.com/flexor-free-multipurpose-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <section id=\"topbar\" class=\"d-flex align-items-center\">
    <div class=\"container d-flex justify-content-center justify-content-md-between\">
      <div class=\"contact-info d-flex align-items-center\">
        <i class=\"bi bi-envelope d-flex align-items-center\"><a href=\"mailto:contact@example.com\">4rouesassurances@gmail.com</a></i>
        <i class=\"bi bi-phone d-flex align-items-center ms-4\"><span>+216 70 300 300</span></i>
      </div>

      <div class=\"cta d-none d-md-flex align-items-center\">
        <a href=\"#about\" class=\"scrollto\">Se Connecter</a>
      </div>
    </div>
  </section>

  <!-- ======= Header ======= -->
  ";
        // line 73
        $this->displayBlock('header', $context, $blocks);
        // line 102
        echo "  <!-- End Header -->
  

  <!-- ======= Hero Section ======= -->
  ";
        // line 106
        $this->displayBlock('contenu', $context, $blocks);
        // line 895
        echo "  <!-- End #main --> 

  <!-- ======= Footer ======= -->
  ";
        // line 898
        $this->displayBlock('footer', $context, $blocks);
        // line 901
        echo "  <!-- End Footer -->

  <a href=\"#\" class=\"back-to-top d-flex align-items-center justify-content-center\"><i class=\"bi bi-arrow-up-short\"></i></a>

  <!-- Vendor JS Files -->
  ";
        // line 906
        $this->displayBlock('js', $context, $blocks);
        // line 917
        echo "
</body>

<footer id=\"footer\">

    <div class=\"footer-top\">
      <div class=\"container\">
        <div class=\"row\">

          <div class=\"col-lg-3 col-md-6 footer-contact\">
            <h3>4Roues Assurances</h3>
            <p>
              Aveune Habib Bourguiba 2083 <br>Cité El GHazala - Ariana<br>
              <strong>Tel:</strong> +216 70 300 300<br>
              <strong>Email:</strong> 4rouesassurances@gmail.com<br>
            </p>
          </div>

          <div class=\"col-lg-2 col-md-6 footer-links\">
            <h4>Liens</h4>
            <ul>
              <li><i class=\"bx bx-chevron-right\"></i> <a href=\"#hero\">Acceuil</a></li>
              <li><i class=\"bx bx-chevron-right\"></i> <a href=\"#about\">A propos</a></li>
              <li><i class=\"bx bx-chevron-right\"></i> <a href=\"#services\">Nos conseils</a></li>
              <li><i class=\"bx bx-chevron-right\"></i> <a href=\"#portfolio\">Nos offres</a></li>
              <li><i class=\"bx bx-chevron-right\"></i> <a href=\"#team\">Notre équipe</a></li>
              <li><i class=\"bx bx-chevron-right\"></i> <a href=\"#pricing\">Nos agences </a></li>
            </ul>
          </div>

          <div class=\"col-lg-3 col-md-6 footer-links\">
            <h4>Nos Services</h4>
            <ul>
              <li><i class=\"bx bx-chevron-right\"></i> <a href=\"#\">Web Design</a></li>
              <li><i class=\"bx bx-chevron-right\"></i> <a href=\"#\">Web Development</a></li>
              <li><i class=\"bx bx-chevron-right\"></i> <a href=\"#\">Product Management</a></li>
              <li><i class=\"bx bx-chevron-right\"></i> <a href=\"#\">Marketing</a></li>
              <li><i class=\"bx bx-chevron-right\"></i> <a href=\"#\">Graphic Design</a></li>
            </ul>
          </div>

          <div class=\"col-lg-4 col-md-6 footer-newsletter\">
            <h4>Rejoignez notre newsletter</h4>
            <form action=\"\" method=\"post\">
              <input type=\"email\" name=\"email\"><input type=\"submit\" value=\"Abonner\">
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class=\"container d-lg-flex py-4\">

      <div class=\"me-lg-auto text-center text-lg-start\">
        <div class=\"copyright\">
          &copy; Copyright <strong><span>4rouesassurances</span></strong>. All Rights Reserved
        </div>
        <div class=\"credits\">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/flexor-free-multipurpose-bootstrap-template/ -->
          Designed by <a href=\"#\">CodingSquad</a>
        </div>
      </div>
      <div class=\"social-links text-center text-lg-right pt-3 pt-lg-0\">
        <a href=\"#\" class=\"twitter\"><i class=\"bx bxl-twitter\"></i></a>
        <a href=\"#\" class=\"facebook\"><i class=\"bx bxl-facebook\"></i></a>
        <a href=\"#\" class=\"instagram\"><i class=\"bx bxl-instagram\"></i></a>
        <a href=\"#\" class=\"google-plus\"><i class=\"bx bxl-skype\"></i></a>
        <a href=\"#\" class=\"linkedin\"><i class=\"bx bxl-linkedin\"></i></a>
      </div>
    </div>
  </footer>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 10
    public function block_titre($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "titre"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "titre"));

        echo "<title>Assurances 4Roues</title>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 73
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 74
        echo "  <header id=\"header\" class=\"d-flex align-items-center\">
    <div class=\"container d-flex align-items-center justify-content-between\">

      <div class=\"logo\">
      <img src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/logo_png.png"), "html", null, true);
        echo "\" alt=\"\" class=\"img-fluid\">
       <div class=\"title\">
        <h1 ><a href=\"index.html\">4Roues Assurances </a></h1>
        </div>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href=\"index.html\"><img src=\"assets/img/logo.png\" alt=\"\" class=\"img-fluid\"></a>-->
      </div>

      <nav id=\"navbar\" class=\"navbar\">
        <ul>
          <li><a class=\"nav-link scrollto active\" href=\"#hero\">Acceuil</a></li>
          <li><a class=\"nav-link scrollto\" href=\"#about\">A propos</a></li>
          <li><a class=\"nav-link scrollto\" href=\"#services\">Nos conseils</a></li>
          <li><a class=\"nav-link scrollto \" href=\"#portfolio\">Nos offres</a></li>
          <li><a class=\"nav-link scrollto\" href=\"#team\">Notre équipe</a></li>
          <li><a class=\"nav-link scrollto\" href=\"/offre/front\">Nos offres</a></li>
          <li><a class=\"nav-link scrollto\" href=\"#contact\">Contactez nous</a></li>
        </ul>
        <i class=\"bi bi-list mobile-nav-toggle\"></i>
      </nav><!-- .navbar -->

    </div>
  </header> 
  ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 106
    public function block_contenu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contenu"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contenu"));

        // line 107
        echo "  <section id=\"hero\" class=\"d-flex flex-column justify-content-center align-items-center\">
    <div class=\"container\" data-aos=\"fade-in\">
      <h1>Bienvenue chez 4Roues Assurances </h1>
      <h2>Nous sommes Coding Squad</h2>
      <div class=\"d-flex align-items-center\">
        <i class=\"bx bxs-right-arrow-alt get-started-icon\"></i>
        <a href=\"#about\" class=\"btn-get-started scrollto\">S'inscrire</a>
      </div>
    </div>
  </section><!-- End Hero -->

  <main id=\"main\">

     <!-- ======= Why Us Section ======= -->
    <section id=\"why-us\" class=\"why-us\">
      <div class=\"container\">

        <div class=\"row\">
          <div class=\"col-xl-4 col-lg-5\" data-aos=\"fade-up\">
            <div class=\"content\">
              <h3>Pourquoi choisir 4Roues Assurances ?</h3>
              <p>
                Notre philosophie, nos valeurs et notre expertise dans le domaine de l'assurance des véhicules vous offrent notre compréhension en même temps que notre capacité à imaginer les meilleures façons pour assurer votre voiture, payer votre constat en ligne et consulter vos statistiques.
              </p>
              <div class=\"text-center\">
                <a href=\"#\" class=\"more-btn\">Lire Plus <i class=\"bx bx-chevron-right\"></i></a>
              </div>
            </div>
          </div>
          <div class=\"col-xl-8 col-lg-7 d-flex\">
            <div class=\"icon-boxes d-flex flex-column justify-content-center\">
              <div class=\"row\">
                <div class=\"col-xl-4 d-flex align-items-stretch\" data-aos=\"fade-up\" data-aos-delay=\"100\">
                  <div class=\"icon-box mt-4 mt-xl-0\">
                    <i class=\"bx bx-receipt\"></i>
                    <h4>Votre 1èr site d'assurance qui vous permet de signer votre constat en ligne</h4>
                    
                  </div>
                </div>
                <div class=\"col-xl-4 d-flex align-items-stretch\" data-aos=\"fade-up\" data-aos-delay=\"200\">
                  <div class=\"icon-box mt-4 mt-xl-0\">
                    <i class=\"bx bx-gift\"></i>
                    <h4>Des tarifs au juste prix</h4>
                    <p>Profitez des meilleures offres aux meilleurs prix</p>
                  </div>
                </div>
                <div class=\"col-xl-4 d-flex align-items-stretch\" data-aos=\"fade-up\" data-aos-delay=\"300\">
                  <div class=\"icon-box mt-4 mt-xl-0\">
                    <i class=\"bi bi-calendar4-week\"></i>
                    <h4>Une disponibilité jamais démentie</h4>
                    <p>Notre site web est <br> disponible 24/7</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Why Us Section -->

     <!-- ======= About Section ======= -->
    <section id=\"about\" class=\"about section-bg\">
      <div class=\"container\">

        <div class=\"row\">
          <div class=\"col-xl-5 col-lg-6 video-box d-flex justify-content-center align-items-stretch position-relative\" data-aos=\"fade-right\">
            <a href=\"assets/img/vedio/vedio.mp4\" class=\"glightbox play-btn mb-4\"></a>
          </div>

          <div class=\"col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5\">
            
            <h3 data-aos=\"fade-up\">A propos de nous  </h3>
            <p data-aos=\"fade-up\">Ingénieurs diplômés d'Ecole Superieur Privée d'Ingénierie et de Technologies, spécialistes reconnus dans leur domaine depuis des années, Coding Squad regroupe de multiples talents en interne,  pour vous apporter les meilleurs services</p>

            <div class=\"icon-box\" data-aos=\"fade-up\">
              <div class=\"icon\"><i class=\"bx bx-cube-alt\"></i></div>
              <h4 class=\"title\"><a href=\"\">Equipe</a></h4>
              <p class=\"description\"> Nous sommes une équipe de 6 personnes et nous nous efforçons de créer les meilleurs services pour aider nos clients à assurer
leurs véhicules et payer leurs constats en ligne. </p>
            </div>

            <div class=\"icon-box\" data-aos=\"fade-up\" data-aos-delay=\"100\">
              <div class=\"icon\"><i class=\"bx bx-cube-alt\"></i></div>
              <h4 class=\"title\"><a href=\"\">Objectif</a></h4>
              <p class=\"description\"> Nous avons toujours cherché à faire les choses un peu différemment par rapport aux autres assurances. Depuis les premiers jours, nous avons
concentré sur la création de l'une des applications les plus uniques et les plus enrichissantes de Tunisie. </p>
            </div>

            <div class=\"icon-box\" data-aos=\"fade-up\" data-aos-delay=\"200\">
              <div class=\"icon\"><i class=\"bx bx-cube-alt\"></i></div>
              <h4 class=\"title\"><a href=\"\">Slogan</a></h4>
              <p class=\"description\">La plupart des entreprises mettent leurs valeurs dans un manifeste. Nous les mettons en action. Voici à quoi ça ressemble de notre premier jour à notre dernier jour.</p>
            </div>

          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Clients Section ======= -->
    <section id=\"clients\" class=\"clients\">
      <div class=\"container\" data-aos=\"fade-up\">

        <div class=\"clients-slider swiper\">
          <div class=\"swiper-wrapper align-items-center\">
            <div class=\"swiper-slide\"><img src=\"";
        // line 214
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/clients/client-1.png"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\"></div>
            <div class=\"swiper-slide\"><img src=\"";
        // line 215
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/clients/client-2.png"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\"></div>
            <div class=\"swiper-slide\"><img src=\"";
        // line 216
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/clients/client-3.png"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\"></div>
            <div class=\"swiper-slide\"><img src=\"";
        // line 217
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/clients/client-4.png"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\"></div>
            <div class=\"swiper-slide\"><img src=\"";
        // line 218
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/clients/client-5.png"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\"></div>
            <div class=\"swiper-slide\"><img src=\"";
        // line 219
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/clients/client-6.png"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\"></div>
            <div class=\"swiper-slide\"><img src=\"";
        // line 220
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/clients/client-7.png"), "html", null, true);
        echo " \" class=\"img-fluid\" alt=\"\"></div>
            <div class=\"swiper-slide\"><img src=\"";
        // line 221
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/clients/client-8.png"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\"></div>
          </div>
          <div class=\"swiper-pagination\"></div>
        </div>

      </div>
    </section><!-- End Clients Section -->

    <!-- ======= Services Section ======= -->
    <section id=\"services\" class=\"services section-bg\">
      <div class=\"container\">

        <div class=\"section-title\" data-aos=\"fade-up\">
          <h2>Nos Conseils</h2>
          <p> Les conseils en assurance du moment </p>
        </div>

        <div class=\"row\">
          <div class=\"col-lg-4 col-md-6\" data-aos=\"fade-up\">
            <div class=\"icon-box\">
              <div class=\"icon\"><i class=\"bi bi-briefcase\"></i></div>
              <h4 class=\"title\"><a href=\"\">Assurance auto et bonus-malus : comment ça fonctionne ? </a></h4>
              <p class=\"description\">Le prix de votre assurance auto dépend d’un système de bonus-malus. Si le fonctionnement de ce dispositif vous semble encore obscur.</p>
            </div>
          </div>
          <div class=\"col-lg-4 col-md-6\" data-aos=\"fade-up\" data-aos-delay=\"100\">
            <div class=\"icon-box\">
              <div class=\"icon\"><i class=\"bi bi-card-checklist\"></i></div>
              <h4 class=\"title\"><a href=\"\">Dolor Sitema</a></h4>
              <p class=\"description\">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
            </div>
          </div>
          <div class=\"col-lg-4 col-md-6\" data-aos=\"fade-up\" data-aos-delay=\"200\">
            <div class=\"icon-box\">
              <div class=\"icon\"><i class=\"bi bi-bar-chart\"></i></div>
              <h4 class=\"title\"><a href=\"\">Sed ut perspiciatis</a></h4>
              <p class=\"description\">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
            </div>
          </div>
          <div class=\"col-lg-4 col-md-6\" data-aos=\"fade-up\" data-aos-delay=\"300\">
            <div class=\"icon-box\">
              <div class=\"icon\"><i class=\"bi bi-binoculars\"></i></div>
              <h4 class=\"title\"><a href=\"\">Magni Dolores</a></h4>
              <p class=\"description\">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
            </div>
          </div>
          <div class=\"col-lg-4 col-md-6\" data-aos=\"fade-up\" data-aos-delay=\"400\">
            <div class=\"icon-box\">
              <div class=\"icon\"><i class=\"bi bi-brightness-high\"></i></div>
              <h4 class=\"title\"><a href=\"\">Nemo Enim</a></h4>
              <p class=\"description\">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
            </div>
          </div>
          <div class=\"col-lg-4 col-md-6\" data-aos=\"fade-up\" data-aos-delay=\"500\">
            <div class=\"icon-box\">
              <div class=\"icon\"><i class=\"bi bi-calendar4-week\"></i></div>
              <h4 class=\"title\"><a href=\"\">Eiusmod Tempor</a></h4>
              <p class=\"description\">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi</p>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Values Section ======= -->
    <section id=\"values\" class=\"values\">
      <div class=\"container\">

        <div class=\"row\">
          <div class=\"col-md-6 d-flex align-items-stretch\" data-aos=\"fade-up\">
            <div class=\"card\" style=\"background-image: url(assets/img/values-1.jpg);\">
              <div class=\"card-body\">
                <h5 class=\"card-title\"><a href=\"\">Nos Missions</a></h5>
                <p class=\"card-text\">Être un partenaire de choix et vous proposer des solutions adaptées à votre réalité.Nous savons que chacun de vous a des besoins uniques.</p>
<!-- Notre mission est donc de vous protéger tout au long de votre parcours de vie en orientant notre fonctionnement autour de ce qui est nécessaire à votre tranquillité.
Notre devoir est de vous offrir un accompagnement expert garantissant à chacun d’entre vous une protection adaptée. Pour cela, nous vous apportons nos conseils et notre expertise en matière de prévention pour vous aider à vivre plus sereinement aujourd’hui et demain.-->
                <div class=\"read-more\"><a href=\"#\"><i class=\"bi bi-arrow-right\"></i> Lire plus</a></div>
              </div>
            </div>
          </div>
          <div class=\"col-md-6 d-flex align-items-stretch mt-4 mt-md-0\" data-aos=\"fade-up\" data-aos-delay=\"100\">
            <div class=\"card\" style=\"background-image: url(assets/img/values-2.jpg);\">
              <div class=\"card-body\">
                <h5 class=\"card-title\"><a href=\"\">Nos visions</a></h5>
                <p class=\"card-text\">Mettre tout en œuvre pour prendre les initiatives qui nous permettront de continuer à innover.
                                     L’innovation est notre véritable challenge pour l’avenir.</p>
                                    <!-- Elle se reflète dans le regard que l’on nous porte, symbolisé par notre image et par une amélioration permanente de nos nouvelles expertises.
                                     Dans un monde en constante évolution, nous voulons prendre les devants et anticiper notre environnement commun pour mieux prévenir, accompagner et protéger tous ceux qui nous font confiance. 
                                     C’est le cœur de notre vision d’entreprise.-->
                <div class=\"read-more\"><a href=\"#\"><i class=\"bi bi-arrow-right\"></i> Lire plus</a></div>
              </div>
            </div>

         

          </div>
         
          
        </div>

      </div>
    </section><!-- End Values Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id=\"testimonials\" class=\"testimonials\">
      <div class=\"container position-relative\" data-aos=\"fade-up\">

        <div class=\"testimonials-slider swiper\" data-aos=\"fade-up\" data-aos-delay=\"100\">
          <div class=\"swiper-wrapper\">

            <div class=\"swiper-slide\">
              <div class=\"testimonial-item\">
                <img src=\" ";
        // line 334
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/testimonials/akrem4.png"), "html", null, true);
        echo "\" class=\"testimonial-img\" alt=\"\">
                <h3>Akrem Zaghdoudi</h3>
                <h4>Ceo</h4>
                <p>
                  <i class=\"bx bxs-quote-alt-left quote-icon-left\"></i>
                Akrem est le directeur général de l'agence .<br>
                c'est le salarié qui occupe le rang le plus élevé dans la direction de l'agence.
                <i class=\"bx bxs-quote-alt-right quote-icon-right\"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class=\"swiper-slide\">
              <div class=\"testimonial-item\">
                <img src=\"assets/img/testimonials/maissa.png\" class=\"testimonial-img\" alt=\"\">
                <h3>Maissa Smeti</h3>
                <h4>Designeur</h4>
                <p>
                  <i class=\"bx bxs-quote-alt-left quote-icon-left\"></i>
                 Maissa est une professionnelle qui conçoit un produit en harmonisant les critères esthétiques et fonctionnels de celui-ci.
                 <br> Elle est spécialisé et pluridisciplinaire.            
                 <i class=\"bx bxs-quote-alt-right quote-icon-right\"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class=\"swiper-slide\">
              <div class=\"testimonial-item\">
                <img src=\"";
        // line 362
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/testimonials/wadi.png"), "html", null, true);
        echo "\" class=\"testimonial-img\" alt=\"\">
                <h3>Wadii Sdouga</h3>
                <h4>Ressource Humain</h4>
                <p>
                  <i class=\"bx bxs-quote-alt-left quote-icon-left\"></i>
                  Wadii est un excellent RH qui maîtrisera l'équilibre entre communication et discrétion.
                  <br>
                   Ainsi, pour assurer de respecter à la fois ses collègues, son agence et sa profession,<br>
                   il faut entre autres : Juger de ce qu'il est bon ou moins bon de rendre public.
                  <i class=\"bx bxs-quote-alt-right quote-icon-right\"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->
            
            <div class=\"swiper-slide\">
              <div class=\"testimonial-item\">
                <img src=\"";
        // line 378
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/testimonials/chahinez.png"), "html", null, true);
        echo "\" class=\"testimonial-img\" alt=\"\">
                <h3>Chahinez Sahlaoui</h3>
                <h4>Marketing</h4>
                <p>
                  <i class=\"bx bxs-quote-alt-left quote-icon-left\"></i>
                   Chahinez est la Responsable Marketing est la garante de la promotion d'un produit ou d'un service.
                   <br> Son action commence dès la conception de la stratégie jusqu'à sa mise en place.
                   <br> Elle réponde également aux appellations de Chargée Marketing, Responsable des études marketing et Responsable des projets marketing.                  <i class=\"bx bxs-quote-alt-right quote-icon-right\"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class=\"swiper-slide\">
              <div class=\"testimonial-item\">
                <img src=\"";
        // line 392
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/testimonials/rayen.png"), "html", null, true);
        echo "\" class=\"testimonial-img\" alt=\"\">
                <h4>Fondateur</h4>
                <p>
                  <i class=\"bx bxs-quote-alt-left quote-icon-left\"></i>
                  Rayen prend l'initiative de créer l'agence.<br> 
                  Il définit son objet et son activité future, dresse le projet de statuts, et démarche les personnes qui apporteront les moyens financiers dont l'agence aura besoin pour constituer le capital initial.
                  <i class=\"bx bxs-quote-alt-right quote-icon-right\"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class=\"swiper-slide\">
              <div class=\"testimonial-item\">
                <img src=\"";
        // line 405
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/testimonials/eya.png"), "html", null, true);
        echo "\" class=\"testimonial-img\" alt=\"\">
                <h3>Eya Ben Khedher</h3>
                <h4>Comptable</h4>
                <p>
                  <i class=\"bx bxs-quote-alt-left quote-icon-left\"></i>
                    Eya vérifie l'enregistrement des données commerciales et financières afin d'établir le compte d'exploitation nécessaire à la bonne gestion de l'agence. 
                    <br>Elle exerce une fonction de responsabilité selon le type de structure dans laquelle elle travaille.               
   <i class=\"bx bxs-quote-alt-right quote-icon-right\"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class=\"swiper-pagination\"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id=\"portfolio\" class=\"portfolio\">
      <div class=\"container\">

        <div class=\"section-title\">
          <h2 data-aos=\"fade-up\">Nos Offres</h2>
          <p data-aos=\"fade-up\">.......</p>
        </div>

        <div class=\"row\" data-aos=\"fade-up\" data-aos-delay=\"100\">
          <div class=\"col-lg-12 d-flex justify-content-center\">
            <ul id=\"portfolio-flters\">
              <li data-filter=\"*\" class=\"filter-active\">All</li>
              <li data-filter=\".filter-app\">App</li>
              <li data-filter=\".filter-card\">Card</li>
              <li data-filter=\".filter-web\">Web</li>
            </ul>
          </div>
        </div>

        <div class=\"row portfolio-container\" data-aos=\"fade-up\" data-aos-delay=\"200\">

          <div class=\"col-lg-4 col-md-6 portfolio-item filter-app\">
            <img src=\"";
        // line 447
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/portfolio/portfolio-1.jpg"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\">
            <div class=\"portfolio-info\">
              <h4>App 1</h4>
              <p>App</p>
              <a href=\"assets/img/portfolio/portfolio-1.jpg\" data-gallery=\"portfolioGallery\" class=\"portfolio-lightbox preview-link\" title=\"App 1\"><i class=\"bx bx-plus\"></i></a>
              <a href=\"portfolio-details.html\" class=\"details-link\" title=\"More Details\"><i class=\"bx bx-link\"></i></a>
            </div>
          </div>

          <div class=\"col-lg-4 col-md-6 portfolio-item filter-web\">
            <img src=\"";
        // line 457
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/portfolio/portfolio-2.jpg"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\">
            <div class=\"portfolio-info\">
              <h4>Web 3</h4>
              <p>Web</p>
              <a href=\"assets/img/portfolio/portfolio-2.jpg\" data-gallery=\"portfolioGallery\" class=\"portfolio-lightbox preview-link\" title=\"Web 3\"><i class=\"bx bx-plus\"></i></a>
              <a href=\"portfolio-details.html\" class=\"details-link\" title=\"More Details\"><i class=\"bx bx-link\"></i></a>
            </div>
          </div>

          <div class=\"col-lg-4 col-md-6 portfolio-item filter-app\">
            <img src=\"";
        // line 467
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/portfolio/portfolio-3.jpg"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\">
            <div class=\"portfolio-info\">
              <h4>App 2</h4>
              <p>App</p>
              <a href=\"assets/img/portfolio/portfolio-3.jpg\" data-gallery=\"portfolioGallery\" class=\"portfolio-lightbox preview-link\" title=\"App 2\"><i class=\"bx bx-plus\"></i></a>
              <a href=\"portfolio-details.html\" class=\"details-link\" title=\"More Details\"><i class=\"bx bx-link\"></i></a>
            </div>
          </div>

          <div class=\"col-lg-4 col-md-6 portfolio-item filter-card\">
            <img src=\"";
        // line 477
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/portfolio/portfolio-4.jpg"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\">
            <div class=\"portfolio-info\">
              <h4>Card 2</h4>
              <p>Card</p>
              <a href=\"assets/img/portfolio/portfolio-4.jpg\" data-gallery=\"portfolioGallery\" class=\"portfolio-lightbox preview-link\" title=\"Card 2\"><i class=\"bx bx-plus\"></i></a>
              <a href=\"portfolio-details.html\" class=\"details-link\" title=\"More Details\"><i class=\"bx bx-link\"></i></a>
            </div>
          </div>

          <div class=\"col-lg-4 col-md-6 portfolio-item filter-web\">
            <img src=\"";
        // line 487
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/portfolio/portfolio-5.jpg"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\">
            <div class=\"portfolio-info\">
              <h4>Web 2</h4>
              <p>Web</p>
              <a href=\"assets/img/portfolio/portfolio-5.jpg\" data-gallery=\"portfolioGallery\" class=\"portfolio-lightbox preview-link\" title=\"Web 2\"><i class=\"bx bx-plus\"></i></a>
              <a href=\"portfolio-details.html\" class=\"details-link\" title=\"More Details\"><i class=\"bx bx-link\"></i></a>
            </div>
          </div>

          <div class=\"col-lg-4 col-md-6 portfolio-item filter-app\">
            <img src=\" ";
        // line 497
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/portfolio/portfolio-6.jpg"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\">
            <div class=\"portfolio-info\">
              <h4>App 3</h4>
              <p>App</p>
              <a href=\"assets/img/portfolio/portfolio-6.jpg\" data-gallery=\"portfolioGallery\" class=\"portfolio-lightbox preview-link\" title=\"App 3\"><i class=\"bx bx-plus\"></i></a>
              <a href=\"portfolio-details.html\" class=\"details-link\" title=\"More Details\"><i class=\"bx bx-link\"></i></a>
            </div>
          </div>

          <div class=\"col-lg-4 col-md-6 portfolio-item filter-card\">
            <img src=\"";
        // line 507
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/portfolio/portfolio-7.jpg"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\">
            <div class=\"portfolio-info\">
              <h4>Card 1</h4>
              <p>Card</p>
              <a href=\"assets/img/portfolio/portfolio-7.jpg\" data-gallery=\"portfolioGallery\" class=\"portfolio-lightbox preview-link\" title=\"Card 1\"><i class=\"bx bx-plus\"></i></a>
              <a href=\"portfolio-details.html\" class=\"details-link\" title=\"More Details\"><i class=\"bx bx-link\"></i></a>
            </div>
          </div>

          <div class=\"col-lg-4 col-md-6 portfolio-item filter-card\">
            <img src=\"";
        // line 517
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/portfolio/portfolio-8.jpg"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\">
            <div class=\"portfolio-info\">
              <h4>Card 3</h4>
              <p>Card</p>
              <a href=\"assets/img/portfolio/portfolio-8.jpg\" data-gallery=\"portfolioGallery\" class=\"portfolio-lightbox preview-link\" title=\"Card 3\"><i class=\"bx bx-plus\"></i></a>
              <a href=\"portfolio-details.html\" class=\"details-link\" title=\"More Details\"><i class=\"bx bx-link\"></i></a>
            </div>
          </div>

          <div class=\"col-lg-4 col-md-6 portfolio-item filter-web\">
            <img src=\"";
        // line 527
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/portfolio/portfolio-9.jpg"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\">
            <div class=\"portfolio-info\">
              <h4>Web 3</h4>
              <p>Web</p>
              <a href=\"assets/img/portfolio/portfolio-9.jpg\" data-gallery=\"portfolioGallery\" class=\"portfolio-lightbox preview-link\" title=\"Web 3\"><i class=\"bx bx-plus\"></i></a>
              <a href=\"portfolio-details.html\" class=\"details-link\" title=\"More Details\"><i class=\"bx bx-link\"></i></a>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Team Section ======= -->
    <section id=\"team\" class=\"team section-bg\">
      <div class=\"container\">

        <div class=\"section-title\">
          <h2 data-aos=\"fade-up\">Coding Squad</h2>
          <p data-aos=\"fade-up\">Nous sommes une équipe de 6 personnes qui partagent des différents responsabilités .</p>
        </div>

        <div class=\"row\">

          <div class=\"col-lg-3 col-md-6 d-flex align-items-stretch\" data-aos=\"fade-up\">
            <div class=\"member\">
              <div class=\"member-img\">
                <img src=\"";
        // line 555
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/testimonials/Akrem4.png"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\">
                <div class=\"social\">
                  <a href=\"\"><i class=\"bi bi-twitter\"></i></a>
                  <a href=\"\"><i class=\"bi bi-facebook\"></i></a>
                  <a href=\"\"><i class=\"bi bi-instagram\"></i></a>
                  <a href=\"\"><i class=\"bi bi-linkedin\"></i></a>
                </div>
              </div>
              <div class=\"member-info\">
                <h4>Akrem Zaghdoudi</h4>
                <span>Ceo</span>
              </div>
            </div>
          </div>

          <div class=\"col-lg-3 col-md-6 d-flex align-items-stretch\" data-aos=\"fade-up\" data-aos-delay=\"100\">
            <div class=\"member\">
              <div class=\"member-img\">
                <img src=\"";
        // line 573
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/testimonials/Maissa.png"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\">
                <div class=\"social\">
                  <a href=\"\"><i class=\"bi bi-twitter\"></i></a>
                  <a href=\"\"><i class=\"bi bi-facebook\"></i></a>
                  <a href=\"\"><i class=\"bi bi-instagram\"></i></a>
                  <a href=\"\"><i class=\"bi bi-linkedin\"></i></a>
                </div>
              </div>
              <div class=\"member-info\">
                <h4>Maissa Smeti</h4>
                <span>Designeur</span>
              </div>
            </div>
          </div>

          <div class=\"col-lg-3 col-md-6 d-flex align-items-stretch\" data-aos=\"fade-up\" data-aos-delay=\"200\">
            <div class=\"member\">
              <div class=\"member-img\">
                <img src=\"";
        // line 591
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/testimonials/Wadi.png"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\">
                <div class=\"social\">
                  <a href=\"\"><i class=\"bi bi-twitter\"></i></a>
                  <a href=\"\"><i class=\"bi bi-facebook\"></i></a>
                  <a href=\"\"><i class=\"bi bi-instagram\"></i></a>
                  <a href=\"\"><i class=\"bi bi-linkedin\"></i></a>
                </div>
              </div>
              <div class=\"member-info\">
                <h4>Wadii Sdouga</h4>
                <span>Ressource Humain</span>
              </div>
            </div>
          </div>

          <div class=\"col-lg-3 col-md-6 d-flex align-items-stretch\" data-aos=\"fade-up\" data-aos-delay=\"300\">
            <div class=\"member\">
              <div class=\"member-img\">
                <img src=\"";
        // line 609
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/testimonials/chahinez.png"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\">
                <div class=\"social\">
                  <a href=\"\"><i class=\"bi bi-twitter\"></i></a>
                  <a href=\"\"><i class=\"bi bi-facebook\"></i></a>
                  <a href=\"\"><i class=\"bi bi-instagram\"></i></a>
                  <a href=\"\"><i class=\"bi bi-linkedin\"></i></a>
                </div>
              </div>
              <div class=\"member-info\">
                <h4>Chahinez Sahlaoui</h4>
                <span>Marketing</span>
              </div>
            </div>
          </div>

 <div class=\"col-lg-3 col-md-6 d-flex align-items-stretch\" data-aos=\"fade-up\" data-aos-delay=\"200\">
            <div class=\"member\">
              <div class=\"member-img\">
                <img src=\"";
        // line 627
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/testimonials/rayen.png"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\">
                <div class=\"social\">
                  <a href=\"\"><i class=\"bi bi-twitter\"></i></a>
                  <a href=\"\"><i class=\"bi bi-facebook\"></i></a>
                  <a href=\"\"><i class=\"bi bi-instagram\"></i></a>
                  <a href=\"\"><i class=\"bi bi-linkedin\"></i></a>
                </div>
              </div>
              <div class=\"member-info\">
                <h4>Rayen Ben Othmen</h4>
                <span>Foundateur</span>
              </div>
            </div>
          </div>

 <div class=\"col-lg-3 col-md-6 d-flex align-items-stretch\" data-aos=\"fade-up\" data-aos-delay=\"200\">
            <div class=\"member\">
              <div class=\"member-img\">
                <img src=\"";
        // line 645
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/testimonials/eya.png"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\">
                <div class=\"social\">
                  <a href=\"\"><i class=\"bi bi-twitter\"></i></a>
                  <a href=\"\"><i class=\"bi bi-facebook\"></i></a>
                  <a href=\"\"><i class=\"bi bi-instagram\"></i></a>
                  <a href=\"\"><i class=\"bi bi-linkedin\"></i></a>
                </div>
              </div>
              <div class=\"member-info\">
                <h4>Eya Ben Khedher</h4>
                <span>Comptable</span>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Team Section -->

    <!-- ======= Pricing Section ======= -->
    <section id=\"pricing\" class=\"pricing\">
      <div class=\"container\">

        <div class=\"section-title\">
          <h2 data-aos=\"fade-up\">Nos Agences</h2>
          <p data-aos=\"fade-up\">chwaya wassef.........</p>
        </div>

        <div class=\"row\">

          <div class=\"col-lg-3 col-md-6\" data-aos=\"fade-up\">
            <div class=\"box\">
              <h3>Free</h3>
              <h4><sup>\$</sup>0<span> / month</span></h4>
              <ul>
                <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li class=\"na\">Pharetra massa</li>
                <li class=\"na\">Massa ultricies mi</li>
              </ul>
              <div class=\"btn-wrap\">
                <a href=\"#\" class=\"btn-buy\">Buy Now</a>
              </div>
            </div>
          </div>

          <div class=\"col-lg-3 col-md-6 mt-4 mt-md-0\" data-aos=\"fade-up\" data-aos-delay=\"100\">
            <div class=\"box featured\">
              <h3>Business</h3>
              <h4><sup>\$</sup>19<span> / month</span></h4>
              <ul>
                <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li>Pharetra massa</li>
                <li class=\"na\">Massa ultricies mi</li>
              </ul>
              <div class=\"btn-wrap\">
                <a href=\"#\" class=\"btn-buy\">Buy Now</a>
              </div>
            </div>
          </div>

          <div class=\"col-lg-3 col-md-6 mt-4 mt-lg-0\" data-aos=\"fade-up\" data-aos-delay=\"200\">
            <div class=\"box\">
              <h3>Developer</h3>
              <h4><sup>\$</sup>29<span> / month</span></h4>
              <ul>
                <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li>Pharetra massa</li>
                <li>Massa ultricies mi</li>
              </ul>
              <div class=\"btn-wrap\">
                <a href=\"#\" class=\"btn-buy\">Buy Now</a>
              </div>
            </div>
          </div>

          <div class=\"col-lg-3 col-md-6 mt-4 mt-lg-0\" data-aos=\"fade-up\" data-aos-delay=\"300\">
            <div class=\"box\">
              <span class=\"advanced\">Advanced</span>
              <h3>Ultimate</h3>
              <h4><sup>\$</sup>49<span> / month</span></h4>
              <ul>
                <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li>Pharetra massa</li>
                <li>Massa ultricies mi</li>
              </ul>
              <div class=\"btn-wrap\">
                <a href=\"#\" class=\"btn-buy\">Buy Now</a>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Pricing Section -->

    <!-- ======= F.A.Q Section ======= -->
    <section id=\"faq\" class=\"faq section-bg\">
      <div class=\"container\">

        <div class=\"section-title\">
          <h2 data-aos=\"fade-up\">Vos Questions</h2>
          <p data-aos=\"fade-up\">Vous pouvez posser vos questions ici .</p>
        </div>

        <div class=\"faq-list\">
          <ul>
            <li data-aos=\"fade-up\">
              <i class=\"bx bx-help-circle icon-help\"></i>
               <a data-bs-toggle=\"collapse\" class=\"collapse\" data-bs-target=\"#faq-list-1\"> Comment choisir la meilleure assurance pour ma voiture ?
                    <i class=\"bx bx-chevron-down icon-show\"></i><i class=\"bx bx-chevron-up icon-close\"></i></a>
              <div id=\"faq-list-1\" class=\"collapse show\" data-bs-parent=\".faq-list\">
                <p>
                 Pour bien choisir l'assurance de votre voiture, il faut prendre le temps de bien étudier le contrat d'assurance auquel vous souhaitez souscrire, se faire conseiller par un agent d'assurance et aussi demander l'avis de différents profils de conducteur dans votre entourage !                </p>
              </div>
            </li>

            <li data-aos=\"fade-up\" data-aos-delay=\"100\">
              <i class=\"bx bx-help-circle icon-help\"></i>
               <a data-bs-toggle=\"collapse\" data-bs-target=\"#faq-list-2\" class=\"collapsed\"> Comment faire pour changer d'assurance voiture ?
                 <i class=\"bx bx-chevron-down icon-show\"></i><i class=\"bx bx-chevron-up icon-close\"></i></a>
              <div id=\"faq-list-2\" class=\"collapse\" data-bs-parent=\".faq-list\">
                <p>
                 Pour changer d'assureur pour votre voiture, la première chose à faire et de vous référer à votre contrat qui énonce les conditions de résiliation.<br>
                 Une fois les conditions et les procédures de résiliation sont correctement appliquées, il est de votre droit de choisir une nouvelle compagnie d'assurance ainsi que le contrat avec les garanties qui vous conviennent le plus.                </p>
              </div>
            </li>

            <li data-aos=\"fade-up\" data-aos-delay=\"200\">
              <i class=\"bx bx-help-circle icon-help\"></i> 
              <a data-bs-toggle=\"collapse\" data-bs-target=\"#faq-list-3\" class=\"collapsed\"> Quel est le prix moyen d'une assurance auto en Tunisie ?
                 <i class=\"bx bx-chevron-down icon-show\"></i><i class=\"bx bx-chevron-up icon-close\"></i></a>
              <div id=\"faq-list-3\" class=\"collapse\" data-bs-parent=\".faq-list\">
                <p>
                    Il est difficile de se prononcer sur un prix de l'assurance voiture.<br>
                    En effet, les garanties et les différentes offres sur le marché sont diverses et variées.<br>
                    Toutefois, au delà de l'enjeu du prix d'une assurance auto, il est primordial de bien choisir les garanties qui composent votre contrat d'assurance, car le jour d'un sinistre quel qu'il soit, être convenablement couvert et pris en charge n'a pas de prix !!                </p>
              </div>
            </li>

            <li data-aos=\"fade-up\" data-aos-delay=\"300\">
              <i class=\"bx bx-help-circle icon-help\"></i> 
              <a data-bs-toggle=\"collapse\" data-bs-target=\"#faq-list-4\" class=\"collapsed\"> L'assurance automobile est-elle obligatoire ?
             <i class=\"bx bx-chevron-down icon-show\"></i><i class=\"bx bx-chevron-up icon-close\"></i></a>
              <div id=\"faq-list-4\" class=\"collapse\" data-bs-parent=\".faq-list\">
                <p>
                L’assurance automobile est une assurance obligatoire pour la «responsabilité civile». <br>
                Cette garantie couvre les dommages causés au tiers par le conducteur du véhicule impliqué dans un accident de la circulation.
                <br> Les garanties dommages (bris de glace, vol, incendie…) sont optionnelles. Elles couvrent les dommages subis par le véhicule assuré quel que soit le responsable.
                </p>
              </div>
            </li>

            <li data-aos=\"fade-up\" data-aos-delay=\"400\">
              <i class=\"bx bx-help-circle icon-help\"></i> 
              <a data-bs-toggle=\"collapse\" data-bs-target=\"#faq-list-5\" class=\"collapsed\"> Comment puis-je résilier mon contrat d’assurance ?
              <i class=\"bx bx-chevron-down icon-show\"></i><i class=\"bx bx-chevron-up icon-close\"></i></a>
              <div id=\"faq-list-5\" class=\"collapse\" data-bs-parent=\".faq-list\">
                <p>
                La durée de l’assurance est fixée au contrat.<br>
                Si cette durée excède une année, et sous réserve des dispositions relatives aux assurances sur la vie, l’assuré a le droit de résilier le contrat tous les ans à l’échéance du contrat en prévenant l’assureur au moins deux mois avant la date d’échéance dans l’une des formes de résiliation indiquée au dernier alinéa du présent article.
                <br> Ce droit de résiliation doit être mentionné dans chaque contrat.<br>
                A condition qu’il soit fait mention au contrat, l’assureur dispose également, dans les mêmes conditions de délai et de forme, de ce droit de résiliation.
                </p>
              </div>
            </li>

          </ul>
        </div>

      </div>
    </section><!-- End F.A.Q Section -->

    <!-- ======= Contact Section ======= -->
    <section id=\"contact\" class=\"contact\">
      <div class=\"container\">

        <div class=\"section-title\">
          <h2 data-aos=\"fade-up\">Contact</h2>
          <p data-aos=\"fade-up\">Vous pouvez nous contactez directement.</p>
        </div>

        <div class=\"row justify-content-center\">

          <div class=\"col-xl-3 col-lg-4 mt-4\" data-aos=\"fade-up\">
            <div class=\"info-box\">
              <i class=\"bx bx-map\"></i>
              <h3>Notre Address</h3>
              <p>Aveune Habib Bourguiba 2083 Cité El GHazala - Ariana</p>
            </div>
          </div>

          <div class=\"col-xl-3 col-lg-4 mt-4\" data-aos=\"fade-up\" data-aos-delay=\"100\">
            <div class=\"info-box\">
              <i class=\"bx bx-envelope\"></i>
              <h3>Notre Email</h3>
              <p>4rouesassurances@gmail.com</p>
            </div>
          </div>
          <div class=\"col-xl-3 col-lg-4 mt-4\" data-aos=\"fade-up\" data-aos-delay=\"200\">
            <div class=\"info-box\">
              <i class=\"bx bx-phone-call\"></i>
              <h3>Contactez nous</h3>
              <p>+216 70 300 300</p>
            </div>
          </div>
        </div>

        <div class=\"row justify-content-center\" data-aos=\"fade-up\" data-aos-delay=\"300\">
          <div class=\"col-xl-9 col-lg-12 mt-4\">
            <form action=\"forms/contact.php\" method=\"post\" role=\"form\" class=\"php-email-form\">
              <div class=\"row\">
                <div class=\"col-md-6 form-group\">
                  <input type=\"text\" name=\"name\" class=\"form-control\" id=\"name\" placeholder=\"Nom\" >
                </div>
                <div class=\"col-md-6 form-group mt-3 mt-md-0\">
                  <input type=\"email\" class=\"form-control\" name=\"email\" id=\"email\" placeholder=\"Email\" >
                </div>
              </div>
              <div class=\"form-group mt-3\">
                <input type=\"text\" class=\"form-control\" name=\"subject\" id=\"subject\" placeholder=\"Sujet\" >
              </div>
              <div class=\"form-group mt-3\">
                <textarea class=\"form-control\" name=\"message\" rows=\"5\" placeholder=\"Message\" ></textarea>
              </div>
              <div class=\"my-3\">
                <div class=\"loading\">Loading</div>
                <div class=\"error-message\"></div>
                <div class=\"sent-message\">Ton message sera envoyé. Merci!</div>
              </div>
              <div class=\"text-center\"><button type=\"submit\">Envoyer Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main>
  ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 898
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 899
        echo "  
  ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 906
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        // line 907
        echo "  <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/aos/aos.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 908
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 909
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/glightbox/js/glightbox.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 910
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/isotope-layout/isotope.pkgd.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 911
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/swiper/swiper-bundle.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 912
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/php-email-form/validate.js"), "html", null, true);
        echo "\"></script>

  <!-- Template Main JS File -->
  <script src=\"assets/js/main.js\"></script>
  ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1299 => 912,  1295 => 911,  1291 => 910,  1287 => 909,  1283 => 908,  1278 => 907,  1268 => 906,  1257 => 899,  1247 => 898,  987 => 645,  966 => 627,  945 => 609,  924 => 591,  903 => 573,  882 => 555,  851 => 527,  838 => 517,  825 => 507,  812 => 497,  799 => 487,  786 => 477,  773 => 467,  760 => 457,  747 => 447,  702 => 405,  686 => 392,  669 => 378,  650 => 362,  619 => 334,  503 => 221,  499 => 220,  495 => 219,  491 => 218,  487 => 217,  483 => 216,  479 => 215,  475 => 214,  366 => 107,  356 => 106,  322 => 78,  316 => 74,  306 => 73,  287 => 10,  202 => 917,  200 => 906,  193 => 901,  191 => 898,  186 => 895,  184 => 106,  178 => 102,  176 => 73,  146 => 46,  142 => 45,  138 => 44,  129 => 38,  124 => 36,  120 => 35,  116 => 34,  112 => 33,  108 => 32,  104 => 31,  97 => 27,  91 => 24,  87 => 23,  83 => 22,  79 => 21,  75 => 20,  71 => 19,  61 => 11,  59 => 10,  48 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
  <meta charset=\"utf-8\">
  <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">

  <link href=\"assets/img/testimonials/logo.png\" rel=\"icon\">
  <link href=\"assets/img/testimonials/logo.png\" rel=\"apple-touch-icon\">
  {% block titre %}<title>Assurances 4Roues</title>{% endblock %}
  <meta content=\"\" name=\"description\">
  <meta content=\"\" name=\"keywords\">

  <!-- Google Fonts -->
  <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i\" rel=\"stylesheet\">

  <!-- Vendor CSS Files -->
  
  <link href=\"{{asset ('assets/vendor/aos/aos.css')}}\" rel=\"stylesheet\">
  <link href=\"{{asset ('assets/vendor/bootstrap/css/bootstrap.min.css')}}\" rel=\"stylesheet\">
  <link href=\"{{asset ('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}\" rel=\"stylesheet\">
  <link href=\"{{asset ('assets/vendor/boxicons/css/boxicons.min.css')}}\" rel=\"stylesheet\">
  <link href=\"{{asset ('assets/vendor/glightbox/css/glightbox.min.css')}}\" rel=\"stylesheet\">
  <link href=\"{{asset ('assets/vendor/swiper/swiper-bundle.min.css')}}\" rel=\"stylesheet\">

  <!-- Template Main CSS File -->
  <link href=\"{{asset('assets/css/style.css')}}\" rel=\"stylesheet\">
  

  
 <link href=\"{{ asset ('assets2/vendor/bootstrap/css/bootstrap.min.css') }}\" rel=\"stylesheet\">
\t\t\t<link href=\"{{ asset ('assets2/vendor/bootstrap-icons/bootstrap-icons.css') }}\" rel=\"stylesheet\">
\t\t\t<link href=\"{{ asset ('assets2/vendor/boxicons/css/boxicons.min.css') }}\" rel=\"stylesheet\">
\t\t\t<link href=\"{{ asset ('assets2/vendor/quill/quill.snow.css') }}\" rel=\"stylesheet\">
\t\t\t<link href=\"{{ asset ('assets2/vendor/quill/quill.bubble.css') }}\" rel=\"stylesheet\">
\t\t\t<link href=\"{{ asset ('assets2/vendor/remixicon/remixicon.css') }}\" rel=\"stylesheet\">
\t\t\t<link
\t\t\thref=\"{{ asset ('assets2/vendor/simple-datatables/style.css') }}\" rel=\"stylesheet\">

  <!-- Template Main CSS File -->
 

   <!-- bouton CSS  -->
 <link href=\"{{ asset ('assets2/css/btn.css') }}\" rel=\"stylesheet\">
 <link rel=\"stylesheet\" href=\"{{ asset('assets/css/fontawesome.min.css') }}\">
<link rel=\"stylesheet\" href=\"{{ asset('assets/css/solid.min.css') }}\">

  <!-- =======================================================
  * Template Name: Flexor - v4.10.0
  * Template URL: https://bootstrapmade.com/flexor-free-multipurpose-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <section id=\"topbar\" class=\"d-flex align-items-center\">
    <div class=\"container d-flex justify-content-center justify-content-md-between\">
      <div class=\"contact-info d-flex align-items-center\">
        <i class=\"bi bi-envelope d-flex align-items-center\"><a href=\"mailto:contact@example.com\">4rouesassurances@gmail.com</a></i>
        <i class=\"bi bi-phone d-flex align-items-center ms-4\"><span>+216 70 300 300</span></i>
      </div>

      <div class=\"cta d-none d-md-flex align-items-center\">
        <a href=\"#about\" class=\"scrollto\">Se Connecter</a>
      </div>
    </div>
  </section>

  <!-- ======= Header ======= -->
  {% block header %}
  <header id=\"header\" class=\"d-flex align-items-center\">
    <div class=\"container d-flex align-items-center justify-content-between\">

      <div class=\"logo\">
      <img src=\"{{ asset ('assets/img/logo_png.png') }}\" alt=\"\" class=\"img-fluid\">
       <div class=\"title\">
        <h1 ><a href=\"index.html\">4Roues Assurances </a></h1>
        </div>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href=\"index.html\"><img src=\"assets/img/logo.png\" alt=\"\" class=\"img-fluid\"></a>-->
      </div>

      <nav id=\"navbar\" class=\"navbar\">
        <ul>
          <li><a class=\"nav-link scrollto active\" href=\"#hero\">Acceuil</a></li>
          <li><a class=\"nav-link scrollto\" href=\"#about\">A propos</a></li>
          <li><a class=\"nav-link scrollto\" href=\"#services\">Nos conseils</a></li>
          <li><a class=\"nav-link scrollto \" href=\"#portfolio\">Nos offres</a></li>
          <li><a class=\"nav-link scrollto\" href=\"#team\">Notre équipe</a></li>
          <li><a class=\"nav-link scrollto\" href=\"/offre/front\">Nos offres</a></li>
          <li><a class=\"nav-link scrollto\" href=\"#contact\">Contactez nous</a></li>
        </ul>
        <i class=\"bi bi-list mobile-nav-toggle\"></i>
      </nav><!-- .navbar -->

    </div>
  </header> 
  {% endblock %}
  <!-- End Header -->
  

  <!-- ======= Hero Section ======= -->
  {% block contenu %}
  <section id=\"hero\" class=\"d-flex flex-column justify-content-center align-items-center\">
    <div class=\"container\" data-aos=\"fade-in\">
      <h1>Bienvenue chez 4Roues Assurances </h1>
      <h2>Nous sommes Coding Squad</h2>
      <div class=\"d-flex align-items-center\">
        <i class=\"bx bxs-right-arrow-alt get-started-icon\"></i>
        <a href=\"#about\" class=\"btn-get-started scrollto\">S'inscrire</a>
      </div>
    </div>
  </section><!-- End Hero -->

  <main id=\"main\">

     <!-- ======= Why Us Section ======= -->
    <section id=\"why-us\" class=\"why-us\">
      <div class=\"container\">

        <div class=\"row\">
          <div class=\"col-xl-4 col-lg-5\" data-aos=\"fade-up\">
            <div class=\"content\">
              <h3>Pourquoi choisir 4Roues Assurances ?</h3>
              <p>
                Notre philosophie, nos valeurs et notre expertise dans le domaine de l'assurance des véhicules vous offrent notre compréhension en même temps que notre capacité à imaginer les meilleures façons pour assurer votre voiture, payer votre constat en ligne et consulter vos statistiques.
              </p>
              <div class=\"text-center\">
                <a href=\"#\" class=\"more-btn\">Lire Plus <i class=\"bx bx-chevron-right\"></i></a>
              </div>
            </div>
          </div>
          <div class=\"col-xl-8 col-lg-7 d-flex\">
            <div class=\"icon-boxes d-flex flex-column justify-content-center\">
              <div class=\"row\">
                <div class=\"col-xl-4 d-flex align-items-stretch\" data-aos=\"fade-up\" data-aos-delay=\"100\">
                  <div class=\"icon-box mt-4 mt-xl-0\">
                    <i class=\"bx bx-receipt\"></i>
                    <h4>Votre 1èr site d'assurance qui vous permet de signer votre constat en ligne</h4>
                    
                  </div>
                </div>
                <div class=\"col-xl-4 d-flex align-items-stretch\" data-aos=\"fade-up\" data-aos-delay=\"200\">
                  <div class=\"icon-box mt-4 mt-xl-0\">
                    <i class=\"bx bx-gift\"></i>
                    <h4>Des tarifs au juste prix</h4>
                    <p>Profitez des meilleures offres aux meilleurs prix</p>
                  </div>
                </div>
                <div class=\"col-xl-4 d-flex align-items-stretch\" data-aos=\"fade-up\" data-aos-delay=\"300\">
                  <div class=\"icon-box mt-4 mt-xl-0\">
                    <i class=\"bi bi-calendar4-week\"></i>
                    <h4>Une disponibilité jamais démentie</h4>
                    <p>Notre site web est <br> disponible 24/7</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Why Us Section -->

     <!-- ======= About Section ======= -->
    <section id=\"about\" class=\"about section-bg\">
      <div class=\"container\">

        <div class=\"row\">
          <div class=\"col-xl-5 col-lg-6 video-box d-flex justify-content-center align-items-stretch position-relative\" data-aos=\"fade-right\">
            <a href=\"assets/img/vedio/vedio.mp4\" class=\"glightbox play-btn mb-4\"></a>
          </div>

          <div class=\"col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5\">
            
            <h3 data-aos=\"fade-up\">A propos de nous  </h3>
            <p data-aos=\"fade-up\">Ingénieurs diplômés d'Ecole Superieur Privée d'Ingénierie et de Technologies, spécialistes reconnus dans leur domaine depuis des années, Coding Squad regroupe de multiples talents en interne,  pour vous apporter les meilleurs services</p>

            <div class=\"icon-box\" data-aos=\"fade-up\">
              <div class=\"icon\"><i class=\"bx bx-cube-alt\"></i></div>
              <h4 class=\"title\"><a href=\"\">Equipe</a></h4>
              <p class=\"description\"> Nous sommes une équipe de 6 personnes et nous nous efforçons de créer les meilleurs services pour aider nos clients à assurer
leurs véhicules et payer leurs constats en ligne. </p>
            </div>

            <div class=\"icon-box\" data-aos=\"fade-up\" data-aos-delay=\"100\">
              <div class=\"icon\"><i class=\"bx bx-cube-alt\"></i></div>
              <h4 class=\"title\"><a href=\"\">Objectif</a></h4>
              <p class=\"description\"> Nous avons toujours cherché à faire les choses un peu différemment par rapport aux autres assurances. Depuis les premiers jours, nous avons
concentré sur la création de l'une des applications les plus uniques et les plus enrichissantes de Tunisie. </p>
            </div>

            <div class=\"icon-box\" data-aos=\"fade-up\" data-aos-delay=\"200\">
              <div class=\"icon\"><i class=\"bx bx-cube-alt\"></i></div>
              <h4 class=\"title\"><a href=\"\">Slogan</a></h4>
              <p class=\"description\">La plupart des entreprises mettent leurs valeurs dans un manifeste. Nous les mettons en action. Voici à quoi ça ressemble de notre premier jour à notre dernier jour.</p>
            </div>

          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Clients Section ======= -->
    <section id=\"clients\" class=\"clients\">
      <div class=\"container\" data-aos=\"fade-up\">

        <div class=\"clients-slider swiper\">
          <div class=\"swiper-wrapper align-items-center\">
            <div class=\"swiper-slide\"><img src=\"{{asset ('assets/img/clients/client-1.png')}}\" class=\"img-fluid\" alt=\"\"></div>
            <div class=\"swiper-slide\"><img src=\"{{asset ('assets/img/clients/client-2.png')}}\" class=\"img-fluid\" alt=\"\"></div>
            <div class=\"swiper-slide\"><img src=\"{{asset ('assets/img/clients/client-3.png')}}\" class=\"img-fluid\" alt=\"\"></div>
            <div class=\"swiper-slide\"><img src=\"{{asset ('assets/img/clients/client-4.png')}}\" class=\"img-fluid\" alt=\"\"></div>
            <div class=\"swiper-slide\"><img src=\"{{asset ('assets/img/clients/client-5.png')}}\" class=\"img-fluid\" alt=\"\"></div>
            <div class=\"swiper-slide\"><img src=\"{{asset ('assets/img/clients/client-6.png')}}\" class=\"img-fluid\" alt=\"\"></div>
            <div class=\"swiper-slide\"><img src=\"{{asset ('assets/img/clients/client-7.png')}} \" class=\"img-fluid\" alt=\"\"></div>
            <div class=\"swiper-slide\"><img src=\"{{asset ('assets/img/clients/client-8.png')}}\" class=\"img-fluid\" alt=\"\"></div>
          </div>
          <div class=\"swiper-pagination\"></div>
        </div>

      </div>
    </section><!-- End Clients Section -->

    <!-- ======= Services Section ======= -->
    <section id=\"services\" class=\"services section-bg\">
      <div class=\"container\">

        <div class=\"section-title\" data-aos=\"fade-up\">
          <h2>Nos Conseils</h2>
          <p> Les conseils en assurance du moment </p>
        </div>

        <div class=\"row\">
          <div class=\"col-lg-4 col-md-6\" data-aos=\"fade-up\">
            <div class=\"icon-box\">
              <div class=\"icon\"><i class=\"bi bi-briefcase\"></i></div>
              <h4 class=\"title\"><a href=\"\">Assurance auto et bonus-malus : comment ça fonctionne ? </a></h4>
              <p class=\"description\">Le prix de votre assurance auto dépend d’un système de bonus-malus. Si le fonctionnement de ce dispositif vous semble encore obscur.</p>
            </div>
          </div>
          <div class=\"col-lg-4 col-md-6\" data-aos=\"fade-up\" data-aos-delay=\"100\">
            <div class=\"icon-box\">
              <div class=\"icon\"><i class=\"bi bi-card-checklist\"></i></div>
              <h4 class=\"title\"><a href=\"\">Dolor Sitema</a></h4>
              <p class=\"description\">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
            </div>
          </div>
          <div class=\"col-lg-4 col-md-6\" data-aos=\"fade-up\" data-aos-delay=\"200\">
            <div class=\"icon-box\">
              <div class=\"icon\"><i class=\"bi bi-bar-chart\"></i></div>
              <h4 class=\"title\"><a href=\"\">Sed ut perspiciatis</a></h4>
              <p class=\"description\">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
            </div>
          </div>
          <div class=\"col-lg-4 col-md-6\" data-aos=\"fade-up\" data-aos-delay=\"300\">
            <div class=\"icon-box\">
              <div class=\"icon\"><i class=\"bi bi-binoculars\"></i></div>
              <h4 class=\"title\"><a href=\"\">Magni Dolores</a></h4>
              <p class=\"description\">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
            </div>
          </div>
          <div class=\"col-lg-4 col-md-6\" data-aos=\"fade-up\" data-aos-delay=\"400\">
            <div class=\"icon-box\">
              <div class=\"icon\"><i class=\"bi bi-brightness-high\"></i></div>
              <h4 class=\"title\"><a href=\"\">Nemo Enim</a></h4>
              <p class=\"description\">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
            </div>
          </div>
          <div class=\"col-lg-4 col-md-6\" data-aos=\"fade-up\" data-aos-delay=\"500\">
            <div class=\"icon-box\">
              <div class=\"icon\"><i class=\"bi bi-calendar4-week\"></i></div>
              <h4 class=\"title\"><a href=\"\">Eiusmod Tempor</a></h4>
              <p class=\"description\">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi</p>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Values Section ======= -->
    <section id=\"values\" class=\"values\">
      <div class=\"container\">

        <div class=\"row\">
          <div class=\"col-md-6 d-flex align-items-stretch\" data-aos=\"fade-up\">
            <div class=\"card\" style=\"background-image: url(assets/img/values-1.jpg);\">
              <div class=\"card-body\">
                <h5 class=\"card-title\"><a href=\"\">Nos Missions</a></h5>
                <p class=\"card-text\">Être un partenaire de choix et vous proposer des solutions adaptées à votre réalité.Nous savons que chacun de vous a des besoins uniques.</p>
<!-- Notre mission est donc de vous protéger tout au long de votre parcours de vie en orientant notre fonctionnement autour de ce qui est nécessaire à votre tranquillité.
Notre devoir est de vous offrir un accompagnement expert garantissant à chacun d’entre vous une protection adaptée. Pour cela, nous vous apportons nos conseils et notre expertise en matière de prévention pour vous aider à vivre plus sereinement aujourd’hui et demain.-->
                <div class=\"read-more\"><a href=\"#\"><i class=\"bi bi-arrow-right\"></i> Lire plus</a></div>
              </div>
            </div>
          </div>
          <div class=\"col-md-6 d-flex align-items-stretch mt-4 mt-md-0\" data-aos=\"fade-up\" data-aos-delay=\"100\">
            <div class=\"card\" style=\"background-image: url(assets/img/values-2.jpg);\">
              <div class=\"card-body\">
                <h5 class=\"card-title\"><a href=\"\">Nos visions</a></h5>
                <p class=\"card-text\">Mettre tout en œuvre pour prendre les initiatives qui nous permettront de continuer à innover.
                                     L’innovation est notre véritable challenge pour l’avenir.</p>
                                    <!-- Elle se reflète dans le regard que l’on nous porte, symbolisé par notre image et par une amélioration permanente de nos nouvelles expertises.
                                     Dans un monde en constante évolution, nous voulons prendre les devants et anticiper notre environnement commun pour mieux prévenir, accompagner et protéger tous ceux qui nous font confiance. 
                                     C’est le cœur de notre vision d’entreprise.-->
                <div class=\"read-more\"><a href=\"#\"><i class=\"bi bi-arrow-right\"></i> Lire plus</a></div>
              </div>
            </div>

         

          </div>
         
          
        </div>

      </div>
    </section><!-- End Values Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id=\"testimonials\" class=\"testimonials\">
      <div class=\"container position-relative\" data-aos=\"fade-up\">

        <div class=\"testimonials-slider swiper\" data-aos=\"fade-up\" data-aos-delay=\"100\">
          <div class=\"swiper-wrapper\">

            <div class=\"swiper-slide\">
              <div class=\"testimonial-item\">
                <img src=\" {{asset ('assets/img/testimonials/akrem4.png')}}\" class=\"testimonial-img\" alt=\"\">
                <h3>Akrem Zaghdoudi</h3>
                <h4>Ceo</h4>
                <p>
                  <i class=\"bx bxs-quote-alt-left quote-icon-left\"></i>
                Akrem est le directeur général de l'agence .<br>
                c'est le salarié qui occupe le rang le plus élevé dans la direction de l'agence.
                <i class=\"bx bxs-quote-alt-right quote-icon-right\"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class=\"swiper-slide\">
              <div class=\"testimonial-item\">
                <img src=\"assets/img/testimonials/maissa.png\" class=\"testimonial-img\" alt=\"\">
                <h3>Maissa Smeti</h3>
                <h4>Designeur</h4>
                <p>
                  <i class=\"bx bxs-quote-alt-left quote-icon-left\"></i>
                 Maissa est une professionnelle qui conçoit un produit en harmonisant les critères esthétiques et fonctionnels de celui-ci.
                 <br> Elle est spécialisé et pluridisciplinaire.            
                 <i class=\"bx bxs-quote-alt-right quote-icon-right\"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class=\"swiper-slide\">
              <div class=\"testimonial-item\">
                <img src=\"{{asset ('assets/img/testimonials/wadi.png')}}\" class=\"testimonial-img\" alt=\"\">
                <h3>Wadii Sdouga</h3>
                <h4>Ressource Humain</h4>
                <p>
                  <i class=\"bx bxs-quote-alt-left quote-icon-left\"></i>
                  Wadii est un excellent RH qui maîtrisera l'équilibre entre communication et discrétion.
                  <br>
                   Ainsi, pour assurer de respecter à la fois ses collègues, son agence et sa profession,<br>
                   il faut entre autres : Juger de ce qu'il est bon ou moins bon de rendre public.
                  <i class=\"bx bxs-quote-alt-right quote-icon-right\"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->
            
            <div class=\"swiper-slide\">
              <div class=\"testimonial-item\">
                <img src=\"{{asset ('assets/img/testimonials/chahinez.png')}}\" class=\"testimonial-img\" alt=\"\">
                <h3>Chahinez Sahlaoui</h3>
                <h4>Marketing</h4>
                <p>
                  <i class=\"bx bxs-quote-alt-left quote-icon-left\"></i>
                   Chahinez est la Responsable Marketing est la garante de la promotion d'un produit ou d'un service.
                   <br> Son action commence dès la conception de la stratégie jusqu'à sa mise en place.
                   <br> Elle réponde également aux appellations de Chargée Marketing, Responsable des études marketing et Responsable des projets marketing.                  <i class=\"bx bxs-quote-alt-right quote-icon-right\"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class=\"swiper-slide\">
              <div class=\"testimonial-item\">
                <img src=\"{{asset ('assets/img/testimonials/rayen.png')}}\" class=\"testimonial-img\" alt=\"\">
                <h4>Fondateur</h4>
                <p>
                  <i class=\"bx bxs-quote-alt-left quote-icon-left\"></i>
                  Rayen prend l'initiative de créer l'agence.<br> 
                  Il définit son objet et son activité future, dresse le projet de statuts, et démarche les personnes qui apporteront les moyens financiers dont l'agence aura besoin pour constituer le capital initial.
                  <i class=\"bx bxs-quote-alt-right quote-icon-right\"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class=\"swiper-slide\">
              <div class=\"testimonial-item\">
                <img src=\"{{asset ('assets/img/testimonials/eya.png')}}\" class=\"testimonial-img\" alt=\"\">
                <h3>Eya Ben Khedher</h3>
                <h4>Comptable</h4>
                <p>
                  <i class=\"bx bxs-quote-alt-left quote-icon-left\"></i>
                    Eya vérifie l'enregistrement des données commerciales et financières afin d'établir le compte d'exploitation nécessaire à la bonne gestion de l'agence. 
                    <br>Elle exerce une fonction de responsabilité selon le type de structure dans laquelle elle travaille.               
   <i class=\"bx bxs-quote-alt-right quote-icon-right\"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class=\"swiper-pagination\"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id=\"portfolio\" class=\"portfolio\">
      <div class=\"container\">

        <div class=\"section-title\">
          <h2 data-aos=\"fade-up\">Nos Offres</h2>
          <p data-aos=\"fade-up\">.......</p>
        </div>

        <div class=\"row\" data-aos=\"fade-up\" data-aos-delay=\"100\">
          <div class=\"col-lg-12 d-flex justify-content-center\">
            <ul id=\"portfolio-flters\">
              <li data-filter=\"*\" class=\"filter-active\">All</li>
              <li data-filter=\".filter-app\">App</li>
              <li data-filter=\".filter-card\">Card</li>
              <li data-filter=\".filter-web\">Web</li>
            </ul>
          </div>
        </div>

        <div class=\"row portfolio-container\" data-aos=\"fade-up\" data-aos-delay=\"200\">

          <div class=\"col-lg-4 col-md-6 portfolio-item filter-app\">
            <img src=\"{{asset ('assets/img/portfolio/portfolio-1.jpg')}}\" class=\"img-fluid\" alt=\"\">
            <div class=\"portfolio-info\">
              <h4>App 1</h4>
              <p>App</p>
              <a href=\"assets/img/portfolio/portfolio-1.jpg\" data-gallery=\"portfolioGallery\" class=\"portfolio-lightbox preview-link\" title=\"App 1\"><i class=\"bx bx-plus\"></i></a>
              <a href=\"portfolio-details.html\" class=\"details-link\" title=\"More Details\"><i class=\"bx bx-link\"></i></a>
            </div>
          </div>

          <div class=\"col-lg-4 col-md-6 portfolio-item filter-web\">
            <img src=\"{{asset ('assets/img/portfolio/portfolio-2.jpg')}}\" class=\"img-fluid\" alt=\"\">
            <div class=\"portfolio-info\">
              <h4>Web 3</h4>
              <p>Web</p>
              <a href=\"assets/img/portfolio/portfolio-2.jpg\" data-gallery=\"portfolioGallery\" class=\"portfolio-lightbox preview-link\" title=\"Web 3\"><i class=\"bx bx-plus\"></i></a>
              <a href=\"portfolio-details.html\" class=\"details-link\" title=\"More Details\"><i class=\"bx bx-link\"></i></a>
            </div>
          </div>

          <div class=\"col-lg-4 col-md-6 portfolio-item filter-app\">
            <img src=\"{{asset ('assets/img/portfolio/portfolio-3.jpg')}}\" class=\"img-fluid\" alt=\"\">
            <div class=\"portfolio-info\">
              <h4>App 2</h4>
              <p>App</p>
              <a href=\"assets/img/portfolio/portfolio-3.jpg\" data-gallery=\"portfolioGallery\" class=\"portfolio-lightbox preview-link\" title=\"App 2\"><i class=\"bx bx-plus\"></i></a>
              <a href=\"portfolio-details.html\" class=\"details-link\" title=\"More Details\"><i class=\"bx bx-link\"></i></a>
            </div>
          </div>

          <div class=\"col-lg-4 col-md-6 portfolio-item filter-card\">
            <img src=\"{{asset ('assets/img/portfolio/portfolio-4.jpg')}}\" class=\"img-fluid\" alt=\"\">
            <div class=\"portfolio-info\">
              <h4>Card 2</h4>
              <p>Card</p>
              <a href=\"assets/img/portfolio/portfolio-4.jpg\" data-gallery=\"portfolioGallery\" class=\"portfolio-lightbox preview-link\" title=\"Card 2\"><i class=\"bx bx-plus\"></i></a>
              <a href=\"portfolio-details.html\" class=\"details-link\" title=\"More Details\"><i class=\"bx bx-link\"></i></a>
            </div>
          </div>

          <div class=\"col-lg-4 col-md-6 portfolio-item filter-web\">
            <img src=\"{{asset ('assets/img/portfolio/portfolio-5.jpg')}}\" class=\"img-fluid\" alt=\"\">
            <div class=\"portfolio-info\">
              <h4>Web 2</h4>
              <p>Web</p>
              <a href=\"assets/img/portfolio/portfolio-5.jpg\" data-gallery=\"portfolioGallery\" class=\"portfolio-lightbox preview-link\" title=\"Web 2\"><i class=\"bx bx-plus\"></i></a>
              <a href=\"portfolio-details.html\" class=\"details-link\" title=\"More Details\"><i class=\"bx bx-link\"></i></a>
            </div>
          </div>

          <div class=\"col-lg-4 col-md-6 portfolio-item filter-app\">
            <img src=\" {{asset ('assets/img/portfolio/portfolio-6.jpg')}}\" class=\"img-fluid\" alt=\"\">
            <div class=\"portfolio-info\">
              <h4>App 3</h4>
              <p>App</p>
              <a href=\"assets/img/portfolio/portfolio-6.jpg\" data-gallery=\"portfolioGallery\" class=\"portfolio-lightbox preview-link\" title=\"App 3\"><i class=\"bx bx-plus\"></i></a>
              <a href=\"portfolio-details.html\" class=\"details-link\" title=\"More Details\"><i class=\"bx bx-link\"></i></a>
            </div>
          </div>

          <div class=\"col-lg-4 col-md-6 portfolio-item filter-card\">
            <img src=\"{{asset ('assets/img/portfolio/portfolio-7.jpg')}}\" class=\"img-fluid\" alt=\"\">
            <div class=\"portfolio-info\">
              <h4>Card 1</h4>
              <p>Card</p>
              <a href=\"assets/img/portfolio/portfolio-7.jpg\" data-gallery=\"portfolioGallery\" class=\"portfolio-lightbox preview-link\" title=\"Card 1\"><i class=\"bx bx-plus\"></i></a>
              <a href=\"portfolio-details.html\" class=\"details-link\" title=\"More Details\"><i class=\"bx bx-link\"></i></a>
            </div>
          </div>

          <div class=\"col-lg-4 col-md-6 portfolio-item filter-card\">
            <img src=\"{{asset ('assets/img/portfolio/portfolio-8.jpg')}}\" class=\"img-fluid\" alt=\"\">
            <div class=\"portfolio-info\">
              <h4>Card 3</h4>
              <p>Card</p>
              <a href=\"assets/img/portfolio/portfolio-8.jpg\" data-gallery=\"portfolioGallery\" class=\"portfolio-lightbox preview-link\" title=\"Card 3\"><i class=\"bx bx-plus\"></i></a>
              <a href=\"portfolio-details.html\" class=\"details-link\" title=\"More Details\"><i class=\"bx bx-link\"></i></a>
            </div>
          </div>

          <div class=\"col-lg-4 col-md-6 portfolio-item filter-web\">
            <img src=\"{{asset ('assets/img/portfolio/portfolio-9.jpg')}}\" class=\"img-fluid\" alt=\"\">
            <div class=\"portfolio-info\">
              <h4>Web 3</h4>
              <p>Web</p>
              <a href=\"assets/img/portfolio/portfolio-9.jpg\" data-gallery=\"portfolioGallery\" class=\"portfolio-lightbox preview-link\" title=\"Web 3\"><i class=\"bx bx-plus\"></i></a>
              <a href=\"portfolio-details.html\" class=\"details-link\" title=\"More Details\"><i class=\"bx bx-link\"></i></a>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Team Section ======= -->
    <section id=\"team\" class=\"team section-bg\">
      <div class=\"container\">

        <div class=\"section-title\">
          <h2 data-aos=\"fade-up\">Coding Squad</h2>
          <p data-aos=\"fade-up\">Nous sommes une équipe de 6 personnes qui partagent des différents responsabilités .</p>
        </div>

        <div class=\"row\">

          <div class=\"col-lg-3 col-md-6 d-flex align-items-stretch\" data-aos=\"fade-up\">
            <div class=\"member\">
              <div class=\"member-img\">
                <img src=\"{{asset ('assets/img/testimonials/Akrem4.png')}}\" class=\"img-fluid\" alt=\"\">
                <div class=\"social\">
                  <a href=\"\"><i class=\"bi bi-twitter\"></i></a>
                  <a href=\"\"><i class=\"bi bi-facebook\"></i></a>
                  <a href=\"\"><i class=\"bi bi-instagram\"></i></a>
                  <a href=\"\"><i class=\"bi bi-linkedin\"></i></a>
                </div>
              </div>
              <div class=\"member-info\">
                <h4>Akrem Zaghdoudi</h4>
                <span>Ceo</span>
              </div>
            </div>
          </div>

          <div class=\"col-lg-3 col-md-6 d-flex align-items-stretch\" data-aos=\"fade-up\" data-aos-delay=\"100\">
            <div class=\"member\">
              <div class=\"member-img\">
                <img src=\"{{asset ('assets/img/testimonials/Maissa.png')}}\" class=\"img-fluid\" alt=\"\">
                <div class=\"social\">
                  <a href=\"\"><i class=\"bi bi-twitter\"></i></a>
                  <a href=\"\"><i class=\"bi bi-facebook\"></i></a>
                  <a href=\"\"><i class=\"bi bi-instagram\"></i></a>
                  <a href=\"\"><i class=\"bi bi-linkedin\"></i></a>
                </div>
              </div>
              <div class=\"member-info\">
                <h4>Maissa Smeti</h4>
                <span>Designeur</span>
              </div>
            </div>
          </div>

          <div class=\"col-lg-3 col-md-6 d-flex align-items-stretch\" data-aos=\"fade-up\" data-aos-delay=\"200\">
            <div class=\"member\">
              <div class=\"member-img\">
                <img src=\"{{asset ('assets/img/testimonials/Wadi.png')}}\" class=\"img-fluid\" alt=\"\">
                <div class=\"social\">
                  <a href=\"\"><i class=\"bi bi-twitter\"></i></a>
                  <a href=\"\"><i class=\"bi bi-facebook\"></i></a>
                  <a href=\"\"><i class=\"bi bi-instagram\"></i></a>
                  <a href=\"\"><i class=\"bi bi-linkedin\"></i></a>
                </div>
              </div>
              <div class=\"member-info\">
                <h4>Wadii Sdouga</h4>
                <span>Ressource Humain</span>
              </div>
            </div>
          </div>

          <div class=\"col-lg-3 col-md-6 d-flex align-items-stretch\" data-aos=\"fade-up\" data-aos-delay=\"300\">
            <div class=\"member\">
              <div class=\"member-img\">
                <img src=\"{{asset ('assets/img/testimonials/chahinez.png')}}\" class=\"img-fluid\" alt=\"\">
                <div class=\"social\">
                  <a href=\"\"><i class=\"bi bi-twitter\"></i></a>
                  <a href=\"\"><i class=\"bi bi-facebook\"></i></a>
                  <a href=\"\"><i class=\"bi bi-instagram\"></i></a>
                  <a href=\"\"><i class=\"bi bi-linkedin\"></i></a>
                </div>
              </div>
              <div class=\"member-info\">
                <h4>Chahinez Sahlaoui</h4>
                <span>Marketing</span>
              </div>
            </div>
          </div>

 <div class=\"col-lg-3 col-md-6 d-flex align-items-stretch\" data-aos=\"fade-up\" data-aos-delay=\"200\">
            <div class=\"member\">
              <div class=\"member-img\">
                <img src=\"{{asset ('assets/img/testimonials/rayen.png')}}\" class=\"img-fluid\" alt=\"\">
                <div class=\"social\">
                  <a href=\"\"><i class=\"bi bi-twitter\"></i></a>
                  <a href=\"\"><i class=\"bi bi-facebook\"></i></a>
                  <a href=\"\"><i class=\"bi bi-instagram\"></i></a>
                  <a href=\"\"><i class=\"bi bi-linkedin\"></i></a>
                </div>
              </div>
              <div class=\"member-info\">
                <h4>Rayen Ben Othmen</h4>
                <span>Foundateur</span>
              </div>
            </div>
          </div>

 <div class=\"col-lg-3 col-md-6 d-flex align-items-stretch\" data-aos=\"fade-up\" data-aos-delay=\"200\">
            <div class=\"member\">
              <div class=\"member-img\">
                <img src=\"{{asset ('assets/img/testimonials/eya.png')}}\" class=\"img-fluid\" alt=\"\">
                <div class=\"social\">
                  <a href=\"\"><i class=\"bi bi-twitter\"></i></a>
                  <a href=\"\"><i class=\"bi bi-facebook\"></i></a>
                  <a href=\"\"><i class=\"bi bi-instagram\"></i></a>
                  <a href=\"\"><i class=\"bi bi-linkedin\"></i></a>
                </div>
              </div>
              <div class=\"member-info\">
                <h4>Eya Ben Khedher</h4>
                <span>Comptable</span>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Team Section -->

    <!-- ======= Pricing Section ======= -->
    <section id=\"pricing\" class=\"pricing\">
      <div class=\"container\">

        <div class=\"section-title\">
          <h2 data-aos=\"fade-up\">Nos Agences</h2>
          <p data-aos=\"fade-up\">chwaya wassef.........</p>
        </div>

        <div class=\"row\">

          <div class=\"col-lg-3 col-md-6\" data-aos=\"fade-up\">
            <div class=\"box\">
              <h3>Free</h3>
              <h4><sup>\$</sup>0<span> / month</span></h4>
              <ul>
                <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li class=\"na\">Pharetra massa</li>
                <li class=\"na\">Massa ultricies mi</li>
              </ul>
              <div class=\"btn-wrap\">
                <a href=\"#\" class=\"btn-buy\">Buy Now</a>
              </div>
            </div>
          </div>

          <div class=\"col-lg-3 col-md-6 mt-4 mt-md-0\" data-aos=\"fade-up\" data-aos-delay=\"100\">
            <div class=\"box featured\">
              <h3>Business</h3>
              <h4><sup>\$</sup>19<span> / month</span></h4>
              <ul>
                <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li>Pharetra massa</li>
                <li class=\"na\">Massa ultricies mi</li>
              </ul>
              <div class=\"btn-wrap\">
                <a href=\"#\" class=\"btn-buy\">Buy Now</a>
              </div>
            </div>
          </div>

          <div class=\"col-lg-3 col-md-6 mt-4 mt-lg-0\" data-aos=\"fade-up\" data-aos-delay=\"200\">
            <div class=\"box\">
              <h3>Developer</h3>
              <h4><sup>\$</sup>29<span> / month</span></h4>
              <ul>
                <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li>Pharetra massa</li>
                <li>Massa ultricies mi</li>
              </ul>
              <div class=\"btn-wrap\">
                <a href=\"#\" class=\"btn-buy\">Buy Now</a>
              </div>
            </div>
          </div>

          <div class=\"col-lg-3 col-md-6 mt-4 mt-lg-0\" data-aos=\"fade-up\" data-aos-delay=\"300\">
            <div class=\"box\">
              <span class=\"advanced\">Advanced</span>
              <h3>Ultimate</h3>
              <h4><sup>\$</sup>49<span> / month</span></h4>
              <ul>
                <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li>Pharetra massa</li>
                <li>Massa ultricies mi</li>
              </ul>
              <div class=\"btn-wrap\">
                <a href=\"#\" class=\"btn-buy\">Buy Now</a>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Pricing Section -->

    <!-- ======= F.A.Q Section ======= -->
    <section id=\"faq\" class=\"faq section-bg\">
      <div class=\"container\">

        <div class=\"section-title\">
          <h2 data-aos=\"fade-up\">Vos Questions</h2>
          <p data-aos=\"fade-up\">Vous pouvez posser vos questions ici .</p>
        </div>

        <div class=\"faq-list\">
          <ul>
            <li data-aos=\"fade-up\">
              <i class=\"bx bx-help-circle icon-help\"></i>
               <a data-bs-toggle=\"collapse\" class=\"collapse\" data-bs-target=\"#faq-list-1\"> Comment choisir la meilleure assurance pour ma voiture ?
                    <i class=\"bx bx-chevron-down icon-show\"></i><i class=\"bx bx-chevron-up icon-close\"></i></a>
              <div id=\"faq-list-1\" class=\"collapse show\" data-bs-parent=\".faq-list\">
                <p>
                 Pour bien choisir l'assurance de votre voiture, il faut prendre le temps de bien étudier le contrat d'assurance auquel vous souhaitez souscrire, se faire conseiller par un agent d'assurance et aussi demander l'avis de différents profils de conducteur dans votre entourage !                </p>
              </div>
            </li>

            <li data-aos=\"fade-up\" data-aos-delay=\"100\">
              <i class=\"bx bx-help-circle icon-help\"></i>
               <a data-bs-toggle=\"collapse\" data-bs-target=\"#faq-list-2\" class=\"collapsed\"> Comment faire pour changer d'assurance voiture ?
                 <i class=\"bx bx-chevron-down icon-show\"></i><i class=\"bx bx-chevron-up icon-close\"></i></a>
              <div id=\"faq-list-2\" class=\"collapse\" data-bs-parent=\".faq-list\">
                <p>
                 Pour changer d'assureur pour votre voiture, la première chose à faire et de vous référer à votre contrat qui énonce les conditions de résiliation.<br>
                 Une fois les conditions et les procédures de résiliation sont correctement appliquées, il est de votre droit de choisir une nouvelle compagnie d'assurance ainsi que le contrat avec les garanties qui vous conviennent le plus.                </p>
              </div>
            </li>

            <li data-aos=\"fade-up\" data-aos-delay=\"200\">
              <i class=\"bx bx-help-circle icon-help\"></i> 
              <a data-bs-toggle=\"collapse\" data-bs-target=\"#faq-list-3\" class=\"collapsed\"> Quel est le prix moyen d'une assurance auto en Tunisie ?
                 <i class=\"bx bx-chevron-down icon-show\"></i><i class=\"bx bx-chevron-up icon-close\"></i></a>
              <div id=\"faq-list-3\" class=\"collapse\" data-bs-parent=\".faq-list\">
                <p>
                    Il est difficile de se prononcer sur un prix de l'assurance voiture.<br>
                    En effet, les garanties et les différentes offres sur le marché sont diverses et variées.<br>
                    Toutefois, au delà de l'enjeu du prix d'une assurance auto, il est primordial de bien choisir les garanties qui composent votre contrat d'assurance, car le jour d'un sinistre quel qu'il soit, être convenablement couvert et pris en charge n'a pas de prix !!                </p>
              </div>
            </li>

            <li data-aos=\"fade-up\" data-aos-delay=\"300\">
              <i class=\"bx bx-help-circle icon-help\"></i> 
              <a data-bs-toggle=\"collapse\" data-bs-target=\"#faq-list-4\" class=\"collapsed\"> L'assurance automobile est-elle obligatoire ?
             <i class=\"bx bx-chevron-down icon-show\"></i><i class=\"bx bx-chevron-up icon-close\"></i></a>
              <div id=\"faq-list-4\" class=\"collapse\" data-bs-parent=\".faq-list\">
                <p>
                L’assurance automobile est une assurance obligatoire pour la «responsabilité civile». <br>
                Cette garantie couvre les dommages causés au tiers par le conducteur du véhicule impliqué dans un accident de la circulation.
                <br> Les garanties dommages (bris de glace, vol, incendie…) sont optionnelles. Elles couvrent les dommages subis par le véhicule assuré quel que soit le responsable.
                </p>
              </div>
            </li>

            <li data-aos=\"fade-up\" data-aos-delay=\"400\">
              <i class=\"bx bx-help-circle icon-help\"></i> 
              <a data-bs-toggle=\"collapse\" data-bs-target=\"#faq-list-5\" class=\"collapsed\"> Comment puis-je résilier mon contrat d’assurance ?
              <i class=\"bx bx-chevron-down icon-show\"></i><i class=\"bx bx-chevron-up icon-close\"></i></a>
              <div id=\"faq-list-5\" class=\"collapse\" data-bs-parent=\".faq-list\">
                <p>
                La durée de l’assurance est fixée au contrat.<br>
                Si cette durée excède une année, et sous réserve des dispositions relatives aux assurances sur la vie, l’assuré a le droit de résilier le contrat tous les ans à l’échéance du contrat en prévenant l’assureur au moins deux mois avant la date d’échéance dans l’une des formes de résiliation indiquée au dernier alinéa du présent article.
                <br> Ce droit de résiliation doit être mentionné dans chaque contrat.<br>
                A condition qu’il soit fait mention au contrat, l’assureur dispose également, dans les mêmes conditions de délai et de forme, de ce droit de résiliation.
                </p>
              </div>
            </li>

          </ul>
        </div>

      </div>
    </section><!-- End F.A.Q Section -->

    <!-- ======= Contact Section ======= -->
    <section id=\"contact\" class=\"contact\">
      <div class=\"container\">

        <div class=\"section-title\">
          <h2 data-aos=\"fade-up\">Contact</h2>
          <p data-aos=\"fade-up\">Vous pouvez nous contactez directement.</p>
        </div>

        <div class=\"row justify-content-center\">

          <div class=\"col-xl-3 col-lg-4 mt-4\" data-aos=\"fade-up\">
            <div class=\"info-box\">
              <i class=\"bx bx-map\"></i>
              <h3>Notre Address</h3>
              <p>Aveune Habib Bourguiba 2083 Cité El GHazala - Ariana</p>
            </div>
          </div>

          <div class=\"col-xl-3 col-lg-4 mt-4\" data-aos=\"fade-up\" data-aos-delay=\"100\">
            <div class=\"info-box\">
              <i class=\"bx bx-envelope\"></i>
              <h3>Notre Email</h3>
              <p>4rouesassurances@gmail.com</p>
            </div>
          </div>
          <div class=\"col-xl-3 col-lg-4 mt-4\" data-aos=\"fade-up\" data-aos-delay=\"200\">
            <div class=\"info-box\">
              <i class=\"bx bx-phone-call\"></i>
              <h3>Contactez nous</h3>
              <p>+216 70 300 300</p>
            </div>
          </div>
        </div>

        <div class=\"row justify-content-center\" data-aos=\"fade-up\" data-aos-delay=\"300\">
          <div class=\"col-xl-9 col-lg-12 mt-4\">
            <form action=\"forms/contact.php\" method=\"post\" role=\"form\" class=\"php-email-form\">
              <div class=\"row\">
                <div class=\"col-md-6 form-group\">
                  <input type=\"text\" name=\"name\" class=\"form-control\" id=\"name\" placeholder=\"Nom\" >
                </div>
                <div class=\"col-md-6 form-group mt-3 mt-md-0\">
                  <input type=\"email\" class=\"form-control\" name=\"email\" id=\"email\" placeholder=\"Email\" >
                </div>
              </div>
              <div class=\"form-group mt-3\">
                <input type=\"text\" class=\"form-control\" name=\"subject\" id=\"subject\" placeholder=\"Sujet\" >
              </div>
              <div class=\"form-group mt-3\">
                <textarea class=\"form-control\" name=\"message\" rows=\"5\" placeholder=\"Message\" ></textarea>
              </div>
              <div class=\"my-3\">
                <div class=\"loading\">Loading</div>
                <div class=\"error-message\"></div>
                <div class=\"sent-message\">Ton message sera envoyé. Merci!</div>
              </div>
              <div class=\"text-center\"><button type=\"submit\">Envoyer Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main>
  {% endblock %}
  <!-- End #main --> 

  <!-- ======= Footer ======= -->
  {% block footer %}
  
  {% endblock %}
  <!-- End Footer -->

  <a href=\"#\" class=\"back-to-top d-flex align-items-center justify-content-center\"><i class=\"bi bi-arrow-up-short\"></i></a>

  <!-- Vendor JS Files -->
  {% block js %}
  <script src=\"{{asset ('assets/vendor/aos/aos.js')}}\"></script>
  <script src=\"{{asset ('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}\"></script>
  <script src=\"{{asset ('assets/vendor/glightbox/js/glightbox.min.js')}}\"></script>
  <script src=\"{{asset ('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}\"></script>
  <script src=\"{{asset ('assets/vendor/swiper/swiper-bundle.min.js')}}\"></script>
  <script src=\"{{asset ('assets/vendor/php-email-form/validate.js')}}\"></script>

  <!-- Template Main JS File -->
  <script src=\"assets/js/main.js\"></script>
  {% endblock %}

</body>

<footer id=\"footer\">

    <div class=\"footer-top\">
      <div class=\"container\">
        <div class=\"row\">

          <div class=\"col-lg-3 col-md-6 footer-contact\">
            <h3>4Roues Assurances</h3>
            <p>
              Aveune Habib Bourguiba 2083 <br>Cité El GHazala - Ariana<br>
              <strong>Tel:</strong> +216 70 300 300<br>
              <strong>Email:</strong> 4rouesassurances@gmail.com<br>
            </p>
          </div>

          <div class=\"col-lg-2 col-md-6 footer-links\">
            <h4>Liens</h4>
            <ul>
              <li><i class=\"bx bx-chevron-right\"></i> <a href=\"#hero\">Acceuil</a></li>
              <li><i class=\"bx bx-chevron-right\"></i> <a href=\"#about\">A propos</a></li>
              <li><i class=\"bx bx-chevron-right\"></i> <a href=\"#services\">Nos conseils</a></li>
              <li><i class=\"bx bx-chevron-right\"></i> <a href=\"#portfolio\">Nos offres</a></li>
              <li><i class=\"bx bx-chevron-right\"></i> <a href=\"#team\">Notre équipe</a></li>
              <li><i class=\"bx bx-chevron-right\"></i> <a href=\"#pricing\">Nos agences </a></li>
            </ul>
          </div>

          <div class=\"col-lg-3 col-md-6 footer-links\">
            <h4>Nos Services</h4>
            <ul>
              <li><i class=\"bx bx-chevron-right\"></i> <a href=\"#\">Web Design</a></li>
              <li><i class=\"bx bx-chevron-right\"></i> <a href=\"#\">Web Development</a></li>
              <li><i class=\"bx bx-chevron-right\"></i> <a href=\"#\">Product Management</a></li>
              <li><i class=\"bx bx-chevron-right\"></i> <a href=\"#\">Marketing</a></li>
              <li><i class=\"bx bx-chevron-right\"></i> <a href=\"#\">Graphic Design</a></li>
            </ul>
          </div>

          <div class=\"col-lg-4 col-md-6 footer-newsletter\">
            <h4>Rejoignez notre newsletter</h4>
            <form action=\"\" method=\"post\">
              <input type=\"email\" name=\"email\"><input type=\"submit\" value=\"Abonner\">
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class=\"container d-lg-flex py-4\">

      <div class=\"me-lg-auto text-center text-lg-start\">
        <div class=\"copyright\">
          &copy; Copyright <strong><span>4rouesassurances</span></strong>. All Rights Reserved
        </div>
        <div class=\"credits\">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/flexor-free-multipurpose-bootstrap-template/ -->
          Designed by <a href=\"#\">CodingSquad</a>
        </div>
      </div>
      <div class=\"social-links text-center text-lg-right pt-3 pt-lg-0\">
        <a href=\"#\" class=\"twitter\"><i class=\"bx bxl-twitter\"></i></a>
        <a href=\"#\" class=\"facebook\"><i class=\"bx bxl-facebook\"></i></a>
        <a href=\"#\" class=\"instagram\"><i class=\"bx bxl-instagram\"></i></a>
        <a href=\"#\" class=\"google-plus\"><i class=\"bx bxl-skype\"></i></a>
        <a href=\"#\" class=\"linkedin\"><i class=\"bx bxl-linkedin\"></i></a>
      </div>
    </div>
  </footer>
</html>", "base.html.twig", "C:\\xampp\\htdocs\\PiDEV_V06\\PiDEV_V06\\templates\\base.html.twig");
    }
}
