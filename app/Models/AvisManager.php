<?php 
namespace App\Models; 
use App\Models\AvisModel;
/**
* @file AvisManager.php
* @author Ayoub Brahim <ayoubbrahim68@gmail.com>
* @date 24/02/2022
* @brief Manager des hotel
* @details 
* <p>Cette classe  gérer toute la logique lier aux hotels pour executer la bonne requete</p>
**/

class AvisManager{
    protected $avisModel; 

    public function __construct(){
        $this->avisModel  = new AvisModel; 
    }

    public function getAllData():array {
        $data = []; 
        $resp = $this->avisModel->getAvis();
        foreach($resp as $elements){
            $data[$elements->hotel_nom][] = $elements;
        }return $data;
    }

}