<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_701dcdd97d37dad2e87d66c4193097c3165f41f9a0e608fa8208817dd4d44b31 extends Twig_Template
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
        $__internal_c61fdd1d50cbe849eb64dd1e7d34dc31d5436f3290f6e9852fd84dd901415796 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c61fdd1d50cbe849eb64dd1e7d34dc31d5436f3290f6e9852fd84dd901415796->enter($__internal_c61fdd1d50cbe849eb64dd1e7d34dc31d5436f3290f6e9852fd84dd901415796_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_03b0622fb6a6fcc8d80c61886ae2e05477e14416f083da85d4b8291f8ba6a6ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03b0622fb6a6fcc8d80c61886ae2e05477e14416f083da85d4b8291f8ba6a6ed->enter($__internal_03b0622fb6a6fcc8d80c61886ae2e05477e14416f083da85d4b8291f8ba6a6ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_c61fdd1d50cbe849eb64dd1e7d34dc31d5436f3290f6e9852fd84dd901415796->leave($__internal_c61fdd1d50cbe849eb64dd1e7d34dc31d5436f3290f6e9852fd84dd901415796_prof);

        
        $__internal_03b0622fb6a6fcc8d80c61886ae2e05477e14416f083da85d4b8291f8ba6a6ed->leave($__internal_03b0622fb6a6fcc8d80c61886ae2e05477e14416f083da85d4b8291f8ba6a6ed_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.rdf.twig", "/home/pratik/web/brainwit/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
