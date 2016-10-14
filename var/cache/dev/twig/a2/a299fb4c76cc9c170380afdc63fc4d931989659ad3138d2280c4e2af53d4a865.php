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
        $__internal_a60ea583421864d6e4a243025ebc2bd48b7e1fab3db5e14c7040d4dd81288aa0 = $this->env->getExtension("native_profiler");
        $__internal_a60ea583421864d6e4a243025ebc2bd48b7e1fab3db5e14c7040d4dd81288aa0->enter($__internal_a60ea583421864d6e4a243025ebc2bd48b7e1fab3db5e14c7040d4dd81288aa0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "club/viewClub.html.twig"));

        // line 2
        $context["active"] = 3;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a60ea583421864d6e4a243025ebc2bd48b7e1fab3db5e14c7040d4dd81288aa0->leave($__internal_a60ea583421864d6e4a243025ebc2bd48b7e1fab3db5e14c7040d4dd81288aa0_prof);

    }

    // line 3
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_bc07eec68dd01a552e6155b5e79abf412b8cb4b3d1177b4d9491c52fd120416e = $this->env->getExtension("native_profiler");
        $__internal_bc07eec68dd01a552e6155b5e79abf412b8cb4b3d1177b4d9491c52fd120416e->enter($__internal_bc07eec68dd01a552e6155b5e79abf412b8cb4b3d1177b4d9491c52fd120416e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 4
        echo "\t";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
\t<script src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/web/js/ajax.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t<script src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/web/js/libs/googleMaps.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>


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
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ajaxClubEdit", array("clubId" => $this->getAttribute((isset($context["club"]) ? $context["club"] : $this->getContext($context, "club")), "id", array()))), "html", null, true);
        echo "\";

\t\t\t} else {
\t\t\t\turl = \"";
        // line 26
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
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ajaxClubFav", array("clubId" => $this->getAttribute((isset($context["club"]) ? $context["club"] : $this->getContext($context, "club")), "id", array()))), "html", null, true);
        echo "\";
\t\t\t\$.ajax({url: url, success: function(result) {
\t\t\t}});
 \t\t})

 \t\t\$(\"#unFav\").click(function() {
\t\t\tvar url = \"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ajaxRemoveFavClub", array("clubId" => $this->getAttribute((isset($context["club"]) ? $context["club"] : $this->getContext($context, "club")), "id", array()))), "html", null, true);
        echo "\";
\t\t\t\$.ajax({url: url, success: function(result) {
\t\t\t}});
 \t\t})
\t</script>

";
        
        $__internal_bc07eec68dd01a552e6155b5e79abf412b8cb4b3d1177b4d9491c52fd120416e->leave($__internal_bc07eec68dd01a552e6155b5e79abf412b8cb4b3d1177b4d9491c52fd120416e_prof);

    }

    // line 49
    public function block_body($context, array $blocks = array())
    {
        $__internal_c0f0ba181a8c9e030fed8444320b286d20208787f56536124a729a404410c681 = $this->env->getExtension("native_profiler");
        $__internal_c0f0ba181a8c9e030fed8444320b286d20208787f56536124a729a404410c681->enter($__internal_c0f0ba181a8c9e030fed8444320b286d20208787f56536124a729a404410c681_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 50
        $context["profile"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "profile"), "method");
        // line 51
        $context["idFavClubs"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "idFavClubs"), "method");
        // line 52
        $context["showFavorite"] = true;
        // line 53
        echo "\t<div class=\"container rounded-box\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-4 col-md-offset-4 club-photo\">
\t\t\t\t<div id=\"image\">
\t\t\t\t\t<img id = \"club_avatar\" src=
\t\t\t\t\t";
        // line 58
        if ($this->getAttribute((isset($context["club"]) ? $context["club"] : $this->getContext($context, "club")), "image", array())) {
            echo "\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(("bundles/web/img/clubs/" . $this->getAttribute((isset($context["club"]) ? $context["club"] : $this->getContext($context, "club")), "image", array()))), "html", null, true);
            echo "\"";
        } else {
            echo "\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/web/img/clubs/default.jpg"), "html", null, true);
            echo "\"";
        }
        // line 59
        echo "\t\t\t\t\t/>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>\t
\t\t<div id=\"dynamic_content\">
\t\t\t";
        // line 64
        $this->loadTemplate("club/templates/showClubInfo.html.twig", "club/viewClub.html.twig", 64)->display(array_merge($context, array("club" => (isset($context["club"]) ? $context["club"] : $this->getContext($context, "club")))));
        // line 65
        echo "\t\t</div>
\t\t";
        // line 66
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["idFavClubs"]) ? $context["idFavClubs"] : $this->getContext($context, "idFavClubs")));
        foreach ($context['_seq'] as $context["_key"] => $context["idFavClub"]) {
            // line 67
            echo "\t\t\t";
            if (($context["idFavClub"] == $this->getAttribute((isset($context["club"]) ? $context["club"] : $this->getContext($context, "club")), "id", array()))) {
                // line 68
                echo "\t\t\t\t<button id=\"unFav\">Unfavorite</button>
\t\t\t\t";
                // line 69
                $context["showFavorite"] = false;
                // line 70
                echo "\t\t\t";
            }
            // line 71
            echo "\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['idFavClub'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "\t\t";
        if ((isset($context["showFavorite"]) ? $context["showFavorite"] : $this->getContext($context, "showFavorite"))) {
            // line 73
            echo "\t\t\t\t<button id=\"fav\">Favorite</button>
\t\t";
        }
        // line 75
        echo "\t\t";
        if (($this->getAttribute((isset($context["club"]) ? $context["club"] : $this->getContext($context, "club")), "owner", array()) == null)) {
            // line 76
            echo "\t\t\t<button id=\"owner\">I am the owner</button>
\t\t";
        }
        // line 78
        echo "\t\t<div id=\"hidden-inputs\">
\t\t</div>
\t</div>
";
        
        $__internal_c0f0ba181a8c9e030fed8444320b286d20208787f56536124a729a404410c681->leave($__internal_c0f0ba181a8c9e030fed8444320b286d20208787f56536124a729a404410c681_prof);

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
        return array (  191 => 78,  187 => 76,  184 => 75,  180 => 73,  177 => 72,  171 => 71,  168 => 70,  166 => 69,  163 => 68,  160 => 67,  156 => 66,  153 => 65,  151 => 64,  144 => 59,  134 => 58,  127 => 53,  125 => 52,  123 => 51,  121 => 50,  115 => 49,  101 => 42,  92 => 36,  79 => 26,  73 => 23,  53 => 6,  49 => 5,  44 => 4,  38 => 3,  31 => 1,  29 => 2,  11 => 1,);
    }
}
/* {% extends 'base/base.html.twig' %}*/
/* {% set active = 3 %}*/
/* {% block javascripts %}*/
/* 	{{ parent() }}*/
/* 	<script src="{{ asset('bundles/web/js/ajax.js') }}" type="text/javascript"></script>*/
/* 	<script src="{{ asset('bundles/web/js/libs/googleMaps.js') }}" type="text/javascript"></script>*/
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
