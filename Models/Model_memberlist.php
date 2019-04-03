<?php
class Model_memberlist extends Model {
    function __construct(){
        parent::__construct();
    }
    
    function view($sex, $age, $type=1){
        if($type==1){
            $type = 'Mini Marathon';
        }else{
            $type = 'Fun Run';
        }
        
        $sql = "SELECT title, name, surname, sex, age_group, BOOK_ID FROM marathon "
        ."WHERE sex = :sex AND age_group = :age AND type = :type AND status = 1";
        
        $NO = array(
            ":sex" => $sex,
            ":age" => $age,
            ":type" => $type
        );
        
        $sth = $this->db->prepare($sql);
        $sth->execute($NO);
        $result = $sth->fetchAll();
        return $result;
    }
    
}