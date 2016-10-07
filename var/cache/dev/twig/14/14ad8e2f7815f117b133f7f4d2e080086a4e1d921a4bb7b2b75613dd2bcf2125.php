<?php

/* player/templates/showDummyPlayerInfo.html.twig */
class __TwigTemplate_e27484aa38f01706b5b1b7a39073fadaea6b7d9965a3e06830807472ac4aa3fd extends Twig_Template
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
        $__internal_2b14599c841f375cd9b70024d97f6b685e58bb22ff15408496bc0ace28e60f9b = $this->env->getExtension("native_profiler");
        $__internal_2b14599c841f375cd9b70024d97f6b685e58bb22ff15408496bc0ace28e60f9b->enter($__internal_2b14599c841f375cd9b70024d97f6b685e58bb22ff15408496bc0ace28e60f9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "player/templates/showDummyPlayerInfo.html.twig"));

        // line 1
        echo "<div class=\"row user-info\">
\t<div class=\"col-md-1 col-md-offset-4\">
\t\t";
        // line 3
        echo $this->env->getExtension('translator')->getTranslator()->trans("Name", array(), "messages");
        // line 4
        echo "\t</div>
\t<div class=\"col-md-3\">
\t\t<div class=\"form-group input-group-sm\">
\t\t\t<div id=\"2\">";
        // line 7
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["dummy"]) ? $context["dummy"] : $this->getContext($context, "dummy")), "name", array())), "html", null, true);
        echo "</div>
\t\t</div>
\t</div>
</div>

<div class=\"row user-info\">
\t<div class=\"col-md-1 col-md-offset-4\">
\t\t";
        // line 14
        echo $this->env->getExtension('translator')->getTranslator()->trans("Equipment", array(), "messages");
        echo "\t\t\t
\t</div>
\t<div class=\"col-md-3\">
\t\t<div class=\"form-group input-group-sm\">
\t\t\t<div id=\"7\">";
        // line 18
        if ($this->getAttribute((isset($context["dummy"]) ? $context["dummy"] : $this->getContext($context, "dummy")), "equipment", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["dummy"]) ? $context["dummy"] : $this->getContext($context, "dummy")), "equipment", array()), "brand", array()), "html", null, true);
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
        // line 25
        echo $this->env->getExtension('translator')->getTranslator()->trans("Gender", array(), "messages");
        echo "\t\t\t
\t</div>
\t<div class=\"col-md-3\">
\t\t<div class=\"form-group input-group-sm\">
\t\t\t<div id=\"7\">";
        // line 29
        if ($this->getAttribute((isset($context["dummy"]) ? $context["dummy"] : $this->getContext($context, "dummy")), "gender", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dummy"]) ? $context["dummy"] : $this->getContext($context, "dummy")), "gender", array()), "html", null, true);
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
        // line 36
        echo $this->env->getExtension('translator')->getTranslator()->trans("Level", array(), "messages");
        echo "\t\t\t
\t</div>
\t<div class=\"col-md-3\">
\t\t<div class=\"form-group input-group-sm\">
\t\t\t<div id=\"7\">";
        // line 40
        if ($this->getAttribute((isset($context["dummy"]) ? $context["dummy"] : $this->getContext($context, "dummy")), "level", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dummy"]) ? $context["dummy"] : $this->getContext($context, "dummy")), "level", array()), "html", null, true);
        } else {
            echo "&nbsp";
        }
        echo "</div>
\t\t</div>
\t</div>
</div>

<div class=\"row user-info\">
\t<div class=\"col-md-3 col-md-offset-5\">
\t\t<button id=\"edit_button\" type=\"button\" class=\"btn btn-primary center\">";
        // line 47
        echo $this->env->getExtension('translator')->getTranslator()->trans("Edit Information", array(), "messages");
        echo "</button>
\t</div>
</div>";
        
        $__internal_2b14599c841f375cd9b70024d97f6b685e58bb22ff15408496bc0ace28e60f9b->leave($__internal_2b14599c841f375cd9b70024d97f6b685e58bb22ff15408496bc0ace28e60f9b_prof);

    }

    public function getTemplateName()
    {
        return "player/templates/showDummyPlayerInfo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 47,  92 => 40,  85 => 36,  71 => 29,  64 => 25,  50 => 18,  43 => 14,  33 => 7,  28 => 4,  26 => 3,  22 => 1,);
    }
}
/* <div class="row user-info">*/
/* 	<div class="col-md-1 col-md-offset-4">*/
/* 		{% trans %}Name{% endtrans %}*/
/* 	</div>*/
/* 	<div class="col-md-3">*/
/* 		<div class="form-group input-group-sm">*/
/* 			<div id="2">{{ dummy.name|capitalize}}</div>*/
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
/* 			<div id="7">{% if dummy.equipment %}{{ dummy.equipment.brand }}{% else %}&nbsp{% endif %}</div>*/
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
/* 			<div id="7">{% if dummy.gender %}{{ dummy.gender }}{% else %}&nbsp{% endif %}</div>*/
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
/* 			<div id="7">{% if dummy.level %}{{ dummy.level }}{% else %}&nbsp{% endif %}</div>*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* */
/* <div class="row user-info">*/
/* 	<div class="col-md-3 col-md-offset-5">*/
/* 		<button id="edit_button" type="button" class="btn btn-primary center">{% trans %}Edit Information{% endtrans %}</button>*/
/* 	</div>*/
/* </div>*/
