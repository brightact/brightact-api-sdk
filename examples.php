<?php
include_once('library/BrightAct.php');

/* Analytics methods examples */

$inst = new BrightAct();

/* Approve dashboard report */

/* Uncomment, to use this method */
/*$inner_data = array(
    'pack_key' => '1400180273521657', //Pack key (required)
    'cc' => 'onehels@mail.ru', //CC emails (optional)
    'lead_table' => 1, //(optional)
    'score_cards' => 1, //(optional)
);
$out = $inst->approveDashboardReport($inner_data);
echo '<pre>';
print_r($out);
echo '</pre>';*/


/* Approve leader board report */

/* Uncomment, to use this method */
/*$inner_data = array(
    'cc' => 'onehels@mail.ru', //CC emails (optional)
);
$out = $inst->approveLeaderBoardReport($inner_data);
echo '<pre>';
print_r($out);
echo '</pre>';*/


/* Get content board report data */

/* Uncomment, to use this method */
/*$range = 1; //Date periods (1-5) (optional) - Default: 1
$out = $inst->getContentBoardData($range);
echo '<pre>';
print_r($out);
echo '</pre>';*/

/* Get leader board report data */

/* Uncomment, to use this method */
/*$range = 1; //Date periods (1-5) (optional) - Default: 1
$only_unique = 1; //only unique leads (0|1) (optional) - Default: 0
$out = $inst->getLeaderBoardData($range, $only_unique);
echo '<pre>';
print_r($out);
echo '</pre>';*/

/* Get score of tile per viewer session */

/* Uncomment, to use this method */
/*$box_id = 283; //Tile ID (required)
$token = '51b9eeaf127541371139759'; //Lead session token (required)
$out = $inst->getScoreOfTilePerViewer($box_id, $token);
echo '<pre>';
print_r($out);
echo '</pre>';*/

/* Get Top Pack views */
/* Same for: getTopXPackShared, getTopXLeadAccounts, getTopXExternalLeads, getTopXInternalLeads */

/* Uncomment, to use this method */
/*$range = 1; //Date periods (1-5) (optional) - Default: 1
$limit = 10; //Rows num (optional) - Default: 5
$out = $inst->getTopXPackViews($range, $limit);
echo '<pre>';
print_r($out);
echo '</pre>';*/

/* Get pack lead engagement */

/* Uncomment, to use this method */
/*$pack_key = '1400180273521657'; //(required)
$range = 1; //Date periods (1-5) (optional) - Default: 1
$only_unique = 0; //only unique leads (0|1) (optional) - Default: 0
$show_anonymous = 0; //show anonymous views (0|1) (optional) - Default: 0
$out = $inst->getPackLeadEngagement($pack_key, $range, $only_unique);
echo '<pre>';
print_r($out);
echo '</pre>';*/

/* Get lead score card */

/* Uncomment, to use this method */
/*$lead_token = '53762660a0cb81400252000'; //(required)
$out = $inst->getLeadScoreCard($lead_token);
echo '<pre>';
print_r($out);
echo '</pre>';*/

/* Get content board reports data */

/* Uncomment, to use this method */
/*$pack_key = '1400180273521657';
$out = $inst->getPackContentReport($pack_key);
echo '<pre>';
print_r($out);
echo '</pre>';*/

/* Get lead overall engagement */

/* Uncomment, to use this method */
/*$range = 1; //Date periods (1-5) (optional) - Default: 1
$email = 'onehels@gmail.com'; // Lead email (required)
$out = $inst->getLeadOverallEngagement($email, $range);
echo '<pre>';
print_r($out);
echo '</pre>';*/

/* Get lead Asset Engagement */

/* Uncomment, to use this method */
/*$content_id = 5306; //Content ID (required)
$token = '53ceb2acc0e931406055084'; //Lead token (required)
$out = $inst->getLeadAssetEngagement($content_id, $token);
echo '<pre>';
print_r($out);
echo '</pre>';*/

/* Get asset info */

/* Uncomment, to use this method */
$content_id = 5306; //Content ID (required)
$range = 1; //Date periods (1-5) (optional) - Default: 1
$out = $inst->getAssetInfo($content_id, $range);
echo '<pre>';
print_r($out);
echo '</pre>';