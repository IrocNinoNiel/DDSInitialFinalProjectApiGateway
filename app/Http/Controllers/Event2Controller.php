<?php
	namespace App\Http\Controllers;
	
	use Illuminate\Http\Request;
	use Illuminate\Http\Response;
	//use App\Models\User;  
	use App\Traits\ApiResponser; 
	use App\Services\Event2Service;
	use DB; 

	Class Event2Controller extends Controller {
		use ApiResponser;  
		private $request;
		

		/**
		* The service to consume the Event2 Microservice
		* @var Event2Service
		*/
		
		public $event2Service;
		
		/**
		* Create a new controller instance
		* @return void
		*/
		
		public function __construct(Event2Service $event2Service){
			$this->event2Service = $event2Service;
		}
		
	
		public function getEvents(){
			return $this->successResponse($this->event2Service->obtainEvents2());
	   }

       public function getEvent($event_id){
        return $this->successResponse($this->event2Service->obtainEvent2($event_id));
        
    }
	   public function addEvent(Request $request){
		   return $this->successResponse($this->event2Service->createEvent2($request->all(),Response::HTTP_CREATED));
	   }

	   

	   public function updateEvent(Request $request, $event_id){
		   return $this->successResponse($this->event2Service->editEvent2($request->all(),$event_id));
   
	   
	   }

	   public function deleteEvent($event_id){
		   return $this->successResponse($this->event2Service->deleteEvent2($event_id));

	   }
		

		
	}
