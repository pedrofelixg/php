<?php

namespace App\Service;

use App\Models\Serie;
use Illuminate\Support\Facades\DB;

class CriadorDeSerie
{
    public function criarSerie(string $nomeSerie, int $qtdTemporadas, int $epPorTemporada): Serie
    {
        $serie = null;
        DB::transaction(function () use ($nomeSerie, &$serie, $epPorTemporada, $qtdTemporadas) {
            $serie = Serie::create(['nome' => $nomeSerie]);
            for ($i = 1; $i <= $qtdTemporadas; $i++) {
                $temporada = $serie->temporadas()->create(['numero' => $i]);
                for ($j = 1; $j <= $epPorTemporada; $j++) {
                    $episodios = $temporada->episodios()->create(['numero' => $j]);
                }
            }
        });
        return $serie;
    }
}
