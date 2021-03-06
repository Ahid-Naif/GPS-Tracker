@extends('layouts.app')

@section('slot')
<div class="font-sans antialiased" style="background: #edf2f7;">
    <div id="map"></div>

    <table class="border-collapse w-full">
        <thead>
            <tr>
                <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">Latitude</th>
                <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">Longitude</th>
                <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">Speed</th>
                <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">Direction</th>
                <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">Satellites</th>
            </tr>
        </thead>
        <tbody>
            <tr class="bg-white lg:hover:bg-gray-100 flex lg:table-row flex-row lg:flex-row flex-wrap lg:flex-no-wrap mb-10 lg:mb-0">
                <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                    <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Latitude</span>
                    <span class="py-1 px-3 text-xs font-bold">
                        {{ $latitude }}
                    </span>
                </td>
                <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                    <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Longitude</span>
                    <span class="py-1 px-3 text-xs font-bold">
                        {{ $longitude }}
                    </span>
                </td>
                <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                    <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Speed</span>
                    <span class="py-1 px-3 text-xs font-bold">
                        {{ $speed }}
                    </span>
                </td>
                <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                    <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Direction</span>
                    <span class="py-1 px-3 text-xs font-bold">
                        {{ $direction }}
                    </span>
                </td>
                <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                    <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Satellites</span>
                    <span class="py-1 px-3 text-xs font-bold">
                        {{ $satellites }}
                    </span>
                </td>
            </tr>
        </tbody>
    </table>
</div>

<script>
    // Initialize and add the map
    function initMap() {
        // The location of Uluru
        let latitude = "{{$latitude}}";
        let longitude = "{{$longitude}}";
        latitude = parseFloat(latitude);
        longitude = parseFloat(longitude);

        const uluru = { lat: latitude, lng: longitude };
        // The map, centered at Uluru
        const map = new google.maps.Map(document.getElementById("map"), {
            zoom: 15,
            center: uluru,
        });
        // The marker, positioned at Uluru
        const marker = new google.maps.Marker({
            position: uluru,
            map: map,
        });
    }

    setTimeout(function(){
        window.location.reload(1);
    }, 15000);
</script>
@endsection