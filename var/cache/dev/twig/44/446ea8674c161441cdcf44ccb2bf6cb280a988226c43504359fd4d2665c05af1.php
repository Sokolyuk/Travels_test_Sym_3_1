<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_aac03a113f359236c4431843e8be07b9385879524af2d0b120f322f996539ffe extends Twig_Template
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
        $__internal_91b86ff8fb92522ad63836d641c9ed97fb0dbf4ebee644e9eb36b2dac4e045aa = $this->env->getExtension("native_profiler");
        $__internal_91b86ff8fb92522ad63836d641c9ed97fb0dbf4ebee644e9eb36b2dac4e045aa->enter($__internal_91b86ff8fb92522ad63836d641c9ed97fb0dbf4ebee644e9eb36b2dac4e045aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_91b86ff8fb92522ad63836d641c9ed97fb0dbf4ebee644e9eb36b2dac4e045aa->leave($__internal_91b86ff8fb92522ad63836d641c9ed97fb0dbf4ebee644e9eb36b2dac4e045aa_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */