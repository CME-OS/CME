<?php
namespace Cme\Cli;

use Cme\Helpers\ApiImporter;
use Cme\Helpers\CsvImporter;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;
use Symfony\Component\Console\Input\InputArgument;

class InstallDb extends CmeDbCommand
{

  /**
   * The console command name.
   *
   * @var string
   */
  protected $name = 'cme:install-db';

  /**
   * The console command description.
   *
   * @var string
   */
  protected $description = 'Install Database for CME';

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
   * @return mixed
   */
  public function fire()
  {
    echo "hallo";
    die;
    $classes = $this->getMigrationClasses();
    foreach($classes as $migrationClass)
    {
      $m = new $migrationClass;
      if($m instanceof Migration)
      {
        $m->up();
      }
    }
  }
}
