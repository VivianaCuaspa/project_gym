<?php


namespace App\Models\audit_trail;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AuditTrail extends Model
{
    use HasFactory;
    protected $fillable = [
        'type',
        'data',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
