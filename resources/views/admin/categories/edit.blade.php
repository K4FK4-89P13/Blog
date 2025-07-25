<x-layouts.admin>

    <div class="mb-4">
        <flux:breadcrumbs>
            <flux:breadcrumbs.item href="{{route('admin.dashboard')}}">Dashboard</flux:breadcrumbs.item>
            <flux:breadcrumbs.item href="{{route('admin.categories.index')}}">
                Categorías
            </flux:breadcrumbs.item>
            <flux:breadcrumbs.item>
                Editar
            </flux:breadcrumbs.item>
        </flux:breadcrumbs>

    </div>

    <form action="{{route('admin.categories.update', $category)}}" method="POST" class="px-6 py-8 rounded-lg shadow-lg space-y-4">

        @csrf
        @method('PUT')

        <flux:field>
            <flux:label>Nombre</flux:label>

            <flux:input name="name" value="{{old('name', $category->name)}}" />

            <flux:error name="name" />
        </flux:field>

        <flux:button type="submit" variant="primary" class="mt-4">
            Guardar
        </flux:button>
    </form>

</x-layouts.admin>