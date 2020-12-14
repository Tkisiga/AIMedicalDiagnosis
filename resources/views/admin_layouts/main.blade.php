<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>DR.JEBT</title>
        @yield('page_css')
        @include('admin_layouts.styling')

<script src="{{ asset('vendors/jquery-3.2.1.min.js') }}"></script>
 <script src="{{ asset('vendors/external.min.js') }}"></script>
  <script src="{{ asset('vendors/datatables/dtables/js/jquery.dataTables.min.js') }}"></script>
  <script src="{{ asset('vendors/datatables/dataTables.buttons.min.js') }}"></script>
  <script src="{{ asset('vendors/datatables/buttons.print.min.js') }}"></script>
  <script src="{{ asset('vendors/datatables/buttons.flash.min.js') }}"></script>
  <script src="{{ asset('vendors/datatables/jszip.min.js') }}"></script>
  <script src="{{ asset('vendors/datatables/pdfmake.min.js') }}"></script>
  <script src="{{ asset('vendors/datatables/vfs_fonts.js') }}"></script>
  <script src="{{ asset('vendors/datatables/buttons.html5.min.js') }}"></script>
  <script src="{{ asset('vendors/datatables/dataTables.select.min.js') }}"></script>




  <link href="{{ asset('vendors/datatables/dtables/css/jquery.dataTables.min.css') }}"
  rel="stylesheet">
  <link href="{{ asset('vendors/datatables/buttons.dataTables.min.css') }}" rel="stylesheet">

    </head>
    <body>
    @include('admin_layouts.top_navbar')
        
        <section>
            <div class="mainwrapper">
            @include('admin_layouts.sidebar')
                
                <div class="mainpanel">
                    <div class="contentpanel">
                        @yield('main_content')
                    </div>   
                </div>   
            </div>  
        </section>
        @include('admin_layouts.javascript')
        @yield('page_js')
    </body>
</html>
