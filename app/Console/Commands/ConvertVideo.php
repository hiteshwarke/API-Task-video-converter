<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use FFMpeg\FFMpeg;
use FFMpeg\Format\Video\X264;


class ConvertVideo extends Command
{
    protected $signature = 'convert:video {input : The path to the input video} {output : The path to the output video} {--format=mp4 : Output format} {--codec=x264 : Codec}';

    protected $description = 'Convert a video using laravel-ffmpeg with options';

    public function handle()
    {
        $inputPath = $this->argument('input');
        $outputPath = $this->argument('output');
        $format = $this->option('format');
        $codec = $this->option('codec');

        $ffmpeg = FFMpeg::create();
        $video = $ffmpeg->open($inputPath);

        $format = new X264();
        $format->setAudioCodec("libmp3lame"); // Set audio codec if needed

        $video->save($format, $outputPath);

        $this->info('Video converted successfully!');
    }
}
