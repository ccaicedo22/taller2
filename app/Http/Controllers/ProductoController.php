<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use App\Models\Categoria;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use DB;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
      
        $productos = DB::select('call sp_allproducto()'); 
        return $productos;
    }

    public function procedure()
    {
       $productos = DB::Select("call sp_consultacategoriaid(1)");
       return $productos;
    }

    public function procedures()
    {
       $productos = DB::Select("call sp_consultacategoriaid(2)");
       return $productos;
    }

  
    public function store(Request $request)
    {   

        
        $values = [$request->title,$request->description,Str::slug($request->title),$request->categoria_id] ;
        // $producto->title = $request->title;
        // $producto->description = $request->description;
        // $producto->slug = Str::slug($request->title);
        // $producto->categoria_id = $request->categoria_id;
        // $producto->save();        
        
        $productos = DB::insert('call sp_crearproducto(?,?,?,?)',$values);                 
        return response()->json([
            "status" => true,
            "message"=> "done.Se Creo El producto", 
            "data"=> $productos
        ]);
            //  $request->validate([

            //     'title'=> 'required',
            //     'description'=> 'required',
            //     'categoria_id'=> 'required',
            //    // 'slug' => 'required'
                

            // ]);

           
        //    $producto = Producto::create($request->all());
        //    $productos = DB::insert('call sp_crearproductos(?,?,?,?)', [$title,$description,$slug,$categoria_id]);                                                                                                                                                      producto->categorias()->attach($request->categorias);
        //     return $productos;

            // return response()->json([
            //     'res' =>true,
            //     'mensaje' => "el producto fue creado",
            //     "data"=> $producto
            // ]);
    

          
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function show(Producto $producto)
    {
        return response()->json($producto);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function edit(Producto $producto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProductoRequest  $request
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request , $id)
    {
       
        $values = [$request->title,$request->description,Str::slug($request->title),$request->categoria_id,$request->id] ;
        // $productos = DB::select('call sp_editarproducto(?,?,?,?,?)'); 
        // $producto = Producto::findorFail($request->id);
        // $productos->title = $request->title;
        // $productos->description = $request->description;
        // $productos->slug = Str::slug($request->title);
        // $productos->categoria_id = $request->categoria_id;
        // $productos->save(); 
          
        $productos = DB::insert('call sp_editarproductos(?,?,?,?,?)',$values);      
               
        return response()->json([
            "status" => true,
            "message"=> "se actualizo El producto", 
            "data"=> $productos
        ]);
        

              //$producto = Producto::findOrFail($id)->update($request->all());
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        // sp_eliminarproducto
        $productos = DB::select('call sp_eliminarproducto(?)',[$id]); 
        return $productos;
    //     $producto = Producto::destroy($id);
    //     if($producto == 0){
    //     return response()->json([
    //         'res' =>false,
    //         'mensaje' => "el producto que se intenta eliminar no existe :$id",
    //         "data"=> $producto
    //     ]);
    // }
    //     return response()->json([
    //         'res' =>true,
    //         'mensaje' => "el producto que se elimino tenia id :$id",
    //         "data"=> $producto
    //         ]);
    }
}
// 