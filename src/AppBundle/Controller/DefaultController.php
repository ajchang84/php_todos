<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Task;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method
;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class DefaultController extends Controller
{

    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        return $this->redirectToRoute('todos');
    }

    /**
     * @Route("/todos", name="todos")
     */
    public function todosAction(Request $request)
    {
        // $_SESSION['todos'] = [ [ task(string), completed(boolean)], ...]
        if ($_SESSION['todos'] == null) {
            $_SESSION['todos'] = array( array('Buy Milk', true));
        }

        $task = new Task();
        $task->setTask('Write a blog post');

        $form = $this->createFormBuilder($task)
            ->add('task', TextType::class)
            ->add('save', SubmitType::class, array('label' => 'Create Task'))
            ->getForm();

        // Refactor: move this to NEW todos route
        $form->handleRequest($request);

            if ($form->isSubmitted()) {
                $task = $form->getData();
                array_push($_SESSION['todos'], array($task->task, false));

                return $this->redirectToRoute('todos');
            }

        return $this->render('default/todos.html.twig', array(
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),
            'todos' => $_SESSION['todos'],
            'form' => $form->createView()
        ));
    }

    /**
     * @Route("/todos/{id}/delete", requirements={"id" = "\d+"}, name="delete")
     */
    public function deleteAction($id) 
    {
        array_splice($_SESSION['todos'], $id, 1);
        return $this->redirectToRoute('todos');
    }

    /**
     * @Route("/todos/{id}/edit", requirements={"id" = "\d+"}, name="edit")
     * @Method("PUT")
     */
    public function editAction($id, Request $request) 
    {
        $_SESSION['todos'][$id][0] = $request->get('name');
        return $this->redirectToRoute('todos');            
    }

    /**
     * @Route("/todos/{id}/check", requirements={"id" = "\d+"}, name="check")
     * @Method("PUT")
     */
    public function checkAction($id) 
    {
        $_SESSION['todos'][$id][1] = !$_SESSION['todos'][$id][1];
        return $this->redirectToRoute('todos');            
    }
}
