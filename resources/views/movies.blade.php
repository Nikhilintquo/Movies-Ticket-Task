@include('header')

<div class="section py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-left">
                <a href="{{route('adminlogin')}}" type="button" class="btn btn-success">Back</a>
                <a href="/addmovie" type="button" class="btn btn-success">Add Movie</a>
            </div>
            <p>&nbsp;</p>
            <div class="col-12">
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
            </div>
            <div class="col-md-12">
                <table id="examplethree" class="table table-striped table-bordered table-responsive" style="width:100%">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Cover Image</th>
                            <th>Banner Image</th>
                            <th>Ticket Price</th>
                            <th>Place</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @for ($i = 0; $i < count($movie); $i++) <tr>
                            <td>{{ $movie[$i]["name"] }}</td>
                            <td>
                                <img src="../.<?php
                                echo $movie[$i]["coverImage"]
                                  ?>"
                                    width="50%" height="auto" style="border-radius:5px;" />
                            </td>
                            <td>
                                <img src="../.<?php
                                echo $movie[$i]["bannerImage"]
                                  ?>"
                                    width="50%" height="auto" style="border-radius:5px;" />
                            </td>
                            <td>{{ $movie[$i]["ticketPrice"] }}</td>
                            <td>{{ $movie[$i]["place"] }}</td>
                            <td>{{ $movie[$i]["status"] }}</td>
                            <td>
                                <a class="btn btn-primary btn-just-icon btn-round btn-sm" id="view" href="{{ route('movieview',$movie[$i]["id"]) }}"><i
                                    class="fas fa-eye"></i></a>
                                <a class="btn btn-success btn-just-icon btn-round btn-sm" id="edit" href="{{ route('movieedit',$movie[$i]["id"]) }}"><i
                                        class="fas fa-edit"></i></a>
                                <a class="btn btn-danger btn-just-icon btn-round btn-sm"
                                href="{{ route('moviedelete',$movie[$i]["id"]) }}"><i class="fas fa-trash-alt"></i></a>
                            </td>
                            </tr>
                            @endfor
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


@include('footer')
<script>
    $(document).ready(function() {
$('#examplethree').DataTable( {
    dom: 'Bfrtip',
    buttons: [
        'copy', 'csv', 'excel', 'pdf', 'print'
    ]
} );
} );
</script>
