<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_ce53694f36c7a020161a91b392a14577950e39346fb11902942678faae2c1267 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c31eacaa8fa51683eec4f753ce94a68db298e578efb713c8a81d3be20b3f9839 = $this->env->getExtension("native_profiler");
        $__internal_c31eacaa8fa51683eec4f753ce94a68db298e578efb713c8a81d3be20b3f9839->enter($__internal_c31eacaa8fa51683eec4f753ce94a68db298e578efb713c8a81d3be20b3f9839_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c31eacaa8fa51683eec4f753ce94a68db298e578efb713c8a81d3be20b3f9839->leave($__internal_c31eacaa8fa51683eec4f753ce94a68db298e578efb713c8a81d3be20b3f9839_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f6be79c748d50e6488f181cf25b62a74a4e56284541a96de418bce12cce665f8 = $this->env->getExtension("native_profiler");
        $__internal_f6be79c748d50e6488f181cf25b62a74a4e56284541a96de418bce12cce665f8->enter($__internal_f6be79c748d50e6488f181cf25b62a74a4e56284541a96de418bce12cce665f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_f6be79c748d50e6488f181cf25b62a74a4e56284541a96de418bce12cce665f8->leave($__internal_f6be79c748d50e6488f181cf25b62a74a4e56284541a96de418bce12cce665f8_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_54fb51ef23bc713da9a33e0fefeac20b7a0c60d0e53525fe696d14a4b9548337 = $this->env->getExtension("native_profiler");
        $__internal_54fb51ef23bc713da9a33e0fefeac20b7a0c60d0e53525fe696d14a4b9548337->enter($__internal_54fb51ef23bc713da9a33e0fefeac20b7a0c60d0e53525fe696d14a4b9548337_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_54fb51ef23bc713da9a33e0fefeac20b7a0c60d0e53525fe696d14a4b9548337->leave($__internal_54fb51ef23bc713da9a33e0fefeac20b7a0c60d0e53525fe696d14a4b9548337_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_688a7d8f6ebf288ab71cbe2be81fdbf3f8067d6b946599b9983c7a67bc215eb2 = $this->env->getExtension("native_profiler");
        $__internal_688a7d8f6ebf288ab71cbe2be81fdbf3f8067d6b946599b9983c7a67bc215eb2->enter($__internal_688a7d8f6ebf288ab71cbe2be81fdbf3f8067d6b946599b9983c7a67bc215eb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_688a7d8f6ebf288ab71cbe2be81fdbf3f8067d6b946599b9983c7a67bc215eb2->leave($__internal_688a7d8f6ebf288ab71cbe2be81fdbf3f8067d6b946599b9983c7a67bc215eb2_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
