<?php

namespace App\Console\Commands;

use App\Models\CivilVideo;
use App\Models\MilitaryVideo;
use Illuminate\Console\Command;

class Video extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:video';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $videos = CivilVideo::get();

        foreach ($videos as $video) {
            $video->update(['path_ru' => $video->path]);
        }

        $videos = MilitaryVideo::get();

        foreach ($videos as $video) {
            $video->update(['path_ru' => $video->path]);
        }
    }
}
