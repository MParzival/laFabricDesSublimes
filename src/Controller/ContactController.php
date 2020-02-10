<?php

namespace App\Controller;

use App\Form\ContactType;
use Swift_Mailer;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ContactController extends AbstractController
{
    /**
     * @Route("/contact", name="app_contact")
     * @param Request $request
     * @param Swift_Mailer $mailer
     * @return Response
     */
    public function index(Request $request, Swift_Mailer $mailer): Response
    {
        $form = $this->createForm(ContactType::class);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()){
            $contact = $form->getData();

            $message = (new \Swift_Message('Nouveau contact'))
                ->setFrom($contact['email'])
                ->setTo('mick.aubin@gmail.com')
                ->setBody(
                    $this->renderView(
                        'email/contact.html.twig', compact('contact')
                    ),
                    'text/html'
                )
            ;
            $mailer->send($message);

            $this->addFlash('message', 'Votre message a bien été envoyer');
            return $this->redirectToRoute('app_home');
        }
        return $this->render('contact/index.html.twig', [
            'contactForm' => $form->createView(),
            'current_menu'=> 'contact'
        ]);
    }
}
