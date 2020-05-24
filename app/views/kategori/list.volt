{% extends 'layout.volt' %}

{% block pageTitle %}
Daftar Kategori
{% endblock %}

{% block body %}

<div class="container">
    <h1 class="page-header" align="center">Daftar Kategori</h1>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nama Kategori</th>
                </tr>
            </thead>
            <tbody>
                {% for category in categories %}
                <tr>
                    <td>{{ category.id }}</td>
                    <td>{{ category.nama_kategori }}</td>
                </tr>
                {% endfor %}
            </tbody>
        </table>
    </div>
</div>

{% endblock %}

