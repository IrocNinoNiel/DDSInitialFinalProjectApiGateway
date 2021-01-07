<?php
    namespace App\Services;
    use App\Traits\ConsumesExternalService;
    
    class Student1Service{

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

        public function obtainStudents1(){
            return $this->performRequest('GET','/api/student/get');
        }

        public function obtainStudent1($id) {
            return $this->performRequest('GET', "/api/student/get/{$id}");
        }

        public function createStudent1($data) {
            return $this->performRequest('POST', '/api/student/add', $data);
        }

        public function editStudent1($data, $id) {
            return $this->performRequest('PUT',"/api/student/edit/{$id}", $data);
        }

        public function deleteStudent1($id) {
        return $this->performRequest('DELETE', "/api/student/delete/{$id}");
        }
    }