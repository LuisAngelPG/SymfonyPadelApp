<?php

/* club/templates/showClubInfo.html.twig */
class __TwigTemplate_2d67129e5055ef750b7a61bb8f6067007292893e69ac16cc56acecb0b2b5f860 extends Twig_Template
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
        $__internal_4ed7d11f1a58059e5a4747683ce911ad76aa0ee52aaf0d8b19a0f685ae87f6b8 = $this->env->getExtension("native_profiler");
        $__internal_4ed7d11f1a58059e5a4747683ce911ad76aa0ee52aaf0d8b19a0f685ae87f6b8->enter($__internal_4ed7d11f1a58059e5a4747683ce911ad76aa0ee52aaf0d8b19a0f685ae87f6b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "club/templates/showClubInfo.html.twig"));

        // line 1
        echo "<div class=\"row\">
\t<div class=\"col-md-4 col-md-offset-4\">
\t\t<button type=\"button\" class=\"btn btn-info\" data-toggle=\"collapse\" data-target=\"#club_data_";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["club"]) ? $context["club"] : $this->getContext($context, "club")), "id", array()), "html", null, true);
        echo "\">";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Club's Data", array(), "messages");
        echo "</button>
\t\t<br /><br />
\t</div>
</div>
<div id=\"club_data_";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["club"]) ? $context["club"] : $this->getContext($context, "club")), "id", array()), "html", null, true);
        echo "\" class=\"collapse\">
\t<div class=\"row user-info\">
\t\t<div class=\"col-md-1 col-md-offset-4\">
\t\t\t";
        // line 10
        echo $this->env->getExtension('translator')->getTranslator()->trans("Name", array(), "messages");
        // line 11
        echo "\t\t</div>
\t\t<div class=\"col-md-3\">
\t\t\t<div class=\"form-group input-group-sm\">
\t\t\t\t";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["club"]) ? $context["club"] : $this->getContext($context, "club")), "name", array()), "html", null, true);
        echo "
\t\t\t</div>
\t\t</div>
\t</div>

\t<div class=\"row user-info\">
\t\t<div class=\"col-md-1 col-md-offset-4\">
\t\t\t";
        // line 21
        echo $this->env->getExtension('translator')->getTranslator()->trans("Phone", array(), "messages");
        // line 22
        echo "\t\t</div>
\t\t<div class=\"col-md-3\">
\t\t\t<div class=\"form-group input-group-sm\">
\t\t\t\t";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["club"]) ? $context["club"] : $this->getContext($context, "club")), "phoneNumber", array()), "html", null, true);
        echo "
\t\t\t</div>
\t\t</div>
\t</div>

\t<div class=\"row user-info\">
\t\t<div class=\"col-md-1 col-md-offset-4\">
\t\t\t";
        // line 32
        echo $this->env->getExtension('translator')->getTranslator()->trans("Email", array(), "messages");
        // line 33
        echo "\t\t</div>
\t\t<div class=\"col-md-3\">
\t\t\t<div class=\"form-group input-group-sm\">
\t\t\t\t";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["club"]) ? $context["club"] : $this->getContext($context, "club")), "email", array()), "html", null, true);
        echo "
\t\t\t</div>
\t\t</div>
\t</div>

\t<div class=\"row user-info\">
\t\t<div class=\"col-md-1 col-md-offset-4\">
\t\t\t";
        // line 43
        echo $this->env->getExtension('translator')->getTranslator()->trans("Address", array(), "messages");
        // line 44
        echo "\t\t</div>
\t\t<div class=\"col-md-3\">
\t\t\t<div class=\"form-group input-group-sm\">
\t\t\t\t";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["club"]) ? $context["club"] : $this->getContext($context, "club")), "address", array()), "html", null, true);
        echo "
\t\t\t</div>
\t\t</div>
\t</div>

\t<div class=\"row user-info\">
\t\t<div class=\"col-md-1 col-md-offset-4\">
\t\t\t";
        // line 54
        echo $this->env->getExtension('translator')->getTranslator()->trans("Schedule", array(), "messages");
        // line 55
        echo "\t\t</div>
\t\t<div class=\"col-md-3\">
\t\t\t<div class=\"form-group input-group-sm\">
\t\t\t\t";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["club"]) ? $context["club"] : $this->getContext($context, "club")), "horario", array()), "html", null, true);
        echo "
\t\t\t</div>
\t\t</div>
\t</div>
</div>
<div class=\"row\">
\t<div class=\"col-md-4 col-md-offset-4\">
\t\t\t<button type=\"button\" class=\"btn btn-info\" data-toggle=\"collapse\" data-target=\"#club_installations_";
        // line 65
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["club"]) ? $context["club"] : $this->getContext($context, "club")), "id", array()), "html", null, true);
        echo "\">";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Club's Installation", array(), "messages");
        echo "</button>
\t\t\t<br /><br />
\t</div>
</div>
<div id=\"club_installations_";
        // line 69
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["club"]) ? $context["club"] : $this->getContext($context, "club")), "id", array()), "html", null, true);
        echo "\" class=\"collapse\">
\t";
        // line 70
        if ($this->getAttribute((isset($context["club"]) ? $context["club"] : $this->getContext($context, "club")), "courts", array())) {
            // line 71
            echo "\t\t<div class=\"row user-info\">
\t\t\t<div class=\"col-md-1 col-md-offset-4\">
\t\t\t\t";
            // line 73
            echo $this->env->getExtension('translator')->getTranslator()->trans("Courts", array(), "messages");
            // line 74
            echo "\t\t\t</div>
\t\t\t<div class=\"col-md-3\">
\t\t\t\t<div class=\"form-group input-group-sm\">
\t\t\t\t\t";
            // line 77
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["club"]) ? $context["club"] : $this->getContext($context, "club")), "courts", array()), "html", null, true);
            echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t";
        }
        // line 82
        echo "
\t";
        // line 83
        if ($this->getAttribute((isset($context["club"]) ? $context["club"] : $this->getContext($context, "club")), "equipmentRental", array())) {
            // line 84
            echo "\t\t<div class=\"row user-info\">
\t\t\t<div class=\"col-md-4 col-md-offset-4\">
\t\t\t\t\t";
            // line 86
            echo $this->env->getExtension('translator')->getTranslator()->trans("Equipment Rental", array(), "messages");
            echo "&nbsp";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["club"]) ? $context["club"] : $this->getContext($context, "club")), "equipmentRental", array()), "html", null, true);
            echo "<br />
\t\t\t</div>
\t\t</div>
\t";
        }
        // line 90
        echo "\t
\t";
        // line 91
        if ($this->getAttribute((isset($context["club"]) ? $context["club"] : $this->getContext($context, "club")), "foodServices", array())) {
            // line 92
            echo "\t\t<div class=\"row user-info\">
\t\t\t<div class=\"col-md-4 col-md-offset-4\">
\t\t\t\t\t";
            // line 94
            echo $this->env->getExtension('translator')->getTranslator()->trans("Food Services", array(), "messages");
            echo "&nbsp";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["club"]) ? $context["club"] : $this->getContext($context, "club")), "foodServices", array()), "html", null, true);
            echo "<br />
\t\t\t</div>
\t\t</div>
\t";
        }
        // line 98
        echo "
\t";
        // line 99
        if ($this->getAttribute((isset($context["club"]) ? $context["club"] : $this->getContext($context, "club")), "showers", array())) {
            // line 100
            echo "\t\t<div class=\"row user-info\">
\t\t\t<div class=\"col-md-4 col-md-offset-4\">\t\t
\t\t\t\t\t";
            // line 102
            echo $this->env->getExtension('translator')->getTranslator()->trans("Showers", array(), "messages");
            echo "&nbsp";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["club"]) ? $context["club"] : $this->getContext($context, "club")), "showers", array()), "html", null, true);
            echo "<br />
\t\t\t</div>
\t\t</div>
\t";
        }
        // line 106
        echo "
\t";
        // line 107
        if ($this->getAttribute((isset($context["club"]) ? $context["club"] : $this->getContext($context, "club")), "disabledAccess", array())) {
            // line 108
            echo "\t\t<div class=\"row user-info\">
\t\t\t<div class=\"col-md-4 col-md-offset-4\">
\t\t\t\t";
            // line 110
            echo $this->env->getExtension('translator')->getTranslator()->trans("Disabled Access", array(), "messages");
            echo "&nbsp";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["club"]) ? $context["club"] : $this->getContext($context, "club")), "disabledAccess", array()), "html", null, true);
            echo "<br />
\t\t\t</div>
\t\t</div>
\t";
        }
        // line 114
        echo "
\t";
        // line 115
        if ($this->getAttribute((isset($context["club"]) ? $context["club"] : $this->getContext($context, "club")), "gym", array())) {
            // line 116
            echo "\t\t<div class=\"row user-info\">
\t\t\t<div class=\"col-md-4 col-md-offset-4\">
\t\t\t\t";
            // line 118
            echo $this->env->getExtension('translator')->getTranslator()->trans("Gym", array(), "messages");
            echo "&nbsp";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["club"]) ? $context["club"] : $this->getContext($context, "club")), "gym", array()), "html", null, true);
            echo "<br />
\t\t\t</div>
\t\t</div>
\t";
        }
        // line 122
        echo "
\t";
        // line 123
        if ($this->getAttribute((isset($context["club"]) ? $context["club"] : $this->getContext($context, "club")), "sauna", array())) {
            // line 124
            echo "\t\t<div class=\"row user-info\">
\t\t\t<div class=\"col-md-4 col-md-offset-4\">
\t\t\t\t";
            // line 126
            echo $this->env->getExtension('translator')->getTranslator()->trans("Sauna", array(), "messages");
            echo "&nbsp";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["club"]) ? $context["club"] : $this->getContext($context, "club")), "sauna", array()), "html", null, true);
            echo "<br />
\t\t\t</div>
\t\t</div>
\t";
        }
        // line 130
        echo "
\t";
        // line 131
        if ($this->getAttribute((isset($context["club"]) ? $context["club"] : $this->getContext($context, "club")), "kindergarten", array())) {
            // line 132
            echo "\t\t<div class=\"row user-info\">
\t\t\t<div class=\"col-md-4 col-md-offset-4\">
\t\t\t\t";
            // line 134
            echo $this->env->getExtension('translator')->getTranslator()->trans("Kindergarten", array(), "messages");
            echo "&nbsp";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["club"]) ? $context["club"] : $this->getContext($context, "club")), "kindergarten", array()), "html", null, true);
            echo "<br />
\t\t\t</div>
\t\t</div>
\t";
        }
        // line 138
        echo "
\t";
        // line 139
        if ($this->getAttribute((isset($context["club"]) ? $context["club"] : $this->getContext($context, "club")), "jacuzzi", array())) {
            // line 140
            echo "\t\t<div class=\"row user-info\">
\t\t\t<div class=\"col-md-4 col-md-offset-4\">
\t\t\t\t";
            // line 142
            echo $this->env->getExtension('translator')->getTranslator()->trans("Jacuzzi", array(), "messages");
            echo "&nbsp";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["club"]) ? $context["club"] : $this->getContext($context, "club")), "jacuzzi", array()), "html", null, true);
            echo "<br />
\t\t\t</div>
\t\t</div>
\t";
        }
        // line 146
        echo "
\t";
        // line 147
        if ($this->getAttribute((isset($context["club"]) ? $context["club"] : $this->getContext($context, "club")), "parking", array())) {
            // line 148
            echo "\t\t<div class=\"row user-info\">
\t\t\t<div class=\"col-md-4 col-md-offset-4\">
\t\t\t\t";
            // line 150
            echo $this->env->getExtension('translator')->getTranslator()->trans("Parking", array(), "messages");
            echo "&nbsp";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["club"]) ? $context["club"] : $this->getContext($context, "club")), "parking", array()), "html", null, true);
            echo "<br />
\t\t\t</div>
\t\t</div>
\t";
        }
        // line 154
        echo "
\t";
        // line 155
        if ($this->getAttribute((isset($context["club"]) ? $context["club"] : $this->getContext($context, "club")), "parkingMotorcycles", array())) {
            // line 156
            echo "\t\t<div class=\"row user-info\">
\t\t\t<div class=\"col-md-4 col-md-offset-4\">
\t\t\t\t";
            // line 158
            echo $this->env->getExtension('translator')->getTranslator()->trans("Parking Motorcycles", array(), "messages");
            echo "&nbsp";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["club"]) ? $context["club"] : $this->getContext($context, "club")), "parkingMotorcycles", array()), "html", null, true);
            echo "<br />
\t\t\t</div>
\t\t</div>
\t";
        }
        // line 162
        echo "
\t";
        // line 163
        if ($this->getAttribute((isset($context["club"]) ? $context["club"] : $this->getContext($context, "club")), "parkingBicycles", array())) {
            // line 164
            echo "\t\t<div class=\"row user-info\">
\t\t\t<div class=\"col-md-4 col-md-offset-4\">
\t\t\t\t";
            // line 166
            echo $this->env->getExtension('translator')->getTranslator()->trans("Parking Bicycles", array(), "messages");
            echo "&nbsp";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["club"]) ? $context["club"] : $this->getContext($context, "club")), "parkingBicycles", array()), "html", null, true);
            echo "<br />
\t\t\t</div>
\t\t</div>
\t";
        }
        // line 170
        echo "
\t";
        // line 171
        if ($this->getAttribute((isset($context["club"]) ? $context["club"] : $this->getContext($context, "club")), "waterpool", array())) {
            // line 172
            echo "\t\t<div class=\"row user-info\">
\t\t\t<div class=\"col-md-4 col-md-offset-4\">
\t\t\t\t";
            // line 174
            echo $this->env->getExtension('translator')->getTranslator()->trans("Waterpool", array(), "messages");
            echo "&nbsp";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["club"]) ? $context["club"] : $this->getContext($context, "club")), "waterpool", array()), "html", null, true);
            echo "<br />
\t\t\t</div>
\t\t</div>
\t";
        }
        // line 178
        echo "
\t";
        // line 179
        if ($this->getAttribute((isset($context["club"]) ? $context["club"] : $this->getContext($context, "club")), "locker", array())) {
            // line 180
            echo "\t\t<div class=\"row user-info\">
\t\t\t<div class=\"col-md-4 col-md-offset-4\">\t\t
\t\t\t\t";
            // line 182
            echo $this->env->getExtension('translator')->getTranslator()->trans("Locker", array(), "messages");
            echo "&nbsp";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["club"]) ? $context["club"] : $this->getContext($context, "club")), "locker", array()), "html", null, true);
            echo "<br />
\t\t\t</div>
\t\t</div>
\t";
        }
        // line 186
        echo "
\t";
        // line 187
        if ($this->getAttribute((isset($context["club"]) ? $context["club"] : $this->getContext($context, "club")), "shop", array())) {
            // line 188
            echo "\t\t<div class=\"row user-info\">
\t\t\t<div class=\"col-md-4 col-md-offset-4\">
\t\t\t\t";
            // line 190
            echo $this->env->getExtension('translator')->getTranslator()->trans("Shop", array(), "messages");
            echo "&nbsp";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["club"]) ? $context["club"] : $this->getContext($context, "club")), "shop", array()), "html", null, true);
            echo "<br />
\t\t\t</div>
\t\t</div>
\t";
        }
        // line 194
        echo "
\t";
        // line 195
        if ($this->getAttribute((isset($context["club"]) ? $context["club"] : $this->getContext($context, "club")), "WiFi", array())) {
            // line 196
            echo "\t\t<div class=\"row user-info\">
\t\t\t<div class=\"col-md-4 col-md-offset-4\">
\t\t\t\t";
            // line 198
            echo $this->env->getExtension('translator')->getTranslator()->trans("WiFi", array(), "messages");
            echo "&nbsp";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["club"]) ? $context["club"] : $this->getContext($context, "club")), "WiFi", array()), "html", null, true);
            echo "<br />
\t\t\t</div>
\t\t</div>
\t";
        }
        // line 202
        echo "
\t";
        // line 203
        if ($this->getAttribute((isset($context["club"]) ? $context["club"] : $this->getContext($context, "club")), "playground", array())) {
            // line 204
            echo "\t\t<div class=\"row user-info\">
\t\t\t<div class=\"col-md-4 col-md-offset-4\">\t\t
\t\t\t\t";
            // line 206
            echo $this->env->getExtension('translator')->getTranslator()->trans("Playground", array(), "messages");
            echo "&nbsp";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["club"]) ? $context["club"] : $this->getContext($context, "club")), "playground", array()), "html", null, true);
            echo "<br />
\t\t\t</div>
\t\t</div>
\t";
        }
        // line 210
        echo "
\t";
        // line 211
        if ($this->getAttribute((isset($context["club"]) ? $context["club"] : $this->getContext($context, "club")), "school", array())) {
            // line 212
            echo "\t\t<div class=\"row user-info\">
\t\t\t<div class=\"col-md-4 col-md-offset-4\">\t\t
\t\t\t\t";
            // line 214
            echo $this->env->getExtension('translator')->getTranslator()->trans("School", array(), "messages");
            echo "&nbsp";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["club"]) ? $context["club"] : $this->getContext($context, "club")), "school", array()), "html", null, true);
            echo "<br />
\t\t\t</div>
\t\t</div>
\t";
        }
        // line 218
        echo "
\t";
        // line 219
        if ($this->getAttribute((isset($context["club"]) ? $context["club"] : $this->getContext($context, "club")), "americanTournament", array())) {
            // line 220
            echo "\t\t<div class=\"row user-info\">
\t\t\t<div class=\"col-md-4 col-md-offset-4\">
\t\t\t\t";
            // line 222
            echo $this->env->getExtension('translator')->getTranslator()->trans("American Tournament", array(), "messages");
            echo "&nbsp";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["club"]) ? $context["club"] : $this->getContext($context, "club")), "americanTournament", array()), "html", null, true);
            echo "<br />
\t\t\t</div>
\t\t</div>
\t";
        }
        // line 226
        echo "
\t";
        // line 227
        if ($this->getAttribute((isset($context["club"]) ? $context["club"] : $this->getContext($context, "club")), "leagues", array())) {
            // line 228
            echo "\t\t<div class=\"row user-info\">
\t\t\t<div class=\"col-md-4 col-md-offset-4\">
\t\t\t\t";
            // line 230
            echo $this->env->getExtension('translator')->getTranslator()->trans("Leagues", array(), "messages");
            echo "&nbsp";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["club"]) ? $context["club"] : $this->getContext($context, "club")), "leagues", array()), "html", null, true);
            echo "<br />
\t\t\t</div>
\t\t</div>
\t";
        }
        // line 234
        echo "
\t";
        // line 235
        if ($this->getAttribute((isset($context["club"]) ? $context["club"] : $this->getContext($context, "club")), "ilumination", array())) {
            // line 236
            echo "\t\t<div class=\"row user-info\">
\t\t\t<div class=\"col-md-4 col-md-offset-4\">
\t\t\t\t";
            // line 238
            echo $this->env->getExtension('translator')->getTranslator()->trans("Ilumination", array(), "messages");
            echo "&nbsp";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["club"]) ? $context["club"] : $this->getContext($context, "club")), "ilumination", array()), "html", null, true);
            echo "<br />
\t\t\t</div>\t
\t\t</div>
\t";
        }
        // line 242
        echo "
\t";
        // line 243
        if ($this->getAttribute((isset($context["club"]) ? $context["club"] : $this->getContext($context, "club")), "crystalCourts", array())) {
            // line 244
            echo "\t\t<div class=\"row user-info\">
\t\t\t<div class=\"col-md-4 col-md-offset-4\">
\t\t\t\t";
            // line 246
            echo $this->env->getExtension('translator')->getTranslator()->trans("Crystal Courts", array(), "messages");
            echo "&nbsp";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["club"]) ? $context["club"] : $this->getContext($context, "club")), "crystalCourts", array()), "html", null, true);
            echo "<br />
\t\t\t</div>
\t\t</div>
\t";
        }
        // line 250
        echo "
\t";
        // line 251
        if ($this->getAttribute((isset($context["club"]) ? $context["club"] : $this->getContext($context, "club")), "wallCourts", array())) {
            // line 252
            echo "\t\t<div class=\"row user-info\">
\t\t\t<div class=\"col-md-4 col-md-offset-4\">
\t\t\t\t";
            // line 254
            echo $this->env->getExtension('translator')->getTranslator()->trans("Wall Courts", array(), "messages");
            echo "&nbsp";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["club"]) ? $context["club"] : $this->getContext($context, "club")), "wallCourts", array()), "html", null, true);
            echo "<br />
\t\t\t</div>
\t\t</div>
\t";
        }
        // line 258
        echo "\t
\t";
        // line 259
        if ($this->getAttribute((isset($context["club"]) ? $context["club"] : $this->getContext($context, "club")), "coverCourts", array())) {
            // line 260
            echo "\t\t<div class=\"row user-info\">
\t\t\t<div class=\"col-md-4 col-md-offset-4\">
\t\t\t\t";
            // line 262
            echo $this->env->getExtension('translator')->getTranslator()->trans("Cover Courts", array(), "messages");
            echo "&nbsp";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["club"]) ? $context["club"] : $this->getContext($context, "club")), "coverCourts", array()), "html", null, true);
            echo "<br />
\t\t\t</div>\t
\t\t</div>
\t";
        }
        // line 266
        echo "
\t";
        // line 267
        if ($this->getAttribute((isset($context["club"]) ? $context["club"] : $this->getContext($context, "club")), "centralCourts", array())) {
            // line 268
            echo "\t\t<div class=\"row user-info\">
\t\t\t<div class=\"col-md-4 col-md-offset-4\">
\t\t\t\t";
            // line 270
            echo $this->env->getExtension('translator')->getTranslator()->trans("Central Courts", array(), "messages");
            echo "&nbsp";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["club"]) ? $context["club"] : $this->getContext($context, "club")), "centralCourts", array()), "html", null, true);
            echo "<br />
\t\t\t</div>
\t\t</div>
\t";
        }
        // line 274
        echo "
\t";
        // line 275
        if ($this->getAttribute((isset($context["club"]) ? $context["club"] : $this->getContext($context, "club")), "individualCourts", array())) {
            // line 276
            echo "\t\t<div class=\"row user-info\">
\t\t\t<div class=\"col-md-4 col-md-offset-4\">
\t\t\t\t";
            // line 278
            echo $this->env->getExtension('translator')->getTranslator()->trans("Individual Courts", array(), "messages");
            echo "&nbsp";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["club"]) ? $context["club"] : $this->getContext($context, "club")), "individualCourts", array()), "html", null, true);
            echo "<br />
\t\t\t</div>
\t\t</div>
\t";
        }
        // line 282
        echo "</div>

<div class=\"row\">
\t<div class=\"col-md-4 col-md-offset-4\">
\t\t\t<button type=\"button\" class=\"btn btn-info\" data-toggle=\"collapse\" data-target=\"#club_webs_";
        // line 286
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["club"]) ? $context["club"] : $this->getContext($context, "club")), "id", array()), "html", null, true);
        echo "\">Webs</button>
\t\t\t<br /><br />
\t</div>
</div>

<div id=\"club_webs_";
        // line 291
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["club"]) ? $context["club"] : $this->getContext($context, "club")), "id", array()), "html", null, true);
        echo "\" class=\"collapse\">
\t<div class=\"row user-info\">
\t\t<div class=\"col-md-1 col-md-offset-4\">
\t\t\tWeb
\t\t</div>
\t\t<div class=\"col-md-3\">
\t\t\t<div class=\"form-group input-group-sm\">
\t\t\t\t";
        // line 298
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["club"]) ? $context["club"] : $this->getContext($context, "club")), "url", array()), "html", null, true);
        echo "
\t\t\t</div>
\t\t</div>
\t</div>

\t<div class=\"row user-info\">
\t\t<div class=\"col-md-1 col-md-offset-4\">
\t\t\tFacebook
\t\t</div>
\t\t<div class=\"col-md-3\">
\t\t\t<div class=\"form-group input-group-sm\">
\t\t\t\t";
        // line 309
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["club"]) ? $context["club"] : $this->getContext($context, "club")), "facebookUrl", array()), "html", null, true);
        echo "
\t\t\t</div>
\t\t</div>
\t</div>

\t<div class=\"row user-info\">
\t\t<div class=\"col-md-1 col-md-offset-4\">
\t\t\tTwitter
\t\t</div>
\t\t<div class=\"col-md-3\">
\t\t\t<div class=\"form-group input-group-sm\">
\t\t\t\t";
        // line 320
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["club"]) ? $context["club"] : $this->getContext($context, "club")), "twitterUrl", array()), "html", null, true);
        echo "
\t\t\t</div>
\t\t</div>
\t</div>

\t<div class=\"row user-info\">
\t\t<div class=\"col-md-1 col-md-offset-4\">
\t\t\tInstagram
\t\t</div>
\t\t<div class=\"col-md-3\">
\t\t\t<div class=\"form-group input-group-sm\">
\t\t\t\t";
        // line 331
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["club"]) ? $context["club"] : $this->getContext($context, "club")), "instantgramUrl", array()), "html", null, true);
        echo "
\t\t\t</div>
\t\t</div>
\t</div>

\t<div class=\"row user-info\">
\t\t<div class=\"col-md-1 col-md-offset-4\">
\t\t\tSkype
\t\t</div>
\t\t<div class=\"col-md-3\">
\t\t\t<div class=\"form-group input-group-sm\">
\t\t\t\t";
        // line 342
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["club"]) ? $context["club"] : $this->getContext($context, "club")), "skypeUsername", array()), "html", null, true);
        echo "
\t\t\t</div>
\t\t</div>
\t</div>
</div>

<div class=\"row\">
\t<div class=\"col-md-4 col-md-offset-4\">
\t\t\t<button type=\"button\" class=\"btn btn-info\" data-toggle=\"collapse\" data-target=\"#club_contact_";
        // line 350
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["club"]) ? $context["club"] : $this->getContext($context, "club")), "id", array()), "html", null, true);
        echo "\">";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Contact", array(), "messages");
        echo "</button>
\t\t\t<br /><br />
\t</div>
</div>

<div id=\"club_contact_";
        // line 355
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["club"]) ? $context["club"] : $this->getContext($context, "club")), "id", array()), "html", null, true);
        echo "\" class=\"collapse\">

   \t<div class=\"row user-info\">
\t\t<div class=\"col-md-1 col-md-offset-4\">
\t\t\t";
        // line 359
        echo $this->env->getExtension('translator')->getTranslator()->trans("Name", array(), "messages");
        // line 360
        echo "\t\t</div>
\t\t<div class=\"col-md-3\">
\t\t\t<div class=\"form-group input-group-sm\">
\t\t\t\t";
        // line 363
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["club"]) ? $context["club"] : $this->getContext($context, "club")), "nombreContacto", array()), "html", null, true);
        echo "\t\t\t\t
\t\t\t</div>
\t\t</div>
\t</div>

\t<div class=\"row user-info\">
\t\t<div class=\"col-md-1 col-md-offset-4\">
\t\t\t";
        // line 370
        echo $this->env->getExtension('translator')->getTranslator()->trans("Email", array(), "messages");
        // line 371
        echo "\t\t</div>
\t\t<div class=\"col-md-3\">
\t\t\t<div class=\"form-group input-group-sm\">
\t\t\t\t";
        // line 374
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["club"]) ? $context["club"] : $this->getContext($context, "club")), "emailContacto", array()), "html", null, true);
        echo "
\t\t\t</div>
\t\t</div>
\t</div>

\t<div class=\"row user-info\">
\t\t<div class=\"col-md-1 col-md-offset-4\">
\t\t\t";
        // line 381
        echo $this->env->getExtension('translator')->getTranslator()->trans("Phone", array(), "messages");
        // line 382
        echo "\t\t</div>
\t\t<div class=\"col-md-3\">
\t\t\t<div class=\"form-group input-group-sm\">
\t\t\t\t";
        // line 385
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["club"]) ? $context["club"] : $this->getContext($context, "club")), "phoneNumberMovi", array()), "html", null, true);
        echo "
\t\t\t</div>
\t\t</div>
\t</div>
</div>

";
        // line 391
        if ((($this->env->getExtension('security')->isGranted("ROLE_ADMIN") || ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()) == $this->getAttribute((isset($context["club"]) ? $context["club"] : $this->getContext($context, "club")), "owner", array()))) || ($this->getAttribute((isset($context["club"]) ? $context["club"] : $this->getContext($context, "club")), "owner", array()) == null))) {
            // line 392
            echo "\t<div class=\"row user-info\">
\t\t<div class=\"col-md-3 col-md-offset-5\">
\t\t\t<button id=\"edit_button\" type=\"button\" class=\"btn btn-primary center\">";
            // line 394
            echo $this->env->getExtension('translator')->getTranslator()->trans("Edit Information", array(), "messages");
            echo "</button>
\t\t</div>
\t</div>
";
        }
        
        $__internal_4ed7d11f1a58059e5a4747683ce911ad76aa0ee52aaf0d8b19a0f685ae87f6b8->leave($__internal_4ed7d11f1a58059e5a4747683ce911ad76aa0ee52aaf0d8b19a0f685ae87f6b8_prof);

    }

    public function getTemplateName()
    {
        return "club/templates/showClubInfo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  774 => 394,  770 => 392,  768 => 391,  759 => 385,  754 => 382,  752 => 381,  742 => 374,  737 => 371,  735 => 370,  725 => 363,  720 => 360,  718 => 359,  711 => 355,  701 => 350,  690 => 342,  676 => 331,  662 => 320,  648 => 309,  634 => 298,  624 => 291,  616 => 286,  610 => 282,  601 => 278,  597 => 276,  595 => 275,  592 => 274,  583 => 270,  579 => 268,  577 => 267,  574 => 266,  565 => 262,  561 => 260,  559 => 259,  556 => 258,  547 => 254,  543 => 252,  541 => 251,  538 => 250,  529 => 246,  525 => 244,  523 => 243,  520 => 242,  511 => 238,  507 => 236,  505 => 235,  502 => 234,  493 => 230,  489 => 228,  487 => 227,  484 => 226,  475 => 222,  471 => 220,  469 => 219,  466 => 218,  457 => 214,  453 => 212,  451 => 211,  448 => 210,  439 => 206,  435 => 204,  433 => 203,  430 => 202,  421 => 198,  417 => 196,  415 => 195,  412 => 194,  403 => 190,  399 => 188,  397 => 187,  394 => 186,  385 => 182,  381 => 180,  379 => 179,  376 => 178,  367 => 174,  363 => 172,  361 => 171,  358 => 170,  349 => 166,  345 => 164,  343 => 163,  340 => 162,  331 => 158,  327 => 156,  325 => 155,  322 => 154,  313 => 150,  309 => 148,  307 => 147,  304 => 146,  295 => 142,  291 => 140,  289 => 139,  286 => 138,  277 => 134,  273 => 132,  271 => 131,  268 => 130,  259 => 126,  255 => 124,  253 => 123,  250 => 122,  241 => 118,  237 => 116,  235 => 115,  232 => 114,  223 => 110,  219 => 108,  217 => 107,  214 => 106,  205 => 102,  201 => 100,  199 => 99,  196 => 98,  187 => 94,  183 => 92,  181 => 91,  178 => 90,  169 => 86,  165 => 84,  163 => 83,  160 => 82,  152 => 77,  147 => 74,  145 => 73,  141 => 71,  139 => 70,  135 => 69,  126 => 65,  116 => 58,  111 => 55,  109 => 54,  99 => 47,  94 => 44,  92 => 43,  82 => 36,  77 => 33,  75 => 32,  65 => 25,  60 => 22,  58 => 21,  48 => 14,  43 => 11,  41 => 10,  35 => 7,  26 => 3,  22 => 1,);
    }
}
/* <div class="row">*/
/* 	<div class="col-md-4 col-md-offset-4">*/
/* 		<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#club_data_{{ club.id }}">{% trans %}Club's Data{% endtrans %}</button>*/
/* 		<br /><br />*/
/* 	</div>*/
/* </div>*/
/* <div id="club_data_{{ club.id }}" class="collapse">*/
/* 	<div class="row user-info">*/
/* 		<div class="col-md-1 col-md-offset-4">*/
/* 			{% trans %}Name{% endtrans %}*/
/* 		</div>*/
/* 		<div class="col-md-3">*/
/* 			<div class="form-group input-group-sm">*/
/* 				{{ club.name }}*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* */
/* 	<div class="row user-info">*/
/* 		<div class="col-md-1 col-md-offset-4">*/
/* 			{% trans %}Phone{% endtrans %}*/
/* 		</div>*/
/* 		<div class="col-md-3">*/
/* 			<div class="form-group input-group-sm">*/
/* 				{{ club.phoneNumber }}*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* */
/* 	<div class="row user-info">*/
/* 		<div class="col-md-1 col-md-offset-4">*/
/* 			{% trans %}Email{% endtrans %}*/
/* 		</div>*/
/* 		<div class="col-md-3">*/
/* 			<div class="form-group input-group-sm">*/
/* 				{{ club.email }}*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* */
/* 	<div class="row user-info">*/
/* 		<div class="col-md-1 col-md-offset-4">*/
/* 			{% trans %}Address{% endtrans %}*/
/* 		</div>*/
/* 		<div class="col-md-3">*/
/* 			<div class="form-group input-group-sm">*/
/* 				{{ club.address }}*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* */
/* 	<div class="row user-info">*/
/* 		<div class="col-md-1 col-md-offset-4">*/
/* 			{% trans %}Schedule{% endtrans %}*/
/* 		</div>*/
/* 		<div class="col-md-3">*/
/* 			<div class="form-group input-group-sm">*/
/* 				{{ club.horario }}*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* <div class="row">*/
/* 	<div class="col-md-4 col-md-offset-4">*/
/* 			<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#club_installations_{{ club.id }}">{% trans %}Club's Installation{% endtrans %}</button>*/
/* 			<br /><br />*/
/* 	</div>*/
/* </div>*/
/* <div id="club_installations_{{ club.id }}" class="collapse">*/
/* 	{% if club.courts %}*/
/* 		<div class="row user-info">*/
/* 			<div class="col-md-1 col-md-offset-4">*/
/* 				{% trans %}Courts{% endtrans %}*/
/* 			</div>*/
/* 			<div class="col-md-3">*/
/* 				<div class="form-group input-group-sm">*/
/* 					{{ club.courts }}*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 	{% endif %}*/
/* */
/* 	{% if club.equipmentRental %}*/
/* 		<div class="row user-info">*/
/* 			<div class="col-md-4 col-md-offset-4">*/
/* 					{% trans %}Equipment Rental{% endtrans %}&nbsp{{ club.equipmentRental }}<br />*/
/* 			</div>*/
/* 		</div>*/
/* 	{% endif %}*/
/* 	*/
/* 	{% if club.foodServices %}*/
/* 		<div class="row user-info">*/
/* 			<div class="col-md-4 col-md-offset-4">*/
/* 					{% trans %}Food Services{% endtrans %}&nbsp{{ club.foodServices }}<br />*/
/* 			</div>*/
/* 		</div>*/
/* 	{% endif %}*/
/* */
/* 	{% if club.showers %}*/
/* 		<div class="row user-info">*/
/* 			<div class="col-md-4 col-md-offset-4">		*/
/* 					{% trans %}Showers{% endtrans %}&nbsp{{ club.showers }}<br />*/
/* 			</div>*/
/* 		</div>*/
/* 	{% endif %}*/
/* */
/* 	{% if club.disabledAccess %}*/
/* 		<div class="row user-info">*/
/* 			<div class="col-md-4 col-md-offset-4">*/
/* 				{% trans %}Disabled Access{% endtrans %}&nbsp{{ club.disabledAccess }}<br />*/
/* 			</div>*/
/* 		</div>*/
/* 	{% endif %}*/
/* */
/* 	{% if club.gym %}*/
/* 		<div class="row user-info">*/
/* 			<div class="col-md-4 col-md-offset-4">*/
/* 				{% trans %}Gym{% endtrans %}&nbsp{{ club.gym }}<br />*/
/* 			</div>*/
/* 		</div>*/
/* 	{% endif %}*/
/* */
/* 	{% if club.sauna %}*/
/* 		<div class="row user-info">*/
/* 			<div class="col-md-4 col-md-offset-4">*/
/* 				{% trans %}Sauna{% endtrans %}&nbsp{{ club.sauna }}<br />*/
/* 			</div>*/
/* 		</div>*/
/* 	{% endif %}*/
/* */
/* 	{% if club.kindergarten %}*/
/* 		<div class="row user-info">*/
/* 			<div class="col-md-4 col-md-offset-4">*/
/* 				{% trans %}Kindergarten{% endtrans %}&nbsp{{ club.kindergarten }}<br />*/
/* 			</div>*/
/* 		</div>*/
/* 	{% endif %}*/
/* */
/* 	{% if club.jacuzzi %}*/
/* 		<div class="row user-info">*/
/* 			<div class="col-md-4 col-md-offset-4">*/
/* 				{% trans %}Jacuzzi{% endtrans %}&nbsp{{ club.jacuzzi }}<br />*/
/* 			</div>*/
/* 		</div>*/
/* 	{% endif %}*/
/* */
/* 	{% if club.parking %}*/
/* 		<div class="row user-info">*/
/* 			<div class="col-md-4 col-md-offset-4">*/
/* 				{% trans %}Parking{% endtrans %}&nbsp{{ club.parking }}<br />*/
/* 			</div>*/
/* 		</div>*/
/* 	{% endif %}*/
/* */
/* 	{% if club.parkingMotorcycles %}*/
/* 		<div class="row user-info">*/
/* 			<div class="col-md-4 col-md-offset-4">*/
/* 				{% trans %}Parking Motorcycles{% endtrans %}&nbsp{{ club.parkingMotorcycles }}<br />*/
/* 			</div>*/
/* 		</div>*/
/* 	{% endif %}*/
/* */
/* 	{% if club.parkingBicycles %}*/
/* 		<div class="row user-info">*/
/* 			<div class="col-md-4 col-md-offset-4">*/
/* 				{% trans %}Parking Bicycles{% endtrans %}&nbsp{{ club.parkingBicycles }}<br />*/
/* 			</div>*/
/* 		</div>*/
/* 	{% endif %}*/
/* */
/* 	{% if club.waterpool %}*/
/* 		<div class="row user-info">*/
/* 			<div class="col-md-4 col-md-offset-4">*/
/* 				{% trans %}Waterpool{% endtrans %}&nbsp{{ club.waterpool }}<br />*/
/* 			</div>*/
/* 		</div>*/
/* 	{% endif %}*/
/* */
/* 	{% if club.locker %}*/
/* 		<div class="row user-info">*/
/* 			<div class="col-md-4 col-md-offset-4">		*/
/* 				{% trans %}Locker{% endtrans %}&nbsp{{ club.locker }}<br />*/
/* 			</div>*/
/* 		</div>*/
/* 	{% endif %}*/
/* */
/* 	{% if club.shop %}*/
/* 		<div class="row user-info">*/
/* 			<div class="col-md-4 col-md-offset-4">*/
/* 				{% trans %}Shop{% endtrans %}&nbsp{{ club.shop }}<br />*/
/* 			</div>*/
/* 		</div>*/
/* 	{% endif %}*/
/* */
/* 	{% if club.WiFi %}*/
/* 		<div class="row user-info">*/
/* 			<div class="col-md-4 col-md-offset-4">*/
/* 				{% trans %}WiFi{% endtrans %}&nbsp{{ club.WiFi }}<br />*/
/* 			</div>*/
/* 		</div>*/
/* 	{% endif %}*/
/* */
/* 	{% if club.playground %}*/
/* 		<div class="row user-info">*/
/* 			<div class="col-md-4 col-md-offset-4">		*/
/* 				{% trans %}Playground{% endtrans %}&nbsp{{ club.playground }}<br />*/
/* 			</div>*/
/* 		</div>*/
/* 	{% endif %}*/
/* */
/* 	{% if club.school %}*/
/* 		<div class="row user-info">*/
/* 			<div class="col-md-4 col-md-offset-4">		*/
/* 				{% trans %}School{% endtrans %}&nbsp{{ club.school }}<br />*/
/* 			</div>*/
/* 		</div>*/
/* 	{% endif %}*/
/* */
/* 	{% if club.americanTournament %}*/
/* 		<div class="row user-info">*/
/* 			<div class="col-md-4 col-md-offset-4">*/
/* 				{% trans %}American Tournament{% endtrans %}&nbsp{{ club.americanTournament }}<br />*/
/* 			</div>*/
/* 		</div>*/
/* 	{% endif %}*/
/* */
/* 	{% if club.leagues %}*/
/* 		<div class="row user-info">*/
/* 			<div class="col-md-4 col-md-offset-4">*/
/* 				{% trans %}Leagues{% endtrans %}&nbsp{{ club.leagues }}<br />*/
/* 			</div>*/
/* 		</div>*/
/* 	{% endif %}*/
/* */
/* 	{% if club.ilumination %}*/
/* 		<div class="row user-info">*/
/* 			<div class="col-md-4 col-md-offset-4">*/
/* 				{% trans %}Ilumination{% endtrans %}&nbsp{{ club.ilumination }}<br />*/
/* 			</div>	*/
/* 		</div>*/
/* 	{% endif %}*/
/* */
/* 	{% if club.crystalCourts %}*/
/* 		<div class="row user-info">*/
/* 			<div class="col-md-4 col-md-offset-4">*/
/* 				{% trans %}Crystal Courts{% endtrans %}&nbsp{{ club.crystalCourts }}<br />*/
/* 			</div>*/
/* 		</div>*/
/* 	{% endif %}*/
/* */
/* 	{% if club.wallCourts %}*/
/* 		<div class="row user-info">*/
/* 			<div class="col-md-4 col-md-offset-4">*/
/* 				{% trans %}Wall Courts{% endtrans %}&nbsp{{ club.wallCourts }}<br />*/
/* 			</div>*/
/* 		</div>*/
/* 	{% endif %}*/
/* 	*/
/* 	{% if club.coverCourts %}*/
/* 		<div class="row user-info">*/
/* 			<div class="col-md-4 col-md-offset-4">*/
/* 				{% trans %}Cover Courts{% endtrans %}&nbsp{{ club.coverCourts }}<br />*/
/* 			</div>	*/
/* 		</div>*/
/* 	{% endif %}*/
/* */
/* 	{% if club.centralCourts %}*/
/* 		<div class="row user-info">*/
/* 			<div class="col-md-4 col-md-offset-4">*/
/* 				{% trans %}Central Courts{% endtrans %}&nbsp{{ club.centralCourts }}<br />*/
/* 			</div>*/
/* 		</div>*/
/* 	{% endif %}*/
/* */
/* 	{% if club.individualCourts %}*/
/* 		<div class="row user-info">*/
/* 			<div class="col-md-4 col-md-offset-4">*/
/* 				{% trans %}Individual Courts{% endtrans %}&nbsp{{ club.individualCourts }}<br />*/
/* 			</div>*/
/* 		</div>*/
/* 	{% endif %}*/
/* </div>*/
/* */
/* <div class="row">*/
/* 	<div class="col-md-4 col-md-offset-4">*/
/* 			<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#club_webs_{{ club.id }}">Webs</button>*/
/* 			<br /><br />*/
/* 	</div>*/
/* </div>*/
/* */
/* <div id="club_webs_{{ club.id }}" class="collapse">*/
/* 	<div class="row user-info">*/
/* 		<div class="col-md-1 col-md-offset-4">*/
/* 			Web*/
/* 		</div>*/
/* 		<div class="col-md-3">*/
/* 			<div class="form-group input-group-sm">*/
/* 				{{ club.url }}*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* */
/* 	<div class="row user-info">*/
/* 		<div class="col-md-1 col-md-offset-4">*/
/* 			Facebook*/
/* 		</div>*/
/* 		<div class="col-md-3">*/
/* 			<div class="form-group input-group-sm">*/
/* 				{{ club.facebookUrl }}*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* */
/* 	<div class="row user-info">*/
/* 		<div class="col-md-1 col-md-offset-4">*/
/* 			Twitter*/
/* 		</div>*/
/* 		<div class="col-md-3">*/
/* 			<div class="form-group input-group-sm">*/
/* 				{{ club.twitterUrl }}*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* */
/* 	<div class="row user-info">*/
/* 		<div class="col-md-1 col-md-offset-4">*/
/* 			Instagram*/
/* 		</div>*/
/* 		<div class="col-md-3">*/
/* 			<div class="form-group input-group-sm">*/
/* 				{{ club.instantgramUrl }}*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* */
/* 	<div class="row user-info">*/
/* 		<div class="col-md-1 col-md-offset-4">*/
/* 			Skype*/
/* 		</div>*/
/* 		<div class="col-md-3">*/
/* 			<div class="form-group input-group-sm">*/
/* 				{{ club.skypeUsername }}*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* */
/* <div class="row">*/
/* 	<div class="col-md-4 col-md-offset-4">*/
/* 			<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#club_contact_{{ club.id }}">{% trans %}Contact{% endtrans %}</button>*/
/* 			<br /><br />*/
/* 	</div>*/
/* </div>*/
/* */
/* <div id="club_contact_{{ club.id }}" class="collapse">*/
/* */
/*    	<div class="row user-info">*/
/* 		<div class="col-md-1 col-md-offset-4">*/
/* 			{% trans %}Name{% endtrans %}*/
/* 		</div>*/
/* 		<div class="col-md-3">*/
/* 			<div class="form-group input-group-sm">*/
/* 				{{ club.nombreContacto }}				*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* */
/* 	<div class="row user-info">*/
/* 		<div class="col-md-1 col-md-offset-4">*/
/* 			{% trans %}Email{% endtrans %}*/
/* 		</div>*/
/* 		<div class="col-md-3">*/
/* 			<div class="form-group input-group-sm">*/
/* 				{{ club.emailContacto }}*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* */
/* 	<div class="row user-info">*/
/* 		<div class="col-md-1 col-md-offset-4">*/
/* 			{% trans %}Phone{% endtrans %}*/
/* 		</div>*/
/* 		<div class="col-md-3">*/
/* 			<div class="form-group input-group-sm">*/
/* 				{{ club.phoneNumberMovi }}*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* */
/* {% if is_granted('ROLE_ADMIN') or app.user.id == club.owner or club.owner ==  null %}*/
/* 	<div class="row user-info">*/
/* 		<div class="col-md-3 col-md-offset-5">*/
/* 			<button id="edit_button" type="button" class="btn btn-primary center">{% trans %}Edit Information{% endtrans %}</button>*/
/* 		</div>*/
/* 	</div>*/
/* {% endif %}*/
