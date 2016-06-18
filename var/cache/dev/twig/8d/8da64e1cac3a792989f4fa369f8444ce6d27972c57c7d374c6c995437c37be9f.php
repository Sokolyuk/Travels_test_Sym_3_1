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
        $__internal_90a751b4fa0a81c1bee5bed1fc5947e3028a1a91334adfcbbb235c6631e6835c = $this->env->getExtension("native_profiler");
        $__internal_90a751b4fa0a81c1bee5bed1fc5947e3028a1a91334adfcbbb235c6631e6835c->enter($__internal_90a751b4fa0a81c1bee5bed1fc5947e3028a1a91334adfcbbb235c6631e6835c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_90a751b4fa0a81c1bee5bed1fc5947e3028a1a91334adfcbbb235c6631e6835c->leave($__internal_90a751b4fa0a81c1bee5bed1fc5947e3028a1a91334adfcbbb235c6631e6835c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f49bb04383464f0e56f8be329106f877c1497fc60e44d3a0b8ce69151b57720b = $this->env->getExtension("native_profiler");
        $__internal_f49bb04383464f0e56f8be329106f877c1497fc60e44d3a0b8ce69151b57720b->enter($__internal_f49bb04383464f0e56f8be329106f877c1497fc60e44d3a0b8ce69151b57720b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_f49bb04383464f0e56f8be329106f877c1497fc60e44d3a0b8ce69151b57720b->leave($__internal_f49bb04383464f0e56f8be329106f877c1497fc60e44d3a0b8ce69151b57720b_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_1c8dd7221f80626c971429a077450f6b0d07f717a50534dabea738058f9727ad = $this->env->getExtension("native_profiler");
        $__internal_1c8dd7221f80626c971429a077450f6b0d07f717a50534dabea738058f9727ad->enter($__internal_1c8dd7221f80626c971429a077450f6b0d07f717a50534dabea738058f9727ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_1c8dd7221f80626c971429a077450f6b0d07f717a50534dabea738058f9727ad->leave($__internal_1c8dd7221f80626c971429a077450f6b0d07f717a50534dabea738058f9727ad_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_c36cd71c69c28e172551d05abb3d427375a9fa88cb3cf2872b658a2d7939aa27 = $this->env->getExtension("native_profiler");
        $__internal_c36cd71c69c28e172551d05abb3d427375a9fa88cb3cf2872b658a2d7939aa27->enter($__internal_c36cd71c69c28e172551d05abb3d427375a9fa88cb3cf2872b658a2d7939aa27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_c36cd71c69c28e172551d05abb3d427375a9fa88cb3cf2872b658a2d7939aa27->leave($__internal_c36cd71c69c28e172551d05abb3d427375a9fa88cb3cf2872b658a2d7939aa27_prof);

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
