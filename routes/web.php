<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

// // Api Student
$router->group(['prefix' => 'api/student1','middleware'=>'client.credentials'],function () use ($router) {
    $router->get('/get',['uses' => 'Student1Controller@getStudents']);
    $router->get('/get/{student_id}',['uses' => 'Student1Controller@getStudent']);
    $router->post('/add',['uses' => 'Student1Controller@addStudent']);
    $router->put('/edit/{student_id}',['uses' => 'Student1Controller@updateStudent']);
    $router->delete('/delete/{student_id}',['uses' => 'Student1Controller@deleteStudent']);

});

$router->group(['prefix' => 'api/student2','middleware'=>'client.credentials'],function () use ($router) {
    $router->get('/get',['uses' => 'Student2Controller@getStudents']);
    $router->get('/get/{student_id}',['uses' => 'Student2Controller@getStudent']);
    $router->post('/add',['uses' => 'Student2Controller@addStudent']);
    $router->put('/edit/{student_id}',['uses' => 'Student2Controller@updateStudent']);
    $router->delete('/delete/{student_id}',['uses' => 'Student2Controller@deleteStudent']);

});

// Api Event
$router->group(['prefix' => 'api/event1','middleware'=>'client.credentials'],function () use ($router) {
    $router->get('/get',['uses' => 'Event1Controller@getEvents']);
    $router->get('/get/{event_id}',['uses' => 'Event1Controller@getEvent']);
    $router->post('/add',['uses' => 'Event1Controller@addEvent']);
    $router->put('/edit/{event_id}',['uses' => 'Event1Controller@updateEvent']);
    $router->delete('/delete/{event_id}',['uses' => 'Event1Controller@deleteEvent']);

});

$router->group(['prefix' => 'api/event2','middleware'=>'client.credentials'],function () use ($router) {
    $router->get('/get',['uses' => 'Event2Controller@getEvents']);
    $router->get('/get/{event_id}',['uses' => 'Event2Controller@getEvent']);
    $router->post('/add',['uses' => 'Event2Controller@addEvent']);
    $router->put('/edit/{event_id}',['uses' => 'Event2Controller@updateEvent']);
    $router->delete('/delete/{event_id}',['uses' => 'Event2Controller@deleteEvent']);

});

// Api Attendance
$router->group(['prefix' => 'api/attendance1','middleware'=>'client.credentials'],function () use ($router) {
    $router->get('/get',['uses' => 'Attendance1Controller@getAttendances']);
    $router->get('/get/event/{event_id}',['uses' => 'Attendance1Controller@getEventAttendance']);
    $router->get('/get/student/{student_id}',['uses' => 'Attendance1Controller@getStudentAttendance']);
    $router->post('/add',['uses' => 'Attendance1Controller@addAttendance']);
    $router->delete('/delete/student/{student_id}',['uses' => 'Attendance1Controller@deleteAllStudentAttendance']);
    $router->delete('/delete/event/{event_id}',['uses' => 'Attendance1Controller@deleteAllEventAttendance']);
    
});

$router->group(['prefix' => 'api/attendance2','middleware'=>'client.credentials'],function () use ($router) {
    $router->get('/get',['uses' => 'Attendance2Controller@getAttendances']);
    $router->get('/get/event/{event_id}',['uses' => 'Attendance2Controller@getEventAttendance']);
    $router->get('/get/student/{student_id}',['uses' => 'Attendance2Controller@getStudentAttendance']);
    $router->post('/add',['uses' => 'Attendance2Controller@addAttendance']);
    $router->delete('/delete/student/{student_id}',['uses' => 'Attendance2Controller@deleteAllStudentAttendance']);
    $router->delete('/delete/event/{event_id}',['uses' => 'Attendance2Controller@deleteAllEventAttendance']);
    
});

// Api User
$router->group(['prefix' => 'api/users1','middleware'=>'client.credentials'],function () use ($router) {
    $router->get('/get',['uses' => 'User1Controller@getUsers']);
    $router->get('/get/{user_id}',['uses' => 'User1Controller@getUser']);
    $router->post('/add',['uses' => 'User1Controller@addUser']);
    $router->delete('/delete/{user_id}',['uses' => 'User1Controller@deleteUser']);
    $router->put('/edit/{user_id}',['uses' => 'User1Controller@updateUser']);

    $router->post('/login',['uses' => 'User1Controller@verifyUser']);

    
   
});

$router->group(['prefix' => 'api/users2','middleware'=>'client.credentials'],function () use ($router) {
    $router->get('/get',['uses' => 'User2Controller@getUsers']);
    $router->get('/get/{user_id}',['uses' => 'User2Controller@getUser']);
    $router->post('/add',['uses' => 'User1Controller@addUser']);
    $router->delete('/delete/{user_id}',['uses' => 'User2Controller@deleteUser']);
    $router->put('/edit/{user_id}',['uses' => 'User1Controller@updateUser']);

    $router->post('/login',['uses' => 'User2Controller@verifyUser']);
});


// Api Fee
$router->group(['prefix' => 'api/fee1','middleware'=>'client.credentials'],function () use ($router) {
    $router->get('/get',['uses' => 'Fee1Controller@getFees']);
    $router->get('/get/{fee_id}',['uses' => 'Fee1Controller@getFee']);
    $router->get('/get/student/{student_id}',['uses' => 'Fee1Controller@findIfStudentPay']);
    $router->post('/add',['uses' => 'Fee1Controller@addFee']);
    $router->put('/edit/{fee_id}',['uses' => 'Fee1Controller@updateFee']);
    $router->delete('/delete/{student_id}',['uses' => 'Fee1Controller@deleteStudentFee']);

});

$router->group(['prefix' => 'api/fee2','middleware'=>'client.credentials'],function () use ($router) {
    $router->get('/get',['uses' => 'Fee2Controller@getFees']);
    $router->get('/get/{fee_id}',['uses' => 'Fee2Controller@getFee']);
    $router->get('/get/student/{student_id}',['uses' => 'Fee2Controller@findIfStudentPay']);
    $router->post('/add',['uses' => 'Fee2Controller@addFee']);
    $router->put('/edit/{fee_id}',['uses' => 'Fee2Controller@updateFee']);
    $router->delete('/delete/{student_id}',['uses' => 'Fee2Controller@deleteStudentFee']);

});