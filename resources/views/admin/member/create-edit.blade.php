<x-admin-layout title="Registered Member Management">
    <x-slot name="subHeader">
            <x-admin.sub-header headerTitle="{{ $member ? 'Edit' : 'Add' }} Registered Member">
				<x-admin.breadcrumbs>
						<x-admin.breadcrumbs-item  value="Dashboard" href="{{ route('admin.dashboard') }}" />
						<x-admin.breadcrumbs-separator />
						<x-admin.breadcrumbs-item href="{{ route('registered-member.index') }}" value="Registered Member List" />
						<x-admin.breadcrumbs-separator />
						<x-admin.breadcrumbs-item  value="{{ $member ? 'Edit' : 'Add' }} Registered Member" />

				</x-admin.breadcrumbs>
				<x-slot name="toolbar">	
				</x-slot>
			</x-admin.sub-header>
	</x-slot>
	<livewire:admin.member.member-create-edit :member="$member"/>
</x-admin-layout> 