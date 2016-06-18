<?php

/* TravelsMainBundle::layout.html.twig */
class __TwigTemplate_27a1c6a03e5f9105022f24295295f85bc218718ca818e59ab66878ede4acf26d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TravelsMainBundle::base.html.twig", "TravelsMainBundle::layout.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'layout' => array($this, 'block_layout'),
            'header' => array($this, 'block_header'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TravelsMainBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_efb2d4d36c67f2a84b2c5a7c7eae37bb16ca421eb72c310193ead5633b0d384b = $this->env->getExtension("native_profiler");
        $__internal_efb2d4d36c67f2a84b2c5a7c7eae37bb16ca421eb72c310193ead5633b0d384b->enter($__internal_efb2d4d36c67f2a84b2c5a7c7eae37bb16ca421eb72c310193ead5633b0d384b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TravelsMainBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_efb2d4d36c67f2a84b2c5a7c7eae37bb16ca421eb72c310193ead5633b0d384b->leave($__internal_efb2d4d36c67f2a84b2c5a7c7eae37bb16ca421eb72c310193ead5633b0d384b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_5d68ae1b434bd31dc1f3065d0aa7498b9d72ce76c5cbf46d7597b2c0512b2e0a = $this->env->getExtension("native_profiler");
        $__internal_5d68ae1b434bd31dc1f3065d0aa7498b9d72ce76c5cbf46d7597b2c0512b2e0a->enter($__internal_5d68ae1b434bd31dc1f3065d0aa7498b9d72ce76c5cbf46d7597b2c0512b2e0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_5d68ae1b434bd31dc1f3065d0aa7498b9d72ce76c5cbf46d7597b2c0512b2e0a->leave($__internal_5d68ae1b434bd31dc1f3065d0aa7498b9d72ce76c5cbf46d7597b2c0512b2e0a_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0786a48f4d10cd0f398ad44ebf96ced3647e460f4a599570a1a8ba9650489dde = $this->env->getExtension("native_profiler");
        $__internal_0786a48f4d10cd0f398ad44ebf96ced3647e460f4a599570a1a8ba9650489dde->enter($__internal_0786a48f4d10cd0f398ad44ebf96ced3647e460f4a599570a1a8ba9650489dde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "\t<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/travelsmain/css/travels.css"), "html", null, true);
        echo "\" />
\t<link rel=\"stylesheet\" href=\"//fonts.googleapis.com/css?family=Ubuntu:300%7CUbuntu:400%7CUbuntu:500%7CUbuntu:700\"/>
";
        
        $__internal_0786a48f4d10cd0f398ad44ebf96ced3647e460f4a599570a1a8ba9650489dde->leave($__internal_0786a48f4d10cd0f398ad44ebf96ced3647e460f4a599570a1a8ba9650489dde_prof);

    }

    // line 11
    public function block_layout($context, array $blocks = array())
    {
        $__internal_7ed489ce0dd6798304d87f4d297574abde9550bc54fcf4bb6c9467503b846a69 = $this->env->getExtension("native_profiler");
        $__internal_7ed489ce0dd6798304d87f4d297574abde9550bc54fcf4bb6c9467503b846a69->enter($__internal_7ed489ce0dd6798304d87f4d297574abde9550bc54fcf4bb6c9467503b846a69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "layout"));

        // line 12
        echo "
    ";
        // line 13
        $this->displayBlock('header', $context, $blocks);
        // line 16
        echo "
    ";
        // line 17
        $this->displayBlock('content', $context, $blocks);
        // line 19
        echo "
    ";
        // line 20
        $this->displayBlock('footer', $context, $blocks);
        // line 23
        echo "
";
        
        $__internal_7ed489ce0dd6798304d87f4d297574abde9550bc54fcf4bb6c9467503b846a69->leave($__internal_7ed489ce0dd6798304d87f4d297574abde9550bc54fcf4bb6c9467503b846a69_prof);

    }

    // line 13
    public function block_header($context, array $blocks = array())
    {
        $__internal_8e02c97238d12d5ea4a77df94eea1f86c92e4db90e9109414e6804a49429ab22 = $this->env->getExtension("native_profiler");
        $__internal_8e02c97238d12d5ea4a77df94eea1f86c92e4db90e9109414e6804a49429ab22->enter($__internal_8e02c97238d12d5ea4a77df94eea1f86c92e4db90e9109414e6804a49429ab22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 14
        echo "\t\t";
        $this->loadTemplate("TravelsMainBundle::layout/header.html.twig", "TravelsMainBundle::layout.html.twig", 14)->display($context);
        // line 15
        echo "    ";
        
        $__internal_8e02c97238d12d5ea4a77df94eea1f86c92e4db90e9109414e6804a49429ab22->leave($__internal_8e02c97238d12d5ea4a77df94eea1f86c92e4db90e9109414e6804a49429ab22_prof);

    }

    // line 17
    public function block_content($context, array $blocks = array())
    {
        $__internal_93151b6e877e77c64534514cb3f77a857895611d181d2fee39ee5f39eb686c34 = $this->env->getExtension("native_profiler");
        $__internal_93151b6e877e77c64534514cb3f77a857895611d181d2fee39ee5f39eb686c34->enter($__internal_93151b6e877e77c64534514cb3f77a857895611d181d2fee39ee5f39eb686c34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 18
        echo "    ";
        
        $__internal_93151b6e877e77c64534514cb3f77a857895611d181d2fee39ee5f39eb686c34->leave($__internal_93151b6e877e77c64534514cb3f77a857895611d181d2fee39ee5f39eb686c34_prof);

    }

    // line 20
    public function block_footer($context, array $blocks = array())
    {
        $__internal_06d8f3548979f7e36a668327a5b0eede7b6a3c2873cd2d012540df6647202772 = $this->env->getExtension("native_profiler");
        $__internal_06d8f3548979f7e36a668327a5b0eede7b6a3c2873cd2d012540df6647202772->enter($__internal_06d8f3548979f7e36a668327a5b0eede7b6a3c2873cd2d012540df6647202772_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 21
        echo "        ";
        $this->loadTemplate("TravelsMainBundle::layout/footer.html.twig", "TravelsMainBundle::layout.html.twig", 21)->display($context);
        // line 22
        echo "    ";
        
        $__internal_06d8f3548979f7e36a668327a5b0eede7b6a3c2873cd2d012540df6647202772->leave($__internal_06d8f3548979f7e36a668327a5b0eede7b6a3c2873cd2d012540df6647202772_prof);

    }

    // line 26
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d49d868d5e4b167c4303cca4f31c74fc231014a630d40277237b790dfe1bd7d9 = $this->env->getExtension("native_profiler");
        $__internal_d49d868d5e4b167c4303cca4f31c74fc231014a630d40277237b790dfe1bd7d9->enter($__internal_d49d868d5e4b167c4303cca4f31c74fc231014a630d40277237b790dfe1bd7d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_d49d868d5e4b167c4303cca4f31c74fc231014a630d40277237b790dfe1bd7d9->leave($__internal_d49d868d5e4b167c4303cca4f31c74fc231014a630d40277237b790dfe1bd7d9_prof);

    }

    public function getTemplateName()
    {
        return "TravelsMainBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 26,  135 => 22,  132 => 21,  126 => 20,  119 => 18,  113 => 17,  106 => 15,  103 => 14,  97 => 13,  89 => 23,  87 => 20,  84 => 19,  82 => 17,  79 => 16,  77 => 13,  74 => 12,  68 => 11,  57 => 7,  51 => 6,  40 => 3,  11 => 1,);
    }
}
/* {% extends 'TravelsMainBundle::base.html.twig' %}*/
/* */
/* {% block title %}*/
/* {% endblock title %}*/
/* */
/* {% block stylesheets %}*/
/* 	<link rel="stylesheet" href="{{ asset('bundles/travelsmain/css/travels.css') }}" />*/
/* 	<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Ubuntu:300%7CUbuntu:400%7CUbuntu:500%7CUbuntu:700"/>*/
/* {% endblock stylesheets %}*/
/* */
/* {% block layout %}*/
/* */
/*     {% block header %}*/
/* 		{% include 'TravelsMainBundle::layout/header.html.twig' %}*/
/*     {% endblock header %}*/
/* */
/*     {% block content %}*/
/*     {% endblock content %}*/
/* */
/*     {% block footer %}*/
/*         {% include 'TravelsMainBundle::layout/footer.html.twig' %}*/
/*     {% endblock footer %}*/
/* */
/* {% endblock layout %}*/
/* */
/* {% block javascripts %}*/
/* {% endblock javascripts %}*/
/* */
