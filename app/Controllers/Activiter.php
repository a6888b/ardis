<?php 
namespace App\Controllers; 
use App\Models\ActiviterManager; 
/**
* @file Activiter.php
* @author Ayoub Brahim <ayoubbrahim68@gmail.com>
* @date 21/02/2022
* @brief Controller des activités
* @details 
* <p>Les actions sont :</p>
* <ul>
* 	<li><strong>index</strong>   : pour la page activités</li>
* 	<li><strong>archive</strong> : activités archivées</li>
* </ul>
**/

class Activiter extends Pages{
    protected string $activ_id;
    protected string $hotel_id;
    protected string $nom;
    protected string $date;
    protected string $image;
    protected string $loca;
    protected string $descri;
    protected string $dispo;

    protected ActiviterManager $activManager; 


    /**
    * @brief Méthode constructrice 
    * @details 
    * <p>Cette méthode appelle la méthode constructrice de la classe Pages</p>
    * <p>La méthode constructrice initialise la classe ActiviterManager et lui passe comme argument les noms des hôtels</p>
    **/
    public function __construct(){
        parent::__construct(); 
        $this->activManager = new  ActiviterManager($this->allNamesHotels); 
        $this->_data['color_link_nav'] = 'black';
        $this->_data['meta_title']     = 'Activiter'; 
    }
    
    
    /**
    * @brief Méthode index 
    * @details 
    * <p>Cette méthode donne un tableau associatif qui contient les activités les plus récentes à Smarty</p>
    **/
    public function index(){
        $this->_data['activiter'] = $this->activManager->getYoungActiviter(); 
        $this->_data['name_file']      = 'activiter';
        $this->display('activiter.tpl');
    }

    /**
    * @brief Méthode archive 
    * @details 
    * <p>Cette méthode donne un tableau associatif qui contient les activités archivées à Smarty</p>
    **/
    public function archive(){
        $this->_data['activiter_archiver'] = $this->activManager->getOldActiviter(); 
        $this->_data['name_file']      = 'archive';
        $this->display('activiter_archiver.tpl');
    }
}