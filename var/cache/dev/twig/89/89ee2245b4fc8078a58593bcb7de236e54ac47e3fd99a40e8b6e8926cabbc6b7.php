<?php

/* :security:alreadyActivated.html.twig */
class __TwigTemplate_d3a40e3b3859340c12c9d5f86ac4edc6f76df77440a563f534e479ab90a33e57 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base/base.html.twig", ":security:alreadyActivated.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bd1279c15b8c9c2690a22b3f03f4558804aa107cc7758700d9a124d16b352858 = $this->env->getExtension("native_profiler");
        $__internal_bd1279c15b8c9c2690a22b3f03f4558804aa107cc7758700d9a124d16b352858->enter($__internal_bd1279c15b8c9c2690a22b3f03f4558804aa107cc7758700d9a124d16b352858_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":security:alreadyActivated.html.twig"));

        // line 2
        $context["active"] =  -1;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bd1279c15b8c9c2690a22b3f03f4558804aa107cc7758700d9a124d16b352858->leave($__internal_bd1279c15b8c9c2690a22b3f03f4558804aa107cc7758700d9a124d16b352858_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5c98565432eb8ea8461753e23f0f2e4c153301bd32c0341bacfa760d7d393e1a = $this->env->getExtension("native_profiler");
        $__internal_5c98565432eb8ea8461753e23f0f2e4c153301bd32c0341bacfa760d7d393e1a->enter($__internal_5c98565432eb8ea8461753e23f0f2e4c153301bd32c0341bacfa760d7d393e1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "already activated
";
        
        $__internal_5c98565432eb8ea8461753e23f0f2e4c153301bd32c0341bacfa760d7d393e1a->leave($__internal_5c98565432eb8ea8461753e23f0f2e4c153301bd32c0341bacfa760d7d393e1a_prof);

    }

    public function getTemplateName()
    {
        return ":security:alreadyActivated.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 4,  37 => 3,  30 => 1,  28 => 2,  11 => 1,);
    }
}
/* {% extends 'base/base.html.twig' %}*/
/* {% set active = -1 %}*/
/* {% block body %}*/
/* already activated*/
/* {% endblock %}*/
