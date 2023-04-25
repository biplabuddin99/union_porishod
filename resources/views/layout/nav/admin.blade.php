<ul class="menu">
    <li class="sidebar-item" style="margin-top: 37px;">
        <a href="{{route(currentUser().'.dashboard')}}" class='sidebar-link'>
            <i class="bi bi-speedometer2"></i>
            <span>{{__('ড্যাশবোর্ড') }}</span>
        </a>
    </li>

    <!-- আবেদন-->
    <li class="sidebar-item has-sub">
        <a href="#" class='sidebar-link'>
            <i class="bi bi-grid-fill"></i>
            <span>{{__('অনলাইন আবেদন')}}</span>
        </a>
        <ul class="submenu">
            <li class="py-1">
                <a href="{{route(currentUser().'.allapplication.create')}}">
                    <i class="bi bi-bag-plus-fill"></i>
                    <span>{{__('নতুন আবেদন')}}</span>
                </a>
            </li>
            <li class="py-1">
                <a href="#">
                    <i class="bi bi-bag-plus-fill"></i>
                    <span>{{__('ভুল সংশোধন আবেদন')}}</span>
                </a>
            </li>
            <li class="py-1">
                <a href="#">
                    <i class="bi bi-bag-plus-fill"></i>
                    <span>{{__('সনদ বাতিল আবেদন')}}</span>
                </a>
            </li>
        </ul>
    </li>
    <!--অনলাইন আবেদন শেষ -->

    <!-- আবেদন তালিকা-->
    <li class="sidebar-item has-sub">
        <a href="#" class='sidebar-link'>
            <i class="bi bi-list-columns-reverse"></i>
            <span>{{__('আবেদন তালিকা')}}</span>
        </a>
        <ul class="submenu">
            <li class="py-1">
                <a href="{{route(currentUser().'.holding.index')}}">
                    <i class="bi bi-list-stars"></i>
                    <span>{{__('হোল্ডিং নম্বর')}}</span>
                </a>
            </li>
            <li class="py-1">
                <a href="{{route(currentUser().'.trade.index')}}">
                    <i class="bi bi-list-stars"></i>
                    {{__('ট্রেড লাইসেন্স')}}
                </a>
            </li>
            <li class="py-1">
                <a href="{{route(currentUser().'.warishan.index')}}">
                    <i class="bi bi-list-stars"></i>
                    {{__('ওয়ারিশান সনদ')}}
                </a>
            </li>
            <li class="py-1">
                <a href="{{route(currentUser().'.attesteation.index')}}">
                    <i class="bi bi-list-stars"></i>
                    {{__('পরিবারিক সনদ')}}
                </a>
            </li>
            <li class="py-1">
                <a href="{{route(currentUser().'.citizen.index')}}">
                    <i class="bi bi-list-stars"></i>
                    {{__('নাগরিক সনদ')}}
                </a>
            </li>
            <li class="py-1">
                <a href="#">
                    <i class="bi bi-list-stars"></i>
                    {{__('গ্রাম আদালত')}}
                </a>
            </li>
            <li class="py-1">
                <a href="#">
                    <i class="bi bi-list-stars"></i>
                    {{__('অন্যান্য')}}
                </a>
            </li>
            {{-- <li class="py-1"><a href="{{route(currentUser().'.vgfcard.index')}}">{{__('ভিজিএফ কার্ড')}}</a></li>
            <li class="py-1"><a href="{{route(currentUser().'.oldallowance.index')}}">{{__('বয়স্ক ভাতা')}}</a></li>
            <li class="py-1"><a href="{{route(currentUser().'.widowallowance.index')}}">{{__('বিধবা ভাতা')}}</a></li>
            <li class="py-1"><a href="{{route(currentUser().'.disablity.index')}}">{{__('প্রতিবন্ধী ভাতা')}}</a></li>
            <li class="py-1"><a href="{{route(currentUser().'.maternityallowance.index')}}">{{__('মাতৃত্বকালীন ভাতা')}}</a></li> --}}
        </ul>
    </li>
    <!-- অনলাইন আবেদন  তালিকা শেষ -->

    <!-- গ্রাহক প্রোফাইল-->
    <li class="sidebar-item has-sub">
        <a href="#" class='sidebar-link'>
            <i class="bi bi-person-bounding-box"></i>
            <span>{{__('গ্রাহক প্রোফাইল')}}</span>
        </a>
        <ul class="submenu">
            <li class="py-1">
                <a href="{{route(currentUser().'.hold_profile.list')}}">
                    <i class="bi bi-person-check"></i>
                    {{__('হোল্ডিং নম্বর')}}
                </a>
            </li>
            <li class="py-1">
                <a href="{{route('trade_profile.list')}}">
                    <i class="bi bi-person-check"></i>
                    {{__('ট্রেড লাইসেন্স')}}
                </a>
            </li>
            <li class="py-1">
                <a href="{{route('warishan_profile.list')}}">
                    <i class="bi bi-person-check"></i>
                    {{__('ওয়ারিশান সনদ')}}
                </a>
            </li>
            <li class="py-1">
                <a href="{{route('attesteation_profile.list')}}">
                    <i class="bi bi-person-check"></i>
                    {{__('পরিবারিক সনদ')}}
                </a>
            </li>
            <li class="py-1">
                <a href="{{route('citizen_profile.list')}}">
                    <i class="bi bi-person-check"></i>
                    {{__('নাগরিক সনদ')}}
                </a>
            </li>
            <li class="py-1">
                <a href="#">
                    <i class="bi bi-person-check"></i>
                    {{__('অন্যান্য')}}
                </a>
            </li>
        </ul>
    </li>
    <!-- গ্রাহক প্রোফাইল শেষ -->

    <!-- ট্যাক্স/করদাতা-->
    <li class="sidebar-item has-sub">
        <a href="#" class='sidebar-link'>
            <i class="bi bi-cash-stack"></i>
            <span>{{__('ট্যাক্স/করদাতা')}}</span>
        </a>
        <ul class="submenu">
            <li class="py-1">
                <a href="{{route(currentUser().'.hold_tax.list')}}">
                    <i class="bi bi-wallet2"></i>
                    {{__('হোল্ডিং কর তালিকা')}}
                </a>
            </li>
            <li class="py-1">
                <a href="#">
                    <i class="bi bi-wallet2"></i>
                    {{__('ব্যবসায়িক কর তালিকা ')}}
                </a>
            </li>
            <li class="py-1">
                <a href="#">
                    <i class="bi bi-wallet2"></i>
                    {{__('হোল্ডিং কর আদায়')}}
                </a>
            </li>
            <li class="py-1">
                <a href="#">
                    <i class="bi bi-wallet2"></i>
                    {{__('ব্যবসায়িক কর আদায়')}}
                </a>
            </li>
            <li class="py-1">
                <a href="#">
                    <i class="bi bi-wallet2"></i>
                    {{__('হোল্ডিং কর বকেয়া')}}
                </a>
            </li>
            <li class="py-1">
                <a href="#">
                    <i class="bi bi-wallet2"></i>
                    {{__('ব্যবসায়িক কর বকেয়া ')}}
                </a>
            </li>
            <li class="py-1">
                <a href="#">
                    <i class="bi bi-wallet2"></i>
                    {{__('মোট ট্যাক্স আদায়')}}
                </a>
            </li>
            <li class="py-1">
                <a href="#">
                    <i class="bi bi-wallet2"></i>
                    {{__('মোট ট্যাক্স বকেয়া')}}
                </a>
            </li>
            {{-- <li class="py-1">
                <a href="#">
                    <i class="bi bi-wallet2"></i>
                    {{__('অন্যান্য')}}
                </a>
            </li> --}}
        </ul>
    </li>
    <!-- ট্যাক্স/করদাতা শেষ -->

    <!-- কার্ড ভাতার তালিকা-->
    <li class="sidebar-item has-sub">
        <a href="#" class='sidebar-link'>
            <i class="bi bi-bag-dash-fill"></i>
            <span>{{__('কার্ড ভাতার তালিকা')}}</span>
        </a>
        <ul class="submenu">
            <li class="py-1">
                <a href="#">
                    <i class="bi bi-bag"></i>
                    {{__('ভিজিএফ কার্ড')}}
                </a>
            </li>
            <li class="py-1">
                <a href="#">
                    <i class="bi bi-bag"></i>
                    {{__('ভিজিডি কার্ড ')}}
                </a>
            </li>
            <li class="py-1">
                <a href="#">
                    <i class="bi bi-bag"></i>
                    {{__('রেশন কার্ড')}}
                </a>
            </li>
            <li class="py-1">
                <a href="#">
                    <i class="bi bi-bag"></i>
                    {{__('প্রতিবন্ধী ভাতা')}}
                </a>
            </li>
            <li class="py-1">
                <a href="#">
                    <i class="bi bi-bag"></i>
                    {{__('বিধবা ভাতা')}}
                </a>
            </li>
            <li class="py-1">
                <a href="#">
                    <i class="bi bi-bag"></i>
                    {{__('মাতৃত্বকালীন ভাতা')}}
                </a>
            </li>
            <li class="py-1">
                <a href="#">
                    <i class="bi bi-bag"></i>
                    {{__('অন্যান্য ভাতা')}}
                </a>
            </li>
        </ul>
    </li>
    <!-- কার্ড ভাতার শেষ -->

    <!--গ্রাম আদালত -->
    <li class="sidebar-item has-sub">
        <a href="#" class='sidebar-link'>
            <i class="bi bi-pin-map-fill"></i>
            <span>{{__('গ্রাম আদালত')}}</span>
        </a>
        <ul class="submenu">
            <li class="py-1">
                <a href="#">
                    <i class="bi bi-wrench-adjustable-circle"></i>
                    {{__('মামলার তালিকা')}}
                </a>
            </li>
            <li class="py-1">
                <a href="#">
                    <i class="bi bi-wrench-adjustable-circle"></i>
                    {{__('প্রতিবাদীর সমন')}}
                </a>
            </li>
            <li class="py-1">
                <a href="#">
                    <i class="bi bi-wrench-adjustable-circle"></i>
                    {{__('স্বাক্ষীর প্রতি সমন')}}
                </a>
            </li>
            <li class="py-1">
                <a href="#">
                    <i class="bi bi-wrench-adjustable-circle"></i>
                    {{__('আদালতের রায়')}}
                </a>
            </li>
            <li class="py-1">
                <a href="#">
                    <i class="bi bi-wrench-adjustable-circle"></i>
                    {{__('আপোষনামার')}}
                </a>
            </li>
            <li class="py-1">
                <a href="#">
                    <i class="bi bi-wrench-adjustable-circle"></i>
                    {{__('অন্যান্য')}}
                </a>
            </li>
        </ul>
    </li>
    <!-- গ্রাম আদালত শেষ -->

    <!--অন্যান্য -->
    <li class="sidebar-item has-sub">
        <a href="#" class='sidebar-link'>
            <i class="bi bi-envelope-paper-fill"></i>
            <span>{{__('অন্যান্য সেবা')}}</span>
        </a>
        <ul class="submenu">
            <li class="py-1">
                <a href="#">
                    <i class="bi bi-wrench-adjustable-circle"></i>
                    {{__('পেমেন্ট')}}
                </a>
            </li>
            <li class="py-1">
                <a href="#">
                    <i class="bi bi-wrench-adjustable-circle"></i>
                    {{__('রিপোর্ট')}}
                </a>
            </li>
            <li class="py-1">
                <a href="#">
                    <i class="bi bi-wrench-adjustable-circle"></i>
                    {{__('তথ্য যাচাই')}}
                </a>
            </li>
            <li class="py-1">
                <a href="#">
                    <i class="bi bi-wrench-adjustable-circle"></i>
                    {{__('এসএমএস')}}
                </a>
            </li>
            <li class="py-1">
                <a href="#">
                    <i class="bi bi-wrench-adjustable-circle"></i>
                    {{__('অন্যান্য')}}
                </a>
            </li>
        </ul>
    </li>
    <!-- অন্যান্য শেষ -->

    <!-- সেটিংস -->
    <li class="sidebar-item has-sub">
        <a href="#" class='sidebar-link'>
            <i class="bi bi-gear-fill"></i>
            <span>{{__('সেটিংস')}}</span>
        </a>
        <ul class="submenu">
            <li class="py-1">
                <a href="{{route(currentUser().'.porishodsettiong.index')}}" >
                    <i class="bi bi-gear"></i>
                    {{__('পরিষদ সেটিংস')}}
                </a>
            </li>
            <li class="submenu-item sidebar-item has-sub">
                <a href="#" class='sidebar-link'>
                    <i class="bi bi-person-circle"></i>
                    {{__('ব্যবহারকারীগণ')}}
                </a>
                <ul class="submenu">
                    <li class="py-1"><a href="{{route(currentUser().'.admin.index')}}">{{__('তালিকা')}}</a></li>
                    <li class="py-1"><a href="{{route(currentUser().'.admin.create')}}">{{__('নতুন ব্যবহারকারী')}}</a></li>
                </ul>
            </li>

            <li class="submenu-item sidebar-item has-sub">
                <a href="#" class='sidebar-link'>
                    <i class="bi bi-list-task"></i>
                    {{__('দেশ')}}
                </a>
                <ul class="submenu">
                    <li class="py-1"><a href="{{route(currentUser().'.country.index')}}">{{__('তালিকা')}}</a></li>
                    <li class="py-1"><a href="{{route(currentUser().'.country.create')}}">{{__('নতুন যোগ')}}</a></li>
                </ul>
            </li>
            <li class="submenu-item sidebar-item has-sub">
                <a href="#" class='sidebar-link'>
                    <i class="bi bi-list-task"></i>
                    {{__('বিভাগ')}}
                </a>
                <ul class="submenu">
                    <li class="py-1"><a href="{{route(currentUser().'.division.index')}}">{{__('তালিকা')}}</a></li>
                    <li class="py-1"><a href="{{route(currentUser().'.division.create')}}">{{__('নতুন যোগ')}}</a></li>
                </ul>
            </li>
            <li class="submenu-item sidebar-item has-sub">
                <a href="#" class='sidebar-link'>
                    <i class="bi bi-list-task"></i>
                    {{__('জেলা')}}
                </a>
                <ul class="submenu">
                    <li class="py-1"><a href="{{route(currentUser().'.district.index')}}">{{__('তালিকা')}}</a></li>
                    <li class="py-1"><a href="{{route(currentUser().'.district.create')}}">{{__('নতুন যোগ')}}</a></li>
                </ul>
            </li>
            <li class="submenu-item sidebar-item has-sub">
                <a href="#" class='sidebar-link'>
                    <i class="bi bi-list-task"></i>
                    {{__('উপজেলা')}}
                </a>
                <ul class="submenu">
                    <li class="py-1"><a href="{{route(currentUser().'.upazila.index')}}">{{__('তালিকা')}}</a></li>
                    <li class="py-1"><a href="{{route(currentUser().'.upazila.create')}}">{{__('নতুন যোগ')}}</a></li>
                </ul>
            </li>
            <li class="submenu-item sidebar-item has-sub">
                <a href="#" class='sidebar-link'>
                    <i class="bi bi-list-task"></i>
                    {{__('থানা')}}
                </a>
                <ul class="submenu">
                    <li class="py-1"><a href="{{route(currentUser().'.thana.index')}}">{{__('তালিকা')}}</a></li>
                    <li class="py-1"><a href="{{route(currentUser().'.thana.create')}}">{{__('নতুন যোগ')}}</a></li>
                </ul>
            </li>
        </ul>
    </li>

    {{-- <li class="sidebar-item">
        <a href="{{route(currentUser().'.allapplication.create')}}" class='sidebar-link'>
            <i class="bi bi-grid-fill"></i>
            <span>{{__('অনলাইন আবেদন') }}</span>
        </a>
    </li>

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
    </li> --}}


    {{-- extra --}}
    {{-- <li class="sidebar-item has-sub">
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
    </li> --}}




</ul>
