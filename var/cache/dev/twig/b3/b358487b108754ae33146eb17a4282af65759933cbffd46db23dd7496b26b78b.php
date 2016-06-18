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
        $__internal_7f7084c983d07b2a4e149b04d4b99eeed37196079077756816cd09303945fe11 = $this->env->getExtension("native_profiler");
        $__internal_7f7084c983d07b2a4e149b04d4b99eeed37196079077756816cd09303945fe11->enter($__internal_7f7084c983d07b2a4e149b04d4b99eeed37196079077756816cd09303945fe11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_7f7084c983d07b2a4e149b04d4b99eeed37196079077756816cd09303945fe11->leave($__internal_7f7084c983d07b2a4e149b04d4b99eeed37196079077756816cd09303945fe11_prof);

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
