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
        $__internal_fc24f171b717d42e0cccff784ed3e552bb5f01bedf6be8305154f05b495654d7 = $this->env->getExtension("native_profiler");
        $__internal_fc24f171b717d42e0cccff784ed3e552bb5f01bedf6be8305154f05b495654d7->enter($__internal_fc24f171b717d42e0cccff784ed3e552bb5f01bedf6be8305154f05b495654d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_fc24f171b717d42e0cccff784ed3e552bb5f01bedf6be8305154f05b495654d7->leave($__internal_fc24f171b717d42e0cccff784ed3e552bb5f01bedf6be8305154f05b495654d7_prof);

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
