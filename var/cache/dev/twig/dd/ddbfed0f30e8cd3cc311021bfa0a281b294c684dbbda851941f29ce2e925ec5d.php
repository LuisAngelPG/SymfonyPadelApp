<?php

/* web/templates/friendsActivity.html.twig */
class __TwigTemplate_6c8499e460a642b04b2c8e5543c77cd95dc42dca4d251264dc9875e5ef8e15ba extends Twig_Template
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
        $__internal_1d4f26506b572f5fa403e4fbb6b25db535ae9e66144b33f58c03d68059ca4b89 = $this->env->getExtension("native_profiler");
        $__internal_1d4f26506b572f5fa403e4fbb6b25db535ae9e66144b33f58c03d68059ca4b89->enter($__internal_1d4f26506b572f5fa403e4fbb6b25db535ae9e66144b33f58c03d68059ca4b89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "web/templates/friendsActivity.html.twig"));

        // line 1
        echo "<div class=\"clubNews container-fluid\">
\t<div class=\"home-photo\">
\t\t<img src=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/web/img/avatar.jpg"), "html", null, true);
        echo "\" />
\t</div>
\t<div class=\"card-header-friends\">
\t\tMatch
\t</div>
\t<div class=\"card-text\">
\t\t¡Played a match with Fidel at Padel Club Maspalomas!
\t</div>
</div>";
        
        $__internal_1d4f26506b572f5fa403e4fbb6b25db535ae9e66144b33f58c03d68059ca4b89->leave($__internal_1d4f26506b572f5fa403e4fbb6b25db535ae9e66144b33f58c03d68059ca4b89_prof);

    }

    public function getTemplateName()
    {
        return "web/templates/friendsActivity.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  22 => 1,);
    }
}
/* <div class="clubNews container-fluid">*/
/* 	<div class="home-photo">*/
/* 		<img src="{{ asset('bundles/web/img/avatar.jpg') }}" />*/
/* 	</div>*/
/* 	<div class="card-header-friends">*/
/* 		Match*/
/* 	</div>*/
/* 	<div class="card-text">*/
/* 		¡Played a match with Fidel at Padel Club Maspalomas!*/
/* 	</div>*/
/* </div>*/
