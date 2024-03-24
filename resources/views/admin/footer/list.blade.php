<x-admin-layout title="Footer Management">
    <x-slot name="subHeader">
            <x-admin.sub-header headerTitle="Footer List">
				<x-admin.breadcrumbs>
						<x-admin.breadcrumbs-item href="{{ route('admin.dashboard') }}" value="Dashboard" />
						<x-admin.breadcrumbs-separator />
						<x-admin.breadcrumbs-item href="{{ route('footer.index') }}" value="Footer List" />
				</x-admin.breadcrumbs>

			    <x-slot name="toolbar" >
					
				</x-slot>
			</x-admin.sub-header>
    </x-slot>
	<livewire:admin.cms.footer-list/>
</x-admin-layout>