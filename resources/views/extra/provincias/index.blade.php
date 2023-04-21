@if(Auth::user()->tipo_user != 'admin')
@if (Auth::user()->provincia == 'Bengo')
<option>Bengo</option>
@elseif (Auth::user()->provincia == 'Benguela')
<option>Benguela</option>
@elseif (Auth::user()->provincia == 'Bie')
<option>Bié</option>
@elseif (Auth::user()->provincia == 'Cabinda')
<option>Cabinda</option>
@elseif (Auth::user()->provincia == 'Cuando Cubango')
<option>Cuando-Cubango</option>
@elseif (Auth::user()->provincia == 'Cuanza Norte')
<option>Cuanza Norte</option>
@elseif (Auth::user()->provincia == 'Cuanza Sul')
<option>Cuanza Sul</option>
@elseif (Auth::user()->provincia == 'Cunene')
<option>Cunene</option>
@elseif (Auth::user()->provincia == 'Huambo')
<option>Huambo</option>
@elseif (Auth::user()->provincia == 'Huila')
<option>Huíla</option>
@elseif (Auth::user()->provincia == 'Luanda')
<option>Luanda</option>
@elseif (Auth::user()->provincia == 'Lunda-Norte')
<option>Lunda Norte</option>
@elseif (Auth::user()->provincia == 'Lunda-Sul')
<option>Lunda Sul</option>
@elseif (Auth::user()->provincia == 'Malanje')
<option>Malanje</option>
@elseif (Auth::user()->provincia == 'Moxico')
<option>Moxico</option>
@elseif (Auth::user()->provincia == 'Namibe')
<option>Namibe</option>
@elseif (Auth::user()->provincia == 'Uíge')
<option>Uíge</option>
@elseif (Auth::user()->provincia == 'Zaire')
<option>Zaire</option>
@endif


@else
<option>Bengo</option>
<option>Benguela</option>
<option>Bié</option>
<option>Cabinda</option>
<option>Cuando-Cubango</option>
<option>Cunene</option>
<option>Huambo</option>
<option>Huíla</option>
<option>Cuanza Sul</option>
<option>Cuanza Norte</option>
<option>Luanda</option>
<option>Lunda Norte</option>
<option>Lunda Sul</option>
<option>Malanje</option>
<option>Moxico</option>
<option>Namibe</option>
<option>Uíge</option>
<option>Zaire</option>

@endif

