<?php

use Illuminate\Support\Facades\Route;

Route::post('download', 'GdprController@download')->name('gdpr.download');
