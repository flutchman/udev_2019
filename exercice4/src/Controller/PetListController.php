<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Controller used to manage pet list contents in the public part of the site.
 */
class PetListController extends AbstractController
{
    /**
     * @param Request $request
     * @return Response
     */
    public function indexAction(Request $request): Response
    {
        $petList = [];
        /*
         * Get here your pet list and send it to the view
         * Hint : https://symfony.com/doc/4.4/doctrine.html
         */
        // 1- instanciate repository
        // 2- get your pet list
        // 3- check pagination if needed
        // 4- send to view

        return $this->render('pet/list.html.twig', [
            'petList' => $petList
        ]);
    }

    public function createPetAction(Request $request)
    {
        /*
         * Create here you pet form
         * Hint: https://symfony.com/doc/4.4/forms.html
         */
        // 1- Inject your entity
        // 2- handle request
        // 3- Check request type
        // 4- validate sent params
        // 5- store data
        // 6- return to pet list
        // 7- display confirmation

        return $this->render('pet/add.html.twig', [
        ]);
    }
}
