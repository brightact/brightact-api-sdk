<?php
include_once('library/BrightAct.php');

/* Analytics methods examples */

$inst = new BrightAct();

/* Approve dashboard report */

/* Uncomment, to use this method */
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

/* Uncomment, to use this method */
/*$inner_data = array(
    'cc' => 'onehels@mail.ru', //CC emails
);
$out = $inst->approveLeaderBoardReport($inner_data);
echo '<pre>';
print_r($out);
echo '</pre>';*/


/* Get content board report data */

/* Uncomment, to use this method */
/*$range = 1; //Date periods (1-5)
$out = $inst->getContentBoardData($range);
echo '<pre>';
print_r($out);
echo '</pre>';*/

/* Get leader board report data */

/* Uncomment, to use this method */
/*$range = 1; //Date periods (1-5)
$only_unique = 1; //only unique leads (0|1)
$out = $inst->getLeaderBoardData($range, $only_unique);
echo '<pre>';
print_r($out);
echo '</pre>';*/

/* Get score of tile per viewer session */

/* Uncomment, to use this method */
/*$box_id = 33; //Tile ID
$token = '51c4036188c4d1371800417'; //Lead session token
$out = $inst->getScoreOfTilePerViewer($box_id, $token);
echo '<pre>';
print_r($out);
echo '</pre>';*/

/* Get Top Pack views */
/* Same for: getTopXPackShared, getTopXLeadAccounts, getTopXExternalLeads, getTopXInternalLeads */

/* Uncomment, to use this method */
/*$range = 1; //Date period
$limit = 1; //Rows num
$out = $inst->getTopXPackViews($range, $limit);
echo '<pre>';
print_r($out);
echo '</pre>';*/

/* Get pack lead engagement */

/* Uncomment, to use this method */
/*$pack_key = '1391771227222402';
$range = 1; //Date periods (1-5)
$only_unique = 0; //only unique leads (0|1)
$show_anonymous = 0; //show anonymous views (0|1)
$out = $inst->getPackLeadEngagement($pack_key, $range, $only_unique);
echo '<pre>';
print_r($out);
echo '</pre>';*/

/* Get lead score card */

/* Uncomment, to use this method */
/*$lead_token = '51c4036188c4d1371800417';
$out = $inst->getLeadScoreCard($lead_token);
echo '<pre>';
print_r($out);
echo '</pre>';*/

/* Get content board reports data */

/* Uncomment, to use this method */
/*$pack_key = '1391771227222402';
$out = $inst->getPackContentReport($pack_key);
echo '<pre>';
print_r($out);
echo '</pre>';*/

/* Get lead overall engagement */

/* Uncomment, to use this method */
/*$range = 1;
$email = 'onehels@gmail.com';
$out = $inst->getLeadOverallEngagement($email, $range);
echo '<pre>';
print_r($out);
echo '</pre>';*/

/* Get lead Asset Engagement */

/* Uncomment, to use this method */
/*$content_id = 293;
$token = '53109c86dd7881393597574';
$out = $inst->getLeadAssetEngagement($content_id, $token);
echo '<pre>';
print_r($out);
echo '</pre>';*/

/* Get asset info */

/* Uncomment, to use this method */
/*$content_id = 293;
$range = 1;
$out = $inst->getAssetInfo($content_id, $range);
echo '<pre>';
print_r($out);
echo '</pre>';*/