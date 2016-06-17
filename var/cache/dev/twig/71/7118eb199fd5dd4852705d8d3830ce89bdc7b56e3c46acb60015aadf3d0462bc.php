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
        $__internal_15606cf4017b780036ce2b1a60791a839f7180ab33b27fb6f87d1e167996129f = $this->env->getExtension("native_profiler");
        $__internal_15606cf4017b780036ce2b1a60791a839f7180ab33b27fb6f87d1e167996129f->enter($__internal_15606cf4017b780036ce2b1a60791a839f7180ab33b27fb6f87d1e167996129f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_15606cf4017b780036ce2b1a60791a839f7180ab33b27fb6f87d1e167996129f->leave($__internal_15606cf4017b780036ce2b1a60791a839f7180ab33b27fb6f87d1e167996129f_prof);

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
