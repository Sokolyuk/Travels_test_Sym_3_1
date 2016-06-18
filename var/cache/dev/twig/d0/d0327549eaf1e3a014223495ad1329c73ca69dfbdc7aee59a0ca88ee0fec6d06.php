<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_e70d3951dc7191f51e1f268561c2b5c65dbc2a7f26b941f4c2fda289564653d2 extends Twig_Template
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
        $__internal_a47dd6ecb96d5049cebb49a24415a01d73037a4df1802981374e55f2081e36e4 = $this->env->getExtension("native_profiler");
        $__internal_a47dd6ecb96d5049cebb49a24415a01d73037a4df1802981374e55f2081e36e4->enter($__internal_a47dd6ecb96d5049cebb49a24415a01d73037a4df1802981374e55f2081e36e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

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
        
        $__internal_a47dd6ecb96d5049cebb49a24415a01d73037a4df1802981374e55f2081e36e4->leave($__internal_a47dd6ecb96d5049cebb49a24415a01d73037a4df1802981374e55f2081e36e4_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
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
