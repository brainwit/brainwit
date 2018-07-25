<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_46badc8b4b6e4068b77294a33514b427c0c9333f4652b375a159293378ec6091 extends Twig_Template
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
        $__internal_a2428504d36ba03d7cd97e18cb433d2a78a488832c15335f9e9e74f301561d11 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2428504d36ba03d7cd97e18cb433d2a78a488832c15335f9e9e74f301561d11->enter($__internal_a2428504d36ba03d7cd97e18cb433d2a78a488832c15335f9e9e74f301561d11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_2564fe8cb87e6a7b52894c93052796a8c2ed2b8f8121f939d6e991fd32db6acb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2564fe8cb87e6a7b52894c93052796a8c2ed2b8f8121f939d6e991fd32db6acb->enter($__internal_2564fe8cb87e6a7b52894c93052796a8c2ed2b8f8121f939d6e991fd32db6acb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_a2428504d36ba03d7cd97e18cb433d2a78a488832c15335f9e9e74f301561d11->leave($__internal_a2428504d36ba03d7cd97e18cb433d2a78a488832c15335f9e9e74f301561d11_prof);

        
        $__internal_2564fe8cb87e6a7b52894c93052796a8c2ed2b8f8121f939d6e991fd32db6acb->leave($__internal_2564fe8cb87e6a7b52894c93052796a8c2ed2b8f8121f939d6e991fd32db6acb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/home/pratik/web/brainwit/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
