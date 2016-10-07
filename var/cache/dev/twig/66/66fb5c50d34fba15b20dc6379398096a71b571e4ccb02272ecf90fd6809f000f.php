<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_710fee0a401e4dc9501baf4f6ea5d60db46a04163fe20aecce06ed7c64737f49 extends Twig_Template
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
        $__internal_a1552a21a178ce680235577419048c459bbecab0faf80fc5030d3254eb8e4a02 = $this->env->getExtension("native_profiler");
        $__internal_a1552a21a178ce680235577419048c459bbecab0faf80fc5030d3254eb8e4a02->enter($__internal_a1552a21a178ce680235577419048c459bbecab0faf80fc5030d3254eb8e4a02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_a1552a21a178ce680235577419048c459bbecab0faf80fc5030d3254eb8e4a02->leave($__internal_a1552a21a178ce680235577419048c459bbecab0faf80fc5030d3254eb8e4a02_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
