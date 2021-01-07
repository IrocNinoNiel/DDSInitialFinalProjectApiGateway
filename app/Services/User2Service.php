<?php
    namespace App\Services;
    use App\Traits\ConsumesExternalService;
    
    class User2Service{

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

        public function verifyUser2(){
            return $this->performRequest('GET','/api/user/login');
        }

        /**
        * Obtain the full list of Users from User1 Site
        * @return string
        */
        public function obtainUsers2(){
            return $this->performRequest('GET','/api/user/get');
        }

        public function createUser2($data) {
            return $this->performRequest('POST', '/api/user/add', $data);
        }

        /**
        * Obtain one single user from the User1 service
        * @return string
        */
        public function obtainUser2($id) {
            return $this->performRequest('GET', "/api/user/get/{$id}");
        }

        /**
        * Update an instance of user1 using the User1 service
        * @return string
        */
        public function editUser2($data, $id) {
            return $this->performRequest('PUT',"/api/user/edit/{$id}", $data);
        }

        /**
        * Remove an existing user
        * @return Illuminate\Http\Response
        */
        public function deleteUser2($id) {
        return $this->performRequest('DELETE', "/api/user/delete/{$id}");
        }
    }