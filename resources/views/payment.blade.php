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

            <!-- Formulario de pago con Stripe -->
            <form action="{{ route('payment.process') }}" method="POST" id="payment-form">
                @csrf
                <div id="card-element">
                    <!-- Stripe Elements Placeholder -->
                </div>
                <button id="card-button" type="submit" class="mt-4 px-6 py-2 bg-red-600 text-white rounded-full font-semibold hover:bg-red-700">Pagar</button>
            </form>
        </div>
    </div>
</x-app-layout>

<script src="https://js.stripe.com/v3/"></script>
<script>
    var stripe = Stripe('{{ config('services.stripe.key') }}');
    var elements = stripe.elements();
    var cardElement = elements.create('card');
    cardElement.mount('#card-element');

    var cardButton = document.getElementById('card-button');
    var form = document.getElementById('payment-form');

    form.addEventListener('submit', function(event) {
        event.preventDefault();
        stripe.confirmCardPayment("{{ $clientSecret }}", {
            payment_method: {
                card: cardElement,
            }
        }).then(function(result) {
            if (result.error) {
                // Mostrar mensaje de error al usuario
                console.log(result.error.message);
            } else {
                // Mostrar mensaje de éxito
                showSuccessMessage();
            }
        });
    });

    function showSuccessMessage() {
        // Crear un div para el mensaje de éxito
        var successMessage = document.createElement('div');
        successMessage.textContent = 'Tu pago ha sido procesado con éxito. ¡Gracias por tu compra!';
        successMessage.classList.add('success-message'); // Agregar una clase para estilizar el mensaje si es necesario

        // Estilo para el mensaje de éxito
        successMessage.style.position = 'fixed';
        successMessage.style.top = '50%';
        successMessage.style.left = '50%';
        successMessage.style.transform = 'translate(-50%, -50%)';
        successMessage.style.backgroundColor = '#4CAF50';
        successMessage.style.color = 'white';
        successMessage.style.padding = '20px';
        successMessage.style.borderRadius = '10px';
        successMessage.style.boxShadow = '0 4px 8px rgba(0, 0, 0, 0.1)';
        successMessage.style.zIndex = '1000'; // Asegurar que esté encima de otros elementos

        // Agregar el mensaje al cuerpo del documento
        document.body.appendChild(successMessage);

        // Quitar el mensaje después de unos segundos (opcional)
        setTimeout(function() {
            successMessage.remove();
        }, 5000); // Remover el mensaje después de 5 segundos
    }
</script>
