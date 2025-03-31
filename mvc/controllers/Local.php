<?php
class Local extends Controller {
  public function Show(){
    $this->view("master1", [
      "page"=>"localEat"
    ]);
  }
}
    

?>