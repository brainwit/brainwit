<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_b6975709208f12cfaeb9803ffdf6965fac624c0ba52f0f775711970af923f94c extends Twig_Template
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
        $__internal_bb20f3c336b8ce6526676d675ff7a1ceeaa99b27c412f9c07efe76d5463e81e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb20f3c336b8ce6526676d675ff7a1ceeaa99b27c412f9c07efe76d5463e81e4->enter($__internal_bb20f3c336b8ce6526676d675ff7a1ceeaa99b27c412f9c07efe76d5463e81e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_5e1d1a70b736779adb78ab01a004f8da9a4276f08ab66bc18ccc725b370abb49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e1d1a70b736779adb78ab01a004f8da9a4276f08ab66bc18ccc725b370abb49->enter($__internal_5e1d1a70b736779adb78ab01a004f8da9a4276f08ab66bc18ccc725b370abb49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_bb20f3c336b8ce6526676d675ff7a1ceeaa99b27c412f9c07efe76d5463e81e4->leave($__internal_bb20f3c336b8ce6526676d675ff7a1ceeaa99b27c412f9c07efe76d5463e81e4_prof);

        
        $__internal_5e1d1a70b736779adb78ab01a004f8da9a4276f08ab66bc18ccc725b370abb49->leave($__internal_5e1d1a70b736779adb78ab01a004f8da9a4276f08ab66bc18ccc725b370abb49_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
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
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "/home/pratik/web/brainwit/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_simple.html.php");
    }
}
