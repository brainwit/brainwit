<?php

/* AfricanUserBundle:Default:index.html.twig */
class __TwigTemplate_306ba366316aff6d2e553829e0549071fb14b38a242758da1d0a524869db5012 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AfricanUserBundle::layout.html.twig", "AfricanUserBundle:Default:index.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "AfricanUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2a95b2cd60e317be5ae61b52298f383c93ac9755bf9a6922357ac56f9ca53861 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a95b2cd60e317be5ae61b52298f383c93ac9755bf9a6922357ac56f9ca53861->enter($__internal_2a95b2cd60e317be5ae61b52298f383c93ac9755bf9a6922357ac56f9ca53861_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AfricanUserBundle:Default:index.html.twig"));

        $__internal_03db3a85ec69e02e49fc3c37f0f687df866a5f0af1e7423e9ac6134302e2030d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03db3a85ec69e02e49fc3c37f0f687df866a5f0af1e7423e9ac6134302e2030d->enter($__internal_03db3a85ec69e02e49fc3c37f0f687df866a5f0af1e7423e9ac6134302e2030d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AfricanUserBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2a95b2cd60e317be5ae61b52298f383c93ac9755bf9a6922357ac56f9ca53861->leave($__internal_2a95b2cd60e317be5ae61b52298f383c93ac9755bf9a6922357ac56f9ca53861_prof);

        
        $__internal_03db3a85ec69e02e49fc3c37f0f687df866a5f0af1e7423e9ac6134302e2030d->leave($__internal_03db3a85ec69e02e49fc3c37f0f687df866a5f0af1e7423e9ac6134302e2030d_prof);

    }

    public function getTemplateName()
    {
        return "AfricanUserBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"AfricanUserBundle::layout.html.twig\" %}", "AfricanUserBundle:Default:index.html.twig", "/home/pratik/web/brainwit/src/African/UserBundle/Resources/views/Default/index.html.twig");
    }
}
