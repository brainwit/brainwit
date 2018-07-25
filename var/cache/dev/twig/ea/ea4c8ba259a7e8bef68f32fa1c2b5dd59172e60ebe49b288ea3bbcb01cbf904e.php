<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_0b0ad4263d379055fb73f54e032e575e75e67954236cd3422b3514e51cd7388c extends Twig_Template
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
        $__internal_b5ed33eb0be427f0d143af2bde163d7e38fb1a9b6b86a3b4f6c4743ed130aae4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5ed33eb0be427f0d143af2bde163d7e38fb1a9b6b86a3b4f6c4743ed130aae4->enter($__internal_b5ed33eb0be427f0d143af2bde163d7e38fb1a9b6b86a3b4f6c4743ed130aae4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_7d370ae573a8fda3426804e1b76b5d24ac0daf46a6b95a3a2db48ebb01f4ed98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d370ae573a8fda3426804e1b76b5d24ac0daf46a6b95a3a2db48ebb01f4ed98->enter($__internal_7d370ae573a8fda3426804e1b76b5d24ac0daf46a6b95a3a2db48ebb01f4ed98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_b5ed33eb0be427f0d143af2bde163d7e38fb1a9b6b86a3b4f6c4743ed130aae4->leave($__internal_b5ed33eb0be427f0d143af2bde163d7e38fb1a9b6b86a3b4f6c4743ed130aae4_prof);

        
        $__internal_7d370ae573a8fda3426804e1b76b5d24ac0daf46a6b95a3a2db48ebb01f4ed98->leave($__internal_7d370ae573a8fda3426804e1b76b5d24ac0daf46a6b95a3a2db48ebb01f4ed98_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/home/pratik/web/brainwit/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
