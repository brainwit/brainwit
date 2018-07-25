<?php

namespace African\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\JsonResponse;
use African\UserBundle\Form\Type\ContactType;
use African\UserBundle\Entity\Contact;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('AfricanUserBundle::layout.html.twig');
    }

    public function contactAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        
        $name = $request->get('name', '');
        $email = $request->get('email', '');
        $subject = $request->get('subject', '');
        $message = $request->get('message', '');
        
        $returnSms = "Something went to wrong. Please try again!";
        $flag = false;

        if($name == '' || $email == '' || $subject == '' || $message == '') {

            $returnSms = "Please fillout all details than click on submit button, Thank you!";
        }else {

            $objContact = new Contact();

            $objContact->setName($name);
            $objContact->setEmail($email);
            $objContact->setSubject($subject);
            $objContact->setMessage($message);
            
            $objContact->setCreatedAt(new \DateTime());
            $objContact->setUpdatedAt(new \DateTime());

            $em->persist($objContact);
            $em->flush();

            $returnSms = "Thank you for contact us. Will reach you shortly";
            $flag = true;
            
            $message = \Swift_Message::newInstance()
                ->setSubject($objContact->getSubject())
                ->setFrom($this->container->getParameter('from_email'))
                ->setTo($this->container->getParameter('contact_email'))
                ->setBody($this->renderView('AfricanUserBundle:Default:email.html.twig', array('name' => $name, 'message' => $message, 'email' => $email)));
            
            $isSend = $this->get('mailer')->send($message);



        }

        return new JsonResponse(array('message' => $returnSms, 'error' => $flag));
        exit;
        

    }

    public function subcriberAction(Request $request){

        $email = $request->get('email');
        
        $em = $this->getDoctrine()->getManager();

        $objSubriber = new Subcriber();
        $objSubriber->setEmail($email);
        $objSubriber->setCreatedAt(new \DateTime());
        $objSubriber->setUpdatedAt(new \DateTime());
        
        $em->persist($objSubriber);
        $em->flush();

        return new JsonResponse(array('message' => 'Thank you for subcribes'));


    }
    

}
