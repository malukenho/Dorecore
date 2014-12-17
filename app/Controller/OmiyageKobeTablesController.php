
<?php
App::uses('AppController', 'Controller');
 
class OmiyageKobeTablesController extends AppController {
   
  //ほとんど使わない
  public function index(){
	 $this -> autoRender = false;
    // 以下がデータベース関係
	if ($this->request->is('post')) {
	      $data = $this->OmiyageKobeTable->findById(rand(1,10));
	      $this->set('data',$data);
	    }
  }
}
 