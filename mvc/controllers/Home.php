<?php
class Home extends Controller {
  public function Show(){
    $this->view("Home", [
      "Page"=>"home"
    ]);
  }
}
    

?>