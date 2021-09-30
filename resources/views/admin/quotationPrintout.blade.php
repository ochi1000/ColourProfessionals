<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard</title>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito&family=Roboto&display=swap" rel="stylesheet">

    {{-- Favicon --}}
    <link rel="shortcut icon" type="image/png" href="/favicon.png">


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('font/css/all.css') }}" rel="stylesheet"> <!--load all styles -->
  </head>

  <body class="bg-white">
      <div class="main">
        <section class="row">
            <div class="col-9 mt-3">
                <img src="/images/colourproAddress.png" alt="" srcset="">
            </div>
            <div class="col-3">
                <p class="text-black">QUOTATION</p>
            </div>
        </section>

        <section>
            <div class="row">
                <div class="col-8">
                    <p>Quotation For</p>
                    <p>Name:</p>
                    <p>Company:</p>
                    <p>Address:</p>
                    <p>Phone:</p>
                </div>
                <div class="col-4">
                <p>Date:</p>
                <p>Quotation no:</p>
                </div>
            </div>
        </section>

        <section class="row descriptionTitle">
            <div class="col-9">
                <p class="p-margin" style="font-size:1rem;font-weight: bold;">Description of Work</p>
            </div>
            <div class="col-3">
                <p class="p-margin" style="ont-size:1rem; font-weight: bold;">Amount(₦)</p>
            </div>
        </section>

        <section class=" row thanksTitle">
            <div class="pl-3">
                <p class="p-margin" style="color: gray; font-weight: bold;">Thank you for the opportunity to quote, we are pleased to quote as follows :
                </p>
            </div>
        </section>

        <section class="mt-3">
            <div class="row">
                <div class="col-9">
                    <ul>
                        <li>Painting site:</li>
                        <li>Paint Product:</li>
                        <li>Wall Treatment:</li>
                        <li>Painting services (Labour):</li>
                        <li>Architectural design:</li>
                        <li>Transport:</li>
                    </ul>
                </div>
                <div class="col-3">
                    Material Cost:
                </div>
            </div>
        </section>

        <section class="row descriptionTitle" style="background-color: #f1eeee">
            <div class="col-9">
                <p class="p-margin" style="color: gray; font-weight: bold;">Terms and Conditions</p>
            </div>
            <div class="col-3">
            </div>
        </section>

        <section class="mt-3">
            <div class="row">
                <div class="col-9">
                    <ul>
                        <li>Payment Terms: at least 45% Deposit required to start work. Balance 55% after completion.</li>
                        <li>All unsigned Colour-pro quotations are valid for 90days, after which should be returned for an updated version. </li>
                        <li> Colour-pro charges zero naira for all delivery expenses within the state.
                        </li>
                    </ul>
                </div>
                <div class="col-3">
                        <div>Total Cost:</div>
                        <div class="mt-5">Upfront:</div>
                </div>
            </div>
        </section>

        <section class="text-center mt-2 mb-4">
            <p>Please contact us should you have any questions at will. We look forward to working with you.
            </p>
        </section>

        <section class="row mb-5">
            <div class="col-4">
                <p class="signatory text-center" style="margin-bottom: 0.2rem">Engr. Jideofor Tochukwu</p>
                <p class="text-center">General Manager</p>
            </div>
            <div class="col-4">
                {{-- <p class="signatory text-center" style="margin-bottom: 0.2rem">Engr. Jideofor Tochukwu</p>
                <p class="text-center">General Manager</p> --}}
            </div>
            <div class="col-4">
                <p class="signatory" style="min-height: 1.6rem; margin-bottom:0.2rem;"></p>
                <p class="text-center">Customer's Signature</p>
            </div>
        </section>
      </div>
  </body>

</html>
