<?php
class sobreController extends controller
{
    public function _construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $array = array();
        $this->loadTemplate("sobre", $array);
    }

}


?>