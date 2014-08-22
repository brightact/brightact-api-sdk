<?php
//attach Main class
require('BrightAct.php');

class PackManagement extends BrightAct {

    /* Pack management methods */

    /**
     * Get contents list from library
     * @param $user_id
     * @return mixed
     *
     * Params:
     * user_id - only for admin type of account
     */

    public function getContentLibList($user_id = 'my')
    {
        $data = array(
            'user_id' => $user_id
        );
        return $this->_proceed_method('contents', null, $data);
    }

    /**
     * Get content info
     * @param $id
     * @return mixed
     *
     * Required param:
     * id - ContentID
     */

    public function getContentInfo($id)
    {
        return $this->_proceed_method('content', $id);
    }

    /**
     * Update asset weight
     * @param $id
     * @param $weight
     * @return mixed
     *
     * Required params:
     * id - ContentID
     * weight - Weight value (0-100)
     */

    public function setAssetWeight($id, $weight = 0)
    {
        $data = array(
            'weight' => $weight
        );
        return $this->_proceed_put_method('assetWeight', $id, $data);
    }

    /**
     * Get tiles list of pack
     * @param $pack_key
     * @return mixed
     *
     * Required param:
     * pack_key - Pack Key
     */

    public function tilesList($pack_key)
    {
        $data = array(
            'pack_key' => $pack_key
        );
        return $this->_proceed_method('tiles', null, $data);
    }

    /**
     * Remove content
     * @param $id
     * @return mixed
     *
     * Required param:
     * id - ContentID
     */

    public function removeContent($id)
    {
        return $this->_proceed_delete_method('content', $id);
    }

    /**
     * Get covers images from library
     * @param $user_id
     * @return mixed
     *
     * Required params:
     * user_id - UserID (for current account can be used "my" instead UserID)
     */

    public function getCoverLibList($user_id = 'my')
    {
        $data = array(
            'user_id' => $user_id,
        );
        return $this->_proceed_method('covers', null, $data);
    }

    /**
     * Get packs list
     * @param $user_id
     * @return mixed
     *
     * Required params:
     * user_id - UserID (for current account can be used "my" instead UserID)
     */

    public function getPacksList($user_id = 'my')
    {
        $data = array(
            'user_id' => $user_id,
        );
        return $this->_proceed_method('packs', null, $data);
    }

    /**
     * Get pack info
     * @param $id
     * @return mixed
     *
     * Required params:
     * id - PackKey
     */

    public function getPackInfo($id)
    {
        return $this->_proceed_method('pack', $id);
    }

    /**
     * Create pack
     * @param $data
     * @return mixed
     *
     * Required params:
     * user_id - UserID (required)
     * name - Pack name (required)
     */

    public function createPack($data)
    {
        return $this->_proceed_post_method('pack', $data);
    }

    /**
     * Update pack
     * @param $id
     * @param $data
     * @return mixed
     *
     * Required params:
     * id - PackID
     */

    public function updatePack($id, $data)
    {
        return $this->_proceed_put_method('pack', $id, $data);
    }

    /**
     * Delete pack
     * @param $id
     * @return mixed
     *
     * Required params:
     * id - PackID
     */

    public function deletePack($id)
    {
        return $this->_proceed_delete_method('pack', $id);
    }

    /**
     * Create tile
     * @param $data
     * @return mixed
     *
     * Required params:
     *
     */

    public function createTile($data)
    {
        return $this->_proceed_post_method('tile', $data);
    }

    /**
     * Update tile
     * @param $id
     * @param $data
     * @return mixed
     *
     * Required params:
     * id - TileID
     */

    public function updateTile($id, $data)
    {
        return $this->_proceed_put_method('tile', $id, $data);
    }

    /**
     * Delete tile
     * @param $id
     * @return mixed
     *
     * Required params:
     * id - TileID
     */

    public function deleteTile($id)
    {
        return $this->_proceed_delete_method('tile', $id);
    }

    /**
     * Create new content and attach it to tile (only for Mini-site template)
     * @param $data
     * @return mixed
     *
     * Required param:
     * id - TileID
     */

    public function attachContentToTile($data)
    {
        return $this->_proceed_post_method('attachContentToTile', $data);
    }

    /**
     * Duplicate pack
     * @param $id
     * @return mixed
     *
     * Required params:
     * id - PackID
     */

    public function duplicatePack($id)
    {
        $data = array(
            'id' => $id,
        );
        return $this->_proceed_post_method('duplicatePack', $data);
    }

    /**
     * Get pack thumbnail
     * @param $id
     * @return mixed
     *
     * Required param:
     * id - Pack key
     */

    public function getPackThumbnail($id)
    {
        return $this->_proceed_method('getPackThumbnail', $id);
    }

    /**
     * Get pack links
     * @param $id
     * @return mixed
     *
     * Required params:
     * id - Pack key
     */

    public function getPackLinks($id)
    {
        return $this->_proceed_method('getPackLinks', $id);
    }

    /**
     * Share pack in email
     * @param $data
     * @return mixed
     *
     * Required params:
     * pack_key - Pack key
     */

    public function sharePackInEmail($data)
    {
        return $this->_proceed_post_method('sharePackInEmail', $data);
    }

}