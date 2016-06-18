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
        $__internal_7e6276c36f398163b221a7be166afb8cb71354cd765b5a356d595a4690fbab12 = $this->env->getExtension("native_profiler");
        $__internal_7e6276c36f398163b221a7be166afb8cb71354cd765b5a356d595a4690fbab12->enter($__internal_7e6276c36f398163b221a7be166afb8cb71354cd765b5a356d595a4690fbab12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TravelsMainBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7e6276c36f398163b221a7be166afb8cb71354cd765b5a356d595a4690fbab12->leave($__internal_7e6276c36f398163b221a7be166afb8cb71354cd765b5a356d595a4690fbab12_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_fde2f4ec97f0bdf9b01fa3c18c9b025ec43d2128c762831e1cc360b54ba4ba83 = $this->env->getExtension("native_profiler");
        $__internal_fde2f4ec97f0bdf9b01fa3c18c9b025ec43d2128c762831e1cc360b54ba4ba83->enter($__internal_fde2f4ec97f0bdf9b01fa3c18c9b025ec43d2128c762831e1cc360b54ba4ba83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_fde2f4ec97f0bdf9b01fa3c18c9b025ec43d2128c762831e1cc360b54ba4ba83->leave($__internal_fde2f4ec97f0bdf9b01fa3c18c9b025ec43d2128c762831e1cc360b54ba4ba83_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7acf6d10acab21e1a23a442d0d8eb13593b2e3ba0802b198d6cd2398b86e2443 = $this->env->getExtension("native_profiler");
        $__internal_7acf6d10acab21e1a23a442d0d8eb13593b2e3ba0802b198d6cd2398b86e2443->enter($__internal_7acf6d10acab21e1a23a442d0d8eb13593b2e3ba0802b198d6cd2398b86e2443_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "\t<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/travelsmain/css/travels.css"), "html", null, true);
        echo "\" />
\t<link rel=\"stylesheet\" href=\"//fonts.googleapis.com/css?family=Ubuntu:300%7CUbuntu:400%7CUbuntu:500%7CUbuntu:700\"/>
";
        
        $__internal_7acf6d10acab21e1a23a442d0d8eb13593b2e3ba0802b198d6cd2398b86e2443->leave($__internal_7acf6d10acab21e1a23a442d0d8eb13593b2e3ba0802b198d6cd2398b86e2443_prof);

    }

    // line 11
    public function block_layout($context, array $blocks = array())
    {
        $__internal_80654f2295dbf608122eebf8bc6ef8631479c1444ba3bfe140d871e53554c864 = $this->env->getExtension("native_profiler");
        $__internal_80654f2295dbf608122eebf8bc6ef8631479c1444ba3bfe140d871e53554c864->enter($__internal_80654f2295dbf608122eebf8bc6ef8631479c1444ba3bfe140d871e53554c864_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "layout"));

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
        
        $__internal_80654f2295dbf608122eebf8bc6ef8631479c1444ba3bfe140d871e53554c864->leave($__internal_80654f2295dbf608122eebf8bc6ef8631479c1444ba3bfe140d871e53554c864_prof);

    }

    // line 13
    public function block_header($context, array $blocks = array())
    {
        $__internal_6f195bd4052a478e0456eac04fbddaaf3a99286666197a2f92738da6353b2208 = $this->env->getExtension("native_profiler");
        $__internal_6f195bd4052a478e0456eac04fbddaaf3a99286666197a2f92738da6353b2208->enter($__internal_6f195bd4052a478e0456eac04fbddaaf3a99286666197a2f92738da6353b2208_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 14
        echo "\t\t";
        $this->loadTemplate("TravelsMainBundle::layout/header.html.twig", "TravelsMainBundle::layout.html.twig", 14)->display($context);
        // line 15
        echo "    ";
        
        $__internal_6f195bd4052a478e0456eac04fbddaaf3a99286666197a2f92738da6353b2208->leave($__internal_6f195bd4052a478e0456eac04fbddaaf3a99286666197a2f92738da6353b2208_prof);

    }

    // line 17
    public function block_content($context, array $blocks = array())
    {
        $__internal_d447b025b3c0c40541555946023d85f3637372b6a8d77cea86b612a32bd4f588 = $this->env->getExtension("native_profiler");
        $__internal_d447b025b3c0c40541555946023d85f3637372b6a8d77cea86b612a32bd4f588->enter($__internal_d447b025b3c0c40541555946023d85f3637372b6a8d77cea86b612a32bd4f588_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 18
        echo "    ";
        
        $__internal_d447b025b3c0c40541555946023d85f3637372b6a8d77cea86b612a32bd4f588->leave($__internal_d447b025b3c0c40541555946023d85f3637372b6a8d77cea86b612a32bd4f588_prof);

    }

    // line 20
    public function block_footer($context, array $blocks = array())
    {
        $__internal_e361434730c26ec91d7056324c1b595b2d954438e3c8d5ad914bc80dbe37f3f2 = $this->env->getExtension("native_profiler");
        $__internal_e361434730c26ec91d7056324c1b595b2d954438e3c8d5ad914bc80dbe37f3f2->enter($__internal_e361434730c26ec91d7056324c1b595b2d954438e3c8d5ad914bc80dbe37f3f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 21
        echo "        ";
        $this->loadTemplate("TravelsMainBundle::layout/footer.html.twig", "TravelsMainBundle::layout.html.twig", 21)->display($context);
        // line 22
        echo "    ";
        
        $__internal_e361434730c26ec91d7056324c1b595b2d954438e3c8d5ad914bc80dbe37f3f2->leave($__internal_e361434730c26ec91d7056324c1b595b2d954438e3c8d5ad914bc80dbe37f3f2_prof);

    }

    // line 26
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_068bdb842f6abffc322d74b7d342fede885cd2351852753fe101fba4c611956e = $this->env->getExtension("native_profiler");
        $__internal_068bdb842f6abffc322d74b7d342fede885cd2351852753fe101fba4c611956e->enter($__internal_068bdb842f6abffc322d74b7d342fede885cd2351852753fe101fba4c611956e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_068bdb842f6abffc322d74b7d342fede885cd2351852753fe101fba4c611956e->leave($__internal_068bdb842f6abffc322d74b7d342fede885cd2351852753fe101fba4c611956e_prof);

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
