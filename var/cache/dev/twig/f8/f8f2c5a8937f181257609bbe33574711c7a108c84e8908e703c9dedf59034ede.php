<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_cd6cd73b7e22ceb5f85062418933c9eb929c88dadee6d7d0c1aedab2ed4fa0a1 extends Twig_Template
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
        $__internal_4fa09d0b6201a908f48356ca59d19bf9cbaa7e61ed94308a98a3c6e63637ca97 = $this->env->getExtension("native_profiler");
        $__internal_4fa09d0b6201a908f48356ca59d19bf9cbaa7e61ed94308a98a3c6e63637ca97->enter($__internal_4fa09d0b6201a908f48356ca59d19bf9cbaa7e61ed94308a98a3c6e63637ca97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_4fa09d0b6201a908f48356ca59d19bf9cbaa7e61ed94308a98a3c6e63637ca97->leave($__internal_4fa09d0b6201a908f48356ca59d19bf9cbaa7e61ed94308a98a3c6e63637ca97_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
