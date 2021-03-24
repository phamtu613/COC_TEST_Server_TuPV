@extends('client.layouts.master')

@section('title', 'Register course')

@section('css')
    <link rel="stylesheet" href="{{ asset('client/css/resgiterCourse.css') }}">
@endsection

@section('content')
    <div class="container">
        <div class="main-content">
            <p class="title">Course Registration</p>
            {{-- Alert message --}}
            @if (session('status'))
                <div class="alert alert-success mb-3">
                    {{ session('status') }}
                </div>
            @endif
            <form action="{{ route('client.register-course.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-8 main-form">
                        {{-- your name --}}
                        <div class="form-group row">
                            <label for="name" class="col-sm-3 col-form-label">Your name <span
                                    class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <input class="form-control" name="name" type="text" placeholder="Mac Donald" id="name"
                                    value="{{ old('name') }}">
                                @error('name')
                                    <small class="d-block text-left form-text text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                        </div>

                        {{-- Date of birth --}}
                        <div class="form-group row">
                            <label for="birthday" class="col-sm-3 col-form-label">Date of birth <span
                                    class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <input class="form-control" name="birthday" type="date" id="birthday"
                                    value="{{ old('birthday') }}">
                                @error('birthday')
                                    <small class="d-block text-left form-text text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>

                        {{-- Address --}}
                        <div class="form-group row">
                            <label for="address" class="col-sm-3 col-form-label">Address <span
                                    class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <input class="form-control" name="address" type="text" id="address"
                                    placeholder="1600 Pennsylvania Avenue NW, Wasi..." value="{{ old('address') }}">
                                @error('address')
                                    <small class="d-block text-left form-text text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>

                        {{-- Mobile --}}
                        <div class="form-group row">
                            <label for="tel" class="col-sm-3 col-form-label">Mobile <span
                                    class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <input class="form-control" name="tel" type="text" id="tel" placeholder="0102030405"
                                    value="{{ old('tel') }}">
                                @error('tel')
                                    <small class="d-block text-left form-text text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>

                        {{-- Email --}}
                        <div class="form-group row">
                            <label for="email" class="col-sm-3 col-form-label">Email<span
                                    class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <input class="form-control" name="email" type="email" id="email"
                                    placeholder="email@gmail.com" value="{{ old('email') }}">
                                @error('email')
                                    <small class="d-block text-left form-text text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>

                        {{-- Start date --}}
                        <div class="form-group row">
                            <label for="start_date" class="col-sm-3 col-form-label">Start date <span
                                    class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <input class="form-control" name="start_date" type="date" id="start_date"
                                    min="{{ $today }}" value="{{ old('start_date') }}">
                                @error('start_date')
                                    <small class="d-block text-left form-text text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>

                        {{-- Start time --}}
                        <div class="form-group row">
                            <label for="start_study" class="col-sm-3 col-form-label">Start time <span
                                    class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <select class="form-control" aria-label="Default select example" name="start_study">
                                    <option value="0">hh:mm</option>
                                    @foreach ($listStartTime as $startTime)
                                        <option value="{{ $startTime->id }}"
                                            {{ old('start_study') == $startTime->id ? 'selected' : '' }}>
                                            {{ $startTime->start_study }}</option>
                                    @endforeach
                                </select>
                                @error('start_study')
                                    <small class="d-block text-left form-text text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>

                        {{-- Learning hour --}}
                        <div class="form-group row">
                            <label for="time_lesson" class="col-sm-3 col-form-label">Learning hour <span
                                    class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <select class="form-control" name="time_lesson">
                                    @foreach ($listLearningHour as $learningHour)
                                        <option value="{{ $learningHour->id }}"
                                            {{ old('time_lesson') == $learningHour->id ? 'selected' : '' }}>
                                            {{ $learningHour->time_lesson }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('time_lesson')
                                    <small class="d-block text-left form-text text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>

                        {{-- Duration --}}
                        <div class="form-group row">
                            <label for="duration" class="col-sm-3 col-form-label">Duration <span
                                    class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <select class="form-control" name="duration" id="duration">
                                    @foreach ($listDuration as $duration)
                                        <option value="{{ $duration->id }}"
                                            {{ old('duration') == $duration->id ? 'selected' : '' }}>
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
                                    <small class="d-block text-left form-text text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>

                        {{-- Course --}}
                        <div class="form-group row">
                            <label for="course" class="col-sm-3 col-form-label">Course <span
                                    class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <select class="form-control" name="course" id="course">
                                    @foreach ($listCourse as $course)
                                        <option value="{{ $course->id }}"
                                            {{ old('course') == $course->id ? 'selected' : '' }}>{{ $course->name }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('course')
                                    <small class="d-block text-left form-text text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                    </div>


                    <div class="col-md-4 avatar">
                        {{-- Avatar --}}
                        <p class="title">Your picture <span class="text-danger">*</span></p>
                        <div class="thumb-img">
                            <img src="{{ asset('client/img/image-user.png') }}" alt="avatar" id="avatar">
                            <input class="d-none" id="file-avatar" type="file" name="avatar" />
                            <div class="preview-upload">
                                <img id='img-upload' />
                            </div>
                            @error('avatar')
                                <small class="d-block text-left form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="text-center mx-auto">
                        <button type="submit" class="btn btn-primary btn-register">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('custom-scripts')
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
@endsection
