<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_ed9a6c27c664ad0dabe5e7672d0e45aebbc8bed5c67f7f20eff91cfd8fd9e2cd extends Twig_Template
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
        $__internal_d05f07380cf92704157f6e1e92c65ab545f562b82b29ed2a819e338974aaa9c2 = $this->env->getExtension("native_profiler");
        $__internal_d05f07380cf92704157f6e1e92c65ab545f562b82b29ed2a819e338974aaa9c2->enter($__internal_d05f07380cf92704157f6e1e92c65ab545f562b82b29ed2a819e338974aaa9c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_d05f07380cf92704157f6e1e92c65ab545f562b82b29ed2a819e338974aaa9c2->leave($__internal_d05f07380cf92704157f6e1e92c65ab545f562b82b29ed2a819e338974aaa9c2_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
