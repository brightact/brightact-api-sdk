<?php
//attach Main class
require('BrightAct.php');

class UserManagement extends BrightAct {

    /* User management methods */

    /**
     * Create user
     * Allowed only for admin account type
     * @param $data
     * @return mixed
     *
     * Required params:
     * username - Username/email
     * password - Password
     * first_name - First Name
     * last_name - Last Name
     *
     * Optional params:
     * status - Status (Default: 1(active)) (0|1)
     * mobile - Mobile number
     * mobile_provider - Mobile provider ID (Default: 0)
     * sp_num - Allowed packs number (default: 0) (can be edit only by admin)
     * org_id - Organization ID
     * is_deleted - Deleted status (Default: 0) (0|1)
     * extra_email - Extra emails for alerts
     * suppress_emails - Set suppress emails
     */

    public function createUser($data)
    {
        return $this->_proceed_post_method('user', $data);
    }

    /**
     * Update user
     * @param $id
     * @param $data
     * @return mixed
     *
     * Required params:
     * id - UserID
     *
     * Optional params:
     * username - Username/email
     * password - Password
     * first_name - First Name
     * last_name - Last Name
     * status - Status (Default: 1(active)) (0|1)
     * mobile - Mobile number
     * mobile_provider - Mobile provider ID (Default: 0)
     * sp_num - Allowed packs number (default: 0) (can be edit only by admin)
     * org_id - Organization ID
     * is_deleted - Deleted status (Default: 0) (0|1)
     * extra_email - Extra emails for alerts
     * suppress_emails - Set suppress emails
     */

    public function updateUser($id, $data)
    {
        return $this->_proceed_put_method('user', $id, $data);
    }

    /**
     * Delete user
     * @param $id
     * @return mixed
     *
     * Required params:
     * id - UserID
     */

    public function deleteUser($id)
    {
        return $this->_proceed_delete_method('user', $id);
    }

    /**
     * Reset user password
     * @param $id
     * @return mixed
     *
     * Required params:
     * $id - UserID (for current user use "my" instead UserID)
     */

    public function resetUserPassword($id)
    {
        return $this->_proceed_method('resetUserPassword', $id);
    }

    /**
     * Create organization
     * Allowed only for admin account type
     * @param $data
     * @return mixed
     *
     * Required params:
     *
     */

    public function createOrg($data)
    {
        return $this->_proceed_post_method('org', $data);
    }

    /**
     * Update organization
     * Allowed only for admin account type
     * @param $id
     * @param $data
     * @return mixed
     *
     * Required params:
     * id - OrganizationID
     */

    public function updateOrg($id, $data)
    {
        return $this->_proceed_put_method('org', $id, $data);
    }

    /**
     * Delete organization
     * Allowed only for admin account type
     * @param $id
     * @return mixed
     *
     * Required param:
     * id - OrganizationID
     */

    public function deleteOrg($id)
    {
        return $this->_proceed_delete_method('org', $id);
    }

    /**
     * Get users list
     * Allowed only for admin account type
     * @param $org_id
     * @return mixed
     *
     * Required param:
     * org_id - OrganizationID
     */

    public function getUsersList($org_id)
    {
        $data = array(
            'org_id' => $org_id,
        );
        return $this->_proceed_method('users', null, $data);
    }

    /**
     * Get user info
     * @param $id
     * @return mixed
     *
     * Required param:
     * id - UserID (for current user can be used "my" instead ID)
     */

    public function getUserInfo($id)
    {
        return $this->_proceed_method('user', $id);
    }

    /**
     * Get organizations list
     * Allowed only for admin account type
     * @return mixed
     */

    public function getOrgList()
    {
        return $this->_proceed_method('orgs');
    }

    /**
     * Get organization info
     * Allowed only for admin account type
     * @param $id
     * @return mixed
     */

    public function getOrgInfo($id)
    {
        return $this->_proceed_method('org', $id);
    }

}