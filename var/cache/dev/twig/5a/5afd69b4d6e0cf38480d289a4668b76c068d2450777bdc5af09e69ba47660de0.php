<?php

/* @TravelsMain/base.html.twig */
class __TwigTemplate_cba0bd42c6565ae8cbadcc77c551aa26fd53f13be9c5d66ca6020e1e468fe8d3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'metatags' => array($this, 'block_metatags'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'layout' => array($this, 'block_layout'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d065a97191eec3d8e090db9e72bcb3ce1bee858c8dc4db782ca5a03275031e91 = $this->env->getExtension("native_profiler");
        $__internal_d065a97191eec3d8e090db9e72bcb3ce1bee858c8dc4db782ca5a03275031e91->enter($__internal_d065a97191eec3d8e090db9e72bcb3ce1bee858c8dc4db782ca5a03275031e91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@TravelsMain/base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"shortcut icon\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/travelsmain/images/favicon.ico"), "html", null, true);
        echo "\" />
        ";
        // line 7
        $this->displayBlock('metatags', $context, $blocks);
        // line 8
        echo "        ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "    </head>
    <body>
        ";
        // line 11
        $this->displayBlock('layout', $context, $blocks);
        // line 12
        echo "    </body>
    ";
        // line 13
        $this->displayBlock('javascripts', $context, $blocks);
        // line 14
        echo "</html>
";
        
        $__internal_d065a97191eec3d8e090db9e72bcb3ce1bee858c8dc4db782ca5a03275031e91->leave($__internal_d065a97191eec3d8e090db9e72bcb3ce1bee858c8dc4db782ca5a03275031e91_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_e5c460b92c215b628415849a5971c67d15e18cb4dbe562b7d8a919758cb2ac71 = $this->env->getExtension("native_profiler");
        $__internal_e5c460b92c215b628415849a5971c67d15e18cb4dbe562b7d8a919758cb2ac71->enter($__internal_e5c460b92c215b628415849a5971c67d15e18cb4dbe562b7d8a919758cb2ac71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_e5c460b92c215b628415849a5971c67d15e18cb4dbe562b7d8a919758cb2ac71->leave($__internal_e5c460b92c215b628415849a5971c67d15e18cb4dbe562b7d8a919758cb2ac71_prof);

    }

    // line 7
    public function block_metatags($context, array $blocks = array())
    {
        $__internal_7a0249f9c7d4cdfdd5b108e7871a322a08a5f85174143634f1b4b7dc220160af = $this->env->getExtension("native_profiler");
        $__internal_7a0249f9c7d4cdfdd5b108e7871a322a08a5f85174143634f1b4b7dc220160af->enter($__internal_7a0249f9c7d4cdfdd5b108e7871a322a08a5f85174143634f1b4b7dc220160af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "metatags"));

        
        $__internal_7a0249f9c7d4cdfdd5b108e7871a322a08a5f85174143634f1b4b7dc220160af->leave($__internal_7a0249f9c7d4cdfdd5b108e7871a322a08a5f85174143634f1b4b7dc220160af_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f425056e8494fb324c430bbe772da4e889ea383aa7c81b5c9de14a692dc41fa5 = $this->env->getExtension("native_profiler");
        $__internal_f425056e8494fb324c430bbe772da4e889ea383aa7c81b5c9de14a692dc41fa5->enter($__internal_f425056e8494fb324c430bbe772da4e889ea383aa7c81b5c9de14a692dc41fa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_f425056e8494fb324c430bbe772da4e889ea383aa7c81b5c9de14a692dc41fa5->leave($__internal_f425056e8494fb324c430bbe772da4e889ea383aa7c81b5c9de14a692dc41fa5_prof);

    }

    // line 11
    public function block_layout($context, array $blocks = array())
    {
        $__internal_7d747ef17dcf3bcd45a05a9bdb6d2776b52c1051a004269c70f3d7adcd0e383d = $this->env->getExtension("native_profiler");
        $__internal_7d747ef17dcf3bcd45a05a9bdb6d2776b52c1051a004269c70f3d7adcd0e383d->enter($__internal_7d747ef17dcf3bcd45a05a9bdb6d2776b52c1051a004269c70f3d7adcd0e383d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "layout"));

        
        $__internal_7d747ef17dcf3bcd45a05a9bdb6d2776b52c1051a004269c70f3d7adcd0e383d->leave($__internal_7d747ef17dcf3bcd45a05a9bdb6d2776b52c1051a004269c70f3d7adcd0e383d_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_83acd9b13ecb4c3a9be3963aff5e3e23136d0d8785452124247a7b8187549bf8 = $this->env->getExtension("native_profiler");
        $__internal_83acd9b13ecb4c3a9be3963aff5e3e23136d0d8785452124247a7b8187549bf8->enter($__internal_83acd9b13ecb4c3a9be3963aff5e3e23136d0d8785452124247a7b8187549bf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        echo " ";
        
        $__internal_83acd9b13ecb4c3a9be3963aff5e3e23136d0d8785452124247a7b8187549bf8->leave($__internal_83acd9b13ecb4c3a9be3963aff5e3e23136d0d8785452124247a7b8187549bf8_prof);

    }

    public function getTemplateName()
    {
        return "@TravelsMain/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 13,  98 => 11,  87 => 8,  76 => 7,  65 => 5,  57 => 14,  55 => 13,  52 => 12,  50 => 11,  46 => 9,  43 => 8,  41 => 7,  37 => 6,  33 => 5,  27 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="utf-8">*/
/*         <title>{% block title %}{% endblock title %}</title>*/
/*         <link rel="shortcut icon" href="{{ asset('bundles/travelsmain/images/favicon.ico') }}" />*/
/*         {% block metatags %}{% endblock metatags %}*/
/*         {% block stylesheets %}{% endblock stylesheets %}*/
/*     </head>*/
/*     <body>*/
/*         {% block layout %}{% endblock layout %}*/
/*     </body>*/
/*     {% block javascripts %} {% endblock javascripts %}*/
/* </html>*/
/* */
