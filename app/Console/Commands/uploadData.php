<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Http\Controllers\DataController;

class uploadData extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'upload:data';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This command will insert json files';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $newData = new DataController();

        $newData->readAndStoreChips();

        $newData->readAndStoreFiles();

        $newData->readAndStoreLatLong();
    }
}
