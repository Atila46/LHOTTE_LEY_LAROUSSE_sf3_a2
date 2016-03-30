<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Article\Article;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        /*$antispam = $this->get('antispam');
        dump($antispam->isSpam('sefsefessefsesefsefsesesefsf'));die;*/

        $manager = $this->getDoctrine()->getManager();

        /*$article = new Article();

        $article
            ->setTitle('Titre article')
            ->setContent('Le contenu de mon premier article')
            ->setAuthor('Moi')
            ->setTag('osef')
        ;

        $manager->persist($article);
        $manager->flush();*/

        $articleRepository = $manager->getRepository('AppBundle:Article\Article');

        $articles = $articleRepository->findAll();

        $articles[0]->getCreatedAt();

        return $this->render('AppBundle:Home:index.html.twig');
    }
}