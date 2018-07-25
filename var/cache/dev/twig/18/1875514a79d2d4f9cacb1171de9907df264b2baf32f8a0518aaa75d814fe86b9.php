<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_0f52fd5d75bf84a2e90fc07ec2872336c4eb2373bdaef862c6473dde17dc8724 extends Twig_Template
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
        $__internal_e48bb37c1adf50e330bea758451b5f3db0bba510b8f36a1bab2ae4a963e129de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e48bb37c1adf50e330bea758451b5f3db0bba510b8f36a1bab2ae4a963e129de->enter($__internal_e48bb37c1adf50e330bea758451b5f3db0bba510b8f36a1bab2ae4a963e129de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_a93a8362762e9fbb111ab84965693fce9cfd4ae8d88ed8913758481766d1b5f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a93a8362762e9fbb111ab84965693fce9cfd4ae8d88ed8913758481766d1b5f7->enter($__internal_a93a8362762e9fbb111ab84965693fce9cfd4ae8d88ed8913758481766d1b5f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_e48bb37c1adf50e330bea758451b5f3db0bba510b8f36a1bab2ae4a963e129de->leave($__internal_e48bb37c1adf50e330bea758451b5f3db0bba510b8f36a1bab2ae4a963e129de_prof);

        
        $__internal_a93a8362762e9fbb111ab84965693fce9cfd4ae8d88ed8913758481766d1b5f7->leave($__internal_a93a8362762e9fbb111ab84965693fce9cfd4ae8d88ed8913758481766d1b5f7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/home/pratik/web/brainwit/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
