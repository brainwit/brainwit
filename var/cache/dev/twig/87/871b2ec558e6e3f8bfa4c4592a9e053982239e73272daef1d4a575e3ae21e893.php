<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_ec1d7375e20d3f49b5b347decaa1bb97b35616e5a49d90689b7e87f4c24acf28 extends Twig_Template
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
        $__internal_ebf4df9510ad60678d3b5e1c0d12c0c0b25f49016bd6e13b826d321abd723f16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ebf4df9510ad60678d3b5e1c0d12c0c0b25f49016bd6e13b826d321abd723f16->enter($__internal_ebf4df9510ad60678d3b5e1c0d12c0c0b25f49016bd6e13b826d321abd723f16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_11f82c68ba77d61af727d4bfdc07cd0ddb9ccac5aa2d864ce94575b241a9e5ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11f82c68ba77d61af727d4bfdc07cd0ddb9ccac5aa2d864ce94575b241a9e5ce->enter($__internal_11f82c68ba77d61af727d4bfdc07cd0ddb9ccac5aa2d864ce94575b241a9e5ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_ebf4df9510ad60678d3b5e1c0d12c0c0b25f49016bd6e13b826d321abd723f16->leave($__internal_ebf4df9510ad60678d3b5e1c0d12c0c0b25f49016bd6e13b826d321abd723f16_prof);

        
        $__internal_11f82c68ba77d61af727d4bfdc07cd0ddb9ccac5aa2d864ce94575b241a9e5ce->leave($__internal_11f82c68ba77d61af727d4bfdc07cd0ddb9ccac5aa2d864ce94575b241a9e5ce_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/home/pratik/web/brainwit/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
