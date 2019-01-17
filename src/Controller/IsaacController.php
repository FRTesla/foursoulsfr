<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Common\Persistence\ObjectManager;
use Cocur\Slugify\Slugify;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

use App\Entity\Card;
use App\Entity\Type;
use App\Repository\CardRepository;
use App\Repository\TypeRepository;
use App\Form\AddCardType;
use App\Form\SearchType;

class IsaacController extends AbstractController
{
    /**
    * @Route("/", name="index")
    */
    public function index(CardRepository $repo) {
        $cards = $repo->findAll();
        $form = $this->createForm(SearchType::class);
        
        return $this->render('isaac/index.html.twig', [
            'searchBarForm' => $form->createView(),
            'cards' => $cards,
            'page' => 1,
            'cardName' => 'isaac'
        ]);
    }
    
    /**
    * @Route("/cards/{page<\d+>}", name="cards", defaults={"page"=1})
    */
    public function listCards(CardRepository $repo, $page) {
        $cards = $repo->findAll();
        $form = $this->createForm(SearchType::class);
        
        return $this->render('isaac/index.html.twig', [
            'searchBarForm' => $form->createView(),
            'cards' => $cards,
            'page' => $page,
            'cardName' => 'isaac'
        ]);
    }
    
    /**
    * @Route("/cards/treasure/{page<\d+>}", name="treasureCards", defaults={"page"=1})
    */
    public function treasureCards(CardRepository $repo, $page) {
        $cards = $repo->myFindByTypes('Trésor');
        $form = $this->createForm(SearchType::class);
        
        return $this->render('isaac/index.html.twig', [
            'searchBarForm' => $form->createView(),
            'cards' => $cards,
            'page' => $page,
            'cardName' => 'isaac'
        ]);
    }
    
    /**
    * @Route("/cards/loot/{page<\d+>}", name="lootCards", defaults={"page"=1})
    */
    public function lootCards(CardRepository $repo, $page) {
        $cards = $repo->myFindByTypes('Butin');
        $form = $this->createForm(SearchType::class);
        
        return $this->render('isaac/index.html.twig', [
            'searchBarForm' => $form->createView(),
            'cards' => $cards,
            'page' => $page,
            'cardName' => 'isaac'
        ]);
    }
    
    /**
    * @Route("/cards/monster/{page<\d+>}", name="monsterCards", defaults={"page"=1})
    */
    public function monsterCards(CardRepository $repo, $page) {
        $cards = $repo->myFindByTypes('Monstre');
        $form = $this->createForm(SearchType::class);
        
        return $this->render('isaac/index.html.twig', [
            'searchBarForm' => $form->createView(),
            'cards' => $cards,
            'page' => $page,
            'cardName' => 'isaac'
        ]);
    }
    
    /**
    * @Route("/cards/character/{page<\d+>}", name="characterCards", defaults={"page"=1})
    */
    public function characterCards(CardRepository $repo, $page) {
        $cards = $repo->myFindByTypes('Personnage');
        $form = $this->createForm(SearchType::class);
        
        return $this->render('isaac/index.html.twig', [
            'searchBarForm' => $form->createView(),
            'cards' => $cards,
            'page' => $page,
            'cardName' => 'isaac'
        ]);
    }
    
    /**
    * @Route("/cards/starter/{page<\d+>}", name="starterCards", defaults={"page"=1})
    */
    public function starterCards(CardRepository $repo, $page) {
        $cards = $repo->myFindByTypes('Objet de départ');
        $form = $this->createForm(SearchType::class);
        
        return $this->render('isaac/index.html.twig', [
            'searchBarForm' => $form->createView(),
            'cards' => $cards,
            'page' => $page,
            'cardName' => 'isaac'
        ]);
    }
    
    /**
    * @Route("/cards/extension/{page<\d+>}", name="extensionCards", defaults={"page"=1})
    */
    public function extensionCards(CardRepository $repo, $page) {
        $cards = $repo->myFindByTypes('Extension');
        $form = $this->createForm(SearchType::class);
        
        return $this->render('isaac/index.html.twig', [
            'searchBarForm' => $form->createView(),
            'cards' => $cards,
            'page' => $page,
            'cardName' => 'isaac'
        ]);
    }

    /**
     * @Route("/cards/search/{{cardName}}/{page<\d+>}", name="search", defaults={"page"=1, "cardName"="isaac"})
     */
    public function searchCards(CardRepository $repo, $page, Request $request) {
        $form = $this->createForm(SearchType::class);

        $req = $request->request->get('search');
        $name = $req['cardName'];
        $cards = $repo->myFindByName($name);

        return $this->render('isaac/index.html.twig', [
            'searchBarForm' => $form->createView(),
            'cards' => $cards,
            'page' => $page,
            'cardName' => $name
        ]);
    }
    
    /**
    * @Route("/add", name="addCard")
    */
    public function addCard(Request $request)
    {
        $searchForm = $this->createForm(SearchType::class);
        $form = $this->createForm(AddCardType::class);
        
        $form->handleRequest($request);
        
        if($form->isSubmitted() && $form->isValid()) {
            $card = $form->getData();
            $om = $this->getDoctrine()->getManager();
            $om->persist($card);
            $om->flush();
            
            return $this->redirectToRoute('index');
        }
        
         return $this->render('isaac/add.html.twig', [
             'searchBarForm' => $searchForm->createView(),
             'cardForm' => $form->createView(),
             'cardName' => 'isaac'
        ]);
    }
    
    /**
    * @Route("/cards/{img}", name="showCard")
    */
    public function showCard(Card $card) {
        $searchForm = $this->createForm(SearchType::class);
        return $this->render('isaac/show.html.twig', [
            'searchBarForm' => $searchForm->createView(),
            'card' => $card,
            'cardName' => 'isaac'
        ]);
    }
    
    /**
    * @Route("/rules", name="rules")
    */
    public function rules() {
        $searchForm = $this->createForm(SearchType::class);
        return $this->render('isaac/rules.html.twig', [
            'searchBarForm' => $searchForm->createView(),
            'cardName' => 'isaac'
        ]);
    }
    
}

// Justice trad
