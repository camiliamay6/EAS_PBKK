{% extends 'layout.volt' %}

{% block pageTitle %}
Dashboard Admin
{% endblock %}

{% block body %}

    <div class="container">
        <div class="jumbotron">
            <div class="container">
                <h1>Ayo Bantu</h1>
                <p>Ayo Bantu merupakan website yang mencatat bantuan-bantuan yang dilakukan selama pandemi Covid-19 berlangsung.</p>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <img src="" alt="Gambar daftar bantuan">
                    <div class="caption">
                        <h3><a href="#">Daftar Bantuan</a></h3>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <img src="" alt="gambar register">
                    <div class="caption">
                        <h3><a href="#">Tambah Akses</a></h3>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <img src="" alt="gambar tambah produk">
                    <div class="caption">
                        <h3><a href="#">Daftar Kategori dan Produk</a></h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
{% endblock %}
   