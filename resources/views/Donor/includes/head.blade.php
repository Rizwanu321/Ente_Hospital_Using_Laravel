<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Blood Bank India is a product resulted out of the community welfare initiative to find the blood donor in your city.">
    <div style="display: none;" itemscope itemtype="http://schema.org/Person">
        <span itemprop="name">Donor Area</span> <span itemprop="company">Blood Bank Bangladesh</span>
        <span itemprop="tel">01824506162</span>
        <a itemprop="email" href="mailto:dreamgirl9931@gmail.com">bddonor.net</a>
    </div>
   <link href="{{ asset('website/bbi_theme/style.css') }}" rel="stylesheet" media="screen" />
 <link href="{{ asset('website/bbi_theme/toastr.css') }}" rel="stylesheet" media="screen" />
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ asset('website/bbi_theme/images/ico/apple-touch-icon-114-precomposed.html') }}" />
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ asset('website/bbi_theme/images/ico/apple-touch-icon-72-precomposed.html') }}" />
    <link rel="apple-touch-icon-precomposed" href="{{ asset('website/bbi_theme/images/ico/apple-touch-icon-57-precomposed.html') }}" />
    <link rel="shortcut icon" href="{{ asset('website/bbi_theme/images/favicon.png') }}" />
    <script src="{{ asset('website/bbi_theme/js/jquery-1.10.2.min.js') }}">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js">
    </script>
    <script>
        $(window).load(function() {
            $('#search select').select2({
                placeholder: ''
            });
            $('#search select').select2({
                data: [{
                    id: '',
                    text: ''
                }]
            });
            $('button[data-select2-open]').click(function() {
                $('#' + $(this).data('select2-open')).select2('open');
            });
        });
    </script>
    <script src='../www.google.com/recaptcha/api.js'>
    </script>
    <title>Blood Donation Website</title>