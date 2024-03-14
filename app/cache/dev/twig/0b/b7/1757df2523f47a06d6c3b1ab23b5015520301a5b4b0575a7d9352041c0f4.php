<?php

/* NuevoBundle:Articulo:seleccionado.html.twig */
class __TwigTemplate_0bb71757df2523f47a06d6c3b1ab23b5015520301a5b4b0575a7d9352041c0f4 extends Twig_Template
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
        // line 1
        echo "

<h1>Detalle del Artículo</h1>
<table border=\"1\">
    <tr>
        <th>ID</th>
        <th>Título</th>
        <th>Fecha</th>
     
    </tr>
    <tr>
        <td>";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["articulo"]) ? $context["articulo"] : $this->getContext($context, "articulo")), "id"), "html", null, true);
        echo "</td>
        <td>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["articulo"]) ? $context["articulo"] : $this->getContext($context, "articulo")), "title"), "html", null, true);
        echo "</td>
        <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["articulo"]) ? $context["articulo"] : $this->getContext($context, "articulo")), "created"), "html", null, true);
        echo "</td>
    
        
    </tr>
</table>
";
    }

    public function getTemplateName()
    {
        return "NuevoBundle:Articulo:seleccionado.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 14,  36 => 13,  32 => 12,  19 => 1,);
    }
}
