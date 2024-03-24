<x-admin-layout title="City Management">
    <x-slot name="subHeader">
            <x-admin.sub-header headerTitle="{{ $city ? 'Edit' : 'Add' }} Location">
				<x-admin.breadcrumbs>
						<x-admin.breadcrumbs-item  value="Dashboard" href="{{ route('admin.dashboard') }}" />
						<x-admin.breadcrumbs-separator />
						<x-admin.breadcrumbs-item href="{{ route('city.index') }}" value=" City List" />
						<x-admin.breadcrumbs-separator />
						<x-admin.breadcrumbs-item  value="{{ $city ? 'Edit' : 'Add' }} City" />

				</x-admin.breadcrumbs>
				<x-slot name="toolbar">	
				</x-slot>
			</x-admin.sub-header>
	</x-slot>
	<livewire:admin.city.city-create-edit :city="$city"/>
</x-admin-layout>