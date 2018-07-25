<?php

/* TwigBundle:Exception:error.html.twig */
class __TwigTemplate_29a1301001ee7018834443572f9d91d243202a97586d290144d1ec908aa4077d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'css' => array($this, 'block_css'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
  <meta charset=\"utf-8\">
  <title>Brainwit System</title>
  <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">
  <meta content=\"\" name=\"keywords\">
  <meta content=\"\" name=\"description\">
  <!-- Favicons -->
  <link href=\"favicon.ico\" rel=\"icon\">
  <!-- Google Fonts -->
  <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700\" rel=\"stylesheet\">
     
";
        // line 14
        $this->displayBlock('css', $context, $blocks);
        // line 28
        echo "
\t<style>
\t.error-page{background:#50d8af;position:absolute;height: 100%;
\t   width: 100%;}
\t.error-page .error-inner{height:100%;display:table;text-align: center;
\t   width: 100%;}
\t.error-page .table-inner{display:table-cell;height:100%;vertical-align:middle;}
\t.error-page h1{font-size:150px;color:#fb503b;margin:0;}
\t.error-page p{font-size:30px;}
\t @media (max-width: 768px){.error-page p{font-size:21px;}.error-page h1{font-size:100px;}}

\t</style>

<body id=\"body\">
  <!--==========================
    Top Bar
  ============================-->
  <section id=\"topbar\" class=\"d-none d-lg-block\">
    <div class=\"container clearfix\">
      <div class=\"contact-info float-left\">
        <i class=\"fa fa-envelope-o\"></i> <a href=\"mailto:sales@brainwit.co.in\">sales@brainwit.co.in</a>
        <i class=\"fa fa-phone\"></i> +91 8320349417
      </div>
    </div>
  </section>

  <!--==========================
    Header
  ============================-->
  <header id=\"header\">
  \t<div class=\"container\">
      <div id=\"logo\" class=\"pull-left\">
          <a href=\"/\"><img src=\"img/logo.png\"></a>
      </div>
    </div>
  </header><!-- #header -->

  <!--==========================
    Intro Section
  ============================-->
    <section id=\"intro\">
    \t<div class=\"error-page\">
         <div class=\"error-inner\">
              <div class=\"table-inner\">
                    <h1>404</h1>
                    <p>Error - Page Not Found!</p>
              </div>
         </div>
\t   </div>
    </section><!-- #intro -->

  <!--==========================
    Footer
  ============================-->
  <footer id=\"footer\">
    <div class=\"container\">
      <div class=\"copyright\">
        &copy; Copyright 2017 - ";
        // line 85
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " <strong>Brainwit System</strong>. All Rights Reserved
      </div>
      <div class=\"credits\"></div>
    </div>
  </footer><!-- #footer -->

";
        // line 91
        $this->displayBlock('javascript', $context, $blocks);
        // line 108
        echo "
</body>

</html>
";
    }

    // line 14
    public function block_css($context, array $blocks = array())
    {
        // line 15
        echo "    <!-- Bootstrap CSS File -->
    <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/africanuser/lib/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\"/>
    <!-- Libraries CSS Files -->
    <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/africanuser/lib/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/africanuser/lib/animate/animate.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/africanuser/lib/ionicons/css/ionicons.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/africanuser/lib/owlcarousel/assets/owl.carousel.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/africanuser/lib/magnific-popup/magnific-popup.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/africanuser/lib/ionicons/css/ionicons.min.css"), "html", null, true);
        echo "\"/>
    <!-- Main Stylesheet File -->
    <link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/africanuser/css/style.css"), "html", null, true);
        echo "\"/>

";
    }

    // line 91
    public function block_javascript($context, array $blocks = array())
    {
        // line 92
        echo "
<!-- JS -->
<script src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/africanuser/lib/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/africanuser/lib/jquery/jquery-migrate.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/africanuser/lib/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/africanuser/lib/easing/easing.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/africanuser/lib/superfish/hoverIntent.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/africanuser/lib/superfish/superfish.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/africanuser/lib/wow/wow.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/africanuser/lib/owlcarousel/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/africanuser/lib/magnific-popup/magnific-popup.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/africanuser/lib/sticky/sticky.js"), "html", null, true);
        echo "\"></script>

<!-- Template Main Javascript File -->
<script src=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/africanuser/js/main.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  208 => 106,  202 => 103,  198 => 102,  194 => 101,  190 => 100,  186 => 99,  182 => 98,  178 => 97,  174 => 96,  170 => 95,  166 => 94,  162 => 92,  159 => 91,  152 => 25,  147 => 23,  143 => 22,  139 => 21,  135 => 20,  131 => 19,  127 => 18,  122 => 16,  119 => 15,  116 => 14,  108 => 108,  106 => 91,  97 => 85,  38 => 28,  36 => 14,  21 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "TwigBundle:Exception:error.html.twig", "/home/pratik/web/brainwit/app/Resources/TwigBundle/views/Exception/error.html.twig");
    }
}
