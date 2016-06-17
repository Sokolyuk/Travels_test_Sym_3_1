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
        $__internal_aa1c54c5475fb04c3c89f354a2454764d5f123d32f5cb145ae07086ba2385403 = $this->env->getExtension("native_profiler");
        $__internal_aa1c54c5475fb04c3c89f354a2454764d5f123d32f5cb145ae07086ba2385403->enter($__internal_aa1c54c5475fb04c3c89f354a2454764d5f123d32f5cb145ae07086ba2385403_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TravelsMainBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aa1c54c5475fb04c3c89f354a2454764d5f123d32f5cb145ae07086ba2385403->leave($__internal_aa1c54c5475fb04c3c89f354a2454764d5f123d32f5cb145ae07086ba2385403_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7694c5f8812c851a9400dd33dd399de136ce287b75736c5b2ae373f563ade528 = $this->env->getExtension("native_profiler");
        $__internal_7694c5f8812c851a9400dd33dd399de136ce287b75736c5b2ae373f563ade528->enter($__internal_7694c5f8812c851a9400dd33dd399de136ce287b75736c5b2ae373f563ade528_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_7694c5f8812c851a9400dd33dd399de136ce287b75736c5b2ae373f563ade528->leave($__internal_7694c5f8812c851a9400dd33dd399de136ce287b75736c5b2ae373f563ade528_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_db2cbc173a7c5a95d639ab98566c002a7e5c7f52c3be10929d6962da1c33fcdc = $this->env->getExtension("native_profiler");
        $__internal_db2cbc173a7c5a95d639ab98566c002a7e5c7f52c3be10929d6962da1c33fcdc->enter($__internal_db2cbc173a7c5a95d639ab98566c002a7e5c7f52c3be10929d6962da1c33fcdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "\t<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/travelsmain/css/travels.css"), "html", null, true);
        echo "\" />
\t<link rel=\"stylesheet\" href=\"//fonts.googleapis.com/css?family=Ubuntu:300%7CUbuntu:400%7CUbuntu:500%7CUbuntu:700\"/>
";
        
        $__internal_db2cbc173a7c5a95d639ab98566c002a7e5c7f52c3be10929d6962da1c33fcdc->leave($__internal_db2cbc173a7c5a95d639ab98566c002a7e5c7f52c3be10929d6962da1c33fcdc_prof);

    }

    // line 11
    public function block_layout($context, array $blocks = array())
    {
        $__internal_df631054799d0db5f7ec1855695208e03f40c81c40c333e42621d628b1e12aa6 = $this->env->getExtension("native_profiler");
        $__internal_df631054799d0db5f7ec1855695208e03f40c81c40c333e42621d628b1e12aa6->enter($__internal_df631054799d0db5f7ec1855695208e03f40c81c40c333e42621d628b1e12aa6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "layout"));

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
        
        $__internal_df631054799d0db5f7ec1855695208e03f40c81c40c333e42621d628b1e12aa6->leave($__internal_df631054799d0db5f7ec1855695208e03f40c81c40c333e42621d628b1e12aa6_prof);

    }

    // line 13
    public function block_header($context, array $blocks = array())
    {
        $__internal_a04fe442ace79bee4b71222991f7ecc9ff983604391a02b220a919b40f466857 = $this->env->getExtension("native_profiler");
        $__internal_a04fe442ace79bee4b71222991f7ecc9ff983604391a02b220a919b40f466857->enter($__internal_a04fe442ace79bee4b71222991f7ecc9ff983604391a02b220a919b40f466857_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 14
        echo "\t\t";
        $this->loadTemplate("TravelsMainBundle::layout/header.html.twig", "TravelsMainBundle::layout.html.twig", 14)->display($context);
        // line 15
        echo "    ";
        
        $__internal_a04fe442ace79bee4b71222991f7ecc9ff983604391a02b220a919b40f466857->leave($__internal_a04fe442ace79bee4b71222991f7ecc9ff983604391a02b220a919b40f466857_prof);

    }

    // line 17
    public function block_content($context, array $blocks = array())
    {
        $__internal_d1278d5937f5f19e967b0434d46bdec20f8f11b4dd6d3e8f31303be654bca536 = $this->env->getExtension("native_profiler");
        $__internal_d1278d5937f5f19e967b0434d46bdec20f8f11b4dd6d3e8f31303be654bca536->enter($__internal_d1278d5937f5f19e967b0434d46bdec20f8f11b4dd6d3e8f31303be654bca536_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 18
        echo "    ";
        
        $__internal_d1278d5937f5f19e967b0434d46bdec20f8f11b4dd6d3e8f31303be654bca536->leave($__internal_d1278d5937f5f19e967b0434d46bdec20f8f11b4dd6d3e8f31303be654bca536_prof);

    }

    // line 20
    public function block_footer($context, array $blocks = array())
    {
        $__internal_4265eea436773402d0e796e1ffea47aa75f7922ced0e9e2ec5e8482cf0780dcf = $this->env->getExtension("native_profiler");
        $__internal_4265eea436773402d0e796e1ffea47aa75f7922ced0e9e2ec5e8482cf0780dcf->enter($__internal_4265eea436773402d0e796e1ffea47aa75f7922ced0e9e2ec5e8482cf0780dcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 21
        echo "        ";
        $this->loadTemplate("TravelsMainBundle::layout/footer.html.twig", "TravelsMainBundle::layout.html.twig", 21)->display($context);
        // line 22
        echo "    ";
        
        $__internal_4265eea436773402d0e796e1ffea47aa75f7922ced0e9e2ec5e8482cf0780dcf->leave($__internal_4265eea436773402d0e796e1ffea47aa75f7922ced0e9e2ec5e8482cf0780dcf_prof);

    }

    // line 26
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c35b08d20585b7e86cd9952d9a07ecc50667f65a33556a9227d5950d6db80952 = $this->env->getExtension("native_profiler");
        $__internal_c35b08d20585b7e86cd9952d9a07ecc50667f65a33556a9227d5950d6db80952->enter($__internal_c35b08d20585b7e86cd9952d9a07ecc50667f65a33556a9227d5950d6db80952_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_c35b08d20585b7e86cd9952d9a07ecc50667f65a33556a9227d5950d6db80952->leave($__internal_c35b08d20585b7e86cd9952d9a07ecc50667f65a33556a9227d5950d6db80952_prof);

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
