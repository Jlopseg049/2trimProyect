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

/* index/headerIndex.html.twig */
class __TwigTemplate_825945d01773310c1ad0aa3c2e80f652 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index/headerIndex.html.twig"));

        // line 1
        echo "<section id=\"hero\">
    <div class=\"hero-container\">
      <a href=\"index.html\" class=\"hero-logo\" data-aos=\"zoom-in\"><img src=\"assets/img/hero-logo.png\" alt=\"\"></a>
      <h1 data-aos=\"zoom-in\">Welcome To StromZu</h1>
      <a data-aos=\"fade-up\" data-aos-delay=\"200\" href=\"#about\" class=\"btn-get-started scrollto\">¡COMIENZA YA!</a>
    </div>
  </section><!-- End Hero -->

  <!-- ======= Header ======= -->
  <header id=\"header\" class=\"d-flex align-items-center\">
    <div class=\"container d-flex align-items-center justify-content-between\">

      <div class=\"logo\">
        <a href=\"index.html\"><img src=\"assets/img/logo.png\" alt=\"\" class=\"img-fluid\"></a>
      </div>

      <nav id=\"navbar\" class=\"navbar\">
        <ul>
          <li><a class=\"nav-link scrollto active\" href=\"#hero\">Home</a></li>
          <li><a class=\"nav-link scrollto\" href=\"#about\">About</a></li>
          <li><a class=\"nav-link scrollto\" href=\"#services\">Services</a></li>
          <li><a class=\"nav-link scrollto\" href=\"#portfolio\">Portfolio</a></li>
          <li><a class=\"nav-link scrollto\" href=\"#team\">Team</a></li>
          <li><a class=\"nav-link scrollto\" href=\"#pricing\">Pricing</a></li>
          <li class=\"dropdown\"><a href=\"#\"><span>Drop Down</span> <i class=\"bi bi-chevron-down\"></i></a>
            <ul>
              <li><a href=\"#\">Drop Down 1</a></li>
              <li class=\"dropdown\"><a href=\"#\"><span>Deep Drop Down</span> <i class=\"bi bi-chevron-right\"></i></a>
                <ul>
                  <li><a href=\"#\">Deep Drop Down 1</a></li>
                  <li><a href=\"#\">Deep Drop Down 2</a></li>
                  <li><a href=\"#\">Deep Drop Down 3</a></li>
                  <li><a href=\"#\">Deep Drop Down 4</a></li>
                  <li><a href=\"#\">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href=\"#\">Drop Down 2</a></li>
              <li><a href=\"#\">Drop Down 3</a></li>
              <li><a href=\"#\">Drop Down 4</a></li>
            </ul>
          </li>
          <li><a class=\"nav-link scrollto\" href=\"#contact\">Contact</a></li>
        </ul>
        <i class=\"bi bi-list mobile-nav-toggle\"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "index/headerIndex.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"hero\">
    <div class=\"hero-container\">
      <a href=\"index.html\" class=\"hero-logo\" data-aos=\"zoom-in\"><img src=\"assets/img/hero-logo.png\" alt=\"\"></a>
      <h1 data-aos=\"zoom-in\">Welcome To StromZu</h1>
      <a data-aos=\"fade-up\" data-aos-delay=\"200\" href=\"#about\" class=\"btn-get-started scrollto\">¡COMIENZA YA!</a>
    </div>
  </section><!-- End Hero -->

  <!-- ======= Header ======= -->
  <header id=\"header\" class=\"d-flex align-items-center\">
    <div class=\"container d-flex align-items-center justify-content-between\">

      <div class=\"logo\">
        <a href=\"index.html\"><img src=\"assets/img/logo.png\" alt=\"\" class=\"img-fluid\"></a>
      </div>

      <nav id=\"navbar\" class=\"navbar\">
        <ul>
          <li><a class=\"nav-link scrollto active\" href=\"#hero\">Home</a></li>
          <li><a class=\"nav-link scrollto\" href=\"#about\">About</a></li>
          <li><a class=\"nav-link scrollto\" href=\"#services\">Services</a></li>
          <li><a class=\"nav-link scrollto\" href=\"#portfolio\">Portfolio</a></li>
          <li><a class=\"nav-link scrollto\" href=\"#team\">Team</a></li>
          <li><a class=\"nav-link scrollto\" href=\"#pricing\">Pricing</a></li>
          <li class=\"dropdown\"><a href=\"#\"><span>Drop Down</span> <i class=\"bi bi-chevron-down\"></i></a>
            <ul>
              <li><a href=\"#\">Drop Down 1</a></li>
              <li class=\"dropdown\"><a href=\"#\"><span>Deep Drop Down</span> <i class=\"bi bi-chevron-right\"></i></a>
                <ul>
                  <li><a href=\"#\">Deep Drop Down 1</a></li>
                  <li><a href=\"#\">Deep Drop Down 2</a></li>
                  <li><a href=\"#\">Deep Drop Down 3</a></li>
                  <li><a href=\"#\">Deep Drop Down 4</a></li>
                  <li><a href=\"#\">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href=\"#\">Drop Down 2</a></li>
              <li><a href=\"#\">Drop Down 3</a></li>
              <li><a href=\"#\">Drop Down 4</a></li>
            </ul>
          </li>
          <li><a class=\"nav-link scrollto\" href=\"#contact\">Contact</a></li>
        </ul>
        <i class=\"bi bi-list mobile-nav-toggle\"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->", "index/headerIndex.html.twig", "C:\\Users\\Kazu\\Desktop\\symfonyGit\\templates\\index\\headerIndex.html.twig");
    }
}
