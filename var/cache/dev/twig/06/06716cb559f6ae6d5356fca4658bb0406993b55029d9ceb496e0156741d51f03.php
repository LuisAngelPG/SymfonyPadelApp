<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_7ef27da37a12c65db118bbfe0fa24ddb0a3ee224f7b071b9c9e0f019e5fe6b6a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1cf08484ae922a3ef465382111c1a97b3b563bc529cbfdff927c5dd54fb64ac9 = $this->env->getExtension("native_profiler");
        $__internal_1cf08484ae922a3ef465382111c1a97b3b563bc529cbfdff927c5dd54fb64ac9->enter($__internal_1cf08484ae922a3ef465382111c1a97b3b563bc529cbfdff927c5dd54fb64ac9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_1cf08484ae922a3ef465382111c1a97b3b563bc529cbfdff927c5dd54fb64ac9->leave($__internal_1cf08484ae922a3ef465382111c1a97b3b563bc529cbfdff927c5dd54fb64ac9_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_20e849170704e729cb3f3e697bc399c8a29bf93cc0105bc190f514d1a2d572ef = $this->env->getExtension("native_profiler");
        $__internal_20e849170704e729cb3f3e697bc399c8a29bf93cc0105bc190f514d1a2d572ef->enter($__internal_20e849170704e729cb3f3e697bc399c8a29bf93cc0105bc190f514d1a2d572ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_20e849170704e729cb3f3e697bc399c8a29bf93cc0105bc190f514d1a2d572ef->leave($__internal_20e849170704e729cb3f3e697bc399c8a29bf93cc0105bc190f514d1a2d572ef_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
