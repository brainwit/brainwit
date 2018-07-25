<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_69787b8f45555631b7dd60dddf820b29a6106424c88235bb45364dc950e1a374 extends Twig_Template
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
        $__internal_310987736a77d7e8ad50d396008df5870d9b4bb2cf66524cb7314de1f3495e36 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_310987736a77d7e8ad50d396008df5870d9b4bb2cf66524cb7314de1f3495e36->enter($__internal_310987736a77d7e8ad50d396008df5870d9b4bb2cf66524cb7314de1f3495e36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_dbe9b434fe351757f0ea7d8b68d6b86d97a09766417a417622e3a0595d0f83e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbe9b434fe351757f0ea7d8b68d6b86d97a09766417a417622e3a0595d0f83e8->enter($__internal_dbe9b434fe351757f0ea7d8b68d6b86d97a09766417a417622e3a0595d0f83e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_310987736a77d7e8ad50d396008df5870d9b4bb2cf66524cb7314de1f3495e36->leave($__internal_310987736a77d7e8ad50d396008df5870d9b4bb2cf66524cb7314de1f3495e36_prof);

        
        $__internal_dbe9b434fe351757f0ea7d8b68d6b86d97a09766417a417622e3a0595d0f83e8->leave($__internal_dbe9b434fe351757f0ea7d8b68d6b86d97a09766417a417622e3a0595d0f83e8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/home/pratik/web/brainwit/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
