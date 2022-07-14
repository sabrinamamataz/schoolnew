<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="sb-sidenav-menu-heading"></div>
                <a class="nav-link collapsed" href="{{ route('student_dashboard') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Dashboard
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-left"></i></div>
                </a>
                <a class="nav-link" href='{{ route('routine_student_dashboard') }}'>
                    <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                    Routine
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <a class="nav-link" href="{{ route('student_attendance') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Attendence
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <a class="nav-link" href="{{ route('student_study_materials') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Study Materials
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <a class="nav-link" href='{{ route('student_profile') }}'>
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Update profile
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <a class="nav-link" href="{{ route('notice_student_dashboard') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Notice Board
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
            </div>
        </div>
    </nav>
</div>
