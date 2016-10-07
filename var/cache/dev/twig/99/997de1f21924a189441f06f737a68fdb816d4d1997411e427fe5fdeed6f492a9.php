<?php

/* club/searchClub.html.twig */
class __TwigTemplate_2e0e09962ac81dc9b7966901a24ee455b2211a8ba2f986f1c22d535467c9165e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base/base.html.twig", "club/searchClub.html.twig", 1);
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
        $__internal_e8c32f023656e1914ece188f196eec30fe743379c4be225f16b562ec261bbfab = $this->env->getExtension("native_profiler");
        $__internal_e8c32f023656e1914ece188f196eec30fe743379c4be225f16b562ec261bbfab->enter($__internal_e8c32f023656e1914ece188f196eec30fe743379c4be225f16b562ec261bbfab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "club/searchClub.html.twig"));

        // line 2
        $context["active"] = 3;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e8c32f023656e1914ece188f196eec30fe743379c4be225f16b562ec261bbfab->leave($__internal_e8c32f023656e1914ece188f196eec30fe743379c4be225f16b562ec261bbfab_prof);

    }

    // line 3
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6a2dcdd0a4a9df601525a8924bd3837515f5f797a7de9fa32ef6199561c91be8 = $this->env->getExtension("native_profiler");
        $__internal_6a2dcdd0a4a9df601525a8924bd3837515f5f797a7de9fa32ef6199561c91be8->enter($__internal_6a2dcdd0a4a9df601525a8924bd3837515f5f797a7de9fa32ef6199561c91be8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
\t\t\tvar clubNames = [];
\t\t\t";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["allClubs"]) ? $context["allClubs"] : $this->getContext($context, "allClubs")));
        foreach ($context['_seq'] as $context["_key"] => $context["club"]) {
            // line 15
            echo "\t\t\t\tclubNames.push({
\t\t\t\t'id': '";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["club"], "id", array()), "html", null, true);
            echo "',
\t\t\t\t'value': '";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["club"], "name", array()), "html", null, true);
            echo "',
\t\t\t\t'image': ";
            // line 18
            if ($this->getAttribute($context["club"], "image", array())) {
                // line 19
                echo "\t\t\t\t\t\t\t\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(("bundles/web/img/clubs/" . $this->getAttribute($context["club"], "image", array()))), "html", null, true);
                echo "\"
\t\t\t\t\t\t ";
            } else {
                // line 21
                echo "\t\t\t\t\t\t \t\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/web/img/clubs/default.jpg"), "html", null, true);
                echo "\"
\t\t\t\t\t\t ";
            }
            // line 23
            echo "\t\t\t\t});
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['club'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "
\t\t    \$( \"#search\" ).autocomplete({
\t\t    \tsource: function(request, response) {
\t        \t\tvar results = \$.ui.autocomplete.filter(clubNames, request.term);
\t       \t\t\tresponse(results.slice(0, 5));
\t    \t\t},
\t    \t\tselect: function( event, ui ) {
\t\t\t\t\twindow.location.href = \"";
        // line 32
        echo $this->env->getExtension('routing')->getPath("viewClub");
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
        
        $__internal_6a2dcdd0a4a9df601525a8924bd3837515f5f797a7de9fa32ef6199561c91be8->leave($__internal_6a2dcdd0a4a9df601525a8924bd3837515f5f797a7de9fa32ef6199561c91be8_prof);

    }

    // line 42
    public function block_body($context, array $blocks = array())
    {
        $__internal_e395cc5f3fd4243aba993d4b5fb41740b7dcc22ad80619dbfc07710aa7504522 = $this->env->getExtension("native_profiler");
        $__internal_e395cc5f3fd4243aba993d4b5fb41740b7dcc22ad80619dbfc07710aa7504522->enter($__internal_e395cc5f3fd4243aba993d4b5fb41740b7dcc22ad80619dbfc07710aa7504522_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 43
        $context["profile"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "profile"), "method");
        // line 44
        echo "<div class=\"container rounded-box\">
\t<form class=\"\" method=\"get\" action=\"";
        // line 45
        echo $this->env->getExtension('routing')->getPath("searchClub");
        echo "\">
\t    <div class=\"form-group\">
\t        <input id=\"search\" class=\"form-control\" type=\"text\" placeholder=\"";
        // line 47
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
        // line 55
        echo $this->env->getExtension('translator')->getTranslator()->trans("Name", array(), "messages");
        echo "</th> 
\t\t\t    <th>";
        // line 56
        echo $this->env->getExtension('translator')->getTranslator()->trans("Address", array(), "messages");
        echo "</th> 
\t\t\t    <th>";
        // line 57
        echo $this->env->getExtension('translator')->getTranslator()->trans("Email", array(), "messages");
        echo "</th> 
\t\t\t    <th id=\"phone\">";
        // line 58
        echo $this->env->getExtension('translator')->getTranslator()->trans("Phone", array(), "messages");
        echo "</th> 
\t\t\t    <th>Web</th>
\t\t\t</tr> 
\t\t</thead> 

\t\t<tbody> 
\t\t\t";
        // line 64
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["favClubs"]) ? $context["favClubs"] : $this->getContext($context, "favClubs")));
        foreach ($context['_seq'] as $context["_key"] => $context["club"]) {
            // line 65
            echo "\t\t\t\t<tr>
\t\t\t\t\t<td><a href=\"";
            // line 66
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("viewClub", array("clubId" => $this->getAttribute($context["club"], "id", array()))), "html", null, true);
            echo "\">
\t\t\t\t\t\t<img class=\"club-photo-list\" src=
\t\t\t\t\t\t\t";
            // line 68
            if ($this->getAttribute($context["club"], "image", array())) {
                // line 69
                echo "\t\t\t\t\t\t\t\t\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(("bundles/web/img/clubs/" . $this->getAttribute($context["club"], "image", array()))), "html", null, true);
                echo "\"
\t\t\t\t\t\t\t ";
            } else {
                // line 71
                echo "\t\t\t\t\t\t \t\t\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/web/img/clubs/default.jpg"), "html", null, true);
                echo "\"
\t\t\t\t\t\t\t ";
            }
            // line 73
            echo "\t\t\t\t\t\t/>
\t\t\t\t\t</a></td>
\t\t\t\t\t<td><a href=\"";
            // line 75
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("viewClub", array("clubId" => $this->getAttribute($context["club"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["club"], "name", array()), "html", null, true);
            echo "</a></td>
\t\t\t\t\t<td>";
            // line 76
            echo twig_escape_filter($this->env, $this->getAttribute($context["club"], "address", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 77
            echo twig_escape_filter($this->env, $this->getAttribute($context["club"], "email", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t<td><div id=\"phoneNumber\">";
            // line 78
            echo twig_escape_filter($this->env, $this->getAttribute($context["club"], "phoneNumber", array()), "html", null, true);
            echo "</div></td>
\t\t\t\t\t<td>";
            // line 79
            echo twig_escape_filter($this->env, $this->getAttribute($context["club"], "url", array()), "html", null, true);
            echo "</td>
\t\t\t\t</tr>\t
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['club'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
        echo "\t\t</tbody> 
\t</table> 
</div>
";
        
        $__internal_e395cc5f3fd4243aba993d4b5fb41740b7dcc22ad80619dbfc07710aa7504522->leave($__internal_e395cc5f3fd4243aba993d4b5fb41740b7dcc22ad80619dbfc07710aa7504522_prof);

    }

    public function getTemplateName()
    {
        return "club/searchClub.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  231 => 82,  222 => 79,  218 => 78,  214 => 77,  210 => 76,  204 => 75,  200 => 73,  194 => 71,  188 => 69,  186 => 68,  181 => 66,  178 => 65,  174 => 64,  165 => 58,  161 => 57,  157 => 56,  153 => 55,  142 => 47,  137 => 45,  134 => 44,  132 => 43,  126 => 42,  109 => 32,  100 => 25,  93 => 23,  87 => 21,  81 => 19,  79 => 18,  75 => 17,  71 => 16,  68 => 15,  64 => 14,  54 => 7,  49 => 5,  44 => 4,  38 => 3,  31 => 1,  29 => 2,  11 => 1,);
    }
}
/* {% extends 'base/base.html.twig' %}*/
/* {% set active = 3 %}*/
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
/* 			var clubNames = [];*/
/* 			{% for club in allClubs %}*/
/* 				clubNames.push({*/
/* 				'id': '{{club.id}}',*/
/* 				'value': '{{club.name}}',*/
/* 				'image': {% if club.image %}*/
/* 							"{{ asset('bundles/web/img/clubs/' ~ club.image) }}"*/
/* 						 {% else %}*/
/* 						 	"{{ asset('bundles/web/img/clubs/default.jpg') }}"*/
/* 						 {% endif %}*/
/* 				});*/
/* 			{% endfor %}*/
/* */
/* 		    $( "#search" ).autocomplete({*/
/* 		    	source: function(request, response) {*/
/* 	        		var results = $.ui.autocomplete.filter(clubNames, request.term);*/
/* 	       			response(results.slice(0, 5));*/
/* 	    		},*/
/* 	    		select: function( event, ui ) {*/
/* 					window.location.href = "{{ path('viewClub') }}/" + ui.item.id; */
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
/* 			    <th>{% trans %}Address{% endtrans %}</th> */
/* 			    <th>{% trans %}Email{% endtrans %}</th> */
/* 			    <th id="phone">{% trans %}Phone{% endtrans %}</th> */
/* 			    <th>Web</th>*/
/* 			</tr> */
/* 		</thead> */
/* */
/* 		<tbody> */
/* 			{% for club in favClubs %}*/
/* 				<tr>*/
/* 					<td><a href="{{ path("viewClub", {"clubId": club.id}) }}">*/
/* 						<img class="club-photo-list" src=*/
/* 							{% if club.image %}*/
/* 								"{{ asset('bundles/web/img/clubs/' ~ club.image) }}"*/
/* 							 {% else %}*/
/* 						 		"{{ asset('bundles/web/img/clubs/default.jpg') }}"*/
/* 							 {% endif %}*/
/* 						/>*/
/* 					</a></td>*/
/* 					<td><a href="{{ path("viewClub", {"clubId": club.id}) }}">{{club.name}}</a></td>*/
/* 					<td>{{club.address}}</td>*/
/* 					<td>{{club.email}}</td>*/
/* 					<td><div id="phoneNumber">{{club.phoneNumber}}</div></td>*/
/* 					<td>{{club.url}}</td>*/
/* 				</tr>	*/
/* 			{% endfor %}*/
/* 		</tbody> */
/* 	</table> */
/* </div>*/
/* {% endblock %}*/
