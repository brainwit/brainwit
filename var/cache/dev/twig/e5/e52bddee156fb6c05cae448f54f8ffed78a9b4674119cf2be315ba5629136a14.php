<?php

/* base.html.twig */
class __TwigTemplate_0f7392102991309cf27a0a919ffad8cb4a1ac73166363ccbc7b612edd07f4f0c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_71d47a2e4c60d5706ad89722513859da9652a257cf60093ac698971f038d6db4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71d47a2e4c60d5706ad89722513859da9652a257cf60093ac698971f038d6db4->enter($__internal_71d47a2e4c60d5706ad89722513859da9652a257cf60093ac698971f038d6db4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_e838f9931f14e5ad1dc4192d8288e82a0845bd0da319ad395fc732d1c43db052 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e838f9931f14e5ad1dc4192d8288e82a0845bd0da319ad395fc732d1c43db052->enter($__internal_e838f9931f14e5ad1dc4192d8288e82a0845bd0da319ad395fc732d1c43db052_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_71d47a2e4c60d5706ad89722513859da9652a257cf60093ac698971f038d6db4->leave($__internal_71d47a2e4c60d5706ad89722513859da9652a257cf60093ac698971f038d6db4_prof);

        
        $__internal_e838f9931f14e5ad1dc4192d8288e82a0845bd0da319ad395fc732d1c43db052->leave($__internal_e838f9931f14e5ad1dc4192d8288e82a0845bd0da319ad395fc732d1c43db052_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_8441f4d999d991a788e4d0fa27277abf34bdd0d775592579d2a04dfe1fedaf33 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8441f4d999d991a788e4d0fa27277abf34bdd0d775592579d2a04dfe1fedaf33->enter($__internal_8441f4d999d991a788e4d0fa27277abf34bdd0d775592579d2a04dfe1fedaf33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_39f9693728d159741db1ac8500c641128fd708f0035e099cf1d008d4f11d1996 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39f9693728d159741db1ac8500c641128fd708f0035e099cf1d008d4f11d1996->enter($__internal_39f9693728d159741db1ac8500c641128fd708f0035e099cf1d008d4f11d1996_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_39f9693728d159741db1ac8500c641128fd708f0035e099cf1d008d4f11d1996->leave($__internal_39f9693728d159741db1ac8500c641128fd708f0035e099cf1d008d4f11d1996_prof);

        
        $__internal_8441f4d999d991a788e4d0fa27277abf34bdd0d775592579d2a04dfe1fedaf33->leave($__internal_8441f4d999d991a788e4d0fa27277abf34bdd0d775592579d2a04dfe1fedaf33_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_58cf492df86952f7992028972469fc00a10f5b784388d67340aa2f551353e368 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58cf492df86952f7992028972469fc00a10f5b784388d67340aa2f551353e368->enter($__internal_58cf492df86952f7992028972469fc00a10f5b784388d67340aa2f551353e368_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_b41e41f0c3ecc294bff1ffc6e39c8f624fd67946c27975dd674be18d04ce09bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b41e41f0c3ecc294bff1ffc6e39c8f624fd67946c27975dd674be18d04ce09bb->enter($__internal_b41e41f0c3ecc294bff1ffc6e39c8f624fd67946c27975dd674be18d04ce09bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_b41e41f0c3ecc294bff1ffc6e39c8f624fd67946c27975dd674be18d04ce09bb->leave($__internal_b41e41f0c3ecc294bff1ffc6e39c8f624fd67946c27975dd674be18d04ce09bb_prof);

        
        $__internal_58cf492df86952f7992028972469fc00a10f5b784388d67340aa2f551353e368->leave($__internal_58cf492df86952f7992028972469fc00a10f5b784388d67340aa2f551353e368_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_2bff9e7752dbb642f57c66e6dfb428c2e6f8e3a4be738018d7cd4d21430c7002 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2bff9e7752dbb642f57c66e6dfb428c2e6f8e3a4be738018d7cd4d21430c7002->enter($__internal_2bff9e7752dbb642f57c66e6dfb428c2e6f8e3a4be738018d7cd4d21430c7002_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b2149f1411c4839c857635069f442f0ff39113d4c53eaaa7da6e4d20bd63eb65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2149f1411c4839c857635069f442f0ff39113d4c53eaaa7da6e4d20bd63eb65->enter($__internal_b2149f1411c4839c857635069f442f0ff39113d4c53eaaa7da6e4d20bd63eb65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_b2149f1411c4839c857635069f442f0ff39113d4c53eaaa7da6e4d20bd63eb65->leave($__internal_b2149f1411c4839c857635069f442f0ff39113d4c53eaaa7da6e4d20bd63eb65_prof);

        
        $__internal_2bff9e7752dbb642f57c66e6dfb428c2e6f8e3a4be738018d7cd4d21430c7002->leave($__internal_2bff9e7752dbb642f57c66e6dfb428c2e6f8e3a4be738018d7cd4d21430c7002_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_aefe0e56205438501b7f88fecaa17a1c2ff63eb43f468453f48fa18b24205178 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aefe0e56205438501b7f88fecaa17a1c2ff63eb43f468453f48fa18b24205178->enter($__internal_aefe0e56205438501b7f88fecaa17a1c2ff63eb43f468453f48fa18b24205178_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_2449ac3f1820ccad871171e275ca594e210bacadd6baca57fd8483fa4f396c48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2449ac3f1820ccad871171e275ca594e210bacadd6baca57fd8483fa4f396c48->enter($__internal_2449ac3f1820ccad871171e275ca594e210bacadd6baca57fd8483fa4f396c48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_2449ac3f1820ccad871171e275ca594e210bacadd6baca57fd8483fa4f396c48->leave($__internal_2449ac3f1820ccad871171e275ca594e210bacadd6baca57fd8483fa4f396c48_prof);

        
        $__internal_aefe0e56205438501b7f88fecaa17a1c2ff63eb43f468453f48fa18b24205178->leave($__internal_aefe0e56205438501b7f88fecaa17a1c2ff63eb43f468453f48fa18b24205178_prof);

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
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
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
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/home/pratik/web/brainwit/app/Resources/views/base.html.twig");
    }
}
