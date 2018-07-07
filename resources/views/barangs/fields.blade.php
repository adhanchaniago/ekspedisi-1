<!-- Nama Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nama', 'Nama:') !!}
    {!! Form::text('nama', null, ['class' => 'form-control']) !!}
</div>

<!-- Barang Field -->
<div class="form-group col-sm-6">
    {!! Form::label('barang', 'Barang:') !!}
    {!! Form::text('barang', null, ['class' => 'form-control']) !!}
</div>

<!-- Berat Field -->
<div class="form-group col-sm-6">
    {!! Form::label('berat', 'Berat:') !!}
    {!! Form::text('berat', null, ['class' => 'form-control']) !!}
</div>

<!-- No Hp Field -->
<div class="form-group col-sm-6">
    {!! Form::label('no_hp', 'No Hp:') !!}
    {!! Form::text('no_hp', null, ['class' => 'form-control']) !!}
</div>

<!-- Keterangan Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('keterangan', 'Keterangan:') !!}
    {!! Form::textarea('keterangan', null, ['class' => 'form-control']) !!}
</div>

<!-- Id Kategori Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_kategori', 'Id Kategori:') !!}
    {!! Form::text('id_kategori', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('barangs.index') !!}" class="btn btn-default">Cancel</a>
</div>
