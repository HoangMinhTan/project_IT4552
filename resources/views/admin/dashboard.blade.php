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
                        <li class="ml-auto"><span class="counter text-info">{{$count_product}}</span>
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
        