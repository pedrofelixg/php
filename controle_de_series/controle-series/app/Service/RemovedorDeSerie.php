<?php

namespace App\Service;

use App\Models\Episodio;
use App\Models\Serie;
use App\Models\Temporadas;
use Illuminate\Support\Facades\DB;

class RemovedorDeSerie
{
    public function removerSerie(int $serieId): string
    {
        $nomeSerie = '';
        DB::transaction(function () use ($serieId, &$nomeSerie) {
            $serie = Serie::find($serieId);
            $nomeSerie = $serie->nome;
            $this->removerSerieETemporada($serie);
        });

        return$nomeSerie;
    }

    /**
     * @param $serie
     * @return void
     */
    private function removerSerieETemporada($serie): void
    {
        $serie->temporadas->each(function (Temporadas $temporadas) {
            $temporadas->episodios->each(function (Episodio $episodio) {
                $episodio->delete();
            });
            $temporadas->delete();
        });
        $serie->delete();
    }
}
