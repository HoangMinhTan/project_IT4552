@extends('admin.master')

@section('content')
<div class="page-wrapper">
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Three charts -->
        <!-- ============================================================== -->
        <div class="row justify-content-center">
            <div class="col-lg-4 col-sm-6 col-xs-12">
                <div class="white-box analytics-info">
                    <h3 class="box-title">Total Bill</h3>
                    <ul class="list-inline two-part d-flex align-items-center mb-0">
                        <li>
                            <div id="sparklinedash"><canvas width="67" height="30"
                                    style="display: inline-block; width: 67px; height: 30px; vertical-align: top;"></canvas>
                            </div>
                        </li>
                        <li class="ml-auto"><span class="counter text-success">{{$count_bill}}</span></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-xs-12">
                <div class="white-box analytics-info">
                    <h3 class="box-title">Total Customer</h3>
                    <ul class="list-inline two-part d-flex align-items-center mb-0">
                        <li>
                            <div id="sparklinedash2"><canvas width="67" height="30"
                                    style="display: inline-block; width: 67px; height: 30px; vertical-align: top;"></canvas>
                            </div>
                        </li>
                        <li class="ml-auto"><span class="counter text-purple">{{$count_customer}}</span></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-xs-12">
                <div class="white-box analytics-info">
                    <h3 class="box-title">Total Product</h3>
                    <ul class="list-inline two-part d-flex align-items-center mb-0">
                        <li>
                            <div id="sparklinedash3"><canvas width="67" height="30"
                                    style="display: inline-block; width: 67px; height: 30px; vertical-align: top;"></canvas>
                            </div>
                        </li>
                        <li class="ml-auto"><span class="counter text-info">911</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        

        <!-- ============================================================== -->
        <!-- PRODUCTS YEARLY SALES -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                <div class="white-box">
                    <h3 class="box-title">Account</h3>
                    <div class="d-md-flex">
                        <ul class="list-inline d-flex ml-auto">
                            {{-- <li class="pl-3">
                                <h5><i class="fa fa-circle m-r-5 text-info"></i>Mac</h5>
                            </li>
                            <li class="pl-3">
                                <h5><i class="fa fa-circle m-r-5 text-inverse"></i>Windows</h5>
                            </li> --}}
                        </ul>
                    </div>
                    <div id="chart" style="height: 300px;"></div>
   
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- RECENT SALES -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-md-12 col-lg-12 col-sm-12">
                <div class="white-box">
                    <div class="d-md-flex mb-3">
                        <h3 class="box-title mb-0">Recent sales</h3>
                        <div class="col-md-3 col-sm-4 col-xs-6 ml-auto">
                            <select class="form-control row border-top">
                                <option>March 2017</option>
                                <option>April 2017</option>
                                <option>May 2017</option>
                                <option>June 2017</option>
                                <option>July 2017</option>
                            </select>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table no-wrap">
                            <thead>
                                <tr>
                                    <th class="border-top-0">#</th>
                                    <th class="border-top-0">NAME</th>
                                    <th class="border-top-0">STATUS</th>
                                    <th class="border-top-0">DATE</th>
                                    <th class="border-top-0">PRICE</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td class="txt-oflo">Elite admin</td>
                                    <td>SALE</td>
                                    <td class="txt-oflo">April 18, 2017</td>
                                    <td><span class="text-success">$24</span></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td class="txt-oflo">Real Homes WP Theme</td>
                                    <td>EXTENDED</td>
                                    <td class="txt-oflo">April 19, 2017</td>
                                    <td><span class="text-info">$1250</span></td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td class="txt-oflo">Ample Admin</td>
                                    <td>EXTENDED</td>
                                    <td class="txt-oflo">April 19, 2017</td>
                                    <td><span class="text-info">$1250</span></td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td class="txt-oflo">Medical Pro WP Theme</td>
                                    <td>TAX</td>
                                    <td class="txt-oflo">April 20, 2017</td>
                                    <td><span class="text-danger">-$24</span></td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td class="txt-oflo">Hosting press html</td>
                                    <td>SALE</td>
                                    <td class="txt-oflo">April 21, 2017</td>
                                    <td><span class="text-success">$24</span></td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td class="txt-oflo">Digital Agency PSD</td>
                                    <td>SALE</td>
                                    <td class="txt-oflo">April 23, 2017</td>
                                    <td><span class="text-danger">-$14</span></td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td class="txt-oflo">Helping Hands WP Theme</td>
                                    <td>MEMBER</td>
                                    <td class="txt-oflo">April 22, 2017</td>
                                    <td><span class="text-success">$64</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Recent Comments -->
        <!-- ============================================================== -->
        <div class="row">
            <!-- .col -->
            <div class="col-md-12 col-lg-8 col-sm-12">
                <div class="white-box">
                    <h3 class="box-title mb-0">Recent Comments</h3>
                    <div class="comment-center">
                        <div class="comment-body d-flex">
                            <div class="user-img"> <img src="plugins/images/users/pawandeep.jpg" alt="user"
                                    class="img-circle">
                            </div>
                            <div class="mail-contnet">
                                <h5>Pavan kumar</h5><span class="time">10:20 AM 20 may 2016</span>
                                <br>
                                <div class="mb-3 mt-3">
                                    <span class="mail-desc">Donec ac condimentum massa. Etiam pellentesque
                                        pretium lacus. Phasellus ultricies dictum suscipit. Aenean commodo dui
                                        pellentesque molestie feugiat. Aenean commodo dui </span>
                                </div>
                                <a href="javacript:void(0)"
                                    class="btn btn btn-rounded btn-default btn-outline mb-2 mb-md-0 m-r-5"><i
                                        class="ti-check text-success m-r-5"></i>Approve</a><a
                                    href="javacript:void(0)" class="btn-rounded btn btn-default btn-outline"><i
                                        class="ti-close text-danger m-r-5"></i>
                                    Reject</a>
                            </div>
                        </div>
                        <div class="comment-body d-flex">
                            <div class="user-img"> <img src="plugins/images/users/sonu.jpg" alt="user"
                                    class="img-circle">
                            </div>
                            <div class="mail-contnet">
                                <h5>Sonu Nigam</h5><span class="time">10:20 AM 20 may 2016</span>
                                <br>
                                <div class="mb-3 mt-3">
                                    <span class="mail-desc">Donec ac condimentum massa. Etiam pellentesque
                                        pretium lacus. Phasellus ultricies dictum suscipit. Aenean commodo dui
                                        pellentesque molestie feugiat. Aenean commodo dui </span>
                                </div>
                            </div>
                        </div>
                        <div class="comment-body d-flex border-0">
                            <div class="user-img"> <img src="plugins/images/users/arijit.jpg" alt="user"
                                    class="img-circle">
                            </div>
                            <div class="mail-contnet">
                                <h5>Arijit singh</h5><span class="time">10:20 AM 20 may 2016</span>
                                <br>
                                <div class="mb-3 mt-3">
                                    <span class="mail-desc">Donec ac condimentum massa. Etiam pellentesque
                                        pretium lacus. Phasellus ultricies dictum suscipit. Aenean commodo dui
                                        pellentesque molestie feugiat. Aenean commodo dui </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12">
                <div class="card">
                    <div class="card-heading">
                        CHAT LISTING
                    </div>
                    <div class="card-body">
                        <ul class="chatonline">
                            <li>
                                <div class="call-chat">
                                    <button class="btn btn-success text-white btn-circle btn" type="button">
                                        <i class="fas fa-phone"></i>
                                    </button>
                                    <button class="btn btn-info btn-circle btn" type="button">
                                        <i class="far fa-comments"></i>
                                    </button>
                                </div>
                                <a href="javascript:void(0)" class="d-flex align-items-center"><img
                                        src="plugins/images/users/varun.jpg" alt="user-img" class="img-circle">
                                    <div class="ml-2">
                                        <span class="text-dark text-muted">Varun Dhavan <small
                                                class="d-block text-success d-block">online</small></span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <div class="call-chat">
                                    <button class="btn btn-success text-white btn-circle btn" type="button">
                                        <i class="fas fa-phone"></i>
                                    </button>
                                    <button class="btn btn-info btn-circle btn" type="button">
                                        <i class="far fa-comments"></i>
                                    </button>
                                </div>
                                <a href="javascript:void(0)" class="d-flex align-items-center"><img
                                        src="plugins/images/users/genu.jpg" alt="user-img" class="img-circle">
                                    <div class="ml-2">
                                        <span class="text-dark text-muted">Genelia
                                            Deshmukh <small class="d-block text-warning">Away</small></span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <div class="call-chat">
                                    <button class="btn btn-success text-white btn-circle btn" type="button">
                                        <i class="fas fa-phone"></i>
                                    </button>
                                    <button class="btn btn-info btn-circle btn" type="button">
                                        <i class="far fa-comments"></i>
                                    </button>
                                </div>
                                <a href="javascript:void(0)" class="d-flex align-items-center"><img
                                        src="plugins/images/users/ritesh.jpg" alt="user-img" class="img-circle">
                                    <div class="ml-2">
                                        <span class="text-dark text-muted">Ritesh
                                            Deshmukh <small class="d-block text-danger">Busy</small></span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <div class="call-chat">
                                    <button class="btn btn-success text-white btn-circle btn" type="button">
                                        <i class="fas fa-phone"></i>
                                    </button>
                                    <button class="btn btn-info btn-circle btn" type="button">
                                        <i class="far fa-comments"></i>
                                    </button>
                                </div>
                                <a href="javascript:void(0)" class="d-flex align-items-center"><img
                                        src="plugins/images/users/arijit.jpg" alt="user-img" class="img-circle">
                                    <div class="ml-2">
                                        <span class="text-dark text-muted">Arijit
                                            Sinh <small class="d-block text-muted">Offline</small></span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <div class="call-chat">
                                    <button class="btn btn-success text-white btn-circle btn" type="button">
                                        <i class="fas fa-phone"></i>
                                    </button>
                                    <button class="btn btn-info btn-circle btn" type="button">
                                        <i class="far fa-comments"></i>
                                    </button>
                                </div>
                                <a href="javascript:void(0)" class="d-flex align-items-center"><img
                                        src="plugins/images/users/govinda.jpg" alt="user-img"
                                        class="img-circle">
                                    <div class="ml-2">
                                        <span class="text-dark text-muted">Govinda
                                            Star <small class="d-block text-success">online</small></span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <div class="call-chat">
                                    <button class="btn btn-success text-white btn-circle btn" type="button">
                                        <i class="fas fa-phone"></i>
                                    </button>
                                    <button class="btn btn-info btn-circle btn" type="button">
                                        <i class="far fa-comments"></i>
                                    </button>
                                </div>
                                <a href="javascript:void(0)" class="d-flex align-items-center"><img
                                        src="plugins/images/users/hritik.jpg" alt="user-img" class="img-circle">
                                    <div class="ml-2">
                                        <span class="text-dark text-muted">John
                                            Abraham<small class="d-block text-success">online</small></span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <div class="call-chat">
                                    <button class="btn btn-success text-white btn-circle btn" type="button">
                                        <i class="fas fa-phone"></i>
                                    </button>
                                    <button class="btn btn-info btn-circle btn" type="button">
                                        <i class="far fa-comments"></i>
                                    </button>
                                </div>
                                <a href="javascript:void(0)" class="d-flex align-items-center"><img
                                        src="plugins/images/users/varun.jpg" alt="user-img" class="img-circle">
                                    <div class="ml-2">
                                        <span class="text-dark text-muted">Varun
                                            Dhavan <small class="d-block text-success">online</small></span>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /.col -->
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- footer -->
    <!-- ============================================================== -->
    <footer class="footer text-center"> 2020 © Ample Admin brought to you by <a
            href="https://www.wrappixel.com/">wrappixel.com</a>
    </footer>
    <!-- ============================================================== -->
    <!-- End footer -->
    <!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Page wrapper  -->
<!-- ============================================================== -->
<script src="https://unpkg.com/chart.js@2.9.3/dist/Chart.min.js"></script>
	<!-- Chartisan -->
	<script src="https://unpkg.com/@chartisan/chartjs@^2.1.0/dist/chartisan_chartjs.umd.js"></script>
    <script>
      const chart = new Chartisan({
        el: '#chart',
        url: "@chart('chart')",
        hooks: new ChartisanHooks()
    .beginAtZero()
    .colors(['#e7f3fb', '#4c5667'])
    .borderColors(['#2cabe3', '#4c5667'])
    .datasets([{ type: 'line', fill: true,  },{ type: 'line', fill: false }]),
      
      });
    </script>

@endsection
        