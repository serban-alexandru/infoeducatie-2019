@extends('layouts.app')

@section('content')

<div class="header pb-1 pt-5 mb-5">
    <section class="section section-lg pt-lg-0 mt--350">
      <div class="container">
        <div class="row justify-content-center" style="margin-top: 0px">
          <div class="col-lg-8">
            <div class="row row-grid">
              <div class="w-100">
                <div class="card card-lift--hover shadow border-0">
                  <div class="card-body py-5">

                      @if(isset($product))
                          @if($product -> type == 1)
                              <div class="icon icon-shape icon-shape-primary rounded-circle">
                                  <i class="fas fa-pizza-slice"></i>
                              </div>
                          @elseif($product -> type == 2)
                              <div class="icon icon-shape icon-shape-primary rounded-circle">
                                  <i class="fas fa-wine-bottle"></i>
                              </div>
                          @endif
                          <div class="px-0">
                            <img src="{{ asset('/products/' . $product -> image) }}" class="img-center img-fluid shadow shadow-lg--hover" style="width: 250px; height: 250px; border-radius: 50%;">
                          </div>

                          <div class="row">
                              <div class="col-md-12">
                                  <h1 class="text-primary mt-3 text-center">
                                      Rezultat scanare: {{ $product -> name }}
                                  </h1>
                              </div>
                              @if($product -> type == 1)
                                  <div class="col-md-6">
                                      <h3 class="text-primary mt-3">
                                          Cod de bare: {{ $product -> barcode }}
                                      </h3>
                                      <h3 class="text-primary mt-3">
                                          Cantitate: {{ $product -> weight }}/ g
                                      </h3>
                                      <h3 class="text-primary mt-3">
                                          Proteine:  {{ $product -> protein }} /100 g
                                      </h3>
                                      <h3 class="text-primary mt-3">
                                          Grasimi: {{ $product -> weight }} /100 g
                                      </h3>
                                  </div>
                                  <div class="col-md-6">
                                      <h3 class="text-primary mt-3">
                                          Carbohidrati: {{ $product -> carbo }} /100 g
                                      </h3>
                                      <h3 class="text-primary mt-3">
                                          Kcal: {{ $product -> kcal }} /100 g
                                      </h3>
                                      <h3 class="text-primary mt-3">
                                          Categorie: {{ $product -> category }}
                                      </h3>
                                  </div>
                              @elseif($product -> type == 2)
                                  <div class="col-md-6">
                                      <h3 class="text-primary mt-3">
                                          Cod de bare: {{ $product -> barcode }}
                                      </h3>
                                      <h3 class="text-primary mt-3">
                                          Cantitate: {{ $product -> weight }}/ ml
                                      </h3>
                                      <h3 class="text-primary mt-3">
                                          Proteine:  {{ $product -> protein }} /100 ml
                                      </h3>
                                      <h3 class="text-primary mt-3">
                                          Grasimi: {{ $product -> weight }} /100 ml
                                      </h3>
                                  </div>
                                  <div class="col-md-6">
                                      <h3 class="text-primary mt-3">
                                          Carbohidrati: {{ $product -> carbo }} /100 ml
                                      </h3>
                                      <h3 class="text-primary mt-3">
                                          Kcal: {{ $product -> kcal }} /100 ml
                                      </h3>
                                      <h3 class="text-primary mt-3">
                                          Categorie: {{ $product -> category }}
                                      </h3>
                                  </div>
                              @endif
                          </div>
                      @else
                          <h2 class="text-primary mt-3">
                              Ne pare rau, produsul nu este inregistrat!
                          </h2>
                      @endif

                    {{-- <a href="#" class="btn btn-primary mt-4" data-toggle="modal" data-target="#add-target">Adauga target nou</a> --}}
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </section>
</div>

<!-- Add new target - modal -->
<div class="modal fade" id="add-target" tabindex="-1" role="dialog" aria-labelledby="modal-default" aria-hidden="true">
    <div class="modal-dialog modal- modal-dialog-centered modal-" role="document">
        <div class="modal-content">

          <form action="{{ url('/add_target') }}" method="POST">
          @csrf

            <div class="modal-header">
                <h2 class="modal-title" id="modal-title-default">Adauga un nou target</h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>

            <div class="modal-body">

                Alege tipul target-ului:
                <select name="type" id="" class="form-control" required style="margin: 10px 0px">
                    <option value="" hidden>Alege</option>
                    <option value="1">Slabit</option>
                    <option value="2">Mentinere</option>
                    <option value="3">Punere masa</option>
                </select>

            </div>

            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Creaza</button>
                <button type="button" class="btn btn-link  ml-auto" data-dismiss="modal">Inchide</button>
            </div>

          </form>

        </div>
    </div>
</div>

<section class="section section-lg pt-lg-0 mt--400" style="margin-top: 30px">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-12">
            <div class="row row-grid">
                @if(isset($product -> allergies))
                    @foreach ($product -> allergies as $key => $allergy)
                        <div class="col-lg-4">
                          <div class="card card-lift--hover shadow border-0">
                              <div class="card-body py-5">
                                <div class="px-0">
                                  <img src="{{ asset('/products/' . $allergy -> image) }}" class="img-center img-fluid shadow shadow-lg--hover" style="width: 150px; height: 150px; border-radius: 50%;">
                                </div>
                                <h2 class="text-success text-uppercase text-center mt-3">{{ $allergy -> allergy -> name }}</h2>
                                @if(isset($allergy -> allergy -> description))
                                    <p class="description mt-3">{{ $allergy -> allergy -> description }}</p>
                                @endif
                                {{-- <div>
                                  <span class="badge badge-pill badge-warning">mancare</span>
                                  <span class="badge badge-pill badge-warning">cina</span>
                                </div> --}}
                                @php
                                    $ok = 1;
                                @endphp

                                @foreach(Auth::user()->allergies as $allergy2)

                                    @if($allergy2->allergy_id == $allergy->id)
                                        @php
                                            $ok = 0;
                                        @endphp
                                    @endif

                                @endforeach

                                @if($ok == 1)
                                    <a href="{{ url('/add_remove_allergy/'.$allergy->id) }}" class="btn btn-primary mt-4 w-100">Adauga la profil</a>
                                @else
                                    <a href="{{ url('/add_remove_allergy/'.$allergy->id) }}" class="btn btn-danger mt-4 w-100">Sterge de la profil</a>
                                @endif                              </div>
                          </div>
                        </div>
                    @endforeach
                @endif
            </div>
          </div>
        </div>
      </div>
    </section>

@endsection
