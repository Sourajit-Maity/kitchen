<x-admin-layout title="Registered Member Management">
    <x-slot name="subHeader">
            <x-admin.sub-header headerTitle="Registered Member List">
				<x-admin.breadcrumbs>
						<x-admin.breadcrumbs-item href="{{ route('admin.dashboard') }}" value="Dashboard" />
						<x-admin.breadcrumbs-separator />
						<x-admin.breadcrumbs-item href="{{ route('registered-member.index') }}" value="Registered Member List" />
				</x-admin.breadcrumbs>

			    <x-slot name="toolbar" >
					<a href="{{route('registered-member.create')}}" class="btn btn-brand btn-elevate btn-icon-sm">
						<i class="la la-plus"></i>
						Add New Registered Member
					</a>
				</x-slot>
			</x-admin.sub-header>
    </x-slot>
	<livewire:admin.member.member-list/>
</x-admin-layout> 