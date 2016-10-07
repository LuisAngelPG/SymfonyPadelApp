<?php

/* player/searchPlayers.html.twig */
class __TwigTemplate_1077f55d3912063dcdc03bc61a86e8fc43b9ebb17c626f3f969c95f0c7ac3708 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base/base.html.twig", "player/searchPlayers.html.twig", 1);
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
        $__internal_99e805edca380f551c58ffe21e0d2de8ce36ee9ff90d5d4df42467d9d4e1885a = $this->env->getExtension("native_profiler");
        $__internal_99e805edca380f551c58ffe21e0d2de8ce36ee9ff90d5d4df42467d9d4e1885a->enter($__internal_99e805edca380f551c58ffe21e0d2de8ce36ee9ff90d5d4df42467d9d4e1885a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "player/searchPlayers.html.twig"));

        // line 2
        $context["active"] = 4;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_99e805edca380f551c58ffe21e0d2de8ce36ee9ff90d5d4df42467d9d4e1885a->leave($__internal_99e805edca380f551c58ffe21e0d2de8ce36ee9ff90d5d4df42467d9d4e1885a_prof);

    }

    // line 3
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b4bee6e05971899470bf48314fa94238ac6f8ac3d1d7cebbaab94fe6c5673094 = $this->env->getExtension("native_profiler");
        $__internal_b4bee6e05971899470bf48314fa94238ac6f8ac3d1d7cebbaab94fe6c5673094->enter($__internal_b4bee6e05971899470bf48314fa94238ac6f8ac3d1d7cebbaab94fe6c5673094_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 4
        echo "\t";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/web/js/libs/jqueryUI/jquery-ui.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
  \t<link rel=\"stylesheet\" href=\"//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css\">
  \t<script src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/web/js/libs/tablesorter/jquery.tablesorter.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
  \t<script>
  \t\t\$(\"#myTable\").tablesorter();
  \t</script>
  \t<script>
\t\t\$( function() {
\t\t\tvar playerNames = [];
\t\t\t";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["allPlayers"]) ? $context["allPlayers"] : $this->getContext($context, "allPlayers")));
        foreach ($context['_seq'] as $context["_key"] => $context["player"]) {
            // line 15
            echo "\t\t\t\tplayerNames.push({
\t\t\t\t'id': '";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["player"], "id", array()), "html", null, true);
            echo "',
\t\t\t\t'value': '";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["player"], "name", array()), "html", null, true);
            echo "',
\t\t\t\t'image': ";
            // line 18
            if ($this->getAttribute($context["player"], "image", array())) {
                // line 19
                echo "\t\t\t\t\t\t\t\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(("bundles/web/img/usersProfiles/" . $this->getAttribute($context["player"], "image", array()))), "html", null, true);
                echo "\"
\t\t\t\t\t\t ";
            } else {
                // line 21
                echo "\t\t\t\t\t\t \t\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/web/img/usersProfiles/default.png"), "html", null, true);
                echo "\"
\t\t\t\t\t\t ";
            }
            // line 23
            echo "\t\t\t\t});
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['player'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "
\t\t    \$( \"#search\" ).autocomplete({
\t\t    \tsource: function(request, response) {
\t        \t\tvar results = \$.ui.autocomplete.filter(playerNames, request.term);
\t       \t\t\tresponse(results.slice(0, 5));
\t    \t\t},
\t    \t\tselect: function( event, ui ) {
\t\t\t\t\twindow.location.href = \"";
        // line 32
        echo $this->env->getExtension('routing')->getPath("viewPlayer");
        echo "/\" + ui.item.id; 
\t    \t\t}
\t\t    }).autocomplete( \"instance\" )._renderItem = function( ul, item ) {
\t      \t\treturn \$(\"<li>\")
\t        \t.append(\"<div class='row'><div class='pull-left list-photo'><img src=\" + item.image + \" /></div> <div>\" + item.label + \"</div></div>\")
\t        \t.appendTo(ul);
\t   \t\t};\t    
\t  \t} );
  \t</script>
";
        
        $__internal_b4bee6e05971899470bf48314fa94238ac6f8ac3d1d7cebbaab94fe6c5673094->leave($__internal_b4bee6e05971899470bf48314fa94238ac6f8ac3d1d7cebbaab94fe6c5673094_prof);

    }

    // line 42
    public function block_body($context, array $blocks = array())
    {
        $__internal_031c62360f39b598998d546423ffd8d425213d69583229a9075c4a046dfb58c5 = $this->env->getExtension("native_profiler");
        $__internal_031c62360f39b598998d546423ffd8d425213d69583229a9075c4a046dfb58c5->enter($__internal_031c62360f39b598998d546423ffd8d425213d69583229a9075c4a046dfb58c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 43
        $context["profile"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "profile"), "method");
        // line 44
        echo "
<div class=\"container rounded-box\">
\t<form class=\"\" method=\"get\" action=\"";
        // line 46
        echo $this->env->getExtension('routing')->getPath("searchClub");
        echo "\">
\t    <div class=\"form-group\">
\t        <input id=\"search\" class=\"form-control\" type=\"text\" placeholder=\"";
        // line 48
        echo $this->env->getExtension('translator')->getTranslator()->trans("Search...", array(), "messages");
        echo "\" name =\"search\">
\t    </div>
\t    <button class=\"hidden\" type=\"submit\" value\"search\" class=\"btn btn-default\"></button>
\t</form>
\t<table id=\"myTable\" class=\"tablesorter\"> 
\t\t<thead> 
\t\t\t<tr> 
\t\t\t    <th id=\"photo\"></th> 
\t\t\t    <th>";
        // line 56
        echo $this->env->getExtension('translator')->getTranslator()->trans("Name", array(), "messages");
        echo "</th> 
\t\t\t</tr> 
\t\t</thead> 

\t\t<tbody> 
\t\t\t<tr><td>Friends</td></tr>
\t\t\t";
        // line 62
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["favPlayers"]) ? $context["favPlayers"] : $this->getContext($context, "favPlayers")));
        foreach ($context['_seq'] as $context["_key"] => $context["player"]) {
            // line 63
            echo "\t\t\t\t<tr>
\t\t\t\t\t<td><a href=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("viewPlayer", array("playerId" => $this->getAttribute($context["player"], "id", array()))), "html", null, true);
            echo "\">
\t\t\t\t\t\t<img class=\"club-photo-list\" src=
\t\t\t\t\t\t\t";
            // line 66
            if ($this->getAttribute($context["player"], "image", array())) {
                // line 67
                echo "\t\t\t\t\t\t\t\t\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(("bundles/web/img/usersProfiles/" . $this->getAttribute($context["player"], "image", array()))), "html", null, true);
                echo "\"
\t\t\t\t\t\t\t ";
            } else {
                // line 69
                echo "\t\t\t\t\t\t \t\t\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/web/img/usersProfiles/default.png"), "html", null, true);
                echo "\"
\t\t\t\t\t\t\t ";
            }
            // line 71
            echo "\t\t\t\t\t\t/>
\t\t\t\t\t</a></td>
\t\t\t\t\t<td><a href=\"";
            // line 73
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("viewPlayer", array("playerId" => $this->getAttribute($context["player"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["player"], "name", array()), "html", null, true);
            echo "</a></td>
\t\t\t\t</tr>\t
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['player'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "\t\t\t<tr><td>Dummy Players</td></tr>
\t\t\t";
        // line 77
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["dummyPlayers"]) ? $context["dummyPlayers"] : $this->getContext($context, "dummyPlayers")));
        foreach ($context['_seq'] as $context["_key"] => $context["dummy"]) {
            // line 78
            echo "\t\t\t\t<tr>
\t\t\t\t\t<td><a href=\"";
            // line 79
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("viewDummyPlayer", array("dummyId" => $this->getAttribute($context["dummy"], "id", array()))), "html", null, true);
            echo "\">
\t\t\t\t\t\t<img class=\"club-photo-list\" src=
\t\t\t\t\t\t\t";
            // line 81
            if ($this->getAttribute($context["dummy"], "image", array())) {
                // line 82
                echo "\t\t\t\t\t\t\t\t\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(("bundles/web/img/dummy/" . $this->getAttribute($context["dummy"], "image", array()))), "html", null, true);
                echo "\"
\t\t\t\t\t\t\t ";
            } else {
                // line 84
                echo "\t\t\t\t\t\t \t\t\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/web/img/dummy/default.jpg"), "html", null, true);
                echo "\"
\t\t\t\t\t\t\t ";
            }
            // line 86
            echo "\t\t\t\t\t\t/>
\t\t\t\t\t</a></td>
\t\t\t\t\t<td><a href=\"";
            // line 88
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("viewDummyPlayer", array("dummyId" => $this->getAttribute($context["dummy"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["dummy"], "name", array()), "html", null, true);
            echo "</a></td>
\t\t\t\t</tr>\t
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dummy'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 91
        echo "\t\t</tbody> 
\t</table> 
</div>
";
        
        $__internal_031c62360f39b598998d546423ffd8d425213d69583229a9075c4a046dfb58c5->leave($__internal_031c62360f39b598998d546423ffd8d425213d69583229a9075c4a046dfb58c5_prof);

    }

    public function getTemplateName()
    {
        return "player/searchPlayers.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  248 => 91,  237 => 88,  233 => 86,  227 => 84,  221 => 82,  219 => 81,  214 => 79,  211 => 78,  207 => 77,  204 => 76,  193 => 73,  189 => 71,  183 => 69,  177 => 67,  175 => 66,  170 => 64,  167 => 63,  163 => 62,  154 => 56,  143 => 48,  138 => 46,  134 => 44,  132 => 43,  126 => 42,  109 => 32,  100 => 25,  93 => 23,  87 => 21,  81 => 19,  79 => 18,  75 => 17,  71 => 16,  68 => 15,  64 => 14,  54 => 7,  49 => 5,  44 => 4,  38 => 3,  31 => 1,  29 => 2,  11 => 1,);
    }
}
/* {% extends 'base/base.html.twig' %}*/
/* {% set active = 4 %}*/
/* {% block javascripts %}*/
/* 	{{ parent() }}*/
/*     <script src="{{ asset('bundles/web/js/libs/jqueryUI/jquery-ui.min.js') }}" type="text/javascript"></script>*/
/*   	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">*/
/*   	<script src="{{ asset('bundles/web/js/libs/tablesorter/jquery.tablesorter.min.js') }}" type="text/javascript"></script>*/
/*   	<script>*/
/*   		$("#myTable").tablesorter();*/
/*   	</script>*/
/*   	<script>*/
/* 		$( function() {*/
/* 			var playerNames = [];*/
/* 			{% for player in allPlayers %}*/
/* 				playerNames.push({*/
/* 				'id': '{{player.id}}',*/
/* 				'value': '{{player.name}}',*/
/* 				'image': {% if player.image %}*/
/* 							"{{ asset('bundles/web/img/usersProfiles/' ~ player.image) }}"*/
/* 						 {% else %}*/
/* 						 	"{{ asset('bundles/web/img/usersProfiles/default.png') }}"*/
/* 						 {% endif %}*/
/* 				});*/
/* 			{% endfor %}*/
/* */
/* 		    $( "#search" ).autocomplete({*/
/* 		    	source: function(request, response) {*/
/* 	        		var results = $.ui.autocomplete.filter(playerNames, request.term);*/
/* 	       			response(results.slice(0, 5));*/
/* 	    		},*/
/* 	    		select: function( event, ui ) {*/
/* 					window.location.href = "{{ path('viewPlayer') }}/" + ui.item.id; */
/* 	    		}*/
/* 		    }).autocomplete( "instance" )._renderItem = function( ul, item ) {*/
/* 	      		return $("<li>")*/
/* 	        	.append("<div class='row'><div class='pull-left list-photo'><img src=" + item.image + " /></div> <div>" + item.label + "</div></div>")*/
/* 	        	.appendTo(ul);*/
/* 	   		};	    */
/* 	  	} );*/
/*   	</script>*/
/* {% endblock %}*/
/* {% block body %}*/
/* {% set profile = app.session.get('profile') %}*/
/* */
/* <div class="container rounded-box">*/
/* 	<form class="" method="get" action="{{ path('searchClub') }}">*/
/* 	    <div class="form-group">*/
/* 	        <input id="search" class="form-control" type="text" placeholder="{% trans %}Search...{% endtrans %}" name ="search">*/
/* 	    </div>*/
/* 	    <button class="hidden" type="submit" value"search" class="btn btn-default"></button>*/
/* 	</form>*/
/* 	<table id="myTable" class="tablesorter"> */
/* 		<thead> */
/* 			<tr> */
/* 			    <th id="photo"></th> */
/* 			    <th>{% trans %}Name{% endtrans %}</th> */
/* 			</tr> */
/* 		</thead> */
/* */
/* 		<tbody> */
/* 			<tr><td>Friends</td></tr>*/
/* 			{% for player in favPlayers %}*/
/* 				<tr>*/
/* 					<td><a href="{{ path("viewPlayer", {"playerId": player.id}) }}">*/
/* 						<img class="club-photo-list" src=*/
/* 							{% if player.image %}*/
/* 								"{{ asset('bundles/web/img/usersProfiles/' ~ player.image) }}"*/
/* 							 {% else %}*/
/* 						 		"{{ asset('bundles/web/img/usersProfiles/default.png') }}"*/
/* 							 {% endif %}*/
/* 						/>*/
/* 					</a></td>*/
/* 					<td><a href="{{ path("viewPlayer", {"playerId": player.id}) }}">{{player.name}}</a></td>*/
/* 				</tr>	*/
/* 			{% endfor %}*/
/* 			<tr><td>Dummy Players</td></tr>*/
/* 			{% for dummy in dummyPlayers %}*/
/* 				<tr>*/
/* 					<td><a href="{{ path("viewDummyPlayer", {"dummyId": dummy.id}) }}">*/
/* 						<img class="club-photo-list" src=*/
/* 							{% if dummy.image %}*/
/* 								"{{ asset('bundles/web/img/dummy/' ~ dummy.image) }}"*/
/* 							 {% else %}*/
/* 						 		"{{ asset('bundles/web/img/dummy/default.jpg') }}"*/
/* 							 {% endif %}*/
/* 						/>*/
/* 					</a></td>*/
/* 					<td><a href="{{ path("viewDummyPlayer", {"dummyId": dummy.id}) }}">{{dummy.name}}</a></td>*/
/* 				</tr>	*/
/* 			{% endfor %}*/
/* 		</tbody> */
/* 	</table> */
/* </div>*/
/* {% endblock %}*/
