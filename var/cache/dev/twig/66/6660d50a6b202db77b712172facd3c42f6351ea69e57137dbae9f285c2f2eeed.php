<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_97f84cba036027b3815354ded6b88be556a78664ec2b5f65f80fbdd1ed4ac8db extends Twig_Template
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
        $__internal_11586e58b8baf392caa9dc3210dff9145fc31da61182f8c71177667271dc2c1e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11586e58b8baf392caa9dc3210dff9145fc31da61182f8c71177667271dc2c1e->enter($__internal_11586e58b8baf392caa9dc3210dff9145fc31da61182f8c71177667271dc2c1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_4b8b4dccbed03dc6ab7ce46de2425ed7442b52d58184d6e1803bcc8347cd567f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b8b4dccbed03dc6ab7ce46de2425ed7442b52d58184d6e1803bcc8347cd567f->enter($__internal_4b8b4dccbed03dc6ab7ce46de2425ed7442b52d58184d6e1803bcc8347cd567f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_11586e58b8baf392caa9dc3210dff9145fc31da61182f8c71177667271dc2c1e->leave($__internal_11586e58b8baf392caa9dc3210dff9145fc31da61182f8c71177667271dc2c1e_prof);

        
        $__internal_4b8b4dccbed03dc6ab7ce46de2425ed7442b52d58184d6e1803bcc8347cd567f->leave($__internal_4b8b4dccbed03dc6ab7ce46de2425ed7442b52d58184d6e1803bcc8347cd567f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
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
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "C:\\Users\\Edward\\Curso-Componiendo-Con-Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\checkbox_widget.html.php");
    }
}
