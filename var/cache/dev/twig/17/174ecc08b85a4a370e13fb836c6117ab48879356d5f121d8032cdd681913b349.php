<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_d68216c1352e771d29d22796dab0463ec28ffd309e8b65588e492b0b98355c2a extends Twig_Template
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
        $__internal_f462228dea2d544dbf966e3abb8a378038107f7192dc2797704ce264f2ca9534 = $this->env->getExtension("native_profiler");
        $__internal_f462228dea2d544dbf966e3abb8a378038107f7192dc2797704ce264f2ca9534->enter($__internal_f462228dea2d544dbf966e3abb8a378038107f7192dc2797704ce264f2ca9534_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

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
        
        $__internal_f462228dea2d544dbf966e3abb8a378038107f7192dc2797704ce264f2ca9534->leave($__internal_f462228dea2d544dbf966e3abb8a378038107f7192dc2797704ce264f2ca9534_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
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
