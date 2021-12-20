<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;
    protected $fillable = ['descripcion'];

    public function productos(){
        return $this->hasMany(Producto::class);
    }
}


   Interface tipoInterface
    {
        public function mostrartipo();
    }

    class Alimentoscate implements tipoInterface{
        public function mostrartipo(){

        }
    }

    class Juguetescate implements tipoInterface{
        public function mostrartipo(){
            console.log('mostrando por Juguetes');
        }
    }

    class mostrarcate
    {
        public function initialize($type) {

            switch ($type) {
                case 'Alimentos':
                return new Alimentoscate();
                break;

                case 'Juguetes':
                return new Juguetescate();
                break;
                default:
                throw new Exception("Categoria incorrecta");
                break;
            }
        }
    }

