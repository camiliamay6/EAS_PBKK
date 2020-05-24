{% extends 'layout.volt' %}

{% block pageTitle %}
Tambah Kategori
{% endblock %}

{% block body %}
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <form action="/kategori/tambah/submit" method="POST">
                <h1 align="center">Tambah Kategori</h1>
                <div class="form-group">
                    <label for="nama">Nama Kategori</label>
                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan nama kategori">
                </div>
                <button type="submit" class="btn btn-primary" value="save">Submit</button>
            </form>
        </div>
    </div>
</div>
{% endblock %}














