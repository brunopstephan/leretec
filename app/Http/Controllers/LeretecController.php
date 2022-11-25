<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateBookFormRequest;
use App\Models\Leretec;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade\Pdf;
use Svg\Tag\Rect;
use Illuminate\Database\Eloquent\Collection;

class LeretecController extends Controller
{


    public function index(Request $request){
        $leretec_carousel = Leretec::orderByDesc('id')->get();

        // $search_for = $request->search_for OR $request->input('search_for');

        $leretec_card = Leretec::orderByDesc('id')->get(); //removi o paginate por ora
        $leretec_card2 = Leretec::orderBy('id')->get(); //removi o paginate por ora
        $leretec_card3 = Leretec::orderByDesc('view')->get(); //removi o paginate por ora

        return view('/leretec/home',['leretec_card3' => $leretec_card3, 'leretec_card2' => $leretec_card2, 'leretec_card' => $leretec_card, 'leretec_carousel' => $leretec_carousel]);    
    }

    public function index_admin(){  
        $leretec = Leretec::orderByDesc('id')->get();
        return view('/leretec/admin',['leretec' => $leretec]);
    }

    // public function index_historia($id){
    //     $leretec = Leretec::findOrFail($id);
    //     return view('/leretec/history',['leretec' => $leretec]);
    // }

    public function store(StoreUpdateBookFormRequest $request){
        $leretec = new Leretec();

        $leretec->date = $request->date;
        $leretec->name_aluno = $request->name_aluno;
        $leretec->class_aluno = $request->class_aluno;
        $leretec->grade_aluno = $request->grade_aluno;
        $leretec->title_historia = $request->title_historia;
        $leretec->cover_historia = $request->cover_historia;
        $leretec->sinopse_historia = $request->sinopse_historia;
        $leretec->historia = $request->historia;

        $leretec->save();

        return redirect('/admin');
    }   

    public function destroy($id){

        Leretec::findOrFail($id)->delete(); 

        return redirect('/admin');
    }

    public function edit($id){

        $leretec = Leretec::findOrFail($id);

        return view('leretec.edit', ['leretec' => $leretec]);

    }

    public function update(StoreUpdateBookFormRequest $request) {

            Leretec::findOrFail($request->id)->update($request->all());

            return redirect('/admin');
        
    }

    public function export_user_pdf(Request $request){
        $title = Leretec::where('id', $request->id)->value('title_historia');
        $leretec = Leretec::findOrFail($request->id);
        $pdf = PDF::loadView('pdf.teste', ['leretec'=>$leretec]);
        return $pdf->download($title.'.pdf');
    }

    public function view_user_pdf(Request $request){
        $leretec = Leretec::find($request->id);

        $pdf = PDF::loadView('pdf.teste', ['leretec'=>$leretec]);
        
        $value = true;

    
          if (isset($_COOKIE[$request->id])) {
              return $pdf->stream();
          }else{

            setcookie($request->id, $value, time() + (86400 * 90), "/");

            $view = Leretec::where('id', $request->id)->value('view');
            $leretec->update(['view' => $view + 1]);

            return $pdf->stream();
        }
    }


    public function search(Request $request){

        $n = 0;

        $output="";
        $history_search=Leretec::orderByDesc('id')->where('title_historia', 'Like', '%'.$request->search.'%')->orWhere('name_aluno', 'Like', '%'.$request->search.'%')->get();

        foreach($history_search as $history_search)
        {
            $output.=

            '<div class="card-history">
                <div class="card-image">
                    <img class="coverSearch" src="'.$history_search->cover_historia.'" alt="" id="'.$n.'"onerror="defaultCover('.$n.')">
                </div>
                <div class="card-info">
                    <p>👀'.$history_search->view.' Data de Inserção: '.$history_search->date->format('d/m/Y').' - Última atualização: '.$history_search->updated_at->format('d/m/Y').'</p>
                    <p>'.$history_search->name_aluno.' - '.$history_search->class_aluno.' - '.$history_search->grade_aluno.'</p>
                    <h2>'.$history_search->title_historia.'</h2>
                    <div class="sinopse-container">
                     <p class="card-sinopse">'.$history_search->sinopse_historia.'</p>
                     <ul>
                         <li>
                             <p>Ler mais...</p>
                             <div class="sinopse-content">
                             <p>'.$history_search->sinopse_historia.'</p>
                             </div>
                         </li>
                     </ul>
                 </div>

                 <div class="botoes-historia">
                 <a class="btn-all btn-hist" href="/historia/view_user_pdf/'.$history_search->id.'" target="_blank">Ler Historia</a>
                 <a class="btn-all btn-hist" href="/historia/export_user_pdf/'.$history_search->id.'">Baixar Historia</a>
                 </div>
                    
                </div>
            </div>   
            ';
            $n++;
        }   
        
        return response($output);


    }

    public function search2(Request $request){
        $output="";
        $history_search=Leretec::orderBy('id')->where('title_historia', 'Like', '%'.$request->search.'%')->orWhere('name_aluno', 'Like', '%'.$request->search.'%')->get();

        $n = Leretec::where('id', '>=', 0)->count();

        foreach($history_search as $history_search)
        {
            $output.=

            '<div class="card-history">
                <div class="card-image">
                    <img class="coverSearch" src="'.$history_search->cover_historia.'" alt="" id="'.$n.'"onerror="defaultCover('.$n.')">
                </div>
                <div class="card-info">
                    <p>👀'.$history_search->view.' Data de Inserção: '.$history_search->date->format('d/m/Y').' - Última atualização: '.$history_search->updated_at->format('d/m/Y').'</p>
                    <p>'.$history_search->name_aluno.' - '.$history_search->class_aluno.' - '.$history_search->grade_aluno.'</p>
                    <h2>'.$history_search->title_historia.'</h2>
                    <div class="sinopse-container">
                     <p class="card-sinopse">'.$history_search->sinopse_historia.'</p>
                     <ul>
                         <li>
                             <p>Ler mais...</p>
                             <div class="sinopse-content">
                             <p>'.$history_search->sinopse_historia.'</p>
                             </div>
                         </li>
                     </ul>
                 </div>

                 <div class="botoes-historia">
                 <a class="btn-all btn-hist" href="/historia/view_user_pdf/'.$history_search->id.'" target="_blank">Ler Historia</a>
                 <a class="btn-all btn-hist" href="/historia/export_user_pdf/'.$history_search->id.'">Baixar Historia</a>
                 </div>
                    
                </div>
            </div>   
            ';
            $n++;
        }
        
        return response($output);


    }

    public function search3(Request $request){
        $output="";
        $history_search=Leretec::orderByDesc('view')->where('title_historia', 'Like', '%'.$request->search.'%')->orWhere('name_aluno', 'Like', '%'.$request->search.'%')->get();

        $n = Leretec::where('id', '>=', 0)->count()*2;

        foreach($history_search as $history_search)
        {
            $output.=

            '<div class="card-history">
                <div class="card-image">
                    <img class="coverSearch" src="'.$history_search->cover_historia.'" alt="" id="'.$n.'"onerror="defaultCover('.$n.')">
                </div>
                <div class="card-info">
                    <p>👀'.$history_search->view.' Data de Inserção: '.$history_search->date->format('d/m/Y').' - Última atualização: '.$history_search->updated_at->format('d/m/Y').'</p>
                    <p>'.$history_search->name_aluno.' - '.$history_search->class_aluno.' - '.$history_search->grade_aluno.'</p>
                    <h2>'.$history_search->title_historia.'</h2>
                    <div class="sinopse-container">
                     <p class="card-sinopse">'.$history_search->sinopse_historia.'</p>
                     <ul>
                         <li>
                             <p>Ler mais...</p>
                             <div class="sinopse-content">
                             <p>'.$history_search->sinopse_historia.'</p>
                             </div>
                         </li>
                     </ul>
                 </div>

                 <div class="botoes-historia">
                 <a class="btn-all btn-hist" href="/historia/view_user_pdf/'.$history_search->id.'" target="_blank">Ler Historia</a>
                 <a class="btn-all btn-hist" href="/historia/export_user_pdf/'.$history_search->id.'">Baixar Historia</a>
                 </div>
                    
                </div>
            </div>   
            ';
            $n++;
        }
        
        return response($output);


    }


}
