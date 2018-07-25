<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_32e4c481536383d50cd9dd37f75507a360c64fe4de6b769666c5d971623fa9e5 extends Twig_Template
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
        $__internal_21d83b72702dfae9a53fd8eec885bd377d944e5744e84dc272babc0e966f2522 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21d83b72702dfae9a53fd8eec885bd377d944e5744e84dc272babc0e966f2522->enter($__internal_21d83b72702dfae9a53fd8eec885bd377d944e5744e84dc272babc0e966f2522_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_9365569e40803db0c39d859d0dce633f87369703458f4545aba2e0bcdcf55924 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9365569e40803db0c39d859d0dce633f87369703458f4545aba2e0bcdcf55924->enter($__internal_9365569e40803db0c39d859d0dce633f87369703458f4545aba2e0bcdcf55924_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_21d83b72702dfae9a53fd8eec885bd377d944e5744e84dc272babc0e966f2522->leave($__internal_21d83b72702dfae9a53fd8eec885bd377d944e5744e84dc272babc0e966f2522_prof);

        
        $__internal_9365569e40803db0c39d859d0dce633f87369703458f4545aba2e0bcdcf55924->leave($__internal_9365569e40803db0c39d859d0dce633f87369703458f4545aba2e0bcdcf55924_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/home/pratik/web/brainwit/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
