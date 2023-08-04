<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-xl">
        <div class="modal-content" id="myTable">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Pilih Barang</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body" >
            <table class="table mt-3" id="myTable">
                <thead class="thead-dark">
                    <th> No </th>
                    <th> Kode Barang </th>
                    <th> Nama Barang </th>
                    <th> Jumlah Stok </th>
                    <th> Harga Barang </th>
                    <th> Aksi </th>
                </thead>
                <tbody>
                    @foreach ($produk as $p)
                     <tr>
                        <td> {{$i++}}</td>
                        <td> {{$p->kode_barang}} </td>
                        <td> {{$p->nama_barang}} </td>
                        <td> {{$p->jumlah_barang}} </td>
                        <td> {{$p->harga}} </td>
                        <td><button class="btn mdi mdi-minus-circle" style="background-color: rgb(147, 247, 161)"></button> 
                            <p class="btn-holder"><a href="{{ route('admin.add.to.cart', $p->kode_barang) }}" class="btn btn-warning btn-block text-center" role="button">Tambah</a> </p>
                        </td>
                     </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Total <span>{{ count((array) session('cart')) }}</span></button>
        </div>
        </div>
    </div>
    </div>