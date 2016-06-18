<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_0aac27057c0ffd136dcadcfb1371a2a92931caa7c36e113adba5d73a62bf0120 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_391ab85ca3371ed884d068fafab6d7df03edef21e0f04c260d47e6b8c0f276e7 = $this->env->getExtension("native_profiler");
        $__internal_391ab85ca3371ed884d068fafab6d7df03edef21e0f04c260d47e6b8c0f276e7->enter($__internal_391ab85ca3371ed884d068fafab6d7df03edef21e0f04c260d47e6b8c0f276e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_391ab85ca3371ed884d068fafab6d7df03edef21e0f04c260d47e6b8c0f276e7->leave($__internal_391ab85ca3371ed884d068fafab6d7df03edef21e0f04c260d47e6b8c0f276e7_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c9bb3395f95632c072862a583136d53f67f886f778cf60a57b2a960ae32551f6 = $this->env->getExtension("native_profiler");
        $__internal_c9bb3395f95632c072862a583136d53f67f886f778cf60a57b2a960ae32551f6->enter($__internal_c9bb3395f95632c072862a583136d53f67f886f778cf60a57b2a960ae32551f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_c9bb3395f95632c072862a583136d53f67f886f778cf60a57b2a960ae32551f6->leave($__internal_c9bb3395f95632c072862a583136d53f67f886f778cf60a57b2a960ae32551f6_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_baad0ea4319281923b5766ad17779a6020e41bfc149dba17f723ae843f420d4f = $this->env->getExtension("native_profiler");
        $__internal_baad0ea4319281923b5766ad17779a6020e41bfc149dba17f723ae843f420d4f->enter($__internal_baad0ea4319281923b5766ad17779a6020e41bfc149dba17f723ae843f420d4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_baad0ea4319281923b5766ad17779a6020e41bfc149dba17f723ae843f420d4f->leave($__internal_baad0ea4319281923b5766ad17779a6020e41bfc149dba17f723ae843f420d4f_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_71a7fb6b8534659e1b46c444b6ec475d234e70d984aa445350afacab14d92a58 = $this->env->getExtension("native_profiler");
        $__internal_71a7fb6b8534659e1b46c444b6ec475d234e70d984aa445350afacab14d92a58->enter($__internal_71a7fb6b8534659e1b46c444b6ec475d234e70d984aa445350afacab14d92a58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_71a7fb6b8534659e1b46c444b6ec475d234e70d984aa445350afacab14d92a58->leave($__internal_71a7fb6b8534659e1b46c444b6ec475d234e70d984aa445350afacab14d92a58_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
