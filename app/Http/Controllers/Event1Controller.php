<?php
	namespace App\Http\Controllers;
	
	use Illuminate\Http\Request;
	use Illuminate\Http\Response;
	//use App\Models\User;  
	use App\Traits\ApiResponser; 
	use App\Services\Event1Service;
	use DB; 

	Class Event1Controller extends Controller {
		use ApiResponser;  
		private $request;
		

		/**
		* The service to consume the Event1 Microservice
		* @var Event1Service
		*/
		
		public $event1Service;
		
		/**
		* Create a new controller instance
		* @return void
		*/
		
		public function __construct(Event1Service $event1Service){
			$this->event1Service = $event1Service;
		}
		
	
		public function getEvents(){
			return $this->successResponse($this->event1Service->obtainEvents1());
	   }

       public function getEvent($event_id){
        return $this->successResponse($this->event1Service->obtainEvent1($event_id));
        
    }
	   public function addEvent(Request $request){
		   return $this->successResponse($this->event1Service->createEvent1($request->all(),Response::HTTP_CREATED));
	   }

	   

	   public function updateEvent(Request $request, $event_id){
		   return $this->successResponse($this->event1Service->editEvent1($request->all(),$event_id));
   
	   
	   }

	   public function deleteEvent($event_id){
		   return $this->successResponse($this->event1Service->deleteEvent1($event_id));

	   }
		

		
	}
