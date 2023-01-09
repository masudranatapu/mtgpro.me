<?php
namespace App\Models;
use App\Traits\RepoResponse;
use Illuminate\Database\Eloquent\Model;

class Connection extends Model
{
    use RepoResponse;
    protected $table = 'connects';



}
