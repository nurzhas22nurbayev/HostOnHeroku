<?php
use Illuminate\Support\Facades\Route;
use App\Models\Student;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where yu can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/*----------------------------------------------- WEBSITE ROUTES --------------------------------------------------------*/

Route::get('/', function () {
    return view('index');
});

Route::get('/index.blade.php', function () {
    return redirect('/');
});

Route::get('/ourProducts.blade.php', function () {
    return view('ourProducts');
});

Route::get('/blog.blade.php', function () {
    return view('blog');
});

Route::get('/brand.blade.php', function () {
    return view('brand');
});

Route::get('/innoSus.blade.php', function () {
    return view('innoSus');
});

Route::get('/contactUs.blade.php', function () {
    return view('contactUs');
});

Route::get('/user', 'UserController@index');

Route::post('/useradd', 'UserController@store');

/*xxxxxxxxxxxxxxxxx ----------------------------- WEBSITE ROUTES ------------------------------------ xxxxxxxxxxxxxxxxxx*/

Route::get('/{lang}', function($lang){
    App::setlocale($lang);
    return view('index');
});


// this returns my name
Route::get('/wel', function () {
    return view('welcome2');
});

Route::get('/test', function () {
    return "Web programming: back end";
});

Route::get('/welcome/{id}', function () {
    return view('welcome3');
});

Route::get('/student/{id}', "StudentController@index");

Route::get('/name', function () {
    return view('welcome3', ['name' => 'Nurzhas']);
});

Route::get('/user/{name}', function ($name) {
    return view('welcome3', compact('name'));
});

Route::get('/students/{id}', "StudentController@show");

// ROUTES TO LAB5
Route::get('/getName', "StudentController@getName");
Route::get('/getDate', "StudentController@getDate");
Route::get('/getAge', "StudentController@getAge");


Route::get('/testblade', function () {
    return view('test');
});

Route::get('/insert', function () {
    DB::insert("insert into posts(title, body) values(?,?)"
    ,['My title', 'My body']);
});


/*  ----------------- LABARATORY WORK 6 ----------------------   */ 

/* INSERTING DATA INTTO STUDENTS TABLE */
Route::get('/insert2', function () {
    DB::insert("insert into students(name, date_of_birth, gpa, advisor) values('Magzhan', '2001-05-05', 3.1, 'Linus')");
});

/* SELECTING  DATA FROM STUDENTS TABLE */
Route::get('/select2', function(){
    $res = DB::select('select * from students where id=?', [2]);

    foreach($res as $students)
    {
        echo "name is : " . $students->name;
        echo "<br>";
        echo "date_of_birth is : " . $students->date_of_birth;
        echo "<br>";
        echo "gpa is : " . $students->gpa;
        echo "<br>";
        echo "advisor is : " . $students->advisor;
    }
});

/* UPDATING DATA IN STUDENTS TABLE */
Route::get('/update2', function(){
    $updated = DB::update('update students set name = "Steve" where id = ?', [1]);
    return $updated;
});

/* DELETING DATA FROM STUDENTS TABLE */
Route::get('/delete2', function(){
    $deleted = DB::delete('delete from students where id = ?', [3]);
    return $deleted;
});

/* INSERTING USING STUDENT MODEL */
Route::get('/insert3', function () {
    $student = new Student;

    $student->name='Dastan';
    $student->date_of_birth='2002-02-02';
    $student->gpa=4.0;
    $student->advisor='Dauren';
    $student->save(); 
});

/* UPDATING USING STUDENT MODEL */
Route::get('/update3', function(){
    $student = new Student;

    $student = Student::find(1);
    $student->name='Dijkstra';
    $student->save(); 
});
/* SELECTING USING STUDENT MODEL */
Route::get('/select3', function(){
    $student = new Student;

    $student = Student::all();

    foreach($student as $stu)
    {
        echo "name is : " . $stu->name;
        echo "<br>";
        echo "date_of_birth is : " . $stu->date_of_birth;
        echo "<br>";
        echo "gpa is : " . $stu->gpa;
        echo "<br>";
        echo "advisor is : " . $stu->advisor;
        echo "<br>";
    }
});

/* DELETING USING STUDENT MODEL */
Route::get('/delete3', function(){
    $student = new Student;

    $student = Student::find(4);
    $student->delete();
});    


/* X  ---------------------------------------------------------  X */ 



Route::get('/test/{id}/{first_name?}/{last_name?}', function($id = null, $first_name = "Nurzhas", $last_name = "Nurbayev"){
    return "ID : " . $id . "First name : " . $first_name . " Last name : " . $last_name;      
});