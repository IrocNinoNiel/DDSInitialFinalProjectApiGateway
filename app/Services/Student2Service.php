<?php
    namespace App\Services;
    use App\Traits\ConsumesExternalService;
    
    class Student2Service{

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

            $this->baseUri = config('services.users2.base_uri');
            $this->secret =config('services.users2.secret');
        }

        public function obtainStudents2(){
            return $this->performRequest('GET','/api/student/get');
        }

        public function obtainStudent2($id) {
            return $this->performRequest('GET', "/api/student/get/{$id}");
        }

        public function createStudent2($data) {
            return $this->performRequest('POST', '/api/student/add', $data);
        }

        public function editStudent2($data, $id) {
            return $this->performRequest('PUT',"/api/student/edit/{$id}", $data);
        }

        public function deleteStudent2($id) {
        return $this->performRequest('DELETE', "/api/student/delete/{$id}");
        }
    }