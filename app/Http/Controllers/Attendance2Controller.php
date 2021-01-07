<?php
	namespace App\Http\Controllers;
	
	use Illuminate\Http\Request;
	use Illuminate\Http\Response;  
	use App\Traits\ApiResponser; 
	use App\Services\Attendance2Service;
	use DB; 

	Class Attendance2Controller extends Controller {
		use ApiResponser;  
		private $request;
		

		/**
		* The service to consume the Attendance2 Microservice
		* @var Attendance2Service
		*/
		
		public $attendance2Service;
		
		/**
		* Create a new controller instance
		* @return void
		*/
		
		public function __construct(Attendance2Service $attendance2Service){
			$this->attendance2Service = $attendance2Service;
		}
	

	
		public function getAttendances(){
			return $this->successResponse($this->attendance2Service->getAttendances2());
        }

        public function getEventAttendance($event_id){
            return $this->successResponse($this->attendance2Service->getEventAttendance2($event_id));
        }
        public function getStudentAttendance($student_id){
            return $this->successResponse($this->attendance2Service->getStudentAttendance2($student_id));
            }
        
       
	    public function deleteAllStudentAttendance($student_id){
		   return $this->successResponse($this->attendance2Service->deleteAllStudentAttendance2($student_id));

        }

        public function deleteAllEventAttendance($event_id){
            return $this->successResponse($this->attendance2Service->deleteAllEventAttendance2($event_id));
 
         }

        public function addAttendance(Request $request){
            return $this->successResponse($this->attendance2Service->addAttendance1($request->all(),Response::HTTP_CREATED));
         }
		

		
	}
