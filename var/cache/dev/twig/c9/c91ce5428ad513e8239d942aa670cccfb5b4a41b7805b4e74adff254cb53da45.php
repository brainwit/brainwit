<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_c4ce776cdc8e5090498641af38149b7c0f19f0a052d446f69ef69ea45e261a9f extends Twig_Template
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
        $__internal_c72f78312ac2863093ac431e9dbd1cc1f6d0da0b0211149128a95d71e0076e07 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c72f78312ac2863093ac431e9dbd1cc1f6d0da0b0211149128a95d71e0076e07->enter($__internal_c72f78312ac2863093ac431e9dbd1cc1f6d0da0b0211149128a95d71e0076e07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_96480d04ea6142e91f2ff3fe6eea8e7aefb8a6276c4871cc150c1dd78960cabf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96480d04ea6142e91f2ff3fe6eea8e7aefb8a6276c4871cc150c1dd78960cabf->enter($__internal_96480d04ea6142e91f2ff3fe6eea8e7aefb8a6276c4871cc150c1dd78960cabf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_c72f78312ac2863093ac431e9dbd1cc1f6d0da0b0211149128a95d71e0076e07->leave($__internal_c72f78312ac2863093ac431e9dbd1cc1f6d0da0b0211149128a95d71e0076e07_prof);

        
        $__internal_96480d04ea6142e91f2ff3fe6eea8e7aefb8a6276c4871cc150c1dd78960cabf->leave($__internal_96480d04ea6142e91f2ff3fe6eea8e7aefb8a6276c4871cc150c1dd78960cabf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/home/pratik/web/brainwit/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
