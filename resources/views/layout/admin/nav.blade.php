<aside>
    <nav>
        <ul class="sectionlinks" onclick="openSection(event,'statistics')"><i class="fa-solid fa-chart-simple"></i> &nbsp;
            <span>Statistics</span>
        </ul>
        <ul class="sectionlinks" onclick="openSection(event,'claims')"><i class="fa-solid fa-flag"></i>
            &nbsp; <span>claims</span> </ul>
    </nav>
</aside>
<aside id="statistics" class="sectioncontent">
    <div class="tab">
        <button class="tablinks" onclick="openCity(event, 'users')">users</button>
        <button class="tablinks" onclick="openCity(event, 'jobs')">jobs</button>
        <button class="tablinks" onclick="openCity(event, 'progress')">progress</button>
    </div>

    <div id="users" class="tabcontent">
        <div class="cardContainer">
            <a href="{{ route('dashboard') }}" class="card text-center">
                <i class="fa-solid fa-users"></i> Quản trị
            </a>
            <a href="{{ route('admin.post') }}" class="card text-center"><i class="fa-solid fa-city"></i>Bài viết
            </a>
            <a href="{{ route('admin.type') }}" class="card text-center"><i class="fa-solid fa-user"></i> Danh mục
            </a>
            <a href="{{ route('posts.index') }}" class="card text-center"><i class="fa-solid fa-user"></i> Danh sách bài viết
            </a>
        </div>
        <div class="cardContainer">
            <a href="{{route('admin.custommer')}}" class="card text-center">
                <i class="fa-solid fa-users"></i> Yêu cầu từ khách hàng
            </a>
            <a href="{{route('blog-services.index')}}" class="card text-center"><i class="fa-solid fa-city"></i> Quản trị blog dịch vụ
            </a>
            <a href="{{route('banners.index')}}" class="card text-center"><i class="fa-solid fa-user"></i> Quản trị banner
            </a>
            <a href="{{ route('admin.site-config.edit') }}" class="card text-center"><i class="fa-solid fa-user"></i> Cài dặt chung
            </a>
        </div>
    </div>
</aside>
