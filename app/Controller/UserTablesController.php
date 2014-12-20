
<?php
App::uses('AppController', 'Controller');
 
class UserTablesController extends AppController {

	public $helpers = array('Html','Form');
	public function index(){
	
	//$this -> autoRender = false;
		$this->set('titleName', 'おみやげ！！！');
		$this->set('posts', $this->UserTable->find('all'));
	}
	public function view($uid = null){
	$this -> autoRender = false;
	//	$this->UserTable->uid = $uid;
		echo $uid;
		//$this-set('post', $this->UserTable->read());
		
	} 
	//データの追加
	public function add(){
		if($this->request->is('post')){
			//書き込みがうまくいった場合
			if($this->UserTable->save($this->request->data)){
				$this->Session->setFlash('success!');
				$this->redirect(array('action'=>'index'));
			}
			//書き込みがうまくいかなかかった場合
			else{
				$this->Session->setFlash('failded!');
			}
		}
	}
	
	public function edit($id = null){
		$this->UserTable->uid = $id;
		if($this->request->is('get')){
			$this->request->data = $this->UserTable->read();
		}else{
			if($this->UserTable->save($this->request->data)){	
				$this->Session->setFlash('success!');
				$this->redirect(array('action'=>'index'));	
			}else{
				$this->Session->setFlash('failded!');
			}
		}
	}

	
	public function delete($id){
		if($this->request->is('get')){
		//エラーを返すという意味
			throw new MethodNotAllowedException();
		}
		if($this->request->is('ajax')){
			if($this->UserTable->delete($id)){
				$this->autoRender = false;
				$this->autoLayout = false;
				$response = array('id' =>$id);
				$this->header('Connet-Type: application.json');
				echo json_encode($response);
				exit();
			}
		}
		$this->redirect(array('action'=>'index'));
		
	}
}
 