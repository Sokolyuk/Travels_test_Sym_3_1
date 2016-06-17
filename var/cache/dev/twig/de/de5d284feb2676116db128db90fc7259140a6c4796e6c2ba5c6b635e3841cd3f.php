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
        $__internal_cf43fdabb4416ad0b2cd0ab712f97b8387ea156fda0d4b164a5a9f1b1c352a3f = $this->env->getExtension("native_profiler");
        $__internal_cf43fdabb4416ad0b2cd0ab712f97b8387ea156fda0d4b164a5a9f1b1c352a3f->enter($__internal_cf43fdabb4416ad0b2cd0ab712f97b8387ea156fda0d4b164a5a9f1b1c352a3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_cf43fdabb4416ad0b2cd0ab712f97b8387ea156fda0d4b164a5a9f1b1c352a3f->leave($__internal_cf43fdabb4416ad0b2cd0ab712f97b8387ea156fda0d4b164a5a9f1b1c352a3f_prof);

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
