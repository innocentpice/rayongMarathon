<?php
class Model_register extends Model {
    function __construct(){
        parent::__construct();
    }
    
    function add($query){
        $sql = "INSERT INTO marathon(id, type, title, name, surname, birthday, sex, age_group, nationality, tel, address, city, province, country, zip, save_name, save_tel, shirt_size, slip_time, slip_number, slip_file, email, password) VALUES "
            ."(NULL, :type, :title, :name, :surname, :birthday, :sex, :age_group, :nationality, :tel, :address, :city, :province, :country, :zip, :save_name, :save_tel, :shirt_size, :slip_time, :slip_number, :slip_file, :email, :password)";
        
        $NO = array(
            ":type" => $query[0] ,
            ":title" => $query[1] ,
            ":name" => $query[2] ,
            ":surname" => $query[3] ,
            ":birthday" => $query[4] ,
            ":sex" => $query[5] ,
            ":age_group" => $query[6] ,
            ":nationality" => $query[7] ,
            ":tel" => $query[8] ,
            ":address" => $query[9] ,
            ":city" => $query[10] ,
            ":province" => $query[11] ,
            ":country" => $query[12] ,
            ":zip" => $query[13] ,
            ":save_name" => $query[14] ,
            ":save_tel" => $query[15] ,
            ":shirt_size" => $query[16] ,
            ":slip_time" => $query[17] ,
            ":slip_number" => $query[18] ,
            ":slip_file" => '',
            ":email" => $query[20] ,
            ":password" => $query[21]
        );
        
        $sth = $this->db->prepare($sql);
        $sth->execute($NO);
        $result = $sth->errorCode();
        
        if($result == '00000' && isset($query[19])){
            $blob = fopen($query[19]['tmp_name'], 'rb');
            
            $sql = "UPDATE marathon
                    SET slip_file = :slip_file
                    WHERE email = :email";
            
            $sth = $this->db->prepare($sql);
            $sth->bindParam(':slip_file', $blob, PDO::PARAM_LOB);
            $sth->bindParam(':email', $query[20]);
            $sth->execute();
            fclose($blob);
        }
        return $result;
    }
}