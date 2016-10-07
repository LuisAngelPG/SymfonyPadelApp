<?php

/* user/templates/showUserInfo.html.twig */
class __TwigTemplate_95ee3d58ae6a4a065eeae23eca9f52317815d4f62ad74ac0743c612849ff23c5 extends Twig_Template
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
        $__internal_1c07b76769f6448dfeb7254c58172af316a53a0c58e13f5fe21223ff23fc5866 = $this->env->getExtension("native_profiler");
        $__internal_1c07b76769f6448dfeb7254c58172af316a53a0c58e13f5fe21223ff23fc5866->enter($__internal_1c07b76769f6448dfeb7254c58172af316a53a0c58e13f5fe21223ff23fc5866_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/templates/showUserInfo.html.twig"));

        // line 1
        $context["profile"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "profile"), "method");
        // line 2
        echo "
<div class=\"row user-info\">
\t<div class=\"col-md-1 col-md-offset-4\">
\t\t";
        // line 5
        echo $this->env->getExtension('translator')->getTranslator()->trans("Username", array(), "messages");
        // line 6
        echo "\t</div>
\t<div class=\"col-md-3\">
\t\t<div class=\"form-group input-group-sm\">
\t\t\t";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo "
\t\t</div>
\t</div>
</div>

<div class=\"row user-info\">
\t<div class=\"col-md-1 col-md-offset-4\">
\t\t";
        // line 16
        echo $this->env->getExtension('translator')->getTranslator()->trans("Name", array(), "messages");
        // line 17
        echo "\t</div>
\t<div class=\"col-md-3\">
\t\t<div class=\"form-group input-group-sm\">
\t\t\t";
        // line 20
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "name", array())), "html", null, true);
        echo "
\t\t</div>
\t</div>
</div>
\t\t\t
<div class=\"row user-info\">
\t<div class=\"col-md-1 col-md-offset-4\">
\t\t";
        // line 27
        echo $this->env->getExtension('translator')->getTranslator()->trans("Email", array(), "messages");
        // line 28
        echo "\t</div>
\t<div class=\"col-md-3\">
\t\t<div class=\"form-group input-group-md\">
\t\t\t";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "email", array()), "html", null, true);
        echo "
\t\t</div>
\t</div>
</div>

<div class=\"row user-info\">
\t<div class=\"col-md-1 col-md-offset-4\">
\t\t";
        // line 38
        echo $this->env->getExtension('translator')->getTranslator()->trans("Phone", array(), "messages");
        // line 39
        echo "\t</div>
\t<div class=\"col-md-3\">
\t\t<div class=\"form-group input-group-sm\">
\t\t\t";
        // line 42
        if ($this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "phoneNumber", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "phoneNumber", array()), "html", null, true);
        } else {
            echo "&nbsp";
        }
        // line 43
        echo "\t\t</div>
\t</div>
</div>

<div class=\"row user-info\">
\t<div class=\"col-md-1 col-md-offset-4\">
\t\t";
        // line 49
        echo $this->env->getExtension('translator')->getTranslator()->trans("Age", array(), "messages");
        // line 50
        echo "\t</div>
\t<div class=\"col-md-3\">
\t\t<div class=\"form-group input-group-sm\">
\t\t\t";
        // line 53
        if ($this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "age", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "age", array()), "html", null, true);
        } else {
            echo "&nbsp";
        }
        // line 54
        echo "\t\t</div>
\t</div>
</div>

<div class=\"row user-info\">
\t<div class=\"col-md-1 col-md-offset-4\">
\t\t";
        // line 60
        echo $this->env->getExtension('translator')->getTranslator()->trans("Nationality", array(), "messages");
        // line 61
        echo "\t</div>
\t<div class=\"col-md-3\">
\t\t<div class=\"form-group input-group-sm\">
\t\t\t";
        // line 64
        if ($this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "nationality", array())) {
            echo twig_escape_filter($this->env, $this->env->getExtension('country_extension')->countryName($this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "nationality", array())), "html", null, true);
        } else {
            echo "&nbsp";
        }
        // line 65
        echo "\t\t</div>
\t</div>
</div>

<div class=\"row user-info\">
\t<div class=\"col-md-1 col-md-offset-4\">
\t\t";
        // line 71
        echo $this->env->getExtension('translator')->getTranslator()->trans("Equipment", array(), "messages");
        echo "\t\t\t
\t</div>
\t<div class=\"col-md-3\">
\t\t<div class=\"form-group input-group-sm\">
\t\t\t";
        // line 75
        if ($this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "equipment", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "equipment", array()), "brand", array()), "html", null, true);
        } else {
            echo "&nbsp";
        }
        // line 76
        echo "\t\t</div>
\t</div>
</div>

<div class=\"row user-info\">
\t<div class=\"col-md-1 col-md-offset-4\">
\t\t";
        // line 82
        echo $this->env->getExtension('translator')->getTranslator()->trans("Gender", array(), "messages");
        echo "\t\t\t
\t</div>
\t<div class=\"col-md-3\">
\t\t<div class=\"form-group input-group-sm\">
\t\t\t";
        // line 86
        if ($this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "gender", array())) {
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "gender", array())), "html", null, true);
        } else {
            echo "&nbsp";
        }
        // line 87
        echo "\t\t</div>
\t</div>
</div>

<div class=\"row user-info\">
\t<div class=\"col-md-1 col-md-offset-4\">
\t\t";
        // line 93
        echo $this->env->getExtension('translator')->getTranslator()->trans("Level", array(), "messages");
        echo "\t\t\t
\t</div>
\t<div class=\"col-md-3\">
\t\t<div class=\"form-group input-group-sm\">
\t\t\t";
        // line 97
        if ($this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "level", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "level", array()), "html", null, true);
        } else {
            echo "&nbsp";
        }
        // line 98
        echo "\t\t</div>
\t</div>
</div>
<div class=\"row user-info\">
\t<div class=\"col-md-3 col-md-offset-5\">
\t\t<button id=\"edit_button\" style=\"visibility:visible\" type=\"button\" class=\"btn btn-primary center\">";
        // line 103
        echo $this->env->getExtension('translator')->getTranslator()->trans("Edit Information", array(), "messages");
        echo "</button>
\t</div>
</div>";
        
        $__internal_1c07b76769f6448dfeb7254c58172af316a53a0c58e13f5fe21223ff23fc5866->leave($__internal_1c07b76769f6448dfeb7254c58172af316a53a0c58e13f5fe21223ff23fc5866_prof);

    }

    public function getTemplateName()
    {
        return "user/templates/showUserInfo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  205 => 103,  198 => 98,  192 => 97,  185 => 93,  177 => 87,  171 => 86,  164 => 82,  156 => 76,  150 => 75,  143 => 71,  135 => 65,  129 => 64,  124 => 61,  122 => 60,  114 => 54,  108 => 53,  103 => 50,  101 => 49,  93 => 43,  87 => 42,  82 => 39,  80 => 38,  70 => 31,  65 => 28,  63 => 27,  53 => 20,  48 => 17,  46 => 16,  36 => 9,  31 => 6,  29 => 5,  24 => 2,  22 => 1,);
    }
}
/* {% set profile = app.session.get('profile') %}*/
/* */
/* <div class="row user-info">*/
/* 	<div class="col-md-1 col-md-offset-4">*/
/* 		{% trans %}Username{% endtrans %}*/
/* 	</div>*/
/* 	<div class="col-md-3">*/
/* 		<div class="form-group input-group-sm">*/
/* 			{{ app.user.username}}*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* */
/* <div class="row user-info">*/
/* 	<div class="col-md-1 col-md-offset-4">*/
/* 		{% trans %}Name{% endtrans %}*/
/* 	</div>*/
/* 	<div class="col-md-3">*/
/* 		<div class="form-group input-group-sm">*/
/* 			{{ profile.name|capitalize}}*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* 			*/
/* <div class="row user-info">*/
/* 	<div class="col-md-1 col-md-offset-4">*/
/* 		{% trans %}Email{% endtrans %}*/
/* 	</div>*/
/* 	<div class="col-md-3">*/
/* 		<div class="form-group input-group-md">*/
/* 			{{ app.user.email }}*/
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
/* 			{% if profile.phoneNumber %}{{ profile.phoneNumber }}{% else %}&nbsp{% endif %}*/
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
/* 			{% if profile.age %}{{ profile.age }}{% else %}&nbsp{% endif %}*/
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
/* 			{% if profile.nationality %}{{ profile.nationality|countryName }}{% else %}&nbsp{% endif %}*/
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
/* 			{% if profile.equipment %}{{ profile.equipment.brand }}{% else %}&nbsp{% endif %}*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* */
/* <div class="row user-info">*/
/* 	<div class="col-md-1 col-md-offset-4">*/
/* 		{% trans %}Gender{% endtrans %}			*/
/* 	</div>*/
/* 	<div class="col-md-3">*/
/* 		<div class="form-group input-group-sm">*/
/* 			{% if profile.gender %}{{ profile.gender|capitalize }}{% else %}&nbsp{% endif %}*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* */
/* <div class="row user-info">*/
/* 	<div class="col-md-1 col-md-offset-4">*/
/* 		{% trans %}Level{% endtrans %}			*/
/* 	</div>*/
/* 	<div class="col-md-3">*/
/* 		<div class="form-group input-group-sm">*/
/* 			{% if profile.level %}{{ profile.level }}{% else %}&nbsp{% endif %}*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* <div class="row user-info">*/
/* 	<div class="col-md-3 col-md-offset-5">*/
/* 		<button id="edit_button" style="visibility:visible" type="button" class="btn btn-primary center">{% trans %}Edit Information{% endtrans %}</button>*/
/* 	</div>*/
/* </div>*/
