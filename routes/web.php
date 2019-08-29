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

Route::get('/', function () {
    return view('welcome');
});

route::get('/xin-chao',function(){
    return 'xin chào ';

});
route::get('/xin-chao-ban',function(){
    return 'hello  ';

});


route::get('/xin-chao1/{ten}',function($ten){
    return 'hello  '.$ten;

});
route::get('/xin-chao2/{ten}/{namsinh}',function($ten,$namsinh){
    return 'xin chào:  <b>'.$ten.'</b><br>Có năm sinh là:<b>'.$namsinh.'</b>';

});
route::get('/xin-chao3/{ten}/{namsinh?}',function($ten,$namsinh=1998){
    return 'xin chào:  <b>'.$ten.'</b><br>Có năm sinh là:<b>'.$namsinh.'</b>';

});

route::get('/xin-chao4/{ten}',function($ten){
    return 'xin chào:'.$ten;

})->where(['ten'=>'[a-zA-Z]+']);


route::get('baitapdautien/{ten}/{namsinh}',function($ten,$namsinh){
    return 'xin chao chau:'.$ten.'</br>nam sinh: '.$namsinh;
})->where(['ten'=>'[a-zA-Z]+','namsinh'=>'[1-9]+']);

