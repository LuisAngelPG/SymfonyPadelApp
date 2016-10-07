<?php

/* tournament/searchTournament.html.twig */
class __TwigTemplate_c0ee2cb6c1c11455d8515fd3db5e2783f3cac142660a8827f6e4690a7e33e844 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base/base.html.twig", "tournament/searchTournament.html.twig", 1);
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
        $__internal_09b51b28ecfd8ca3c30d06d63c7a2838d2edec9d5ae12b48a0b4c219110a70eb = $this->env->getExtension("native_profiler");
        $__internal_09b51b28ecfd8ca3c30d06d63c7a2838d2edec9d5ae12b48a0b4c219110a70eb->enter($__internal_09b51b28ecfd8ca3c30d06d63c7a2838d2edec9d5ae12b48a0b4c219110a70eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tournament/searchTournament.html.twig"));

        // line 2
        $context["active"] = 2;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_09b51b28ecfd8ca3c30d06d63c7a2838d2edec9d5ae12b48a0b4c219110a70eb->leave($__internal_09b51b28ecfd8ca3c30d06d63c7a2838d2edec9d5ae12b48a0b4c219110a70eb_prof);

    }

    // line 3
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d497fb75732b3df5c0771b1425deff899db7062dde253fe9075f3e64217be383 = $this->env->getExtension("native_profiler");
        $__internal_d497fb75732b3df5c0771b1425deff899db7062dde253fe9075f3e64217be383->enter($__internal_d497fb75732b3df5c0771b1425deff899db7062dde253fe9075f3e64217be383_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
\t\t\tvar tournamentNames = [];
\t\t\t";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["allTournaments"]) ? $context["allTournaments"] : $this->getContext($context, "allTournaments")));
        foreach ($context['_seq'] as $context["_key"] => $context["tournaments"]) {
            // line 15
            echo "\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["tournaments"]);
            foreach ($context['_seq'] as $context["_key"] => $context["tournament"]) {
                // line 16
                echo "\t\t\t\t\ttournamentNames.push({
\t\t\t\t\t\t'id': '";
                // line 17
                echo twig_escape_filter($this->env, $this->getAttribute($context["tournament"], "id", array()), "html", null, true);
                echo "',
\t\t\t\t\t\t'value': '";
                // line 18
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["tournament"], "tournament", array()), "name", array()), "html", null, true);
                echo "'
\t\t\t\t\t\t});
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tournament'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tournaments'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "
\t\t    \$( \"#search\" ).autocomplete({
\t\t    \tsource: function(request, response) {
\t        \t\tvar results = \$.ui.autocomplete.filter(tournamentNames, request.term);
\t       \t\t\tresponse(results.slice(0, 5));
\t    \t\t},
\t    \t\tselect: function( event, ui ) {
\t\t\t\t\twindow.location.href = \"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("viewPlayer");
        echo "/\" + ui.item.id; 
\t    \t\t}
\t\t    }).autocomplete( \"instance\" )._renderItem = function( ul, item ) {
\t      \t\treturn \$(\"<li>\")
\t        \t.append(\"<div class='row'><div>\" + item.label + \"</div></div>\")
\t        \t.appendTo(ul);
\t   \t\t};\t    
\t  \t} );
  \t</script>
";
        
        $__internal_d497fb75732b3df5c0771b1425deff899db7062dde253fe9075f3e64217be383->leave($__internal_d497fb75732b3df5c0771b1425deff899db7062dde253fe9075f3e64217be383_prof);

    }

    // line 39
    public function block_body($context, array $blocks = array())
    {
        $__internal_824958d71121208dab97d1eb549e4baa281170e6626f2ec4b695dec2c559a08f = $this->env->getExtension("native_profiler");
        $__internal_824958d71121208dab97d1eb549e4baa281170e6626f2ec4b695dec2c559a08f->enter($__internal_824958d71121208dab97d1eb549e4baa281170e6626f2ec4b695dec2c559a08f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 40
        $context["profile"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "profile"), "method");
        // line 41
        echo "
<div class=\"container rounded-box\">
\t<form class=\"\" method=\"get\" action=\"";
        // line 43
        echo $this->env->getExtension('routing')->getPath("searchClub");
        echo "\">
\t    <div class=\"form-group\">
\t        <input id=\"search\" class=\"form-control\" type=\"text\" placeholder=\"";
        // line 45
        echo $this->env->getExtension('translator')->getTranslator()->trans("Search...", array(), "messages");
        echo "\" name =\"search\">
\t    </div>
\t    <button class=\"hidden\" type=\"submit\" value\"search\" class=\"btn btn-default\"></button>
\t</form>
\t<table id=\"myTable\" class=\"tablesorter\"> 
\t\t<tbody> 
\t\t\t<tr>
\t\t\t\t<td>Player</td>
\t\t\t</tr>
\t\t\t";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["allTournaments"]) ? $context["allTournaments"] : $this->getContext($context, "allTournaments")), 0, array()));
        foreach ($context['_seq'] as $context["_key"] => $context["tournament"]) {
            // line 55
            echo "\t\t\t\t<tr>
\t\t\t\t\t<td><a href=\"";
            // line 56
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("viewTournament", array("tournamentId" => $this->getAttribute($this->getAttribute($context["tournament"], "tournament", array()), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["tournament"], "tournament", array()), "name", array()), "html", null, true);
            echo "</a></td>
\t\t\t\t</tr>\t
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tournament'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "\t\t\t<tr>
\t\t\t\t<td>Spectator</td>
\t\t\t</tr>
\t\t\t";
        // line 62
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["allTournaments"]) ? $context["allTournaments"] : $this->getContext($context, "allTournaments")), 1, array()));
        foreach ($context['_seq'] as $context["_key"] => $context["tournament"]) {
            // line 63
            echo "\t\t\t\t<tr>
\t\t\t\t\t<td><a href=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("viewTournament", array("tournamentId" => $this->getAttribute($this->getAttribute($context["tournament"], "tournament", array()), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["tournament"], "tournament", array()), "name", array()), "html", null, true);
            echo "</a></td>
\t\t\t\t</tr>\t
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tournament'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "\t\t</tbody> 
\t</table> 
</div>
";
        
        $__internal_824958d71121208dab97d1eb549e4baa281170e6626f2ec4b695dec2c559a08f->leave($__internal_824958d71121208dab97d1eb549e4baa281170e6626f2ec4b695dec2c559a08f_prof);

    }

    public function getTemplateName()
    {
        return "tournament/searchTournament.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 67,  180 => 64,  177 => 63,  173 => 62,  168 => 59,  157 => 56,  154 => 55,  150 => 54,  138 => 45,  133 => 43,  129 => 41,  127 => 40,  121 => 39,  104 => 29,  95 => 22,  89 => 21,  80 => 18,  76 => 17,  73 => 16,  68 => 15,  64 => 14,  54 => 7,  49 => 5,  44 => 4,  38 => 3,  31 => 1,  29 => 2,  11 => 1,);
    }
}
/* {% extends 'base/base.html.twig' %}*/
/* {% set active = 2 %}*/
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
/* 			var tournamentNames = [];*/
/* 			{% for tournaments in allTournaments %}*/
/* 				{% for tournament in tournaments %}*/
/* 					tournamentNames.push({*/
/* 						'id': '{{tournament.id}}',*/
/* 						'value': '{{tournament.tournament.name}}'*/
/* 						});*/
/* 				{% endfor %}*/
/* 			{% endfor %}*/
/* */
/* 		    $( "#search" ).autocomplete({*/
/* 		    	source: function(request, response) {*/
/* 	        		var results = $.ui.autocomplete.filter(tournamentNames, request.term);*/
/* 	       			response(results.slice(0, 5));*/
/* 	    		},*/
/* 	    		select: function( event, ui ) {*/
/* 					window.location.href = "{{ path('viewPlayer') }}/" + ui.item.id; */
/* 	    		}*/
/* 		    }).autocomplete( "instance" )._renderItem = function( ul, item ) {*/
/* 	      		return $("<li>")*/
/* 	        	.append("<div class='row'><div>" + item.label + "</div></div>")*/
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
/* 		<tbody> */
/* 			<tr>*/
/* 				<td>Player</td>*/
/* 			</tr>*/
/* 			{% for tournament in allTournaments.0 %}*/
/* 				<tr>*/
/* 					<td><a href="{{ path("viewTournament", {"tournamentId": tournament.tournament.id}) }}">{{tournament.tournament.name}}</a></td>*/
/* 				</tr>	*/
/* 			{% endfor %}*/
/* 			<tr>*/
/* 				<td>Spectator</td>*/
/* 			</tr>*/
/* 			{% for tournament in allTournaments.1 %}*/
/* 				<tr>*/
/* 					<td><a href="{{ path("viewTournament", {"tournamentId": tournament.tournament.id}) }}">{{tournament.tournament.name}}</a></td>*/
/* 				</tr>	*/
/* 			{% endfor %}*/
/* 		</tbody> */
/* 	</table> */
/* </div>*/
/* {% endblock %}*/
