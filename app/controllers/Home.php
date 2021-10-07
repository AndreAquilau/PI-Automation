<?php

namespace app\controllers;



class Home extends Base
{
    public function home($request, $response)
    {
        //RETORNAMOS A VIEW 
        return $this->getTwig()->render(
            $response,
            $this->setView("site/home"),
            [
                "titulo" => "FastWare - loja de saas",
                "logo" => "/img/icon.png",
                "nome" => "MIGUEL",
                "link" => "http://localhost/cliente",
                "descricao_label" => "Clientes"
            ]
        );
    }
}
