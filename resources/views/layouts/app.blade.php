<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Bootstrap CSS -->
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
        
    
    <link rel="stylesheet" href="{{URL::asset('https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css')}}" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

      <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>  
    <script src="{{ asset('https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js')}}"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.quicksearch/2.3.1/jquery.quicksearch.js"></script>
    <link href="{{ asset('https://use.fontawesome.com/releases/v5.15.4/css/all.css')}}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/css/sidebar.css">
  

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>COMRecep</title>

    <!-- Scripts -->
    <script src="{{ asset('/js/app.js') }}" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/mark.js/8.11.1/mark.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/mark.js/8.11.1/jquery.mark.js"></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->

    <!--<link href="{{ asset('/css/app.css') }}" rel="stylesheet">-->
    <script type="text/javascript">
      jQuery(function ($) {
        //ao clicar em qualquer parte do sidebar ela some.
          $(".page-wrapper").removeClass("toggled");
        // -----------------------------------------------------

          $(".sidebar-dropdown > a").click(function() {
          $(".sidebar-submenu").slideUp(200);
        if (
          $(this)
            .parent()
            .hasClass("active")
        ) {
          $(".sidebar-dropdown").removeClass("active");
          $(this)
            .parent()
            .removeClass("active");
        } else {
          $(".sidebar-dropdown").removeClass("active");
          $(this)
            .next(".sidebar-submenu")
            .slideDown(200);
          $(this)
            .parent()
            .addClass("active");
        }
      });

      $("#close-sidebar").click(function() {
        $(".page-wrapper").removeClass("toggled");
      });
      $("#show-sidebar").click(function() {
        $(".page-wrapper").addClass("toggled");
      });   
      });
    </script>
    <style>
        mark.a0 {
            color: black;
            padding: 5px;
            background: greenyellow;
        }
  
        mark.a1 {
            color: black;
            padding: 5px;
            background: cyan;
        }
  
        mark.a2 {
            color: black;
            padding: 5px;
            background: red;
        }
  
        mark.a3 {
            color: white;
            padding: 5px;
            background: green;
        }
  
        mark.a4 {
            color: black;
            padding: 5px;
            background: pink;
        }
    </style>
    <!--DATATABLES-->
      @yield('datatables')
    <!--FIM DATATABLES-->
    <script type="text/javascript" src="http://js.nicedit.com/nicEdit-latest.js"></script>
    @yield('onesignal')
<body>
@if(Auth::check())
<div class="page-wrapper chiller-theme toggled">
  <a id="show-sidebar" class="btn btn-sm btn-dark" href="#">
    <i class="fas fa-bars"></i>
  </a>
  <nav id="sidebar" class="sidebar-wrapper">
    <div class="sidebar-content">
      <div class="sidebar-brand">
        <a href="{{ route('home') }}">COMRecep - BACG</a>
        <div id="close-sidebar">
          <i class="fas fa-times"></i>
        </div>
      </div>
      <div class="sidebar-header">
        <!--<div class="user-pic">
          <img class="img-responsive img-rounded" src="https://raw.githubusercontent.com/azouaoui-med/pro-sidebar-template/gh-pages/src/img/user.jpg"
            alt="User picture">
        </div>-->
        <div class="user-info">
          <span class="user-name">
            @isset(Auth::user()->name)
              {{ Auth::user()->name }}
            @endisset
          </span>
          <span class="user-role">
            <span class="user-status">
              <i class="fa fa-circle"></i>
              <span>Online</span>
            </span>
          </span>
        </div>
      </div>
      @isset(Auth::user()->name)
      <div class="sidebar-menu">
        <ul>
          <li class="header-menu">
            <span>Geral</span>
          </li>
          <li>
            <a href="{{ route('home') }}">
              <i class="fa fa-tachometer-alt"></i>
              <span>Dashboard</span>
              <span class="badge badge-pill badge-warning">New</span>
            </a>
          </li>
       
          <li class="sidebar-dropdown">
            <a href="#">
              <i class="fas fa-flag"></i>
              <span>Formatura</span>
            </a>
            <div class="sidebar-submenu">
              <ul>
                @if(Auth::user()->email == 'comrecep.comando@gmail.com' || Auth::user()->email == 'comrecep.chefe@gmail.com')
                <li>
                  <a href="{{route('formaturas.create')}}">Adicionar</a>
                </li>
                @endif
                <li>
                  <a href="{{route('formaturas.index')}}">Listar</a>
                </li>
              </ul>
            </div>
          </li>
          @endif
          
          <li class="sidebar-dropdown">
            <a href="#">
              <i class="fas fa-medal"></i>
              <span class="badge badge-pill badge-warning">New</span>
              <span>Títulos</span>
            </a>
            <div class="sidebar-submenu">
              <ul>
                @if(Auth::user()->email == 'comrecep.comando@gmail.com' || Auth::user()->email == 'comrecep.chefe@gmail.com')
                <li>
                  <a href="{{route('titulos.create')}}">Gerenciar</a>
                </li>
                @endif
                <li>
                  <a href="{{route('titulos.index')}}">Listar</a>
                </li>
              </ul>
            </div>
          </li>

          <li class="sidebar-dropdown">
            <a href="#">
              <i class="fas fa-user-tie"></i>
              <span class="badge badge-pill badge-warning">New</span>
              <span>Precedência</span>
            </a>
            <div class="sidebar-submenu">
              <ul>
                @if(Auth::user()->email == 'comrecep.comando@gmail.com' || Auth::user()->email == 'comrecep.chefe@gmail.com' || Auth::user()->email == 'comrecep.precedencia@gmail.com' )
                <li>
                  <a href="{{route('autoridades.create')}}">Gerenciar</a>
                </li>
                @endif
                <li>
                  <a href="{{route('autoridades.index')}}">Listar</a>
                </li>
              </ul>
            </div>
          </li>
        </ul>
      </div>

      <!-- sidebar-menu  -->
    </div>
    <!-- sidebar-content  -->
    @isset(Auth::user()->name)
    <div class="sidebar-footer">
      <a href="{{ route('sair') }}">
        <i class="fa fa-power-off"></i>
      </a>
    </div>
    @endisset
  </nav>
@endif
  <!-- sidebar-wrapper  -->
  <main class="page-content">
   <div id="app">
        <main class="py-4">
            @yield('content')
        </main>
    </div>

      <footer class="text-center">
        <div class="mb-2">
          <small>
            © {{Carbon\Carbon::now()->year}} por - 
              2S SIN Vanoni
          </small>
        </div>
      </footer>
  </main>
  <!-- page-content" -->
</div>


<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.js"  defer></script>
<script type="text/javascript">
  $(document).ready(function () {
    $('[data-toggle="tooltip"]').tooltip();
    $('#listas').DataTable();
});
</script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>

  <!--script de inicialização-->

    @yield('script_adicional')

  <!--Fim script de inicialização-->

<script type="text/javascript">
  const handlePhone = (event) => {
      let input = event.target
      input.value = phoneMask(input.value)
    }

    const phoneMask = (value) => {
      if (!value) return ""
      value = value.replace(/\D/g,'')
      value = value.replace(/(\d{2})(\d)/,"($1) $2")
      value = value.replace(/(\d)(\d{4})$/,"$1-$2")
      return value
    }
</script>

</body>
</html>
