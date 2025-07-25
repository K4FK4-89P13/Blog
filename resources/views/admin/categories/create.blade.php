<x-layouts.admin>

    <div class="mb-4">
        <flux:breadcrumbs>
            <flux:breadcrumbs.item href="{{route('admin.dashboard')}}">Dashboard</flux:breadcrumbs.item>
            <flux:breadcrumbs.item href="{{route('admin.categories.index')}}">
                Categorías
            </flux:breadcrumbs.item>
            <flux:breadcrumbs.item>
                Nuevo
            </flux:breadcrumbs.item>
        </flux:breadcrumbs>

    </div>

    <form action="{{route('admin.categories.store')}}" method="POST" class="px-6 py-8 rounded-lg shadow-lg space-y-4">

        @csrf

        <flux:field>
            <flux:label>Username</flux:label>

            <flux:input name="name" value="{{old('name')}}" />

            <flux:error name="name" />
        </flux:field>

        <flux:button type="submit" variant="primary" class="mt-4">
            Guardar
        </flux:button>
    </form>

</x-layouts.admin>