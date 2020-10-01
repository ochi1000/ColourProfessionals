@extends('layouts.app')

@section('content')

    <div class="quotation">
        <h2>Get a Quotation</h2>
        <div class="card">
            <div class="card-body">
              <h5 class="card-title">Get a price list of our products</h5>
              <form>
                <div class="form-group">
                  <label for="formGroupExampleInput">Name</label>
                  <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Name">
                </div>
                <div class="form-group">
                  <label for="formGroupExampleInput2">Phone Number</label>
                  <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Phone Number">
                </div>
                <div class="form-group">
                  <label for="formGroupExampleInput2">Email</label>
                  <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Email">
                </div>
                <div style="text-align: center;">
                    <button type="submit" class="btn btn-primary ">Submit</button>
                </div>
            </form>
            </div>
          </div>

    </div>
@endsection
