<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Models\Caracteristica;

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
        return [
            'id' => $this->id,
            'id_dios' => $this->prueba->id_dios,
            'cantidad_destino' => $this->prueba->cantidad_destino,
            'descripcion' => $this->descripcion,
            'atributo' => Caracteristica::where('id', $this->id_caracteristica)->value('nombre'),
            'dificultad' => $this->dificultad,
            'fecha_creacion' => $this->prueba->created_at->format('d-m-Y')
        ];
    }
}
