<?php

/* TravelsMainBundle:layout:header.html.twig */
class __TwigTemplate_a5501ebabfa6c39cadcd07ca79035a3d57fdd7cadced404c26ad9c8133e2f6ae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d28a96bed8ece69df57fb0fe0506c78c47ca44f419d8d39ca9abb1100be0755f = $this->env->getExtension("native_profiler");
        $__internal_d28a96bed8ece69df57fb0fe0506c78c47ca44f419d8d39ca9abb1100be0755f->enter($__internal_d28a96bed8ece69df57fb0fe0506c78c47ca44f419d8d39ca9abb1100be0755f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TravelsMainBundle:layout:header.html.twig"));

        // line 1
        echo "<header class=\"header\">
    <div class=\"container\">
        <div class=\"row\">
\t\t\t<p>Willkommen! Das ist die Kopfzeile.</p>
        </div>
    </div>
</header>";
        
        $__internal_d28a96bed8ece69df57fb0fe0506c78c47ca44f419d8d39ca9abb1100be0755f->leave($__internal_d28a96bed8ece69df57fb0fe0506c78c47ca44f419d8d39ca9abb1100be0755f_prof);

    }

    public function getTemplateName()
    {
        return "TravelsMainBundle:layout:header.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <header class="header">*/
/*     <div class="container">*/
/*         <div class="row">*/
/* 			<p>Willkommen! Das ist die Kopfzeile.</p>*/
/*         </div>*/
/*     </div>*/
/* </header>*/
