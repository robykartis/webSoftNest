<div class="navigationbar">
    <ul class="vertical-menu">
        <li>
            <a class="{{ set_active(['dashboard.index']) }}" href="{{ route('dashboard.index') }}">
                <img src="{{ asset('admin/assets/images/svg-icon/dashboard.svg') }}" class="img-fluid"
                    alt="dashboard"><span>Dashboard</span>
            </a>

        </li>

        {{-- Aksi Posts --}}
        <li>
            <a href="javaScript:void();">
                <img src="{{ asset('admin/assets/images/svg-icon/form_elements.svg') }}" class="img-fluid"
                    alt="form_elements"><span>Posts</span><i class="feather icon-chevron-right pull-right"></i>
            </a>
            <ul class="vertical-submenu">
                <li>
                    <a class="nav-link {{ set_active(['posts.index', 'posts.create']) }}"
                        href="{{ route('posts.index') }}">Data
                        Posts</a>
                </li>
                {{-- <li>
                    <a class="nav-link {{ set_active(['posts.create']) }}" href="{{ route('posts.create') }}">Tambah
                        Data</a>
                </li> --}}
            </ul>
        </li>



    </ul>
</div>
