<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_a309f54667f0b6f6cf3962c07e714f32fe566e0de6de18325872c84af933d243 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3b5edaaeae9574a1932dad32ead1fbaa2a9dd13d0d7e21a1232845d375165633 = $this->env->getExtension("native_profiler");
        $__internal_3b5edaaeae9574a1932dad32ead1fbaa2a9dd13d0d7e21a1232845d375165633->enter($__internal_3b5edaaeae9574a1932dad32ead1fbaa2a9dd13d0d7e21a1232845d375165633_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3b5edaaeae9574a1932dad32ead1fbaa2a9dd13d0d7e21a1232845d375165633->leave($__internal_3b5edaaeae9574a1932dad32ead1fbaa2a9dd13d0d7e21a1232845d375165633_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_11ef71e5dd93649c42ddc8ba5c4e8099b34bbea3d29605b8b267de08974c1f8e = $this->env->getExtension("native_profiler");
        $__internal_11ef71e5dd93649c42ddc8ba5c4e8099b34bbea3d29605b8b267de08974c1f8e->enter($__internal_11ef71e5dd93649c42ddc8ba5c4e8099b34bbea3d29605b8b267de08974c1f8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_11ef71e5dd93649c42ddc8ba5c4e8099b34bbea3d29605b8b267de08974c1f8e->leave($__internal_11ef71e5dd93649c42ddc8ba5c4e8099b34bbea3d29605b8b267de08974c1f8e_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_38839b0660288f2c46b6f59055315b70b6ebddbc3f1aa9017fb1cef550ea6dad = $this->env->getExtension("native_profiler");
        $__internal_38839b0660288f2c46b6f59055315b70b6ebddbc3f1aa9017fb1cef550ea6dad->enter($__internal_38839b0660288f2c46b6f59055315b70b6ebddbc3f1aa9017fb1cef550ea6dad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_38839b0660288f2c46b6f59055315b70b6ebddbc3f1aa9017fb1cef550ea6dad->leave($__internal_38839b0660288f2c46b6f59055315b70b6ebddbc3f1aa9017fb1cef550ea6dad_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_62cd1582c38ade520901aeee70e75c1badbdcb682ecfd9d2d51c91ebddc3b505 = $this->env->getExtension("native_profiler");
        $__internal_62cd1582c38ade520901aeee70e75c1badbdcb682ecfd9d2d51c91ebddc3b505->enter($__internal_62cd1582c38ade520901aeee70e75c1badbdcb682ecfd9d2d51c91ebddc3b505_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_62cd1582c38ade520901aeee70e75c1badbdcb682ecfd9d2d51c91ebddc3b505->leave($__internal_62cd1582c38ade520901aeee70e75c1badbdcb682ecfd9d2d51c91ebddc3b505_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
