<?php
include_once('library/PackManagement.php');

/* Pack methods examples */

/* Pack instance */

$inst = new PackManagement();

/* Get content lib list */

/* Uncomment, to use this method */
/*$out = $inst->getContentLibList();
echo '<pre>';
print_r($out);
echo '</pre>';*/

/* Get content info */

/* Uncomment, to use this method */
/*$content_id = 7287; //Content ID (required)
$out = $inst->getContentInfo($content_id);
echo '<pre>';
print_r($out);
echo '</pre>';*/

/* Set asset weight */

/* Uncomment, to use this method */
/*$content_id = 7287; //Content ID (required)
$weight = 90; //Weight value (required)
$out = $inst->setAssetWeight($content_id, $weight);
echo '<pre>';
print_r($out);
echo '</pre>';*/

/* Get tiles list for pack */

/* Uncomment, to use this method */
/*$pack_key = '1369900160341905'; //Pack key
$out = $inst->tilesList($pack_key);
echo '<pre>';
print_r($out);
echo '</pre>';*/

/* Remove content */

/* Uncomment, to use this method */
/*$content_id = 7287; //Content ID (required)
$out = $inst->removeContent($content_id);
echo '<pre>';
print_r($out);
echo '</pre>';*/

/* Get covers images */

/* Uncomment, to use this method */
/*$out = $inst->getCoverLibList();
echo '<pre>';
print_r($out);
echo '</pre>';*/

/* Get packs list */

/* Uncomment, to use this method */
/*$out = $inst->getPacksList();
echo '<pre>';
print_r($out);
echo '</pre>';*/

/* Get pack info */

/* Uncomment, to use this method */
/*$pack_key = '1369900160341905'; //Pack key
$out = $inst->getPackInfo($pack_key);
echo '<pre>';
print_r($out);
echo '</pre>';*/

/* Create pack */

/* Uncomment, to use this method */
/*$inner_data = array(
    'name' => 'Test pack', //Pack name (required)
);
$out = $inst->createPack($inner_data);
echo '<pre>';
print_r($out);
echo '</pre>';*/

/* Update pack */

/* Uncomment, to use this method */
/*$pack_key = '1408703836131771'; //Pack key (required)
$inner_data = array(
    'name' => 'Test pack 2', //Pack name
);
$out = $inst->updatePack($pack_key, $inner_data);
echo '<pre>';
print_r($out);
echo '</pre>';*/

/* Delete Pack */

/* Uncomment, to use this method */
/*$pack_key = '1408703836131771'; //Pack key (required)
$out = $inst->deletePack($pack_key);
echo '<pre>';
print_r($out);
echo '</pre>';*/

/* Create tile */

/* Uncomment, to use this method */
/*$inner_data = array(
    'pack_key' => '1408703836131771', //Pack key (required)
    'name' => 'Tile name 1', //Tile name (required)
);
$out = $inst->createTile($inner_data);
echo '<pre>';
print_r($out);
echo '</pre>';*/

/* Update tile */

/* Uncomment, to use this method */
/*$tile_id = 21682; //TileID (required)
$inner_data = array(
    'name' => 'Tile name 2', //Tile name (required)
);
$out = $inst->updateTile($tile_id, $inner_data);
echo '<pre>';
print_r($out);
echo '</pre>';*/

/* Delete tile */

/* Uncomment, to use this method */
/*$tile_id = 21560; //TileID (required)
$out = $inst->deleteTile($tile_id);
echo '<pre>';
print_r($out);
echo '</pre>';*/

/* Attach content to tile */

/* Uncomment, to use this method */
/*$inner_data = array(
    'id' => 21584, //TileID (required)
    'content_id' => 293,//Content ID from lib
);
$out = $inst->attachContentToTile($inner_data);
echo '<pre>';
print_r($out);
echo '</pre>';*/

/* Duplicate pack */

/* Uncomment, to use this method */
/*$pack_key = '1408703836131771';
$out = $inst->duplicatePack($pack_key);
echo '<pre>';
print_r($out);
echo '</pre>';*/

/* Get pack thumbnail */

/* Uncomment, to use this method */
/*$pack_key = '1369900160341905';
$out = $inst->getPackThumbnail($pack_key);
echo '<pre>';
print_r($out);
echo '</pre>';*/


/* Get pack links */

/* Uncomment, to use this method */
/*$pack_key = '1369900160341905';
$out = $inst->getPackLinks($pack_key);
echo '<pre>';
print_r($out);
echo '</pre>';*/

/* Share pack via email */

/* Uncomment, to use this method */
/*$inner_data = array(
    'pack_key' => 1369900160341905, //Pack key (required)
    'to' => 'onehels@gmail.com', //Send to (required)
    'from' => 'onehels@yahoo.com', //From (optional)
);
$out = $inst->sharePackInEmail($inner_data);
echo '<pre>';
print_r($out);
echo '</pre>';*/

/* Create/Update survey */

/* Uncomment, to use this method */
/*$inner_data = array(
    'tile_id' => 21332,
    'question' => 'Test question 1?',
    'answers' => 'Yes|No|Maybe',
    'show' => 1,
    'pos' => 1,
);
$out = $inst->updateSurvey($inner_data);
echo '<pre>';
print_r($out);
echo '</pre>';*/

/* Delete Tile survey */

/* Uncomment, to use this method */
/*$tileID = 21332;
$out = $inst->deleteTileSurvey($tileID);
echo '<pre>';
print_r($out);
echo '</pre>';*/

/* Send Alert email */

/* Uncomment, to use this method */
$token = '53065172346611392922994';
$out = $inst->sendAlertEmail($token);
echo '<pre>';
print_r($out);
echo '</pre>';

/* Send Alert email */

/* Uncomment, to use this method */
/*$token = '53065172346611392922994';
$out = $inst->sendAlertSMS($token);
echo '<pre>';
print_r($out);
echo '</pre>';*/