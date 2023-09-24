<?php

namespace App\Console\Commands;

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
        $profile = Profile::find(1);
        $worker = Worker::find(1);

        dd($worker->profile->toArray());

    }

    protected function prepareDate()
    {
        $workerData = [
            'name' => 'Ivan',
            'surname' => 'Ivanov',
            'email' => 'ivan@mail.ru',
            'age' => 20,
            'description' => 'some desc',
            'is_married' => false,
        ];

        $worker = Worker::create($workerData);

        $profileData = [
            'worker_id' => $worker->id,
            'city' => 'Moscow',
            'skill' => 'English language',
            'experience' => 3,
            'finished_study_at' => '2022-06-01',
        ];

        $profile = Profile::create($profileData);

        dd($profile->id);
    }
}
