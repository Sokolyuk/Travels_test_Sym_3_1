<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_361a1ce0230da849b46746b2fa18935250f37f1f00d6e47773c7d09912995c92 extends Twig_Template
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
        $__internal_16f66f060c303bc79710652d937997321ac72630d8a7e4877aae4b37e7321a61 = $this->env->getExtension("native_profiler");
        $__internal_16f66f060c303bc79710652d937997321ac72630d8a7e4877aae4b37e7321a61->enter($__internal_16f66f060c303bc79710652d937997321ac72630d8a7e4877aae4b37e7321a61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_16f66f060c303bc79710652d937997321ac72630d8a7e4877aae4b37e7321a61->leave($__internal_16f66f060c303bc79710652d937997321ac72630d8a7e4877aae4b37e7321a61_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
