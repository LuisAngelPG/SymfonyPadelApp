<?php

/* tournament/templates/infoTournament.html.twig */
class __TwigTemplate_f5c7111b3e34126840d282f1845b9c4b3b84c131dcaa35b52cc436c0d7cca647 extends Twig_Template
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
        $__internal_fe9fddbb2e86ad66fc97c778933c5b5a96ed7fadeea84f94a0653321087eefc9 = $this->env->getExtension("native_profiler");
        $__internal_fe9fddbb2e86ad66fc97c778933c5b5a96ed7fadeea84f94a0653321087eefc9->enter($__internal_fe9fddbb2e86ad66fc97c778933c5b5a96ed7fadeea84f94a0653321087eefc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tournament/templates/infoTournament.html.twig"));

        // line 1
        echo "<div class=\"row\">
\t<div class=\"col-md-offset-4 col-md-1\">
\t\t";
        // line 3
        echo $this->env->getExtension('translator')->getTranslator()->trans("Name", array(), "messages");
        // line 4
        echo "\t</div>
\t<div class=\"col-md-3\">
\t\t";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tournament"]) ? $context["tournament"] : $this->getContext($context, "tournament")), "name", array()), "html", null, true);
        echo "
\t</div>
</div>
<div class=\"row\">
\t<div class=\"col-md-offset-4 col-md-1\">
\t\t";
        // line 11
        echo $this->env->getExtension('translator')->getTranslator()->trans("Date", array(), "messages");
        // line 12
        echo "\t</div>
\t<div class=\"col-md-3\">
\t\t";
        // line 14
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["tournament"]) ? $context["tournament"] : $this->getContext($context, "tournament")), "date", array()), "d/M/Y h:m:s"), "html", null, true);
        echo "
\t</div>
</div>
<div class=\"row\">
\t<div class=\"col-md-offset-4 col-md-1\">
\t\t";
        // line 19
        echo $this->env->getExtension('translator')->getTranslator()->trans("Type", array(), "messages");
        // line 20
        echo "\t</div>
\t<div class=\"col-md-3\">
\t\t";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tournament"]) ? $context["tournament"] : $this->getContext($context, "tournament")), "type", array()), "html", null, true);
        echo "
\t</div>
</div>
<div class=\"row\">
\t<div class=\"col-md-offset-4 col-md-1\">
\t\t";
        // line 27
        echo $this->env->getExtension('translator')->getTranslator()->trans("Players", array(), "messages");
        // line 28
        echo "\t</div>
\t<div class=\"col-md-3\">
\t-----------Players-----------<br>
\t\t";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["players"]) ? $context["players"] : $this->getContext($context, "players")));
        foreach ($context['_seq'] as $context["_key"] => $context["player"]) {
            // line 32
            echo "\t\t\t";
            echo twig_escape_filter($this->env, $this->getAttribute($context["player"], "name", array()), "html", null, true);
            echo "<br>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['player'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "\t\t<br>
\t-----------Dummys------------<br>
\t\t";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["dummys"]) ? $context["dummys"] : $this->getContext($context, "dummys")));
        foreach ($context['_seq'] as $context["_key"] => $context["dummy"]) {
            // line 37
            echo "\t\t\t";
            echo twig_escape_filter($this->env, $this->getAttribute($context["dummy"], "name", array()), "html", null, true);
            echo "<br>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dummy'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "\t</div>
</div>
<div class=\"row\">
\t<div class=\"col-md-offset-4 col-md-1\">
\t\t";
        // line 43
        echo $this->env->getExtension('translator')->getTranslator()->trans("Courts", array(), "messages");
        // line 44
        echo "\t</div>
\t<div class=\"col-md-3\">
\t\t";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tournament"]) ? $context["tournament"] : $this->getContext($context, "tournament")), "amountCourts", array()), "html", null, true);
        echo "
\t</div>
</div>
<div class=\"row\">
\t<div class=\"col-md-offset-4 col-md-1\">
\t\t";
        // line 51
        echo $this->env->getExtension('translator')->getTranslator()->trans("Status", array(), "messages");
        // line 52
        echo "\t</div>
\t<div class=\"col-md-3\">
\t\t";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tournament"]) ? $context["tournament"] : $this->getContext($context, "tournament")), "status", array()), "html", null, true);
        echo "
\t</div>
</div>
<div class=\"row\">
\t<div class=\"col-md-offset-4 col-md-1\">
\t\t";
        // line 59
        echo $this->env->getExtension('translator')->getTranslator()->trans("Club", array(), "messages");
        // line 60
        echo "\t</div>
\t<div class=\"col-md-3\">
\t\t";
        // line 62
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tournament"]) ? $context["tournament"] : $this->getContext($context, "tournament")), "localClubName", array()), "html", null, true);
        echo "
\t</div>
</div>";
        
        $__internal_fe9fddbb2e86ad66fc97c778933c5b5a96ed7fadeea84f94a0653321087eefc9->leave($__internal_fe9fddbb2e86ad66fc97c778933c5b5a96ed7fadeea84f94a0653321087eefc9_prof);

    }

    public function getTemplateName()
    {
        return "tournament/templates/infoTournament.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 62,  141 => 60,  139 => 59,  131 => 54,  127 => 52,  125 => 51,  117 => 46,  113 => 44,  111 => 43,  105 => 39,  96 => 37,  92 => 36,  88 => 34,  79 => 32,  75 => 31,  70 => 28,  68 => 27,  60 => 22,  56 => 20,  54 => 19,  46 => 14,  42 => 12,  40 => 11,  32 => 6,  28 => 4,  26 => 3,  22 => 1,);
    }
}
/* <div class="row">*/
/* 	<div class="col-md-offset-4 col-md-1">*/
/* 		{% trans %}Name{% endtrans %}*/
/* 	</div>*/
/* 	<div class="col-md-3">*/
/* 		{{tournament.name}}*/
/* 	</div>*/
/* </div>*/
/* <div class="row">*/
/* 	<div class="col-md-offset-4 col-md-1">*/
/* 		{% trans %}Date{% endtrans %}*/
/* 	</div>*/
/* 	<div class="col-md-3">*/
/* 		{{tournament.date|date('d/M/Y h:m:s')}}*/
/* 	</div>*/
/* </div>*/
/* <div class="row">*/
/* 	<div class="col-md-offset-4 col-md-1">*/
/* 		{% trans %}Type{% endtrans %}*/
/* 	</div>*/
/* 	<div class="col-md-3">*/
/* 		{{tournament.type}}*/
/* 	</div>*/
/* </div>*/
/* <div class="row">*/
/* 	<div class="col-md-offset-4 col-md-1">*/
/* 		{% trans %}Players{% endtrans %}*/
/* 	</div>*/
/* 	<div class="col-md-3">*/
/* 	-----------Players-----------<br>*/
/* 		{% for player in players %}*/
/* 			{{player.name}}<br>*/
/* 		{% endfor %}*/
/* 		<br>*/
/* 	-----------Dummys------------<br>*/
/* 		{% for dummy in dummys %}*/
/* 			{{dummy.name}}<br>*/
/* 		{% endfor %}*/
/* 	</div>*/
/* </div>*/
/* <div class="row">*/
/* 	<div class="col-md-offset-4 col-md-1">*/
/* 		{% trans %}Courts{% endtrans %}*/
/* 	</div>*/
/* 	<div class="col-md-3">*/
/* 		{{tournament.amountCourts}}*/
/* 	</div>*/
/* </div>*/
/* <div class="row">*/
/* 	<div class="col-md-offset-4 col-md-1">*/
/* 		{% trans %}Status{% endtrans %}*/
/* 	</div>*/
/* 	<div class="col-md-3">*/
/* 		{{tournament.status}}*/
/* 	</div>*/
/* </div>*/
/* <div class="row">*/
/* 	<div class="col-md-offset-4 col-md-1">*/
/* 		{% trans %}Club{% endtrans %}*/
/* 	</div>*/
/* 	<div class="col-md-3">*/
/* 		{{tournament.localClubName}}*/
/* 	</div>*/
/* </div>*/
