<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_a64157779b5ff021ec3ff2fdf999422dee52b0e38efd92506823029f62cb34d7 extends Twig_Template
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
        $__internal_9d0493977895404c3a8a4d26ca89d5f127fbe658d3b6aa61f3b122b19df3ab5e = $this->env->getExtension("native_profiler");
        $__internal_9d0493977895404c3a8a4d26ca89d5f127fbe658d3b6aa61f3b122b19df3ab5e->enter($__internal_9d0493977895404c3a8a4d26ca89d5f127fbe658d3b6aa61f3b122b19df3ab5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_9d0493977895404c3a8a4d26ca89d5f127fbe658d3b6aa61f3b122b19df3ab5e->leave($__internal_9d0493977895404c3a8a4d26ca89d5f127fbe658d3b6aa61f3b122b19df3ab5e_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
