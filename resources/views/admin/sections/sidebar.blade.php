<!-- Left Sidebar -->
<aside id="leftsidebar" class="sidebar">
    <div class="navbar-brand">
        <button class="btn-menu ls-toggle-btn" type="button"><i class="zmdi zmdi-menu"></i></button>
        <a href="#"><img src="{{ asset('admin/assets/images/logo.svg') }}" width="25" alt="Aero"><span class="m-l-10">Aero</span></a>
    </div>
    <div class="menu">
        <ul class="list">
            <li>
                <div class="user-info">
                    <a class="image" href="profile.html"><img src="{{ asset('admin/assets/images/profile_av.jpg') }}" alt="User"></a>
                    <div class="detail">
                        {{-- <h4>{{ Auth::user()->name  }}</h4> --}}
                        <small>Super Admin</small>
                    </div>
                </div>
            </li>
            <li class="{{ Request::is('admin/dashboard*') ? 'active' : '' }}">
                <a href="{{ route('dashboard') }}"><i class="zmdi zmdi-home"></i><span>Dashboard</span></a>
            </li>
            <li class="{{ Request::is('admin/category*') || Request::is('admin/portfolio*') || Request::is('admin/portfolio-pic*') ? 'active open' : '' }}">
                <a href="javascript:void(0);" class="menu-toggle waves-effect waves-block"><i class="zmdi zmdi-assignment"></i><span>Projects</span></a>
                <ul class="ml-menu">
                    <li class="{{ Request::is('admin/category*') ? 'active' : '' }}">
                        <a href="{{ route('admin.category.index') }}">Category</a>
                    </li>
                    <li class="{{ Request::is('admin/portfolio*') ? 'active' : '' }}">
                        <a href="{{ route('admin.portfolio.index') }}">Portfolios</a>
                    </li>
                    <li class="{{ Request::is('admin/portfolio-pic*') ? 'active' : '' }}">
                        <a href="{{ route('admin.portfolio-pic.index') }}">Portfolio Pictures</a>
                    </li>
                </ul>
            </li>
            <li class="{{ Request::is('admin/header*') ? 'active' : '' }}">
                <a href="{{ route('admin.header.index') }}"><i class="zmdi zmdi-home"></i><span>Home</span></a>
            </li>
            <li class="{{ Request::is('admin/about*') ? 'active' : '' }}">
                <a href="{{ route('admin.about.index') }}"><i class="zmdi zmdi-account"></i><span>About</span></a>
            </li>
            <li class="{{ Request::is('admin/count*') ? 'active' : '' }}">
                <a href="{{ route('admin.count.index') }}"><i class="zmdi zmdi-assignment-account"></i><span>Counts</span></a>
            </li>
            <li class="{{ Request::is('admin/skill*') ? 'active' : '' }}">
                <a href="{{ route('admin.skill.index') }}"><i class="zmdi zmdi-code-setting"></i><span>Skills</span></a>
            </li>
            <li class="{{ Request::is('admin/interest*') ? 'active' : '' }}">
                <a href="{{ route('admin.interest.index') }}"><i class="zmdi zmdi-star"></i><span>Interests</span></a>
            </li>
            <li class="{{ Request::is('admin/link*') ? 'active' : '' }}">
                <a href="{{ route('admin.link.index') }}"><i class="zmdi zmdi-link"></i><span>Social links</span></a>
            </li>
            <li class="{{ Request::is('admin/testimonial*') ? 'active' : '' }}">
                <a href="{{ route('admin.testimonial.index') }}"><i class="zmdi zmdi-comment-text"></i><span>Testimonials</span></a>
            </li>
            <li class="{{ Request::is('admin/resume*') ? 'active' : '' }}">
                <a href="{{ route('admin.resume.index') }}"><i class="zmdi zmdi-file-text"></i><span>Resume</span></a>
            </li>
            <li class="{{ Request::is('admin/service*') ? 'active' : '' }}">
                <a href="{{ route('admin.service.index') }}"><i class="zmdi zmdi-settings"></i><span>Services</span></a>
            </li>
            <li class="{{ Request::is('admin/message*') ? 'active' : '' }}">
                <a href="{{ route('admin.message.index') }}"><i class="zmdi zmdi-email"></i><span>Message</span></a>
            </li>
        </ul>
    </div>
</aside>
