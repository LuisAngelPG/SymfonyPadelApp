<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_4fceec8436487b8b36bd593ce1336c7527ec8e6f819556a37f1115b802270cba extends Twig_Template
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
        $__internal_311d95fe03de3062e1ae026c33e3746310f8f4c6d5dafcb36ab01df061148d2e = $this->env->getExtension("native_profiler");
        $__internal_311d95fe03de3062e1ae026c33e3746310f8f4c6d5dafcb36ab01df061148d2e->enter($__internal_311d95fe03de3062e1ae026c33e3746310f8f4c6d5dafcb36ab01df061148d2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_311d95fe03de3062e1ae026c33e3746310f8f4c6d5dafcb36ab01df061148d2e->leave($__internal_311d95fe03de3062e1ae026c33e3746310f8f4c6d5dafcb36ab01df061148d2e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
