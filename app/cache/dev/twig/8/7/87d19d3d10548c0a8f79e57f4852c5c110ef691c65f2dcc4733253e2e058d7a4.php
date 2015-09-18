<?php

/* CursoMainBundle:Default:formulario.html.twig */
class __TwigTemplate_87d19d3d10548c0a8f79e57f4852c5c110ef691c65f2dcc4733253e2e058d7a4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "CursoMainBundle:Default:formulario.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'cabecero_block' => array($this, 'block_cabecero_block'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8ba768bc31759079c2ca730ae1f7d166af6203bbcd4ee00955ee5970e1a3956b = $this->env->getExtension("native_profiler");
        $__internal_8ba768bc31759079c2ca730ae1f7d166af6203bbcd4ee00955ee5970e1a3956b->enter($__internal_8ba768bc31759079c2ca730ae1f7d166af6203bbcd4ee00955ee5970e1a3956b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CursoMainBundle:Default:formulario.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8ba768bc31759079c2ca730ae1f7d166af6203bbcd4ee00955ee5970e1a3956b->leave($__internal_8ba768bc31759079c2ca730ae1f7d166af6203bbcd4ee00955ee5970e1a3956b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_535bc6e918fd51d1f5cf73f82d5b346824baa0caa8207c334f096d421b159747 = $this->env->getExtension("native_profiler");
        $__internal_535bc6e918fd51d1f5cf73f82d5b346824baa0caa8207c334f096d421b159747->enter($__internal_535bc6e918fd51d1f5cf73f82d5b346824baa0caa8207c334f096d421b159747_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Formulario";
        
        $__internal_535bc6e918fd51d1f5cf73f82d5b346824baa0caa8207c334f096d421b159747->leave($__internal_535bc6e918fd51d1f5cf73f82d5b346824baa0caa8207c334f096d421b159747_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_dcdf100d3922544894f217e1166758f4de45f19790b485f4c5b6375b862cb472 = $this->env->getExtension("native_profiler");
        $__internal_dcdf100d3922544894f217e1166758f4de45f19790b485f4c5b6375b862cb472->enter($__internal_dcdf100d3922544894f217e1166758f4de45f19790b485f4c5b6375b862cb472_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo " <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/estilosBase.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
 ";
        
        $__internal_dcdf100d3922544894f217e1166758f4de45f19790b485f4c5b6375b862cb472->leave($__internal_dcdf100d3922544894f217e1166758f4de45f19790b485f4c5b6375b862cb472_prof);

    }

    // line 9
    public function block_cabecero_block($context, array $blocks = array())
    {
        $__internal_7ed09de14c690375b0c42d46585ae8a5762ea99280d5974d189066138792721f = $this->env->getExtension("native_profiler");
        $__internal_7ed09de14c690375b0c42d46585ae8a5762ea99280d5974d189066138792721f->enter($__internal_7ed09de14c690375b0c42d46585ae8a5762ea99280d5974d189066138792721f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cabecero_block"));

        // line 10
        echo "  \t <img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/cursomain/images/logo.jpg"), "html", null, true);
        echo "\" width=\"50px\"></img>
  ";
        
        $__internal_7ed09de14c690375b0c42d46585ae8a5762ea99280d5974d189066138792721f->leave($__internal_7ed09de14c690375b0c42d46585ae8a5762ea99280d5974d189066138792721f_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_9c62987cb4250744985394002d5bbcd83debcb2c47c3133badf1ec509de18732 = $this->env->getExtension("native_profiler");
        $__internal_9c62987cb4250744985394002d5bbcd83debcb2c47c3133badf1ec509de18732->enter($__internal_9c62987cb4250744985394002d5bbcd83debcb2c47c3133badf1ec509de18732_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 14
        echo "    ";
        // line 15
        echo "    ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
\t<div class=\"form_error\">";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "</div>
\t
\t<div class=\"form_bloque\">
\t<div class=\"form_error\">";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre", array()), 'errors');
        echo "</div>
\t<div class=\"form_label\">";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre", array()), 'label');
        echo "</div>
\t<div class=\"form_input\">";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre", array()), 'widget');
        echo "</div>
\t</div>
\t
\t<div class=\"form_bloque\">
\t<div class=\"form_error\">";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "precio", array()), 'errors');
        echo "</div>
\t<div class=\"form_label\">";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "precio", array()), 'label');
        echo "</div>
\t<div class=\"form_input\">";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "precio", array()), 'widget');
        echo "</div>
\t</div>
\t
\t<div class=\"form_bloque\">
\t";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Guardar", array()), 'widget');
        echo "
\t</div>
\t";
        // line 33
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    ";
        
        $__internal_9c62987cb4250744985394002d5bbcd83debcb2c47c3133badf1ec509de18732->leave($__internal_9c62987cb4250744985394002d5bbcd83debcb2c47c3133badf1ec509de18732_prof);

    }

    public function getTemplateName()
    {
        return "CursoMainBundle:Default:formulario.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 33,  130 => 31,  123 => 27,  119 => 26,  115 => 25,  108 => 21,  104 => 20,  100 => 19,  94 => 16,  89 => 15,  87 => 14,  81 => 13,  71 => 10,  65 => 9,  55 => 6,  49 => 5,  37 => 3,  11 => 1,);
    }
}
