<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_4ea0fb61e9124b98a6f4fefb8c5442657a9fecd68064b979a47c6009818ead9b extends Twig_Template
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
        $__internal_b8b2a7b4d11f09fb5d4eef5d6088ce4c3dbceb626dfef6d7b238c275da484e73 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8b2a7b4d11f09fb5d4eef5d6088ce4c3dbceb626dfef6d7b238c275da484e73->enter($__internal_b8b2a7b4d11f09fb5d4eef5d6088ce4c3dbceb626dfef6d7b238c275da484e73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_4061df439246ff3892e31cc5b501b70a9bd01e9ad6564c9dc29fb1eddbfd2de7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4061df439246ff3892e31cc5b501b70a9bd01e9ad6564c9dc29fb1eddbfd2de7->enter($__internal_4061df439246ff3892e31cc5b501b70a9bd01e9ad6564c9dc29fb1eddbfd2de7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_b8b2a7b4d11f09fb5d4eef5d6088ce4c3dbceb626dfef6d7b238c275da484e73->leave($__internal_b8b2a7b4d11f09fb5d4eef5d6088ce4c3dbceb626dfef6d7b238c275da484e73_prof);

        
        $__internal_4061df439246ff3892e31cc5b501b70a9bd01e9ad6564c9dc29fb1eddbfd2de7->leave($__internal_4061df439246ff3892e31cc5b501b70a9bd01e9ad6564c9dc29fb1eddbfd2de7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/home/pratik/web/brainwit/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
