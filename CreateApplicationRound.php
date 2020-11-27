<?php
use App\Models\MuinasApplicationRound;
use App\Models\MuinasApplicationRoundDomain;
use App\Models\MuinasApplicationRoundEvaluation;
use App\Models\MuinasApplicationRoundEvaluationDomain;
use App\Models\MuinasCommittee;
use App\Models\MuinasCommitteeMember;
use App\Models\MuinasCommitteeProtocol;

$ar = MuinasApplicationRound::factory()->create();
for ($i=0;$i<3;$i++) {
  $ev = MuinasApplicationRoundEvaluation::factory()->create([
      'application_round' => $ar->id
  ]);

  $dm = MuinasApplicationRoundDomain::factory()->create([
          'application_round' => $ar->id

  ]);
  $evdm = MuinasApplicationRoundEvaluationDomain::factory()->create([
      'application_round_domain' => $dm->id,
      'application_round_evaluation' => $ev->id,
  ]);

  $cm = MuinasCommittee::factory()->create([
      'application_domain' => $dm->id
  ]);


  $mbs = MuinasCommitteeMember::factory()->count(8)->create([
      'committee_id' => $cm->id,
  ]);
  MuinasCommitteeProtocol::factory()->create([
      'committee_id' => $cm->id,
      'application_round_id' => $ar->id,
  ]);
}