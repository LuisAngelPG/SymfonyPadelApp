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
        $__internal_0c382efe751f93eaa0cd6921da4164198dc8cd7b2113bbaf3da3863786693dda = $this->env->getExtension("native_profiler");
        $__internal_0c382efe751f93eaa0cd6921da4164198dc8cd7b2113bbaf3da3863786693dda->enter($__internal_0c382efe751f93eaa0cd6921da4164198dc8cd7b2113bbaf3da3863786693dda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "player/viewDummyPlayer.html.twig"));

        // line 2
        $context["active"] = 4;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0c382efe751f93eaa0cd6921da4164198dc8cd7b2113bbaf3da3863786693dda->leave($__internal_0c382efe751f93eaa0cd6921da4164198dc8cd7b2113bbaf3da3863786693dda_prof);

    }

    // line 3
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8cc62aa9ed593f106b538b5f2d3d7a281ebdf54ce503e8860317f31505f55966 = $this->env->getExtension("native_profiler");
        $__internal_8cc62aa9ed593f106b538b5f2d3d7a281ebdf54ce503e8860317f31505f55966->enter($__internal_8cc62aa9ed593f106b538b5f2d3d7a281ebdf54ce503e8860317f31505f55966_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 4
        echo "\t";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
\t";
        // line 5
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "cccbafd_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_cccbafd_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/compiled/main_part_1_AppBundle_1.js");
            // line 6
            echo "\t\t<script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html", null, true);
            echo "\"></script>
\t\t<script src=\"";
            // line 7
            echo $this->env->getExtension('routing')->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData"));
            echo "\"></script>
\t\t<script src=\"";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/web/js/ajax.js"), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
\t";
        } else {
            // asset "cccbafd"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_cccbafd") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/compiled/main.js");
            // line 6
            echo "\t\t<script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html", null, true);
            echo "\"></script>
\t\t<script src=\"";
            // line 7
            echo $this->env->getExtension('routing')->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData"));
            echo "\"></script>
\t\t<script src=\"";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/web/js/ajax.js"), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
\t";
        }
        unset($context["asset_url"]);
        // line 10
        echo "
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
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ajaxEditDummyPlayer", array("dummyId" => $this->getAttribute((isset($context["dummy"]) ? $context["dummy"] : $this->getContext($context, "dummy")), "id", array()))), "html", null, true);
        echo "\";

\t\t\t} else {
\t\t\t\turl = \"";
        // line 25
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
        
        $__internal_8cc62aa9ed593f106b538b5f2d3d7a281ebdf54ce503e8860317f31505f55966->leave($__internal_8cc62aa9ed593f106b538b5f2d3d7a281ebdf54ce503e8860317f31505f55966_prof);

    }

    // line 37
    public function block_body($context, array $blocks = array())
    {
        $__internal_e6b0f30523fb62da389cc8450745b081e51384a82594c20c145ae67d7f88891b = $this->env->getExtension("native_profiler");
        $__internal_e6b0f30523fb62da389cc8450745b081e51384a82594c20c145ae67d7f88891b->enter($__internal_e6b0f30523fb62da389cc8450745b081e51384a82594c20c145ae67d7f88891b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 38
        $context["profile"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "profile"), "method");
        // line 39
        $context["idFriends"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "idFriends"), "method");
        // line 40
        $context["showFavorite"] = true;
        // line 41
        echo "\t<div class=\"container rounded-box\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-4 col-md-offset-4 user-photo\">
\t\t\t\t<img id=\"dummy_avatar\" src=
\t\t\t\t";
        // line 45
        if ($this->getAttribute((isset($context["dummy"]) ? $context["dummy"] : $this->getContext($context, "dummy")), "image", array())) {
            echo "\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(("bundles/web/img/dummy/" . $this->getAttribute((isset($context["dummy"]) ? $context["dummy"] : $this->getContext($context, "dummy")), "image", array()))), "html", null, true);
            echo "\"";
        } else {
            echo "\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/web/img/dummy/default.jpg"), "html", null, true);
            echo "\"";
        }
        // line 46
        echo "\t\t\t\t/><br />
\t\t\t</div>
\t\t</div>
\t\t<br />
\t\t<div id=\"dynamic_content\">
\t\t\t";
        // line 51
        $this->loadTemplate("player/templates/showDummyPlayerInfo.html.twig", "player/viewDummyPlayer.html.twig", 51)->display(array_merge($context, array("dummy" => (isset($context["dummy"]) ? $context["dummy"] : $this->getContext($context, "dummy")))));
        // line 52
        echo "\t\t</div>
\t</div>
";
        
        $__internal_e6b0f30523fb62da389cc8450745b081e51384a82594c20c145ae67d7f88891b->leave($__internal_e6b0f30523fb62da389cc8450745b081e51384a82594c20c145ae67d7f88891b_prof);

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
        return array (  160 => 52,  158 => 51,  151 => 46,  141 => 45,  135 => 41,  133 => 40,  131 => 39,  129 => 38,  123 => 37,  104 => 25,  98 => 22,  84 => 10,  78 => 8,  74 => 7,  69 => 6,  62 => 8,  58 => 7,  53 => 6,  49 => 5,  44 => 4,  38 => 3,  31 => 1,  29 => 2,  11 => 1,);
    }
}
/* {% extends 'base/base.html.twig' %}*/
/* {% set active = 4 %}*/
/* {% block javascripts %}*/
/* 	{{ parent() }}*/
/* 	{% javascripts '@AppBundle/*' output='js/compiled/main.js' %}*/
/* 		<script src="{{ asset('bundles/fosjsrouting/js/router.js') }}"></script>*/
/* 		<script src="{{ path('fos_js_routing_js', { callback: 'fos.Router.setData' }) }}"></script>*/
/* 		<script src="{{ asset('bundles/web/js/ajax.js') }}" type="text/javascript"></script>*/
/* 	{% endjavascripts %}*/
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
