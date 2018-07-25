<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_02d845a49bdd57a4be066814fe8a9768b23f387ad2777b19ef633ba46046768f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1d7e24f2f300bd821edf6d09e8a7da5f2ec272cbd221d94f6dd25df6d3a92359 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d7e24f2f300bd821edf6d09e8a7da5f2ec272cbd221d94f6dd25df6d3a92359->enter($__internal_1d7e24f2f300bd821edf6d09e8a7da5f2ec272cbd221d94f6dd25df6d3a92359_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_2f0e113ce875de71d94db16cf599bd5615a1339206fdcb5cc6514ffe101313e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f0e113ce875de71d94db16cf599bd5615a1339206fdcb5cc6514ffe101313e6->enter($__internal_2f0e113ce875de71d94db16cf599bd5615a1339206fdcb5cc6514ffe101313e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1d7e24f2f300bd821edf6d09e8a7da5f2ec272cbd221d94f6dd25df6d3a92359->leave($__internal_1d7e24f2f300bd821edf6d09e8a7da5f2ec272cbd221d94f6dd25df6d3a92359_prof);

        
        $__internal_2f0e113ce875de71d94db16cf599bd5615a1339206fdcb5cc6514ffe101313e6->leave($__internal_2f0e113ce875de71d94db16cf599bd5615a1339206fdcb5cc6514ffe101313e6_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7b166df1c8f76367ce79cb273714abd48c83aea8aace0b627755f751f96217e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b166df1c8f76367ce79cb273714abd48c83aea8aace0b627755f751f96217e6->enter($__internal_7b166df1c8f76367ce79cb273714abd48c83aea8aace0b627755f751f96217e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8e15e5ac32ea32ed5272d2db487c8caca861222894b7538924dbddd9f3a6ae08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e15e5ac32ea32ed5272d2db487c8caca861222894b7538924dbddd9f3a6ae08->enter($__internal_8e15e5ac32ea32ed5272d2db487c8caca861222894b7538924dbddd9f3a6ae08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_8e15e5ac32ea32ed5272d2db487c8caca861222894b7538924dbddd9f3a6ae08->leave($__internal_8e15e5ac32ea32ed5272d2db487c8caca861222894b7538924dbddd9f3a6ae08_prof);

        
        $__internal_7b166df1c8f76367ce79cb273714abd48c83aea8aace0b627755f751f96217e6->leave($__internal_7b166df1c8f76367ce79cb273714abd48c83aea8aace0b627755f751f96217e6_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_cbb2c4146af21dd6daa829bf067bf8c436d049c1e57143105672130e312e7dc3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cbb2c4146af21dd6daa829bf067bf8c436d049c1e57143105672130e312e7dc3->enter($__internal_cbb2c4146af21dd6daa829bf067bf8c436d049c1e57143105672130e312e7dc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b4bd6019616d63a962f22508aee078deead59bfbace6dfd6c137efcf8a8b3cd7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4bd6019616d63a962f22508aee078deead59bfbace6dfd6c137efcf8a8b3cd7->enter($__internal_b4bd6019616d63a962f22508aee078deead59bfbace6dfd6c137efcf8a8b3cd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_b4bd6019616d63a962f22508aee078deead59bfbace6dfd6c137efcf8a8b3cd7->leave($__internal_b4bd6019616d63a962f22508aee078deead59bfbace6dfd6c137efcf8a8b3cd7_prof);

        
        $__internal_cbb2c4146af21dd6daa829bf067bf8c436d049c1e57143105672130e312e7dc3->leave($__internal_cbb2c4146af21dd6daa829bf067bf8c436d049c1e57143105672130e312e7dc3_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/home/pratik/web/brainwit/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
