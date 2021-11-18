@include('header')

<div class="section py-5">
    <div class="container">
        {{-- <form method="POST" id="addmovie" class="form" action="{{ route('addmoviepage') }}"
            enctype="multipart/form-data">
            @csrf --}}
            <a href="{{route('movie')}}" type="button" class="btn btn-success">Back</a>
            <div class="row">
                <div class="col-md-12">
                    <h3>Movie add</h3>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Cover Image</label>
                        <br>
                        <img src="../.<?php
                                echo $movie->coverImage
                                  ?>"
                                    width="50%" height="auto" style="border-radius:5px;" />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Banner Image</label>
                        <br>
                        <img src="../.<?php
                                echo $movie->bannerImage
                                  ?>"
                                    width="50%" height="auto" style="border-radius:5px;" />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Name</label>
                        <input type="text" class="form-control" name="name" value="{{$movie->name}}" readonly>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Ticket Price</label>
                        <input type="text" class="form-control" name="ticketPrice" value="{{$movie->ticketPrice}}" readonly>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Place</label>
                        <input type="text" class="form-control" name="place" value="{{$movie->place}}" readonly>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Status</label>
                        <input type="text" class="form-control" name="status" value="{{$movie->place}}" readonly>
                        {{-- <select class="form-control" type="select" id="status" name="status" required>
                            <option value="release">Release</option>
                            <option value="coming soon">Coming Soon</option>
                        </select> --}}
                    </div>
                </div>
            </div>

            {{-- <div class="row">
                <div class="col-md-12 text-center">
                    <button href="" type="submit" class="btn btn-sm btn-success">Add Movie</button>
                </div>
            </div> --}}
        {{-- </form> --}}
    </div>
</div>

@include('footer')
