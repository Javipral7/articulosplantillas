<?php

namespace Nuevo\Bundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ListarController extends Controller
{
    public function listarArticulosAction()
    {
        $articulos = [
            ['id' => 1, 'title' => 'Libro', 'created' => '1-2-2020'],
            ['id' => 2, 'title' => 'Novela', 'created' => '5-6-2022'],
            ['id' => 3, 'title' => 'Comic', 'created' => '4-3-2023'],
        ];

        return $this->render('NuevoBundle:MisVistas:listarArticulos.html.twig', [
            'articulos' => $articulos,
        ]);
    }
}

