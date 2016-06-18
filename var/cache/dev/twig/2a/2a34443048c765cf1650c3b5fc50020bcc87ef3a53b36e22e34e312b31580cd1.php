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
        $__internal_c98d9e1ae69d05a667922386071aac0a28a156deaf39f4963ed2751ff9409c19 = $this->env->getExtension("native_profiler");
        $__internal_c98d9e1ae69d05a667922386071aac0a28a156deaf39f4963ed2751ff9409c19->enter($__internal_c98d9e1ae69d05a667922386071aac0a28a156deaf39f4963ed2751ff9409c19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_c98d9e1ae69d05a667922386071aac0a28a156deaf39f4963ed2751ff9409c19->leave($__internal_c98d9e1ae69d05a667922386071aac0a28a156deaf39f4963ed2751ff9409c19_prof);

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
