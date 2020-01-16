<?php

# web middleware confirm request validation
Route::middleware(['web'])->namespace('Armukul\Arcontact\Http\Controllers')->group(function () {
    Route::get('arcontact', 'ContactController@showContactForm')->name('arcontact.show');
    Route::post('arcontact', 'ContactController@store')->name('arcontact.store');
});
