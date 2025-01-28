<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{
    protected $fillable = [
        'user_id',
        'last_name',
        'first_name',  // Removed the extra space
        'gender',
        'dob',
        'birthplace',
        'residence',    // Removed the extra space
        'marital_status', // Removed the extra space
        'children_count',
        'disability',
        'cv',
        'cover_letter',
        'sector',
        'job_id',
        'experience_2',
        'experience_comments',
        'degree',
        'institution',
        'degree_title',
        'graduation_year',
        'specialty',
        'other_degrees',
    ];
}
