<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_7d6eaf2558faaf1a0ae90eeb12597f5e898f179b9d1c2051a6238fdc9851421c extends Twig_Template
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
        $__internal_b78afe2314d602080c37c30a7772f594cd6c449c6e0cd38f8227662a3b82eda0 = $this->env->getExtension("native_profiler");
        $__internal_b78afe2314d602080c37c30a7772f594cd6c449c6e0cd38f8227662a3b82eda0->enter($__internal_b78afe2314d602080c37c30a7772f594cd6c449c6e0cd38f8227662a3b82eda0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_b78afe2314d602080c37c30a7772f594cd6c449c6e0cd38f8227662a3b82eda0->leave($__internal_b78afe2314d602080c37c30a7772f594cd6c449c6e0cd38f8227662a3b82eda0_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
