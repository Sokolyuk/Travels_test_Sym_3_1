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
        $__internal_a4a8e8a8c5f5d3663edbba9346fedb60f7afb877af5e80b0c77eded09e8fba0c = $this->env->getExtension("native_profiler");
        $__internal_a4a8e8a8c5f5d3663edbba9346fedb60f7afb877af5e80b0c77eded09e8fba0c->enter($__internal_a4a8e8a8c5f5d3663edbba9346fedb60f7afb877af5e80b0c77eded09e8fba0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_a4a8e8a8c5f5d3663edbba9346fedb60f7afb877af5e80b0c77eded09e8fba0c->leave($__internal_a4a8e8a8c5f5d3663edbba9346fedb60f7afb877af5e80b0c77eded09e8fba0c_prof);

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
