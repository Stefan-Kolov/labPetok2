<?php

namespace Database\Seeders;

use App\Models\Event;
use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Event::create([
            'title' => 'Laravel Workshop',
            'description' => 'Практична работилница за Laravel framework со фокус на CRUD и MVC архитектура.',
            'type' => 'работилница',
            'date' => now()->addDays(5),
            'organizer_id' => 1,
        ]);

        Event::create([
            'title' => 'SEO Seminar 2025',
            'description' => 'Семинар за основи и напредни техники за оптимизација на веб-страни (SEO).',
            'type' => 'семинар',
            'date' => now()->addDays(10),
            'organizer_id' => 2,
        ]);

        Event::create([
            'title' => 'Tech Talk: AI & Future',
            'description' => 'Предавање за вештачка интелигенција, трендови и иднината на технологијата.',
            'type' => 'предавање',
            'date' => now()->addDays(15),
            'organizer_id' => 3,
        ]);
    }
}
