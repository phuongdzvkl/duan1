@include('admin/headerAdmin')

@php
    $list = $categories;

@endphp

<div class="breadcrumb-main">
    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb">
            @php
                $urlSegments = explode('/', request()->path());
                $url = '';
            @endphp

            @foreach($urlSegments as $segment)
                @php
                    $url .= '/' . $segment;
                @endphp

                @if ($loop->last)
                    <li class="breadcrumb-item active" aria-current="page">{{ ucfirst($segment) }}</li>
                @else
                    <li class="breadcrumb-item">
                        <a href="{{ $url }}">{{ ucfirst($segment) }}</a>
                    </li>
                @endif
            @endforeach
        </ol>
    </nav>
</div>
<div class="row">
    <div style="width:70%" id="section-category">
        <div class="section-adds">
            <h5>Bảng danh mục</h5>
            <div  class="category-grid">
                <div class='list-category'>
                    @if ($categories)
                        {!! $categories !!}
                    @else
                        <p>Danh sách danh mục đang trống!</p>
                    @endif
        
                </div>
        
                <div class="form-function-ctgr">
                    <form action="handle_add_category" method="post">
                        <h5>Thêm mới danh mục</h5>
                        <label>Icon danh mục:</label>
                        <p><input type="text" id="iconDm" name="iconDm"></p>
                        <input id="idCtgrFt" type="hidden" name="idCtgrFt" value="0">
                        <label>Tên danh mục:</label>
                        <p><input type="text" id="tenDm" name="tenDm"></p>
                        <input type="hidden" name="_token" value={{ csrf_token() }}>
                        <p><button type="submit"><i class='bx bx-add-to-queue'></i>Thêm</button></p>
                    </form>
                    <div class="function-category">
                        <h5>Chức năng chính</h5>
                        <a href="{{ route('admin.category.edit') }}"><button><i class='bx bxs-edit'></i>Sửa</button></a>
                        <form style="display: inline" action="handle_remove_category" method="post">
                            <input id="idDm" type="hidden" name="idDm" value="0">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <button id="btn-remove-category"><i class='bx bxs-x-square'></i>Xóa</button>
                        </form>
                        <button id="show-hiden-quickly"><i class='bx bx-hide'></i>Hiện/ẩn</button>
                    
                    </div>
                    <div class="function-move">
        
                    </div>
                    <div class="dif-category">
                        <h5>Chức năng khác</h5>
                        <a href="{{ route('admin.category.trash') }}"><button><i class='bx bx-trash'></i>Thùng rác </button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div style="margin-top: 20px; width: 30%" class="col-md-4">
        <div class="card mb-3">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center" data-bs-toggle="collapse" aria-expanded="true" data-bs-target="#keywordsCollapseExample" role="button">
                    <div>Từ khóa</div>
                    <div class="bi bi-chevron-down"></div>
                </div>
                <div class="collapse show mt-4" id="keywordsCollapseExample">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Phone, Headphone, Shoe ...">
                        <button class="btn btn-outline-light" type="button">
                            <i class="bi bi-search"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="card mb-3">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center" data-bs-toggle="collapse" aria-expanded="true" data-bs-target="#categoriesCollapseExample" role="button">
                    <div>Lọc</div>
                    <div class="bi bi-chevron-down"></div>
                </div>
                <div class="collapse show mt-4" id="categoriesCollapseExample">
                    <div class="d-flex flex-column gap-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="categoryCheck1">
                            <label class="form-check-label" for="categoryCheck1">
                                All
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="categoryCheck2">
                            <label class="form-check-label" for="categoryCheck2">
                                Accessories
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="categoryCheck3">
                            <label class="form-check-label" for="categoryCheck3">
                                Phone
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="categoryCheck4">
                            <label class="form-check-label" for="categoryCheck4">
                                Headphone
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="categoryCheck5">
                            <label class="form-check-label" for="categoryCheck5">
                                Camera
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<script>
    var menuItems = document.querySelectorAll('.menu-item');
    document.addEventListener('DOMContentLoaded', function() {

        menuItems.forEach(function(menuItem) {
            menuItem.addEventListener('click', function() {
                var submenu = this.nextElementSibling;

                if (submenu.className === 'submenu') {

                    if (submenu.style.display === 'block') {
                        submenu.style.display = 'none';
                    } else {
                        submenu.style.display = 'block';
                    }
                }
            });
        });
    });
</script>
<!-- script xử lí click -->
<script>
    var idDm = 0;

    const removeBackgroundColor = (menuItem) => {
        menuItem.forEach((elm) => {
            elm.classList.remove('clicked');
        })
    }
    let menuItem = document.querySelector('.list-category').querySelectorAll('.menu-item');

    menuItem.forEach((elm) => {
        elm.addEventListener("click", () => {

            removeBackgroundColor(menuItem);

            document.querySelector("#idCtgrFt").value = elm.getAttribute('idDm');
            document.querySelector("#idDm").value = elm.getAttribute('idDm');


            elm.classList.toggle('clicked');

        })
    });
</script>
<!-- xử lí thêm danh mục -->
<script>
    document.querySelector("#btn-remove-category").addEventListener("click", () => {});
</script>
<script>
    const handleShowHidenQuickly = () => {

        subMenu = document.querySelectorAll('.submenu');
        subMenu.forEach(function(menuItem) {
            if (menuItem.style.display === "block") {
                menuItem.style.display = "none";
            } else {
                menuItem.style.display = "block";
            }
        });
    }
    document.querySelector('#show-hiden-quickly').addEventListener("click", () => {
        handleShowHidenQuickly();
    })
</script>

@include('admin/footerAdmin')
