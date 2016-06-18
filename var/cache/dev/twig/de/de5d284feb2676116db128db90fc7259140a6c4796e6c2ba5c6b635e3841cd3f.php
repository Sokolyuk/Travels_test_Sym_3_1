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
        $__internal_a039b9876201b6a8da868e1f1d3738512f2b8916cbfcf36128ffe2bd134e7e62 = $this->env->getExtension("native_profiler");
        $__internal_a039b9876201b6a8da868e1f1d3738512f2b8916cbfcf36128ffe2bd134e7e62->enter($__internal_a039b9876201b6a8da868e1f1d3738512f2b8916cbfcf36128ffe2bd134e7e62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_a039b9876201b6a8da868e1f1d3738512f2b8916cbfcf36128ffe2bd134e7e62->leave($__internal_a039b9876201b6a8da868e1f1d3738512f2b8916cbfcf36128ffe2bd134e7e62_prof);

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
