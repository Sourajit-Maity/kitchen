<x-admin-layout title="FAQ Management">
    <x-slot name="subHeader">
            <x-admin.sub-header headerTitle="FAQ List">
				<x-admin.breadcrumbs>
						<x-admin.breadcrumbs-item href="{{ route('admin.dashboard') }}" value="Dashboard" />
						<x-admin.breadcrumbs-separator />
						<x-admin.breadcrumbs-item href="{{ route('faq-master.index') }}" value="FAQ List" />
				</x-admin.breadcrumbs>

			    <x-slot name="toolbar" >
					<a href="{{route('faq-master.create')}}" class="btn btn-brand btn-elevate btn-icon-sm">
						<i class="la la-plus"></i>
						Add New FAQ
					</a>
				</x-slot>
			</x-admin.sub-header>
    </x-slot>
	<livewire:admin.faq-master.faq-master-list/>
</x-admin-layout>