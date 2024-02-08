<?php

namespace App\Controller;

use App\Entity\Products;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;


use Doctrine\ORM\EntityManagerInterface;

class ProductsController extends AbstractController
{
    #[Route('/product/{id}/delete', name: 'product_delete')]
    public function delete(Request $request, ProductS $product, EntityManagerInterface $entityManager): Response
    {
        // Supprimez le produit de la base de données
        // $entityManager = $this->getDoctrine()->getManager();
        $entityManager->remove($product);
        $entityManager->flush();

        // Redirigez vers une page de confirmation ou une autre page
        // return $this->redirectToRoute('products/details.html.twig');
        return $this->redirectToRoute('index');
    }


// #[Route('/produits', name: 'products_')]
// class ProductsController extends AbstractController
// {
    #[Route('/', name: 'index')]
    public function index(): Response
    {
        return $this->render('products/index.html.twig');
    }

    #[Route('/{slug}', name: 'products_details')]
    public function details(Products $product): Response
    {
        return $this->render('products/details.html.twig', compact('product'));
    }


}