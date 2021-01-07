<?php
    namespace App\Services;
    use App\Traits\ConsumesExternalService;
    
    class Fee1Service{

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

        public function obtainFees1(){
            return $this->performRequest('GET','/api/fee/get');
        }

        public function obtainFee1($id) {
            return $this->performRequest('GET', "/api/fee/get/{$id}");
        }
        public function findStudentPay1($id) {
            return $this->performRequest('GET', "/api/fee/get/{$id}");
        }

        public function createFee1($data) {
            return $this->performRequest('POST', '/api/fee/add', $data);
        }

        public function editFee1($data, $id) {
            return $this->performRequest('PUT',"/api/fee/edit/{$id}", $data);
        }

        public function deleteFee1($id) {
        return $this->performRequest('DELETE', "/api/fee/delete/{$id}");
        }
    }