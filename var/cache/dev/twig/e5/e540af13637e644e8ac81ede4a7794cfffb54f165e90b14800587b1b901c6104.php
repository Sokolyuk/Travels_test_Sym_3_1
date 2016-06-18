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
        $__internal_b3240471492cc85e09333f1dd627488eb0a34d99be42fcd4496a955d66d380be = $this->env->getExtension("native_profiler");
        $__internal_b3240471492cc85e09333f1dd627488eb0a34d99be42fcd4496a955d66d380be->enter($__internal_b3240471492cc85e09333f1dd627488eb0a34d99be42fcd4496a955d66d380be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

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
        
        $__internal_b3240471492cc85e09333f1dd627488eb0a34d99be42fcd4496a955d66d380be->leave($__internal_b3240471492cc85e09333f1dd627488eb0a34d99be42fcd4496a955d66d380be_prof);

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
