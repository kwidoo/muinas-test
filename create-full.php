<?php

use App\Models\MuinasApplicationRound;
use App\Models\MuinasGrantApplication;
use App\Models\MuinasMuinasobject;
use App\Models\MuinasMuinasobjectaddress;
use App\Models\MuinasGrantapplicationmonument;
use App\Models\MuinasGrantapplicationmonumentowner;
use App\Models\MuinasGrantapplicationmuinasobject;
use App\Models\MuinasGrantapplicationcounty;
use App\Models\MuinasMonumentowner;

//create round and under
$ar = MuinasApplicationRound::factory()->create();

for ($i = 0; $i < 10; $i++) {
  try {
  //find real object
  do {
    do {
      $mmo = MuinasMuinasobject::where('type', 'monument')
        ->get()
        ->random();
      $mma = MuinasMuinasobjectaddress::where('muinasobject', $mmo->id)->first();
      $mom = $mmo->muinas_muinasobjectmonuments->first();
      $mmow = MuinasMonumentowner::where('monument', $mom->monument)->whereNotNull('ownerperson')->first();
    } while ($mmow == null);
    $owner = $mmow->muinas_ownerperson;
  } while ($owner == null);

  //create application and under
  $mgt = MuinasGrantApplication::factory()->create([
    'application_round' => $ar->id,
    'name' => $owner->name,
    'phone' => $owner->phone,
    'email' => $owner->email,
    'code' => $owner->code,
    'creater' => $owner->id,
    'ownerperson' => $owner->id,
    'address' => $mma->address,
    'county' => $mma->county,
    'parish' => $mma->parish,
  ]);
  //create relations
  MuinasGrantapplicationmonument::factory()->create([
    'grantapplication' => $mgt->id,
    'monument' => $mma->objectid,
    'address' => $mma->id,
    'addresstext' => $mma->address,
  ]);


  MuinasGrantapplicationmonumentowner::factory()->create([
    'grantapplication' => $mgt->id,
    'name' => $mgt->name,
    'phone' => $mgt->phone,
    'email' => $mgt->email,
    'code' => $mgt->code,
    'ownerperson' => $mgt->ownerperson,
  ]);
  MuinasGrantapplicationmuinasobject::factory()->create([
    'muinasobject' => $mma->objectid,
    'grantapplication' => $mgt->id,
    'address' => $mma->id,
  ]);
  MuinasGrantapplicationcounty::create([
    'grantapplication' => $mgt->id,
    'county' => $mma->county,
  ]);
  } catch (\Exception $e)
  {
    dump('Line failed');
  }
}
