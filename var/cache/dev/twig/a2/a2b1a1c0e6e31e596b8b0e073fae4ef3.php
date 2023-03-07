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

/* base2.html.twig */
class __TwigTemplate_bfbeca6179516acbb577da5ae6df6050 extends Template
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
            'css' => [$this, 'block_css'],
            'header' => [$this, 'block_header'],
            'body' => [$this, 'block_body'],
            'Sidebar' => [$this, 'block_Sidebar'],
            'footer' => [$this, 'block_footer'],
            'js' => [$this, 'block_js'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base2.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base2.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">

<head>
  <meta charset=\"utf-8\">
  <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">

  ";
        // line 8
        $this->displayBlock('titre', $context, $blocks);
        // line 9
        echo "  <meta content=\"\" name=\"description\">
  <meta content=\"\" name=\"keywords\">

  <!-- Favicons -->
  <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/img/logoo.png "), "html", null, true);
        echo "\" rel=\"icon\">
  <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/img/logoo.png"), "html", null, true);
        echo "\" rel=\"apple-touch-icon\">

  <!-- Google Fonts -->
  
  <link href=\"https://fonts.gstatic.com\" rel=\"preconnect\">
  <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i\" rel=\"stylesheet\">

  <!-- Vendor CSS Files -->
  ";
        // line 22
        $this->displayBlock('css', $context, $blocks);
        // line 39
        echo "
</head>

<body>

  <!-- ======= Header ======= -->
  ";
        // line 45
        $this->displayBlock('header', $context, $blocks);
        // line 274
        echo "  <!-- End Header -->



  <!-- ======= Sidebar ======= -->
  ";
        // line 279
        $this->displayBlock('body', $context, $blocks);
        // line 929
        echo " 
  <!-- End #main -->
  ";
        // line 931
        $this->displayBlock('Sidebar', $context, $blocks);
        // line 1047
        echo "
  <!-- ======= Footer ======= -->
  ";
        // line 1049
        $this->displayBlock('footer', $context, $blocks);
        // line 1063
        echo "
  <a href=\"#\" class=\"back-to-top d-flex align-items-center justify-content-center\">
  <i class=\"bi bi-arrow-up-short\"></i></a>

  <!-- Vendor JS Files -->
  ";
        // line 1068
        $this->displayBlock('js', $context, $blocks);
        // line 1081
        echo "
</body>

</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 8
    public function block_titre($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "titre"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "titre"));

        echo " <title>4Roues Assurance Back</title> ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 22
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        // line 23
        echo " <link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t\t<link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/vendor/bootstrap-icons/bootstrap-icons.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t\t<link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/vendor/boxicons/css/boxicons.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t\t<link href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/vendor/quill/quill.snow.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t\t<link href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/vendor/quill/quill.bubble.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t\t<link href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/vendor/remixicon/remixicon.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t\t<link
\t\t\thref=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/vendor/simple-datatables/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

  <!-- Template Main CSS File -->
  <link rel=\"stylesheet\" href=\"https://kit.fontawesome.com/6e6a7baaeb.css\" crossorigin=\"anonymous\">
  <link href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/css/styleCS.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

   <!-- bouton CSS  -->
  <link href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/css/btn.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 45
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 46
        echo "  <header id=\"header\" class=\"header fixed-top d-flex align-items-center\">

    <div class=\"d-flex align-items-center justify-content-between\">
      <a href=\"index.html\" class=\"logo d-flex align-items-center\">
        <img src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/img/logoo.png"), "html", null, true);
        echo "\" alt=\"\">
        <span class=\"d-none d-lg-block\">4Roues Assurances</span>
      </a>
      <i class=\"bi bi-list toggle-sidebar-btn\"></i>
    </div><!-- End Logo -->

    <div class=\"search-bar\">
      <form class=\"search-form d-flex align-items-center\" method=\"POST\" action=\"#\">
        <input type=\"text\" name=\"query\" placeholder=\"Search\" title=\"Enter search keyword\">
        <button type=\"submit\" title=\"Search\"><i class=\"bi bi-search\"></i></button>
      </form>
    </div><!-- End Search Bar -->

    <nav class=\"header-nav ms-auto\">
      <ul class=\"d-flex align-items-center\">

        <li class=\"nav-item d-block d-lg-none\">
          <a class=\"nav-link nav-icon search-bar-toggle \" href=\"#\">
            <i class=\"bi bi-search\"></i>
          </a>
        </li><!-- End Search Icon-->

        <li class=\"nav-item dropdown\">

          <a class=\"nav-link nav-icon\" href=\"#\" data-bs-toggle=\"dropdown\">
            <i class=\"bi bi-bell\"></i>
            <span class=\"badge bg-primary badge-number\">4</span>
          </a><!-- End Notification Icon -->

          <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications\">
            <li class=\"dropdown-header\">
              You have 4 new notifications
              <a href=\"#\"><span class=\"badge rounded-pill bg-primary p-2 ms-2\">View all</span></a>
            </li>
            <li>
              <hr class=\"dropdown-divider\">
            </li>

            <li class=\"notification-item\">
              <i class=\"bi bi-exclamation-circle text-warning\"></i>
              <div>
                <h4>Lorem Ipsum</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>30 min. ago</p>
              </div>
            </li>

            <li>
              <hr class=\"dropdown-divider\">
            </li>

            <li class=\"notification-item\">
              <i class=\"bi bi-x-circle text-danger\"></i>
              <div>
                <h4>Atque rerum nesciunt</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>1 hr. ago</p>
              </div>
            </li>

            <li>
              <hr class=\"dropdown-divider\">
            </li>

            <li class=\"notification-item\">
              <i class=\"bi bi-check-circle text-success\"></i>
              <div>
                <h4>Sit rerum fuga</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>2 hrs. ago</p>
              </div>
            </li>

            <li>
              <hr class=\"dropdown-divider\">
            </li>

            <li class=\"notification-item\">
              <i class=\"bi bi-info-circle text-primary\"></i>
              <div>
                <h4>Dicta reprehenderit</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>4 hrs. ago</p>
              </div>
            </li>

            <li>
              <hr class=\"dropdown-divider\">
            </li>
            <li class=\"dropdown-footer\">
              <a href=\"#\">Show all notifications</a>
            </li>

          </ul><!-- End Notification Dropdown Items -->

        </li><!-- End Notification Nav -->

        <li class=\"nav-item dropdown\">

          <a class=\"nav-link nav-icon\" href=\"#\" data-bs-toggle=\"dropdown\">
            <i class=\"bi bi-chat-left-text\"></i>
            <span class=\"badge bg-success badge-number\">3</span>
          </a><!-- End Messages Icon -->

          <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow messages\">
            <li class=\"dropdown-header\">
              You have 3 new messages
              <a href=\"#\"><span class=\"badge rounded-pill bg-primary p-2 ms-2\">View all</span></a>
            </li>
            <li>
              <hr class=\"dropdown-divider\">
            </li>

            <li class=\"message-item\">
              <a href=\"#\">
                <img src=\"assets/img/messages-1.jpg\" alt=\"\" class=\"rounded-circle\">
                <div>
                  <h4>Maria Hudson</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>4 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class=\"dropdown-divider\">
            </li>

            <li class=\"message-item\">
              <a href=\"#\">
                <img src=\"";
        // line 179
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/img/messages-2.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"rounded-circle\">
                <div>
                  <h4>Anna Nelson</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>6 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class=\"dropdown-divider\">
            </li>

            <li class=\"message-item\">
              <a href=\"#\">
                <img src=\"";
        // line 193
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/img/messages-3.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"rounded-circle\">
                <div>
                  <h4>David Muldon</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>8 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class=\"dropdown-divider\">
            </li>

            <li class=\"dropdown-footer\">
              <a href=\"#\">Show all messages</a>
            </li>

          </ul><!-- End Messages Dropdown Items -->

        </li><!-- End Messages Nav -->

        <li class=\"nav-item dropdown pe-3\">

          <a class=\"nav-link nav-profile d-flex align-items-center pe-0\" href=\"#\" data-bs-toggle=\"dropdown\">
            <img src=\"";
        // line 216
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/img/profile1-img.jpg"), "html", null, true);
        echo "\" alt=\"Profile\" class=\"rounded-circle\">
            <span class=\"d-none d-md-block dropdown-toggle ps-2\">Z.Akrem</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow profile\">
            <li class=\"dropdown-header\">
              <h6>Zaghdoudi Akrem</h6>
              <span>Assureur</span>
            </li>
            <li>
              <hr class=\"dropdown-divider\">
            </li>

            <li>
              <a class=\"dropdown-item d-flex align-items-center\" href=\"users-profile.html\">
                <i class=\"bi bi-person\"></i>
                <span>Mon Profile</span>
              </a>
            </li>
            <li>
              <hr class=\"dropdown-divider\">
            </li>

            <li>
              <a class=\"dropdown-item d-flex align-items-center\" href=\"users-profile.html\">
                <i class=\"bi bi-gear\"></i>
                <span>Parametres du compte</span>
              </a>
            </li>
            <li>
              <hr class=\"dropdown-divider\">
            </li>

            <li>
              <a class=\"dropdown-item d-flex align-items-center\" href=\"pages-faq.html\">
                <i class=\"bi bi-question-circle\"></i>
                <span> Help</span>
              </a>
            </li>
            <li>
              <hr class=\"dropdown-divider\">
            </li>

            <li>
              <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                <i class=\"bi bi-box-arrow-right\"></i>
                <span>Deconnecter</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header>
  ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 279
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 280
        echo "  <!-- End Sidebar-->

  <main id=\"main\" class=\"main\">

    <div class=\"pagetitle\">
      <h1>Dashboard</h1>
      <nav>
        <ol class=\"breadcrumb\">
          <li class=\"breadcrumb-item\"><a href=\"index.html\">Home</a></li>
          <li class=\"breadcrumb-item active\">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class=\"section dashboard\">
      <div class=\"row\">

        <!-- Left side columns -->
        <div class=\"col-lg-8\">
          <div class=\"row\">

            <!-- Sales Card -->
            <div class=\"col-xxl-4 col-md-6\">
              <div class=\"card info-card sales-card\">

                <div class=\"filter\">
                  <a class=\"icon\" href=\"#\" data-bs-toggle=\"dropdown\"><i class=\"bi bi-three-dots\"></i></a>
                  <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\">
                    <li class=\"dropdown-header text-start\">
                      <h6>Filter</h6>
                    </li>

                    <li><a class=\"dropdown-item\" href=\"#\">Today</a></li>
                    <li><a class=\"dropdown-item\" href=\"#\">This Month</a></li>
                    <li><a class=\"dropdown-item\" href=\"#\">This Year</a></li>
                  </ul>
                </div>

                <div class=\"card-body\">
                  <h5 class=\"card-title\">Sales <span>| Today</span></h5>

                  <div class=\"d-flex align-items-center\">
                    <div class=\"card-icon rounded-circle d-flex align-items-center justify-content-center\">
                      <i class=\"bi bi-cart\"></i>
                    </div>
                    <div class=\"ps-3\">
                      <h6>145</h6>
                      <span class=\"text-success small pt-1 fw-bold\">12%</span> <span class=\"text-muted small pt-2 ps-1\">increase</span>

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Sales Card -->

            <!-- Revenue Card -->
            <div class=\"col-xxl-4 col-md-6\">
              <div class=\"card info-card revenue-card\">

                <div class=\"filter\">
                  <a class=\"icon\" href=\"#\" data-bs-toggle=\"dropdown\"><i class=\"bi bi-three-dots\"></i></a>
                  <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\">
                    <li class=\"dropdown-header text-start\">
                      <h6>Filter</h6>
                    </li>

                    <li><a class=\"dropdown-item\" href=\"#\">Today</a></li>
                    <li><a class=\"dropdown-item\" href=\"#\">This Month</a></li>
                    <li><a class=\"dropdown-item\" href=\"#\">This Year</a></li>
                  </ul>
                </div>

                <div class=\"card-body\">
                  <h5 class=\"card-title\">Revenue <span>| This Month</span></h5>

                  <div class=\"d-flex align-items-center\">
                    <div class=\"card-icon rounded-circle d-flex align-items-center justify-content-center\">
                      <i class=\"bi bi-currency-dollar\"></i>
                    </div>
                    <div class=\"ps-3\">
                      <h6>\$3,264</h6>
                      <span class=\"text-success small pt-1 fw-bold\">8%</span> <span class=\"text-muted small pt-2 ps-1\">increase</span>

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Revenue Card -->

            <!-- Customers Card -->
            <div class=\"col-xxl-4 col-xl-12\">

              <div class=\"card info-card customers-card\">

                <div class=\"filter\">
                  <a class=\"icon\" href=\"#\" data-bs-toggle=\"dropdown\"><i class=\"bi bi-three-dots\"></i></a>
                  <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\">
                    <li class=\"dropdown-header text-start\">
                      <h6>Filter</h6>
                    </li>

                    <li><a class=\"dropdown-item\" href=\"#\">Today</a></li>
                    <li><a class=\"dropdown-item\" href=\"#\">This Month</a></li>
                    <li><a class=\"dropdown-item\" href=\"#\">This Year</a></li>
                  </ul>
                </div>

                <div class=\"card-body\">
                  <h5 class=\"card-title\">Customers <span>| This Year</span></h5>

                  <div class=\"d-flex align-items-center\">
                    <div class=\"card-icon rounded-circle d-flex align-items-center justify-content-center\">
                      <i class=\"bi bi-people\"></i>
                    </div>
                    <div class=\"ps-3\">
                      <h6>1244</h6>
                      <span class=\"text-danger small pt-1 fw-bold\">12%</span> <span class=\"text-muted small pt-2 ps-1\">decrease</span>

                    </div>
                  </div>

                </div>
              </div>

            </div><!-- End Customers Card -->

            <!-- Reports -->
            <div class=\"col-12\">
              <div class=\"card\">

                <div class=\"filter\">
                  <a class=\"icon\" href=\"#\" data-bs-toggle=\"dropdown\"><i class=\"bi bi-three-dots\"></i></a>
                  <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\">
                    <li class=\"dropdown-header text-start\">
                      <h6>Filter</h6>
                    </li>

                    <li><a class=\"dropdown-item\" href=\"#\">Today</a></li>
                    <li><a class=\"dropdown-item\" href=\"#\">This Month</a></li>
                    <li><a class=\"dropdown-item\" href=\"#\">This Year</a></li>
                  </ul>
                </div>

                <div class=\"card-body\">
                  <h5 class=\"card-title\">Reports <span>/Today</span></h5>

                  <!-- Line Chart -->
                  <div id=\"reportsChart\"></div>

                  <script>
                    document.addEventListener(\"DOMContentLoaded\", () => {
                      new ApexCharts(document.querySelector(\"#reportsChart\"), {
                        series: [{
                          name: 'Sales',
                          data: [31, 40, 28, 51, 42, 82, 56],
                        }, {
                          name: 'Revenue',
                          data: [11, 32, 45, 32, 34, 52, 41]
                        }, {
                          name: 'Customers',
                          data: [15, 11, 32, 18, 9, 24, 11]
                        }],
                        chart: {
                          height: 350,
                          type: 'area',
                          toolbar: {
                            show: false
                          },
                        },
                        markers: {
                          size: 4
                        },
                        colors: ['#4154f1', '#2eca6a', '#ff771d'],
                        fill: {
                          type: \"gradient\",
                          gradient: {
                            shadeIntensity: 1,
                            opacityFrom: 0.3,
                            opacityTo: 0.4,
                            stops: [0, 90, 100]
                          }
                        },
                        dataLabels: {
                          enabled: false
                        },
                        stroke: {
                          curve: 'smooth',
                          width: 2
                        },
                        xaxis: {
                          type: 'datetime',
                          categories: [\"2018-09-19T00:00:00.000Z\", \"2018-09-19T01:30:00.000Z\", \"2018-09-19T02:30:00.000Z\", \"2018-09-19T03:30:00.000Z\", \"2018-09-19T04:30:00.000Z\", \"2018-09-19T05:30:00.000Z\", \"2018-09-19T06:30:00.000Z\"]
                        },
                        tooltip: {
                          x: {
                            format: 'dd/MM/yy HH:mm'
                          },
                        }
                      }).render();
                    });
                  </script>
                  <!-- End Line Chart -->

                </div>

              </div>
            </div><!-- End Reports -->

            <!-- Recent Sales -->
            <div class=\"col-12\">
              <div class=\"card recent-sales overflow-auto\">

                <div class=\"filter\">
                  <a class=\"icon\" href=\"#\" data-bs-toggle=\"dropdown\"><i class=\"bi bi-three-dots\"></i></a>
                  <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\">
                    <li class=\"dropdown-header text-start\">
                      <h6>Filter</h6>
                    </li>

                    <li><a class=\"dropdown-item\" href=\"#\">Today</a></li>
                    <li><a class=\"dropdown-item\" href=\"#\">This Month</a></li>
                    <li><a class=\"dropdown-item\" href=\"#\">This Year</a></li>
                  </ul>
                </div>

                <div class=\"card-body\">
                  <h5 class=\"card-title\">Recent Sales <span>| Today</span></h5>

                  <table class=\"table table-borderless datatable\">
                    <thead>
                      <tr>
                        <th scope=\"col\">#</th>
                        <th scope=\"col\">Customer</th>
                        <th scope=\"col\">Product</th>
                        <th scope=\"col\">Price</th>
                        <th scope=\"col\">Status</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope=\"row\"><a href=\"#\">#2457</a></th>
                        <td>Brandon Jacob</td>
                        <td><a href=\"#\" class=\"text-primary\">At praesentium minu</a></td>
                        <td>\$64</td>
                        <td><span class=\"badge bg-success\">Approved</span></td>
                      </tr>
                      <tr>
                        <th scope=\"row\"><a href=\"#\">#2147</a></th>
                        <td>Bridie Kessler</td>
                        <td><a href=\"#\" class=\"text-primary\">Blanditiis dolor omnis similique</a></td>
                        <td>\$47</td>
                        <td><span class=\"badge bg-warning\">Pending</span></td>
                      </tr>
                      <tr>
                        <th scope=\"row\"><a href=\"#\">#2049</a></th>
                        <td>Ashleigh Langosh</td>
                        <td><a href=\"#\" class=\"text-primary\">At recusandae consectetur</a></td>
                        <td>\$147</td>
                        <td><span class=\"badge bg-success\">Approved</span></td>
                      </tr>
                      <tr>
                        <th scope=\"row\"><a href=\"#\">#2644</a></th>
                        <td>Angus Grady</td>
                        <td><a href=\"#\" class=\"text-primar\">Ut voluptatem id earum et</a></td>
                        <td>\$67</td>
                        <td><span class=\"badge bg-danger\">Rejected</span></td>
                      </tr>
                      <tr>
                        <th scope=\"row\"><a href=\"#\">#2644</a></th>
                        <td>Raheem Lehner</td>
                        <td><a href=\"#\" class=\"text-primary\">Sunt similique distinctio</a></td>
                        <td>\$165</td>
                        <td><span class=\"badge bg-success\">Approved</span></td>
                      </tr>
                    </tbody>
                  </table>

                </div>

              </div>
            </div><!-- End Recent Sales -->

            <!-- Top Selling -->
            <div class=\"col-12\">
              <div class=\"card top-selling overflow-auto\">

                <div class=\"filter\">
                  <a class=\"icon\" href=\"#\" data-bs-toggle=\"dropdown\"><i class=\"bi bi-three-dots\"></i></a>
                  <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\">
                    <li class=\"dropdown-header text-start\">
                      <h6>Filter</h6>
                    </li>

                    <li><a class=\"dropdown-item\" href=\"#\">Today</a></li>
                    <li><a class=\"dropdown-item\" href=\"#\">This Month</a></li>
                    <li><a class=\"dropdown-item\" href=\"#\">This Year</a></li>
                  </ul>
                </div>

                <div class=\"card-body pb-0\">
                  <h5 class=\"card-title\">Top Selling <span>| Today</span></h5>

                  <table class=\"table table-borderless\">
                    <thead>
                      <tr>
                        <th scope=\"col\">Preview</th>
                        <th scope=\"col\">Product</th>
                        <th scope=\"col\">Price</th>
                        <th scope=\"col\">Sold</th>
                        <th scope=\"col\">Revenue</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope=\"row\"><a href=\"#\"><img src=\"";
        // line 596
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/img/product-1.jpg"), "html", null, true);
        echo "\" alt=\"\"></a></th>
                        <td><a href=\"#\" class=\"text-primary fw-bold\">Ut inventore ipsa voluptas nulla</a></td>
                        <td>\$64</td>
                        <td class=\"fw-bold\">124</td>
                        <td>\$5,828</td>
                      </tr>
                      <tr>
                        <th scope=\"row\"><a href=\"#\"><img src=\"";
        // line 603
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/img/product-2.jpg"), "html", null, true);
        echo "\" alt=\"\"></a></th>
                        <td><a href=\"#\" class=\"text-primary fw-bold\">Exercitationem similique doloremque</a></td>
                        <td>\$46</td>
                        <td class=\"fw-bold\">98</td>
                        <td>\$4,508</td>
                      </tr>
                      <tr>
                        <th scope=\"row\"><a href=\"#\"><img src=\"";
        // line 610
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/img/product-3.jpg"), "html", null, true);
        echo "\" alt=\"\"></a></th>
                        <td><a href=\"#\" class=\"text-primary fw-bold\">Doloribus nisi exercitationem</a></td>
                        <td>\$59</td>
                        <td class=\"fw-bold\">74</td>
                        <td>\$4,366</td>
                      </tr>
                      <tr>
                        <th scope=\"row\"><a href=\"#\"><img src=\"";
        // line 617
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/img/product-4.jpg"), "html", null, true);
        echo "\" alt=\"\"></a></th>
                        <td><a href=\"#\" class=\"text-primary fw-bold\">Officiis quaerat sint rerum error</a></td>
                        <td>\$32</td>
                        <td class=\"fw-bold\">63</td>
                        <td>\$2,016</td>
                      </tr>
                      <tr>
                        <th scope=\"row\"><a href=\"#\"><img src=\"";
        // line 624
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/img/product-5.jpg"), "html", null, true);
        echo "\" alt=\"\"></a></th>
                        <td><a href=\"#\" class=\"text-primary fw-bold\">Sit unde debitis delectus repellendus</a></td>
                        <td>\$79</td>
                        <td class=\"fw-bold\">41</td>
                        <td>\$3,239</td>
                      </tr>
                    </tbody>
                  </table>

                </div>

              </div>
            </div><!-- End Top Selling -->

          </div>
        </div><!-- End Left side columns -->

        <!-- Right side columns -->
        <div class=\"col-lg-4\">

          <!-- Recent Activity -->
          <div class=\"card\">
            <div class=\"filter\">
              <a class=\"icon\" href=\"#\" data-bs-toggle=\"dropdown\"><i class=\"bi bi-three-dots\"></i></a>
              <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\">
                <li class=\"dropdown-header text-start\">
                  <h6>Filter</h6>
                </li>

                <li><a class=\"dropdown-item\" href=\"#\">Today</a></li>
                <li><a class=\"dropdown-item\" href=\"#\">This Month</a></li>
                <li><a class=\"dropdown-item\" href=\"#\">This Year</a></li>
              </ul>
            </div>

            <div class=\"card-body\">
              <h5 class=\"card-title\">Recent Activity <span>| Today</span></h5>

              <div class=\"activity\">

                <div class=\"activity-item d-flex\">
                  <div class=\"activite-label\">32 min</div>
                  <i class='bi bi-circle-fill activity-badge text-success align-self-start'></i>
                  <div class=\"activity-content\">
                    Quia quae rerum <a href=\"#\" class=\"fw-bold text-dark\">explicabo officiis</a> beatae
                  </div>
                </div><!-- End activity item-->

                <div class=\"activity-item d-flex\">
                  <div class=\"activite-label\">56 min</div>
                  <i class='bi bi-circle-fill activity-badge text-danger align-self-start'></i>
                  <div class=\"activity-content\">
                    Voluptatem blanditiis blanditiis eveniet
                  </div>
                </div><!-- End activity item-->

                <div class=\"activity-item d-flex\">
                  <div class=\"activite-label\">2 hrs</div>
                  <i class='bi bi-circle-fill activity-badge text-primary align-self-start'></i>
                  <div class=\"activity-content\">
                    Voluptates corrupti molestias voluptatem
                  </div>
                </div><!-- End activity item-->

                <div class=\"activity-item d-flex\">
                  <div class=\"activite-label\">1 day</div>
                  <i class='bi bi-circle-fill activity-badge text-info align-self-start'></i>
                  <div class=\"activity-content\">
                    Tempore autem saepe <a href=\"#\" class=\"fw-bold text-dark\">occaecati voluptatem</a> tempore
                  </div>
                </div><!-- End activity item-->

                <div class=\"activity-item d-flex\">
                  <div class=\"activite-label\">2 days</div>
                  <i class='bi bi-circle-fill activity-badge text-warning align-self-start'></i>
                  <div class=\"activity-content\">
                    Est sit eum reiciendis exercitationem
                  </div>
                </div><!-- End activity item-->

                <div class=\"activity-item d-flex\">
                  <div class=\"activite-label\">4 weeks</div>
                  <i class='bi bi-circle-fill activity-badge text-muted align-self-start'></i>
                  <div class=\"activity-content\">
                    Dicta dolorem harum nulla eius. Ut quidem quidem sit quas
                  </div>
                </div><!-- End activity item-->

              </div>

            </div>
          </div><!-- End Recent Activity -->

          <!-- Budget Report -->
          <div class=\"card\">
            <div class=\"filter\">
              <a class=\"icon\" href=\"#\" data-bs-toggle=\"dropdown\"><i class=\"bi bi-three-dots\"></i></a>
              <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\">
                <li class=\"dropdown-header text-start\">
                  <h6>Filter</h6>
                </li>

                <li><a class=\"dropdown-item\" href=\"#\">Today</a></li>
                <li><a class=\"dropdown-item\" href=\"#\">This Month</a></li>
                <li><a class=\"dropdown-item\" href=\"#\">This Year</a></li>
              </ul>
            </div>

            <div class=\"card-body pb-0\">
              <h5 class=\"card-title\">Budget Report <span>| This Month</span></h5>

              <div id=\"budgetChart\" style=\"min-height: 400px;\" class=\"echart\"></div>

              <script>
                document.addEventListener(\"DOMContentLoaded\", () => {
                  var budgetChart = echarts.init(document.querySelector(\"#budgetChart\")).setOption({
                    legend: {
                      data: ['Allocated Budget', 'Actual Spending']
                    },
                    radar: {
                      // shape: 'circle',
                      indicator: [{
                          name: 'Sales',
                          max: 6500
                        },
                        {
                          name: 'Administration',
                          max: 16000
                        },
                        {
                          name: 'Information Technology',
                          max: 30000
                        },
                        {
                          name: 'Customer Support',
                          max: 38000
                        },
                        {
                          name: 'Development',
                          max: 52000
                        },
                        {
                          name: 'Marketing',
                          max: 25000
                        }
                      ]
                    },
                    series: [{
                      name: 'Budget vs spending',
                      type: 'radar',
                      data: [{
                          value: [4200, 3000, 20000, 35000, 50000, 18000],
                          name: 'Allocated Budget'
                        },
                        {
                          value: [5000, 14000, 28000, 26000, 42000, 21000],
                          name: 'Actual Spending'
                        }
                      ]
                    }]
                  });
                });
              </script>

            </div>
          </div><!-- End Budget Report -->

          <!-- Website Traffic -->
          <div class=\"card\">
            <div class=\"filter\">
              <a class=\"icon\" href=\"#\" data-bs-toggle=\"dropdown\"><i class=\"bi bi-three-dots\"></i></a>
              <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\">
                <li class=\"dropdown-header text-start\">
                  <h6>Filter</h6>
                </li>

                <li><a class=\"dropdown-item\" href=\"#\">Today</a></li>
                <li><a class=\"dropdown-item\" href=\"#\">This Month</a></li>
                <li><a class=\"dropdown-item\" href=\"#\">This Year</a></li>
              </ul>
            </div>

            <div class=\"card-body pb-0\">
              <h5 class=\"card-title\">Website Traffic <span>| Today</span></h5>

              <div id=\"trafficChart\" style=\"min-height: 400px;\" class=\"echart\"></div>

              <script>
                document.addEventListener(\"DOMContentLoaded\", () => {
                  echarts.init(document.querySelector(\"#trafficChart\")).setOption({
                    tooltip: {
                      trigger: 'item'
                    },
                    legend: {
                      top: '5%',
                      left: 'center'
                    },
                    series: [{
                      name: 'Access From',
                      type: 'pie',
                      radius: ['40%', '70%'],
                      avoidLabelOverlap: false,
                      label: {
                        show: false,
                        position: 'center'
                      },
                      emphasis: {
                        label: {
                          show: true,
                          fontSize: '18',
                          fontWeight: 'bold'
                        }
                      },
                      labelLine: {
                        show: false
                      },
                      data: [{
                          value: 1048,
                          name: 'Search Engine'
                        },
                        {
                          value: 735,
                          name: 'Direct'
                        },
                        {
                          value: 580,
                          name: 'Email'
                        },
                        {
                          value: 484,
                          name: 'Union Ads'
                        },
                        {
                          value: 300,
                          name: 'Video Ads'
                        }
                      ]
                    }]
                  });
                });
              </script>

            </div>
          </div><!-- End Website Traffic -->

          <!-- News & Updates Traffic -->
          <div class=\"card\">
            <div class=\"filter\">
              <a class=\"icon\" href=\"#\" data-bs-toggle=\"dropdown\"><i class=\"bi bi-three-dots\"></i></a>
              <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\">
                <li class=\"dropdown-header text-start\">
                  <h6>Filter</h6>
                </li>

                <li><a class=\"dropdown-item\" href=\"#\">Today</a></li>
                <li><a class=\"dropdown-item\" href=\"#\">This Month</a></li>
                <li><a class=\"dropdown-item\" href=\"#\">This Year</a></li>
              </ul>
            </div>

            <div class=\"card-body pb-0\">
              <h5 class=\"card-title\">News &amp; Updates <span>| Today</span></h5>

              <div class=\"news\">
                <div class=\"post-item clearfix\">
                  <img src=\"";
        // line 889
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/img/news-1.jpg"), "html", null, true);
        echo "\" alt=\"\">
                  <h4><a href=\"#\">Nihil blanditiis at in nihil autem</a></h4>
                  <p>Sit recusandae non aspernatur laboriosam. Quia enim eligendi sed ut harum...</p>
                </div>

                <div class=\"post-item clearfix\">
                  <img src=\"";
        // line 895
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/img/news-2.jpg"), "html", null, true);
        echo "\" alt=\"\">
                  <h4><a href=\"#\">Quidem autem et impedit</a></h4>
                  <p>Illo nemo neque maiores vitae officiis cum eum turos elan dries werona nande...</p>
                </div>

                <div class=\"post-item clearfix\">
                  <img src=\"";
        // line 901
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/img/news-3.jpg"), "html", null, true);
        echo "\" alt=\"\">
                  <h4><a href=\"#\">Id quia et et ut maxime similique occaecati ut</a></h4>
                  <p>Fugiat voluptas vero eaque accusantium eos. Consequuntur sed ipsam et totam...</p>
                </div>

                <div class=\"post-item clearfix\">
                  <img src=\"";
        // line 907
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/img/news-4.jpg"), "html", null, true);
        echo "\" alt=\"\">
                  <h4><a href=\"#\">Laborum corporis quo dara net para</a></h4>
                  <p>Qui enim quia optio. Eligendi aut asperiores enim repellendusvel rerum cuder...</p>
                </div>

                <div class=\"post-item clearfix\">
                  <img src=\"";
        // line 913
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/img/news-5.jpg"), "html", null, true);
        echo "\" alt=\"\">
                  <h4><a href=\"#\">Et dolores corrupti quae illo quod dolor</a></h4>
                  <p>Odit ut eveniet modi reiciendis. Atque cupiditate libero beatae dignissimos eius...</p>
                </div>

              </div><!-- End sidebar recent posts-->

            </div>
          </div><!-- End News & Updates -->

        </div><!-- End Right side columns -->

      </div>
    </section>

  </main>
  ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 931
    public function block_Sidebar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Sidebar"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Sidebar"));

        echo " 
<!-- ======= Sidebar ======= -->
<aside id=\"sidebar\" class=\"sidebar\">

    <ul class=\"sidebar-nav\" id=\"sidebar-nav\">

      <li class=\"nav-item\">
        <a class=\"nav-link \" href=\"/back\">
          <i class=\"bi bi-grid\"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <!-- Forms Nav -->
     <li class=\"nav-item\">
        <a class=\"nav-link collapsed\" data-bs-target=\"#forms-nav\" data-bs-toggle=\"collapse\" href=\"#\">
          <i class=\"bi bi-journal-text\"></i><span>Contrats</span><i class=\"bi bi-chevron-down ms-auto\"></i>
        </a>
        <ul id=\"forms-nav\" class=\"nav-content collapse \" data-bs-parent=\"#sidebar-nav\">
          <li>
            <a href=\"/contrat/new\">
              <i class=\"bi bi-circle\"></i><span>Ajouter Contrat</span>
            </a>
          </li>
          <li>
            <a href=\"/contrat/mod\">
              <i class=\"bi bi-circle\"></i><span>Modifier|Supprimer  Contrat</span>
            </a>
          </li>
          <li>
            <a href=\"/contrat/sup\">
              ";
        // line 963
        echo "            </a>
          </li>
          <li>
            
          </li>
        </ul>
      </li>
      <!-- End Forms Nav -->

    <!-- Forms Nav -->
\t  <li class=\"nav-item\">
        <a class=\"nav-link collapsed\" data-bs-target=\"#charts-nav\" data-bs-toggle=\"collapse\" href=\"#\">
          <i class=\"bi bi-menu-button-wide\"></i><span>Offres</span><i class=\"bi bi-chevron-down ms-auto\"></i>
        </a>
        <ul id=\"charts-nav\" class=\"nav-content collapse \" data-bs-parent=\"#sidebar-nav\">
          <li>
            <a href=\"/offre/new\">
              <i class=\"bi bi-circle\"></i><span>Ajouter Offre</span>
            </a>
          </li>
          <li>
            <a href=\"/offre/mod\">
              <i class=\"bi bi-circle\"></i><span>Modifier|Supprimer Offre</span>
            </a>
          </li>
          <li>
            <a href=\"/offre/sup\">
              ";
        // line 991
        echo "            </a>
          </li>
        </ul>
      </li><!-- End Charts Nav -->

      <li class=\"nav-item\">
        <a class=\"nav-link collapsed\" data-bs-target=\"#tables-nav\" data-bs-toggle=\"collapse\" href=\"#\">
          <i class=\"bi bi-layout-text-window-reverse\"></i><span>Tables</span><i class=\"bi bi-chevron-down ms-auto\"></i>
        </a>
        <ul id=\"tables-nav\" class=\"nav-content collapse \" data-bs-parent=\"#sidebar-nav\">
          <li><a href=\"/contrat/\"><i class=\"bi bi-circle\"></i>Table des Contrats</a></li>
          <li>
            <a href=\"/offre/\">
              <i class=\"bi bi-circle\"></i><span>Table des Offres</span>
            </a>
          </li>
        </ul>
      </li><!-- End Tables Nav -->

      

      

      
\t  </br>
    </br>
    </br>
    </br>
    </br>
    </br>
    </br>
    </br>
    </br>
    </br>
\t<li class=\"nav-heading\">___________________________________________________________________________________________</li>
      </br>
      <li class=\"nav-item\">
        <a class=\"nav-link collapsed\" href=\"users-profile.html\">
          <i class=\"bi bi-person\"></i>
          <span>Profile</span>
        </a>
      </li><!-- End Profile Page Nav -->
      <li class=\"nav-item\">
        <a class=\"nav-link collapsed\" href=\"pages-login.html\">
          <i class=\"bi bi-box-arrow-in-right\"></i>
          <span>Deconnecter</span>
        </a>
      </li><!-- End Login Page Nav -->

    

    </ul>

  </aside>
<!-- End Sidebar-->
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 1049
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 1050
        echo "  <footer id=\"footer\" class=\"footer\">
    <div class=\"copyright\">
      &copy; Copyright <strong><span>4RouesAssurances</span></strong>. All Rights Reserved
    </div>
    <div class=\"credits\">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
      Designed by <a href=\"#\">Coding Squad</a>
    </div>
  </footer><!-- End Footer -->
  ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 1068
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        // line 1069
        echo "  <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/vendor/apexcharts/apexcharts.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 1070
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/vendor/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 1071
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/vendor/chart.js/chart.umd.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 1072
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/vendor/echarts/echarts.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 1073
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/vendor/quill/quill.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 1074
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/vendor/simple-datatables/simple-datatables.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 1075
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/vendor/tinymce/tinymce.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 1076
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/vendor/php-email-form/validate.js"), "html", null, true);
        echo "\"></script>

  <!-- Template Main JS File -->
  <script src=\"";
        // line 1079
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets2/js/main.js"), "html", null, true);
        echo "\"></script>
  ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "base2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1388 => 1079,  1382 => 1076,  1378 => 1075,  1374 => 1074,  1370 => 1073,  1366 => 1072,  1362 => 1071,  1358 => 1070,  1353 => 1069,  1343 => 1068,  1321 => 1050,  1311 => 1049,  1246 => 991,  1217 => 963,  1175 => 931,  1148 => 913,  1139 => 907,  1130 => 901,  1121 => 895,  1112 => 889,  844 => 624,  834 => 617,  824 => 610,  814 => 603,  804 => 596,  486 => 280,  476 => 279,  408 => 216,  382 => 193,  365 => 179,  233 => 50,  227 => 46,  217 => 45,  205 => 37,  199 => 34,  192 => 30,  187 => 28,  183 => 27,  179 => 26,  175 => 25,  171 => 24,  166 => 23,  156 => 22,  137 => 8,  124 => 1081,  122 => 1068,  115 => 1063,  113 => 1049,  109 => 1047,  107 => 931,  103 => 929,  101 => 279,  94 => 274,  92 => 45,  84 => 39,  82 => 22,  71 => 14,  67 => 13,  61 => 9,  59 => 8,  50 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">

<head>
  <meta charset=\"utf-8\">
  <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">

  {% block titre %} <title>4Roues Assurance Back</title> {% endblock %}
  <meta content=\"\" name=\"description\">
  <meta content=\"\" name=\"keywords\">

  <!-- Favicons -->
  <link href=\"{{ asset('assets2/img/logoo.png ') }}\" rel=\"icon\">
  <link href=\"{{ asset('assets2/img/logoo.png') }}\" rel=\"apple-touch-icon\">

  <!-- Google Fonts -->
  
  <link href=\"https://fonts.gstatic.com\" rel=\"preconnect\">
  <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i\" rel=\"stylesheet\">

  <!-- Vendor CSS Files -->
  {% block css %}
 <link href=\"{{ asset ('assets2/vendor/bootstrap/css/bootstrap.min.css') }}\" rel=\"stylesheet\">
\t\t\t<link href=\"{{ asset ('assets2/vendor/bootstrap-icons/bootstrap-icons.css') }}\" rel=\"stylesheet\">
\t\t\t<link href=\"{{ asset ('assets2/vendor/boxicons/css/boxicons.min.css') }}\" rel=\"stylesheet\">
\t\t\t<link href=\"{{ asset ('assets2/vendor/quill/quill.snow.css') }}\" rel=\"stylesheet\">
\t\t\t<link href=\"{{ asset ('assets2/vendor/quill/quill.bubble.css') }}\" rel=\"stylesheet\">
\t\t\t<link href=\"{{ asset ('assets2/vendor/remixicon/remixicon.css') }}\" rel=\"stylesheet\">
\t\t\t<link
\t\t\thref=\"{{ asset ('assets2/vendor/simple-datatables/style.css') }}\" rel=\"stylesheet\">

  <!-- Template Main CSS File -->
  <link rel=\"stylesheet\" href=\"https://kit.fontawesome.com/6e6a7baaeb.css\" crossorigin=\"anonymous\">
  <link href=\"{{ asset ('assets2/css/styleCS.css') }}\" rel=\"stylesheet\">

   <!-- bouton CSS  -->
  <link href=\"{{ asset ('assets2/css/btn.css') }}\" rel=\"stylesheet\">
  {% endblock %}

</head>

<body>

  <!-- ======= Header ======= -->
  {% block header %}
  <header id=\"header\" class=\"header fixed-top d-flex align-items-center\">

    <div class=\"d-flex align-items-center justify-content-between\">
      <a href=\"index.html\" class=\"logo d-flex align-items-center\">
        <img src=\"{{ asset ('assets2/img/logoo.png') }}\" alt=\"\">
        <span class=\"d-none d-lg-block\">4Roues Assurances</span>
      </a>
      <i class=\"bi bi-list toggle-sidebar-btn\"></i>
    </div><!-- End Logo -->

    <div class=\"search-bar\">
      <form class=\"search-form d-flex align-items-center\" method=\"POST\" action=\"#\">
        <input type=\"text\" name=\"query\" placeholder=\"Search\" title=\"Enter search keyword\">
        <button type=\"submit\" title=\"Search\"><i class=\"bi bi-search\"></i></button>
      </form>
    </div><!-- End Search Bar -->

    <nav class=\"header-nav ms-auto\">
      <ul class=\"d-flex align-items-center\">

        <li class=\"nav-item d-block d-lg-none\">
          <a class=\"nav-link nav-icon search-bar-toggle \" href=\"#\">
            <i class=\"bi bi-search\"></i>
          </a>
        </li><!-- End Search Icon-->

        <li class=\"nav-item dropdown\">

          <a class=\"nav-link nav-icon\" href=\"#\" data-bs-toggle=\"dropdown\">
            <i class=\"bi bi-bell\"></i>
            <span class=\"badge bg-primary badge-number\">4</span>
          </a><!-- End Notification Icon -->

          <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications\">
            <li class=\"dropdown-header\">
              You have 4 new notifications
              <a href=\"#\"><span class=\"badge rounded-pill bg-primary p-2 ms-2\">View all</span></a>
            </li>
            <li>
              <hr class=\"dropdown-divider\">
            </li>

            <li class=\"notification-item\">
              <i class=\"bi bi-exclamation-circle text-warning\"></i>
              <div>
                <h4>Lorem Ipsum</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>30 min. ago</p>
              </div>
            </li>

            <li>
              <hr class=\"dropdown-divider\">
            </li>

            <li class=\"notification-item\">
              <i class=\"bi bi-x-circle text-danger\"></i>
              <div>
                <h4>Atque rerum nesciunt</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>1 hr. ago</p>
              </div>
            </li>

            <li>
              <hr class=\"dropdown-divider\">
            </li>

            <li class=\"notification-item\">
              <i class=\"bi bi-check-circle text-success\"></i>
              <div>
                <h4>Sit rerum fuga</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>2 hrs. ago</p>
              </div>
            </li>

            <li>
              <hr class=\"dropdown-divider\">
            </li>

            <li class=\"notification-item\">
              <i class=\"bi bi-info-circle text-primary\"></i>
              <div>
                <h4>Dicta reprehenderit</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>4 hrs. ago</p>
              </div>
            </li>

            <li>
              <hr class=\"dropdown-divider\">
            </li>
            <li class=\"dropdown-footer\">
              <a href=\"#\">Show all notifications</a>
            </li>

          </ul><!-- End Notification Dropdown Items -->

        </li><!-- End Notification Nav -->

        <li class=\"nav-item dropdown\">

          <a class=\"nav-link nav-icon\" href=\"#\" data-bs-toggle=\"dropdown\">
            <i class=\"bi bi-chat-left-text\"></i>
            <span class=\"badge bg-success badge-number\">3</span>
          </a><!-- End Messages Icon -->

          <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow messages\">
            <li class=\"dropdown-header\">
              You have 3 new messages
              <a href=\"#\"><span class=\"badge rounded-pill bg-primary p-2 ms-2\">View all</span></a>
            </li>
            <li>
              <hr class=\"dropdown-divider\">
            </li>

            <li class=\"message-item\">
              <a href=\"#\">
                <img src=\"assets/img/messages-1.jpg\" alt=\"\" class=\"rounded-circle\">
                <div>
                  <h4>Maria Hudson</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>4 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class=\"dropdown-divider\">
            </li>

            <li class=\"message-item\">
              <a href=\"#\">
                <img src=\"{{ asset ('assets2/img/messages-2.jpg') }}\" alt=\"\" class=\"rounded-circle\">
                <div>
                  <h4>Anna Nelson</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>6 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class=\"dropdown-divider\">
            </li>

            <li class=\"message-item\">
              <a href=\"#\">
                <img src=\"{{ asset ('assets2/img/messages-3.jpg') }}\" alt=\"\" class=\"rounded-circle\">
                <div>
                  <h4>David Muldon</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>8 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class=\"dropdown-divider\">
            </li>

            <li class=\"dropdown-footer\">
              <a href=\"#\">Show all messages</a>
            </li>

          </ul><!-- End Messages Dropdown Items -->

        </li><!-- End Messages Nav -->

        <li class=\"nav-item dropdown pe-3\">

          <a class=\"nav-link nav-profile d-flex align-items-center pe-0\" href=\"#\" data-bs-toggle=\"dropdown\">
            <img src=\"{{ asset ('assets2/img/profile1-img.jpg') }}\" alt=\"Profile\" class=\"rounded-circle\">
            <span class=\"d-none d-md-block dropdown-toggle ps-2\">Z.Akrem</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow profile\">
            <li class=\"dropdown-header\">
              <h6>Zaghdoudi Akrem</h6>
              <span>Assureur</span>
            </li>
            <li>
              <hr class=\"dropdown-divider\">
            </li>

            <li>
              <a class=\"dropdown-item d-flex align-items-center\" href=\"users-profile.html\">
                <i class=\"bi bi-person\"></i>
                <span>Mon Profile</span>
              </a>
            </li>
            <li>
              <hr class=\"dropdown-divider\">
            </li>

            <li>
              <a class=\"dropdown-item d-flex align-items-center\" href=\"users-profile.html\">
                <i class=\"bi bi-gear\"></i>
                <span>Parametres du compte</span>
              </a>
            </li>
            <li>
              <hr class=\"dropdown-divider\">
            </li>

            <li>
              <a class=\"dropdown-item d-flex align-items-center\" href=\"pages-faq.html\">
                <i class=\"bi bi-question-circle\"></i>
                <span> Help</span>
              </a>
            </li>
            <li>
              <hr class=\"dropdown-divider\">
            </li>

            <li>
              <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                <i class=\"bi bi-box-arrow-right\"></i>
                <span>Deconnecter</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header>
  {% endblock %}
  <!-- End Header -->



  <!-- ======= Sidebar ======= -->
  {% block body %}
  <!-- End Sidebar-->

  <main id=\"main\" class=\"main\">

    <div class=\"pagetitle\">
      <h1>Dashboard</h1>
      <nav>
        <ol class=\"breadcrumb\">
          <li class=\"breadcrumb-item\"><a href=\"index.html\">Home</a></li>
          <li class=\"breadcrumb-item active\">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class=\"section dashboard\">
      <div class=\"row\">

        <!-- Left side columns -->
        <div class=\"col-lg-8\">
          <div class=\"row\">

            <!-- Sales Card -->
            <div class=\"col-xxl-4 col-md-6\">
              <div class=\"card info-card sales-card\">

                <div class=\"filter\">
                  <a class=\"icon\" href=\"#\" data-bs-toggle=\"dropdown\"><i class=\"bi bi-three-dots\"></i></a>
                  <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\">
                    <li class=\"dropdown-header text-start\">
                      <h6>Filter</h6>
                    </li>

                    <li><a class=\"dropdown-item\" href=\"#\">Today</a></li>
                    <li><a class=\"dropdown-item\" href=\"#\">This Month</a></li>
                    <li><a class=\"dropdown-item\" href=\"#\">This Year</a></li>
                  </ul>
                </div>

                <div class=\"card-body\">
                  <h5 class=\"card-title\">Sales <span>| Today</span></h5>

                  <div class=\"d-flex align-items-center\">
                    <div class=\"card-icon rounded-circle d-flex align-items-center justify-content-center\">
                      <i class=\"bi bi-cart\"></i>
                    </div>
                    <div class=\"ps-3\">
                      <h6>145</h6>
                      <span class=\"text-success small pt-1 fw-bold\">12%</span> <span class=\"text-muted small pt-2 ps-1\">increase</span>

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Sales Card -->

            <!-- Revenue Card -->
            <div class=\"col-xxl-4 col-md-6\">
              <div class=\"card info-card revenue-card\">

                <div class=\"filter\">
                  <a class=\"icon\" href=\"#\" data-bs-toggle=\"dropdown\"><i class=\"bi bi-three-dots\"></i></a>
                  <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\">
                    <li class=\"dropdown-header text-start\">
                      <h6>Filter</h6>
                    </li>

                    <li><a class=\"dropdown-item\" href=\"#\">Today</a></li>
                    <li><a class=\"dropdown-item\" href=\"#\">This Month</a></li>
                    <li><a class=\"dropdown-item\" href=\"#\">This Year</a></li>
                  </ul>
                </div>

                <div class=\"card-body\">
                  <h5 class=\"card-title\">Revenue <span>| This Month</span></h5>

                  <div class=\"d-flex align-items-center\">
                    <div class=\"card-icon rounded-circle d-flex align-items-center justify-content-center\">
                      <i class=\"bi bi-currency-dollar\"></i>
                    </div>
                    <div class=\"ps-3\">
                      <h6>\$3,264</h6>
                      <span class=\"text-success small pt-1 fw-bold\">8%</span> <span class=\"text-muted small pt-2 ps-1\">increase</span>

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Revenue Card -->

            <!-- Customers Card -->
            <div class=\"col-xxl-4 col-xl-12\">

              <div class=\"card info-card customers-card\">

                <div class=\"filter\">
                  <a class=\"icon\" href=\"#\" data-bs-toggle=\"dropdown\"><i class=\"bi bi-three-dots\"></i></a>
                  <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\">
                    <li class=\"dropdown-header text-start\">
                      <h6>Filter</h6>
                    </li>

                    <li><a class=\"dropdown-item\" href=\"#\">Today</a></li>
                    <li><a class=\"dropdown-item\" href=\"#\">This Month</a></li>
                    <li><a class=\"dropdown-item\" href=\"#\">This Year</a></li>
                  </ul>
                </div>

                <div class=\"card-body\">
                  <h5 class=\"card-title\">Customers <span>| This Year</span></h5>

                  <div class=\"d-flex align-items-center\">
                    <div class=\"card-icon rounded-circle d-flex align-items-center justify-content-center\">
                      <i class=\"bi bi-people\"></i>
                    </div>
                    <div class=\"ps-3\">
                      <h6>1244</h6>
                      <span class=\"text-danger small pt-1 fw-bold\">12%</span> <span class=\"text-muted small pt-2 ps-1\">decrease</span>

                    </div>
                  </div>

                </div>
              </div>

            </div><!-- End Customers Card -->

            <!-- Reports -->
            <div class=\"col-12\">
              <div class=\"card\">

                <div class=\"filter\">
                  <a class=\"icon\" href=\"#\" data-bs-toggle=\"dropdown\"><i class=\"bi bi-three-dots\"></i></a>
                  <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\">
                    <li class=\"dropdown-header text-start\">
                      <h6>Filter</h6>
                    </li>

                    <li><a class=\"dropdown-item\" href=\"#\">Today</a></li>
                    <li><a class=\"dropdown-item\" href=\"#\">This Month</a></li>
                    <li><a class=\"dropdown-item\" href=\"#\">This Year</a></li>
                  </ul>
                </div>

                <div class=\"card-body\">
                  <h5 class=\"card-title\">Reports <span>/Today</span></h5>

                  <!-- Line Chart -->
                  <div id=\"reportsChart\"></div>

                  <script>
                    document.addEventListener(\"DOMContentLoaded\", () => {
                      new ApexCharts(document.querySelector(\"#reportsChart\"), {
                        series: [{
                          name: 'Sales',
                          data: [31, 40, 28, 51, 42, 82, 56],
                        }, {
                          name: 'Revenue',
                          data: [11, 32, 45, 32, 34, 52, 41]
                        }, {
                          name: 'Customers',
                          data: [15, 11, 32, 18, 9, 24, 11]
                        }],
                        chart: {
                          height: 350,
                          type: 'area',
                          toolbar: {
                            show: false
                          },
                        },
                        markers: {
                          size: 4
                        },
                        colors: ['#4154f1', '#2eca6a', '#ff771d'],
                        fill: {
                          type: \"gradient\",
                          gradient: {
                            shadeIntensity: 1,
                            opacityFrom: 0.3,
                            opacityTo: 0.4,
                            stops: [0, 90, 100]
                          }
                        },
                        dataLabels: {
                          enabled: false
                        },
                        stroke: {
                          curve: 'smooth',
                          width: 2
                        },
                        xaxis: {
                          type: 'datetime',
                          categories: [\"2018-09-19T00:00:00.000Z\", \"2018-09-19T01:30:00.000Z\", \"2018-09-19T02:30:00.000Z\", \"2018-09-19T03:30:00.000Z\", \"2018-09-19T04:30:00.000Z\", \"2018-09-19T05:30:00.000Z\", \"2018-09-19T06:30:00.000Z\"]
                        },
                        tooltip: {
                          x: {
                            format: 'dd/MM/yy HH:mm'
                          },
                        }
                      }).render();
                    });
                  </script>
                  <!-- End Line Chart -->

                </div>

              </div>
            </div><!-- End Reports -->

            <!-- Recent Sales -->
            <div class=\"col-12\">
              <div class=\"card recent-sales overflow-auto\">

                <div class=\"filter\">
                  <a class=\"icon\" href=\"#\" data-bs-toggle=\"dropdown\"><i class=\"bi bi-three-dots\"></i></a>
                  <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\">
                    <li class=\"dropdown-header text-start\">
                      <h6>Filter</h6>
                    </li>

                    <li><a class=\"dropdown-item\" href=\"#\">Today</a></li>
                    <li><a class=\"dropdown-item\" href=\"#\">This Month</a></li>
                    <li><a class=\"dropdown-item\" href=\"#\">This Year</a></li>
                  </ul>
                </div>

                <div class=\"card-body\">
                  <h5 class=\"card-title\">Recent Sales <span>| Today</span></h5>

                  <table class=\"table table-borderless datatable\">
                    <thead>
                      <tr>
                        <th scope=\"col\">#</th>
                        <th scope=\"col\">Customer</th>
                        <th scope=\"col\">Product</th>
                        <th scope=\"col\">Price</th>
                        <th scope=\"col\">Status</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope=\"row\"><a href=\"#\">#2457</a></th>
                        <td>Brandon Jacob</td>
                        <td><a href=\"#\" class=\"text-primary\">At praesentium minu</a></td>
                        <td>\$64</td>
                        <td><span class=\"badge bg-success\">Approved</span></td>
                      </tr>
                      <tr>
                        <th scope=\"row\"><a href=\"#\">#2147</a></th>
                        <td>Bridie Kessler</td>
                        <td><a href=\"#\" class=\"text-primary\">Blanditiis dolor omnis similique</a></td>
                        <td>\$47</td>
                        <td><span class=\"badge bg-warning\">Pending</span></td>
                      </tr>
                      <tr>
                        <th scope=\"row\"><a href=\"#\">#2049</a></th>
                        <td>Ashleigh Langosh</td>
                        <td><a href=\"#\" class=\"text-primary\">At recusandae consectetur</a></td>
                        <td>\$147</td>
                        <td><span class=\"badge bg-success\">Approved</span></td>
                      </tr>
                      <tr>
                        <th scope=\"row\"><a href=\"#\">#2644</a></th>
                        <td>Angus Grady</td>
                        <td><a href=\"#\" class=\"text-primar\">Ut voluptatem id earum et</a></td>
                        <td>\$67</td>
                        <td><span class=\"badge bg-danger\">Rejected</span></td>
                      </tr>
                      <tr>
                        <th scope=\"row\"><a href=\"#\">#2644</a></th>
                        <td>Raheem Lehner</td>
                        <td><a href=\"#\" class=\"text-primary\">Sunt similique distinctio</a></td>
                        <td>\$165</td>
                        <td><span class=\"badge bg-success\">Approved</span></td>
                      </tr>
                    </tbody>
                  </table>

                </div>

              </div>
            </div><!-- End Recent Sales -->

            <!-- Top Selling -->
            <div class=\"col-12\">
              <div class=\"card top-selling overflow-auto\">

                <div class=\"filter\">
                  <a class=\"icon\" href=\"#\" data-bs-toggle=\"dropdown\"><i class=\"bi bi-three-dots\"></i></a>
                  <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\">
                    <li class=\"dropdown-header text-start\">
                      <h6>Filter</h6>
                    </li>

                    <li><a class=\"dropdown-item\" href=\"#\">Today</a></li>
                    <li><a class=\"dropdown-item\" href=\"#\">This Month</a></li>
                    <li><a class=\"dropdown-item\" href=\"#\">This Year</a></li>
                  </ul>
                </div>

                <div class=\"card-body pb-0\">
                  <h5 class=\"card-title\">Top Selling <span>| Today</span></h5>

                  <table class=\"table table-borderless\">
                    <thead>
                      <tr>
                        <th scope=\"col\">Preview</th>
                        <th scope=\"col\">Product</th>
                        <th scope=\"col\">Price</th>
                        <th scope=\"col\">Sold</th>
                        <th scope=\"col\">Revenue</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope=\"row\"><a href=\"#\"><img src=\"{{ asset ('assets2/img/product-1.jpg') }}\" alt=\"\"></a></th>
                        <td><a href=\"#\" class=\"text-primary fw-bold\">Ut inventore ipsa voluptas nulla</a></td>
                        <td>\$64</td>
                        <td class=\"fw-bold\">124</td>
                        <td>\$5,828</td>
                      </tr>
                      <tr>
                        <th scope=\"row\"><a href=\"#\"><img src=\"{{ asset ('assets2/img/product-2.jpg') }}\" alt=\"\"></a></th>
                        <td><a href=\"#\" class=\"text-primary fw-bold\">Exercitationem similique doloremque</a></td>
                        <td>\$46</td>
                        <td class=\"fw-bold\">98</td>
                        <td>\$4,508</td>
                      </tr>
                      <tr>
                        <th scope=\"row\"><a href=\"#\"><img src=\"{{ asset ('assets2/img/product-3.jpg') }}\" alt=\"\"></a></th>
                        <td><a href=\"#\" class=\"text-primary fw-bold\">Doloribus nisi exercitationem</a></td>
                        <td>\$59</td>
                        <td class=\"fw-bold\">74</td>
                        <td>\$4,366</td>
                      </tr>
                      <tr>
                        <th scope=\"row\"><a href=\"#\"><img src=\"{{ asset ('assets2/img/product-4.jpg') }}\" alt=\"\"></a></th>
                        <td><a href=\"#\" class=\"text-primary fw-bold\">Officiis quaerat sint rerum error</a></td>
                        <td>\$32</td>
                        <td class=\"fw-bold\">63</td>
                        <td>\$2,016</td>
                      </tr>
                      <tr>
                        <th scope=\"row\"><a href=\"#\"><img src=\"{{ asset ('assets2/img/product-5.jpg') }}\" alt=\"\"></a></th>
                        <td><a href=\"#\" class=\"text-primary fw-bold\">Sit unde debitis delectus repellendus</a></td>
                        <td>\$79</td>
                        <td class=\"fw-bold\">41</td>
                        <td>\$3,239</td>
                      </tr>
                    </tbody>
                  </table>

                </div>

              </div>
            </div><!-- End Top Selling -->

          </div>
        </div><!-- End Left side columns -->

        <!-- Right side columns -->
        <div class=\"col-lg-4\">

          <!-- Recent Activity -->
          <div class=\"card\">
            <div class=\"filter\">
              <a class=\"icon\" href=\"#\" data-bs-toggle=\"dropdown\"><i class=\"bi bi-three-dots\"></i></a>
              <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\">
                <li class=\"dropdown-header text-start\">
                  <h6>Filter</h6>
                </li>

                <li><a class=\"dropdown-item\" href=\"#\">Today</a></li>
                <li><a class=\"dropdown-item\" href=\"#\">This Month</a></li>
                <li><a class=\"dropdown-item\" href=\"#\">This Year</a></li>
              </ul>
            </div>

            <div class=\"card-body\">
              <h5 class=\"card-title\">Recent Activity <span>| Today</span></h5>

              <div class=\"activity\">

                <div class=\"activity-item d-flex\">
                  <div class=\"activite-label\">32 min</div>
                  <i class='bi bi-circle-fill activity-badge text-success align-self-start'></i>
                  <div class=\"activity-content\">
                    Quia quae rerum <a href=\"#\" class=\"fw-bold text-dark\">explicabo officiis</a> beatae
                  </div>
                </div><!-- End activity item-->

                <div class=\"activity-item d-flex\">
                  <div class=\"activite-label\">56 min</div>
                  <i class='bi bi-circle-fill activity-badge text-danger align-self-start'></i>
                  <div class=\"activity-content\">
                    Voluptatem blanditiis blanditiis eveniet
                  </div>
                </div><!-- End activity item-->

                <div class=\"activity-item d-flex\">
                  <div class=\"activite-label\">2 hrs</div>
                  <i class='bi bi-circle-fill activity-badge text-primary align-self-start'></i>
                  <div class=\"activity-content\">
                    Voluptates corrupti molestias voluptatem
                  </div>
                </div><!-- End activity item-->

                <div class=\"activity-item d-flex\">
                  <div class=\"activite-label\">1 day</div>
                  <i class='bi bi-circle-fill activity-badge text-info align-self-start'></i>
                  <div class=\"activity-content\">
                    Tempore autem saepe <a href=\"#\" class=\"fw-bold text-dark\">occaecati voluptatem</a> tempore
                  </div>
                </div><!-- End activity item-->

                <div class=\"activity-item d-flex\">
                  <div class=\"activite-label\">2 days</div>
                  <i class='bi bi-circle-fill activity-badge text-warning align-self-start'></i>
                  <div class=\"activity-content\">
                    Est sit eum reiciendis exercitationem
                  </div>
                </div><!-- End activity item-->

                <div class=\"activity-item d-flex\">
                  <div class=\"activite-label\">4 weeks</div>
                  <i class='bi bi-circle-fill activity-badge text-muted align-self-start'></i>
                  <div class=\"activity-content\">
                    Dicta dolorem harum nulla eius. Ut quidem quidem sit quas
                  </div>
                </div><!-- End activity item-->

              </div>

            </div>
          </div><!-- End Recent Activity -->

          <!-- Budget Report -->
          <div class=\"card\">
            <div class=\"filter\">
              <a class=\"icon\" href=\"#\" data-bs-toggle=\"dropdown\"><i class=\"bi bi-three-dots\"></i></a>
              <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\">
                <li class=\"dropdown-header text-start\">
                  <h6>Filter</h6>
                </li>

                <li><a class=\"dropdown-item\" href=\"#\">Today</a></li>
                <li><a class=\"dropdown-item\" href=\"#\">This Month</a></li>
                <li><a class=\"dropdown-item\" href=\"#\">This Year</a></li>
              </ul>
            </div>

            <div class=\"card-body pb-0\">
              <h5 class=\"card-title\">Budget Report <span>| This Month</span></h5>

              <div id=\"budgetChart\" style=\"min-height: 400px;\" class=\"echart\"></div>

              <script>
                document.addEventListener(\"DOMContentLoaded\", () => {
                  var budgetChart = echarts.init(document.querySelector(\"#budgetChart\")).setOption({
                    legend: {
                      data: ['Allocated Budget', 'Actual Spending']
                    },
                    radar: {
                      // shape: 'circle',
                      indicator: [{
                          name: 'Sales',
                          max: 6500
                        },
                        {
                          name: 'Administration',
                          max: 16000
                        },
                        {
                          name: 'Information Technology',
                          max: 30000
                        },
                        {
                          name: 'Customer Support',
                          max: 38000
                        },
                        {
                          name: 'Development',
                          max: 52000
                        },
                        {
                          name: 'Marketing',
                          max: 25000
                        }
                      ]
                    },
                    series: [{
                      name: 'Budget vs spending',
                      type: 'radar',
                      data: [{
                          value: [4200, 3000, 20000, 35000, 50000, 18000],
                          name: 'Allocated Budget'
                        },
                        {
                          value: [5000, 14000, 28000, 26000, 42000, 21000],
                          name: 'Actual Spending'
                        }
                      ]
                    }]
                  });
                });
              </script>

            </div>
          </div><!-- End Budget Report -->

          <!-- Website Traffic -->
          <div class=\"card\">
            <div class=\"filter\">
              <a class=\"icon\" href=\"#\" data-bs-toggle=\"dropdown\"><i class=\"bi bi-three-dots\"></i></a>
              <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\">
                <li class=\"dropdown-header text-start\">
                  <h6>Filter</h6>
                </li>

                <li><a class=\"dropdown-item\" href=\"#\">Today</a></li>
                <li><a class=\"dropdown-item\" href=\"#\">This Month</a></li>
                <li><a class=\"dropdown-item\" href=\"#\">This Year</a></li>
              </ul>
            </div>

            <div class=\"card-body pb-0\">
              <h5 class=\"card-title\">Website Traffic <span>| Today</span></h5>

              <div id=\"trafficChart\" style=\"min-height: 400px;\" class=\"echart\"></div>

              <script>
                document.addEventListener(\"DOMContentLoaded\", () => {
                  echarts.init(document.querySelector(\"#trafficChart\")).setOption({
                    tooltip: {
                      trigger: 'item'
                    },
                    legend: {
                      top: '5%',
                      left: 'center'
                    },
                    series: [{
                      name: 'Access From',
                      type: 'pie',
                      radius: ['40%', '70%'],
                      avoidLabelOverlap: false,
                      label: {
                        show: false,
                        position: 'center'
                      },
                      emphasis: {
                        label: {
                          show: true,
                          fontSize: '18',
                          fontWeight: 'bold'
                        }
                      },
                      labelLine: {
                        show: false
                      },
                      data: [{
                          value: 1048,
                          name: 'Search Engine'
                        },
                        {
                          value: 735,
                          name: 'Direct'
                        },
                        {
                          value: 580,
                          name: 'Email'
                        },
                        {
                          value: 484,
                          name: 'Union Ads'
                        },
                        {
                          value: 300,
                          name: 'Video Ads'
                        }
                      ]
                    }]
                  });
                });
              </script>

            </div>
          </div><!-- End Website Traffic -->

          <!-- News & Updates Traffic -->
          <div class=\"card\">
            <div class=\"filter\">
              <a class=\"icon\" href=\"#\" data-bs-toggle=\"dropdown\"><i class=\"bi bi-three-dots\"></i></a>
              <ul class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\">
                <li class=\"dropdown-header text-start\">
                  <h6>Filter</h6>
                </li>

                <li><a class=\"dropdown-item\" href=\"#\">Today</a></li>
                <li><a class=\"dropdown-item\" href=\"#\">This Month</a></li>
                <li><a class=\"dropdown-item\" href=\"#\">This Year</a></li>
              </ul>
            </div>

            <div class=\"card-body pb-0\">
              <h5 class=\"card-title\">News &amp; Updates <span>| Today</span></h5>

              <div class=\"news\">
                <div class=\"post-item clearfix\">
                  <img src=\"{{ asset ('assets2/img/news-1.jpg') }}\" alt=\"\">
                  <h4><a href=\"#\">Nihil blanditiis at in nihil autem</a></h4>
                  <p>Sit recusandae non aspernatur laboriosam. Quia enim eligendi sed ut harum...</p>
                </div>

                <div class=\"post-item clearfix\">
                  <img src=\"{{ asset ('assets2/img/news-2.jpg') }}\" alt=\"\">
                  <h4><a href=\"#\">Quidem autem et impedit</a></h4>
                  <p>Illo nemo neque maiores vitae officiis cum eum turos elan dries werona nande...</p>
                </div>

                <div class=\"post-item clearfix\">
                  <img src=\"{{ asset ('assets2/img/news-3.jpg') }}\" alt=\"\">
                  <h4><a href=\"#\">Id quia et et ut maxime similique occaecati ut</a></h4>
                  <p>Fugiat voluptas vero eaque accusantium eos. Consequuntur sed ipsam et totam...</p>
                </div>

                <div class=\"post-item clearfix\">
                  <img src=\"{{ asset ('assets2/img/news-4.jpg') }}\" alt=\"\">
                  <h4><a href=\"#\">Laborum corporis quo dara net para</a></h4>
                  <p>Qui enim quia optio. Eligendi aut asperiores enim repellendusvel rerum cuder...</p>
                </div>

                <div class=\"post-item clearfix\">
                  <img src=\"{{ asset ('assets2/img/news-5.jpg') }}\" alt=\"\">
                  <h4><a href=\"#\">Et dolores corrupti quae illo quod dolor</a></h4>
                  <p>Odit ut eveniet modi reiciendis. Atque cupiditate libero beatae dignissimos eius...</p>
                </div>

              </div><!-- End sidebar recent posts-->

            </div>
          </div><!-- End News & Updates -->

        </div><!-- End Right side columns -->

      </div>
    </section>

  </main>
  {% endblock %} 
  <!-- End #main -->
  {% block Sidebar %} 
<!-- ======= Sidebar ======= -->
<aside id=\"sidebar\" class=\"sidebar\">

    <ul class=\"sidebar-nav\" id=\"sidebar-nav\">

      <li class=\"nav-item\">
        <a class=\"nav-link \" href=\"/back\">
          <i class=\"bi bi-grid\"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <!-- Forms Nav -->
     <li class=\"nav-item\">
        <a class=\"nav-link collapsed\" data-bs-target=\"#forms-nav\" data-bs-toggle=\"collapse\" href=\"#\">
          <i class=\"bi bi-journal-text\"></i><span>Contrats</span><i class=\"bi bi-chevron-down ms-auto\"></i>
        </a>
        <ul id=\"forms-nav\" class=\"nav-content collapse \" data-bs-parent=\"#sidebar-nav\">
          <li>
            <a href=\"/contrat/new\">
              <i class=\"bi bi-circle\"></i><span>Ajouter Contrat</span>
            </a>
          </li>
          <li>
            <a href=\"/contrat/mod\">
              <i class=\"bi bi-circle\"></i><span>Modifier|Supprimer  Contrat</span>
            </a>
          </li>
          <li>
            <a href=\"/contrat/sup\">
              {# <i class=\"bi bi-circle\"></i><span>Contrat</span> #}
            </a>
          </li>
          <li>
            
          </li>
        </ul>
      </li>
      <!-- End Forms Nav -->

    <!-- Forms Nav -->
\t  <li class=\"nav-item\">
        <a class=\"nav-link collapsed\" data-bs-target=\"#charts-nav\" data-bs-toggle=\"collapse\" href=\"#\">
          <i class=\"bi bi-menu-button-wide\"></i><span>Offres</span><i class=\"bi bi-chevron-down ms-auto\"></i>
        </a>
        <ul id=\"charts-nav\" class=\"nav-content collapse \" data-bs-parent=\"#sidebar-nav\">
          <li>
            <a href=\"/offre/new\">
              <i class=\"bi bi-circle\"></i><span>Ajouter Offre</span>
            </a>
          </li>
          <li>
            <a href=\"/offre/mod\">
              <i class=\"bi bi-circle\"></i><span>Modifier|Supprimer Offre</span>
            </a>
          </li>
          <li>
            <a href=\"/offre/sup\">
              {# <i class=\"bi bi-circle\"></i><span>Supprimer Offre</span> #}
            </a>
          </li>
        </ul>
      </li><!-- End Charts Nav -->

      <li class=\"nav-item\">
        <a class=\"nav-link collapsed\" data-bs-target=\"#tables-nav\" data-bs-toggle=\"collapse\" href=\"#\">
          <i class=\"bi bi-layout-text-window-reverse\"></i><span>Tables</span><i class=\"bi bi-chevron-down ms-auto\"></i>
        </a>
        <ul id=\"tables-nav\" class=\"nav-content collapse \" data-bs-parent=\"#sidebar-nav\">
          <li><a href=\"/contrat/\"><i class=\"bi bi-circle\"></i>Table des Contrats</a></li>
          <li>
            <a href=\"/offre/\">
              <i class=\"bi bi-circle\"></i><span>Table des Offres</span>
            </a>
          </li>
        </ul>
      </li><!-- End Tables Nav -->

      

      

      
\t  </br>
    </br>
    </br>
    </br>
    </br>
    </br>
    </br>
    </br>
    </br>
    </br>
\t<li class=\"nav-heading\">___________________________________________________________________________________________</li>
      </br>
      <li class=\"nav-item\">
        <a class=\"nav-link collapsed\" href=\"users-profile.html\">
          <i class=\"bi bi-person\"></i>
          <span>Profile</span>
        </a>
      </li><!-- End Profile Page Nav -->
      <li class=\"nav-item\">
        <a class=\"nav-link collapsed\" href=\"pages-login.html\">
          <i class=\"bi bi-box-arrow-in-right\"></i>
          <span>Deconnecter</span>
        </a>
      </li><!-- End Login Page Nav -->

    

    </ul>

  </aside>
<!-- End Sidebar-->
{% endblock %}

  <!-- ======= Footer ======= -->
  {% block footer %}
  <footer id=\"footer\" class=\"footer\">
    <div class=\"copyright\">
      &copy; Copyright <strong><span>4RouesAssurances</span></strong>. All Rights Reserved
    </div>
    <div class=\"credits\">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
      Designed by <a href=\"#\">Coding Squad</a>
    </div>
  </footer><!-- End Footer -->
  {% endblock %}

  <a href=\"#\" class=\"back-to-top d-flex align-items-center justify-content-center\">
  <i class=\"bi bi-arrow-up-short\"></i></a>

  <!-- Vendor JS Files -->
  {% block js %}
  <script src=\"{{ asset ('assets2/vendor/apexcharts/apexcharts.min.js') }}\"></script>
  <script src=\"{{ asset ('assets2/vendor/bootstrap/js/bootstrap.bundle.min.js') }}\"></script>
  <script src=\"{{ asset ('assets2/vendor/chart.js/chart.umd.js') }}\"></script>
  <script src=\"{{ asset ('assets2/vendor/echarts/echarts.min.js') }}\"></script>
  <script src=\"{{ asset ('assets2/vendor/quill/quill.min.js') }}\"></script>
  <script src=\"{{ asset ('assets2/vendor/simple-datatables/simple-datatables.js') }}\"></script>
  <script src=\"{{ asset ('assets2/vendor/tinymce/tinymce.min.js') }}\"></script>
  <script src=\"{{ asset ('assets2/vendor/php-email-form/validate.js') }}\"></script>

  <!-- Template Main JS File -->
  <script src=\"{{ asset ('assets2/js/main.js') }}\"></script>
  {% endblock %}

</body>

</html>", "base2.html.twig", "C:\\xampp\\htdocs\\PiDEV_V06\\PiDEV_V06\\templates\\base2.html.twig");
    }
}