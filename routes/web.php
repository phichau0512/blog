<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// route::get('/xin-chao',function(){
//     return 'xin chào ';

// });
// route::get('/xin-chao-ban',function(){
//     return 'hello  ';

// });


// route::get('/xin-chao1/{ten}',function($ten){
//     return 'hello  '.$ten;

// });
// route::get('/xin-chao2/{ten}/{namsinh}',function($ten,$namsinh){
//     return 'xin chào:  <b>'.$ten.'</b><br>Có năm sinh là:<b>'.$namsinh.'</b>';

// });
// route::get('/xin-chao3/{ten}/{namsinh?}',function($ten,$namsinh=1998){
//     return 'xin chào:  <b>'.$ten.'</b><br>Có năm sinh là:<b>'.$namsinh.'</b>';

// });

// route::get('/xin-chao4/{ten}',function($ten){
//     return 'xin chào:'.$ten;

// })->where(['ten'=>'[a-zA-Z]+']);




// route::get('baitapdautien/{ten}/{namsinh}',function($ten,$namsinh){
//     echo 'xin chao chau:'.$ten.'</br>nam sinh: '.$namsinh;
// })->where(['ten'=>'[a-zA-Z]+','namsinh'=>'[0-9/]+']);

// route::get('/chau/{lop}/{khóa}',function($lop,$khoa ){
//     return 'xin chào tôi học lớp:'.$lop;
// })->where (['lop'=> '[a-b1-9]+']);

// //dinh danh
// //c1
// route::get('Route1',['as'=>'MyRoute',function(){
//     echo"xin chao cac ban";
// }]);
// //c2
// route::get('route2',function(){
//     echo "dây là route 2!";
// })->name('MyRoute2');
// //goiten
// route::get('GoiTen',function(){
//     return redirect()->route('MyRoute2');
// });
// // nhóm định danh
// route::group(['prefix'=>'MyRoute'],function(){
//     route::get('User1',function(){
//         echo "đây là route1";
//     });
//     route::get('User2',function(){
//         echo"đây là route2";
//     });
//     route::get('User3',function(){
//         echo"đây là route3";
//     });
// });
//goicontroller
route::get('/xin-chao/{ten}/{namsinh}','mycontroller@getxinchao');
route::get('/xin-chao1/{ten}/{namsinh}','testcontroller@getXinChao');
route::get('/tam-biet/{ten}/{namsinh}','testcontroller@getTamBiet');
route::get('Goicontroller','mycontroller@xinchao');
route::get('thamso/{ten}','mycontroller@khoahoc');



///truyen du lieu compact()
// route::get('/chao/{user}',function($user){
//     return view('hello-user',compact('user'));
// });
   
//URL
route::get('MyRequest','mycontroller@GetURL');

// route::get('chao/{user}',function($user){
//     return view('hello-user',['user'=>$user]);
// });
route::get('chao/{user}','TestController@getchao');

// nhập dữ liệu với request
Route::get('/login','logincontroller@GetLogin');
Route::post('/login','logincontroller@PostLogin');



Route::get('/call-view',function(){
    return view('home');
});











route::get('getForm',function(){
    return view('postForm');
});
route::post('postForm',[
    'as'=>'postForm',
    'uses'=>'MyController@postForm'
    ]);
//cookie
route::get('setCookie','MyController@setCookie');
route::get('getCookie','Mycontroller@getCookie');
//uploadfile
route::get('uploadFile', function(){
    return view('postFile');
});
route::post('postFile',['as'=>'postFile','uses'=>'MyController@postFile']);

