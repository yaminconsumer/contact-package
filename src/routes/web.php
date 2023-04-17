<?php 
Route::get('contactyamin',function(){
    return 'contact1';
});
Route::get('contact_view',function(){
    return view('contact::contact'); //first contact package name second contact view
});

Route::group(array('namespace' => 'SaiyedYamin\Contact\Http\Controllers'),function () {
    Route::get('contact','ContactController@index')->name('contact.index');
    Route::post('send','ContactController@send')->name('contact.send');
});
?>