<?php
    namespace App\Services;
    use App\Traits\ConsumesExternalService;
    
    class Attendance2Service{

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

        public function getAttendances2(){
            return $this->performRequest('GET','/api/attendance/get');
        }

        public function getEventAttendances2($id){
            return $this->performRequest('GET',"/api/attendance/get/{$id}");
        }

        public function getStudentAttendance2($id){
            return $this->performRequest('GET',"/api/attendance/get/{$id}");
        }

        public function deleteAllStudentAttendance2($id) {
            return $this->performRequest('DELETE', "/api/attendance/delete{$id}");
        }

        public function deleteAllEventAttendance2($id) {
            return $this->performRequest('DELETE', "/api/attendance/delete{$id}" );
        }

        public function addAttendance2($data) {
            return $this->performRequest('POST', "/api/attendance/add", $data);
        }

        
    }