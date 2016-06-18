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
        $__internal_bb5c372ec2d728075370521fc080e51be69cfbab8bf765bb45fa9c2649f9dd88 = $this->env->getExtension("native_profiler");
        $__internal_bb5c372ec2d728075370521fc080e51be69cfbab8bf765bb45fa9c2649f9dd88->enter($__internal_bb5c372ec2d728075370521fc080e51be69cfbab8bf765bb45fa9c2649f9dd88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_bb5c372ec2d728075370521fc080e51be69cfbab8bf765bb45fa9c2649f9dd88->leave($__internal_bb5c372ec2d728075370521fc080e51be69cfbab8bf765bb45fa9c2649f9dd88_prof);

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
