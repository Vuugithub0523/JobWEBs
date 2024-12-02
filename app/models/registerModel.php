<?php
    class registerModel  extends DModel {
        public function __construct() {
            parent::__construct();
        }
        public function getUser(){
            $sql = "select * from users";
            return $this->db->select($sql);
        }
        public function getCompany(){
            $sql = "select * from companies";
            return $this->db->select($sql);
        }
        public function getIndustry(){
            $sql = "select * from industry";
            return $this->db->select($sql);
        }
        public function addUser($name,$phone,$email,$password,$rule){
            //job table và data['key'=>$value];
            $rpassword=md5($password);
            $data=['full_name'=>$name,'phone'=>$phone,'email'=>$email,'password'=>$rpassword,'rule'=>$rule];
           // $sql="INSERT into users(full_name,phone,email,password,rule) values(:name,:phone,:email,:password,:rule)";
           // $data = [':name' => $name,':phone'=>$phone,':email'=> $email,':password'=>$rpassword,':rule'=>$rule];
            return $this->db->insert("users", $data);
        }
        public function addCompany($nameCompany,$industry,$address,$id_user){
            $data=['company_name'=>$nameCompany,'industry_id'=>$industry,'company_address'=>$address,'user_id'=>$id_user];
           // $sql="INSERT into companies(company_name,industry_id,company_address,user_id) values(:name,:industry_id,:addressCompany,:user_id)";
           // $data = array('name' => $nameCompany,'industry_id'=> $industry,'addressCompany'=> $address,'user_id'=>$id_user);
            return $this->db->insert("companies", $data);
        }
        /*public function addCompany($nameCompany,$industry,$address){
            $sql="INSERT into companies(company_name,industry_id,company_address) values(:name,:industry_id,:address)";
            $stmt=$this->db->prepare($sql);
            $stmt->bindParam(':name', $nameCompany);
            $stmt->bindParam(':address', $address);
            $stmt->bindParam(':industry_id', $industry);
            if ($stmt->execute()) {
                echo "Candidate added successfully.";
                return true;
            } else {
                echo "Error: " . implode(", ", $stmt->errorInfo());
                return false;
            }
        }
        public function addUser($name,$phone,$email,$password){
            $rphone=trim($phone);
            $sql="INSERT into users(full_name,phone,email,password) values(:name,:phone,:email,:password)";
            $stmt=$this->db->prepare($sql);
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':phone', $rphone);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':password', md5($password));
            if ($stmt->execute()) {
                return true;
            } else {
                echo "Error: " . implode(", ", $stmt->errorInfo());
                return false;
            }
        }  
        */
    }

?>