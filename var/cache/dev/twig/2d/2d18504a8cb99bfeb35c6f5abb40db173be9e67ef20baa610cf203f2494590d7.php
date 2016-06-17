<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_0b4f121824d04edecada99037f66d25498a1fcaec46c2c9d67c86f30cd2c2506 extends Twig_Template
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
        $__internal_d44ffa7c07b96c693ff5d02c7363efc0e7f102cac0d0498849d3a070ce30309c = $this->env->getExtension("native_profiler");
        $__internal_d44ffa7c07b96c693ff5d02c7363efc0e7f102cac0d0498849d3a070ce30309c->enter($__internal_d44ffa7c07b96c693ff5d02c7363efc0e7f102cac0d0498849d3a070ce30309c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_d44ffa7c07b96c693ff5d02c7363efc0e7f102cac0d0498849d3a070ce30309c->leave($__internal_d44ffa7c07b96c693ff5d02c7363efc0e7f102cac0d0498849d3a070ce30309c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
