<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_5b049513e9180e99bb3f659fb9da763dc84100484d3d298720a19231467021c2 extends Twig_Template
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
        $__internal_94350031f97d3e1d6479abc75e7a1141e1b560a5a367b78771cab3fd0c6d704a = $this->env->getExtension("native_profiler");
        $__internal_94350031f97d3e1d6479abc75e7a1141e1b560a5a367b78771cab3fd0c6d704a->enter($__internal_94350031f97d3e1d6479abc75e7a1141e1b560a5a367b78771cab3fd0c6d704a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_94350031f97d3e1d6479abc75e7a1141e1b560a5a367b78771cab3fd0c6d704a->leave($__internal_94350031f97d3e1d6479abc75e7a1141e1b560a5a367b78771cab3fd0c6d704a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
