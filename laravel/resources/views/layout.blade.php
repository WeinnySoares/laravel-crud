<!DOCTYPE html>
<html>
    <head>
    <title>Laravel 8 CRUD Application</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <form id="logout-form" class="col-lg-12 margin-tb" action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button class="pull-right" class="primary" type="subimit"> Sair </button>
                </form>
            </div>
            <br/>
            @yield('content')

            <script>
                function formatCurrency(i) {
                    var v = i.value.replace(/\D/g,'');
                    v = (v/100).toFixed(2) + '';
                    v = v.replace(".", ",");
                    v = v.replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1.');
                    i.value = 'R$ '+v;
                }
            </script>
        </div>
    </body>
</html>