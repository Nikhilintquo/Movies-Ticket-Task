@include('header')

<div class="section p-5">
    <div class="container">
        <div class="row">
            <div class="col-md-10 m-auto">
                @if(session('alert') != "")
                <div class="<?php echo session('class')?>" role="alert">
                    {{session('alert')}}
                    <?php
                                        session(['alert' => '']);
                                        session(['class' => '']);
                                    ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @endif
                <div class="card">
                    <div class="card-body">
                        <form method="POST" class="form" action="{{ route('adminlogin') }}"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" placeholder="Enter email">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" name="password" class="form-control" id="exampleInputPassword1"
                                    placeholder="Password">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('footer')
