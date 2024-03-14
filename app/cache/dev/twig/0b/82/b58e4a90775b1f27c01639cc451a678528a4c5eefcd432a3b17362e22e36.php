<?php

/* NuevoBundle:plantillas:mostrar_imagen_parametro.html.twig */
class __TwigTemplate_0b82b58e4a90775b1f27c01639cc451a678528a4c5eefcd432a3b17362e22e36 extends Twig_Template
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
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>Parametro</title>
</head>
<body>
    <img src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("libro.jpg"), "html", null, true);
        echo "\" alt=\"Imagen\">
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "NuevoBundle:plantillas:mostrar_imagen_parametro.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 8,  19 => 1,  74 => 15,  69 => 14,  66 => 13,  59 => 24,  53 => 20,  51 => 13,  46 => 10,  43 => 9,  41 => 8,  36 => 6,  32 => 4,  29 => 3,);
    }
}
