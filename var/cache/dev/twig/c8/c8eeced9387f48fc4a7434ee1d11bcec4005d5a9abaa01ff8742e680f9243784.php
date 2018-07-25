<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_d0f77dc164e26e520bbffc9446731e225ebe172848d7123bf5f36f7899f13473 extends Twig_Template
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
        $__internal_e665e4338bfb44310dbf13c576edee7b76c3c511f998b2967efc874414377fcd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e665e4338bfb44310dbf13c576edee7b76c3c511f998b2967efc874414377fcd->enter($__internal_e665e4338bfb44310dbf13c576edee7b76c3c511f998b2967efc874414377fcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_b0e5ffea50b6d8174523d4fbfdcafb856800bbd2b72d43a98cfa7deafd7fe21a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0e5ffea50b6d8174523d4fbfdcafb856800bbd2b72d43a98cfa7deafd7fe21a->enter($__internal_b0e5ffea50b6d8174523d4fbfdcafb856800bbd2b72d43a98cfa7deafd7fe21a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_e665e4338bfb44310dbf13c576edee7b76c3c511f998b2967efc874414377fcd->leave($__internal_e665e4338bfb44310dbf13c576edee7b76c3c511f998b2967efc874414377fcd_prof);

        
        $__internal_b0e5ffea50b6d8174523d4fbfdcafb856800bbd2b72d43a98cfa7deafd7fe21a->leave($__internal_b0e5ffea50b6d8174523d4fbfdcafb856800bbd2b72d43a98cfa7deafd7fe21a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/home/pratik/web/brainwit/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
