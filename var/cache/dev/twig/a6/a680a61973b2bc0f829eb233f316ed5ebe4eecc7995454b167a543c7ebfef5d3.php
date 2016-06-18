<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_18a569ea4330ce0a1d1f42bf29481acfd9ea601987036e1edf2acba424a7b670 extends Twig_Template
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
        $__internal_4059205fe355a8b068170b769071eec0bb3eda14a67c1f9fd784f7b0282e7d88 = $this->env->getExtension("native_profiler");
        $__internal_4059205fe355a8b068170b769071eec0bb3eda14a67c1f9fd784f7b0282e7d88->enter($__internal_4059205fe355a8b068170b769071eec0bb3eda14a67c1f9fd784f7b0282e7d88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_4059205fe355a8b068170b769071eec0bb3eda14a67c1f9fd784f7b0282e7d88->leave($__internal_4059205fe355a8b068170b769071eec0bb3eda14a67c1f9fd784f7b0282e7d88_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
