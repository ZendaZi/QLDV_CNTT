<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot> --}}

    <div class="py-12">
         <div class="max-w-full mx-auto sm:px-1 lg:px-1">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
              
                <div>
                    <canvas id="myChart"></canvas>
                </div>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
        const labels = [
            // @foreach ($getProduct as $_getProduct )
            //     ''.{{$_getProduct->ProductName}}.'',
            // @endforeach
        'January',
        'February',
        'March',
        'April',
        'May',
        'June',
        ];
        const data = {
        labels: labels,
        datasets: [{
            label: 'My First dataset',
            backgroundColor: 'rgb(255, 99, 132)',
            borderColor: 'rgb(255, 99, 132)',
            data: [0, 10, 5, 2, 20, 30, 45],
        }]
        };

        const config = {
        type: 'bar',
        data: data,
        options: {}
        };
</script>

    <script>
            const myChart = new Chart(
            document.getElementById('myChart'),
            config
            );
    </script>


            </div>
        </div>
    </div>
</x-app-layout>

