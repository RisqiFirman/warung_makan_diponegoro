@extends('layout.v_template')
@section('content')

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
			<th>Harga</th>
            <th>Banyak</th>
            <th>Total </th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>1</td>
			<td>Mie Ayam</td>
			<td>Rp. 6.000</td>
            <td>3</td>
            <td>Rp. 18.000</td>
		</tr>
		<tr>
			<td>2</td>
			<td>Es Teh</td>
			<td>Rp. 3000</td>
            <td>3</td>
            <td>Rp. 9.000</td>
        </tr>
        <caption>
            <h3 style="float: right; margin-right:170px">Total              : Rp. 27.000</h3>
        </caption>
	</tbody>
</table>

@endsection
