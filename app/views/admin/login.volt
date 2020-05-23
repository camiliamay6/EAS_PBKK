{% extends 'layout.volt' %}

{% block pageTitle %}
    Login Admin
{% endblock %}

{% block body %}

<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <form action="/admin/login" method="POST">
                <h1 align="center">Login</h1>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="Masukkan email">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" name="password" id="password" placeholder="Masukkan password">
                </div>
                <button type="submit" class="btn btn-primary" class="justify-right">Submit</button>
            </form>
        </div>
           
    </div>
</div>
   
{% endblock %}