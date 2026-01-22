<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class SendSurveyDailyReports extends Command
{
    /**
     * The name and signature of the console command.
     */
    protected $signature = 'surveys:send-daily-reports';

    /**
     * The console command description.
     */
    protected $description = 'Send daily survey reports.';

    /**
     * Execute the console command.
     */
    public function handle(): int
    {
        return self::SUCCESS;
    }
}
