<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_b094c942eed047b1dcae948b51a534926feeb7f044d2de7051993600738ab7ba extends Twig_Template
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
        $__internal_314078d570ed516aded46b5845fa059b0f7daa24cd82d88f4c7a0f6506542a4a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_314078d570ed516aded46b5845fa059b0f7daa24cd82d88f4c7a0f6506542a4a->enter($__internal_314078d570ed516aded46b5845fa059b0f7daa24cd82d88f4c7a0f6506542a4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_a9df0bf6724f9c7cd9db3c64d128e9bf1a8ef21ada708ccfcbc8da55b5cee413 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9df0bf6724f9c7cd9db3c64d128e9bf1a8ef21ada708ccfcbc8da55b5cee413->enter($__internal_a9df0bf6724f9c7cd9db3c64d128e9bf1a8ef21ada708ccfcbc8da55b5cee413_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_314078d570ed516aded46b5845fa059b0f7daa24cd82d88f4c7a0f6506542a4a->leave($__internal_314078d570ed516aded46b5845fa059b0f7daa24cd82d88f4c7a0f6506542a4a_prof);

        
        $__internal_a9df0bf6724f9c7cd9db3c64d128e9bf1a8ef21ada708ccfcbc8da55b5cee413->leave($__internal_a9df0bf6724f9c7cd9db3c64d128e9bf1a8ef21ada708ccfcbc8da55b5cee413_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/home/pratik/web/brainwit/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
