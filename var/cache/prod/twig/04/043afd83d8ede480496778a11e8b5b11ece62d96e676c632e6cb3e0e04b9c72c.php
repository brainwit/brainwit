<?php

/* AfricanUserBundle:Default:email.html.twig */
class __TwigTemplate_e52237d959a8efcc542d21f13ea8c40492c85d44d49405f4237368453832ac46 extends Twig_Template
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
        // line 1
        echo "Hello AfricanTech,

<p>Name: ";
        // line 3
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo "</p>
<p>Email: ";
        // line 4
        echo twig_escape_filter($this->env, ($context["email"] ?? null), "html", null, true);
        echo "</p>
<p>Message: ";
        // line 5
        echo twig_escape_filter($this->env, ($context["message"] ?? null), "html", null, true);
        echo " </p>


Thank you
";
        // line 9
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
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
        return array (  38 => 9,  31 => 5,  27 => 4,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "AfricanUserBundle:Default:email.html.twig", "/home/pratik/web/brainwit/src/African/UserBundle/Resources/views/Default/email.html.twig");
    }
}
