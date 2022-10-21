<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\usuarios;
use App\Models\tipos;
use App\Models\productos;
use App\Models\tienda;



class sistemaController extends Controller
{
    public function usuarios (){

        $usuarios_a = Usuarios::all();
        $usuarios_b = \DB::select ('SELECT * FROM usuario');
        return view ("lista_usuario")
        ->with(['usuarios1' =>$usuarios_a])
        ->with(['usuarios2' =>$usuarios_b]);

}
public function tipos(){
    $tipos_a = tipos::all();
    $tipos_b = \DB::select('SELECT * FROM tipos');
    return view ("lista_tipos")
    ->with(['tipos1'=>$tipos_a])
    ->with(['tipos2'=>$tipos_b]);
}
public function tienda(){
    $tienda_a = tienda::all();
    $tienda_b =\DB::select('SELECT * FROM tienda') ;
    return view ( " lista_tienda")
   ->with(['tiendal'=>$tienda_a])
   ->with(['tienda2'=>$tienda_b]);
}
public function productos(){
    $productos_a = productos::all();
    $productos_b =\DB::select('SELECT * FROM productos');
    return view ("lista_productos")
    ->with([ 'productos1'=> $productos_a])
    ->with([ 'productos2'=> $productos_b]);
}

//---------------------REGISTROS----------------------

//---------------------tienda----------------------
public function registro_tienda(){
    $tienda_a = Tienda::all();
    return view ("registro_tienda")
   ;      
}
//---------------------tipos----------------------
public function registro_tipos(){
    $tipos_a = Tipos::all();
    return view ("registro_tipos")
   ;      
}
//---------------------productos----------------------
public function registro_productos(){
    $productos_a = Productos::all();
    return view ("registro_productos")
   ;      
}

//---------------------usuarios----------------------



//.......................editar.........................

//.......................tienda .........................
public function  editar_tienda(){
    $tienda_a = Tienda::all();
    return view (" editar_tienda")
   ;      
}
//.......................tipos .........................
public function editar_tipos(){
    $tipos_a = Tipos::all();
    return view ("editar_tipos")
   ;      
}
//.......................productos .........................

public function editar_productos(){
    $productos_a = Productos::all();
    return view ("editar_productos")
   ;      
}
//.......................usuarios .........................



//.......................ELIMINAR..............................
public function  eliminar (){
    $usuario_a = Usuarios::all();
    return view (" eliminar")
   ;      
}


//.......................detalle..............................


public function detalle_usuario($id_usuario){
    $usuario = usuarios::find($id_usuario);
    return view ("detalle_usuario")
    ->with(['detalle'=> $usuario]);
}


//.......................ALTA.........................

 /*   public function registro_usuario(){
        $usuario_a = Usuarios::all();
        return view ("registro_usuario")
       ;      
}
*/
  
public function altau (){
    $usuario=Usuarios::all();
    return view("registro_usuario")
    ->with(['usuarios' => $usuario ]);
}

/*public function lista_usuario(){
    $niveles=Nivels::all();
    return view("lista_usuario")
    ->with(['nivels' =>$niveles]);
}*/

public function registrar (Request $request){
  [
        'matricula' => 'required',
        'nombre' => 'required',
        'app' => 'required',
        'apm' => 'required',
        'fech_nac' => 'required',
        'genero' => 'required',
        'foto' => 'required',
        'email' => 'required',
        'pass' => 'required',
        'nivel' => 'required',
        'activo' => '1'
        
    ];



    Usuarios::create(array(
'matricula'=> $request->input('matricula'),
'nombre'=> $request->input('nombre'),
'app'=> $request->input('app'),
'apm'=> $request->input('apm'),
'fech_nac'=> $request->input('fech_nac'),
'genero'=> $request->input('genero'),
'foto'=> $request->input('foto'),
'email'=> $request->input('email'),
'pass'=> $request->input('pass'),
'nivel'=> $request->input('nivel'),
'activo' => '1'
    ));


    return redirect()->route('lista_usuario');
}



public function editar_usuario (usuarios $id_usuario){
    $usuarios=Usuarios::all();
    return view ("editar_usuario")
    ->with(['usuarios' => $usuarios ])
    ->with(['usuarios' => $id_usuario]);
}
public function salvar (Usuarios $id_usuario,Request $request){
    $query =Usuarios::find($request-> id_usuario);
    $query->matricula=($request-> matricula);
    $query->nombre=trim($request-> nombre);
    $query->app=trim($request-> app);
    $query->apm=trim($request-> apm);
    $query->fech_nac=$request-> fech_nac;
    $query->genero=$request-> genero;
    $query->foto=trim($request-> foto);
    $query->email=trim($request-> email);
    $query->pass=trim($request-> pass);
    $query->nivel=$request-> nivel;
    $query->activo=$request->activo;
    $query->save();
    return redirect()->route("editar_usuario",['id_usuario' => $id_usuario->id_usuario]);
}
public function  borrarusuario  (Usuarios $id_usuario){
    \Storage::disk('local')->delete ($id_usuario->foto);

    $id_usuario->delete();
    return redirect()->route("lista_usuario");
}
//--------------------------------NIVEL----------------------------------------------------

public function detalleni($id_nivel){
    $nivel=Nivels::find($id_nivel);
    return view ("detalleni")
    ->with(['detalleni'=> $nivel]);
}
public function altani(){
    $niveles=Nivels::all();
    return view("formni")
    ->with(['nivels' =>$niveles]);
}
public function registroni (Request $request){
    $this->validate($request,[
        'nivel' => 'required',
        'clave' => 'required',
        'nombre' => 'required',
        'activo' => '1'
        

    ]);
    Nivels::create(array(
'nivel'=> $request->input('nivel'),
'clave'=> $request->input('clave'),
'nombre'=> $request->input('nombre'),
'activo'=> '1'
    ));
    return redirect()->route('lista_nivel');
}
public function editarni (nivels $id_nivel){
    $niveles=Nivels::all();
    return view ("editarni")
    ->with(['nivels' =>$niveles]);
}
public function salvarni (Nivels $id_nivel,Request $request){
    $query =Nivels::find($request-> id_nivel);
    $query->nivel=$request->nivel;
    $query->clave=$request->clave;
    $query->nombre=trim($request->nombre);
    $query->activo=$request->activo;
    $query -> save();
    return redirect()->route("editarni",['id'->id_nivel]);
}
public function  borrarni  (Nivels $id_nivel){
    \Storage::disk('local')->delete ($id_nivel);

    $id_nivel->delete();
    return redirect()->route("lista_nivel");
}

}