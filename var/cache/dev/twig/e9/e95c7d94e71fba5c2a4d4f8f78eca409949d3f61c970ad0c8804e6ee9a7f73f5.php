<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_5bb3d79c015fe608df3d78e2e30a27602e662a37d889cf7025d6694d4bd844c2 extends Twig_Template
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
        $__internal_5857ebe0b9737f75474a660c2babdcf5d8fdae419612e6b08e6b504032985440 = $this->env->getExtension("native_profiler");
        $__internal_5857ebe0b9737f75474a660c2babdcf5d8fdae419612e6b08e6b504032985440->enter($__internal_5857ebe0b9737f75474a660c2babdcf5d8fdae419612e6b08e6b504032985440_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_5857ebe0b9737f75474a660c2babdcf5d8fdae419612e6b08e6b504032985440->leave($__internal_5857ebe0b9737f75474a660c2babdcf5d8fdae419612e6b08e6b504032985440_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
