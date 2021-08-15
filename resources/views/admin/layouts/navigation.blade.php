<div class="navbar-content">
    <ul class="pc-navbar">
        <li class="pc-item pc-caption">
            <label>Navigation</label>
        </li>
        <li class="pc-item pc-hasmenu">
            <a href="{{route('dashboard')}}" class="pc-link"><span class="pc-mtext">Dashboard</span></a>
        </li>
        <li class="pc-item pc-hasmenu">
            <a href="#!" class="pc-link "><span class="pc-micon"><i class="material-icons-two-tone">library_books</i></span><span class="pc-mtext">Course</span><span class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
            <ul class="pc-submenu">
                <li class="pc-item"><a class="pc-link" href="{{route('course.index')}}"><span class="pc-micon"><i class="material-icons-two-tone">library_books</i></span>Course</a></li>
                <li class="pc-item"><a class="pc-link" href="{{route('coursecategory.index')}}"><span class="pc-micon"><i class="material-icons-two-tone">category</i></span>Category</a></li>
            </ul>
        </li>
        <li class="pc-item pc-hasmenu">
            <a href="#!" class="pc-link "><span class="pc-micon"><i class="material-icons-two-tone">library_books</i></span><span class="pc-mtext">Page</span><span class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
            <ul class="pc-submenu">
                <li class="pc-item"><a class="pc-link" href="#"><span class="pc-micon"><i class="material-icons-two-tone">library_books</i></span>Course</a></li>
                <li class="pc-item"><a class="pc-link" href="#"><span class="pc-micon"><i class="material-icons-two-tone">category</i></span>Category</a></li>
            </ul>
        </li>
       <li class="pc-item pc-caption">
            <label>Masters</label>
            <span>Master Setting for App</span>
        </li>
        <li class="pc-item"><a href="{{route('master_dashboard')}}" class="pc-link "><span class="pc-micon"><i class="material-icons-two-tone">settings</i></span><span class="pc-mtext">Master Setting</span></a></li>
        <li class="pc-item"><a href="sample-page.html" class="pc-link "><span class="pc-micon"><i class="material-icons-two-tone">storefront</i></span><span class="pc-mtext">Sample page</span></a></li>

    </ul>
</div>