<?php
//attach Main class
require('BrightAct.php');

class AnalyticsManagement extends BrightAct {

    /* Analytics methods */

    /**
     * Approve dashboard report
     * @param array $data
     * @return mixed
     *
     * Required params for incoming $data:
     * pack_key - Pack key
     *
     * Optional params for incoming $data:
     * cc - CC for report (separated by comma)
     * lead_table - 0|1 (send or did not send lead table report) Default: 1
     * score_cards - 0|1 (send or did not send score cards report) Default: 0
     * score_offset - score offset (default is 0)
     */

    public function approveDashboardReport($data = array())
    {
        return $this->_proceed_post_method('approveDashboardReport', $data);
    }

    /**
     * Approve LeaderBoard report
     * @param array $data
     * @return mixed
     *
     * Required params for incoming $data:
     * user_id - User ID (only for admin)
     *
     * Optional params for incoming $data:
     * cc - CC for report (separated by comma)
     */

    public function approveLeaderBoardReport($data = array())
    {
        return $this->_proceed_post_method('approveLeaderBoardReport', $data);
    }

    /**
     * Get ContentBoard data
     * @param int $range
     * @param int $user_id
     * @return mixed
     *
     * Params values:
     * range - time period (1-5)
     *
     * Time periods:
     * 1 - All time
     * 2 - Last 90 days
     * 3 - Last 30 days
     * 4 - Recent week
     * 5 - Today
     */

    public function getContentBoardData($range = 1, $user_id = 0)
    {
        $data = array(
            'range' => $range
        );
        return $this->_proceed_method('contentBoardData', $user_id, $data);
    }

    /**
     * Get LeaderBoard data
     * @param int $range
     * @param int $only_unique
     * @param int $user_id
     * @return mixed
     *
     * Params values:
     * range - time period (1-5)
     * only_unique - 0|1
     *
     * Time periods:
     * 1 - All time
     * 2 - Last 90 days
     * 3 - Last 30 days
     * 4 - Recent week
     * 5 - Today
     */

    public function getLeaderBoardData($range = 1, $only_unique = 0, $user_id = 0)
    {
        $data = array(
            'range' => $range,
            'only_unique' => $only_unique,
        );
        return $this->_proceed_method('leaderBoardData', $user_id, $data);
    }

    /**
     * Get score of time per lead session
     * @param $box_id
     * @param $token
     * @return mixed
     *
     * Param values:
     * box_id - Tile ID
     * token - Lead session unique token
     */

    public function getScoreOfTilePerViewer($box_id, $token)
    {
        $data = array(
            'token' => $token,
        );
        return $this->_proceed_method('getScoreOfTilePerViewer', $box_id, $data);
    }

    /**
     * Get Top pack views
     * @param int $range
     * @param int $limit
     * @param $user_id
     * @return mixed
     *
     * Params values:
     * range - time period (1-5)
     * limit - integer (default: 5)
     *
     * Time periods:
     * 1 - All time
     * 2 - Last 90 days
     * 3 - Last 30 days
     * 4 - Recent week
     * 5 - Today
     */

    public function getTopXPackViews($range = 1, $limit = 5, $user_id = 0)
    {
        $data = array(
            'range' => $range,
            'limit' => $limit,
        );
        return $this->_proceed_method('getTopXPackViews', $user_id, $data);
    }

    /**
     * Get Top pack shared
     * @param int $range
     * @param int $limit
     * @param $user_id
     * @return mixed
     *
     * Params values:
     * range - time period (1-5)
     * limit - integer (default: 5)
     *
     * Time periods:
     * 1 - All time
     * 2 - Last 90 days
     * 3 - Last 30 days
     * 4 - Recent week
     * 5 - Today
     */

    public function getTopXPackShared($range = 1, $limit = 5, $user_id = 0)
    {
        $data = array(
            'range' => $range,
            'limit' => $limit,
        );
        return $this->_proceed_method('getTopXPackShared', $user_id, $data);
    }

    /**
     * Get Top pack leads
     * @param int $range
     * @param int $limit
     * @param $user_id
     * @return mixed
     *
     * Params values:
     * range - time period (1-5)
     * limit - integer (default: 5)
     *
     * Time periods:
     * 1 - All time
     * 2 - Last 90 days
     * 3 - Last 30 days
     * 4 - Recent week
     * 5 - Today
     */

    public function getTopXLeadAccounts($range = 1, $limit = 5, $user_id = 0)
    {
        $data = array(
            'range' => $range,
            'limit' => $limit,
        );
        return $this->_proceed_method('getTopXLeadAccounts', $user_id, $data);
    }

    /**
     * Get Top external leads
     * @param int $range
     * @param int $limit
     * @param $user_id
     * @return mixed
     *
     * Params values:
     * range - time period (1-5)
     * limit - integer (default: 5)
     *
     * Time periods:
     * 1 - All time
     * 2 - Last 90 days
     * 3 - Last 30 days
     * 4 - Recent week
     * 5 - Today
     */

    public function getTopXExternalLeads($range = 1, $limit = 5, $user_id = 0)
    {
        $data = array(
            'range' => $range,
            'limit' => $limit,
        );
        return $this->_proceed_method('getTopXExternalLeads', $user_id, $data);
    }

    /**
     * Get Top internal leads
     * @param int $range
     * @param int $limit
     * @param $user_id
     * @return mixed
     *
     * Params values:
     * range - time period (1-5)
     * limit - integer (default: 5)
     *
     * Time periods:
     * 1 - All time
     * 2 - Last 90 days
     * 3 - Last 30 days
     * 4 - Recent week
     * 5 - Today
     */

    public function getTopXInternalLeads($range = 1, $limit = 5, $user_id = 0)
    {
        $data = array(
            'range' => $range,
            'limit' => $limit,
        );
        return $this->_proceed_method('getTopXInternalLeads', $user_id, $data);
    }

    /**
     * Get pack lead engagement
     * @param $pack_key
     * @param int $range
     * @param int $only_unique
     * @param int $show_anonymous
     * @return mixed
     *
     * Params values:
     * pack_key - pack key (required)
     * range - time period (1-5)
     * only_unique - 0|1
     * show_anonymous - 0|1
     *
     * Time periods:
     * 1 - All time
     * 2 - Last 90 days
     * 3 - Last 30 days
     * 4 - Recent week
     * 5 - Today
     */

    public function getPackLeadEngagement($pack_key, $range = 1, $only_unique = 0, $show_anonymous = 0)
    {
        $data = array(
            'range' => $range,
            'only_unique' => $only_unique,
            'show_anonymous' => $show_anonymous,
        );
        return $this->_proceed_method('getPackLeadEngagement', $pack_key, $data);
    }

    /**
     * Get Lead score card
     * @param $lead_token
     * @return mixed
     *
     * Params values:
     * lead_token - Lead token (required)
     */

    public function getLeadScoreCard($lead_token)
    {
        $data = array();
        return $this->_proceed_method('getLeadScoreCard', $lead_token, $data);
    }

    /**
     * Get pack content report data
     * @param $pack_key
     * @return mixed
     *
     * * Params values:
     * pack_key - pack key (required)
     */

    public function getPackContentReport($pack_key)
    {
        $data = array();
        return $this->_proceed_method('getPackContentReport', $pack_key, $data);
    }

    /**
     * Get lead overall engagement
     * @param $email
     * @param int $range
     * @param int $user_id
     * @return mixed
     *
     * Params values:
     * range - time period (1-5)
     * email - lead email
     */

    public function getLeadOverallEngagement($email, $range = 1, $user_id = 0)
    {
        $data = array(
            'email' => $email,
            'range' => $range,
        );
        return $this->_proceed_method('getLeadOverallEngagement', $user_id, $data);
    }

    /**
     * Get lead asset engagement
     * @param $content_id
     * @param $token
     * @return mixed
     *
     * Params values:
     * content_id - Content ID
     * token - Lead session unique token
     */

    public function getLeadAssetEngagement($content_id, $token)
    {
        $data = array(
            'token' => $token
        );
        return $this->_proceed_method('getLeadAssetEngagement', $content_id, $data);
    }

    /**
     * Get asset info
     * @param $content_id
     * @param $range
     * @return mixed
     *
     * Params values:
     * content_id - Content ID
     * range - date period (1-5)
     */

    public function getAssetInfo($content_id, $range)
    {
        $data = array(
            'range' => $range
        );
        return $this->_proceed_method('getAssetInfo', $content_id, $data);
    }

}