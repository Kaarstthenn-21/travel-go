<!-- resources/views/card_payment.blade.php -->
<x-app-layout>
    <section class="mb-8">
        <div class="container mx-auto mt-20"> <!-- Cambié mt-5 a mt-20 para mayor margen superior -->
            <h1 class="text-3xl font-bold mb-4 text-orange-600">Datos de la Tarjeta</h1>
            <div class="bg-white rounded-lg shadow-lg p-6">
                <div class="flex items-center mb-4">
                    <img src="https://content-us-2.content-cms.com/9b3f67ef-5a9f-4acc-8ce8-bcc27fa681c7/dxdam/e0/e0f60b85-f1d0-4b15-91ce-0eb383551415/img_tc-visa-oro_2x-min.png?t=1700002300319" alt="Tarjeta de Crédito" class="w-1/3 rounded-lg shadow-md">
                    <div class="ml-4 w-2/3">
                        <div class="mb-4">
                            <label class="block text-gray-700">Nombre en la Tarjeta</label>
                            <input type="text" name="card_name" placeholder="Nombre en la tarjeta" class="w-full px-3 py-2 border rounded-lg">
                        </div>
                        <div class="mb-4">
                            <label class="block text-gray-700">Número de la Tarjeta</label>
                            <input type="text" name="card_number" placeholder="Número de la tarjeta" class="w-full px-3 py-2 border rounded-lg">
                        </div>
                        <div class="mb-4 grid grid-cols-2 gap-4">
                            <div>
                                <label class="block text-gray-700">Fecha de Expiración</label>
                                <input type="text" name="expiry_date" placeholder="MM/AA" class="w-full px-3 py-2 border rounded-lg">
                            </div>
                            <div>
                                <label class="block text-gray-700">CVV</label>
                                <input type="text" name="cvv" placeholder="CVV" class="w-full px-3 py-2 border rounded-lg">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-right">
                    <button type="submit" class="mt-4 px-6 py-2 bg-red-600 text-white rounded-full font-semibold hover:bg-red-700">Pagar</button>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
