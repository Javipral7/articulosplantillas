<?php

/* NuevoBundle:Plantillas:plantilla_articulo.html.twig */
class __TwigTemplate_1593ed41cb6cdf90e9a6ae5e86a7786d09ac2736d2bcb28b92591b908c348261 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <header>
        <div class=\"imagen-container\">
            <img src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("libro.jpg"), "html", null, true);
        echo "\" alt=\"libro\">
        </div>
        <div class=\"imagen-container\">
            ";
        // line 9
        $this->env->loadTemplate("NuevoBundle:plantillas:mostrar_imagen.html.twig")->display($context);
        // line 10
        echo "        </div>
        <div class=\"imagen-container\">
            ";
        // line 12
        $this->env->loadTemplate("NuevoBundle:plantillas:mostrar_imagen_parametro.html.twig")->display(array_merge($context, array("imagen" => $this->env->getExtension('assets')->getAssetUrl("libro.jpg"))));
        // line 13
        echo "        </div>
    </header>
    <div>
        ";
        // line 16
        $this->displayBlock('content', $context, $blocks);
        // line 19
        echo "    </div>
    <footer>
     <p>Fecha del sistema: ";
        // line 21
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "d-m-Y"), "html", null, true);
        echo "</p>
    </footer>
";
    }

    // line 16
    public function block_content($context, array $blocks = array())
    {
        // line 17
        echo "            <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["articulo"]) ? $context["articulo"] : $this->getContext($context, "articulo")), "title"), "html", null, true);
        echo "</h2>
        ";
    }

    public function getTemplateName()
    {
        return "NuevoBundle:Plantillas:plantilla_articulo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 17,  68 => 16,  61 => 21,  57 => 19,  55 => 16,  50 => 13,  48 => 12,  44 => 10,  42 => 9,  36 => 6,  32 => 4,  29 => 3,);
    }
}
