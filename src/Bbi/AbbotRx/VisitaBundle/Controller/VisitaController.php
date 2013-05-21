<?php

namespace Bbi\AbbotRx\VisitaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Bbi\AbbotRx\VisitaBundle\Entity\Visita;
use Bbi\AbbotRx\VisitaBundle\Form\VisitaType;

/**
 * Visita controller.
 *
 * @Route("/visita")
 */
class VisitaController extends Controller
{
    /**
     * Lists all Visita entities.
     *
     * @Route("/", name="visita")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('BbiAbbotRxBundle:Visita')->findAll();

        return array(
            'entities' => $entities,
        );
    }

    /**
     *
     * @Route("/excel", name="excel")
     * @Method("GET")
     * @Template()
     */
    public function excelAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('BbiAbbotRxBundle:Visita')->findAll();

       // $excelService = $this->get('xls.service_xls5');

        $excelObj = $this->get('xls.load_xls5')->load('PPD_Visitas_com_coment_BR_VIROLOGIA.xlsx');
        
        die();
        return array(
            'entities' => $entities,
        );
    }

    /**
     * Creates a new Visita entity.
     *
     * @Route("/", name="visita_create")
     * @Method("POST")
     * @Template("BbiAbbotRxBundle:Visita:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity  = new Visita();
        $form = $this->createForm(new VisitaType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('visita_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Displays a form to create a new Visita entity.
     *
     * @Route("/new", name="visita_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Visita();
        $form   = $this->createForm(new VisitaType(), $entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a Visita entity.
     *
     * @Route("/{id}", name="visita_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BbiAbbotRxBundle:Visita')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Visita entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Visita entity.
     *
     * @Route("/{id}/edit", name="visita_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BbiAbbotRxBundle:Visita')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Visita entity.');
        }

        $editForm = $this->createForm(new VisitaType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Edits an existing Visita entity.
     *
     * @Route("/{id}", name="visita_update")
     * @Method("PUT")
     * @Template("BbiAbbotRxBundle:Visita:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BbiAbbotRxBundle:Visita')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Visita entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new VisitaType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('visita_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Deletes a Visita entity.
     *
     * @Route("/{id}", name="visita_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('BbiAbbotRxBundle:Visita')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Visita entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('visita'));
    }

    /**
     * Creates a form to delete a Visita entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
