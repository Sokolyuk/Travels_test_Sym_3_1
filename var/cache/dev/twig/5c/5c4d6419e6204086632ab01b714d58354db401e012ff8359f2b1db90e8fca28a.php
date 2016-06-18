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
        $__internal_c6941294c5b14a85a1cb294309d39d52a14e4f6a12bd728bb81aaed9ff8b7f28 = $this->env->getExtension("native_profiler");
        $__internal_c6941294c5b14a85a1cb294309d39d52a14e4f6a12bd728bb81aaed9ff8b7f28->enter($__internal_c6941294c5b14a85a1cb294309d39d52a14e4f6a12bd728bb81aaed9ff8b7f28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@TravelsMain/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c6941294c5b14a85a1cb294309d39d52a14e4f6a12bd728bb81aaed9ff8b7f28->leave($__internal_c6941294c5b14a85a1cb294309d39d52a14e4f6a12bd728bb81aaed9ff8b7f28_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_82c3c43f32cc508eed215fc940a755d52aa019a4dbf7d2850a85963c16df4d48 = $this->env->getExtension("native_profiler");
        $__internal_82c3c43f32cc508eed215fc940a755d52aa019a4dbf7d2850a85963c16df4d48->enter($__internal_82c3c43f32cc508eed215fc940a755d52aa019a4dbf7d2850a85963c16df4d48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_82c3c43f32cc508eed215fc940a755d52aa019a4dbf7d2850a85963c16df4d48->leave($__internal_82c3c43f32cc508eed215fc940a755d52aa019a4dbf7d2850a85963c16df4d48_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_08a3bd1ea628825ff7b1164764373f4cb5cf7fb7eb8026081af0e975967f3afb = $this->env->getExtension("native_profiler");
        $__internal_08a3bd1ea628825ff7b1164764373f4cb5cf7fb7eb8026081af0e975967f3afb->enter($__internal_08a3bd1ea628825ff7b1164764373f4cb5cf7fb7eb8026081af0e975967f3afb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "\t<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/travelsmain/css/travels.css"), "html", null, true);
        echo "\" />
\t<link rel=\"stylesheet\" href=\"//fonts.googleapis.com/css?family=Ubuntu:300%7CUbuntu:400%7CUbuntu:500%7CUbuntu:700\"/>
";
        
        $__internal_08a3bd1ea628825ff7b1164764373f4cb5cf7fb7eb8026081af0e975967f3afb->leave($__internal_08a3bd1ea628825ff7b1164764373f4cb5cf7fb7eb8026081af0e975967f3afb_prof);

    }

    // line 11
    public function block_layout($context, array $blocks = array())
    {
        $__internal_5998288ddcd6dfe8d0bbf516e72aa52f6372237b510ac1d2c98663c0c02c8c95 = $this->env->getExtension("native_profiler");
        $__internal_5998288ddcd6dfe8d0bbf516e72aa52f6372237b510ac1d2c98663c0c02c8c95->enter($__internal_5998288ddcd6dfe8d0bbf516e72aa52f6372237b510ac1d2c98663c0c02c8c95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "layout"));

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
        
        $__internal_5998288ddcd6dfe8d0bbf516e72aa52f6372237b510ac1d2c98663c0c02c8c95->leave($__internal_5998288ddcd6dfe8d0bbf516e72aa52f6372237b510ac1d2c98663c0c02c8c95_prof);

    }

    // line 13
    public function block_header($context, array $blocks = array())
    {
        $__internal_878344549c60bed91919f7b3bb41c94e1ef1e57f0c795fdc3f53c79ee8746c54 = $this->env->getExtension("native_profiler");
        $__internal_878344549c60bed91919f7b3bb41c94e1ef1e57f0c795fdc3f53c79ee8746c54->enter($__internal_878344549c60bed91919f7b3bb41c94e1ef1e57f0c795fdc3f53c79ee8746c54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 14
        echo "\t\t";
        $this->loadTemplate("TravelsMainBundle::layout/header.html.twig", "@TravelsMain/layout.html.twig", 14)->display($context);
        // line 15
        echo "    ";
        
        $__internal_878344549c60bed91919f7b3bb41c94e1ef1e57f0c795fdc3f53c79ee8746c54->leave($__internal_878344549c60bed91919f7b3bb41c94e1ef1e57f0c795fdc3f53c79ee8746c54_prof);

    }

    // line 17
    public function block_content($context, array $blocks = array())
    {
        $__internal_7fe5b021a8cf9234fc1fdd977f6d9262eb233b9cc3eb42a5e77f4cb5d2e15fee = $this->env->getExtension("native_profiler");
        $__internal_7fe5b021a8cf9234fc1fdd977f6d9262eb233b9cc3eb42a5e77f4cb5d2e15fee->enter($__internal_7fe5b021a8cf9234fc1fdd977f6d9262eb233b9cc3eb42a5e77f4cb5d2e15fee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 18
        echo "    ";
        
        $__internal_7fe5b021a8cf9234fc1fdd977f6d9262eb233b9cc3eb42a5e77f4cb5d2e15fee->leave($__internal_7fe5b021a8cf9234fc1fdd977f6d9262eb233b9cc3eb42a5e77f4cb5d2e15fee_prof);

    }

    // line 20
    public function block_footer($context, array $blocks = array())
    {
        $__internal_08e60d3cc9cc6bf660e46f13a690ddf25c96e510ca32f1788d605041ada0e018 = $this->env->getExtension("native_profiler");
        $__internal_08e60d3cc9cc6bf660e46f13a690ddf25c96e510ca32f1788d605041ada0e018->enter($__internal_08e60d3cc9cc6bf660e46f13a690ddf25c96e510ca32f1788d605041ada0e018_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 21
        echo "        ";
        $this->loadTemplate("TravelsMainBundle::layout/footer.html.twig", "@TravelsMain/layout.html.twig", 21)->display($context);
        // line 22
        echo "    ";
        
        $__internal_08e60d3cc9cc6bf660e46f13a690ddf25c96e510ca32f1788d605041ada0e018->leave($__internal_08e60d3cc9cc6bf660e46f13a690ddf25c96e510ca32f1788d605041ada0e018_prof);

    }

    // line 26
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_59152df95c2111cea9626205f1bb42ca00f64b71ad861dd1d108210fa8830f45 = $this->env->getExtension("native_profiler");
        $__internal_59152df95c2111cea9626205f1bb42ca00f64b71ad861dd1d108210fa8830f45->enter($__internal_59152df95c2111cea9626205f1bb42ca00f64b71ad861dd1d108210fa8830f45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_59152df95c2111cea9626205f1bb42ca00f64b71ad861dd1d108210fa8830f45->leave($__internal_59152df95c2111cea9626205f1bb42ca00f64b71ad861dd1d108210fa8830f45_prof);

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
