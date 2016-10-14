<?php

/* player/viewPlayer.html.twig */
class __TwigTemplate_11d32ad948a309184eea955910e3fcdc87971777091a97ca4bc53ad63b34d0db extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base/base.html.twig", "player/viewPlayer.html.twig", 1);
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
        $__internal_27d0bce4a284cce48bc19b28581dc2ef42fdf943ff73cb8d93e7d556e70ef166 = $this->env->getExtension("native_profiler");
        $__internal_27d0bce4a284cce48bc19b28581dc2ef42fdf943ff73cb8d93e7d556e70ef166->enter($__internal_27d0bce4a284cce48bc19b28581dc2ef42fdf943ff73cb8d93e7d556e70ef166_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "player/viewPlayer.html.twig"));

        // line 2
        $context["active"] = 4;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_27d0bce4a284cce48bc19b28581dc2ef42fdf943ff73cb8d93e7d556e70ef166->leave($__internal_27d0bce4a284cce48bc19b28581dc2ef42fdf943ff73cb8d93e7d556e70ef166_prof);

    }

    // line 3
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1392e62024f88fef31421c479d08a0492b5f73057edd56b7cbd4e3fb71aa8994 = $this->env->getExtension("native_profiler");
        $__internal_1392e62024f88fef31421c479d08a0492b5f73057edd56b7cbd4e3fb71aa8994->enter($__internal_1392e62024f88fef31421c479d08a0492b5f73057edd56b7cbd4e3fb71aa8994_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
 \t\t\$(\"#fav\").click(function(){
 \t\t\tvar locale = \"";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "locale", array()), "html", null, true);
        echo "\";
\t\t\tvar url = Routing.generate(\"ajaxFriend\", {\"_locale\": locale, \"playerId\": ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["player"]) ? $context["player"] : $this->getContext($context, "player")), "id", array()), "html", null, true);
        echo "});
\t\t\t\$.ajax({url: url, success: function(result) {
\t\t\t}});
 \t\t})

 \t\t\$(\"#unFav\").click(function() {
 \t\t\tvar locale = \"";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "locale", array()), "html", null, true);
        echo "\";
\t\t\tvar url = Routing.generate(\"ajaxRemoveFriend\", {\"_locale\": locale, \"friendId\": ";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["player"]) ? $context["player"] : $this->getContext($context, "player")), "id", array()), "html", null, true);
        echo "});
\t\t\t\$.ajax({url: url, success: function(result) {
\t\t\t}});
 \t\t})
\t</script>

";
        
        $__internal_1392e62024f88fef31421c479d08a0492b5f73057edd56b7cbd4e3fb71aa8994->leave($__internal_1392e62024f88fef31421c479d08a0492b5f73057edd56b7cbd4e3fb71aa8994_prof);

    }

    // line 26
    public function block_body($context, array $blocks = array())
    {
        $__internal_93e8eb0322e9bf44af2241b8614183832e4ad1d8cdb4bb27212a37110ad91bfa = $this->env->getExtension("native_profiler");
        $__internal_93e8eb0322e9bf44af2241b8614183832e4ad1d8cdb4bb27212a37110ad91bfa->enter($__internal_93e8eb0322e9bf44af2241b8614183832e4ad1d8cdb4bb27212a37110ad91bfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 27
        $context["profile"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "profile"), "method");
        // line 28
        $context["idFriends"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "idFriends"), "method");
        // line 29
        $context["showFavorite"] = true;
        // line 30
        echo "\t<div class=\"container rounded-box\">
\t\t";
        // line 31
        $this->loadTemplate("player/templates/infoPlayer.html.twig", "player/viewPlayer.html.twig", 31)->display(array_merge($context, array("player" => (isset($context["player"]) ? $context["player"] : $this->getContext($context, "player")))));
        // line 32
        echo "\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["idFriends"]) ? $context["idFriends"] : $this->getContext($context, "idFriends")));
        foreach ($context['_seq'] as $context["_key"] => $context["idFriend"]) {
            // line 33
            echo "\t\t\t";
            if (($context["idFriend"] == $this->getAttribute((isset($context["player"]) ? $context["player"] : $this->getContext($context, "player")), "id", array()))) {
                // line 34
                echo "\t\t\t\t<button id=\"unFav\">Unfavorite</button>
\t\t\t\t";
                // line 35
                $context["showFavorite"] = false;
                // line 36
                echo "\t\t\t";
            }
            // line 37
            echo "\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['idFriend'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "\t\t";
        if ((isset($context["showFavorite"]) ? $context["showFavorite"] : $this->getContext($context, "showFavorite"))) {
            // line 39
            echo "\t\t\t\t<button id=\"fav\">Favorite</button>
\t\t";
        }
        // line 41
        echo "\t</div>
";
        
        $__internal_93e8eb0322e9bf44af2241b8614183832e4ad1d8cdb4bb27212a37110ad91bfa->leave($__internal_93e8eb0322e9bf44af2241b8614183832e4ad1d8cdb4bb27212a37110ad91bfa_prof);

    }

    public function getTemplateName()
    {
        return "player/viewPlayer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 41,  137 => 39,  134 => 38,  128 => 37,  125 => 36,  123 => 35,  120 => 34,  117 => 33,  112 => 32,  110 => 31,  107 => 30,  105 => 29,  103 => 28,  101 => 27,  95 => 26,  81 => 19,  77 => 18,  68 => 12,  64 => 11,  57 => 7,  53 => 6,  49 => 5,  44 => 4,  38 => 3,  31 => 1,  29 => 2,  11 => 1,);
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
/*  		$("#fav").click(function(){*/
/*  			var locale = "{{ app.request.locale }}";*/
/* 			var url = Routing.generate("ajaxFriend", {"_locale": locale, "playerId": {{ player.id }}});*/
/* 			$.ajax({url: url, success: function(result) {*/
/* 			}});*/
/*  		})*/
/* */
/*  		$("#unFav").click(function() {*/
/*  			var locale = "{{ app.request.locale }}";*/
/* 			var url = Routing.generate("ajaxRemoveFriend", {"_locale": locale, "friendId": {{ player.id }}});*/
/* 			$.ajax({url: url, success: function(result) {*/
/* 			}});*/
/*  		})*/
/* 	</script>*/
/* */
/* {% endblock %}*/
/* {% block body %}*/
/* {% set profile = app.session.get('profile') %}*/
/* {% set idFriends = app.session.get('idFriends') %}*/
/* {% set showFavorite = true %}*/
/* 	<div class="container rounded-box">*/
/* 		{% include 'player/templates/infoPlayer.html.twig' with {'player': player} %}*/
/* 		{% for idFriend in idFriends %}*/
/* 			{% if idFriend == player.id %}*/
/* 				<button id="unFav">Unfavorite</button>*/
/* 				{% set showFavorite = false %}*/
/* 			{% endif %}*/
/* 		{% endfor %}*/
/* 		{% if showFavorite %}*/
/* 				<button id="fav">Favorite</button>*/
/* 		{% endif %}*/
/* 	</div>*/
/* {% endblock %}*/
