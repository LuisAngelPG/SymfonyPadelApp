<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_d19c02e0d3fbd42abe6ffddb87cc7f354cacdccfe52e7d2acd16fa019020c4d0 extends Twig_Template
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
        $__internal_e5a72bf41215368532f8cf2805aa2f16da82ccb108896220f5c6c4dcf2f2346e = $this->env->getExtension("native_profiler");
        $__internal_e5a72bf41215368532f8cf2805aa2f16da82ccb108896220f5c6c4dcf2f2346e->enter($__internal_e5a72bf41215368532f8cf2805aa2f16da82ccb108896220f5c6c4dcf2f2346e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_e5a72bf41215368532f8cf2805aa2f16da82ccb108896220f5c6c4dcf2f2346e->leave($__internal_e5a72bf41215368532f8cf2805aa2f16da82ccb108896220f5c6c4dcf2f2346e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
