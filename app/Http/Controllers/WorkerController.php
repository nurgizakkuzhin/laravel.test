<?php

namespace App\Http\Controllers;

use App\Models\Worker;
use Illuminate\Http\Request;

class WorkerController extends Controller
{
    public function index()
    {
        $workers = Worker::all();

        return view('worker.index', compact('workers'));
    }

    public function show(Worker $worker)
    {
        return view('worker.show', compact('worker'));
    }

    public function create()
    {
        $worker = [
            'name' => 'Mark',
            'surname' => 'Markov',
            'email' => 'ivanov@mail.ru',
            'age' => 20,
            'description' => 'Hello. I\'m Mark!',
            'is_married' => false,
        ];

        Worker::create($worker);
        return 'Ivan was Created';
    }

    public function update()
    {
        $worker = Worker::find(2);
        $worker->update([
            'name' => 'Petr'
        ]);
        return 'was updated';
    }

    public function delete()
    {
        return 'delete';
    }
}
