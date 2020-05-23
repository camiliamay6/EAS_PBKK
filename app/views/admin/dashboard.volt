{% extends 'layout.volt' %}

{% block pageTitle %}
Dashboard Admin
{% endblock %}

{% block body %}
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Ayo Bantu</a>
            </div>
            
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Home<span class="sr-only">(current)</span></a></li>
                    <li><a href="#">Daftar Bantuan</a></li>
                    <li><a href="#">Daftar Kategori & produk</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#" data-toggle="modal" data-target="#loginModal">Login</a></li>
                </ul>
            </div>
        </div>
    </nav>
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
   