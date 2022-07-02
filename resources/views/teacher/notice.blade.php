@extends('teacher.main')
@section('style')
    <link rel="stylesheet" href="{{ asset('css/notice-board.css') }}" type="text/css">
@endsection
@section('content')
    <div class="page-wrapper">
        <div id="main" class="column2 column2-left-sidebar boxed">
            <div class="container">
                <div class="row">
                    <div class="main-content col-md-9">
                        <div id="content" role="main">

                            {{-- @foreach ($notices as $notice) --}}
                            <div class="blog-posts posts-large">
                                <article class="post post-large ">
                                    <div class="post-date">
                                        <span class="day">29</span>
                                        <span class="month">Jun</span>
                                    </div>

                                    <div class="post-content">
                                        <h2 class="entry-title">
                                            <a href="#">
                                                High Court Viva of 30-06-2022 will start at 5:30 PM
                                            </a>
                                        </h2>

                                        <span class="vcard" style="">
                                            <span class="fn">
                                                <a href="#" title="Posts by Bangladesh Bar Council" rel="author">
                                                    Bangladesh Bar Council
                                                </a>
                                            </span>
                                        </span>
                                        <span class="updated" style="">2022-06-29T19:51:27+06:00</span>

                                        <a class="btn btn-xs btn-primary pt-right" href="#">
                                            Read more...
                                        </a>
                                    </div>
                                </article>
                            </div>
                            {{-- @endforeach --}}

                            <div class="pagination" role="navigation">
                                <span aria-current="page" class="page-numbers current">1</span>
                                <a class="page-numbers" href="#">2</a>
                                <span class="page-numbers dots">…</span>
                                <a class="page-numbers" href="#">27</a>
                                <a class="next page-numbers" href="#">Next →</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
