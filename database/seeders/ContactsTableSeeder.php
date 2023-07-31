<?php

namespace Database\Seeders;

use App\Models\Contact;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ContactsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run() : void
    {
        Contact::factory()->count(50)->create();
    }
}
