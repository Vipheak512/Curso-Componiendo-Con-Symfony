<?php

/* WebProfilerBundle:Profiler:header.html.twig */
class __TwigTemplate_cc1701f716ab3d8bad0bcf45c14162bdc869fb090b799ab9d29904c6de899182 extends Twig_Template
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
        $__internal_809a2628831a407abc45415836c557871558cb8401058eae0ab05075db233e24 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_809a2628831a407abc45415836c557871558cb8401058eae0ab05075db233e24->enter($__internal_809a2628831a407abc45415836c557871558cb8401058eae0ab05075db233e24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        $__internal_ee3569eb08f8ba8c45d9eee22c67386a126c58bdafa54d1b8cb70593dcd678a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee3569eb08f8ba8c45d9eee22c67386a126c58bdafa54d1b8cb70593dcd678a7->enter($__internal_ee3569eb08f8ba8c45d9eee22c67386a126c58bdafa54d1b8cb70593dcd678a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_809a2628831a407abc45415836c557871558cb8401058eae0ab05075db233e24->leave($__internal_809a2628831a407abc45415836c557871558cb8401058eae0ab05075db233e24_prof);

        
        $__internal_ee3569eb08f8ba8c45d9eee22c67386a126c58bdafa54d1b8cb70593dcd678a7->leave($__internal_ee3569eb08f8ba8c45d9eee22c67386a126c58bdafa54d1b8cb70593dcd678a7_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "WebProfilerBundle:Profiler:header.html.twig", "C:\\Users\\Edward\\Curso-Componiendo-Con-Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/header.html.twig");
    }
}
