<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_0a613460bff8d95f3e4cd222f89856befc9503068b7f3b576bb61fe5bbbc2221 extends Twig_Template
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
        $__internal_bb74f5afbc78d06c81aca7bead0cf5afa1552987134b3f7c00b612795c035280 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb74f5afbc78d06c81aca7bead0cf5afa1552987134b3f7c00b612795c035280->enter($__internal_bb74f5afbc78d06c81aca7bead0cf5afa1552987134b3f7c00b612795c035280_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_60c4d8f2dfc7b95485be54d27001a0a495bba8b7be0b3c3871fc47761c455333 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60c4d8f2dfc7b95485be54d27001a0a495bba8b7be0b3c3871fc47761c455333->enter($__internal_60c4d8f2dfc7b95485be54d27001a0a495bba8b7be0b3c3871fc47761c455333_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_bb74f5afbc78d06c81aca7bead0cf5afa1552987134b3f7c00b612795c035280->leave($__internal_bb74f5afbc78d06c81aca7bead0cf5afa1552987134b3f7c00b612795c035280_prof);

        
        $__internal_60c4d8f2dfc7b95485be54d27001a0a495bba8b7be0b3c3871fc47761c455333->leave($__internal_60c4d8f2dfc7b95485be54d27001a0a495bba8b7be0b3c3871fc47761c455333_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/home/pratik/web/brainwit/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
