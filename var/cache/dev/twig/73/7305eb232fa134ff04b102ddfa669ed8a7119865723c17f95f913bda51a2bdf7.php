<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_b350d43cf6868693d834fcd10c6655e74f7c2fcee8930ff7714f491410d12dd4 extends Twig_Template
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
        $__internal_a657a7cdfd43370265e09bc1e5c8862b8c2b63072cfeff9a61e78a06375df873 = $this->env->getExtension("native_profiler");
        $__internal_a657a7cdfd43370265e09bc1e5c8862b8c2b63072cfeff9a61e78a06375df873->enter($__internal_a657a7cdfd43370265e09bc1e5c8862b8c2b63072cfeff9a61e78a06375df873_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_a657a7cdfd43370265e09bc1e5c8862b8c2b63072cfeff9a61e78a06375df873->leave($__internal_a657a7cdfd43370265e09bc1e5c8862b8c2b63072cfeff9a61e78a06375df873_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
