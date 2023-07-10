<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <link href="https://unpkg.com/tabulator-tables@5.5.0/dist/css/tabulator.min.css" rel="stylesheet">
<script type="text/javascript" src="https://unpkg.com/tabulator-tables@5.5.0/dist/js/tabulator.min.js"></script>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div>
                        <button id="ajax-trigger">Load Data via AJAX</button>
                    </div>

                    <div id="example-table"></div>
                </div>
            </div>
        </div>
    </div>
    <script>
        var table = new Tabulator("#example-table", {
            height:"311px",
            layout:"fitColumns",
            placeholder:"No Data Set",
            
            columns:[
                {title:"id", field:"id", sorter:"string"},
                {title:"title", field:"title", sorter:"string"},
                {title:"price", field:"price", sorter:"string"},
            ],
        });

            document.getElementById("ajax-trigger").addEventListener("click", function(){
                table.setData("https://fakestoreapi.com/products/1");
            });
    </script>
</x-app-layout>
