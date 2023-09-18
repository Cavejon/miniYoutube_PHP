<?php
class contatoController extends Controller
{

    public function _construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $array = array();

        if(isset($_POST['nome']) && !empty($_POST['nome'])){
            
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $mensagem = $_POST['mensagem'];

            echo "NOME:".$nome;
            exit;
        }

        $this->loadTemplate("contato", $array);
    }

}