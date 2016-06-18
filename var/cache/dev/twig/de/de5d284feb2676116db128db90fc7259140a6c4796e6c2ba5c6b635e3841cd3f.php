<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_96bfe32f70053f66114f99af3d444ee9fb2ea751c61537585fadbbcdd48ded79 extends Twig_Template
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
        $__internal_c23c5f9e49016b6e20039d61225c9fea48507224b147103ee60ebf3c0955a7d0 = $this->env->getExtension("native_profiler");
        $__internal_c23c5f9e49016b6e20039d61225c9fea48507224b147103ee60ebf3c0955a7d0->enter($__internal_c23c5f9e49016b6e20039d61225c9fea48507224b147103ee60ebf3c0955a7d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_c23c5f9e49016b6e20039d61225c9fea48507224b147103ee60ebf3c0955a7d0->leave($__internal_c23c5f9e49016b6e20039d61225c9fea48507224b147103ee60ebf3c0955a7d0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
