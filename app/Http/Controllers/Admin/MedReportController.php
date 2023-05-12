<?php

namespace App\Http\Controllers\Admin;
use App\Models\Med;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MedReportController extends Controller
{
    public function viewsearch()
    {
        return view('Med.pesquisa_provincia_municipio.index');
    }
    public function takeProvince(Request $request)
    {

           $provincia= $request->provincia;
           $municipio= $request->municipio;
           return redirect("/view_provincia/$provincia/$municipio");

    }
    public function view_provincia(Med $medPesquisa,$provincia,$municipio)
    {

        try{
            $response['provincia'] = $provincia;
            $response['municipio'] = $municipio;
            $response['logs'] =  $medPesquisa->medPesquisa($provincia,$municipio);
            return view('Med.visualizar_por_p_m.index', $response)->with('i', (request()->input('page', 1) - 1) * 5);
        } catch (\Exception $exception) {
            return redirect()->back()->with('status_Error', '1');
        }
    }
    public function view_turmas_pr($centroexame)
    {
        $response['alunos1']=DB::table('turmas')
        ->join('classes','classes.id','turmas.classe_id')
        ->where([['centroexame','=',$centroexame]])
        ->selectRaw('turmas.*,classes.nome_classe')
        ->get();
        return view('Med.visualizar_centros.index',$response)->with('i', (request()->input('page', 1) - 1) * 5);
    }
    public function Aluno_pdf_sp_med($id)
    {

        $data['alunos'] = DB::table('alunos')
        ->join('turmas', 'turmas.id', 'alunos.turma_id')
        ->join('classes', 'classes.id', 'turmas.classe_id')
        ->selectRaw('alunos.*,classes.nome_classe,turmas.centroexame,turmas.nome_turma')
        ->where([
            ['alunos.turma_id','=',$id]
        ])->get();
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
        $html = view("pdfs/report/aluno_pdf_sp_med", $data);
        $mpdf->writeHTML($html);
        $mpdf->Output("Alunos.pdf", "I");
    }


}
