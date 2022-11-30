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
            'id_dios' => $this->prueba->id_dios,
            'nombre_dios' => User::where('id', $this->prueba->id_dios)->value('name'),
            'cantidad_destino' => $this->prueba->cantidad_destino,
            'pregunta_descripcion' => $this->descripcion,
            'atributo' => Caracteristica::where('id', $this->id_caracteristica)->value('nombre'),
            'dificultad' => $this->dificultad,
            'fecha_creacion' => $this->prueba->created_at->format('d-m-Y')
        ];
    }
}
