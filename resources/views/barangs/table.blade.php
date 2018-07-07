<table class="table table-responsive" id="barangs-table">
    <thead>
        <th>Nama</th>
        <th>Barang</th>
        <th>Berat</th>
        <th>No Hp</th>
        <th>Keterangan</th>
        <th>Id Kategori</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($barangs as $barang)
        <tr>
            <td>{!! $barang->nama !!}</td>
            <td>{!! $barang->barang !!}</td>
            <td>{!! $barang->berat !!}</td>
            <td>{!! $barang->no_hp !!}</td>
            <td>{!! $barang->keterangan !!}</td>
            <td>{!! $barang->id_kategori !!}</td>
            <td>
                {!! Form::open(['route' => ['barangs.destroy', $barang->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('barangs.show', [$barang->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('barangs.edit', [$barang->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>