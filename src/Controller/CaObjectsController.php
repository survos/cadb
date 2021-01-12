<?php


// uses Survos Param Converter, from the UniqueIdentifiers method of the entity.

namespace App\Controller;

use App\Entity\CaObjects;
use App\Form\CaObjectsType;
// use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

/**
 * @Route("/ca/objects")
 */

class CaObjectsController extends AbstractController
{
    /**
     * @Route("/", name="ca_objects_index", methods={"GET"})
     */
    public function index(): Response
    {
        $caObjects = $this->getDoctrine()
            ->getRepository(CaObjects::class)
            ->findAll();

        return $this->render('ca_objects/index.html.twig', [
            'ca_objects' => $caObjects,
        ]);
    }

    /**
     * @Route("/new", name="ca_objects_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $caObject = new CaObjects();
        $form = $this->createForm(CaObjectsType::class, $caObject);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($caObject);
            $entityManager->flush();

            return $this->redirectToRoute('ca_objects_index');
        }

        return $this->render('ca_objects/new.html.twig', [
            'ca_object' => $caObject,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{caObjectId}", name="ca_objects_show", methods={"GET"})
     */
    public function show(CaObjects $caObject): Response
    {
        return $this->render('ca_objects/show.html.twig', [
            'ca_object' => $caObject,
        ]);
    }

    /**
     * @Route("/{caObjectId}/edit", name="ca_objects_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, CaObjects $caObject): Response
    {
        $form = $this->createForm(CaObjectsType::class, $caObject);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('ca_objects_index');
        }

        return $this->render('ca_objects/edit.html.twig', [
            'ca_object' => $caObject,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{caObjectId}", name="ca_objects_delete", methods={"DELETE"})
     */
    public function delete(Request $request, CaObjects $caObject): Response
    {
        // hard-coded to getId, should be get parameter of uniqueIdentifiers()
        if ($this->isCsrfTokenValid('delete'.$caObject->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($caObject);
            $entityManager->flush();
        }

        return $this->redirectToRoute('ca_objects_index');
    }
}
