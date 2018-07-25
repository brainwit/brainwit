<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_c1378f42193d4f7b23b1915b7440c50c6a8ff2b6d8a416c16bef78faf3ae96e3 extends Twig_Template
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
        $__internal_ef81450d9bcb2d8fbcc9d4eca14cc34adadbc4938d88778b22d7b1bd929ff85e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef81450d9bcb2d8fbcc9d4eca14cc34adadbc4938d88778b22d7b1bd929ff85e->enter($__internal_ef81450d9bcb2d8fbcc9d4eca14cc34adadbc4938d88778b22d7b1bd929ff85e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_a62fd168a32b2610755300ebae132e15483d7b3a488827801379ab2f9c464928 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a62fd168a32b2610755300ebae132e15483d7b3a488827801379ab2f9c464928->enter($__internal_a62fd168a32b2610755300ebae132e15483d7b3a488827801379ab2f9c464928_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_ef81450d9bcb2d8fbcc9d4eca14cc34adadbc4938d88778b22d7b1bd929ff85e->leave($__internal_ef81450d9bcb2d8fbcc9d4eca14cc34adadbc4938d88778b22d7b1bd929ff85e_prof);

        
        $__internal_a62fd168a32b2610755300ebae132e15483d7b3a488827801379ab2f9c464928->leave($__internal_a62fd168a32b2610755300ebae132e15483d7b3a488827801379ab2f9c464928_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/home/pratik/web/brainwit/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
