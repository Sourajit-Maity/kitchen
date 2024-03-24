<x-admin-layout title="Recipe Management">
    <x-slot name="subHeader">
            <x-admin.sub-header headerTitle="{{ $recipe ? 'Edit' : 'Add' }} Recipe">
				<x-admin.breadcrumbs>
						<x-admin.breadcrumbs-item  value="Dashboard" href="{{ route('admin.dashboard') }}" />
						<x-admin.breadcrumbs-separator />
						<x-admin.breadcrumbs-item href="{{ route('recipe.index') }}" value="Recipe List" />
						<x-admin.breadcrumbs-separator />
						<x-admin.breadcrumbs-item  value="{{ $recipe ? 'Edit' : 'Add' }} Recipe" />

				</x-admin.breadcrumbs>
				<x-slot name="toolbar">	
				</x-slot>
			</x-admin.sub-header>
	</x-slot>
	<livewire:admin.recipe.recipe-create-edit :recipe="$recipe"/>
</x-admin-layout> 