<?php

namespace App\Http\Controllers;

use App\Models\AgencyDeals;
use App\Models\TypeObjects;
use App\Models\Clients;
use App\Models\Objects;
use http\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AgencyController extends Controller
{
    public function findAllObjects()
    {
        $objects = Objects::all();

        return view('agency', [
            'objects' => $objects
        ]);
    }

    public function findConcretObject()
    {
        $object = Objects::find(1);
        $deals = AgencyDeals::where('ObjectID', $object->Id)->get();

        return view('task2', [
           'object'=>$object->Id,
           'deals'=>$deals
        ]);
    }

    public function allClients()
    {
        $clients = Clients::all();

        return view('task3', [
            'clients' => $clients
        ]);
    }

    public function clientsAndDeals()
    {
        $clients = Objects::find(1);
        $deals = AgencyDeals::where('ClientID', $clients->Id)->get();

        return view('task4', [
            'client'=>$clients->Id,
            'deals'=>$deals
        ]);
    }

    public function allDeals()
    {
        $deals = AgencyDeals::all();

        return view('task5', [
           'deals'=>$deals
        ]);
    }

    public function dealAndObjectsAndClints()
    {
        $deals = AgencyDeals::all();

        return view('task6', [
            'deals'=>$deals
        ]);
    }

    public function createDeal()
    {
        $deal = [
            'ObjectID'=>1,
            'ClientID'=>1,
            'StatusID'=>1
        ];
        AgencyDeals::create($deal);
        return view('task7');
    }

    public function createClient()
    {
        $client = [
            'Name' => 'Аким',
            'Surname' => 'Петухов',
            'Patronymic' => 'Альвианович',
            'Phone' => '8(207)686-70-08',
            'Adress' => '683485, Брянская область, город Лотошино, пер. Гоголя, 58',
            'TypeID' => 1,
            'EntityID' => 1,
            'IndividualID' => 1
        ];

        Clients::create($client);
        return view('task8');
    }
}
