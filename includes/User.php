<?php
class User{
    private int $id;
    private $username = NULL;
    private $email;
    private $weight = NULL;
    private $height = NULL;
    private DateTime $inscriptionDate;
    private $age = NULL;
    private $gender = NULL;
    private $weightGoal = NULL;
    // private bool $athletic;
    private $siCoins = NULL;
    private $isAdmin = NULL;


    public function getId(){
        return $this->id;
    }

    public function getUsername(){
        return $this->username;
    }
    public function setUsername($username){
        if(is_string($username)){
            $this->username = $username;
        }else{
            return "Value must be a string";
        }
    }

    public function getEmail(){
        return $this->email;
    }
    public function setEmail($email){
        if(is_string($email)){
            $this->email = $email;
        } else {
            return "Value must be a string";
        }
    }

    public function getWeight(){
        return $this->weight;
    }
    public function setWeight($weight){
        $weight = (float) $weight;
        $this->weight = $weight;
    }

    public function getHeight(){
        return $this->height;
    }
    public function setHeight($height){
        $height = (int) $height;
        $this->height = $height;
    }

    public function getInscriptionDate(){
        return $this->inscriptionDate;
    }
    // Format String ou Date ????
    public function setInscriptionDate($inscriptionDate){
        $inscriptionDate = DateTime::createFromFormat('Y-m-d H:i:s', $inscriptionDate);
        if ($inscriptionDate !== false) {
            $this->inscriptionDate = $inscriptionDate;
        } else {
            return "Value must be a date";
        }
    }

    public function getAge(){
        return $this->age;
    }
    public function setAge($age){
        $age = (int) $age;
        $this->age = $age;
    }

    public function getGender(){
        return $this->gender;
    }
    public function setGender($gender){
        if(is_string($gender)){
            $this->gender = $gender;
        }else{
            return "Value must be a string";
        }
    }

    public function getWeightGoal(){
        return $this->weightGoal;
    }
    public function setWeightGoal($weightGoal){
        $weightGoal = (float) $weightGoal;
        $this->weightGoal = $weightGoal;
    }

    public function getSiCoins(){
        return $this->siCoins;
    }
    public function setSiCoins($siCoins){
        $siCoins = (int) $siCoins;
        $this->siCoins = $siCoins;
    }

    public function getIsAdmin(){
        return $this->isAdmin;
    }
    public function setIsAdmin($isAdmin){
        $isAdmin = (bool) $isAdmin;
        $this->isAdmin = $isAdmin;
    }

    public function __construct(array $data) {
        $this->hydrate($data);
    }

    public function hydrate(array $data){
        // var_dump($data);
        if (isset($data['username'])){
            $this->setUsername($data['username']);
        }
        if (isset($data['email'])){
            $this->setEmail($data['email']);
        }
        if (isset($data['weight'])){
            $this->setWeight($data['weight']);
        }
        if (isset($data['height'])){
            $this->setHeight($data['height']);
        }
        if (isset($data['inscription_date'])){
            $this->setInscriptionDate($data['inscription_date']);
        }
        if (isset($data['age'])){
            $this->setAge($data['age']);
        }
        if (isset($data['gender'])){
            $this->setGender($data['gender']);
        }
        if (isset($data['weightGoal'])){
            $this->setWeightGoal($data['weightGoal']);
        }
        if (isset($data['sicoins'])){
            $this->setSiCoins($data['sicoins']);
        }
        if (isset($data['is_admin'])){
            $this->setIsAdmin($data['is_admin']);
        }
    }
}