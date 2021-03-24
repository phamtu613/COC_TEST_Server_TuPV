<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\RegisterCourse;
use App\Models\StartTime;
use App\Models\LearningHour;
use App\Models\Duration;
use App\Http\Requests\Admin\RegisterCourseRequest;

class RegisterCourseController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index(Request $request)
	{
		$status = $request->input('status');

		//set default list_action
		$listAction = ["delete" => "Temporary delete"];

		if ($status == 'trash') {

			//set list_action with url trash
			$listAction = [
				"restore" => "Restore",
				"forceDelete" => "Permanently delete",
			];
			$listRegister = RegisterCourse::onlyTrashed()->orderBy('id', 'DESC')->get();
		} else {
			$listRegister = RegisterCourse::orderBy('id', 'DESC')->get();
		}

		// The number of records does not include the trash
		$count_knowledge_active = RegisterCourse::count();

		// Number of trash bins
		$count_knowledge_trash = RegisterCourse::onlyTrashed()->count();

		$count = [$count_knowledge_active, $count_knowledge_trash];

		return view('admin.pages.register-course.list', compact('listRegister', 'listAction', 'count'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request)
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id)
	{
		//
	}

	public function edit($id)
	{
		$listStartTime = StartTime::all();
		$listLearningHour = LearningHour::all();
		$listDuration = Duration::all();
		$listCourse = Course::all();

		$registerCourse = RegisterCourse::find($id);
		return view('admin.pages.register-course.edit', compact('registerCourse', 'listStartTime', 'listLearningHour', 'listDuration', 'listCourse'));
	}


	public function update(RegisterCourseRequest $request, $id)
	{
		$registerCourse = RegisterCourse::find($id);
		$avatar = $registerCourse->avatar;

		// user's avatar
		if ($request->hasFile('avatar')) {
			if (file_exists($avatar)) {
				unlink($avatar);
			}

			$file = $request->avatar;

			// get name file
			$fileName =  time() . $file->getClientOriginalName();

			// to host
			$path = $file->move('public/uploads', $fileName);

			$avatar = 'public/uploads/' . $fileName;

			$request->avatar = $avatar;
		} else {
			$request->avatar = $avatar;
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

		RegisterCourse::where('id', $id)->update([
			'name' => $request->name,
			'birthday' => $request->birthday,
			'address' => $request->address,
			'tel' => $request->tel,
			'email' => $request->email,
			'avatar' => $request->avatar,
			'start_date' => $request->start_date,
			'end_date' => $endDate,
			'end_time' => $endTime,
			'duration_id' => $request->duration,
			'course_id' => $request->course,
			'start_study_id' => $request->start_study,
			'time_lesson_id' => $request->time_lesson,
		]);

		return redirect()->back()->with('status', 'Successfully updated user\'s registration information');
	}

	public function destroy($id)
	{
		//
	}


	public function action(Request $request)
	{
		$list_check = $request->input('list_check');

		if ($list_check) {
			$action = $request->input('action');

			if ($action == 'Choose') {
				return redirect()->route('register-course.index')->with('error', 'Please select an action to perform');
			}

			if ($action == 'delete') {
				RegisterCourse::destroy($list_check);
				return redirect()->route('admin.register-course.index')->with('success', 'You have successfully deleted');
			}

			if ($action == 'restore') {
				RegisterCourse::onlyTrashed()
					->whereIn('id', $list_check)
					->restore();
				return redirect()->route('admin.register-course.index')->with('success', 'You have successfully restored');
			}

			if ($action == 'forceDelete') {
				RegisterCourse::onlyTrashed()
					->whereIn('id', $list_check)
					->forceDelete();
				return redirect()->route('admin.register-course.index')->with('success', 'You have successfully deleted permanently');
			}
		} else {
			return back()->with('error', 'You must choose register to manipulate');
		}
	}
}
