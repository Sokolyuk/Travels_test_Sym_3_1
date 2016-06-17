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
        $__internal_cee694e29475b7d0e7e59fdd7014a56e4ade2139ef02e743de2a01b3fd0f0a8c = $this->env->getExtension("native_profiler");
        $__internal_cee694e29475b7d0e7e59fdd7014a56e4ade2139ef02e743de2a01b3fd0f0a8c->enter($__internal_cee694e29475b7d0e7e59fdd7014a56e4ade2139ef02e743de2a01b3fd0f0a8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

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
        
        $__internal_cee694e29475b7d0e7e59fdd7014a56e4ade2139ef02e743de2a01b3fd0f0a8c->leave($__internal_cee694e29475b7d0e7e59fdd7014a56e4ade2139ef02e743de2a01b3fd0f0a8c_prof);

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
