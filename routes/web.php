use App\Http\Controllers\ProductController;

Route::get('/', [ProductController::class, 'frontPage']);
Route::get('/products', [ProductController::class, 'productList']);
Route::get('/product/{id}', [ProductController::class, 'productDetail']);
Route::get('/cart', [ProductController::class, 'cart']);
Route::get('/order', [ProductController::class, 'order']);
Route::get('/login', [ProductController::class, 'login']);
Route::get('/admin', [ProductController::class, 'adminPanel']);
Route::get('/admin/category', [ProductController::class, 'adminCategory']);
Route::get('/admin/product', [ProductController::class, 'adminProduct']);
Route::get('/admin/order', [ProductController::class, 'adminOrder']);
