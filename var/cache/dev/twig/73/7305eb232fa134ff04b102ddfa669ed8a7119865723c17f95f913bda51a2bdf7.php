<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_b350d43cf6868693d834fcd10c6655e74f7c2fcee8930ff7714f491410d12dd4 extends Twig_Template
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
        $__internal_1d3a31fec1136ea2c80840ccee9ddc1cd780ef8ba780331f823d10230b5fdee2 = $this->env->getExtension("native_profiler");
        $__internal_1d3a31fec1136ea2c80840ccee9ddc1cd780ef8ba780331f823d10230b5fdee2->enter($__internal_1d3a31fec1136ea2c80840ccee9ddc1cd780ef8ba780331f823d10230b5fdee2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_1d3a31fec1136ea2c80840ccee9ddc1cd780ef8ba780331f823d10230b5fdee2->leave($__internal_1d3a31fec1136ea2c80840ccee9ddc1cd780ef8ba780331f823d10230b5fdee2_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
