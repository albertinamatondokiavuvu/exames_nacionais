<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    {{-- Protecção contra clickJacking --}}
    {!! header('X-Frame-Options: SAMEORIGIN') !!}
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="assets/images/imagem1-128x83-2.png" rel="icon">
    <link href="assets/images/imagem1-128x83-2.png" rel="apple-touch-icon">
    <title>INADE - @yield('title')</title>
    <link href="/select2/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="/vendors/feather/feather.css">
    <link rel="stylesheet" href="/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
    <link rel="stylesheet" href="/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" type="text/css" href="/js/select.dataTables.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="/css/vertical-layout-light/style.css">

</head>


<body>
    @include('Modals.dashboard.password.index')
    @include('extra.sweetalert.index')
    <div class="container-scroller">

        <!-- partial:partials/_navbar.html -->
        <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">

                <a class="navbar-brand brand-logo mr-5" href="{{ route('home') }}">
                    <img src="/images/Imagem1.png" class="mr-2" alt="logo" />
                </a>
                <a class="navbar-brand brand-logo-mini" href="{{ route('home') }}">
                    <img src="/images/Imagem1.png" alt="logo" />
                </a>
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
                <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                    <span class="icon-menu"></span>
                </button>

                <ul class="navbar-nav navbar-nav-right">

                    <li class="nav-item nav-profile dropdown">

                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
                            <img src="/images/faces/avatar.jpg" alt="perfil" />
                            <span class="user-name">{{ Auth::user()->name }}</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown"
                            aria-labelledby="profileDropdown">
                            <a class="dropdown-item" href="{{ route('profile') }}">
                                <i class="ti-user text-primary"></i>
                                Perfil
                            </a>
                            <a class="dropdown-item" href="">
                                <i class="ti-help text-primary"></i>
                                Ajuda
                            </a>
                            <a class="dropdown-item" data-toggle="modal" data-target="#edit-modal"><i
                                    class=" ti-unlock text-primary"></i> Alterar Senha</a>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <i class="ti-power-off red text-primary"></i>
                                Terminar Sessão</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                @csrf
                            </form>

                        </div>
                    </li>

                </ul>
                <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
                    data-toggle="offcanvas">
                    <span class="icon-menu"></span>
                </button>
            </div>
        </nav>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">

            <!-- partial -->
            <nav class="sidebar sidebar-offcanvas" id="sidebar">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('dashboard') }}">
                            <i class="icon-grid menu-icon"></i>
                            <span class="menu-title">Painel de Controlo</span>
                        </a>
                    </li>
                    @if (Auth::user()->departamento == 'administrativo')
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false"
                                aria-controls="ui-basic">
                                <i class="icon-head menu-icon"></i>
                                <span class="menu-title">Usuário</span>
                                <i class="menu-arrow"></i>
                            </a>
                            <div class="collapse" id="ui-basic">
                                <ul class="nav flex-column sub-menu">
                                    <li class="nav-item"> <a class="nav-link" href="{{ route('createUser') }}">Cadastrar
                                            Usuário</a>
                                    </li>
                                    <li class="nav-item"> <a class="nav-link"
                                        href="{{ route('indexnormaluser') }}">Listar Usuários <br> Normais</a></li>
                                    <li class="nav-item"> <a class="nav-link"
                                       href="{{ route('indexuser') }}">Listar Usuários <br> Administrativos</a></li>
                            <li class="nav-item"> <a class="nav-link"
                                    href="{{ route('searchLog') }}">Log de actividade</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#form-elements" aria-expanded="false"
                        aria-controls="form-elements">
                        <i class="icon-columns menu-icon"></i>
                        <span class="menu-title">Utentes</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="form-elements">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"><a class="nav-link" href="{{ url('dashboard/index_service/Todos/Todos/Homologação') }}">Homologação</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ url('dashboard/index_service/Todos/Todos/Equivalência') }}">Equivalência</a></li>
                           </ul>
                    </div>
                </li>

               <li class="nav-item">
                   <a class="nav-link" data-toggle="collapse" href="#program" aria-expanded="false"
                       aria-controls="program">
                       <i class="icon-columns menu-icon"></i>
                       <span class="menu-title">Programas</span>
                       <i class="menu-arrow"></i>
                   </a>
                   <div class="collapse" id="program">
                       <ul class="nav flex-column sub-menu">
                           <li class="nav-item"><a class="nav-link" href="{{ route('createprogram') }}">Cadastrar programa</a></li>
                           <li class="nav-item"><a class="nav-link" href="{{ route('indexprogram') }}">Listar programas</a></li>
                       </ul>
                   </div>
               </li>
               <li class="nav-item">
                   <a class="nav-link" data-toggle="collapse" href="#news" aria-expanded="false"
                       aria-controls="news">
                       <i class="icon-columns menu-icon"></i>
                       <span class="menu-title">Notícias</span>
                       <i class="menu-arrow"></i>
                   </a>
                   <div class="collapse" id="news">
                       <ul class="nav flex-column sub-menu">
                           <li class="nav-item"><a class="nav-link" href="{{ route('createnews') }}">Cadastrar notícia</a></li>
                           <li class="nav-item"><a class="nav-link" href="{{ route('indexnews') }}">Listar notícias</a></li>
                       </ul>
                   </div>
               </li>
               <li class="nav-item">
                   <a class="nav-link" data-toggle="collapse" href="#evento" aria-expanded="false"
                       aria-controls="evento">
                       <i class="icon-columns menu-icon"></i>
                       <span class="menu-title">Eventos</span>
                       <i class="menu-arrow"></i>
                   </a>
                   <div class="collapse" id="evento">
                       <ul class="nav flex-column sub-menu">
                           <li class="nav-item"><a class="nav-link" href="{{ route('createevento') }}">Cadastrar evento</a></li>
                           <li class="nav-item"><a class="nav-link" href="{{ route('indexevento') }}">Listar eventos</a></li>
                       </ul>
                   </div>
               </li>
               <li class="nav-item">
                   <a class="nav-link" href="{{ route('listmessage') }}">
                       <i class="icon-grid-2 menu-icon"></i>
                       <span class="menu-title">Mensagem</span>
                   </a>
               </li>
               <li class="nav-item">
                   <a class="nav-link" data-toggle="collapse" href="#repC" aria-expanded="false"
                       aria-controls="repC">
                       <i class="icon-columns menu-icon"></i>
                       <span class="menu-title">Relatórios</span>
                       <i class="menu-arrow"></i>
                   </a>
                   <div class="collapse" id="repC">
                       <ul class="nav flex-column sub-menu">
                           <li class="nav-item"><a class="nav-link" target="_blank" href="{{ route('reportcountry') }}">Utentes por país</a></li>
                           <li class="nav-item"><a class="nav-link" target="_blank" href="{{ route('docentrada') }}">Processos dados <br> entrada</a></li>
                           <li class="nav-item"><a class="nav-link" target="_blank" href="{{ route('docsaida') }}">Processos dados a <br> saida</a></li>
                       </ul>
                   </div>
                   </li>
   @elseif( Auth::user()->departamento == 'DAEC')
   <li class="nav-item">
       <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false"
           aria-controls="ui-basic">
           <i class="icon-head menu-icon"></i>
           <span class="menu-title">Usuário</span>
           <i class="menu-arrow"></i>
       </a>
       <div class="collapse" id="ui-basic">
           <ul class="nav flex-column sub-menu">
               <li class="nav-item"> <a class="nav-link" href="{{ route('createUser') }}">Cadastrar Usuário</a>
               </li>
               <li class="nav-item"> <a class="nav-link"
                       href="{{ route('indexnormaluser') }}">Listar Usuários <br> Normais</a></li>
                       <li class="nav-item"> <a class="nav-link"
                       href="{{ route('indexuser') }}">Listar Usuários <br> Administrativos</a></li>
               <li class="nav-item"> <a class="nav-link"
                       href="{{ route('searchLog') }}">Log de actividade</a></li>
           </ul>
       </div>
   </li>
   <li class="nav-item">
       <a class="nav-link" data-toggle="collapse" href="#form-elements" aria-expanded="false"
           aria-controls="form-elements">
           <i class="icon-columns menu-icon"></i>
           <span class="menu-title">Utentes</span>
           <i class="menu-arrow"></i>
       </a>
       <div class="collapse" id="form-elements">
           <ul class="nav flex-column sub-menu">
               <li class="nav-item"><a class="nav-link" href="{{ url('dashboard/index_service/Todos/Todos/Homologação') }}">Homologação</a></li>
               <li class="nav-item"><a class="nav-link" href="{{ url('dashboard/index_service/Todos/Todos/Equivalência') }}">Equivalência</a></li>
           </ul>
       </div>
   </li>
   <li class="nav-item">
       <a class="nav-link" data-toggle="collapse" href="#repC" aria-expanded="false"
           aria-controls="repC">
           <i class="icon-columns menu-icon"></i>
           <span class="menu-title">Relatórios</span>
           <i class="menu-arrow"></i>
       </a>
       <div class="collapse" id="repC">
           <ul class="nav flex-column sub-menu">
               <li class="nav-item"><a class="nav-link" target="_blank" href="{{ route('reportcountry') }}">Utentes por país</a></li>
               <li class="nav-item"><a class="nav-link" target="_blank" href="{{ route('docentrada') }}">Processos dados <br> entrada</a></li>
               <li class="nav-item"><a class="nav-link" target="_blank" href="{{ route('docsaida') }}">Processos dados a <br> saida</a></li>



           </ul>
       </div>
   </li>
   @elseif( Auth::user()->departamento == 'DEGC')
   <li class="nav-item">
       <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false"
           aria-controls="ui-basic">
           <i class="icon-head menu-icon"></i>
           <span class="menu-title">Usuário</span>
           <i class="menu-arrow"></i>
       </a>
       <div class="collapse" id="ui-basic">
           <ul class="nav flex-column sub-menu">
               <li class="nav-item"> <a class="nav-link" href="{{ route('createUser') }}">Cadastrar Usuário</a>
               </li>
                       <li class="nav-item"> <a class="nav-link"
                       href="{{ route('indexuser') }}">Listar Usuários </a></li>
               <li class="nav-item"> <a class="nav-link"
                       href="{{ route('searchLog') }}">Log de actividade</a></li>
           </ul>
       </div>
   </li>
   <li class="nav-item">
       <a class="nav-link" data-toggle="collapse" href="#program" aria-expanded="false"
           aria-controls="program">
           <i class="icon-columns menu-icon"></i>
           <span class="menu-title">Programas</span>
           <i class="menu-arrow"></i>
       </a>
       <div class="collapse" id="program">
           <ul class="nav flex-column sub-menu">
               <li class="nav-item"><a class="nav-link" href="{{ route('createprogram') }}">Cadastrar programa</a></li>
               <li class="nav-item"><a class="nav-link" href="{{ route('indexprogram') }}">Listar programas</a></li>
           </ul>
       </div>
   </li>
   @else

                   <li class="nav-item">
                       <a class="nav-link" href="{{ route('createservices') }}">
                           <i class="icon-grid-2 menu-icon"></i>
                           <span class="menu-title">Solicitar Serviço</span>
                       </a>
                   </li>
                   <li class="nav-item">
                       <a class="nav-link" href="{{ route('SearchCustomerByLoggedUser') }}">
                           <i class="icon-grid-2 menu-icon"></i>
                           <span class="menu-title">Consultar Serviço</span>
                       </a>
                   </li>
                   @endif
           </nav>
        <!-- partial -->

            <div class="main-panel">
                <div class="content-wrapper">
                    @yield('content')
