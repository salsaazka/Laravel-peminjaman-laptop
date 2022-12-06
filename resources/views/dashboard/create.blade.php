@extends('layout')

@section('content')
    <div class="d-flex justify-content-center">
        <div class="container">
            <div class="card w-100" style="top: 3rem; margin-bottom: 6.5rem">
                <div class="p-4">
                    <div class="d-flex justify-content-between">
                        <div>
                            <h6 class="text-muted mb-1">Lab RPL/PPLG</h6>
                            <h6 class="text-muted">Laptop Landing</h6>
                        </div>
                        <div>
                            <img src="{{ asset('assets/img/wikrama.jpeg') }}">
                        </div>
                    </div>
                    <div class="d-flex justify-content-center" style="margin-top: -1rem">
                        <div class="d-flex flex-column justify-content-center align-items-center">
                            <img src="{{ asset('assets/img/rpl.png') }}" style="width: 110px; height: 110px">
                            <a class="text-muted mt-1 text-decoration-none" href="{{ route('index') }}">Laptop Landing >>
                                <span class="text-primary">Create</span></a>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col-6">
                            <h5>Form Input</h5>
                            <form action="{{ route('store') }}" method="post" class="mt-4">
                                @csrf
                                @method('POST')
                                <div class="form-outline mb-3">
                                    <label class="form-label text-muted" for="form1Example23">Name</label>
                                    <input type="text" name="name" class="form-control"
                                        placeholder="" />
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlTextarea1" class="form-label text-muted">Purpose</label>
                                    <textarea type="text" name="purposes" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlTextarea1" class="form-label text-muted">Ket</label>
                                    <textarea type="text" name="ket" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-6">
                                        <label for="exampleFormControlTextarea1" class="form-label text-muted">NIS</label>
                                        <input type="number" name="nis" class="form-control" placeholder="" />
                                    </div>
                                    <div class="col-6">
                                        <label for="exampleFormControlTextarea1"
                                            class="form-label text-muted">Region</label>
                                        <select class="form-select" aria-label="Default select example" name="region">
                                            <option selected>--Select--</option>
                                            <option value="1">Cis 1</option>
                                            <option value="2">Cis 2</option>
                                            <option value="3">Cis 3</option>
                                            <option value="4">Cis 4</option>
                                            <option value="5">Cis 5</option>
                                            <option value="6">Cic 1</option>
                                            <option value="7">Cic 2</option>
                                            <option value="8">Cic 3</option>
                                            <option value="9">Cic 4</option>
                                            <option value="10">Cic 5</option>
                                            <option value="11">Cic 6</option>
                                            <option value="12">Cic 7</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlTextarea1" class="form-label text-muted">Date</label>
                                    <input type="date" name="date" class="form-control">
                                </div>
                                <div class="mb-4">
                                    <label for="exampleFormControlTextarea1" class="form-label text-muted">Teacher Name</label>
                                    <input type="text" name="teacher" class="form-control">
                                </div>
                                <div class="d-flex justify-content-end">
                                    <a href="{{ route('index') }}" class="btn btn-secondary me-1">Back</a>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                            <div class="w-100">
                                {{-- <form action="{{ route('store') }}" method="POST">
                                    @csrf
                                    @method('POST')

                                    <div class="form-outline mt-3 mb-3">
                                        <label class="form-label" for="form1Example23">Name</label>
                                        <input type="text" name=" name" class="form-control form-control-lg"
                                            placeholder="" />
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleFormControlTextarea1" class="form-label">Purpose</label>
                                        <textarea type="text" name="purpose" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleFormControlTextarea1" class="form-label">Ket</label>
                                        <textarea type="text" name="ket" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                    </div>

                                    <div class="mb-3">
                                        <div class="row justify-content-around">
                                            <div class="col-6">
                                                <label for="exampleFormControlTextarea1" class="form-label">NIS</label>
                                                <input type="number" name="nis" class="form-control form-control-lg"
                                                    placeholder="" />
                                            </div>
                                            <div class="col-6">
                                                <label for="exampleFormControlTextarea1" class="form-label">Region</label>
                                                <select class="form-select" aria-label="Default select example"
                                                    name="region">
                                                    <option selected>--Select--</option>
                                                    <option value="1">Cis 1</option>
                                                    <option value="2">Cis 2</option>
                                                    <option value="3">Cis 3</option>
                                                    <option value="4">Cis 4</option>
                                                    <option value="5">Cis 5</option>
                                                    <option value="6">Cic 1</option>
                                                    <option value="7">Cic 2</option>
                                                    <option value="8">Cic 3</option>
                                                    <option value="9">Cic 4</option>
                                                    <option value="10">Cic 5</option>
                                                    <option value="11">Cic 6</option>
                                                    <option value="12">Cic 7</option>
                                                </select>
                                            </div>
                                        </div>
                                        <span>
                                            <a href="{{ route('index') }}" class="text-success"><i
                                                    class="fa-solid fa-plus"></i>
                                                Create</a>
                                            | <a href="{{ route('index') }}"><i class="fa-solid fa-check-to-slot"></i>
                                                Complated</a>
                                        </span>
                                </form> --}}
                            </div>
                        </div>
                        <div class="col-6">
                            Column
                        </div>
                    </div>

                    {{-- <div class="w-50 pe-5">
                            <h5 class="text-muted">Form Input</h5>
                            <div class="w-100">
                                <form action="/store" method="POST">
                                    @csrf
                                    @method('POST')
                                    <h3></h3>

                                    <div class="form-outline mt-3 mb-3">
                                        <label class="form-label" for="form1Example23">Name</label>
                                        <input type="text" name=" name" class="form-control form-control-lg"
                                            placeholder="" />
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleFormControlTextarea1" class="form-label">Purpose</label>
                                        <textarea type="text" name="purpose" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleFormControlTextarea1" class="form-label">Ket</label>
                                        <textarea type="text" name="ket" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                    </div>

                                    <div class="mb-3">
                                        <div class="row justify-content-around">
                                            <div class="col-6">
                                                <label for="exampleFormControlTextarea1" class="form-label">NIS</label>
                                                <input type="number" name="nis" class="form-control form-control-lg"
                                                    placeholder="" />
                                            </div>
                                            <div class="col-6">
                                                <label for="exampleFormControlTextarea1" class="form-label">Region</label>
                                                <select class="form-select" aria-label="Default select example" name="region">
                                                    <option selected>--Select--</option>
                                                    <option value="1">Cis 1</option>
                                                    <option value="2">Cis 2</option>
                                                    <option value="3">Cis 3</option>
                                                    <option value="4">Cis 4</option>
                                                    <option value="5">Cis 5</option>
                                                    <option value="6">Cic 1</option>
                                                    <option value="7">Cic 2</option>
                                                    <option value="8">Cic 3</option>
                                                    <option value="9">Cic 4</option>
                                                    <option value="10">Cic 5</option>
                                                    <option value="11">Cic 6</option>
                                                    <option value="12">Cic 7</option>
                                                </select>
                                            </div>
                                        </div>
                                        <span>
                                            <a href="{{ route('index') }}" class="text-success"><i class="fa-solid fa-plus"></i>
                                                Create</a>
                                            | <a href="{{ route('index') }}"><i class="fa-solid fa-check-to-slot"></i>
                                                Complated</a>
                                        </span>
                                </form>
                            </div>
                        </div>
                        <div class="w-50 ps-5">
                            <h5 class="text-muted">Total Data</h5>
                        </div> --}}
                </div>
            </div>
        </div>
    </div>
    {{-- <div class="col-6 mt-3">
        <div class="card pt-3" style="width: 80;">
            <div class="card-body">
                <h6 class="card-subtitle mb-2 text-muted"><img src="{{ asset('assets/img/rpl.png') }}" style="width: 80"> SMK
                    Wikrama Bogor</h6>
                <form action="/store" method="POST">
                    @csrf
                    @method('POST')
                    <h3></h3>

                    <div class="form-outline mt-3 mb-3">
                        <label class="form-label" for="form1Example23">Name</label>
                        <input type="text" name=" name" class="form-control form-control-lg" placeholder="" />
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Purpose</label>
                        <textarea type="text" name="purpose" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Ket</label>
                        <textarea type="text" name="ket" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>

                    <div class="mb-3">
                        <div class="row justify-content-around">
                            <div class="col-6">
                                <label for="exampleFormControlTextarea1" class="form-label">NIS</label>
                                <input type="number" name="nis" class="form-control form-control-lg" placeholder="" />
                            </div>
                            <div class="col-6">
                                <label for="exampleFormControlTextarea1" class="form-label">Region</label>
                                <select class="form-select" aria-label="Default select example" name="region">
                                    <option selected>--Select--</option>
                                    <option value="1">Cis 1</option>
                                    <option value="2">Cis 2</option>
                                    <option value="3">Cis 3</option>
                                    <option value="4">Cis 4</option>
                                    <option value="5">Cis 5</option>
                                    <option value="6">Cic 1</option>
                                    <option value="7">Cic 2</option>
                                    <option value="8">Cic 3</option>
                                    <option value="9">Cic 4</option>
                                    <option value="10">Cic 5</option>
                                    <option value="11">Cic 6</option>
                                    <option value="12">Cic 7</option>
                                </select>
                            </div>
                        </div>
                        <span>
                            <a href="{{ route('index') }}" class="text-success"><i class="fa-solid fa-plus"></i> Create</a>
                            | <a href="{{ route('index') }}"><i class="fa-solid fa-check-to-slot"></i> Complated</a>
                        </span>
                </form>
            </div>
        </div>
    </div>

    <div class="col-6">
        <div class="card pt-3" style="width: 80;">
            <div class="card-body">
                <i class="fa-duotone fa-right-left"></i>
                <i class="fa-solid fa-arrow-right-from-bracket"></i>
            </div>
        </div>
    </div> --}}
@endsection
