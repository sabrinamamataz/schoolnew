@extends('admin.main')
@section('style')
@endsection
@section('content')
    <div class="container-fluid px-4">
        <div class="d-flex justify-content-between">
            <h1 class="mt-4">Admin Dashboard</h1>
            @include('clock')
        </div>
        <div class="row">
            <div class="col-xl-3 col-md-6">
                <div class="card bg-primary text-white mb-4">
                    <div class="card-body">
                        <h3>Students</h3>
                        <div class="d-flex align-items-center justify-content-end">
                            <a class="h3 text-white text-decoration-none"
                                href="{{ route('student_list', 0) }}">{{ $students }}</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card bg-danger text-white mb-4">
                    <div class="card-body">
                        <h3>Teachers</h3>
                        <div class="d-flex align-items-center justify-content-end">
                            <a class="h3 text-white text-decoration-none"
                                href="{{ route('teacher_list') }}">{{ $teachers }}</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card bg-warning text-white mb-4">
                    <div class="card-body">
                        <h3>Subjects</h3>
                        <div class="d-flex align-items-center justify-content-end">
                            <a class="h3 text-white text-decoration-none"
                                href="{{ route('subject_list') }}">{{ $subjects }}</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card bg-success text-white mb-4">
                    <div class="card-body">
                        <h3>Classes</h3>
                        <div class="d-flex align-items-center justify-content-end">
                            <a class="h3 text-white text-decoration-none"
                                href="{{ route('class_admin_dashboard') }}">{{ $classes }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <h3 class="px-2">School Management system quick icon</h3>
        <hr>
        <div>
            <div class="row p-2">
                <div class="col-2 text-center">
                    <div class="card bg-secondary text-white mb-4">
                        <a class="text-white" href="{{ route('subject_list') }}">
                            <div class="card-body">
                                <i class="fas fa-chalkboard-teacher fa-6x"></i>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-2 text-center">
                    <div class="card bg-secondary text-white mb-4">
                        <a class="text-white" href="{{ route('class_admin_dashboard') }}">
                            <div class="card-body">
                                <i class="fas fa-school fa-6x"></i>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-2 text-center">
                    <div class="card bg-secondary text-white mb-4">
                        <a class="text-white" href="{{ route('section_admin_dashboard') }}">
                            <div class="card-body">
                                <i class="fas fa-puzzle-piece fa-6x"></i>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-2 text-center">
                    <div class="card bg-secondary text-white mb-4">
                        <a class="text-white" href="{{ route('teacher_list') }}">
                            <div class="card-body">
                                <i class="fa-solid fa-graduation-cap fa-6x"></i>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-2 text-center">
                    <div class="card bg-secondary text-white mb-4">
                        <a class="text-white" href="{{ route('student_list', 0) }}">
                            <div class="card-body">
                                <i class="fas fa-users fa-6x"></i>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-2 text-center">
                    <div class="card bg-secondary text-white mb-4">
                        <a class="text-white" href="{{ route('period_page') }}">
                            <div class="card-body">
                                <i class="fas fa-concierge-bell fa-6x"></i>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-2 text-center">
                    <div class="card bg-secondary text-white mb-4">
                        <a class="text-white" href="{{ route('routine_admin_dashboard') }}">
                            <div class="card-body">
                                <i class="fas fa-list-alt fa-6x"></i>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-2 text-center">
                    <div class="card bg-secondary text-white mb-4">
                        <a class="text-white" href="{{ route('attendance_admin') }}">
                            <div class="card-body">
                                <i class="fas fa-calendar-check fa-6x"></i>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-2 text-center">
                    <div class="card bg-secondary text-white mb-4">
                        <a class="text-white" href="{{ route('admin_study_materials') }}">
                            <div class="card-body">
                                <i class="fa-solid fa-box fa-6x"></i>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-2 text-center">
                    <div class="card bg-secondary text-white mb-4">
                        <a class="text-white" href="{{ route('notice_admin_dashboard') }}">
                            <div class="card-body">
                                <i class="fas fa-chalkboard-teacher fa-6x"></i>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
@endsection
