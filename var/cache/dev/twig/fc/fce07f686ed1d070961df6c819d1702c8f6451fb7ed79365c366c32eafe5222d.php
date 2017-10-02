<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_f483fb8eb43fd5139bc5a55397d4158c4140f40505b81b81151a3f167637455b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_68d8bbd383be8e59ae8ec902036b365317a3649cd7d424878124528de8f71877 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68d8bbd383be8e59ae8ec902036b365317a3649cd7d424878124528de8f71877->enter($__internal_68d8bbd383be8e59ae8ec902036b365317a3649cd7d424878124528de8f71877_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_7b0e6b7469ff1785658e1d700176d5f1f89fa11ec902abbdab30ecdf0f12e81c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b0e6b7469ff1785658e1d700176d5f1f89fa11ec902abbdab30ecdf0f12e81c->enter($__internal_7b0e6b7469ff1785658e1d700176d5f1f89fa11ec902abbdab30ecdf0f12e81c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_68d8bbd383be8e59ae8ec902036b365317a3649cd7d424878124528de8f71877->leave($__internal_68d8bbd383be8e59ae8ec902036b365317a3649cd7d424878124528de8f71877_prof);

        
        $__internal_7b0e6b7469ff1785658e1d700176d5f1f89fa11ec902abbdab30ecdf0f12e81c->leave($__internal_7b0e6b7469ff1785658e1d700176d5f1f89fa11ec902abbdab30ecdf0f12e81c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_51765c4b23b12f711204e2d87e4f74652fc62dc7b2350b914c7933e93c5ad509 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51765c4b23b12f711204e2d87e4f74652fc62dc7b2350b914c7933e93c5ad509->enter($__internal_51765c4b23b12f711204e2d87e4f74652fc62dc7b2350b914c7933e93c5ad509_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e9455bacf0d092c0587ef0d738e0c09d2d86b08bac6d17d88989fc83ec83e5bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9455bacf0d092c0587ef0d738e0c09d2d86b08bac6d17d88989fc83ec83e5bf->enter($__internal_e9455bacf0d092c0587ef0d738e0c09d2d86b08bac6d17d88989fc83ec83e5bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_e9455bacf0d092c0587ef0d738e0c09d2d86b08bac6d17d88989fc83ec83e5bf->leave($__internal_e9455bacf0d092c0587ef0d738e0c09d2d86b08bac6d17d88989fc83ec83e5bf_prof);

        
        $__internal_51765c4b23b12f711204e2d87e4f74652fc62dc7b2350b914c7933e93c5ad509->leave($__internal_51765c4b23b12f711204e2d87e4f74652fc62dc7b2350b914c7933e93c5ad509_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_d70c5635df21ff65b9c259ef82fe52456475c03869a21640f4fe410499277737 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d70c5635df21ff65b9c259ef82fe52456475c03869a21640f4fe410499277737->enter($__internal_d70c5635df21ff65b9c259ef82fe52456475c03869a21640f4fe410499277737_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_121bb04a1fa8bfb197b9366023a31cf41e7b6d4f83d23ba4b1eb22b33460fe10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_121bb04a1fa8bfb197b9366023a31cf41e7b6d4f83d23ba4b1eb22b33460fe10->enter($__internal_121bb04a1fa8bfb197b9366023a31cf41e7b6d4f83d23ba4b1eb22b33460fe10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_121bb04a1fa8bfb197b9366023a31cf41e7b6d4f83d23ba4b1eb22b33460fe10->leave($__internal_121bb04a1fa8bfb197b9366023a31cf41e7b6d4f83d23ba4b1eb22b33460fe10_prof);

        
        $__internal_d70c5635df21ff65b9c259ef82fe52456475c03869a21640f4fe410499277737->leave($__internal_d70c5635df21ff65b9c259ef82fe52456475c03869a21640f4fe410499277737_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_7bcd73c164569860533185ac5614b74f20dbe43e6fcbee8642a43d178b4eb6ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7bcd73c164569860533185ac5614b74f20dbe43e6fcbee8642a43d178b4eb6ca->enter($__internal_7bcd73c164569860533185ac5614b74f20dbe43e6fcbee8642a43d178b4eb6ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f8f79672a36f388a4c2c83a598875b62ffebef456e35b2ce702edc875a141515 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8f79672a36f388a4c2c83a598875b62ffebef456e35b2ce702edc875a141515->enter($__internal_f8f79672a36f388a4c2c83a598875b62ffebef456e35b2ce702edc875a141515_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_f8f79672a36f388a4c2c83a598875b62ffebef456e35b2ce702edc875a141515->leave($__internal_f8f79672a36f388a4c2c83a598875b62ffebef456e35b2ce702edc875a141515_prof);

        
        $__internal_7bcd73c164569860533185ac5614b74f20dbe43e6fcbee8642a43d178b4eb6ca->leave($__internal_7bcd73c164569860533185ac5614b74f20dbe43e6fcbee8642a43d178b4eb6ca_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "TwigBundle:Exception:exception_full.html.twig", "C:\\Users\\Edward\\Curso-Componiendo-Con-Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
