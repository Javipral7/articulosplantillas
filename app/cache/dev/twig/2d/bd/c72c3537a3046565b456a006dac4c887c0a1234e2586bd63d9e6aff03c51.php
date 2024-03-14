<?php

/* NuevoBundle:plantillas:mostrar_imagen.html.twig */
class __TwigTemplate_2dbdc72c3537a3046565b456a006dac4c887c0a1234e2586bd63d9e6aff03c51 extends Twig_Template
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
    <title>Mostrar Imagen</title>
</head>
<body>
    <img src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("libro.jpg"), "html", null, true);
        echo "\" alt=\"Libro\">
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "NuevoBundle:plantillas:mostrar_imagen.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,  70 => 13,  65 => 12,  62 => 11,  55 => 17,  51 => 15,  49 => 11,  45 => 9,  42 => 8,  40 => 7,  32 => 4,  29 => 3,  36 => 6,  31 => 4,  28 => 8,);
    }
}
