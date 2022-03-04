<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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

Route::get('/', function(){
   $latitude = DB::table('gps_values')->where('name', 'latitude')->get()[0]->value;
   $longitude = DB::table('gps_values')->where('name', 'longitude')->get()[0]->value;
   $speed = DB::table('gps_values')->where('name', 'speed')->get()[0]->value;
   $direction = DB::table('gps_values')->where('name', 'direction')->get()[0]->value;
   $satellites = DB::table('gps_values')->where('name', 'satellites')->get()[0]->value;

   return view('gps_tracking', compact(
      'latitude',
      'longitude',
      'speed',
      'direction',
      'satellites',
   ));
});

Route::get('/sendValues', function () {

   if(isset($_GET['latitude']))
   {
      $latitude = $_GET['latitude']/10000;
      DB::table('gps_values')->where('name', 'latitude')->update(['value' => $latitude]);
   }

   if(isset($_GET['longitude']))
   {
      $longitude = $_GET['longitude']/10000;
      DB::table('gps_values')->where('name', 'longitude')->update(['value' => $longitude]);
   }

   if(isset($_GET['speed']))
   {
      $speed = $_GET['speed'];
      DB::table('gps_values')->where('name', 'speed')->update(['value' => $speed]);
   }

   if(isset($_GET['direction']))
   {
      $direction = $_GET['direction'];
      DB::table('gps_values')->where('name', 'direction')->update(['value' => $direction]);
   }

   if(isset($_GET['satellites']))
   {
      $satellites = $_GET['satellites'];
      DB::table('gps_values')->where('name', 'satellites')->update(['value' => $satellites]);
   }

   return "was added succefully";
});