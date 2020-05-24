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
                    <div class="caption">
                        <h3><a href="/bantuan">Daftar Bantuan</a></h3>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <div class="caption">
                        <h3><a href="/register">Tambah Akses</a></h3>
                    </div>
                </div>
            </div> 
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <div class="caption">
                        <h3><a href="/bantuan/tambah">Tambah Bantuan</a></h3>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <div class="caption">
                        <h3><a href="/kategori/tambah">Tambah Kategori</a></h3>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <div class="caption">
                        <h3><a href="/produk/tambah">Tambah Produk</a></h3>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <div class="caption">
                        <h3><a href="/kategori">Daftar Kategori</a></h3>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <div class="caption">
                        <h3><a href="/produk">Daftar Produk</a></h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
{% endblock %}
   