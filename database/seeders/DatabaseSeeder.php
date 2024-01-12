<?php

namespace Database\Seeders;

use App\Models\Objects;
use App\Models\AgencyDeals;
use App\Models\EntityClients;
use App\Models\IndividualClients;
use App\Models\DealStatuses;
use App\Models\TypeObjects;
use App\Models\TypeClients;
use App\Models\Clients;
use App\Models\User;
use App\Models\TypeSalesUsers;
use Database\Factories\TypeClientsFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */

    public function run()
    {
        User::factory(10)->create();
        // TypeObjects::factory(1)->create();
        // Objects::factory(3)->create();
        // DealStatuses::factory(1)->create();
        // TypeClients::factory(1)->create();
        // IndividualClients::factory(3)->create();
        // EntityClients::factory(3)->create();
        // Clients::factory(3)->create();
        // AgencyDeals::factory(3)->create();
    }
}
