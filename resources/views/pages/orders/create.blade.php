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
                                                    <input type="text" name="branch" class="form-control" id="inputEmail3" value="Kasba Peth">
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="inputPassword3" class="col-sm-2 col-form-label">Requesting Manager</label>
                                                <div class="col-sm-10">
                                                    <input type="text" name="manager" class="form-control" id="inputPassword3" value="Vijay" >
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

<script>

function price_in_words(price) {
  var sglDigit = ["Zero", "One", "Two", "Three", "Four", "Five", "Six", "Seven", "Eight", "Nine"],
    dblDigit = ["Ten", "Eleven", "Twelve", "Thirteen", "Fourteen", "Fifteen", "Sixteen", "Seventeen", "Eighteen", "Nineteen"],
    tensPlace = ["", "Ten", "Twenty", "Thirty", "Forty", "Fifty", "Sixty", "Seventy", "Eighty", "Ninety"],
    handle_tens = function(dgt, prevDgt) {
      return 0 == dgt ? "" : " " + (1 == dgt ? dblDigit[prevDgt] : tensPlace[dgt])
    },
    handle_utlc = function(dgt, nxtDgt, denom) {
      return (0 != dgt && 1 != nxtDgt ? " " + sglDigit[dgt] : "") + (0 != nxtDgt || dgt > 0 ? " " + denom : "")
    };

  var str = "",
    digitIdx = 0,
    digit = 0,
    nxtDigit = 0,
    words = [];
  if (price += "", isNaN(parseInt(price))) str = "";
  else if (parseInt(price) > 0 && price.length <= 10) {
    for (digitIdx = price.length - 1; digitIdx >= 0; digitIdx--) switch (digit = price[digitIdx] - 0, nxtDigit = digitIdx > 0 ? price[digitIdx - 1] - 0 : 0, price.length - digitIdx - 1) {
      case 0:
        words.push(handle_utlc(digit, nxtDigit, ""));
        break;
      case 1:
        words.push(handle_tens(digit, price[digitIdx + 1]));
        break;
      case 2:
        words.push(0 != digit ? " " + sglDigit[digit] + " Hundred" + (0 != price[digitIdx + 1] && 0 != price[digitIdx + 2] ? " and" : "") : "");
        break;
      case 3:
        words.push(handle_utlc(digit, nxtDigit, "Thousand"));
        break;
      case 4:
        words.push(handle_tens(digit, price[digitIdx + 1]));
        break;
      case 5:
        words.push(handle_utlc(digit, nxtDigit, "Lakh"));
        break;
      case 6:
        words.push(handle_tens(digit, price[digitIdx + 1]));
        break;
      case 7:
        words.push(handle_utlc(digit, nxtDigit, "Crore"));
        break;
      case 8:
        words.push(handle_tens(digit, price[digitIdx + 1]));
        break;
      case 9:
        words.push(0 != digit ? " " + sglDigit[digit] + " Hundred" + (0 != price[digitIdx + 1] || 0 != price[digitIdx + 2] ? " and" : " Crore") : "")
    }
    str = words.reverse().join("")
  } else str = "";
  return str

}

</script>

@endsection
