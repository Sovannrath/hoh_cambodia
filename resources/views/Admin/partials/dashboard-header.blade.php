<header id="header">
  <div id="logo-group">
    {{-- PLACE YOUR LOGO HERE --}}
    <span id="logo" style="padding-top:0px; margin-top:0px; margin-left:0px"> <img src="{{ asset('images/home/hoh_logo.png') }}" style="height:48px; width: 45px; padding-top:0px; padding-left: 0; margin-top:0px; margin-left: 0px" alt="Hands On Health Cambodia"> </span>
    {{-- END LOGO PLACEHOLDER --}}

    {{-- Note: The activity badge color changes when clicked and resets the number to 0
       Suggestion: You may want to set a flag when this happens to tick off all checked messages / notifications --}}

    {{-- AJAX-DROPDOWN : control this dropdown height, look and feel from the LESS variable file --}}
  </div>
  {{-- end logo-group --}}
  {{-- #TOGGLE LAYOUT BUTTONS --}}

  {{-- pulled right: nav area --}}
  <div class="pull-right">

    {{-- collapse menu button --}}
    <div id="hide-menu" class="btn-header pull-right">
      <span> <a href="javascript:void(0);" data-action="toggleMenu" title="Collapse Menu"><i class="fa fa-reorder"></i></a> </span>
    </div>
    {{-- end collapse menu --}}

    {{-- #MOBILE --}}

    {{-- Top menu profile link : this shows only when top menu is active --}}
    <ul id="mobile-profile-img" class="header-dropdown-list hidden-xs padding-5">
      <li class="">
        <a href="#" class="dropdown-toggle no-margin userdropdown" data-toggle="dropdown">
          <img src="{{asset('img/avatars/male.png') }}" alt="me" class="online" />
        </a>
        <ul class="dropdown-menu pull-right">
          <li>
            <a href="javascript:void(0);" class="padding-10 padding-top-0 padding-bottom-0"><i class="fa fa-cog"></i> Setting</a>
          </li>
          <li class="divider"></li>
          <li>
            <a href="#ajax/profile.html" class="padding-10 padding-top-0 padding-bottom-0"> <i class="fa fa-user"></i> <u>P</u>rofile</a>
          </li>
          <li class="divider"></li>
          <li>
            <a href="javascript:void(0);" class="padding-10 padding-top-0 padding-bottom-0" data-action="toggleShortcut"><i class="fa fa-arrow-down"></i> <u>S</u>hortcut</a>
          </li>
          <li class="divider"></li>
          <li>
            <a href="javascript:void(0);" class="padding-10 padding-top-0 padding-bottom-0" data-action="launchFullscreen"><i class="fa fa-arrows-alt"></i> Full <u>S</u>creen</a>
          </li>
          <li class="divider"></li>

          <li>
              <a href="{{ route('logout') }}" class="padding-10 padding-top-5 padding-bottom-5" data-action="userLogout"
                 onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="fa fa-sign-out fa-lg"></i> <strong><u></u>Logout</strong>
              </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  {{ csrf_field() }}
              </form>
          </li>
        </ul>
      </li>
    </ul>
    {{-- End Top menu profile link --}}

    {{-- logout button --}}
        <div id="logout" class="btn-header transparent pull-right">
          <span> <a href="{{route('logout')}}" title="Sign Out" data-action="userLogout" data-logout-msg="You can improve your security further after logging out by closing this opened browser" ><i class="fa fa-sign-out"></i></a> <form id="logout-form" action="{{route('logout')}}" method="POST">
                                    {{ csrf_field() }}
          </form></span>
        </div>
    {{-- end logout button --}}


    {{-- search mobile button (this is hidden till mobile view port) --}}
    <div id="search-mobile" class="btn-header transparent pull-right">
      <span> <a href="javascript:void(0)" title="Search"><i class="fa fa-search"></i></a> </span>
    </div>
    {{-- end search mobile button --}}

    {{-- #SEARCH --}}
    {{-- input: search field --}}
    <form action="#ajax/search.html" class="header-search pull-right">
      <input id="search-fld" type="text" name="param" placeholder="Find reports and more">
      <button type="submit">
        <i class="fa fa-search"></i>
      </button>
      <a href="javascript:void(0);" id="cancel-search-js" title="Cancel Search"><i class="fa fa-times"></i></a>
    </form>
    {{-- end input: search field --}}

    {{-- fullscreen button --}}
    <div id="fullscreen" class="btn-header transparent pull-right">
      <span> <a href="javascript:void(0);" data-action="launchFullscreen" title="Full Screen"><i class="fa fa-arrows-alt"></i></a> </span>
    </div>
    {{-- end fullscreen button --}}

    {{-- multiple lang dropdown : find all flags in the flags page --}}
    <ul class="header-dropdown-list hidden-xs">
      <li>
        <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <img src="{{ asset('img/blank.gif') }}" class="flag flag-kh" alt="United States"> <span> US</span> <i class="fa fa-angle-down"></i> </a>
        <ul class="dropdown-menu pull-right">
            <li class="active">
                <a href="javascript:void(0);"><img src="{{ asset('img/blank.gif') }}" class="flag flag-kh" alt="Khmer"> Khmer (KH)</a>
            </li>
            <li class="">
            <a href="javascript:void(0);"><img src="{{ asset('img/blank.gif') }}" class="flag flag-us" alt="United States"> English (US)</a>
            </li>
        </ul>
      </li>
    </ul>
    {{-- end multiple lang --}}

  </div>
  {{-- end pulled right: nav area --}}

</header>
