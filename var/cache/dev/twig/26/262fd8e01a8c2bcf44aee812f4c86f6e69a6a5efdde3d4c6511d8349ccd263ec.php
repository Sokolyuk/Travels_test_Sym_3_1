<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_3f2cb5b88d24a94b3111f3afd3ef9f33be4cc9e21ba95737276940c9ca447d52 extends Twig_Template
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
        $__internal_fa156c861fdee2a745667ecd293ab585b4e85c561c49e8b9e9bd67e539b8cbbe = $this->env->getExtension("native_profiler");
        $__internal_fa156c861fdee2a745667ecd293ab585b4e85c561c49e8b9e9bd67e539b8cbbe->enter($__internal_fa156c861fdee2a745667ecd293ab585b4e85c561c49e8b9e9bd67e539b8cbbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_fa156c861fdee2a745667ecd293ab585b4e85c561c49e8b9e9bd67e539b8cbbe->leave($__internal_fa156c861fdee2a745667ecd293ab585b4e85c561c49e8b9e9bd67e539b8cbbe_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
