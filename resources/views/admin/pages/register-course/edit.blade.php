@extends('admin.layouts.master')

@section('link')
    <link rel="stylesheet" href="{{ asset('client/css/resgiterCourse.css') }}">
    @parent
@endsection

@section('content')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                </div>
                <h4 class="page-title">Update user's registration information
                    <a href="{{ route('admin.register-course.index') }}" class="text-white d-inline-block ml-2">
                        <button type="button" class="btn btn-success waves-effect waves-light">List register</button>
                    </a>
                </h4>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-sm-12">
            <div class="card-box">
                <div class="row">
                    <div class="col-lg-12 px-0">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                        <div class="wp-content py-0">
                            <div class="main-content pb-0 pt-2 px-3">
                                <form action="{{ route('admin.register-course.update', $registerCourse->id) }}"
                                    method="post" enctype="multipart/form-data">
                                    @method('PUT')
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-8 main-form">
                                            {{-- your name --}}
                                            <div class="form-group row">
                                                <label for="name" class="col-sm-3 col-form-label">Your name</label>
                                                <div class="col-sm-9">
                                                    <input class="form-control" name="name" type="text"
                                                        placeholder="Mac Donald" id="name"
                                                        value="{{ $registerCourse->name }}">
                                                    @error('name')
                                                        <small
                                                            class="d-block text-left form-text text-danger">{{ $message }}</small>
                                                    @enderror
                                                </div>

                                            </div>

                                            {{-- Date of birth --}}
                                            <div class="form-group row">
                                                <label for="birthday" class="col-sm-3 col-form-label">Date of birth</label>
                                                <div class="col-sm-9">
                                                    <input class="form-control" name="birthday" type="date" id="birthday"
                                                        value="{{ $registerCourse->birthday }}">
                                                    @error('birthday')
                                                        <small
                                                            class="d-block text-left form-text text-danger">{{ $message }}</small>
                                                    @enderror
                                                </div>
                                            </div>

                                            {{-- Address --}}
                                            <div class="form-group row">
                                                <label for="address" class="col-sm-3 col-form-label">Address</label>
                                                <div class="col-sm-9">
                                                    <input class="form-control" name="address" type="text" id="address"
                                                        placeholder="1600 Pennsylvania Avenue NW, Wasi..."
                                                        value="{{ $registerCourse->address }}">
                                                    @error('address')
                                                        <small
                                                            class="d-block text-left form-text text-danger">{{ $message }}</small>
                                                    @enderror
                                                </div>
                                            </div>

                                            {{-- Mobile --}}
                                            <div class="form-group row">
                                                <label for="tel" class="col-sm-3 col-form-label">Mobile</label>
                                                <div class="col-sm-9">
                                                    <input class="form-control" name="tel" type="text" id="tel"
                                                        placeholder="0102030405" value="{{ $registerCourse->tel }}">
                                                    @error('tel')
                                                        <small
                                                            class="d-block text-left form-text text-danger">{{ $message }}</small>
                                                    @enderror
                                                </div>
                                            </div>

                                            {{-- Email --}}
                                            <div class="form-group row">
                                                <label for="email" class="col-sm-3 col-form-label">Email</label>
                                                <div class="col-sm-9">
                                                    <input class="form-control" name="email" type="email" id="email"
                                                        placeholder="email@gmail.com"
                                                        value="{{ $registerCourse->email }}">
                                                    @error('email')
                                                        <small
                                                            class="d-block text-left form-text text-danger">{{ $message }}</small>
                                                    @enderror
                                                </div>
                                            </div>

                                            {{-- Start date --}}
                                            <div class="form-group row">
                                                <label for="start_date" class="col-sm-3 col-form-label">Start date</label>
                                                <div class="col-sm-9">
                                                    <input class="form-control" name="start_date" type="date"
                                                        id="start_date" value="{{ $registerCourse->start_date }}">
                                                    @error('start_date')
                                                        <small
                                                            class="d-block text-left form-text text-danger">{{ $message }}</small>
                                                    @enderror
                                                </div>
                                            </div>

                                            {{-- Start time --}}
                                            <div class="form-group row">
                                                <label for="start_study" class="col-sm-3 col-form-label">Start time</label>
                                                <div class="col-sm-9">
                                                    <select class="form-control" aria-label="Default select example"
                                                        name="start_study">
                                                        <option value="0">hh:mm</option>
                                                        @foreach ($listStartTime as $startTime)
                                                            <option value="{{ $startTime->id }}"
                                                                {{ $registerCourse->start_study_id == $startTime->id ? 'selected' : '' }}>
                                                                {{ $startTime->start_study }}</option>
                                                        @endforeach
                                                    </select>
                                                    @error('start_study')
                                                        <small
                                                            class="d-block text-left form-text text-danger">{{ $message }}</small>
                                                    @enderror
                                                </div>
                                            </div>

                                            {{-- Learning hour --}}
                                            <div class="form-group row">
                                                <label for="time_lesson" class="col-sm-3 col-form-label">Learning
                                                    hour</label>
                                                <div class="col-sm-9">
                                                    <select class="form-control" name="time_lesson">
                                                        @foreach ($listLearningHour as $learningHour)
                                                            <option value="{{ $learningHour->id }}"
                                                                {{ $registerCourse->time_lesson_id == $learningHour->id ? 'selected' : '' }}>
                                                                {{ $learningHour->time_lesson }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                    @error('time_lesson')
                                                        <small
                                                            class="d-block text-left form-text text-danger">{{ $message }}</small>
                                                    @enderror
                                                </div>
                                            </div>

                                            {{-- Duration --}}
                                            <div class="form-group row">
                                                <label for="duration" class="col-sm-3 col-form-label">Duration</label>
                                                <div class="col-sm-9">
                                                    <select class="form-control" name="duration" id="duration">
                                                        @foreach ($listDuration as $duration)
                                                            <option value="{{ $duration->id }}"
                                                                {{ $registerCourse->duration_id == $duration->id ? 'selected' : '' }}>
                                                                {{ $duration->duration }}
                                                                @if ($duration->duration == 01)
                                                                    month
                                                                @else
                                                                    months
                                                                @endif
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                    @error('duration')
                                                        <small
                                                            class="d-block text-left form-text text-danger">{{ $message }}</small>
                                                    @enderror
                                                </div>
                                            </div>

                                            {{-- Course --}}
                                            <div class="form-group row">
                                                <label for="course" class="col-sm-3 col-form-label">Course</label>
                                                <div class="col-sm-9">
                                                    <select class="form-control" name="course" id="course">
                                                        @foreach ($listCourse as $course)
                                                            <option value="{{ $course->id }}"
                                                                {{ $registerCourse->course_id == $course->id ? 'selected' : '' }}>
                                                                {{ $course->name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                    @error('course')
                                                        <small
                                                            class="d-block text-left form-text text-danger">{{ $message }}</small>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        {{-- Avatar --}}
                                        <div class="col-md-4 avatar">
                                            <p class="title">Your picture</p>
                                            <div class="thumb-img">
                                                <img src="{{ url($registerCourse->avatar) }}" alt="avatar" id="avatar">
                                                <input class="d-none" id="file-avatar" type="file" name="avatar" />
                                                <div class="preview-upload">
                                                    <img id='img-upload' />
                                                </div>
                                                @error('avatar')
                                                    <small
                                                        class="d-block text-left form-text text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>

                                            <div class="form-group text-left mt-4 ml-4">
                                                <label for="end_date">End date</label>
                                                <input type="text" class="form-control not-allowed" id="end_date"
                                                    aria-describedby="emailHelp" value="{{ $registerCourse->end_date }}"
                                                    disabled>
                                            </div>
                                            <div class="form-group text-left ml-4">
                                                <label for="end_time" class="col-form-label">End time</label>
                                                <input type="text" class="form-control not-allowed" id="end_time"
                                                    aria-describedby="emailHelp" value="{{ $registerCourse->end_time }}"
                                                    disabled>
                                            </div>
                                        </div>
                                        <div class="text-center mx-auto">
                                            <button type="submit" class="btn btn-primary btn-register">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->
            </div>
        </div>
    </div>
    <!-- end row -->

@endsection

@section('js')
    <script>
        $(document).ready(function() {
            $('#avatar').on('click', function() {
                $('#file-avatar').trigger('click');
            });
        });

        // Use FileReader to read data before upload to Server
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#img-upload').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }

        $("#file-avatar").change(function() {
            $(".preview-upload").addClass("d-block");
            $("#avatar").addClass("d-none");
            readURL(this);
        });

    </script>
    @parent
@endsection
