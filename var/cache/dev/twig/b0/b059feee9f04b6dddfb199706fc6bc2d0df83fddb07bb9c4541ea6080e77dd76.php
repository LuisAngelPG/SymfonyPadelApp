<?php

/* player/templates/infoPlayer.html.twig */
class __TwigTemplate_32e29cdcef79479bd06077b468cbf000c672c0c65593b92de99e3fae7d455a51 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3b6a59ba5091991b3d2eede8d5e3a12d0fc9fbdf2b90125c4e8b1a22514d61ec = $this->env->getExtension("native_profiler");
        $__internal_3b6a59ba5091991b3d2eede8d5e3a12d0fc9fbdf2b90125c4e8b1a22514d61ec->enter($__internal_3b6a59ba5091991b3d2eede8d5e3a12d0fc9fbdf2b90125c4e8b1a22514d61ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "player/templates/infoPlayer.html.twig"));

        // line 1
        echo "<div class=\"row\">
\t<div class=\"col-md-4 col-md-offset-4 user-photo\">
\t\t<img id=\"avatar\" src=
\t\t";
        // line 4
        if ($this->getAttribute((isset($context["player"]) ? $context["player"] : $this->getContext($context, "player")), "image", array())) {
            echo "\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(("bundles/web/img/usersProfiles/" . $this->getAttribute((isset($context["player"]) ? $context["player"] : $this->getContext($context, "player")), "image", array()))), "html", null, true);
            echo "\"";
        } else {
            echo "\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/web/img/usersProfiles/default.png"), "html", null, true);
            echo "\"";
        }
        // line 5
        echo "\t\t/><br />
\t\t<div id=\"0\"></div>
\t</div>
</div>
<br />

<div class=\"row user-info\">
\t<div class=\"col-md-1 col-md-offset-4\">
\t\t";
        // line 13
        echo $this->env->getExtension('translator')->getTranslator()->trans("Name", array(), "messages");
        // line 14
        echo "\t</div>
\t<div class=\"col-md-3\">
\t\t<div class=\"form-group input-group-sm\">
\t\t\t<div id=\"2\">";
        // line 17
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["player"]) ? $context["player"] : $this->getContext($context, "player")), "name", array())), "html", null, true);
        echo "</div>
\t\t</div>
\t</div>
</div>

<div class=\"row user-info\">
\t<div class=\"col-md-1 col-md-offset-4\">
\t\t";
        // line 24
        echo $this->env->getExtension('translator')->getTranslator()->trans("Phone", array(), "messages");
        // line 25
        echo "\t</div>
\t<div class=\"col-md-3\">
\t\t<div class=\"form-group input-group-sm\">
\t\t\t<div id=\"4\">";
        // line 28
        if ($this->getAttribute((isset($context["player"]) ? $context["player"] : $this->getContext($context, "player")), "phoneNumber", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["player"]) ? $context["player"] : $this->getContext($context, "player")), "phoneNumber", array()), "html", null, true);
        } else {
            echo "&nbsp";
        }
        echo "</div>
\t\t</div>
\t</div>
</div>

<div class=\"row user-info\">
\t<div class=\"col-md-1 col-md-offset-4\">
\t\t";
        // line 35
        echo $this->env->getExtension('translator')->getTranslator()->trans("Age", array(), "messages");
        // line 36
        echo "\t</div>
\t<div class=\"col-md-3\">
\t\t<div class=\"form-group input-group-sm\">
\t\t\t<div id=\"5\">";
        // line 39
        if ($this->getAttribute((isset($context["player"]) ? $context["player"] : $this->getContext($context, "player")), "age", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["player"]) ? $context["player"] : $this->getContext($context, "player")), "age", array()), "html", null, true);
        } else {
            echo "&nbsp";
        }
        echo "</div>
\t\t</div>
\t</div>
</div>

<div class=\"row user-info\">
\t<div class=\"col-md-1 col-md-offset-4\">
\t\t";
        // line 46
        echo $this->env->getExtension('translator')->getTranslator()->trans("Nationality", array(), "messages");
        // line 47
        echo "\t</div>
\t<div class=\"col-md-3\">
\t\t<div class=\"form-group input-group-sm\">
\t\t\t<div id=\"6\">";
        // line 50
        if ($this->getAttribute((isset($context["player"]) ? $context["player"] : $this->getContext($context, "player")), "nationality", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["player"]) ? $context["player"] : $this->getContext($context, "player")), "nationality", array()), "html", null, true);
        } else {
            echo "&nbsp";
        }
        echo "</div>
\t\t</div>
\t</div>
</div>

<div class=\"row user-info\">
\t<div class=\"col-md-1 col-md-offset-4\">
\t\t";
        // line 57
        echo $this->env->getExtension('translator')->getTranslator()->trans("Equipment", array(), "messages");
        echo "\t\t\t
\t</div>
\t<div class=\"col-md-3\">
\t\t<div class=\"form-group input-group-sm\">
\t\t\t<div id=\"7\">";
        // line 61
        if ($this->getAttribute((isset($context["player"]) ? $context["player"] : $this->getContext($context, "player")), "equipment", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["player"]) ? $context["player"] : $this->getContext($context, "player")), "equipment", array()), "brand", array()), "html", null, true);
        } else {
            echo "&nbsp";
        }
        echo "</div>
\t\t</div>
\t</div>
</div>";
        
        $__internal_3b6a59ba5091991b3d2eede8d5e3a12d0fc9fbdf2b90125c4e8b1a22514d61ec->leave($__internal_3b6a59ba5091991b3d2eede8d5e3a12d0fc9fbdf2b90125c4e8b1a22514d61ec_prof);

    }

    public function getTemplateName()
    {
        return "player/templates/infoPlayer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 61,  127 => 57,  113 => 50,  108 => 47,  106 => 46,  92 => 39,  87 => 36,  85 => 35,  71 => 28,  66 => 25,  64 => 24,  54 => 17,  49 => 14,  47 => 13,  37 => 5,  27 => 4,  22 => 1,);
    }
}
/* <div class="row">*/
/* 	<div class="col-md-4 col-md-offset-4 user-photo">*/
/* 		<img id="avatar" src=*/
/* 		{% if player.image %}"{{ asset('bundles/web/img/usersProfiles/' ~ player.image) }}"{% else %}"{{ asset('bundles/web/img/usersProfiles/default.png') }}"{% endif %}*/
/* 		/><br />*/
/* 		<div id="0"></div>*/
/* 	</div>*/
/* </div>*/
/* <br />*/
/* */
/* <div class="row user-info">*/
/* 	<div class="col-md-1 col-md-offset-4">*/
/* 		{% trans %}Name{% endtrans %}*/
/* 	</div>*/
/* 	<div class="col-md-3">*/
/* 		<div class="form-group input-group-sm">*/
/* 			<div id="2">{{ player.name|capitalize}}</div>*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* */
/* <div class="row user-info">*/
/* 	<div class="col-md-1 col-md-offset-4">*/
/* 		{% trans %}Phone{% endtrans %}*/
/* 	</div>*/
/* 	<div class="col-md-3">*/
/* 		<div class="form-group input-group-sm">*/
/* 			<div id="4">{% if player.phoneNumber %}{{ player.phoneNumber }}{% else %}&nbsp{% endif %}</div>*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* */
/* <div class="row user-info">*/
/* 	<div class="col-md-1 col-md-offset-4">*/
/* 		{% trans %}Age{% endtrans %}*/
/* 	</div>*/
/* 	<div class="col-md-3">*/
/* 		<div class="form-group input-group-sm">*/
/* 			<div id="5">{% if player.age %}{{ player.age }}{% else %}&nbsp{% endif %}</div>*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* */
/* <div class="row user-info">*/
/* 	<div class="col-md-1 col-md-offset-4">*/
/* 		{% trans %}Nationality{% endtrans %}*/
/* 	</div>*/
/* 	<div class="col-md-3">*/
/* 		<div class="form-group input-group-sm">*/
/* 			<div id="6">{% if player.nationality %}{{ player.nationality }}{% else %}&nbsp{% endif %}</div>*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* */
/* <div class="row user-info">*/
/* 	<div class="col-md-1 col-md-offset-4">*/
/* 		{% trans %}Equipment{% endtrans %}			*/
/* 	</div>*/
/* 	<div class="col-md-3">*/
/* 		<div class="form-group input-group-sm">*/
/* 			<div id="7">{% if player.equipment %}{{ player.equipment.brand }}{% else %}&nbsp{% endif %}</div>*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
