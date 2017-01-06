<?php
//_____________________________________________________Connexion BDD
class PdoMdl{
    
    private static $serveur='mysql:host=localhost';
    private static $bdd='dbname=mrbs';   		
    private static $user='root' ;    		
    private static $mdp='' ;
    private static $monPdo;
    private static $monPdomdl = null;

    private function __construct(){
            self::$monPdo = new PDO(self::$serveur.';'.self::$bdd, self::$user, self::$mdp); 
            self::$monPdo->query("SET CHARACTER SET utf8");
	}
        
    public function _destruct(){
            self::$monPdo = null;
	}
    public  static function getPdo(){
            if(self::$monPdomdl == null){
            self::$monPdomdl = new PdoMdl();
	}
            return self::$monPdomdl;  
	}

//_________________________________________________Connexion Users
        
    public function getConnexion($login, $mdp){
            $req = "select id, level, name from mrbs_users where name = :login and password = :mdp";
            $stm = self::$monPdo->prepare($req);
            $stm->bindParam(':login', $login);
            $stm->bindParam(':mdp', $mdp);
            $stm->execute();
            $laLigne = $stm->fetch();            
            return $laLigne;                   
	}
        
//_________________________________________________Chercher les Salles
        
    public function getSalles(){
            $req = "select * from mrbs_room";
            $stm = self::$monPdo->query($req);
            $lesLignes = $stm->fetchAll(PDO::FETCH_OBJ);            
            return $lesLignes;
    }
    
//_________________________________________________Horaire Reserv Salle
    
    public function getHoraireSalle($id){
        $req = "select start_time, end_time, end_date, room_id, name, description From mrbs_repeat Where room_id = :id"; 
        $stm = self::$monPdo->query($req);
        $stm->bindParam(':id', $id);
        $lesLignes = $stm->fetchAll(PDO::FETCH_OBJ);            
        return $lesLignes;  
    }
    
}
?>