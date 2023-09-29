<?php

namespace App\Console\Commands;

use App\Models\Client;
use App\Models\Department;
use App\Models\Position;
use App\Models\Profile;
use App\Models\Project;
use App\Models\ProjectWorker;
use App\Models\Review;
use App\Models\Worker;
use Illuminate\Console\Command;

class DevCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'develop';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Some develops';

    /**
     * Execute the console command.
     */
    public function handle()
    {
//        $this->prepareDate();
//        $this->prepareManyToMany();

        $worker = Worker::find(3);
        $client = Client::find(1);

//        $worker->reviews()->create([
//            'comment' => 'Привет мир!'
//        ]);
//        $worker->reviews()->create([
//            'comment' => 'Как дела?'
//        ]);
//        $worker->reviews()->create([
//            'comment' => 'Пока!'
//        ]);
//
//
//        $client->reviews()->create([
//            'comment' => 'Привет мир!'
//        ]);
//        $client->reviews()->create([
//            'comment' => 'Как дела?'
//        ]);
//        $client->reviews()->create([
//            'comment' => 'Пока!'
//        ]);

        $review = Review::find(4);
        dd($review->reviewable->toArray());
        return 0;
    }

    protected function prepareDate()
    {

        Client::create([
            'name' => 'Bob'
        ]);
        Client::create([
            'name' => 'Misha'
        ]);
        Client::create([
            'name' => 'Elena'
        ]);


        $department1 = Department::create([
            'title' => 'IT'
        ]);

        $department2 = Department::create([
            'title' => 'Analytics'
        ]);

        $position = Position::create([
            'title' => 'Developer',
            'department_id' => $department1->id,
        ]);
        $position2 = Position::create([
            'title' => 'Manager',
            'department_id' => $department1->id,
        ]);
        $position3 = Position::create([
            'title' => 'frontend',
            'department_id' => $department1->id,
        ]);

        $workerData = [
            'name' => 'Ivan',
            'surname' => 'Ivanov',
            'email' => 'ivan@mail.ru',
            'position_id' => $position3->id,
            'age' => 20,
            'description' => 'frontend',
            'is_married' => true,
        ];
        $workerData2 = [
            'name' => 'Anna',
            'surname' => 'Shituhina',
            'email' => 'anna@mail.ru',
            'position_id' => $position3->id,
            'age' => 24,
            'description' => 'front develop',
            'is_married' => false,
        ];
        $workerData3 = [
            'name' => 'Petr',
            'surname' => 'Sidorov',
            'email' => 'petr@mail.ru',
            'position_id' => $position2->id,
            'age' => 17,
            'description' => 'manager',
            'is_married' => true,
        ];

        $worker = Worker::create($workerData);
        $worker2 = Worker::create($workerData2);
        $worker3 = Worker::create($workerData3);

        $profileData = [
            'worker_id' => $worker->id,
            'city' => 'Berlin',
            'skill' => 'front',
            'experience' => 3,
            'finished_study_at' => '2023-09-01',
        ];
        $profileData2 = [
            'worker_id' => $worker2->id,
            'city' => 'Ufa',
            'skill' => 'frontend',
            'experience' => 3,
            'finished_study_at' => '2019-06-01',
        ];
        $profileData3 = [
            'worker_id' => $worker3->id,
            'city' => 'Armenia',
            'skill' => 'data science',
            'experience' => 3,
            'finished_study_at' => '2011-06-01',
        ];

        Profile::create($profileData);
        Profile::create($profileData2);
        Profile::create($profileData3);

    }

    protected function prepareManyToMany()
    {
        $workerManager = Worker::find(3);
        $workerDeveloper1 = Worker::find(1);
        $workerDeveloper2 = Worker::find(2);

        $project1 = Project::create([
            'title' => 'Shop',
        ]);
        $project2 = Project::create([
            'title' => 'Blog',
        ]);

        $project1->workers()->attach([
            $workerManager->id,
            $workerDeveloper1->id,
            $workerDeveloper2->id,
        ]);

        $project2->workers()->attach([
            $workerManager->id,
            $workerDeveloper1->id,
            $workerDeveloper2->id,
        ]);

    }
}
