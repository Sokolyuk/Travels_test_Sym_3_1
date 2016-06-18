<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_1573bacfbc7a421dbe938bf1984907d3b35c089882a46b0cc09d67a91dc93b20 extends Twig_Template
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
        $__internal_213248df5bc7b43949f09f531bfa7fe6005292056ee2a197a778168d238f2f74 = $this->env->getExtension("native_profiler");
        $__internal_213248df5bc7b43949f09f531bfa7fe6005292056ee2a197a778168d238f2f74->enter($__internal_213248df5bc7b43949f09f531bfa7fe6005292056ee2a197a778168d238f2f74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_213248df5bc7b43949f09f531bfa7fe6005292056ee2a197a778168d238f2f74->leave($__internal_213248df5bc7b43949f09f531bfa7fe6005292056ee2a197a778168d238f2f74_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
