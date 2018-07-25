<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_d78503504fb6b096f928955d266daa015d957a8b58d47e03bfb63bdce6b1203b extends Twig_Template
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
        $__internal_a1249f025dcdb77250ea16c63eff651a6046f90cc8e01aee4c00a884fe7924f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1249f025dcdb77250ea16c63eff651a6046f90cc8e01aee4c00a884fe7924f7->enter($__internal_a1249f025dcdb77250ea16c63eff651a6046f90cc8e01aee4c00a884fe7924f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_35a4f2211cfdf1c47f79c221403778786d3ccd819ee530f3e1422ea4cd5b8f1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35a4f2211cfdf1c47f79c221403778786d3ccd819ee530f3e1422ea4cd5b8f1a->enter($__internal_35a4f2211cfdf1c47f79c221403778786d3ccd819ee530f3e1422ea4cd5b8f1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_a1249f025dcdb77250ea16c63eff651a6046f90cc8e01aee4c00a884fe7924f7->leave($__internal_a1249f025dcdb77250ea16c63eff651a6046f90cc8e01aee4c00a884fe7924f7_prof);

        
        $__internal_35a4f2211cfdf1c47f79c221403778786d3ccd819ee530f3e1422ea4cd5b8f1a->leave($__internal_35a4f2211cfdf1c47f79c221403778786d3ccd819ee530f3e1422ea4cd5b8f1a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/home/pratik/web/brainwit/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
