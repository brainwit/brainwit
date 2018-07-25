<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_a611f92a27af130951d9078fddf1bbafe1cc49e2bd58b9706ba15334252c5e8a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2b75dbbe64fdf26d1d808c96a20910a6795aa1f7094956443c3af42cc47fc82c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b75dbbe64fdf26d1d808c96a20910a6795aa1f7094956443c3af42cc47fc82c->enter($__internal_2b75dbbe64fdf26d1d808c96a20910a6795aa1f7094956443c3af42cc47fc82c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_496cb3320e62ba2b84e620fc7fbd2afccd61b0b1023e8d146ae21b5153d6855e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_496cb3320e62ba2b84e620fc7fbd2afccd61b0b1023e8d146ae21b5153d6855e->enter($__internal_496cb3320e62ba2b84e620fc7fbd2afccd61b0b1023e8d146ae21b5153d6855e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2b75dbbe64fdf26d1d808c96a20910a6795aa1f7094956443c3af42cc47fc82c->leave($__internal_2b75dbbe64fdf26d1d808c96a20910a6795aa1f7094956443c3af42cc47fc82c_prof);

        
        $__internal_496cb3320e62ba2b84e620fc7fbd2afccd61b0b1023e8d146ae21b5153d6855e->leave($__internal_496cb3320e62ba2b84e620fc7fbd2afccd61b0b1023e8d146ae21b5153d6855e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e62d7f9c0801d2c5209afd53e84e0ed2443823afbd328f9389eb032660b142f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e62d7f9c0801d2c5209afd53e84e0ed2443823afbd328f9389eb032660b142f1->enter($__internal_e62d7f9c0801d2c5209afd53e84e0ed2443823afbd328f9389eb032660b142f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_44b2c3bfebfd09e7f7ec31aeed36ebdc407346670dcd9a05d79d97a8e1caf34d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44b2c3bfebfd09e7f7ec31aeed36ebdc407346670dcd9a05d79d97a8e1caf34d->enter($__internal_44b2c3bfebfd09e7f7ec31aeed36ebdc407346670dcd9a05d79d97a8e1caf34d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_44b2c3bfebfd09e7f7ec31aeed36ebdc407346670dcd9a05d79d97a8e1caf34d->leave($__internal_44b2c3bfebfd09e7f7ec31aeed36ebdc407346670dcd9a05d79d97a8e1caf34d_prof);

        
        $__internal_e62d7f9c0801d2c5209afd53e84e0ed2443823afbd328f9389eb032660b142f1->leave($__internal_e62d7f9c0801d2c5209afd53e84e0ed2443823afbd328f9389eb032660b142f1_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ea106d9817f271e3961190333fabfaacbbe2be243b6349143ef123dcfd7d7514 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea106d9817f271e3961190333fabfaacbbe2be243b6349143ef123dcfd7d7514->enter($__internal_ea106d9817f271e3961190333fabfaacbbe2be243b6349143ef123dcfd7d7514_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_4550bfa0cdc35d2cdc31040a4f2a845721c769c2386e21cf56a3fa3036ac002b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4550bfa0cdc35d2cdc31040a4f2a845721c769c2386e21cf56a3fa3036ac002b->enter($__internal_4550bfa0cdc35d2cdc31040a4f2a845721c769c2386e21cf56a3fa3036ac002b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_4550bfa0cdc35d2cdc31040a4f2a845721c769c2386e21cf56a3fa3036ac002b->leave($__internal_4550bfa0cdc35d2cdc31040a4f2a845721c769c2386e21cf56a3fa3036ac002b_prof);

        
        $__internal_ea106d9817f271e3961190333fabfaacbbe2be243b6349143ef123dcfd7d7514->leave($__internal_ea106d9817f271e3961190333fabfaacbbe2be243b6349143ef123dcfd7d7514_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_cf4b3f93f4cee0400aabbf6c25d53695ae6e516c2f69f2f5d3faa48d778521aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf4b3f93f4cee0400aabbf6c25d53695ae6e516c2f69f2f5d3faa48d778521aa->enter($__internal_cf4b3f93f4cee0400aabbf6c25d53695ae6e516c2f69f2f5d3faa48d778521aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_5d70da5f30b26d8eb92e642e879610333872fc28f79c8c8aa15148d275c502af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d70da5f30b26d8eb92e642e879610333872fc28f79c8c8aa15148d275c502af->enter($__internal_5d70da5f30b26d8eb92e642e879610333872fc28f79c8c8aa15148d275c502af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_5d70da5f30b26d8eb92e642e879610333872fc28f79c8c8aa15148d275c502af->leave($__internal_5d70da5f30b26d8eb92e642e879610333872fc28f79c8c8aa15148d275c502af_prof);

        
        $__internal_cf4b3f93f4cee0400aabbf6c25d53695ae6e516c2f69f2f5d3faa48d778521aa->leave($__internal_cf4b3f93f4cee0400aabbf6c25d53695ae6e516c2f69f2f5d3faa48d778521aa_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "WebProfilerBundle:Collector:exception.html.twig", "/home/pratik/web/brainwit/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
