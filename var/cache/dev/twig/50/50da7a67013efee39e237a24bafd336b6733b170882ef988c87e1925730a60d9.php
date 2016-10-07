<?php

/* tournament/viewTournament.html.twig */
class __TwigTemplate_0be8f012551e27010eb862518e25763344024af10fc19f2b5827961705a54881 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base/base.html.twig", "tournament/viewTournament.html.twig", 1);
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
        $__internal_9703f082a145e4281d4d40b76983082ca13f529dc449299d2c6dfc05873ff84a = $this->env->getExtension("native_profiler");
        $__internal_9703f082a145e4281d4d40b76983082ca13f529dc449299d2c6dfc05873ff84a->enter($__internal_9703f082a145e4281d4d40b76983082ca13f529dc449299d2c6dfc05873ff84a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tournament/viewTournament.html.twig"));

        // line 2
        $context["active"] = 2;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9703f082a145e4281d4d40b76983082ca13f529dc449299d2c6dfc05873ff84a->leave($__internal_9703f082a145e4281d4d40b76983082ca13f529dc449299d2c6dfc05873ff84a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_bf323272cdd81f221cfb91108f419fd98c7fce8c0fbeb383b9e168bc21b78079 = $this->env->getExtension("native_profiler");
        $__internal_bf323272cdd81f221cfb91108f419fd98c7fce8c0fbeb383b9e168bc21b78079->enter($__internal_bf323272cdd81f221cfb91108f419fd98c7fce8c0fbeb383b9e168bc21b78079_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\t<div class=\"container rounded-box\">
\t\t";
        // line 5
        $this->loadTemplate("tournament/templates/infoTournament.html.twig", "tournament/viewTournament.html.twig", 5)->display(array_merge($context, array("tournament" => (isset($context["tournament"]) ? $context["tournament"] : $this->getContext($context, "tournament")))));
        // line 6
        echo "\t</div>
";
        
        $__internal_bf323272cdd81f221cfb91108f419fd98c7fce8c0fbeb383b9e168bc21b78079->leave($__internal_bf323272cdd81f221cfb91108f419fd98c7fce8c0fbeb383b9e168bc21b78079_prof);

    }

    public function getTemplateName()
    {
        return "tournament/viewTournament.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 6,  46 => 5,  43 => 4,  37 => 3,  30 => 1,  28 => 2,  11 => 1,);
    }
}
/* {% extends 'base/base.html.twig' %}*/
/* {% set active = 2 %}*/
/* {% block body %}*/
/* 	<div class="container rounded-box">*/
/* 		{% include 'tournament/templates/infoTournament.html.twig' with {'tournament': tournament} %}*/
/* 	</div>*/
/* {% endblock %}*/
