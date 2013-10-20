<?php
class nitro_response
{
    private $errorcode = 0;
    private $message = "Done";
    private $response = array();    //To hold returned object names & objects

    public function get_errorcode()
    {
        return $this->errorcode;
    }

    public function set_errorcode($errorcode)
    {
        $this->errorcode = $errorcode;
    }

    public function get_message()
    {
        return $this->message;
    }

    public function set_message($message)
    {
        $this->message = $message;
    }

    public function get_response()
    {
        return $this->response;
    }

    public function add_response($key, $value)
    {
        $this->response[$key] = $value;
    }

    public function to_string()
    {
        $str = null;
        $base_response = array("errorcode" => $this->get_errorcode(), "message" => $this->get_message());
        $str = html_entity_decode(json_encode(array_merge($base_response, $this->get_response())), ENT_QUOTES, "UTF-8");
        return $str;
    }
}
?>

