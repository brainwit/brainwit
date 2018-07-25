<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_4474101226d255a74a7722c10385d40bcfba8957126e175f8449abe3558173aa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c107bf5effedd145b2907b457063397f6e1d8fc4152c92a9c73cdde964385830 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c107bf5effedd145b2907b457063397f6e1d8fc4152c92a9c73cdde964385830->enter($__internal_c107bf5effedd145b2907b457063397f6e1d8fc4152c92a9c73cdde964385830_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_41f7079a57d162ffd43731cb43d7a7ae91e72eb7921947e51a9e7c1e010c81c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41f7079a57d162ffd43731cb43d7a7ae91e72eb7921947e51a9e7c1e010c81c6->enter($__internal_41f7079a57d162ffd43731cb43d7a7ae91e72eb7921947e51a9e7c1e010c81c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c107bf5effedd145b2907b457063397f6e1d8fc4152c92a9c73cdde964385830->leave($__internal_c107bf5effedd145b2907b457063397f6e1d8fc4152c92a9c73cdde964385830_prof);

        
        $__internal_41f7079a57d162ffd43731cb43d7a7ae91e72eb7921947e51a9e7c1e010c81c6->leave($__internal_41f7079a57d162ffd43731cb43d7a7ae91e72eb7921947e51a9e7c1e010c81c6_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_7560c48d7c8374ba38f3e0b8ac21c42161a27dff91556ba80c381a09962a6b50 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7560c48d7c8374ba38f3e0b8ac21c42161a27dff91556ba80c381a09962a6b50->enter($__internal_7560c48d7c8374ba38f3e0b8ac21c42161a27dff91556ba80c381a09962a6b50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_b468add8960fee94ef0084e8cfc3d80b9db47e18c107822b39dba74b7c4c17f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b468add8960fee94ef0084e8cfc3d80b9db47e18c107822b39dba74b7c4c17f8->enter($__internal_b468add8960fee94ef0084e8cfc3d80b9db47e18c107822b39dba74b7c4c17f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_b468add8960fee94ef0084e8cfc3d80b9db47e18c107822b39dba74b7c4c17f8->leave($__internal_b468add8960fee94ef0084e8cfc3d80b9db47e18c107822b39dba74b7c4c17f8_prof);

        
        $__internal_7560c48d7c8374ba38f3e0b8ac21c42161a27dff91556ba80c381a09962a6b50->leave($__internal_7560c48d7c8374ba38f3e0b8ac21c42161a27dff91556ba80c381a09962a6b50_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_690ba856635abba0c8f687005613f9da58c4d680918b0378e00af5abac1306f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_690ba856635abba0c8f687005613f9da58c4d680918b0378e00af5abac1306f1->enter($__internal_690ba856635abba0c8f687005613f9da58c4d680918b0378e00af5abac1306f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_a95e853a920f1dcf3bcfa11efc16b643550a85c936cb6cb9e533f7d8d813171e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a95e853a920f1dcf3bcfa11efc16b643550a85c936cb6cb9e533f7d8d813171e->enter($__internal_a95e853a920f1dcf3bcfa11efc16b643550a85c936cb6cb9e533f7d8d813171e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_a95e853a920f1dcf3bcfa11efc16b643550a85c936cb6cb9e533f7d8d813171e->leave($__internal_a95e853a920f1dcf3bcfa11efc16b643550a85c936cb6cb9e533f7d8d813171e_prof);

        
        $__internal_690ba856635abba0c8f687005613f9da58c4d680918b0378e00af5abac1306f1->leave($__internal_690ba856635abba0c8f687005613f9da58c4d680918b0378e00af5abac1306f1_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_032f50348e11ac200d6fecf8814d86179efaf8b133a1a347e4e7c8c6ff9514ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_032f50348e11ac200d6fecf8814d86179efaf8b133a1a347e4e7c8c6ff9514ac->enter($__internal_032f50348e11ac200d6fecf8814d86179efaf8b133a1a347e4e7c8c6ff9514ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_80d029600573a5dd13f7fc4d23660c76f713dda56c277dd6563c7ee6b0288057 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80d029600573a5dd13f7fc4d23660c76f713dda56c277dd6563c7ee6b0288057->enter($__internal_80d029600573a5dd13f7fc4d23660c76f713dda56c277dd6563c7ee6b0288057_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_80d029600573a5dd13f7fc4d23660c76f713dda56c277dd6563c7ee6b0288057->leave($__internal_80d029600573a5dd13f7fc4d23660c76f713dda56c277dd6563c7ee6b0288057_prof);

        
        $__internal_032f50348e11ac200d6fecf8814d86179efaf8b133a1a347e4e7c8c6ff9514ac->leave($__internal_032f50348e11ac200d6fecf8814d86179efaf8b133a1a347e4e7c8c6ff9514ac_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "/home/pratik/web/brainwit/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
