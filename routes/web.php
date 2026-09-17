<?php
use \App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Route;




Route::get("/",function(){
    return redirect() ->route('tasks.index');
});


Route::get('/tasks', function ()  {
    return view('index',[
        'tasks'=> Task::latest()->get()
    ]);
})->name('tasks.index');

Route::view('/tasks/create', 'create')
    ->name('tasks.create');

Route::get('/tasks/{id}',function($id) {
    return view('show',[
        'task'=>Task::findorfail($id)
        ]);
})->name('tasks.show');

Route::post('/tasks',function(Request $request){
    $data = $request->validate([
    'title'=>'required|max:255',
    'description' => 'required',
    'long_description' =>'nullable'
    ]);

    $task = new Task;
    $task->title = $data['title'];
    $task->description = $data['description'];
    $task->long_description = $data['long_description'];

    $task->save();

    return redirect()->route('tasks.show',['id'=>$task->id])
    ->with('success','Task Created Successfully!!');
})->name('tasks.store');




// Route::get('/yyy', function () {
//     return 'you are redirect to Hello Page';
// })->name('hello');

//  METHOD OF REDIRETING

// Route::get('/halo', function () {
//     return redirect('/hello');
// });

//  Another METHOD OF REDIRETING 

// Route::get('/halo', function () {
//     return redirect()->route('hello');
// });


// Route::get('/greet/{name}', function ($name) {
//     return 'Hello '. $name . ' Good Afternoon' ;
    
// });

// // FallBack function when no web page found

Route::fallback(function(){
    return "OOPS! It's you";
});

?>