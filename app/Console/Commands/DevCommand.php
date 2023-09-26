<?php

namespace App\Console\Commands;

use App\Models\Department;
use App\Models\Position;
use App\Models\Profile;
use App\Models\Project;
use App\Models\ProjectWorker;
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

        $department = Department::find(1);
//        $position = Position::where('department_id', $department->id)->where('title', 'Boss')->first();
//        $worker = Worker::where('position_id', $position->id)->first();
        dd($department->boss);
        return 0;
    }

    protected function prepareDate()
    {

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
        $position = Position::create([
            'title' => 'frontend',
            'department_id' => $department1->id,
        ]);

        $workerData = [
            'name' => 'Ivan',
            'surname' => 'Ivanov',
            'email' => 'ivan@mail.ru',
            'position_id' => $position->id,
            'age' => 20,
            'description' => 'front desc',
            'is_married' => true,
        ];
        $workerData2 = [
            'name' => 'Anna',
            'surname' => 'Shituhina',
            'email' => 'anna@mail.ru',
            'position_id' => $position->id,
            'age' => 24,
            'description' => 'front develop',
            'is_married' => false,
        ];
        $workerData3 = [
            'name' => 'Petr',
            'surname' => 'Sidorov',
            'email' => 'petr@mail.ru',
            'position_id' => $position->id,
            'age' => 17,
            'description' => 'front-end develop',
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

        ProjectWorker::create([
            'project_id' => $project1->id,
            'worker_id' => $workerManager->id,
        ]);
        ProjectWorker::create([
            'project_id' => $project1->id,
            'worker_id' => $workerDeveloper1->id,
        ]);
        ProjectWorker::create([
            'project_id' => $project1->id,
            'worker_id' => $workerDeveloper2->id,
        ]);

    }
}
