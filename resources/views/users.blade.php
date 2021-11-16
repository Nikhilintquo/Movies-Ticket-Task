@include('header')

<div class="section py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-left">
                <a href="{{route('adminlogin')}}" type="button" class="btn btn-success">Back</a>
            </div>
            <p>&nbsp;</p>
            <div class="col-md-12">
                <table id="exampletwo" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @for ($i = 0; $i < count($user); $i++) <tr>
                            <td>{{ $user[$i]["name"] }}</td>
                            <td>{{ $user[$i]["email"] }}</td>
                            <td>{{ $user[$i]["status"] }}</td>
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
$('#exampletwo').DataTable( {
    dom: 'Bfrtip',
    buttons: [
        'copy', 'csv', 'excel', 'pdf', 'print'
    ]
} );
} );
</script>
