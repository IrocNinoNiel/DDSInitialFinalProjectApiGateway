<?php
	namespace App\Http\Controllers;
	
	use Illuminate\Http\Request;
	use Illuminate\Http\Response;
	//use App\Models\User;  
	use App\Traits\ApiResponser; 
	use App\Services\User2Service;
	use DB; 

	Class User2Controller extends Controller {
		use ApiResponser; 

		private $request;

			/**
		* The service to consume the User1 Microservice
		* @var User1Service
		*/
		
		public $user2Service;
		
		/**
		* Create a new controller instance
		* @return void
		*/
		public function __construct(User2Service $user2Service){
			$this->user2Service = $user2Service;
		}

		public function verifyUser(Request $request){
			return $this->successResponse($this->user1Service->verifyUser2());
		}

		public function getUsers(){
			return $this->successResponse($this->user2Service->obtainUsers2());
	   	}

	   	public function addUser(Request $request){
		   return $this->successResponse($this->user2Service->createUser2($request->all(),Response::HTTP_CREATED));
	   	}

	   	public function getUser($user_id){
		   return $this->successResponse($this->user2Service->obtainUser2($user_id));
		   
	   	}

	   	public function updateUser(Request $request, $user_id){
		   return $this->successResponse($this->user2Service->editUser2($request->all(),$user_id));
	   
	   	}

	   	public function deleteUser($user_id){
		   return $this->successResponse($this->user2Service->deleteUser2($user_id));

	   	}
		

		
	}
