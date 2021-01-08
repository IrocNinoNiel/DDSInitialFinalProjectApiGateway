<?php
    namespace App\Services;
    use App\Traits\ConsumesExternalService;
    
    class Attendance1Service{

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

        public function getAttendances1(){
            return $this->performRequest('GET','/api/attendance/get');
        }

        public function getEventAttendance1($id){
            return $this->performRequest('GET',"/api/attendance/get/{$id}");
        }

        public function getStudentAttendance1($id){
            return $this->performRequest('GET',"/api/attendance/get/{$id}");
        }

        public function deleteAllStudentAttendance1($id) {
            return $this->performRequest('DELETE', "/api/attendance/delete{$id}");
        }

        public function deleteAllEventAttendance1($id) {
            return $this->performRequest('DELETE', "/api/attendance/delete{$id}" );
        }

        public function addAttendance1($data) {
            return $this->performRequest('POST', "/api/attendance/add", $data);
        }

        
    }