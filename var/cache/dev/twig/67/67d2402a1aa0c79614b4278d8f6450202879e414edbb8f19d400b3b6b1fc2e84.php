<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_bf755f828e58d163f1bbfbf505060082f29418265323a87669c2d2dd38b06aa7 extends Twig_Template
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
        $__internal_49f142cb1b2695c80378a3656039641fbaef912d7917e6a9632d670cae34d061 = $this->env->getExtension("native_profiler");
        $__internal_49f142cb1b2695c80378a3656039641fbaef912d7917e6a9632d670cae34d061->enter($__internal_49f142cb1b2695c80378a3656039641fbaef912d7917e6a9632d670cae34d061_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_49f142cb1b2695c80378a3656039641fbaef912d7917e6a9632d670cae34d061->leave($__internal_49f142cb1b2695c80378a3656039641fbaef912d7917e6a9632d670cae34d061_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
