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
        $__internal_2eb16bdc6548705a820f26461bc703c18ca3452f93979f86a1f6e473a3813714 = $this->env->getExtension("native_profiler");
        $__internal_2eb16bdc6548705a820f26461bc703c18ca3452f93979f86a1f6e473a3813714->enter($__internal_2eb16bdc6548705a820f26461bc703c18ca3452f93979f86a1f6e473a3813714_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_2eb16bdc6548705a820f26461bc703c18ca3452f93979f86a1f6e473a3813714->leave($__internal_2eb16bdc6548705a820f26461bc703c18ca3452f93979f86a1f6e473a3813714_prof);

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
