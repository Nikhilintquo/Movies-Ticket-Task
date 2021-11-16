@include('header')

<div class="section py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-left">
                <a href="{{route('adminlogin')}}" type="button" class="btn btn-success">Back</a>
            </div>
            <p>&nbsp;</p>
            <div class="col-md-12">
                <table id="exampleone" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>Cinema Name</th>
                            <th>Place</th>
                        </tr>
                    </thead>
                    <tbody>
                        @for ($i = 0; $i < count($cinema); $i++) <tr>
                            <td>{{ $cinema[$i]["cinema name"] }}</td>
                            <td>{{ $cinema[$i]["place"] }}</td>
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
$('#exampleone').DataTable( {
    dom: 'Bfrtip',
    buttons: [
        'copy', 'csv', 'excel', 'pdf', 'print'
    ]
} );
} );
</script>
