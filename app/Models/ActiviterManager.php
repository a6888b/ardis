<?php 
namespace App\Models; 
define('MAX_ACTIVITER_SHOW', 4); // attention elle peut avoir une erreur si il y a pas 4 activiter
/**
* @file ActiviterManager.php
* @author Ayoub Brahim <ayoubbrahim68@gmail.com>, Arthur Kretz <kretz.arthur68000@gmail.com>
* @date 27/02/2022
* @brief Manager pour les activités
* @details 
* <p>Cette classe gére toute la logique pour exécuter la bonne requête est l'envoyer au bon format</p>
**/
class ActiviterManager{
    protected array $namesHotels; 
    protected ActiviterModel $activModel; 

    /**
    * @brief Méthode constructrice 
    * @param array $allHotels
    * @details méthode constructrice initialise la classe ActiviterModel pour utiliser et exécuter les requêtes SQL </p>
    * <p> Elle a besoin des noms des hôtels pour les utiliser dans d'autres méthodes</p>
    **/
    public function __construct(array $allHotels){
        $this->activModel = new ActiviterModel; 
        $this->namesHotels = $allHotels; 
    }

    /**
    * @brief Méthode qui donne les activités les plus récentes 
    * @details 
    * <p>La méthode exécute une requête SQL qui lui donne les activités récentes.</p>
    * <p>Elle n'a plus qu'à les ranger par hôtel et à renvoyer le tableau</p>
    * @return array Contient les données triées et ordonnées de la bonne manière pour qu'elle soient affichées
    **/
    public function getYoungActiviter(){
        $arrdata = []; 
        $respQuery = $this->activModel->getDataYoung();
        for($i=0; $i < MAX_ACTIVITER_SHOW; $i++){
            $arrdata[$respQuery[$i]->nom_hotel][] = $respQuery[$i];  
        }
        return $arrdata; 
    }

    /**
    * @brief Méthode qui donne les activiter les plus anciennes
    * @details 
    * <p>La méthode exécute une requête SQL qui lui donne les vielles activités.</p>
    * <p>Elle n'a plus qu'à les ranger par hôtel et à renvoyer le tableau</p>
    * @return array Contient les données triées et ordonnées de la bonne manière pour qu'elle soient affichées
    **/
    public function getOldActiviter(){
        $arrdata = []; 
        $respQuery = $this->activModel->getDataOld();
        for($i=0; $i < MAX_ACTIVITER_SHOW; $i++){
            $arrdata[$respQuery[$i]->nom_hotel][] = $respQuery[$i];  
        }
        return $arrdata; 
    }


    /**
    * @brief Méthode qui donne les prix des activiter
    * @details 
    * <p>La méthode exécute une requête SQL qui lui donne les prix de l'activités </p>
    * @return string|int Contient le prix de l'activiter ou renvoie un 0 
    **/
    public function getPriceActiv(string $value_activiter){
        if($value_activiter !== 'non' && $value_activiter !== 'yes'){
            return $this->activModel->getPriceActivByIdActiv($value_activiter); 
        }return 0; 
    }

}