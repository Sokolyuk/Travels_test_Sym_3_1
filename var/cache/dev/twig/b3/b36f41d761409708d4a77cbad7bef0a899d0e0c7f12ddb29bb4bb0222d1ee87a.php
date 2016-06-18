<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_20671dcb2971cbb681bfb623b5cd6a20cc34541fa1d46f3873fb570b0be9ffc7 extends Twig_Template
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
        $__internal_f18aa7cfb104b12b1f2bd024aaa91515aea2cd1fb5dafdd616a43a0bee5ab5a0 = $this->env->getExtension("native_profiler");
        $__internal_f18aa7cfb104b12b1f2bd024aaa91515aea2cd1fb5dafdd616a43a0bee5ab5a0->enter($__internal_f18aa7cfb104b12b1f2bd024aaa91515aea2cd1fb5dafdd616a43a0bee5ab5a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_f18aa7cfb104b12b1f2bd024aaa91515aea2cd1fb5dafdd616a43a0bee5ab5a0->leave($__internal_f18aa7cfb104b12b1f2bd024aaa91515aea2cd1fb5dafdd616a43a0bee5ab5a0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
