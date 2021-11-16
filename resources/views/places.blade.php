@include('header')

<div class="section py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-left">
                <a href="{{route('adminlogin')}}" type="button" class="btn btn-success">Back</a>
            </div>
            <p>&nbsp;</p>
            <div class="col-md-12">
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @for ($i = 0; $i < count($place); $i++) <tr>
                            <td>{{ $place[$i]["name"] }}</td>
                            <td>{{ $place[$i]["status"] }}</td>
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
$('#example').DataTable( {
    dom: 'Bfrtip',
    buttons: [
        'copy', 'csv', 'excel', 'pdf', 'print'
    ]
} );
} );
</script>
