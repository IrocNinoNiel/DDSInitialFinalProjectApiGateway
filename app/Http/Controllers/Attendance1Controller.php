<?php
	namespace App\Http\Controllers;
	
	use Illuminate\Http\Request;
	use Illuminate\Http\Response;  
	use App\Traits\ApiResponser; 
	use App\Services\Attendance1Service;
	use DB; 

	Class Attendance1Controller extends Controller {
		use ApiResponser;  
		private $request;
		

		/**
		* The service to consume the Attendance1 Microservice
		* @var Attendance1Service
		*/
		
		public $attendance1Service;
		
		/**
		* Create a new controller instance
		* @return void
		*/
		
		public function __construct(Attendance1Service $attendance1Service){
			$this->attendance1Service = $attendance1Service;
		}
	

	
		public function getAttendances(){
			return $this->successResponse($this->attendance1Service->getAttendances1());
        }

        public function getEventAttendance($event_id){
            return $this->successResponse($this->attendance1Service->getEventAttendance1($event_id));
        }
        public function getStudentAttendance($student_id){
            return $this->successResponse($this->attendance1Service->getStudentAttendance1($student_id));
            }
        
       
	    public function deleteAllStudentAttendance($student_id){
		   return $this->successResponse($this->attendance1Service->deleteAllStudentAttendance1($student_id));

        }

        public function deleteAllEventAttendance($event_id){
            return $this->successResponse($this->attendance1Service->deleteAllEventAttendance1($event_id));
 
         }

        public function addAttendance(Request $request){
            return $this->successResponse($this->attendance1Service->addAttendance1($request->all(),Response::HTTP_CREATED));
         }
		

		
	}
