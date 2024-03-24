<x-admin-layout title="FAQ Management">
    <x-slot name="subHeader">
            <x-admin.sub-header headerTitle="{{ $recipeCategory ? 'Edit' : 'Add' }} FAQ Category">
				<x-admin.breadcrumbs>
						<x-admin.breadcrumbs-item  value="Dashboard" href="{{ route('admin.dashboard') }}" />
						<x-admin.breadcrumbs-separator />
						<x-admin.breadcrumbs-item href="{{ route('categoryrecipe.index') }}" value="FAQ List" />
						<x-admin.breadcrumbs-separator />
						<x-admin.breadcrumbs-item  value="{{ $recipeCategory ? 'Edit' : 'Add' }} FAQ Category" />

				</x-admin.breadcrumbs>
				<x-slot name="toolbar">	
				</x-slot>
			</x-admin.sub-header>
	</x-slot>
	<livewire:admin.recipe-category.recipe-create-edit :recipeCategory="$recipeCategory"/>
</x-admin-layout>