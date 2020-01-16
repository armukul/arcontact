<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">

    <title>::. Contact Us .::</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-xl-8">
                <h1>Contact Us Anytime</h1>

                <div class="card">
                    <div class="card-header">
                        Contact Form
                    </div>

                    <div class="card-body">
                        @if(Session::has('message'))
                            <div class="alert alert-success" role="alert">
                                {{ request()->session()->pull('message') }}
                            </div>
                        @endif

                        @if(Session::has('error'))
                            <div class="alert alert-danger" role="alert">
                                {{ request()->session()->pull('error') }}
                            </div>
                        @endif

                        <form action="{{ route('arcontact.store') }}" method="POST">
                            @csrf
                            <div class="form-group row">
                                <label for="name" class="col-sm-2 col-form-label">Name</label>
                                    <div class="col-sm-10">
                                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror">
                                    @error('name')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="email" class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-10">
                                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror">
                                    @error('email')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="message" class="col-sm-2 col-form-label">Message</label>
                                    <div class="col-sm-10">
                                    <textarea name="message" class="form-control" @error('message') is-invalid @enderror></textarea>
                                    @error('message')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-10" style="text-align:center;">
                                    <input type="submit" value="Submit" class="btn btn-danger">
                                </div>
                            </div>
                        </form>
                    </div>
                </div><!-- /.card -->
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  </body>
</html>
