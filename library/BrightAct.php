<?php

class BrightAct {

    /**
     * Base API path
     */

    public $API_PATH = 'http://app.brightact.com/api/v1';

    /**
     * API KEY
     * You need set your own API key, you can find it at your account
     */

    public $API_KEY = '46053ea3761943c841553ea37619446a';

    /* Private functions */

    /**
     * Proceed POST method
     * @param $method
     * @param array $post_data
     * @return mixed
     */

    protected function _proceed_post_method($method, $post_data = array())
    {
        return $this->_proceed_method($method, null, array(), $post_data, 'POST');
    }

    /**
     * Proceed PUT method
     * @param $method
     * @param $id
     * @param array $post_data
     * @return mixed
     */

    protected function _proceed_put_method($method, $id, $post_data = array())
    {
        return $this->_proceed_method($method, $id, array(), $post_data, 'PUT');
    }

    /**
     * Proceed delete method
     * @param $method
     * @param $id
     * @return mixed
     */

    protected function _proceed_delete_method($method, $id)
    {
        return $this->_proceed_method($method, $id, array(), array(), 'DELETE');
    }

    /**
     * Proceed method
     * @param $method
     * @param null $id
     * @param array $data
     * @param array $post_data
     * @param string $req_method
     * @return mixed
     */

    protected function _proceed_method($method, $id = null, $data = array(), $post_data = array(), $req_method = 'GET')
    {
        return $this->_send_request($this->_generate_method_url($method, $id, $data), $post_data, $req_method);
    }

    /**
     * Generate right path for method
     * @param $method
     * @param null $id
     * @param array $data
     * @return string
     */

    protected function _generate_method_url($method, $id = null, $data = array())
    {
        $url = $this->API_PATH . '/' . $method;
        if(!is_null($id)) {
            $url .= '/' . $id;
        }
        $url .= '.json';
        $url .= '?key=' . $this->API_KEY;
        if(is_array($data)) {
            foreach($data as $key => $value) {
                $url .= '&' . $key . '=' . $value;
            }
        }

        return $url;
    }

    protected function _send_request($path, $data = array(), $method = 'GET')
    {
        //default params
        $params = array(
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_URL => $path,
        );

        if($method == 'POST') {
            $params[CURLOPT_POST] = 1;
            $params[CURLOPT_POSTFIELDS] = $data;
        } else if($method == 'PUT') {
            $post_field_string = http_build_query($data, '', '&');
            $params[CURLOPT_CUSTOMREQUEST] = "PUT";
            $params[CURLOPT_HEADER] = false;
            $params[CURLOPT_POSTFIELDS] = $post_field_string;
        } else if($method == 'DELETE') {
            $params[CURLOPT_CUSTOMREQUEST] = "DELETE";
            $params[CURLOPT_HEADER] = false;
        }

        $curl = curl_init();
        curl_setopt_array($curl, $params);
        $resp = curl_exec($curl);

        if(!$resp) {
            //curl_close($curl);
            throw new Exception(curl_error($curl));
        }
        curl_close($curl);

        return $this->_parse_response($resp);
    }

    /**
     * Parse response
     * @param $data
     * @return mixed
     */

    protected function _parse_response($data)
    {
        return json_decode($data);
    }

}