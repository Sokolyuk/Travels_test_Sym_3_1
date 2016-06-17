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
        $__internal_88fbb5aa076f642806dc3dd8915c8fba6519517392b1f41095f6832980f37b1f = $this->env->getExtension("native_profiler");
        $__internal_88fbb5aa076f642806dc3dd8915c8fba6519517392b1f41095f6832980f37b1f->enter($__internal_88fbb5aa076f642806dc3dd8915c8fba6519517392b1f41095f6832980f37b1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@TravelsMain/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_88fbb5aa076f642806dc3dd8915c8fba6519517392b1f41095f6832980f37b1f->leave($__internal_88fbb5aa076f642806dc3dd8915c8fba6519517392b1f41095f6832980f37b1f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_5423b38bfd46568e5306a8f2281450ea7fb7966376fa276a3448d23aba0d70a5 = $this->env->getExtension("native_profiler");
        $__internal_5423b38bfd46568e5306a8f2281450ea7fb7966376fa276a3448d23aba0d70a5->enter($__internal_5423b38bfd46568e5306a8f2281450ea7fb7966376fa276a3448d23aba0d70a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_5423b38bfd46568e5306a8f2281450ea7fb7966376fa276a3448d23aba0d70a5->leave($__internal_5423b38bfd46568e5306a8f2281450ea7fb7966376fa276a3448d23aba0d70a5_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8015766bebd38a1e0cda6d0bdefd26071481081f4841429e3016da9301884bd6 = $this->env->getExtension("native_profiler");
        $__internal_8015766bebd38a1e0cda6d0bdefd26071481081f4841429e3016da9301884bd6->enter($__internal_8015766bebd38a1e0cda6d0bdefd26071481081f4841429e3016da9301884bd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "\t<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/travelsmain/css/travels.css"), "html", null, true);
        echo "\" />
\t<link rel=\"stylesheet\" href=\"//fonts.googleapis.com/css?family=Ubuntu:300%7CUbuntu:400%7CUbuntu:500%7CUbuntu:700\"/>
\t<script src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/travelsmain/js/jquery-3.0.0.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/travelsmain/js/jquery-ui.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/travelsmain/js/travels.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_8015766bebd38a1e0cda6d0bdefd26071481081f4841429e3016da9301884bd6->leave($__internal_8015766bebd38a1e0cda6d0bdefd26071481081f4841429e3016da9301884bd6_prof);

    }

    // line 14
    public function block_layout($context, array $blocks = array())
    {
        $__internal_096dc0e2d7fdb49c7a06ff72c985c059ce5831a91e178003d2d3282bf0debf67 = $this->env->getExtension("native_profiler");
        $__internal_096dc0e2d7fdb49c7a06ff72c985c059ce5831a91e178003d2d3282bf0debf67->enter($__internal_096dc0e2d7fdb49c7a06ff72c985c059ce5831a91e178003d2d3282bf0debf67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "layout"));

        // line 15
        echo "
    ";
        // line 16
        $this->displayBlock('header', $context, $blocks);
        // line 19
        echo "
    ";
        // line 20
        $this->displayBlock('content', $context, $blocks);
        // line 22
        echo "
    ";
        // line 23
        $this->displayBlock('footer', $context, $blocks);
        // line 26
        echo "
";
        
        $__internal_096dc0e2d7fdb49c7a06ff72c985c059ce5831a91e178003d2d3282bf0debf67->leave($__internal_096dc0e2d7fdb49c7a06ff72c985c059ce5831a91e178003d2d3282bf0debf67_prof);

    }

    // line 16
    public function block_header($context, array $blocks = array())
    {
        $__internal_a07cc58b82e8e153ff8ee84a58724ca43b65e5751ddc18f06e17e06b37184c14 = $this->env->getExtension("native_profiler");
        $__internal_a07cc58b82e8e153ff8ee84a58724ca43b65e5751ddc18f06e17e06b37184c14->enter($__internal_a07cc58b82e8e153ff8ee84a58724ca43b65e5751ddc18f06e17e06b37184c14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 17
        echo "\t\t";
        $this->loadTemplate("TravelsMainBundle::layout/header.html.twig", "@TravelsMain/layout.html.twig", 17)->display($context);
        // line 18
        echo "    ";
        
        $__internal_a07cc58b82e8e153ff8ee84a58724ca43b65e5751ddc18f06e17e06b37184c14->leave($__internal_a07cc58b82e8e153ff8ee84a58724ca43b65e5751ddc18f06e17e06b37184c14_prof);

    }

    // line 20
    public function block_content($context, array $blocks = array())
    {
        $__internal_ad33c05671c3883de8c9f9339a4fecbdf121968486bda97cf3a87ebd0e1ef09c = $this->env->getExtension("native_profiler");
        $__internal_ad33c05671c3883de8c9f9339a4fecbdf121968486bda97cf3a87ebd0e1ef09c->enter($__internal_ad33c05671c3883de8c9f9339a4fecbdf121968486bda97cf3a87ebd0e1ef09c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 21
        echo "    ";
        
        $__internal_ad33c05671c3883de8c9f9339a4fecbdf121968486bda97cf3a87ebd0e1ef09c->leave($__internal_ad33c05671c3883de8c9f9339a4fecbdf121968486bda97cf3a87ebd0e1ef09c_prof);

    }

    // line 23
    public function block_footer($context, array $blocks = array())
    {
        $__internal_52c83c6eb13433cef8321f5c413527d7864d07827a1fc5b333d346ba2ca4521f = $this->env->getExtension("native_profiler");
        $__internal_52c83c6eb13433cef8321f5c413527d7864d07827a1fc5b333d346ba2ca4521f->enter($__internal_52c83c6eb13433cef8321f5c413527d7864d07827a1fc5b333d346ba2ca4521f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 24
        echo "        ";
        $this->loadTemplate("TravelsMainBundle::layout/footer.html.twig", "@TravelsMain/layout.html.twig", 24)->display($context);
        // line 25
        echo "    ";
        
        $__internal_52c83c6eb13433cef8321f5c413527d7864d07827a1fc5b333d346ba2ca4521f->leave($__internal_52c83c6eb13433cef8321f5c413527d7864d07827a1fc5b333d346ba2ca4521f_prof);

    }

    // line 29
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6e214da4c4ad9176a2e63d6c4395f34e5f7f83ab4b210acd2233ac886e18f5e6 = $this->env->getExtension("native_profiler");
        $__internal_6e214da4c4ad9176a2e63d6c4395f34e5f7f83ab4b210acd2233ac886e18f5e6->enter($__internal_6e214da4c4ad9176a2e63d6c4395f34e5f7f83ab4b210acd2233ac886e18f5e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_6e214da4c4ad9176a2e63d6c4395f34e5f7f83ab4b210acd2233ac886e18f5e6->leave($__internal_6e214da4c4ad9176a2e63d6c4395f34e5f7f83ab4b210acd2233ac886e18f5e6_prof);

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
        return array (  154 => 29,  147 => 25,  144 => 24,  138 => 23,  131 => 21,  125 => 20,  118 => 18,  115 => 17,  109 => 16,  101 => 26,  99 => 23,  96 => 22,  94 => 20,  91 => 19,  89 => 16,  86 => 15,  80 => 14,  71 => 11,  67 => 10,  63 => 9,  57 => 7,  51 => 6,  40 => 3,  11 => 1,);
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
/* 	<script src="{{ asset('bundles/travelsmain/js/jquery-3.0.0.min.js') }}"></script>*/
/* 	<script src="{{ asset('bundles/travelsmain/js/jquery-ui.min.js') }}"></script>*/
/* 	<script src="{{ asset('bundles/travelsmain/js/travels.js') }}"></script>*/
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
