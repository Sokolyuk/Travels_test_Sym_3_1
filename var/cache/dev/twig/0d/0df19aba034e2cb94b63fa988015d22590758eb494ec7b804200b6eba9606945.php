<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_b322f0cf82b939e5085e18af08b4e410e495706485c2b29738bf0f20566418da extends Twig_Template
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
        $__internal_77322dee8ff73373306bb00768f047ca132d8cb3fb39244f31ccaa1d1acd468f = $this->env->getExtension("native_profiler");
        $__internal_77322dee8ff73373306bb00768f047ca132d8cb3fb39244f31ccaa1d1acd468f->enter($__internal_77322dee8ff73373306bb00768f047ca132d8cb3fb39244f31ccaa1d1acd468f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_77322dee8ff73373306bb00768f047ca132d8cb3fb39244f31ccaa1d1acd468f->leave($__internal_77322dee8ff73373306bb00768f047ca132d8cb3fb39244f31ccaa1d1acd468f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
