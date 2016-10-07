<?php

/* web/matches.html.twig */
class __TwigTemplate_e6eb026ccfcaccfcc3c881de693c65ef2c95ae9509b8b8377c9fac169b456f97 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base/base.html.twig", "web/matches.html.twig", 1);
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
        $__internal_c191d6206f1464ff91cf0f4bf5a79c4add4ae62582e9d3a8338e2e5cfc54dd42 = $this->env->getExtension("native_profiler");
        $__internal_c191d6206f1464ff91cf0f4bf5a79c4add4ae62582e9d3a8338e2e5cfc54dd42->enter($__internal_c191d6206f1464ff91cf0f4bf5a79c4add4ae62582e9d3a8338e2e5cfc54dd42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "web/matches.html.twig"));

        // line 2
        $context["active"] = 1;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c191d6206f1464ff91cf0f4bf5a79c4add4ae62582e9d3a8338e2e5cfc54dd42->leave($__internal_c191d6206f1464ff91cf0f4bf5a79c4add4ae62582e9d3a8338e2e5cfc54dd42_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_bba3b69a3badb232283da09d1f7dae7f9e8fe3d26ddcc92d333682558b91a95f = $this->env->getExtension("native_profiler");
        $__internal_bba3b69a3badb232283da09d1f7dae7f9e8fe3d26ddcc92d333682558b91a95f->enter($__internal_bba3b69a3badb232283da09d1f7dae7f9e8fe3d26ddcc92d333682558b91a95f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "\t<div class=\"container web-bg rounded-box\">
MATCHES
\t</div>
";
        
        $__internal_bba3b69a3badb232283da09d1f7dae7f9e8fe3d26ddcc92d333682558b91a95f->leave($__internal_bba3b69a3badb232283da09d1f7dae7f9e8fe3d26ddcc92d333682558b91a95f_prof);

    }

    public function getTemplateName()
    {
        return "web/matches.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 5,  37 => 4,  30 => 1,  28 => 2,  11 => 1,);
    }
}
/* {% extends 'base/base.html.twig' %}*/
/* {% set active = 1 %}*/
/* */
/* {% block body %}*/
/* 	<div class="container web-bg rounded-box">*/
/* MATCHES*/
/* 	</div>*/
/* {% endblock %}	*/
