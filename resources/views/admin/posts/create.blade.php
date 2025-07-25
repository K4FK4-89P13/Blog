<x-layouts.admin>

    <div class="mb-4">
        <flux:breadcrumbs>
            <flux:breadcrumbs.item href="{{route('admin.dashboard')}}">Dashboard</flux:breadcrumbs.item>
            <flux:breadcrumbs.item href="{{route('admin.posts.index')}}">
                Posts
            </flux:breadcrumbs.item>
            <flux:breadcrumbs.item>
                Nuevo
            </flux:breadcrumbs.item>
        </flux:breadcrumbs>

    </div>

    <form action="{{route('admin.posts.store')}}" method="POST" class="px-6 py-8 rounded-lg shadow-lg space-y-4">

        @csrf

        <flux:field>
            <flux:input name="title" label="Título" value="{{old('title')}}" oninput="string_to_slug(this.value, '#slug')" />
            <flux:input name="slug" id="slug" label="Slug" value="{{old('slug')}}" />

            <flux:select label="Categoría" name="category_id" placeholder="Choose industry...">
                @foreach ($categories as $category)
                    <flux:select.option value="{{$category->id}}" :selected="$category->id == old('category_id')">
                        {{$category->name}}
                    </flux:select.option>
                @endforeach                
            </flux:select>

            <flux:error name="name" />
        </flux:field>

        <flux:button type="submit" variant="primary" class="mt-4">
            Guardar
        </flux:button>
    </form>


</x-layouts.admin>