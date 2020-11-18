<?php


namespace Skyronic\FileGenerator;


use Exception;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;
use Skyronic\FileGenerator\Estimtrack\GetListOfFilesToCreateService;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputOption;

class CrudGenCommand extends Command
{
    /**
     * @var FileList
     */
    private $fileList;

    public $signature = "generate:crud {businessName} {entityName}";

    public $description = "Bake a fresh set of CRUD files! Warm from the oven.";

    /**
     * @var Exception
     */
    protected $configException = null;

    public function configure() {

    }

    public function handle () {
        $businessName = $this->argument('businessName');
        $entityName = $this->argument('entityName');

        $service = new GetListOfFilesToCreateService();
        $arrayOfNames = $service->execute($businessName,$entityName);

        foreach ($arrayOfNames as $name){
            Artisan::call('generate php:class '.$name);
        }

    }
}
