<?php
    namespace App\Services;
    use App\Traits\ConsumesExternalService;
    
    class Event1Service{

        use ConsumesExternalService;

        /**
        * The base uri to consume the User1 Service
        * @var string
        */ 

        public $baseUri;

         /**
        * The secret to consume the User1 Service
        * @var string
        */
        public $secret;


        public function __construct() {

            $this->baseUri = config('services.users1.base_uri');
            $this->secret =config('services.users1.secret');
        }

        public function obtainEvents1(){
            return $this->performRequest('GET','/api/event/get');
        }

        public function obtainEvent1($id) {
            return $this->performRequest('GET', "/api/event/get/{$id}");
        }

        public function createEvent1($data) {
            return $this->performRequest('POST', '/api/event/add', $data);
        }

        public function editEvent1($data, $id) {
            return $this->performRequest('PUT',"/api/event/edit/{$id}", $data);
        }

        public function deleteEvent1($id) {
        return $this->performRequest('DELETE', "/api/event/delete/{$id}");
        }
    }