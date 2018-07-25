<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_c9bae5203b5f622841ee972dd404aabacc43f83c37f85914e94ff6cacd161c1e extends Twig_Template
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
        $__internal_a3a890b155794954222a2317c8514ce5a3277619bc07e944c1f30620b0a55c9b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3a890b155794954222a2317c8514ce5a3277619bc07e944c1f30620b0a55c9b->enter($__internal_a3a890b155794954222a2317c8514ce5a3277619bc07e944c1f30620b0a55c9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_f583d8123b631003e3472f27bd88488dcca486a1ff97553bec19bca6ff5fa7e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f583d8123b631003e3472f27bd88488dcca486a1ff97553bec19bca6ff5fa7e9->enter($__internal_f583d8123b631003e3472f27bd88488dcca486a1ff97553bec19bca6ff5fa7e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_a3a890b155794954222a2317c8514ce5a3277619bc07e944c1f30620b0a55c9b->leave($__internal_a3a890b155794954222a2317c8514ce5a3277619bc07e944c1f30620b0a55c9b_prof);

        
        $__internal_f583d8123b631003e3472f27bd88488dcca486a1ff97553bec19bca6ff5fa7e9->leave($__internal_f583d8123b631003e3472f27bd88488dcca486a1ff97553bec19bca6ff5fa7e9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/home/pratik/web/brainwit/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
