<div class="sidebar pe-4 pb-3">
    <nav class="navbar bg-light navbar-light">
        <a href="index.html" class="navbar-brand mx-4 mb-3">
            <h3 class="text-primary">Laibaoxinchuan</h3>
        </a>
        <div class="d-flex align-items-center ms-4 mb-4">
            <div class="position-relative">
                <img class="rounded-circle" src="{{ Asset(Auth::user()->avatar) }}" alt=""
                    style="width: 40px; height: 40px;">
                <div
                    class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1">
                </div>
            </div>
            <div class="ms-3">
                <h6 class="mb-0">{{ Auth::user()->name }}</h6>
                <span>Admin</span>
            </div>
        </div>
        <div class="navbar-nav w-100">
            <a href="{{ Route('dashboard') }}"
                class="nav-item nav-link {{ session('moduleActive') == 'dashboard' ? 'active' : '' }}"><i
                    class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
        </div>
        <div class="navbar-nav w-100">
            <a href="{{ Route('admin.about_us.create') }}"
                class="nav-item nav-link {{ session('moduleActive') == 'about_us' ? 'active' : '' }}"><i class="fas fa-warehouse"></i>About Us</a>
        </div>
        <div class="navbar-nav w-100">
            <a href="{{ Route('admin.medias.create') }}"
                class="nav-item nav-link {{ session('moduleActive') == 'medias' ? 'active' : '' }}"><i class="fab fa-internet-explorer"></i>Mạng xã hội</a>
        </div>
        <div class="navbar-nav w-100">
            <a href="{{ Route('admin.contacts.index') }}"
                class="nav-item nav-link {{ session('moduleActive') == 'contacts' ? 'active' : '' }}"><i
                    class="fa fa-tachometer-alt me-2"></i>Liên hệ</a>
        </div>
        <div class="navbar-nav w-100">
            <div class="nav-item dropdown">
                <a href="#"
                    class="nav-link dropdown-toggle {{ session('moduleActive') == 'videos' ? 'active' : '' }}"
                    id="pagesDropdown" data-bs-toggle="dropdown"><i class="fas fa-bookmark"></i>Video</a>
                <div class="dropdown-menu bg-transparent border-0 {{ session('moduleActive') == 'videos' ? 'show' : '' }}"
                    aria-labelledby="pagesDropdown">
                    <a href="{{ Route('admin.videos.index') }}" class="dropdown-item">Danh sách</a>
                    <a href="{{ Route('admin.videos.create') }}" class="dropdown-item">Thêm mới</a>
                </div>
            </div>
        </div>
        <div class="navbar-nav w-100">
            <div class="nav-item dropdown">
                <a href="#"
                    class="nav-link dropdown-toggle {{ session('moduleActive') == 'category' ? 'active' : '' }}"
                    id="pagesDropdown" data-bs-toggle="dropdown"><i class="fas fa-bookmark"></i>Danh mục</a>
                <div class="dropdown-menu bg-transparent border-0 {{ session('moduleActive') == 'category' ? 'show' : '' }}"
                    aria-labelledby="pagesDropdown">
                    <a href="{{ Route('admin.categories.index') }}" class="dropdown-item">Danh sách</a>
                    <a href="{{ Route('admin.categories.create') }}" class="dropdown-item">Thêm mới</a>
                </div>
            </div>
        </div>
        <div class="navbar-nav w-100">
            <div class="nav-item dropdown">
                <a href="#"
                    class="nav-link dropdown-toggle {{ session('moduleActive') == 'posts' ? 'active' : '' }}"
                    id="pagesDropdown" data-bs-toggle="dropdown"><i class="fas fa-book"></i>Bài viết</a>
                <div class="dropdown-menu bg-transparent border-0 {{ session('moduleActive') == 'posts' ? 'show' : '' }}"
                    aria-labelledby="pagesDropdown">
                    <a href="{{ Route('admin.posts.create') }}" class="dropdown-item">Thêm mới</a>
                    <a href="{{ Route('admin.posts.index') }}" class="dropdown-item">Danh sách</a>
                </div>
            </div>
        </div>
        <div class="navbar-nav w-100">
            <div class="nav-item dropdown">
                <a href="#"
                    class="nav-link dropdown-toggle {{ session('moduleActive') == 'banners' ? 'active' : '' }}"
                    id="pagesDropdown" data-bs-toggle="dropdown"><i class="fas fa-images"></i>Banner</a>
                <div class="dropdown-menu bg-transparent border-0 {{ session('moduleActive') == 'banners' ? 'show' : '' }}"
                    aria-labelledby="pagesDropdown">
                    <a href="{{ Route('admin.banners.create') }}" class="dropdown-item">Thêm mới</a>
                    <a href="{{ Route('admin.banners.index') }}" class="dropdown-item">Danh sách</a>
                </div>
            </div>
        </div>
    </nav>
</div>
