{% extends 'layout.volt' %}

{% block pageTitle %}
Tambah Bantuan
{% endblock %}

{% block body %}
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <form action="/bantuan/tambah/submit" method="POST">
                <h1 align="center">Tambah Bantuan</h1>
                <div class="form-group">
                    <label for="nama">Nama Pemberi Bantuan</label>
                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan nama pemberi bantuan">
                </div>
                <div class="form-group">
                    <label for="id_produk">Pilih produk yang disumbangkan</label>
                    {{ select({'id_produk', products, 'using': ['id', 'nama_produk']}) }}
                </div>
                <div class="form-group">
                    <label for="jumlah">Jumlah Bantuan</label>
                    <input type="number" class="form-control" id="jumlah" name="jumlah" placeholder="Masukkan jumlah bantuan">
                </div>
                <button type="submit" class="btn btn-primary" value="save">Submit</button>
            </form>
        </div>
    </div>
</div>
{% endblock %}














