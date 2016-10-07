<?php

/* base/base.html.twig */
class __TwigTemplate_5cccc30155efec49af88926ad13e3cd06f9695a1207ef2ca37421a6bad452425 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'navbar' => array($this, 'block_navbar'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d8203647065c0013f93cb58b8d99c473065e7e213b237bba027ea711051e3758 = $this->env->getExtension("native_profiler");
        $__internal_d8203647065c0013f93cb58b8d99c473065e7e213b237bba027ea711051e3758->enter($__internal_d8203647065c0013f93cb58b8d99c473065e7e213b237bba027ea711051e3758_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base/base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 11
        echo "    </head>
    <body class=\"bg\">
    ";
        // line 13
        $this->displayBlock('navbar', $context, $blocks);
        // line 17
        echo "    ";
        $this->displayBlock('body', $context, $blocks);
        echo "     
    </body>
    ";
        // line 19
        $this->displayBlock('javascripts', $context, $blocks);
        // line 23
        echo "</html>";
        
        $__internal_d8203647065c0013f93cb58b8d99c473065e7e213b237bba027ea711051e3758->leave($__internal_d8203647065c0013f93cb58b8d99c473065e7e213b237bba027ea711051e3758_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_ee4bc5185a6292ee9b4d34771d1c8d361c6f1e14b3b29172b8151b7b42858439 = $this->env->getExtension("native_profiler");
        $__internal_ee4bc5185a6292ee9b4d34771d1c8d361c6f1e14b3b29172b8151b7b42858439->enter($__internal_ee4bc5185a6292ee9b4d34771d1c8d361c6f1e14b3b29172b8151b7b42858439_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "PadelApp";
        
        $__internal_ee4bc5185a6292ee9b4d34771d1c8d361c6f1e14b3b29172b8151b7b42858439->leave($__internal_ee4bc5185a6292ee9b4d34771d1c8d361c6f1e14b3b29172b8151b7b42858439_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7e57a61f451a99fe9620f3d578186c0679822aab4e55ba3592ed0da4ce1b93e9 = $this->env->getExtension("native_profiler");
        $__internal_7e57a61f451a99fe9620f3d578186c0679822aab4e55ba3592ed0da4ce1b93e9->enter($__internal_7e57a61f451a99fe9620f3d578186c0679822aab4e55ba3592ed0da4ce1b93e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "            <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/web/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />   
            <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/web/css/base.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />  
        ";
        
        $__internal_7e57a61f451a99fe9620f3d578186c0679822aab4e55ba3592ed0da4ce1b93e9->leave($__internal_7e57a61f451a99fe9620f3d578186c0679822aab4e55ba3592ed0da4ce1b93e9_prof);

    }

    // line 13
    public function block_navbar($context, array $blocks = array())
    {
        $__internal_d9fa47e51c43f7e7246d38c13d1dbbb82f67dc842d0ff58fcba1900356314ae3 = $this->env->getExtension("native_profiler");
        $__internal_d9fa47e51c43f7e7246d38c13d1dbbb82f67dc842d0ff58fcba1900356314ae3->enter($__internal_d9fa47e51c43f7e7246d38c13d1dbbb82f67dc842d0ff58fcba1900356314ae3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        echo " 
        ";
        // line 14
        $context["active"] = (isset($context["active"]) ? $context["active"] : $this->getContext($context, "active"));
        // line 15
        echo "        ";
        $this->loadTemplate("base/navbar.html.twig", "base/base.html.twig", 15)->display($context);
        // line 16
        echo "    ";
        
        $__internal_d9fa47e51c43f7e7246d38c13d1dbbb82f67dc842d0ff58fcba1900356314ae3->leave($__internal_d9fa47e51c43f7e7246d38c13d1dbbb82f67dc842d0ff58fcba1900356314ae3_prof);

    }

    // line 17
    public function block_body($context, array $blocks = array())
    {
        $__internal_b6a52306dae1155930d51fe9290cb648ed22184fc8756aeafe14afc10735b646 = $this->env->getExtension("native_profiler");
        $__internal_b6a52306dae1155930d51fe9290cb648ed22184fc8756aeafe14afc10735b646->enter($__internal_b6a52306dae1155930d51fe9290cb648ed22184fc8756aeafe14afc10735b646_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_b6a52306dae1155930d51fe9290cb648ed22184fc8756aeafe14afc10735b646->leave($__internal_b6a52306dae1155930d51fe9290cb648ed22184fc8756aeafe14afc10735b646_prof);

    }

    // line 19
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_df3ef7e32dc43951160dd0ecec9b8aef31139fc39900189b5852ec30714a8610 = $this->env->getExtension("native_profiler");
        $__internal_df3ef7e32dc43951160dd0ecec9b8aef31139fc39900189b5852ec30714a8610->enter($__internal_df3ef7e32dc43951160dd0ecec9b8aef31139fc39900189b5852ec30714a8610_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 20
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/web/js/libs/jquery-3.1.0.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/web/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    ";
        
        $__internal_df3ef7e32dc43951160dd0ecec9b8aef31139fc39900189b5852ec30714a8610->leave($__internal_df3ef7e32dc43951160dd0ecec9b8aef31139fc39900189b5852ec30714a8610_prof);

    }

    public function getTemplateName()
    {
        return "base/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 21,  133 => 20,  127 => 19,  116 => 17,  109 => 16,  106 => 15,  104 => 14,  96 => 13,  87 => 9,  82 => 8,  76 => 7,  64 => 6,  57 => 23,  55 => 19,  49 => 17,  47 => 13,  43 => 11,  41 => 7,  37 => 6,  33 => 5,  27 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*         <title>{% block title %}PadelApp{% endblock %}</title>*/
/*         {% block stylesheets %}*/
/*             <link href="{{ asset('bundles/web/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />   */
/*             <link href="{{ asset('bundles/web/css/base.css') }}" rel="stylesheet" />  */
/*         {% endblock %}*/
/*     </head>*/
/*     <body class="bg">*/
/*     {% block navbar %} */
/*         {% set active = active %}*/
/*         {% include 'base/navbar.html.twig' %}*/
/*     {% endblock %}*/
/*     {% block body %}{% endblock %}     */
/*     </body>*/
/*     {% block javascripts %}*/
/*         <script src="{{ asset('bundles/web/js/libs/jquery-3.1.0.min.js') }}"></script>*/
/*         <script src="{{ asset('bundles/web/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>*/
/*     {% endblock %}*/
/* </html>*/
