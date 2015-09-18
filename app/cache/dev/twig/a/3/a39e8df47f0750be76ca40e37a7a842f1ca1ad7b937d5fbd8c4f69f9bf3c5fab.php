<?php

/* SensioDistributionBundle::Configurator/final.html.twig */
class __TwigTemplate_a39e8df47f0750be76ca40e37a7a842f1ca1ad7b937d5fbd8c4f69f9bf3c5fab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SensioDistributionBundle::Configurator/layout.html.twig", "SensioDistributionBundle::Configurator/final.html.twig", 1);
        $this->blocks = array(
            'content_class' => array($this, 'block_content_class'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_45b49e42ff4444bbd550a5f6fb704e43671745d0acb80ce7a7b9524af6a42f3c = $this->env->getExtension("native_profiler");
        $__internal_45b49e42ff4444bbd550a5f6fb704e43671745d0acb80ce7a7b9524af6a42f3c->enter($__internal_45b49e42ff4444bbd550a5f6fb704e43671745d0acb80ce7a7b9524af6a42f3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/final.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_45b49e42ff4444bbd550a5f6fb704e43671745d0acb80ce7a7b9524af6a42f3c->leave($__internal_45b49e42ff4444bbd550a5f6fb704e43671745d0acb80ce7a7b9524af6a42f3c_prof);

    }

    // line 3
    public function block_content_class($context, array $blocks = array())
    {
        $__internal_7e721d0c0d126b087b44f59b6741c4a20a56cb48c0b7b6681db7f3e779286e76 = $this->env->getExtension("native_profiler");
        $__internal_7e721d0c0d126b087b44f59b6741c4a20a56cb48c0b7b6681db7f3e779286e76->enter($__internal_7e721d0c0d126b087b44f59b6741c4a20a56cb48c0b7b6681db7f3e779286e76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_class"));

        echo "config_done";
        
        $__internal_7e721d0c0d126b087b44f59b6741c4a20a56cb48c0b7b6681db7f3e779286e76->leave($__internal_7e721d0c0d126b087b44f59b6741c4a20a56cb48c0b7b6681db7f3e779286e76_prof);

    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        $__internal_f613c0bc267a411e9a42d864418058a42a1daf6a0e851045a8fdba2faa717217 = $this->env->getExtension("native_profiler");
        $__internal_f613c0bc267a411e9a42d864418058a42a1daf6a0e851045a8fdba2faa717217->enter($__internal_f613c0bc267a411e9a42d864418058a42a1daf6a0e851045a8fdba2faa717217_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 5
        echo "    <div class=\"step\">
        <h1>Well done!</h1>
        ";
        // line 7
        if ((isset($context["is_writable"]) ? $context["is_writable"] : $this->getContext($context, "is_writable"))) {
            // line 8
            echo "        <h2>Your distribution is configured!</h2>
        ";
        } else {
            // line 10
            echo "        <h2 class=\"configure-error\">Your distribution is almost configured but...</h2>
        ";
        }
        // line 12
        echo "        <h3>
            <span>
                ";
        // line 14
        if ((isset($context["is_writable"]) ? $context["is_writable"] : $this->getContext($context, "is_writable"))) {
            // line 15
            echo "                    Your parameters.yml file has been overwritten with these parameters (in <em>";
            echo twig_escape_filter($this->env, (isset($context["yml_path"]) ? $context["yml_path"] : $this->getContext($context, "yml_path")), "html", null, true);
            echo "</em>):
                ";
        } else {
            // line 17
            echo "                    Your parameters.yml file is not writeable! Here are the parameters you can copy and paste in <em>";
            echo twig_escape_filter($this->env, (isset($context["yml_path"]) ? $context["yml_path"] : $this->getContext($context, "yml_path")), "html", null, true);
            echo "</em>:
                ";
        }
        // line 19
        echo "            </span>
        </h3>

        <textarea class=\"symfony-configuration\">";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["parameters"]) ? $context["parameters"] : $this->getContext($context, "parameters")), "html", null, true);
        echo "</textarea>

        ";
        // line 24
        if ((isset($context["welcome_url"]) ? $context["welcome_url"] : $this->getContext($context, "welcome_url"))) {
            // line 25
            echo "            <ul>
                <li><a href=\"";
            // line 26
            echo twig_escape_filter($this->env, (isset($context["welcome_url"]) ? $context["welcome_url"] : $this->getContext($context, "welcome_url")), "html", null, true);
            echo "\">Go to the Welcome page</a></li>
            </ul>
        ";
        }
        // line 29
        echo "    </div>
";
        
        $__internal_f613c0bc267a411e9a42d864418058a42a1daf6a0e851045a8fdba2faa717217->leave($__internal_f613c0bc267a411e9a42d864418058a42a1daf6a0e851045a8fdba2faa717217_prof);

    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle::Configurator/final.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 29,  100 => 26,  97 => 25,  95 => 24,  90 => 22,  85 => 19,  79 => 17,  73 => 15,  71 => 14,  67 => 12,  63 => 10,  59 => 8,  57 => 7,  53 => 5,  47 => 4,  35 => 3,  11 => 1,);
    }
}
