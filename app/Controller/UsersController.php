<?php
class UsersController extends AppController {
	var $name = 'Users';
	var $uses = array('Xml');
	function index(){
		$userId = $this->Session->id();
		//$data = $this->User->findById($userId);
		
		//$this->set('posts', $this->Post->find('all'));
		
		$this->set('title_for_layout', 'イマセレ！');
	
	}
	
	function select($lat=null, $lon=null, $mode=1){
		App::uses('Xml', 'Utility');
		$recruitApi = Configure::read('recruit_web_api');
		$shopData = array();
		$lunchQuery = '';
		if($lat && $lon){
			$url = 'http://webservice.recruit.co.jp/hotpepper/gourmet/v1/';
			if($mode == 1){
				$lunchQuery = '&lunch=1';
			}
			$xml = Xml::build($url.'?key='.$recruitApi.'&lat='.$lat.'&lng='.$lon.'&range=2'.$lunchQuery, array('return' => 'simplexml'));  
			//debug($xml);
			$count = (int)$xml->results_available;
			if($count > 0) {
				$num = mt_rand(1, $count);
				$xml2 = Xml::build($url.'?key='.$recruitApi.'&lat='.$lat.'&lng='.$lon.'&range=2&start='.$num.$lunchQuery, array('return' => 'simplexml'));
				//debug($xml2->shop[0]);
				$shopData = array(
					'name' => $xml2->shop[0]->name,
					'address' => $xml2->shop[0]->address,
					'logo_image' => $xml2->shop[0]->logo_image,
					'url' => $xml2->shop[0]->urls->pc,
					'open' => $xml2->shop[0]->open,
					'close' => $xml2->shop[0]->close,
					'coupon' => $xml2->shop[0]->ktai_coupon,
					'coupon_url' => $xml2->shop[0]->coupon_urls->sp,
				);
			}
		}
		$this->set('lat', $lat);
		$this->set('lon', $lon);
		$this->set('mode', $mode);
		$this->set('shop_data', $shopData);
		$this->set('title_for_layout', 'イマセレ！');
	}
}
?>