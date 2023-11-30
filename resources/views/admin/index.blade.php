@include('admin/headerAdmin')
<div class="content ">
        
    <div class="row row-cols-1 row-cols-md-3 g-4">

        {{-- biểu đồ bán hàng --}}
        <div class="col-lg-7 col-md-12">
            <div class="card widget h-100">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h6 class="card-title">Biểu đồ bán hàng  <a href="#" class="bi bi-question-circle ms-1 small" data-bs-toggle="tooltip" title="Biểu đồ bán hàng"></a></h6>
                    <div class="dropdown">
                        <a href="#" data-bs-toggle="dropdown" class="btn btn-sm" aria-haspopup="true" aria-expanded="false">
                            <i class="bi bi-three-dots"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a href="#" class="dropdown-item">View Detail</a>
                            <a href="#" class="dropdown-item">Download</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <div class="d-flex align-items-center">
                            <div class="display-7 me-3">
                                <i class="bi bi-bag-check me-2 text-success"></i> $10.552,40
                            </div>
                            <span class="text-success">
                                <i class="bi bi-arrow-up me-1 small"></i>8.30%
                            </span>
                        </div>
                        <select style="width: 50%" class="form-select">
                            <optgroup label="2020">
                                <option value="October">October</option>
                                <option value="November">November</option>
                                <option value="December">December</option>
                            </optgroup>
                            <optgroup label="2021">
                                <option value="January">January</option>
                                <option value="February">February</option>
                                <option value="March">March</option>
                                <option value="April">April</option>
                                <option value="May" selected>May</option>
                                <option value="June">June</option>
                                <option value="July">July</option>
                                <option value="August">August</option>
                                <option value="September">September</option>
                                <option value="October">October</option>
                                <option value="November">November</option>
                                <option value="December">December</option>
                            </optgroup>
                        </select>
                    </div>
                    <!-- The container for the chart -->
                    <div id="sales-chart" class="mb-3"></div>
                    
                    <script>
                        // Dữ liệu mẫu (thay thế bằng dữ liệu thực tế của bạn)
                        var salesChartData = {
                            series: [{
                                name: 'Doanh số',
                                data: [30, 40, 35, 50, 49, 60, 70, 91, 125]
                            }],
                            labels: ['Tháng 1', 'Tháng 2', 'Tháng 3', 'Tháng 4', 'Tháng 5', 'Tháng 6', 'Tháng 7', 'Tháng 8', 'Tháng 9']
                        };
        
                        // Cấu hình biểu đồ
                        var salesChartOptions = {
                            chart: {
                                type: 'line'
                            },
                            series: salesChartData.series,
                            xaxis: {
                                categories: salesChartData.labels
                            }
                        };
        
                        // Khởi tạo biểu đồ
                        var salesChart = new ApexCharts(document.getElementById("sales-chart"), salesChartOptions);
                        salesChart.render();
                    </script>
                </div>
            </div>
        </div>

        {{-- chanel --}}
        <div class="col-lg-5 col-md-12">
            <div class="card widget h-100">
                <div class="card-header d-flex">
                    <h6 class="card-title">
                        Channels
                        <a href="#" class="bi bi-question-circle ms-1 small" data-bs-toggle="tooltip"
                           title="Channels where your products are sold"></a>
                    </h6>
                    <div class="d-flex gap-3 align-items-center ms-auto">
                        <div class="dropdown">
                            <a href="#" data-bs-toggle="dropdown" class="btn btn-sm" aria-haspopup="true"
                               aria-expanded="false">
                                <i class="bi bi-three-dots"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item">View Detail</a>
                                <a href="#" class="dropdown-item">Download</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <!-- Container cho biểu đồ -->
                    <div id="sales-channels"></div>
                    <!-- Script để vẽ biểu đồ -->
                    <script>
                        // Dữ liệu mẫu cho biểu đồ (thay thế bằng dữ liệu thực của bạn)
                        var chartData = {
                            series: [48, 30, 22],
                            labels: ['Mạng xã hội', 'Google', 'Email']
                        };
        
                        // Cấu hình biểu đồ
                        var chartOptions = {
                            chart: {
                                type: 'donut'
                            },
                            series: chartData.series,
                            labels: chartData.labels
                        };
        
                        // Khởi tạo biểu đồ và vẽ nó vào container có id là 'sales-channels'
                        var chart = new ApexCharts(document.getElementById("sales-channels"), chartOptions);
                        chart.render();
                    </script>
                    <!-- Nút tải xuống báo cáo -->
                    <div class="text-center mt-3">
                        <button class="btn btn-outline-primary btn-icon">
                            <i class="bi bi-download"></i> Tải xuống báo cáo
                        </button>
                    </div>
                </div>
            </div>
        </div>


        {{-- thông kê đặt hàng --}}
        <div class="col-lg-4 col-md-12">
            <div class="card h-100">
                <div class="card-body">
                    <div class="d-flex mb-3">
                        <div class="display-7">
                            <i class="bi bi-basket"></i>
                        </div>
                        <div class="dropdown ms-auto">
                            <a href="#" data-bs-toggle="dropdown" class="btn btn-sm" aria-haspopup="true" aria-expanded="false">
                                <i class="bi bi-three-dots"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item">View Detail</a>
                                <a href="#" class="dropdown-item">Download</a>
                            </div>
                        </div>
                    </div>
                    <h4 class="mb-3">Orders</h4>
                    <div class="d-flex mb-3">
                        <div class="display-7" id="order-count">310</div>
                        <div class="ms-auto" id="total-orders"></div>
                    </div>
                    <div class="text-success" id="monthly-increase">
                        <span> Over last month 1.4%</span>
                        {{-- <i class="small bi bi-arrow-up"></i> --}}
                    </div>
        
                    <script>
                        // Dữ liệu mẫu cho phần "Orders" (thay thế bằng dữ liệu thực của bạn)
                        var orderData = {
                            count: 400,
                            monthlyIncrease: 2.5
                        };
        
                        // Cập nhật dữ liệu
                        document.getElementById('order-count').innerText = orderData.count;
                        document.getElementById('monthly-increase').innerText = `Over last month ${orderData.monthlyIncrease}% <i class="small bi bi-arrow-up"></i>`;
                    </script>
                </div>
            </div>
        </div>


        {{--  sale --}}
        <div class="col-lg-4 col-md-12">
            <div class="card h-100">
                <div class="card-body">
                    <div class="d-flex mb-3">
                        <div class="display-7">
                            <i class="bi bi-credit-card-2-front"></i>
                        </div>
                        <div class="dropdown ms-auto">
                            <a href="#" data-bs-toggle="dropdown" class="btn btn-sm" aria-haspopup="true" aria-expanded="false">
                                <i class="bi bi-three-dots"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item">View Detail</a>
                                <a href="#" class="dropdown-item">Download</a>
                            </div>
                        </div>
                    </div>
                    <h4 class="mb-3">Sales</h4>
                    <div class="d-flex mb-3">
                        <div class="display-7" id="sales-amount">$3.759,00</div>
                        <div class="ms-auto" id="total-sales"></div>
                    </div>
                    <div class="text-danger" id="monthly-decrease">
                        Over last month 2.4% <i class="small bi bi-arrow-down"></i>
                    </div>
        
                    <script>
                        // Dữ liệu mẫu cho phần "Sales" (thay thế bằng dữ liệu thực của bạn)
                        var salesData = {
                            amount: "$4,500.00",
                            monthlyDecrease: 2.4
                        };
        
                        // Cập nhật dữ liệu
                        document.getElementById('sales-amount').innerText = salesData.amount;
                        document.getElementById('monthly-decrease').innerText = `Over last month ${salesData.monthlyDecrease}% <i class="small bi bi-arrow-down"></i>`;
                    </script>
                </div>
            </div>
        </div>
        

        {{-- đánh giá --}}
        <div class="col-lg-4 col-md-12">
            <div class="card h-100">
                <div class="card-body">
                    <div class="d-flex align-items-center mb-3">
                        <h6 class="card-title">Recent Reviews</h6>
                        <div class="dropdown ms-auto">
                            <a href="#">View All</a>
                        </div>
                    </div>
                    <div class="summary-cards">
                        <div class="review-item">
                            <div class="d-flex align-items-center mb-3">
                                <div class="avatar me-3">
                                    <img src="../images/user/women_avatar5.jpg" class="rounded-circle" alt="image">
                                </div>
                                <div>
                                    <h5 class="mb-1">Amara Keel</h5>
                                    <ul class="list-inline ms-auto mb-0">
                                        <li class="list-inline-item mb-0">
                                            <i class="bi bi-star-fill text-warning"></i>
                                        </li>
                                        <li class="list-inline-item mb-0">
                                            <i class="bi bi-star-fill text-warning"></i>
                                        </li>
                                        <li class="list-inline-item mb-0">
                                            <i class="bi bi-star-fill text-warning"></i>
                                        </li>
                                        <li class="list-inline-item mb-0">
                                            <i class="bi bi-star-fill text-warning"></i>
                                        </li>
                                        <li class="list-inline-item mb-0">
                                            <i class="bi bi-star-fill text-muted"></i>
                                        </li>
                                        <li class="list-inline-item mb-0">(4)</li>
                                    </ul>
                                </div>
                            </div>
                            <div>I love your products. It is very easy and fun to use this panel.</div>
                        </div>
        
                        <div class="review-item">
                            <div class="d-flex align-items-center mb-3">
                                <div class="avatar me-3">
                                    <span class="avatar-text bg-indigo rounded-circle">J</span>
                                </div>
                                <div>
                                    <h5 class="mb-1">Johnath Siddeley</h5>
                                    <ul class="list-inline ms-auto mb-0">
                                        <li class="list-inline-item mb-0">
                                            <i class="bi bi-star-fill text-warning"></i>
                                        </li>
                                        <li class="list-inline-item mb-0">
                                            <i class="bi bi-star-fill text-warning"></i>
                                        </li>
                                        <li class="list-inline-item mb-0">
                                            <i class="bi bi-star-fill text-warning"></i>
                                        </li>
                                        <li class="list-inline-item mb-0">
                                            <i class="bi bi-star-fill text-warning"></i>
                                        </li>
                                        <li class="list-inline-item mb-0">
                                            <i class="bi bi-star-fill text-warning"></i>
                                        </li>
                                        <li class="list-inline-item mb-0">(5)</li>
                                    </ul>
                                </div>
                            </div>
                            <div>Very nice glasses. I ordered for my friend.</div>
                        </div>
        
                        <div class="review-item">
                            <div class="d-flex align-items-center mb-3">
                                <div class="avatar me-3">
                                    <span class="avatar-text bg-yellow rounded-circle">D</span>
                                </div>
                                <div>
                                    <h5 class="mb-1">David Berks</h5>
                                    <ul class="list-inline ms-auto mb-0">
                                        <li class="list-inline-item mb-0">
                                            <i class="bi bi-star-fill text-warning"></i>
                                        </li>
                                        <li class="list-inline-item mb-0">
                                            <i class="bi bi-star-fill text-warning"></i>
                                        </li>
                                        <li class="list-inline-item mb-0">
                                            <i class="bi bi-star-fill text-warning"></i>
                                        </li>
                                        <li class="list-inline-item mb-0">
                                            <i class="bi bi-star-fill text-warning"></i>
                                        </li>
                                        <li class="list-inline-item mb-0">
                                            <i class="bi bi-star-fill text-warning"></i>
                                        </li>
                                        <li class="list-inline-item mb-0">(5)</li>
                                    </ul>
                                </div>
                            </div>
                            <div>I am very satisfied with this product.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        {{-- các card thống kê --}}
        <div class="col-lg-5 col-md-12">
            <div class="card widget">
                <div class="card-header">
                    <h5 class="card-title">Activity Overview</h5>
                </div>
                <div class="row g-4">
                    <div class="col-md-6">
                        <div class="card border-0">
                            <div class="card-body text-center">
                                <div class="display-5">
                                    <i class="bi bi-truck text-secondary"></i>
                                </div>
                                <h5 class="my-3">Delivered</h5>
                                <div class="text-muted" id="delivered-data">Loading...</div>
                                <div class="progress mt-3" style="height: 5px">
                                    <div class="progress-bar bg-secondary" role="progressbar" style="width: 0%"
                                        aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card border-0">
                            <div class="card-body text-center">
                                <div class="display-5">
                                    <i class="bi bi-receipt text-warning"></i>
                                </div>
                                <h5 class="my-3">Ordered</h5>
                                <div class="text-muted" id="ordered-data">Loading...</div>
                                <div class="progress mt-3" style="height: 5px">
                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 0%"
                                        aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card border-0">
                            <div class="card-body text-center">
                                <div class="display-5">
                                    <i class="bi bi-bar-chart text-info"></i>
                                </div>
                                <h5 class="my-3">Reported</h5>
                                <div class="text-muted" id="reported-data">Loading...</div>
                                <div class="progress mt-3" style="height: 5px">
                                    <div class="progress-bar bg-info" role="progressbar" style="width: 0%"
                                        aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card border-0">
                            <div class="card-body text-center">
                                <div class="display-5">
                                    <i class="bi bi-cursor text-success"></i>
                                </div>
                                <h5 class="my-3">Arrived</h5>
                                <div class="text-muted" id="arrived-data">Loading...</div>
                                <div class="progress mt-3" style="height: 5px">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 0%"
                                        aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
            <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
            <script>
                $(document).ready(function () {
                    // Giả sử có dữ liệu từ máy chủ
                    var data = {
                        delivered: {
                            packages: 15,
                            progress: 25
                        },
                        ordered: {
                            items: 72,
                            progress: 67
                        },
                        reported: {
                            cases: 50,
                            progress: 80
                        },
                        arrived: {
                            boxed: 34,
                            progress: 55
                        }
                    };
        
                    // Hàm cập nhật dữ liệu cho card
                    function updateCard(card, data) {
                        card.find('.display-5 i').removeClass().addClass(data.iconClass);
                        card.find('h5.my-3').text(data.title);
                        card.find('.text-muted').text(data.description);
                        card.find('.progress-bar').css('width', data.progress + '%').attr('aria-valuenow', data.progress);
                    }
        
                    // Dữ liệu cho từng card
                    var deliveredCard = $('.card.widget .row .col-md-6').eq(0);
                    var orderedCard = $('.card.widget .row .col-md-6').eq(1);
                    var reportedCard = $('.card.widget .row .col-md-6').eq(2);
                    var arrivedCard = $('.card.widget .row .col-md-6').eq(3);
        
                    // Cập nhật dữ liệu cho từng card
                    updateCard(deliveredCard, {
                        iconClass: 'bi bi-truck text-secondary',
                        title: 'Delivered',
                        description: data.delivered.packages + ' New Packages',
                        progress: data.delivered.progress
                    });
        
                    updateCard(orderedCard, {
                        iconClass: 'bi bi-receipt text-warning',
                        title: 'Ordered',
                        description: data.ordered.items + ' New Items',
                        progress: data.ordered.progress
                    });
        
                    updateCard(reportedCard, {
                        iconClass: 'bi bi-bar-chart text-info',
                        title: 'Reported',
                        description: data.reported.cases + ' Support New Cases',
                        progress: data.reported.progress
                    });
        
                    updateCard(arrivedCard, {
                        iconClass: 'bi bi-cursor text-success',
                        title: 'Arrived',
                        description: data.arrived.boxed + ' Upgraded Boxed',
                        progress: data.arrived.progress
                    });
                });
            </script>
        </div>
        
        {{-- bảng thêm mới sản phẩm trong ngày --}}
        <div class="col-lg-7 col-md-12">
            <div class="card widget">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h5 class="card-title">Recent Products</h5>
                    <div class="dropdown ms-auto">
                        <a href="#" data-bs-toggle="dropdown" class="btn btn-sm btn-floating" aria-haspopup="true"
                           aria-expanded="false">
                            <i class="bi bi-three-dots"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a href="#" class="dropdown-item">Action</a>
                            <a href="#" class="dropdown-item">Another action</a>
                            <a href="#" class="dropdown-item">Something else here</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <p class="text-muted">Products added today. Click <a href="#">here</a> for more details</p>
                    <div class="table-responsive">
                        <table class="table table-custom mb-0" id="recent-products">
                            <thead>
                            <tr>
                                <th>
                                    <input class="form-check-input select-all" type="checkbox"
                                           data-select-all-target="#recent-products" id="defaultCheck1">
                                </th>
                                <th>Photo</th>
                                <th>Name</th>
                                <th>Stock</th>
                                <th>Price</th>
                                <th class="text-end">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>
                                    <input class="form-check-input" type="checkbox">
                                </td>
                                <td>
                                    <a href="#">
                                        <img src="../images/products/10.jpg" class="rounded" width="40"
                                             alt="...">
                                    </a>
                                </td>
                                <td>Cookie</td>
                                <td>
                                    <span class="text-danger">Out of Stock</span>
                                </td>
                                <td>$10,50</td>
                                <td class="text-end">
                                    <div class="d-flex">
                                        <div class="dropdown ms-auto">
                                            <a href="#" data-bs-toggle="dropdown"
                                               class="btn btn-floating"
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
    </div>

    </div>
@include('admin/footerAdmin')