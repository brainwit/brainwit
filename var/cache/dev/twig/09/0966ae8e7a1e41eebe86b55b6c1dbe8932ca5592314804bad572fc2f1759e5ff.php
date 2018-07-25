<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_8c1b7229f37d58e1983aba035fb09422e2028941705f2b5c0631ef2ce67dc990 extends Twig_Template
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
        $__internal_55c55928fc1c0e6ae922e6e3e4b8f386f0210aa0e0f8ce31c62600dda3ede8c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55c55928fc1c0e6ae922e6e3e4b8f386f0210aa0e0f8ce31c62600dda3ede8c5->enter($__internal_55c55928fc1c0e6ae922e6e3e4b8f386f0210aa0e0f8ce31c62600dda3ede8c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_fa88bd4f9bca94067d4fb1f3f3347202b19583c083ad1465116df06a35d9b0f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa88bd4f9bca94067d4fb1f3f3347202b19583c083ad1465116df06a35d9b0f6->enter($__internal_fa88bd4f9bca94067d4fb1f3f3347202b19583c083ad1465116df06a35d9b0f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_55c55928fc1c0e6ae922e6e3e4b8f386f0210aa0e0f8ce31c62600dda3ede8c5->leave($__internal_55c55928fc1c0e6ae922e6e3e4b8f386f0210aa0e0f8ce31c62600dda3ede8c5_prof);

        
        $__internal_fa88bd4f9bca94067d4fb1f3f3347202b19583c083ad1465116df06a35d9b0f6->leave($__internal_fa88bd4f9bca94067d4fb1f3f3347202b19583c083ad1465116df06a35d9b0f6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/home/pratik/web/brainwit/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
