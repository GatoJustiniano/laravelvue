<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Events\RemainingTimeChanged;
use App\Events\WinnerNumberGenerated;

class GameExecutor extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'game:execute';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'GameExecutor funcionando!';

    private $time = 5;

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        while (true) {
            broadcast(new RemainingTimeChanged($this->time . ' segundos'));
            
            $this->time--;
            sleep(1);
            if ($this->time === 0 ) {
                $this->time = "Tiempo para volver a jugar";
                broadcast(new RemainingTimeChanged($this->time));

                broadcast(new WinnerNumberGenerated(mt_rand(1,5)));
                sleep(5);
                $this->time = 3;
            }
        }
    }
}
