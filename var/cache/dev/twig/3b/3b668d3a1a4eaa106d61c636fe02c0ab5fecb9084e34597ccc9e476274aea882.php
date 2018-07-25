<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_a82370ae76458a5c61e4c6d4c883fbaab43d42597c85b0b54beaf4400025eb71 extends Twig_Template
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
        $__internal_286ee492654407faf8e3fd173d6eb52faeebfa9a769edaa593d5847adfeabb9e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_286ee492654407faf8e3fd173d6eb52faeebfa9a769edaa593d5847adfeabb9e->enter($__internal_286ee492654407faf8e3fd173d6eb52faeebfa9a769edaa593d5847adfeabb9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_05edb45a5ede96dc5ee451f2b1c09637910be33311b2ea172e7654561bfbb65e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05edb45a5ede96dc5ee451f2b1c09637910be33311b2ea172e7654561bfbb65e->enter($__internal_05edb45a5ede96dc5ee451f2b1c09637910be33311b2ea172e7654561bfbb65e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_286ee492654407faf8e3fd173d6eb52faeebfa9a769edaa593d5847adfeabb9e->leave($__internal_286ee492654407faf8e3fd173d6eb52faeebfa9a769edaa593d5847adfeabb9e_prof);

        
        $__internal_05edb45a5ede96dc5ee451f2b1c09637910be33311b2ea172e7654561bfbb65e->leave($__internal_05edb45a5ede96dc5ee451f2b1c09637910be33311b2ea172e7654561bfbb65e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/home/pratik/web/brainwit/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
