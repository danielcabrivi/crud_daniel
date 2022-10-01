<?php

namespace App\Controllers;

use App\Models\ClientModel;
use CodeIgniter\Controller;

class ClientController extends Controller
{
    public function index(){
        $clientModel = new ClientModel();
        $data['clients'] = $clientModel->orderBy('myId')->findAll();

        return view('client/client_view', $data);
    }

}