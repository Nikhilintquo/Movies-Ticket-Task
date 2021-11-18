@include('header')

<div class="section py-5">
    <div class="container">
        <a href="{{route('movie')}}" type="button" class="btn btn-success">Back</a>
        <form method="POST" id="addmovie" class="form" action="{{ route('addmoviepage') }}"
            enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-12">
                    <h3>Movie add</h3>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Cover Image</label>
                        <input type="file" class="form-control" name="coverImage" value required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Banner Image</label>
                        <input type="file" class="form-control" name="bannerImage" value required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Name</label>
                        <input type="text" class="form-control" name="name" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Ticket Price</label>
                        <input type="text" class="form-control" name="ticketPrice" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Place</label>
                        {{-- <input type="text" class="form-control" name="place"> --}}
                        <select class="form-control" type="select" id="place" name="place" required>
                            <?php
                                        foreach($cinema as $cinemalist){
                                            echo "<option value='".$cinemalist['cinema name']." , ".$cinemalist['place']."'>".$cinemalist['cinema name']." , ".$cinemalist['place']."</option>";
                                        }
                                    ?>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Status</label>
                        {{-- <input type="text" class="form-control" name="status"> --}}
                        <select class="form-control" type="select" id="status" name="status" required>
                            <option value="release">Release</option>
                            <option value="coming soon">Coming Soon</option>
                        </select>
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
