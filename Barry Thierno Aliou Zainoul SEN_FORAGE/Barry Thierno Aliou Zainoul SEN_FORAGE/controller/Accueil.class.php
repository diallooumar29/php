<?php
/*==================================================
    MODELE MVC DEVELOPPE PAR Ngor SECK
    ngorsecka@gmail.com
    (+221) 77 - 433 - 97 - 16
    PERFECTIONNEZ CE MODEL ET FAITES MOI UN RETOUR
    POUR TOUTE MODIFICATION VISANT A AMELIORER
    CE MODELE.
    VOUS ETES LIBRE DE TOUTE UTILISATION.
  ===================================================*/
    //class
    class Accueil extends Controller{

        public function __construct(){
            parent::__construct();
        }
        //methode ou url
        public function index(){
			//view
            return $this->view->load("accueil/index");
			
        }
        public function accueil(){
            //view
            return $this->view->load("accueil/accueil");

        }
		
    }
?>