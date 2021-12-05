<?php

namespace App\Controller;

use Cake\Event\Event;
use Cake\Datasource\ConnectionManager;

class BlogController extends AppController
{
    public function home()
    {
        $this->viewBuilder()->setLayout('ajax');
    }

    public function dashboard()
    {
        $this->viewBuilder()->setLayout('ajax');
        $connection = ConnectionManager::get('default');

        $total_empresas = $connection->execute(
            "SELECT COUNT(id) AS total FROM empresas"
        )->fetch('assoc');

        $total_veiculos = $connection->execute(
            "SELECT COUNT(id) AS total FROM veiculos"
        )->fetch('assoc');

        $total_motoristas = $connection->execute(
            "SELECT COUNT(id) AS total FROM motoristas"
        )->fetch('assoc');

        $total_cargas = $connection->execute(
            "SELECT SUM(id) AS total FROM cargas"
        )->fetch('assoc');

        $total_peso = $connection->execute(
            "SELECT SUM(peso) AS total FROM cargas"
        )->fetch('assoc');

        $total_faturamento = $connection->execute(
            "SELECT SUM(faturamento) AS total FROM portos"
        )->fetch('assoc');

        $total_portos = $connection->execute(
            "SELECT COUNT(id) AS total FROM portos"
        )->fetch('assoc');

        var_dump($total_faturamento);

        $this->set(compact(
            'total_empresas',
            'total_peso',
            'total_cargas',
            'total_veiculos',
            'total_motoristas',
            'total_faturamento',
            'total_portos'
        ));
    }

    public function beforeFilter(Event $event): void
    {
        $this->Auth->allow('home');
    }
}
