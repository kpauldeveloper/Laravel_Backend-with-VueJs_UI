<?php

namespace InvoiceApp;

use Illuminate\Database\Eloquent\Model;

class Counter extends Model
{
    protected $fillable = [
        'key', 'prefix', 'value'
    ];
}
