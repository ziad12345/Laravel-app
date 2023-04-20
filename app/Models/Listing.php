<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Listing extends Model
{
    use HasFactory;

    // protected $fillable = ["title", "company", "location", "website", "email", "description", "tags"];

    public function scopeFilter($query, array $filters)
    {
        if ($filters["tag"] ?? false) {
            $query->where("tag", "like", "%" . request("tag") . "%");
        }
        if ($filters["search"] ?? false) {
            $query->where("title", "like", "%" . request("search") . "%")
            ->orWhere("description", "like", "%" . request("search") . "%")
            ->orWhere("tags", "like", "%" . request("search") . "%")
            ->orWhere("location", "like", "%" . request("search") . "%")
            ->orWhere("company", "like", "%" . request("search") . "%");            
        }
    }
    // Relationship to user
    public function user()
    {
       return $this->belongsTo(User::class, "user_id");
    }
}
