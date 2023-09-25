<?php

namespace App\Console\Commands;

use App\Models\Position;
use App\Models\Profile;
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
        $worker = Worker::find(3);
        $position = Position::find(1);
        dd($worker->position->toArray());
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

        $workerData = [
            'name' => 'Ivan',
            'surname' => 'Ivanov',
            'email' => 'ivan@mail.ru',
            'position_id' => $position->id,
            'age' => 20,
            'description' => 'some desc',
            'is_married' => false,
        ];
        $workerData2 = [
            'name' => 'Vasya',
            'surname' => 'Petrov',
            'email' => 'vasya@mail.ru',
            'position_id' => $position2->id,
            'age' => 24,
            'description' => 'some desc',
            'is_married' => true,
        ];
        $workerData3 = [
            'name' => 'Kate',
            'surname' => 'Sidorova',
            'email' => 'kate@mail.ru',
            'position_id' => $position2->id,
            'age' => 18,
            'description' => 'some desc',
            'is_married' => false,
        ];

        $worker = Worker::create($workerData);
        $worker2 = Worker::create($workerData2);
        $worker3 = Worker::create($workerData3);

        $profileData = [
            'worker_id' => $worker->id,
            'city' => 'Moscow',
            'skill' => 'English language',
            'experience' => 3,
            'finished_study_at' => '2022-06-01',
        ];
        $profileData2 = [
            'worker_id' => $worker2->id,
            'city' => 'Tokio',
            'skill' => 'Big Boss',
            'experience' => 3,
            'finished_study_at' => '2014-06-01',
        ];
        $profileData3 = [
            'worker_id' => $worker3->id,
            'city' => 'Berlin',
            'skill' => 'Consultant',
            'experience' => 3,
            'finished_study_at' => '2021-06-01',
        ];

        Profile::create($profileData);
        Profile::create($profileData2);
        Profile::create($profileData3);

    }
}
