<?php

namespace App\Listeners;

use App\Events\SurveyAnswerSubmitted;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendNewAnswerNotification implements ShouldQueue
{
    use InteractsWithQueue;

    public function handle(SurveyAnswerSubmitted $event): void
    {
        //
    }
}
