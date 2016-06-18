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
        $__internal_094a21c4c784112ba75b0fde164e162a4492297da5dfa8e4ed7cc2aff8ef6faa = $this->env->getExtension("native_profiler");
        $__internal_094a21c4c784112ba75b0fde164e162a4492297da5dfa8e4ed7cc2aff8ef6faa->enter($__internal_094a21c4c784112ba75b0fde164e162a4492297da5dfa8e4ed7cc2aff8ef6faa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_094a21c4c784112ba75b0fde164e162a4492297da5dfa8e4ed7cc2aff8ef6faa->leave($__internal_094a21c4c784112ba75b0fde164e162a4492297da5dfa8e4ed7cc2aff8ef6faa_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_64539183d5d4ed923a8a3ce3b4cb74758481a37c0c8889992ecc682847df35a5 = $this->env->getExtension("native_profiler");
        $__internal_64539183d5d4ed923a8a3ce3b4cb74758481a37c0c8889992ecc682847df35a5->enter($__internal_64539183d5d4ed923a8a3ce3b4cb74758481a37c0c8889992ecc682847df35a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_64539183d5d4ed923a8a3ce3b4cb74758481a37c0c8889992ecc682847df35a5->leave($__internal_64539183d5d4ed923a8a3ce3b4cb74758481a37c0c8889992ecc682847df35a5_prof);

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
