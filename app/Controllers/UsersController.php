<?php 
namespace App\Controllers; 
use App\Models\UsersModel;

class UsersController extends Pages{
    private $conn; 

    public function __construct(){
        $this->conn = new UsersModel();
        parent::__construct();
    }

    // qui va gerer le verification : RENVoie un boolean 
    public function verificate_login(string $pseudo, string $passwd): bool
    {
        $resp = $this->conn->getPseudo($pseudo, $passwd);

        //verifie sic'est une tbaleau est que  
        if (is_array($resp) && isset($resp[0]->name)){ 
            $this->session->set([
                    'pseudo'=>$resp[0]->name
                    ]); 
            return true; 
        }
        return false; 
    }

    public function verificate_create_account(array $data){
        if (count($data) === 5){
            $cmpt = 0; 
            foreach($data as $keys=>$element){
                if($element !== ''){
                    $cmpt++; 
                }
            }if(strpos($data['email'], "@") && ($data['password'] === $data['Confirm_password']) && $cmpt === 5){
                return $this->conn->appendUser([
                    'client_nom'=> $data['lastname'], 
                    'client_prénom'=>$data['firstname'], 
                    'client_pass'=>$data['lastname'],
                    'client_email'=>$data['email'], 
                    ]); 
            } 
        }return false; 
    }       
    
}