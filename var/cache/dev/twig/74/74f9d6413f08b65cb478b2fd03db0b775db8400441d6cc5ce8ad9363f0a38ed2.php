<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_bb39a7468cd9f10b7c36d6f938ae87d2f517859c64820f496837ac04642d093c extends Twig_Template
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
        $__internal_d0aa53f277c6de7dcf86048dc650548987246bc2533d6e1bcbbcc9d7533ba1a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0aa53f277c6de7dcf86048dc650548987246bc2533d6e1bcbbcc9d7533ba1a0->enter($__internal_d0aa53f277c6de7dcf86048dc650548987246bc2533d6e1bcbbcc9d7533ba1a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_f99c0f745fe152c38301f77dc588a02a47825fb643a9b6e76c44af28e1aa5b02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f99c0f745fe152c38301f77dc588a02a47825fb643a9b6e76c44af28e1aa5b02->enter($__internal_f99c0f745fe152c38301f77dc588a02a47825fb643a9b6e76c44af28e1aa5b02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_d0aa53f277c6de7dcf86048dc650548987246bc2533d6e1bcbbcc9d7533ba1a0->leave($__internal_d0aa53f277c6de7dcf86048dc650548987246bc2533d6e1bcbbcc9d7533ba1a0_prof);

        
        $__internal_f99c0f745fe152c38301f77dc588a02a47825fb643a9b6e76c44af28e1aa5b02->leave($__internal_f99c0f745fe152c38301f77dc588a02a47825fb643a9b6e76c44af28e1aa5b02_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/home/pratik/web/brainwit/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
