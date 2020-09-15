                
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6">
                                2020 © Metalog.SE.
                            </div>
                            <div class="col-sm-6">
                                <div class="text-sm-right d-none d-sm-block">
                                    Crafted with <i class="mdi mdi-heart text-danger"></i> by Metalog.SE at Devsbeta
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        <!-- Right Sidebar -->
        <div class="right-bar">
            <div data-simplebar class="h-100">
    
                <!-- Nav tabs -->
                <ul class="nav nav-tabs nav-tabs-custom rightbar-nav-tab nav-justified" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link py-3 active" data-toggle="tab" href="#chat-tab" role="tab">
                            <i class="mdi mdi-message-text font-size-22"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link py-3" data-toggle="tab" href="#tasks-tab" role="tab">
                            <i class="mdi mdi-format-list-checkbox font-size-22"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link py-3" data-toggle="tab" href="#settings-tab" role="tab">
                            <i class="mdi mdi-settings font-size-22"></i>
                        </a>
                    </li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content text-muted">
                    <div class="tab-pane active" id="chat-tab" role="tabpanel">
                

                    </div>

                    <div class="tab-pane" id="tasks-tab" role="tabpanel">
                        

                    </div>
                    <div class="tab-pane" id="settings-tab" role="tabpanel">
                        
                    </div>
                </div>

            </div> <!-- end slimscroll-menu-->
        </div>
        <!-- /Right-bar -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- JAVASCRIPT -->
        <script src="{{asset('Green/assets/libs/jquery/jquery.min.js')}}"></script>
        <script src="{{asset('Green/assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('Green/assets/libs/metismenu/metisMenu.min.js')}}"></script>
        <script src="{{asset('Green/assets/libs/simplebar/simplebar.min.js')}}"></script>
        <script src="{{asset('Green/assets/libs/node-waves/waves.min.js')}}"></script>

        <script src="https://unicons.iconscout.com/release/v2.0.1/script/monochrome/bundle.js"></script>
        <!-- alertifyjs js -->
        <script src="{{asset('Green/assets/libs/alertifyjs/build/alertify.min.js')}}"></script>

        <script src="{{asset('Green/assets/js/pages/alertifyjs.init.js')}}"></script>

        <!-- datepicker -->
        <script src="{{asset('Green/assets/libs/air-datepicker/js/datepicker.min.js')}}"></script>
        <script src="{{asset('Green/assets/libs/air-datepicker/js/i18n/datepicker.en.js')}}"></script>
        

        <script src="{{asset('Green/assets/js/app.js')}}"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                $('.mytabs').click(function(){
                    $('.mytabs').removeClass('active');
                    $(this).addClass('active');
                });
            });
        </script>
    </body>
</html>
