@extends('admin.back-end.app')
@section('content')
<!-- index body start -->


            <div class="page-body"  >
                <div class="sortyear" style="display: flex; align-items: center;  width: 200px; margin-left: 30px;" >
                    <strong style="font-weight: 900;">Sort:</strong>
                    <select class="form-control" id="yearFilter" onchange="filterData()">
                        <!-- Thêm các option cho năm từ 2020 đến 2030 -->
                        <option value="{{ $selectedYear }}" selected>{{ $selectedYear }}</option>

                        @for ($year =2024; $year >= 2010; $year--)
                        <option value="{{ $year }}">{{ $year }}</option>
                    @endfor
                    </select>
                </div>

                <div class="container-fluid">
                    <div class="row">
                        <!-- chart card section start -->
                        <div class="col-sm-6 col-xxl-3 col-lg-6">
                            <div class="main-tiles border-5 border-0  card-hover card o-hidden">
                                <div class="custome-1-bg b-r-4 card-body">
                                    <div class="media align-items-center static-top-widget">
                                        <div class="media-body p-0">
                                            <span class="m-0">Total Revenue</span>
                                            <h4 class="mb-0 counter">${{ $totalMoney }}
                                                <span class="badge badge-light-primary grow">
                                                    <i data-feather="trending-up"></i>8.5%</span>
                                            </h4>
                                        </div>
                                        <div class="align-self-center text-center">
                                            <i class="ri-database-2-line"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-xxl-3 col-lg-6">
                            <div class="main-tiles border-5 card-hover border-0 card o-hidden">
                                <div class="custome-2-bg b-r-4 card-body">
                                    <div class="media static-top-widget">
                                        <div class="media-body p-0">
                                            <span class="m-0">Total Orders</span>
                                            <h4 class="mb-0 counter">{{ $totalBills }}
                                                <span class="badge badge-light-danger grow">
                                                    <i data-feather="trending-down"></i>8.5%</span>
                                            </h4>
                                        </div>
                                        <div class="align-self-center text-center">
                                            <i class="ri-shopping-bag-3-line"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-xxl-3 col-lg-6">
                            <div class="main-tiles border-5 card-hover border-0  card o-hidden">
                                <div class="custome-3-bg b-r-4 card-body">
                                    <div class="media static-top-widget">
                                        <div class="media-body p-0">
                                            <span class="m-0">Total Products</span>
                                            <h4 class="mb-0 counter">{{ $totalQuantity }}
                                                <a href="add-new-product.html" class="badge badge-light-secondary grow">
                                                    ADD NEW</a>
                                            </h4>
                                        </div>

                                        <div class="align-self-center text-center">
                                            <i class="ri-chat-3-line"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-xxl-3 col-lg-6">
                            <div class="main-tiles border-5 card-hover border-0 card o-hidden">
                                <div class="custome-4-bg b-r-4 card-body">
                                    <div class="media static-top-widget">
                                        <div class="media-body p-0">
                                            <span class="m-0">Total Customers</span>
                                            <h4 class="mb-0 counter">{{ $totalActiveUsers }}
                                                <span class="badge badge-light-success grow">
                                                    <i data-feather="trending-down"></i>8.5%</span>
                                            </h4>
                                        </div>

                                        <div class="align-self-center text-center">
                                            <i class="ri-user-add-line"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="card o-hidden card-hover">
                                <div class="card-header border-0 pb-1">
                                    <div class="card-header-title p-0">
                                        <h4>Category</h4>
                                    </div>
                                </div>
                                <div class="card-body p-0">
                                    <div class="category-slider no-arrow">

                                        {{-- <div>
                                            <div class="dashboard-category">
                                                <a href="javascript:void(0)" class="category-image">
                                                    <img src="{{ asset('back-end/assets/images/store-images' . $ $value->image) }}" class="img-fluid" alt="">
                                                </a>
                                                <a href="javascript:void(0)" class="category-name">
                                                    <h6>Vegetables & Fruit</h6>
                                                </a>
                                            </div>
                                        </div> --}}
                                        @foreach ($categories as $value)
                                        <div>
                                            <div class="dashboard-category">
                                                <a href="javascript:void(0)" class="category-image">
                                                    <img src="{{ asset('front-end/assets/images/category/' . $value->image_url) }}" class="img-fluid" alt="">
                                                <a href="javascript:void(0)" class="category-name">
                                                    <h6>{{$value->name}}</h6>
                                                </a>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- chart card section End -->


                        <!-- Earning chart star-->
                        <div class="col-xl-6">
                            <div class="card o-hidden card-hover">
                                <div class="card-header border-0 pb-1">
                                    <div class="card-header-title">
                                        <h4>Monthly revenue chart</h4>


                                    </div>
                                </div>
                                <div class="card-body p-0">

                                    <canvas id="report-chart"></canvas>
                                </div>
                            </div>
                        </div>

                        <!-- Earning chart  end-->


                        <!-- Best Selling Product Start -->
                        <div class="col-xl-6 col-md-12">
                            <div class="card o-hidden card-hover">
                                <div class="card-header card-header-top card-header--2 px-0 pt-0">
                                    <div class="card-header-title">
                                        <h4>Best Selling Product</h4>
                                    </div>

                                    <div class="best-selling-box d-sm-flex d-none">
                                        <span>Short By:</span>
                                        <div class="dropdown">
                                            <button class="btn p-0 dropdown-toggle" type="button"
                                                id="dropdownMenuButton1" data-bs-toggle="dropdown"
                                                data-bs-auto-close="true">Today</button>
                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <li><a class="dropdown-item" href="#">Action</a></li>
                                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-body p-0">
                                    <div>
                                        <div class="table-responsive">
                                            <table class="best-selling-table w-image
                                            w-image
                                            w-image table border-0">
                                                <tbody>

                                                    @foreach($topProducts as $product)
                                                    <tr>
                                                        <td>
                                                            <div class="best-product-box">
                                                                <div class="product-image">
                                                                    <img src="{{ asset('front-end/assets/images/product/' . $product->product->image) }}"
                                                                        class="img-fluid" alt="Product">
                                                                </div>
                                                                <div class="product-name">
                                                                    <h5>{{ $product->product->name }}</h5>
                                                                    <h6>26-08-2022</h6>
                                                                </div>
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="product-detail-box">
                                                                <h6>Price</h6>
                                                                <h5>${{ $product->product->price }}</h5>
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="product-detail-box">
                                                                <h6>Orders</h6>
                                                                <h5>{{ $product->total_quantity }}</h5>
                                                            </div>
                                                        </td>


                                                        <td>
                                                            <div class="product-detail-box">
                                                                <h6>Amount</h6>
                                                                <h5>${{ $product->product->price * $product->total_quantity }}</h5>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                @endforeach

                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Best Selling Product End -->


                        {{-- <!-- Recent orders start-->
                        <div class="col-xl-6">
                            <div class="card o-hidden card-hover">
                                <div class="card-header card-header-top card-header--2 px-0 pt-0">
                                    <div class="card-header-title">
                                        <h4>Recent Orders</h4>
                                    </div>

                                    <div class="best-selling-box d-sm-flex d-none">
                                        <span>Short By:</span>
                                        <div class="dropdown">
                                            <button class="btn p-0 dropdown-toggle" type="button"
                                                id="dropdownMenuButton2" data-bs-toggle="dropdown"
                                                data-bs-auto-close="true">Today</button>
                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                                <li><a class="dropdown-item" href="#">Action</a></li>
                                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-body p-0">
                                    <div>
                                        <div class="table-responsive">
                                            <table class="best-selling-table table border-0">
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="best-product-box">
                                                                <div class="product-name">
                                                                    <h5>Aata Buscuit</h5>
                                                                    <h6>#64548</h6>
                                                                </div>
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="product-detail-box">
                                                                <h6>Date Placed</h6>
                                                                <h5>5/1/22</h5>
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="product-detail-box">
                                                                <h6>Price</h6>
                                                                <h5>$250.00</h5>
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="product-detail-box">
                                                                <h6>Order Status</h6>
                                                                <h5>Completed</h5>
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="product-detail-box">
                                                                <h6>Payment</h6>
                                                                <h5 class="text-danger">Unpaid</h5>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <div class="best-product-box">
                                                                <div class="product-name">
                                                                    <h5>Aata Buscuit</h5>
                                                                    <h6>26-08-2022</h6>
                                                                </div>
                                                            </div>
                                                        </td>


                                                        <td>
                                                            <div class="product-detail-box">
                                                                <h6>Date Placed</h6>
                                                                <h5>5/1/22</h5>
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="product-detail-box">
                                                                <h6>Price</h6>
                                                                <h5>$250.00</h5>
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="product-detail-box">
                                                                <h6>Order Status</h6>
                                                                <h5>Completed</h5>
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="product-detail-box">
                                                                <h6>Payment</h6>
                                                                <h5 class="theme-color">Paid</h5>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <div class="best-product-box">
                                                                <div class="product-name">
                                                                    <h5>Aata Buscuit</h5>
                                                                    <h6>26-08-2022</h6>
                                                                </div>
                                                            </div>
                                                        </td>


                                                        <td>
                                                            <div class="product-detail-box">
                                                                <h6>Date Placed</h6>
                                                                <h5>5/1/22</h5>
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="product-detail-box">
                                                                <h6>Price</h6>
                                                                <h5>$250.00</h5>
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="product-detail-box">
                                                                <h6>Order Status</h6>
                                                                <h5>Completed</h5>
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="product-detail-box">
                                                                <h6>Payment</h6>
                                                                <h5 class="theme-color">Paid</h5>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <div class="best-product-box">
                                                                <div class="product-name">
                                                                    <h5>Aata Buscuit</h5>
                                                                    <h6>26-08-2022</h6>
                                                                </div>
                                                            </div>
                                                        </td>


                                                        <td>
                                                            <div class="product-detail-box">
                                                                <h6>Date Placed</h6>
                                                                <h5>5/1/22</h5>
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="product-detail-box">
                                                                <h6>Price</h6>
                                                                <h5>$250.00</h5>
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="product-detail-box">
                                                                <h6>Order Status</h6>
                                                                <h5>Completed</h5>
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="product-detail-box">
                                                                <h6>Payment</h6>
                                                                <h5 class="theme-color">Paid</h5>
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
                        <!-- Recent orders end-->

                        <!-- Earning chart star-->
                        <div class="col-xl-6">
                            <div class="card o-hidden card-hover">
                                <div class="card-header border-0 pb-1">
                                    <div class="card-header-title">
                                        <h4>Revenue Report</h4>
                                    </div>
                                </div>
                                <div class="card-body p-0">
                                    <div id="report-chart"></div>
                                </div>
                            </div>
                        </div>
                        <!-- Earning chart end-->
 --}}

                        <!-- Transactions start-->
                        <div class="col-xxl-4 col-md-6">
                            <div class="card o-hidden card-hover">
                                <div class="card-header border-0">
                                    <div class="card-header-title">
                                        <h4>Transactions</h4>
                                    </div>
                                </div>

                                <div class="card-body pt-0">
                                    <div>
                                        <div class="table-responsive">
                                            <table class="user-table transactions-table table border-0">
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="transactions-icon">
                                                                <i class="ri-shield-line"></i>
                                                            </div>
                                                            <div class="transactions-name">
                                                                <h6>Wallets</h6>
                                                                <p>Starbucks</p>
                                                            </div>
                                                        </td>

                                                        <td class="lost">-$74</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="td-color-1">
                                                            <div class="transactions-icon">
                                                                <i class="ri-check-line"></i>
                                                            </div>
                                                            <div class="transactions-name">
                                                                <h6>Bank Transfer</h6>
                                                                <p>Add Money</p>
                                                            </div>
                                                        </td>

                                                        <td class="success">+$125</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="td-color-2">
                                                            <div class="transactions-icon">
                                                                <i class="ri-exchange-dollar-line"></i>
                                                            </div>
                                                            <div class="transactions-name">
                                                                <h6>Paypal</h6>
                                                                <p>Add Money</p>
                                                            </div>
                                                        </td>

                                                        <td class="lost">-$50</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="td-color-3">
                                                            <div class="transactions-icon">
                                                                <i class="ri-bank-card-line"></i>
                                                            </div>
                                                            <div class="transactions-name">
                                                                <h6>Mastercard</h6>
                                                                <p>Ordered Food</p>
                                                            </div>
                                                        </td>

                                                        <td class="lost">-$40</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="td-color-4 pb-0">
                                                            <div class="transactions-icon">
                                                                <i class="ri-bar-chart-grouped-line"></i>
                                                            </div>
                                                            <div class="transactions-name">
                                                                <h6>Transfer</h6>
                                                                <p>Refund</p>
                                                            </div>
                                                        </td>

                                                        <td class="success pb-0">+$90</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Transactions end-->

                        <!-- visitors chart start-->
                        {{-- <div class="col-xxl-4 col-md-6">
                            <div class="h-100">
                                <div class="card o-hidden card-hover">
                                    <div class="card-header border-0">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div class="card-header-title">
                                                <h4>Visitors</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body pt-0">
                                        <div class="pie-chart">
                                            <div id="pie-chart-visitors"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                        <!-- visitors chart end-->


                        <!-- To Do List start-->
                        <div class="col-xxl-4 col-md-6">
                            <div class="card o-hidden card-hover">
                                <div class="card-header border-0">
                                    <div class="card-header-title">
                                        <h4>To Do List</h4>
                                    </div>
                                </div>

                                <div class="card-body pt-0">
                                    <ul class="to-do-list">
                                        <li class="to-do-item">
                                            <div class="form-check user-checkbox">
                                                <input class="checkbox_animated check-it" type="checkbox" value=""
                                                    id="flexCheckDefault">
                                            </div>
                                            <div class="to-do-list-name">
                                                <strong>Pick up kids from school</strong>
                                                <p>8 Hours</p>
                                            </div>
                                        </li>
                                        <li class="to-do-item">
                                            <div class="form-check user-checkbox">
                                                <input class="checkbox_animated check-it" type="checkbox" value=""
                                                    id="flexCheckDefault1">
                                            </div>
                                            <div class="to-do-list-name">
                                                <strong>Prepare or presentation.</strong>
                                                <p>8 Hours</p>
                                            </div>
                                        </li>
                                        <li class="to-do-item">
                                            <div class="form-check user-checkbox">
                                                <input class="checkbox_animated check-it" type="checkbox" value=""
                                                    id="flexCheckDefault2">
                                            </div>
                                            <div class="to-do-list-name">
                                                <strong>Create invoice</strong>
                                                <p>8 Hours</p>
                                            </div>
                                        </li>
                                        <li class="to-do-item">
                                            <div class="form-check user-checkbox">
                                                <input class="checkbox_animated check-it" type="checkbox" value=""
                                                    id="flexCheckDefault3">
                                            </div>
                                            <div class="to-do-list-name">
                                                <strong>Meeting with Alisa</strong>
                                                <p>8 Hours</p>
                                            </div>
                                        </li>

                                        <li class="to-do-item">
                                            <form class="row g-2">
                                                <div class="col-8">
                                                    <input type="text" class="form-control" id="name"
                                                        placeholder="Enter Task Name">
                                                </div>
                                                <div class="col-4">
                                                    <button type="submit" class="btn btn-primary w-100 h-100">Add
                                                        task</button>
                                                </div>
                                            </form>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- To Do List end-->


                    </div>
                </div>
                <!-- Container-fluid Ends-->
            </div>
            <!-- index body end -->

            {{-- <script src="https://cdn.jsdelivr.net/npm/chart.js"></script> --}}
            <script src="{{ asset('back-end/assets/js/chart/apex-chart/chart.js') }}"></script>
  <script>
var totalOrders = <?php echo json_encode($totalOrder); ?>;
var totalBills = <?php echo json_encode($totalAmounts); ?>;

// Lấy thẻ canvas từ HTML
var ctx = document.getElementById('report-chart').getContext('2d');

// Tạo biểu đồ cột
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {

        datasets: [{
            label: 'Total Orders',
            data: totalOrders,
            backgroundColor: 'rgba(255, 99, 132, 0.5)', // Màu nền của cột cho số lượng đơn hàng (order)
            borderColor: 'rgba(255, 99, 132, 1)', // Màu viền của cột cho số lượng đơn hàng (order)
            borderWidth: 1
        },
        {
            label: 'Total Bills $:dollar',
            data: totalBills,
            backgroundColor: 'rgba(54, 162, 235, 0.5)', // Màu nền của cột cho tổng số hóa đơn (total bill)
            borderColor: 'rgba(54, 162, 235, 1)', // Màu viền của cột cho tổng số hóa đơn (total bill)
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});

            function filterData() {
        var selectedYear = document.getElementById('yearFilter').value;
        // Chuyển hướng đến trang mới với năm được chọn
        window.location.href = '{{ route("showDashboard") }}?year=' + selectedYear;

    }



    </script>


@endsection
