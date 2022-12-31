<?php

namespace App\Models;

use App\Traits\RepoResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    use RepoResponse;

    protected $fillable = [
        'shareable'
    ];
    public function getPlanList($request, int $per_page = 20){
        $data = $this->where('status',1)->orderBy('id','ASC')->paginate($per_page);
        return $this->formatResponse(true, '', 'user.plans', $data);
    }

}
