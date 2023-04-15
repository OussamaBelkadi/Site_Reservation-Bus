<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\Roll;
use App\Http\Controllers\AviController;
use App\Http\Controllers\PaypalController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\ConduicteurController;
use App\Http\Controllers\SocieteController;
use App\Http\Controllers\VoyageController;
use App\Http\Controllers\TransportController;
use App\Http\Controllers\TicketController;
use App\Http\Livewire\FormSc;

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
// Route relative page et opperation sur les tickets  
Route::get('/', [TicketController::class, 'index'])->name('index');
Route::post('/ticket', [TicketController::class, 'ticket'])->name('ticket.desplay');
Route::post('/reserve', [TicketController::class, 'reserve'])->name('ticket.reserve');
Route::get('/reserves', [TicketController::class, 'ter'])->name('reserve.ter');

// 
Route::post('/avis',[AviController::class, 'save'])->name('avi.save');
// Route relative a la reservation des tickets 
Route::get('/reserve/{id}', [ReservationController::class, 'index'])->name('reservation.index');
// societe list
Route::get('/societe-list', [SocieteController::class, 'list'])->name('list.societe');

Route::get('/sign', function () {
 
    return view('admin.signup');
   
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/dashboardAdmin', function(){
    return view('admin.dashboardAdm');
});
 // Payment
 Route::get('handle-payment', [PaypalController::class, 'payment'])->name('make.payment');
 Route::get('payment-success', [PaypalController::class, 'payment-success'])->name('payment.success');
 Route::get('payment-failed', [PaypalController::class, 'payement-failed'])->name('payment.failed');



Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    
Route::middleware(['auth', 'roll:admin'])->group(function () {
    Route::get('/dashboardAdmin', function(){
        return view('admin.dashboardAdm');
    });
    

    Route::post('/soc', [SocieteController::class, 'saved'])->name('societe.saved');
    Route::get('/soc', [SocieteController::class, 'index'])->name('societe.index');
    Route::delete('/soc/{id}', [SocieteController::class, 'destroy'])->name('societe.destroy');
    Route::get('societe/{id}',[SocieteController::class, 'desplay'])->name('societe.desplay');
    Route::post('societe/{id}',[SocieteController::class, 'save'])->name('societe.save');

   
    // Voyages Route
    Route::get('/voyage', [VoyageController::class, 'desplay'])->name('voyage.desplay');
    Route::get('/voyages', [VoyageController::class, 'index'])->name('voyage.index');
    Route::get('/voyagelist', [VoyageController::class, 'list'])->name('voyage.list');
    Route::get('/voyageup/{id}',[VoyageController::class, 'updateFrom'])->name('voyage.update');
    Route::post('/voyagemodifier/{id}',[VoyageController::class, 'modifier'])->name('voyage.modifier');
    // ajout de transport 
    // Route::post('transport', [TransportController::class, 'saved'])->name('transport.saved');

    // Route Transports
    Route::get('/transports', [TransportController::class, 'index'])->name('transport.index');
    // Route Conduicteur
    Route::get('/conduicteur', [ConduicteurController::class, 'index'])->name('conduicteur.index');
});

require __DIR__.'/auth.php';
