<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_0cba50e659729e212b27f322c0d0d976cd16bbd0f253a9f835256792c17a6fdb extends Twig_Template
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
        $__internal_bc1f289471d8afba894f09550e945836c455a076141df9b912267f647cc15efc = $this->env->getExtension("native_profiler");
        $__internal_bc1f289471d8afba894f09550e945836c455a076141df9b912267f647cc15efc->enter($__internal_bc1f289471d8afba894f09550e945836c455a076141df9b912267f647cc15efc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_bc1f289471d8afba894f09550e945836c455a076141df9b912267f647cc15efc->leave($__internal_bc1f289471d8afba894f09550e945836c455a076141df9b912267f647cc15efc_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
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
