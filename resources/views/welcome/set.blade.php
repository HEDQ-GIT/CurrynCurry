<link href="{{ asset('/css/app.css') }}" rel="stylesheet">

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
<script>
</script>

@include('flash::message')
<nav class="navbar navbar-default"></nav>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Set New Email</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('setHdlr') }}">
                        <div class="form-group">
                            <label class="col-md-4 control-label">Old E-Mail Address</label>
                            <div class="col-md-6">
                                @if (Session::has('email'))
                                    <input class="form-control" disabled="disabled" value="{{ session('email') }}">
                                @else
                                    <input class="form-control" disabled="disabled" value="leedona71@yahoo.com.tw">
                                @endif

                            </div>
                        </div>

                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <div class="form-group">
                            <label class="col-md-4 control-label">New E-Mail Address</label>
                            <div class="col-md-6">
                                <input type="email" class="form-control" name="email" value="">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
