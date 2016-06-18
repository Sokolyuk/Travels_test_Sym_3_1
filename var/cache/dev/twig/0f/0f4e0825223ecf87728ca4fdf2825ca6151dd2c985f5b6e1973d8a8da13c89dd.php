<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_9c4d33a65d53e6e8c1438319c0c2dadf96417b70a76903125b5325f9e19281c8 extends Twig_Template
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
        $__internal_0b6f0c04156ead4cc16d5fc7d477ad403aa6cfe7bc3bab8ef6d74944a09fc92b = $this->env->getExtension("native_profiler");
        $__internal_0b6f0c04156ead4cc16d5fc7d477ad403aa6cfe7bc3bab8ef6d74944a09fc92b->enter($__internal_0b6f0c04156ead4cc16d5fc7d477ad403aa6cfe7bc3bab8ef6d74944a09fc92b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_0b6f0c04156ead4cc16d5fc7d477ad403aa6cfe7bc3bab8ef6d74944a09fc92b->leave($__internal_0b6f0c04156ead4cc16d5fc7d477ad403aa6cfe7bc3bab8ef6d74944a09fc92b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
