<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_cd51f700ad647e562be98ad3b02868fd8b86a17a5ef2bd8021a18c9de9ad2f5d extends Twig_Template
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
        $__internal_46f76a2a63b8ef8bab18edb759de94bd1f24243f8b0c0b38b049ee70158ff00e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46f76a2a63b8ef8bab18edb759de94bd1f24243f8b0c0b38b049ee70158ff00e->enter($__internal_46f76a2a63b8ef8bab18edb759de94bd1f24243f8b0c0b38b049ee70158ff00e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_55c44e92a3de92133e7f0d250ca92ba38ca6721749f74a5e1af9f6826eba12e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55c44e92a3de92133e7f0d250ca92ba38ca6721749f74a5e1af9f6826eba12e4->enter($__internal_55c44e92a3de92133e7f0d250ca92ba38ca6721749f74a5e1af9f6826eba12e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_46f76a2a63b8ef8bab18edb759de94bd1f24243f8b0c0b38b049ee70158ff00e->leave($__internal_46f76a2a63b8ef8bab18edb759de94bd1f24243f8b0c0b38b049ee70158ff00e_prof);

        
        $__internal_55c44e92a3de92133e7f0d250ca92ba38ca6721749f74a5e1af9f6826eba12e4->leave($__internal_55c44e92a3de92133e7f0d250ca92ba38ca6721749f74a5e1af9f6826eba12e4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/home/pratik/web/brainwit/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
