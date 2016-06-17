<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_69865c25bc974faeb2d06e85f329aaace11c4256b3fb1c3817b309d15286e7b7 extends Twig_Template
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
        $__internal_d59e9215e3fe08fa40a1d11b8118e9968f8578d0d57b053a296f740fa04910d1 = $this->env->getExtension("native_profiler");
        $__internal_d59e9215e3fe08fa40a1d11b8118e9968f8578d0d57b053a296f740fa04910d1->enter($__internal_d59e9215e3fe08fa40a1d11b8118e9968f8578d0d57b053a296f740fa04910d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_d59e9215e3fe08fa40a1d11b8118e9968f8578d0d57b053a296f740fa04910d1->leave($__internal_d59e9215e3fe08fa40a1d11b8118e9968f8578d0d57b053a296f740fa04910d1_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
