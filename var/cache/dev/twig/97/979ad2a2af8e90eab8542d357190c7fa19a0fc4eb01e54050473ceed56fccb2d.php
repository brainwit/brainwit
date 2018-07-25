<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_273cee18401e8a5901317d10a7dc788bd2884c50b01d2a5e78fa1c5587033ef0 extends Twig_Template
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
        $__internal_83f3d482a674661c3a41fef4c63786951651c6948144b4fb0d4f9b95e090de84 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83f3d482a674661c3a41fef4c63786951651c6948144b4fb0d4f9b95e090de84->enter($__internal_83f3d482a674661c3a41fef4c63786951651c6948144b4fb0d4f9b95e090de84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_7dff0b7d8e3b289adaf65cebb278b5209986ed4cd40d945d4c915e25331bf5dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7dff0b7d8e3b289adaf65cebb278b5209986ed4cd40d945d4c915e25331bf5dc->enter($__internal_7dff0b7d8e3b289adaf65cebb278b5209986ed4cd40d945d4c915e25331bf5dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_83f3d482a674661c3a41fef4c63786951651c6948144b4fb0d4f9b95e090de84->leave($__internal_83f3d482a674661c3a41fef4c63786951651c6948144b4fb0d4f9b95e090de84_prof);

        
        $__internal_7dff0b7d8e3b289adaf65cebb278b5209986ed4cd40d945d4c915e25331bf5dc->leave($__internal_7dff0b7d8e3b289adaf65cebb278b5209986ed4cd40d945d4c915e25331bf5dc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/home/pratik/web/brainwit/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
