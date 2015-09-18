<?php

/* CursoMainBundle:Default:index.html.twig */
class __TwigTemplate_d6803f29d657d57163909deaa814480bd75ddbbf9beb3adcc72409a2735e1210 extends Twig_Template
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
        $__internal_6d8affb13cf04f55915e2be2e6aba23e85bcaece4e3b7ac5dfc2f6488e26b99d = $this->env->getExtension("native_profiler");
        $__internal_6d8affb13cf04f55915e2be2e6aba23e85bcaece4e3b7ac5dfc2f6488e26b99d->enter($__internal_6d8affb13cf04f55915e2be2e6aba23e85bcaece4e3b7ac5dfc2f6488e26b99d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CursoMainBundle:Default:index.html.twig"));

        // line 1
        echo "Hello ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "!
";
        
        $__internal_6d8affb13cf04f55915e2be2e6aba23e85bcaece4e3b7ac5dfc2f6488e26b99d->leave($__internal_6d8affb13cf04f55915e2be2e6aba23e85bcaece4e3b7ac5dfc2f6488e26b99d_prof);

    }

    public function getTemplateName()
    {
        return "CursoMainBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
