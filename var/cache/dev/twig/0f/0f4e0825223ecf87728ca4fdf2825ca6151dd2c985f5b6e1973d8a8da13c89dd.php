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
        $__internal_e473ddbb196db5d77f5cd1af4387a4f25207a14373b7b5185112e9cb0f6295d7 = $this->env->getExtension("native_profiler");
        $__internal_e473ddbb196db5d77f5cd1af4387a4f25207a14373b7b5185112e9cb0f6295d7->enter($__internal_e473ddbb196db5d77f5cd1af4387a4f25207a14373b7b5185112e9cb0f6295d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_e473ddbb196db5d77f5cd1af4387a4f25207a14373b7b5185112e9cb0f6295d7->leave($__internal_e473ddbb196db5d77f5cd1af4387a4f25207a14373b7b5185112e9cb0f6295d7_prof);

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
