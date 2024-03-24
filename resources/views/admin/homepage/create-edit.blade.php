<x-admin-layout title="Homepage Management">
    <x-slot name="subHeader">
            <x-admin.sub-header headerTitle="{{ $home ? 'Edit' : 'Add' }} Country">
				<x-admin.breadcrumbs>
						<x-admin.breadcrumbs-item  value="Dashboard" href="{{ route('admin.dashboard') }}" />
						<x-admin.breadcrumbs-separator />
					
						<x-admin.breadcrumbs-separator />
						<x-admin.breadcrumbs-item  value="{{ $home ? 'Edit' : 'Add' }} Homepage" />

				</x-admin.breadcrumbs>
				<x-slot name="toolbar">	
				</x-slot>
			</x-admin.sub-header>
	</x-slot>
	<livewire:admin.pages.home-page-edit :home="$home"/>
</x-admin-layout>