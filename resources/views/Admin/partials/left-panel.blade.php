<aside id="left-panel">
  {{-- User info --}}
  <div class="login-info">
      <span> {{-- User image size is adjusted inside CSS, it should stay as it --}}
      <a href="javascript:void(0);" id="show-shortcut" data-action="toggleShortcut"><img src="{{asset('img/avatars/male.png') }}" alt="me" class="online" />
          {{ Auth::user()->name }} <i class="fa fa-angle-down"></i>
      </a>
    </span>
  </div>
  {{-- end user info --}}

  {{-- NAVIGATION : This navigation is also responsive To make this navigation dynamic please make sure to link the node (the reference to the nav > ul) after page load. Or the navigation will not initialize. --}}
  <nav>
  {{--  NOTE: Notice the gaps after each icon usage <i></i>.. Please note that these links work a bit different than traditional href="" links. See documentation for details. --}}
      <ul>
      {{-- Dashboard --}}
      <li class="{{ (\Request::route()->getName() == 'home') ? 'active' : '' }}">
        <a href="{{route('home')}}" title="ផ្ទាំងត្រួតពិនិត្យ"><i class="fa fa-lg fa-fw fa-dashboard"></i><span class="menu-item-parent">ផ្ទាំងត្រួតពិនិត្យ</span></a>
      </li>
      {{-- Notification --}}
      <li>
          <a href="#" title="ទំនិញទាំងអស់"><i class="fa fa-lg fa-fw fa-suitcase"></i> <span class="menu-item-parent">ទំនិញ</span></a>
          <ul>
              <li class="{{ (\Request::route()->getName() == 'product.add') ? 'active' : '' }}">
                  <a href="{{route('product.add')}}" title="បន្ថែមទំនិញថ្មី"><i class="fa fa-lg fa-fw fa-medkit"></i> <span class="menu-item">បន្ថែមទំនិញថ្មី</span></a>
              </li>
              <li class="{{ (\Request::route()->getName() == 'product.recommend') ? 'active' : '' }}">
                  <a href="{{route('product.recommend')}}" title="ទំនិញដែលណែនាំ"><i class="fa fa-lg fa-fw fa-star"></i> <span class="menu-item">ទំនិញដែលណែនាំ</span></a>
              </li>
              <li class="{{ (\Request::route()->getName() == 'product.list' || \Request::route()->getName() == 'product.edit') ? 'active' : '' }}">
                  <a href="{{route('product.list')}}" title="បញ្ជីទំនិញ"><i class="fa fa-lg fa-fw fa-list-alt"></i> <span class="menu-item">បញ្ជីទំនិញ</span></a>
              </li>
          </ul>

      </li>
          {{-- Message --}}
      <li>
          <a href="{{route('message')}}" title="សារ"><i class="fa fa-lg fa-fw fa-envelope"></i> <span class="menu-item-parent">សារ</span></a>
      </li>

      {{-- Setup --}}
      <li>
          <a href="#" title="ការកំណត់"><i class="fa fa-lg fa-fw fa-cog"></i> <span class="menu-item-parent">ការកំណត់</span></a>
          <ul>
              <li class="{{ (\Request::route()->getName() == 'category') ? 'active' : '' }}">
                  <a href="{{ route('category') }}" title="ការកំណត់"><i class="fa fa-lg fa-fw fa-cog"></i> <span class="menu-item-parent">ប្រភេទទំនិញ</span></a>
              </li>
              <li class="{{ (\Request::route()->getName() == 'category') ? 'active' : '' }}">
                  <a href="{{ route('category') }}" title="ការកំណត់"><i class="fa fa-lg fa-fw fa-cog"></i> <span class="menu-item-parent">ម៉ាកសញ្ញា / ក្រុមហ៊ុន</span></a>
              </li>
          </ul>
      </li>
    </ul>
  </nav>
  {{-- Minify Menu --}}
  <span class="minifyme" data-action="minifyMenu"> <i class="fa fa-arrow-circle-left hit"></i> </span>

</aside>
