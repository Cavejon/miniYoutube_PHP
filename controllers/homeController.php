<?php
class homeController extends Controller
{

    public function _construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $array = array();
        $videos = new Videos();
        $array['videos'] = $videos->getList(4);

        // $array['nome'] = 'Marcel';


     
        $this->loadTemplate("home", $array);
    }

}