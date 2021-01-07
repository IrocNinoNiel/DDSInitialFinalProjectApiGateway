<?php
    namespace App\Services;
    use App\Traits\ConsumesExternalService;
    
    class Fee2Service{

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

        public function obtainFees2(){
            return $this->performRequest('GET','/api/fee/get');
        }

        public function obtainFee2($id) {
            return $this->performRequest('GET', "/api/fee/get/{$id}");
        }
        public function findStudentPay2($id) {
            return $this->performRequest('GET', "/api/fee/get/{$id}");
        }

        public function createFee2($data) {
            return $this->performRequest('POST', '/api/fee/add', $data);
        }

        public function editFee2($data, $id) {
            return $this->performRequest('PUT',"/api/fee/edit/{$id}", $data);
        }

        public function deleteFee2($id) {
        return $this->performRequest('DELETE', "/api/fee/delete/{$id}");
        }
    }