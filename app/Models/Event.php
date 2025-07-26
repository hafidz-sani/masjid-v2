<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Str;
use Carbon\Carbon;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'description',
        'location',
        'start_datetime',
        'end_datetime',
        'event_type',
        'status',
        'featured_image',
        'max_participants',
        'registered_participants',
        'is_recurring',
        'recurrence_pattern',
        'contact_info',
        'meta_data',
        'user_id',
    ];

    protected $casts = [
        'start_datetime' => 'datetime',
        'end_datetime' => 'datetime',
        'is_recurring' => 'boolean',
        'recurrence_pattern' => 'array',
        'meta_data' => 'array',
        'max_participants' => 'integer',
        'registered_participants' => 'integer',
    ];

    // Relationships
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    // Scopes
    public function scopeUpcoming($query)
    {
        return $query->where('status', 'upcoming')
                    ->where('start_datetime', '>', now());
    }

    public function scopeOngoing($query)
    {
        return $query->where('status', 'ongoing')
                    ->where('start_datetime', '<=', now())
                    ->where('end_datetime', '>=', now());
    }

    public function scopeCompleted($query)
    {
        return $query->where('status', 'completed')
                    ->orWhere(function($q) {
                        $q->where('end_datetime', '<', now());
                    });
    }

    public function scopeByType($query, $type)
    {
        return $query->where('event_type', $type);
    }

    public function scopeToday($query)
    {
        return $query->whereDate('start_datetime', today());
    }

    public function scopeThisWeek($query)
    {
        return $query->whereBetween('start_datetime', [
            now()->startOfWeek(),
            now()->endOfWeek()
        ]);
    }

    // Mutators
    public function setTitleAttribute($value)
    {
        $this->attributes['title'] = $value;
        $this->attributes['slug'] = Str::slug($value);
    }

    // Accessors
    public function getIsFullAttribute()
    {
        if (!$this->max_participants) {
            return false;
        }
        return $this->registered_participants >= $this->max_participants;
    }

    public function getAvailableSpotsAttribute()
    {
        if (!$this->max_participants) {
            return null;
        }
        return $this->max_participants - $this->registered_participants;
    }

    public function getDurationAttribute()
    {
        return $this->start_datetime->diffInMinutes($this->end_datetime);
    }

    public function getFormattedDateAttribute()
    {
        return $this->start_datetime->format('d F Y');
    }

    public function getFormattedTimeAttribute()
    {
        return $this->start_datetime->format('H:i') . ' - ' . $this->end_datetime->format('H:i');
    }

    // Methods
    public function canRegister()
    {
        return $this->status === 'upcoming' 
            && $this->start_datetime > now()
            && !$this->is_full;
    }

    public function updateStatus()
    {
        $now = now();
        
        if ($this->end_datetime < $now) {
            $this->status = 'completed';
        } elseif ($this->start_datetime <= $now && $this->end_datetime >= $now) {
            $this->status = 'ongoing';
        } elseif ($this->start_datetime > $now) {
            $this->status = 'upcoming';
        }
        
        $this->save();
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}