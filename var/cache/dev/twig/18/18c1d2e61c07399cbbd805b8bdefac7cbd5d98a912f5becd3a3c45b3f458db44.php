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
        $__internal_bc5549be0d3135e7f0aeaad28e5ce4c9300f5b1057d9497a4aada576ec3a2052 = $this->env->getExtension("native_profiler");
        $__internal_bc5549be0d3135e7f0aeaad28e5ce4c9300f5b1057d9497a4aada576ec3a2052->enter($__internal_bc5549be0d3135e7f0aeaad28e5ce4c9300f5b1057d9497a4aada576ec3a2052_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

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
        
        $__internal_bc5549be0d3135e7f0aeaad28e5ce4c9300f5b1057d9497a4aada576ec3a2052->leave($__internal_bc5549be0d3135e7f0aeaad28e5ce4c9300f5b1057d9497a4aada576ec3a2052_prof);

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
