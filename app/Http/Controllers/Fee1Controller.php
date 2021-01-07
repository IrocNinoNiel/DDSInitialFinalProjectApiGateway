<?php
	namespace App\Http\Controllers;
	
	use Illuminate\Http\Request;
	use Illuminate\Http\Response;
	use App\Traits\ApiResponser; 
	use App\Services\Fee1Service;
	use DB; 

	Class Fee1Controller extends Controller {
		use ApiResponser;  
		private $request;
		

		/**
		* The service to consume the Fee1 Microservice
		* @var Fee1Service
		*/
		
		public $fee1Service;
		
		/**
		* Create a new controller instance
		* @return void
		*/
		
		public function __construct(Fee1Service $fee1Service){
			$this->fee1Service = $fee1Service;
		}
		
	
		public function getFees(){
			return $this->successResponse($this->fee1Service->obtainFees1());
        }

        public function getFee($fee_id){
            return $this->successResponse($this->fee1Service->obtainFee1($fee_id));
        
        }

        public function findIfStudentPay($student_id){
            return $this->successResponse($this->fee1Service->obtainFee1($fee_id));
        
        }

	   public function addFee(Request $request){
		   return $this->successResponse($this->fee1Service->createFee1($request->all(),Response::HTTP_CREATED));
	   }

	  

	   public function updateFee(Request $request, $fee_id){
		   return $this->successResponse($this->fee1Service->editUser1($request->all(),$fee_id));
   
	   
	   }

	   public function deleteStudentFee($student_id){
		   return $this->successResponse($this->user1Service->deleteFee1($fee_id));

	   }
		

		
	}
