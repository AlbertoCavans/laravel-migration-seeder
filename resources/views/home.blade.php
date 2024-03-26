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
        <div class="col  overflow-hidden">{{ $train->azienda }}</div>
        <div class="col  overflow-hidden">{{ $train->stazione_partenza }}</div>
        <div class="col  overflow-hidden">{{ $train->stazione_arrivo }}</div>
        <div class="col  overflow-hidden">{{ $train->orario_partenza }}</div>
        <div class="col  overflow-hidden">{{ $train->orario_arrivo }}</div>
        <div class="col  overflow-hidden">{{ $train->codice_treno }}</div>
        <div class="col  overflow-hidden">{{ $train->numero_carrozza }}</div>
        <div class="col  overflow-hidden">{{ $train->in_orario ? "Sì" : "No" }}</div>
        <div class="col  overflow-hidden">{{ $train->cancellato ? "Sì" : "No" }}</div>
        <div class="col  overflow-hidden">{{ $train->prezzo_biglietto }}€</div>
        <div class="col  overflow-hidden">{{ $train->possibilita_rimborso ? "Sì" : "No" }}</div>
      </div>
      @empty
      @endforelse
    </div>
  </section>
@endsection
