<x-app-layout>
    <div class="container mx-auto py-20">
        <h1 class="text-3xl font-bold mb-4 text-red-600">Confirmación de Compra</h1>
        <div class="bg-white rounded-lg shadow-lg p-6">
            <h2 class="text-2xl font-bold mb-4 text-red-600">Detalles del Paquete</h2>
            <ul class="list-disc pl-5 mb-4 text-black-500">
                <li><strong>Lugar de partida:</strong> {{ $packageDetails['departure'] }}</li>
                <li><strong>Destino:</strong> {{ $packageDetails['destination'] }}</li>
                <li><strong>Rango de fechas:</strong> {{ $packageDetails['start_date'] }} a {{ $packageDetails['end_date'] }}</li>
                <li><strong>Invitados:</strong> {{ $packageDetails['guests'] }}</li>
            </ul>
            <div class="text-right">
                <a href="{{ route('payment.card') }}" class="mt-4 px-6 py-2 bg-red-600 text-white rounded-full font-semibold hover:bg-red-700">Siguiente</a>
            </div>
        </div>
    </div>
</x-app-layout>
