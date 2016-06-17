<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_7d6eaf2558faaf1a0ae90eeb12597f5e898f179b9d1c2051a6238fdc9851421c extends Twig_Template
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
        $__internal_dda37c91fb1024907706ea0ef26259d1b4eee84b8ce65a17082ccffc4749bb2d = $this->env->getExtension("native_profiler");
        $__internal_dda37c91fb1024907706ea0ef26259d1b4eee84b8ce65a17082ccffc4749bb2d->enter($__internal_dda37c91fb1024907706ea0ef26259d1b4eee84b8ce65a17082ccffc4749bb2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_dda37c91fb1024907706ea0ef26259d1b4eee84b8ce65a17082ccffc4749bb2d->leave($__internal_dda37c91fb1024907706ea0ef26259d1b4eee84b8ce65a17082ccffc4749bb2d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
