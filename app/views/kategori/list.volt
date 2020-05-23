{% extends 'layout.volt' %}

{% block pageTitle %}
Daftar Kategori
{% endblock %}

{% block body %}
<h1 class="page-header">Kategori</h1>
<h2 class="sub-header">List</h2>
<div class="table-responsive">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Nama Kategori</th>
            </tr>
        </thead>
        <tbody>
            {% for category in categories %}>
            <tr>
                <td>{{ category.id }}</td>
                <td>{{ category.nama_kategori }}</td>
            </tr>
            {% endfor %}
        </tbody>
    </table>
</div>
{% endblock %}

