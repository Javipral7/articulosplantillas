<?php

namespace Nuevo\Bundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ArticuloController extends Controller
{
    public function listadoAction()
    {
        $articulos = [
            ['id' => 1, 'title' => 'Libro', 'created' => '1-2-2020'],
            ['id' => 2, 'title' => 'Novela', 'created' => '5-6-2022'],
            ['id' => 3, 'title' => 'Comic', 'created' => '4-3-2023'],
        ];
        return $this->render('NuevoBundle:Articulo:listado.html.twig', [
            'articulos' => $articulos,
        ]);
    }

    public function seleccionadoAction($id = null)
    {
        $articulos = [
            ['id' => 1, 'title' => 'Libro',  'created' => '1-2-2020'],
            ['id' => 2, 'title' => 'Novela',  'created' => '5-6-2022'],
            ['id' => 3, 'title' => 'Comic', 'created' => '4-3-2023'],
        ];

        $articulo = null;
        foreach ($articulos as $item) {
            if ($item['id'] == $id) {
                $articulo = $item;
                break;
            }
        }

        return $this->render('NuevoBundle:Articulo:seleccionado.html.twig', [
            'articulo' => $articulo,
        ]);
    }

    public function mostrarArticuloAction($id = null)
    {
        $articulos = [
            ['id' => 1, 'title' => 'Libro',  'created' => '1-2-2020'],
            ['id' => 2, 'title' => 'Novela',  'created' => '5-6-2022'],
            ['id' => 3, 'title' => 'Comic', 'created' => '4-3-2023'],
        ];

        $articulo = null;
        foreach ($articulos as $item) {
            if ($item['id'] == $id) {
                $articulo = $item;
                break;
            }
        }
        return $this->render('NuevoBundle:Plantillas:mostrar_articulo.html.twig', [
            'articulo' => $articulo,
        ]);
    }

    public function defaultRedirectAction()
    {
        return $this->redirect($this->generateUrl('nuevo_bundle_articulo_seleccionado', ['id' => 2]));
    }
}
