<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_fe67ea8bb335afb7b04cf2907a8084e42864282f3b1514d192f1e17a32f3a169 extends Twig_Template
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
        $__internal_b06a4ba63d7a55b4fd02030a597c918306d92c35897bb1a79b8db016c7172ef5 = $this->env->getExtension("native_profiler");
        $__internal_b06a4ba63d7a55b4fd02030a597c918306d92c35897bb1a79b8db016c7172ef5->enter($__internal_b06a4ba63d7a55b4fd02030a597c918306d92c35897bb1a79b8db016c7172ef5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_b06a4ba63d7a55b4fd02030a597c918306d92c35897bb1a79b8db016c7172ef5->leave($__internal_b06a4ba63d7a55b4fd02030a597c918306d92c35897bb1a79b8db016c7172ef5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
