<?php

/* base.html.twig */
class __TwigTemplate_becf1849afd0a91907a5db907fe6f24ea91e7e0009e5a9b196a7f4a6659fef9e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dc642215b31a32481f45793e22a46596e045c5c5353a9e2aea184f4bac4ca183 = $this->env->getExtension("native_profiler");
        $__internal_dc642215b31a32481f45793e22a46596e045c5c5353a9e2aea184f4bac4ca183->enter($__internal_dc642215b31a32481f45793e22a46596e045c5c5353a9e2aea184f4bac4ca183_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_dc642215b31a32481f45793e22a46596e045c5c5353a9e2aea184f4bac4ca183->leave($__internal_dc642215b31a32481f45793e22a46596e045c5c5353a9e2aea184f4bac4ca183_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_a516ff53938ed768afe6311fb8004ed301eb553e50f1920eec213713232f96fb = $this->env->getExtension("native_profiler");
        $__internal_a516ff53938ed768afe6311fb8004ed301eb553e50f1920eec213713232f96fb->enter($__internal_a516ff53938ed768afe6311fb8004ed301eb553e50f1920eec213713232f96fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_a516ff53938ed768afe6311fb8004ed301eb553e50f1920eec213713232f96fb->leave($__internal_a516ff53938ed768afe6311fb8004ed301eb553e50f1920eec213713232f96fb_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7087fed38326cd02a89d721fc92d39850eff5790df56d4c2b6ecc292521d232c = $this->env->getExtension("native_profiler");
        $__internal_7087fed38326cd02a89d721fc92d39850eff5790df56d4c2b6ecc292521d232c->enter($__internal_7087fed38326cd02a89d721fc92d39850eff5790df56d4c2b6ecc292521d232c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_7087fed38326cd02a89d721fc92d39850eff5790df56d4c2b6ecc292521d232c->leave($__internal_7087fed38326cd02a89d721fc92d39850eff5790df56d4c2b6ecc292521d232c_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_726c477cde0da3fab1fcb6389d536ec2c9b17d95d2dae7ba0950675499ae91ca = $this->env->getExtension("native_profiler");
        $__internal_726c477cde0da3fab1fcb6389d536ec2c9b17d95d2dae7ba0950675499ae91ca->enter($__internal_726c477cde0da3fab1fcb6389d536ec2c9b17d95d2dae7ba0950675499ae91ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_726c477cde0da3fab1fcb6389d536ec2c9b17d95d2dae7ba0950675499ae91ca->leave($__internal_726c477cde0da3fab1fcb6389d536ec2c9b17d95d2dae7ba0950675499ae91ca_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0633d4d60ebf56982543361763bc0359630ecbdef2e5e2537c6c2df6a07a3159 = $this->env->getExtension("native_profiler");
        $__internal_0633d4d60ebf56982543361763bc0359630ecbdef2e5e2537c6c2df6a07a3159->enter($__internal_0633d4d60ebf56982543361763bc0359630ecbdef2e5e2537c6c2df6a07a3159_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_0633d4d60ebf56982543361763bc0359630ecbdef2e5e2537c6c2df6a07a3159->leave($__internal_0633d4d60ebf56982543361763bc0359630ecbdef2e5e2537c6c2df6a07a3159_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
