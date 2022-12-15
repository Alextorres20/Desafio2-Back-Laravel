<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Models\Caracteristica;
use App\Models\User;


class PruebaPuntualResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        //Alicia
        return [
            'id' => $this->id,
            'idDios' => $this->prueba->id_dios,
            'nombreDios' => User::where('id', $this->prueba->id_dios)->value('name'),
            'cantidadDestino' => $this->prueba->cantidad_destino,
            'preguntaDescripcion' => $this->descripcion,
            'atributo' => Caracteristica::where('id', $this->id_caracteristica)->value('nombre'),
            'dificultad' => $this->dificultad,
            'fechaCreacion' => $this->prueba->created_at->format('d-m-Y'),
            'tipo' => $this->prueba->tipo
        ];
    }
}
