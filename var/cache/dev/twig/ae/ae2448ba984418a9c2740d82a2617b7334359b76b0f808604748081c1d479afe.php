<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_32933b0dfd2a5074f0eb9d22a082b4fab743a42f9d3929281de967e3f57ce89d extends Twig_Template
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
        $__internal_569337965d4e56a1587f518e4ba7d6a4c8118534da32db63d8702d8dc0c7662b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_569337965d4e56a1587f518e4ba7d6a4c8118534da32db63d8702d8dc0c7662b->enter($__internal_569337965d4e56a1587f518e4ba7d6a4c8118534da32db63d8702d8dc0c7662b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_5140c2a5bb1a3e6d14371e6791112546d03a954db056325ada1d9c12137d378a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5140c2a5bb1a3e6d14371e6791112546d03a954db056325ada1d9c12137d378a->enter($__internal_5140c2a5bb1a3e6d14371e6791112546d03a954db056325ada1d9c12137d378a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_569337965d4e56a1587f518e4ba7d6a4c8118534da32db63d8702d8dc0c7662b->leave($__internal_569337965d4e56a1587f518e4ba7d6a4c8118534da32db63d8702d8dc0c7662b_prof);

        
        $__internal_5140c2a5bb1a3e6d14371e6791112546d03a954db056325ada1d9c12137d378a->leave($__internal_5140c2a5bb1a3e6d14371e6791112546d03a954db056325ada1d9c12137d378a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/home/pratik/web/brainwit/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
