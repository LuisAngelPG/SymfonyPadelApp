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
        $__internal_3904d63fdf4d250866aae365392a04ec26b2ba97574c605415e8d9970877e980 = $this->env->getExtension("native_profiler");
        $__internal_3904d63fdf4d250866aae365392a04ec26b2ba97574c605415e8d9970877e980->enter($__internal_3904d63fdf4d250866aae365392a04ec26b2ba97574c605415e8d9970877e980_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "web/matches.html.twig"));

        // line 2
        $context["active"] = 1;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3904d63fdf4d250866aae365392a04ec26b2ba97574c605415e8d9970877e980->leave($__internal_3904d63fdf4d250866aae365392a04ec26b2ba97574c605415e8d9970877e980_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_7c43b59a040402984ffceb51196e55b93a8b2730980e6d4623bddcb40dbb8a45 = $this->env->getExtension("native_profiler");
        $__internal_7c43b59a040402984ffceb51196e55b93a8b2730980e6d4623bddcb40dbb8a45->enter($__internal_7c43b59a040402984ffceb51196e55b93a8b2730980e6d4623bddcb40dbb8a45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "\t<div class=\"container web-bg rounded-box\">
MATCHES
\t</div>
";
        
        $__internal_7c43b59a040402984ffceb51196e55b93a8b2730980e6d4623bddcb40dbb8a45->leave($__internal_7c43b59a040402984ffceb51196e55b93a8b2730980e6d4623bddcb40dbb8a45_prof);

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
