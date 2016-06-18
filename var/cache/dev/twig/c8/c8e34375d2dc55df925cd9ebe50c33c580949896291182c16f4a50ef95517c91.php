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
        $__internal_77c539972636da7de9b75c314fb16918eb0bfde46423ad42c470528195524958 = $this->env->getExtension("native_profiler");
        $__internal_77c539972636da7de9b75c314fb16918eb0bfde46423ad42c470528195524958->enter($__internal_77c539972636da7de9b75c314fb16918eb0bfde46423ad42c470528195524958_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_77c539972636da7de9b75c314fb16918eb0bfde46423ad42c470528195524958->leave($__internal_77c539972636da7de9b75c314fb16918eb0bfde46423ad42c470528195524958_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_97a4b4e8df5224058b547dbe979c74f6c57b8d0953eb289198bef2377d36985b = $this->env->getExtension("native_profiler");
        $__internal_97a4b4e8df5224058b547dbe979c74f6c57b8d0953eb289198bef2377d36985b->enter($__internal_97a4b4e8df5224058b547dbe979c74f6c57b8d0953eb289198bef2377d36985b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_97a4b4e8df5224058b547dbe979c74f6c57b8d0953eb289198bef2377d36985b->leave($__internal_97a4b4e8df5224058b547dbe979c74f6c57b8d0953eb289198bef2377d36985b_prof);

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
