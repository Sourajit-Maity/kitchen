<x-admin-layout title="Header Management">
    <x-slot name="subHeader">
            <x-admin.sub-header headerTitle="Header List">
				<x-admin.breadcrumbs>
						<x-admin.breadcrumbs-item href="{{ route('admin.dashboard') }}" value="Dashboard" />
						<x-admin.breadcrumbs-separator />
						<x-admin.breadcrumbs-item href="{{ route('header.index') }}" value="Header List" />
				</x-admin.breadcrumbs>

				<x-slot name="toolbar" >
					
				</x-slot>
			</x-admin.sub-header>
    </x-slot>
	<livewire:admin.cms.header-list/>
</x-admin-layout>