@extends('storefront.tickets.layout.app_ticket')

@section('title', $ticket_order->ticket->name)

@section('content')
<div id="ticket-checkin" class="@if($checkin_success) success @else error @endif">
    <div class="container ">
        @include('layouts.flash_message')
        <div class="row">
            <div class="col-xs-12 text-center">
                @if($checkin_success)
                    <svg id="svg20" version="1.1" viewBox="0 0 467.383 467.39001" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:cc="http://creativecommons.org/ns#" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd" xmlns:svg="http://www.w3.org/2000/svg">
                    <defs id="defs24"/>
                        <g id="Protection_icon" transform="translate(-22.306,-22.305)">
                            <g id="g16">
                                <path d="m 256.001,22.305 c 129.116,0 233.688,104.577 233.688,233.69 0,129.123 -104.572,233.7 -233.688,233.7 -129.121,0 -233.695,-104.577 -233.695,-233.7 0,-129.113 104.575,-233.69 233.695,-233.69 z" id="path4" style="clip-rule:evenodd;fill:#84dbff;fill-rule:evenodd"/>
                                <path d="M 489.689,257.017 C 489.355,367.969 411.347,460.77 307.447,483.969 l -0.338,-0.334 c -1.346,-1.002 -2.353,-2.014 -3.698,-3.016 -1.007,-1.012 -2.014,-2.014 -3.025,-3.025 -1.346,-1.012 -2.353,-2.032 -3.359,-3.034 -1.351,-1.012 -2.701,-2.023 -3.703,-3.359 -1.007,-1.012 -2.348,-2.014 -3.359,-3.025 -1.011,-1.011 -2.356,-2.014 -3.368,-3.025 -1.002,-1.012 -2.348,-2.023 -3.364,-3.034 -1.341,-1.003 -2.353,-2.014 -3.693,-3.025 -1.007,-1.002 -2.353,-2.348 -3.364,-3.359 -1.011,-1.011 -2.353,-2.014 -3.359,-3.016 -1.012,-1.012 -2.357,-2.033 -3.369,-3.045 -1.336,-1.002 -2.348,-2.014 -3.359,-3.016 -1.336,-1.012 -2.356,-2.023 -3.363,-3.025 -1.346,-1.346 -2.353,-2.357 -3.696,-3.359 -1.014,-1.012 -2.019,-2.023 -3.025,-2.7 -1.348,-1.346 -2.353,-2.349 -3.696,-3.359 -1.019,-1.012 -2.359,-2.014 -3.364,-3.025 -1.009,-1.012 -2.352,-2.014 -3.366,-3.016 -1.346,-1.346 -2.353,-2.357 -3.362,-3.379 -1.341,-1.012 -2.35,-2.014 -3.366,-3.016 -1.343,-1.012 -2.35,-2.023 -3.693,-3.034 -1.009,-1.003 -2.023,-2.005 -3.364,-3.017 -1.009,-1.011 -2.352,-2.014 -3.364,-3.368 -1.005,-1.012 -2.355,-2.023 -3.362,-3.025 -1.343,-1.012 -2.355,-2.023 -3.359,-3.025 -1.35,-1.012 -2.357,-2.014 -3.701,-3.359 -1.009,-0.668 -2.018,-1.689 -3.027,-2.701 -1.348,-1.012 -2.689,-2.348 -3.701,-3.35 -1.007,-1.012 -2.35,-2.023 -3.364,-3.025 -11.765,-10.431 -22.525,-22.531 -32.276,-35.645 -37.324,-51.783 -49.767,-116.01 -48.084,-178.892 0,-0.334 0,-0.334 0,-0.668 0,-0.343 0,-0.677 0,-1.002 1.348,-12.788 11.094,-23.209 23.878,-24.889 15.128,-2.014 30.257,-5.726 44.718,-11.099 17.149,-6.394 33.96,-14.449 49.769,-23.544 8.737,-4.695 18.491,-4.695 26.898,0 16.138,9.095 32.949,17.15 50.104,23.544 14.448,5.373 29.584,9.085 45.055,11.099 6.385,1.002 12.105,4.027 16.147,8.398 1.341,1.012 2.343,2.033 3.35,3.035 27.909,21.173 74.982,64.214 102.214,92.807 z" id="path6" style="clip-rule:evenodd;fill:#77c5e6;fill-rule:evenodd"/>
                                <path d="m 241.882,417.403 c -27.573,-15.47 -51.112,-36.656 -69.607,-62.204 -37.322,-52.126 -49.767,-116 -48.085,-178.882 v -1.012 -0.687 c 1.346,-12.779 11.097,-23.181 23.875,-24.88 15.126,-2.357 30.26,-6.041 44.716,-11.089 17.152,-6.384 33.97,-14.468 49.769,-23.534 8.403,-5.048 18.493,-5.048 26.896,0 16.148,9.066 32.62,17.15 50.104,23.534 14.468,5.373 29.594,9.076 44.721,11.089 13.456,1.699 23.544,13.123 23.878,26.579 1.341,62.882 -10.766,127.1 -48.424,178.882 -18.485,25.892 -42.029,46.734 -69.601,62.538 -8.747,5.039 -19.842,5.373 -28.242,-0.334 z M 367.973,176.985 c 0,-3.703 -2.691,-6.728 -6.39,-7.396 -16.477,-2.357 -32.948,-6.051 -49.097,-12.111 -16.133,-5.707 -33.621,-14.124 -52.787,-24.879 -2.357,-1.346 -4.707,-1.346 -7.057,0 -19.17,10.755 -36.656,19.173 -52.799,24.879 -16.133,6.06 -32.614,10.087 -49.091,12.111 -3.698,0.668 -6.05,3.693 -6.389,7.396 -1.68,67.587 13.112,123.073 44.384,166.104 16.816,23.544 38.005,42.697 63.896,57.155 1.677,1.689 5.039,1.355 7.394,0 25.219,-14.792 46.4,-33.611 63.55,-57.155 30.938,-43.031 45.731,-98.517 44.386,-166.104 z" id="path8" style="clip-rule:evenodd;fill:#fd8469;fill-rule:evenodd"/>
                                <path d="m 367.973,176.985 c 0,-3.703 -2.691,-6.728 -6.39,-7.396 -16.477,-2.357 -32.948,-6.051 -49.097,-12.111 -16.133,-5.707 -33.621,-14.124 -52.787,-24.879 -2.357,-1.346 -4.707,-1.346 -7.057,0 -19.17,10.755 -36.656,19.173 -52.799,24.879 -16.133,6.06 -32.614,10.087 -49.091,12.111 -3.698,0.668 -6.05,3.693 -6.389,7.396 -1.68,67.587 13.112,123.073 44.384,166.104 16.816,23.544 38.005,42.697 63.896,57.155 1.677,1.689 5.039,1.355 7.394,0 25.219,-14.792 46.4,-33.611 63.55,-57.155 30.938,-43.031 45.731,-98.517 44.386,-166.104 z" id="path10" style="clip-rule:evenodd;fill:#324a5e;fill-rule:evenodd"/>
                                <path d="m 256.001,201.874 c 28.247,0 51.446,22.857 51.446,51.096 0,28.583 -23.199,51.449 -51.446,51.449 -28.249,0 -51.112,-22.866 -51.112,-51.449 0,-28.239 22.864,-51.096 51.112,-51.096 z" id="path12" style="clip-rule:evenodd;fill:#90dfaa;fill-rule:evenodd"/>
                                <path d="m 236.497,247.931 c -2.687,-3.025 -7.732,-3.025 -10.76,0 -2.694,3.035 -2.694,7.73 0,10.755 l 16.477,16.481 c 1.682,1.346 3.703,2.023 5.38,2.023 2.016,0 4.032,-0.678 5.382,-2.023 l 33.29,-33.288 c 3.021,-3.025 3.021,-7.74 0,-10.755 -3.034,-3.025 -7.734,-3.025 -10.77,0 l -27.902,27.896 z" id="path14" style="clip-rule:evenodd;fill:#ffffff;fill-rule:evenodd"/>
                            </g>
                        </g>
                        <g id="Layer_1" transform="translate(-22.306,-22.305)"/>
                </svg>
                @else
                    <h2 id="ticket-checking-failure-title" class="text-danger">NOT CHECKED IN</h2>
                @endif

                <h2>{{ $ticket->name }}</h2>
                <hr>
                <div id="ticket-checkin-attendee">
                    <h3><strong>{{ $ticket_order->full_name }}</strong></h3>
                    @if($ticket_order->quantity > 1)
                        <h3>+{{ $ticket_order->quantity-1 }} attendee(s)</h3>
                    @endif
                </div>
                <div id="ticket-checkin-total">
                    {{ count($ticket_order->ticket_checkins) }}
                </div>

                @if($checkin_success)
                    <audio autoplay preload="auto">
                        <source src="/audio/tickets/checkin_success.wav" type="audio/wav">
                    </audio>
                @else
                    <audio autoplay preload="auto">
                        <source src="/audio/tickets/checkin_failure.wav" type="audio/wav">
                    </audio>
                @endif
            </div>
        </div>
    </div>

</div>
@endsection
@section('scripts')
    <script>
            @if($checkin_success)
                swal({
                    type: 'success',
                    title: 'Success!',
                    text: '{{ $ticket_order->full_name }} has been checked in!'
                });
            @else
                swal({
                type: 'error',
                title: 'Error!',
                text: '{{ $ticket_order->full_name }} has not been checked in!'
            });
            @endif
    </script>
@endsection