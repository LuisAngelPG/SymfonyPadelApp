<?php

/* club/viewClub.html.twig */
class __TwigTemplate_7cd071347684b1af965ee16ae5d84de145c089f41adfd72878aad2eec4ef8ea5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base/base.html.twig", "club/viewClub.html.twig", 1);
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
        $__internal_20a1da0fe90dacc8d35735804a353934fa9616a9c787cd671d164746a65bd1e2 = $this->env->getExtension("native_profiler");
        $__internal_20a1da0fe90dacc8d35735804a353934fa9616a9c787cd671d164746a65bd1e2->enter($__internal_20a1da0fe90dacc8d35735804a353934fa9616a9c787cd671d164746a65bd1e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "club/viewClub.html.twig"));

        // line 2
        $context["active"] = 3;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_20a1da0fe90dacc8d35735804a353934fa9616a9c787cd671d164746a65bd1e2->leave($__internal_20a1da0fe90dacc8d35735804a353934fa9616a9c787cd671d164746a65bd1e2_prof);

    }

    // line 3
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0d1cc02fc0a682ef61d4c0829913e7088d8bb6404aaf0375a1d88e38d0c1b8f8 = $this->env->getExtension("native_profiler");
        $__internal_0d1cc02fc0a682ef61d4c0829913e7088d8bb6404aaf0375a1d88e38d0c1b8f8->enter($__internal_0d1cc02fc0a682ef61d4c0829913e7088d8bb6404aaf0375a1d88e38d0c1b8f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
            echo "\t<script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/web/js/ajax.js"), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
\t<script src=\"";
            // line 7
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/web/js/libs/googleMaps.js"), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
";
        } else {
            // asset "cccbafd"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_cccbafd") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/compiled/main.js");
            // line 6
            echo "\t<script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/web/js/ajax.js"), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
\t<script src=\"";
            // line 7
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/web/js/libs/googleMaps.js"), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
";
        }
        unset($context["asset_url"]);
        // line 9
        echo "

\t<script>
\t\tvar flag = false;
\t\t\$(\"#dynamic_content\").on(\"change\", \"#club_image\", (function(evt) {
\t\t\tif (!flag) {
\t\t\t\tflag = true;
\t\t\t\tdocument.getElementById(\"club_oldPathImage\").value = document.getElementById(\"club_avatar\").src;
\t\t\t}
\t\t\tchangeImage(evt, \"club_avatar\");\t\t\t
\t\t}));

\t\t\$(\"#dynamic_content\").on(\"click\", \"#edit_button, #cancel_button\", (function(evt) {
\t\t\tvar idSource = evt.currentTarget.id;
\t\t\tvar url;
\t\t\tif (idSource == \"edit_button\") {
\t\t\t\turl = \"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ajaxClubEdit", array("clubId" => $this->getAttribute((isset($context["club"]) ? $context["club"] : $this->getContext($context, "club")), "id", array()))), "html", null, true);
        echo "\";

\t\t\t} else {
\t\t\t\turl = \"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ajaxClubCancel", array("clubId" => $this->getAttribute((isset($context["club"]) ? $context["club"] : $this->getContext($context, "club")), "id", array()))), "html", null, true);
        echo "\";
\t\t\t}
\t\t\tchangeTemplate(url, \"dynamic_content\");
\t\t\t\$.getScript(\"https://maps.googleapis.com/maps/api/js?key=AIzaSyDYBSohGbS2zZHJlss4KogGTyHqxmTAOVw&libraries=places&callback=initAutocomplete\")
\t\t\t\t.done(function( script, textStatus ) {
\t\t\t\t\tfillInAddress();
\t\t\t\t});
\t\t}));

 \t\t\$(\"#fav\").click(function(){
\t\t\tvar url = \"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ajaxClubFav", array("clubId" => $this->getAttribute((isset($context["club"]) ? $context["club"] : $this->getContext($context, "club")), "id", array()))), "html", null, true);
        echo "\";
\t\t\t\$.ajax({url: url, success: function(result) {
\t\t\t}});
 \t\t})

 \t\t\$(\"#unFav\").click(function() {
\t\t\tvar url = \"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ajaxRemoveFavClub", array("clubId" => $this->getAttribute((isset($context["club"]) ? $context["club"] : $this->getContext($context, "club")), "id", array()))), "html", null, true);
        echo "\";
\t\t\t\$.ajax({url: url, success: function(result) {
\t\t\t}});
 \t\t})
\t</script>

";
        
        $__internal_0d1cc02fc0a682ef61d4c0829913e7088d8bb6404aaf0375a1d88e38d0c1b8f8->leave($__internal_0d1cc02fc0a682ef61d4c0829913e7088d8bb6404aaf0375a1d88e38d0c1b8f8_prof);

    }

    // line 51
    public function block_body($context, array $blocks = array())
    {
        $__internal_16c1fb259faece3ad35e58b3fa1b5a08ea9f1b475acddb93b831a4420ccfb5e0 = $this->env->getExtension("native_profiler");
        $__internal_16c1fb259faece3ad35e58b3fa1b5a08ea9f1b475acddb93b831a4420ccfb5e0->enter($__internal_16c1fb259faece3ad35e58b3fa1b5a08ea9f1b475acddb93b831a4420ccfb5e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 52
        $context["profile"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "profile"), "method");
        // line 53
        $context["idFavClubs"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "idFavClubs"), "method");
        // line 54
        $context["showFavorite"] = true;
        // line 55
        echo "\t<div class=\"container rounded-box\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-4 col-md-offset-4 club-photo\">
\t\t\t\t<div id=\"image\">
\t\t\t\t\t<img id = \"club_avatar\" src=
\t\t\t\t\t";
        // line 60
        if ($this->getAttribute((isset($context["club"]) ? $context["club"] : $this->getContext($context, "club")), "image", array())) {
            echo "\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(("bundles/web/img/clubs/" . $this->getAttribute((isset($context["club"]) ? $context["club"] : $this->getContext($context, "club")), "image", array()))), "html", null, true);
            echo "\"";
        } else {
            echo "\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/web/img/clubs/default.jpg"), "html", null, true);
            echo "\"";
        }
        // line 61
        echo "\t\t\t\t\t/>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>\t
\t\t<div id=\"dynamic_content\">
\t\t\t";
        // line 66
        $this->loadTemplate("club/templates/showClubInfo.html.twig", "club/viewClub.html.twig", 66)->display(array_merge($context, array("club" => (isset($context["club"]) ? $context["club"] : $this->getContext($context, "club")))));
        // line 67
        echo "\t\t</div>
\t\t";
        // line 68
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["idFavClubs"]) ? $context["idFavClubs"] : $this->getContext($context, "idFavClubs")));
        foreach ($context['_seq'] as $context["_key"] => $context["idFavClub"]) {
            // line 69
            echo "\t\t\t";
            if (($context["idFavClub"] == $this->getAttribute((isset($context["club"]) ? $context["club"] : $this->getContext($context, "club")), "id", array()))) {
                // line 70
                echo "\t\t\t\t<button id=\"unFav\">Unfavorite</button>
\t\t\t\t";
                // line 71
                $context["showFavorite"] = false;
                // line 72
                echo "\t\t\t";
            }
            // line 73
            echo "\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['idFavClub'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "\t\t";
        if ((isset($context["showFavorite"]) ? $context["showFavorite"] : $this->getContext($context, "showFavorite"))) {
            // line 75
            echo "\t\t\t\t<button id=\"fav\">Favorite</button>
\t\t";
        }
        // line 77
        echo "\t\t";
        if (($this->getAttribute((isset($context["club"]) ? $context["club"] : $this->getContext($context, "club")), "owner", array()) == null)) {
            // line 78
            echo "\t\t\t<button id=\"owner\">I am the owner</button>
\t\t";
        }
        // line 80
        echo "\t\t<div id=\"hidden-inputs\">
\t\t</div>
\t</div>
";
        
        $__internal_16c1fb259faece3ad35e58b3fa1b5a08ea9f1b475acddb93b831a4420ccfb5e0->leave($__internal_16c1fb259faece3ad35e58b3fa1b5a08ea9f1b475acddb93b831a4420ccfb5e0_prof);

    }

    public function getTemplateName()
    {
        return "club/viewClub.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  212 => 80,  208 => 78,  205 => 77,  201 => 75,  198 => 74,  192 => 73,  189 => 72,  187 => 71,  184 => 70,  181 => 69,  177 => 68,  174 => 67,  172 => 66,  165 => 61,  155 => 60,  148 => 55,  146 => 54,  144 => 53,  142 => 52,  136 => 51,  122 => 44,  113 => 38,  100 => 28,  94 => 25,  76 => 9,  70 => 7,  65 => 6,  58 => 7,  53 => 6,  49 => 5,  44 => 4,  38 => 3,  31 => 1,  29 => 2,  11 => 1,);
    }
}
/* {% extends 'base/base.html.twig' %}*/
/* {% set active = 3 %}*/
/* {% block javascripts %}*/
/* 	{{ parent() }}*/
/* 	{% javascripts '@AppBundle/*' output='js/compiled/main.js' %}*/
/* 	<script src="{{ asset('bundles/web/js/ajax.js') }}" type="text/javascript"></script>*/
/* 	<script src="{{ asset('bundles/web/js/libs/googleMaps.js') }}" type="text/javascript"></script>*/
/* {% endjavascripts %}*/
/* */
/* */
/* 	<script>*/
/* 		var flag = false;*/
/* 		$("#dynamic_content").on("change", "#club_image", (function(evt) {*/
/* 			if (!flag) {*/
/* 				flag = true;*/
/* 				document.getElementById("club_oldPathImage").value = document.getElementById("club_avatar").src;*/
/* 			}*/
/* 			changeImage(evt, "club_avatar");			*/
/* 		}));*/
/* */
/* 		$("#dynamic_content").on("click", "#edit_button, #cancel_button", (function(evt) {*/
/* 			var idSource = evt.currentTarget.id;*/
/* 			var url;*/
/* 			if (idSource == "edit_button") {*/
/* 				url = "{{path('ajaxClubEdit', {'clubId': club.id})}}";*/
/* */
/* 			} else {*/
/* 				url = "{{path('ajaxClubCancel', {'clubId': club.id})}}";*/
/* 			}*/
/* 			changeTemplate(url, "dynamic_content");*/
/* 			$.getScript("https://maps.googleapis.com/maps/api/js?key=AIzaSyDYBSohGbS2zZHJlss4KogGTyHqxmTAOVw&libraries=places&callback=initAutocomplete")*/
/* 				.done(function( script, textStatus ) {*/
/* 					fillInAddress();*/
/* 				});*/
/* 		}));*/
/* */
/*  		$("#fav").click(function(){*/
/* 			var url = "{{path('ajaxClubFav', {'clubId': club.id})}}";*/
/* 			$.ajax({url: url, success: function(result) {*/
/* 			}});*/
/*  		})*/
/* */
/*  		$("#unFav").click(function() {*/
/* 			var url = "{{path('ajaxRemoveFavClub', {'clubId': club.id})}}";*/
/* 			$.ajax({url: url, success: function(result) {*/
/* 			}});*/
/*  		})*/
/* 	</script>*/
/* */
/* {% endblock %}*/
/* {% block body %}*/
/* {% set profile = app.session.get('profile') %}*/
/* {% set idFavClubs = app.session.get('idFavClubs') %}*/
/* {% set showFavorite = true %}*/
/* 	<div class="container rounded-box">*/
/* 		<div class="row">*/
/* 			<div class="col-md-4 col-md-offset-4 club-photo">*/
/* 				<div id="image">*/
/* 					<img id = "club_avatar" src=*/
/* 					{% if club.image %}"{{ asset('bundles/web/img/clubs/' ~ club.image) }}"{% else %}"{{ asset('bundles/web/img/clubs/default.jpg') }}"{% endif %}*/
/* 					/>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>	*/
/* 		<div id="dynamic_content">*/
/* 			{% include 'club/templates/showClubInfo.html.twig' with {'club': club} %}*/
/* 		</div>*/
/* 		{% for idFavClub in idFavClubs %}*/
/* 			{% if idFavClub == club.id %}*/
/* 				<button id="unFav">Unfavorite</button>*/
/* 				{% set showFavorite = false %}*/
/* 			{% endif %}*/
/* 		{% endfor %}*/
/* 		{% if showFavorite %}*/
/* 				<button id="fav">Favorite</button>*/
/* 		{% endif %}*/
/* 		{% if club.owner == null %}*/
/* 			<button id="owner">I am the owner</button>*/
/* 		{% endif %}*/
/* 		<div id="hidden-inputs">*/
/* 		</div>*/
/* 	</div>*/
/* {% endblock %}*/
