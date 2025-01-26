<?php

namespace Database\Seeders;
use App\Models\Job;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JobSeeder extends Seeder
{
    

   

public function run()
{
    Job::create([
        'title' => 'Développeur Laravel',
        'description' => 'Développeur full-stack pour un projet Laravel.',
        'location' => 'Dakar, Sénégal',
        'salary' => '1500', // ou ce qui est pertinent pour votre cas
    ]);

    Job::create([
        'title' => 'Chef de projet',
        'description' => 'Gestion de projets techniques et coordination des équipes.',
        'location' => 'Dakar, Sénégal',
        'salary' => '2500', // ou ce qui est pertinent pour votre cas
    ]);
}

}
