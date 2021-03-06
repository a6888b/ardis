<?php 
namespace App\Models; 
use App\Models\HotelModel;
/**
* @file HotelManager.php
* @author Ayoub Brahim <ayoubbrahim68@gmail.com>
* @date 24/02/2022
* @brief Manager des hôtels
* @details 
* <p>Cette classe  gére toute la logique liée aux hôtels pour exécuter la bonne requête</p>
**/

class HotelManager {
    private $respQuery; 
    private $imgMngr; 
    /**
    * @brief Méthode constructrice 
    * @details 
    * <p>Cette méthode constructrice initialise la classe HotelModel à l'attribut respQuery</p>
    **/
    public function __construct(){
        $this->respQuery = new HotelModel(); 
        $this->imgMngr   = new ImageManager(); 
    }

    /**
    * @brief Méthode qui retourne les données du nom de l'hôtel passer au paramètre 
    * @param string $page 
    * @details 
    * <p>La méthode exécute la requête SQL pour récupérer les données de l'hôtel </p>
    * @return array Contient les données des hôtels 
    **/
    public function getData(string $page){
        return $this->respQuery->getAll($page); 
    }

    /**
    * @brief Méthode qui tout les noms des hotels   
    * @details 
    * <p>La méthode exécute la requête SQL pour récupérer les noms de tous les hôtels </p>
    * @return array Contient les nom des hotels 
    **/
    public function getName(){
        return $this->respQuery->getName(); 
    }
    
    /**    
    * @brief Methode qui retourne les trois meilleurs hôtels 
    * @details 
    * <p>La méethode exécute la requête SQL pour récupérer les images, noms, prix et villes des trois meilleurs hôtels</p>
    * @return array Contient les données liées à l'hôtel
    **/
    public function getBestHotel(){
        return $this->respQuery->getBestHotels(); 
    }

     /**    
    * @brief Méthode qui retourne les noms des hôtels 
    * @details 
    * <p>La méthode exécute la requête SQL pour récupérer 
    *           les noms des hôtels pour les afficher dans la barre de menu</p>
    * @return array Contient les noms des hôtels  
    **/
    public function getHotelsNamesForNavBar(){
        $arrNameHotel = []; 
        $resultQuery =  $this->respQuery->getName(); 
        foreach($resultQuery as $_ => $element){
            $arrNameHotel[] = $element->hotel_nom; // je stocke les noms des hôtels dans une variable 
        }
        return $arrNameHotel;
    }

    /**    
    * @brief Méthode qui retourne l'id de l' hotel.
    * @details 
    * <p>La méthode exécute la requête SQL pour récupérer l'id de l'hotel.</p>
    * @return array Id de l'hôtel  
    **/
    public function getNameById(string $hotel): string{
        return $this->respQuery->getIdByNameHotel($hotel)[0]->hotel_id; 
    }

    /**
    * @brief Methode qui met a jour les donner de l'hotel
    * @details 
    * <p>La methode contient la requete SQL met a jour les donner de l'hotel, cette methode seras utiliser par l'administrateur est le moderateur.</p>
    * @param string $name_hotel
    * @param array $post
    * @param $objRequest
    * @return array tyep de message est le contenue
    **/
    public function update(string $name_hotel, array $post, $objRequest): array{
        $data = []; 
        foreach($post as $key=>$value){
            $data['hotel_'.$key] = $value; 
        }
        
        $id = $this->getNameById($name_hotel);
        $this->respQuery->update($id, $data); 
        $success =  $this->imgMngr->updateImgHotel($objRequest, $name_hotel, $id); 
        if($success){
            return ['msg_success',  "Les element ont bien ete mise a jour."]; 
        }
        return ['msg_error', $success];     
    }

    /**
    * @brief Methode qui execute une requete pour supprimer un hotel
    * @details 
    * <p>La methode execute une requete pour supprimer un hotel, elle utilise la methode getNameById pour recuperer l'id de celui-ci.</p>
    * @param string $name
    **/
    public function removeAll(string $name){
        $id = $this->getNameById($name);
        $this->respQuery->delete($id); 
    }
}