{% extends 'layout.volt' %}

{% block pageTitle %}
Daftar Bantuan
{% endblock %}

{% block body %}
<div class="container">
    <h1 class="page-header">Daftar Bantuan</h1>
    <form action="/bantuan/filter" method="POST">
        <div class="form-group">
            <label for="id_kategori">Filter Kategori</label>
            {{ select({'id_kategori', kategori, 'using': ['id', 'nama_kategori']}) }}
            <button type="submit" class="btn btn-primary" value="save">Apply</button>
        </div>
        
    </form>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nama Pemberi Bantuan</th>
                    <th>Produk yang Disumbangkan</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                {% for b in bantuan %}
                <tr>
                    {% if id_kategori != '' %}
                        {% if id_kategori === b.id_produk.id_kategori %}
                            <td>{{ b.id }}</td>
                            <td>{{ b.nama }}</td>
                            <td>{{ b.id_produk.nama_produk}}</td>
                            <td>{{b.total_bantuan }}</td>
                        {% endif %}
                    {% else %}
                        <td>{{ b.id }}</td>
                        <td>{{ b.nama }}</td>
                        <td>{{ b.id_produk.nama_produk}}</td>
                        <td>{{b.total_bantuan }}</td>
                    {% endif %}
                    
                </tr>
                {% endfor %}
            </tbody>
        </table>
    </div>
</div>

{% endblock %}