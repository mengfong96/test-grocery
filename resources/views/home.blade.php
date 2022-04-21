@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Home') }}</div>
                    @if (empty($groceryData))
                        <p class="text-center mt-3">You have not set preference yet</p>
                    @else
                        <div class="card-body">
                            <table class="table table-hover">
                                <tbody>
                                    <tr>
                                        <th scope="row">User Pax</th>
                                        <td>{{ $groceryData->user_pax }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Meal Num</th>
                                        <td>{{ $groceryData->meal_num }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    @endif
                    <div class="card-body">
                        <div class="col text-center">
                            <form action="setPreferencePage" method="GET">
                                <button type="submit"  style="width:150px" class="btn btn-primary">Set preference</button>
                            </form>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="col text-center">
                            <form action="showGroceryList/{{ Auth::user()->id }}" method="GET">
                                <button type="submit" style="width:150px" class="btn btn-primary">View Grocery List</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
