<?php

/* TwigBundle:Exception:error.html.twig */
class __TwigTemplate_4064f36a52b1c8dc796304891ad6adbb08a1cbae9081b23421cffedadac69a4a extends Twig_Template
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
        $__internal_3d8bd3f452eb34f76de10a44edd00bf7bf5630bcd3d99352879dad4e51775295 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d8bd3f452eb34f76de10a44edd00bf7bf5630bcd3d99352879dad4e51775295->enter($__internal_3d8bd3f452eb34f76de10a44edd00bf7bf5630bcd3d99352879dad4e51775295_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.html.twig"));

        $__internal_93d2beea758dd09701c3ac647988cd0a009c6ed05713faa7dc32d32e5fa3d583 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93d2beea758dd09701c3ac647988cd0a009c6ed05713faa7dc32d32e5fa3d583->enter($__internal_93d2beea758dd09701c3ac647988cd0a009c6ed05713faa7dc32d32e5fa3d583_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.html.twig"));

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
                    <p>Error - Page Not Found!sss</p>
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
        
        $__internal_3d8bd3f452eb34f76de10a44edd00bf7bf5630bcd3d99352879dad4e51775295->leave($__internal_3d8bd3f452eb34f76de10a44edd00bf7bf5630bcd3d99352879dad4e51775295_prof);

        
        $__internal_93d2beea758dd09701c3ac647988cd0a009c6ed05713faa7dc32d32e5fa3d583->leave($__internal_93d2beea758dd09701c3ac647988cd0a009c6ed05713faa7dc32d32e5fa3d583_prof);

    }

    // line 14
    public function block_css($context, array $blocks = array())
    {
        $__internal_9954953f6f6ebeae3cd74d47cad59790a3a542a3db89bb24908c5de8afed4ed1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9954953f6f6ebeae3cd74d47cad59790a3a542a3db89bb24908c5de8afed4ed1->enter($__internal_9954953f6f6ebeae3cd74d47cad59790a3a542a3db89bb24908c5de8afed4ed1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        $__internal_b5fed364c9cd6dd34e89395c962ace08f2e37856752f9c06ec0b1a1a3b49f4c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5fed364c9cd6dd34e89395c962ace08f2e37856752f9c06ec0b1a1a3b49f4c2->enter($__internal_b5fed364c9cd6dd34e89395c962ace08f2e37856752f9c06ec0b1a1a3b49f4c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

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
        
        $__internal_b5fed364c9cd6dd34e89395c962ace08f2e37856752f9c06ec0b1a1a3b49f4c2->leave($__internal_b5fed364c9cd6dd34e89395c962ace08f2e37856752f9c06ec0b1a1a3b49f4c2_prof);

        
        $__internal_9954953f6f6ebeae3cd74d47cad59790a3a542a3db89bb24908c5de8afed4ed1->leave($__internal_9954953f6f6ebeae3cd74d47cad59790a3a542a3db89bb24908c5de8afed4ed1_prof);

    }

    // line 91
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_b3a31fba921158719f55a5fea11aaf43ddb3f75ce42bb5544d686321c7a6a8bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3a31fba921158719f55a5fea11aaf43ddb3f75ce42bb5544d686321c7a6a8bf->enter($__internal_b3a31fba921158719f55a5fea11aaf43ddb3f75ce42bb5544d686321c7a6a8bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_b69fb5f339fefec31c83c2a93a3b7c44b3275040aa8e101d55f7178cf34e1c42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b69fb5f339fefec31c83c2a93a3b7c44b3275040aa8e101d55f7178cf34e1c42->enter($__internal_b69fb5f339fefec31c83c2a93a3b7c44b3275040aa8e101d55f7178cf34e1c42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

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
        
        $__internal_b69fb5f339fefec31c83c2a93a3b7c44b3275040aa8e101d55f7178cf34e1c42->leave($__internal_b69fb5f339fefec31c83c2a93a3b7c44b3275040aa8e101d55f7178cf34e1c42_prof);

        
        $__internal_b3a31fba921158719f55a5fea11aaf43ddb3f75ce42bb5544d686321c7a6a8bf->leave($__internal_b3a31fba921158719f55a5fea11aaf43ddb3f75ce42bb5544d686321c7a6a8bf_prof);

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
        return array (  238 => 106,  232 => 103,  228 => 102,  224 => 101,  220 => 100,  216 => 99,  212 => 98,  208 => 97,  204 => 96,  200 => 95,  196 => 94,  192 => 92,  183 => 91,  170 => 25,  165 => 23,  161 => 22,  157 => 21,  153 => 20,  149 => 19,  145 => 18,  140 => 16,  137 => 15,  128 => 14,  114 => 108,  112 => 91,  103 => 85,  44 => 28,  42 => 14,  27 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
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
     
{% block css %}
    <!-- Bootstrap CSS File -->
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/africanuser/lib/bootstrap/css/bootstrap.min.css') }}\"/>
    <!-- Libraries CSS Files -->
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/africanuser/lib/font-awesome/css/font-awesome.min.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/africanuser/lib/animate/animate.min.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/africanuser/lib/ionicons/css/ionicons.min.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/africanuser/lib/owlcarousel/assets/owl.carousel.min.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/africanuser/lib/magnific-popup/magnific-popup.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/africanuser/lib/ionicons/css/ionicons.min.css') }}\"/>
    <!-- Main Stylesheet File -->
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/africanuser/css/style.css') }}\"/>

{% endblock css %}

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
                    <p>Error - Page Not Found!sss</p>
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
        &copy; Copyright 2017 - {{ \"now\"|date(\"Y\") }} <strong>Brainwit System</strong>. All Rights Reserved
      </div>
      <div class=\"credits\"></div>
    </div>
  </footer><!-- #footer -->

{% block javascript %}

<!-- JS -->
<script src=\"{{ asset('bundles/africanuser/lib/jquery/jquery.min.js') }}\"></script>
<script src=\"{{ asset('bundles/africanuser/lib/jquery/jquery-migrate.min.js') }}\"></script>
<script src=\"{{ asset('bundles/africanuser/lib/bootstrap/js/bootstrap.bundle.min.js') }}\"></script>
<script src=\"{{ asset('bundles/africanuser/lib/easing/easing.min.js') }}\"></script>
<script src=\"{{ asset('bundles/africanuser/lib/superfish/hoverIntent.js') }}\"></script>
<script src=\"{{ asset('bundles/africanuser/lib/superfish/superfish.min.js') }}\"></script>
<script src=\"{{ asset('bundles/africanuser/lib/wow/wow.min.js') }}\"></script>
<script src=\"{{ asset('bundles/africanuser/lib/owlcarousel/owl.carousel.min.js') }}\"></script>
<script src=\"{{ asset('bundles/africanuser/lib/magnific-popup/magnific-popup.min.js') }}\"></script>
<script src=\"{{ asset('bundles/africanuser/lib/sticky/sticky.js') }}\"></script>

<!-- Template Main Javascript File -->
<script src=\"{{ asset('bundles/africanuser/js/main.js') }}\"></script>
{% endblock javascript %}

</body>

</html>
", "TwigBundle:Exception:error.html.twig", "/home/pratik/web/brainwit/app/Resources/TwigBundle/views/Exception/error.html.twig");
    }
}
