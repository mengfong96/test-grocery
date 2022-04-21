@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-md-8">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Beverage</a></li>
                    <li class="breadcrumb-item active">{{ $product['name'] }}</li>
                </ol>
                <div class="card">
                    <div class="card mb-3">
                        <h3 class="card-header">Product Details</h3>
                        <div class="card-body">
                            <h5 class="card-title">{{ $product['name'] }}</h5>
                        </div>
                        <div class="text-center">
                            <img src="{{ $product['image_path'] }}" class="img-fluid" alt="Responsive image">
                        </div>

                        <div class="card-body">
                          <hr class="mt-2 mb-4">
                          <h5 class="card-title">Add to your grocery list</h5>
                          <h6 class="card-text">Recommended Quantity: </h6>
                        <form>
                            <div class="form-group mb-3">
                                <label for="exampleSelect1" class="form-label mt-4">Select Quantity</label>
                                <select class="form-select" id="exampleSelect1">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                    <option>6</option>
                                    <option>7</option>
                                    <option>8</option>
                                    <option>9</option>
                                    <option>10</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Add</button>
                        </form>
                        </div>

                    </div>

                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Product Description
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample" style="">
                            <div class="accordion-body">
                                {{ $product['desc'] }}
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Product Overview
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample" style="">
                            <div class="accordion-body">
                                {{ $product['overview'] }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer text-muted"></div>

                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">You might also like</h4>
                        <p class="card-text">Recommender products to user</p>

                        <hr class="mt-2 mb-5">

                        <div class="row text-center text-lg-start">

                            <div class="col-lg-3 col-md-4 col-6">
                                <a href="#" class="d-block mb-4 h-100">
                                    <img class="img-fluid img-thumbnail"
                                        src="https://source.unsplash.com/pWkk7iiCoDM/400x300" alt="">
                                </a>
                            </div>
                            <div class="col-lg-3 col-md-4 col-6">
                                <a href="#" class="d-block mb-4 h-100">
                                    <img class="img-fluid img-thumbnail"
                                        src="https://source.unsplash.com/aob0ukAYfuI/400x300" alt="">
                                </a>
                            </div>
                            <div class="col-lg-3 col-md-4 col-6">
                                <a href="#" class="d-block mb-4 h-100">
                                    <img class="img-fluid img-thumbnail"
                                        src="https://source.unsplash.com/EUfxH-pze7s/400x300" alt="">
                                </a>
                            </div>
                            <div class="col-lg-3 col-md-4 col-6">
                                <a href="#" class="d-block mb-4 h-100">
                                    <img class="img-fluid img-thumbnail"
                                        src="https://source.unsplash.com/M185_qYH8vg/400x300" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
