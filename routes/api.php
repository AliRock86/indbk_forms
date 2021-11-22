<?php

use App\Http\Controllers\BrancheSecionControllerAPI;
use App\Http\Controllers\TicketRoleControllerAPI;
use App\Http\Controllers\TicketTypeControllerAPI;
use App\Http\Controllers\DocumentTypeControllerAPI;
use App\Http\Controllers\SubCategoryControllerAPI;
use App\Http\Controllers\CategoryControllerAPI;
use App\Http\Controllers\BrancheControllerAPI;
use App\Http\Controllers\TicketControllerAPI;
use App\Http\Controllers\StaffControllerAPI;
use App\Http\Controllers\RequestsTypeControllerAPI;
use App\Http\Controllers\PermtionControllerAPI;
use App\Http\Controllers\PermeationControllerAPI;
use App\Http\Controllers\DocumentControllerAPI;
use App\Http\Controllers\RoleControllerAPI;
use App\Http\Controllers\UserControllerAPI;
use App\Http\Controllers\StatusControllerAPI;
use App\Http\Controllers\StatusTypeControllerAPI;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
/*
|--------------------------------------------------------------------------
| StatusType endpoints
|--------------------------------------------------------------------------
 */
Route::name('status-types.')->prefix('status-types')->group(function () {
    Route::get('/', [StatusTypeControllerAPI::class, 'index'])->name('index');
    Route::post('/', [StatusTypeControllerAPI::class, 'store'])->name('create');
    Route::get('/{statusType}', [StatusTypeControllerAPI::class, 'show'])->name('show');
    Route::patch('/{statusType}', [StatusTypeControllerAPI::class, 'update'])->name('update');
    Route::delete('/{statusType}', [StatusTypeControllerAPI::class, 'destroy'])->name('destroy');
});

/*
|--------------------------------------------------------------------------
| Status endpoints
|--------------------------------------------------------------------------
 */
Route::name('statuses.')->prefix('statuses')->group(function () {
    Route::get('/', [StatusControllerAPI::class, 'index'])->name('index');
    Route::post('/', [StatusControllerAPI::class, 'store'])->name('create');
    Route::get('/{status}', [StatusControllerAPI::class, 'show'])->name('show');
    Route::patch('/{status}', [StatusControllerAPI::class, 'update'])->name('update');
    Route::delete('/{status}', [StatusControllerAPI::class, 'destroy'])->name('destroy');
});

/*
|--------------------------------------------------------------------------
| User endpoints
|--------------------------------------------------------------------------
 */
Route::name('users.')->prefix('users')->group(function () {
    Route::post('/', [UserControllerAPI::class, 'index'])->name('index')->middleware('jwt.auth.employ');
    Route::post('/signup', [UserControllerAPI::class, 'store'])->name('create');
    Route::post('/login', [UserControllerAPI::class, 'show'])->name('show');
    Route::patch('/{user}', [UserControllerAPI::class, 'update'])->name('update');
    Route::delete('/{user}', [UserControllerAPI::class, 'destroy'])->name('destroy');
});

/*
|--------------------------------------------------------------------------
| Role endpoints
|--------------------------------------------------------------------------
 */
Route::name('roles.')->prefix('roles')->group(function () {
    Route::get('/', [RoleControllerAPI::class, 'index'])->name('index');
    Route::post('/', [RoleControllerAPI::class, 'store'])->name('create');
    Route::get('/{role}', [RoleControllerAPI::class, 'show'])->name('show');
    Route::patch('/{role}', [RoleControllerAPI::class, 'update'])->name('update');
    Route::delete('/{role}', [RoleControllerAPI::class, 'destroy'])->name('destroy');
});

/*
|--------------------------------------------------------------------------
| Document endpoints
|--------------------------------------------------------------------------
 */
Route::name('documents.')->prefix('documents')->group(function () {
    Route::get('/', [DocumentControllerAPI::class, 'index'])->name('index');
    Route::post('/', [DocumentControllerAPI::class, 'store'])->name('create');
    Route::post('/get_doc_status', [DocumentControllerAPI::class, 'show'])->name('show');
    Route::patch('/{document}', [DocumentControllerAPI::class, 'update'])->name('update');
    Route::delete('/{document}', [DocumentControllerAPI::class, 'destroy'])->name('destroy');
});

/*
|--------------------------------------------------------------------------
| Permeation endpoints
|--------------------------------------------------------------------------
 */
Route::name('permeations.')->prefix('permeations')->group(function () {
    Route::get('/', [PermeationControllerAPI::class, 'index'])->name('index');
    Route::post('/', [PermeationControllerAPI::class, 'store'])->name('create');
    Route::get('/{permeation}', [PermeationControllerAPI::class, 'show'])->name('show');
    Route::patch('/{permeation}', [PermeationControllerAPI::class, 'update'])->name('update');
    Route::delete('/{permeation}', [PermeationControllerAPI::class, 'destroy'])->name('destroy');
});

/*
|--------------------------------------------------------------------------
| Permtion endpoints
|--------------------------------------------------------------------------
 */
Route::name('permtions.')->prefix('permtions')->group(function () {
    Route::get('/', [PermtionControllerAPI::class, 'index'])->name('index');
    Route::post('/', [PermtionControllerAPI::class, 'store'])->name('create');
    Route::get('/{permtion}', [PermtionControllerAPI::class, 'show'])->name('show');
    Route::patch('/{permtion}', [PermtionControllerAPI::class, 'update'])->name('update');
    Route::delete('/{permtion}', [PermtionControllerAPI::class, 'destroy'])->name('destroy');
});

/*
|--------------------------------------------------------------------------
| RequestsType endpoints
|--------------------------------------------------------------------------
 */
Route::name('requests-types.')->prefix('requests-types')->group(function () {
    Route::get('/', [RequestsTypeControllerAPI::class, 'index'])->name('index');
    Route::post('/', [RequestsTypeControllerAPI::class, 'store'])->name('create');
    Route::get('/{requestsType}', [RequestsTypeControllerAPI::class, 'show'])->name('show');
    Route::patch('/{requestsType}', [RequestsTypeControllerAPI::class, 'update'])->name('update');
    Route::delete('/{requestsType}', [RequestsTypeControllerAPI::class, 'destroy'])->name('destroy');
});

/*
|--------------------------------------------------------------------------
| Staff endpoints
|--------------------------------------------------------------------------
 */
Route::name('staff.')->prefix('staff')->group(function () {
    Route::get('/', [StaffControllerAPI::class, 'index'])->name('index');
    Route::post('/', [StaffControllerAPI::class, 'store'])->name('create');
    Route::get('/{staff}', [StaffControllerAPI::class, 'show'])->name('show');
    Route::patch('/{staff}', [StaffControllerAPI::class, 'update'])->name('update');
    Route::delete('/{staff}', [StaffControllerAPI::class, 'destroy'])->name('destroy');
});

/*
|--------------------------------------------------------------------------
| Ticket endpoints
|--------------------------------------------------------------------------
 */
Route::name('tickets.')->prefix('tickets')->group(function () {
    Route::get('/', [TicketControllerAPI::class, 'index'])->name('index');
    Route::post('/', [TicketControllerAPI::class, 'store'])->name('create');
    Route::get('/{ticket}', [TicketControllerAPI::class, 'show'])->name('show');
    Route::patch('/{ticket}', [TicketControllerAPI::class, 'update'])->name('update');
    Route::delete('/{ticket}', [TicketControllerAPI::class, 'destroy'])->name('destroy');
});

/*
|--------------------------------------------------------------------------
| Branche endpoints
|--------------------------------------------------------------------------
 */
Route::name('branches.')->prefix('branches')->group(function () {
    Route::get('/', [BrancheControllerAPI::class, 'index'])->name('index');
    Route::post('/', [BrancheControllerAPI::class, 'store'])->name('create');
    Route::get('/{branche}', [BrancheControllerAPI::class, 'show'])->name('show');
    Route::patch('/{branche}', [BrancheControllerAPI::class, 'update'])->name('update');
    Route::delete('/{branche}', [BrancheControllerAPI::class, 'destroy'])->name('destroy');
});

/*
|--------------------------------------------------------------------------
| Category endpoints
|--------------------------------------------------------------------------
 */
Route::name('categories.')->prefix('categories')->group(function () {
    Route::get('/', [CategoryControllerAPI::class, 'index'])->name('index');
    Route::post('/', [CategoryControllerAPI::class, 'store'])->name('create');
    Route::get('/{category}', [CategoryControllerAPI::class, 'show'])->name('show');
    Route::patch('/{category}', [CategoryControllerAPI::class, 'update'])->name('update');
    Route::delete('/{category}', [CategoryControllerAPI::class, 'destroy'])->name('destroy');
});

/*
|--------------------------------------------------------------------------
| SubCategory endpoints
|--------------------------------------------------------------------------
 */
Route::name('sub-categories.')->prefix('sub-categories')->group(function () {
    Route::get('/', [SubCategoryControllerAPI::class, 'index'])->name('index');
    Route::post('/', [SubCategoryControllerAPI::class, 'store'])->name('create');
    Route::get('/{subCategory}', [SubCategoryControllerAPI::class, 'show'])->name('show');
    Route::patch('/{subCategory}', [SubCategoryControllerAPI::class, 'update'])->name('update');
    Route::delete('/{subCategory}', [SubCategoryControllerAPI::class, 'destroy'])->name('destroy');
});

/*
|--------------------------------------------------------------------------
| DocumentType endpoints
|--------------------------------------------------------------------------
 */
Route::name('document-types.')->prefix('document-types')->group(function () {
    Route::get('/', [DocumentTypeControllerAPI::class, 'index'])->name('index');
    Route::post('/', [DocumentTypeControllerAPI::class, 'store'])->name('create');
    Route::get('/{documentType}', [DocumentTypeControllerAPI::class, 'show'])->name('show');
    Route::patch('/{documentType}', [DocumentTypeControllerAPI::class, 'update'])->name('update');
    Route::delete('/{documentType}', [DocumentTypeControllerAPI::class, 'destroy'])->name('destroy');
});

/*
|--------------------------------------------------------------------------
| TicketType endpoints
|--------------------------------------------------------------------------
 */
Route::name('ticket-types.')->prefix('ticket-types')->group(function () {
    Route::get('/', [TicketTypeControllerAPI::class, 'index'])->name('index');
    Route::post('/', [TicketTypeControllerAPI::class, 'store'])->name('create');
    Route::get('/{ticketType}', [TicketTypeControllerAPI::class, 'show'])->name('show');
    Route::patch('/{ticketType}', [TicketTypeControllerAPI::class, 'update'])->name('update');
    Route::delete('/{ticketType}', [TicketTypeControllerAPI::class, 'destroy'])->name('destroy');
});

/*
|--------------------------------------------------------------------------
| TicketRole endpoints
|--------------------------------------------------------------------------
 */
Route::name('ticket-roles.')->prefix('ticket-roles')->group(function () {
    Route::get('/', [TicketRoleControllerAPI::class, 'index'])->name('index');
    Route::post('/', [TicketRoleControllerAPI::class, 'store'])->name('create');
    Route::get('/{ticketRole}', [TicketRoleControllerAPI::class, 'show'])->name('show');
    Route::patch('/{ticketRole}', [TicketRoleControllerAPI::class, 'update'])->name('update');
    Route::delete('/{ticketRole}', [TicketRoleControllerAPI::class, 'destroy'])->name('destroy');
});

/*
|--------------------------------------------------------------------------
| BrancheSecion endpoints
|--------------------------------------------------------------------------
 */
Route::name('branche-secions.')->prefix('branche-secions')->group(function () {
    Route::get('/', [BrancheSecionControllerAPI::class, 'index'])->name('index');
    Route::post('/', [BrancheSecionControllerAPI::class, 'store'])->name('create');
    Route::get('/{brancheSecion}', [BrancheSecionControllerAPI::class, 'show'])->name('show');
    Route::patch('/{brancheSecion}', [BrancheSecionControllerAPI::class, 'update'])->name('update');
    Route::delete('/{brancheSecion}', [BrancheSecionControllerAPI::class, 'destroy'])->name('destroy');
});

