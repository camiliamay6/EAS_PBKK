{% extends 'layout.volt' %}

{% block pageTitle %}
Daftar Produk
{% endblock %}

{% block body %}
<div class="container">
    <h1 class="page-header" align="center">Daftar Produk</h1>
    <div class="table-responsive">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Nama Produk</th>
                <th>Kategori</th>
            </tr>
        </thead>
        <tbody>
            {% for p in products %}
            <tr>
                <td>{{ p.id }}</td>
                <td>{{ p.nama_produk }}</td>
                <td>{{ p.id_kategori.nama_kategori}}</td>
            </tr>
            {% endfor %}
        </tbody>
    </table>
</div>
</div>

{% endblock %}

