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
        longitude = parseFloat(longitude);
        console.log(longitude);
        console.log(typeof(longitude));

        const uluru = { lat: parseFloat(latitude).toFixed(6), lng: parseFloat(longitude).toFixed(6) };
        // const uluru = 'https://www.google.com/maps/place/%D8%A7%D9%8A%D8%B3+%D9%83%D8%B1%D9%8A%D9%85+10+%D9%8A%D9%88%D9%86%D9%8A%D9%88%E2%80%AD/@,,15z/data=!4m5!3m4!1s0x15c3dbe519ac5d19:0xb0adf1f0859a392b!8m2!3d21.6010947!4d39.1437748';
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