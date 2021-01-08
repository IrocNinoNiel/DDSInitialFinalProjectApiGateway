<?php
	namespace App\Http\Controllers;
	
	use Illuminate\Http\Request;
	use Illuminate\Http\Response;
	use App\Traits\ApiResponser; 
	use App\Services\Fee2Service;
	use DB; 

	Class Fee2Controller extends Controller {
		use ApiResponser;  
		private $request;
		

		/**
		* The service to consume the Fee2 Microservice
		* @var Fee2Service
		*/
		
		public $fee2Service;
		
		/**
		* Create a new controller instance
		* @return void
		*/
		
		public function __construct(Fee2Service $fee2Service){
			$this->fee2Service = $fee2Service;
		}
		
	
		public function getFees(){
			return $this->successResponse($this->fee2Service->obtainFees2());
        }

        public function getFee($fee_id){
            return $this->successResponse($this->fee2Service->obtainFee2($fee_id));
        
        }

        public function findIfStudentPay($student_id){
            return $this->successResponse($this->fee2Service->findStudentPay2($student_id));
        
        }

	   public function addFee(Request $request){
		   return $this->successResponse($this->fee2Service->createFee2($request->all(),Response::HTTP_CREATED));
	   }

	  

	   public function updateFee(Request $request, $fee_id){
		   return $this->successResponse($this->fee2Service->editFee2($request->all(),$fee_id));
   
	   
	   }

	   public function deleteStudentFee($fee_id){
		   return $this->successResponse($this->user2Service->deleteFee2($fee_id));

	   }
		

		
	}
