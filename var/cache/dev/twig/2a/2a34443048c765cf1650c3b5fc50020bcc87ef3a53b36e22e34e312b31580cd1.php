<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_e11d47d4a6f9001bfa6dfbd494c0705a1836463c4f00732dfdf5c3665f9bea0d extends Twig_Template
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
        $__internal_a99718b6cc2185d6509ebaadf49c6fb460a38f5d387b40589a49c010cff1652e = $this->env->getExtension("native_profiler");
        $__internal_a99718b6cc2185d6509ebaadf49c6fb460a38f5d387b40589a49c010cff1652e->enter($__internal_a99718b6cc2185d6509ebaadf49c6fb460a38f5d387b40589a49c010cff1652e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_a99718b6cc2185d6509ebaadf49c6fb460a38f5d387b40589a49c010cff1652e->leave($__internal_a99718b6cc2185d6509ebaadf49c6fb460a38f5d387b40589a49c010cff1652e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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