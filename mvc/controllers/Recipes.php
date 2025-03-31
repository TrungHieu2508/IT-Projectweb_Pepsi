<?php
class Recipes extends Controller {
  public function Show(){
    $this->view("master1", [
      "page"=>"recipes"
    ]);
  }
}
    

?>