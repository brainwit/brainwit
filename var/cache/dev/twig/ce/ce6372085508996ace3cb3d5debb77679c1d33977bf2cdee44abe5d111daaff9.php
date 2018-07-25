<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_5290a5a34246a26095d6bb3b1e2a021f3e474a6860c4498366d440b6a0a3d82b extends Twig_Template
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
        $__internal_de0b5a1561f0bdc1bb88aaecd98180dbe5fdd1f2a848785c7184ba78c65be59a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de0b5a1561f0bdc1bb88aaecd98180dbe5fdd1f2a848785c7184ba78c65be59a->enter($__internal_de0b5a1561f0bdc1bb88aaecd98180dbe5fdd1f2a848785c7184ba78c65be59a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_dc9238d79618152a7f6db7b1b926014bba3b644ab7de7711a890bc5aa89be030 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc9238d79618152a7f6db7b1b926014bba3b644ab7de7711a890bc5aa89be030->enter($__internal_dc9238d79618152a7f6db7b1b926014bba3b644ab7de7711a890bc5aa89be030_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_de0b5a1561f0bdc1bb88aaecd98180dbe5fdd1f2a848785c7184ba78c65be59a->leave($__internal_de0b5a1561f0bdc1bb88aaecd98180dbe5fdd1f2a848785c7184ba78c65be59a_prof);

        
        $__internal_dc9238d79618152a7f6db7b1b926014bba3b644ab7de7711a890bc5aa89be030->leave($__internal_dc9238d79618152a7f6db7b1b926014bba3b644ab7de7711a890bc5aa89be030_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/home/pratik/web/brainwit/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
