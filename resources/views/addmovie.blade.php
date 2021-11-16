@include('header')

<div class="section py-5">
    <div class="container">
        <form method="POST" id="addmovie" class="form" action="{{ route('addmoviepage') }}" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-12">
                    <h3>Movie add</h3>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Cover Image</label>
                        <input type="file" class="form-control" name="coverImage">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Banner Image</label>
                        <input type="file" class="form-control" name="bannerImage">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Name</label>
                        <input type="text" class="form-control" name="name">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Ticket Price</label>
                        <input type="text" class="form-control" name="ticketPrice">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Place</label>
                        <input type="text" class="form-control" name="place">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Status</label>
                        <input type="text" class="form-control" name="status">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 text-center">
                    <button href="" type="submit" class="btn btn-sm btn-success">Add Movie</button>
                </div>
            </div>
        </form>
    </div>
</div>

@include('footer')
