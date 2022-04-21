@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('groceryListView') }}</div>
                    <div class="card-body">

                        @if ($groceryLists != null)
                            <fieldset class="form-group">
                                @foreach ($groceryLists as $groceryList)
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            {{ $groceryList->name}}
                                        </label>
                                    </div>
                                @endforeach

                            </fieldset>
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
