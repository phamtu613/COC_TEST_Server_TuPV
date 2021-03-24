@extends('admin.layouts.master')
@section('content')

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <h4 class="page-title">REGISTER LIST</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <div class="analytic">
                        <a href="{{ request()->fullUrlWithQuery(['status' => 'active']) }}"
                            class="text-primary">Activated<span class="text-muted pr-3">({{ $count[0] }})</span></a>
                        <a href="{{ request()->fullUrlWithQuery(['status' => 'trash']) }}"
                            class="text-primary">Disable<span class="text-muted">({{ $count[1] }})</span></a>
                    </div>

                    <form action="{{ route('admin.register-course.action') }}">
                        <div class="form-action form-inline py-3">
                            <a href="{{ route('client.register-course.index') }}"
                                class="text-white d-inline-block mr-3"><button type="button"
                                    class="btn btn-success waves-effect waves-light">Add</button></a>
                            <select class="form-control mr-1" id="" name="action">
                                <option>Choose</option>
                                @foreach ($listAction as $key => $value)
                                    <option value="{{ $key }}">{{ $value }}</option>
                                @endforeach
                            </select>
                            <input type="submit" name="btn-search" value="Submit" class="btn btn-primary">
                        </div>

                        @if (session('status'))
                            {{ session('status') }}
                </div>
                @endif

                @if (session('error'))
                    <div class="alert alert-warning">
                        {{ session('error') }}
                    </div>
                @endif
                <div class="table-responsive">
                    <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap"
                        style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                            <tr>
                                <th>
                                    <input type="checkbox" name="checkall" id="all">
                                </th>
                                <th>Id</th>
                                <th>Name</th>
                                <th>DOB</th>
                                <th>Address</th>
                                <th>Tel</th>
                                <th>Email</th>
                                <th>Image</th>
                                <th>Start date</th>
                                <th>End date</th>
                                <th>Start time</th>
                                <th>End time</th>
                                <th>Course</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($listRegister as $key => $register)
                                <tr>
                                    <td>
                                        <input type="checkbox" name="list_check[]" value="{{ $register->id }}">
                                    </td>
                                    <td>{{ $register->id }}</td>
                                    <td>{{ $register->name }}</td>
                                    <td>{{ $register->birthday }}</td>
                                    <td>{{ $register->address }}</td>
                                    <td>{{ $register->tel }}</td>
                                    <td>{{ $register->email }}</td>
                                    <td><img width="60px" height="60px" style="object-fit: cover"
                                            src="{{ url($register->avatar) }}" alt="">
                                    </td>
                                    <td>{{ $register->start_date }}</td>
                                    <td>{{ $register->end_date }}</td>
                                    <td>{{ $register->start_time }}</td>
                                    <td>{{ $register->end_time }}</td>
                                    <td>{{ $register->course->name }}</td>
                                    <td colspan="2">
                                        <a href="{{ route('admin.register-course.edit', $register->id) }}"
                                            class="d-inline-block">
                                            <button type="button"
                                                class="btn btn-icon waves-effect waves-light btn-info mr-2" title="Edit"> <i
                                                    class="mdi mdi-square-edit-outline"></i>
                                                Edit</button>
                                        </a>
                                        <a href="#custom-modal-{{ $register->id }}" class="d-inline-block"
                                            data-animation="fadein" data-plugin="custommodal" data-overlayspeed="200"
                                            data-overlaycolor="#36404a">
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                </form>
            </div>
        </div>
    </div>
    </div>
    <!-- end row -->

@endsection

@section('js')
    <script>
        $('#datatable').DataTable({
            "pageLength": 10,
            "lengthMenu": [
                [10, 15, 25, 35, 50, 100, -1],
                [10, 15, 25, 35, 50, 100, "All"]
            ]
        });
        $("#all").click(function() {
            $('input:checkbox').not(this).prop('checked', this.checked);
        });

    </script>
    @parent
@endsection
