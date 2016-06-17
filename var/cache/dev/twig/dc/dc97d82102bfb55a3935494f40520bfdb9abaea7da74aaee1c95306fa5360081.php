<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_b34748a047ddee14d2cddd49b021004cd41c5c23cac4fc371a0330e899400ac7 extends Twig_Template
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
        $__internal_3fc173b0dde8376d9d2e45a0cb6ef324dd5291f675cb912067baac6324f6c511 = $this->env->getExtension("native_profiler");
        $__internal_3fc173b0dde8376d9d2e45a0cb6ef324dd5291f675cb912067baac6324f6c511->enter($__internal_3fc173b0dde8376d9d2e45a0cb6ef324dd5291f675cb912067baac6324f6c511_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_3fc173b0dde8376d9d2e45a0cb6ef324dd5291f675cb912067baac6324f6c511->leave($__internal_3fc173b0dde8376d9d2e45a0cb6ef324dd5291f675cb912067baac6324f6c511_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
