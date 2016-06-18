<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_8fcd5fe209bb2dae919508181c3691f9f3384a0d303fddc613adf91f4fc7e621 extends Twig_Template
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
        $__internal_03de21a3ed912b3a5bdc36662ac8404dc9957673ad85e58b6fdb12479db4cddb = $this->env->getExtension("native_profiler");
        $__internal_03de21a3ed912b3a5bdc36662ac8404dc9957673ad85e58b6fdb12479db4cddb->enter($__internal_03de21a3ed912b3a5bdc36662ac8404dc9957673ad85e58b6fdb12479db4cddb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

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
        
        $__internal_03de21a3ed912b3a5bdc36662ac8404dc9957673ad85e58b6fdb12479db4cddb->leave($__internal_03de21a3ed912b3a5bdc36662ac8404dc9957673ad85e58b6fdb12479db4cddb_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
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
