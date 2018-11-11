<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Home extends CI_Controller {
 
	public function index()
	{
		$this->load->view('home');
	}
	
	public function userRegistration(){
		
		
		$cmpname = $this->input->post('cmpname');
		$address1 = $this->input->post('address1');
		$address2 = $this->input->post('address2');
		$city = $this->input->post('city');
		$state = $this->input->post('state');
		$zip = $this->input->post('zip');
		$cuntryid = $this->input->post('cuntryid');
		$postaladdress = $this->input->post('postaladdress');
		
		//admin 
		$adminfname = $this->input->post('adminfname');
		$adminmname = $this->input->post('adminmname');
		$adminlname = $this->input->post('adminlname');
		$adminemail = $this->input->post('adminemail');
		$adminphncontrycode = $this->input->post('adminphncontrycode');
		$adminphnareacode = $this->input->post('adminphnareacode');
		$adminphnnumber = $this->input->post('adminphnnumber');
		$adminphnextenstion = $this->input->post('adminphnextenstion');
		$adminfaxcontrycode = $this->input->post('adminfaxcontrycode');
		$adminfaxareacode = $this->input->post('adminfaxareacode');
		$adminfaxnumber = $this->input->post('adminfaxnumber');
		$adminfaxextenstion = $this->input->post('adminfaxextenstion');
		
		// bill
		$billfname = $this->input->post('billfname');
		$billmname = $this->input->post('billmname');
		$billlname = $this->input->post('billlname');
		$billemail = $this->input->post('billemail');
		$billphncontrycode = $this->input->post('billphncontrycode');
		$billphnareacode = $this->input->post('billphnareacode');
		$billphnnumber = $this->input->post('billphnnumber');
		$billphnextenstion = $this->input->post('billphnextenstion');
		$billfaxcontrycode = $this->input->post('billfaxcontrycode');
		$billfaxareacode = $this->input->post('billfaxareacode');
		$billfaxnumber = $this->input->post('billfaxnumber');
		$billfaxextenstion = $this->input->post('billfaxextenstion');
		
		//tech
		$techfname = $this->input->post('techfname');
		$techmname = $this->input->post('techmname');
		$techlname = $this->input->post('techlname');
		$techemail = $this->input->post('techemail');
		$techphncontrycode = $this->input->post('techphncontrycode');
		$techphnareacode = $this->input->post('techphnareacode');
		$techphnnumber = $this->input->post('techphnnumber');
		$techphnextenstion = $this->input->post('techphnextenstion');
		$techfaxcontrycode = $this->input->post('techfaxcontrycode');
		$techfaxareacode = $this->input->post('techfaxareacode');
		$techfaxnumber = $this->input->post('techfaxnumber');
		$techfaxextenstion = $this->input->post('techfaxextenstion');
		
		
		if (strlen($zip) != 3 && !is_numeric($zip)) {
			echo '<script>alert("Enter the correct Zip code.");</script>';
			$this->load->view('signup');	
		}
		else{
		
			$userRegistrationRequest = '<?xml version="1.0" encoding="UTF-8" ?><methodCall><methodName>Execute</methodName><params><param><value><struct><member><name>Server</name><value>BM</value></member><member><name>Method</name><value>AccountAdd_API</value></member><member><name>Params</name><value><array><data><value><i4>1</i4></value><value><i4>3</i4></value><value>'.$cmpname.'</value><value>'.$address1.'</value><value>'.$address2.'</value><value>'.$city.'</value><value>'.$state.'</value><value>'.$zip.'</value><value>'.$cuntryid.'</value><value>'.$postaladdress.'</value><value>'.$adminfname.'</value><value>'.$adminmname.'</value><value>'.$adminlname.'</value><value>'.$adminemail.'</value><value>'.$adminphncontrycode.'</value><value>'.$adminphnareacode.'</value><value>'.$adminphnnumber.'</value><value>'.$adminphnextenstion.'</value><value>'.$adminfaxcontrycode.'</value><value>'.$adminfaxareacode.'</value><value>'.$adminfaxnumber.'</value><value>'.$adminfaxextenstion.'</value><value>'.$billfname.'</value><value>'.$billmname.'</value><value>'.$billlname.'</value><value>'.$billemail.'</value><value>'.$billphncontrycode.'</value><value>'.$billphnareacode.'</value><value>'.$billphnnumber.'</value><value>'.$billphnextenstion.'</value><value>'.$billfaxcontrycode.'</value><value>'.$billfaxareacode.'</value><value>'.$billfaxnumber.'</value><value>'.$billfaxextenstion.'</value><value>'.$techfname.'</value><value>'.$techmname.'</value><value>'.$techlname.'</value><value>'.$techemail.'</value><value>'.$techphncontrycode.'</value><value>'.$techphnareacode.'</value><value>'.$techphnnumber.'</value><value>'.$techphnextenstion.'</value><value>'.$techfaxcontrycode.'</value><value>'.$techfaxareacode.'</value><value>'.$techfaxnumber.'</value><value>'.$techfaxextenstion.'</value><value></value><value></value><value></value><value><i4></i4></value><value></value><value></value><value></value><value></value><value></value><value></value><value></value><value></value><value></value><value></value><value><i4>2</i4></value><value>Default</value><value></value><value><i4></i4></value><value>ODP Test Case</value></data></array></value></member></struct></value></param></params></methodCall>';
		
		
			$response = $this->requestToThirdParty($userRegistrationRequest,'');
		
			echo '<script>alert("Your account is successfully created.");</script>';
			$this->load->view('home');
		}
	}
	
	public function userValidation(){
		
		$username = $this->input->post('username');
		
		$userValideRequest = '<?xml version="1.0" encoding="UTF-8" ?><methodCall><methodName>Execute</methodName><params><param><value><struct><member><name>Server</name><value>BM</value></member><member><name>Method</name><value>UserValidate_API</value></member><member><name>Params</name><value><array><data><value>'.$username.'</value></data></array></value></member></struct></value></param></params></methodCall>';
		
		$responseUserValidation = $this->requestToThirdParty($userValideRequest,'');
		
		$objUserValidation = new SimpleXMLElement($responseUserValidation);
		$arrUserValidation = json_decode(json_encode($objUserValidation), TRUE);
		
		// account number
		$accountNo = $arrUserValidation['params']['param']['value']['struct']['member']['value']['array']['data']['value']['array']['data']['value'][0]['i4'];
		
		// vendor ID
		$vendorId = $arrUserValidation['params']['param']['value']['struct']['member']['value']['array']['data']['value']['array']['data']['value'][1]['i4'];
		
		// user id
		$userId = $arrUserValidation['params']['param']['value']['struct']['member']['value']['array']['data']['value']['array']['data']['value'][2]['i4'];
		
		
		log_message('debug','account number: '.$accountNo,false);
		log_message('debug','vendor id: '.$vendorId,false);
		log_message('debug','user id: '.$userId,false);
		
		if ($accountNo != '0' && $vendorId == '0' && $userId == '0') {
			
			$fetchUserDetailsRequest = '<?xml version="1.0" encoding="UTF-8" ?><methodCall><methodName>Execute</methodName><params><param><value><struct><member><name>Server</name><value>BM</value></member><member><name>Method</name><value>AccountDetailsGet_API</value></member><member><name>Params</name><value><array><data><value><i4>'.$accountNo.'</i4></value></data></array></value></member></struct></value></param></params></methodCall>';
			
			$responseDetails = $this->requestToThirdParty($fetchUserDetailsRequest,'');
			$objResponseDetails = new SimpleXMLElement($responseDetails);
			$arrResponseDetails = json_decode(json_encode($objResponseDetails), TRUE);
			
			$companyName = $arrResponseDetails['params']['param']['value']['struct']['member'][2]['value']['array']['data']['value'][2];
			
			echo '<script>alert('.'Your comoany name is '.$companyName.');</script>';
			$this->load->view('home');
			
		}else{
			$this->load->view('signup');
		}
		
	}
	
	private function requestToThirdParty($request,$url){
		
		log_message('debug','request send to party>>>>>>>>>>>'.$request,false);
		
		$header  = "POST HTTP/1.0 \r\n";
		$header .= "Content-type: text/xml \r\n";
		$header .= "Content-length: ".strlen($request)." \r\n";
		$header .= "Content-transfer-encoding: text \r\n";
		$header .= "Connection: close \r\n\r\n"; 
		$header .= $request;

		$ch = curl_init();
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0); 
		curl_setopt($ch, CURLOPT_URL,$url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_TIMEOUT, 4);
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $header);

		$data = curl_exec($ch); 

		log_message('debug','response recieved from party>>>>>>>>>>>'.$data,false);
		
		$template = '<?xml version="1.0"?><methodResponse><params><param><value><struct><member><name>Result</name><value><array><data><value><array><data><value><i4>0</i4></value><value><i4>0</i4></value><value><i4>0</i4></value></data></array></value></data></array></value></member></struct></value></param></params></methodResponse>';
		
		return $data;
		
	}
	
}