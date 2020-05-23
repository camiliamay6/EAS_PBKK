{% extends 'layout.volt' %}

{% block pageTitle %}
Tambah Akses
{% endblock %}

{% block body %}
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <form action="/admin/register" method="POST">
                    <h1 align="center">Tambah Akses</h1>
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan nama">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan email">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan password">
                    </div>
                    <button type="submit" class="btn btn-primary" value="save">Submit</button>
                </form>
            </div>
        </div>
    </div>
{% endblock %}