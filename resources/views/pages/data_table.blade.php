
@extends('templates.first')

@section('title', 'My Bookings')

@section('content')
            <section id="content">
                <div class="container">
                    <div class="block-header">
                        <h2>Data Table</h2>

                        <ul class="actions">
                            <li>
                                <a href="">
                                    <i class="zmdi zmdi-trending-up"></i>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <i class="zmdi zmdi-check-all"></i>
                                </a>
                            </li>
                            <li class="dropdown">
                                <a href="" data-toggle="dropdown">
                                    <i class="zmdi zmdi-more-vert"></i>
                                </a>

                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li>
                                        <a href="">Refresh</a>
                                    </li>
                                    <li>
                                        <a href="">Manage Widgets</a>
                                    </li>
                                    <li>
                                        <a href="">Widgets Settings</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!--
                    <div class="card">
                        <div class="card-header">
                            <h2>Basic Example <small>It's just that simple. Turn your simple table into a sophisticated data table and offer your users a nice experience and great features without any effort.</small></h2>
                        </div>

                        <div class="table-responsive">
                            <table id="data-table-basic" class="table table-striped">
                                <thead>
                                    <tr>
                                        <th data-column-id="id" data-type="numeric">ID</th>
                                        <th data-column-id="sender">Sender</th>
                                        <th data-column-id="received" data-order="desc">Received</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>10238</td>
                                        <td>eduardo@pingpong.com</td>
                                        <td>14.10.2013</td>
                                    </tr>
                                    <tr>
                                        <td>10243</td>
                                        <td>eduardo@pingpong.com</td>
                                        <td>19.10.2013</td>
                                    </tr>
                                    <tr>
                                        <td>10248</td>
                                        <td>eduardo@pingpong.com</td>
                                        <td>24.10.2013</td>
                                    </tr>
                                    <tr>
                                        <td>10253</td>
                                        <td>eduardo@pingpong.com</td>
                                        <td>29.10.2013</td>
                                    </tr>
                                    <tr>
                                        <td>10234</td>
                                        <td>lila@google.com</td>
                                        <td>10.10.2013</td>
                                    </tr>
                                    <tr>
                                        <td>10239</td>
                                        <td>lila@google.com</td>
                                        <td>15.10.2013</td>
                                    </tr>
                                    <tr>
                                        <td>10244</td>
                                        <td>lila@google.com</td>
                                        <td>20.10.2013</td>
                                    </tr>
                                    <tr>
                                        <td>10249</td>
                                        <td>lila@google.com</td>
                                        <td>25.10.2013</td>
                                    </tr>
                                    <tr>
                                        <td>10237</td>
                                        <td>robert@bingo.com</td>
                                        <td>13.10.2013</td>
                                    </tr>
                                    <tr>
                                        <td>10242</td>
                                        <td>robert@bingo.com</td>
                                        <td>18.10.2013</td>
                                    </tr>
                                    <tr>
                                        <td>10247</td>
                                        <td>robert@bingo.com</td>
                                        <td>23.10.2013</td>
                                    </tr>
                                    <tr>
                                        <td>10252</td>
                                        <td>robert@bingo.com</td>
                                        <td>28.10.2013</td>
                                    </tr>
                                    <tr>
                                        <td>10236</td>
                                        <td>simon@yahoo.com</td>
                                        <td>12.10.2013</td>
                                    </tr>
                                    <tr>
                                        <td>10241</td>
                                        <td>simon@yahoo.com</td>
                                        <td>17.10.2013</td>
                                    </tr>
                                    <tr>
                                        <td>10246</td>
                                        <td>simon@yahoo.com</td>
                                        <td>22.10.2013</td>
                                    </tr>
                                    <tr>
                                        <td>10251</td>
                                        <td>simon@yahoo.com</td>
                                        <td>27.10.2013</td>
                                    </tr>
                                    <tr>
                                        <td>10235</td>
                                        <td>tim@microsoft.com</td>
                                        <td>11.10.2013</td>
                                    </tr>
                                    <tr>
                                        <td>10240</td>
                                        <td>tim@microsoft.com</td>
                                        <td>16.10.2013</td>
                                    </tr>
                                    <tr>
                                        <td>10245</td>
                                        <td>tim@microsoft.com</td>
                                        <td>21.10.2013</td>
                                    </tr>
                                    <tr>
                                        <td>10250</td>
                                        <td>tim@microsoft.com</td>
                                        <td>26.10.2013</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h2>Selection Example <small>Ensure that the data attribute [data-identifier="true"] is set on one column header.</small></h2>
                        </div>

                        <div class="table-responsive">
                            <table id="data-table-selection" class="table table-striped">
                                <thead>
                                    <tr>
                                        <th data-column-id="id" data-type="numeric" data-identifier="true">ID</th>
                                        <th data-column-id="sender">Sender</th>
                                        <th data-column-id="received" data-order="desc">Received</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>10238</td>
                                        <td>eduardo@pingpong.com</td>
                                        <td>14.10.2013</td>
                                    </tr>
                                    <tr>
                                        <td>10243</td>
                                        <td>eduardo@pingpong.com</td>
                                        <td>19.10.2013</td>
                                    </tr>
                                    <tr>
                                        <td>10248</td>
                                        <td>eduardo@pingpong.com</td>
                                        <td>24.10.2013</td>
                                    </tr>
                                    <tr>
                                        <td>10253</td>
                                        <td>eduardo@pingpong.com</td>
                                        <td>29.10.2013</td>
                                    </tr>
                                    <tr>
                                        <td>10234</td>
                                        <td>lila@google.com</td>
                                        <td>10.10.2013</td>
                                    </tr>
                                    <tr>
                                        <td>10239</td>
                                        <td>lila@google.com</td>
                                        <td>15.10.2013</td>
                                    </tr>
                                    <tr>
                                        <td>10244</td>
                                        <td>lila@google.com</td>
                                        <td>20.10.2013</td>
                                    </tr>
                                    <tr>
                                        <td>10249</td>
                                        <td>lila@google.com</td>
                                        <td>25.10.2013</td>
                                    </tr>
                                    <tr>
                                        <td>10237</td>
                                        <td>robert@bingo.com</td>
                                        <td>13.10.2013</td>
                                    </tr>
                                    <tr>
                                        <td>10242</td>
                                        <td>robert@bingo.com</td>
                                        <td>18.10.2013</td>
                                    </tr>
                                    <tr>
                                        <td>10247</td>
                                        <td>robert@bingo.com</td>
                                        <td>23.10.2013</td>
                                    </tr>
                                    <tr>
                                        <td>10252</td>
                                        <td>robert@bingo.com</td>
                                        <td>28.10.2013</td>
                                    </tr>
                                    <tr>
                                        <td>10236</td>
                                        <td>simon@yahoo.com</td>
                                        <td>12.10.2013</td>
                                    </tr>
                                    <tr>
                                        <td>10241</td>
                                        <td>simon@yahoo.com</td>
                                        <td>17.10.2013</td>
                                    </tr>
                                    <tr>
                                        <td>10246</td>
                                        <td>simon@yahoo.com</td>
                                        <td>22.10.2013</td>
                                    </tr>
                                    <tr>
                                        <td>10251</td>
                                        <td>simon@yahoo.com</td>
                                        <td>27.10.2013</td>
                                    </tr>
                                    <tr>
                                        <td>10235</td>
                                        <td>tim@microsoft.com</td>
                                        <td>11.10.2013</td>
                                    </tr>
                                    <tr>
                                        <td>10240</td>
                                        <td>tim@microsoft.com</td>
                                        <td>16.10.2013</td>
                                    </tr>
                                    <tr>
                                        <td>10245</td>
                                        <td>tim@microsoft.com</td>
                                        <td>21.10.2013</td>
                                    </tr>
                                    <tr>
                                        <td>10250</td>
                                        <td>tim@microsoft.com</td>
                                        <td>26.10.2013</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    -->
                    <div class="card">
                        <!--<div class="card-header">
                            <h2>Selection Example <small>Ensure that the data attribute [data-identifier="true"] is set on one column header.</small></h2>
                        </div>-->
                        @if(count($user) > 0)
                            <table id="data-table-command" class="table table-striped table-vmiddle">
                                <thead>
                                    <tr>
                                        <th data-column-id="id" data-type="numeric">ID</th>
                                        <th data-column-id="sender">Sender Name</th>
                                        <th data-column-id="sender">Sender Email</th>
                                        <th data-column-id="received" data-order="desc">Received</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($user as $i)
                                        <tr>
                                            <td>{{$i->booking_id}}</td>
                                            <td>{{$i->name}}</td>
                                            <td>{{$i->email}}</td>
                                            <td>{{$i->booking_date}}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        @else
                            <div style="text-align:center">You have no Bookings !!</div>
                        @endif
                    </div>
                </div>
            </section>
        </section>

        <footer id="footer">
            Copyright &copy; 2015 Material Admin

            <ul class="f-menu">
                <li><a href="">Home</a></li>
                <li><a href="">Dashboard</a></li>
                <li><a href="">Reports</a></li>
                <li><a href="">Support</a></li>
                <li><a href="">Contact</a></li>
            </ul>
        </footer>

        <!-- Page Loader -->
        <div class="page-loader">
            <div class="preloader pls-blue">
                <svg class="pl-circular" viewBox="25 25 50 50">
                    <circle class="plc-path" cx="50" cy="50" r="20" />
                </svg>

                <p>Please wait...</p>
            </div>
        </div>

        <!-- Older IE warning message -->
        <!--[if lt IE 9]>
            <div class="ie-warning">
                <h1 class="c-white">Warning!!</h1>
                <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
                <div class="iew-container">
                    <ul class="iew-download">
                        <li>
                            <a href="http://www.google.com/chrome/">
                                <img src="img/browsers/chrome.png" alt="">
                                <div>Chrome</div>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.mozilla.org/en-US/firefox/new/">
                                <img src="img/browsers/firefox.png" alt="">
                                <div>Firefox</div>
                            </a>
                        </li>
                        <li>
                            <a href="http://www.opera.com">
                                <img src="img/browsers/opera.png" alt="">
                                <div>Opera</div>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.apple.com/safari/">
                                <img src="img/browsers/safari.png" alt="">
                                <div>Safari</div>
                            </a>
                        </li>
                        <li>
                            <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                                <img src="img/browsers/ie.png" alt="">
                                <div>IE (New)</div>
                            </a>
                        </li>
                    </ul>
                </div>
                <p>Sorry for the inconvenience!</p>
            </div>
        <![endif]-->

        <!-- Javascript Libraries -->
        <script src="vendors/bower_components/jquery/dist/jquery.min.js"></script>
        <script src="vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

        <script src="vendors/bower_components/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
        <script src="vendors/bower_components/Waves/dist/waves.min.js"></script>
        <script src="vendors/bootstrap-growl/bootstrap-growl.min.js"></script>
        <script src="vendors/bower_components/bootstrap-sweetalert/lib/sweet-alert.min.js"></script>
        <script src="vendors/bootgrid/jquery.bootgrid.updated.min.js"></script>

        <!-- Placeholder for IE9 -->
        <!--[if IE 9 ]>
            <script src="vendors/bower_components/jquery-placeholder/jquery.placeholder.min.js"></script>
        <![endif]-->

        <script src="js/functions.js"></script>
        <script src="js/demo.js"></script>

        <!-- Data Table -->
        <script type="text/javascript">
            $(document).ready(function(){
                //Basic Example
                $("#data-table-basic").bootgrid({
                    css: {
                        icon: 'zmdi icon',
                        iconColumns: 'zmdi-view-module',
                        iconDown: 'zmdi-expand-more',
                        iconRefresh: 'zmdi-refresh',
                        iconUp: 'zmdi-expand-less'
                    },
                });

                //Selection
                $("#data-table-selection").bootgrid({
                    css: {
                        icon: 'zmdi icon',
                        iconColumns: 'zmdi-view-module',
                        iconDown: 'zmdi-expand-more',
                        iconRefresh: 'zmdi-refresh',
                        iconUp: 'zmdi-expand-less'
                    },
                    selection: true,
                    multiSelect: true,
                    rowSelect: true,
                    keepSelection: true
                });

                //Command Buttons
                $("#data-table-command").bootgrid({
                    css: {
                        icon: 'zmdi icon',
                        iconColumns: 'zmdi-view-module',
                        iconDown: 'zmdi-expand-more',
                        iconRefresh: 'zmdi-refresh',
                        iconUp: 'zmdi-expand-less'
                    },
                    formatters: {
                        "commands": function(column, row) {
                            return "<button type=\"button\" class=\"btn btn-icon command-edit waves-effect waves-circle\" data-row-id=\"" + row.id + "\"><span class=\"zmdi zmdi-edit\"></span></button> " +
                                "<button type=\"button\" class=\"btn btn-icon command-delete waves-effect waves-circle\" data-row-id=\"" + row.id + "\"><span class=\"zmdi zmdi-delete\"></span></button>";
                        }
                    }
                });
            });
        </script>
    @endsection
