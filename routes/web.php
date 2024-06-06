<?php

use App\Http\Controllers\PasseController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Models\Utilisateur;

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

Route::get('/', function () {
    return view('php1.accueil');
});

Route::get('/dashboard', function () {
    $utilisateurs = Utilisateur::all();
    return view('dashboard',compact('utilisateurs'));
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
Route::get('/accueil',[PasseController::class,'accueil'])->name('php1.accueil');
Route::get('/commande',[PasseController::class,'commande'])->name('php1.commande');
Route::post('/traitement/reservation',[PasseController::class,'passe']);
Route::post('/ajout/traitement',[PasseController::class,'enregistrer']);
Route::post('/auth/traitement',[PasseController::class,'connecter']);
Route::get('/personnel/ajout',[PasseController::class,'enregistrepersonnel'])->name('php1.ajout');
Route::get('/personnel/connect',[PasseController::class,'auth'])->name('php1.authentification');
Route::get('/tdbord',[PasseController::class,'tdbord'])->name('php1.tdbord');
Route::get('/liste',[PasseController::class,'liste'])->name('php1.liste');
Route::post('/traitement/presentielle',[PasseController::class,'prensentiel']);
Route::post('/traitement/resto',[PasseController::class,'resto']);
Route::get('/chambre',[PasseController::class,'chambre'])->name('php1.chambre');
Route::get('/evenement',[PasseController::class,'evenement'])->name('php1.evenement');
Route::get('/service',[PasseController::class,'service'])->name('php1.service');
Route::get('/afrique',[PasseController::class,'afrique'])->name('php1.afrique');
Route::get('/amerique',[PasseController::class,'amerique'])->name('php1.amerique');
Route::get('/europe',[PasseController::class,'europe'])->name('php1.europe');
Route::get('/asi',[PasseController::class,'asi'])->name('php1.asi');
Route::get('/boisson',[PasseController::class,'boisson'])->name('php1.boisson');
Route::get('/dessert',[PasseController::class,'dessert'])->name('php1.dessert');
Route::get('/aperitif',[PasseController::class,'aperitif'])->name('php1.aperitif');
Route::get('/stat',[PasseController::class,'stat'])->name('php1.stat');
Route::get('/stat1',[PasseController::class,'stat1'])->name('php1.stat1');

