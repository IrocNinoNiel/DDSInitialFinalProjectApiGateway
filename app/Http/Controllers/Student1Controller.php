<?php
	namespace App\Http\Controllers;
	
	use Illuminate\Http\Request;
	use Illuminate\Http\Response;
	//use App\Models\User;  
	use App\Traits\ApiResponser; 
	use App\Services\Student1Service;
	use DB; 

	Class Student1Controller extends Controller {
		use ApiResponser;  
		private $request;
		

		/**
		* The service to consume the Student1 Microservice
		* @var Student1Service
		*/
		
		public $student1Service;
		
		/**
		* Create a new controller instance
		* @return void
		*/
		
		public function __construct(Student1Service $student1Service){
			$this->student1Service = $student1Service;
		}
	

	
		public function getStudents(){
			return $this->successResponse($this->student1Service->obtainStudents1());
	   }

	   public function addStudent(Request $request){
		   return $this->successResponse($this->student1Service->createStudent1($request->all(),Response::HTTP_CREATED));
	   }

	   public function getStudent($student_id){
		   return $this->successResponse($this->student1Service->obtainStudent1($student_id));
		   
	   }

	   public function updateStudent(Request $request, $student_id){
		   return $this->successResponse($this->student1Service->editStudent1($request->all(),$student_id));
   
	   
	   }

	   public function deleteStudent($student_id){
		   return $this->successResponse($this->student1Service->deleteStudent1($student_id));

	   }
		

		
	}
