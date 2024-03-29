<?php

namespace App\Http\Controllers\Report;
use App\Models\Aluno;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class ReportController extends Controller
{
    //Admin
    public function DP_PDF()
    {
        $users= User::Where([['tipo_user','=','DP']])->orderByRaw("provincia ASC,name ASC")->get();

        $data['users']=$users;
        $data["bootstrap"] = file_get_contents("src/users/bootstrap.min.css");
        $data["css"] = file_get_contents("src/users/style.css");
        $mpdf = new \Mpdf\Mpdf([
            'mode' => 'utf-8', 'margin_top' => 17,
            'margin_left' => 10,
            'margin_right' => 10, 'margin_bottom' => 0, 'format' => [210,297]
        ]);
        $mpdf->SetFont("arial");
        $mpdf->setHeader();
        $mpdf->AddPage('L');
        $html = view("pdfs/report/dp", $data);
        $mpdf->writeHTML($html);
        $mpdf->Output("directores_provinciais.pdf", "I");
    }
    public function DM_PDF()
    {
        $users= User::Where([['tipo_user','=','DM']])->orderByRaw("provincia ASC, municipio ASC,name ASC")->get();

        $data['users']=$users;
        $data["bootstrap"] = file_get_contents("src/users/bootstrap.min.css");
        $data["css"] = file_get_contents("src/users/style.css");
        $mpdf = new \Mpdf\Mpdf([
            'mode' => 'utf-8', 'margin_top' => 17,
            'margin_left' => 10,
            'margin_right' => 10, 'margin_bottom' => 0, 'format' => [210,297]
        ]);
        $mpdf->SetFont("arial");
        $mpdf->setHeader();
        $mpdf->AddPage('L');
        $html = view("pdfs/report/dm", $data);
        $mpdf->writeHTML($html);
        $mpdf->Output("directores_municipais.pdf", "I");
    }
    public function DC_PDF()
    {
        $users= User::Where([['tipo_user','=','DC']])
        ->orderByRaw("provincia ASC,municipio ASC, instituicao ASC,name ASC")
        ->get();

        $data['users']=$users;
        $data["bootstrap"] = file_get_contents("src/users/bootstrap.min.css");
        $data["css"] = file_get_contents("src/users/style.css");
        $mpdf = new \Mpdf\Mpdf([
            'mode' => 'utf-8', 'margin_top' => 17,
            'margin_left' => 10,
            'margin_right' => 10, 'margin_bottom' => 0, 'format' => [210,297]
        ]);
        $mpdf->SetFont("arial");
        $mpdf->setHeader();
        $mpdf->AddPage('L');
        $html = view("pdfs/report/dc", $data);
        $mpdf->writeHTML($html);
        $mpdf->Output("directores_de_centroExames.pdf", "I");
    }


    //Dp
    public function DM_PDF_DP()
    {
        $users= User::Where([['tipo_user','=','DM'],['provincia','=',Auth::user()->provincia]])->orderByRaw("provincia ASC, municipio ASC,name ASC")->get();

        $data['users']=$users;
        $data["bootstrap"] = file_get_contents("src/users/bootstrap.min.css");
        $data["css"] = file_get_contents("src/users/style.css");
        $mpdf = new \Mpdf\Mpdf([
            'mode' => 'utf-8', 'margin_top' => 17,
            'margin_left' => 10,
            'margin_right' => 10, 'margin_bottom' => 0, 'format' => [210,297]
        ]);
        $mpdf->SetFont("arial");
        $mpdf->setHeader();
        $mpdf->AddPage('L');
        $html = view("pdfs/report/dmp", $data);
        $mpdf->writeHTML($html);
        $mpdf->Output("directores_municipais.pdf", "I");
    }
    public function DC_PDF_DP()
    {
        $users= User::Where([['tipo_user','=','DC'],['provincia','=',Auth::user()->provincia]])->orderByRaw("provincia ASC,municipio ASC ,instituicao ASC,name ASC")->get();

        $data['users']=$users;
        $data["bootstrap"] = file_get_contents("src/users/bootstrap.min.css");
        $data["css"] = file_get_contents("src/users/style.css");
        $mpdf = new \Mpdf\Mpdf([
            'mode' => 'utf-8', 'margin_top' => 17,
            'margin_left' => 10,
            'margin_right' => 10, 'margin_bottom' => 0, 'format' => [210,297]
        ]);
        $mpdf->SetFont("arial");
        $mpdf->setHeader();
        $mpdf->AddPage('L');
        $html = view("pdfs/report/dcp", $data);
        $mpdf->writeHTML($html);
        $mpdf->Output("directores_de_centroExames.pdf", "I");
    }

    //DM
    public function DC_PDF_DM()
    {
        $users= User::Where([['tipo_user','=','DC'],['municipio','=',Auth::user()->municipio]])->orderByRaw("provincia ASC,municipio ASC ,instituicao ASC,name ASC")->get();

        $data['users']=$users;
        $data["bootstrap"] = file_get_contents("src/users/bootstrap.min.css");
        $data["css"] = file_get_contents("src/users/style.css");
        $mpdf = new \Mpdf\Mpdf([
            'mode' => 'utf-8', 'margin_top' => 17,
            'margin_left' => 10,
            'margin_right' => 10, 'margin_bottom' => 0, 'format' => [210,297]
        ]);
        $mpdf->SetFont("arial");
        $mpdf->setHeader();
        $mpdf->AddPage('L');
        $html = view("pdfs/report/dcc", $data);
        $mpdf->writeHTML($html);
        $mpdf->Output("directores_de_centroExames.pdf", "I");
    }

    //DC
public function sp_dc_report()
{
    $users= User::Where([['tipo_user','=','SP'],['municipio','=',Auth::user()->municipio],['instituicao','=',Auth::user()->instituicao]])->orderByRaw("provincia ASC,municipio ASC ,instituicao ASC,name ASC")->get();

    $data['users']=$users;
    $data["bootstrap"] = file_get_contents("src/users/bootstrap.min.css");
    $data["css"] = file_get_contents("src/users/style.css");
    $mpdf = new \Mpdf\Mpdf([
        'mode' => 'utf-8', 'margin_top' => 17,
        'margin_left' => 10,
        'margin_right' => 10, 'margin_bottom' => 0, 'format' => [210,297]
    ]);
    $mpdf->SetFont("arial");
    $mpdf->setHeader();
    $mpdf->AddPage('L');
    $html = view("pdfs/report/dcsp", $data);
    $mpdf->writeHTML($html);
    $mpdf->Output("Secretarios.pdf", "I");
}
public function v_dc_report()
{
    $users= User::Where([['tipo_user','=','V'],['municipio','=',Auth::user()->municipio],['instituicao','=',Auth::user()->instituicao]])->orderByRaw("provincia ASC,municipio ASC ,instituicao ASC,name ASC")->get();

    $data['users']=$users;
    $data["bootstrap"] = file_get_contents("src/users/bootstrap.min.css");
    $data["css"] = file_get_contents("src/users/style.css");
    $mpdf = new \Mpdf\Mpdf([
        'mode' => 'utf-8', 'margin_top' => 17,
        'margin_left' => 10,
        'margin_right' => 10, 'margin_bottom' => 0, 'format' => [210,297]
    ]);
    $mpdf->SetFont("arial");
    $mpdf->setHeader();
    $mpdf->AddPage('L');
    $html = view("pdfs/report/dcv", $data);
    $mpdf->writeHTML($html);
    $mpdf->Output("Vigilantes.pdf", "I");
}
    //SP
    public function Aluno_pdf_sp(Aluno $alunoP,$turma)
    {
        $data['turma'] = $turma;
        $data['alunos']=$alunoP-> AlunosDcForSearch($turma);
        $data["bootstrap"] = file_get_contents("src/users/bootstrap.min.css");
        $data["css"] = file_get_contents("src/users/style.css");
        $mpdf = new \Mpdf\Mpdf([
            'mode' => 'utf-8', 'margin_top' => 17,
            'margin_left' => 10,
            'margin_right' => 10, 'margin_bottom' => 0, 'format' => [210,297]
        ]);
        $mpdf->SetFont("arial");
        $mpdf->setHeader();
        $mpdf->AddPage('L');
        $html = view("pdfs/report/aluno_pdf_sp", $data);
        $mpdf->writeHTML($html);
        $mpdf->Output("Alunos.pdf", "I");
    }
    public function Aluno_pdf_sp_def()
    {
        $alunos = DB::table('alunos')
        ->join('turmas','turmas.id','alunos.turma_id')
        ->join('classes','classes.id','turmas.classe_id')
        ->where([['centroexame','=',Auth::user()->instituicao],['deficiencia','!=','Nenhum']])
        ->get();

        $data['alunos']=$alunos;
        $data["bootstrap"] = file_get_contents("src/users/bootstrap.min.css");
        $data["css"] = file_get_contents("src/users/style.css");
        $mpdf = new \Mpdf\Mpdf([
            'mode' => 'utf-8', 'margin_top' => 17,
            'margin_left' => 10,
            'margin_right' => 10, 'margin_bottom' => 0, 'format' => [210,297]
        ]);
        $mpdf->SetFont("arial");
        $mpdf->setHeader();
        $mpdf->AddPage('L');
        $html = view("pdfs/report/aluno_pdf_sp_def", $data);
        $mpdf->writeHTML($html);
        $mpdf->Output("Alunos_def.pdf", "I");
    }


    //V
   /* public function ListPresence()
    {
        $alunos = DB::table('alunos')
        ->join('turmas','turmas.id','alunos.turma_id')
        ->join('classes','classes.id','turmas.classe_id')
        ->where([['centroexame','=',Auth::user()->instituicao],['deficiencia','!=','Nenhum']])
        ->get();

        $data['alunos']=$alunos;
        $data["bootstrap"] = file_get_contents("src/users/bootstrap.min.css");
        $data["css"] = file_get_contents("src/users/style.css");
        $mpdf = new \Mpdf\Mpdf([
            'mode' => 'utf-8', 'margin_top' => 17,
            'margin_left' => 10,
            'margin_right' => 10, 'margin_bottom' => 0, 'format' => [210,297]
        ]);
        $mpdf->SetFont("arial");
        $mpdf->setHeader();
        $mpdf->AddPage('L');
        $html = view("pdfs/report/aluno_presence", $data);
        $mpdf->writeHTML($html);
        $mpdf->Output("Alunos_def.pdf", "I");
    }*/

    //med
    public function ListAluno ($id)
    {

        $data['quantidade'] = DB::table('alunos')
        ->join('turmas', 'turmas.id', 'alunos.turma_id')
        ->join('classes', 'classes.id', 'turmas.classe_id')
        ->selectRaw('alunos.*,classes.nome_classe,turmas.centroexame,turmas.nome_turma')
        ->where([
            ['alunos.turma_id','=',$id]
        ])->orderBy('nome_aluno')->count();
        $data['first'] = DB::table('alunos')
        ->join('turmas', 'turmas.id', 'alunos.turma_id')
        ->join('classes', 'classes.id', 'turmas.classe_id')
        ->selectRaw('alunos.*,classes.nome_classe,turmas.centroexame,turmas.nome_turma')
        ->where([
            ['alunos.turma_id','=',$id]
        ])->first();
        $data['alunos'] = DB::table('alunos')
        ->join('turmas', 'turmas.id', 'alunos.turma_id')
        ->join('classes', 'classes.id', 'turmas.classe_id')
        ->selectRaw('alunos.*,classes.nome_classe,turmas.centroexame,turmas.nome_turma')
        ->where([
            ['alunos.turma_id','=',$id]
        ])->orderBy('nome_aluno')->get();
        $data["bootstrap"] = file_get_contents("src/users/bootstrap.min.css");
        $data["css"] = file_get_contents("src/users/style.css");
        $mpdf = new \Mpdf\Mpdf([
            'mode' => 'utf-8', 'margin_top' => 17,
            'margin_left' => 10,
            'margin_right' => 10, 'margin_bottom' => 0, 'format' => [297,210]
        ]);
        $mpdf->SetFont("arial");
        $mpdf->setHeader();
        $mpdf->AddPage('L');
        $html = view("pdfs/report/aluno_presence", $data);
        $mpdf->writeHTML($html);
        $mpdf->Output("Alunos.pdf", "I");
    }





}
