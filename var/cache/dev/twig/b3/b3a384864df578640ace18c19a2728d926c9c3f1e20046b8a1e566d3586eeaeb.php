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
        $__internal_23b670095a4fb59e669cb409fa93eb3263fe66538c3fed51b0062ea9eff43d2f = $this->env->getExtension("native_profiler");
        $__internal_23b670095a4fb59e669cb409fa93eb3263fe66538c3fed51b0062ea9eff43d2f->enter($__internal_23b670095a4fb59e669cb409fa93eb3263fe66538c3fed51b0062ea9eff43d2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_23b670095a4fb59e669cb409fa93eb3263fe66538c3fed51b0062ea9eff43d2f->leave($__internal_23b670095a4fb59e669cb409fa93eb3263fe66538c3fed51b0062ea9eff43d2f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c7d4b3648eee33ee63c3fc70d65f1fff274fa15bbff5bf2c32d65832dfa7b52f = $this->env->getExtension("native_profiler");
        $__internal_c7d4b3648eee33ee63c3fc70d65f1fff274fa15bbff5bf2c32d65832dfa7b52f->enter($__internal_c7d4b3648eee33ee63c3fc70d65f1fff274fa15bbff5bf2c32d65832dfa7b52f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_c7d4b3648eee33ee63c3fc70d65f1fff274fa15bbff5bf2c32d65832dfa7b52f->leave($__internal_c7d4b3648eee33ee63c3fc70d65f1fff274fa15bbff5bf2c32d65832dfa7b52f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_40b5ff150b0d8d7d1136c106f86b0be1f085e3ee8c1259b039adad52dedcfc31 = $this->env->getExtension("native_profiler");
        $__internal_40b5ff150b0d8d7d1136c106f86b0be1f085e3ee8c1259b039adad52dedcfc31->enter($__internal_40b5ff150b0d8d7d1136c106f86b0be1f085e3ee8c1259b039adad52dedcfc31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_40b5ff150b0d8d7d1136c106f86b0be1f085e3ee8c1259b039adad52dedcfc31->leave($__internal_40b5ff150b0d8d7d1136c106f86b0be1f085e3ee8c1259b039adad52dedcfc31_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_cdb0fc80bfbaf7ed3ba3337278a625b368b4d230eeaa123e8bb6f611dbd210a6 = $this->env->getExtension("native_profiler");
        $__internal_cdb0fc80bfbaf7ed3ba3337278a625b368b4d230eeaa123e8bb6f611dbd210a6->enter($__internal_cdb0fc80bfbaf7ed3ba3337278a625b368b4d230eeaa123e8bb6f611dbd210a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_cdb0fc80bfbaf7ed3ba3337278a625b368b4d230eeaa123e8bb6f611dbd210a6->leave($__internal_cdb0fc80bfbaf7ed3ba3337278a625b368b4d230eeaa123e8bb6f611dbd210a6_prof);

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
