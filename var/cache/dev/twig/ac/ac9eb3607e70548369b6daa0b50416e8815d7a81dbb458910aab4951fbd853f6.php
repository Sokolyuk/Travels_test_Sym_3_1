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
        $__internal_5fc1603093553e9bcff5fa71076cdc3d8ba0cad7211c7aa23e377f45de1f4ae6 = $this->env->getExtension("native_profiler");
        $__internal_5fc1603093553e9bcff5fa71076cdc3d8ba0cad7211c7aa23e377f45de1f4ae6->enter($__internal_5fc1603093553e9bcff5fa71076cdc3d8ba0cad7211c7aa23e377f45de1f4ae6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5fc1603093553e9bcff5fa71076cdc3d8ba0cad7211c7aa23e377f45de1f4ae6->leave($__internal_5fc1603093553e9bcff5fa71076cdc3d8ba0cad7211c7aa23e377f45de1f4ae6_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_1f3d817003ac4ae7701f3416fe1735fd986a03cdae8e9a216556567d07fd5e15 = $this->env->getExtension("native_profiler");
        $__internal_1f3d817003ac4ae7701f3416fe1735fd986a03cdae8e9a216556567d07fd5e15->enter($__internal_1f3d817003ac4ae7701f3416fe1735fd986a03cdae8e9a216556567d07fd5e15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_1f3d817003ac4ae7701f3416fe1735fd986a03cdae8e9a216556567d07fd5e15->leave($__internal_1f3d817003ac4ae7701f3416fe1735fd986a03cdae8e9a216556567d07fd5e15_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_180283cc5deee8cd1825b5c37724a98369723b4c4fb97e3c14eaec9f935d1034 = $this->env->getExtension("native_profiler");
        $__internal_180283cc5deee8cd1825b5c37724a98369723b4c4fb97e3c14eaec9f935d1034->enter($__internal_180283cc5deee8cd1825b5c37724a98369723b4c4fb97e3c14eaec9f935d1034_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_180283cc5deee8cd1825b5c37724a98369723b4c4fb97e3c14eaec9f935d1034->leave($__internal_180283cc5deee8cd1825b5c37724a98369723b4c4fb97e3c14eaec9f935d1034_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_74429b70878686cbf3a033ea7028630071fc90c106f66c0b6ec562a89f420ea5 = $this->env->getExtension("native_profiler");
        $__internal_74429b70878686cbf3a033ea7028630071fc90c106f66c0b6ec562a89f420ea5->enter($__internal_74429b70878686cbf3a033ea7028630071fc90c106f66c0b6ec562a89f420ea5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_74429b70878686cbf3a033ea7028630071fc90c106f66c0b6ec562a89f420ea5->leave($__internal_74429b70878686cbf3a033ea7028630071fc90c106f66c0b6ec562a89f420ea5_prof);

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
