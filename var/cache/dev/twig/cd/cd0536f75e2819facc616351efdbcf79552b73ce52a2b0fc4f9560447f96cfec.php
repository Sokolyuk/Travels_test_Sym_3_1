<?php

/* TwigBundle:Exception:traces.txt.twig */
class __TwigTemplate_f4649dd839905e678ae30fa16fd3a7e319d918cf263a15fca8b06a995300641f extends Twig_Template
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
        $__internal_2e2cc0fa8b811af596e8f32f8c4f7a4abc7d30a276427510e6c433c0b205fe0b = $this->env->getExtension("native_profiler");
        $__internal_2e2cc0fa8b811af596e8f32f8c4f7a4abc7d30a276427510e6c433c0b205fe0b->enter($__internal_2e2cc0fa8b811af596e8f32f8c4f7a4abc7d30a276427510e6c433c0b205fe0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "TwigBundle:Exception:traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_2e2cc0fa8b811af596e8f32f8c4f7a4abc7d30a276427510e6c433c0b205fe0b->leave($__internal_2e2cc0fa8b811af596e8f32f8c4f7a4abc7d30a276427510e6c433c0b205fe0b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  28 => 3,  24 => 2,  22 => 1,);
    }
}
/* {% if exception.trace|length %}*/
/* {% for trace in exception.trace %}*/
/* {% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}*/
/* */
/* {% endfor %}*/
/* {% endif %}*/
/* */
