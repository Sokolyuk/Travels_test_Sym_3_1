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
        $__internal_62ea14b5f0cb1dad20077ba4917f6080cb9af52b6d4b577c5f9cda425b4f716a = $this->env->getExtension("native_profiler");
        $__internal_62ea14b5f0cb1dad20077ba4917f6080cb9af52b6d4b577c5f9cda425b4f716a->enter($__internal_62ea14b5f0cb1dad20077ba4917f6080cb9af52b6d4b577c5f9cda425b4f716a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_62ea14b5f0cb1dad20077ba4917f6080cb9af52b6d4b577c5f9cda425b4f716a->leave($__internal_62ea14b5f0cb1dad20077ba4917f6080cb9af52b6d4b577c5f9cda425b4f716a_prof);

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
