<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Conta extends Model
{
    use SoftDeletes;
    protected $fillable = ['account', 'agency', 'balance', 'deleted_at'];
}

class ContaCorrente extends Conta
{

    public $test = [70];
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $actualValue
     */
    public function saque($actualValue)
    {
        return $this->test = 15;
    }
}
