<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_2f1ad4ab9f3c5e386caae6a496ba5cf1188f6fea1b4c3a5d85d61ecff92998de extends Twig_Template
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
        $__internal_6700185f28da1b3097c95a455126bc82198703c54a3f90abc30a59ce51f3131f = $this->env->getExtension("native_profiler");
        $__internal_6700185f28da1b3097c95a455126bc82198703c54a3f90abc30a59ce51f3131f->enter($__internal_6700185f28da1b3097c95a455126bc82198703c54a3f90abc30a59ce51f3131f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_6700185f28da1b3097c95a455126bc82198703c54a3f90abc30a59ce51f3131f->leave($__internal_6700185f28da1b3097c95a455126bc82198703c54a3f90abc30a59ce51f3131f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */
