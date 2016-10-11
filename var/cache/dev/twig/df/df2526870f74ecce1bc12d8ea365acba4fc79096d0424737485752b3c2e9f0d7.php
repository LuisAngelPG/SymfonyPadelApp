<?php

/* tournament/newTournament.html.twig */
class __TwigTemplate_28b2665d699af8d79f554f83038402674c3bbc4c45d0432d5ca70047880ac844 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base/base.html.twig", "tournament/newTournament.html.twig", 1);
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
        $__internal_c3703ae382488f9a6f00ce96c2c5fa4eac417eb33313e4c671238d0de11ef23f = $this->env->getExtension("native_profiler");
        $__internal_c3703ae382488f9a6f00ce96c2c5fa4eac417eb33313e4c671238d0de11ef23f->enter($__internal_c3703ae382488f9a6f00ce96c2c5fa4eac417eb33313e4c671238d0de11ef23f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tournament/newTournament.html.twig"));

        // line 2
        $context["active"] = 2;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c3703ae382488f9a6f00ce96c2c5fa4eac417eb33313e4c671238d0de11ef23f->leave($__internal_c3703ae382488f9a6f00ce96c2c5fa4eac417eb33313e4c671238d0de11ef23f_prof);

    }

    // line 3
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_36d36f059349f9e221216857e00f14dac835bd73e02fd911803b716c03af70e7 = $this->env->getExtension("native_profiler");
        $__internal_36d36f059349f9e221216857e00f14dac835bd73e02fd911803b716c03af70e7->enter($__internal_36d36f059349f9e221216857e00f14dac835bd73e02fd911803b716c03af70e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
\t<script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
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
        echo "\t
\t<script>
\t\tvar optionsIndividual = {
\t\t\t\"4 Players\": \"4\",
\t\t\t\"5 Players\": \"5\",
\t\t\t\"6 Players\": \"6\",
\t\t\t\"8 Players, 2 Courts\": \"8,2\",
\t\t\t\"12 Players, 3 Courts\": \"12,3\",
\t\t\t\"16 Players, 4 Courts\": \"16,4\"
\t\t};

\t\tvar optionsMixed = {
\t\t\t\"4 Players\": \"4\",
\t\t\t\"6 Players\": \"6\",
\t\t\t\"8 Players, 2 Courts\": \"8,2\",
\t\t\t\"12 Players, 3 Courts\": \"12,3\",
\t\t\t\"16 Players, 4 Courts\": \"16,4\"
\t\t};

\t\tvar optionsPartners = {
\t\t\t\"4 Partners, 2 Courts\": \"4,2\",
\t\t\t\"5 Partners, 2 Courts\": \"5,2\",
\t\t\t\"6 Partners, 3 Courts\": \"6,3\",
\t\t\t\"7 Partners, 3 Courts\": \"7,3\",
\t\t\t\"8 Partners, 4 Courts\": \"8,4\",
\t\t\t\"9 Partners, 4 Courts\": \"9,4\",
\t\t\t\"10 Partners, 5 Courts\": \"10,5\",
\t\t\t\"11 Partners, 5 Courts\": \"11,5\",
\t\t\t\"12 Partners, 6 Courts\": \"12,6\",
\t\t\t\"13 Partners, 6 Courts\": \"13,6\",
\t\t\t\"14 Partners, 7 Courts\": \"14,7\",
\t\t};

\t\tfunction addPlayer() {
    \t\tvar \$collectionHolder = \$('#sortable');
   \t\t\t\$collectionHolder.data('index', \$collectionHolder.find(':input').length);

   \t\t\tvar prototype = \$collectionHolder.data('prototype');

\t\t    // get the new ind
\t\t    var index = \$collectionHolder.data('index');

\t\t    // Replace '__name__' in the prototype's HTML to
\t\t    // instead be a number based on how many items we have
\t\t    var newForm = prototype.replace(/__name__/g, index);

\t\t    // increase the index with one for the next item
\t\t    \$collectionHolder.data('index', index + 1);

\t\t    // Display the form in the page in an li, before the \"Add a tag\" link li
\t\t    
\t\t    var \$div = \$('<div></div>').append(newForm);
\t\t    var \$newFormLi = \$(\"<li class='ui-state-default' id=\"+index+\"></li>\").append(\$div);
\t\t    \$collectionHolder.append(\$newFormLi);


\t\t}

\t\tfunction removeAll() {
\t\t\tvar \$collectionHolder = \$('#sortable');
\t\t\t\$collectionHolder.empty();
\t\t}

\t\tfunction updatePlayersCourts() {
\t\t\tvar type = \$(\"#tournament_type\");
\t\t\tvar select = \$(\"#tournament_playersCourts\");
\t\t\tvar selected = type.find(\":selected\").text();
\t\t\tselect.empty();

\t\t\tswitch(selected) {
\t\t\t\tcase \"Individual\":\t
\t\t\t\t\t\$.each(optionsIndividual, function(key,value) {
\t\t\t\t  \tselect.append(\$(\"<option></option>\")
\t\t\t\t    \t.attr(\"value\", value).text(key));
\t\t\t\t\t});
\t\t\t\t\tbreak;

\t\t\t\tcase \"Mixed\":
\t\t\t\t\t\$.each(optionsMixed, function(key,value) {
\t\t\t\t  \tselect.append(\$(\"<option></option>\")
\t\t\t\t    \t.attr(\"value\", value).text(key));
\t\t\t\t\t});
\t\t\t\t\tbreak;

\t\t\t\tcase \"Partners\":
\t\t\t\t\t\$.each(optionsPartners, function(key,value) {
\t\t\t\t  \tselect.append(\$(\"<option></option>\")
\t\t\t\t    \t.attr(\"value\", value).text(key));
\t\t\t\t\t});
\t\t\t\t\tbreak;
\t\t\t}
\t\t\tupdatePlayers();
\t\t}

\t\tfunction updatePlayers() {
\t\t\tvar select = \$(\"#tournament_playersCourts\");
\t\t\tvar type = \$(\"#tournament_type\").find(\":selected\").text();
\t\t\tvar selected = select.find(\":selected\").val();
\t\t\tvar players = selected.split(\",\")[0];
\t\t\tif (type.localeCompare(\"Partners\") == 0) {
\t\t\t\tplayers = players * 2;
\t\t\t}
\t\t   \tremoveAll();
\t\t    for (i=0;i<players;i++) {
\t\t    \taddPlayer();
\t\t    }
\t\t}

\t\tfunction addSpectator() {
\t\t\tvar \$collectionHolder = \$('#spectators_container');
   \t\t\t\$collectionHolder.data('index', \$collectionHolder.find(':input').length);

   \t\t\tvar prototype = \$collectionHolder.data('prototype');

\t\t    // get the new ind
\t\t    var index = \$collectionHolder.data('index');

\t\t    // Replace '__name__' in the prototype's HTML to
\t\t    // instead be a number based on how many items we have
\t\t    var newForm = prototype.replace(/__name__/g, index);

\t\t    // increase the index with one for the next item
\t\t    \$collectionHolder.data('index', index + 1);

\t\t    // Display the form in the page in an li, before the \"Add a tag\" link li
\t\t    var \$newFormLi = \$('<li></li>').append(newForm);
\t\t    \$collectionHolder.append(\$newFormLi);
\t\t    addDeleteSpectator(\$newFormLi);
\t\t}

\t\tfunction addDeleteSpectator(\$spectatorFormLi) {
\t\t    var \$removeFormA = \$('<button type=\"button\">X</button>');
\t\t    \$spectatorFormLi.append(\$removeFormA);

\t\t    \$removeFormA.on('click', function(e) {
\t\t        // prevent the link from creating a \"#\" on the URL
\t\t        e.preventDefault();

\t\t        // remove the li for the tag form
\t\t        \$spectatorFormLi.remove();
\t\t    });
\t\t}

\t\t\$( document ).ready(function() {
\t\t\tupdatePlayersCourts();
\t\t\tupdatePlayers();
\t\t})

\t\t\$('#tournament_playersCourts').on('change', function(event){
\t\t\tevent.preventDefault();
\t\t\tupdatePlayers() 
\t\t});

\t\t\$(\"#tournament_type\").change(function () {
\t\t\tupdatePlayersCourts();
\t\t});

\t  \t\$( function() {
\t   \t\t\$( \"#sortable\" ).sortable({
   \t\t        start: function(event, ui) {
\t       \t\t},
\t\t        update: function(event, ui) {
\t\t        }
\t\t    });
\t \t});
\t</script>

";
        
        $__internal_36d36f059349f9e221216857e00f14dac835bd73e02fd911803b716c03af70e7->leave($__internal_36d36f059349f9e221216857e00f14dac835bd73e02fd911803b716c03af70e7_prof);

    }

    // line 179
    public function block_body($context, array $blocks = array())
    {
        $__internal_cfca55cb3c292ed7ebc983a2fc197e1399e06183f8ec7edfa1550eeee95d6429 = $this->env->getExtension("native_profiler");
        $__internal_cfca55cb3c292ed7ebc983a2fc197e1399e06183f8ec7edfa1550eeee95d6429->enter($__internal_cfca55cb3c292ed7ebc983a2fc197e1399e06183f8ec7edfa1550eeee95d6429_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 180
        echo "
\t<div class=\"container rounded-box\">
\t\t";
        // line 182
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-1 col-md-offset-4\">
\t\t\t\t\t";
        // line 185
        echo $this->env->getExtension('translator')->getTranslator()->trans("Name", array(), "messages");
        // line 186
        echo "\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t";
        // line 188
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'widget');
        echo "
\t\t\t\t</div>
\t\t\t</div>\t
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-1 col-md-offset-4\">
\t\t\t\t\t";
        // line 193
        echo $this->env->getExtension('translator')->getTranslator()->trans("Date", array(), "messages");
        // line 194
        echo "\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t";
        // line 196
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'widget');
        echo "
\t\t\t\t</div>
\t\t\t</div>\t
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-1 col-md-offset-4\">
\t\t\t\t\t";
        // line 201
        echo $this->env->getExtension('translator')->getTranslator()->trans("Club", array(), "messages");
        // line 202
        echo "\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t";
        // line 204
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "club", array()), 'widget');
        echo "
\t\t\t\t</div>
\t\t\t</div>\t
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-1 col-md-offset-4\">
\t\t\t\t\t";
        // line 209
        echo $this->env->getExtension('translator')->getTranslator()->trans("Score", array(), "messages");
        // line 210
        echo "\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t";
        // line 212
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "scoring", array()), 'widget');
        echo "
\t\t\t\t</div>
\t\t\t</div>\t
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-1 col-md-offset-4\">
\t\t\t\t\t";
        // line 217
        echo $this->env->getExtension('translator')->getTranslator()->trans("Type", array(), "messages");
        // line 218
        echo "\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t";
        // line 220
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "type", array()), 'widget');
        echo "
\t\t\t\t</div>
\t\t\t</div>\t
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-1 col-md-offset-4\">
\t\t\t\t\t";
        // line 225
        echo $this->env->getExtension('translator')->getTranslator()->trans("Players", array(), "messages");
        // line 226
        echo "\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t";
        // line 228
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "playersCourts", array()), 'widget');
        echo "
\t\t\t\t</div>
\t\t\t</div>\t\t
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-3 col-md-offset-5\">
\t\t\t\t\t<ul id=\"sortable\" data-prototype=\"";
        // line 233
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "players", array()), "vars", array()), "prototype", array()), "player", array()), 'widget'), "html_attr");
        echo "\">
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>\t\t
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-1 col-md-offset-4\">
\t\t\t\t\tSpectators
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t<button type=\"button\" onclick=\"addSpectator()\">Add Spectator</button>
\t\t\t\t\t<div id=\"spectators_container\" data-prototype=\"";
        // line 243
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "spectators", array()), "vars", array()), "prototype", array()), "player", array()), 'widget'), "html_attr");
        echo "\">
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>\t\t
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-4 col-md-offset-4\">
\t\t\t\t\t<button id=\"saveTournament\" type=\"submit\" class=\"button\">";
        // line 249
        echo $this->env->getExtension('translator')->getTranslator()->trans("Save Tournament", array(), "messages");
        echo "</button>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
        // line 252
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'widget');
        echo "
\t\t";
        // line 253
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end', array("render_rest" => false));
        echo "
";
        
        $__internal_cfca55cb3c292ed7ebc983a2fc197e1399e06183f8ec7edfa1550eeee95d6429->leave($__internal_cfca55cb3c292ed7ebc983a2fc197e1399e06183f8ec7edfa1550eeee95d6429_prof);

    }

    public function getTemplateName()
    {
        return "tournament/newTournament.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  382 => 253,  378 => 252,  372 => 249,  363 => 243,  350 => 233,  342 => 228,  338 => 226,  336 => 225,  328 => 220,  324 => 218,  322 => 217,  314 => 212,  310 => 210,  308 => 209,  300 => 204,  296 => 202,  294 => 201,  286 => 196,  282 => 194,  280 => 193,  272 => 188,  268 => 186,  266 => 185,  260 => 182,  256 => 180,  250 => 179,  76 => 11,  62 => 9,  58 => 8,  53 => 6,  49 => 5,  44 => 4,  38 => 3,  31 => 1,  29 => 2,  11 => 1,);
    }
}
/* {% extends 'base/base.html.twig' %}*/
/* {% set active = 2 %}*/
/* {% block javascripts %}*/
/* 	{{ parent() }}*/
/* 	<script src="{{ asset('bundles/fosjsrouting/js/router.js') }}"></script>*/
/* 	<script src="{{ path('fos_js_routing_js', { callback: 'fos.Router.setData' }) }}"></script>*/
/* 	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>*/
/* 	{% javascripts '@AppBundle/*' output='js/compiled/main.js' %}*/
/* 		<script src="{{ asset('bundles/web/js/ajax.js') }}" type="text/javascript"></script>*/
/* 	{% endjavascripts %}*/
/* 	*/
/* 	<script>*/
/* 		var optionsIndividual = {*/
/* 			"4 Players": "4",*/
/* 			"5 Players": "5",*/
/* 			"6 Players": "6",*/
/* 			"8 Players, 2 Courts": "8,2",*/
/* 			"12 Players, 3 Courts": "12,3",*/
/* 			"16 Players, 4 Courts": "16,4"*/
/* 		};*/
/* */
/* 		var optionsMixed = {*/
/* 			"4 Players": "4",*/
/* 			"6 Players": "6",*/
/* 			"8 Players, 2 Courts": "8,2",*/
/* 			"12 Players, 3 Courts": "12,3",*/
/* 			"16 Players, 4 Courts": "16,4"*/
/* 		};*/
/* */
/* 		var optionsPartners = {*/
/* 			"4 Partners, 2 Courts": "4,2",*/
/* 			"5 Partners, 2 Courts": "5,2",*/
/* 			"6 Partners, 3 Courts": "6,3",*/
/* 			"7 Partners, 3 Courts": "7,3",*/
/* 			"8 Partners, 4 Courts": "8,4",*/
/* 			"9 Partners, 4 Courts": "9,4",*/
/* 			"10 Partners, 5 Courts": "10,5",*/
/* 			"11 Partners, 5 Courts": "11,5",*/
/* 			"12 Partners, 6 Courts": "12,6",*/
/* 			"13 Partners, 6 Courts": "13,6",*/
/* 			"14 Partners, 7 Courts": "14,7",*/
/* 		};*/
/* */
/* 		function addPlayer() {*/
/*     		var $collectionHolder = $('#sortable');*/
/*    			$collectionHolder.data('index', $collectionHolder.find(':input').length);*/
/* */
/*    			var prototype = $collectionHolder.data('prototype');*/
/* */
/* 		    // get the new ind*/
/* 		    var index = $collectionHolder.data('index');*/
/* */
/* 		    // Replace '__name__' in the prototype's HTML to*/
/* 		    // instead be a number based on how many items we have*/
/* 		    var newForm = prototype.replace(/__name__/g, index);*/
/* */
/* 		    // increase the index with one for the next item*/
/* 		    $collectionHolder.data('index', index + 1);*/
/* */
/* 		    // Display the form in the page in an li, before the "Add a tag" link li*/
/* 		    */
/* 		    var $div = $('<div></div>').append(newForm);*/
/* 		    var $newFormLi = $("<li class='ui-state-default' id="+index+"></li>").append($div);*/
/* 		    $collectionHolder.append($newFormLi);*/
/* */
/* */
/* 		}*/
/* */
/* 		function removeAll() {*/
/* 			var $collectionHolder = $('#sortable');*/
/* 			$collectionHolder.empty();*/
/* 		}*/
/* */
/* 		function updatePlayersCourts() {*/
/* 			var type = $("#tournament_type");*/
/* 			var select = $("#tournament_playersCourts");*/
/* 			var selected = type.find(":selected").text();*/
/* 			select.empty();*/
/* */
/* 			switch(selected) {*/
/* 				case "Individual":	*/
/* 					$.each(optionsIndividual, function(key,value) {*/
/* 				  	select.append($("<option></option>")*/
/* 				    	.attr("value", value).text(key));*/
/* 					});*/
/* 					break;*/
/* */
/* 				case "Mixed":*/
/* 					$.each(optionsMixed, function(key,value) {*/
/* 				  	select.append($("<option></option>")*/
/* 				    	.attr("value", value).text(key));*/
/* 					});*/
/* 					break;*/
/* */
/* 				case "Partners":*/
/* 					$.each(optionsPartners, function(key,value) {*/
/* 				  	select.append($("<option></option>")*/
/* 				    	.attr("value", value).text(key));*/
/* 					});*/
/* 					break;*/
/* 			}*/
/* 			updatePlayers();*/
/* 		}*/
/* */
/* 		function updatePlayers() {*/
/* 			var select = $("#tournament_playersCourts");*/
/* 			var type = $("#tournament_type").find(":selected").text();*/
/* 			var selected = select.find(":selected").val();*/
/* 			var players = selected.split(",")[0];*/
/* 			if (type.localeCompare("Partners") == 0) {*/
/* 				players = players * 2;*/
/* 			}*/
/* 		   	removeAll();*/
/* 		    for (i=0;i<players;i++) {*/
/* 		    	addPlayer();*/
/* 		    }*/
/* 		}*/
/* */
/* 		function addSpectator() {*/
/* 			var $collectionHolder = $('#spectators_container');*/
/*    			$collectionHolder.data('index', $collectionHolder.find(':input').length);*/
/* */
/*    			var prototype = $collectionHolder.data('prototype');*/
/* */
/* 		    // get the new ind*/
/* 		    var index = $collectionHolder.data('index');*/
/* */
/* 		    // Replace '__name__' in the prototype's HTML to*/
/* 		    // instead be a number based on how many items we have*/
/* 		    var newForm = prototype.replace(/__name__/g, index);*/
/* */
/* 		    // increase the index with one for the next item*/
/* 		    $collectionHolder.data('index', index + 1);*/
/* */
/* 		    // Display the form in the page in an li, before the "Add a tag" link li*/
/* 		    var $newFormLi = $('<li></li>').append(newForm);*/
/* 		    $collectionHolder.append($newFormLi);*/
/* 		    addDeleteSpectator($newFormLi);*/
/* 		}*/
/* */
/* 		function addDeleteSpectator($spectatorFormLi) {*/
/* 		    var $removeFormA = $('<button type="button">X</button>');*/
/* 		    $spectatorFormLi.append($removeFormA);*/
/* */
/* 		    $removeFormA.on('click', function(e) {*/
/* 		        // prevent the link from creating a "#" on the URL*/
/* 		        e.preventDefault();*/
/* */
/* 		        // remove the li for the tag form*/
/* 		        $spectatorFormLi.remove();*/
/* 		    });*/
/* 		}*/
/* */
/* 		$( document ).ready(function() {*/
/* 			updatePlayersCourts();*/
/* 			updatePlayers();*/
/* 		})*/
/* */
/* 		$('#tournament_playersCourts').on('change', function(event){*/
/* 			event.preventDefault();*/
/* 			updatePlayers() */
/* 		});*/
/* */
/* 		$("#tournament_type").change(function () {*/
/* 			updatePlayersCourts();*/
/* 		});*/
/* */
/* 	  	$( function() {*/
/* 	   		$( "#sortable" ).sortable({*/
/*    		        start: function(event, ui) {*/
/* 	       		},*/
/* 		        update: function(event, ui) {*/
/* 		        }*/
/* 		    });*/
/* 	 	});*/
/* 	</script>*/
/* */
/* {% endblock %}*/
/* {% block body %}*/
/* */
/* 	<div class="container rounded-box">*/
/* 		{{form_start(form)}}*/
/* 			<div class="row">*/
/* 				<div class="col-md-1 col-md-offset-4">*/
/* 					{% trans %}Name{% endtrans %}*/
/* 				</div>*/
/* 				<div class="col-md-3">*/
/* 					{{form_widget(form.name)}}*/
/* 				</div>*/
/* 			</div>	*/
/* 			<div class="row">*/
/* 				<div class="col-md-1 col-md-offset-4">*/
/* 					{% trans %}Date{% endtrans %}*/
/* 				</div>*/
/* 				<div class="col-md-3">*/
/* 					{{form_widget(form.date)}}*/
/* 				</div>*/
/* 			</div>	*/
/* 			<div class="row">*/
/* 				<div class="col-md-1 col-md-offset-4">*/
/* 					{% trans %}Club{% endtrans %}*/
/* 				</div>*/
/* 				<div class="col-md-3">*/
/* 					{{form_widget(form.club)}}*/
/* 				</div>*/
/* 			</div>	*/
/* 			<div class="row">*/
/* 				<div class="col-md-1 col-md-offset-4">*/
/* 					{% trans %}Score{% endtrans %}*/
/* 				</div>*/
/* 				<div class="col-md-3">*/
/* 					{{form_widget(form.scoring)}}*/
/* 				</div>*/
/* 			</div>	*/
/* 			<div class="row">*/
/* 				<div class="col-md-1 col-md-offset-4">*/
/* 					{% trans %}Type{% endtrans %}*/
/* 				</div>*/
/* 				<div class="col-md-3">*/
/* 					{{form_widget(form.type)}}*/
/* 				</div>*/
/* 			</div>	*/
/* 			<div class="row">*/
/* 				<div class="col-md-1 col-md-offset-4">*/
/* 					{% trans %}Players{% endtrans %}*/
/* 				</div>*/
/* 				<div class="col-md-3">*/
/* 					{{form_widget(form.playersCourts)}}*/
/* 				</div>*/
/* 			</div>		*/
/* 			<div class="row">*/
/* 				<div class="col-md-3 col-md-offset-5">*/
/* 					<ul id="sortable" data-prototype="{{ form_widget(form.players.vars.prototype.player)|e('html_attr') }}">*/
/* 					</ul>*/
/* 				</div>*/
/* 			</div>		*/
/* 			<div class="row">*/
/* 				<div class="col-md-1 col-md-offset-4">*/
/* 					Spectators*/
/* 				</div>*/
/* 				<div class="col-md-3">*/
/* 					<button type="button" onclick="addSpectator()">Add Spectator</button>*/
/* 					<div id="spectators_container" data-prototype="{{ form_widget(form.spectators.vars.prototype.player)|e('html_attr') }}">*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>		*/
/* 			<div class="row">*/
/* 				<div class="col-md-4 col-md-offset-4">*/
/* 					<button id="saveTournament" type="submit" class="button">{% trans %}Save Tournament{% endtrans %}</button>*/
/* 				</div>*/
/* 			</div>*/
/* 			{{ form_widget(form._token) }}*/
/* 		{{ form_end(form, {'render_rest': false}) }}*/
/* {% endblock %}*/
