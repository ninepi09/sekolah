{{-- Required Jquery --}}
<script type="text/javascript" src="{{ asset('bower_components/jquery/js/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('bower_components/jquery-ui/js/jquery-ui.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('bower_components/popper.js/js/popper.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('bower_components/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/app.js') }}"></script>
{{-- waves js --}}
<script src="{{ asset('assets/pages/waves/js/waves.min.js') }}"></script>
{{-- jquery slimscroll js --}}
<script type="text/javascript" src="{{ asset('bower_components/jquery-slimscroll/js/jquery.slimscroll.js') }}"></script>
{{-- Float Chart js --}}
<script src="{{ asset('assets/pages/chart/float/jquery.flot.js') }}"></script>
<script src="{{ asset('assets/pages/chart/float/jquery.flot.categories.js') }}"></script>
<script src="{{ asset('assets/pages/chart/float/curvedLines.js') }}"></script>
<script src="{{ asset('assets/pages/chart/float/jquery.flot.tooltip.min.js') }}"></script>
{{-- Chartlist charts --}}
<script src="{{ asset('bower_components/chartist/js/chartist.js') }}"></script>
{{-- amchart js --}}
<script src="{{ asset('assets/pages/widget/amchart/amcharts.js') }}"></script>
<script src="{{ asset('assets/pages/widget/amchart/serial.js') }}"></script>
<script src="{{ asset('assets/pages/widget/amchart/light.js') }}"></script>
{{-- Custom js --}}
<script src="{{ asset('assets/js/pcoded.min.js') }}"></script>
<script src="{{ asset('assets/js/vertical/vertical-layout.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/script.min.js') }}"></script>

{{-- add ons JS --}}
@stack('js')