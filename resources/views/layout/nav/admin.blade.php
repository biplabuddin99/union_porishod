

<ul class="menu">
    <li class="sidebar-item">
        <a href="{{route(currentUser().'.dashboard')}}" class='sidebar-link'>
            <i class="bi bi-grid-fill"></i>
            <span>{{__('ড্যাশবোর্ড') }}</span>
        </a>
    </li>
    <li class="sidebar-item">
        <a href="{{route(currentUser().'.porishodsettiong.index')}}" class='sidebar-link'>
            <i class="bi bi-grid-fill"></i>
            <span>{{__('পরিষদ সেটিংস') }}</span>
        </a>
    </li>

    <li class="sidebar-item has-sub">
        <a href="#" class='sidebar-link'>
            <i class="bi bi-gear-fill"></i>
            <span>{{__('সেটিংস')}}</span>
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

    <li class="sidebar-item">
        <a href="{{route(currentUser().'.allapplication.create')}}" class='sidebar-link'>
            <i class="bi bi-grid-fill"></i>
            <span>{{__('অনলাইন আবেদন') }}</span>
        </a>
    </li>

    {{-- অনলাইন আবেদন --}}
    {{-- <li class="sidebar-item has-sub">
        <a href="#" class='sidebar-link'>
            <i class="bi bi-gear-fill"></i>
            <span>{{__('আবেদন আগেরগুলো*')}}</span>
        </a>
        <ul class="submenu">
            <li class="py-1"><a href="{{route(currentUser().'.holding.create')}}">{{__(' নতুন হোল্ডিং নম্বর *')}}</a></li>
            <li class="py-1"><a href="{{route(currentUser().'.allapplication.create')}}">{{__(' নতুন All *')}}</a></li>
            <li class="py-1"><a href="{{route(currentUser().'.trade.create')}}">{{__('নতুন ট্রেড লাইসেন্স *')}}</a></li>
            <li class="py-1"><a href="{{route(currentUser().'.citizen.create')}}">{{__('নতুন সনদপত্র *')}}</a></li>
            <li class="py-1"><a href="{{route(currentUser().'.warishan.create')}}">{{__('নতুন ওয়ারিশান *')}}</a></li>
            <li class="py-1"><a href="{{route(currentUser().'.vgfcard.create')}}">{{__('নতুন ভিজিএফ কার্ড *')}}</a></li>
            <li class="py-1"><a href="{{route(currentUser().'.oldallowance.create')}}">{{__('নতুন বয়স্ক ভাতা *')}}</a></li>
            <li class="py-1"><a href="{{ route(currentUser().'.widowallowance.create') }}">{{__('নতুন বিধবা ভাতা *')}}</a></li>
            <li class="py-1"><a href="{{ route(currentUser().'.disablity.create') }}">{{__('নতুন প্রতিবন্ধী ভাতা *')}}</a></li>
            <li class="py-1"><a href="{{ route(currentUser().'.maternityallowance.create') }}">{{__('নতুন মাতৃত্বকালীন ভাতা *')}}</a></li>
            <li class="py-1"><a href="#">{{__('নতুন অন্যান্য')}}</a></li>


        </ul>
    </li> --}}
    {{-- অনলাইন আবেদন শেষ --}}


    {{-- আবেদন তালিকা--}}
    <li class="sidebar-item has-sub">
        <a href="#" class='sidebar-link'>
            <i class="bi bi-gear-fill"></i>
            <span>{{__('অনলাইন আবেদন তালিকা *')}}</span>
        </a>
        <ul class="submenu">
            <li class="py-1"><a href="{{route(currentUser().'.holding.index')}}">{{__('হোল্ডিং নম্বর তালিকা *')}}</a></li>
            <li class="py-1"><a href="{{route(currentUser().'.trade.index')}}">{{__('ট্রেড লাইসেন্স  লিস্ট *')}}</a></li>
            <li class="py-1"><a href="{{route(currentUser().'.citizen.index')}}">{{__('সনদপত্র লিস্ট *')}}</a></li>
            <li class="py-1"><a href="{{route(currentUser().'.warishan.index')}}">{{__('ওয়ারিশান   লিস্ট *')}}</a></li>
            <li class="py-1"><a href="{{route(currentUser().'.vgfcard.index')}}">{{__('ভিজিএফ কার্ড লিস্ট *')}}</a></li>
            <li class="py-1"><a href="{{route(currentUser().'.oldallowance.index')}}">{{__('বয়স্ক ভাতা লিস্ট *')}}</a></li>
            <li class="py-1"><a href="{{route(currentUser().'.widowallowance.index')}}">{{__('বিধবা ভাতা লিস্ট *')}}</a></li>
            <li class="py-1"><a href="{{route(currentUser().'.disablity.index')}}">{{__('প্রতিবন্ধী ভাতা লিস্ট *')}}</a></li>
            <li class="py-1"><a href="{{route(currentUser().'.maternityallowance.index')}}">{{__('মাতৃত্বকালীন ভাতা লিস্ট *')}}</a></li>
            <li class="py-1"><a href="#">{{__('অন্যান্য লিস্ট')}}</a></li>

        </ul>
    </li>
    {{-- অনলাইন আবেদন  তালিকা শেষ --}}

    {{-- গ্রাহক প্রোপাইল--}}
    <li class="sidebar-item has-sub">
        <a href="#" class='sidebar-link'>
            <i class="bi bi-gear-fill"></i>
            <span>{{__('গ্রাহক প্রোপাইল')}}</span>
        </a>
        <ul class="submenu">
            <li class="py-1"><a href="{{route('hold_profile.list')}}">{{__('হোল্ডিং নম্বর')}}</a></li>
            <li class="py-1"><a href="#">{{__('ট্রেড লাইসেন্স')}}</a></li>
            <li class="py-1"><a href="#">{{__('সনদপত্র')}}</a></li>
            <li class="py-1"><a href="#">{{__('ওয়ারিশান')}}</a></li>
            <li class="py-1"><a href="#">{{__('ভিজিএফ কার্ড')}}</a></li>
            <li class="py-1"><a href="#">{{__('বয়স্ক ভাতা')}}</a></li>
            <li class="py-1"><a href="#">{{__('বিধবা ভাতা')}}</a></li>
            <li class="py-1"><a href="#">{{__('প্রতিবন্ধী ভাতা')}}</a></li>
            <li class="py-1"><a href="#">{{__('মাতৃত্বকালীন ভাতা')}}</a></li>
            <li class="py-1"><a href="#">{{__('অন্যান্য')}}</a></li>

        </ul>
    </li>
    {{-- গ্রাহক প্রোপাইল শেষ --}}

    {{-- ট্যাক্স/করদাতা--}}
    <li class="sidebar-item has-sub">
        <a href="#" class='sidebar-link'>
            <i class="bi bi-gear-fill"></i>
            <span>{{__('ট্যাক্স/করদাতা')}}</span>
        </a>
        <ul class="submenu">
            <li class="py-1"><a href="#">{{__('হোল্ডিং ট্যাক্সের তালিকা')}}</a></li>
            <li class="py-1"><a href="#">{{__(' ব্যবসায়িক ট্যাক্সের তালিকা ')}}</a></li>
            <li class="py-1"><a href="#">{{__('অন্যান্য ট্যাক্সের তালিকা')}}</a></li>
            <li class="py-1"><a href="#">{{__('ট্যাক্স আদায়ের পরিমান')}}</a></li>
            <li class="py-1"><a href="#">{{__('ট্যাক্স বকেয়া পরিমান')}}</a></li>
            <li class="py-1"><a href="#">{{__('মোট ট্যাক্স আদায়ের রিপোর্ট')}}</a></li>
            <li class="py-1"><a href="#">{{__('মোট ট্যাক্স বকেয়া রিপোর্ট')}}</a></li>

        </ul>
    </li>
    {{-- ট্যাক্স/করদাতা শেষ --}}
    {{--গ্রাম আদালত --}}
    <li class="sidebar-item has-sub">
        <a href="#" class='sidebar-link'>
            <i class="bi bi-gear-fill"></i>
            <span>{{__('গ্রাম আদালত')}}</span>
        </a>
        <ul class="submenu">
            <li class="py-1"><a href="#">{{__('অনলাইন আবেদন')}}</a></li>
            <li class="py-1"><a href="#">{{__('আবেদন তালিকা ')}}</a></li>
            <li class="py-1"><a href="#">{{__('প্রতিবাদীর সমনের কপি')}}</a></li>
            <li class="py-1"><a href="#">{{__('স্বাক্ষীর সমনের কপি')}}</a></li>
            <li class="py-1"><a href="#">{{__('ট্যাক্স বকেয়া পরিমান')}}</a></li>
            <li class="py-1"><a href="#">{{__('আদালতের রায়ের কপি')}}</a></li>
            <li class="py-1"><a href="#">{{__('আপোষনামার কপি')}}</a></li>
            <li class="py-1"><a href="#">{{__('অন্যান্য কপি')}}</a></li>

        </ul>
    </li>
    {{-- গ্রাম আদালত শেষ --}}
    <li class="submenu-item sidebar-item has-sub">
        <a href="#" class='sidebar-link'> {{__('পেমেন্ট রসিদ*')}}</a>
        <ul class="submenu">
            <li class="py-1"><a href="{{route(currentUser().'.payment.index')}}">{{__('পেমেন্ট রসিদ  লিস্ট')}}</a></li>
            <li class="py-1"><a href="{{route(currentUser().'.payment.create')}}">{{__('নতুন  পেমেন্ট রসিদ')}}</a></li>
        </ul>
    </li>
    <li class="submenu-item sidebar-item has-sub">
        <a href="#" class='sidebar-link'> {{__('প্রোফাইল *')}}</a>
        <ul class="submenu">
            <li class="py-1"><a href="{{route(currentUser().'.profile.index')}}">{{__('প্রোফাইল  লিস্ট')}}</a></li>
            <li class="py-1"><a href="{{route(currentUser().'.profile.create')}}">{{__('নতুন  প্রোফাইল')}}</a></li>
        </ul>
    </li>


    {{-- extra --}}
    <li class="sidebar-item has-sub">
        <a href="#" class='sidebar-link'>
            <i class="bi bi-gear-fill"></i>
            <span>{{__('Supporting')}}</span>
        </a>
        <ul class="submenu">
            <li class="submenu-item sidebar-item has-sub">
                <a href="#" class='sidebar-link'> {{__('Education')}}</a>
                <ul class="submenu">
                    <li class="py-1"><a href="{{route(currentUser().'.education.index')}}">{{__('List')}}</a></li>
                    <li class="py-1"><a href="{{route(currentUser().'.education.create')}}">{{__('Add New')}}</a></li>
                </ul>
            </li>

            <li class="submenu-item sidebar-item has-sub">
                <a href="#" class='sidebar-link'> {{__('Govt. facility')}}</a>
                <ul class="submenu">
                    <li class="py-1"><a href="{{route(currentUser().'.govtfacility.index')}}">{{__('List')}}</a></li>
                    <li class="py-1"><a href="{{route(currentUser().'.govtfacility.create')}}">{{__('Add New')}}</a></li>
                </ul>
            </li>
            <li class="submenu-item sidebar-item has-sub">
                <a href="#" class='sidebar-link'> {{__('Mobile Bank')}}</a>
                <ul class="submenu">
                    <li class="py-1"><a href="{{route(currentUser().'.mobilebank.index')}}">{{__('List')}}</a></li>
                    <li class="py-1"><a href="{{route(currentUser().'.mobilebank.create')}}">{{__('Add New')}}</a></li>
                </ul>
            </li>
            <li class="submenu-item sidebar-item has-sub">
                <a href="#" class='sidebar-link'> {{__('Digital Device')}}</a>
                <ul class="submenu">
                    <li class="py-1"><a href="{{route(currentUser().'.digitaldevice.index')}}">{{__('List')}}</a></li>
                    <li class="py-1"><a href="{{route(currentUser().'.digitaldevice.create')}}">{{__('Add New')}}</a></li>
                </ul>
            </li>
            <li class="submenu-item sidebar-item has-sub">
                <a href="#" class='sidebar-link'> {{__('Telecomunication')}}</a>
                <ul class="submenu">
                    <li class="py-1"><a href="{{route(currentUser().'.telecomunication.index')}}">{{__('List')}}</a></li>
                    <li class="py-1"><a href="{{route(currentUser().'.telecomunication.create')}}">{{__('Add New')}}</a></li>
                </ul>
            </li>
            <li class="submenu-item sidebar-item has-sub">
                <a href="#" class='sidebar-link'> {{__('Source Income')}}</a>
                <ul class="submenu">
                    <li class="py-1"><a href="{{route(currentUser().'.sourceincome.index')}}">{{__('List')}}</a></li>
                    <li class="py-1"><a href="{{route(currentUser().'.sourceincome.create')}}">{{__('Add New')}}</a></li>
                </ul>
            </li>
            <li class="submenu-item sidebar-item has-sub">
                <a href="#" class='sidebar-link'> {{__('Housing Type')}}</a>
                <ul class="submenu">
                    <li class="py-1"><a href="{{route(currentUser().'.housingtype.index')}}">{{__('List')}}</a></li>
                    <li class="py-1"><a href="{{route(currentUser().'.housingtype.create')}}">{{__('Add New')}}</a></li>
                </ul>
            </li>
            <li class="submenu-item sidebar-item has-sub">
                <a href="#" class='sidebar-link'> {{__('Source Business')}}</a>
                <ul class="submenu">
                    <li class="py-1"><a href="{{route(currentUser().'.sourcebusiness.index')}}">{{__('List')}}</a></li>
                    <li class="py-1"><a href="{{route(currentUser().'.sourcebusiness.create')}}">{{__('Add New')}}</a></li>
                </ul>
            </li>
        </ul>
    </li>




</ul>
