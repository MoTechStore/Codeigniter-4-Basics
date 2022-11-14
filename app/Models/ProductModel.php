<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductModel extends Model
{
	protected $table      = 'product';

	protected $primaryKey = 'id';

	protected $returnType = 'array';

	protected $allowedFields = ['name', 'price', 'quantity', 'status', 'created', 'description'];
}	