@extends('layouts.default')


@section('content')

            <div class="content__boxed">
                <div class="content__wrap">

                    <!-- Table with toolbar -->
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-3">Create New Order</h5>
                        </div>


			<div class="card-body">
				<form method="POST" url="order/create" >
				@csrf
                                            <div class="row mb-3">
                                                <label for="inputEmail3" class="col-sm-2 col-form-label">Requesting Bank</label>
                                                <div class="col-sm-10">
                                                    <input type="text" name="branch" class="form-control" id="inputEmail3" value="KasbaPeth">
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="inputPassword3" class="col-sm-2 col-form-label">Requesting Manager</label>
                                                <div class="col-sm-10">
                                                    <input type="text" name="manager" class="form-control" id="inputPassword3" value="Shrikant" >
                                                </div>
                                            </div>


                                            <div class="row mb-3">
                                                <label for="_dm-inputAddress3" class="col-sm-2 form-label">Type</label>
						<div class="col-sm-10">
                                                <select id="type" name="type" class="form-select">
                                                    <option value="none" selected="">Choose...</option>
                                                    <option value="credit" >Credit</option>
                                                    <option value="debit" >Debit</option>
                                                </select>
                                                </div>
                                            </div>

					    <div class="row mb-3">
                                                <label for="_dm-inputAddress3" class="col-sm-2 form-label">Amount</label>
                                                <div class="col-sm-10">
                                                    <input id="_dm-inputAddress3" name="amount" type="text" class="form-control" placeholder="">
                                                </div>
                                            </div>


                                            <button type="submit" class="btn btn-primary">Submit</button>
                                  </form>

                        </div>
                    </div>
                    <!-- END : Table with toolbar -->

                </div>
            </div>

@endsection
