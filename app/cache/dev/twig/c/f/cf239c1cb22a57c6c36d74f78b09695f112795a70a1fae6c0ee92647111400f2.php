<?php

/* SensioDistributionBundle::Configurator/layout.html.twig */
class __TwigTemplate_cf239c1cb22a57c6c36d74f78b09695f112795a70a1fae6c0ee92647111400f2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "SensioDistributionBundle::Configurator/layout.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ada25a85c291ad0b0f3d141858e91a6550a405027c889333fc8c2b6b26b1fcae = $this->env->getExtension("native_profiler");
        $__internal_ada25a85c291ad0b0f3d141858e91a6550a405027c889333fc8c2b6b26b1fcae->enter($__internal_ada25a85c291ad0b0f3d141858e91a6550a405027c889333fc8c2b6b26b1fcae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ada25a85c291ad0b0f3d141858e91a6550a405027c889333fc8c2b6b26b1fcae->leave($__internal_ada25a85c291ad0b0f3d141858e91a6550a405027c889333fc8c2b6b26b1fcae_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_09e341fc63fa5e8f1f0c6ac8afddafca9e2412fbc543ba1e7c70f1b3a971360d = $this->env->getExtension("native_profiler");
        $__internal_09e341fc63fa5e8f1f0c6ac8afddafca9e2412fbc543ba1e7c70f1b3a971360d->enter($__internal_09e341fc63fa5e8f1f0c6ac8afddafca9e2412fbc543ba1e7c70f1b3a971360d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_09e341fc63fa5e8f1f0c6ac8afddafca9e2412fbc543ba1e7c70f1b3a971360d->leave($__internal_09e341fc63fa5e8f1f0c6ac8afddafca9e2412fbc543ba1e7c70f1b3a971360d_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_d52514ef2da3b496119c8e96b8763d2d049bd113238282615a960100b5f443ed = $this->env->getExtension("native_profiler");
        $__internal_d52514ef2da3b496119c8e96b8763d2d049bd113238282615a960100b5f443ed->enter($__internal_d52514ef2da3b496119c8e96b8763d2d049bd113238282615a960100b5f443ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_d52514ef2da3b496119c8e96b8763d2d049bd113238282615a960100b5f443ed->leave($__internal_d52514ef2da3b496119c8e96b8763d2d049bd113238282615a960100b5f443ed_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_c0496b8aca2826b9e77d98aaf25c18990bc8dc57afc39efe540b34b3c5c2a6e8 = $this->env->getExtension("native_profiler");
        $__internal_c0496b8aca2826b9e77d98aaf25c18990bc8dc57afc39efe540b34b3c5c2a6e8->enter($__internal_c0496b8aca2826b9e77d98aaf25c18990bc8dc57afc39efe540b34b3c5c2a6e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    <div class=\"block\">
        ";
        // line 11
        $this->displayBlock('content', $context, $blocks);
        // line 12
        echo "    </div>
    <div class=\"version\">Symfony Standard Edition v.";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : $this->getContext($context, "version")), "html", null, true);
        echo "</div>
";
        
        $__internal_c0496b8aca2826b9e77d98aaf25c18990bc8dc57afc39efe540b34b3c5c2a6e8->leave($__internal_c0496b8aca2826b9e77d98aaf25c18990bc8dc57afc39efe540b34b3c5c2a6e8_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_8662de8486ff5958b9fbb4b54c2a39a2d90ec0c6e0d4dad54c79026be35c345b = $this->env->getExtension("native_profiler");
        $__internal_8662de8486ff5958b9fbb4b54c2a39a2d90ec0c6e0d4dad54c79026be35c345b->enter($__internal_8662de8486ff5958b9fbb4b54c2a39a2d90ec0c6e0d4dad54c79026be35c345b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_8662de8486ff5958b9fbb4b54c2a39a2d90ec0c6e0d4dad54c79026be35c345b->leave($__internal_8662de8486ff5958b9fbb4b54c2a39a2d90ec0c6e0d4dad54c79026be35c345b_prof);

    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 11,  79 => 13,  76 => 12,  74 => 11,  71 => 10,  65 => 9,  53 => 7,  43 => 4,  37 => 3,  11 => 1,);
    }
}
