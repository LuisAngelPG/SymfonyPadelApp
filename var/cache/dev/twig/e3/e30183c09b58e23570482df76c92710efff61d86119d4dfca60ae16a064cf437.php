<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_2f40f6c74e1416f238c91c852947b385c095a5a15dee62e5b2f0c4db4798f368 extends Twig_Template
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
        $__internal_720a34a9fc519aa6533edc3b0ddc17fdb6951b8ab6dbd7c49f47426dfda90fa8 = $this->env->getExtension("native_profiler");
        $__internal_720a34a9fc519aa6533edc3b0ddc17fdb6951b8ab6dbd7c49f47426dfda90fa8->enter($__internal_720a34a9fc519aa6533edc3b0ddc17fdb6951b8ab6dbd7c49f47426dfda90fa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_720a34a9fc519aa6533edc3b0ddc17fdb6951b8ab6dbd7c49f47426dfda90fa8->leave($__internal_720a34a9fc519aa6533edc3b0ddc17fdb6951b8ab6dbd7c49f47426dfda90fa8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
