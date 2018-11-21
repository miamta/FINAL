<?php
namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use AppBundle\Entity\Usuarios;

class DefaultController extends Controller
{

      /**
       * @Route("/frontal/", name="homepage")
       */
      public function index(Request $request)
      {
          // Capturar el repositorio de la tabla cotra la BD
          $UsuariosRepository = $this->getDoctrine()->getRepository(Usuarios::class);
          $Usuarios = $UsuariosRepository->findAll();


          return $this->render('frontal/index.html.twig',array('Usuarios'=>$Usuarios));
        }

        /**
         * @Route("/frontal/", name="registrarUsuario")
         */
        public function registrarUsuario(Request $request)
        {

            return $this->render('frontal/registrarUsuario.html.twig');
          }

          /**
           * @Route("/login/", name="login")
           */
          public function login(Request $request)
          {

              return $this->render('login/login.html.twig');
          }

          /**
           * @Route("/contacto/", name="contacto")
           */
          public function contacto(Request $request)
          {

              return $this->render('contacto/contacto.html.twig');
          }



    }
