<?php
class Home extends Controller {
  public function Show(){
    $this->view("master1", [
      "page"=>"home"
    ]);
  }
}
    

?>