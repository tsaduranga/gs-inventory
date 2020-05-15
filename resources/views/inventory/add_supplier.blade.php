@extends('layouts.app')

@section('content')



        <form>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputEmail4">Name</label>
                <input type="email" class="form-control" id="name" name="name" placeholder="Supplier Name">
              </div>

              <div class="form-group col-md-6">
                <label for="inputEmail4">E mail</label>
                <input type="email" class="form-control" id="email" id="email" placeholder="Email">
              </div>

            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="inputEmail4">phone1</label>
                  <input type="text" class="form-control" id="phn1" name="phn1" placeholder="Phone1">
                </div>
                <div class="form-group col-md-6">
                  <label for="inputPassword4">Phone2</label>
                  <input type="text" class="form-control" id="phn2" name="phn2" placeholder="Phone2">
                </div>
              </div>

            <div class="form-group">
              <label for="inputAddress">Address</label>
              <input type="text" class="form-control" id="address" name="address" placeholder="1234 Main St">
            </div>


            <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="inputEmail4">Name in cheque</label>
                  <input type="text" class="form-control" id="cheque_name" name="cheque_name" placeholder="Name in Cheque">
                </div>
                <div class="form-group col-md-6">
                  <label for="inputPassword4">Sales Manager</label>
                  <input type="text" class="form-control" id="sales_manager" name="sales_manager" placeholder="Sales Manager">
                </div>
              </div>

              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="inputEmail4">Sales Rep</label>
                  <input type="text" class="form-control" id="inputEmail4" placeholder="Sales Rep">
                </div>

              </div>

            <button type="submit" class="btn btn-primary">Add Supplier</button>
          </form>








@endsection
