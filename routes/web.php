<?php

use Phpml\Classification\KNearestNeighbors;

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
Route::get('/test', function () {
  $time = -microtime(true);

  $samples = [[1, 3], [1, 4], [2, 4], [3, 1], [4, 1], [4, 2],[1, 3], [1, 4], [2, 4], [3, 1], [4, 1], [4, 2],[1, 3], [1, 4], [2, 4], [3, 1], [4, 1], [4, 2]];
  $labels = ['a', 'a', 'a', 'b', 'b', 'b','a','b','a','a','a','b','b','b','a','b','b','a','a'];

  $classifier = new KNearestNeighbors();
  $classifier->train($samples, $labels);

  $time += microtime(true);
  return (string)$classifier->predict([3, 4]) . " took $time seconds";
});
