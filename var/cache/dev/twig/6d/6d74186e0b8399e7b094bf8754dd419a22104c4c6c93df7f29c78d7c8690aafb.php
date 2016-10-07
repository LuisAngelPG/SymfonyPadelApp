<?php

/* /club/templates/editClubInfo.html.twig */
class __TwigTemplate_786ceef8903de141518df7c6db10c3c864f517fc6ae66faa3bf0922130fd39a5 extends Twig_Template
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
        $__internal_4f608c7ac7ddf6a2a435cfc702c73afc119c530971cd4a4ffdfdd00c57ec0912 = $this->env->getExtension("native_profiler");
        $__internal_4f608c7ac7ddf6a2a435cfc702c73afc119c530971cd4a4ffdfdd00c57ec0912->enter($__internal_4f608c7ac7ddf6a2a435cfc702c73afc119c530971cd4a4ffdfdd00c57ec0912_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "/club/templates/editClubInfo.html.twig"));

        // line 1
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('routing')->getPath("clubAjaxEdit", array("clubId" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))))));
        echo "
<div class=\"row\">
\t<div class=\"col-md-offset-4 col-md-4\">
\t\t<div class=\"form-group input-group-md\">
\t\t\t";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "image", array()), 'widget');
        echo "
\t\t</div>
\t\t";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "oldPathImage", array()), 'widget');
        echo "
\t</div>
</div>

<div class=\"row\">
\t<div class=\"col-md-4 col-md-offset-4\">
\t\t<button type=\"button\" class=\"btn btn-info\" data-toggle=\"collapse\" data-target=\"#club_data\">";
        // line 13
        echo $this->env->getExtension('translator')->getTranslator()->trans("Club's Data", array(), "messages");
        echo "</button>
\t\t<br /><br />
\t</div>
</div>

<div id=\"club_data\" class=\"collapse\">
\t<div class=\"row\">
\t\t<div class=\"col-md-offset-4 col-md-1\">
\t\t\t";
        // line 21
        echo $this->env->getExtension('translator')->getTranslator()->trans("Name", array(), "messages");
        // line 22
        echo "\t\t</div>
\t\t<div class=\"col-md-3 form-group input-group-md\">
\t\t\t";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'widget');
        echo "
\t\t</div>
\t</div>
\t<div class=\"row\">
\t\t<div class=\"col-md-offset-4 col-md-1\">
\t\t\t";
        // line 29
        echo $this->env->getExtension('translator')->getTranslator()->trans("Phone", array(), "messages");
        // line 30
        echo "\t\t</div>
\t\t<div class=\"col-md-3 form-group input-group-md\">
\t\t\t";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "phoneNumber", array()), 'widget');
        echo "
\t\t</div>
\t</div>
\t<div class=\"row\">
\t\t<div class=\"col-md-offset-4 col-md-1\">
\t\t\t";
        // line 37
        echo $this->env->getExtension('translator')->getTranslator()->trans("Email", array(), "messages");
        // line 38
        echo "\t\t</div>
\t\t<div class=\"col-md-3 form-group input-group-md\">
\t\t\t";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget');
        echo "
\t\t</div>
\t</div>
\t<div class=\"row\">
\t\t<div class=\"col-md-offset-4 col-md-1\">
\t\t\t";
        // line 45
        echo $this->env->getExtension('translator')->getTranslator()->trans("Location", array(), "messages");
        // line 46
        echo "\t\t</div>
\t\t<div class=\"col-md-3 form-group input-group-md\">
\t\t\t";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "location", array()), 'widget', array("attr" => array("id" => "autocomplete", "onFocus" => "geolocate()")));
        echo "
\t\t</div>
\t</div>
\t<div class=\"row\">
\t\t<div class=\"col-md-offset-4 col-md-1\">
\t\t\t";
        // line 53
        echo $this->env->getExtension('translator')->getTranslator()->trans("Schedule", array(), "messages");
        // line 54
        echo "\t\t</div>
\t\t<div class=\"col-md-3 form-group input-group-md\">
\t\t\t";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "horario", array()), 'widget');
        echo "
\t\t</div>
\t</div>
</div>

<div class=\"row\">
\t<div class=\"col-md-4 col-md-offset-4\">
\t\t<button type=\"button\" class=\"btn btn-info\" data-toggle=\"collapse\" data-target=\"#club_installations\">";
        // line 63
        echo $this->env->getExtension('translator')->getTranslator()->trans("Club's Installation", array(), "messages");
        echo "</button>
\t\t<br /><br />
\t</div>
</div>

<div id=\"club_installations\" class=\"collapse\">
\t<div class=\"row\">
\t\t<div class=\"col-md-offset-4 col-md-1\">
\t\t\t";
        // line 71
        echo $this->env->getExtension('translator')->getTranslator()->trans("Courts", array(), "messages");
        // line 72
        echo "\t\t</div>
\t\t<div class=\"col-md-3 form-group input-group-md\">
\t\t\t";
        // line 74
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "amountCourt", array()), 'widget');
        echo "
\t\t</div>
\t</div>
\t<div class=\"row\">
\t\t<div class=\"col-md-offset-4 col-md-1\">
\t\t\t";
        // line 79
        echo $this->env->getExtension('translator')->getTranslator()->trans("Crystal Courts", array(), "messages");
        // line 80
        echo "\t\t</div>
\t\t<div class=\"col-md-3 form-group input-group-md\">
\t\t\t";
        // line 82
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "crystalCourts", array()), 'widget');
        echo "
\t\t</div>
\t</div>
\t<div class=\"row\">
\t\t<div class=\"col-md-offset-4 col-md-1\">
\t\t\t";
        // line 87
        echo $this->env->getExtension('translator')->getTranslator()->trans("Wall Courts", array(), "messages");
        // line 88
        echo "\t\t</div>
\t\t<div class=\"col-md-3 form-group input-group-md\">
\t\t\t";
        // line 90
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "wallCourts", array()), 'widget');
        echo "
\t\t</div>
\t</div>
\t<div class=\"row\">
\t\t<div class=\"col-md-offset-4 col-md-1\">
\t\t\t";
        // line 95
        echo $this->env->getExtension('translator')->getTranslator()->trans("Cover Courts", array(), "messages");
        // line 96
        echo "\t\t</div>
\t\t<div class=\"col-md-3 form-group input-group-md\">
\t\t\t";
        // line 98
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "coverCourts", array()), 'widget');
        echo "
\t\t</div>
\t</div>
\t<div class=\"row\">
\t\t<div class=\"col-md-offset-4 col-md-1\">
\t\t\t";
        // line 103
        echo $this->env->getExtension('translator')->getTranslator()->trans("Central Courts", array(), "messages");
        // line 104
        echo "\t\t</div>
\t\t<div class=\"col-md-3 form-group input-group-md\">
\t\t\t";
        // line 106
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "centralCourts", array()), 'widget');
        echo "
\t\t</div>
\t</div>
\t<div class=\"row\">
\t\t<div class=\"col-md-offset-4 col-md-1\">
\t\t\t";
        // line 111
        echo $this->env->getExtension('translator')->getTranslator()->trans("Individual Courts", array(), "messages");
        // line 112
        echo "\t\t</div>
\t\t<div class=\"col-md-3 form-group input-group-md\">
\t\t\t";
        // line 114
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "individualCourts", array()), 'widget');
        echo "
\t\t</div>
\t</div>
\t<div class=\"row\">
\t\t<div class=\"col-md-offset-4 col-md-1\">
\t\t\t";
        // line 119
        echo $this->env->getExtension('translator')->getTranslator()->trans("Equipment Rental", array(), "messages");
        // line 120
        echo "\t\t</div>
\t\t<div class=\"col-md-3 form-group input-group-md\">
\t\t\t";
        // line 122
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "equipmentRental", array()), 'widget');
        echo "
\t\t</div>
\t</div>
\t<div class=\"row\">
\t\t<div class=\"col-md-offset-4 col-md-1\">
\t\t\t";
        // line 127
        echo $this->env->getExtension('translator')->getTranslator()->trans("Food Services", array(), "messages");
        // line 128
        echo "\t\t</div>
\t\t<div class=\"col-md-3 form-group input-group-md\">
\t\t\t";
        // line 130
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "foodServices", array()), 'widget');
        echo "
\t\t</div>
\t</div>
\t<div class=\"row\">
\t\t<div class=\"col-md-offset-4 col-md-1\">
\t\t\t";
        // line 135
        echo $this->env->getExtension('translator')->getTranslator()->trans("Showers", array(), "messages");
        // line 136
        echo "\t\t</div>
\t\t<div class=\"col-md-3 form-group input-group-md\">
\t\t\t";
        // line 138
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "showers", array()), 'widget');
        echo "
\t\t</div>
\t</div>
\t<div class=\"row\">
\t\t<div class=\"col-md-offset-4 col-md-1\">
\t\t\t";
        // line 143
        echo $this->env->getExtension('translator')->getTranslator()->trans("Disabled Access", array(), "messages");
        // line 144
        echo "\t\t</div>
\t\t<div class=\"col-md-3 form-group input-group-md\">
\t\t\t";
        // line 146
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "disabledAccess", array()), 'widget');
        echo "
\t\t</div>
\t</div>
\t<div class=\"row\">
\t\t<div class=\"col-md-offset-4 col-md-1\">
\t\t\t";
        // line 151
        echo $this->env->getExtension('translator')->getTranslator()->trans("Gym", array(), "messages");
        // line 152
        echo "\t\t</div>
\t\t<div class=\"col-md-3 form-group input-group-md\">
\t\t\t";
        // line 154
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "gym", array()), 'widget');
        echo "
\t\t</div>
\t</div>
\t<div class=\"row\">
\t\t<div class=\"col-md-offset-4 col-md-1\">
\t\t\t";
        // line 159
        echo $this->env->getExtension('translator')->getTranslator()->trans("Sauna", array(), "messages");
        // line 160
        echo "\t\t</div>
\t\t<div class=\"col-md-3 form-group input-group-md\">
\t\t\t";
        // line 162
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sauna", array()), 'widget');
        echo "
\t\t</div>
\t</div>
\t<div class=\"row\">
\t\t<div class=\"col-md-offset-4 col-md-1\">
\t\t\t";
        // line 167
        echo $this->env->getExtension('translator')->getTranslator()->trans("Kindergarte", array(), "messages");
        // line 168
        echo "\t\t</div>
\t\t<div class=\"col-md-3 form-group input-group-md\">
\t\t\t";
        // line 170
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "kindergarten", array()), 'widget');
        echo "
\t\t</div>
\t</div>
\t<div class=\"row\">
\t\t<div class=\"col-md-offset-4 col-md-1\">
\t\t\t";
        // line 175
        echo $this->env->getExtension('translator')->getTranslator()->trans("Jacuzzi", array(), "messages");
        // line 176
        echo "\t\t</div>
\t\t<div class=\"col-md-3 form-group input-group-md\">
\t\t\t";
        // line 178
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "jacuzzi", array()), 'widget');
        echo "
\t\t</div>
\t</div>
\t<div class=\"row\">
\t\t<div class=\"col-md-offset-4 col-md-1\">
\t\t\t";
        // line 183
        echo $this->env->getExtension('translator')->getTranslator()->trans("Parking", array(), "messages");
        // line 184
        echo "\t\t</div>
\t\t<div class=\"col-md-3 form-group input-group-md\">
\t\t\t";
        // line 186
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parking", array()), 'widget');
        echo "
\t\t</div>
\t</div>
\t<div class=\"row\">
\t\t<div class=\"col-md-offset-4 col-md-1\">
\t\t\t";
        // line 191
        echo $this->env->getExtension('translator')->getTranslator()->trans("Parking Motorcycles", array(), "messages");
        // line 192
        echo "\t\t</div>
\t\t<div class=\"col-md-3 form-group input-group-md\">
\t\t\t";
        // line 194
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parkingMotorcycles", array()), 'widget');
        echo "
\t\t</div>
\t</div>
\t<div class=\"row\">
\t\t<div class=\"col-md-offset-4 col-md-1\">
\t\t\t";
        // line 199
        echo $this->env->getExtension('translator')->getTranslator()->trans("Parking Bicycles", array(), "messages");
        // line 200
        echo "\t\t</div>
\t\t<div class=\"col-md-3 form-group input-group-md\">
\t\t\t";
        // line 202
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parkingBicycles", array()), 'widget');
        echo "
\t\t</div>
\t</div>
\t<div class=\"row\">
\t\t<div class=\"col-md-offset-4 col-md-1\">
\t\t\t";
        // line 207
        echo $this->env->getExtension('translator')->getTranslator()->trans("Waterpool", array(), "messages");
        // line 208
        echo "\t\t</div>
\t\t<div class=\"col-md-3 form-group input-group-md\">
\t\t\t";
        // line 210
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "waterpool", array()), 'widget');
        echo "
\t\t</div>
\t</div>
\t<div class=\"row\">
\t\t<div class=\"col-md-offset-4 col-md-1\">
\t\t\t";
        // line 215
        echo $this->env->getExtension('translator')->getTranslator()->trans("Locker", array(), "messages");
        // line 216
        echo "\t\t</div>
\t\t<div class=\"col-md-3 form-group input-group-md\">
\t\t\t";
        // line 218
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "locker", array()), 'widget');
        echo "
\t\t</div>
\t</div>
\t<div class=\"row\">
\t\t<div class=\"col-md-offset-4 col-md-1\">
\t\t\t";
        // line 223
        echo $this->env->getExtension('translator')->getTranslator()->trans("Shop", array(), "messages");
        // line 224
        echo "\t\t</div>
\t\t<div class=\"col-md-3 form-group input-group-md\">
\t\t\t";
        // line 226
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "shop", array()), 'widget');
        echo "
\t\t</div>
\t</div>
\t<div class=\"row\">
\t\t<div class=\"col-md-offset-4 col-md-1\">
\t\t\t";
        // line 231
        echo $this->env->getExtension('translator')->getTranslator()->trans("Wifi", array(), "messages");
        // line 232
        echo "\t\t</div>
\t\t<div class=\"col-md-3 form-group input-group-md\">
\t\t\t";
        // line 234
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "wifi", array()), 'widget');
        echo "
\t\t</div>
\t</div>
\t<div class=\"row\">
\t\t<div class=\"col-md-offset-4 col-md-1\">
\t\t\t";
        // line 239
        echo $this->env->getExtension('translator')->getTranslator()->trans("Playground", array(), "messages");
        // line 240
        echo "\t\t</div>
\t\t<div class=\"col-md-3 form-group input-group-md\">
\t\t\t";
        // line 242
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "playground", array()), 'widget');
        echo "
\t\t</div>
\t</div>
\t<div class=\"row\">
\t\t<div class=\"col-md-offset-4 col-md-1\">
\t\t\t";
        // line 247
        echo $this->env->getExtension('translator')->getTranslator()->trans("School", array(), "messages");
        // line 248
        echo "\t\t</div>
\t\t<div class=\"col-md-3 form-group input-group-md\">
\t\t\t";
        // line 250
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "school", array()), 'widget');
        echo "
\t\t</div>
\t</div>
\t<div class=\"row\">
\t\t<div class=\"col-md-offset-4 col-md-1\">
\t\t\t";
        // line 255
        echo $this->env->getExtension('translator')->getTranslator()->trans("American Tournament", array(), "messages");
        // line 256
        echo "\t\t</div>
\t\t<div class=\"col-md-3 form-group input-group-md\">
\t\t\t";
        // line 258
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "americanTournament", array()), 'widget');
        echo "
\t\t</div>
\t</div>
\t<div class=\"row\">
\t\t<div class=\"col-md-offset-4 col-md-1\">
\t\t\t";
        // line 263
        echo $this->env->getExtension('translator')->getTranslator()->trans("Leagues", array(), "messages");
        // line 264
        echo "\t\t</div>
\t\t<div class=\"col-md-3 form-group input-group-md\">
\t\t\t";
        // line 266
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "leagues", array()), 'widget');
        echo "
\t\t</div>
\t</div>
\t<div class=\"row\">
\t\t<div class=\"col-md-offset-4 col-md-1\">
\t\t\t";
        // line 271
        echo $this->env->getExtension('translator')->getTranslator()->trans("Ilumination", array(), "messages");
        // line 272
        echo "\t\t</div>
\t\t<div class=\"col-md-3 form-group input-group-md\">
\t\t\t";
        // line 274
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ilumination", array()), 'widget');
        echo "
\t\t</div>
\t</div>
</div>

<div class=\"row\">
\t<div class=\"col-md-4 col-md-offset-4\">
\t\t<button type=\"button\" class=\"btn btn-info\" data-toggle=\"collapse\" data-target=\"#club_webs\">";
        // line 281
        echo $this->env->getExtension('translator')->getTranslator()->trans("Club's Data", array(), "messages");
        echo "</button>
\t\t<br /><br />
\t</div>
</div>

<div id=\"club_webs\" class=\"collapse\">
\t<div class=\"row\">
\t\t<div class=\"col-md-offset-4 col-md-1\">
\t\t\t";
        // line 289
        echo $this->env->getExtension('translator')->getTranslator()->trans("Web", array(), "messages");
        // line 290
        echo "\t\t</div>
\t\t<div class=\"col-md-3 form-group input-group-md\">
\t\t\t";
        // line 292
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "url", array()), 'widget');
        echo "
\t\t</div>
\t</div>
\t<div class=\"row\">
\t\t<div class=\"col-md-offset-4 col-md-1\">
\t\t\t";
        // line 297
        echo $this->env->getExtension('translator')->getTranslator()->trans("Facebook", array(), "messages");
        // line 298
        echo "\t\t</div>
\t\t<div class=\"col-md-3 form-group input-group-md\">
\t\t\t";
        // line 300
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "facebookUrl", array()), 'widget');
        echo "
\t\t</div>
\t</div>
\t<div class=\"row\">
\t\t<div class=\"col-md-offset-4 col-md-1\">
\t\t\t";
        // line 305
        echo $this->env->getExtension('translator')->getTranslator()->trans("Twitter", array(), "messages");
        // line 306
        echo "\t\t</div>
\t\t<div class=\"col-md-3 form-group input-group-md\">
\t\t\t";
        // line 308
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "twitterUrl", array()), 'widget');
        echo "
\t\t</div>
\t</div>
\t<div class=\"row\">
\t\t<div class=\"col-md-offset-4 col-md-1\">
\t\t\t";
        // line 313
        echo $this->env->getExtension('translator')->getTranslator()->trans("Instagram", array(), "messages");
        // line 314
        echo "\t\t</div>
\t\t<div class=\"col-md-3 form-group input-group-md\">
\t\t\t";
        // line 316
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "instantgramUrl", array()), 'widget');
        echo "
\t\t</div>
\t</div>
\t<div class=\"row\">
\t\t<div class=\"col-md-offset-4 col-md-1\">
\t\t\t";
        // line 321
        echo $this->env->getExtension('translator')->getTranslator()->trans("Skype", array(), "messages");
        // line 322
        echo "\t\t</div>
\t\t<div class=\"col-md-3 form-group input-group-md\">
\t\t\t";
        // line 324
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "skypeUsername", array()), 'widget');
        echo "
\t\t</div>
\t</div>
</div>

<div class=\"row\">
\t<div class=\"col-md-4 col-md-offset-4\">
\t\t<button type=\"button\" class=\"btn btn-info\" data-toggle=\"collapse\" data-target=\"#club_contact\">";
        // line 331
        echo $this->env->getExtension('translator')->getTranslator()->trans("Contact", array(), "messages");
        echo "</button>
\t\t<br /><br />
\t</div>
</div>

<div id=\"club_contact\" class=\"collapse\">
\t<div class=\"row\">
\t\t<div class=\"col-md-offset-4 col-md-1\">
\t\t\t";
        // line 339
        echo $this->env->getExtension('translator')->getTranslator()->trans("Name", array(), "messages");
        // line 340
        echo "\t\t</div>
\t\t<div class=\"col-md-3 form-group input-group-md\">
\t\t\t";
        // line 342
        if ((isset($context["owner"]) ? $context["owner"] : $this->getContext($context, "owner"))) {
            echo " 
\t\t\t\t";
            // line 343
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombreContacto", array()), 'widget');
            echo "
\t\t\t";
        } else {
            // line 345
            echo "\t\t\t\t";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["club"]) ? $context["club"] : $this->getContext($context, "club")), "nombreContacto", array()), "html", null, true);
            echo "&nbsp
\t\t\t";
        }
        // line 347
        echo "\t\t\t\t
\t\t</div>
\t</div>
\t<div class=\"row\">
\t\t<div class=\"col-md-offset-4 col-md-1\">
\t\t\t";
        // line 352
        echo $this->env->getExtension('translator')->getTranslator()->trans("Email", array(), "messages");
        // line 353
        echo "\t\t</div>
\t\t<div class=\"col-md-3 form-group input-group-md\">
\t\t\t";
        // line 355
        if ((isset($context["owner"]) ? $context["owner"] : $this->getContext($context, "owner"))) {
            echo " 
\t\t\t\t";
            // line 356
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "emailContacto", array()), 'widget');
            echo "
\t\t\t";
        } else {
            // line 358
            echo "\t\t\t\t";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["club"]) ? $context["club"] : $this->getContext($context, "club")), "emailContacto", array()), "html", null, true);
            echo "&nbsp
\t\t\t";
        }
        // line 360
        echo "\t\t</div>
\t</div>
\t<div class=\"row\">
\t\t<div class=\"col-md-offset-4 col-md-1\">
\t\t\t";
        // line 364
        echo $this->env->getExtension('translator')->getTranslator()->trans("Phone", array(), "messages");
        // line 365
        echo "\t\t</div>
\t\t<div class=\"col-md-3 form-group input-group-md\">
\t\t\t";
        // line 367
        if ((isset($context["owner"]) ? $context["owner"] : $this->getContext($context, "owner"))) {
            echo " 
\t\t\t\t";
            // line 368
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "phoneNumberMovi", array()), 'widget');
            echo "
\t\t\t";
        } else {
            // line 370
            echo "\t\t\t\t";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["club"]) ? $context["club"] : $this->getContext($context, "club")), "phoneNumberMovi", array()), "html", null, true);
            echo "&nbsp
\t\t\t";
        }
        // line 372
        echo "\t\t</div>
\t</div>
</div>

<div class=\"row user-info\">
\t<div class=\"col-md-3 col-md-offset-5\">
\t\t<div class=\"btn-group btn-block\">
\t\t\t<button type=\"submit\" onClick=\"fillInAddress();\" class=\"btn btn-success\">";
        // line 379
        echo $this->env->getExtension('translator')->getTranslator()->trans("Save", array(), "messages");
        echo "</button>
\t\t\t<button id=\"cancel_button\" type=\"button\" class=\"btn btn-danger\">";
        // line 380
        echo $this->env->getExtension('translator')->getTranslator()->trans("Cancel", array(), "messages");
        echo "</button>
\t\t</div>
\t</div>
</div>
";
        // line 384
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end', array("render_rest" => false));
        
        $__internal_4f608c7ac7ddf6a2a435cfc702c73afc119c530971cd4a4ffdfdd00c57ec0912->leave($__internal_4f608c7ac7ddf6a2a435cfc702c73afc119c530971cd4a4ffdfdd00c57ec0912_prof);

    }

    public function getTemplateName()
    {
        return "/club/templates/editClubInfo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  693 => 384,  686 => 380,  682 => 379,  673 => 372,  667 => 370,  662 => 368,  658 => 367,  654 => 365,  652 => 364,  646 => 360,  640 => 358,  635 => 356,  631 => 355,  627 => 353,  625 => 352,  618 => 347,  612 => 345,  607 => 343,  603 => 342,  599 => 340,  597 => 339,  586 => 331,  576 => 324,  572 => 322,  570 => 321,  562 => 316,  558 => 314,  556 => 313,  548 => 308,  544 => 306,  542 => 305,  534 => 300,  530 => 298,  528 => 297,  520 => 292,  516 => 290,  514 => 289,  503 => 281,  493 => 274,  489 => 272,  487 => 271,  479 => 266,  475 => 264,  473 => 263,  465 => 258,  461 => 256,  459 => 255,  451 => 250,  447 => 248,  445 => 247,  437 => 242,  433 => 240,  431 => 239,  423 => 234,  419 => 232,  417 => 231,  409 => 226,  405 => 224,  403 => 223,  395 => 218,  391 => 216,  389 => 215,  381 => 210,  377 => 208,  375 => 207,  367 => 202,  363 => 200,  361 => 199,  353 => 194,  349 => 192,  347 => 191,  339 => 186,  335 => 184,  333 => 183,  325 => 178,  321 => 176,  319 => 175,  311 => 170,  307 => 168,  305 => 167,  297 => 162,  293 => 160,  291 => 159,  283 => 154,  279 => 152,  277 => 151,  269 => 146,  265 => 144,  263 => 143,  255 => 138,  251 => 136,  249 => 135,  241 => 130,  237 => 128,  235 => 127,  227 => 122,  223 => 120,  221 => 119,  213 => 114,  209 => 112,  207 => 111,  199 => 106,  195 => 104,  193 => 103,  185 => 98,  181 => 96,  179 => 95,  171 => 90,  167 => 88,  165 => 87,  157 => 82,  153 => 80,  151 => 79,  143 => 74,  139 => 72,  137 => 71,  126 => 63,  116 => 56,  112 => 54,  110 => 53,  102 => 48,  98 => 46,  96 => 45,  88 => 40,  84 => 38,  82 => 37,  74 => 32,  70 => 30,  68 => 29,  60 => 24,  56 => 22,  54 => 21,  43 => 13,  34 => 7,  29 => 5,  22 => 1,);
    }
}
/* {{ form_start(form, {'action': path('clubAjaxEdit', {'clubId': id})}) }}*/
/* <div class="row">*/
/* 	<div class="col-md-offset-4 col-md-4">*/
/* 		<div class="form-group input-group-md">*/
/* 			{{form_widget(form.image)}}*/
/* 		</div>*/
/* 		{{form_widget(form.oldPathImage)}}*/
/* 	</div>*/
/* </div>*/
/* */
/* <div class="row">*/
/* 	<div class="col-md-4 col-md-offset-4">*/
/* 		<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#club_data">{% trans %}Club's Data{% endtrans %}</button>*/
/* 		<br /><br />*/
/* 	</div>*/
/* </div>*/
/* */
/* <div id="club_data" class="collapse">*/
/* 	<div class="row">*/
/* 		<div class="col-md-offset-4 col-md-1">*/
/* 			{%trans%}Name{%endtrans%}*/
/* 		</div>*/
/* 		<div class="col-md-3 form-group input-group-md">*/
/* 			{{form_widget(form.name)}}*/
/* 		</div>*/
/* 	</div>*/
/* 	<div class="row">*/
/* 		<div class="col-md-offset-4 col-md-1">*/
/* 			{%trans%}Phone{%endtrans%}*/
/* 		</div>*/
/* 		<div class="col-md-3 form-group input-group-md">*/
/* 			{{form_widget(form.phoneNumber)}}*/
/* 		</div>*/
/* 	</div>*/
/* 	<div class="row">*/
/* 		<div class="col-md-offset-4 col-md-1">*/
/* 			{%trans%}Email{%endtrans%}*/
/* 		</div>*/
/* 		<div class="col-md-3 form-group input-group-md">*/
/* 			{{form_widget(form.email)}}*/
/* 		</div>*/
/* 	</div>*/
/* 	<div class="row">*/
/* 		<div class="col-md-offset-4 col-md-1">*/
/* 			{%trans%}Location{%endtrans%}*/
/* 		</div>*/
/* 		<div class="col-md-3 form-group input-group-md">*/
/* 			{{ form_widget(form.location, {'attr': {'id': 'autocomplete', 'onFocus': 'geolocate()'}}) }}*/
/* 		</div>*/
/* 	</div>*/
/* 	<div class="row">*/
/* 		<div class="col-md-offset-4 col-md-1">*/
/* 			{%trans%}Schedule{%endtrans%}*/
/* 		</div>*/
/* 		<div class="col-md-3 form-group input-group-md">*/
/* 			{{form_widget(form.horario)}}*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* */
/* <div class="row">*/
/* 	<div class="col-md-4 col-md-offset-4">*/
/* 		<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#club_installations">{% trans %}Club's Installation{% endtrans %}</button>*/
/* 		<br /><br />*/
/* 	</div>*/
/* </div>*/
/* */
/* <div id="club_installations" class="collapse">*/
/* 	<div class="row">*/
/* 		<div class="col-md-offset-4 col-md-1">*/
/* 			{%trans%}Courts{%endtrans%}*/
/* 		</div>*/
/* 		<div class="col-md-3 form-group input-group-md">*/
/* 			{{form_widget(form.amountCourt)}}*/
/* 		</div>*/
/* 	</div>*/
/* 	<div class="row">*/
/* 		<div class="col-md-offset-4 col-md-1">*/
/* 			{%trans%}Crystal Courts{%endtrans%}*/
/* 		</div>*/
/* 		<div class="col-md-3 form-group input-group-md">*/
/* 			{{form_widget(form.crystalCourts)}}*/
/* 		</div>*/
/* 	</div>*/
/* 	<div class="row">*/
/* 		<div class="col-md-offset-4 col-md-1">*/
/* 			{%trans%}Wall Courts{%endtrans%}*/
/* 		</div>*/
/* 		<div class="col-md-3 form-group input-group-md">*/
/* 			{{form_widget(form.wallCourts)}}*/
/* 		</div>*/
/* 	</div>*/
/* 	<div class="row">*/
/* 		<div class="col-md-offset-4 col-md-1">*/
/* 			{%trans%}Cover Courts{%endtrans%}*/
/* 		</div>*/
/* 		<div class="col-md-3 form-group input-group-md">*/
/* 			{{form_widget(form.coverCourts)}}*/
/* 		</div>*/
/* 	</div>*/
/* 	<div class="row">*/
/* 		<div class="col-md-offset-4 col-md-1">*/
/* 			{%trans%}Central Courts{%endtrans%}*/
/* 		</div>*/
/* 		<div class="col-md-3 form-group input-group-md">*/
/* 			{{form_widget(form.centralCourts)}}*/
/* 		</div>*/
/* 	</div>*/
/* 	<div class="row">*/
/* 		<div class="col-md-offset-4 col-md-1">*/
/* 			{%trans%}Individual Courts{%endtrans%}*/
/* 		</div>*/
/* 		<div class="col-md-3 form-group input-group-md">*/
/* 			{{form_widget(form.individualCourts)}}*/
/* 		</div>*/
/* 	</div>*/
/* 	<div class="row">*/
/* 		<div class="col-md-offset-4 col-md-1">*/
/* 			{%trans%}Equipment Rental{%endtrans%}*/
/* 		</div>*/
/* 		<div class="col-md-3 form-group input-group-md">*/
/* 			{{form_widget(form.equipmentRental)}}*/
/* 		</div>*/
/* 	</div>*/
/* 	<div class="row">*/
/* 		<div class="col-md-offset-4 col-md-1">*/
/* 			{%trans%}Food Services{%endtrans%}*/
/* 		</div>*/
/* 		<div class="col-md-3 form-group input-group-md">*/
/* 			{{form_widget(form.foodServices)}}*/
/* 		</div>*/
/* 	</div>*/
/* 	<div class="row">*/
/* 		<div class="col-md-offset-4 col-md-1">*/
/* 			{%trans%}Showers{%endtrans%}*/
/* 		</div>*/
/* 		<div class="col-md-3 form-group input-group-md">*/
/* 			{{form_widget(form.showers)}}*/
/* 		</div>*/
/* 	</div>*/
/* 	<div class="row">*/
/* 		<div class="col-md-offset-4 col-md-1">*/
/* 			{%trans%}Disabled Access{%endtrans%}*/
/* 		</div>*/
/* 		<div class="col-md-3 form-group input-group-md">*/
/* 			{{form_widget(form.disabledAccess)}}*/
/* 		</div>*/
/* 	</div>*/
/* 	<div class="row">*/
/* 		<div class="col-md-offset-4 col-md-1">*/
/* 			{%trans%}Gym{%endtrans%}*/
/* 		</div>*/
/* 		<div class="col-md-3 form-group input-group-md">*/
/* 			{{form_widget(form.gym)}}*/
/* 		</div>*/
/* 	</div>*/
/* 	<div class="row">*/
/* 		<div class="col-md-offset-4 col-md-1">*/
/* 			{%trans%}Sauna{%endtrans%}*/
/* 		</div>*/
/* 		<div class="col-md-3 form-group input-group-md">*/
/* 			{{form_widget(form.sauna)}}*/
/* 		</div>*/
/* 	</div>*/
/* 	<div class="row">*/
/* 		<div class="col-md-offset-4 col-md-1">*/
/* 			{%trans%}Kindergarte{%endtrans%}*/
/* 		</div>*/
/* 		<div class="col-md-3 form-group input-group-md">*/
/* 			{{form_widget(form.kindergarten)}}*/
/* 		</div>*/
/* 	</div>*/
/* 	<div class="row">*/
/* 		<div class="col-md-offset-4 col-md-1">*/
/* 			{%trans%}Jacuzzi{%endtrans%}*/
/* 		</div>*/
/* 		<div class="col-md-3 form-group input-group-md">*/
/* 			{{form_widget(form.jacuzzi)}}*/
/* 		</div>*/
/* 	</div>*/
/* 	<div class="row">*/
/* 		<div class="col-md-offset-4 col-md-1">*/
/* 			{%trans%}Parking{%endtrans%}*/
/* 		</div>*/
/* 		<div class="col-md-3 form-group input-group-md">*/
/* 			{{form_widget(form.parking)}}*/
/* 		</div>*/
/* 	</div>*/
/* 	<div class="row">*/
/* 		<div class="col-md-offset-4 col-md-1">*/
/* 			{%trans%}Parking Motorcycles{%endtrans%}*/
/* 		</div>*/
/* 		<div class="col-md-3 form-group input-group-md">*/
/* 			{{form_widget(form.parkingMotorcycles)}}*/
/* 		</div>*/
/* 	</div>*/
/* 	<div class="row">*/
/* 		<div class="col-md-offset-4 col-md-1">*/
/* 			{%trans%}Parking Bicycles{%endtrans%}*/
/* 		</div>*/
/* 		<div class="col-md-3 form-group input-group-md">*/
/* 			{{form_widget(form.parkingBicycles)}}*/
/* 		</div>*/
/* 	</div>*/
/* 	<div class="row">*/
/* 		<div class="col-md-offset-4 col-md-1">*/
/* 			{%trans%}Waterpool{%endtrans%}*/
/* 		</div>*/
/* 		<div class="col-md-3 form-group input-group-md">*/
/* 			{{form_widget(form.waterpool)}}*/
/* 		</div>*/
/* 	</div>*/
/* 	<div class="row">*/
/* 		<div class="col-md-offset-4 col-md-1">*/
/* 			{%trans%}Locker{%endtrans%}*/
/* 		</div>*/
/* 		<div class="col-md-3 form-group input-group-md">*/
/* 			{{form_widget(form.locker)}}*/
/* 		</div>*/
/* 	</div>*/
/* 	<div class="row">*/
/* 		<div class="col-md-offset-4 col-md-1">*/
/* 			{%trans%}Shop{%endtrans%}*/
/* 		</div>*/
/* 		<div class="col-md-3 form-group input-group-md">*/
/* 			{{form_widget(form.shop)}}*/
/* 		</div>*/
/* 	</div>*/
/* 	<div class="row">*/
/* 		<div class="col-md-offset-4 col-md-1">*/
/* 			{%trans%}Wifi{%endtrans%}*/
/* 		</div>*/
/* 		<div class="col-md-3 form-group input-group-md">*/
/* 			{{form_widget(form.wifi)}}*/
/* 		</div>*/
/* 	</div>*/
/* 	<div class="row">*/
/* 		<div class="col-md-offset-4 col-md-1">*/
/* 			{%trans%}Playground{%endtrans%}*/
/* 		</div>*/
/* 		<div class="col-md-3 form-group input-group-md">*/
/* 			{{form_widget(form.playground)}}*/
/* 		</div>*/
/* 	</div>*/
/* 	<div class="row">*/
/* 		<div class="col-md-offset-4 col-md-1">*/
/* 			{%trans%}School{%endtrans%}*/
/* 		</div>*/
/* 		<div class="col-md-3 form-group input-group-md">*/
/* 			{{form_widget(form.school)}}*/
/* 		</div>*/
/* 	</div>*/
/* 	<div class="row">*/
/* 		<div class="col-md-offset-4 col-md-1">*/
/* 			{%trans%}American Tournament{%endtrans%}*/
/* 		</div>*/
/* 		<div class="col-md-3 form-group input-group-md">*/
/* 			{{form_widget(form.americanTournament)}}*/
/* 		</div>*/
/* 	</div>*/
/* 	<div class="row">*/
/* 		<div class="col-md-offset-4 col-md-1">*/
/* 			{%trans%}Leagues{%endtrans%}*/
/* 		</div>*/
/* 		<div class="col-md-3 form-group input-group-md">*/
/* 			{{form_widget(form.leagues)}}*/
/* 		</div>*/
/* 	</div>*/
/* 	<div class="row">*/
/* 		<div class="col-md-offset-4 col-md-1">*/
/* 			{%trans%}Ilumination{%endtrans%}*/
/* 		</div>*/
/* 		<div class="col-md-3 form-group input-group-md">*/
/* 			{{form_widget(form.ilumination)}}*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* */
/* <div class="row">*/
/* 	<div class="col-md-4 col-md-offset-4">*/
/* 		<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#club_webs">{% trans %}Club's Data{% endtrans %}</button>*/
/* 		<br /><br />*/
/* 	</div>*/
/* </div>*/
/* */
/* <div id="club_webs" class="collapse">*/
/* 	<div class="row">*/
/* 		<div class="col-md-offset-4 col-md-1">*/
/* 			{%trans%}Web{%endtrans%}*/
/* 		</div>*/
/* 		<div class="col-md-3 form-group input-group-md">*/
/* 			{{form_widget(form.url)}}*/
/* 		</div>*/
/* 	</div>*/
/* 	<div class="row">*/
/* 		<div class="col-md-offset-4 col-md-1">*/
/* 			{%trans%}Facebook{%endtrans%}*/
/* 		</div>*/
/* 		<div class="col-md-3 form-group input-group-md">*/
/* 			{{form_widget(form.facebookUrl)}}*/
/* 		</div>*/
/* 	</div>*/
/* 	<div class="row">*/
/* 		<div class="col-md-offset-4 col-md-1">*/
/* 			{%trans%}Twitter{%endtrans%}*/
/* 		</div>*/
/* 		<div class="col-md-3 form-group input-group-md">*/
/* 			{{form_widget(form.twitterUrl)}}*/
/* 		</div>*/
/* 	</div>*/
/* 	<div class="row">*/
/* 		<div class="col-md-offset-4 col-md-1">*/
/* 			{%trans%}Instagram{%endtrans%}*/
/* 		</div>*/
/* 		<div class="col-md-3 form-group input-group-md">*/
/* 			{{form_widget(form.instantgramUrl)}}*/
/* 		</div>*/
/* 	</div>*/
/* 	<div class="row">*/
/* 		<div class="col-md-offset-4 col-md-1">*/
/* 			{%trans%}Skype{%endtrans%}*/
/* 		</div>*/
/* 		<div class="col-md-3 form-group input-group-md">*/
/* 			{{form_widget(form.skypeUsername)}}*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* */
/* <div class="row">*/
/* 	<div class="col-md-4 col-md-offset-4">*/
/* 		<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#club_contact">{% trans %}Contact{% endtrans %}</button>*/
/* 		<br /><br />*/
/* 	</div>*/
/* </div>*/
/* */
/* <div id="club_contact" class="collapse">*/
/* 	<div class="row">*/
/* 		<div class="col-md-offset-4 col-md-1">*/
/* 			{%trans%}Name{%endtrans%}*/
/* 		</div>*/
/* 		<div class="col-md-3 form-group input-group-md">*/
/* 			{% if owner %} */
/* 				{{form_widget(form.nombreContacto)}}*/
/* 			{% else %}*/
/* 				{{ club.nombreContacto}}&nbsp*/
/* 			{% endif %}*/
/* 				*/
/* 		</div>*/
/* 	</div>*/
/* 	<div class="row">*/
/* 		<div class="col-md-offset-4 col-md-1">*/
/* 			{%trans%}Email{%endtrans%}*/
/* 		</div>*/
/* 		<div class="col-md-3 form-group input-group-md">*/
/* 			{% if owner %} */
/* 				{{form_widget(form.emailContacto)}}*/
/* 			{% else %}*/
/* 				{{ club.emailContacto }}&nbsp*/
/* 			{% endif %}*/
/* 		</div>*/
/* 	</div>*/
/* 	<div class="row">*/
/* 		<div class="col-md-offset-4 col-md-1">*/
/* 			{%trans%}Phone{%endtrans%}*/
/* 		</div>*/
/* 		<div class="col-md-3 form-group input-group-md">*/
/* 			{% if owner %} */
/* 				{{form_widget(form.phoneNumberMovi)}}*/
/* 			{% else %}*/
/* 				{{club.phoneNumberMovi}}&nbsp*/
/* 			{% endif %}*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* */
/* <div class="row user-info">*/
/* 	<div class="col-md-3 col-md-offset-5">*/
/* 		<div class="btn-group btn-block">*/
/* 			<button type="submit" onClick="fillInAddress();" class="btn btn-success">{% trans %}Save{% endtrans %}</button>*/
/* 			<button id="cancel_button" type="button" class="btn btn-danger">{% trans %}Cancel{% endtrans %}</button>*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* {{ form_end(form, {'render_rest': false}) }}*/
