<?php

use App\User;
use App\Buyer;
use App\Seller;
use App\Ticket;
use App\Product;
use App\Category;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/*
 * Autenticación
 */
Route::group(['prefix' => 'auth'], function () {
    Route::post('login', 'AuthController@login')->name('login');
    Route::post('signup', 'AuthController@signup');
  
    Route::group(['middleware' => 'auth:api'], function() {
        Route::get('logout', 'AuthController@logout');
        Route::get('user', 'AuthController@user');
    });
});

Route::post('oauth/token','\Laravel\Passport\Http\Controllers\AccessTokenController@issueToken');

/*
 * Buyers
*/
Route::resource('buyers', 'Buyer\BuyerController', ['only' => ['index','show']]);
Route::resource('buyers.transactions', 'Buyer\BuyerTransactionController', ['only' => ['index']]);
Route::resource('buyers.products', 'Buyer\BuyerProductController', ['only' => ['index']]);
Route::resource('buyers.sellers', 'Buyer\BuyerSellerController', ['only' => ['index']]);
Route::resource('buyers.categories', 'Buyer\BuyerCategoryController', ['only' => ['index','update','delete']]);

/*
 * Categories
*/
Route::resource('categories', 'Category\CategoryController', ['except' => ['create','edit']]);
Route::resource('categories.products', 'Category\CategoryProductController', ['only' => ['index']]);
Route::resource('categories.sellers', 'Category\CategorySellerController', ['only' => ['index']]);
Route::resource('categories.transactions', 'Category\CategoryTransactionController', ['only' => ['index']]);
Route::resource('categories.buyers', 'Category\CategoryBuyerController', ['only' => ['index']]);

/*
 * Products
*/
Route::resource('products', 'Product\ProductController', ['only' => ['index','show']]);
Route::resource('products.transactions', 'Product\ProductTransactionController', ['only' => ['index']]);
Route::resource('products.buyers', 'Product\ProductBuyerController', ['only' => ['index']]);
Route::resource('products.buyers.transactions', 'Product\ProductBuyerTransactionController', ['only' => ['store']]);
Route::resource('products.categories', 'Product\ProductCategoryController', ['only' => ['index','update','destroy']]);

// Route::middleware('auth:api')->group(function () {
//     Route::resource('products', 'Product\ProductController', ['only' => ['index','show']]);
// });

/*
 * Transactions
*/
Route::resource('transactions', 'Transaction\TransactionController', ['only' => ['index','show']]);
Route::resource('transactions.categories', 'Transaction\TransactionCategoryController', ['only' => ['index']]);
Route::resource('transactions.sellers', 'Transaction\TransactionSellerController', ['only' => ['index']]);

/*
 * Sellers
*/
Route::resource('sellers', 'Seller\SellerController', ['only' => ['index','show']]);
Route::resource('sellers.buyers', 'Seller\SellerBuyerController', ['only' => ['index']]);
Route::resource('sellers.transactions', 'Seller\SellerTransactionController', ['only' => ['index']]);
Route::resource('sellers.categories', 'Seller\SellerCategoryController', ['only' => ['index']]);
Route::resource('sellers.products', 'Seller\SellerProductController', ['except' => ['create','show','edit']]);

/*
 * Users
*/
Route::resource('users', 'User\UserController', ['except' => ['create','edit']]);
Route::name('verify')->get('users/verify/{token}', 'User\UserController@verify');
Route::name('resend')->get('users/{user}/resend', 'User\UserController@resend');
Route::resource('users.tickets', 'User\UserTicketController', ['except' => ['create','edit']]);

/*
 * Packages
*/
Route::resource('packages', 'Package\PackageController', ['except' => ['create','edit']]);
Route::resource('packages.services', 'Package\PackageServiceController', ['only' => ['index']]);
Route::resource('packages.users.tickets', 'Package\PackageUserTicketController', ['only' => ['store']]);

/*
 * Ticket
 */
Route::resource('tickets', 'Ticket\TicketController', ['except' => ['create','edit']]);

Route::resource('areas', 'Area\AreaController', ['except' => ['create','edit']]);
Route::resource('campaigns', 'Campaign\CampaignController', ['except' => ['create','edit']]);
Route::resource('companies', 'Company\CompanyController', ['except' => ['create','edit']]);
Route::resource('items', 'Item\ItemController', ['except' => ['create','edit']]);
Route::resource('services', 'Service\ServiceController', ['except' => ['create','edit']]);
Route::resource('tasks', 'Task\TaskController', ['except' => ['create','edit']]);
Route::resource('tests', 'Test\TestController', ['except' => ['create','edit']]);

/*
 * Test
 */
Route::get('test',function(){
    $products = Product::with('seller')->get();
    return json_encode(
        array(
            'data' => $products
        )
    );
});

Route::get('test2',function(){
    $products = Buyer::find(5)
    ->transactions()
    ->with('product.seller')
    ->get();
    // ->pluck('product.seller')
    // ->unique('id')
    // ->values();
    
    return json_encode(
        array(
            'data' => $products
        )
    );
});

Route::get('test3',function(){
    $collection = Seller::has('products')->get()->random();
    $comprador = User::all()->except($collection->id);
    //$filtered = $collection->except(['price', 'discount']);
    //$filtered->all();

    return json_encode(
        array(
            'vende' => $collection,
            'compra' => $comprador
        )
    );

});

Route::get('test4', function(){
    $tareas = Ticket::find(32)
                ->tasks()
                ->with('service.item')
                ->get();
    return $tareas;
});