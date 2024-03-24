<x-admin-layout title="Recipe Management">
    <x-slot name="subHeader">
            <x-admin.sub-header headerTitle="Recipe List">
				<x-admin.breadcrumbs>
						<x-admin.breadcrumbs-item href="{{ route('admin.dashboard') }}" value="Dashboard" />
						<x-admin.breadcrumbs-separator />
						<x-admin.breadcrumbs-item href="{{ route('recipe.index') }}" value="Recipe List" />
				</x-admin.breadcrumbs>

			    <x-slot name="toolbar" >
					<a href="{{route('recipe.create')}}" class="btn btn-brand btn-elevate btn-icon-sm">
						<i class="la la-plus"></i>
						Add New Recipe
					</a>
				</x-slot>
			</x-admin.sub-header>
    </x-slot>
	<livewire:admin.recipe.recipe-list/>
</x-admin-layout> 