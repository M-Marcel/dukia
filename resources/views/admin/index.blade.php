@extends('layouts.master')

@section('css')
<link rel="stylesheet" href="{{ URL::asset('assets/plugins/morris/morris.css')}}">
@endsection

@section('breadcrumb')
							<h4 class="page-title">Admin Dashboard</h4>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item active">
                                    Welcome to DuKia Admin Dashboard
                                </li>
                            </ol>
@endsection

@section('content')
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-3 col-md-6">
                        <div class="card mini-stat bg-primary">
                            <div class="card-body mini-stat-img">
                                <div class="mini-stat-icon">
                                    <i class="mdi mdi-cube-outline float-right"></i>
                                </div>
                                <div class="text-white">
                                    <h6 class="text-uppercase mb-3">Total Transaction</h6>
                                    <h4 class="mb-4">1,587</h4>
                                    <span class="badge badge-info"> +11% </span> <span class="ml-2">From previous period</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card mini-stat bg-primary">
                            <div class="card-body mini-stat-img">
                                <div class="mini-stat-icon">
                                    <i class="mdi mdi-buffer float-right"></i>
                                </div>
                                <div class="text-white">
                                    <h6 class="text-uppercase mb-3">Gold Value</h6>
                                    <h4 class="mb-4">$46,782</h4>
                                    <span class="badge badge-danger"> -29% </span> <span class="ml-2">From previous period</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card mini-stat bg-primary">
                            <div class="card-body mini-stat-img">
                                <div class="mini-stat-icon">
                                    <i class="mdi mdi-tag-text-outline float-right"></i>
                                </div>
                                <div class="text-white">
                                    <h6 class="text-uppercase mb-3">Revenue</h6>
                                    <h4 class="mb-4">$15.9</h4>
                                    <span class="badge badge-warning"> 0% </span> <span class="ml-2">From previous period</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card mini-stat bg-primary">
                            <div class="card-body mini-stat-img">
                                <div class="mini-stat-icon">
                                    <i class="mdi mdi-briefcase-check float-right"></i>
                                </div>
                                <div class="text-white">
                                    <h6 class="text-uppercase mb-3">Buyer</h6>
                                    <h4 class="mb-4">1890</h4>
                                    <span class="badge badge-info"> +89% </span> <span class="ml-2">From previous period</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->

                <div class="row">

                    <div class="col-xl-3">
                        <div class="card m-b-20">
                            <div class="card-body">
                                <h4 class="mt-0 header-title">Monthly Earnings</h4>

                                <div class="row text-center m-t-20">
                                    <div class="col-6">
                                        <h5 class="">$56241</h5>
                                        <p class="text-muted font-14">Gold Value</p>
                                    </div>
                                    <div class="col-6">
                                        <h5 class="">$23651</h5>
                                        <p class="text-muted font-14">Total Income</p>
                                    </div>
                                </div>

                                <div id="morris-donut-example" class="dashboard-charts morris-charts"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6">
                        <div class="card m-b-20">
                            <div class="card-body">
                                <h4 class="mt-0 header-title">Email Sent</h4>

                                <div class="row text-center m-t-20">
                                    <div class="col-4">
                                        <h5 class="">$ 89425</h5>
                                        <p class="text-muted font-14">Marketplace</p>
                                    </div>
                                    <div class="col-4">
                                        <h5 class="">$ 56210</h5>
                                        <p class="text-muted font-14">Total Income</p>
                                    </div>
                                    <div class="col-4">
                                        <h5 class="">$ 8974</h5>
                                        <p class="text-muted font-14">Last Month</p>
                                    </div>
                                </div>

                                <div id="morris-area-example" class="dashboard-charts morris-charts"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3">
                        <div class="card m-b-20">
                            <div class="card-body">
                                <h4 class="mt-0 header-title">Monthly Logistics</h4>

                                <div class="row text-center m-t-20">
                                    <div class="col-6">
                                        <h5 class="">$ 2548</h5>
                                        <p class="text-muted font-14">Marketplace</p>
                                    </div>
                                    <div class="col-6">
                                        <h5 class="">$ 6985</h5>
                                        <p class="text-muted font-14">Total Income</p>
                                    </div>
                                </div>

                                <div id="morris-bar-stacked" class="dashboard-charts morris-charts"></div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- end row -->

                <div class="row">
                    
                    <div class="col-xl-4 col-lg-6">
                        <div class="card m-b-20">
                            <div class="card-body">
                                <h4 class="mt-0 header-title mb-3">Inbox</h4>
                                <div class="inbox-wid">
                                    <a href="#" class="text-dark">
                                        <div class="inbox-item">
                                            <div class="inbox-item-img float-left mr-3"><img src="{{url('/')}}/assets/images/users/user-1.jpg" class="thumb-md rounded-circle" alt=""></div>
                                            <h6 class="inbox-item-author mt-0 mb-1">Misty</h6>
                                            <p class="inbox-item-text text-muted mb-0">Hey! there I'm available...</p>
                                            <p class="inbox-item-date text-muted">13:40 PM</p>
                                        </div>
                                    </a>
                                    <a href="#" class="text-dark">
                                        <div class="inbox-item">
                                            <div class="inbox-item-img float-left mr-3"><img src="{{url('/')}}/assets/images/users/user-2.jpg" class="thumb-md rounded-circle" alt=""></div>
                                            <h6 class="inbox-item-author mt-0 mb-1">Melissa</h6>
                                            <p class="inbox-item-text text-muted mb-0">I've finished it! See you so...</p>
                                            <p class="inbox-item-date text-muted">13:34 PM</p>
                                        </div>
                                    </a>
                                    <a href="#" class="text-dark">
                                        <div class="inbox-item">
                                            <div class="inbox-item-img float-left mr-3"><img src="{{url('/')}}/assets/images/users/user-3.jpg" class="thumb-md rounded-circle" alt=""></div>
                                            <h6 class="inbox-item-author mt-0 mb-1">Dwayne</h6>
                                            <p class="inbox-item-text text-muted mb-0">This theme is awesome!</p>
                                            <p class="inbox-item-date text-muted">13:17 PM</p>
                                        </div>
                                    </a>
                                    <a href="#" class="text-dark">
                                        <div class="inbox-item">
                                            <div class="inbox-item-img float-left mr-3"><img src="{{url('/')}}/assets/images/users/user-4.jpg" class="thumb-md rounded-circle" alt=""></div>
                                            <h6 class="inbox-item-author mt-0 mb-1">Martin</h6>
                                            <p class="inbox-item-text text-muted mb-0">Nice to meet you</p>
                                            <p class="inbox-item-date text-muted">12:20 PM</p>
                                        </div>
                                    </a>
                                    <a href="#" class="text-dark">
                                        <div class="inbox-item">
                                            <div class="inbox-item-img float-left mr-3"><img src="{{url('/')}}/assets/images/users/user-5.jpg" class="thumb-md rounded-circle" alt=""></div>
                                            <h6 class="inbox-item-author mt-0 mb-1">Vincent</h6>
                                            <p class="inbox-item-text text-muted mb-0">Hey! there I'm available...</p>
                                            <p class="inbox-item-date text-muted">11:47 AM</p>
                                        </div>
                                    </a>

                                    <a href="#" class="text-dark">
                                        <div class="inbox-item">
                                            <div class="inbox-item-img float-left mr-3"><img src="{{url('/')}}/assets/images/users/user-6.jpg" class="thumb-md rounded-circle" alt=""></div>
                                            <h6 class="inbox-item-author mt-0 mb-1">Robert Chappa</h6>
                                            <p class="inbox-item-text text-muted mb-0">Hey! there I'm available...</p>
                                            <p class="inbox-item-date text-muted">10:12 AM</p>
                                        </div>
                                    </a>
                                    
                                </div>  
                            </div>
                        </div>

                    </div>
                    <div class="col-xl-4 col-lg-6">
                        <div class="card m-b-20">
                            <div class="card-body">
                                <h4 class="mt-0 header-title mb-4">Recent Activity Feed</h4>

                                <ol class="activity-feed mb-0">
                                    <li class="feed-item">
                                        <div class="feed-item-list">
                                            <span class="date">Jun 25</span>
                                            <span class="activity-text">Responded to need “Volunteer Activities”</span>
                                        </div>
                                    </li>
                                    <li class="feed-item">
                                        <div class="feed-item-list">
                                            <span class="date">Jun 24</span>
                                            <span class="activity-text">Added an interest “Volunteer Activities”</span>
                                        </div>
                                    </li>
                                    <li class="feed-item">
                                        <div class="feed-item-list">
                                            <span class="date">Jun 23</span>
                                            <span class="activity-text">Joined the group “Boardsmanship Forum”</span>
                                        </div>
                                    </li>
                                    <li class="feed-item">
                                        <div class="feed-item-list">
                                            <span class="date">Jun 21</span>
                                            <span class="activity-text">Responded to need “In-Kind Opportunity”</span>
                                        </div>
                                    </li>
                                </ol>

                                <div class="text-center">
                                    <a href="#" class="btn btn-sm btn-primary">Load More</a>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-xl-4">
                        <div class="card widget-user m-b-20">
                            <div class="widget-user-desc p-4 text-center bg-primary position-relative">
                                <i class="fas fa-quote-left h3 text-white-50"></i>
                                <p class="text-white mb-0">The European languages are members of the same family. Their separate existence is a myth. For science, music, sport, etc, Europe the same vocabulary. The languages only in their grammar.</p>
                            </div>
                            <div class="p-4">
                                <div class="float-left mt-2 mr-3">
                                    <img src="{{url('/')}}/assets/images/users/user-2.jpg" alt="" class="rounded-circle thumb-md">
                                </div>
                                <h6 class="mb-1">Marie Minnick</h6>
                                <p class="text-muted mb-0">Marketing Manager</p>
                            </div>
                        </div>
                        <div class="card m-b-20">
                            <div class="card-body">
                                <h4 class="mt-0 header-title mb-3">Yearly Sales</h4>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div>
                                            <h3>52,345</h3>
                                            <p class="text-muted">The languages only differ grammar</p>
                                            <a href="#" class="text-primary">Learn more <i class="mdi mdi-chevron-double-right"></i></a>
                                        </div>
                                    </div>
                                    <div class="col-md-8 text-right">
                                        <div id="sparkline"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- end row -->
                <div class="row">
                    <div class="col-xl-6">
                        <div class="card m-b-20">
                            <div class="card-body">
                                <h4 class="mt-0 m-b-30 header-title">Latest Transactions</h4>

                                <div class="table-responsive">
                                    <table class="table table-vertical">

                                        <tbody>
                                        <tr>
                                            <td>
                                                <img src="{{url('/')}}/assets/images/users/user-2.jpg" alt="user-image" class="thumb-sm rounded-circle mr-2"/>
                                                Herbert C. Patton
                                            </td>
                                            <td><i class="mdi mdi-checkbox-blank-circle text-success"></i> Confirm</td>
                                            <td>
                                                $14,584
                                                <p class="m-0 text-muted font-14">Amount</p>
                                            </td>
                                            <td>
                                                5/12/2016
                                                <p class="m-0 text-muted font-14">Date</p>
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-secondary btn-sm waves-effect waves-light">Edit</button>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <img src="{{url('/')}}/assets/images/users/user-3.jpg" alt="user-image" class="thumb-sm rounded-circle mr-2"/>
                                                Mathias N. Klausen
                                            </td>
                                            <td><i class="mdi mdi-checkbox-blank-circle text-warning"></i> Waiting payment</td>
                                            <td>
                                                $8,541
                                                <p class="m-0 text-muted font-14">Amount</p>
                                            </td>
                                            <td>
                                                10/11/2016
                                                <p class="m-0 text-muted font-14">Date</p>
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-secondary btn-sm waves-effect waves-light">Edit</button>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <img src="{{url('/')}}/assets/images/users/user-4.jpg" alt="user-image" class="thumb-sm rounded-circle mr-2"/>
                                                Nikolaj S. Henriksen
                                            </td>
                                            <td><i class="mdi mdi-checkbox-blank-circle text-success"></i> Confirm</td>
                                            <td>
                                                $954
                                                <p class="m-0 text-muted font-14">Amount</p>
                                            </td>
                                            <td>
                                                8/11/2016
                                                <p class="m-0 text-muted font-14">Date</p>
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-secondary btn-sm waves-effect waves-light">Edit</button>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <img src="{{url('/')}}/assets/images/users/user-5.jpg" alt="user-image" class="thumb-sm rounded-circle mr-2"/>
                                                Lasse C. Overgaard
                                            </td>
                                            <td><i class="mdi mdi-checkbox-blank-circle text-danger"></i> Payment expired</td>
                                            <td>
                                                $44,584
                                                <p class="m-0 text-muted font-14">Amount</p>
                                            </td>
                                            <td>
                                                7/11/2016
                                                <p class="m-0 text-muted font-14">Date</p>
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-secondary btn-sm waves-effect waves-light">Edit</button>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <img src="{{url('/')}}/assets/images/users/user-6.jpg" alt="user-image" class="thumb-sm rounded-circle mr-2"/>
                                                Kasper S. Jessen
                                            </td>
                                            <td><i class="mdi mdi-checkbox-blank-circle text-success"></i> Confirm</td>
                                            <td>
                                                $8,844
                                                <p class="m-0 text-muted font-14">Amount</p>
                                            </td>
                                            <td>
                                                1/11/2016
                                                <p class="m-0 text-muted font-14">Date</p>
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-secondary btn-sm waves-effect waves-light">Edit</button>
                                            </td>
                                        </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6">
                        <div class="card m-b-20">
                            <div class="card-body">
                                <h4 class="mt-0 m-b-30 header-title">Latest Orders</h4>

                                <div class="table-responsive">
                                    <table class="table table-vertical mb-1">

                                        <tbody>
                                        <tr>
                                            <td>#12354781</td>
                                            <td>
                                                <img src="{{url('/')}}/assets/images/users/user-1.jpg" alt="user-image" class="thumb-sm mr-2 rounded-circle"/>
                                                Riverston Glass Chair
                                            </td>
                                            <td><span class="badge badge-pill badge-success">Delivered</span></td>
                                            <td>
                                                $185
                                            </td>
                                            <td>
                                                5/12/2016
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-secondary btn-sm waves-effect waves-light">Edit</button>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>#52140300</td>
                                            <td>
                                                <img src="{{url('/')}}/assets/images/users/user-2.jpg" alt="user-image" class="thumb-sm mr-2 rounded-circle"/>
                                                Shine Company Catalina
                                            </td>
                                            <td><span class="badge badge-pill badge-success">Delivered</span></td>
                                            <td>
                                                $1,024
                                            </td>
                                            <td>
                                                5/12/2016
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-secondary btn-sm waves-effect waves-light">Edit</button>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>#96254137</td>
                                            <td>
                                                <img src="{{url('/')}}/assets/images/users/user-3.jpg" alt="user-image" class="thumb-sm mr-2 rounded-circle"/>
                                                Trex Outdoor Furniture Cape
                                            </td>
                                            <td><span class="badge badge-pill badge-danger">Cancel</span></td>
                                            <td>
                                                $657
                                            </td>
                                            <td>
                                                5/12/2016
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-secondary btn-sm waves-effect waves-light">Edit</button>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>#12365474</td>
                                            <td>
                                                <img src="{{url('/')}}/assets/images/users/user-4.jpg" alt="user-image" class="thumb-sm mr-2 rounded-circle"/>
                                                Oasis Bathroom Teak Corner
                                            </td>
                                            <td><span class="badge badge-pill badge-warning">Shipped</span></td>
                                            <td>
                                                $8451
                                            </td>
                                            <td>
                                                5/12/2016
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-secondary btn-sm waves-effect waves-light">Edit</button>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>#85214796</td>
                                            <td>
                                                <img src="{{url('/')}}/assets/images/users/user-5.jpg" alt="user-image" class="thumb-sm mr-2 rounded-circle"/>
                                                BeoPlay Speaker
                                            </td>
                                            <td><span class="badge badge-pill badge-success">Delivered</span></td>
                                            <td>
                                                $584
                                            </td>
                                            <td>
                                                5/12/2016
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-secondary btn-sm waves-effect waves-light">Edit</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>#12354781</td>
                                            <td>
                                                <img src="{{url('/')}}/assets/images/users/user-6.jpg" alt="user-image" class="thumb-sm mr-2 rounded-circle"/>
                                                Riverston Glass Chair
                                            </td>
                                            <td><span class="badge badge-pill badge-success">Delivered</span></td>
                                            <td>
                                                $185
                                            </td>
                                            <td>
                                                5/12/2016
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-secondary btn-sm waves-effect waves-light">Edit</button>
                                            </td>
                                        </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->

            </div> <!-- end container-fluid -->
@endsection

@section('script')
		<!--Morris Chart-->
        <script src="{{ URL::asset('assets/plugins/morris/morris.min.js')}}"></script>
        <script src="{{ URL::asset('assets/plugins/raphael/raphael-min.js')}}"></script>

		<script src="{{ URL::asset('assets/pages/dashboard.js')}}"></script>
@endsection