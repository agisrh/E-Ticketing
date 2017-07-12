<?php
/**********************************
 * connection
 **********************************
 */

class koneksi {
    var $host       =   "localhost:3307";
    var $username   =   "root";
    var $password   =   "123456";
    var $database   =   "app_ticketing";

  public function __construct(){
       $connect = mysql_connect($this->host, $this->username, $this->password);
       if($connect){
       $select_db = mysql_select_db($this->database);
       if(!$select_db){

           echo "Database tidak terhubung !";
       }

       }else{
           echo "Server tidak terhubung !";
       }
        
   }

}

