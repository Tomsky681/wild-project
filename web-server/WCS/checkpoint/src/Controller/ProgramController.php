<?php

namespace Controller;


use Model\Program;
use Model\ProgramManager;

class ProgramController extends AbstractController
{

    /**
     * Get today programs
     * @return string
     */
    public function indexAction()
    {
        $programManager = new ProgramManager();
        $program1 = $programManager->find1();
        $program2 = $programManager->find2();
        $program3 = $programManager->find3();
        $program4 = $programManager->find4();
        $program5 = $programManager->find5();
        $program6 = $programManager->find6();
        return $this->_twig->render('Program/index.html.twig', [
           'program1' => $program1,
           'program2' => $program2,
           'program3' => $program3,
           'program4' => $program4,
           'program5' => $program5,
           'program6' => $program6,
        ]);
    }


                    /**
     * Get today programs
     * @return string
     */
    public function indexone($id)
    {
        $programManager = new ProgramManager();
        $program = $programManager->findOne($id);
        return $this->_twig->render('Program/program.html.twig', [
           'program' => $program,
        ]);
    }

        /**
     * Get today programs
     * @return string
     */
    public function audience()
    {
        $programManager = new ProgramManager();
        $chaine1 = $programManager->chaine1();
        $chaine2 = $programManager->chaine2();
        $chaine3 = $programManager->chaine3();
        $chaine4 = $programManager->chaine4();
        $chaine5 = $programManager->chaine5();
        $chaine6 = $programManager->chaine6();
        return $this->_twig->render('Program/audience.html.twig', [
           'chaine1' => $chaine1,
           'chaine2' => $chaine2,
           'chaine3' => $chaine3,
           'chaine4' => $chaine4,
           'chaine5' => $chaine5,
           'chaine6' => $chaine6,
        ]);
    }



    /**
     * Add one program
     * @return string
     */
    public function addAction()
    {
        $program = new Program();

        //...


        return $this->_twig->render('Program/add.html.twig');
    }
}
