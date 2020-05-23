<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{% block pageTitle %}Dashboard Admin{% endblock %}</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
</head>
<body>
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
    {% block body %}
    {% endblock %}
    <script src="/js/jquery.min.js"></script>
    <script> src="/js/bootstrap.min.js"</script>
</body>
</html>