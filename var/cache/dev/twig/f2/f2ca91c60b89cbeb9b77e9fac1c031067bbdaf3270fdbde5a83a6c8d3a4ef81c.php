<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_12acf848245f5190cd2d675950ddfe5f8559e64a611d7538edb8d6a62da4846b extends Twig_Template
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
        $__internal_075f9a5d0133d7e8c489d86a3b68c09d4dff6313ad36182f26e28107750d4bfc = $this->env->getExtension("native_profiler");
        $__internal_075f9a5d0133d7e8c489d86a3b68c09d4dff6313ad36182f26e28107750d4bfc->enter($__internal_075f9a5d0133d7e8c489d86a3b68c09d4dff6313ad36182f26e28107750d4bfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_075f9a5d0133d7e8c489d86a3b68c09d4dff6313ad36182f26e28107750d4bfc->leave($__internal_075f9a5d0133d7e8c489d86a3b68c09d4dff6313ad36182f26e28107750d4bfc_prof);

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
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
