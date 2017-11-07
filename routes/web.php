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

Route::post('subscribe', function ()
{
    $listId = 'a45c3fc3c6';
    $email = request()->input('email');

    if(Mailchimp::check($listId, $email))
    {
        return "El email {$email} ya ha sido registrado";
    };

    Mailchimp::subscribe(
        $listId,
        $email,
        [], //mergeFields
        true //confirm
    );

    return '¡Listo!';
});