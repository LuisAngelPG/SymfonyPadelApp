<?php

/* player/viewDummyPlayer.html.twig */
class __TwigTemplate_ba6ba391fa330ef1a4ac1344b708f01a0b145f7cfd779c0f02c2b9f0ed3ad2e3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base/base.html.twig", "player/viewDummyPlayer.html.twig", 1);
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
        $__internal_533c4dadb7332942d753d6a4d41e3f54176d3f1b3f818cdadfdf0f8275ef52cf = $this->env->getExtension("native_profiler");
        $__internal_533c4dadb7332942d753d6a4d41e3f54176d3f1b3f818cdadfdf0f8275ef52cf->enter($__internal_533c4dadb7332942d753d6a4d41e3f54176d3f1b3f818cdadfdf0f8275ef52cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "player/viewDummyPlayer.html.twig"));

        // line 2
        $context["active"] = 4;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_533c4dadb7332942d753d6a4d41e3f54176d3f1b3f818cdadfdf0f8275ef52cf->leave($__internal_533c4dadb7332942d753d6a4d41e3f54176d3f1b3f818cdadfdf0f8275ef52cf_prof);

    }

    // line 3
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2644dd78cb5b8f8d484d570eef157390ceb0c33a611dfbf3e9e0ed29cbe30b8c = $this->env->getExtension("native_profiler");
        $__internal_2644dd78cb5b8f8d484d570eef157390ceb0c33a611dfbf3e9e0ed29cbe30b8c->enter($__internal_2644dd78cb5b8f8d484d570eef157390ceb0c33a611dfbf3e9e0ed29cbe30b8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
\t\tvar flag = false;
\t\t\$(\"#dynamic_content\").on(\"change\", \"#dummy_player_image\", (function(evt) {
\t\t\tchangeImage(evt, \"dummy_avatar\");\t\t\t
\t\t}));
\t

\t\t\$(\"#dynamic_content\").on(\"click\", \"#edit_button, #cancel_button\", (function(evt) {
\t\t\tvar idSource = evt.currentTarget.id;
\t\t\tvar url;
\t\t\tif (idSource == \"edit_button\") {
\t\t\t\turl = \"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ajaxEditDummyPlayer", array("dummyId" => $this->getAttribute((isset($context["dummy"]) ? $context["dummy"] : $this->getContext($context, "dummy")), "id", array()))), "html", null, true);
        echo "\";

\t\t\t} else {
\t\t\t\turl = \"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ajaxCancelDummyPlayer", array("dummyId" => $this->getAttribute((isset($context["dummy"]) ? $context["dummy"] : $this->getContext($context, "dummy")), "id", array()))), "html", null, true);
        echo "\";
\t\t\t}
\t\t\tchangeTemplate(url, \"dynamic_content\");
\t\t\t
\t\t}));

\t\tfunction finishedTemplate() {
\t\t\tdocument.getElementById(\"dummy_player_oldPathImage\").value = document.getElementById(\"dummy_avatar\").src;
\t\t}
\t</script>

";
        
        $__internal_2644dd78cb5b8f8d484d570eef157390ceb0c33a611dfbf3e9e0ed29cbe30b8c->leave($__internal_2644dd78cb5b8f8d484d570eef157390ceb0c33a611dfbf3e9e0ed29cbe30b8c_prof);

    }

    // line 35
    public function block_body($context, array $blocks = array())
    {
        $__internal_8fc57fd923ad6a138363690dac3774e0c1605f34262bc9bd2a5b4f253bbb9249 = $this->env->getExtension("native_profiler");
        $__internal_8fc57fd923ad6a138363690dac3774e0c1605f34262bc9bd2a5b4f253bbb9249->enter($__internal_8fc57fd923ad6a138363690dac3774e0c1605f34262bc9bd2a5b4f253bbb9249_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 36
        $context["profile"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "profile"), "method");
        // line 37
        $context["idFriends"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "idFriends"), "method");
        // line 38
        $context["showFavorite"] = true;
        // line 39
        echo "\t<div class=\"container rounded-box\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-4 col-md-offset-4 user-photo\">
\t\t\t\t<img id=\"dummy_avatar\" src=
\t\t\t\t";
        // line 43
        if ($this->getAttribute((isset($context["dummy"]) ? $context["dummy"] : $this->getContext($context, "dummy")), "image", array())) {
            echo "\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(("bundles/web/img/dummy/" . $this->getAttribute((isset($context["dummy"]) ? $context["dummy"] : $this->getContext($context, "dummy")), "image", array()))), "html", null, true);
            echo "\"";
        } else {
            echo "\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/web/img/dummy/default.jpg"), "html", null, true);
            echo "\"";
        }
        // line 44
        echo "\t\t\t\t/><br />
\t\t\t</div>
\t\t</div>
\t\t<br />
\t\t<div id=\"dynamic_content\">
\t\t\t";
        // line 49
        $this->loadTemplate("player/templates/showDummyPlayerInfo.html.twig", "player/viewDummyPlayer.html.twig", 49)->display(array_merge($context, array("dummy" => (isset($context["dummy"]) ? $context["dummy"] : $this->getContext($context, "dummy")))));
        // line 50
        echo "\t\t</div>
\t</div>
";
        
        $__internal_8fc57fd923ad6a138363690dac3774e0c1605f34262bc9bd2a5b4f253bbb9249->leave($__internal_8fc57fd923ad6a138363690dac3774e0c1605f34262bc9bd2a5b4f253bbb9249_prof);

    }

    public function getTemplateName()
    {
        return "player/viewDummyPlayer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 50,  133 => 49,  126 => 44,  116 => 43,  110 => 39,  108 => 38,  106 => 37,  104 => 36,  98 => 35,  79 => 23,  73 => 20,  57 => 7,  53 => 6,  49 => 5,  44 => 4,  38 => 3,  31 => 1,  29 => 2,  11 => 1,);
    }
}
/* {% extends 'base/base.html.twig' %}*/
/* {% set active = 4 %}*/
/* {% block javascripts %}*/
/* 	{{ parent() }}*/
/* 	<script src="{{ asset('bundles/fosjsrouting/js/router.js') }}"></script>*/
/* 	<script src="{{ path('fos_js_routing_js', { callback: 'fos.Router.setData' }) }}"></script>*/
/* 	<script src="{{ asset('bundles/web/js/ajax.js') }}" type="text/javascript"></script>*/
/* */
/* 	<script>*/
/* 		var flag = false;*/
/* 		$("#dynamic_content").on("change", "#dummy_player_image", (function(evt) {*/
/* 			changeImage(evt, "dummy_avatar");			*/
/* 		}));*/
/* 	*/
/* */
/* 		$("#dynamic_content").on("click", "#edit_button, #cancel_button", (function(evt) {*/
/* 			var idSource = evt.currentTarget.id;*/
/* 			var url;*/
/* 			if (idSource == "edit_button") {*/
/* 				url = "{{path('ajaxEditDummyPlayer', {'dummyId': dummy.id})}}";*/
/* */
/* 			} else {*/
/* 				url = "{{path('ajaxCancelDummyPlayer', {'dummyId': dummy.id})}}";*/
/* 			}*/
/* 			changeTemplate(url, "dynamic_content");*/
/* 			*/
/* 		}));*/
/* */
/* 		function finishedTemplate() {*/
/* 			document.getElementById("dummy_player_oldPathImage").value = document.getElementById("dummy_avatar").src;*/
/* 		}*/
/* 	</script>*/
/* */
/* {% endblock %}*/
/* {% block body %}*/
/* {% set profile = app.session.get('profile') %}*/
/* {% set idFriends = app.session.get('idFriends') %}*/
/* {% set showFavorite = true %}*/
/* 	<div class="container rounded-box">*/
/* 		<div class="row">*/
/* 			<div class="col-md-4 col-md-offset-4 user-photo">*/
/* 				<img id="dummy_avatar" src=*/
/* 				{% if dummy.image %}"{{ asset('bundles/web/img/dummy/' ~ dummy.image) }}"{% else %}"{{ asset('bundles/web/img/dummy/default.jpg') }}"{% endif %}*/
/* 				/><br />*/
/* 			</div>*/
/* 		</div>*/
/* 		<br />*/
/* 		<div id="dynamic_content">*/
/* 			{% include 'player/templates/showDummyPlayerInfo.html.twig' with {'dummy': dummy} %}*/
/* 		</div>*/
/* 	</div>*/
/* {% endblock %}*/
