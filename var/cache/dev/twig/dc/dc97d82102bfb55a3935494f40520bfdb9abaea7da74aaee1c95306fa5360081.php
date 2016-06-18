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
        $__internal_94537002435f006aa7284ef578ab0e20bb50d06c2707e71aa2f26d536e21eae3 = $this->env->getExtension("native_profiler");
        $__internal_94537002435f006aa7284ef578ab0e20bb50d06c2707e71aa2f26d536e21eae3->enter($__internal_94537002435f006aa7284ef578ab0e20bb50d06c2707e71aa2f26d536e21eae3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_94537002435f006aa7284ef578ab0e20bb50d06c2707e71aa2f26d536e21eae3->leave($__internal_94537002435f006aa7284ef578ab0e20bb50d06c2707e71aa2f26d536e21eae3_prof);

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
