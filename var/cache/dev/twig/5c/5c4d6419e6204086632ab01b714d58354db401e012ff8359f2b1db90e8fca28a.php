<?php

/* @TravelsMain/layout.html.twig */
class __TwigTemplate_65be97764d508832b80204d6a4b7aed02ba1782a18d5fa030b28f5c7c5988ee0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TravelsMainBundle::base.html.twig", "@TravelsMain/layout.html.twig", 1);
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
        $__internal_e329c88e3e0df282df02b9a483718616fb2be834cad500f2a86d379f91b36ba4 = $this->env->getExtension("native_profiler");
        $__internal_e329c88e3e0df282df02b9a483718616fb2be834cad500f2a86d379f91b36ba4->enter($__internal_e329c88e3e0df282df02b9a483718616fb2be834cad500f2a86d379f91b36ba4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@TravelsMain/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e329c88e3e0df282df02b9a483718616fb2be834cad500f2a86d379f91b36ba4->leave($__internal_e329c88e3e0df282df02b9a483718616fb2be834cad500f2a86d379f91b36ba4_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_5b61e9fcdb0e5be33c3ef6fe2371e900b111086e1799da24d9494dc13f8ad454 = $this->env->getExtension("native_profiler");
        $__internal_5b61e9fcdb0e5be33c3ef6fe2371e900b111086e1799da24d9494dc13f8ad454->enter($__internal_5b61e9fcdb0e5be33c3ef6fe2371e900b111086e1799da24d9494dc13f8ad454_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_5b61e9fcdb0e5be33c3ef6fe2371e900b111086e1799da24d9494dc13f8ad454->leave($__internal_5b61e9fcdb0e5be33c3ef6fe2371e900b111086e1799da24d9494dc13f8ad454_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b20ae6eff3930630d19c09e84efd6ff180869a0b848af4336d902dafc0acc728 = $this->env->getExtension("native_profiler");
        $__internal_b20ae6eff3930630d19c09e84efd6ff180869a0b848af4336d902dafc0acc728->enter($__internal_b20ae6eff3930630d19c09e84efd6ff180869a0b848af4336d902dafc0acc728_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "\t<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/travelsmain/css/travels.css"), "html", null, true);
        echo "\" />
\t<link rel=\"stylesheet\" href=\"//fonts.googleapis.com/css?family=Ubuntu:300%7CUbuntu:400%7CUbuntu:500%7CUbuntu:700\"/>
";
        
        $__internal_b20ae6eff3930630d19c09e84efd6ff180869a0b848af4336d902dafc0acc728->leave($__internal_b20ae6eff3930630d19c09e84efd6ff180869a0b848af4336d902dafc0acc728_prof);

    }

    // line 11
    public function block_layout($context, array $blocks = array())
    {
        $__internal_35322997512e54f14643dfeb10591994f3e037bdb070107794ddd3fc53e02c75 = $this->env->getExtension("native_profiler");
        $__internal_35322997512e54f14643dfeb10591994f3e037bdb070107794ddd3fc53e02c75->enter($__internal_35322997512e54f14643dfeb10591994f3e037bdb070107794ddd3fc53e02c75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "layout"));

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
        
        $__internal_35322997512e54f14643dfeb10591994f3e037bdb070107794ddd3fc53e02c75->leave($__internal_35322997512e54f14643dfeb10591994f3e037bdb070107794ddd3fc53e02c75_prof);

    }

    // line 13
    public function block_header($context, array $blocks = array())
    {
        $__internal_5f2458a5457b13227900bfdfda290ea57df4afcbfddd2afd11a5bf2d68e768d3 = $this->env->getExtension("native_profiler");
        $__internal_5f2458a5457b13227900bfdfda290ea57df4afcbfddd2afd11a5bf2d68e768d3->enter($__internal_5f2458a5457b13227900bfdfda290ea57df4afcbfddd2afd11a5bf2d68e768d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 14
        echo "\t\t";
        $this->loadTemplate("TravelsMainBundle::layout/header.html.twig", "@TravelsMain/layout.html.twig", 14)->display($context);
        // line 15
        echo "    ";
        
        $__internal_5f2458a5457b13227900bfdfda290ea57df4afcbfddd2afd11a5bf2d68e768d3->leave($__internal_5f2458a5457b13227900bfdfda290ea57df4afcbfddd2afd11a5bf2d68e768d3_prof);

    }

    // line 17
    public function block_content($context, array $blocks = array())
    {
        $__internal_7a84f11f9208fb40a18dc0223e11f5587d65edf3ad82d48e425eff18b8e4eafc = $this->env->getExtension("native_profiler");
        $__internal_7a84f11f9208fb40a18dc0223e11f5587d65edf3ad82d48e425eff18b8e4eafc->enter($__internal_7a84f11f9208fb40a18dc0223e11f5587d65edf3ad82d48e425eff18b8e4eafc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 18
        echo "    ";
        
        $__internal_7a84f11f9208fb40a18dc0223e11f5587d65edf3ad82d48e425eff18b8e4eafc->leave($__internal_7a84f11f9208fb40a18dc0223e11f5587d65edf3ad82d48e425eff18b8e4eafc_prof);

    }

    // line 20
    public function block_footer($context, array $blocks = array())
    {
        $__internal_db8361f45da950c7c2c9cb54e60191ba78b958b273e6803ada265917eda3b149 = $this->env->getExtension("native_profiler");
        $__internal_db8361f45da950c7c2c9cb54e60191ba78b958b273e6803ada265917eda3b149->enter($__internal_db8361f45da950c7c2c9cb54e60191ba78b958b273e6803ada265917eda3b149_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 21
        echo "        ";
        $this->loadTemplate("TravelsMainBundle::layout/footer.html.twig", "@TravelsMain/layout.html.twig", 21)->display($context);
        // line 22
        echo "    ";
        
        $__internal_db8361f45da950c7c2c9cb54e60191ba78b958b273e6803ada265917eda3b149->leave($__internal_db8361f45da950c7c2c9cb54e60191ba78b958b273e6803ada265917eda3b149_prof);

    }

    // line 26
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6752b80e9c48ff78429f344e7ca4955cb0a665b2e2c8e30d7d4fc524b92d7f35 = $this->env->getExtension("native_profiler");
        $__internal_6752b80e9c48ff78429f344e7ca4955cb0a665b2e2c8e30d7d4fc524b92d7f35->enter($__internal_6752b80e9c48ff78429f344e7ca4955cb0a665b2e2c8e30d7d4fc524b92d7f35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_6752b80e9c48ff78429f344e7ca4955cb0a665b2e2c8e30d7d4fc524b92d7f35->leave($__internal_6752b80e9c48ff78429f344e7ca4955cb0a665b2e2c8e30d7d4fc524b92d7f35_prof);

    }

    public function getTemplateName()
    {
        return "@TravelsMain/layout.html.twig";
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
