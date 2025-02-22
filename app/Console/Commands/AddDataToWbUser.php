<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\WbUser; // Ensure your model is imported
use Illuminate\Support\Facades\Hash;

class AddDataToWbUser extends Command
{
    protected $signature = 'add:data'; // This defines the command name
    protected $description = 'Add sample data to WbUser table';

    public function handle()
    {
        WbUser::create([
            'name' => 'Chirag Kumar',
            'email' => 'chirag@example.com',
            'password' => Hash::make('password123'),
        ]);

        $this->info('User added successfully!');
    }
}
