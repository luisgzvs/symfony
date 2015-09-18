<?php

/* CursoMainBundle:Default:productos.html.twig */
class __TwigTemplate_aa006bcee180356355b0715c31613d73cece394a6216ca7bad438cad5512d668 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "CursoMainBundle:Default:productos.html.twig", 1);
        $this->blocks = array(
            'cabecero_block' => array($this, 'block_cabecero_block'),
            'ciudades_block' => array($this, 'block_ciudades_block'),
            'productos_block' => array($this, 'block_productos_block'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cc80fb512e2874ce235f90f740d71b54ea8b360d34cf0791ff3a66860a34a667 = $this->env->getExtension("native_profiler");
        $__internal_cc80fb512e2874ce235f90f740d71b54ea8b360d34cf0791ff3a66860a34a667->enter($__internal_cc80fb512e2874ce235f90f740d71b54ea8b360d34cf0791ff3a66860a34a667_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CursoMainBundle:Default:productos.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cc80fb512e2874ce235f90f740d71b54ea8b360d34cf0791ff3a66860a34a667->leave($__internal_cc80fb512e2874ce235f90f740d71b54ea8b360d34cf0791ff3a66860a34a667_prof);

    }

    // line 3
    public function block_cabecero_block($context, array $blocks = array())
    {
        $__internal_ccd3bf8b0c9816f4e96f15060a4832543f5506b987213e09420f640843c792ef = $this->env->getExtension("native_profiler");
        $__internal_ccd3bf8b0c9816f4e96f15060a4832543f5506b987213e09420f640843c792ef->enter($__internal_ccd3bf8b0c9816f4e96f15060a4832543f5506b987213e09420f640843c792ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cabecero_block"));

        // line 4
        echo "  \t <img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/cursomain/images/logo.jpg"), "html", null, true);
        echo "\" width=\"50px\"></img>
  ";
        
        $__internal_ccd3bf8b0c9816f4e96f15060a4832543f5506b987213e09420f640843c792ef->leave($__internal_ccd3bf8b0c9816f4e96f15060a4832543f5506b987213e09420f640843c792ef_prof);

    }

    // line 7
    public function block_ciudades_block($context, array $blocks = array())
    {
        $__internal_0cdaee420989e329a92b48977f935be3bccd26557b69507eaab5901ab6b3f4f6 = $this->env->getExtension("native_profiler");
        $__internal_0cdaee420989e329a92b48977f935be3bccd26557b69507eaab5901ab6b3f4f6->enter($__internal_0cdaee420989e329a92b48977f935be3bccd26557b69507eaab5901ab6b3f4f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ciudades_block"));

        // line 8
        echo "<h2>Ciudades</h2>
<ul>
";
        // line 10
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ciudades"]) ? $context["ciudades"] : $this->getContext($context, "ciudades")));
        foreach ($context['_seq'] as $context["_key"] => $context["ciudad"]) {
            // line 11
            echo "<li>
";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($context["ciudad"], "nombre", array()), "html", null, true);
            echo "
</li>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ciudad'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "</ul>
";
        
        $__internal_0cdaee420989e329a92b48977f935be3bccd26557b69507eaab5901ab6b3f4f6->leave($__internal_0cdaee420989e329a92b48977f935be3bccd26557b69507eaab5901ab6b3f4f6_prof);

    }

    // line 18
    public function block_productos_block($context, array $blocks = array())
    {
        $__internal_257a0ead604a6d4bafd9764daf06e200783ff69524621a944b416fa953118ecd = $this->env->getExtension("native_profiler");
        $__internal_257a0ead604a6d4bafd9764daf06e200783ff69524621a944b416fa953118ecd->enter($__internal_257a0ead604a6d4bafd9764daf06e200783ff69524621a944b416fa953118ecd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "productos_block"));

        // line 19
        echo " <h2>Productos</h2>
 <ul>
";
        // line 21
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["productos"]) ? $context["productos"] : $this->getContext($context, "productos")));
        foreach ($context['_seq'] as $context["_key"] => $context["producto"]) {
            // line 22
            echo "<li>
<a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("curso_main_oneProd", array("id" => $this->getAttribute($context["producto"], "id", array()))), "html", null, true);
            echo "\">
";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["producto"], "nombre", array()), "html", null, true);
            echo "
</a>
</li>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['producto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "</ul>
";
        
        $__internal_257a0ead604a6d4bafd9764daf06e200783ff69524621a944b416fa953118ecd->leave($__internal_257a0ead604a6d4bafd9764daf06e200783ff69524621a944b416fa953118ecd_prof);

    }

    public function getTemplateName()
    {
        return "CursoMainBundle:Default:productos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 28,  107 => 24,  103 => 23,  100 => 22,  96 => 21,  92 => 19,  86 => 18,  78 => 15,  69 => 12,  66 => 11,  62 => 10,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
