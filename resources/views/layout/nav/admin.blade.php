

<ul class="menu">
    <li class="sidebar-item">
        <a href="{{route(currentUser().'.dashboard')}}" class='sidebar-link'>
            <i class="bi bi-grid-fill"></i>
            <span>{{__('dashboard') }}</span>
        </a>
    </li>

    <li class="sidebar-item has-sub">
        <a href="#" class='sidebar-link'>
            <i class="bi bi-gear-fill"></i>
            <span>{{__('Settings')}}</span>
        </a>
        <ul class="submenu">
            <li class="submenu-item sidebar-item has-sub">
                <a href="#" class='sidebar-link'> {{__('User')}}</a>
                <ul class="submenu">
                    <li class="py-1"><a href="{{route(currentUser().'.admin.index')}}">{{__('List')}}</a></li>
                    <li class="py-1"><a href="{{route(currentUser().'.admin.create')}}">{{__('Add New')}}</a></li>
                </ul>
            </li>

            <li class="submenu-item sidebar-item has-sub">
                <a href="#" class='sidebar-link'> {{__('Country')}}</a>
                <ul class="submenu">
                    <li class="py-1"><a href="{{route(currentUser().'.country.index')}}">{{__('List')}}</a></li>
                    <li class="py-1"><a href="{{route(currentUser().'.country.create')}}">{{__('Add New')}}</a></li>
                </ul>
            </li>
            <li class="submenu-item sidebar-item has-sub">
                <a href="#" class='sidebar-link'> {{__('Division')}}</a>
                <ul class="submenu">
                    <li class="py-1"><a href="{{route(currentUser().'.division.index')}}">{{__('List')}}</a></li>
                    <li class="py-1"><a href="{{route(currentUser().'.division.create')}}">{{__('Add New')}}</a></li>
                </ul>
            </li>
            <li class="submenu-item sidebar-item has-sub">
                <a href="#" class='sidebar-link'> {{__('District')}}</a>
                <ul class="submenu">
                    <li class="py-1"><a href="{{route(currentUser().'.district.index')}}">{{__('List')}}</a></li>
                    <li class="py-1"><a href="{{route(currentUser().'.district.create')}}">{{__('Add New')}}</a></li>
                </ul>
            </li>
            <li class="submenu-item sidebar-item has-sub">
                <a href="#" class='sidebar-link'> {{__('Upazila')}}</a>
                <ul class="submenu">
                    <li class="py-1"><a href="{{route(currentUser().'.upazila.index')}}">{{__('List')}}</a></li>
                    <li class="py-1"><a href="{{route(currentUser().'.upazila.create')}}">{{__('Add New')}}</a></li>
                </ul>
            </li>
            <li class="submenu-item sidebar-item has-sub">
                <a href="#" class='sidebar-link'> {{__('Thana')}}</a>
                <ul class="submenu">
                    <li class="py-1"><a href="{{route(currentUser().'.thana.index')}}">{{__('List')}}</a></li>
                    <li class="py-1"><a href="{{route(currentUser().'.thana.create')}}">{{__('Add New')}}</a></li>
                </ul>
            </li>
        </ul>
    </li>
    <li class="submenu-item sidebar-item has-sub">
        <a href="#" class='sidebar-link'> {{__('প্রোফাইল')}}</a>
        <ul class="submenu">
            <li class="py-1"><a href="{{route(currentUser().'.profile.index')}}">{{__('প্রোফাইল  লিস্ট')}}</a></li>
            <li class="py-1"><a href="{{route(currentUser().'.profile.create')}}">{{__('নতুন  প্রোফাইল')}}</a></li>
        </ul>
    </li>
    <li class="submenu-item sidebar-item has-sub">
        <a href="#" class='sidebar-link'> {{__('প্রোফাইল')}}</a>
        <ul class="submenu">
            <li class="py-1"><a href="{{route(currentUser().'.profile.index')}}">{{__('প্রোফাইল  লিস্ট')}}</a></li>
            <li class="py-1"><a href="{{route(currentUser().'.profile.create')}}">{{__('নতুন  প্রোফাইল')}}</a></li>
        </ul>
    </li>
    <li class="submenu-item sidebar-item has-sub">
        <a href="#" class='sidebar-link'> {{__('ওয়ারিশান')}}</a>
        <ul class="submenu">
            <li class="py-1"><a href="{{route(currentUser().'.warishan.index')}}">{{__('ওয়ারিশান   লিস্ট')}}</a></li>
            <li class="py-1"><a href="{{route(currentUser().'.warishan.create')}}">{{__('নতুন ওয়ারিশান')}}</a></li>
        </ul>
    </li>
    <li class="submenu-item sidebar-item has-sub">
        <a href="#" class='sidebar-link'> {{__('ট্রেড লাইসেন্স')}}</a>
        <ul class="submenu">
            <li class="py-1"><a href="{{route(currentUser().'.trade.index')}}">{{__('ট্রেড লাইসেন্স  লিস্ট')}}</a></li>
            <li class="py-1"><a href="{{route(currentUser().'.trade.create')}}">{{__('নতুন ট্রেড লাইসেন্স')}}</a></li>
        </ul>
    </li>
    <li class="submenu-item sidebar-item has-sub">
        <a href="#" class='sidebar-link'> {{__('নাগরিক সনদপত্র')}}</a>
        <ul class="submenu">
            <li class="py-1"><a href="{{route(currentUser().'.citizen.index')}}">{{__('সনদপত্র লিস্ট')}}</a></li>
            <li class="py-1"><a href="{{route(currentUser().'.citizen.create')}}">{{__('নতুন সনদপত্র')}}</a></li>
        </ul>
    </li>
</ul>
