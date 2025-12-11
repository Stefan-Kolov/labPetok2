<?php

namespace Database\Seeders;

use App\Models\Organizer;
use Illuminate\Database\Seeder;

class OrganizerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Organizer::create([
            'name' => 'Иван Иванов',
            'email' => 'ivan@example.com',
            'phone' => '070123456',
        ]);

        Organizer::create([
            'name' => 'Стефан Колов',
            'email' => 'stefan@example.com',
            'phone' => '071987654',
        ]);

        Organizer::create([
            'name' => 'Корисник Корисник',
            'email' => 'user@example.com',
            'phone' => '075555444',
        ]);
    }
}
