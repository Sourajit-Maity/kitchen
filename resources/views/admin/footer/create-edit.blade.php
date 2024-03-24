<x-admin-layout title="Footer Management">
    <x-slot name="subHeader">
            <x-admin.sub-header headerTitle="{{ $footer ? 'Edit' : 'Add' }} Footer">
				<x-admin.breadcrumbs>
						<x-admin.breadcrumbs-item  value="Dashboard" href="{{ route('admin.dashboard') }}" />
						<x-admin.breadcrumbs-separator />
						<x-admin.breadcrumbs-item href="{{ route('footer.index') }}" value="Footer List" />
						<x-admin.breadcrumbs-separator />
						<x-admin.breadcrumbs-item  value="{{ $footer ? 'Edit' : 'Add' }} Footer" />

				</x-admin.breadcrumbs>
				<x-slot name="toolbar">	
				</x-slot>
			</x-admin.sub-header>
	</x-slot>
	<livewire:admin.cms.footer-create-edit :footer="$footer"/>
</x-admin-layout>