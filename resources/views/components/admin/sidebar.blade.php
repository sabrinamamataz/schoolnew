<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="sb-sidenav-menu-heading"></div>
                <a class="nav-link collapsed" href="{{ route('subject_list') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Subject
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <a class="nav-link collapsed" href="{{ route('class_admin_dashboard') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Class
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <a class="nav-link collapsed" href="{{ route('section_admin_dashboard') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Section
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <a class="nav-link collapsed" href="{{ route('student_list') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Student list
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <a class="nav-link collapsed" href="{{ route('period_page') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Class Period
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <a class="nav-link collapsed" href="{{ route('routine_admin_dashboard') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                    Routine
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                {{-- <a class="nav-link collapsed" href="#">
                    <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                    Fee
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a> --}}

                {{-- <a class="nav-link collapsed" href="#">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Result
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a> --}}

                {{-- <a class="nav-link collapsed" href="#">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Notice Board
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a> --}}

                 <a class="nav-link collapsed" href="{{ route('attendance_admin') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Attendence
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a> 
            </div>
        </div>
    </nav>
</div>
