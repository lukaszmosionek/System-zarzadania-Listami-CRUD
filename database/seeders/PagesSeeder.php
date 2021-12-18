<?php

namespace Database\Seeders;

use App\Models\Page;
use Illuminate\Database\Seeder;

class PagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Page::create(['title'=>'Strona główna', 'content' => 'dzień dobry']);
        Page::create(['title'=>'podstrona', 'content' => 'Hello']);
    }
}
