<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_21536cd566509a000d3f9aa161d711b4069768c383036d3adcf967414490115d extends Twig_Template
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
        $__internal_09cec8e369edf46ee06d7be4cd79278083cec100c80b3e847ab02de9b0dda606 = $this->env->getExtension("native_profiler");
        $__internal_09cec8e369edf46ee06d7be4cd79278083cec100c80b3e847ab02de9b0dda606->enter($__internal_09cec8e369edf46ee06d7be4cd79278083cec100c80b3e847ab02de9b0dda606_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_09cec8e369edf46ee06d7be4cd79278083cec100c80b3e847ab02de9b0dda606->leave($__internal_09cec8e369edf46ee06d7be4cd79278083cec100c80b3e847ab02de9b0dda606_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
