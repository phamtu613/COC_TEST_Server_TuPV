<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegisterCoursesTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('register_courses', function (Blueprint $table) {
			$table->id();
			$table->string('name', 100);
			$table->date('birthday');
			$table->string('address');
			$table->string('tel', 11);
			$table->string('email');
			$table->text('avatar');
			$table->date('start_date'); // nhập
			$table->date('end_date');
			$table->time('end_time');
			$table->unsignedBigInteger('duration_id');
			$table->foreign('duration_id')->references('id')->on('durations')->onDelete('cascade');
			$table->unsignedBigInteger('course_id');
			$table->foreign('course_id')->references('id')->on('courses')->onDelete('cascade');
			$table->unsignedBigInteger('start_study_id');
			$table->foreign('start_study_id')->references('id')->on('start_times')->onDelete('cascade');
			$table->unsignedBigInteger('time_lesson_id');
			$table->foreign('time_lesson_id')->references('id')->on('learning_hours')->onDelete('cascade');
			$table->softDeletes();
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('register_courses');
	}
}
