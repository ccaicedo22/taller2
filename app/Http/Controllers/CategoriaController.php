<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;

class CategoriaController extends Controller
{


   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $categorias = Categoria::all();
      return $categorias;
     }

    
     



    
   

  
//     public function store(Request $request)
//     {
//              $request->validate([
               
//                 'descripcion'=> 'required'
                               
//            ]);

//            $categoria = Categoria::create($request->all());

//             return response()->json([
//                 'res' =>true,
//                 'mensaje' => "la categoria fue creada",
//                 "data"=> $categoria
//             ]);
    

          
//     }

//     /**
//      * Display the specified resource.
//      *
//      *
//      * @return \Illuminate\Http\Response
//      */
//     public function show(Categoria $categoria)
//     {
//         return response()->json($categoria);
//     }

//     /**
//      * Show the form for editing the specified resource.
//      *
  
//      * @return \Illuminate\Http\Response
//      */
    

//     /**
//      * Update the specified resource in storage.
//      *
//      * @param  \App\Http\Requests\UpdateProductoRequest  $request
//      * @param  \App\Models\Producto  $producto
//      * @return \Illuminate\Http\Response
//      */
//     public function update(Request $request , $id)
//     {
       

//         $categoria = Categoria::findorFail($request->id);
//         $categoria->descripcion = $request->descripcion;
        
//         $categoria->save(); 

//         return response()->json([
//             'res' =>true,
//             'mensaje' => "la categoria fue actualizada",
//             "data"=> $categoria
//         ]);
        

//               //$producto = Producto::findOrFail($id)->update($request->all());
// }

//     /**
//      * Remove the specified resource from storage.
//      *
//      * @param  \App\Models\Producto  $producto
//      * @return \Illuminate\Http\Response
//      */
//     public function destroy($id)
//     {
//         $categoria = Categoria::destroy($id);
//         if($categoria == 0){
//         return response()->json([
//             'res' =>false,
//             'mensaje' => "la categoria que se intenta eliminar no existe :$id",
//             "data"=> $categoria
//         ]);
//     }
//         return response()->json([
//             'res' =>true,
//             'mensaje' => "la categoria que se elimino tenia id :$id",
//             "data"=> $categoria
//             ]);
//     }
}
