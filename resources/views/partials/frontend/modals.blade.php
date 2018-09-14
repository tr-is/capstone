<div id="loginModal" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">LOG IN</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row">
                        <div class="col-sm popup">
                            <div class="popup-content">
                                <h4>FOR JOBSEEKER</h4>
                                <a href="{{ url('/login') }}" class="btn btn-primary">Login</a>
                            </div>
                        </div>
                        <div class="col-sm">
                            <div class="popup-content">
                                <h4>FOR EMPLOYER</h4>
                                <a href="{{ route('admin.login') }}" class="btn btn-info">Login</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="registerModal" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">SIGN UP</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row">
                        <div class="col-sm popup">
                            <div class="popup-content" style="background: #F2652A;">
                                <h4>FOR JOBSEEKER</h4>
                                <a href="{{ url('/register') }}" class="btn btn-primary">Register</a>
                            </div>
                        </div>
                        <div class="col-sm">
                            <div class="popup-content" style="background: #17aef5;">
                                <h4>FOR EMPLOYER</h4>
                                <a href="{{ route('admin.register.form') }}" class="btn btn-info">Register</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="commonMOdal" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body"></div>
        </div>
    </div>
</div>
