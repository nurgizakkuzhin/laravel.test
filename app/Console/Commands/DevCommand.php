<?php

namespace App\Console\Commands;

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
        //$this->prepareDate();
        $project = Project::find(1);

        dd($project->workers->toArray());
        return 0;
    }

    protected function prepareDate()
    {
        $position = Position::create([
            'title' => 'Developer',
        ]);
        $position2 = Position::create([
            'title' => 'Manager',
        ]);
        $position = Position::create([
            'title' => 'frontend',
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
        $workerFrontend1 = Worker::find(4);
        $workerFrontend2 = Worker::find(5);
        $workerFrontend3 = Worker::find(6);

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
            'worker_id' => $workerFrontend1->id,
        ]);
        ProjectWorker::create([
            'project_id' => $project1->id,
            'worker_id' => $workerDeveloper1->id,
        ]);
        ProjectWorker::create([
            'project_id' => $project2->id,
            'worker_id' => $workerManager->id,
        ]);
        ProjectWorker::create([
            'project_id' => $project2->id,
            'worker_id' => $workerFrontend2->id,
        ])
        ;ProjectWorker::create([
            'project_id' => $project2->id,
            'worker_id' => $workerFrontend3->id,
        ]);
        ProjectWorker::create([
            'project_id' => $project1->id,
            'worker_id' => $workerDeveloper2->id,
        ]);

    }
}
