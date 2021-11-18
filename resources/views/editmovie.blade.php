@include('header')

<div class="section py-5">
    <div class="container">
        <a href="{{route('movie')}}" type="button" class="btn btn-success">Back</a>
        <form method="POST" id="addmovie" class="form" action="{{ route('movieupdate',$movie->id) }}"
            enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-12">
                    <h3>Movie add</h3>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Cover Image</label>
                        <br>
                        <img src=".{{$movie->coverImage}}" width="50%" alt="Menu image" style="border-radius: 3">
                        <input type="file" value=".{{$movie->coverImage}}" class="form-control" name="coverImage">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Banner Image</label>
                        <br>
                        <img src=".{{$movie->bannerImage}}" width="50%" alt="Menu image" style="border-radius: 3">
                        <input type="file" value=".{{$movie->bannerImage}}" class="form-control" name="bannerImage">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Name</label>
                        <input type="text" value="{{$movie->name}}" class="form-control" name="name" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Ticket Price</label>
                        <input type="text" value="{{$movie->ticketPrice}}" class="form-control" name="ticketPrice"
                            required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Place</label>
                        {{-- <input type="text" class="form-control" name="place"> --}}
                        <select class="form-control" type="select" id="place" name="place" value="{{$movie->place}}"
                            required>
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
                        <select class="form-control" type="select" id="status" name="status" value="{{$movie->status}}"
                            required>
                            <option value="release" {{ $movie->status == 'release' ? 'selected' : '' }}>Release</option>
                            <option value="coming soon" {{ $movie->status == 'coming soon' ? 'selected' : '' }}>Coming
                                Soon</option>
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
