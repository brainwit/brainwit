<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_0946aa9808eb3669f4271ee15f43e945b9013509a84b464884d1fbc4440d7f5d extends Twig_Template
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
        $__internal_b15a8c582ad1d54c5ca7a16a4beef52276c7bb82004d524354684a97ade0ad0d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b15a8c582ad1d54c5ca7a16a4beef52276c7bb82004d524354684a97ade0ad0d->enter($__internal_b15a8c582ad1d54c5ca7a16a4beef52276c7bb82004d524354684a97ade0ad0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_d549ddadd02721376b00c79c8ec3d68e466002d32b7b0af0150b021900c69578 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d549ddadd02721376b00c79c8ec3d68e466002d32b7b0af0150b021900c69578->enter($__internal_d549ddadd02721376b00c79c8ec3d68e466002d32b7b0af0150b021900c69578_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_b15a8c582ad1d54c5ca7a16a4beef52276c7bb82004d524354684a97ade0ad0d->leave($__internal_b15a8c582ad1d54c5ca7a16a4beef52276c7bb82004d524354684a97ade0ad0d_prof);

        
        $__internal_d549ddadd02721376b00c79c8ec3d68e466002d32b7b0af0150b021900c69578->leave($__internal_d549ddadd02721376b00c79c8ec3d68e466002d32b7b0af0150b021900c69578_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
", "TwigBundle:Exception:error.atom.twig", "/home/pratik/web/brainwit/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
