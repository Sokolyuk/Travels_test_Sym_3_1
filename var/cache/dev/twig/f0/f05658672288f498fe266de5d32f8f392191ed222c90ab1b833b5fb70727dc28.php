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
        $__internal_11ae959f113c4e6cdf1f3674f8306aa5d2c23e15d2c9f738dde504b6b4ada402 = $this->env->getExtension("native_profiler");
        $__internal_11ae959f113c4e6cdf1f3674f8306aa5d2c23e15d2c9f738dde504b6b4ada402->enter($__internal_11ae959f113c4e6cdf1f3674f8306aa5d2c23e15d2c9f738dde504b6b4ada402_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_11ae959f113c4e6cdf1f3674f8306aa5d2c23e15d2c9f738dde504b6b4ada402->leave($__internal_11ae959f113c4e6cdf1f3674f8306aa5d2c23e15d2c9f738dde504b6b4ada402_prof);

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
