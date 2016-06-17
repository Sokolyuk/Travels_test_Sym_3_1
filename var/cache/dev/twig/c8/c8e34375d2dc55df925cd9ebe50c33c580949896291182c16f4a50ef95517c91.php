<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_88c3ae721766e964984f95602b378141f0a0cc8356daeb935a48b91b27bc8bd4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_624b58cbfda333171184c055ebbfbe8ade8a540276504789cd37b540b01c312c = $this->env->getExtension("native_profiler");
        $__internal_624b58cbfda333171184c055ebbfbe8ade8a540276504789cd37b540b01c312c->enter($__internal_624b58cbfda333171184c055ebbfbe8ade8a540276504789cd37b540b01c312c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_624b58cbfda333171184c055ebbfbe8ade8a540276504789cd37b540b01c312c->leave($__internal_624b58cbfda333171184c055ebbfbe8ade8a540276504789cd37b540b01c312c_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_8337bd70a82692afcc19e4a262d7817d90f526a293c80be1a0ec6e3bf194b47a = $this->env->getExtension("native_profiler");
        $__internal_8337bd70a82692afcc19e4a262d7817d90f526a293c80be1a0ec6e3bf194b47a->enter($__internal_8337bd70a82692afcc19e4a262d7817d90f526a293c80be1a0ec6e3bf194b47a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_8337bd70a82692afcc19e4a262d7817d90f526a293c80be1a0ec6e3bf194b47a->leave($__internal_8337bd70a82692afcc19e4a262d7817d90f526a293c80be1a0ec6e3bf194b47a_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
