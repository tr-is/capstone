<!-- bottom nav bar -->
<div id="sticky-anchor"></div>
<section class="bottom-nav-bar-sec" id="sticky">
    <nav class="navbar navbar-default">
        <div class="container">
            <div class="row">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                            data-target="#bs-example-navbar-collapse-2" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <img height="50px" src="{{ asset('bundles/images/download.jpg') }}" alt="" title="">
                    </a>

                    @if(! Auth::user())
                    <!-- xs display navbar -->
                    <ul class="nav navbar-right xs-display-nav">
                        <li data-toggle="modal" data-target="#myModal"><a href="#"
                                                                          style="color: #1a98d3;">Register</a></li>
                        <li data-toggle="modal" data-target="#loginModal"><a href="#"
                                                                             style="color: white;">Login</a>
                        </li>
                    </ul>
                    <!-- xs display navbar -->
                    @endif
                </div>

            </div>
        </div>
    </nav>
</section>