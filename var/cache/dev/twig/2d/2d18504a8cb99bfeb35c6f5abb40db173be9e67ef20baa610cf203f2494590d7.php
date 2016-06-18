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
        $__internal_e055d128dbd3934576cea3c9b2cf13c338ecc96af13661c34876b9c3cf753742 = $this->env->getExtension("native_profiler");
        $__internal_e055d128dbd3934576cea3c9b2cf13c338ecc96af13661c34876b9c3cf753742->enter($__internal_e055d128dbd3934576cea3c9b2cf13c338ecc96af13661c34876b9c3cf753742_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_e055d128dbd3934576cea3c9b2cf13c338ecc96af13661c34876b9c3cf753742->leave($__internal_e055d128dbd3934576cea3c9b2cf13c338ecc96af13661c34876b9c3cf753742_prof);

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
