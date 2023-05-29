<?php
class UserManager{
    private $db;

    public function __construct()
    {
        $dbName = "t80o0qfns207b2ah";
        $port = 3306;
        $username = "c5jacit8b1tibnjh";
        $password = "un90lh763p3xub0w";
        try{
            $this->setDb(new PDO("mysql:host=ilzyz0heng1bygi8.chr7pe7iynqr.eu-west-1.rds.amazonaws.com;dbname=$dbName;port=$port;charset=utf8mb4",$username,$password));
            // $this->setDb(new PDO("mysql://c5jacit8b1tibnjh:un90lh763p3xub0w@ilzyz0heng1bygi8.chr7pe7iynqr.eu-west-1.rds.amazonaws.com:3306/t80o0qfns207b2ah"));
        }catch(PDOException $error){
            echo $error->getMessage();
        }
    }

    public function setDb($db){
        $this->db = $db;
    }

    public function add(User $user){
        $req = $this->db->prepare("INSERT INTO `user` (username,email,weight,height,inscription_date,age,gender,weight_goal,sicoins,is_admin) VALUES (:username,:email,:weight,:height,NOW(),:age,:gender,:weight_goal,:sicoins,:is_admin)");
        
        $req->bindValue(":username", $user->getUsername());
        $req->bindValue(":email", $user->getEmail());
        $req->bindValue(":weight", $user->getWeight());
        $req->bindValue(":height", $user->getHeight());
        // $req->bindValue(":inscription_date", $user->getInscriptionDate());
        $req->bindValue(":age", $user->getAge());
        $req->bindValue(":gender", $user->getGender());
        $req->bindValue(":weight_goal", $user->getWeightGoal());
        $req->bindValue(":sicoins", $user->getSiCoins());
        $req->bindValue(":is_admin", 0);

        $req->execute();
    }
    public function get(int $id){
        $req = $this->db->prepare("SELECT * FROM `user` WHERE id=:id");
        $req->bindValue(":id", $id);
        $req->execute();
        $data = $req->fetch();
        $user = new User($data);
        return $user;
    }
    public function getByEmail(string $email){
        $req = $this->db->prepare("SELECT * FROM `user` WHERE email=:email");
        $req->bindValue(":email", $email);
        $req->execute();
        $data = $req->fetch();
        if($data == false){
            return false;
        }
        $user = new User($data);
        return $user;
    }
    public function getAll(){
        $users = [];
        $req = $this->db->prepare("SELECT * FROM `user` ORDER BY username");
        $req->execute();
        $datas = $req->fetchAll();
        foreach($datas as $data){
            $user = new User($data);
            $users[] = $user;
        }
        return $users;
    }
    public function update(User $user){
        $req = $this->db->prepare("UPDATE `user` SET username=:username, email=:email, weight=:weight, height=:height, inscription_date=:inscription_date, age=:age,gender=:gender,weight_goal=:weight_goal,sicoins=:sicoins,is_admin=:is_admin) WHERE id = :id");
        
        $req->bindValue(":id", $user->getId());
        $req->bindValue(":username", $user->getUsername());
        $req->bindValue(":email", $user->getEmail());
        $req->bindValue(":weight", $user->getWeight());
        $req->bindValue(":height", $user->getHeight());
        $req->bindValue(":inscription_date", $user->getInscriptionDate());
        $req->bindValue(":age", $user->getAge());
        $req->bindValue(":gender", $user->getGender());
        $req->bindValue(":weight_goal", $user->getWeightGoal());
        $req->bindValue(":sicoins", $user->getSiCoins());
        $req->bindValue(":is_admin", $user->getIsAdmin());

        $req->execute();
    }
    public function delete(int $id){
        $req = $this->db->prepare("DELETE FROM `user` WHERE id = :id");
        $req->bindValue(":id", $user->getId());
        $req->execute();
    }
}
?>