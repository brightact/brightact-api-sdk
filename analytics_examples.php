<?php
include_once('library/AnalyticsManagement.php');

/* Analytics methods examples */

/* Analytics instance */

$inst = new AnalyticsManagement();

/* Approve dashboard report */

/* Uncomment, to use this method */
/*$inner_data = array(
    'pack_key' => '1369900160341905', //Pack key (required)
    'cc' => 'email@domain.com', //CC emails (optional)
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
    'cc' => 'email@domain.com', //CC emails (optional)
);
$out = $inst->approveLeaderBoardReport($inner_data);
echo '<pre>';
print_r($out);
echo '</pre>';*/


/* Get content board report data */

/* Uncomment, to use this method */
$range = 1; //Date periods (1-5) (optional) - Default: 1
$out = $inst->getContentBoardData($range);
echo '<pre>';
print_r($out);
echo '</pre>';

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
/*$box_id = 290; //Tile ID (required)
$token = '51c9af0c648e21372172044'; //Lead session token (required)
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
/*$pack_key = '1369900160341905'; //(required)
$range = 1; //Date periods (1-5) (optional) - Default: 1
$only_unique = 0; //only unique leads (0|1) (optional) - Default: 0
$show_anonymous = 0; //show anonymous views (0|1) (optional) - Default: 0
$out = $inst->getPackLeadEngagement($pack_key, $range, $only_unique);
echo '<pre>';
print_r($out);
echo '</pre>';*/

/* Get lead score card */

/* Uncomment, to use this method */
/*$lead_token = '51dc7a2888dbe1373403688'; //(required)
$out = $inst->getLeadScoreCard($lead_token);
echo '<pre>';
print_r($out);
echo '</pre>';*/

/* Get content board reports data */

/* Uncomment, to use this method */
/*$pack_key = '1369900160341905'; //Pack Key (required)
$out = $inst->getPackContentReport($pack_key);
echo '<pre>';
print_r($out);
echo '</pre>';*/

/* Get lead overall engagement */

/* Uncomment, to use this method */
/*$range = 1; //Date periods (1-5) (optional) - Default: 1
$email = 'etay@brightact.com'; // Lead email (required)
$out = $inst->getLeadOverallEngagement($email, $range);
echo '<pre>';
print_r($out);
echo '</pre>';*/

/* Get lead Asset Engagement */

/* Uncomment, to use this method */
/*$content_id = 291; //Content ID (required)
$token = '5245e3be4bc491380311998'; //Lead token (required)
$out = $inst->getLeadAssetEngagement($content_id, $token);
echo '<pre>';
print_r($out);
echo '</pre>';*/

/* Get asset info */

/* Uncomment, to use this method */
/*$content_id = 291; //Content ID (required)
$range = 1; //Date periods (1-5) (optional) - Default: 1
$out = $inst->getAssetInfo($content_id, $range);
echo '<pre>';
print_r($out);
echo '</pre>';*/