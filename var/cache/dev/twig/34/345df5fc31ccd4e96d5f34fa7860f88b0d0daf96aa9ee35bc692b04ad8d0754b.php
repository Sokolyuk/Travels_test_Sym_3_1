<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_65ccee51adfed69eab8aebfe620aad5635bbd7301a383c7afc7e1fa3d4950278 extends Twig_Template
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
        $__internal_98c329f555ed036f9146a9928b1d9a32787a0947e2946c296f50064ed9ce05d6 = $this->env->getExtension("native_profiler");
        $__internal_98c329f555ed036f9146a9928b1d9a32787a0947e2946c296f50064ed9ce05d6->enter($__internal_98c329f555ed036f9146a9928b1d9a32787a0947e2946c296f50064ed9ce05d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_98c329f555ed036f9146a9928b1d9a32787a0947e2946c296f50064ed9ce05d6->leave($__internal_98c329f555ed036f9146a9928b1d9a32787a0947e2946c296f50064ed9ce05d6_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */