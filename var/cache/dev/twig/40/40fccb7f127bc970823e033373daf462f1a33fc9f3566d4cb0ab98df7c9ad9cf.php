<?php

/* AfricanUserBundle:Default:email.html.twig */
class __TwigTemplate_3b59266b72fcb7ea81adf443b1ccdeeb7d2a77099ce85cab82c8ef42960bdd99 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_679fabbe1ff1a38e17b8c90021c553e341eb7f09d91a5a98ed2119b72c58e4c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_679fabbe1ff1a38e17b8c90021c553e341eb7f09d91a5a98ed2119b72c58e4c7->enter($__internal_679fabbe1ff1a38e17b8c90021c553e341eb7f09d91a5a98ed2119b72c58e4c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AfricanUserBundle:Default:email.html.twig"));

        $__internal_a82d81fffcb2c4d968c0df5ecd627fd388ca34c0493f050dbfe6672c87103caf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a82d81fffcb2c4d968c0df5ecd627fd388ca34c0493f050dbfe6672c87103caf->enter($__internal_a82d81fffcb2c4d968c0df5ecd627fd388ca34c0493f050dbfe6672c87103caf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AfricanUserBundle:Default:email.html.twig"));

        // line 1
        echo "Hello AfricanTech,

<p>Name: ";
        // line 3
        echo twig_escape_filter($this->env, ($context["name"] ?? $this->getContext($context, "name")), "html", null, true);
        echo "</p>
<p>Email: ";
        // line 4
        echo twig_escape_filter($this->env, ($context["email"] ?? $this->getContext($context, "email")), "html", null, true);
        echo "</p>
<p>Message: ";
        // line 5
        echo twig_escape_filter($this->env, ($context["message"] ?? $this->getContext($context, "message")), "html", null, true);
        echo " </p>


Thank you
";
        // line 9
        echo twig_escape_filter($this->env, ($context["name"] ?? $this->getContext($context, "name")), "html", null, true);
        
        $__internal_679fabbe1ff1a38e17b8c90021c553e341eb7f09d91a5a98ed2119b72c58e4c7->leave($__internal_679fabbe1ff1a38e17b8c90021c553e341eb7f09d91a5a98ed2119b72c58e4c7_prof);

        
        $__internal_a82d81fffcb2c4d968c0df5ecd627fd388ca34c0493f050dbfe6672c87103caf->leave($__internal_a82d81fffcb2c4d968c0df5ecd627fd388ca34c0493f050dbfe6672c87103caf_prof);

    }

    public function getTemplateName()
    {
        return "AfricanUserBundle:Default:email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 9,  37 => 5,  33 => 4,  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Hello AfricanTech,

<p>Name: {{name}}</p>
<p>Email: {{email}}</p>
<p>Message: {{message}} </p>


Thank you
{{name}}", "AfricanUserBundle:Default:email.html.twig", "/home/pratik/web/brainwit/src/African/UserBundle/Resources/views/Default/email.html.twig");
    }
}
