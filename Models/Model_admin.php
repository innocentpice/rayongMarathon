<?php
class Model_admin extends Model {
    function __construct(){
        parent::__construct();
    }
    
    private function sentEmail($to,$toname,$subject,$body,$altbody){
        $this->email = new PHPMailer;
        $this->email->SMTPDebug = 0;                              // Enable verbose debug output
        $this->email->isSMTP();                                      // Set mailer to use SMTP
        $this->email->Host = 'cpanel04wh.bkk1.cloud.z.com';  // Specify main and backup SMTP servers
        $this->email->SMTPAuth = true;                               // Enable SMTP authentication
        $this->email->Username = 'webmaster@rayongchember.com';                 // SMTP username
        $this->email->Password = 'Chember2017';                           // SMTP password
        $this->email->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
        $this->email->Port = 465;                                    // TCP port to connect to
        $this->email->setFrom('webmaster@rayongchember.com', 'YEC Rayong');
        $this->email->addReplyTo('webmaster@rayongchember.com', 'YEC Rayong');
        $this->email->isHTML(true);
        
        $this->email->addAddress($to, $toname);     // Add a recipient
        $this->email->Subject = $subject;
        $this->email->Body    = $body;
        $this->email->AltBody = $altbody;
        if(!$this->email->send()) {
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $this->email->ErrorInfo;
            return 'fail';
        } else {
            echo 'Message has been sent';
            return 'pass';
        }
        
    }
    
    function view($query){
        $sql = "SELECT * FROM marathon WHERE status = 0";
        $sth = $this->db->prepare($sql);
        $sth->execute();
        $result = $sth->fetchAll();
        return $result;
    }
    
    function viewSlip($email){
        $sql = "SELECT slip_file FROM marathon WHERE  email = :email";
        $NO = Array(
            ":email" => $email
        );
        $sth = $this->db->prepare($sql);
        $sth->execute($NO);
        $result = $sth->fetch();
        return $result;
    }
    
    function member_pass($email){
        $sql = "UPDATE marathon SET status = 1 WHERE email = :email";
        $NO = array(
            ":email" => $email
        );
        $sth = $this->db->prepare($sql);
        $sth->execute($NO);
        $result = $sth->errorCode();
        
        if($result == '00000'){
            $sql = "SELECT * FROM marathon WHERE email = :email";
            $sth = $this->db->prepare($sql);
            $sth->execute($NO);
            $member = $sth->fetch();
            
            $sql = "SELECT BOOK_ID FROM marathon WHERE sex = :sex AND age_group = :age_group ORDER BY BOOK_ID DESC LIMIT 1";
            $NO = array(
                ":sex" => $member['sex'],
                ":age_group" => $member['age_group']
            );
            $sth = $this->db->prepare($sql);
            $sth->execute($NO);
            $bid = $sth->fetch();
            if($bid[0] == ''){
                $bid = 1;
            }else{
                $bid = $bid[0] + 1;
            }
            
            $sql = "UPDATE marathon SET BOOK_ID = :bid WHERE email = :email";
            $NO = array(
                ":bid" => $bid,
                ":email" => $email
            );
            $sth = $this->db->prepare($sql);
            $sth->execute($NO);
            $result = $sth->errorCode();
            
            $BOOK_ID = $member['sex'].$member['age_group'].'-'.str_pad($bid, 4, "0", STR_PAD_LEFT);
            $to = $member['email'];
            $toname = $member['title'].$member['name'].' '.$member['surname'];
            $subject = 'Register Confirm : RAYONG Together RUN : Mini Marathon I';
            $body = 'Event : RAYONG Together RUN : Mini Marathon ครั้งที่ 1<br>'
            . 'Dear : '.$toname.'<br>'
            . 'Date : '.date("F j, Y").'<br>'
            . 'Booking ID : '.$BOOK_ID.'<br>'
            . 'Booking Name : '.$toname.'<br>'
            
            .'<hr>
            <h4>ติดต่อสอบถาม</h4>
            <ul>
                <li>คุณธำนุรักษ์ เวียนขุนทด (พี่โป้ง) โทร. 089-750-2610</li>
                <li>คุณสายฝน เวียนขุนทด (พี่ฝน) โทร. 086-822-8904</li>
                <li>คุณอรุชา ฟ้าประทานชัย (พี่จิ๊บ) โทร. 095-665-5649</li>
                <li>คุณพีรวัส ตั้งจิตเอื้อบุญ (พี่อุ้ย) โทร. 081-590-2407</li>
                <li>FACEBOOK : www.facebook.com/YECRAYONG</li>
                <li>LINE : @yec.ry</li>
            </ul>';
            
            $result = $this->sentEmail($to,$toname,$subject,$body,'');
        }
        
        return $result;
    }
    function member_fail($email){
        $sql = "DELETE FROM marathon WHERE email = :email";
        $NO = array(
            ":email" => $email
        );
        $sth = $this->db->prepare($sql);
        $sth->execute($NO);
        $result = $sth->errorCode();
        if($result == '00000'){
            $to = $email;
            $toname = $email;
            $subject = 'Register fail ! : RAYONG Together RUN : Mini Marathon I';
            $body = 'Event : RAYONG Together RUN : Mini Marathon ครั้งที่ 1<br>'
            . 'ข้อมูลของท่านไม่ผ่านการตรวจสอบจากคณะกรรมการ กรุณาตรวจสอบความถูกต้องแล้วทำการแจ้งชำระเงินอีกครั้ง <a href="'.URL_Path.'/register">คริ๊ก .. !</a>';
            
            $body .= '<hr>
            <h4>ติดต่อสอบถาม</h4>
            <ul>
                <li>คุณธำนุรักษ์ เวียนขุนทด (พี่โป้ง) โทร. 089-750-2610</li>
                <li>คุณสายฝน เวียนขุนทด (พี่ฝน) โทร. 086-822-8904</li>
                <li>คุณอรุชา ฟ้าประทานชัย (พี่จิ๊บ) โทร. 095-665-5649</li>
                <li>คุณพีรวัส ตั้งจิตเอื้อบุญ (พี่อุ้ย) โทร. 081-590-2407</li>
                <li>FACEBOOK : www.facebook.com/YECRAYONG</li>
                <li>LINE : @yec.ry</li>
            </ul>';
            
            $result = $this->sentEmail($to,$toname,$subject,$body,'');
        }
        return $result;
    }
    
}