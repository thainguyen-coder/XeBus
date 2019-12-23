<?php 
class Contact{
    private $host="localhost";
    private $user="root";
    private $pass="";
    private $db="quy_nhon_bus";
    public $mysqli;
    
    public function __construct() {
        return $this->mysqli=new mysqli($this->host, $this->user, $this->pass, $this->db);
    }
    
    public function contact_us($data){
        $fname=$data['name'];
        $email=$data['email'];
        $phone=$data['phone'];
        $select=$data['select1'];
        $label=$data['lable'];
        $message=$data['message'];
        $sql="INSERT INTO feedback(Email, Name, Numberr, Selecte, Tittle, Content) VALUES ('$fname','$email',  '$phone', '$select', '$label', '$mesage')";
       $data= $this->mysqli->query($sql);
       if($data==true){
           $body="One message received from hubbunch contact us. details are below..<br> first_name='$fname', last_name='$lname', email='$email', phone='$phone', message='$message'";
           return $this->sent_mail("info@hubbunch.com", "Message received from Hubbunch", $body);
       }
    }
    
    public function sent_mail($to,$subject,$body){
$mailFromName="HubBunch";
$mailFrom="info@hubbunch.com";
/////////////////////////////////////////////////////////////
//Mail Header
$mailHeader = 'MIME-Version: 1.0'."\r\n";
$mailHeader .= "From: $mailFromName <$mailFrom>\r\n";
$mailHeader .= "Reply-To: $mailFrom\r\n";
$mailHeader .= "Return-Path: $mailFrom\r\n";
//$mailHeader .= "CC: $mailCC\r\n";
//$mailHeader .= "BCC: $mailBCC\r\n";
$mailHeader .= 'X-Mailer: PHP'.phpversion()."\r\n";
$mailHeader .= 'Content-Type: text/html; charset=utf-8'."\r\n";
/////////////////////////////////////////////////////////////
//Email to Admin
if(mail($to, $subject, $body, $mailHeader)){
 return true;
 }else{
return false;
 }
    }
}


?>