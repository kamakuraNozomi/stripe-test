<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }
          
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>
                <p>単発支払い</p>
                <form action="/charge" method="POST">
                  {{ csrf_field() }}
                  <script
                          src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                          data-key="pk_test_CNayvafhwpJlVjRqKq4qu0hp"
                          data-amount="540"
                          data-name="Stripe Demo"
                          data-description="Online course about integrating Stripe"
                          data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
                          data-locale="auto"
                          data-currency="jpy">
                  </script>
              </form>
              <hr/>
              <p>サブスクライブ</p>
            <form action="/subscribe_process" method="POST">
                  {{ csrf_field() }}
                  <script
                          src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                          data-key="pk_test_CNayvafhwpJlVjRqKq4qu0hp"
                          data-amount="540"
                          data-name="Stripe Demo"
                          data-description="Online course about integrating Stripe"
                          data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
                          data-locale="auto"
                          data-currency="jpy">
                  </script>
              </form>
            </div>
        </div>
    </body>
</html>
