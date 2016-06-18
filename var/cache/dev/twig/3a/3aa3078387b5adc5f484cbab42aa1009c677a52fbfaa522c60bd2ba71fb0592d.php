<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_44ada42ba9b1c3682b50a0bb2903ea9f6aa23d32cac88f4877e2d82abe54d5d3 extends Twig_Template
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
        $__internal_f49f28832550a69ae369223794bea7adbe56b5171ebe9e150a21581621260e68 = $this->env->getExtension("native_profiler");
        $__internal_f49f28832550a69ae369223794bea7adbe56b5171ebe9e150a21581621260e68->enter($__internal_f49f28832550a69ae369223794bea7adbe56b5171ebe9e150a21581621260e68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

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
        
        $__internal_f49f28832550a69ae369223794bea7adbe56b5171ebe9e150a21581621260e68->leave($__internal_f49f28832550a69ae369223794bea7adbe56b5171ebe9e150a21581621260e68_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
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
