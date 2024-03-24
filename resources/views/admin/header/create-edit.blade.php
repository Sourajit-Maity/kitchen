<x-admin-layout title="Header Management">
    <x-slot name="subHeader">
            <x-admin.sub-header headerTitle="{{ $header ? 'Edit' : 'Add' }} Header">
				<x-admin.breadcrumbs>
						<x-admin.breadcrumbs-item  value="Dashboard" href="{{ route('admin.dashboard') }}" />
						<x-admin.breadcrumbs-separator />
						<x-admin.breadcrumbs-item href="{{ route('header.index') }}" value="Header List" />
						<x-admin.breadcrumbs-separator />
						<x-admin.breadcrumbs-item  value="{{ $header ? 'Edit' : 'Add' }} Header" />

				</x-admin.breadcrumbs>
				<x-slot name="toolbar">	
				</x-slot>
			</x-admin.sub-header>
	</x-slot>
	<livewire:admin.cms.header-create-edit :header="$header"/>
</x-admin-layout>