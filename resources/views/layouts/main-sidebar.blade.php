<!-- main-sidebar -->
<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
<aside class="app-sidebar sidebar-scroll">
    <div class="main-sidebar-header active">
        <a class="desktop-logo logo-light active" href="{{ url('/' . $page='index') }}"><img
                src="{{URL::asset('company')}}/{{\App\GeneralInfo::first()->logo}}" class="main-logo" alt="logo"
                style="height: 40px;width: 80px"></a>
        <a class="desktop-logo logo-dark active" href="{{ url('/' . $page='index') }}"><img
                src="{{URL::asset('company')}}/{{\App\GeneralInfo::first()->logo}}" class="main-logo dark-theme" alt="logo"></a>
        <a class="logo-icon mobile-logo icon-light active" href="{{ url('/' . $page='index') }}"><img
                src="{{URL::asset('company')}}/{{\App\GeneralInfo::first()->logo}}" class="logo-icon" alt="logo"></a>
        <a class="logo-icon mobile-logo icon-dark active" href="{{ url('/' . $page='index') }}"><img
                src="{{URL::asset('company')}}/{{\App\GeneralInfo::first()->logo}}" class="logo-icon dark-theme" alt="logo"></a>
    </div>
    <div class="main-sidemenu">
        <div class="app-sidebar__user clearfix">
            <div class="dropdown user-pro-body">
                <div class="">
                    <img alt="user-img" class="avatar avatar-xl brround" src="{{URL::asset('assets/img/download.png')}}"><span
                        class="avatar-status profile-status bg-green"></span>
                </div>
                <div class="user-info">
                    <h4 class="font-weight-semibold mt-3 mb-0">{{Auth::User()->name}}</h4>
                </div>
            </div>
        </div>
        <ul class="side-menu">
            @can('profile')
             <li class="slide">
                <a class="side-menu__item" href="{{url('profile_hospital')}}/{{Auth::User()->hospital_id ?? 'error'}}">
                    <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24">
                        <path d="M0 0h24v24H0V0z" fill="none"/>
                        <path d="M5 5h4v6H5zm10 8h4v6h-4zM5 17h4v2H5zM15 5h4v2h-4z" opacity=".3"/>
                        <path
                            d="M3 13h8V3H3v10zm2-8h4v6H5V5zm8 16h8V11h-8v10zm2-8h4v6h-4v-6zM13 3v6h8V3h-8zm6 4h-4V5h4v2zM3 21h8v-6H3v6zm2-4h4v2H5v-2z"/>
                    </svg>
                    <span class="side-menu__label">Profile</span></a>
            </li>
            @endcan
            
             @can('home')

            <li class="side-item side-item-category">Main</li>
            <li class="slide">
                <a class="side-menu__item" href="{{ url('/' . $page='index') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24">
                        <path d="M0 0h24v24H0V0z" fill="none"/>
                        <path d="M5 5h4v6H5zm10 8h4v6h-4zM5 17h4v2H5zM15 5h4v2h-4z" opacity=".3"/>
                        <path
                            d="M3 13h8V3H3v10zm2-8h4v6H5V5zm8 16h8V11h-8v10zm2-8h4v6h-4v-6zM13 3v6h8V3h-8zm6 4h-4V5h4v2zM3 21h8v-6H3v6zm2-4h4v2H5v-2z"/>
                    </svg>
                    <span class="side-menu__label">Health card</span></a>
            </li>

            <li class="slide">
                <a class="side-menu__item" href="{{ url('/' . $page='index_group') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24">
                        <path d="M0 0h24v24H0V0z" fill="none"/>
                        <path d="M5 5h4v6H5zm10 8h4v6h-4zM5 17h4v2H5zM15 5h4v2h-4z" opacity=".3"/>
                        <path
                            d="M3 13h8V3H3v10zm2-8h4v6H5V5zm8 16h8V11h-8v10zm2-8h4v6h-4v-6zM13 3v6h8V3h-8zm6 4h-4V5h4v2zM3 21h8v-6H3v6zm2-4h4v2H5v-2z"/>
                    </svg>
                    <span class="side-menu__label">Group card</span></a>
            </li>
            
             <li class="slide">
                <a class="side-menu__item" href="{{ url('/' . $page='index_plus') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24">
                        <path d="M0 0h24v24H0V0z" fill="none"/>
                        <path d="M5 5h4v6H5zm10 8h4v6h-4zM5 17h4v2H5zM15 5h4v2h-4z" opacity=".3"/>
                        <path
                            d="M3 13h8V3H3v10zm2-8h4v6H5V5zm8 16h8V11h-8v10zm2-8h4v6h-4v-6zM13 3v6h8V3h-8zm6 4h-4V5h4v2zM3 21h8v-6H3v6zm2-4h4v2H5v-2z"/>
                    </svg>
                    <span class="side-menu__label">Plus card</span></a>
            </li>
            
               <li class="slide">
                <a class="side-menu__item" href="{{ url('/' . $page='provider') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24">
                        <path d="M0 0h24v24H0V0z" fill="none"/>
                        <path d="M5 5h4v6H5zm10 8h4v6h-4zM5 17h4v2H5zM15 5h4v2h-4z" opacity=".3"/>
                        <path
                            d="M3 13h8V3H3v10zm2-8h4v6H5V5zm8 16h8V11h-8v10zm2-8h4v6h-4v-6zM13 3v6h8V3h-8zm6 4h-4V5h4v2zM3 21h8v-6H3v6zm2-4h4v2H5v-2z"/>
                    </svg>
                    <span class="side-menu__label">Providers</span></a>
            </li>
            @endcan

            @can('card')
                <li class="side-item side-item-category">Cards</li>
                <li class="slide">
                    <a class="side-menu__item" data-toggle="slide" href="{{ url('/' . $page='#') }}">
                        <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24">
                            <path d="M0 0h24v24H0V0z" fill="none"/>
                            <path d="M19 5H5v14h14V5zM9 17H7v-7h2v7zm4 0h-2V7h2v10zm4 0h-2v-4h2v4z" opacity=".3"/>
                            <path
                                d="M3 5v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2H5c-1.1 0-2 .9-2 2zm2 0h14v14H5V5zm2 5h2v7H7zm4-3h2v10h-2zm4 6h2v4h-2z"/>
                        </svg>
                        <span class="side-menu__label">Cards</span><i class="angle fe fe-chevron-down"></i></a>

                    <ul class="slide-menu">
                        @can('add card')
                        <li><a class="slide-item" href="{{ route('add_cards') }}">Add Cards</a></li>
                        <li><a class="slide-item" href="{{ route('add_group_cards') }}">Add Group Cards</a></li>
                        @endcan
                        @can('customer card')
                        <li><a class="slide-item" href="{{ route('show_cards') }}">Health Cards</a></li>
                        <li><a class="slide-item" href="{{ route('show_cards_plus') }}">Plus Cards</a></li>
                        <li><a class="slide-item" href="{{ route('show_group_cards') }}">Group Cards</a></li>
                        
                        @endcan
                    </ul>
                </li>
            @endcan

                        @can('group company')
                        @php
                        $cards =  \App\Card::select('cpr_no')->where('id', auth()->getUser()->group_id)->first();
                        @endphp
                        @if($cards)
                        <li class="slide">
                            <a class="side-menu__item" href="{{ url('/profile/' . $cards->cpr_no) }}">
                                <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24">
                                    <path d="M0 0h24v24H0V0z" fill="none"/>
                                    <path d="M5 5h4v6H5zm10 8h4v6h-4zM5 17h4v2H5zM15 5h4v2h-4z" opacity=".3"/>
                                    <path
                                        d="M3 13h8V3H3v10zm2-8h4v6H5V5zm8 16h8V11h-8v10zm2-8h4v6h-4v-6zM13 3v6h8V3h-8zm6 4h-4V5h4v2zM3 21h8v-6H3v6zm2-4h4v2H5v-2z"/>
                                </svg>
                                <span class="side-menu__label">Group Company</span></a>
                        </li>
                        @endif
                        @endcan
                        
            @can('hospital')
              
                <li class="side-item side-item-category">Providers</li>
                <li class="slide">
                    <a class="side-menu__item" data-toggle="slide" href="{{ url('/' . $page='#') }}">
                        <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24">
                            <path d="M0 0h24v24H0V0z" fill="none"/>
                            <path d="M19 5H5v14h14V5zM9 17H7v-7h2v7zm4 0h-2V7h2v10zm4 0h-2v-4h2v4z" opacity=".3"/>
                            <path
                                d="M3 5v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2H5c-1.1 0-2 .9-2 2zm2 0h14v14H5V5zm2 5h2v7H7zm4-3h2v10h-2zm4 6h2v4h-2z"/>
                        </svg>
                        <span class="side-menu__label">Providers</span><i class="angle fe fe-chevron-down"></i></a>

                    <ul class="slide-menu">
                        @foreach(\App\Provider::all() as $p)
                            <li><a class="slide-item" href="{{route('show' , $p->id)}}">{{$p->name}}</a><span class="badge badge-purple side-badge">{{\ App\Hospital::where('provider_type',$p->id)->count()}}</span></li>
                        @endforeach
                    </ul>
                </li>
            @endcan


                 @can('report')
                <li class="side-item side-item-category">Reports</li>
                <li class="slide">
                    <a class="side-menu__item" data-toggle="slide" href="{{ url('/' . $page='#') }}">
                        <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24">
                            <path d="M0 0h24v24H0V0z" fill="none"/>
                            <path d="M19 5H5v14h14V5zM9 17H7v-7h2v7zm4 0h-2V7h2v10zm4 0h-2v-4h2v4z" opacity=".3"/>
                            <path
                                d="M3 5v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2H5c-1.1 0-2 .9-2 2zm2 0h14v14H5V5zm2 5h2v7H7zm4-3h2v10h-2zm4 6h2v4h-2z"/>
                        </svg>
                        <span class="side-menu__label">Reports</span><i class="angle fe fe-chevron-down"></i></a>

                    <ul class="slide-menu">
                        @can('agent customer')
                        <li><a class="slide-item" href="{{ route('report.agent_customer') }}">Agent Customers</a></li>
                        @endcan
                        @can('card report')
                        <li><a class="slide-item" href="{{ route('report.card') }}">Card Report</a></li>
                        
                        @endcan
                        @can('provider report')
                                                <li><a class="slide-item" href="{{ route('report.provider_report') }}">Provider Report</a></li>

                            @endcan
                    </ul>
                </li>
            @endcan




            @can('users')
                <li class="side-item side-item-category">Users</li>
                <li class="slide">
                    <a class="side-menu__item" data-toggle="slide" href="{{ url('/' . ($page = '#')) }}">
                        <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24">
                            <path d="M0 0h24v24H0V0z" fill="none"/>
                            <path d="M5 5h4v6H5zm10 8h4v6h-4zM5 17h4v2H5zM15 5h4v2h-4z" opacity=".3"/>
                            <path
                                d="M3 13h8V3H3v10zm2-8h4v6H5V5zm8 16h8V11h-8v10zm2-8h4v6h-4v-6zM13 3v6h8V3h-8zm6 4h-4V5h4v2zM3 21h8v-6H3v6zm2-4h4v2H5v-2z"/>
                        </svg>
                        <span class="side-menu__label">Users</span><i class="angle fe fe-chevron-down"></i></a>
                    <ul class="slide-menu">
                        @can('add-user')
                            <li><a class="slide-item" href="{{ url('/' . ($page = 'users')) }}">All User</a></li>
                        @endcan

                        @can('show-permission')
                            <li><a class="slide-item" href="{{ url('/' . ($page = 'roles')) }}">Permission</a></li>
                        @endcan
                    </ul>
                </li>
            @endcan

            <li class="side-item side-item-category">Mails</li>
            <li class="slide">
                <a class="side-menu__item" data-toggle="slide" href="{{ url('/' . ($page = '#')) }}">
                    <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24">
                        <path d="M0 0h24v24H0V0z" fill="none" />
                        <path d="M5 5h4v6H5zm10 8h4v6h-4zM5 17h4v2H5zM15 5h4v2h-4z" opacity=".3" />
                        <path d="M3 13h8V3H3v10zm2-8h4v6H5V5zm8 16h8V11h-8v10zm2-8h4v6h-4v-6zM13 3v6h8V3h-8zm6 4h-4V5h4v2zM3 21h8v-6H3v6zm2-4h4v2H5v-2z" />
                    </svg>
                    <span class="side-menu__label">Mails</span><i class="angle fe fe-chevron-down"></i></a>
                <ul class="slide-menu">
                    <li><a class="slide-item" href="{{ url('/mails/all') }}">All Mails</a></li>
                    <li><a class="slide-item" href="{{ url('/templates') }}">Mails Template</a></li>
                </ul>
            </li>
            @can('setting')
                <li class="side-item side-item-category">Setting</li>
                <li class="slide">

                        <a class="side-menu__item" data-toggle="slide" href="{{ url('/' . $page='#') }}">
                            <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24">
                                <path d="M0 0h24v24H0V0z" fill="none"/>
                                <path d="M4 12c0 4.08 3.06 7.44 7 7.93V4.07C7.05 4.56 4 7.92 4 12z" opacity=".3"/>
                                <path
                                    d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 17.93c-3.94-.49-7-3.85-7-7.93s3.05-7.44 7-7.93v15.86zm2-15.86c1.03.13 2 .45 2.87.93H13v-.93zM13 7h5.24c.25.31.48.65.68 1H13V7zm0 3h6.74c.08.33.15.66.19 1H13v-1zm0 9.93V19h2.87c-.87.48-1.84.8-2.87.93zM18.24 17H13v-1h5.92c-.2.35-.43.69-.68 1zm1.5-3H13v-1h6.93c-.04.34-.11.67-.19 1z"/>
                            </svg>

                            <span class="side-menu__label">Setting</span><i class="angle fe fe-chevron-down"></i></a>

                        <ul class="slide-menu">
                                                        <li><a class="slide-item" href="{{ route('category.provider') }}">Providers</a></li>

                            @can('type of provider')
                            <li><a class="slide-item" href="{{ url('/' . $page='category') }}">Type of provider</a></li>
                            @endcan
                            @can('card type')
                            <li><a class="slide-item" href="{{ route('show_cardType') }}">Card type</a></li>
                                @endcan
                                @can('card package')
                            <li><a class="slide-item" href="{{ route('show_PackageType') }}">Package type</a></li>
                                @endcan
                                 <li><a class="slide-item" href="{{route('home.slider')}}">Slider Image</a></li>
                                 <li><a class="slide-item" href="{{ route('partner.all.dashboard') }}">Partner</a></li>
                                 <li><a class="slide-item" href="{{route('setting.company_info')}}">Company Info</a></li>

                        </ul>

                </li>
            @endcan

        </ul>
    </div>
</aside>
<!-- main-sidebar -->
