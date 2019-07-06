<?php
namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;// Pour importer une classe
class HelloController{
    public function home(){
        return new Response("<html><body> Bienvenue en Symfony 4</body></html>");
    }
}
