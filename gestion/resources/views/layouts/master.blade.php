<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Starter</title>
    <link rel="stylesheet" href="{{(" css/app.css")}}">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">

    <link rel="stylesheet" href="dist/css/adminlte.min.css?v=3.2.0">
    @livewireStyles



    <script nonce="9631adeb-91f3-4fd7-9681-a21e5210976e">
        (function(w,d){!function(f,g,h,i){f[h]=f[h]||{};f[h].executed=[];f.zaraz={deferred:[],listeners:[]};f.zaraz.q=[];f.zaraz._f=function(j){return function(){var k=Array.prototype.slice.call(arguments);f.zaraz.q.push({m:j,a:k})}};for(const l of["track","set","debug"])f.zaraz[l]=f.zaraz._f(l);f.zaraz.init=()=>{var m=g.getElementsByTagName(i)[0],n=g.createElement(i),o=g.getElementsByTagName("title")[0];o&&(f[h].t=g.getElementsByTagName("title")[0].text);f[h].x=Math.random();f[h].w=f.screen.width;f[h].h=f.screen.height;f[h].j=f.innerHeight;f[h].e=f.innerWidth;f[h].l=f.location.href;f[h].r=g.referrer;f[h].k=f.screen.colorDepth;f[h].n=g.characterSet;f[h].o=(new Date).getTimezoneOffset();if(f.dataLayer)for(const s of Object.entries(Object.entries(dataLayer).reduce(((t,u)=>({...t[1],...u[1]})))))zaraz.set(s[0],s[1],{scope:"page"});f[h].q=[];for(;f.zaraz.q.length;){const v=f.zaraz.q.shift();f[h].q.push(v)}n.defer=!0;for(const w of[localStorage,sessionStorage])Object.keys(w||{}).filter((y=>y.startsWith("_zaraz_"))).forEach((x=>{try{f[h]["z_"+x.slice(7)]=JSON.parse(w.getItem(x))}catch{f[h]["z_"+x.slice(7)]=w.getItem(x)}}));n.referrerPolicy="origin";n.src="/cdn-cgi/zaraz/s.js?z="+btoa(encodeURIComponent(JSON.stringify(f[h])));m.parentNode.insertBefore(n,m)};["complete","interactive"].includes(g.readyState)?zaraz.init():f.addEventListener("DOMContentLoaded",zaraz.init)}(w,d,"zarazData","script");})(window,document);
    </script>
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <x-tomate />


        <aside class="main-sidebar sidebar-dark-primary elevation-4">

            <a href="index3.html" class="brand-link">

                <span class="brand-text font-weight-light">AdminLTE 3</span>
            </a>

            <div class="sidebar">

                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="{{asset('images/user1-128x128.jpg')}}" alt="User Avatar"
                            class="img-size-50 mr-3 img-circle">

                    </div>
                    <div class="info">
                        <a href="#" class="d-block">{{auth()->user()->nom}} {{auth()->user()->prenom}}</a>
                    </div>
                </div>



                <x-menu />
            </div>

        </aside>

        <div class="content-wrapper">

           

            <div class="row">
                <div class="col-12 p-4">
                    <div class="jumbotron ">
                        <h1 class="display-3">Bienvenu, {{auth()->user()->nom}} {{auth()->user()->prenom}} <strong></strong></h1>
                        {{-- @foreach(auth()->user()->roles as $role) --}}
                        {{-- <p>{{$role->nom}}</p> --}}
                        {{-- @endforeach --}}
                        <p class="lead">Il s’agit d’une unité de héros simple, un composant simple de style jumbotron pour attirer l’attention sur le contenu ou les informations en vedette.</p>
                        <hr class="my-4">
                        <p>Il utilise des classes utilitaires pour la typographie et l’espacement afin d’espacer le contenu dans le conteneur plus grand.</p>
                        <p class="lead">
                            <a class="btn btn-primary btn-lg" href="#" role="button">Apprenez PLus</a>
                        </p>
                    </div>
                </div>
            </div>





        </div>


        <x-sidbar />


        <footer class="main-footer">

            <div class="float-right d-none d-sm-inline">
               Tout ce que vous voulez savoir
            </div>

            <strong>Copyright &copy; 2023<a href="https://adminlte.io">BD.Brigitte</a>.</strong> Tout droit reserve
        </footer>
    </div>



    <script src="plugins/jquery/jquery.min.js"></script>

    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="dist/js/adminlte.min.js?v=3.2.0"></script>
    <script src="{{ mix('js/app.js') }}"></script>


    @livewireScripts

</body>

</html>