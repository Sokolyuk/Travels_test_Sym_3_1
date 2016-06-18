<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_dd32b28f67d8c161278bb3195613996fe109bbfa0a22a9cbada5f758c333866d extends Twig_Template
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
        $__internal_0a2fa005b1aba0be255b2fcb285b5599696a681b8c07d552f602628a307e7df9 = $this->env->getExtension("native_profiler");
        $__internal_0a2fa005b1aba0be255b2fcb285b5599696a681b8c07d552f602628a307e7df9->enter($__internal_0a2fa005b1aba0be255b2fcb285b5599696a681b8c07d552f602628a307e7df9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_0a2fa005b1aba0be255b2fcb285b5599696a681b8c07d552f602628a307e7df9->leave($__internal_0a2fa005b1aba0be255b2fcb285b5599696a681b8c07d552f602628a307e7df9_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
