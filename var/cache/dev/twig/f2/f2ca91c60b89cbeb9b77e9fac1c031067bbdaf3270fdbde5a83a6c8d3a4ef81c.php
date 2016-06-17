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
        $__internal_c1d3c32772ba9444f1c357a9767eb68df18cf66092901822d333a7f67825d946 = $this->env->getExtension("native_profiler");
        $__internal_c1d3c32772ba9444f1c357a9767eb68df18cf66092901822d333a7f67825d946->enter($__internal_c1d3c32772ba9444f1c357a9767eb68df18cf66092901822d333a7f67825d946_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_c1d3c32772ba9444f1c357a9767eb68df18cf66092901822d333a7f67825d946->leave($__internal_c1d3c32772ba9444f1c357a9767eb68df18cf66092901822d333a7f67825d946_prof);

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
