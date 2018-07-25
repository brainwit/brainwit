<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_f6217e166b994556adba263301db96e59c16bbb339fedd6cb1926679508bc20e extends Twig_Template
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
        $__internal_1c00cc0fd5aa26a703a33d056a27731e8681dc1d1ed5b1a226e228f897b2c1d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c00cc0fd5aa26a703a33d056a27731e8681dc1d1ed5b1a226e228f897b2c1d3->enter($__internal_1c00cc0fd5aa26a703a33d056a27731e8681dc1d1ed5b1a226e228f897b2c1d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_32e826fde3341925082b1221d156ca229c517259d0f09ab44ac7d9e4b0b42186 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32e826fde3341925082b1221d156ca229c517259d0f09ab44ac7d9e4b0b42186->enter($__internal_32e826fde3341925082b1221d156ca229c517259d0f09ab44ac7d9e4b0b42186_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_1c00cc0fd5aa26a703a33d056a27731e8681dc1d1ed5b1a226e228f897b2c1d3->leave($__internal_1c00cc0fd5aa26a703a33d056a27731e8681dc1d1ed5b1a226e228f897b2c1d3_prof);

        
        $__internal_32e826fde3341925082b1221d156ca229c517259d0f09ab44ac7d9e4b0b42186->leave($__internal_32e826fde3341925082b1221d156ca229c517259d0f09ab44ac7d9e4b0b42186_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "TwigBundle:Exception:exception.json.twig", "/home/pratik/web/brainwit/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
