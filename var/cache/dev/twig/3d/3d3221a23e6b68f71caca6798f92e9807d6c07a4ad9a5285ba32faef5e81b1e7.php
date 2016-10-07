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
        $__internal_7a6d386d131db359fc4f502a83a47116c78b2b51bb07f7259a097003d1a3f611 = $this->env->getExtension("native_profiler");
        $__internal_7a6d386d131db359fc4f502a83a47116c78b2b51bb07f7259a097003d1a3f611->enter($__internal_7a6d386d131db359fc4f502a83a47116c78b2b51bb07f7259a097003d1a3f611_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "player/viewPlayer.html.twig"));

        // line 2
        $context["active"] = 4;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7a6d386d131db359fc4f502a83a47116c78b2b51bb07f7259a097003d1a3f611->leave($__internal_7a6d386d131db359fc4f502a83a47116c78b2b51bb07f7259a097003d1a3f611_prof);

    }

    // line 3
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d550593f6ca359b0f85cab91c6850035194a8f47b94cde97a7a9f4e8335ee266 = $this->env->getExtension("native_profiler");
        $__internal_d550593f6ca359b0f85cab91c6850035194a8f47b94cde97a7a9f4e8335ee266->enter($__internal_d550593f6ca359b0f85cab91c6850035194a8f47b94cde97a7a9f4e8335ee266_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
 \t\t\$(\"#fav\").click(function(){
 \t\t\tvar locale = \"";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "locale", array()), "html", null, true);
        echo "\";
\t\t\tvar url = Routing.generate(\"ajaxFriend\", {\"_locale\": locale, \"playerId\": ";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["player"]) ? $context["player"] : $this->getContext($context, "player")), "id", array()), "html", null, true);
        echo "});
\t\t\t\$.ajax({url: url, success: function(result) {
\t\t\t}});
 \t\t})

 \t\t\$(\"#unFav\").click(function() {
 \t\t\tvar locale = \"";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "locale", array()), "html", null, true);
        echo "\";
\t\t\tvar url = Routing.generate(\"ajaxRemoveFriend\", {\"_locale\": locale, \"friendId\": ";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["player"]) ? $context["player"] : $this->getContext($context, "player")), "id", array()), "html", null, true);
        echo "});
\t\t\t\$.ajax({url: url, success: function(result) {
\t\t\t}});
 \t\t})
\t</script>

";
        
        $__internal_d550593f6ca359b0f85cab91c6850035194a8f47b94cde97a7a9f4e8335ee266->leave($__internal_d550593f6ca359b0f85cab91c6850035194a8f47b94cde97a7a9f4e8335ee266_prof);

    }

    // line 28
    public function block_body($context, array $blocks = array())
    {
        $__internal_422cab57f22495e527daa867c91d724e97cc58bf10ec77f3271a08acf174417a = $this->env->getExtension("native_profiler");
        $__internal_422cab57f22495e527daa867c91d724e97cc58bf10ec77f3271a08acf174417a->enter($__internal_422cab57f22495e527daa867c91d724e97cc58bf10ec77f3271a08acf174417a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 29
        $context["profile"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "profile"), "method");
        // line 30
        $context["idFriends"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "idFriends"), "method");
        // line 31
        $context["showFavorite"] = true;
        // line 32
        echo "\t<div class=\"container rounded-box\">
\t\t";
        // line 33
        $this->loadTemplate("player/templates/infoPlayer.html.twig", "player/viewPlayer.html.twig", 33)->display(array_merge($context, array("player" => (isset($context["player"]) ? $context["player"] : $this->getContext($context, "player")))));
        // line 34
        echo "\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["idFriends"]) ? $context["idFriends"] : $this->getContext($context, "idFriends")));
        foreach ($context['_seq'] as $context["_key"] => $context["idFriend"]) {
            // line 35
            echo "\t\t\t";
            if (($context["idFriend"] == $this->getAttribute((isset($context["player"]) ? $context["player"] : $this->getContext($context, "player")), "id", array()))) {
                // line 36
                echo "\t\t\t\t<button id=\"unFav\">Unfavorite</button>
\t\t\t\t";
                // line 37
                $context["showFavorite"] = false;
                // line 38
                echo "\t\t\t";
            }
            // line 39
            echo "\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['idFriend'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "\t\t";
        if ((isset($context["showFavorite"]) ? $context["showFavorite"] : $this->getContext($context, "showFavorite"))) {
            // line 41
            echo "\t\t\t\t<button id=\"fav\">Favorite</button>
\t\t";
        }
        // line 43
        echo "\t</div>
";
        
        $__internal_422cab57f22495e527daa867c91d724e97cc58bf10ec77f3271a08acf174417a->leave($__internal_422cab57f22495e527daa867c91d724e97cc58bf10ec77f3271a08acf174417a_prof);

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
        return array (  166 => 43,  162 => 41,  159 => 40,  153 => 39,  150 => 38,  148 => 37,  145 => 36,  142 => 35,  137 => 34,  135 => 33,  132 => 32,  130 => 31,  128 => 30,  126 => 29,  120 => 28,  106 => 21,  102 => 20,  93 => 14,  89 => 13,  84 => 10,  78 => 8,  74 => 7,  69 => 6,  62 => 8,  58 => 7,  53 => 6,  49 => 5,  44 => 4,  38 => 3,  31 => 1,  29 => 2,  11 => 1,);
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
