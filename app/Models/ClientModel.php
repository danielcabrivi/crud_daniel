<?php

namespace App\Models;
use CodeIgniter\Model;

class ClientModel extends Model
{
    protected $table = 'tb_client';
    protected $primaryKey = 'myId';

    protected $allowedFields = ['name', 'document', 'email1', 'email2', 'email3', 'phone1', 'phone2', 'phone3', 'InvoiceHoldIss', 'municipalDocument', 'zipCode', 'street', 'number', 'complement', 'neighborhood', 'city', 'state', 'tagName', 'tagValue'];
}
