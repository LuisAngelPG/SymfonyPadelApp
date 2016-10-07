<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_51efe3d2bf10b72710588a2909c116d61b10a7f7c9b15f9c4fff33846300eb7a extends Twig_Template
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
        $__internal_d0a4546fef5dd0d6f95b372f29202700105aee0a8bb66b56e3462a63d01db812 = $this->env->getExtension("native_profiler");
        $__internal_d0a4546fef5dd0d6f95b372f29202700105aee0a8bb66b56e3462a63d01db812->enter($__internal_d0a4546fef5dd0d6f95b372f29202700105aee0a8bb66b56e3462a63d01db812_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_d0a4546fef5dd0d6f95b372f29202700105aee0a8bb66b56e3462a63d01db812->leave($__internal_d0a4546fef5dd0d6f95b372f29202700105aee0a8bb66b56e3462a63d01db812_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
