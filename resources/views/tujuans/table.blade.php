<table class="table table-responsive" id="tujuans-table">
    <thead>
        <th>Id Barang</th>
        <th>Penerima</th>
        <th>Alamat</th>
        <th>No Hp</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($tujuans as $tujuan)
        <tr>
            <td>{!! $tujuan->id_barang !!}</td>
            <td>{!! $tujuan->penerima !!}</td>
            <td>{!! $tujuan->alamat !!}</td>
            <td>{!! $tujuan->no_hp !!}</td>
            <td>
                {!! Form::open(['route' => ['tujuans.destroy', $tujuan->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('tujuans.show', [$tujuan->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('tujuans.edit', [$tujuan->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>