

  <div class="col-12 col-md-9">
    <div class="row">
        <div class="col-6 col-lg-4">
          <br><br><br>
          <h2>Checkout details: </h2>
          <form action="{{ url('cart/checkout') }}" method="post">
            @csrf
              <p>Your name : {{ Auth::user()->name }}</p>
              <hr>
              <p>Your email : {{ Auth::user()->email }}</p>
              <hr>
              <p>Your total : 120 $</p>
              <input type="hidden" name='total' value='120'>


              <button type="submit" class="btn btn-success">Proceed to CoinGate</button>
          </form>
        </div><!--/span-->
      </div>
    </div>

