<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_ca0c8c691f8a78a8228b6d9a96c1157eb78470215a364bbbbf489a8c1b62174d extends Twig_Template
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
        $__internal_9e22b0c6763c1d4354111f4cbe8093fc8201f77ec88d07eab76a3651f5b04ec7 = $this->env->getExtension("native_profiler");
        $__internal_9e22b0c6763c1d4354111f4cbe8093fc8201f77ec88d07eab76a3651f5b04ec7->enter($__internal_9e22b0c6763c1d4354111f4cbe8093fc8201f77ec88d07eab76a3651f5b04ec7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_9e22b0c6763c1d4354111f4cbe8093fc8201f77ec88d07eab76a3651f5b04ec7->leave($__internal_9e22b0c6763c1d4354111f4cbe8093fc8201f77ec88d07eab76a3651f5b04ec7_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
