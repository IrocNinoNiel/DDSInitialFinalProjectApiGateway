<?php
    namespace App\Services;
    use App\Traits\ConsumesExternalService;
    
    class Event2Service{

        use ConsumesExternalService;

        /**
        * The base uri to consume the User2 Service
        * @var string
        */ 

        public $baseUri;

         /**
        * The secret to consume the User2 Service
        * @var string
        */
        public $secret;


        public function __construct() {

            $this->baseUri = config('services.users2.base_uri');
            $this->secret =config('services.users2.secret');
        }

        public function obtainEvents2(){
            return $this->performRequest('GET','/api/event/get');
        }

        public function obtainEvent2($id) {
            return $this->performRequest('GET', "/api/event/get/{$id}");
        }

        public function createEvent2($data) {
            return $this->performRequest('POST', '/api/event/add', $data);
        }

        public function editEvent2($data, $id) {
            return $this->performRequest('PUT',"/api/event/edit/{$id}", $data);
        }

        public function deleteEvent2($id) {
        return $this->performRequest('DELETE', "/api/event/delete/{$id}");
        }
    }