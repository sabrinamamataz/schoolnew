@extends('teacher.main')
@section('style')
    <link rel="stylesheet" href="{{ asset('css/notice-board.css') }}" type="text/css">
@endsection
@section('content')
    <article class="post post-large">
        <div class="post-date m-1">
            <span class="day">{{ date('d', strtotime($notice->date)) }}</span>
            <span class="month">{{ date('M', strtotime($notice->date)) }}</span>
        </div>

        <div class="post-content">
            <h2 class="entry-title mt-3" style="color: #009324">{{ $notice->title }}2</h2>

            <div class="post-meta">
                <span>
                    <i class="fa fa-user"></i>
                    By
                    <a href="#" title="School authority" rel="author">School
                        authority
                    </a>
                </span>
                <span>
                    <i class="fa fa-folder-open"></i>
                    <a href="#" rel="category tag">
                        General Notice
                    </a>,
                    <a href="#" rel="category tag">
                        Notice Board
                    </a>
                </span>
                <span>
                    <i class="fa fa-comments"></i>
                    <a href="#">
                        0 Comments
                    </a>,
                </span>
                <span class="updated">
                    <i class="fas fa-history"></i>
                    <a href="#">
                        {{ date('d/m/Y - h:i a', strtotime($notice->date)) }},+06:00
                    </a>
                </span>
            </div>
            <hr>

            <div class="entry-content">
                <p>
                    {{ $notice->details }}
                </p>
            </div>

        </div>

        <div class="p-5"></div>

        <div class="post-block post-share">
            <a href="{{ route('notice_student_dashboard') }}" type="button" class="h3 text-danger"
                style="text-decoration:none;">
                <i class="fa fa-share"></i>
                Go back
            </a>
        </div>




    </article>
@endsection


