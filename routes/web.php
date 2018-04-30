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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/dashboards', function(){
    return view('/partial/dashboard');

});

Route::get('/organisations', function(){
    $province = \App\Models\Province::get();
    $groupPlant = \App\Models\Group_plant::whereIn('type_code', array('01', '02', '03', '04', '05', '06' ,'07'))->get();

    return view('/partial/orgDatatables',[
        'province' => $province,
        'groupPlant' => $groupPlant,
    ]);
});
Route::get('/amphurList/{provinceId}','partialController@amphurList');
Route::get('/tambonList/{amphurCode}','partialController@tambonList');
Route::get('/plantList/{typeCode}','partialController@plantList');
//Route::resource('organisations', 'OrganisationsController');

Route::get('/members', function(){
    return view('/partial/member');

});
Route::get('/reports', function(){
    return view('/partial/report');

});
Route::get('/setups', function(){
    return view('/partial/setup');

});

Route::get('/redirect', function () {
    $query = http_build_query([
        'client_id'     => '3',
        'redirect_uri'  => 'http://localhost:8000/oauth/callback',
        'response_type' => 'code',
        'scope'         => '',
    ]);

    return redirect('http://localhost:8000/oauth/authorize?' . $query);
});

Route::get('/oauth/callback', function () {

    $http = new \GuzzleHttp\Client();

    if (request('code')) {

        $response = $http->post('http://localhost:8000/oauth/token', array(
            'form_params' => array(
                'grant_type'    => 'authorization_code',
                'client_id'     => '3',
                'client_secret' => 'oMH9Szalw2RCDNmyhOEm8DILH80pm6rfSNaUK4E7',
                'redirect_uri'  => 'http://localhost:8000/oauth/callback',
                'code'          => request('code'),
            ),
        ));

        return json_decode((string)$response->getBody(), TRUE);
    } else {
        return response()->json(['error' => request('error')]);
    }
});