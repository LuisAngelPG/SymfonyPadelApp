<?php

/* web/home.html.twig */
class __TwigTemplate_cbee1ea9b96c22437b03a6840de6d9e0a38561e0d237aec7fbebbdafe455645d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base/base.html.twig", "web/home.html.twig", 1);
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
        $__internal_fbeee6ea19dd3adb1d03f6bea8f20940eedf70fc176178ef08b8267ced8a8fdc = $this->env->getExtension("native_profiler");
        $__internal_fbeee6ea19dd3adb1d03f6bea8f20940eedf70fc176178ef08b8267ced8a8fdc->enter($__internal_fbeee6ea19dd3adb1d03f6bea8f20940eedf70fc176178ef08b8267ced8a8fdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "web/home.html.twig"));

        // line 2
        $context["active"] = 0;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fbeee6ea19dd3adb1d03f6bea8f20940eedf70fc176178ef08b8267ced8a8fdc->leave($__internal_fbeee6ea19dd3adb1d03f6bea8f20940eedf70fc176178ef08b8267ced8a8fdc_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_0bdad4019462124ab6ab3380150d452cf151e6a9dd33b9a102e57326543fb5c2 = $this->env->getExtension("native_profiler");
        $__internal_0bdad4019462124ab6ab3380150d452cf151e6a9dd33b9a102e57326543fb5c2->enter($__internal_0bdad4019462124ab6ab3380150d452cf151e6a9dd33b9a102e57326543fb5c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        $context["profile"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "profile"), "method");
        // line 6
        echo "\t<div class=\"container home-container\">
\t\t<div class=\"clubs card-container\">
\t\t\t<div class=\"block-header\">Clubs News</div>
\t\t\t";
        // line 9
        $this->loadTemplate("web/templates/clubNews.html.twig", "web/home.html.twig", 9)->display($context);
        // line 10
        echo "\t\t\t";
        $this->loadTemplate("web/templates/clubNews.html.twig", "web/home.html.twig", 10)->display($context);
        // line 11
        echo "\t\t\t";
        $this->loadTemplate("web/templates/clubNews.html.twig", "web/home.html.twig", 11)->display($context);
        // line 12
        echo "\t\t\t";
        $this->loadTemplate("web/templates/clubNews.html.twig", "web/home.html.twig", 12)->display($context);
        // line 13
        echo "\t\t\t";
        $this->loadTemplate("web/templates/clubNews.html.twig", "web/home.html.twig", 13)->display($context);
        // line 14
        echo "\t\t</div>
\t\t<div class=\"matches card-container\">
\t\t\t<div class=\"block-header\">Matches News</div>
\t\t\t";
        // line 17
        $this->loadTemplate("web/templates/matchesNews.html.twig", "web/home.html.twig", 17)->display($context);
        // line 18
        echo "\t\t\t";
        $this->loadTemplate("web/templates/matchesNews.html.twig", "web/home.html.twig", 18)->display($context);
        // line 19
        echo "\t\t</div>
\t\t<div class=\"friends card-container\">
\t\t\t<div class=\"block-header\">Friends Activity</div>
\t\t\t";
        // line 22
        $this->loadTemplate("web/templates/friendsActivity.html.twig", "web/home.html.twig", 22)->display($context);
        // line 23
        echo "\t\t\t";
        $this->loadTemplate("web/templates/friendsActivity.html.twig", "web/home.html.twig", 23)->display($context);
        // line 24
        echo "\t\t\t";
        $this->loadTemplate("web/templates/friendsActivity.html.twig", "web/home.html.twig", 24)->display($context);
        // line 25
        echo "\t\t\t";
        $this->loadTemplate("web/templates/friendsActivity.html.twig", "web/home.html.twig", 25)->display($context);
        // line 26
        echo "\t\t\t";
        $this->loadTemplate("web/templates/friendsActivity.html.twig", "web/home.html.twig", 26)->display($context);
        // line 27
        echo "\t\t\t";
        $this->loadTemplate("web/templates/friendsActivity.html.twig", "web/home.html.twig", 27)->display($context);
        // line 28
        echo "\t\t</div>
\t</div>
";
        
        $__internal_0bdad4019462124ab6ab3380150d452cf151e6a9dd33b9a102e57326543fb5c2->leave($__internal_0bdad4019462124ab6ab3380150d452cf151e6a9dd33b9a102e57326543fb5c2_prof);

    }

    public function getTemplateName()
    {
        return "web/home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 28,  93 => 27,  90 => 26,  87 => 25,  84 => 24,  81 => 23,  79 => 22,  74 => 19,  71 => 18,  69 => 17,  64 => 14,  61 => 13,  58 => 12,  55 => 11,  52 => 10,  50 => 9,  45 => 6,  43 => 5,  37 => 4,  30 => 1,  28 => 2,  11 => 1,);
    }
}
/* {% extends 'base/base.html.twig' %}*/
/* {% set active = 0 %}*/
/* */
/* {% block body %}*/
/* {% set profile = app.session.get('profile') %}*/
/* 	<div class="container home-container">*/
/* 		<div class="clubs card-container">*/
/* 			<div class="block-header">Clubs News</div>*/
/* 			{% include 'web/templates/clubNews.html.twig' %}*/
/* 			{% include 'web/templates/clubNews.html.twig' %}*/
/* 			{% include 'web/templates/clubNews.html.twig' %}*/
/* 			{% include 'web/templates/clubNews.html.twig' %}*/
/* 			{% include 'web/templates/clubNews.html.twig' %}*/
/* 		</div>*/
/* 		<div class="matches card-container">*/
/* 			<div class="block-header">Matches News</div>*/
/* 			{% include 'web/templates/matchesNews.html.twig' %}*/
/* 			{% include 'web/templates/matchesNews.html.twig' %}*/
/* 		</div>*/
/* 		<div class="friends card-container">*/
/* 			<div class="block-header">Friends Activity</div>*/
/* 			{% include 'web/templates/friendsActivity.html.twig' %}*/
/* 			{% include 'web/templates/friendsActivity.html.twig' %}*/
/* 			{% include 'web/templates/friendsActivity.html.twig' %}*/
/* 			{% include 'web/templates/friendsActivity.html.twig' %}*/
/* 			{% include 'web/templates/friendsActivity.html.twig' %}*/
/* 			{% include 'web/templates/friendsActivity.html.twig' %}*/
/* 		</div>*/
/* 	</div>*/
/* {% endblock %}	*/
