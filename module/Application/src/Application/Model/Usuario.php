<?php
 namespace Album\Model;

 class Album
 {
     public $id;
     public $email;
     public $senha;

     public function exchangeArray($data)
     {
         $this->id     = (!empty($data['id'])) ? $data['id'] : null;
         $this->artist = (!empty($data['email'])) ? $data['email'] : null;
         $this->title  = (!empty($data['senha'])) ? $data['senha'] : null;
     }
 }
?>