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
        $__internal_0d5957abd9bf1e9e43b698d134f23b62fa0c03a3179feba5572b1e31bf40d82b = $this->env->getExtension("native_profiler");
        $__internal_0d5957abd9bf1e9e43b698d134f23b62fa0c03a3179feba5572b1e31bf40d82b->enter($__internal_0d5957abd9bf1e9e43b698d134f23b62fa0c03a3179feba5572b1e31bf40d82b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_0d5957abd9bf1e9e43b698d134f23b62fa0c03a3179feba5572b1e31bf40d82b->leave($__internal_0d5957abd9bf1e9e43b698d134f23b62fa0c03a3179feba5572b1e31bf40d82b_prof);

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
