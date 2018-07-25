<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_2238b248ff0f46ca21dbcfe21b99cf074d67efd9ad9c11370b8ff3be4595c417 extends Twig_Template
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
        $__internal_6c4cbdc654c1625d81f17782a623d7a44358a03b888a9d08b868d4ce3ae5ce53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c4cbdc654c1625d81f17782a623d7a44358a03b888a9d08b868d4ce3ae5ce53->enter($__internal_6c4cbdc654c1625d81f17782a623d7a44358a03b888a9d08b868d4ce3ae5ce53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_81bc2f15ad5a88c27868420cf72cd638498630fcd37bc05ab3ac7e615be8d342 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81bc2f15ad5a88c27868420cf72cd638498630fcd37bc05ab3ac7e615be8d342->enter($__internal_81bc2f15ad5a88c27868420cf72cd638498630fcd37bc05ab3ac7e615be8d342_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_6c4cbdc654c1625d81f17782a623d7a44358a03b888a9d08b868d4ce3ae5ce53->leave($__internal_6c4cbdc654c1625d81f17782a623d7a44358a03b888a9d08b868d4ce3ae5ce53_prof);

        
        $__internal_81bc2f15ad5a88c27868420cf72cd638498630fcd37bc05ab3ac7e615be8d342->leave($__internal_81bc2f15ad5a88c27868420cf72cd638498630fcd37bc05ab3ac7e615be8d342_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/home/pratik/web/brainwit/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
