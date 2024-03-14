<?php

/* NuevoBundle:Plantillas:mostrar_articulo.html.twig */
class __TwigTemplate_cf089eeb6f261d50a1de26cb0c51e44a0f6c1dc826f9d879bc66d051eede7251 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("NuevoBundle:Plantillas:plantilla_articulo.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "NuevoBundle:Plantillas:plantilla_articulo.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <h2>";
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute((isset($context["articulo"]) ? $context["articulo"] : $this->getContext($context, "articulo")), "title")), "html", null, true);
        echo "</h2>
";
    }

    public function getTemplateName()
    {
        return "NuevoBundle:Plantillas:mostrar_articulo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  28 => 3,);
    }
}
