@extends('student.main')
@section('style')
    <link rel="stylesheet" href="{{ asset('css/notice-board.css') }}" type="text/css">
@endsection
@section('content')
    <div class="container m-2">
        <div class="main-content col-md-12">
            <div id="content" role="main">

                @foreach ($notices as $notice)
                    <div class="blog-posts posts-large">
                        <article class="post post-large ">
                            <div class="post-date">
                                <span class="day">{{ date('d', strtotime($notice->date)) }}</span>
                                <span class="month">{{ date('M', strtotime($notice->date)) }}</span>
                            </div>

                            <div class="post-content" style="color: #009324">
                                <h2 class="entry-title">
                                    <a href="#" style="color: #009324">
                                        {{ $notice->title }}
                                    </a>
                                </h2>
                                <p class="text-muted">
                                    {{ substr($notice->details, 0, 150) }}...
                                </p>

                                <span class="updated" style="">{{ date('d-m-Y', strtotime($notice->date)) }},+06:00</span>

                                <a class="btn btn-xs btn-success pt-right" href="{{ route('notice_read_more',$notice->id) }}">
                                    Read more...
                                </a>
                            </div>
                        </article>
                    </div>
                @endforeach

                <div>
                    <span>{{ $notices->links() }}</span>
                </div>

            </div>
        </div>
    </div>
@endsection
