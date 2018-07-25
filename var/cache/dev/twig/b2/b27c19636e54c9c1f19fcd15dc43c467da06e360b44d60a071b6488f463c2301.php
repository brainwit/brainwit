<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_27855908a8d2aa753782c8c6fae419a152fb85ec52e589db0780b5dc6a41addb extends Twig_Template
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
        $__internal_da1f6f2f19ad00ca17bbd629a40fa26cf27e20038a6b76b00f5a81e423dbb222 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da1f6f2f19ad00ca17bbd629a40fa26cf27e20038a6b76b00f5a81e423dbb222->enter($__internal_da1f6f2f19ad00ca17bbd629a40fa26cf27e20038a6b76b00f5a81e423dbb222_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_1bed8c4e5edd16df20be6f589f813cbc9817c2a0d675356cd5a4beb3b1c62abd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bed8c4e5edd16df20be6f589f813cbc9817c2a0d675356cd5a4beb3b1c62abd->enter($__internal_1bed8c4e5edd16df20be6f589f813cbc9817c2a0d675356cd5a4beb3b1c62abd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_da1f6f2f19ad00ca17bbd629a40fa26cf27e20038a6b76b00f5a81e423dbb222->leave($__internal_da1f6f2f19ad00ca17bbd629a40fa26cf27e20038a6b76b00f5a81e423dbb222_prof);

        
        $__internal_1bed8c4e5edd16df20be6f589f813cbc9817c2a0d675356cd5a4beb3b1c62abd->leave($__internal_1bed8c4e5edd16df20be6f589f813cbc9817c2a0d675356cd5a4beb3b1c62abd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/home/pratik/web/brainwit/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
