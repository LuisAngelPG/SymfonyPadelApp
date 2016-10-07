<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_158d48e17f7f0beb59fe64453cf54f3dfe0f43aec0e807e1ce3c2aa5cffb24ba extends Twig_Template
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
        $__internal_2f011a4acca343afea726b9e669d8b855d9252ba32f72b71214644b3f5c326da = $this->env->getExtension("native_profiler");
        $__internal_2f011a4acca343afea726b9e669d8b855d9252ba32f72b71214644b3f5c326da->enter($__internal_2f011a4acca343afea726b9e669d8b855d9252ba32f72b71214644b3f5c326da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_2f011a4acca343afea726b9e669d8b855d9252ba32f72b71214644b3f5c326da->leave($__internal_2f011a4acca343afea726b9e669d8b855d9252ba32f72b71214644b3f5c326da_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
