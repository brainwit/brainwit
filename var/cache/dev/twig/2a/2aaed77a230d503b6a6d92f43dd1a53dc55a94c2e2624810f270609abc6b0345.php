<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_3e3f39508b4382a848393181ef1fb966c38c4ff5a26a2d0ff786833e01e587dc extends Twig_Template
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
        $__internal_18ad98c00ba2070f6572e6b31a0a97ecd034ebb99b497e0c1acae17c4a30842c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18ad98c00ba2070f6572e6b31a0a97ecd034ebb99b497e0c1acae17c4a30842c->enter($__internal_18ad98c00ba2070f6572e6b31a0a97ecd034ebb99b497e0c1acae17c4a30842c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_48d683c4c48d17e330ece97e37068a204410fd0bafb1f45c95627b149d354d36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48d683c4c48d17e330ece97e37068a204410fd0bafb1f45c95627b149d354d36->enter($__internal_48d683c4c48d17e330ece97e37068a204410fd0bafb1f45c95627b149d354d36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_18ad98c00ba2070f6572e6b31a0a97ecd034ebb99b497e0c1acae17c4a30842c->leave($__internal_18ad98c00ba2070f6572e6b31a0a97ecd034ebb99b497e0c1acae17c4a30842c_prof);

        
        $__internal_48d683c4c48d17e330ece97e37068a204410fd0bafb1f45c95627b149d354d36->leave($__internal_48d683c4c48d17e330ece97e37068a204410fd0bafb1f45c95627b149d354d36_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/home/pratik/web/brainwit/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
