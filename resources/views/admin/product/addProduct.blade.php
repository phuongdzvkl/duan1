@include('admin/headerAdmin')

<div class="main-add row">
    <div class="form-add w-50">
        {{-- char thông kế lượt thêm xóa trong tuần --}}
        <div class="chart-add row">
            <div class="col-lg-4 col-md-12 w-50 pt-3">
                <div class="card h-100">
                    <div class="card-body">
                        <div class="d-flex mb-3">
                            <div class="display-7">
                                <i class="bi bi-basket"></i>
                            </div>
                        </div>
                        <h4 class="mb-3">Deletes This Week</h4>
                        <div class="d-flex mb-3" style="position: relative;">
                            <div class="display-7">30</div>
                            <div class="ms-auto" id="deletes-chart" style="min-height: 35px;">
                                <div id="deletes-chart-apex" class="apexcharts-canvas"></div>
                                <!-- Chú ý: Giữ nguyên div để biểu đồ hiển thị -->
                            </div>
                        </div>
                        <div class="text-success">
                            Over the last month 1.4% <i class="small bi bi-arrow-up"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 w-50 pt-3">
                <div class="card h-100">
                    <div class="card-body">
                        <div class="d-flex mb-3">
                            <div class="display-7">
                                <i class="bi bi-basket"></i>
                            </div>
                        </div>
                        <h4 class="mb-3">Adds This Week</h4>
                        <div class="d-flex mb-3" style="position: relative;">
                            <div class="display-7">15</div>
                            <div class="ms-auto" id="adds-chart" style="min-height: 35px;">
                                <div id="adds-chart-apex" class="apexcharts-canvas"></div>
                                <!-- Chú ý: Giữ nguyên div để biểu đồ hiển thị -->
                            </div>
                        </div>
                        <div class="text-danger">
                            Over the last month -0.5% <i class="small bi bi-arrow-down"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- form thêm sản phẩm --}}
        <div class="form-add-product bg-white p-4 mt-2 rounded">
            <h4 class="pt-5">Form Thêm Sản Phẩm</h4>
            <form class="row pt-5">
                <div class="form-section col-12">
                    <label for="category">Danh Mục:</label>
                    <select class="form-control custom-select" id="category">
                        <option>Danh Mục 1</option>
                        <option>Danh Mục 2</option>
                        <option>Danh Mục 3</option>
                    </select>
                </div>
                

                <div class="form-section col-12">
                    <label for="productName">Tên Sản Phẩm:</label>
                    <input type="text" class="form-control" id="productName">
                </div>

                <div class="form-section col-12">
                    <label for="description">Mô Tả:</label>
                    <textarea class="form-control" id="description"></textarea>
                </div>

                <div class="form-section col-12">
                    <label for="mainImage">Ảnh Chính:</label>
                    <input type="file" class="form-control" id="mainImage">
                </div>

                <div class="form-section col-12">
                    <label for="additionalImages">Ảnh Phụ (Chọn Nhiều):</label>
                    <input type="file" class="form-control" id="additionalImages" multiple>
                </div>

                <div class="form-section col-12">
                    <label for="quantity">Số Lượng:</label>
                    <input type="number" class="form-control" id="quantity">
                </div>

                <div class="form-section col-12">
                    <label for="productType">Loại Sản Phẩm:</label>
                    <input type="text" class="form-control" id="productType">
                </div>

                <div class="form-section col-12">
                    <label for="price">Giá:</label>
                    <input type="number" class="form-control" id="price">
                </div>

                <div class="form-section col-12">
                    <button type="submit" class="btn btn-primary">Thêm Sản Phẩm</button>
                </div>
            </form>
        </div>
    </div>

    {{-- bảng thêm mới trong ngày --}}
    <div class="table-add-today w-50">
        <div class="table-responsive">
            <table class="table table-custom table-lg mb-0" id="products">
                <h4 class="pt-2">Thêm mới trong ngày</h4>
                <thead>
                    <tr>
                        <th>
                            <input class="form-check-input select-all" type="checkbox" data-select-all-target="#products"
                                id="defaultCheck1">
                        </th>
                        <th>ID</th>
                        <th>Photo</th>
                        <th>Name</th>
                        <th>Stock</th>
                        <th>Price</th>
                        <th>Created At</th>
                        <th class="text-end">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <input class="form-check-input" type="checkbox">
                        </td>
                        <td>
                            <a href="#">#1</a>
                        </td>
                        <td>
                            <a href="#">
                                <img src="../images/products/1.jpg" class="rounded" width="40" alt="...">
                            </a>
                        </td>
                        <td>Headphone</td>
                        <td>
                            <span class="text-success">In Stock</span>
                        </td>
                        <td>$499,90</td>
                        <td>02/03/2021</td>
                        <td class="text-end">
                            <div class="d-flex">
                                <div class="dropdown ms-auto">
                                    <a href="#" data-bs-toggle="dropdown" class="btn btn-floating"
                                        aria-haspopup="true" aria-expanded="false">
                                        <i class="bi bi-three-dots"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a href="#" class="dropdown-item">Action</a>
                                        <a href="#" class="dropdown-item">Another action</a>
                                        <a href="#" class="dropdown-item">Something else here</a>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

</div>

<script>
    // Khai báo dữ liệu biểu đồ Deletes (thay đổi theo dữ liệu thực của bạn)
    var deletesChartData = {
        series: [{
            name: "Deletes",
            data: [30, 20, 10, 25, 15, 30] // Dữ liệu lượt xóa (thay đổi theo dữ liệu thực của bạn)
        }],
        chart: {
            type: 'line',
            height: 35,
            width: 100,
            sparkline: {
                enabled: true
            },
        },
        stroke: {
            curve: 'smooth',
            width: 3,
        },
        xaxis: {
            categories: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri',
                'Sat'
            ], // Nhãn ngày trong tuần (thay đổi theo nhu cầu của bạn)
        },
        colors: ['#d63384'], // Màu của dòng biểu đồ
    };

    // Khởi tạo và render biểu đồ Deletes
    var deletesChart = new ApexCharts(document.querySelector("#deletes-chart-apex"), deletesChartData);
    deletesChart.render();

    // Khai báo dữ liệu biểu đồ Adds (thay đổi theo dữ liệu thực của bạn)
    var addsChartData = {
        series: [{
            name: "Adds",
            data: [15, 25, 20, 30, 10, 22] // Dữ liệu lượt thêm (thay đổi theo dữ liệu thực của bạn)
        }],
        chart: {
            type: 'line',
            height: 35,
            width: 100,
            sparkline: {
                enabled: true
            },
        },
        stroke: {
            curve: 'smooth',
            width: 3,
        },
        xaxis: {
            categories: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri',
                'Sat'
            ], // Nhãn ngày trong tuần (thay đổi theo nhu cầu của bạn)
        },
        colors: ['#ff4d4d'], // Màu của dòng biểu đồ
    };

    // Khởi tạo và render biểu đồ Adds
    var addsChart = new ApexCharts(document.querySelector("#adds-chart-apex"), addsChartData);
    addsChart.render();
</script>

@include('admin/footerAdmin')
