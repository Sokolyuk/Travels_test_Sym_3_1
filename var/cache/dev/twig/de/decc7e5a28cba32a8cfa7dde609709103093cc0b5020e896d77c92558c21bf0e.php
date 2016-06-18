<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_aa37cddcfe9fd72de5c007cbf73f53c2e90f3a07e1b8f6cfeee5fb531aa55945 extends Twig_Template
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
        $__internal_2703631f72d03d61e409916cefb9e4aa92828d12ef5a23d57cde2b0944d87dac = $this->env->getExtension("native_profiler");
        $__internal_2703631f72d03d61e409916cefb9e4aa92828d12ef5a23d57cde2b0944d87dac->enter($__internal_2703631f72d03d61e409916cefb9e4aa92828d12ef5a23d57cde2b0944d87dac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_2703631f72d03d61e409916cefb9e4aa92828d12ef5a23d57cde2b0944d87dac->leave($__internal_2703631f72d03d61e409916cefb9e4aa92828d12ef5a23d57cde2b0944d87dac_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
