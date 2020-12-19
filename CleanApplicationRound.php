<?php
use App\Models\MuinasApplicationRound;
use App\Models\MuinasGrantApplication;
use App\Models\MuinasGrantapplicationmonument;
use App\Models\MuinasGrantapplicationmonumentowner;
use App\Models\MuinasCommittee;
use App\Models\MuinasCommitteeMember;
use App\Models\MuinasCommitteeProtocol;
use App\Models\MuinasGrantapplicationmuinasobject;
use App\Models\MuinasGrantapplicationworklistfile;
use App\Models\MuinasApplicationRoundEvaluationDomain;
use App\Models\MuinasApplicationRoundDomain;


DB::transaction(function () {

$roundId = 10;
 
$mids = MuinasGrantApplication::where('application_round', $roundId)->pluck('id');

MuinasGrantapplicationmonument::whereIn('grantapplication', $mids)->delete();
MuinasGrantapplicationmonumentowner::whereIn('grantapplication', $mids)->delete();
MuinasGrantapplicationmuinasobject::whereIn('grantapplication', $mids)->delete();

MuinasGrantApplication::where('application_round', $roundId)->get()->each(function($ga){
    MuinasGrantapplicationworklistfile::where('grantapplication', $ga->id)->delete();	
    $ga->delete();
});


  $domains = MuinasApplicationRound::find($roundId)->application_round_domains->pluck('id');
  MuinasApplicationRoundEvaluationDomain::whereIn('application_round_domain', $domains)->delete();  
  MuinasApplicationRound::find($roundId)->application_round_requirements()->delete();

  MuinasCommittee::whereIn('application_domain', $domains)->first()->members()->delete();
  MuinasCommittee::whereIn('application_domain', $domains)->first()->protocols()->delete();
  MuinasGrantapplicationmuinasobject::whereIn('grantapplication', $mids)->delete();


  MuinasApplicationRound::find($roundId)->application_round_evaluations()->delete();
  MuinasApplicationRoundDomain::where('application_round', $roundId)->delete();	
  MuinasApplicationRound::find($roundId)->delete();

});