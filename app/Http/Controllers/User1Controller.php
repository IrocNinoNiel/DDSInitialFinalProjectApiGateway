<?php
	namespace App\Http\Controllers;
	
	use Illuminate\Http\Request;
	use Illuminate\Http\Response;
	//use App\Models\User;  
	use App\Traits\ApiResponser; 
	use App\Services\User1Service;
	use DB; 

	Class User1Controller extends Controller {
		use ApiResponser;  
		private $request;
		

		/**
		* The service to consume the User1 Microservice
		* @var User1Service
		*/
		
		public $user1Service;
		
		/**
		* Create a new controller instance
		* @return void
		*/
		
		public function __construct(User1Service $user1Service){
			$this->user1Service = $user1Service;
		}
		public function verifyUser(Request $request){
			return $this->successResponse($this->user1Service->verifyUser1());
		}

	
		public function getUsers(){
			return $this->successResponse($this->user1Service->obtainUsers1());
	   }

	   public function addUser(Request $request){
		   return $this->successResponse($this->user1Service->createUser1($request->all(),Response::HTTP_CREATED));
	   }

	   public function getUser($user_id){
		   return $this->successResponse($this->user1Service->obtainUser1($user_id));
		   
	   }

	   public function updateUser(Request $request, $user_id){
		   return $this->successResponse($this->user1Service->editUser1($request->all(),$user_id));
   
	   
	   }

	   public function deleteUser($user_id){
		   return $this->successResponse($this->user1Service->deleteUser1($user_id));

	   }
		

		
	}
