<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_820c3fa1dd363d295486b680cc8d50ef7f8b7edbde760e33ea225f1c1ffc5973 extends Twig_Template
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
        $__internal_266ec8e64df6d1e0f4d58e219efdb49ccbd10cf6debf465ca83d519d3008a816 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_266ec8e64df6d1e0f4d58e219efdb49ccbd10cf6debf465ca83d519d3008a816->enter($__internal_266ec8e64df6d1e0f4d58e219efdb49ccbd10cf6debf465ca83d519d3008a816_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_e4249e932650e503da563899992055b1f511c12995f212e383909a79b4562d1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4249e932650e503da563899992055b1f511c12995f212e383909a79b4562d1b->enter($__internal_e4249e932650e503da563899992055b1f511c12995f212e383909a79b4562d1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_266ec8e64df6d1e0f4d58e219efdb49ccbd10cf6debf465ca83d519d3008a816->leave($__internal_266ec8e64df6d1e0f4d58e219efdb49ccbd10cf6debf465ca83d519d3008a816_prof);

        
        $__internal_e4249e932650e503da563899992055b1f511c12995f212e383909a79b4562d1b->leave($__internal_e4249e932650e503da563899992055b1f511c12995f212e383909a79b4562d1b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/home/pratik/web/brainwit/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
