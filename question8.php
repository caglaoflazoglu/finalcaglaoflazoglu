Route::resource('student', studentController::class);


or
Route:: get('/information/{$id}',[StudentController::class, 'studentİnformation']);
