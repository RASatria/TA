@extends('admin.layouts.app')
@section('content')
 <!-- Page Title -->
                <div class="page-title">
                    <div class="row align-items-center">
                        <div class="col-sm-6">
                            <h2 class="page-title-text">Howdy, John!</h2>
                        </div>
                        <div class="col-sm-6 text-right">
                            <div class="breadcrumbs">
                                <ul>
                                    <li><a href="#">Home</a></li>
                                    <li>Dashboard</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Page Body -->
                <div class="page-body">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="panel panel-default">
                                <div class="widget-7">
                                    <h5 class="title p-3">Laptop Sale</h5>
                                    <ul class="stats">
                                        <li>
                                            <span>Growth</span>
                                            <span>75%</span>
                                        </li>
                                        <li>
                                            <span>Sales</span>
                                            <span>450</span>
                                        </li>
                                        <li>
                                            <span>Return</span>
                                            <span>45</span>
                                        </li>
                                    </ul>
                                    <div class="chart">
                                        <div id="sparkline-line1"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="panel panel-default">
                                <div class="widget-7">
                                    <h5 class="title p-3">Phone Sale</h5>
                                    <ul class="stats">
                                        <li>
                                            <span>Growth</span>
                                            <span>34%</span>
                                        </li>
                                        <li>
                                            <span>Sales</span>
                                            <span>200</span>
                                        </li>
                                        <li>
                                            <span>Return</span>
                                            <span>55</span>
                                        </li>
                                    </ul>
                                    <div class="chart">
                                        <div id="sparkline-line2"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="panel panel-default">
                                <div class="widget-7">
                                    <h5 class="title p-3">Tablet Sale</h5>
                                    <ul class="stats">
                                        <li>
                                            <span>Growth</span>
                                            <span>84%</span>
                                        </li>
                                        <li>
                                            <span>Sales</span>
                                            <span>350</span>
                                        </li>
                                        <li>
                                            <span>Return</span>
                                            <span>15</span>
                                        </li>
                                    </ul>
                                    <div class="chart">
                                        <div id="sparkline-line3"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="panel panel-default">
                                <div class="box-title p-3">Yearly Sales</div> 
                                <div class="panel-wrapper">
                                    <ul class="chart-tag">
                                        <li><span style="background: #00bfc7"></span> Phone</li>
                                        <li><span style="background: #fb9678"></span> Tablet</li>
                                        <li><span style="background: #9675ce"></span> Laptop</li>
                                    </ul>
                                    <div class="chart-container">
                                        <div id="morris-area2" style="height: 321px;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="panel panel-default">
                                <div class="box-title p-3">Country Wise Sales</div> 
                                <div class="panel-body pt-0">
                                    <ul class="site-stat">
                                        <li>
                                            <h4 class="count">1250</h4>
                                            <span class="country">From USA</span>
                                            <div class="pull-right">48% <i class="fas fa-level-up-alt text-success"></i></div>
                                            <div class="progress progress-xs">
                                                <div class="progress-bar bg-success" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:48%; height: 6px;"> <span class="sr-only">48% Complete</span></div>
                                            </div>
                                        </li>
                                        <li>
                                            <h4 class="count">700</h4>
                                            <span class="country">From UAE</span>
                                            <div class="pull-right">25% <i class="fas fa-level-down-alt text-danger"></i></div>
                                            <div class="progress progress-xs">
                                                <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:25%; height: 6px;"> <span class="sr-only">25% Complete</span></div>
                                            </div>
                                        </li>
                                        <li>
                                            <h4 class="count">1400</h4>
                                            <span class="country">From Australia</span>
                                            <div class="pull-right">50% <i class="fas fa-level-up-alt text-primary"></i></div>
                                            <div class="progress progress-xs">
                                                <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:45%; height: 6px;"> <span class="sr-only">45% Complete</span></div>
                                            </div>
                                        </li>
                                        <li>
                                            <h4 class="count">1000</h4>
                                            <span class="country">From France</span>
                                            <div class="pull-right">40% <i class="fas fa-level-down-alt text-warning"></i></div>
                                            <div class="progress progress-xs">
                                                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:40%; height: 6px;"> <span class="sr-only">40% Complete</span></div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="panel panel-default">
                                <div class="row widget-separator-1">
                                    <div class="col-md-4">
                                        <div class="widget-1">
                                            <div class="content">
                                                <div class="row align-items-center">
                                                    <div class="col">
                                                        <h5 class="title">Total Revenue</h5>
                                                        <span class="descr">Awerage Weekly Profit</span>
                                                    </div>
                                                    <div class="col text-right">
                                                        <div class="number text-primary">+$12900</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="content">
                                                <div class="row align-items-center">
                                                    <div class="col">
                                                        <h5 class="title">Total Tax</h5>
                                                        <span class="descr">Awerage Weekly Profit</span>
                                                    </div>
                                                    <div class="col text-right">
                                                        <div class="number text-danger">+$2900</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="widget-2">
                                            <div class="box-title pb-3 pt-3">Order Statatics</div>
                                            <div class="row content align-items-end">
                                                <div class="col">
                                                    <div class="number">$12000</div>
                                                    <div class="count text-primary">(490 Sales)</div>
                                                    <div class="month">April</div>
                                                </div>
                                                <div class="col">
                                                    <div id="sparkline-bar1"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="row p-3">
                                            <div class="col-12 box-title pb-3 pt-3">Expenses</div>
                                            <div class="col-md-5">
                                                <div class="widget-10 d-inline-block">
                                                    <div class="bullet"><span class="bg-primary"></span></div> 
                                                    <div class="value">Health</div> 
                                                </div>
                                                <div class="widget-10 d-inline-block">
                                                    <div class="bullet"><span class="bg-warning"></span></div> 
                                                    <div class="value">Automobiles</div> 
                                                </div>
                                                <div class="widget-10 d-inline-block">
                                                    <div class="bullet"><span class="bg-danger"></span></div> 
                                                    <div class="value">Internet</div> 
                                                </div>
                                            </div>
                                            <div class="col-md-7">
                                                <div id="morris-donutchart-2" style="height: 150px;"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> 
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-head">
                                    <div class="panel-title">
                                        <span class="panel-title-text">Recent Sales</span>
                                    </div>
                                    <div class="panel-action">
                                        <button class="btn btn-primary btn-shadow btn-gradient btn-sm btn-pill">View All</button>
                                    </div>
                                </div>
                                <div class="panel-wrapper">
                                    <table class="table table-hover table-align-middle">
                                        <thead>
                                            <tr>
                                                <th>Product</th>
                                                <th>Customers</th>
                                                <th>Categories</th>
                                                <th>Status</th>
                                                <th>Amount</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="font-500">iPone X</td>
                                                <td>
                                                    <ul class="avtar-list">
                                                        <li class="pull-up-on-hover cricle tippy" data-tippy-inertia="true" data-tippy-arrow="true" data-tippy-duration="[600,300]" title="Micheal">
                                                            <img src="uploads/author-1.jpg" alt="">
                                                        </li>
                                                        <li class="pull-up-on-hover cricle tippy" data-tippy-inertia="true" data-tippy-arrow="true" data-tippy-duration="[600,300]" title="Daniel">
                                                            <img src="uploads/author-2.jpg" alt="" data-tippy-inertia="true" data-tippy-arrow="true" data-tippy-duration="[600,300]" title="Micheal">
                                                        </li>
                                                        <li class="pull-up-on-hover cricle tippy" data-tippy-inertia="true" data-tippy-arrow="true" data-tippy-duration="[600,300]" title="Cheri Arya">
                                                            <img src="uploads/author-3.jpg" alt="">
                                                        </li>
                                                        <li><a class="badge badge-default badge-sm badge-pill">+12 More</a></li>
                                                    </ul>
                                                </td>
                                                <td><span class="btn btn-outline btn-danger btn-pill btn-outline-1x btn-sm">Smartphone</span></td>
                                                <td>
                                                    <div class="progress progress-sm br-40x">
                                                        <div class="progress-bar progress-bar-danger progress-bar-striped progress-bar-animated" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p class="m-0">$ 1459.99</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="font-500">Apple Watch</td>
                                                <td>
                                                    <ul class="avtar-list">
                                                        <li class="pull-up-on-hover cricle tippy" data-tippy-inertia="true" data-tippy-arrow="true" data-tippy-duration="[600,300]" title="Daniel">
                                                            <img src="uploads/author-5.jpg" alt="" data-tippy-inertia="true" data-tippy-arrow="true" data-tippy-duration="[600,300]" title="Micheal">
                                                        </li>
                                                        <li class="pull-up-on-hover cricle tippy" data-tippy-inertia="true" data-tippy-arrow="true" data-tippy-duration="[600,300]" title="Cheri Arya">
                                                            <img src="uploads/author-6.jpg" alt="">
                                                        </li>
                                                        <li><a class="badge badge-default badge-sm badge-pill">+4 More</a></li>
                                                    </ul>
                                                </td>
                                                <td><span class="btn btn-outline btn-primary btn-pill btn-outline-1x btn-sm">Watch</span></td>
                                                <td>
                                                    <div class="progress progress-sm br-40x">
                                                        <div class="progress-bar progress-bar-success progress-bar-striped progress-bar-animated" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p class="m-0">$ 999.90</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="font-500">Microsoft Studio</td>
                                                <td>
                                                    <ul class="avtar-list">
                                                        <li class="pull-up-on-hover cricle tippy" data-tippy-inertia="true" data-tippy-arrow="true" data-tippy-duration="[600,300]" title="Daniel">
                                                            <img src="uploads/author-7.jpg" alt="" data-tippy-inertia="true" data-tippy-arrow="true" data-tippy-duration="[600,300]" title="Micheal">
                                                        </li>
                                                        <li class="pull-up-on-hover cricle tippy" data-tippy-inertia="true" data-tippy-arrow="true" data-tippy-duration="[600,300]" title="Cheri Arya">
                                                            <img src="uploads/author-8.jpg" alt="">
                                                        </li>
                                                        <li class="pull-up-on-hover cricle tippy" data-tippy-inertia="true" data-tippy-arrow="true" data-tippy-duration="[600,300]" title="Cheri Arya">
                                                            <img src="uploads/author-1.jpg" alt="">
                                                        </li>
                                                        <li class="pull-up-on-hover cricle tippy" data-tippy-inertia="true" data-tippy-arrow="true" data-tippy-duration="[600,300]" title="Cheri Arya">
                                                            <img src="uploads/author-3.jpg" alt="">
                                                        </li>
                                                        <li><a class="badge badge-default badge-sm badge-pill">+4 More</a></li>
                                                    </ul>
                                                </td>
                                                <td><span class="btn btn-outline btn-primary btn-pill btn-outline-1x btn-sm">Desktop</span></td>
                                                <td>
                                                    <div class="progress progress-sm br-40x">
                                                        <div class="progress-bar progress-bar-primary progress-bar-striped progress-bar-animated" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p class="m-0">$ 2499.00</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="font-500">One Plus</td>
                                                <td>
                                                    <ul class="avtar-list">
                                                        <li class="pull-up-on-hover cricle tippy" data-tippy-inertia="true" data-tippy-arrow="true" data-tippy-duration="[600,300]" title="Daniel">
                                                            <img src="uploads/author-1.jpg" alt="" data-tippy-inertia="true" data-tippy-arrow="true" data-tippy-duration="[600,300]" title="Micheal">
                                                        </li>
                                                        <li><a class="badge badge-default badge-sm badge-pill">+1 More</a></li>
                                                    </ul>
                                                </td>
                                                <td><span class="btn btn-outline btn-danger btn-pill btn-outline-1x btn-sm">Mobile</span></td>
                                                <td>
                                                    <div class="progress progress-sm br-40x">
                                                        <div class="progress-bar progress-bar-danger progress-bar-striped progress-bar-animated" style="width: 15%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p class="m-0">$ 2499.00</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="font-500">Mac Book</td>
                                                <td>
                                                    <ul class="avtar-list">
                                                        <li class="pull-up-on-hover cricle tippy" data-tippy-inertia="true" data-tippy-arrow="true" data-tippy-duration="[600,300]" title="Daniel">
                                                            <img src="uploads/author-1.jpg" alt="" data-tippy-inertia="true" data-tippy-arrow="true" data-tippy-duration="[600,300]" title="Micheal">
                                                        </li>
                                                        <li class="pull-up-on-hover cricle tippy" data-tippy-inertia="true" data-tippy-arrow="true" data-tippy-duration="[600,300]" title="Daniel">
                                                            <img src="uploads/author-6.jpg" alt="" data-tippy-inertia="true" data-tippy-arrow="true" data-tippy-duration="[600,300]" title="Micheal">
                                                        </li>
                                                        <li><a class="badge badge-default badge-sm badge-pill">+23 More</a></li>
                                                    </ul>
                                                </td>
                                                <td><span class="btn btn-outline btn-primary btn-pill btn-outline-1x btn-sm">Laptop</span></td>
                                                <td>
                                                    <div class="progress progress-sm br-40x">
                                                        <div class="progress-bar progress-bar-primary progress-bar-striped progress-bar-animated" style="width: 85%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p class="m-0">$ 2499.00</p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-lg-6">
                            <div class="panel panel-default">
                                <div class="panel-head">
                                    <div class="panel-title">
                                        <div class="panel-title-text">Recent Activity</div>
                                    </div>
                                </div>
                                <div class="panel-wrapper">
                                    <div class="recent-list">
                                        <ul>
                                            <li>
                                                <div class="main-icon"><i class="icon-star"></i></div>
                                                <div class="content">
                                                    <p><strong>Steve Jordon</strong> left a review <span class="badge badge-success badge-pill">5.0</span> on iPhone</p>
                                                    <div class="row action align-items-center">
                                                        <div class="col-sm-8">
                                                            <a href="#"><i class="icon-pencil"></i></a>
                                                            <a href="#"><i class="icon-note"></i></a>
                                                            <a href="#"><i class="icon-trash"></i></a>
                                                        </div>
                                                        <div class="col-sm-4 text-right">
                                                            <span class="date">14 Mar 2018</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="main-icon"><i class="main-icon icon-people"></i></div>
                                                <div class="content">
                                                    <p><strong>Mellisa bates</strong> commented on Rakesh Moria's article</p>
                                                    <div class="row action align-items-center">
                                                        <div class="col-sm-8">
                                                            <a href="#"><i class="icon-pencil"></i></a>
                                                            <a href="#"><i class="icon-note"></i></a>
                                                            <a href="#"><i class="icon-trash"></i></a>
                                                        </div>
                                                        <div class="col-sm-4 text-right">
                                                            <span class="date">12 Mar 2018</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="main-icon"><i class="main-icon icon-star"></i></div>
                                                <div class="content">
                                                    <p><strong>Cheri Arya</strong> left a review  <span class="badge badge-danger badge-pill">2.0</span> on themeforest item.</p>
                                                    <div class="row action align-items-center">
                                                        <div class="col-sm-8">
                                                            <a href="#"><i class="icon-pencil"></i></a>
                                                            <a href="#"><i class="icon-note"></i></a>
                                                            <a href="#"><i class="icon-trash"></i></a>
                                                        </div>
                                                        <div class="col-sm-4 text-right">
                                                            <span class="date">11 Mar 2018</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="main-icon"><i class="main-icon icon-user"></i></div>
                                                <div class="content">
                                                    <p><strong>Jenet Collins</strong> has created account on client portal.</p>
                                                    <div class="row action align-items-center">
                                                        <div class="col-sm-8">
                                                            <a href="#"><i class="icon-pencil"></i></a>
                                                            <a href="#"><i class="icon-note"></i></a>
                                                            <a href="#"><i class="icon-trash"></i></a>
                                                        </div>
                                                        <div class="col-sm-4 text-right">
                                                            <span class="date">27 Feb 2018</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="main-icon"><i class="main-icon icon-star"></i></div>
                                                <div class="content">
                                                    <p><strong>John Doe</strong> left a review <span class="badge badge-warning badge-pill">3.8</span> on Ticket.</p>
                                                    <div class="row action align-items-center">
                                                        <div class="col-sm-8">
                                                            <a href="#"><i class="icon-pencil"></i></a>
                                                            <a href="#"><i class="icon-note"></i></a>
                                                            <a href="#"><i class="icon-trash"></i></a>
                                                        </div>
                                                        <div class="col-sm-4 text-right">
                                                            <span class="date">31 Jan 2018</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="main-icon"><i class="main-icon fa fa-ticket"></i></div>
                                                <div class="content">
                                                    <p><strong>Emily Rasberry</strong> created support ticket for customization.</p>
                                                    <div class="row action align-items-center">
                                                        <div class="col-sm-8">
                                                            <a href="#"><i class="icon-pencil"></i></a>
                                                            <a href="#"><i class="icon-note"></i></a>
                                                            <a href="#"><i class="icon-trash"></i></a>
                                                        </div>
                                                        <div class="col-sm-4 text-right">
                                                            <span class="date">26 Jan 2018</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="panel panel-default">
                                <div class="panel-head">
                                    <div class="panel-title">
                                        <div class="panel-title-text">Support Ticket</div>
                                    </div>
                                </div>
                                <div class="panel-body"> 
                                    <div class="ticket-list">
                                        <div class="list">
                                            <div class="tbl-cell icon"><i class="bg-success">A</i></div>
                                            <div class="tbl-cell content">
                                                <h4>Arya Stark <span class="status text-success">Replied</span></h4>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                            </div>
                                            <div class="tbl-cell date">4 Days ago</div>
                                        </div>
                                        <div class="list">
                                            <div class="tbl-cell icon"><i class="bg-warning">J</i></div>
                                            <div class="tbl-cell content">
                                                <h4>John Snow <span class="status text-warning">Waiting for Reply</span></h4>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                            </div>
                                            <div class="tbl-cell date">4 Days ago</div>
                                        </div>
                                        <div class="list">
                                            <div class="tbl-cell icon "><i class="bg-dark">R</i></div>
                                            <div class="tbl-cell content">
                                                <h4>Robert Baratheon <span class="status text-dark">Closed</span></h4>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                            </div>
                                            <div class="tbl-cell date">4 Days ago</div>
                                        </div>
                                        <div class="list">
                                            <div class="tbl-cell icon "><i class="bg-secondary">H</i></div>
                                            <div class="tbl-cell content">
                                                <h4>House Tally <span class="status text-secondary">Unknown</span></h4>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                            </div>
                                            <div class="tbl-cell date">4 Days ago</div>
                                        </div>
                                        <div class="list">
                                            <div class="tbl-cell icon "><i class="bg-info">K</i></div>
                                            <div class="tbl-cell content">
                                                <h4>Khal Drogo <span class="status text-info">Replied</span></h4>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                            </div>
                                            <div class="tbl-cell date">4 Days ago</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
@endsection