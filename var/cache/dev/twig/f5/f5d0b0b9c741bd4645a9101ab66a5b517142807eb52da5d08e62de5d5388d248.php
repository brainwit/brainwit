<?php

/* WebProfilerBundle:Collector:exception.css.twig */
class __TwigTemplate_c560977e18401a34ecd7186d332416c9d7348a919654ecc2feb311c4f7da4722 extends Twig_Template
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
        $__internal_b8e326e0c1c59e067c5ddc33e5015a2afe98485d4a511729bb39890c2b7da005 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8e326e0c1c59e067c5ddc33e5015a2afe98485d4a511729bb39890c2b7da005->enter($__internal_b8e326e0c1c59e067c5ddc33e5015a2afe98485d4a511729bb39890c2b7da005_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        $__internal_ec3a2c0dc119acc397f5820fd223a34bf8fb3c26d633c873c2be2da1f1f918fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec3a2c0dc119acc397f5820fd223a34bf8fb3c26d633c873c2be2da1f1f918fa->enter($__internal_ec3a2c0dc119acc397f5820fd223a34bf8fb3c26d633c873c2be2da1f1f918fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper {
    min-height: auto;
}
";
        
        $__internal_b8e326e0c1c59e067c5ddc33e5015a2afe98485d4a511729bb39890c2b7da005->leave($__internal_b8e326e0c1c59e067c5ddc33e5015a2afe98485d4a511729bb39890c2b7da005_prof);

        
        $__internal_ec3a2c0dc119acc397f5820fd223a34bf8fb3c26d633c873c2be2da1f1f918fa->leave($__internal_ec3a2c0dc119acc397f5820fd223a34bf8fb3c26d633c873c2be2da1f1f918fa_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.css.twig";
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
        return new Twig_Source("{{ include('@Twig/exception.css.twig') }}

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper {
    min-height: auto;
}
", "WebProfilerBundle:Collector:exception.css.twig", "/home/pratik/web/brainwit/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.css.twig");
    }
}
