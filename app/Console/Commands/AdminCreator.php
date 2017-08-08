<?php

namespace App\Console\Commands;

use App\Models\VrUsers;
use App\User;
use Illuminate\Console\Command;
use Ramsey\Uuid\Uuid;

class AdminCreator extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:admin';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Make super admin user';

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
    public function handle()
    {
        $email = $this->ask('please provide email');
        $this->info($email);
        $user_name = $this->ask('please provide user name');
        $this->info($user_name);
        $password = $this->ask('please provide password');
        $this->info($password);
        User::create(array(
            'name' => $user_name,
            'email' => $email,
            'password' => bcrypt($password),
        ));
//        $record->rolesConnectionData()->sync('super-admin');
    }

}
