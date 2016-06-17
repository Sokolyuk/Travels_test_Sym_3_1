<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_19e24b0a0e7d61971d83043d81d30fae094a062750b29035224647e0c086c057 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_ee7ddb6639d08d9af6fb16974b46de56f8bcd424cf3fe9f316937e04c15654a4 = $this->env->getExtension("native_profiler");
        $__internal_ee7ddb6639d08d9af6fb16974b46de56f8bcd424cf3fe9f316937e04c15654a4->enter($__internal_ee7ddb6639d08d9af6fb16974b46de56f8bcd424cf3fe9f316937e04c15654a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ee7ddb6639d08d9af6fb16974b46de56f8bcd424cf3fe9f316937e04c15654a4->leave($__internal_ee7ddb6639d08d9af6fb16974b46de56f8bcd424cf3fe9f316937e04c15654a4_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4f0b22f103deb04dbd1e3289896f2dd9bab079f4a5220937f94d88e92dce86e8 = $this->env->getExtension("native_profiler");
        $__internal_4f0b22f103deb04dbd1e3289896f2dd9bab079f4a5220937f94d88e92dce86e8->enter($__internal_4f0b22f103deb04dbd1e3289896f2dd9bab079f4a5220937f94d88e92dce86e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_4f0b22f103deb04dbd1e3289896f2dd9bab079f4a5220937f94d88e92dce86e8->leave($__internal_4f0b22f103deb04dbd1e3289896f2dd9bab079f4a5220937f94d88e92dce86e8_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_c7f7a5afae32c4175217b7c31463085b5ac7b2e7a7c6524969c05c54be2b959e = $this->env->getExtension("native_profiler");
        $__internal_c7f7a5afae32c4175217b7c31463085b5ac7b2e7a7c6524969c05c54be2b959e->enter($__internal_c7f7a5afae32c4175217b7c31463085b5ac7b2e7a7c6524969c05c54be2b959e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_c7f7a5afae32c4175217b7c31463085b5ac7b2e7a7c6524969c05c54be2b959e->leave($__internal_c7f7a5afae32c4175217b7c31463085b5ac7b2e7a7c6524969c05c54be2b959e_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */