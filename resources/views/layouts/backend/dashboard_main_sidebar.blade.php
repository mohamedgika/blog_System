  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4"">
    <!-- Brand Logo -->
    <a href="" class="brand-link">
      <img src="{{isset($set) == true ? asset('imgs/'.$set->logos) : asset('imgs/logo/news.png')}}" alt="News Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">{{ isset($set) == true ? LaravelLocalization::getCurrentLocaleDirection() == 'ltr' ? $set->getTranslation('title','en') : $set->getTranslation('title','ar') : __('backend/dashboard_setting.Gabal News') }} {{__('backend/dashboard_main_sidbar.Dashboard')}}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ isset($set) == true ? asset('imgs/'.$set->logos) : asset('imgs/logo/news.png')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="" class="d-block"><b>{{Auth::user()->name}}</b> <small>{{Auth::user()->status}}</small></a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="{{__('backend/dashboard_main_sidbar.Search')}}" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-header">{{__('backend/dashboard_main_sidbar.Dashboard')}}</li>

          @can('view',$cate)
          <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-th"></i>
                <p>
                    {{__('backend/dashboard_main_sidbar.Category')}}
                    <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{route('category.index')}}" class="nav-link">
                    <ion-icon name="copy" class="nav-icon"></ion-icon>
                    <p>
                        {{__('backend/dashboard_main_sidbar.Category')}}
                    </p>
                  </a>
                </li>
              </ul>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{route('subcategory.index')}}" class="nav-link">
                    <ion-icon name="duplicate" class="nav-icon"></ion-icon>
                    <p>{{__('backend/dashboard_main_sidbar.Sub Category')}}</p>
                  </a>
                </li>
              </ul>
          </li>
          @endcan

          @can('view',$u)
          <li class="nav-item">
            <a href="{{route('user.index')}}" class="nav-link">
            <ion-icon class="nav-icon" name="people"></ion-icon>
              <p>
                {{__('backend/dashboard_main_sidbar.User')}}
              </p>
            </a>
          </li>
          @endcan

          <li class="nav-item">
            <a href="{{route('post.index')}}" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                {{__('backend/dashboard_main_sidbar.Post')}}
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <ion-icon class="nav-icon" name="pricetags"></ion-icon>
              <p>
                {{__('backend/dashboard_main_sidbar.Tag')}}
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/UI/general.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>General</p>
                </a>
              </li>
            </ul>
          </li>


          @can('view',$set)
          <li class="nav-item">
            <a href="#" class="nav-link">
              <ion-icon class="nav-icon" name="settings"></ion-icon>
              <p>
                {{__('backend/dashboard_main_sidbar.Setting')}}
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('setting.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>{{__('backend/dashboard_main_sidbar.Setting')}}</p>
                </a>
              </li>
            </ul>
          </li>
          @endcan

          <li class="nav-header">{{__('backend/dashboard_main_sidbar.Website')}}</li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                {{__('backend/dashboard_main_sidbar.Website')}}
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">6</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/layout/top-nav.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Top Navigation</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <ion-icon class="nav-icon" name="settings"></ion-icon>
              <p>
                {{__('backend/dashboard_main_sidbar.Website Setting')}}
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/tables/simple.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Simple Tables</p>
                </a>
              </li>
            </ul>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
