<?php
App::uses('AppController','Controller');

class DorecoreController extends AppController {
	
	var $name = 'Dorecore';
	var $OmiyageKobeTable;
	
	function set_omiyage_kobe_tables(){
		App::import('Model','OmiyageKobeTable');
		$this->OmiyageKobeTable = new OmiyageKobeTable();
	}
	
    public function index() {

    }
    
    //年齢の選択
    public function character() {
    }
    
    public function select_popup() {
    }
    
    //ティンダーの処理
    public function card() {
    }
    
    //推薦結果
    public function result() {
   	    //別のページに飛ぶ機能　リダイレクト
		//$this->requestAction('OmiyageKobeTables/index');

			//OmiyageKobetable()のモデルを使う定義
		$this->set_omiyage_kobe_tables();
			//1~6この箱にランダムな値を代入
				$data= $this->OmiyageKobeTable->findById(rand(1,10));
				$this->set('data1',$data);

				$data= $this->OmiyageKobeTable->findById(rand(11,20));
				$this->set('data2',$data);			

				$data= $this->OmiyageKobeTable->findById(rand(21,30));
				$this->set('data3',$data);
				
				$data= $this->OmiyageKobeTable->findById(rand(31,40));
				$this->set('data4',$data);
				
				$data= $this->OmiyageKobeTable->findById(rand(41,50));
				$this->set('data5',$data);

				$data= $this->OmiyageKobeTable->findById(rand(51,60));
				$this->set('data6',$data);
    }
    
    public function sample(){
   		//OmiyageKobetable()のモデルを使う定義
		$this->set_omiyage_kobe_tables();
		//1~10の値をランダムで選択
	    $data = $this->OmiyageKobeTable->findById(rand(1,10));
		$this->set('data',$data);
		
    }



}