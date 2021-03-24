<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RegisterCourse extends Model
{
	use SoftDeletes;
	protected $fillable = ['name', 'birthday', 'address', 'tel', 'email', 'avatar', 'start_date', 'end_date', 'end_time', 'duration_id', 'course_id', 'start_study_id', 'time_lesson_id'];

	public function course()
	{
		return $this->belongsTo('App\Models\Course', 'course_id');
	}
}
