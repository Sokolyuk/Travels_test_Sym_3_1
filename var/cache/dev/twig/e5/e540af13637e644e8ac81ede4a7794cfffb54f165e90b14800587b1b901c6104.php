<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_a29de44cb5d6f59e0b9e5770cbf4d5c6d87ccf4e62d6b59b13945d201c2fac5f extends Twig_Template
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
        $__internal_045d24f397ed508a3ec1aaff8376482fca22f5bfbbfc0a5b07f22a87d3d4dde4 = $this->env->getExtension("native_profiler");
        $__internal_045d24f397ed508a3ec1aaff8376482fca22f5bfbbfc0a5b07f22a87d3d4dde4->enter($__internal_045d24f397ed508a3ec1aaff8376482fca22f5bfbbfc0a5b07f22a87d3d4dde4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_045d24f397ed508a3ec1aaff8376482fca22f5bfbbfc0a5b07f22a87d3d4dde4->leave($__internal_045d24f397ed508a3ec1aaff8376482fca22f5bfbbfc0a5b07f22a87d3d4dde4_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
