<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_1f2bee8b5d39e9519ebc8f87656e0ec2a490e299a37496d2b4b9e2a071888cc2 extends Twig_Template
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
        $__internal_b78bc78fba00a9ef4344c6762a4ef11105d232b35104718b7fe266147ce0b02d = $this->env->getExtension("native_profiler");
        $__internal_b78bc78fba00a9ef4344c6762a4ef11105d232b35104718b7fe266147ce0b02d->enter($__internal_b78bc78fba00a9ef4344c6762a4ef11105d232b35104718b7fe266147ce0b02d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_b78bc78fba00a9ef4344c6762a4ef11105d232b35104718b7fe266147ce0b02d->leave($__internal_b78bc78fba00a9ef4344c6762a4ef11105d232b35104718b7fe266147ce0b02d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
