<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_cf7706c416b3cd469acab90c3254bc1c3067848e1cba22ce48f7f6bcc68a10f3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_3d0f76b6815cc5e0576a6415ddf50712433de2e54aa7b9028f7ca3820bc05b67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d0f76b6815cc5e0576a6415ddf50712433de2e54aa7b9028f7ca3820bc05b67->enter($__internal_3d0f76b6815cc5e0576a6415ddf50712433de2e54aa7b9028f7ca3820bc05b67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_9c0ca07f7e772e62f8c44b79f7e34fd0dc03802616146a5fbbc00d0012c3b30a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c0ca07f7e772e62f8c44b79f7e34fd0dc03802616146a5fbbc00d0012c3b30a->enter($__internal_9c0ca07f7e772e62f8c44b79f7e34fd0dc03802616146a5fbbc00d0012c3b30a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3d0f76b6815cc5e0576a6415ddf50712433de2e54aa7b9028f7ca3820bc05b67->leave($__internal_3d0f76b6815cc5e0576a6415ddf50712433de2e54aa7b9028f7ca3820bc05b67_prof);

        
        $__internal_9c0ca07f7e772e62f8c44b79f7e34fd0dc03802616146a5fbbc00d0012c3b30a->leave($__internal_9c0ca07f7e772e62f8c44b79f7e34fd0dc03802616146a5fbbc00d0012c3b30a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0692170502fe591a21733b7cefe677adf32f563d24bd1de5f5d8e618fb74721c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0692170502fe591a21733b7cefe677adf32f563d24bd1de5f5d8e618fb74721c->enter($__internal_0692170502fe591a21733b7cefe677adf32f563d24bd1de5f5d8e618fb74721c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_d49af01b68f3f6cc47b2bdca8b25e346b8ca4d674c1f1c2bd83036093d68809b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d49af01b68f3f6cc47b2bdca8b25e346b8ca4d674c1f1c2bd83036093d68809b->enter($__internal_d49af01b68f3f6cc47b2bdca8b25e346b8ca4d674c1f1c2bd83036093d68809b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_d49af01b68f3f6cc47b2bdca8b25e346b8ca4d674c1f1c2bd83036093d68809b->leave($__internal_d49af01b68f3f6cc47b2bdca8b25e346b8ca4d674c1f1c2bd83036093d68809b_prof);

        
        $__internal_0692170502fe591a21733b7cefe677adf32f563d24bd1de5f5d8e618fb74721c->leave($__internal_0692170502fe591a21733b7cefe677adf32f563d24bd1de5f5d8e618fb74721c_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_d46441457083b4cf52482f375db9feffd681306b071085520415bab05439fc4d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d46441457083b4cf52482f375db9feffd681306b071085520415bab05439fc4d->enter($__internal_d46441457083b4cf52482f375db9feffd681306b071085520415bab05439fc4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_25b531eb162138b59fe33637cd5723639e5ff122a842e35890800f8c28d5c497 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25b531eb162138b59fe33637cd5723639e5ff122a842e35890800f8c28d5c497->enter($__internal_25b531eb162138b59fe33637cd5723639e5ff122a842e35890800f8c28d5c497_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_25b531eb162138b59fe33637cd5723639e5ff122a842e35890800f8c28d5c497->leave($__internal_25b531eb162138b59fe33637cd5723639e5ff122a842e35890800f8c28d5c497_prof);

        
        $__internal_d46441457083b4cf52482f375db9feffd681306b071085520415bab05439fc4d->leave($__internal_d46441457083b4cf52482f375db9feffd681306b071085520415bab05439fc4d_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_c3276ac2182db0dac1541695da6ee8584553fabd4fd111c3a1a3efefb69a0e27 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3276ac2182db0dac1541695da6ee8584553fabd4fd111c3a1a3efefb69a0e27->enter($__internal_c3276ac2182db0dac1541695da6ee8584553fabd4fd111c3a1a3efefb69a0e27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1963e7f6c7fa5055ed215614ba8656c9c138eb874c20721dedca5c694dac51ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1963e7f6c7fa5055ed215614ba8656c9c138eb874c20721dedca5c694dac51ec->enter($__internal_1963e7f6c7fa5055ed215614ba8656c9c138eb874c20721dedca5c694dac51ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_1963e7f6c7fa5055ed215614ba8656c9c138eb874c20721dedca5c694dac51ec->leave($__internal_1963e7f6c7fa5055ed215614ba8656c9c138eb874c20721dedca5c694dac51ec_prof);

        
        $__internal_c3276ac2182db0dac1541695da6ee8584553fabd4fd111c3a1a3efefb69a0e27->leave($__internal_c3276ac2182db0dac1541695da6ee8584553fabd4fd111c3a1a3efefb69a0e27_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "TwigBundle:Exception:exception_full.html.twig", "/home/pratik/web/brainwit/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
