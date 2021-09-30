@extends('admin.layouts.app')

@section('title')
<p>Make Quotation</p>
@endsection

@section('content')

<div class="row">
  <div class="col-md-7">
    <form method="POST" action="/admin/quotation/create" accept-charset="UTF-8" role="form">
        @csrf

      <div class="form-group">
        <label for="Name">Name</label>
        <input type="text" name="name" class="form-control" placeholder="">
      </div>
      <div class="form-group">
        <label for="Phone">Phone</label>
        <input type="text" class="form-control" name="phone" placeholder="">
      </div>
      <div class="form-group">
        <label for="Address">Address</label>
        <input type="text" class="form-control" name="address" placeholder="">
      </div>
      <div class="form-group">
        <label for="Quotation no">Quotation no</label>
        <input type="text" class="form-control" name="quotationNumber" placeholder="">
      </div>

      <div class="form-group">
        <label for="Paint Product">Select Paint Product 1</label>
        <div class="form-row">
            <div class="col">
                <select name="paint1" class="custom-select">
                    <option value="Vinyl Emulusion">Vinyl Emulusion</option>
                    <option value="Matt">Matt</option>
                    <option value="Lotus Matt">Lotus Matt</option>
                    <option value="Silk">Silk</option>
                    <option value="Satin">Satin</option>
                    <option value="Oil">Oil Paint</option>
                    <option value="Lusto (Diamond)">Lusto (Diamond)</option>
                    <option value="Textured Paint">Textured Paint</option>
                    <option value="Water Alkyd Paint">Water Alkyd Paint</option>
                </select>
            </div>
            <div class="col">
                <input type="number" name="numberOfPaint1" class="form-control" placeholder="Number of buckets">
            </div>
        </div>
      </div>

      <div class="form-group">
        <label for="Paint Product">Select Paint Product 2</label>
        <div class="form-row">
            <div class="col">
                <select name="paint2" class="custom-select">
                    <option value="none" selected disabled hidden>
                        Select an Option
                    </option>
                    <option value="Vinyl Emulusion">Vinyl Emulusion</option>
                    <option value="Matt">Matt</option>
                    <option value="Lotus Matt">Lotus Matt</option>
                    <option value="Silk">Silk</option>
                    <option value="Satin">Satin</option>
                    <option value="Oil">Oil Paint</option>
                    <option value="Lusto (Diamond)">Lusto (Diamond)</option>
                    <option value="Textured Paint">Textured Paint</option>
                    <option value="Water Alkyd Paint">Water Alkyd Paint</option>
                </select>
            </div>
            <div class="col">
                <input type="number" name="numberOfPaint2" class="form-control" placeholder="Number of buckets">
            </div>
        </div>
      </div>

      <div class="form-group">
        <label for="Paint Product">Select Paint Product</label>
        <div class="form-row">
            <div class="col">
                <select name="paint3" class="custom-select">
                    <option value="none" selected disabled hidden>
                        Select an Option
                    </option>
                    <option value="Vinyl Emulusion">Vinyl Emulusion</option>
                    <option value="Matt">Matt</option>
                    <option value="Lotus Matt">Lotus Matt</option>
                    <option value="Silk">Silk</option>
                    <option value="Satin">Satin</option>
                    <option value="Oil">Oil Paint</option>
                    <option value="Lusto (Diamond)">Lusto (Diamond)</option>
                    <option value="Textured Paint">Textured Paint</option>
                    <option value="Water Alkyd Paint">Water Alkyd Paint</option>
                </select>
            </div>
            <div class="col">
                <input type="number" name="numberOfPaint3" class="form-control" placeholder="Number of buckets">
            </div>
        </div>
      </div>

      <div class="form-group">
        <label for="Painting Site">Painting Site</label>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="site" value="Exterior" checked>
          <label class="form-check-label" for="Exterior">
            Exterior
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="site" value="Interior">
          <label class="form-check-label" for="Interior">
            Interior
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="site" value="Exterior and Interior">
          <label class="form-check-label" for="Both">
            Both
          </label>
        </div>
        <textarea class="form-control" placeholder="Describe site.. Eg: three bedroom bungalow, and fence." name="description" rows="3"></textarea>
      </div>
      <div class="form-group">
        <div class="form-row">
          <div class="col">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="walltreatment">
                <label class="form-check-label" for="Wall Treatment">
                  Wall Treatment
                </label>
            </div>
          </div>
          <div class="col includes">
            <input type="number" name="wallTreatmentPrice" class="form-control" placeholder="Price">
          </div>
        </div>

        <div class="form-row">
            <div class="col">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="labour" >
                    <label class="form-check-label" for="Paint Services (labour)">
                        Paint Services (labour)
                    </label>
                </div>
            </div>
            <div class="col includes">
                <input type="number" name="labourPrice" class="form-control" placeholder="Price">
            </div>
        </div>

        <div class="form-row">
            <div class="col">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="design" >
                    <label class="form-check-label" for="Wall Paint Design">
                        Wall Paint Design
                    </label>
                </div>
            </div>
            <div class="col includes">
                <input type="number" name="designPrice" class="form-control" placeholder="Price">
            </div>
        </div>

        <div class="form-row">
            <div class="col">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="transport" >
                    <label class="form-check-label" for="Transport">
                        Transport
                    </label>
                </div>
            </div>
            <div class="col includes">
                <input type="number" name="transportPrice" class="form-control" placeholder="Price">
            </div>
        </div>
      </div>
      <div class="form-group">
        <div class="form-row">
          <div class="col">
            <input type="number" name="upfront" class="form-control" placeholder="Upfront">
          </div>
          <div class="col">
            <input type="number" name="total" class="form-control" placeholder="Total Cost">
          </div>
        </div>
      </div>

      <div class="d-flex justify-content-center mb-5">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>

    </form>
  </div>
</div>

@endsection
