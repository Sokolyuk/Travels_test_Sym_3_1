<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_c08ccc8864aff8474eec24b67b9dff5825af97ec6c810b867f1b0a332004d847 extends Twig_Template
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
        $__internal_323f3853358590114ff3215b83eb59ba7beb029783112cd368db6b60040c6c82 = $this->env->getExtension("native_profiler");
        $__internal_323f3853358590114ff3215b83eb59ba7beb029783112cd368db6b60040c6c82->enter($__internal_323f3853358590114ff3215b83eb59ba7beb029783112cd368db6b60040c6c82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_323f3853358590114ff3215b83eb59ba7beb029783112cd368db6b60040c6c82->leave($__internal_323f3853358590114ff3215b83eb59ba7beb029783112cd368db6b60040c6c82_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
