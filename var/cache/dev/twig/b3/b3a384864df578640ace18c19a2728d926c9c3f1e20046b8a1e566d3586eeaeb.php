<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_571f7a9fdf996ba1ce6d4695fee741fb564826470faa9b695989292daa43ac33 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_377b6c3ea1533ff531e41074fce0bdaa89640d2db54029cc19477f15cb54b129 = $this->env->getExtension("native_profiler");
        $__internal_377b6c3ea1533ff531e41074fce0bdaa89640d2db54029cc19477f15cb54b129->enter($__internal_377b6c3ea1533ff531e41074fce0bdaa89640d2db54029cc19477f15cb54b129_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_377b6c3ea1533ff531e41074fce0bdaa89640d2db54029cc19477f15cb54b129->leave($__internal_377b6c3ea1533ff531e41074fce0bdaa89640d2db54029cc19477f15cb54b129_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c81d09fbb4c0583bf28bc7b7633070579c9085845ff69d32c31ec640641efb22 = $this->env->getExtension("native_profiler");
        $__internal_c81d09fbb4c0583bf28bc7b7633070579c9085845ff69d32c31ec640641efb22->enter($__internal_c81d09fbb4c0583bf28bc7b7633070579c9085845ff69d32c31ec640641efb22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_c81d09fbb4c0583bf28bc7b7633070579c9085845ff69d32c31ec640641efb22->leave($__internal_c81d09fbb4c0583bf28bc7b7633070579c9085845ff69d32c31ec640641efb22_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_6d67dc68be95590e7876f2079edd360b6abd58918940ca26aaa33d7c24fee2a5 = $this->env->getExtension("native_profiler");
        $__internal_6d67dc68be95590e7876f2079edd360b6abd58918940ca26aaa33d7c24fee2a5->enter($__internal_6d67dc68be95590e7876f2079edd360b6abd58918940ca26aaa33d7c24fee2a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_6d67dc68be95590e7876f2079edd360b6abd58918940ca26aaa33d7c24fee2a5->leave($__internal_6d67dc68be95590e7876f2079edd360b6abd58918940ca26aaa33d7c24fee2a5_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_9dd559d2693f7aee3a9561d1212e1ef01eb95e050cf957df875bb24cc97f3dab = $this->env->getExtension("native_profiler");
        $__internal_9dd559d2693f7aee3a9561d1212e1ef01eb95e050cf957df875bb24cc97f3dab->enter($__internal_9dd559d2693f7aee3a9561d1212e1ef01eb95e050cf957df875bb24cc97f3dab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_9dd559d2693f7aee3a9561d1212e1ef01eb95e050cf957df875bb24cc97f3dab->leave($__internal_9dd559d2693f7aee3a9561d1212e1ef01eb95e050cf957df875bb24cc97f3dab_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
