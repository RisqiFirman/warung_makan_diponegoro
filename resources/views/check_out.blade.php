@extends('layout.v_template')
@section('content')
<div class="col-md-12">
    <div class="card">
        <div class="card-body">
<div class="container" style="margin-top: 150px">
    <span>  <i aria-hidden="true" style="font-size:x-large ; color:  rgb(63, 61, 61);" >Nama : M. Risqi Firmansyah</i>
   <br>
        <span>  <i aria-hidden="true" style="font-size:x-large ; color: rgb(63, 61, 61);" >Alamat : h</i>
</div>
<table class="table table-bordered table-striped">
	<thead>
		<tr>

			<th>No</th>
            <th>Pesanan</th>
            <th>jumlah</th>
			<th>Harga</th>
            <th>Banyak</th>
            <th>Total </th>
		</tr>
	</thead>
	<tbody>
        <?php $no =1; ?>
        @foreach ($pesanan_detail as $data)
        <tr>
            <td>{{$no++}}</td>
            <td>{{$data->nama_menu}}</td>
        @endforeach
		<tr>
	</tbody>
</table>
</div>
</div>
</div>

@endsection
