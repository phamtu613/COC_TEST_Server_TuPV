<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\RegisterCourse;
use App\Models\StartTime;
use App\Models\LearningHour;
use App\Models\Duration;
use App\Models\Course;
use App\Http\Requests\Client\RegisterCourseRequest;
use App\Mail\RegisterCourseMail;
use Illuminate\Support\Facades\Mail;

class RegisterCourseController extends Controller
{
	public function index()
	{
		$listStartTime = StartTime::all();
		$listLearningHour = LearningHour::all();
		$listDuration = Duration::all();
		$listCourse = Course::all();
		$today = (date('Y-m-d'));
		return view('client.pages.register-course', compact('listStartTime', 'listLearningHour', 'listDuration', 'listCourse', 'today'));
	}

	public function store(RegisterCourseRequest $request)
	{
		// Upload avatar
		if ($request->hasFile('avatar')) {
			$file = $request->avatar;

			// get name file
			$fileName =  time() . $file->getClientOriginalName();

			$path = $file->move('public/uploads', $fileName);
			$avatar = 'public/uploads/' . $fileName;

			$request->avatar = $avatar;
		} else {
			$request->avatar = 'public/client/img/image-user.png';
		}

		// handle end date & end time 
		$duration = $request->duration;
		$arrStartDate =	explode('-', $request->start_date); // ['y', 'm', 'd']

		$start_time = StartTime::find($request->start_study);
		$arr_start_time = explode(':', $start_time->start_study); // ['h', 'm', 's'];

		$learningHour = LearningHour::find($request->time_lesson);
		$arrLearningHour = explode(':', $learningHour->time_lesson); // ['h', 'm', 's'];

		// mktime($hour, $minute, $second, $month, $day, $year);
		$endCourse = date("Y-m-d H:i:s", mktime($arr_start_time['0'] + $arrLearningHour['0'], $arr_start_time['1'] + $arrLearningHour['1'], $arr_start_time['2'] + $arrLearningHour['2'], $arrStartDate['1'] + $duration, $arrStartDate['2'], $arrStartDate['0']));

		$endDate = date("Y-m-d", strtotime($endCourse));
		$endTime = date("H:i:s", strtotime($endCourse));

		RegisterCourse::create([
			'name' => $request->name,
			'birthday' => $request->birthday,
			'address' => $request->address,
			'tel' => $request->tel,
			'email' => $request->email,
			'avatar' => $request->avatar,
			'start_date' => $request->start_date,
			'end_date' => $endDate,
			'end_time' => $endTime,
			'duration_id' => $duration,
			'course_id' => $request->course,
			'start_study_id' => $request->start_study,
			'time_lesson_id' => $request->time_lesson,
		]);

		// Detail course register
		$course = Course::where('id', $request->course)->first();

		// Detail course register
		$startStudy = StartTime::where('id', $request->start_study)->first();

		// data send mail
		$data = [
			'name' => $request->name,
			'birthday' => $request->birthday,
			'address' => $request->address,
			'tel' => $request->tel,
			'email' => $request->email,
			'course_name' => $course->name,
			'start_date' => $request->start_date,
			'end_date' => $endDate,
			'start_study' => $startStudy->start_study,
			'end_time' => $endTime,
		];

		// send mail
		Mail::to($request->email)
			->cc(['phamtu.ued@gmail.com'])
			->send(new RegisterCourseMail($data));

		return redirect()->back()->with('status', 'Successful course registration');
	}
}
