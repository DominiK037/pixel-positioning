<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Job extends Model
{
    use HasFactory;

    //  Job belongs to Employer
    public function employer(): belongsTo
    {
        return $this->belongsTo(Employer::class);
    }

    //  Job has many tags
    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class);
    }

    public function tag(string $name): void
    {
        $tag = Tag::firstOrCreate(['name' => $name]);
        $this->tags()->attach($tag);
    }
}
