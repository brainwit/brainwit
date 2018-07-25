<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_c73a916adef90294612b3e613cdcdd32c28385911d292c192a5857bfa5acb0c3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c64180b94c12a05116be0e5814b296ccc64059e1b48b1689ba6668b5329a3275 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c64180b94c12a05116be0e5814b296ccc64059e1b48b1689ba6668b5329a3275->enter($__internal_c64180b94c12a05116be0e5814b296ccc64059e1b48b1689ba6668b5329a3275_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_ad3460e790b1570dbe4371560aef8bfe179f5ef35c86efa8b6e396f36f7b0b7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad3460e790b1570dbe4371560aef8bfe179f5ef35c86efa8b6e396f36f7b0b7c->enter($__internal_ad3460e790b1570dbe4371560aef8bfe179f5ef35c86efa8b6e396f36f7b0b7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c64180b94c12a05116be0e5814b296ccc64059e1b48b1689ba6668b5329a3275->leave($__internal_c64180b94c12a05116be0e5814b296ccc64059e1b48b1689ba6668b5329a3275_prof);

        
        $__internal_ad3460e790b1570dbe4371560aef8bfe179f5ef35c86efa8b6e396f36f7b0b7c->leave($__internal_ad3460e790b1570dbe4371560aef8bfe179f5ef35c86efa8b6e396f36f7b0b7c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_28692941eca78284471ad25f7ca7863994a0f88dea79f72771ec34b05a498c89 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28692941eca78284471ad25f7ca7863994a0f88dea79f72771ec34b05a498c89->enter($__internal_28692941eca78284471ad25f7ca7863994a0f88dea79f72771ec34b05a498c89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_b266c4cc6e978976423627c2a21ad0d9964e493b7376481b4ee72c4b53cc179b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b266c4cc6e978976423627c2a21ad0d9964e493b7376481b4ee72c4b53cc179b->enter($__internal_b266c4cc6e978976423627c2a21ad0d9964e493b7376481b4ee72c4b53cc179b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_b266c4cc6e978976423627c2a21ad0d9964e493b7376481b4ee72c4b53cc179b->leave($__internal_b266c4cc6e978976423627c2a21ad0d9964e493b7376481b4ee72c4b53cc179b_prof);

        
        $__internal_28692941eca78284471ad25f7ca7863994a0f88dea79f72771ec34b05a498c89->leave($__internal_28692941eca78284471ad25f7ca7863994a0f88dea79f72771ec34b05a498c89_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_dd9e6c4cd47389a0ccd3ac73c2a294a10e7fe1eeedd84d7ffac9d6a6f5dfdfa3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd9e6c4cd47389a0ccd3ac73c2a294a10e7fe1eeedd84d7ffac9d6a6f5dfdfa3->enter($__internal_dd9e6c4cd47389a0ccd3ac73c2a294a10e7fe1eeedd84d7ffac9d6a6f5dfdfa3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_af03e17fef2763b641fff909299da92c3c57666aaf07112b6c305d56d49c89b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af03e17fef2763b641fff909299da92c3c57666aaf07112b6c305d56d49c89b2->enter($__internal_af03e17fef2763b641fff909299da92c3c57666aaf07112b6c305d56d49c89b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, ($context["file"] ?? $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, ($context["line"] ?? $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt(($context["filename"] ?? $this->getContext($context, "filename")), ($context["line"] ?? $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_af03e17fef2763b641fff909299da92c3c57666aaf07112b6c305d56d49c89b2->leave($__internal_af03e17fef2763b641fff909299da92c3c57666aaf07112b6c305d56d49c89b2_prof);

        
        $__internal_dd9e6c4cd47389a0ccd3ac73c2a294a10e7fe1eeedd84d7ffac9d6a6f5dfdfa3->leave($__internal_dd9e6c4cd47389a0ccd3ac73c2a294a10e7fe1eeedd84d7ffac9d6a6f5dfdfa3_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "/home/pratik/web/brainwit/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
