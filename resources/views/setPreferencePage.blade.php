@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Set Preference') }}</div>
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
                        <form action="/setPreference" method="POST">
                            @csrf
                            <div class="form-group">
                                <input type="hidden" , name="user_id" , value={{ Auth::user()->id }}> <br><br>
                                <label class="col-form-label mt-4" for="inputDefault">User Pax</label>
                                <input type="text" class="form-control" placeholder="Input user pax" id="inputDefault" name="user_pax">
                            </div>
                            <div class="form-group">
                                <label class="col-form-label mt-4" for="inputDefault">Meal Number</label>
                                <input type="text" class="form-control" placeholder="Input meal number" id="inputDefault" name="meal_num">
                            </div>
                            <div class="card-body">
                                <div class="col text-center">
                                    <button type="submit" style="width:150px" class="btn btn-primary">Set Preference</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
@endsection
