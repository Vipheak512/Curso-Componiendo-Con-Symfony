<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_a578328802c4b404def3be14a096784cbfc79376723443982e53544f6003a9cc extends Twig_Template
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
        $__internal_d59745a5112719dac1f4252e7002d42cdbcba8662e3a33ef40ec062fad494c21 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d59745a5112719dac1f4252e7002d42cdbcba8662e3a33ef40ec062fad494c21->enter($__internal_d59745a5112719dac1f4252e7002d42cdbcba8662e3a33ef40ec062fad494c21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        $__internal_9050474a20a5feebe7506c681af6b158b52412434eb8bd27050f5a0a5e756403 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9050474a20a5feebe7506c681af6b158b52412434eb8bd27050f5a0a5e756403->enter($__internal_9050474a20a5feebe7506c681af6b158b52412434eb8bd27050f5a0a5e756403_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_d59745a5112719dac1f4252e7002d42cdbcba8662e3a33ef40ec062fad494c21->leave($__internal_d59745a5112719dac1f4252e7002d42cdbcba8662e3a33ef40ec062fad494c21_prof);

        
        $__internal_9050474a20a5feebe7506c681af6b158b52412434eb8bd27050f5a0a5e756403->leave($__internal_9050474a20a5feebe7506c681af6b158b52412434eb8bd27050f5a0a5e756403_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "@Twig/Exception/exception.rdf.twig", "C:\\Users\\Edward\\Curso-Componiendo-Con-Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.rdf.twig");
    }
}
