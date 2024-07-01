<!-- resources/views/admin/hotels/create.blade.php -->

<x-app-layout>
    <!-- Encabezado -->
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Panel de Administrador
        </h2>
    </x-slot>

    <!-- Contenido -->
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h2 class="text-2xl font-bold mb-4">Agregar Nuevo Hotel</h2>
                    <form action="{{ route('admin.hotels.store') }}" method="POST">
                        @csrf
                        <div class="mb-4">
                            <label for="name" class="block text-sm font-medium text-gray-700">Nombre del Hotel</label>
                            <input type="text" name="name" id="name" class="form-input rounded-md shadow-sm mt-1 block w-full" required>
                        </div>

                        <div class="mb-4">
                            <label for="description" class="block text-sm font-medium text-gray-700">Descripción</label>
                            <textarea name="description" id="description" rows="3" class="form-textarea rounded-md shadow-sm mt-1 block w-full" required></textarea>
                        </div>

                        <div class="mb-4">
                            <label for="price" class="block text-sm font-medium text-gray-700">Precio por Noche</label>
                            <input type="number" name="price" id="price" class="form-input rounded-md shadow-sm mt-1 block w-full" required>
                        </div>

                        <div class="mb-4">
                            <label for="image_url" class="block text-sm font-medium text-gray-700">URL de la Imagen</label>
                            <input type="text" name="image_url" id="image_url" class="form-input rounded-md shadow-sm mt-1 block w-full" required>
                        </div>

                        <!-- Agrega más campos según tus necesidades -->

                        <div class="flex items-center justify-end mt-4">
                            <button type="submit" class="btn btn-primary">Guardar Hotel</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
