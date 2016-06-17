<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_b9d5aeadaad7bfff1759131fa7ea152d2d13ac717392c349187d5860961b5cbb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
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
        $__internal_92a5b794293090436d952bd684a07e0bc4071566b71a05d9d78b248a3f65eac3 = $this->env->getExtension("native_profiler");
        $__internal_92a5b794293090436d952bd684a07e0bc4071566b71a05d9d78b248a3f65eac3->enter($__internal_92a5b794293090436d952bd684a07e0bc4071566b71a05d9d78b248a3f65eac3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_92a5b794293090436d952bd684a07e0bc4071566b71a05d9d78b248a3f65eac3->leave($__internal_92a5b794293090436d952bd684a07e0bc4071566b71a05d9d78b248a3f65eac3_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_428e048a546a3630e067de3b0c8a1666144378967a2512f25107efb3734d7462 = $this->env->getExtension("native_profiler");
        $__internal_428e048a546a3630e067de3b0c8a1666144378967a2512f25107efb3734d7462->enter($__internal_428e048a546a3630e067de3b0c8a1666144378967a2512f25107efb3734d7462_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_428e048a546a3630e067de3b0c8a1666144378967a2512f25107efb3734d7462->leave($__internal_428e048a546a3630e067de3b0c8a1666144378967a2512f25107efb3734d7462_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_966c0838b518eb7112703e433a115b6380e05a42db3b1c31089a40dcd33ad47f = $this->env->getExtension("native_profiler");
        $__internal_966c0838b518eb7112703e433a115b6380e05a42db3b1c31089a40dcd33ad47f->enter($__internal_966c0838b518eb7112703e433a115b6380e05a42db3b1c31089a40dcd33ad47f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_966c0838b518eb7112703e433a115b6380e05a42db3b1c31089a40dcd33ad47f->leave($__internal_966c0838b518eb7112703e433a115b6380e05a42db3b1c31089a40dcd33ad47f_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
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
