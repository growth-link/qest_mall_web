<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0">
        <link href="https://fonts.googleapis.com/css?family=Crimson+Pro|M+PLUS+Rounded+1c|Sawarabi+Mincho&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="{{asset('Semantic-UI-CSS-master/semantic.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('css/common.css')}}">

        <!-- DataTables -->
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css">
        <!-- jquery-ui -->
        <link rel="stylesheet" href="http://code.jquery.com/ui/1.12.1/themes/pepper-grinder/jquery-ui.css">
    </head>
    <style>
        body { margin: 0 auto; }
    </style>
    <body>
        @yield('content')
    </body>
    <script src="{{asset('jquery-3.6.1.min.js')}}"></script>
    <script src="{{asset('Semantic-UI-CSS-master/semantic.min.js')}}"></script>
    {{-- <script src="{{asset('jquery-tabledit-1.2.3/jquery.tabledit.min.js')}}"></script> --}}
    <!-- DataTables -->
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js"></script>
    <!-- jquery-ui -->
    <script type="text/javascript" src="https://code.jquery.com/ui/1.12.0/jquery-ui.min.js"></script>
    
    <script>
        $(document).ready( function () {
            //日本語ローカライズ
            $.extend( $.fn.dataTable.defaults, {
                language: {
                url: 'https://cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Japanese.json'
                }
            });
        });


        // パスワードInput用
        $(function() {
            $('.eye').on('click', function() {
                $(this).toggleClass('slash');
                var input = $(this).prev('input');
                if (input.attr('type') == 'text') {
                    input.attr('type','password');
                } else {
                    input.attr('type','text');
                }
            });
        });
    </script>
    @yield('script')
</html>