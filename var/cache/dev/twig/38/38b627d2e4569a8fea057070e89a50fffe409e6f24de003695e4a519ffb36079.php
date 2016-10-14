<?php

/* user/account.html.twig */
class __TwigTemplate_f78cbe6cb396f219bb31d15dbc2c3880628cc018714c1466eff1da3671c7ca2c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base/base.html.twig", "user/account.html.twig", 1);
        $this->blocks = array(
            'javascripts' => array($this, 'block_javascripts'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e627eb06777817f7c8dc64bf58cdf23f421fe9ee85ddffb858f83501ae4bed99 = $this->env->getExtension("native_profiler");
        $__internal_e627eb06777817f7c8dc64bf58cdf23f421fe9ee85ddffb858f83501ae4bed99->enter($__internal_e627eb06777817f7c8dc64bf58cdf23f421fe9ee85ddffb858f83501ae4bed99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/account.html.twig"));

        // line 2
        $context["active"] = 5;
        // line 26
        $context["profile"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "profile"), "method");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e627eb06777817f7c8dc64bf58cdf23f421fe9ee85ddffb858f83501ae4bed99->leave($__internal_e627eb06777817f7c8dc64bf58cdf23f421fe9ee85ddffb858f83501ae4bed99_prof);

    }

    // line 3
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e14661a9e7e685eb1a562b7d2379ecd40ca2d1a85cfa89c28caff01422279674 = $this->env->getExtension("native_profiler");
        $__internal_e14661a9e7e685eb1a562b7d2379ecd40ca2d1a85cfa89c28caff01422279674->enter($__internal_e14661a9e7e685eb1a562b7d2379ecd40ca2d1a85cfa89c28caff01422279674_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 4
        echo "\t";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
\t<script src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData"));
        echo "\"></script>
\t<script src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/web/js/ajax.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

\t<script>
\t\t\$(\"#dynamic_content\").on(\"change\", \"#profile_image\", (function(evt) {
\t\t\tchangeImage(evt, \"avatar\");
\t\t}));

\t\t\$(\"#dynamic_content\").on(\"click\", \"#edit_button, #cancel_button\", (function(evt) {
\t\t\tvar idSource = evt.currentTarget.id;
\t\t\tvar url;
\t\t\tif (idSource == \"edit_button\") {
\t\t\t\turl = \"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("ajaxEdit");
        echo "\";
\t\t\t} else {
\t\t\t\turl = \"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("ajaxCancel");
        echo "\";
\t\t\t}
\t\t\tchangeTemplate(url, \"dynamic_content\");
\t\t}));
\t</script>
";
        
        $__internal_e14661a9e7e685eb1a562b7d2379ecd40ca2d1a85cfa89c28caff01422279674->leave($__internal_e14661a9e7e685eb1a562b7d2379ecd40ca2d1a85cfa89c28caff01422279674_prof);

    }

    // line 27
    public function block_body($context, array $blocks = array())
    {
        $__internal_0dc65f76af106e466295705e97ea6575417d547fbfa265a4070d51393faedc8a = $this->env->getExtension("native_profiler");
        $__internal_0dc65f76af106e466295705e97ea6575417d547fbfa265a4070d51393faedc8a->enter($__internal_0dc65f76af106e466295705e97ea6575417d547fbfa265a4070d51393faedc8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 28
        echo "\t<div class=\"container rounded-box\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-4 col-md-offset-4 user-photo\">
\t\t\t\t<img id=\"avatar\" src=
\t\t\t\t";
        // line 32
        if ($this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "image", array())) {
            echo "\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(("bundles/web/img/usersProfiles/" . $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "image", array()))), "html", null, true);
            echo "\"";
        } else {
            echo "\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/web/img/usersProfiles/default.png"), "html", null, true);
            echo "\"";
        }
        // line 33
        echo "\t\t\t\t/><br />
\t\t\t</div>
\t\t</div>
\t\t<div id=\"dynamic_content\">
\t\t\t";
        // line 37
        echo twig_include($this->env, $context, "user/templates/showUserInfo.html.twig");
        echo "
\t\t</div>
\t</div>
";
        
        $__internal_0dc65f76af106e466295705e97ea6575417d547fbfa265a4070d51393faedc8a->leave($__internal_0dc65f76af106e466295705e97ea6575417d547fbfa265a4070d51393faedc8a_prof);

    }

    public function getTemplateName()
    {
        return "user/account.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 37,  113 => 33,  103 => 32,  97 => 28,  91 => 27,  78 => 20,  73 => 18,  59 => 7,  55 => 6,  51 => 5,  46 => 4,  40 => 3,  33 => 1,  31 => 26,  29 => 2,  11 => 1,);
    }
}
/* {% extends 'base/base.html.twig' %}*/
/* {% set active = 5 %}*/
/* {% block javascripts %}*/
/* 	{{ parent() }}*/
/* 	<script src="{{ asset('bundles/fosjsrouting/js/router.js') }}"></script>*/
/* 	<script src="{{ path('fos_js_routing_js', { callback: 'fos.Router.setData' }) }}"></script>*/
/* 	<script src="{{ asset('bundles/web/js/ajax.js') }}" type="text/javascript"></script>*/
/* */
/* 	<script>*/
/* 		$("#dynamic_content").on("change", "#profile_image", (function(evt) {*/
/* 			changeImage(evt, "avatar");*/
/* 		}));*/
/* */
/* 		$("#dynamic_content").on("click", "#edit_button, #cancel_button", (function(evt) {*/
/* 			var idSource = evt.currentTarget.id;*/
/* 			var url;*/
/* 			if (idSource == "edit_button") {*/
/* 				url = "{{path('ajaxEdit')}}";*/
/* 			} else {*/
/* 				url = "{{path('ajaxCancel')}}";*/
/* 			}*/
/* 			changeTemplate(url, "dynamic_content");*/
/* 		}));*/
/* 	</script>*/
/* {% endblock %}*/
/* {% set profile = app.session.get('profile') %}*/
/* {% block body %}*/
/* 	<div class="container rounded-box">*/
/* 		<div class="row">*/
/* 			<div class="col-md-4 col-md-offset-4 user-photo">*/
/* 				<img id="avatar" src=*/
/* 				{% if profile.image %}"{{ asset('bundles/web/img/usersProfiles/' ~ profile.image) }}"{% else %}"{{ asset('bundles/web/img/usersProfiles/default.png') }}"{% endif %}*/
/* 				/><br />*/
/* 			</div>*/
/* 		</div>*/
/* 		<div id="dynamic_content">*/
/* 			{{include("user/templates/showUserInfo.html.twig")}}*/
/* 		</div>*/
/* 	</div>*/
/* {% endblock %}*/
