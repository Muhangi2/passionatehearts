
<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\Blogcontroller ;
use App\Http\Controllers\Teamcontroller ;
use App\Http\Controllers\Volunteercontroller ;
use App\Http\Controllers\Gallerycontroller;

Route::get('/', [HomeController::class,'index'])->name("home");

Route::get('/createteam', [TeamController::class, 'createteam']);
Route::get('/team', [TeamController::class, 'team'])->name('team');
Route::post('/teams', [TeamController::class, 'storeteam'])->name('teams.store');

Route::get('/history', [TeamController::class, 'history'])->name('history');
Route::get('/values', [TeamController::class, 'values'])->name('values');
Route::get('/contact', [VolunteerController::class, 'contact'])->name("contact");
Route::get('/volunteer', [VolunteerController::class, 'volunteer'])->name("volunteer");

//project
Route::get('/projectform', [ProjectController::class, 'indexForm'])->name('project');
Route::get('/projects', [ProjectController::class, 'index'])->name('projects.index');
Route::post('/projectscreate', [ProjectController::class, 'store'])->name('projects.store');

// Move these more specific routes to the end
Route::get('/project/{projectid}', [ProjectController::class, 'singleproject'])->name('projects.show');
Route::get('/team/{teammemberid}', [TeamController::class, 'singleteam'])->name('singleteam');

// Other commented routes...j
Route::get("/showphotoform",[Gallerycontroller::class,'showgalleryform'])->name("showform");
Route::get("/gallery",[Gallerycontroller::class,'index'])->name("gallery");
Route::post("/addphoto",[Gallerycontroller::class,'store'])->name("addphoto");


