<?php

namespace App\Models;

use App\Traits\ApiResponse;
use App\Traits\RepoResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use RepoResponse;
    use ApiResponse;

    public function getTransectionList($request, int $paginate = 5)
    {
        $transaction = Transaction::where('user_id',Auth::user()->id)->orderBy('id','DESC')->paginate($paginate);
        return  $transaction;
    }
}
