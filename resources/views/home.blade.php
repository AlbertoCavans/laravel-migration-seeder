@extends('layouts.app')

@section('title', 'Pagina iniziale')

@section('main-content')
  <section>
    <div class="container py-4">
      <h1>Tabella treni</h1>

      <div class="row bg-info p-3">
        <div class="col"><strong>Azienda</strong></div>
        <div class="col"><strong>Stazione di partenza</strong></div>
        <div class="col"><strong>Stazione di arrivo</strong></div>
        <div class="col"><strong>Orario di partenza</strong></div>
        <div class="col"><strong>Orario di arrivo</strong></div>
        <div class="col"><strong>Codice del treno</strong></div>
        <div class="col"><strong>Numero carrozza</strong></div>
        <div class="col"><strong>In orario</strong></div>
        <div class="col"><strong>Cancellato</strong></div>
        <div class="col"><strong>Prezzo del biglietto</strong></div>
        <div class="col"><strong>Possibilità di rimborso</strong></div>
      </div>
      @forelse($trains as $train)
      <div class="row">
        <div class="col">{{ $train->azienda }}</div>
        <div class="col">{{ $train->stazione_partenza }}</div>
        <div class="col">{{ $train->stazione_arrivo }}</div>
        <div class="col">{{ $train->orario_partenza }}</div>
        <div class="col">{{ $train->orario_arrivo }}</div>
        <div class="col">{{ $train->codice_treno }}</div>
        <div class="col">{{ $train->numero_carrozza }}</div>
        <div class="col">{{ $train->in_orario ? "Sì" : "No" }}</div>
        <div class="col">{{ $train->cancellato ? "Sì" : "No" }}</div>
        <div class="col">{{ $train->prezzo_biglietto }}€</div>
        <div class="col">{{ $train->possibilita_rimborso ? "Sì" : "No" }}</div>
      </div>
      @empty
      @endforelse
    </div>
  </section>
@endsection
