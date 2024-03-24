<x-admin-layout title="Recipe Category Management">
    <x-slot name="subHeader">
            <x-admin.sub-header headerTitle="Recipe Category List">
				<x-admin.breadcrumbs>
						<x-admin.breadcrumbs-item href="{{ route('admin.dashboard') }}" value="Dashboard" />
						<x-admin.breadcrumbs-separator />
						<x-admin.breadcrumbs-item href="{{ route('categoryrecipe.index') }}" value="Recipe Category List" />
				</x-admin.breadcrumbs>

			    <x-slot name="toolbar" >
					<a href="{{route('categoryrecipe.create')}}" class="btn btn-brand btn-elevate btn-icon-sm">
						<i class="la la-plus"></i>
						Add New Recipe Category
					</a>
				</x-slot>
			</x-admin.sub-header>
    </x-slot>
	<livewire:admin.recipe-category.recipe-list/>
</x-admin-layout>