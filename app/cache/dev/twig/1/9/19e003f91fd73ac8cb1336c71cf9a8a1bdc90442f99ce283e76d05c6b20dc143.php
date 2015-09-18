<?php

/* ::layout.html.twig */
class __TwigTemplate_19e003f91fd73ac8cb1336c71cf9a8a1bdc90442f99ce283e76d05c6b20dc143 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "::layout.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'cabecero_block' => array($this, 'block_cabecero_block'),
            'ciudades_block' => array($this, 'block_ciudades_block'),
            'productos_block' => array($this, 'block_productos_block'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_76fc7e908d033b3a5bf9bd217ef50d0a327e84ea981b9babffcccfb992530329 = $this->env->getExtension("native_profiler");
        $__internal_76fc7e908d033b3a5bf9bd217ef50d0a327e84ea981b9babffcccfb992530329->enter($__internal_76fc7e908d033b3a5bf9bd217ef50d0a327e84ea981b9babffcccfb992530329_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_76fc7e908d033b3a5bf9bd217ef50d0a327e84ea981b9babffcccfb992530329->leave($__internal_76fc7e908d033b3a5bf9bd217ef50d0a327e84ea981b9babffcccfb992530329_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_0badef26d7024e0dcaa408a175b74ba926c1ea6dca9c5ac83406be34d0fbf51a = $this->env->getExtension("native_profiler");
        $__internal_0badef26d7024e0dcaa408a175b74ba926c1ea6dca9c5ac83406be34d0fbf51a->enter($__internal_0badef26d7024e0dcaa408a175b74ba926c1ea6dca9c5ac83406be34d0fbf51a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Productos";
        
        $__internal_0badef26d7024e0dcaa408a175b74ba926c1ea6dca9c5ac83406be34d0fbf51a->leave($__internal_0badef26d7024e0dcaa408a175b74ba926c1ea6dca9c5ac83406be34d0fbf51a_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2e36584d87d7102439ffa2015d3985cf506f78958af8357918d50a201a07dac4 = $this->env->getExtension("native_profiler");
        $__internal_2e36584d87d7102439ffa2015d3985cf506f78958af8357918d50a201a07dac4->enter($__internal_2e36584d87d7102439ffa2015d3985cf506f78958af8357918d50a201a07dac4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo " <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/estilosBase.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
 ";
        
        $__internal_2e36584d87d7102439ffa2015d3985cf506f78958af8357918d50a201a07dac4->leave($__internal_2e36584d87d7102439ffa2015d3985cf506f78958af8357918d50a201a07dac4_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_98f385b8fea82c569ea1f08b0fd96271505b0c0fe0a0a5cfec1aeb38fb1a3a25 = $this->env->getExtension("native_profiler");
        $__internal_98f385b8fea82c569ea1f08b0fd96271505b0c0fe0a0a5cfec1aeb38fb1a3a25->enter($__internal_98f385b8fea82c569ea1f08b0fd96271505b0c0fe0a0a5cfec1aeb38fb1a3a25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo " <div id=\"cabecero_block\">
    ";
        // line 13
        $this->displayBlock('cabecero_block', $context, $blocks);
        // line 15
        echo "</div>
<div id=\"dos_cols\">
    <div id=\"ciudades_block\">
    ";
        // line 18
        $this->displayBlock('ciudades_block', $context, $blocks);
        // line 20
        echo "    </div>
    <div id=\"productos_block\">
    ";
        // line 22
        $this->displayBlock('productos_block', $context, $blocks);
        // line 24
        echo "    </div>
</div>
";
        
        $__internal_98f385b8fea82c569ea1f08b0fd96271505b0c0fe0a0a5cfec1aeb38fb1a3a25->leave($__internal_98f385b8fea82c569ea1f08b0fd96271505b0c0fe0a0a5cfec1aeb38fb1a3a25_prof);

    }

    // line 13
    public function block_cabecero_block($context, array $blocks = array())
    {
        $__internal_d37540b568078401c202c4b4684810ec93ac8a225c7cfdcd4ce92ba5b2c14225 = $this->env->getExtension("native_profiler");
        $__internal_d37540b568078401c202c4b4684810ec93ac8a225c7cfdcd4ce92ba5b2c14225->enter($__internal_d37540b568078401c202c4b4684810ec93ac8a225c7cfdcd4ce92ba5b2c14225_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cabecero_block"));

        // line 14
        echo "    ";
        
        $__internal_d37540b568078401c202c4b4684810ec93ac8a225c7cfdcd4ce92ba5b2c14225->leave($__internal_d37540b568078401c202c4b4684810ec93ac8a225c7cfdcd4ce92ba5b2c14225_prof);

    }

    // line 18
    public function block_ciudades_block($context, array $blocks = array())
    {
        $__internal_73bd12bf505365ca3014607647b73056a6084554627e6f917188a58fe73dcc8c = $this->env->getExtension("native_profiler");
        $__internal_73bd12bf505365ca3014607647b73056a6084554627e6f917188a58fe73dcc8c->enter($__internal_73bd12bf505365ca3014607647b73056a6084554627e6f917188a58fe73dcc8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ciudades_block"));

        // line 19
        echo "    ";
        
        $__internal_73bd12bf505365ca3014607647b73056a6084554627e6f917188a58fe73dcc8c->leave($__internal_73bd12bf505365ca3014607647b73056a6084554627e6f917188a58fe73dcc8c_prof);

    }

    // line 22
    public function block_productos_block($context, array $blocks = array())
    {
        $__internal_19fd4976d3a75b1c532f108d2c12d9a6ec2212829297bf1cb6cf1680244be3f4 = $this->env->getExtension("native_profiler");
        $__internal_19fd4976d3a75b1c532f108d2c12d9a6ec2212829297bf1cb6cf1680244be3f4->enter($__internal_19fd4976d3a75b1c532f108d2c12d9a6ec2212829297bf1cb6cf1680244be3f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "productos_block"));

        // line 23
        echo "    ";
        
        $__internal_19fd4976d3a75b1c532f108d2c12d9a6ec2212829297bf1cb6cf1680244be3f4->leave($__internal_19fd4976d3a75b1c532f108d2c12d9a6ec2212829297bf1cb6cf1680244be3f4_prof);

    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 23,  126 => 22,  119 => 19,  113 => 18,  106 => 14,  100 => 13,  91 => 24,  89 => 22,  85 => 20,  83 => 18,  78 => 15,  76 => 13,  73 => 12,  67 => 10,  57 => 7,  51 => 6,  39 => 4,  11 => 1,);
    }
}
