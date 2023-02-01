<nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
    <div class="navbar-brand-wrapper d-flex justify-content-center">
      <div class="navbar-brand-inner-wrapper d-flex justify-content-between align-items-center w-100">
        <a class="navbar-brand brand-logo" ><img src="/StyleLogin/images/Imagem1.png" alt="logo"/></a>
        <a class="navbar-brand brand-logo-mini"><img src="/StyleLogin/images/Imagem1.png" alt="logo"/></a>
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="typcn typcn-th-menu"></span>
        </button>
      </div>
    </div>
    <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">

        <ul class="navbar-nav navbar-nav-right">

            <li class="nav-item dropdown mr-0">
              <a class="nav-link count-indicator dropdown-toggle d-flex align-items-center justify-content-center" id="notificationDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <i class="typcn typcn-user mx-0"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                <p class="mb-0 font-weight-normal float-left dropdown-header">{{ Auth::user()->name }}</p>

                <a class="dropdown-item" data-toggle="modal" data-target="#edit-modal">
                    <div class="preview-item-content">
                    <h6 class="preview-subject font-weight-normal">Alterar senha</h6>

                  </div>
                </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                @csrf
            </form>
                <a class="dropdown-item preview-item"  href="{{ route('logout') }}"
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">

                  <div class="preview-item-content">
                    <h6 class="preview-subject font-weight-normal">Terminar sessão</h6>

                  </div>
                </a>
              </div>
            </li>
          </ul>
      <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
        <span class="typcn typcn-th-menu"></span>
      </button>
    </div>
  </nav>

  <div class="container-fluid page-body-wrapper">

    <!-- partial:partials/_sidebar.html -->
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
      <ul class="nav">
        <li class="nav-item">
          <a class="nav-link" href="{{ route('home') }}">
            <i class="typcn typcn-device-desktop menu-icon"></i>
            <span class="menu-title">Dashboard</span>
          </a>
        </li>
        @if(Auth::user()->tipo_user == "admin")
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#utilizador" aria-expanded="false" aria-controls="utilizador">
              <i class="typcn typcn-document-text menu-icon"></i>
              <span class="menu-title">Utilizador</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="utilizador">
              <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="{{ route('user_add_dp') }}">Cadastrar</a></li>
                  <li class="nav-item"> <a class="nav-link" href="{{ route('index_dp') }}">Listar</a></li>
            </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#relat" aria-expanded="false" aria-controls="relat">
              <i class="typcn typcn-document-text menu-icon"></i>
              <span class="menu-title">Relatórios</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="relat">
              <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a target="_blank" class="nav-link" href="{{ route('DP_PDF') }}">Diectores Provinciais</a></li>
                  <li class="nav-item"> <a target="_blank" class="nav-link" href="{{ route('DM_PDF') }}">Directores Municipais</a></li>
                  <li class="nav-item"> <a target="_blank" class="nav-link" href="{{ route('DC_PDF') }}">Directores de centroExames</a></li>
            </ul>
            </div>
        </li>
        @elseif(Auth::user()->tipo_user == "DP")
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#utilizador" aria-expanded="false" aria-controls="utilizador">
              <i class="typcn typcn-document-text menu-icon"></i>
              <span class="menu-title">Utilizador</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="utilizador">
              <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="{{ route('user_add_dm') }}">Cadastrar</a></li>
                  <li class="nav-item"> <a class="nav-link" href="{{ route('index_dm') }}">Listar</a></li>
            </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#relat" aria-expanded="false" aria-controls="relat">
              <i class="typcn typcn-document-text menu-icon"></i>
              <span class="menu-title">Relatórios</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="relat">
              <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a target="_blank" class="nav-link" href="{{ route('DM_PDF_DP') }}">Directores Municipais</a></li>
                  <li class="nav-item"> <a target="_blank" class="nav-link" href="{{ route('DC_PDF_DP') }}">Directores de centroExames</a></li>
                  <li class="nav-item"> <a target="_blank" class="nav-link" href="">centroExames de exames</a></li>
                  <li class="nav-item"> <a target="_blank" class="nav-link" href="">Alunos</a></li>
            </ul>
            </div>
        </li>
        @elseif(Auth::user()->tipo_user == "DM")
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#utilizador" aria-expanded="false" aria-controls="utilizador">
              <i class="typcn typcn-document-text menu-icon"></i>
              <span class="menu-title">Utilizador</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="utilizador">
              <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="{{ route('user_add_dc') }}">Cadastrar</a></li>
                  <li class="nav-item"> <a class="nav-link" href="{{ route('index_dc') }}">Listar</a></li>
            </ul>
            </div>
        </li>

            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#centroExame_exame" aria-expanded="false" aria-controls="centroExame_exame">
                <i class="typcn typcn-document-text menu-icon"></i>
                <span class="menu-title">centroExame de exame</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="centroExame_exame">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="">Cadastrar</a></li>
                  <li class="nav-item"> <a class="nav-link" href="">Listar</a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#relat" aria-expanded="false" aria-controls="relat">
                  <i class="typcn typcn-document-text menu-icon"></i>
                  <span class="menu-title">Relatórios</span>
                  <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="relat">
                  <ul class="nav flex-column sub-menu">
                      <li class="nav-item"> <a target="_blank" class="nav-link" href="{{ route('DC_PDF_DM') }}">Directores de centroExames</a></li>
                      <li class="nav-item"> <a target="_blank" class="nav-link" href="">centroExames de exames</a></li>
                      <li class="nav-item"> <a target="_blank" class="nav-link" href="">Alunos</a></li>
                </ul>
                </div>
            </li>

        @elseif(Auth::user()->tipo_user == "DC")
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#utilizador" aria-expanded="false" aria-controls="utilizador">
              <i class="typcn typcn-document-text menu-icon"></i>
              <span class="menu-title">Utilizador</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="utilizador">
              <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="{{ route('user_add') }}">Cadastrar</a></li>
                  <li class="nav-item"> <a class="nav-link" href="{{ route('index') }}">Listar</a></li>
            </ul>
            </div>
        </li>
          <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#classe" aria-expanded="false" aria-controls="classe">
                <i class="typcn typcn-document-text menu-icon"></i>
                <span class="menu-title">Classe</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="classe">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="">Cadastrar</a></li>
                  <li class="nav-item"> <a class="nav-link" href="">Listar</a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#turma" aria-expanded="false" aria-controls="turma">
                <i class="typcn typcn-document-text menu-icon"></i>
                <span class="menu-title">Turma</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="turma">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="{{ route('turma_add') }}">Cadastrar</a></li>
                  <li class="nav-item"> <a class="nav-link" href="{{ route('turma_index') }}">Listar</a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#relat" aria-expanded="false" aria-controls="relat">
                  <i class="typcn typcn-document-text menu-icon"></i>
                  <span class="menu-title">Relatórios</span>
                  <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="relat">
                  <ul class="nav flex-column sub-menu">
                      <li class="nav-item"> <a target="_blank" class="nav-link" href="">Alunos</a></li>
                </ul>
                </div>
            </li>
          @elseif(Auth::user()->tipo_user == "SP")
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <i class="typcn typcn-document-text menu-icon"></i>
                <span class="menu-title">Aluno</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="">Cadastrar</a></li>
                  <li class="nav-item"> <a class="nav-link" href="">Listar</a></li>
                </ul>
              </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#relat" aria-expanded="false" aria-controls="relat">
              <i class="typcn typcn-document-text menu-icon"></i>
              <span class="menu-title">Relatórios</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="relat">
              <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a target="_blank" class="nav-link" href="">Alunos</a></li>
            </ul>
            </div>
        </li>
          @elseif(Auth::user()->tipo_user == "V")
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <i class="typcn typcn-document-text menu-icon"></i>
                <span class="menu-title">Aluno</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="">Listar</a></li>
                </ul>
              </div>
          </li>
     @endif


      </ul>

    </nav>
