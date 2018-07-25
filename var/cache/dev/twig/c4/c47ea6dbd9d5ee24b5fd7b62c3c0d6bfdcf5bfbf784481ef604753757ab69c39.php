<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_ddbd517106433870c1648854a6afeadd58b2cc4e2a3d776bd94ad89ca1cd9b46 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_501aa15185847207dc40318890de6814e9c50cbb50b574ccf155ace6771bd4b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_501aa15185847207dc40318890de6814e9c50cbb50b574ccf155ace6771bd4b3->enter($__internal_501aa15185847207dc40318890de6814e9c50cbb50b574ccf155ace6771bd4b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_b6f96d3c8e7cae65c2af8c781ea9f255111321bdafcced53c21cae8dfb7ea8a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6f96d3c8e7cae65c2af8c781ea9f255111321bdafcced53c21cae8dfb7ea8a4->enter($__internal_b6f96d3c8e7cae65c2af8c781ea9f255111321bdafcced53c21cae8dfb7ea8a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_501aa15185847207dc40318890de6814e9c50cbb50b574ccf155ace6771bd4b3->leave($__internal_501aa15185847207dc40318890de6814e9c50cbb50b574ccf155ace6771bd4b3_prof);

        
        $__internal_b6f96d3c8e7cae65c2af8c781ea9f255111321bdafcced53c21cae8dfb7ea8a4->leave($__internal_b6f96d3c8e7cae65c2af8c781ea9f255111321bdafcced53c21cae8dfb7ea8a4_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_1605ade13604937ae4f4c330903509699c829ee6f19766036a63ca3b0296c4d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1605ade13604937ae4f4c330903509699c829ee6f19766036a63ca3b0296c4d1->enter($__internal_1605ade13604937ae4f4c330903509699c829ee6f19766036a63ca3b0296c4d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_2541fbeef1e2fe3cc84875df4f8f8520238dce584eab7c23b33a60e11b78f83d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2541fbeef1e2fe3cc84875df4f8f8520238dce584eab7c23b33a60e11b78f83d->enter($__internal_2541fbeef1e2fe3cc84875df4f8f8520238dce584eab7c23b33a60e11b78f83d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 27
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 29
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_2541fbeef1e2fe3cc84875df4f8f8520238dce584eab7c23b33a60e11b78f83d->leave($__internal_2541fbeef1e2fe3cc84875df4f8f8520238dce584eab7c23b33a60e11b78f83d_prof);

        
        $__internal_1605ade13604937ae4f4c330903509699c829ee6f19766036a63ca3b0296c4d1->leave($__internal_1605ade13604937ae4f4c330903509699c829ee6f19766036a63ca3b0296c4d1_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_35831ca4689520b758be6fc212e889c0ed89a1d01d74bf85822e5c20e31b1f95 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35831ca4689520b758be6fc212e889c0ed89a1d01d74bf85822e5c20e31b1f95->enter($__internal_35831ca4689520b758be6fc212e889c0ed89a1d01d74bf85822e5c20e31b1f95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_7a1423e7fdf9055d56440a466a3399ad6fa13682d5717d4555ebbd7341847146 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a1423e7fdf9055d56440a466a3399ad6fa13682d5717d4555ebbd7341847146->enter($__internal_7a1423e7fdf9055d56440a466a3399ad6fa13682d5717d4555ebbd7341847146_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_7a1423e7fdf9055d56440a466a3399ad6fa13682d5717d4555ebbd7341847146->leave($__internal_7a1423e7fdf9055d56440a466a3399ad6fa13682d5717d4555ebbd7341847146_prof);

        
        $__internal_35831ca4689520b758be6fc212e889c0ed89a1d01d74bf85822e5c20e31b1f95->leave($__internal_35831ca4689520b758be6fc212e889c0ed89a1d01d74bf85822e5c20e31b1f95_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 36,  84 => 35,  75 => 34,  61 => 29,  55 => 27,  46 => 26,  36 => 1,  34 => 12,  33 => 11,  32 => 3,  11 => 1,);
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

{% set messages = {
    'purge' : {
        status:  'success',
        title:   'The profiler database was purged successfully',
        message: 'Now you need to browse some pages with the Symfony Profiler enabled to collect data.'
    },
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    },
    'upload_error' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'No file given or the file was not uploaded successfully.'
    },
    'already_exists' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'The token already exists in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "WebProfilerBundle:Profiler:info.html.twig", "/home/pratik/web/brainwit/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
