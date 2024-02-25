<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\http\Controllers\CategoriesController;
use App\http\Controllers\Admin\ProductsController;
use App\http\Controllers\Admin\DashboardController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function(){
//     $html = '<h1> helo bà cô</h1>';
//     return $html;
// });
// Route::get('/giaolang',function(){
//     // return 'phương thức get của giáo làng';
//     return view('form');

// });
// Route::post('/giaolang', function(){
//     return 'phương thức post của giáo làng';
// });
// Route::put('giaolang', function(){
//     return 'phương thức put của giáo làng';
// });
// Route::delete('giaolang', function(){
//     return 'phương thức delete của giáo làng';
// });
// Route::patch('giaolang', function(){
//     return 'phương thức patch của giáo làng';
// });
// Route::match(['get','post'], 'giaolang', function(){
//     return $_SERVER['REQUEST_METHOD'];
// });
// Route::any('giaolang',function(Request $request){
    // $request = new Request();
    // return $request->method();
// });

// Route::get('show-form',function(){
//     return view('form');
// });

// Route::redirect('giaolang', 'show-form');
// Route::view('show-form', 'form');
// Route::get('/','App\http\Controllers\HomeController@index')->name('home');
// Route::get('/tin-tuc','\HomeController@getNew')->name('new');
// Route::get('/chuyen-muc/{id}',[HomeController::class,'getCategory']);

// Route::prefix('admin')->group(function(){
//     Route::get('/tin-tuc/{id?}-{slug?}.html',function($id=null,$slug=null){
//         $content = 'phương thức get của giáo làng: ';
//         $content.= 'id = '.$id.'<br/>';
//         $content.= 'slug  = '.$slug;
//         return $content;
//     })->where('id','\d+')->where('slug','.+')->name('admin.tintuc');
    
//     Route::get('show-form',function(){
//         return view('form');
//     })->name('admin.show-form');
//     Route::prefix('product')->middleware('CheckPermission')->group(function(){
//         Route::get('/',function(){
//             return 'danh sách sản phẩm';
//         });
//         Route::get('add',function(){
//             return 'thêm sản phẩm';
//         })->name('admin.product.add');
//         Route::get('edit',function(){
//             return 'sửa sản phẩm';
//         });
//         Route::get('delete',function(){
//             return 'xóa sản phẩm';
//         });

//     });

// });
Route::prefix('category')->group(function(){
    Route::get('/',[CategoriesController::class, 'index'])->name('categories.list');
    Route::get('/edit/{id}',[CategoriesController::class,'getCategory'])->name('categories.list');
    Route::post('/edit/{id}',[CategoriesController::class,'updateCategory'])->name('categories.edit');
    Route::get('/add',[CategoriesController::class,'addCategory']);
    Route::get('/add',[CategoriesController::class,'hanleAddCategory'])->name('categories.add');
    Route::delete('/delete/{id}',[CategoriesController::class,'deleteCategory'])->name('categories.delete');

});

Route::prefix('admin')->group(function(){
    Route::get('/',[DashboardController::class,'index']);
    Route::resource('products',ProductsController::class);
});


