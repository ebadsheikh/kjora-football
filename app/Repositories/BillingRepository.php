<?php

namespace App\Repositories;

use App\Models\Billing;
use JasonGuru\LaravelMakeRepository\Repository\BaseRepository;

//use Your Model

/**
 * Class BillingRepository
 * @package App\Repositories
 * @version April 11, 2020, 1:57 pm UTC
 *
 * @method Billing findWithoutFail($id, $columns = ['*'])
 * @method Billing find($id, $columns = ['*'])
 * @method Billing first($columns = ['*'])
*/
class BillingRepository extends BaseRepository
{
    /**
     * @return string
     *  Return the model
     */
    public function model()
    {
        return Billing::class;
    }
}
