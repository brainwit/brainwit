<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_65745dacfda34bf8ca86fd3d02a00a1cfd699b81d46dae317ac597c2e881dfc0 extends Twig_Template
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
        $__internal_a12e0564a6d77dca1a0371b75d4641f8a854bf6e8848f5e254a2c112e3c47253 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a12e0564a6d77dca1a0371b75d4641f8a854bf6e8848f5e254a2c112e3c47253->enter($__internal_a12e0564a6d77dca1a0371b75d4641f8a854bf6e8848f5e254a2c112e3c47253_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_6693462562716e86860346a0c2fbd861ce30e37d171b3edc9e8ce55e0b462e9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6693462562716e86860346a0c2fbd861ce30e37d171b3edc9e8ce55e0b462e9a->enter($__internal_6693462562716e86860346a0c2fbd861ce30e37d171b3edc9e8ce55e0b462e9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_a12e0564a6d77dca1a0371b75d4641f8a854bf6e8848f5e254a2c112e3c47253->leave($__internal_a12e0564a6d77dca1a0371b75d4641f8a854bf6e8848f5e254a2c112e3c47253_prof);

        
        $__internal_6693462562716e86860346a0c2fbd861ce30e37d171b3edc9e8ce55e0b462e9a->leave($__internal_6693462562716e86860346a0c2fbd861ce30e37d171b3edc9e8ce55e0b462e9a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/home/pratik/web/brainwit/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
