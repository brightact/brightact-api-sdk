<?php
include_once('library/BrightAct.php');

/* Analytics methods examples */

$inst = new BrightAct();

/* Approve dashboard report */

/*$inner_data = array(
    'pack_key' => '1391771227222402', //Pack key
    'cc' => 'onehels@mail.ru', //CC emails
    'lead_table' => 1,
    'score_cards' => 1,
);
$out = $inst->approveDashboardReport($inner_data);
echo '<pre>';
print_r($out);
echo '</pre>';*/


/* Approve leader board report */

/*$inner_data = array(
    'cc' => 'onehels@mail.ru', //CC emails
);
$out = $inst->approveLeaderBoardReport($inner_data);
echo '<pre>';
print_r($out);
echo '</pre>';*/


/* Get content board report data */

/*$range = 1; //Date periods (1-5)
$out = $inst->getContentBoardData($range);
echo '<pre>';
print_r($out);
echo '</pre>';*/

/* Get leader board report data */

/*$range = 1; //Date periods (1-5)
$only_unique = 1; //only unique leads (0|1)
$out = $inst->getLeaderBoardData($range, $only_unique);
echo '<pre>';
print_r($out);
echo '</pre>';*/

/* Get score of tile per viewer session */

/*$box_id = 33; //Tile ID
$token = '51c4036188c4d1371800417'; //Lead session token
$out = $inst->getScoreOfTilePerViewer($box_id, $token);
echo '<pre>';
print_r($out);
echo '</pre>';*/

/* Get Top Pack views */
/* Same for: getTopXPackShared, getTopXLeadAccounts, getTopXExternalLeads, getTopXInternalLeads */

/*$range = 1; //Date period
$limit = 10; //Rows num
$out = $inst->getTopXPackViews($range, $limit);
echo '<pre>';
print_r($out);
echo '</pre>';*/

/* Get pack lead engagement */

/*$pack_key = '1391771227222402';
$range = 1; //Date periods (1-5)
$only_unique = 0; //only unique leads (0|1)
$show_anonymous = 0; //show anonymous views (0|1)
$out = $inst->getPackLeadEngagement($pack_key, $range, $only_unique);
echo '<pre>';
print_r($out);
echo '</pre>';*/

/* Get lead score card */

/*$lead_token = '51c4036188c4d1371800417';
$out = $inst->getLeadScoreCard($lead_token);
echo '<pre>';
print_r($out);
echo '</pre>';*/

/* Get content board reports data */

/*$pack_key = '1391771227222402';
$out = $inst->getPackContentReport($pack_key);
echo '<pre>';
print_r($out);
echo '</pre>';*/

/* Get lead overall engagement */

/*$range = 1;
$email = 'onehels@gmail.com';
$out = $inst->getLeadOverallEngagement($email, $range);
echo '<pre>';
print_r($out);
echo '</pre>';*/

/* Get lead Asset Engagement */

/*$content_id = 293;
$token = '53109c86dd7881393597574';
$out = $inst->getLeadAssetEngagement($content_id, $token);
echo '<pre>';
print_r($out);
echo '</pre>';*/

/* Get asset info */

$content_id = 293;
$range = 1;
$out = $inst->getAssetInfo($content_id, $range);
echo '<pre>';
print_r($out);
echo '</pre>';