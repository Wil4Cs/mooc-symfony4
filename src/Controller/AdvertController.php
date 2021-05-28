<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/advert", name="oc_advert_")
 */
class AdvertController extends AbstractController
{
    /**
     * @Route("/{page}",
     *     name="index",
     *     requirements={"\d+"},
     *     methods={"GET"},
     *     defaults={"page": 1}
     *     )
     */
    public function index(): Response
    {
        return $this->render('Advert/index.html.twig', [
            'name' => 'Wilfried',
        ]);
    }

    /**
     * @Route("/view/{id}",
     *     name="view",
     *     methods={"GET"},
     *     requirements={"id"="\d+"}
     *     )
     */
    public function view(int $id): Response
    {
        return $this->render('Advert/index.html.twig', [
            'name' => 'View ' .$id,
        ]);
    }

    /**
     * @Route("/add",
     *     name="add",
     *     methods={"POST"}
     *     )
     */
    public function add(): Response
    {
        return $this->render('Advert/index.html.twig', [
            'name' => 'Add'
        ]);
    }

    /**
     * @Route("/edit/{id}",
     *     name="edit",
     *     methods={"GET", "POST"},
     *     requirements={"id": "\d+"})
     */
    public function edit(int $id): Response
    {
        return $this->render('Advert/index.html.twig', [
            'name' => 'Edit '.$id,
        ]);
    }

    /**
     * @Route("/delete/{id}",
     *     name="delete",
     *     methods={"POST"},
     *     requirements={"id": "\d+"})
     */
    public function delete(int $id): Response
    {
        return $this->render('Advert/index.html.twig', [
            'name' => 'Delete ' .$id,
        ]);
    }
}
