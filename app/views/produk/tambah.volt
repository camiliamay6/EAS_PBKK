{% extends 'layout.volt' %}

{% block pageTitle %}
Tambah Produk
{% endblock %}

{% block body %}
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <form action="/produk/tambah/submit" method="POST">
                <h1 align="center">Tambah Produk</h1>
                <div class="form-group">
                    <label for="nama">Nama Produk</label>
                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan nama kategori">
                </div>
                <div class="form-group">
                    <label for="id_kategori">Kategori</label>
                    {{ select({'id_kategori', categories, 'using': ['id', 'nama_kategori']}) }}
                    <!-- <select name="id_kategori" id="id_kategori">
                        {% for category in categories %}
                            <option value="{{ category.id }}">{{category.nama_kategori }}</option>
                        {% endfor %}
                    </select> -->
                </div>
                <button type="submit" class="btn btn-primary" value="save">Submit</button>
            </form>
        </div>
    </div>
</div>
{% endblock %}














