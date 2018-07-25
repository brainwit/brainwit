<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_2d53362d5fd36a3d30e2f56b1c274010097ef26b923f47ddb38f1001b86b65b3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0375b97ca1bd32c86106014dd35ec8391d1f68ab44ec0bd300e30e138f6783e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0375b97ca1bd32c86106014dd35ec8391d1f68ab44ec0bd300e30e138f6783e3->enter($__internal_0375b97ca1bd32c86106014dd35ec8391d1f68ab44ec0bd300e30e138f6783e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_e3aad2577da8adaf9d14a8e45493e663e31bd6fee78d35fd7d169d31288b99eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3aad2577da8adaf9d14a8e45493e663e31bd6fee78d35fd7d169d31288b99eb->enter($__internal_e3aad2577da8adaf9d14a8e45493e663e31bd6fee78d35fd7d169d31288b99eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_0375b97ca1bd32c86106014dd35ec8391d1f68ab44ec0bd300e30e138f6783e3->leave($__internal_0375b97ca1bd32c86106014dd35ec8391d1f68ab44ec0bd300e30e138f6783e3_prof);

        
        $__internal_e3aad2577da8adaf9d14a8e45493e663e31bd6fee78d35fd7d169d31288b99eb->leave($__internal_e3aad2577da8adaf9d14a8e45493e663e31bd6fee78d35fd7d169d31288b99eb_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_a9abdeeb314f812f89d8c835e58c5457e6221196164425574b3b881ee0f9709f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9abdeeb314f812f89d8c835e58c5457e6221196164425574b3b881ee0f9709f->enter($__internal_a9abdeeb314f812f89d8c835e58c5457e6221196164425574b3b881ee0f9709f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_2bbebe342c780ec452bd8018c4554789e8ac7e40fa129a112b4e8f6b6706ad85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bbebe342c780ec452bd8018c4554789e8ac7e40fa129a112b4e8f6b6706ad85->enter($__internal_2bbebe342c780ec452bd8018c4554789e8ac7e40fa129a112b4e8f6b6706ad85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_2bbebe342c780ec452bd8018c4554789e8ac7e40fa129a112b4e8f6b6706ad85->leave($__internal_2bbebe342c780ec452bd8018c4554789e8ac7e40fa129a112b4e8f6b6706ad85_prof);

        
        $__internal_a9abdeeb314f812f89d8c835e58c5457e6221196164425574b3b881ee0f9709f->leave($__internal_a9abdeeb314f812f89d8c835e58c5457e6221196164425574b3b881ee0f9709f_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/home/pratik/web/brainwit/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
