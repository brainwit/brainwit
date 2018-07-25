<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_6a70998442965774cc90829eee21db4b47643f5cea3c586197cc7950b57ea4af extends Twig_Template
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
        $__internal_d40e0ae160f06a03303b866636a1b87f153feee8d5dd0d795b9782f4077f0817 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d40e0ae160f06a03303b866636a1b87f153feee8d5dd0d795b9782f4077f0817->enter($__internal_d40e0ae160f06a03303b866636a1b87f153feee8d5dd0d795b9782f4077f0817_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_d1c8d79725c1c5a6bce63c6253d1cfabb7f3b6c9648399f9f3d2f76501ac4e8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1c8d79725c1c5a6bce63c6253d1cfabb7f3b6c9648399f9f3d2f76501ac4e8e->enter($__internal_d1c8d79725c1c5a6bce63c6253d1cfabb7f3b6c9648399f9f3d2f76501ac4e8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, ($context["widget"] ?? $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_d40e0ae160f06a03303b866636a1b87f153feee8d5dd0d795b9782f4077f0817->leave($__internal_d40e0ae160f06a03303b866636a1b87f153feee8d5dd0d795b9782f4077f0817_prof);

        
        $__internal_d1c8d79725c1c5a6bce63c6253d1cfabb7f3b6c9648399f9f3d2f76501ac4e8e->leave($__internal_d1c8d79725c1c5a6bce63c6253d1cfabb7f3b6c9648399f9f3d2f76501ac4e8e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "/home/pratik/web/brainwit/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/money_widget.html.php");
    }
}
