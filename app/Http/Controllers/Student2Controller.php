<?php
	namespace App\Http\Controllers;
	
	use Illuminate\Http\Request;
	use Illuminate\Http\Response;
	//use App\Models\User;  
	use App\Traits\ApiResponser; 
	use App\Services\Student2Service;
	use DB; 

	Class Student2Controller extends Controller {
		use ApiResponser;  
		private $request;
		

		/**
		* The service to consume the Student2 Microservice
		* @var Student2Service
		*/
		
		public $student2Service;
		
		/**
		* Create a new controller instance
		* @return void
		*/
		
		public function __construct(Student2Service $student2Service){
			$this->student2Service = $student2Service;
		}
	

	
		public function getStudents(){
			return $this->successResponse($this->student2Service->obtainStudents2());
	   }

	   public function addStudent(Request $request){
		   return $this->successResponse($this->student2Service->createStudent2($request->all(),Response::HTTP_CREATED));
	   }

	   public function getStudent($student_id){
		   return $this->successResponse($this->student2Service->obtainStudent2($student_id));
		   
	   }

	   public function updateStudent(Request $request, $student_id){
		   return $this->successResponse($this->student2Service->editStudent2($request->all(),$student_id));
   
	   
	   }

	   public function deleteStudent($student_id){
		   return $this->successResponse($this->student2Service->deleteStudent2($student_id));

	   }
		

		
	}
