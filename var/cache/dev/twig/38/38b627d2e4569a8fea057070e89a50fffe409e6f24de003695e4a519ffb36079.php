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
        $__internal_d1d00cac5a65d6e72ca3ea6559a9756f80461b73f4eb07cc25b4d34af4f49291 = $this->env->getExtension("native_profiler");
        $__internal_d1d00cac5a65d6e72ca3ea6559a9756f80461b73f4eb07cc25b4d34af4f49291->enter($__internal_d1d00cac5a65d6e72ca3ea6559a9756f80461b73f4eb07cc25b4d34af4f49291_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/account.html.twig"));

        // line 2
        $context["active"] = 5;
        // line 29
        $context["profile"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "profile"), "method");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d1d00cac5a65d6e72ca3ea6559a9756f80461b73f4eb07cc25b4d34af4f49291->leave($__internal_d1d00cac5a65d6e72ca3ea6559a9756f80461b73f4eb07cc25b4d34af4f49291_prof);

    }

    // line 3
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_edd5ba1e161dd43dac11f22f951f9c7380dcc9524c6d439df58f2c0ae7d799ea = $this->env->getExtension("native_profiler");
        $__internal_edd5ba1e161dd43dac11f22f951f9c7380dcc9524c6d439df58f2c0ae7d799ea->enter($__internal_edd5ba1e161dd43dac11f22f951f9c7380dcc9524c6d439df58f2c0ae7d799ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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

\t";
        // line 8
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "cccbafd_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_cccbafd_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/compiled/main_part_1_AppBundle_1.js");
            // line 9
            echo "\t\t<script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/web/js/ajax.js"), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
\t";
        } else {
            // asset "cccbafd"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_cccbafd") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/compiled/main.js");
            echo "\t\t<script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/web/js/ajax.js"), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
\t";
        }
        unset($context["asset_url"]);
        // line 11
        echo "
\t<script>
\t\t\$(\"#dynamic_content\").on(\"change\", \"#profile_image\", (function(evt) {
\t\t\tchangeImage(evt, \"avatar\");
\t\t}));

\t\t\$(\"#dynamic_content\").on(\"click\", \"#edit_button, #cancel_button\", (function(evt) {
\t\t\tvar idSource = evt.currentTarget.id;
\t\t\tvar url;
\t\t\tif (idSource == \"edit_button\") {
\t\t\t\turl = \"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("ajaxEdit");
        echo "\";
\t\t\t} else {
\t\t\t\turl = \"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("ajaxCancel");
        echo "\";
\t\t\t}
\t\t\tchangeTemplate(url, \"dynamic_content\");
\t\t}));
\t</script>
";
        
        $__internal_edd5ba1e161dd43dac11f22f951f9c7380dcc9524c6d439df58f2c0ae7d799ea->leave($__internal_edd5ba1e161dd43dac11f22f951f9c7380dcc9524c6d439df58f2c0ae7d799ea_prof);

    }

    // line 30
    public function block_body($context, array $blocks = array())
    {
        $__internal_482453d304802237d683ee14f187a31cec9ffc1b8ea6c2c81ce69bba6f2e7c8f = $this->env->getExtension("native_profiler");
        $__internal_482453d304802237d683ee14f187a31cec9ffc1b8ea6c2c81ce69bba6f2e7c8f->enter($__internal_482453d304802237d683ee14f187a31cec9ffc1b8ea6c2c81ce69bba6f2e7c8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 31
        echo "\t<div class=\"container rounded-box\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-4 col-md-offset-4 user-photo\">
\t\t\t\t<img id=\"avatar\" src=
\t\t\t\t";
        // line 35
        if ($this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "image", array())) {
            echo "\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(("bundles/web/img/usersProfiles/" . $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "image", array()))), "html", null, true);
            echo "\"";
        } else {
            echo "\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/web/img/usersProfiles/default.png"), "html", null, true);
            echo "\"";
        }
        // line 36
        echo "\t\t\t\t/><br />
\t\t\t</div>
\t\t</div>
\t\t<div id=\"dynamic_content\">
\t\t\t";
        // line 40
        echo twig_include($this->env, $context, "user/templates/showUserInfo.html.twig");
        echo "
\t\t</div>
\t</div>
";
        
        $__internal_482453d304802237d683ee14f187a31cec9ffc1b8ea6c2c81ce69bba6f2e7c8f->leave($__internal_482453d304802237d683ee14f187a31cec9ffc1b8ea6c2c81ce69bba6f2e7c8f_prof);

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
        return array (  136 => 40,  130 => 36,  120 => 35,  114 => 31,  108 => 30,  95 => 23,  90 => 21,  78 => 11,  64 => 9,  60 => 8,  55 => 6,  51 => 5,  46 => 4,  40 => 3,  33 => 1,  31 => 29,  29 => 2,  11 => 1,);
    }
}
/* {% extends 'base/base.html.twig' %}*/
/* {% set active = 5 %}*/
/* {% block javascripts %}*/
/* 	{{ parent() }}*/
/* 	<script src="{{ asset('bundles/fosjsrouting/js/router.js') }}"></script>*/
/* 	<script src="{{ path('fos_js_routing_js', { callback: 'fos.Router.setData' }) }}"></script>*/
/* */
/* 	{% javascripts '@AppBundle/*' output='js/compiled/main.js' %}*/
/* 		<script src="{{ asset('bundles/web/js/ajax.js') }}" type="text/javascript"></script>*/
/* 	{% endjavascripts %}*/
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
