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
            'appData' => array($this, 'block_appData'),
            'jsTemplates' => array($this, 'block_jsTemplates'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_eef7deda93fe1641b46b0761aad48986be5def64a6f7965b75029b45bd83752b = $this->env->getExtension("native_profiler");
        $__internal_eef7deda93fe1641b46b0761aad48986be5def64a6f7965b75029b45bd83752b->enter($__internal_eef7deda93fe1641b46b0761aad48986be5def64a6f7965b75029b45bd83752b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@TravelsMain/base.html.twig"));

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
        // line 8
        $this->displayBlock('metatags', $context, $blocks);
        // line 9
        echo "        ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 10
        echo "    </head>
    <body>
        ";
        // line 12
        $this->displayBlock('layout', $context, $blocks);
        // line 13
        echo "    </body>
    ";
        // line 14
        $this->displayBlock('appData', $context, $blocks);
        // line 15
        echo "    ";
        $this->displayBlock('jsTemplates', $context, $blocks);
        // line 16
        echo "    ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 17
        echo "</html>
";
        
        $__internal_eef7deda93fe1641b46b0761aad48986be5def64a6f7965b75029b45bd83752b->leave($__internal_eef7deda93fe1641b46b0761aad48986be5def64a6f7965b75029b45bd83752b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_60b2e057bdfecd05f3c365bd2c0e2339a714fab9acc06e2a5af320d0d6b7d0f8 = $this->env->getExtension("native_profiler");
        $__internal_60b2e057bdfecd05f3c365bd2c0e2339a714fab9acc06e2a5af320d0d6b7d0f8->enter($__internal_60b2e057bdfecd05f3c365bd2c0e2339a714fab9acc06e2a5af320d0d6b7d0f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_60b2e057bdfecd05f3c365bd2c0e2339a714fab9acc06e2a5af320d0d6b7d0f8->leave($__internal_60b2e057bdfecd05f3c365bd2c0e2339a714fab9acc06e2a5af320d0d6b7d0f8_prof);

    }

    // line 8
    public function block_metatags($context, array $blocks = array())
    {
        $__internal_b94e7020bbc4a0e66b56bff0cdcfe4835fba9b72b1137da511e7130e639a28a6 = $this->env->getExtension("native_profiler");
        $__internal_b94e7020bbc4a0e66b56bff0cdcfe4835fba9b72b1137da511e7130e639a28a6->enter($__internal_b94e7020bbc4a0e66b56bff0cdcfe4835fba9b72b1137da511e7130e639a28a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "metatags"));

        
        $__internal_b94e7020bbc4a0e66b56bff0cdcfe4835fba9b72b1137da511e7130e639a28a6->leave($__internal_b94e7020bbc4a0e66b56bff0cdcfe4835fba9b72b1137da511e7130e639a28a6_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ad859035600289e6c1b971ceab48baa842ad89dde461752f61467fcf2cbb45a7 = $this->env->getExtension("native_profiler");
        $__internal_ad859035600289e6c1b971ceab48baa842ad89dde461752f61467fcf2cbb45a7->enter($__internal_ad859035600289e6c1b971ceab48baa842ad89dde461752f61467fcf2cbb45a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_ad859035600289e6c1b971ceab48baa842ad89dde461752f61467fcf2cbb45a7->leave($__internal_ad859035600289e6c1b971ceab48baa842ad89dde461752f61467fcf2cbb45a7_prof);

    }

    // line 12
    public function block_layout($context, array $blocks = array())
    {
        $__internal_08a721e1ae7c0dc2e51e9675f53c0522c50d70ec681559d8d455a0a216c10214 = $this->env->getExtension("native_profiler");
        $__internal_08a721e1ae7c0dc2e51e9675f53c0522c50d70ec681559d8d455a0a216c10214->enter($__internal_08a721e1ae7c0dc2e51e9675f53c0522c50d70ec681559d8d455a0a216c10214_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "layout"));

        
        $__internal_08a721e1ae7c0dc2e51e9675f53c0522c50d70ec681559d8d455a0a216c10214->leave($__internal_08a721e1ae7c0dc2e51e9675f53c0522c50d70ec681559d8d455a0a216c10214_prof);

    }

    // line 14
    public function block_appData($context, array $blocks = array())
    {
        $__internal_f7f129b8158befa2b37f27bf57ed158d41b54f6e6c0adecd346333057b53bdaf = $this->env->getExtension("native_profiler");
        $__internal_f7f129b8158befa2b37f27bf57ed158d41b54f6e6c0adecd346333057b53bdaf->enter($__internal_f7f129b8158befa2b37f27bf57ed158d41b54f6e6c0adecd346333057b53bdaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "appData"));

        
        $__internal_f7f129b8158befa2b37f27bf57ed158d41b54f6e6c0adecd346333057b53bdaf->leave($__internal_f7f129b8158befa2b37f27bf57ed158d41b54f6e6c0adecd346333057b53bdaf_prof);

    }

    // line 15
    public function block_jsTemplates($context, array $blocks = array())
    {
        $__internal_50473fb4f86880e647566f621a4eec4fcdf7dc0d3ebd8d84ee45bf396e909ca7 = $this->env->getExtension("native_profiler");
        $__internal_50473fb4f86880e647566f621a4eec4fcdf7dc0d3ebd8d84ee45bf396e909ca7->enter($__internal_50473fb4f86880e647566f621a4eec4fcdf7dc0d3ebd8d84ee45bf396e909ca7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "jsTemplates"));

        
        $__internal_50473fb4f86880e647566f621a4eec4fcdf7dc0d3ebd8d84ee45bf396e909ca7->leave($__internal_50473fb4f86880e647566f621a4eec4fcdf7dc0d3ebd8d84ee45bf396e909ca7_prof);

    }

    // line 16
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_10c8702d33eaf701e492ff801fe6b6eac4808359d260c2ccc7281836562b5eb9 = $this->env->getExtension("native_profiler");
        $__internal_10c8702d33eaf701e492ff801fe6b6eac4808359d260c2ccc7281836562b5eb9->enter($__internal_10c8702d33eaf701e492ff801fe6b6eac4808359d260c2ccc7281836562b5eb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        echo " ";
        
        $__internal_10c8702d33eaf701e492ff801fe6b6eac4808359d260c2ccc7281836562b5eb9->leave($__internal_10c8702d33eaf701e492ff801fe6b6eac4808359d260c2ccc7281836562b5eb9_prof);

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
        return array (  140 => 16,  129 => 15,  118 => 14,  107 => 12,  96 => 9,  85 => 8,  74 => 5,  66 => 17,  63 => 16,  60 => 15,  58 => 14,  55 => 13,  53 => 12,  49 => 10,  46 => 9,  44 => 8,  39 => 6,  35 => 5,  29 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="utf-8">*/
/*         <title>{% block title %}{% endblock title %}</title>*/
/*         <link rel="shortcut icon" href="{{ asset('bundles/travelsmain/images/favicon.ico') }}" />*/
/* */
/*         {% block metatags %}{% endblock metatags %}*/
/*         {% block stylesheets %}{% endblock stylesheets %}*/
/*     </head>*/
/*     <body>*/
/*         {% block layout %}{% endblock layout %}*/
/*     </body>*/
/*     {% block appData %}{% endblock appData %}*/
/*     {% block jsTemplates %}{% endblock jsTemplates %}*/
/*     {% block javascripts %} {% endblock javascripts %}*/
/* </html>*/
/* */
