<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_9ec463a5141422177decfe70c9e2421022bc554f5e1b060402d014ad6f52df54 extends Twig_Template
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
        $__internal_0028d6a3b540e219e9f31f773ee304bf45831806a0452de9db5aef0520e653c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0028d6a3b540e219e9f31f773ee304bf45831806a0452de9db5aef0520e653c2->enter($__internal_0028d6a3b540e219e9f31f773ee304bf45831806a0452de9db5aef0520e653c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_c7f7f2f98eb888ec6f38163d97a6f7264a9bc7eb0728643cdc6d147e634c61e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7f7f2f98eb888ec6f38163d97a6f7264a9bc7eb0728643cdc6d147e634c61e6->enter($__internal_c7f7f2f98eb888ec6f38163d97a6f7264a9bc7eb0728643cdc6d147e634c61e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_0028d6a3b540e219e9f31f773ee304bf45831806a0452de9db5aef0520e653c2->leave($__internal_0028d6a3b540e219e9f31f773ee304bf45831806a0452de9db5aef0520e653c2_prof);

        
        $__internal_c7f7f2f98eb888ec6f38163d97a6f7264a9bc7eb0728643cdc6d147e634c61e6->leave($__internal_c7f7f2f98eb888ec6f38163d97a6f7264a9bc7eb0728643cdc6d147e634c61e6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/home/pratik/web/brainwit/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
